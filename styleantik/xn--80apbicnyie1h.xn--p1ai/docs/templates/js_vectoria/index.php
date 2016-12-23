<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
$iso = split( '=', _ISO );
echo '<?xml version="1.0" encoding="'. $iso[1] .'"?' .'>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php 
if ( $my->id ) {
	initEditor();
}
mosShowHead(); 
?>
<meta http-equiv="Content-Type" content="text/html; <?php echo _ISO; ?>" />
<link href="<?php echo $mosConfig_live_site;?>/templates/<?php echo $mainframe->getTemplate(); ?>/css/template_css.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="<?php echo $mosConfig_live_site;?>/images/favicon.ico" />
</head>
<body id="main_bg">
<a name="up" id="up"></a>
<div class="center" align="center">
<table class="opentable" width="888" id="main">
<tr>
<td colspan="3" class="topbar"></td>
</tr>
<td class="left_shadow"><img src="<?php echo $mosConfig_live_site;?>/templates/<?php echo $mainframe->getTemplate(); ?>/images/js_hdl_l.png" alt="spacer.png, 0 kB" title="spacer" class="" height="14" width="21" /><br />
</td>
<td class="wrapper">
<div id="header">&nbsp;</div>
<div id="contentarea">
<table border="0" cellpadding="0" cellspacing="0">
<tr valign="top">
<td class="sidenav"><div class="nogo">
<?php if (mosCountModules('left') > 0) { ?>
<div id="left">
<?php mosLoadModules('left', -2); ?>
</div>
</div>
<?php } ?>
<img src="<?php echo $mosConfig_live_site;?>/templates/<?php echo $mainframe->getTemplate(); ?>/images/spacer.png" alt="spacer.png, 0 kB" title="spacer" class="" height="1" width="155" /><br />
<td class="middle">
<div id="pathway"><?php mosPathWay(); ?></div>
<?php if (mosCountModules('user1')) { ?>
	  							<table class="opentable" width="685" id="usermod">
								<tr valign="top"><td><?php mosLoadModules('user1'); ?></td></tr>
				 				</table>
								<?php } ?>
<div id="mainbody">
<?php mosMainBody(); ?>
</div>
<img src="<?php echo $mosConfig_live_site;?>/templates/<?php echo $mainframe->getTemplate(); ?>/images/spacer.png" alt="spacer.png, 0 kB" title="spacer" class="" height="1" width="16" /></td>
</tr>
</table>
<td class="right_shadow"><img src="<?php echo $mosConfig_live_site;?>/templates/<?php echo $mainframe->getTemplate(); ?>/images/js_hdl_r.png" alt="spacer.png, 0 kB" width="21" height="14" class="" title="spacer" /><br />
</td>
</tr>
<tr>
<td colspan="3" class="bottom">
<div id="runner"></div></td>
</tr>
</table>
</div>
<span class="">&nbsp;</span>
<span class="">&nbsp;</span>
<div class="copy"><a href="http://www.joomlashack.com">Joomla templates by joomlashack</a></div>
<?php mosLoadModules( 'debug', -1 );?>
</body>
</html>
