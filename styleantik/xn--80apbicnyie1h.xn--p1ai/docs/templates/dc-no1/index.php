<?php defined( "_VALID_MOS" ) or die( "Direct Access to this location is not allowed." );$iso = split( '=', _ISO );echo '<?xml version="1.0" encoding="'. $iso[1] .'"?' .'>';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php mosShowHead(); ?>
<meta http-equiv="Content-Type" content="text/html;><?php echo _ISO; ?>" />
<?php if ( $my->id ) { initEditor(); } ?>
<?php echo "<link rel=\"stylesheet\" href=\"$GLOBALS[mosConfig_live_site]/templates/$GLOBALS[cur_template]/css/template_css.css\" type=\"text/css\"/>" ; ?><?php echo "<link rel=\"shortcut icon\" href=\"$GLOBALS[mosConfig_live_site]/templates/247portal-b-blue/favicon.ico\" />" ; ?>
<link rel="alternate" title="<?php echo $mosConfig_sitename; ?>" href="<?php echo $GLOBALS['mosConfig_live_site']; ?>/index2.php?option=com_rss&no_html=1" type="application/rss+xml" />
<script language="JavaScript" type="text/javascript">
    <!--
    function MM_reloadPage(init) {  //reloads the window if Nav4 resized
      if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
        document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
      else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
    }
    MM_reloadPage(true);
    //-->
  </script>
<style type="text/css">
<!--
.Stil1 {	font-size: xx-small;
	color: #FFFFFF;
}
-->
</style>
</head>
<body topmargin=0 leftmargin=0 rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0" bgcolor="White" background="<?php echo $mosConfig_live_site;?>/templates/dc-no1/images/bg.gif" bgproperties="FIXED">
<div align="center"><a name="top" id="top"><br></a><table width="750" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
	<td height="88">
	<table width="750" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
	<td width="15"><map name="author">
<area alt="[ design-cibox Template ]" coords="0,28,6,38" href="http://www.design-cibox.de" target="_cibox">
</map>
<img src="<?php echo $mosConfig_live_site;?>/templates/dc-no1/images/head-left.jpg" width="15" height="88" alt="" border="0" usemap="#author"></td>
	<td width="720" background="<?php echo $mosConfig_live_site;?>/templates/dc-no1/images/head-bg.jpg"><table width="720" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
	<td width="250" align="left" valign="middle"><div align="center"><a href="<?php echo $mosConfig_live_site;?>" title="<?php echo $mosConfig_sitename; ?>"><font size="+2" color="Black"><?php echo $mosConfig_sitename; ?></font></a></td>
	<td width="470" align="center" valign="middle"><div align="center"><?php mosLoadComponent( "banners" ); ?></div></td>
</tr>
</table></td>
	<td width="15"><img src="<?php echo $mosConfig_live_site;?>/templates/dc-no1/images/head-right.jpg" width="15" height="88" alt="" border="0"></td>
</tr>
</table></td>
</tr>
<tr>
	<td height="22">
	<table width="750" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
	<td width="15"><img src="<?php echo $mosConfig_live_site;?>/templates/dc-no1/images/topmenu-left.jpg" width="15" height="22" alt="" border="0"></td>
	<td width="720" background="<?php echo $mosConfig_live_site;?>/templates/dc-no1/images/topmenu-bg.jpg"><table width="720" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
	<td width="520" align="left" class="mainlevel-nav"></td>
	<td width="200" align="center"></td>
</tr>
</table></td>
	<td width="15"><img src="<?php echo $mosConfig_live_site;?>/templates/dc-no1/images/topmenu-right.jpg" width="15" height="22" alt="" border="0"></td>
</tr>
</table></td>
</tr>
<tr>
	<td>
	<table width="750" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
	<td width="15" background="<?php echo $mosConfig_live_site;?>/templates/dc-no1/images/center-left.jpg" style="background-repeat: repeat-y;"></td>
	<td width="720" background="<?php echo $mosConfig_live_site;?>/templates/dc-no1/images/center-bg.jpg"><table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
			<td width="11" height="25" background="<?php echo $mosConfig_live_site;?>/templates/dc-no1/images/shadowl.jpg"><div></div></td>
            <td height="25" bgcolor="#F1F1F1" style="border-bottom: 1px solid #999999; border-top: 5px solid #FFFFFF;"><?php mosPathWay(); ?></td>
            <td height="25" align="right" bgcolor="#F1F1F1" style="border-bottom: 1px solid #999999; border-top: 5px solid #FFFFFF;"><div class="date"><?php echo mosCurrentDate(); ?></div></td>
            <td width="11" height="25" align="right" background="<?php echo $mosConfig_live_site;?>/templates/dc-no1/images/shadowr.jpg">&nbsp;</td>
    </tr>
