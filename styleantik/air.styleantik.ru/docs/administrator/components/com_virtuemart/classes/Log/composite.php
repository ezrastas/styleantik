<?php
defined( '_VALID_MOS' ) or die( '������ ������ ��������.' );
/**
*
* @version $Id: composite.php,v 1.2 2005/11/09 20:55:04 soeren_nb Exp $
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
 * $Header: /cvsroot/virtuemart/virtuemart/classes/Log/composite.php,v 1.2 2005/11/09 20:55:04 soeren_nb Exp $
 * $Horde: horde/lib/Log/composite.php,v 1.2 2000/06/28 21:36:13 jon Exp $
 *
 * @version $ �������: 1.26 $
 * @package Log
 */

/**
 * Log_composite:: ����� ��������� ����������� ���������, �������
 * ��������� ���������� ����������� Log ���������� �������� �������.
 *
 * @author  ��� �������� <chuck@horde.org>
 * @author  ��� ����� <jon@php.net>
 *
 * @since Horde 1.3
 * @since Log 1.0
 * @package Log
 *
 * @example composite.php   ���������� ����������� ����������.
 */
class Log_composite extends vmLog
{
    /**
     * ������ �������� ��� �������� Log, ������� ����� ��������
     * 
     *
     * @var array
     * @access �������
     */
    var $_children = array();


    /**
     * ����������� ������ ������������ ������� Log .
     *
     * @param boolean   $name       ���� �������� ������������.
     * @param boolean   $ident      ���� �������� ������������.
     * @param boolean   $conf       ���� �������� ������������.
     * @param boolean   $level      ���� �������� ������������.
     *
     * @access ���������
     */
    function Log_composite($name, $ident = '', $conf = array(),
                           $level = PEAR_LOG_DEBUG)
    {
        $this->_ident = $ident;
    }

    /**
     * ��������� �������� ����������.
     *
     * @access ���������
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
     * ��������� �������� ����������.
     *
     * @access ���������
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
     * ��������� ��� �������� �������� ����������.
     *
     * @access ���������
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
     * ���������� ���������� $message � $priority ������� ��������� ���������� ����� ���������.
     *
     * @param mixed     $message    ������ ��� ������, ���������� ��������� ��� ������ � ���.
     * @param string    $priority   (������������) ��������� ���������.
     *                              ��������� ��������: PEAR_LOG_EMERG,
     *                              PEAR_LOG_ALERT, PEAR_LOG_CRIT,
     *                              PEAR_LOG_ERR, PEAR_LOG_WARNING,
     *                              PEAR_LOG_NOTICE, PEAR_LOG_INFO, �
     *                              PEAR_LOG_DEBUG.
     *
     * @return boolean  ���������� True ���� ��������� �������� � ���.
     *
     * @access ���������
     */
    function log($message, $priority = null)
    {
        /* ���� ��������� �� �����, ���������� �� ���������. */
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
     * ���������� true ���� ��������.
     *
     * @return boolean  ���� ����������� ����� ���������� True.
     *
     * @access ���������
     */
    function isComposite()
    {
        return true;
    }

    /**
     * ������������� ������ ����������������� ������ ��� ���� �������� ����������� ������� ���������.
     *
     * @param string    $ident      ����� ����������������� ������.
     *
     * @access ���������
     * @since  Log 1.6.7
     */
    function setIdent($ident)
    {
        /* �������� ������� ����� setIdent(), ����� �� ������������� ������. */
        parent::setIdent($ident);

        /* ... � ����� ������ setIdent() �������� ��� ���� �������� �����������. */
        foreach ($this->_children as $id => $child) {
            $this->_children[$id]->setIdent($ident);
        }
    }

    /**
     * ��������� ��������� Log � ������ �������� �����������.
     *
     * @param object    $child      ��������� Log ��� ����������.
     *
     * @return boolean  ���������� True ���� ��������� Log ��������� ��������.
     *
     * @access ���������
     */
    function addChild(&$child)
    {
        /* ������������� ��� ��� ������������� ��������� Log. */
        if (!is_a($child, 'Log')) {
            return false;
        }

        $this->_children[$child->_id] = &$child;

        return true;
    }

    /**
     * ������� ��������� Log �� ������ �������� �����������.
     *
     * @param object    $child      ��������� Log ��� ��������.
     *
     * @return boolean  ���������� True ���� ��������� Log ��������� ������.
     *
     * @access ���������
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
