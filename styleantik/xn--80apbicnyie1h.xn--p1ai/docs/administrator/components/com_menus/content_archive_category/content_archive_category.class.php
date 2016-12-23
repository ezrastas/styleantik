<?php
/**
* @version $Id: content_archive_category.class.php 4542 2006-08-15 13:49:12Z predator $
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

/**
* @package Joomla RE
* @subpackage Menus
*/
class content_archive_category_menu {
	/**
	* @param database A database connector object
	* @param integer The unique id of the category to edit (0 if new)
	*/
	function editCategory( $uid, $menutype, $option ) {
		global $database, $my, $mainframe;

		$menu = new mosMenu( $database );
		$menu->load( (int)$uid );

		// fail if checked out not by 'me'
		if ($menu->checked_out && $menu->checked_out != $my->id) {
			mosErrorAlert( "Модуль ".$menu->title." в настоящее время редактируется другим администратором" );
		}

		if ($uid) {
			$menu->checkout( $my->id );
		} else {
			$menu->type 		= 'content_archive_category';
			$menu->menutype 	= $menutype;
			$menu->ordering 	= 9999;
			$menu->parent 		= intval( mosGetParam( $_POST, 'parent', 0 ) );
			$menu->published 	= 1;
		}

		// build the html select list for category
		$lists['componentid']	= mosAdminMenus::Category( $menu, $uid );

		// build the html select list for ordering
		$lists['ordering'] 		= mosAdminMenus::Ordering( $menu, $uid );
		// build the html select list for the group access
		$lists['access'] 		= mosAdminMenus::Access( $menu );
		// build the html select list for paraent item
		$lists['parent'] 		= mosAdminMenus::Parent( $menu );
		// build published button option
		$lists['published'] 	= mosAdminMenus::Published( $menu );
		// build the url link output
		$lists['link'] 		= mosAdminMenus::Link( $menu, $uid );

		// get params definitions
		$params = new mosParameters( $menu->params, $mainframe->getPath( 'menu_xml', $menu->type ), 'menu' );

		content_archive_category_menu_html::editCategory( $menu, $lists, $params, $option );
	}
}
?>