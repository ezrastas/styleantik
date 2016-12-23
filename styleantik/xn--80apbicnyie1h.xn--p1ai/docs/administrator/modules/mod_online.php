<?php
/**
* @version $Id: mod_online.php 5026 2006-09-13 18:45:52Z friesengeist $
* @package Joomla RE
* @copyright Авторские права (C) 2005 Open Source Matters. Все права защищены.
* @license Лицензия http://www.gnu.org/copyleft/gpl.html GNU/GPL, смотрите LICENSE.php
* Joomla! - свободное программное обеспечение. Эта версия может быть изменена
* в соответствии с Генеральной Общественной Лицензией GNU, поэтому возможно
* её дальнейшее распространение в составе результата работы, лицензированного
* согласно Генеральной Общественной Лицензией GNU или других лицензий свободных 
* программ или программ с открытым исходным кодом.
* Для просмотра подробностей и замечаний об авторском праве, смотрите файл COPYRIGHT.php.
* 
* @localized (C) 2005 Joom.Ru
* @translator Sourpuss (sourpuss@mail.ru)
*/

// запрет прямого доступа
defined( '_VALID_MOS' ) or die( 'Доступ запрещен' );

$session_id = stripslashes( mosGetParam( $_SESSION, 'session_id', '' ) );

// Get no. of users online not including current session
$query = "SELECT COUNT( session_id )"
. "\n FROM #__session"
. "\n WHERE session_id != " . $database->Quote( $session_id )
;
$database->setQuery($query);
$online_num = intval( $database->loadResult() );

echo $online_num . " <img src=\"images/users.png\" align=\"middle\" alt=\"Пользователей онлайн\" />";
?>