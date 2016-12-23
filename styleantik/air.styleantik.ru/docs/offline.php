<?php
/**
* @version $Id: offline.php 6018 2006-12-18 19:04:42Z robs $
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
* @localized ��������� ����� (C) 2005 Joom.Ru - ������� ��� Joomla
* @translator Oleg A. Myasnikov aka Sourpuss (sourpuss@mamboteam.ru)
*/

// ������ ������� �������
defined( '_VALID_MOS' ) or die( '������ ��������' );

global $database;
global $mosConfig_live_site, $mosConfig_lang;

$adminOffline = false;

if (!defined( '_INSTALL_CHECK' )) {
	// ���� ����� ���������� �� ��������� � 1.1, �.�. ���������� ��������� ������
	session_name( md5( $mosConfig_live_site ) );
	session_start();
	
	if (class_exists( 'mosUser' )) {
		// �������������� ��������� ���������� ������
		$admin 				= new mosUser( $database );
		$admin->id 			= intval( mosGetParam( $_SESSION, 'session_user_id', '' ) );
		$admin->username 	= strval( mosGetParam( $_SESSION, 'session_username', '' ) );
		$admin->usertype 	= strval( mosGetParam( $_SESSION, 'session_usertype', '' ) );
		$session_id 		= mosGetParam( $_SESSION, 'session_id', '' );
		$logintime 			= mosGetParam( $_SESSION, 'session_logintime', '' );
	
		// �������� ������� ������ ������ � ���� ������
		if ($session_id == md5( $admin->id . $admin->username . $admin->usertype . $logintime )) {
			$query = "SELECT *"
			. "\n FROM #__session"
			. "\n WHERE session_id = " . $database->Quote( $session_id )
			. "\n AND username = " . $database->Quote( $admin->username )
			. "\n AND userid = " . intval( $admin->id )
			;
			$database->setQuery( $query );
			if (!$result = $database->query()) {
				echo $database->stderr();
			}
			if ($database->getNumRows( $result ) == 1) {
				define( '_ADMIN_OFFLINE', 1 );
			}
		}
	}
}

if (!defined( '_ADMIN_OFFLINE' ) || defined( '_INSTALL_CHECK' )) {
	@include_once ('language/' . $mosConfig_lang . '.php' );
		
if( $database != NULL ) {
	// ��������� �������� ������� ����� �� ���������
	$query = "SELECT template"
	. "\n FROM #__templates_menu"
	. "\n WHERE client_id = 0"
	. "\n AND menuid = 0"
	;
	$database->setQuery( $query );
	$cur_template = $database->loadResult();
	$path = "$mosConfig_absolute_path/templates/$cur_template/index.php";
	if (!file_exists( $path )) {
	$cur_template = 'rhuk_solarflare_ii';
	}
	} else {
		$cur_template = 'rhuk_solarflare_ii';
	}
	
	// ��������� ��� ���������� ������ ISO �� ��������� ��������� ����� _ISO
	$iso = split( '=', _ISO );
	// xml prolog
	echo '<?xml version="1.0" encoding="'. $iso[1] .'"?' .'>';
	?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title><?php echo $mosConfig_sitename; ?> - ���� ��������</title>

		<link rel="stylesheet" href="<?php echo $mosConfig_live_site; ?>/templates/css/offline.css" type="text/css" />
<?php
	if ( file_exists("$mosConfig_absolute_path/templates/$cur_template/css/offline.css") ) {
?>
		<link rel="stylesheet" href="<?php echo $mosConfig_live_site; ?>/templates/<?php echo $cur_template; ?>/css/offline.css" type="text/css" />
<?php
	}
?>

<?php
	// ������ ���������� (favicon)
	if ( !$mosConfig_favicon ) {
		$mosConfig_favicon = 'favicon.ico';
	}
	$icon = $mosConfig_absolute_path .'/images/'. $mosConfig_favicon;
	// checks to see if file exists
	if ( !file_exists( $icon ) ) {
		$icon = $mosConfig_live_site .'/images/favicon.ico';
	} else {
		$icon = $mosConfig_live_site .'/images/' .$mosConfig_favicon;
	}
?>
		<link rel="shortcut icon" href="<?php echo $icon; ?>" />
		<meta http-equiv="Content-Type" content="text/html; <?php echo _ISO; ?>" />
	</head>
	<body>
	
		<p>&nbsp;</p>
		<table width="550" align="center" class="outline">
		<tr>
			<td width="60%" height="50" align="center">
			<img src="<?php echo $mosConfig_live_site; ?>/images/joomla_logo_black.jpg" alt="������� Joomla!" align="middle" />
			</td>
		</tr>
		<tr>
			<td align="center">
				<h1>
					<?php echo $mosConfig_sitename; ?>
				</h1>
			</td>
		</tr>
		<?php
		if ( $mosConfig_offline == 1 ) {
			?>
			<tr>
				<td width="39%" align="center">
					<h2>
						<?php echo $mosConfig_offline_message; ?>
					</h2>
				</td>
			</tr>
			<?php
		} else if (@$mosSystemError) {
			?>
			<tr>
				<td width="39%" align="center">
					<h2>
						<?php echo $mosConfig_error_message; ?>
					</h2>
					<span class="err"><?php echo defined( '_SYSERR'.$mosSystemError ) ? constant( '_SYSERR'.$mosSystemError ) : $mosSystemError; ?></span>
				</td>
			</tr>
			<?php
		} else {
			?>
			<tr>
				<td width="39%" align="center">
				<h2>
					<?php echo _INSTALL_WARN; ?>
				</h2>
				</td>
			</tr>
			<?php
		}
		?>
		</table>
	
	</body>
	</html>
	<?php
	exit( 0 );
}
?>