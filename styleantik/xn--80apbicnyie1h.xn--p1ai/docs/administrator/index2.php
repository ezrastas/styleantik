<?php
/**
* @version $Id: index2.php 6022 2006-12-18 22:30:07Z friesengeist $
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

// Установка флага, что этот файл - родительский
define( '_VALID_MOS', 1 );

if (!file_exists( '../configuration.php' )) {
	header( 'Location: ../installation/index.php' );
	exit();
}

require( '../globals.php' );
require_once( '../configuration.php' );

// SSL check - $http_host returns <live site url>:<port number if it is 443>
$http_host = explode(':', $_SERVER['HTTP_HOST'] );
if( (!empty( $_SERVER['HTTPS'] ) && strtolower( $_SERVER['HTTPS'] ) != 'off' || isset( $http_host[1] ) && $http_host[1] == 443) && substr( $mosConfig_live_site, 0, 8 ) != 'https://' ) {
	$mosConfig_live_site = 'https://'.substr( $mosConfig_live_site, 7 );
}

require_once( $mosConfig_absolute_path . '/includes/joomla.php' );
include_once( $mosConfig_absolute_path . '/language/'. $mosConfig_lang .'.php' );
require_once( $mosConfig_absolute_path . '/administrator/includes/admin.php' );

// must start the session before we create the mainframe object
session_name( md5( $mosConfig_live_site ) );
session_start();

$option 		= strval( strtolower( mosGetParam( $_REQUEST, 'option', '' ) ) );
$task 			= strval( mosGetParam( $_REQUEST, 'task', '' ) );

// mainframe is an API workhorse, lots of 'core' interaction routines
$mainframe = new mosMainFrame( $database, $option, '..', true );

// admin session handling
$my 			= $mainframe->initSessionAdmin( $option, $task );

// initialise some common request directives
$act 		= strtolower( mosGetParam( $_REQUEST, 'act', '' ) );
$section 	= mosGetParam( $_REQUEST, 'section', '' );
$no_html 		= intval( mosGetParam( $_REQUEST, 'no_html', 0 ) );
$id         	= intval( mosGetParam( $_REQUEST, 'id', 0 ) );

$cur_template = $mainframe->getTemplate();

// default admin homepage
if ($option == '') {
	$option = 'com_admin';
}

// set for overlib check
$mainframe->set( 'loadOverlib', false );

// precapture the output of the component
require_once( $mosConfig_absolute_path . '/editor/editor.php' );

ob_start();
if ($path = $mainframe->getPath( 'admin' )) {
		require_once ( $path );
} else {
	?>
	<img src="images/joomla_logo_black.jpg" border="0" alt="<?php echo 'Логотип Joomla!'; ?>" />
	<br />
	<?php
}

$_MOS_OPTION['buffer'] = ob_get_contents();
ob_end_clean();

initGzip();

// начало вывода html
if ($no_html == 0) {
	// загрузка файла шаблона
	if ( !file_exists( $mosConfig_absolute_path .'/administrator/templates/'. $cur_template .'/index.php' ) ) {
		echo 'ШАБЛОН '. $cur_template .' НЕ ОБНАРУЖЕН' ;
	} else {
		require_once( $mosConfig_absolute_path .'/administrator/templates/'. $cur_template .'/index.php' );
	}
} else {
	mosMainBody_Admin();
}

// displays queries performed for page
if ($mosConfig_debug) {
	echo $database->_ticker . ' queries executed';
	echo '<pre>';
	foreach ($database->_log as $k=>$sql) {
		echo $k+1 . "\n" . $sql . '<hr />';
	}
}

// if task action is 'save' or 'apply' redo session check
if ( $task == 'save' || $task == 'apply' ) {
	$mainframe->initSessionAdmin( $option, '' );
}

doGzip();

?>
