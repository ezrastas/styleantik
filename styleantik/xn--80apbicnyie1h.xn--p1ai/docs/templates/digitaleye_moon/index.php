<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
// needed to seperate the ISO number from the language file constant _ISO
$iso = split( '=', _ISO );
// xml prolog
echo '<?xml version="1.0" encoding="'. $iso[1] .'"?' .'>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Language" content="en-us">
<?php
if ( $my->id ) {
	initEditor();
}
?>
<meta http-equiv="Content-Type" content="text/html; <?php echo _ISO; ?>" />
<?php mosShowHead(); ?>
<link href="<?php echo $mosConfig_live_site;?>/templates/digitaleye_moon/css/template_css.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="<?php echo $mosConfig_live_site;?>/images/favicon.ico" />
</head>

<body topmargin="0" leftmargin="0" bgcolor="#13378D" background="<?php echo $mosConfig_live_site;?>/templates/digitaleye_moon/images/bac_page.png">

<table border="0" cellpadding="0" cellspacing="0" width="100%" height="503">
	<tr>
		<td style="background-image: url('<?php echo $mosConfig_live_site;?>/templates/digitaleye_moon/images/left.png'); background-repeat: repeat-y; background-position: right top">&nbsp;</td>
		<td width="775" bgcolor="#13378D" valign="top">
		<table border="0" cellpadding="0" cellspacing="0" width="100%">
			<tr>
				<td>
				<table border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td>
						<img border="0" src="<?php echo $mosConfig_live_site;?>/templates/digitaleye_moon/images/left_logo.jpg" width="521" height="168"></td>
						<td>
						<img border="0" src="<?php echo $mosConfig_live_site;?>/templates/digitaleye_moon/images/right_logo.jpg" width="254" height="168"></td>
					</tr>
				</table>
				</td>
			</tr>
			<tr>
				<td>
				<table border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td background="<?php echo $mosConfig_live_site;?>/templates/digitaleye_moon/images/top_menu.jpg" width="521" height="21">
						<table border="0" cellpadding="0" cellspacing="0" width="100%">
							<tr>
								<td width="12">&nbsp;</td>
								<td><?php mosLoadModules ( 'user3' ); ?></td>
							</tr>
						</table>
						</td>
						<td>
						<img border="0" src="<?php echo $mosConfig_live_site;?>/templates/digitaleye_moon/images/right_topmenu.jpg" width="254" height="21"></td>
					</tr>
				</table>
				</td>
			</tr>
			<tr>
				<td>
				<table border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td>
						<img border="0" src="<?php echo $mosConfig_live_site;?>/templates/digitaleye_moon/images/left_b_t_m.jpg" width="521" height="51"></td>
						<td>
						<img border="0" src="<?php echo $mosConfig_live_site;?>/templates/digitaleye_moon/images/right_b_t_m.jpg" width="254" height="51"></td>
					</tr>
				</table>
				</td>
			</tr>
			<tr>
				<td>
				<table border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td valign="top">
						<?php mosMainBody(); ?></td>
						<td width="254" height="622" valign="top"  style="background-image: url('<?php echo $mosConfig_live_site;?>/templates/digitaleye_moon/images/menu.jpg'); background-repeat: no-repeat; background-position-y: top">
						<table border="0" cellpadding="0" cellspacing="0" width="254">
							<tr>
								<td height="248" width="71">&nbsp;</td>
								<td height="248" width="173">&nbsp;</td>
								<td height="248" width="10">&nbsp;</td>
							</tr>
							<tr>
								<td width="71">&nbsp;</td>
								<td width="173"><?php mosLoadModules ( 'left' ); ?></td>
								<td width="10">&nbsp;</td>
							</tr>
						</table>
						</td>
					</tr>
				</table>
				</td>
			</tr>
			<tr>
				<td>
				<table border="0" cellpadding="0" cellspacing="0" width="100%" background="<?php echo $mosConfig_live_site;?>/templates/digitaleye_moon/images/footer.jpg">
					<tr>
						<td width="129">
						<a target="_blank" href="http://www.templatefarsi.com">
						<img border="0" src="<?php echo $mosConfig_live_site;?>/templates/digitaleye_moon/images/templatefarsi.jpg" width="130" height="38"></a></td>
						<td>
						<div align="right">
							<table border="0" cellpadding="0" cellspacing="0" width="500">
								<tr>
									<td>
									<p align="right"><?php mosLoadModules ( 'footer' ); ?></td>
								</tr>
							</table>
						</div>
						</td>
					</tr>
				</table>
				</td>
			</tr>
		</table>
		</td>
		<td style="background-image: url('<?php echo $mosConfig_live_site;?>/templates/digitaleye_moon/images/right.png'); background-repeat: repeat-y; background-position: left top">&nbsp;</td>
	</tr>
</table>

</body>

</html>