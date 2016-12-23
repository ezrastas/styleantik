<?php
defined( '_VALID_MOS' ) or die( 'Прямой доступ запрещен.' );
/**
*
* @version $Id: error_log.php,v 1.2 2005/11/09 20:55:04 soeren_nb Exp $
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
 * $Header: /cvsroot/virtuemart/virtuemart/classes/Log/error_log.php,v 1.2 2005/11/09 20:55:04 soeren_nb Exp $
 *
 * @version $ Revision: 1.7 $
 * @package Log
 */

/**
 * Класс Log_error_log -  реализация класса описывающая лог::
 * класс, который записывает сообщения используя функцию PHP error_log() .
 *
 * @author  Йон Периш <jon@php.net>
 * @since   Log 1.7.0
 * @package Log
 *
 * @example error_log.php   Использует error_log обработчик.
 */
class Log_error_log extends vmLog
{
    /**
     * Тип лога error_log() .
     * @var integer
     * @access частный
     */
    var $_type = PEAR_LOG_TYPE_SYSTEM;

    /**
     * Специфичное для типа значение наследования.
     * @var string
     * @access частный
     */
    var $_destination = '';

    /**
     * Дополнительные заголовки для функции mail(), когда используется тип
     * PEAR_LOG_TYPE_MAIL .
     * @var string
     * @access частный
     */
    var $_extra_headers = '';

    /**
     * Конструктор нового объекта Log_error_log.
     *
     * @param string $name     Игнорируется
     * @param string $ident    Строка имдентификации
     * @param array  $conf     Массив конфигурации
     * @param int    $level    Максимально выводимый уровень сообщений.
     * @access публичный
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
     * Записывает сообщения $message используя функцию PHP error_log() . Также регистрирует 
     * сообщения в наблюдателях Log_observer .
     *
     * @param mixed  $message   Строка сообщения лога.
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

        /* Abort early if the priority is above the maximum logging level. */
        if (!$this->_isMasked($priority)) {
            return false;
        }

         /* Выходим раньше если приоритет выше разрешенного уровня записи в лог. */
        $message = $this->_extractMessage($message);

        $success = error_log($this->_ident . ': ' . $message, $this->_type,
                             $this->_destination, $this->_extra_headers);

        $this->_announce(array('priority' => $priority, 'message' => $message));

        return $success;
    }

}
