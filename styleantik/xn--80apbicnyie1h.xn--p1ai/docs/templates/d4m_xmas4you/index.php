<?php
Error_Reporting(E_ALL & ~E_NOTICE);
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
$iso = explode( '=', _ISO );
echo '<?xml version="1.0" encoding="'. $iso[1] .'"?' .'>';

// Custom Settings - Begin
$demo_mode = 0; // 0 - demo mode is on, 1 - demo mode is off
$copyright_text = 'Copyright by DesignForMambo.com 2005. All rights reserved.';
// Custom Settings - End

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
if( $my->id ) {
	initEditor();
}
?>
<meta http-equiv="Content-Type" content="text/html; <?php echo _ISO; ?>" />
<?php mosShowHead(); ?>
<link rel="stylesheet" type="text/css" href="templates/d4m_xmas4you/css/template_css.css" />
</head>
<?php if($demo_mode) { ?>
<script language="JavaScript" type="text/javascript" src="templates/d4m_xmas4you/tooltip_text.js"></script>
<script language="JavaScript">
	var user8 = getPositionTip('user8', 'To set new logo image do following:</br>1. Go to <b>Modules</b> -> <b>Site Modules</b></br>2. Click <b>New</b> button to create new user module</br>3. Insert desired image to modules content part</br>4. Set module position to <b>user8</b> and save.');
	var user9 = getPositionTip('user9', 'To set new logo image do following:</br>1. Go to <b>Modules</b> -> <b>Site Modules</b></br>2. Click <b>New</b> button to create new user module</br>3. Insert desired image to modules content part</br>4. Set module position to <b>user9</b> and save.');
	var mainbody = getMainBodyTip(); 
	var left = getPositionTip('left', 'Mainmenu module must have <b>Module Class Suffix:</b> set to <b>_mainmenu</b>');
	var banner = getPositionTip('banner');
	var user1 = getPositionTip('user1');
	var user2 = getPositionTip('user2');
	var copyright = getTextTip("copyright_text");
</script>
<?php } ?>
<body>
<table id="main_table" align="center" width="750" border="0" cellspacing="0" cellpadding="0">
<tr>
	<td valign="top" id="left_column" width="201" height="100%"><!-- left column -->
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td <?php if ($demo_mode) { ?>class="module_container" onmouseover="return escape(user8);" <?php } ?>>
			<?php if (mosCountModules('user8') == 0){ ?>
				<img src="templates/d4m_xmas4you/images/logo.gif" width="201" height="70" />
			<?php } else { 
				mosLoadModules('user8');
			 } ?>
			</td>
		</tr>
		<tr>
			<td id="left" <?php if ($demo_mode) { ?>class="module_container" onmouseover="return escape(left);" <?php } ?>><? mosLoadModules('left', -2); ?></td>
		</tr>
      </table>
	</td>
	<td valign="top" id="main_column" wdith="0" height="100%"><!-- center column -->
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td <?php if ($demo_mode) { ?>class="module_container" onmouseover="return escape(user9);" <?php } ?>>
			<?php if (mosCountModules('user9') == 0){ ?>
				<img src="templates/d4m_xmas4you/images/header_image.jpg" width="549" height="185" /></td>
			<?php } else { 
				mosLoadModules('user9');
			 } ?>
		</tr>
		<?php
			$ids = array();
			
			for($i=1;$i<=2;$i++){
				if(mosCountModules('user'.$i)>0)
					$ids[] = $i;
			}
			
			$module_count = count($ids);
		?>
		<tr>
			<td width="100%"><!-- Main body and user positions -->
				<table width="100%" border="0" cellpadding="0" cellspacing="10">
				<tr>
					<td <?php if ($module_count > 1) { echo 'colspan="'.$module_count.'"'; } ?> id="pathway"><!-- Path way -->
						<?php mosPathWay(); ?>
					</td>
				</tr>
				<tr>
					<td <?php if ($module_count > 1) { echo 'colspan="'.$module_count.'"'; } ?> id="mainbody" <?php if ($demo_mode) { ?>class="module_container" onmouseover="return escape(mainbody);" <?php } ?>><?php mosMainBody(); ?></td>
				</tr>
				<?php
				if($module_count > 0){
					$module_width = round(100/$module_count);
				?>
				<tr>
				<?php for($i=0;$i<=$module_count;$i++){ ?>
					<td valign="top" width="<?php echo $module_width ?>%" id="user<?= $ids[$i] ?>" <?php if ($demo_mode) { ?>class="module_container" onmouseover="return escape(user<?= $ids[$i] ?>);" <?php } ?>>
					<?php mosLoadModules('user'.$ids[$i]) ?>
					</td>
				<?php } ?>
				</tr>
				<?php } ?>
				<tr>
					<td align="center" <?php if ($module_count > 1) { echo 'colspan="'.$module_count.'"'; } ?> id="banner" <?php if ($demo_mode) { ?>class="module_container" onmouseover="return escape(banner);" <?php } ?>><?php mosLoadModules('banner'); ?></td>
				</tr>
			  </table>
			</td>
		</tr>
		</table>
	</td>
</tr>
</table>
<table align="center" width="750" border="0" cellpadding="0" cellspacing="0">
<tr>
	<td id="copyright" <?php if ($demo_mode) { ?>class="module_container" onmouseover="return escape(copyright);" <?php } ?>><?= $copyright_text ?></td>
</tr>
</table>
<?php if($demo_mode) { ?>
<script language="JavaScript" type="text/javascript" src="templates/d4m_xmas4you/wz_tooltip.js"></script>
<?php } ?>
</body>
</html>