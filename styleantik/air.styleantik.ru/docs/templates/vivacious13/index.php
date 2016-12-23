<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
$iso = explode( '=', _ISO );
echo '<?xml version="1.0" encoding="'. $iso[1] .'"?' .'>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php mosShowHead(); ?>
<?php
if ( $my->id ) {
	initEditor();
}
?>
<meta http-equiv="Content-Type" content="text/html; <?php echo _ISO; ?>" />
<link href="<?php echo $mosConfig_live_site;?>/templates/<?php echo $cur_template; ?>/css/template_css.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="<?php echo $GLOBALS[mosConfig_live_site]?>/images/favicon.ico" />
</head>
<body>
<div id="outer" class="outer">
	<div class="section1">
		<div class="sitename"><?php echo $mosConfig_sitename; ?></div>
		<div class="sitedate"><?php echo mosCurrentDate(); ?></div>
		<div id="pathway_outer" class="pathway_outer">
			<div id="pathway" class="pathway"><?php mosPathWay(); ?></div>
		</div>
	</div>
	<div class="section2">
		<?php if (mosCountModules( 'user3' ) ) { ?>
			<div id="user3" class="user3">
				<?php mosLoadModules ( 'user3' ); ?>
			</div>
		<?php } ?>
		<div class="logo"><img src="<?php echo $mosConfig_live_site;?>/templates/<?php echo $cur_template; ?>/images/logo.gif" alt="Free Mambo Templates TY2U.com" /></div>
		<?php if (mosCountModules( 'top' ) ) { ?>
		<div class="topspace">
			<?php mosLoadModules ( 'top' ); ?>
		</div>
		<?php } ?>
	</div>
	<div class="section3">
		<div class="search_outer">
		  <div class="search_inner">
				<form action="index.php" method="post">
				  <input class="inputbox" type="text" name="searchword" size="15" tabindex="1" value="<?php echo _SEARCH_BOX; ?>"  onblur="if(this.value=='') this.value='<?php echo _SEARCH_BOX; ?>';" onfocus="if(this.value=='<?php echo _SEARCH_BOX; ?>') this.value='';" />
					<br /><?php echo "<input name=\"submit\" type=\"image\" src=\"$GLOBALS[mosConfig_live_site]/templates/$GLOBALS[cur_template]/images/search.gif\" class=\"searchbutton\" tabindex=\"2\" value=\"Search\"/>" ; ?>
			  		<div class="advsearch"><a href="/index.php?option=com_search">Advanced Search</a></div>
				  <input type="hidden" name="option" value="search" />
				</form>
			</div>
		</div>
		<?php if (mosCountModules( 'left' ) ) { ?>
		<div class="leftside">
			<div class="boxtopl"></div>
				<?php mosLoadModules ( 'left' ); ?>
			<div class="boxbottoml"></div>
		</div>
		<?php } ?>
	</div>
	<?php if (mosCountModules( 'user1' ) || mosCountModules( 'user2' ) ) { ?>
	<div class="section4">
		<div class="user_outer">
					<?php if (mosCountModules( 'user1' ) ) { ?>
						<div class="user_1">
						<div class="boxtopu1"></div>
						<div id="user1" class="user1">
							<div id="user1_2" class="user1_2">
							<?php mosLoadModules ( 'user1' ); ?>
						</div></div>
						<div class="box_bu1">
							<div class="box_blu1"></div><div class="box_bru1"></div>
						</div>
						</div>
					<?php } ?>
					<?php if (mosCountModules( 'user2' ) ) { ?>
						<div class="user_2">
						<div class="boxtopu2"></div>
						<div id="user2" class="user2">
							<div id="user2_2" class="user2_2">
							<?php mosLoadModules ( 'user2' ); ?>
						</div></div>
						<div class="box_bu2">
							<div class="box_blu2"></div><div class="box_bru2"></div>
						</div>
						</div>
					<?php } ?>
		</div>
	</div>
	<?php } ?>
	<div class="section5">
		<?php if (mosCountModules( 'right' ) ) { ?>
		<div class="rightside">
			<div class="boxtopr"></div>
				<?php mosLoadModules ( 'right' ); ?>
			<div class="boxbottomr"></div>
		</div>
		<?php } ?>
	</div>
	<div class="section6">
		<div class="mainbody">
			<?php mosMainBody(); ?>
		</div>
	</div>
	<div class="section7">
		<?php if (mosCountModules( 'bottom' ) ) { ?>
		<div class="bottom">
			<?php mosLoadModules( 'bottom' ); ?>
		</div>
		<?php } ?>
		<?php if (mosCountModules( 'banners' ) ) { ?>
		<div class="banner">
			<?php mosLoadComponent( 'banners' ); ?>
		</div>
		<?php } ?>
		<div class="footer">
			<?php if (mosCountModules( 'footer' ) ) { ?>
				<?php mosLoadModules( 'footer' ); ?>
			<?php } ?>
			<?php include_once( $GLOBALS['mosConfig_absolute_path'] . '/includes/footer.php' ); ?>
		</div>
			<?php if ( mosCountModules ('debug') ) { ?>
					<?php mosLoadModules( 'debug', -1 ); ?>
			<?php } ?>
	</div>
</div>
</body>
</html>