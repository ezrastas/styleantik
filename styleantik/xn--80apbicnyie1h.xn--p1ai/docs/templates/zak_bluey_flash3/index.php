<?php echo "<?xml version=\"1.0\"?>";
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
/**
/ Design by Zak Mahuna

*/

defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

$iso = split( '=', _ISO );

echo '<?xml version="1.0" encoding="'. $iso[1] .'"?' .'>';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

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

<link href="css/template_css.css" rel="stylesheet" type="text/css" />
<head>

<?php if ( $my->id ) initEditor(); ?>

<meta http-equiv="Content-Type" content="text/html; <?php echo _ISO; ?>" />

<?php mosShowHead(); ?>

<link rel="stylesheet" type="text/css" href="<?php echo $GLOBALS['mosConfig_live_site']; ?>/templates/<?php echo $cur_template; ?>/css/template_css.css" />

<link rel="shortcut icon" href="<?php echo $GLOBALS['mosConfig_live_site']; ?>/templates/<?php echo $cur_template; ?>/images/favicon.ico"/>

<?PHP if(file_exists($mosConfig_absolute_path."/components/com_tfsformambo/tfsformambo.php")) 

			{

			require_once($mosConfig_absolute_path."/components/com_tfsformambo/tfsformambo.php");

			}?>

<script language="JavaScript" type="text/JavaScript">

<!--







function MM_preloadImages() { //v3.0

  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();

    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)

    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}

}

//-->

</script



><body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<!-- ImageReady Slices (zak_bly_3col.psd) -->
<body>
<table width="960" height="193"  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <th width="20" background="templates/<?php echo $cur_template; ?>/images/line_L.png" scope="col"><img src="templates/<?php echo $cur_template; ?>/images/line_L.png" width="20" height="10"></th>
    <th align="left" valign="top" scope="col"><table width="920" height="191" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <th width="329" height="193" rowspan="2" align="left" valign="top" background="templates/<?php echo $cur_template; ?>/images/header_logo.png" scope="col"><img src="templates/<?php echo $cur_template; ?>/images/header_logo.png" width="329" height="193"></th>
        <th width="591" height="120" align="center" valign="top" background="templates/<?php echo $cur_template; ?>/images/header_mein.png" scope="col"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="591" height="122">
          <param name="movie" value="templates/<?php echo $cur_template; ?>/images/fead.swf" />
          <param name="quality" value="high" />
          <embed src="templates/<?php echo $cur_template; ?>/images/fead.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="591" height="122"></embed>
        </object></th>
      </tr>
      <tr>
        <th height="71" align="center" valign="top" background="templates/<?php echo $cur_template; ?>/images/header_down.png" scope="col"><div class="date">
          </div></th>
      </tr>
    </table>
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <th width="230" height="34" align="left" valign="top" background="templates/<?php echo $cur_template; ?>/images/column_L_top.png" scope="col"><?php mosPathWay(); ?></th>
            <th width="674" height="34" align="right" valign="middle" background="templates/<?php echo $cur_template; ?>/images/column_Center_nav.png" scope="col"><?php mosLoadModules ( 'top' ); ?></th>
            <th width="15" scope="col"><img src="templates/<?php echo $cur_template; ?>/images/top_nav_bg.png" width="15" height="34"></th>
          </tr>
              </table>
      <table width="100%" border="0" cellpadding="0" cellspacing="0" background="templates/<?php echo $cur_template; ?>/images/mein_body_bg.png">
        <tr>
          <th width="231" align="left" valign="top" scope="col"><table width="228" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <th width="17" scope="col">&nbsp;</th>
              <th width="198" align="left" valign="top" scope="col"><div class="mod">
                <table width="198" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <th scope="col"><img src="templates/<?php echo $cur_template; ?>/images/column_L_head.png" width="198" height="122"></th>
                    </tr>
                    <tr>
                      <td align="center" valign="top"><table width="184" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <th align="center" valign="top" scope="col"><?php mosLoadModules ( 'left' ); ?></th>
                        </tr>
                        <tr>
                          <td align="center" valign="top">&nbsp;</td>
                        </tr>
                      </table></td>
                    </tr>
                              </table>
              </div></th>
              <th width="13" scope="col">&nbsp;</th>
            </tr>
          </table></th>
          <th width="458" align="center" valign="top" background="templates/<?php echo $cur_template; ?>/images/column_Center_bg.png" scope="col">
            <table width="444" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <th valign="top" scope="col">&nbsp;</th>
                  <th scope="col">&nbsp;</th>
                  <th valign="top" scope="col"><img src="templates/<?php echo $cur_template; ?>/images/spacer.gif" width="1" height="15" /></th>
                </tr>
                <tr>
                  <th width="213" valign="top" scope="col"><?php mosLoadModules ( 'user1' ); ?></th>
                  <th width="26" scope="col">&nbsp;</th>
                  <th width="219" valign="top" scope="col"><?php mosLoadModules ( 'user2' ); ?></th>
                </tr>
                <tr align="left" valign="top">
                  <td colspan="3"><?php mosMainBody(); ?></td>
                </tr>
                <tr>
                  <td colspan="3">&nbsp;</td>
                </tr>
            </table>          </th>
          <th width="231" align="left" valign="top" scope="col"><table width="231" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <th width="18" scope="col">&nbsp;</th>
              <th width="198" align="center" valign="top" scope="col"><table width="184" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <th align="left" valign="top" scope="col"><img src="templates/<?php echo $cur_template; ?>/images/spacer.gif" width="1" height="15" /></th>
                </tr>
                <tr>
                  <td><?php mosLoadModules ( 'right' ); ?></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
              </table></th>
              <th width="15" scope="col">&nbsp;</th>
            </tr>
          </table></th>
        </tr>
      </table>
      <table width="920" height="58" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <th width="231" background="templates/<?php echo $cur_template; ?>/images/footer_L.png" scope="col">&nbsp;</th>
          <th width="459" background="templates/<?php echo $cur_template; ?>/images/footer_M.png" scope="col">&nbsp;</th>
          <th background="templates/<?php echo $cur_template; ?>/images/footer_R.png" scope="col">&nbsp;</th>
        </tr>
      </table></th>
    <th width="20" background="templates/<?php echo $cur_template; ?>/images/line_R.png" scope="col"><img src="templates/<?php echo $cur_template; ?>/images/line_R.png" width="20" height="10"></th>
  </tr>
  <tr>
    <td background="templates/<?php echo $cur_template; ?>/images/down_L.png">&nbsp;</td>
    <td background="templates/<?php echo $cur_template; ?>/images/down_centar.png">&nbsp;</td>
    <td background="templates/<?php echo $cur_template; ?>/images/down_R.png">&nbsp;</td>
  </tr>
</table>

</body>
</html>
