<?php
/**
* @version $Id: toolbar.menus.php 5045 2006-09-14 13:49:01Z friesengeist $
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
* @translator Oleg A. Myasnikov aka Sourpuss (sourpuss@mail.ru)
*/

// запрет прямого доступа
defined( '_VALID_MOS' ) or die( 'Доступ запрещен' );

require_once( $mainframe->getPath( 'toolbar_html' ) );
require_once( $mainframe->getPath( 'toolbar_default' ) );

switch ($task) {
	case 'new':
		TOOLBAR_menus::_NEW();
		break;

	case 'movemenu':
		TOOLBAR_menus::_MOVEMENU();
		break;

	case 'copymenu':
		TOOLBAR_menus::_COPYMENU();
		break;

	case 'edit':
		$cid 	= josGetArrayInts( 'cid' );
		$path 	= $mosConfig_absolute_path .'/administrator/components/com_menus/';

		if ( $cid[0] ) {
			$query = "SELECT type"
			. "\n FROM #__menu"
			. "\n WHERE id = " . (int) $cid[0]
			;
			$database->setQuery( $query );
			$type = $database->loadResult();
			$item_path  = $path . $type .'/'. $type .'.menubar.php';

			if ( $type ) {
				if ( file_exists( $item_path  ) ) {
					require_once( $item_path  );
				} else {
					TOOLBAR_menus::_EDIT();
				}
			} else {
				echo $database->stderr();
			}
		} else {
			$type 		= strval( mosGetParam( $_REQUEST, 'type', null ) );
			$item_path  = $path . $type .'/'. $type .'.menubar.php';

			if ( $type ) {
				if ( file_exists( $item_path ) ) {
					require_once( $item_path  );
				} else {
					TOOLBAR_menus::_EDIT();
				}
			} else {
				TOOLBAR_menus::_EDIT();
			}
		}
		break;

	default:
		$type 		= strval( mosGetParam( $_REQUEST, 'type' ) );
		$item_path  = $path . $type .'/'. $type .'.menubar.php';

		if ( $type ) {
			if ( file_exists( $item_path ) ) {
				require_once( $item_path );
			} else {
				TOOLBAR_menus::_DEFAULT();
			}
		} else {
			TOOLBAR_menus::_DEFAULT();
		}
		break;
}
?>