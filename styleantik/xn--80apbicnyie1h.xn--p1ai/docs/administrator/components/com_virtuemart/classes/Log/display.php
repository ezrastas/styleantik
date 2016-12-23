<?php
defined( '_VALID_MOS' ) or die( 'Прямой доступ запрещен.' );
/**
*
* @version $Id: display.php,v 1.9.2.1 2005/11/28 17:57:36 soeren_nb Exp $
* @package VirtueMart
* @subpackage Log
* @copyright Авторские права (C) 2004-2005 Soeren Eberhardt. Все права защищены.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, смотреть LICENSE.php
* VirtueMart - это бесплатное программное обеспечение. Эта версия могла быть изменена в соответствии
* с Общей Общественной ЛицензиейGNU, и при распространении включает в себя или
* является производной от работ, лицензированных по Общей Общественной Лицензии GNU или
* других есплатных лицензий или лицензий для программного обеспечения с открытым исходным кодом.
* Смотрите /administrator/components/com_virtuemart/COPYRIGHT.php для получения информации об авторских правах и деталей.
*
* http://virtuemart.net
* 
*  ПЕРЕВОД Федоринов Григорий ака skynet80
* 
*  @copyright Авторские права (C) 2007 Федоринов Григорий и Команда ВМРЕ http://virtuemart.ru
*/

/**
 * $Header: /cvsroot/virtuemart/virtuemart/classes/Log/display.php,v 1.9.2.1 2005/11/28 17:57:36 soeren_nb Exp $
 *
 * @version $ Ревизия: 1.8 $
 * @package Log
 */

/**
 * Класс Log_daemon -  реализация класса описывающий лог::
 * абстрактный класс который сообщает сообщения также как и  PHP.
 * Это может быть полезно, потому что когда вы используете PEAR::setErrorHandling в режиме
 * PEAR_ERROR_CALLBACK сообщения об ошибках не показываются обработчикам 
 * PHP .
 *
 * @author  Пол Янченко <pusher@inaco.ru>
 * @since   Log 1.8.0
 * @package Log
 *
 * @example display.php     Использование обработчика дисплей.
 */
class Log_display extends vmLog
{

    /**
     * Символы, служащии концом строки.
     * @var string
     * @access частный
     */
    var $_linebreak = "<br />\n";
    
	/**
     * Включение буферизации
     * @var boolean
     * @access частный
     */
    var $_buffering = true;
    
    /**
     * Буфер сообщений
     *
     * @var array
     * @access частный
     */
    var $_messages = array();
    
    /**
     * Количество сообщений в буфере
     * @var int
     */
    var $_count = 0;
    
    /**
     * Конструктор объекта Log_display .
     *
     * @param string $name     Игнорируется.
     * @param string $ident    Строка идентификации.
     * @param array  $conf     Массив конфигурации.
     * @param int    $level    Максимально выводимый уровень сообщений.
     * @access публичный
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
     * Выводит $message в текстовый браузер. Также регистрирует 
     * сообщения в наблюдателях Log_observer .
     *
     * @param mixed  $message    Строка сообщения лога.
     * @param string $priority Приоритет сообщения.  Допустимые значения:
     *                   PEAR_LOG_EMERG, PEAR_LOG_ALERT,
     *                  PEAR_LOG_CRIT, PEAR_LOG_ERR, PEAR_LOG_WARNING,
     *                  PEAR_LOG_NOTICE, PEAR_LOG_INFO, and PEAR_LOG_DEBUG.
     * @return boolean  Возвращает True если функция выполнена успешно.
     * @access публичный
     */
    function log($message, $priority = null)
    {
        /* Если приоритет не задан устанавливаем значение по умолчанию. */
        if ($priority === null) {
            $priority = $this->_priority;
        }

        /* Выходим раньше если приоритет выше разрешенного уровня записи в лог. */
        if (!$this->_isMasked($priority)) {
            return false;
        }
        $this->_ticker++;
        
		if( $priority >= PEAR_LOG_ERR ) {
			defined( '_VM_LOG_ERRORS' ) or define( '_VM_LOG_ERRORS', 1);
		}
       /* Распаковываем сообщение. */
        $message = $this->_extractMessage($message);

        // Store the log message and its priority
    	$this->_messages[$this->_count]['priority'] = $priority;
    	$this->_messages[$this->_count]['message'] = $message;
    	$this->_count++;
        	
        if( !$this->_buffering ) {
        	
        	$this->printLog();
        }
        /* Регистрируем сообщение для наблюдателей. */
        $this->_announce(array('priority' => $priority, 'message' => $message));

        return true;
    }
    /**
     * Формат сообщения в зависимости от приоритета
     *
     * @param string $message
     * @param int $priority
     * @return  HTML код
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
     * Заполняем _messages массив и печатаем все сообщения
     * @author Soeren Eberhardt
     */
	function printLog( $priority = null ) {
		$output = "";
		if( $this->_count > 10 && DEBUG) {
			// Помещаем в divа
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
