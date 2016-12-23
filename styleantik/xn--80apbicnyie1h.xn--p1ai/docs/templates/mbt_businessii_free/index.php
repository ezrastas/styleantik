<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php mosShowHead(); ?>
<?php
if ( $my->id ) {
	initEditor();
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/css/template_css.css" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" href="<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/favicon.ico"/>
<script language="JavaScript"> // 4LevelWebs ver1.0 [Based on code by Eddie Traversa]
function unblur() {
	this.blur();
} 
function blurLinks() {
	if (!document.getElementById) return;
	theLinks = document.getElementsByTagName("A");
	theAreas = document.getElementsByTagName("AREA");
	for(i=0; i<theLinks.length; i++) {theLinks[i].onfocus = unblur;}
	for(i=0; i<theAreas.length; i++) {theAreas[i].onfocus = unblur;}
  } 
//-->blurLinks End
</script>
<script>
function Valid(){
				frm = document.forms['formSearch'];
				if(frm.searchword.value == '' || frm.searchword.value == '> Type here to search...'){
					alert('Please input search condition.');
					return false;
				}
				return true;
			}
			
			function submitForm(){
				if (Valid())
					document.forms['formSearch'].submit();
			}
</script>
<!-- ImageReady Preload Script (topmenu.psd) -->
<script type="text/javascript">
<!--

function newImage(arg) {
	if (document.images) {
		rslt = new Image();
		rslt.src = arg;
		return rslt;
	}
}

function changeImages() {
	if (document.images && (preloadFlag == true)) {
		for (var i=0; i<changeImages.arguments.length; i+=2) {
			document[changeImages.arguments[i]].src = changeImages.arguments[i+1];
		}
	}
}

var preloadFlag = false;
function preloadImages() {
	if (document.images) {
		topmenu_home_over = newImage("<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/topmenu_home-over.gif");
		topmenu_template_over = newImage("<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/topmenu_template-over.gif");
		topmenu_mbtclub_over = newImage("<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/topmenu_mbtclub-over.gif");
		topmenu_joinnow_over = newImage("<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/topmenu_joinnow-over.gif");
		topmenu_contact_over = newImage("<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/topmenu_contact-over.gif");
		preloadFlag = true;
	}
}

// -->
</script>
<!-- End Preload Script -->
</head>
<BODY onload="preloadImages(); blurLinks();" background="<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/bg.jpg" LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>
<center>
  <table id="out_table" width="750" cellspacing="0" cellpadding="0">
       <tr>
      <td width="2"><img src="<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/spacer.gif" width="2" height="100%"></td>
      <td id="left_module" valign="top"><TABLE WIDTH=202 BORDER=0 CELLPADDING=0 CELLSPACING=0 height="100%">
          <TR>
            <TD> <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="202" height="128">
              <param name="movie" value="<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/flash/company_slogan1.swf">
              <param name="quality" value="high">
              <embed src="<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/flash/company_slogan1.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="202" height="128"></embed>
            </object></TD>
          </TR>
          <TR>
            <TD height="100%">
			<!--START LEFT MENU-->
			<TABLE WIDTH=202 BORDER=0 CELLPADDING=0 CELLSPACING=0 height="100%">
              <TR>
                <td valign="top"><?php mosLoadModules ( 'left' ); ?></td>
              </TR>
            </TABLE>
			<!--END LEFT MENU-->
			</TD>
          </TR>
      </TABLE></td>
	  <td width="2"><img src="<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/spacer.gif" width="2" height="100%"></td>
      <td background="<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/white_bg.jpg" height="100%" valign="top"><TABLE WIDTH=548 height="100%" BORDER=0 align="left" CELLPADDING=0 CELLSPACING=0 id="main_area">
		<tr><TD colspan="2">
		<!--START TOP MENU-->
			<table id="Table_01" width="548" height="74" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td rowspan="4">
						<img src="<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/topmenu_01.gif" width="42" height="74" alt=""></td>
					<td rowspan="4">
						<img src="<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/topmenu_02.gif" width="17" height="74" alt=""></td>
					<td rowspan="4">
						<a href="#"
						onmouseover="changeImages('topmenu_home', '<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/topmenu_home-over.gif'); return true;"
						onmouseout="changeImages('topmenu_home', '<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/topmenu_home.gif'); return true;"
						onmousedown="changeImages('topmenu_home', '<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/topmenu_home-over.gif'); return true;"
						onmouseup="changeImages('topmenu_home', '<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/topmenu_home-over.gif'); return true;">
						<img name="topmenu_home" src="<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/topmenu_home.gif" width="70" height="74" border="0" alt=""></a></td>
					<td rowspan="4">
						<img src="<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/topmenu_04.gif" width="15" height="74" alt=""></td>
					<td rowspan="4">
						<a href="#"
						onmouseover="changeImages('topmenu_template', '<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/topmenu_template-over.gif'); return true;"
						onmouseout="changeImages('topmenu_template', '<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/topmenu_template.gif'); return true;"
						onmousedown="changeImages('topmenu_template', '<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/topmenu_template-over.gif'); return true;"
						onmouseup="changeImages('topmenu_template', '<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/topmenu_template-over.gif'); return true;">
						<img name="topmenu_template" src="<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/topmenu_template.gif" width="67" height="74" border="0" alt=""></a></td>
					<td rowspan="4">
						<img src="<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/topmenu_06.gif" width="13" height="74" alt=""></td>
					<td rowspan="4">
						<a href="#"
						onmouseover="changeImages('topmenu_mbtclub', '<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/topmenu_mbtclub-over.gif'); return true;"
						onmouseout="changeImages('topmenu_mbtclub', '<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/topmenu_mbtclub.gif'); return true;"
						onmousedown="changeImages('topmenu_mbtclub', '<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/topmenu_mbtclub-over.gif'); return true;"
						onmouseup="changeImages('topmenu_mbtclub', '<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/topmenu_mbtclub-over.gif'); return true;">
						<img name="topmenu_mbtclub" src="<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/topmenu_mbtclub.gif" width="61" height="74" border="0" alt=""></a></td>
					<td rowspan="4">
						<img src="<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/topmenu_08.gif" width="13" height="74" alt=""></td>
					<td rowspan="4">
						<a href="#"
						onmouseover="changeImages('topmenu_joinnow', '<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/topmenu_joinnow-over.gif'); return true;"
						onmouseout="changeImages('topmenu_joinnow', '<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/topmenu_joinnow.gif'); return true;"
						onmousedown="changeImages('topmenu_joinnow', '<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/topmenu_joinnow-over.gif'); return true;"
						onmouseup="changeImages('topmenu_joinnow', '<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/topmenu_joinnow-over.gif'); return true;">
						<img name="topmenu_joinnow" src="<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/topmenu_joinnow.gif" width="65" height="74" border="0" alt=""></a></td>
					<td rowspan="4">
						<img src="<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/topmenu_10.gif" width="13" height="74" alt=""></td>
					<td rowspan="4">
						<a href="#"
						onmouseover="changeImages('topmenu_contact', '<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/topmenu_contact-over.gif'); return true;"
						onmouseout="changeImages('topmenu_contact', '<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/topmenu_contact.gif'); return true;"
						onmousedown="changeImages('topmenu_contact', '<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/topmenu_contact-over.gif'); return true;"
						onmouseup="changeImages('topmenu_contact', '<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/topmenu_contact-over.gif'); return true;">
						<img name="topmenu_contact" src="<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/topmenu_contact.gif" width="65" height="74" border="0" alt=""></a></td>
					<td rowspan="4">
						<img src="<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/topmenu_12.gif" width="13" height="74" alt=""></td>
					<td>
						<img src="<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/topmenu_13.gif" width="94" height="9" alt=""></td>
					</tr>
					<tr>
					<td>
						<a href="#">
						<img src="<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/help.gif" width="94" height="19" border="0" alt="Homepage"></a></td>
					</tr>
					<tr>
					<td>
						<a href="#">
						<img src="<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/sitemap.gif" width="94" height="19" border="0" alt="Site map"></a></td>
					</tr>
					<tr>
					<td>
						<img src="<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/topmenu_16.gif" width="94" height="27" alt="">
					</td>
				</tr>
			</table>
		<!--END TOP MENU-->
			</TD>
		</tr>
          <TR>
            <TD COLSPAN=2> <IMG SRC="<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/line_bg.jpg" WIDTH=548 HEIGHT=3 ALT=""></TD>
          </TR>
          <TR>
            <TD width="228" height="237" bgcolor="ffffff" background="<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/rotate_logos/<?php echo rand(8,9)?>.jpg">
				
            </TD>
            <TD><TABLE WIDTH=320 BORDER=0 CELLPADDING=0 CELLSPACING=0 height="100%">
		<!--START SEARCH-->
			<TR>
				<TD background="<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/search_bg.jpg" WIDTH=320 HEIGHT=65 ALT="">		
							
				<form action='index.php' method='post'>
				<div style="padding-top:15pt;padding-left:20pt ">
				<input size="15" class="inputbox" type="text" name="searchword" style="width:180px;height:18px;font-size:11px; padding-left:3px" value="search..."  onblur="if(this.value=='') this.value='search...';" onfocus="if(this.value=='search...') this.value='';" />
				<input type="hidden" name="option" value="search" />
					<span style="padding-top:15px">
					<input name="Submit" type="submit" class="button" style="background:url(<?php echo $mosConfig_live_site; ?>/templates/mbt_businessii_free/images/search.jpg); width:47px; height:18px;padding-bottom:0pt;padding-left:20pt" value="" />
					</span>
				</div>
				</form>
				</TD>
			</TR>
		<!--END SEARCH-->
	<TR>
		<TD id="top_module" WIDTH=320 HEIGHT=172 ALT="">
		<!--START TOP MODULE-->
		<div style="padding-top:5pt ">
				<table width="100%"  border="0" cellspacing="0" cellpadding="0">
					<tr>
					<td>
						<div style="padding-left:5pt;padding-right:10pt; color:#FFFFFF ">
						<?php if (mosCountModules( "top" )) { ?>
						<?php mosLoadModules ( "top", -1 ); ?>
						<?php } ?>
						</div>
					</td>
					</tr>
				</table>
		</div>
	<!--END TOP MODULE-->
		</TD>
	</TR>
</TABLE></TD>
          </TR>
		  <TR>
					<TD COLSPAN=2> <IMG SRC="<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/line2_bg.jpg" WIDTH=548 HEIGHT=5 ALT=""></TD>
					</TR>
          <TR>
            <TD COLSPAN=2 height="100%"><TABLE WIDTH=548 BORDER=0 CELLPADDING=0 CELLSPACING=0 height="100%">
              <TR>
                <TD WIDTH=548 HEIGHT=100% COLSPAN=2 valign="top" background="<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/white_bg2.jpg" ALT="">
				<div style="padding-top:0pt ">
				<table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td class="mainbody">
	 <?php mosMainBody(); ?>
  

  
	 </td>
    </tr>
</table>

				</div>
				</TD>
              </TR>
			  <?php if (mosCountModules( "user1", -1)) { ?>
				<TR>
					<TD COLSPAN=2> <IMG SRC="<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/white_bg.jpg" WIDTH=548 HEIGHT=5 ALT=""></TD>
					</TR>
				<TR>
                <TD class="user1" WIDTH=274 HEIGHT=50% ALT="">
						<table width="100%"  border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td>
									
									<?php mosLoadModules ( "user1", -1); ?>
									
								</td>
							</tr>
						</table>
				</TD>
				<?php } ?>
				<?php if (mosCountModules( "user2", -1 )) { ?>
                <TD class="user2" WIDTH=274 HEIGHT=50% ALT="">
								<table width="100%"  border="0" cellspacing="0" cellpadding="0">
								  <tr>
									<td>
										
										<?php mosLoadModules ( "user2", -1 ); ?>
											</td>
									</tr>
								</table>

			   </TD>
			  <?php } ?>

              </TR>
            </TABLE></TD>
          </TR>
      </TABLE></td>
    </tr>
        <tr>
		<td width="2"><img src="<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/spacer.gif" width="2" height="100%"></td>
      <td colspan="3" background="<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/footer_bg.jpg" WIDTH=750 HEIGHT=45 ALT="">
	  <div id="footer">(C)2005 <a href="<?php echo $mosConfig_live_site;?>"> </a><a href="<?php echo $mosConfig_live_site;?>"><?php echo $mosConfig_sitename;?></a> Powered by <a href="http://www.mamboserver.com">Mambo</a> Designed by <a href="http://www.mambotheme.com">MamboTheme</a> - Mambo professional templates!</div>
	  </td>
		<td width="2"><img src="<?php echo $mosConfig_live_site;?>/templates/mbt_businessii_free/images/spacer.gif" width="2" height="100%"></td>
    </tr>
  </table>

</center>

</BODY>
</HTML>