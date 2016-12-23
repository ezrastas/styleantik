<?php
/**
* @version $Id: toolbar.menumanager.php 3500 2006-05-15 04:31:11Z stingrey $
* @package Joomla RE
* @subpackage Menus
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
* @translator Oleg A. Myasnikov aka Sourpuss (sourpuss@mamboteam.ru)
*/

// запрет прямого доступа
defined( '_VALID_MOS' ) or die( 'Доступ ограничен' );

require_once( $mainframe->getPath( 'toolbar_html' ) );


switch ($task) {
	case 'new':
	case 'edit':
		TOOLBAR_menumanager::_NEWMENU();
		break;

	case 'copyconfirm':
		TOOLBAR_menumanager::_COPYMENU();
		break;

	case 'deleteconfirm':
		TOOLBAR_menumanager::_DELETE();
		break;

	default:
		TOOLBAR_menumanager::_DEFAULT();
		break;
}
?>