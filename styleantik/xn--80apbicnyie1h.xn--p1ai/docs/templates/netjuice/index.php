<!-- 
Network Juice - a nice, tableless template in CSS, with an icon bar. For Mambo 4.5.1+
Original designed by Will Buckingham, http://www.mambomango.com - Copyright 2005
Reworked by AriadneCMS Italy, http://www.ariadnecms.it 

This template is issued under the GNU/GPL license
Icons by Icon King - http://www.icon-king.com
Links tweak adapted from Peek's "cool links". http://www.peekmambo.com
-->

<?php 
defined( "_VALID_MOS" ) or die( "Direct Access to this location is not allowed." );
$iso = split( '=', _ISO );
echo '<?xml version="1.0" encoding="'. $iso[1] .'"?' .'>';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang='en' xml:lang='en' xmlns='http://www.w3.org/1999/xhtml'>
  <head>
    <?php if ( $my->id ) { initEditor(); } ?>
    <?php mosShowHead(); ?>
    <meta http-equiv="Content-Type" content="text/html;><?php echo _ISO; ?>" />
    <link href="<?php echo $mosConfig_live_site;?>/templates/netjuice/css/template_css.css" rel="stylesheet" type="text/css" />
  </head>
  
  <body>
    <?php 
    // Load the javascript dhtml effect ONLY for the home page
	if (empty($option) || $option == "com_frontpage" || empty($Itemid) || $Itemid == 0) { 
      echo "<script language=\"JavaScript\" type=\"text/javascript\" src=\"".$mosConfig_live_site."/templates/netjuice/jscript/moving_bits.js\"></script>";
    }
	?>
	<div id="wrapper">
      <div id="header">
        <?php 
		// Display also the section name, if showing pages other than home
		if (!empty($option) && $option != "com_frontpage" && !empty($Itemid) && $Itemid != 0) { 
          echo strtolower(str_replace(" -", "<br /><span id=\"header_small\">&raquo;&nbsp;", $mainframe->getPageTitle()))."</span>"; 
		}
		else {
		  echo strtolower($mosConfig_sitename)."<br /><span id=\"header_small\">&nbsp;</span>";
		}
		?>
      </div>

	  
      <div id="menu">

	  <?php 
		// Static link manager reworked by AriadneCMS
		// Edit variable definitions below to change the link location,
		// alt text/tooltips and the image file name for each icon.
		// Upload new icon images to the templates/netjuice/images directory.
		// Images packaged with template are 32x32 pixels
		// Original idea by PeekMambo Cool links http://www.peekmambo.com
        // Default images by Icon King: http://www.icon-king.com
		//
		$my_menu_entries = array (
		  array ( "location" => "index.php",
		          "alt_text" => "home page",
		          "icon_img" => "home.gif" ),
          array ( "location" => "#",
		          "alt_text" => "latest news",
                  "icon_img" => "news.gif" ),
          array ( "location" => "#",
                  "alt_text" => "about us",
                  "icon_img" => "about.gif" ),
          array ( "location" => "#",
                  "alt_text" => "downloads",
                  "icon_img" => "download.gif" ),
          array ( "location" => "#",
                  "alt_text" => "join our forum",
                  "icon_img" => "chat.gif" ),
          array ( "location" => "#",
                  "alt_text" => "browse pictures' gallery",
                  "icon_img" => "gallery.gif" )
		);
		
        // ** DO NOT MODIFY THE CODE BELOW THIS LINE ** 
		if (count($my_menu_entries) > 0) {
		  echo "<ul>";
		  foreach ($my_menu_entries as $index_counter => $a_single_entry) {
		    echo "<li><a tabindex=\"".$index_counter."\" title=\"".$a_single_entry["alt_text"]."\" href=\"".sefRelToAbs($a_single_entry["location"])."\"><img src=\"".$mosConfig_live_site."/templates/netjuice/images/".$a_single_entry["icon_img"]."\" border=\"0\" alt=\"".$a_single_entry["alt_text"]."\" /></a></li>";
          }
		  echo "</ul>";
		}
      ?>
      </div>

      <div class="spacer"></div>

      <div id="mainbody">
        <div id="navigation">
          <?php mosLoadModules ( 'left' ); ?>
          <?php mosLoadModules ( 'right' ); ?>
        </div>

        <div id="content">
          <!-- Content Pane -->
          <div class="path">
            routing path <img src="<?php echo $mosConfig_live_site;?>/templates/netjuice/images/arrow.png" border="0" alt="" />
            <?php mosPathWay(); ?>
          </div>
		  
          <div class="spacer">&nbsp;</div>
		  
          <div id="top">
            <?php mosLoadModules ( 'top' ); ?>
          </div>
		  
          <div class="spacer">&nbsp;</div>
		  		  
          <div>
            <?php mosMainBody(); ?>
          </div>
		  
          <div class="spacer">&nbsp;</div>
		  
          <div id="bottom">
            <?php mosLoadModules ( 'bottom' ); ?>
          </div>
		  
        </div>
        <!-- end of content div -->
      </div>
      <!-- end of mainbody div-->
	  
      <div id="footer">
		<a title="xhtml 1.0 valid " href="http://validator.w3.org/check?uri=referer"><img 
		   src="<?php echo $mosConfig_live_site; ?>/templates/netjuice/images/xhtml-80x15.png"
		   border="0" alt="" /></a>
		<a title="css valid " href="http://jigsaw.w3.org/css-validator/validator?uri=<?php echo $mosConfig_live_site; ?>/templates/netjuice/css/template_css.css"><img 
		   src="<?php echo $mosConfig_live_site; ?>/templates/netjuice/images/css-80x15.png"
		   border="0" alt="" /></a>
		<a title="php powered " href="http://www.php.net/"><img 
		   src="<?php echo $mosConfig_live_site; ?>/templates/netjuice/images/php-80x15.png"
		   border="0" alt="" /></a>

		<div class="spacer_mini">&nbsp;</div>
        Original design by 
        <a href="http://www.mambomango.com" title="go to mambomango main site, english">mambomango.com</a> - 
		Reworked by
        <a href="http://www.ariadnecms.it" title="go to ariadnecms main site, italian">ariadnecms.it</a>

      </div> 
     </div>
  </body>
</html>
