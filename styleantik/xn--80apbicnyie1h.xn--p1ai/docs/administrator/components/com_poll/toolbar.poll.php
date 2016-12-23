<?php
/**
* @version $Id: toolbar.poll.php 5012 2006-09-11 19:35:26Z friesengeist $
* @package Joomla RE
* @subpackage Polls
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

switch ($task) {
	case 'new':
		TOOLBAR_poll::_NEW();
		break;

	case 'edit':
		$cid = josGetArrayInts( 'cid' );

		$query = "SELECT published"
		. "\n FROM #__polls"
		. "\n WHERE id = " . (int) $cid[0]
		;
		$database->setQuery( $query );
		$published = $database->loadResult();

		$cur_template = $mainframe->getTemplate();

		TOOLBAR_poll::_EDIT( $cid[0], $cur_template );
		break;

	case 'editA':
		$id = intval( mosGetParam( $_REQUEST, 'id', 0 ) );

		$query = "SELECT published"
		. "\n FROM #__polls"
		. "\n WHERE id = " . (int) $id
		;
		$database->setQuery( $query );
		$published = $database->loadResult();

		$cur_template = $mainframe->getTemplate();

		TOOLBAR_poll::_EDIT( $id, $cur_template );
		break;

	default:
		TOOLBAR_poll::_DEFAULT();
		break;
}
?>