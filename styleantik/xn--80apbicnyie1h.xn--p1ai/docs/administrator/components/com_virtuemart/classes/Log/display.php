<?php
defined( '_VALID_MOS' ) or die( '������ ������ ��������.' );
/**
*
* @version $Id: display.php,v 1.9.2.1 2005/11/28 17:57:36 soeren_nb Exp $
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
 * $Header: /cvsroot/virtuemart/virtuemart/classes/Log/display.php,v 1.9.2.1 2005/11/28 17:57:36 soeren_nb Exp $
 *
 * @version $ �������: 1.8 $
 * @package Log
 */

/**
 * ����� Log_daemon -  ���������� ������ ����������� ���::
 * ����������� ����� ������� �������� ��������� ����� ��� �  PHP.
 * ��� ����� ���� �������, ������ ��� ����� �� ����������� PEAR::setErrorHandling � ������
 * PEAR_ERROR_CALLBACK ��������� �� ������� �� ������������ ������������ 
 * PHP .
 *
 * @author  ��� ������� <pusher@inaco.ru>
 * @since   Log 1.8.0
 * @package Log
 *
 * @example display.php     ������������� ����������� �������.
 */
class Log_display extends vmLog
{

    /**
     * �������, �������� ������ ������.
     * @var string
     * @access �������
     */
    var $_linebreak = "<br />\n";
    
	/**
     * ��������� �����������
     * @var boolean
     * @access �������
     */
    var $_buffering = true;
    
    /**
     * ����� ���������
     *
     * @var array
     * @access �������
     */
    var $_messages = array();
    
    /**
     * ���������� ��������� � ������
     * @var int
     */
    var $_count = 0;
    
    /**
     * ����������� ������� Log_display .
     *
     * @param string $name     ������������.
     * @param string $ident    ������ �������������.
     * @param array  $conf     ������ ������������.
     * @param int    $level    ����������� ��������� ������� ���������.
     * @access ���������
     */
    function Log_display($name = '', $ident = '', $conf = array(),
                         $level = PEAR_LOG_TIP)
    {
        $this->_id = md5(microtime());
        $this->_ident = $ident;
        $this->_mask = vmLog::UPTO($level);

        if (isset($conf['linebreak'])) {
            $this->_linebreak = $conf['linebreak'];
        }
        
        if (isset($conf['buffering'])) {
            $this->_buffering = $conf['buffering'];
        }
    }

    /**
     * ������� $message � ��������� �������. ����� ������������ 
     * ��������� � ������������ Log_observer .
     *
     * @param mixed  $message    ������ ��������� ����.
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

        /* ������� ������ ���� ��������� ���� ������������ ������ ������ � ���. */
        if (!$this->_isMasked($priority)) {
            return false;
        }
        $this->_ticker++;
        
		if( $priority >= PEAR_LOG_ERR ) {
			defined( '_VM_LOG_ERRORS' ) or define( '_VM_LOG_ERRORS', 1);
		}
       /* ������������� ���������. */
        $message = $this->_extractMessage($message);

        // Store the log message and its priority
    	$this->_messages[$this->_count]['priority'] = $priority;
    	$this->_messages[$this->_count]['message'] = $message;
    	$this->_count++;
        	
        if( !$this->_buffering ) {
        	
        	$this->printLog();
        }
        /* ������������ ��������� ��� ������������. */
        $this->_announce(array('priority' => $priority, 'message' => $message));

        return true;
    }
    /**
     * ������ ��������� � ����������� �� ����������
     *
     * @param string $message
     * @param int $priority
     * @return  HTML ���
     */
    function formatOutput( $message, $priority) {
    	if( $priority >= PEAR_LOG_TIP) {
    		return '<div class="shop_tip">'. $message . '</div>';
    	}
    	elseif( $priority >= PEAR_LOG_DEBUG) {
    		return '<div class="shop_debug">'. $message . '</div>';
    	}
    	elseif( $priority >= PEAR_LOG_INFO) {
    		return '<div class="shop_info">'. $message . '</div>';
    	}
    	elseif( $priority >= PEAR_LOG_WARNING ) {
    		return '<div class="shop_warning">'. $message . '</div>';
    	}
    	elseif( $priority >= PEAR_LOG_ERR ) {
    		return '<div class="shop_error">'. $message . '</div>';
    	}
    	elseif( $priority >= PEAR_LOG_CRIT ) {
    		return '<div class="shop_critical">'. $message . '</div>';
    	}
    }
    /**
     * ��������� _messages ������ � �������� ��� ���������
     * @author Soeren Eberhardt
     */
	function printLog( $priority = null ) {
		$output = "";
		if( $this->_count > 10 && DEBUG) {
			// �������� � div�
			$output .= '<div style="width:90%; overflow:auto; height:150px;">';
		}
		foreach( $this->_messages as $message ) {
			if( ( $priority === null || $priority <= $message['priority'] )
				&& $message['priority'] !== PEAR_LOG_DEBUG
				|| ( $message['priority'] === PEAR_LOG_DEBUG && DEBUG == '1')) {
				$output .= $this->formatOutput(
			             '<b>' . ucfirst($this->priorityToString($message['priority'])) . '</b>: '.
			             nl2br(htmlspecialchars($message['message'])) 
			             . $this->_linebreak,
			             $message['priority']
			           );
			}
		}
		if( $this->_count > 10 ) {
			$output .= '</div>';
		}
		$this->_count = 0;
		$this->_messages = array();
		if( $output ) {
			echo $output .  $this->_linebreak;
		}
	}
}
