<?php
defined( '_VALID_MOS' ) or die( 'Restricted access' );
$iso = explode( '=', _ISO );
echo '<?xml version="1.0" encoding="'. $iso[1] .'"?' .'>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--
author: raduga http://mambasana.ru
copyright: GNU/GPL
-->
<head>

<?php mosShowHead(); ?>
<?php if ( $my->id ) {initEditor();} ?>
<meta http-equiv="Content-Type" content="text/html; <?php echo _ISO; ?>" />

<?php
$way = $GLOBALS['mosConfig_live_site']."/templates/".$mainframe->getTemplate();
echo "<link rel=\"stylesheet\" href=\"$way/css/template_css.css\" type=\"text/css\"/>" ;
echo "<link rel=\"shortcut icon\" href=\"$way/favicon.ico\" />" ;
?>

</head>

<body id="body">

                  <div id="outconteiner1">
                  <div id="outconteiner2">
                  <table width="900" border="0" align="center" cellpadding="0" cellspacing="0"  id="centertb">
                  <tr>
                  <td  valign="top" class="leftcol">
                  <div id="light"><div id="logo"></div></div>
                  <div id="leftmod">
                  <?php mosLoadModules ( 'left',-3 ); ?>
                  </div>
                  </td>
          


             <td valign="top"  width="100%" id="contenttb"> 
             <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                        <tr>
                        <td colspan="3">
                        <div id="header"></div>
                        </td>
                        </tr>

<?php if (mosCountModules('top')) { ?>              
                        <tr valign="top" >
                        <td colspan="3" align="center" class="contentmod">
                        <div>
                        <?php mosLoadModules ( 'top'); ?>
                        </div>
                        </td> 
                        </tr>
                        <tr><td colspan="3"></td></tr>
<?php } ?>
         
<?php if (mosCountModules( "user1" )>0 or mosCountModules( "user2" )>0) { ?>
 <tr>
<?php if (mosCountModules('user1')) { ?> 
                        <td valign="top" class="contentmod">
                        <div>
                        <?php mosLoadModules ( 'user1' ); ?>
                        </div>
                        </td>
<?php } ?>

<?php if (mosCountModules( "user1" )>0 && mosCountModules( "user2" )>0) { ?>

                       <td><div class="mod"></div></td> 
<?php } ?> 

<?php if (mosCountModules('user2')) { ?>
                    <td valign="top" class="contentmod">
                    <div>
                    <?php mosLoadModules ( 'user2' ); ?>
                    </div></td> 
<?php } ?>
        </tr>
                    
                   <tr><td colspan="3"></td></tr>
<?php } ?>
                
          <tr align="left" valign="top">
                      <td colspan="3" style="padding: 10px;">
                      <div class="main">
                      <?php mosMainBody(); ?>
                      </div> 
                      </td>
          </tr>
          
<?php if (mosCountModules('bottom')) { ?>
          <tr>
                      <td colspan="3" valign="top" style="padding-top: 3px;text-align: left;" class="contentmod"> 

                      <div>
                      <?php mosLoadModules ( 'bottom' ); ?>
                      </div>
                      </td>
                      </tr>
<?php } ?>

                      </table>
                      </td>

         </tr>
</table> 
        
                <div class="foot">
                <div class="footer_right">
<?php if (mosCountModules('user3')) { ?>
<?php mosLoadModules ( 'user3',-1 ); ?>
<?php } ?>
<br /><br />

                </div>
                
<div id="left_bottom"></div>
                </div>
                </div>

</body>
</html>