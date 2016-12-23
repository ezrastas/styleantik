<?php
/**
* @version $Id: admin.admin.php 4801 2006-08-28 16:10:28Z stingrey $
* @package Joomla RE
* @subpackage Admin
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
* @translator Dmitry Hazin aka Denon (hazin_d@mail.ru)
*/

// запрет прямого доступа
defined( '_VALID_MOS' ) or die( 'Доступ запрещен' );
require_once( $mainframe->getPath( 'admin_html' ) );

switch ($task) {
	case 'clean_cache':
		mosCache::cleanCache( 'com_content' );
		mosRedirect( 'index2.php', 'Кэш содержимого очищен' );
		break;

	case 'clean_all_cache':
		mosCache::cleanCache();
		mosRedirect( 'index2.php', 'Весь кэш очищен' );
		break;

	case 'redirect':
		$goto = strval( strtolower( mosGetParam( $_REQUEST, 'link' ) ) );
		if ($goto == 'null') {
			$msg = 'Нет ссылки, связанной с этим объектом';
			mosRedirect( 'index2.php?option=com_admin&task=listcomponents', $msg );
			exit();
		}
		$goto = str_replace( "'", '', $goto );
		mosRedirect( $goto );
		break;

	case 'listcomponents':
		HTML_admin_misc::ListComponents();
		break;

	case 'sysinfo':
		HTML_admin_misc::system_info( $version, $option );
		break;

	case 'changelog':
		HTML_admin_misc::changelog();
		break;

	case 'help':
		HTML_admin_misc::help();
		break;

	case 'version':
		HTML_admin_misc::version();
		break;
	
	case 'preview':
		HTML_admin_misc::preview();
		break;

	case 'preview2':
		HTML_admin_misc::preview( 1 );
		break;

	case 'cpanel':
	default:
		HTML_admin_misc::controlPanel();
		break;

}
?>