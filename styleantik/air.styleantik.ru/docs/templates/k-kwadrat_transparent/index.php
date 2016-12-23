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

  <script type="text/javascript">

/*This function is meant to be used when you are needing
faux getElementsByName() in IE. IE seems so use the 'id'
attribute instead of 'name' when you use getElementsByName().
 
tag = This tag name that the 'name' attribute you want to 
      get is attached to. Like if you called getElementsByTagName().
      
name = The value of the 'name' attribute you want.
*/
function getElementsByName_iefix(tag, name) {
     var elem = document.getElementsByTagName(tag);
     var arr = new Array();
     for(i = 0, iarr = 0; i < elem.length; i++) {
          att = elem[i].getAttribute("name");
          if(att == name) {
               arr[iarr] = elem[i];
               iarr++;
          }
     }
     return arr;
}
 
/*This function resets the height and width of the background
to that of it's parent element's height and width.
 
tbg_id = This is the value of the name attribute you named all your
         backgrounds.
*/
function transparentbg(tbg_id) {
     var bak = getElementsByName_iefix("div", tbg_id);
     var poprawka = bak.length;
     for(i = 0; i < poprawka; i++) {
          bak[i].style.height = bak[i].parentNode.clientHeight + "px";
          bak[i].style.width  = bak[i].parentNode.clientWidth + "px";
     }
}
</script>
</head>

<body onload="transparentbg('bg_name')" onclick="transparentbg('bg_name')" >

<?PHP 
	if(file_exists($mosConfig_absolute_path."/components/com_tfsformambo/tfsformambo.php")) 
			{
			require_once($mosConfig_absolute_path."/components/com_tfsformambo/tfsformambo.php");
			}?>

  <p class="css_browser_check">
    <big>You will not be able to view this website in all its glory until you upgrade your browser to one that supports web standards.  </big>
  </p>
  <div class="nav">
  	  <a class="naglowek1" target="_self" href="http://www.kamil.rzeszow.pl" onfocus="blur(this)">&nbsp;<?php echo $mosConfig_sitename;?></a>

 

        <b class="xtop"></b><b class="xb1"></b><b class="xb2"></b><b class="xb3"></b><b class="xb4"></b><b class="xb5"></b><b class="xb6"></b><b class="xb7"></b><b class="xb8"></b><b class="xb9"></b><b class="xb10"></b></b>

        <div class="xboxcontent-nav">
        <div class="box_background" name="bg_name">
        <h2 class="margines">
          <?php mosLoadModules ( 'left', -2 ); ?>
          </h2>
        </div>
        </div>
        <b class="xbottom"></b><b class="xb10"></b><b class="xb9"></b><b class="xb8"></b><b class="xb7"></b><b class="xb6"></b><b class="xb5"></b><b class="xb4"></b><b class="xb3"></b><b class="xb2"></b><b class="xb1"></b></b>
  </div>
   
  <div class='main'>
  	<br/>
  	<b class="xtop"><b class="xb1"></b><b class="xb2"></b><b class="xb3"></b><b class="xb4"></b><b class="xb5"></b><b class="xb6"></b><b class="xb7"></b><b class="xb8"></b><b class="xb9"></b><b class="xb10"></b></b>
    <div class="xboxcontent-main">
        <div class="box_background" name="bg_name">
        <h2 class="margines">
      <?php mosPathWay(); ?>
    	<?php mosLoadModules ( 'top', -2 ); ?>
      <?php mosMainBody(); ?>
      <?php mosLoadModules ( 'bottom', -2 ); ?>
          </h2>
        </div>
    </div>

    <b class="xbottom"><b class="xb10"></b><b class="xb9"></b><b class="xb8"></b><b class="xb7"></b><b class="xb6"></b><b class="xb5"></b><b class="xb4"></b><b class="xb3"></b><b class="xb2"></b><b class="xb1"></b></b>
  </div>
  
  <?php if ( mosCountModules( 'right' ) > 0) { ?>
		<div class="info">
    <?php mosLoadModules ( 'user1', -2 ); ?>  	

  		<b class="xtop"></b><b class="xb1"></b><b class="xb2"></b><b class="xb3"></b><b class="xb4"></b><b class="xb5"></b><b class="xb6"></b><b class="xb7"></b><b class="xb8"></b><b class="xb9"></b><b class="xb10"></b></b>
    	<div class="xboxcontent-right">
        <div class="box_background" name="bg_name">
        <h2 class="margines">
      	<?php mosLoadModules ( 'right', -2 ); ?>
          </h2>
        </div>
      </div>
    	<b class="xbottom"><b class="xb10"></b><b class="xb9"></b><b class="xb8"></b><b class="xb7"></b><b class="xb6"></b><b class="xb5"></b><b class="xb4"></b><b class="xb3"></b><b class="xb2"></b><b class="xb1"></b></b>

  	</div>
  <?php } ?>
<br/>
<br/>

</body>
</HTML>
