<?php
/**
* @version $Id: toolbar.installer.html.php 4675 2006-08-23 16:55:24Z stingrey $
* @package Joomla RE
* @subpackage Installer
* @localized Авторские права (C) 2005 Joom.Ru - Русский дом Joomla!
* @copyright Авторские права (C) 2005 Open Source Matters. Все права защищены.
* @license Лицензия http://www.gnu.org/copyleft/gpl.html GNU/GPL, смотрите LICENSE.php
* Joomla! - свободное программное обеспечение. Эта версия может быть изменена
* в соответствии с Генеральной Общественной Лицензией GNU, поэтому возможно
* её дальнейшее распространение в составе результата работы, лицензированного
* согласно Генеральной Общественной Лицензией GNU или других лицензий свободных 
* программ или программ с открытым исходным кодом.
* Для просмотра подробностей и замечаний об авторском праве, смотрите файл COPYRIGHT.php.
* 
* @translator Sourpuss (sourpuss@mail.ru)
*/

// no direct access
defined( '_VALID_MOS' ) or die( 'Доступ запрещен' );

/**
* @package Joomla RE
* @subpackage Installer
*/
class TOOLBAR_installer
{
	function _DEFAULT()	{
		mosMenuBar::startTable();
		mosMenuBar::help( 'screen.installer' );
		mosMenuBar::endTable();
	}

	function _DEFAULT2()	{
		mosMenuBar::startTable();
		mosMenuBar::deleteList( '', 'remove', 'Удалить' );
		mosMenuBar::spacer();
		mosMenuBar::help( 'screen.installer2' );
		mosMenuBar::endTable();
	}

	function _NEW()	{
		mosMenuBar::startTable();
		mosMenuBar::save();
		mosMenuBar::spacer();
		mosMenuBar::cancel();
		mosMenuBar::endTable();
	}
}
?>