<?php
defined( '_VALID_MOS' ) or die( 'Прямой доступ запрещен.' );
/**
*
* @version $Id: console.php,v 1.2 2005/11/09 20:55:04 soeren_nb Exp $
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
 * $Header: /cvsroot/virtuemart/virtuemart/classes/Log/console.php,v 1.2 2005/11/09 20:55:04 soeren_nb Exp $
 *
 * @version $ Revision: 1.21 $
 * @package Log
 */

/**
 * Класс Log_console - реализация класса описывающий лог::
 * абстрактный класс выводящий сообщения в консоль.
 * 
 * @author  Йон Периш <jon@php.net>
 * @since   Log 1.1
 * @package Log
 *
 * @example console.php     Использует обработчик консоли.
 */
class Log_console extends vmLog
{
    /**
     * Обработка текущего выводящего потока.
     * @var resource
     * @access частный
     */
    var $_stream = STDOUT;

    /**
     * Флаг буфферизации
     * @var string
     * @access частный
     */
    var $_buffering = false;

    /**
     * Строка буфера
     * @var string
     * @access частный
     */
    var $_buffer = '';

    /**
     * Строка формата
     * @var string
     * @access частный
     */
    var $_lineFormat = '%1$s %2$s [%3$s] %4$s';

    /**
     * Строка формата времени для функции
     * strftime().  Используется текущая локаль
     * @var string
     * @access частный
     */
    var $_timeFormat = '%b %d %H:%M:%S';

    /**
     * Хеш форматов ключей
     * @var array
     * @access частный
     */
    var $_formatMap = array('%{timestamp}'  => '%1$s',
                            '%{ident}'      => '%2$s',
                            '%{priority}'   => '%3$s',
                            '%{message}'    => '%4$s',
                            '%\{'           => '%%{');

    /**
     * Конструктор  Log_console object.
     * 
     * @param string $name     Игнорируется
     * @param string $ident    Строка идентификации
     * @param array  $conf     Массив конфигурации
     * @param int    $level    Уровень сообщений лога
     * @access публичный
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
         * Если используем буфферизацию, то нужно зарегистрировать функцию,
         * которая будет собирать данные в буфер.
         */
        if ($this->_buffering) {
            register_shutdown_function(array(&$this, '_Log_console'));
        }
    }

    /**
     * Деструктор
     */
    function _Log_console()
    {
        $this->close();
    }

    /**
     * Закрывает выходной поток.
     *
     * В результате вызываем flush().
     *
     * @access публичный
     * @since Log 1.9.0
     */
    function close()
    {
        $this->flush();
    }

    /**
     * Перенаправляем все данные из буфера в выходной поток
     *
     * @access публичный
     * @since Log 1.8.2
     */
    function flush()
    {
        /*
         * Если включена буферизация, выводим все из буфера в выходной поток
         *
         */
        if ($this->_buffering && (strlen($this->_buffer) > 0)) {
            fwrite($this->_stream, $this->_buffer);
            $this->_buffer = '';
        }
 
        return fflush($this->_stream);
    }

    /**
     * Пишем в консоль  $message . Также проводим обработку этого сообщения
     * если зарегистированы какие либо наблюдатели Log_observer для этого лога.
     * 
     * @param mixed  $message    Строка, содержащая сообщения лога.
     * @param string $priority Приоритет сообщения.  Доступные
     *                  значения: PEAR_LOG_EMERG, PEAR_LOG_ALERT,
     *                  PEAR_LOG_CRIT, PEAR_LOG_ERR, PEAR_LOG_WARNING,
     *                  PEAR_LOG_NOTICE, PEAR_LOG_INFO, и PEAR_LOG_DEBUG.
     * @return boolean  Возвращает True если функция выполнена успешно.
     * @access публичный
     */
    function log($message, $priority = null)
    {
        /* Если приоритет не задан, выставляем значение по умолчанию. */
        if ($priority === null) {
            $priority = $this->_priority;
        }

        /* Выходим раньше если приоритет выше разрешенного уровня записи в лог. */
        if (!$this->_isMasked($priority)) {
            return false;
        }

        /* Распаковываем сообщение. */
        $message = $this->_extractMessage($message);

        /* Создаем строку, содержащую полностью все данные строки лога. */
        $line = sprintf($this->_lineFormat, strftime($this->_timeFormat),
                $this->_ident, $this->priorityToString($priority),
                $message) . "\n";

        /*
         * Если буфферизация включена, добавляем эту строку к буферу.
         * Иначе сразу выводим.
         */
        if ($this->_buffering) {
            $this->_buffer .= $line;
        } else {
            fwrite($this->_stream, $line);
        }

        /* Сообщаем наблюдателям о текущем сообщении. */
        $this->_announce(array('priority' => $priority, 'message' => $message));

        return true;
    }

}
