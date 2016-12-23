<?php
/**
* @version $Id: index.php 5973 2006-12-11 01:26:33Z robs $
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
* @localized (C) 2006 Joom.Ru
* @translator Sourpuss (sourpuss@mail.ru)
*/

/** �������� ��������� ����� ����� ������-���������� */
defined( '_VALID_MOS' ) or die( '������ ���������' );

$tstart = mosProfiler::getmicrotime();
// needed to seperate the ISO number from the language file constant _ISO
$iso = explode( '=', _ISO );
// xml prolog
echo '<?xml version="1.0" encoding="'. $iso[1] .'"?' .'>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $mosConfig_sitename; ?> - ������ ���������� Joomla!</title>
<link rel="stylesheet" href="templates/joomla_admin/css/template_css.css" type="text/css" />
<link rel="stylesheet" href="templates/joomla_admin/css/theme.css" type="text/css" />
<script language="JavaScript" src="<?php echo $mosConfig_live_site; ?>/includes/js/JSCookMenu_mini.js" type="text/javascript"></script>
<script language="JavaScript" src="<?php echo $mosConfig_live_site; ?>/administrator/includes/js/ThemeOffice/theme.js" type="text/javascript"></script>
<script language="JavaScript" src="<?php echo $mosConfig_live_site; ?>/includes/js/joomla.javascript.js" type="text/javascript"></script>
<?php
include_once( $mosConfig_absolute_path . '/editor/editor.php' );
initEditor();

// Workaround to include custom head tags from components
if (isset( $mainframe->_head['custom'] ))
{
	$head = array();
	foreach ($mainframe->_head['custom'] as $html) {
		$head[] = $html;
	}
	echo implode( "\n", $head ) . "\n";
}
?>
<meta http-equiv="Content-Type" content="text/html; <?php echo _ISO; ?>" />
<meta name="Generator" content="������� ���������� ���������� Joomla!" />
<link rel="shortcut icon" href="<?php echo $mosConfig_live_site .'/images/favicon.ico';?>" />
</head>
<body onload="MM_preloadImages('images/help_f2.png','images/archive_f2.png','images/back_f2.png','images/cancel_f2.png','images/delete_f2.png','images/edit_f2.png','images/new_f2.png','images/preview_f2.png','images/publish_f2.png','images/save_f2.png','images/unarchive_f2.png','images/unpublish_f2.png','images/upload_f2.png')">

<div id="wrapper">
	<div id="header">
			<div id="joomla"><img src="templates/joomla_admin/images/header_text.png" alt="������� Joomla!" /></div>
	</div>
</div>
<table width="100%" class="menubar" cellpadding="0" cellspacing="0" border="0">
<tr>
	<td class="menubackgr" style="padding-left:5px;">
		<?php mosLoadAdminModule( 'fullmenu' );?>
	</td>
	<td class="menubackgr" align="right">
		<div id="wrapper1">
		<div><a href="<?php echo $mosConfig_live_site; ?>/index.php" target="_blank" title="������������ �����"><img src="../includes/js/ThemeOffice/preview.png" border="0" align="middle" /></a></div>
			<?php mosLoadAdminModules( 'header', 2 );?>
		</div>
	</td>
	<td class="menubackgr" align="right" style="padding-right:5px;">
		<a href="index2.php?option=logout" style="color: #333333; font-weight: bold">
			�����</a>
		<strong><?php echo $my->username;?></strong>
	</td>
</tr>
</table>

<table width="100%" class="menubar" cellpadding="0" cellspacing="0" border="0">
<tr>
	<td class="menudottedline" width="40%">
		<?php mosLoadAdminModule( 'pathway' );?>
	</td>
	<td class="menudottedline" align="right">
		<?php mosLoadAdminModule( 'toolbar' );?>
	</td>
</tr>
</table>

<br />
<?php mosLoadAdminModule( 'mosmsg' );?>

<div align="center" class="centermain">
	<div class="main">
		<?php mosMainBody_Admin(); ?>
	</div>
</div>

<div align="center" class="footer">
	<table width="99%" border="0">
	<tr>
		<td align="center">
<?php
/*
<div align="center" class="smallgrey"><b>������� �� RU-CENTER</b> 
  <br/>
  <a href="http://hosting.nic.ru" target="_blank">RU-CENTER > �������� ������� �� �������� ��������</a> | <a href="www.mail.nic.ru" target="_blank" alt="�������� ����������� ����� �� RU-CENTER">�������� ����������� ����� �� RU-CENTER</a>
</div>
			<div align="center">
				<?php echo $_VERSION->URL; ?>
			</div>
			<div align="center" class="smallgrey">
				<?php echo $version; ?>
				<br/>
				<a href="http://joom.ru/" target="_blank">��������� ��������� ������ Joomla! RE</a> | <a href="http://www.joomla.org/latest10" target="_blank">��������� ��������� ������ Joomla!</a>
			</div>
			<?php
			if ( $mosConfig_debug ) {
				echo '<div class="smallgrey">';
				$tend = mosProfiler::getmicrotime();
				$totaltime = ($tend - $tstart);
		printf ("�������� ������������� �� %f ������", $totaltime);
				echo '</div>';
			}
			?>
		</td>
	</tr>
	</table>
</div>
*/
?>
<?php mosLoadAdminModules( 'debug' );?>
</body>
</html>
