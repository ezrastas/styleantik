<?php
defined( '_VALID_MOS' ) or die( '������ ������ ��������.' );
/**
*
* @version $Id: error_log.php,v 1.2 2005/11/09 20:55:04 soeren_nb Exp $
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
 * $Header: /cvsroot/virtuemart/virtuemart/classes/Log/error_log.php,v 1.2 2005/11/09 20:55:04 soeren_nb Exp $
 *
 * @version $ Revision: 1.7 $
 * @package Log
 */

/**
 * ����� Log_error_log -  ���������� ������ ����������� ���::
 * �����, ������� ���������� ��������� ��������� ������� PHP error_log() .
 *
 * @author  ��� ����� <jon@php.net>
 * @since   Log 1.7.0
 * @package Log
 *
 * @example error_log.php   ���������� error_log ����������.
 */
class Log_error_log extends vmLog
{
    /**
     * ��� ���� error_log() .
     * @var integer
     * @access �������
     */
    var $_type = PEAR_LOG_TYPE_SYSTEM;

    /**
     * ����������� ��� ���� �������� ������������.
     * @var string
     * @access �������
     */
    var $_destination = '';

    /**
     * �������������� ��������� ��� ������� mail(), ����� ������������ ���
     * PEAR_LOG_TYPE_MAIL .
     * @var string
     * @access �������
     */
    var $_extra_headers = '';

    /**
     * ����������� ������ ������� Log_error_log.
     *
     * @param string $name     ������������
     * @param string $ident    ������ ��������������
     * @param array  $conf     ������ ������������
     * @param int    $level    ����������� ��������� ������� ���������.
     * @access ���������
     */
    function Log_error_log($name, $ident = '', $conf = array(),
                           $level = PEAR_LOG_DEBUG)
    {
        $this->_id = md5(microtime());
        $this->_type = $name;
        $this->_ident = $ident;
        $this->_mask = vmLog::UPTO($level);

        if (!empty($conf['destination'])) {
            $this->_destination = $conf['destination'];
        }
        if (!empty($conf['extra_headers'])) {
            $this->_extra_headers = $conf['extra_headers'];
        }
    }

    /**
     * ���������� ��������� $message ��������� ������� PHP error_log() . ����� ������������ 
     * ��������� � ������������ Log_observer .
     *
     * @param mixed  $message   ������ ��������� ����.
   * @param string $priority ��������� ���������.  ���������� ��������:
     *                   PEAR_LOG_EMERG, PEAR_LOG_ALERT,
     *                  PEAR_LOG_CRIT, PEAR_LOG_ERR, PEAR_LOG_WARNING,
     *                  PEAR_LOG_NOTICE, PEAR_LOG_INFO, and PEAR_LOG_DEBUG.
     * @return boolean  ���������� True ���� ������� ��������� �������.
     * @access ���������
     */
    function log($message, $priority = null)
    {
        /* ���� ��������� �� ����� ������������� �������� �� ���������. */
        if ($priority === null) {
            $priority = $this->_priority;
        }

        /* Abort early if the priority is above the maximum logging level. */
        if (!$this->_isMasked($priority)) {
            return false;
        }

         /* ������� ������ ���� ��������� ���� ������������ ������ ������ � ���. */
        $message = $this->_extractMessage($message);

        $success = error_log($this->_ident . ': ' . $message, $this->_type,
                             $this->_destination, $this->_extra_headers);

        $this->_announce(array('priority' => $priority, 'message' => $message));

        return $success;
    }

}
