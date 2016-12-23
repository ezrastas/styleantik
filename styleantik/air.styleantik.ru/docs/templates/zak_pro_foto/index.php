<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
/**
* Template name:zak_pro_foto
* Version: 1.0
* Creation Date: 20/11/2005
* @package Zak PRO Foto
* @copyright (C) 2005-20019 by www.dizajn.biz
* Copyright: This template is released under the GNU/GPL License (C) 2005-20019 by www.dizajn.biz
* Author Url: www.dizajn.biz
* Author Email: info@dizajn.biz
*/
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
$iso = split( '=', _ISO );
echo '<?xml version="1.0" encoding="'. $iso[1] .'"?' .'>';
?>

<script language="JavaScript" type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<?php if ( $my->id ) initEditor(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php mosShowHead(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo $GLOBALS['mosConfig_live_site']; ?>/templates/<?php echo $cur_template; ?>/css/template_css.css" />
<link rel="shortcut icon" href="<?php echo $GLOBALS['mosConfig_live_site']; ?>/templates/<?php echo $cur_template; ?>/images/favicon.ico"/>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 10px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url(templates/pro_photo/images/pro_foto_10.jpg);
	background-color: #000000;
}
-->
</style>
<link href="css/template_css.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>
</head>

<body>
<table width="854" border="0" align="center" cellpadding="0" cellspacing="0" background="templates/<?php echo $cur_template; ?>/images/pro_foto_10.jpg">
  <tr>
    <td width="20" height="29" align="left">&nbsp;</td>
    <td width="492" height="29" align="left"><table width="492" height="29" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td align="left" valign="bottom"><?php mosLoadModules ( 'user3' ); ?></td>
      </tr>
    </table></td>
    <td width="342" height="29" align="right"><img src="templates/<?php echo $cur_template; ?>/images/pro_foto_03.png" width="342" height="29" /></td>
  </tr>
  <tr>
    <td colspan="3"><table width="854" height="130" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td><img src="templates/<?php echo $cur_template; ?>/images/pro_foto_04.jpg" width="388" height="130" /></td>
        <td><img src="templates/<?php echo $cur_template; ?>/images/pro_foto_05.gif" width="124" height="130" /></td>
        <td><img src="templates/<?php echo $cur_template; ?>/images/pro_foto_06.gif" width="342" height="130" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="21" colspan="3" align="left" valign="middle" background="templates/<?php echo $cur_template; ?>/images/pro_foto_07.gif"><table width="450" height="17" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="19">&nbsp;</td>
        <td width="431" align="left" valign="middle"><span class="pathway">
          <?php include "pathway.php"; ?>
        </span></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="854" border="0" align="center" cellpadding="0" cellspacing="0" background="templates/<?php echo $cur_template; ?>/images/pro_foto_10.jpg">
  <tr>
    <td align="center" valign="bottom"><table width="854" height="10" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="190" height="10" align="left" valign="top"><img src="templates/<?php echo $cur_template; ?>/images/pro_foto_08.gif" width="190" height="11" /></td>
        <td width="10" height="10" valign="top"><img src="templates/<?php echo $cur_template; ?>/images/pro_foto_10.jpg" width="10" height="10" /></td>
        <td height="10" align="right" valign="bottom"><img src="templates/<?php echo $cur_template; ?>/images/pro_foto_11.gif" width="654" height="10" class="style1" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="854" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="190" align="left" valign="top" background="templates/<?php echo $cur_template; ?>/images/pro_foto_27.gif"><table width="190" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="left" valign="top" background="templates/<?php echo $cur_template; ?>/images/pro_foto_12.gif"><table width="190" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>&nbsp;</td>
                <td width="174" align="left" valign="top"><?php mosLoadModules ( 'menu' ); ?></td>
                <td>&nbsp;</td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><img src="templates/<?php echo $cur_template; ?>/images/pro_foto_22.gif" width="190" height="10" /></td>
          </tr>
          <tr>
            <td><img src="templates/<?php echo $cur_template; ?>/images/pro_foto_24.gif" width="190" height="7" /></td>
          </tr>
          <tr>
            <td><img src="templates/<?php echo $cur_template; ?>/images/pro_foto_25.gif" width="190" height="11" /></td>
          </tr>
          <tr>
            <td><table width="190" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>&nbsp;</td>
                <td width="174" align="left" valign="top"><?php mosLoadModules ( 'left' ); ?></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td width="174" align="left" valign="top"><?php mosLoadModules ( 'right' ); ?></td>
                <td>&nbsp;</td>
              </tr>
            </table></td>
          </tr>
          
        </table></td>
        <td width="10">&nbsp;</td>
        <td width="654" align="left" valign="top" background="templates/<?php echo $cur_template; ?>/images/pro_foto_14.gif"><table width="654" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td>&nbsp;</td>
            <td width="638"><table width="638" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="309" align="right" valign="top"><table width="305" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td align="left" valign="top"><?php mosLoadModules ( 'user1' ); ?></td>
                  </tr>
                </table></td>
                <td width="20">&nbsp;</td>
                <td width="309" align="left" valign="top"><?php mosLoadModules ( 'user2' ); ?></td>
              </tr>
            </table></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td width="638" align="left" valign="top"><?php include ("mainbody.php"); ?></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td width="638" align="left" valign="top"><?php mosLoadModules ( 'bottom' ); ?></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td align="center" valign="top"><?php mosLoadComponent( "banners" ); ?></td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="854" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="190" height="21"><img src="templates/<?php echo $cur_template; ?>/images/pro_foto_28.gif" width="190" height="21" /></td>
        <td width="10" height="21"><img src="templates/<?php echo $cur_template; ?>/images/pro_foto_29.gif" width="10" height="21" /></td>
        <td width="654" height="21" align="left" valign="top"><img src="templates/<?php echo $cur_template; ?>/images/pro_foto_30.gif" width="654" height="21" /></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="854" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="8" height="11" colspan="3"><img src="templates/<?php echo $cur_template; ?>/images/pro_foto_31.gif" width="854" height="11" /></td>
  </tr>
  <tr>
    <td width="415" height="104" align="right" valign="top" background="templates/<?php echo $cur_template; ?>/images/pro_foto_32.gif"><table width="415" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>&nbsp;</td>
        <td width="405" align="left" valign="top"><?php mosLoadModules ( 'advert1' ); ?></td>
      </tr>
    </table></td>
    <td background="templates/<?php echo $cur_template; ?>/images/pro_foto_33.gif"><img src="templates/<?php echo $cur_template; ?>/images/pro_foto_33.gif" width="24" height="104" /></td>
    <td width="415" height="104" align="left" valign="top" background="templates/<?php echo $cur_template; ?>/images/pro_foto_34.gif"><table width="415" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="405" align="left" valign="top"><?php mosLoadModules ( 'advert2' ); ?></td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="10" colspan="3"><img src="templates/<?php echo $cur_template; ?>/images/pro_foto_35.gif" width="854" height="10" /></td>
  </tr>
</table>
<table width="854" height="25" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#000000">
  <tr>
    <td>&nbsp;</td>
    <td width="654" align="center" valign="middle"><span class="style1">Design by Zak Mahuna</span> <span class="style1">&copy; 2005</span>  <a href="http://dizajn.biz" target="_self">www.dizajn.biz</a></td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
