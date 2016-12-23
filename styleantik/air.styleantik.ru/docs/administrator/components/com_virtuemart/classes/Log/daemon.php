<?php
defined( '_VALID_MOS' ) or die( '������ ������ ��������.' );
/**
*
* @version $Id: daemon.php,v 1.2 2005/11/09 20:55:04 soeren_nb Exp $
* @package VirtueMart
* @subpackage Log
* @copyright ��������� ����� (C) 2004-2005 Soeren Eberhardt. ��� ����� ��������.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, �������� LICENSE.php
* VirtueMart - ��� ���������� ����������� �����������. ��� ������ ����� ���� �������� � ������������
* � ����� ������������ ���������GNU, � ��� ��������������� �������� � ���� ���
* �������� ����������� �� �����, ��������������� �� ����� ������������ �������� GNU ���
* ������ ��������� �������� ��� �������� ��� ������������ ����������� � �������� �������� �����.
* �������� /administrator/components/com_virtuemart/COPYRIGHT.php ��� ��������� ���������� �� ��������� ������ � �������.
*
* http://virtuemart.net
* 
*  ������� ��������� �������� ��� skynet80
* 
*  @copyright ��������� ����� (C) 2007 ��������� �������� � ������� ���� http://virtuemart.ru
*/

// $Id: daemon.php,v 1.2 2005/11/09 20:55:04 soeren_nb Exp $

/**
 * ����� Log_daemon -  ���������� ������ ����������� ���::
 * ����������� �����, ������� �������� ��������� � ����� ��������� ���� �� UNIX-�������� �������.
 * ���� ����� ���������� ��������: http://www.ietf.org/rfc/rfc3164.txt
 *
 * @author  ���� ��� ��� ���� <schans@dds.nl>
 * @version $ �������: 1.2 $
 * @package Log
 */
class Log_daemon extends vmLog
{
    /**
     * ����� ��������, ���������� ������� ������������� ����.
     * @var string
     */
    var $_name = LOG_DAEMON;

    /**
     * ���������� - ��������� �� �����
     * @var resource
     */
    var $_socket;

    /**
     * IP ����� �������
     * @see http://www.php.net/manual/en/transports.php
     * @var string
     */
    var $_ip = '127.0.0.1';

    /**
     * ������� (tcp, udp, � �.�.)
     * @see http://www.php.net/manual/en/transports.php
     * @var string
     */
    var $_proto = 'udp';

    /**
     * ���� ��� ����������
     * @var int
     */
    var $_port = 514;

    /**
     * ������������ ����� � ������
     * @var int
     */
    var $_maxsize = 4096;

    /**
     * ������� ������ � ��������
     * @var int
     */
    var $_timeout = 1;


    /**
     * ����������� ������ ������� syslog.
     *
     * @param string $name     ������� �������.
     * @param string $ident    ������ �������������.
     * @param array  $conf     ������ ������������.
     * @param int    $maxLevel ������������ ������� ��� ������ � ���.
     * @access ���������
     */
    function Log_daemon($name, $ident = '', $conf = array(),
                        $level = PEAR_LOG_DEBUG)
    {
        /* ��������� �������� �� ����� �������� ��� $name. */
        if (empty($name) || !is_int($name)) {
            $name = LOG_SYSLOG;
        }

        $this->_id = md5(microtime());
        $this->_name = $name;
        $this->_ident = $ident;
        $this->_mask = vmLog::UPTO($level);

        if (isset($conf['ip'])) {
            $this->_ip = $conf['ip'];
        }
        if (isset($conf['proto'])) {
            $this->_proto = $conf['proto'];
        }
        if (isset($conf['port'])) {
            $this->_port = $conf['port'];
        }
        if (isset($conf['maxsize'])) {
            $this->_maxsize = $conf['maxsize'];
        }
        if (isset($conf['timeout'])) {
            $this->_timeout = $conf['timeout'];
        }
        $this->_proto = $this->_proto . '://';

        register_shutdown_function(array(&$this, '_Log_daemon'));
    }

