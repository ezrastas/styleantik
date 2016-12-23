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
<?php mosShowHead(); ?>
<?php
if ( $my->id ) {
	initEditor();
}
$collspan_offset = ( mosCountModules( 'right' ) + mosCountModules( 'user2' ) ) ? 2 : 1;
//script to determine which div setup for layout to use based on module configuration
$user1 = 0;
$user2 = 0;
$colspan = 0;
$right = 0;
// banner combos

//user1 combos
if ( mosCountModules( 'user1' ) + mosCountModules( 'user2' ) == 2) {
	$user1 = 2;
	$user2 = 2;
	$colspan = 3;
} elseif ( mosCountModules( 'user1' ) == 1 ) {
	$user1 = 1;
	$colspan = 1;
} elseif ( mosCountModules( 'user2' ) == 1 ) {
	$user2 = 1;
	$colspan = 1;
}

//right based combos
if ( mosCountModules( 'right' ) and ( empty( $_REQUEST['task'] ) || $_REQUEST['task'] != 'edit' ) ) {
	$right = 1;
} 
?>
<meta http-equiv="Content-Type" content="text/html; <?php echo _ISO; ?>" />
<link href="<?php echo $mosConfig_live_site;?>/templates/<?php echo $cur_template; ?>/css/template_css.css" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" href="<?php echo $mosConfig_live_site;?>/images/favicon.ico"/>
</head>
<body>
<div class="backcolor">
<h1 class="sitename"><?php echo $mosConfig_sitename; ?></h1>
<h1 class="sitename"><font size="2">Slogan here.</font></h3>
<div align="center">
	<div id="main_outer">
		<div id="main_inner">
			<?php
				if ( mosCountModules ('user3') ) {
			?>
			<div id="buttons_outer">
			  <div id="buttons_inner">
					<div id="buttons">
					<?php mosLoadModules ( 'user3', -1); ?>
					</div>
				</div>
			</div>
			<?php
			}
			?>
			<div id="header_outer">
				<div class="logo"></div>
				<div id="header">
				</div>
			</div>
			<div id="pathway_outer">
			  <span id="pathway_inner">
					<div id="pathway_text">
					<?php mosPathWay(); ?>
					</div>
				</span>
			<?php
				if ( mosCountModules ('user4') ) {
			?>
			<div id="search_outer">
			  <div id="search_inner">
			  <?php mosLoadModules ( 'user4', -1 ); ?>
			  </div>
			</div>
			<?php
			}
			?>
			</div>
			<?php if ( mosCountModules( 'top' ) ) { ?>
			<div id="top_outer">
				<div id="top_inner">
					<?php mosLoadModules ( 'top' ); ?>
				 </div>
			</div>
			<?php } ?>
			<span id="top_spacer"></span>
			<div id="left_outer">
				<div id="left_inner">
				<?php mosLoadModules ( 'left' ); ?>
				</div>
			</div>
			<div id="content_outer">
				<div id="content_inner">
					<table border="0" cellpadding="0" cellspacing="0" width="100%" class="content_table_outer">
						<tr valign="top">
							<td>
								<?php
									if ( mosCountModules ('banner') ) {
								?>
										<div class="banner_outer">
										<div class="banner_inner">
										<?php mosLoadModules( 'banner', -1 ); ?>
										</div>
										</div>
								<?php
									}
								?>
								
                <table border="0" cellpadding="0" cellspacing="0" class="content_table_inner">
                  <?php 
										if ($colspan > 0) {
									?>
                  <tr> 
                    <td width="100%" colspan="<?php echo $colspan; ?>"> 
						<table class="user_mods" align=-"left" border="0" cellpadding="0" cellspacing="0" width="100%">
							<?php 
								if ($colspan > 0) {
							?>
									<tr>
									<?php
										if ( $user1 > 0 ) {
									?>
											<td class="user1_outer">
												<div class="user1_inner">
													<?php mosLoadModules ( 'user1' ); ?>
												</div>
											</td>
									<?php
										}	
										if ( $colspan == 3) {
										?>
										<td width="2">
											<img src="<?php echo $mosConfig_live_site;?>/templates/<?php echo $cur_template; ?>/images/spacer.png" alt="" title="spacer" border="0" height="10" width="2"/>	
										</td>
										<?php
										}
										if ( $user2 > 0 ) {
									?>
									<td class="user2_outer">
										<div class="user2_inner">
											<?php mosLoadModules ( 'user2' ); ?>
										</div>
									</td>
									<?php
										}	

									?>
									</tr>
							<?php
								}
							?>
						</table>
                    </td>
                  </tr>
                  <?php
										}
									?>
                  <tr> 
                    <td colspan="<?php echo $colspan; ?>" class="body_outer"> 
                      <?php mosMainBody(); ?>
                    </td>
                  </tr>
                </table>
							</td>
							<?php
							if ( mosCountModules( 'right' ) ) {
							?>
									<td class="rightside">
										<div id="right_outer">
											<div id="right_inner">
												<?php mosLoadModules ( 'right' ); ?>
											</div>
											
										</div>
									</td>
									
							<?php
								}
							?>
						</tr>
					</table>
				</div>
			</div>
			<div class="clr"></div>
		</div>
	</div>
</div>
<div id="footer"><?php include_once( $GLOBALS['mosConfig_absolute_path'] . '/includes/footer.php' ); ?></div>
<?php mosLoadModules( 'debug', -1 );?>
</div>
</body>
</html>