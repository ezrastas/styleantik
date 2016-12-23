<?php echo "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?".">"; ?>
<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
?>
<title><?php echo $mosConfig_sitename; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php include ("includes/metadata.php"); ?>
<?php include_once ('editor/editor.php'); ?>
<?php
// A1Business template for Mambo Open Source 4.5
// Released under GNU/GPL  http://www.gnu.org/copyleft/gpl.html
?>
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
 <SCRIPT LANGUAGE="JavaScript" SRC="templates/a1business/js/JSCookMenu.js"></SCRIPT>
<LINK HREF="templates/a1business/js/ThemeOffice/theme.css" REL="stylesheet" TYPE="text/css" />
<SCRIPT LANGUAGE="JavaScript" SRC="templates/a1business/js/ThemeOffice/theme.js"></SCRIPT>
<link href="templates/a1business/css/template_css.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="templates/a1business/images/favicon.ico" />
<?php initEditor(); ?>
<?php // Custom MainMenu extension with JSCookMenu by Stefan Kellenberger - www.cyberdine.ch
$mymenu_content = <<<EOT
<SCRIPT LANGUAGE="JavaScript"><!--
var myMenu =
[
EOT;
  $database->setQuery("SELECT * FROM #__menu WHERE menutype = 'mainmenu' AND published ='1' ORDER BY ordering");
  $menus = $database->loadObjectList(); // mainmenu list
  $subs = array(); // sub menus
  // first pass to collect sub-menu items
  foreach ($menus as $row) {
   if ($row->parent) {
    if (!array_key_exists( $row->parent, $subs )) {
     $subs[$row->parent] = array();
    }
    $subs[$row->parent][] = $row;
   }
  }
  foreach ($menus as $row) { // second pass to insert main-menu items
   if ($row->parent == 0 && (trim( $row->link ) || array_key_exists( $row->id, $subs ))) {
    $name = addslashes( $row->name );
    $alt = addslashes( $row->name );
    $link = $row->link ? "'$row->link" : "null";
    if ($row->type != "url") {
     $link .= "&Itemid=$row->id'";
    } else {
     $link .= "'";
    }
    $mymenu_content .= "\n ['<img src=\"'+cmThemeOfficeBase+'darrow.png\">','$name',$link,null,'$alt'";
    if (array_key_exists( $row->id, $subs )) {
     $mymenu_content .= ',';
     foreach ($subs[$row->id] as $sub) { // third pass to insert sub-menu items
      $name = addslashes( $sub->name );
      $alt = addslashes( $sub->name );
      $link = $sub->link ? "'$sub->link" : "null";
      if ($sub->type != "url") {
       $link .= "&Itemid=$sub->id'";
      } else {
       $link .= "'";
      }
      $mymenu_content .= "\n  ['<img src=\"'+cmThemeOfficeBase+'sections.png\">','$name',$link,null,'$alt'";

      if (array_key_exists( $sub->id, $subs )) {
       $mymenu_content .= ',';
       foreach ($subs[$sub->id] as $sub2) { // fourth pass to insert subsub-menu items
        $name = addslashes( $sub2->name );
        $alt = addslashes( $sub2->name );
        $link = $sub2->link ? "'$sub2->link" : "null";
        if ($sub2->type != "url") {
         $link .= "&Itemid=$sub2->id'";
        } else {
         $link .= "'";
        }
        $mymenu_content .= "\n  ['<img src=\"'+cmThemeOfficeBase+'sections.png\">','$name',$link,null,'$alt'],";
       }
      }
      $mymenu_content .= "],";
     }
    }
    $mymenu_content .= "],";
   }
  }

$mymenu_content .= "];\n";
$mymenu_content .= "--></SCRIPT>\n";

echo $mymenu_content;
?>
</head>
<body leftmargin=0 topmargin=0 marginheight="0" marginwidth="0" bgcolor="#FFFFFF">

<table border="0" cellspacing="0" cellpadding="0" width="800" background="templates/a1business/images/fon_top.gif">
  <tr>
	<td>
<table border="0" cellspacing="0" cellpadding="0" background="templates/a1business/images/fon_top01.gif">
<tr>
	<td width="66"><p class="menu01"><img src="templates/a1business/images/icon01.gif" width="11" height="12" alt="" border="0" align="absmiddle">&nbsp;&nbsp;<a href="index.php">Home</a></p></td>
	<td width="3"><img src="templates/a1business/images/e01.gif" width="2" height="45" alt="" border="0"></td>
	<td width="92"><p class="menu01"><img src="templates/a1business/images/icon02.gif" width="11" height="12" alt="" border="0" align="absmiddle">&nbsp;&nbsp;<a href="index.php?option=com_contact">Contact</a></p></td>
	<td width="3"><img src="templates/a1business/images/e01.gif" width="2" height="45" alt="" border="0"></td>
	<td width="77"><p class="menu01"><img src="templates/a1business/images/icon03.gif" width="11" height="12" alt="" border="0" align="baseline">&nbsp;&nbsp;<a href="index.php?option=com_search">Search</a></p></td>
</tr>
<tr>
	<td colspan="5"><img src="templates/a1business/images/logo.gif" width="241" height="91" alt="" border="0"></td>
</tr>
</table>
	</td>
	<td valign="bottom" width="100%">
<table border="0" cellspacing="0" cellpadding="0" background="">
<tr>
	<td><img src="templates/a1business/images/e04.gif" alt="" width="18" height="97" border="0"></td>
	<td width="450"><p align="absmiddle"><h2><b><?php echo $mosConfig_sitename; ?></h2></b></p></td>
</tr>
</table>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="359" height="39" background="templates/a1business/images/fon_top02.gif"><span class="small">&nbsp;<?php echo (strftime (_DATE_FORMAT_LC)); ?></span></td>
		  <td width="200" height="39" background="templates/a1business/images/fon_top02.gif"> 
            <p class="menu01">
              <form action="index.php" method="post">
                  <input class="inputbox" type="text" name="searchword" size="15" value="<?php echo _SEARCH_BOX; ?>"  onBlur="if(this.value=='') this.value='<?php echo _SEARCH_BOX; ?>';" onFocus="if(this.value=='<?php echo _SEARCH_BOX; ?>') this.value='';" />
                  <input type="hidden" name="option" value="search" />
              </form></p>
            </td>
</tr>
</table>
</td>
</tr>
</table>
<table width="800" border="0" cellpadding="0" cellspacing="0">
  <tr> 
    <td width="239" valign="top">
      <table width="239" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><img src="templates/a1business/images/main01.jpg" width="239" height="41"></td>
        </tr>
        <tr>
          <td height="150" background="templates/a1business/images/main01b.jpg">
            <table width="95%" height="95%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="10"></td>
                <td width="100%">&nbsp;&nbsp;<strong><font color="#FF4700">Newsflash</font></strong><br>
                  <?php mosLoadModules ( 'user2' ); ?>
                </td>
                <td width="10"></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
    <td width="100%" background="templates/a1business/images/fon06.gif"> 
      <div align="left"><img src="templates/a1business/images/main02.jpg" width="280" height="191"><img src="templates/a1business/images/main03.jpg" width="281" height="191"></div>
    </td>
  </tr>
</table>
<table border="0" cellspacing="0" cellpadding="0" background="templates/a1business/images/fon_top02.gif">
<tr>
    <td width="800" height="39" background="templates/a1business/images/fon_top02.gif"> 
      <div align="absmiddle">
      <span class="small">
<DIV ID=myMenuID></DIV></span></div></td>
</tr>
</table>
<TABLE width=800
      border=0 cellPadding=1 cellSpacing=1 bgColor="#e6e6e6">
  <TBODY>
        <TR>          
      <TD width=130 vAlign=top background="templates/a1business/images/fon04.gif"> 
        <TABLE width="130" align="center" cellPadding=1 cellSpacing=1>
          <TBODY>
			 <TR>
                 <TD>&nbsp;</TD>
             </TR>
                    <TR>     
              <TD height="58"> <BR>
                        <TABLE cellSpacing=0 cellPadding=0 width="100%" align=center
                  border=0>
                            <TBODY>
                              <TR>
                              </TR>
                              <TR>    
                      <TD> 
                        <?php mosLoadModules ( "left" ); ?>
                      </TD>
                              </TR>
                            </TBODY>
                          </TABLE>
                      <?php mosLoadModules ( 'user1' ); ?><BR>
                        </TD></TR></TBODY></TABLE>        
      <TD vAlign=top bgColor=e6e6e6> <div align="center"> </br> 
        <?php mosLoadComponent( "banners" ); ?>
        <br>
        Want your banner up here! Contact us <a href="mailto:info@company.com">here</a>.</br> 
        <br> 
		<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                    <TBODY>                    
            <TR> 
              <TD width="100%" colSpan=3>&nbsp;</TD>
            </TR>
                    <TR>
                      <TD align=middle width="100%" colSpan=3><IMG height=8 
                        src="templates/a1business/images//pixel.gif" 
                        width=1 border=0><BR>
                &nbsp;
                <?php include ("mainbody.php"); ?>
                <BR></TD></TR></TBODY></TABLE><TABLE width="650"
                  border=1 align=center cellPadding=0 cellSpacing=0 bordercolor="#e6e6e6">
          <TBODY>
            <TR> 
              
            </TR>
          </TBODY>
        </TABLE>
		<p align="center"><a href="#top">Top of page</a></p></TD>
          </TR></TBODY></TABLE>
<TABLE width=800 height="44" border=0 cellPadding=0 cellSpacing=0>
  <TBODY>          
    <TR> 
      <TD height="25"background="templates/a1business/images/bot.gif" >
<div align="center"><a href="http://www.mamboserver.com" target="_blank"><img src="templates/a1business/images/copy.gif" alt="Mambo Open Source" border="0" align="absmiddle"></a></div></TD>
          </TR>
        </TBODY>
      </TABLE>
	  <SCRIPT LANGUAGE="JavaScript">
<!--
 cmDraw ('myMenuID', myMenu, 'hbr', cmThemeOffice, 'ThemeOffice');
-->
</SCRIPT> 	  
<TABLE cellSpacing=0 cellPadding=0 width=800 border=0>
  <TBODY>
          <TR>      
      <TD width="780">
<div align="center"><?php mosLoadModules ( 'inset' ); ?></div></TD>
          </TR>
        </TBODY>
      </TABLE>   
</body>
</html>