</table>
<table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
			<td valign="top" style="padding-left:8px; background-repeat: repeat-y;" background="<?php echo $mosConfig_live_site;?>/templates/dc-no1/images/shadowl.jpg">&nbsp;</td>
            <td valign="top" style="background-repeat: repeat-y;"background="<?php echo $mosConfig_live_site;?>/templates/dc-no1/images/lb.gif"><?php if (mosCountModules('left')) { ?><div class="leftrow"><?php mosLoadModules ( 'left' ); ?></div><?php } ?></td>
            <td valign="top" bgcolor="#FAFAFA" width="100%"><div class"main">
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
	<tr valign="top" bgcolor="#F1F1F1"><?php if (mosCountModules('top')) { ?>
			<td colspan="3" style="border-top: 3px solid #FFFFFF;"><div><?php mosLoadModules ( 'top' ); ?></div></td><?php } ?>
	</tr>
	<tr><?php if (mosCountModules('user1')) { ?>
			<td valign="top" bgcolor="#F1F1F1" style="border-top: 3px solid #FFFFFF;"><div><?php mosLoadModules ( 'user1' ); ?></div></td>
			<td width="4" class="mod" valign="top" bgcolor="#FFFFFF" style="border-top: 3px solid #FFFFFF;"><div class="mod"> <?php } ?><?php if (mosCountModules('user2')) { ?> </div></td> 
            <td valign="top" bgcolor="#F1F1F1" style="border-top: 3px solid #FFFFFF;"><div><?php mosLoadModules ( 'user2' ); ?></div></td><?php } ?>
	</tr>
	<tr align="left" valign="top">
			<td colspan="3" style=" border-top: 4px solid #FFFFFF; padding: 5px;"><div class="main"><?php mosMainBody(); ?></div></td>
	</tr>
	<tr bgcolor="#F1F1F1">
                  <td colspan="3" valign="top" style="border-top: 3px solid #FFFFFF;"><?php if (mosCountModules('bottom')) { ?>
                    <div>
                      <?php mosLoadModules ( 'bottom' ); ?>
                  </div>
                    <?php } ?></td>
                  </tr>
              </table>
             </td>
            <td valign="top" style="background-repeat: repeat-y; "background="<?php echo $mosConfig_live_site;?>/templates/dc-no1/images/rb.gif"><?php if (mosCountModules('right')) { ?>
                <div class="rightrow">
                  <?php mosLoadModules ( 'right' ); ?>
                </div>                
              <?php } ?></td>
            <td valign="top" style="padding-right: 8px; background-repeat: repeat-y;" background="<?php echo $mosConfig_live_site;?>/templates/dc-no1/images/shadowr.jpg">&nbsp;</td>
          </tr>
        </table></td>
	<td width="15" background="<?php echo $mosConfig_live_site;?>/templates/dc-no1/images/center-right.jpg" style="background-repeat: repeat-y;"></td>
</tr>
</table></td>
</tr>
<tr>
	<td height="30">
	<table width="750" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
	<td width="15" height="30"><img src="<?php echo $mosConfig_live_site;?>/templates/dc-no1/images/foot-left.jpg" width="15" height="30" alt="" border="0"></td>
	<td width="720" height="30" valign="middle" background="<?php echo $mosConfig_live_site;?>/templates/dc-no1/images/foot-bg.jpg"><a href="#top"><img src="<?php echo $mosConfig_live_site;?>/templates/dc-no1/images/top-button.jpg" width="16" height="16" alt="" border="0"></a>&nbsp;&nbsp;<a href="http://www.design-cibox.de" target="_cibox"><font size="-1"><b>&raquo; dc-no1 &laquo;</b></font></a></td>
	<td width="15" height="30"><img src="<?php echo $mosConfig_live_site;?>/templates/dc-no1/images/foot-right.jpg" width="15" height="30" alt="" border="0"></td>
</tr>
</table></td>
</tr>
</table></div>

<br>
</body>
</html>
