<?php
defined( '_VALID_MOS' ) or die( '������ ������ ��������.' );
/**
*
* @version $Id: console.php,v 1.2 2005/11/09 20:55:04 soeren_nb Exp $
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

/**
 * $Header: /cvsroot/virtuemart/virtuemart/classes/Log/console.php,v 1.2 2005/11/09 20:55:04 soeren_nb Exp $
 *
 * @version $ Revision: 1.21 $
 * @package Log
 */

/**
 * ����� Log_console - ���������� ������ ����������� ���::
 * ����������� ����� ��������� ��������� � �������.
 * 
 * @author  ��� ����� <jon@php.net>
 * @since   Log 1.1
 * @package Log
 *
 * @example console.php     ���������� ���������� �������.
 */
class Log_console extends vmLog
{
    /**
     * ��������� �������� ���������� ������.
     * @var resource
     * @access �������
     */
    var $_stream = STDOUT;

    /**
     * ���� ������������
     * @var string
     * @access �������
     */
    var $_buffering = false;

    /**
     * ������ ������
     * @var string
     * @access �������
     */
    var $_buffer = '';

    /**
     * ������ �������
     * @var string
     * @access �������
     */
    var $_lineFormat = '%1$s %2$s [%3$s] %4$s';

    /**
     * ������ ������� ������� ��� �������
     * strftime().  ������������ ������� ������
     * @var string
     * @access �������
     */
    var $_timeFormat = '%b %d %H:%M:%S';

    /**
     * ��� �������� ������
     * @var array
     * @access �������
     */
    var $_formatMap = array('%{timestamp}'  => '%1$s',
                            '%{ident}'      => '%2$s',
                            '%{priority}'   => '%3$s',
                            '%{message}'    => '%4$s',
                            '%\{'           => '%%{');

    /**
     * �����������  Log_console object.
     * 
     * @param string $name     ������������
     * @param string $ident    ������ �������������
     * @param array  $conf     ������ ������������
     * @param int    $level    ������� ��������� ����
     * @access ���������
     */
    function Log_console($name, $ident = '', $conf = array(),
                         $level = PEAR_LOG_DEBUG)
    {
        $this->_id = md5(microtime());
        $this->_ident = $ident;
        $this->_mask = vmLog::UPTO($level);

        if (!empty($conf['stream'])) {
            $this->_stream = $conf['stream'];
        }

        if (isset($conf['buffering'])) {
            $this->_buffering = $conf['buffering'];
        }

        if (!empty($conf['lineFormat'])) {
            $this->_lineFormat = str_replace(array_keys($this->_formatMap),
                                             array_values($this->_formatMap),
                                             $conf['lineFormat']);
        }

        if (!empty($conf['timeFormat'])) {
            $this->_timeFormat = $conf['timeFormat'];
        }

        /*
         * ���� ���������� ������������, �� ����� ���������������� �������,
         * ������� ����� �������� ������ � �����.
         */
        if ($this->_buffering) {
            register_shutdown_function(array(&$this, '_Log_console'));
        }
    }

    /**
     * ����������
     */
    function _Log_console()
    {
        $this->close();
    }

    /**
     * ��������� �������� �����.
     *
     * � ���������� �������� flush().
     *
     * @access ���������
     * @since Log 1.9.0
     */
    function close()
    {
        $this->flush();
    }

    /**
     * �������������� ��� ������ �� ������ � �������� �����
     *
     * @access ���������
     * @since Log 1.8.2
     */
    function flush()
    {
        /*
         * ���� �������� �����������, ������� ��� �� ������ � �������� �����
         *
         */
        if ($this->_buffering && (strlen($this->_buffer) > 0)) {
            fwrite($this->_stream, $this->_buffer);
            $this->_buffer = '';
        }
 
        return fflush($this->_stream);
    }

    /**
     * ����� � �������  $message . ����� �������� ��������� ����� ���������
     * ���� ��������������� ����� ���� ����������� Log_observer ��� ����� ����.
     * 
     * @param mixed  $message    ������, ���������� ��������� ����.
     * @param string $priority ��������� ���������.  ���������
     *                  ��������: PEAR_LOG_EMERG, PEAR_LOG_ALERT,
     *                  PEAR_LOG_CRIT, PEAR_LOG_ERR, PEAR_LOG_WARNING,
     *                  PEAR_LOG_NOTICE, PEAR_LOG_INFO, � PEAR_LOG_DEBUG.
     * @return boolean  ���������� True ���� ������� ��������� �������.
     * @access ���������
     */
    function log($message, $priority = null)
    {
        /* ���� ��������� �� �����, ���������� �������� �� ���������. */
        if ($priority === null) {
            $priority = $this->_priority;
        }

        /* ������� ������ ���� ��������� ���� ������������ ������ ������ � ���. */
        if (!$this->_isMasked($priority)) {
            return false;
        }

        /* ������������� ���������. */
        $message = $this->_extractMessage($message);

        /* ������� ������, ���������� ��������� ��� ������ ������ ����. */
        $line = sprintf($this->_lineFormat, strftime($this->_timeFormat),
                $this->_ident, $this->priorityToString($priority),
                $message) . "\n";

        /*
         * ���� ������������ ��������, ��������� ��� ������ � ������.
         * ����� ����� �������.
         */
        if ($this->_buffering) {
            $this->_buffer .= $line;
        } else {
            fwrite($this->_stream, $line);
        }

        /* �������� ������������ � ������� ���������. */
        $this->_announce(array('priority' => $priority, 'message' => $message));

        return true;
    }

}
