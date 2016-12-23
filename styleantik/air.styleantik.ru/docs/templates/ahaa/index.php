<?php echo "<?xml version=\"1.0\"?>";
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $mosConfig_sitename; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php
if ($my->id) {
    include ("editor/editor.php");
    initEditor();
}
?>
<?php include ("includes/metadata.php"); ?>
<link href="<?php echo $mosConfig_live_site;?>/templates/ahaa/css/template_css.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="<?php echo $mosConfig_live_site;?>/images/favicon.ico" />
<style type="text/css">
<!--
body {
	margin-top: 0px;
	margin-bottom: 0px;
	background-color: #336699;
}
-->
</style></head>
<body>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
<!-- Shim row, height 1. -->
   <td><img src="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/spacer.gif" width="15" height="1" border="0" alt=""></td>
   <td><img src="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/spacer.gif" width="85" height="1" border="0" alt=""></td>
   <td><img src="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/spacer.gif" width="18" height="1" border="0" alt=""></td>
   <td><img src="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/spacer.gif" width="27" height="1" border="0" alt=""></td>
   <td><img src="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/spacer.gif" width="171" height="1" border="0" alt=""></td>
   <td><img src="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/spacer.gif" width="11" height="1" border="0" alt=""></td>
   <td><img src="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/spacer.gif" width="152" height="1" border="0" alt=""></td>
   <td><img src="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/spacer.gif" width="9" height="1" border="0" alt=""></td>
   <td><img src="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/spacer.gif" width="84" height="1" border="0" alt=""></td>
   <td><img src="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/spacer.gif" width="70" height="1" border="0" alt=""></td>
   <td><img src="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/spacer.gif" width="158" height="1" border="0" alt=""></td>
   <td><img src="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/spacer.gif" width="1" height="1" border="0" alt=""></td>
  </tr>

  <tr><!-- row 1 -->
   <td rowspan="4"><img name="index1" src="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/index1.gif" width="15" height="38" border="0" alt=""></td>
   <td colspan="3"><img name="index2" src="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/index2.gif" width="130" height="4" border="0" alt=""></td>
   <td rowspan="4" colspan="7" background="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/index3.gif" width="655" height="38" border="0" alt=""></td>
   <td><img src="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/spacer.gif" width="1" height="4" border="0" alt=""></td>
  </tr>
  <tr><!-- row 2 -->
   <td colspan="3" background="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/index4.gif" width="130" height="30" border="0" alt=""></td>
   <td><img src="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/spacer.gif" width="1" height="30" border="0" alt=""></td>
  </tr>
  <tr><!-- row 3 -->
   <td colspan="3"><img name="index5" src="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/index5.gif" width="130" height="1" border="0" alt=""></td>
   <td><img src="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/spacer.gif" width="1" height="1" border="0" alt=""></td>
  </tr>
  <tr><!-- row 4 -->
   <td colspan="3"><img name="index6" src="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/index6.gif" width="130" height="3" border="0" alt=""></td>
   <td><img src="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/spacer.gif" width="1" height="3" border="0" alt=""></td>
  </tr>
  <tr><!-- row 5 -->
   <td colspan="9" background="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/index7.gif" width="572" height="29" border="0" alt=""><span class="pathway">
     <?php include "pathway.php"; ?>
   </span></td>
   <td background="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/index8.gif" width="70" height="29" border="0" alt=""></td>
   <td background="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/index9.gif" width="158" height="29" border="0" alt=""><form style=' MARGIN-TOP: 3px; MARGIN-BOTTOM: 0px; MARGIN-LEFT: 10px ' action='<?php echo sefRelToAbs("index.php"); ?>' method="post">
                
        <div align="left">
          <input class="inputbox" type="text" name="searchword" size="15" value="<?php echo _SEARCH_BOX; ?>"  onblur="if(this.value=='') this.value='<?php echo _SEARCH_BOX; ?>';" onfocus="if(this.value=='<?php echo _SEARCH_BOX; ?>') this.value='';" />
          <input type="hidden" name="option" value="search" />
        </div>
   </form></td>
   <td><img src="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/spacer.gif" width="1" height="29" border="0" alt=""></td>
  </tr>
  <tr><!-- row 6 -->
   <td rowspan="2" colspan="5" background="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/index10.gif" width="316" height="127" border="0" alt=""></td>
   <td rowspan="2"><img name="index11" src="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/index11.gif" width="11" height="127" border="0" alt=""></td>
   <td rowspan="2" background="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/index12.gif" width="152" height="127" border="0" alt=""></td>
   <td rowspan="3"><img name="index13" src="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/index13.gif" width="9" height="136" border="0" alt=""></td>
   <td rowspan="2" colspan="2" background="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/index14.gif" width="154" height="127" border="0" alt=""></td>
   <td><img name="index15" src="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/index15.gif" width="158" height="16" border="0" alt=""></td>
   <td><img src="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/spacer.gif" width="1" height="16" border="0" alt=""></td>
  </tr>
  <tr><!-- row 7 -->
   <td width="158" height="111" valign="top" background="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/index16.gif" border="0" alt=""><?php mosLoadModules ( 'inset' ); ?></td>
   <td><img src="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/spacer.gif" width="1" height="111" border="0" alt=""></td>
  </tr>
  <tr><!-- row 8 -->
   <td rowspan="2" colspan="2" background="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/index17.gif" width="100" height="23" border="0" alt=""></td>
   <td rowspan="2" colspan="3" background="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/index18.gif" width="216" height="23" border="0" alt=""></td>
   <td rowspan="2"><img name="index19" src="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/index19.gif" width="11" height="23" border="0" alt=""></td>
   <td rowspan="2" background="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/index20.gif" width="152" height="23" border="0" alt=""></td>
   <td rowspan="2" colspan="2" background="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/index21.gif" width="154" height="23" border="0" alt=""></td>
   <td rowspan="2" background="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/index22.gif" width="158" height="23" border="0" alt=""><span class="small"><?php echo (strftime (_DATE_FORMAT_LC)); ?></span></td>
   <td><img src="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/spacer.gif" width="1" height="9" border="0" alt=""></td>
  </tr>
  <tr><!-- row 9 -->
   <td><img name="index23" src="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/index23.gif" width="9" height="14" border="0" alt=""></td>
   <td><img src="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/spacer.gif" width="1" height="14" border="0" alt=""></td>
  </tr>
  <tr><!-- row 10 -->
   <td width="800" height="439" colspan="11" valign="top" background="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/index24.gif" border="0" alt=""><table width="100%" height="100%"  border="0">
     <tr>
       <td width="23%" valign="top"><table width="100%"  border="0">
         <tr>
           <td><?php mosLoadModules ( 'left' ); ?>
             <?php mosLoadModules ( 'user1' ); ?></td>
         </tr>
       </table></td>
       <td width="55%" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
         <tr>
           <td><?php mosLoadModules ( 'top' ); ?></td>
         </tr>
         <tr>
           <td><?php include ("mainbody.php"); ?></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
         </tr>
         <tr>
           <td><?php mosLoadModules ( 'bottom' ); ?></td>
         </tr>
       </table></td>
       <td width="22%" valign="top"><table width="100%"  border="0">
         <tr>
           <td><?php mosLoadModules ( 'right' ); ?>
             <?php mosLoadModules ( 'user2' ); ?></td>
         </tr>
       </table></td>
     </tr>
   </table></td>
   <td><img src="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/spacer.gif" width="1" height="439" border="0" alt=""></td>
  </tr>
  <tr><!-- row 11 -->
   <td colspan="3" background="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/index25.gif" width="118" height="44" border="0" alt=""></td>
   <td colspan="7" background="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/index26.gif" width="524" height="44" border="0" alt=""><?php include_once('includes/footer.php'); ?></td>
   <td background="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/index27.gif" width="158" height="44" border="0" alt=""></td>
   <td><img src="<?php echo $mosConfig_live_site;?>/templates/ahaa/images/spacer.gif" width="1" height="44" border="0" alt=""></td>
  </tr>
</table>
</body>
</html>
