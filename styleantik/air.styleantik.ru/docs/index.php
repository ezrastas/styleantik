<?php
/**
* @version $Id: index.php 6022 2006-12-18 22:30:07Z friesengeist $
* @package Joomla RE
* @copyright ��������� ����� (C) 2005 Open Source Matters. ��� ����� ��������.
* @license �������� http://www.gnu.org/copyleft/gpl.html GNU/GPL, �������� LICENSE.php
* Joomla! - ��������� ����������� �����������. ��� ������ ����� ���� ��������
* � ������������ � ����������� ������������ ��������� GNU, ������� ��������
* � ���������� ��������������� � ������� ���������� ������, ����������������
* �������� ����������� ������������ ��������� GNU ��� ������ �������� ��������� 
* �������� ��� �������� � �������� �������� �����.
* ��� ��������� ������������ � ��������� �� ��������� �����, �������� ���� COPYRIGHT.php.
* 
* @localized ��������� ����� (C) 2006 Joom.Ru - ������� ��� Joomla!
* @translator Sourpuss (sourpuss@mail.ru)
*/

// ��������� ����� ������������� ����� 
define( '_VALID_MOS', 1 );

// �������� ����������������� �����, ���� �� ���������, �� ����������� �������� ���������
if (!file_exists( 'configuration.php' ) || filesize( 'configuration.php' ) < 10) {
	$self = rtrim( dirname( $_SERVER['PHP_SELF'] ), '/\\' ) . '/';
	header("Location: http://" . $_SERVER['HTTP_HOST'] . $self . "installation/index.php" );
	exit();
}

require( 'globals.php' );
require_once( 'configuration.php' );

// �������� SSL - $http_host ���������� <url_�����>:<�����_�����, ���� �� 443>
$http_host = explode(':', $_SERVER['HTTP_HOST'] );
if( (!empty( $_SERVER['HTTPS'] ) && strtolower( $_SERVER['HTTPS'] ) != 'off' || isset( $http_host[1] ) && $http_host[1] == 443) && substr( $mosConfig_live_site, 0, 8 ) != 'https://' ) {
	$mosConfig_live_site = 'https://'.substr( $mosConfig_live_site, 7 );
}

require_once( 'includes/joomla.php' );

//�������� ������� ���������, ������� ��� ������ � SVN
if (file_exists( 'installation/index.php' ) && $_VERSION->SVN == 0) {
	define( '_INSTALL_CHECK', 1 );
	include ( $mosConfig_absolute_path .'/offline.php');
	exit();
}
 
// ����������� �������� ������������ �����
if ($mosConfig_offline == 1) {
	require( $mosConfig_absolute_path .'/offline.php' );
}

// �������� ������ ���������� ����
$_MAMBOTS->loadBotGroup( 'system' );

// ������� ������� onStart
$_MAMBOTS->trigger( 'onStart' );

if (file_exists( $mosConfig_absolute_path .'/components/com_sef/sef.php' )) {
	require_once( $mosConfig_absolute_path .'/components/com_sef/sef.php' );
} else {
	require_once( $mosConfig_absolute_path .'/includes/sef.php' );
}
require_once( $mosConfig_absolute_path .'/includes/frontend.php' );

// ����� ��������� ���������� url (��� form)
$option = strval( strtolower( mosGetParam( $_REQUEST, 'option' ) ) );
$Itemid = intval( mosGetParam( $_REQUEST, 'Itemid', null ) );

if ($option == '') {
	if ($Itemid) {
		$query = "SELECT id, link"
		. "\n FROM #__menu"
		. "\n WHERE menutype = 'mainmenu'"
		. "\n AND id = " . (int) $Itemid
		. "\n AND published = 1"
		;
		$database->setQuery( $query );
	} else {
		$query = "SELECT id, link"
		. "\n FROM #__menu"
		. "\n WHERE menutype = 'mainmenu'"
		. "\n AND published = 1"
		. "\n ORDER BY parent, ordering"
		;
		$database->setQuery( $query, 0, 1 );
	}
	$menu = new mosMenu( $database );
	if ($database->loadObject( $menu )) {
		$Itemid = $menu->id;
	}
	$link = $menu->link;
	if (($pos = strpos( $link, '?' )) !== false) {
		$link = substr( $link, $pos+1 ). '&Itemid='.$Itemid;
	}
	parse_str( $link, $temp );
	/** ��� ����, ��������� ���������� ��� ������� ���������� ����������� ����������� */
	foreach ($temp as $k=>$v) {
		$GLOBALS[$k] = $v;
		$_REQUEST[$k] = $v;
		if ($k == 'option') {
			$option = $v;
		}
	}
}
if ( !$Itemid ) {
// ����� �� ������ Itemid, �� ��� ������������� �������� �� ���������
	$Itemid = 99999999;
} 
	
// mainframe - ������� ������� ����� API, ������������ �������������� � '�����'
$mainframe = new mosMainFrame( $database, $option, '.' );
$mainframe->initSession();

// ������� ������� onAfterStart
$_MAMBOTS->trigger( 'onAfterStart' );

// ��������, ���� �� ����� ����� Itemid � ����������
if ( $option == 'com_content' && $Itemid === 0 ) {
	$id = intval( mosGetParam( $_REQUEST, 'id', 0 ) );
	$Itemid = $mainframe->getItemid( $id );
}

/** �� ��� ��� ���������� Itemid?? */
if ( $Itemid === 0 ) {
	/** ���, ������������ ������ ������� ��������. */
	$query = "SELECT id"
	. "\n FROM #__menu"
	. "\n WHERE menutype = 'mainmenu'"
	. "\n AND published = 1"
	. "\n ORDER BY parent, ordering"
	;
	$database->setQuery( $query, 0, 1 );
	$Itemid = $database->loadResult();
}

