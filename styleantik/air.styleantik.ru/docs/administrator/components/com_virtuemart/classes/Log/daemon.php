<?php
defined( '_VALID_MOS' ) or die( 'Прямой доступ запрещен.' );
/**
*
* @version $Id: daemon.php,v 1.2 2005/11/09 20:55:04 soeren_nb Exp $
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

// $Id: daemon.php,v 1.2 2005/11/09 20:55:04 soeren_nb Exp $

/**
 * Класс Log_daemon -  реализация класса описывающий лог::
 * абстрактный класс, который посылает сообщения в демон системный лога на UNIX-подобных машинах.
 * Этот класс использует протокол: http://www.ietf.org/rfc/rfc3164.txt
 *
 * @author  Барт ван дер Шанс <schans@dds.nl>
 * @version $ Ревизия: 1.2 $
 * @package Log
 */
class Log_daemon extends vmLog
{
    /**
     * Целое значение, содержащее уровень использования лога.
     * @var string
     */
    var $_name = LOG_DAEMON;

    /**
     * Переменная - указатель на сокет
     * @var resource
     */
    var $_socket;

    /**
     * IP адрес сервера
     * @see http://www.php.net/manual/en/transports.php
     * @var string
     */
    var $_ip = '127.0.0.1';

    /**
     * Протокл (tcp, udp, и т.д.)
     * @see http://www.php.net/manual/en/transports.php
     * @var string
     */
    var $_proto = 'udp';

    /**
     * Порт для соединения
     * @var int
     */
    var $_port = 514;

    /**
     * Максимальная длина в байтах
     * @var int
     */
    var $_maxsize = 4096;

    /**
     * Таймаут сокета в секундах
     * @var int
     */
    var $_timeout = 1;


    /**
     * Конструктор нового объекта syslog.
     *
     * @param string $name     Уровень сислога.
     * @param string $ident    Строка идентификации.
     * @param array  $conf     Массив конфигурации.
     * @param int    $maxLevel Максимальный уровень для записи в лог.
     * @access публичный
     */
    function Log_daemon($name, $ident = '', $conf = array(),
                        $level = PEAR_LOG_DEBUG)
    {
        /* Проверяем допусимо ли целое значение для $name. */
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
     * Деструктор
     *
     * @access частный
     */
    function _Log_daemon()
    {
        $this->close();
    }

    /**
     * Открывает соединение для сислога, если соединения уже не создано
     * 
     * @access публичный
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
     * Закрывает соединения с сислогом, если он открыт
     * @access публичный
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
     * Отправляет $message в текущее соединение с сислог демоном.  Вызывает
     * open() если необходимо. Также регистрирует сообщение для наблюдателей Log_observer
     * которые назначены в этом логе.
     *
     * @param string $message  Текстовое сообщение о соединении.
     * @param int $priority (необязательно) Приоритет сообщения.  Доступные 
     *                  варианты значений: LOG_EMERG, LOG_ALERT, LOG_CRIT,
     *                  LOG_ERR, LOG_WARNING, LOG_NOTICE, LOG_INFO,
     *                  and LOG_DEBUG.  The default is LOG_INFO.
     * @access публичный
     */
    function log($message, $priority = null)
    {
        /* Если приоритет не задан - устанавливаем значение по умолчанию. */
        if ($priority === null) {
            $priority = $this->_priority;
        }

        /* Выходим раньше если приоритет выше разрешенного уровня записи в лог. */
        if (!$this->_isMasked($priority)) {
            return false;
        }

        /* Если соединение не открыто и не может быть открыто возврат из функции. */
        if (!$this->_opened && !$this->open()) {
            return false;
        }

        /* Распаковываем сообщение. */
        $message = $this->_extractMessage($message);

        /* Set the facility level. */
        $facility_level = intval($this->_name) +
                          intval($this->_toSyslog($priority));

        /* Добавляем буфер */
        if (!empty($this->_ident)) {
            $message = $this->_ident . ' ' . $message;
        }

        /* Проверка длины сообщения. */
        if (strlen($message) > $this->_maxsize) {
            $message = substr($message, 0, ($this->_maxsize) - 10) . ' [...]';
        }

        /* Запись в сокет. */
        fwrite($this->_socket, '<' . $facility_level . '>' . $message . "\n");

        $this->_announce(array('priority' => $priority, 'message' => $message));
    }

    /**
     * Преобразует константы PEAR_LOG_* в константы сислог LOG_* .
     *
     * Эта функция существует, потому что под  Windows, не все константы LOG_*
     * имеют уникальные значения.  За исключением, PEAR_LOG_* здесь введены
     * для глобального использования, с преобразованием констант LOG_* с локального
     * на сислог драйвер.
     *
     * @param int $priority     PEAR_LOG_* значение для преобразование в LOG_* .
     *
     * @return  возращает представление LOG_* параметра $priority.
     *
     * @access частный
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

        /* Если задано неизваестное значение преобразуем в LOG_INFO. */
        if (!is_int($priority) || !in_array($priority, $priorities)) {
            return LOG_INFO;
        }

        return $priorities[$priority];
    }

}
