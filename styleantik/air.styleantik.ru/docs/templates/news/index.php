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
<?php
if ( $my->id ) {
	initEditor();
}
?>
<meta http-equiv="Content-Type" content="text/html; <?php echo _ISO; ?>" />
<?php mosShowHead(); ?>
<link href="<?php echo $mosConfig_live_site;?>/templates/news/css/template_css.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="<?php echo $mosConfig_live_site;?>/images/favicon.ico" />
</head>
<body class="page_bg">
<a name="up" id="up"></a>
<?php
@$collspan_offset = ( mosCountModules( 'right' ) + mosCountModules( 'user2' ) and !$_REQUEST['task'] == 'edit' ) ? 2 : 1;
$user1=mosCountModules( 'user1' );
$user2=mosCountModules( 'user2' );
$user3=mosCountModules( 'user3' );
$user4=mosCountModules( 'user4' );

?>
<div align="center" >
<table width="818" height="100%"border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="10" height="10" background="<?php echo $mosConfig_live_site;?>/templates/news/images/shadow_1.gif"></td>
<td valign="top" style="background-repeat: repeat-x;" background="<?php echo $mosConfig_live_site;?>/templates/news/images/shadow_top.gif"></td>
<td width="10" height="10" background="<?php echo $mosConfig_live_site;?>/templates/news/images/shadow_2.gif"></td>
</tr>
<tr>
<td valign="top" style="background-repeat: repeat-y;" background="<?php echo $mosConfig_live_site;?>/templates/news/images/shadow_right.gif"></td>
<td><table width="798" border="0" cellpadding="0" cellspacing="0" class="big_frame">
	<tr>
		<td colspan="<?php echo $collspan_offset; ?>" class="header">
		<img src="<?php echo $mosConfig_live_site; ?>/templates/news/images/spacer.png" width="646" height="9" alt=""/>
		<br />
		</td>
		<td class="top_right_box" style="width: 151px; padding-left: 5px;" valign="top">
			<table cellpadding="0" cellspacing="1" border="0" width="120" class="search">
			<tr>
				<td class="search_title" width="145">
				SEARCH
				</td>
			</tr>
			<tr>
				<td>
				<form action='index.php' method='post'>
				<div class="searchblock" id="searchblock">
				Enter text:
				<input size="15" class="inputbox" type="text" name="searchword" style="width:128px;" value="search..."  onblur="if(this.value=='') this.value='search...';" onfocus="if(this.value=='search...') this.value='';" />
				<input type="hidden" name="option" value="search" />
					<div align="left">
					<input type="submit" value="GO" class="button" style="width:35px;" />
					</div>
				</div>
				</form>
				</td>
			</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td colspan="<?php echo $collspan_offset+1; ?>" class="silver_box" style="height:26px;">
		<div id="silver_toolbar">
			<div id="silver_date">
			<?php echo mosCurrentDate(); ?>
			</div>
			<div id="silver_menu">
			<?php mosLoadModules ( 'top' ); ?>
			</div>
			<div style="clear: both;"></div>
		</div>
		</td>
	</tr>
	 <?php if ( $user1 > 0 or $user2 > 0 or $user3 > 0 or $user4 > 0 )
	 { ?>
	<tr>
		<td valign="top" height="150" colspan="<?php echo $collspan_offset+1; ?>" class="user">
		<table width="798" height="150" border="0" cellpadding="0" cellspacing="2" class="top_user">
		<tr>
		<td valign="top" width="25%" height="150" class="user4">
		<?php mosLoadModules ( 'user1'); ?>
		</td>
		<td valign="top" width="25%" height="150" class="user4">
		<?php mosLoadModules ( 'user2'); ?>
		</td>
		<td valign="top" width="25%" height="150" class="user4">
		<?php mosLoadModules ( 'user3'); ?>
		</td>
		<td valign="top" width="25%" height="150" class="user4">
		<?php mosLoadModules ( 'user4'); ?>
		</td>
		</tr>
		</table>
		</td>
	</tr>
	<? } ?>
	<tr>
	    <td colspan="<?php echo $collspan_offset+1; ?>" class="pathway" style="height:26px;"><?php mosPathWay(); ?></td>
	</tr>
	<tr>
		<td valign="top" class="content_box">
			<table border="0" cellpadding="4" cellspacing="4" width="100%">
			<tr valign="top">
				<td>
				<!-- main content area -->
				<div class="contentblock" id="contentblock" style="width:<?php echo 635 - ( 151 * ( $collspan_offset-1 ) )   ?>">

					<?php
					if ( mosCountModules( 'banner' ) ) {
						mosLoadModules ( 'banner' );
					}
					mosMainBody();
					?>
					<br />
				</div>
				<?php
				if ( mosCountModules( 'bottom' ) ) { ?>
					<div class="footerblock" id="footerblock">
					<?php mosLoadModules ( 'bottom' ); ?>
					<br />
					</div>
					<?php
				}
				?>
				</td>
			</tr>
			</table>
		</td>
		<?php
		if ( ( mosCountModules( 'right' ) + mosCountModules( 'user2' ) ) and @!$_REQUEST['task'] == 'edit' ) {
			?>
			<td valign="top" class="middle_box" width="151" style="width:151px">
			<div id="middle_box">
				<?php
				if ( mosCountModules( 'right' ) ) {
					?>
					<div class="rightblock" id="rightblock" style="width:143px">
					<?php mosLoadModules ( 'right' ); ?>
					</div>
					<?php } ?>
			</div>
			</td>
			<?php
		}
		?>
		<td valign="top" class="right_box" width="151" style="width: 151px">
		<div id="right_box">
			<!-- far right menu -->
			<div class="leftblock" id="leftblock" style="width:143px">
			<?php mosLoadModules ( 'left' ); ?>
			</div>
			<div class="user1block" id="user1block" style="width:143px">
			</div>
		</div>
		</td>
	</tr>
	<tr>
		<td class="footer" color="#FFFFFF" colspan="<?php echo $collspan_offset+1; ?>">
                    <?php include_once( $GLOBALS['mosConfig_absolute_path'] . '/includes/footer.php' ); ?>
		</td>
	</tr>
	</table>
</td>
<td valign="top" style="background-repeat: repeat-y;" background="<?php echo $mosConfig_live_site;?>/templates/news/images/shadow_left.gif"></td>
</tr>
<tr>
<td width="10" height="10" background="<?php echo $mosConfig_live_site;?>/templates/news/images/shadow_4.gif"></td>
<td valign="top" style="background-repeat: repeat-x;" background="<?php echo $mosConfig_live_site;?>/templates/news/images/shadow_bottom.gif"></td>
<td width="10" height="10" background="<?php echo $mosConfig_live_site;?>/templates/news/images/shadow_3.gif"></td>
</tr>
</div>
<?php mosLoadModules( 'debug', -1 );?>
</body>
</html>