    /**
     * ����������
     *
     * @access �������
     */
    function _Log_daemon()
    {
        $this->close();
    }

    /**
     * ��������� ���������� ��� �������, ���� ���������� ��� �� �������
     * 
     * @access ���������
     */
    function open()
    {
        if (!$this->_opened) {
            $this->_opened = (bool)($this->_socket = @fsockopen(
                                                $this->_proto . $this->_ip,
                                                $this->_port,
                                                $errno,
                                                $errstr,
                                                $this->_timeout));
        }
        return $this->_opened;
    }

    /**
     * ��������� ���������� � ��������, ���� �� ������
     * @access ���������
     */
    function close()
    {
        if ($this->_opened) {
            $this->_opened = false;
            return fclose($this->_socket);
        }
        return true;
    }

    /**
     * ���������� $message � ������� ���������� � ������ �������.  ��������
     * open() ���� ����������. ����� ������������ ��������� ��� ������������ Log_observer
     * ������� ��������� � ���� ����.
     *
     * @param string $message  ��������� ��������� � ����������.
     * @param int $priority (�������������) ��������� ���������.  ��������� 
     *                  �������� ��������: LOG_EMERG, LOG_ALERT, LOG_CRIT,
     *                  LOG_ERR, LOG_WARNING, LOG_NOTICE, LOG_INFO,
     *                  and LOG_DEBUG.  The default is LOG_INFO.
     * @access ���������
     */
    function log($message, $priority = null)
    {
        /* ���� ��������� �� ����� - ������������� �������� �� ���������. */
        if ($priority === null) {
            $priority = $this->_priority;
        }

        /* ������� ������ ���� ��������� ���� ������������ ������ ������ � ���. */
        if (!$this->_isMasked($priority)) {
            return false;
        }

        /* ���� ���������� �� ������� � �� ����� ���� ������� ������� �� �������. */
        if (!$this->_opened && !$this->open()) {
            return false;
        }

        /* ������������� ���������. */
        $message = $this->_extractMessage($message);

        /* Set the facility level. */
        $facility_level = intval($this->_name) +
                          intval($this->_toSyslog($priority));

        /* ��������� ����� */
        if (!empty($this->_ident)) {
            $message = $this->_ident . ' ' . $message;
        }

        /* �������� ����� ���������. */
        if (strlen($message) > $this->_maxsize) {
            $message = substr($message, 0, ($this->_maxsize) - 10) . ' [...]';
        }

        /* ������ � �����. */
        fwrite($this->_socket, '<' . $facility_level . '>' . $message . "\n");

        $this->_announce(array('priority' => $priority, 'message' => $message));
    }

    /**
     * ����������� ��������� PEAR_LOG_* � ��������� ������ LOG_* .
     *
     * ��� ������� ����������, ������ ��� ���  Windows, �� ��� ��������� LOG_*
     * ����� ���������� ��������.  �� �����������, PEAR_LOG_* ����� �������
     * ��� ����������� �������������, � ��������������� �������� LOG_* � ����������
     * �� ������ �������.
     *
     * @param int $priority     PEAR_LOG_* �������� ��� �������������� � LOG_* .
     *
     * @return  ��������� ������������� LOG_* ��������� $priority.
     *
     * @access �������
     */
    function _toSyslog($priority)
    {
        static $priorities = array(
            PEAR_LOG_EMERG   => LOG_EMERG,
            PEAR_LOG_ALERT   => LOG_ALERT,
            PEAR_LOG_CRIT    => LOG_CRIT,
            PEAR_LOG_ERR     => LOG_ERR,
            PEAR_LOG_WARNING => LOG_WARNING,
            PEAR_LOG_NOTICE  => LOG_NOTICE,
            PEAR_LOG_INFO    => LOG_INFO,
            PEAR_LOG_DEBUG   => LOG_DEBUG
        );

        /* ���� ������ ������������ �������� ����������� � LOG_INFO. */
        if (!is_int($priority) || !in_array($priority, $priorities)) {
            return LOG_INFO;
        }

        return $priorities[$priority];
    }

}
