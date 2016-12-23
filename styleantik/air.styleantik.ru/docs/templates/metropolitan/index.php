<?php defined( "_VALID_MOS" ) or die( "Direct Access to this location is not allowed." );$iso = split( '=', _ISO );echo '<?xml version="1.0" encoding="'. $iso[1] .'"?' .'>';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php mosShowHead(); ?>
<meta http-equiv="Content-Type" content="text/html;><?php echo _ISO; ?>" />
<?php if ( $my->id ) { initEditor(); } ?>
<?php echo "<link rel=\"stylesheet\" href=\"$GLOBALS[mosConfig_live_site]/templates/$GLOBALS[cur_template]/css/template_css.css\" type=\"text/css\"/>" ; ?>
<!--[if IE 6]><style type="text/css" title="Site default">
 #leftnav {position:relative}</style><![endif]-->
</head>

<body>
<center>
<div id="wrapper">
<div id="main">

<div id="top" align="right"><?php mosLoadModules ( 'user3' ); ?></div>

<div id="header">
	<div id="headerleft">
		<div id="headerright">
			<div id="headerback">
	<div id="logo"><a href="<?php echo $mosConfig_live_site;?>/index.php"><img src="<?php echo $mosConfig_live_site;?>/templates/metropolitan/images/logo.gif" alt="Home" name="Home" border="0" /></a></div>
	<div id="buildings"><img src="<?php echo $mosConfig_live_site;?>/templates/metropolitan/images/buildings.gif" alt="Metropolitan" name="Metropolitan" border="0" /></div>
	<div class="clear"></div>
			</div>
		</div>
	</div>
</div>

<div id="content"><?php include_once ("mainbody.php"); ?></div>
<!-- end content -->

<div id="leftnav"><?php mosLoadModules ( 'left' ); ?></div>
<div class="clear"></div>
<!-- end navigation -->

</div><!-- end main -->
</div><!-- end wrapper -->
<div align="center" style="padding-top:5px "><?php include_once('includes/footer.php'); ?></div>
</center>
</body>
</html>