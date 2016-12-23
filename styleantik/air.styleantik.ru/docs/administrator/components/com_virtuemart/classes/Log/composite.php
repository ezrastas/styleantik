<?php
defined( '_VALID_MOS' ) or die( 'Прямой доступ запрещен.' );
/**
*
* @version $Id: composite.php,v 1.2 2005/11/09 20:55:04 soeren_nb Exp $
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
 * $Header: /cvsroot/virtuemart/virtuemart/classes/Log/composite.php,v 1.2 2005/11/09 20:55:04 soeren_nb Exp $
 * $Horde: horde/lib/Log/composite.php,v 1.2 2000/06/28 21:36:13 jon Exp $
 *
 * @version $ Ревизия: 1.26 $
 * @package Log
 */

/**
 * Log_composite:: класс описывает Композитные заготовки, которые
 * позволяют нескольким экземлпярам Log записывать некторые события.
 *
 * @author  Чак Хагенбах <chuck@horde.org>
 * @author  Йон Периш <jon@php.net>
 *
 * @since Horde 1.3
 * @since Log 1.0
 * @package Log
 *
 * @example composite.php   Используем композитный обработчик.
 */
class Log_composite extends vmLog
{
    /**
     * Массив содержит все элементы Log, которые будут сообщены
     * 
     *
     * @var array
     * @access частный
     */
    var $_children = array();


    /**
     * Конструктор нового композитного объекта Log .
     *
     * @param boolean   $name       Этот параметр игнорируется.
     * @param boolean   $ident      Этот параметр игнорируется.
     * @param boolean   $conf       Этот параметр игнорируется.
     * @param boolean   $level      Этот параметр игнорируется.
     *
     * @access публичный
     */
    function Log_composite($name, $ident = '', $conf = array(),
                           $level = PEAR_LOG_DEBUG)
    {
        $this->_ident = $ident;
    }

    /**
     * Открывает дочерние соединения.
     *
     * @access публичный
     */
    function open()
    {
        if (!$this->_opened) {
            foreach ($this->_children as $id => $child) {
                $this->_children[$id]->open();
            }
            $this->_opened = true;
        }
    }

    /**
     * Закрывает дочерние экземпляры.
     *
     * @access публичный
     */
    function close()
    {
        if ($this->_opened) {
            foreach ($this->_children as $id => $child) {
                $this->_children[$id]->close();
            }
            $this->_opened = false;
        }
    }

    /**
     * Обновляет все открытые дочерние соединения.
     *
     * @access публичный
     * @since Log 1.8.2
     */
    function flush()
    {
        if ($this->_opened) {
            foreach ($this->_children as $id => $child) {
                $this->_children[$id]->flush();
            }
        }
    }

    /**
     * Пересылает переменные $message и $priority каждому дочернему экземпляру этого композита.
     *
     * @param mixed     $message    Строка или объект, содержащий сообщение для записи в лог.
     * @param string    $priority   (необязателен) Приоритет сообщения.
     *                              Доступные значения: PEAR_LOG_EMERG,
     *                              PEAR_LOG_ALERT, PEAR_LOG_CRIT,
     *                              PEAR_LOG_ERR, PEAR_LOG_WARNING,
     *                              PEAR_LOG_NOTICE, PEAR_LOG_INFO, и
     *                              PEAR_LOG_DEBUG.
     *
     * @return boolean  Возвращает True если сообщение записано в лог.
     *
     * @access публичный
     */
    function log($message, $priority = null)
    {
        /* Если приоритет не задан, выставляем по умолчанию. */
        if ($priority === null) {
            $priority = $this->_priority;
        }

        foreach ($this->_children as $id => $child) {
            $this->_children[$id]->log($message, $priority);
        }

        $this->_announce(array('priority' => $priority, 'message' => $message));

        return true;
    }

    /**
     * Возвращает true если композит.
     *
     * @return boolean  Если композитный класс возвращает True.
     *
     * @access публичный
     */
    function isComposite()
    {
        return true;
    }

    /**
     * Устанавливает данную идентификационную строку для всех дочерних экземпляров данного композита.
     *
     * @param string    $ident      Новая идентификационная строка.
     *
     * @access публичный
     * @since  Log 1.6.7
     */
    function setIdent($ident)
    {
        /* Вызываем базовый метод setIdent(), прямо из родительского класса. */
        parent::setIdent($ident);

        /* ... и когда вызван setIdent() вызываем для всех дочерних экземпляров. */
        foreach ($this->_children as $id => $child) {
            $this->_children[$id]->setIdent($ident);
        }
    }

    /**
     * Добавляет экземпляр Log в список дочерних экземпляров.
     *
     * @param object    $child      Экземпляр Log для добавления.
     *
     * @return boolean  Возвращает True если экземпляр Log полностью добавлен.
     *
     * @access публичный
     */
    function addChild(&$child)
    {
        /* Удостоверимся что это действительно экземпляр Log. */
        if (!is_a($child, 'Log')) {
            return false;
        }

        $this->_children[$child->_id] = &$child;

        return true;
    }

    /**
     * Удаляет экземпляр Log из списка дочерних экземпляров.
     *
     * @param object    $child      Экземпляр Log для удаления.
     *
     * @return boolean  Возвращает True если экземпляр Log полностью удален.
     *
     * @access публичный
     */
    function removeChild($child)
    {
        if (!is_a($child, 'Log') || !isset($this->_children[$child->_id])) {
            return false;
        }

        unset($this->_children[$child->_id]);

        return true;
    }

}
