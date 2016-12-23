<?php
/**
* @version $Id: toolbar.modules.php 5012 2006-09-11 19:35:26Z friesengeist $
* @package Joomla RE
* @subpackage Modules
* @copyright Авторские права (C) 2006 Open Source Matters. Все права защищены. 
* @localized Авторские права (C) 2005 Joom.Ru - Русский дом Joomla! Все права защищены.
* @license Лицензия http://www.gnu.org/copyleft/gpl.html GNU/GPL, смотрите LICENSE.php
* Joomla! - свободное программное обеспечение. Эта версия может быть изменена
* в соответствии с Генеральной Общественной Лицензией GNU, поэтому возможно
* её дальнейшее распространение в составе результата работы, лицензированного
* согласно Генеральной Общественной Лицензией GNU или других лицензий свободных 
* программ или программ с открытым исходным кодом.
* Для просмотра подробностей и замечаний об авторском праве, смотрите файл COPYRIGHT.php.
* 
* @translator Oleg A. Myasnikov aka Sourpuss (sourpuss@mail.ru)
*/

// запрет прямого доступа
defined( '_VALID_MOS' ) or die( 'Доступ запрещен' );

require_once( $mainframe->getPath( 'toolbar_html' ) );
switch ($task) {

	case 'editA':
	case 'edit':
		$cid = mosGetParam( $_POST, 'cid', 0 );
		if ( !is_array( $cid ) ){
			$mid = intval( mosGetParam( $_POST, 'id', 0 ) );
		} else {
			$mid = $cid[0];
		}

		$published = 0;
		if ( $mid ) {
			$query = "SELECT published"
			. "\n FROM #__modules"
			. "\n WHERE id = " . (int) $mid
			;
			$database->setQuery( $query );
			$published = $database->loadResult();
		}
		$cur_template = $mainframe->getTemplate();
		TOOLBAR_modules::_EDIT( $cur_template, $published );
		break;

	case 'new':
		TOOLBAR_modules::_NEW();
		break;

	default:
		TOOLBAR_modules::_DEFAULT();
		break;
}
?>