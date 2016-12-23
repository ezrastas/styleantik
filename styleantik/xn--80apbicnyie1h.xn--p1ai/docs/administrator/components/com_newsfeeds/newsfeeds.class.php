<?php
/**
* @version $Id: newsfeeds.class.php 85 2005-09-15 23:12:03Z eddieajau $
* @package Joomla RE
* @subpackage Newsfeeds
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
* @subpackage Newsfeeds
*/
class mosNewsFeed extends mosDBTable {
/** @var int Primary key */
	var $id					= null;
/** @var int */
	var $catid				= null;
/** @var string */
	var $name				= null;
/** @var string */
	var $link				= null;
/** @var string */
	var $filename			= null;
/** @var int */
	var $published			= null;
/** @var int */
	var $numarticles		= null;
/** @var int */
	var $cache_time			= null;
/** @var int */
	var $checked_out		= null;
/** @var time */
	var $checked_out_time	= null;
/** @var int */
	var $ordering			= null;

/**
* @param database A database connector object
*/
	function mosNewsFeed( &$db ) {
		$this->mosDBTable( '#__newsfeeds', 'id', $db );
	}
}
?>