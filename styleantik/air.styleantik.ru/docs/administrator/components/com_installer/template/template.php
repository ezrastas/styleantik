<?php
/**
* @version $Id: template.php 328 2005-10-02 15:39:51Z Jinx $
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
* @translator Oleg A. Myasnikov aka Sourpuss (sourpuss@mamboteam.ru)
*/

// запрет прямого доступа
defined( '_VALID_MOS' ) or die( 'Доступ ограничен' );

// ensure user has access to this function
if ( !$acl->acl_check( 'administration', 'install', 'users', $my->usertype, $element . 's', 'all' ) ) {
	mosRedirect( 'index2.php', _NOT_AUTH );
}

$client 	= mosGetParam( $_REQUEST, 'client', '' );
$userfile 	= mosGetParam( $_REQUEST, 'userfile', dirname( __FILE__ ) );
$userfile 	= mosPathName( $userfile );

HTML_installer::showInstallForm( 'Установить новый шаблон <small><small>[ ' . ($client == 'admin' ? 'Панели управления' : 'Сайта') .' ]</small></small>',
	$option, 'template', $client, $userfile,
	'<a href="index2.php?option=com_templates&client='.$client.'">Перейти в Управление шаблонами</a>'
);
?>
<table class="content">
<?php
writableCell( 'media' );
writableCell( 'administrator/templates' );
writableCell( 'templates' );
writableCell( 'images/stories' );
?>
</table>