<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
  defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; <?php echo _ISO; ?>" />
  <?php
    if ($my->id) {
      initEditor();
    }
    mosShowHead();
  ?>
  <style type="text/css">
    @import url(<?php echo $mosConfig_live_site;?>/templates/<?php echo $cur_template; ?>/css/template_css.css);
  </style>
  <link rel="shortcut icon" href="<?php echo $mosConfig_live_site;?>/<?php echo $mosConfig_favicon; ?>" />
</head>

<body >
  <p class="css_browser_check">
    <big>You will not be able to view this website in all its glory until you upgrade your browser to one that supports web standards.  </big>
  </p>
  
  <div class="nav">
  	  <h1><?php echo $mosConfig_sitename;?></h1>
          <b class="xtop"><b class="xb1"></b><b class="xb2"></b><b class="xb3"></b><b class="xb4"></b><b class="xb5"></b><b class="xb6"></b><b class="xb7"></b><b class="xb8"></b><b class="xb9"></b><b class="xb10"></b></b>
        <div class="xboxcontent">
          <div class="xboxcontent_inner">
            <?php mosPathWay(); ?>
            <?php mosLoadModules ( 'left', -2 ); ?>
          </div>
        </div>
        <b class="xbottom"><b class="xb10"></b><b class="xb9"></b><b class="xb8"></b><b class="xb7"></b><b class="xb6"></b><b class="xb5"></b><b class="xb4"></b><b class="xb3"></b><b class="xb2"></b><b class="xb1"></b></b>
  </div>
  <div class=main>
  	<b class="xtop"></b><b class="xb1"></b><b class="xb2"></b><b class="xb3"></b><b class="xb4"></b><b class="xb5"></b><b class="xb6"></b><b class="xb7"></b><b class="xb8"></b><b class="xb9"></b><b class="xb10"></b></b>
    <div class="xboxcontent">
      <div class="xboxcontent_inner">
      <br>
    	<?php mosLoadModules ( 'top', -2 ); ?>
        <?php mosMainBody(); ?>
        <?php mosLoadModules ( 'bottom', -2 ); ?>
      </div>
    </div>
    <b class="xbottom"><b class="xb10"></b><b class="xb9"></b><b class="xb8"></b><b class="xb7"></b><b class="xb6"></b><b class="xb5"></b><b class="xb4"></b><b class="xb3"></b><b class="xb2"></b><b class="xb1"></b></b>
  </div>
  
  <?php if ( mosCountModules( 'right' ) > 0) { ?>
		<div class="info">
  		<b class="xtop"></b><b class="xb1"></b><b class="xb2"></b><b class="xb3"></b><b class="xb4"></b><b class="xb5"></b><b class="xb6"></b><b class="xb7"></b><b class="xb8"></b><b class="xb9"></b><b class="xb10"></b></b>
    	<div class="xboxcontent">
          <div class="xboxcontent_inner">
            <?php mosLoadModules ( 'right', -2 ); ?>
      	    <a href="http://www.wunderground.com/US/CO/Granby.html?bannertypeclick=infoboxtr"><img src="http://banners.wunderground.com/weathersticker/infoboxtr_both/language/www/US/CO/Granby.gif" border=0 alt="Click for Granby, Colorado Forecast" height=108 width=144></a>
          </div>
        </div>
    	<b class="xbottom"><b class="xb10"></b><b class="xb9"></b><b class="xb8"></b><b class="xb7"></b><b class="xb6"></b><b class="xb5"></b><b class="xb4"></b><b class="xb3"></b><b class="xb2"></b><b class="xb1"></b></b>
  	</div>
  <?php } ?>
</body>
</HTML>