// ���� ���������� ����������� �� �������
if ($option == 'search') {
	$option = 'com_search';
}

// �������� ����� ����������� ����� �� ���������
if ($mosConfig_lang=='') {
	$mosConfig_lang = 'english';
}
include_once( $mosConfig_absolute_path .'/language/' . $mosConfig_lang . '.php' );

// �������� ����� � ������ � �����-��� 
$return 	= strval( mosGetParam( $_REQUEST, 'return', NULL ) );
$message 	= intval( mosGetParam( $_POST, 'message', 0 ) );
if ($option == 'login') {
	$mainframe->login();

	// ����������� ��������� JS
	if ( $message ) {
		?>
		<script language="javascript" type="text/javascript">
		<!--//
		alert( "<?php echo addslashes( _LOGIN_SUCCESS ); ?>" );
		//-->
		</script>
		<?php
	}
	
	if ( $return && !( strpos( $return, 'com_registration' ) || strpos( $return, 'com_login' ) ) ) {
	// checks for the presence of a return url 
	// and ensures that this url is not the registration or login pages
		// ���� sessioncookie ����������, �������� �� �������� ��������. Otherwise, take an extra round for a cookiecheck
		if (isset( $_COOKIE[mosMainFrame::sessionCookieName()] )) {
		mosRedirect( $return );
	} else {
			mosRedirect( $mosConfig_live_site .'/index.php?option=cookiecheck&return=' . urlencode( $return ) );
		}
	} else {
		// If a sessioncookie exists, redirect to the start page. Otherwise, take an extra round for a cookiecheck
		if (isset( $_COOKIE[mosMainFrame::sessionCookieName()] )) {
		mosRedirect( $mosConfig_live_site .'/index.php' );
		} else {
			mosRedirect( $mosConfig_live_site .'/index.php?option=cookiecheck&return=' . urlencode( $mosConfig_live_site .'/index.php' ) );
		}
	}

} else if ($option == 'logout') {
	$mainframe->logout();

	// ����������� ��������� JS
	if ( $message ) {
		?>
		<script language="javascript" type="text/javascript">
		<!--//
		alert( "<?php echo addslashes( _LOGOUT_SUCCESS ); ?>" );
		//-->
		</script>
		<?php
	}

	if ( $return && !( strpos( $return, 'com_registration' ) || strpos( $return, 'com_login' ) ) ) {
	// checks for the presence of a return url 
	// and ensures that this url is not the registration or logout pages
		mosRedirect( $return );
	} else {
		mosRedirect( $mosConfig_live_site.'/index.php' );
	}
} else if ($option == 'cookiecheck') {
	// No cookie was set upon login. If it is set now, redirect to the given page. Otherwise, show error message.
	if (isset( $_COOKIE[mosMainFrame::sessionCookieName()] )) {
		mosRedirect( $return );
	} else {
		mosErrorAlert( _ALERT_ENABLED );
	}
}

/** ��������� ���������� � ������� ������������� �� ������� ������ */
$my = $mainframe->getUser();

// ����������� ������� ���������
$mainframe->detect();

// ��������� �������� ��� overlib
$mainframe->set( 'loadOverlib', false );

$gid = intval( $my->gid );

// ��������� ������� ��������
$cur_template = $mainframe->getTemplate();
/** ��������� ����������� - ��� ����������� � ��������� ����� ��������� */

/** @global - ����� ��� �������� ���������� ��������� ���������� */
$_MOS_OPTION = array();

// ��������������� ������ ������ ����������
require_once( $mosConfig_absolute_path . '/editor/editor.php' );

ob_start();		 

if ($path = $mainframe->getPath( 'front' )) {
	$task 	= strval( mosGetParam( $_REQUEST, 'task', '' ) );
	$ret 	= mosMenuCheck( $Itemid, $option, $task, $gid );
	
	if ($ret) {
		require_once( $path );
	} else {
		mosNotAuth();
	}
} else {
	header( 'HTTP/1.0 404 Not Found' );
	echo _NOT_EXIST;
}

$_MOS_OPTION['buffer'] = ob_get_contents();

ob_end_clean();

initGzip();

header( 'Expires: Mon, 26 Jul 1997 05:00:00 GMT' );
header( 'Last-Modified: ' . gmdate( 'D, d M Y H:i:s' ) . ' GMT' );
header( 'Cache-Control: no-store, no-cache, must-revalidate' );
header( 'Cache-Control: post-check=0, pre-check=0', false );
header( 'Pragma: no-cache' );

// ����������� �������������� � ����������� �����, ��� ����� ������
if (defined( '_ADMIN_OFFLINE' )) {
	include( $mosConfig_absolute_path .'/offlinebar.php' );
}

// �������� ����� �������
if ( !file_exists( $mosConfig_absolute_path .'/templates/'. $cur_template .'/index.php' ) ) {
	echo _TEMPLATE_WARN . $cur_template;
} else {
	require_once( $mosConfig_absolute_path .'/templates/'. $cur_template .'/index.php' );
	echo '<!-- '. time() .' -->';
}

// ����������� ����������� ��� �������� ��������
if ($mosConfig_debug) {
	echo $database->_ticker . ' queries executed';
	echo '<pre>';
 	foreach ($database->_log as $k=>$sql) {
 		echo $k+1 . "\n" . $sql . '<hr />';
	}
	echo '</pre>';
}

doGzip();
?>