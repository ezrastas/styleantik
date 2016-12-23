<?php
defined( "_VALID_MOS" ) or die( "Direct Access to this location is not allowed." );

$iso = split( '=', _ISO );
// xml prolog
echo '<?xml version="1.0" encoding="'. $iso[1] .'"?' .'>';
//Define the absolute path to this template
$thisTemplatePath = $GLOBALS[mosConfig_live_site] ."/templates/" .$GLOBALS[cur_template];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php if ( $my->id ) { initEditor(); } ?>
<meta http-equiv="Content-Type" content="text/html; <?php echo _ISO; ?>" />
<?php mosShowHead(); ?>

<?php echo "<link rel=\"stylesheet\" href=\"" .$thisTemplatePath ."/css/template_css.css\" type=\"text/css\"/>" ; ?>
<!--[if IE]>
      <link rel="stylesheet" type="text/css" title="ie_diff" href="<? echo $thisTemplatePath; ?>/css/ie_diff.css" media="screen" >
<![endif]-->

<!--[if IE 7]>
      <link rel="stylesheet" type="text/css" title="ie_diff" href="<? echo $thisTemplatePath; ?>/css/ie7_diff.css" media="screen" >
<![endif]-->

<link rel="shortcut icon" href="<? echo $thisTemplatePath; ?>/images/favicon.ico" />
<link rel="icon" href="<? echo $thisTemplatePath; ?>/images/favicon.gif" type="image/gif" />

</head>

<body>
<span class="main">
<table border="0" cellpadding="0" cellspacing="0" width="100%" >
<tbody>
	<tr>
    		<td   class='main_left' > &nbsp; </td>
		<td valign="top" width="944" align='center'>
			
			<table class="main_block" border="0" cellpadding="0" cellspacing="0" width="100%" >
      			<tbody>
				<tr>
					<td>
						<table border="0" cellpadding="0" cellspacing="0" width="100%">
          					<tbody>
							<tr>
            							<td class='page_header'>

									<table border="0" cellpadding="0" cellspacing="0" width="100%">
	              							<tbody>
										<tr>
	                								<td valign="top" width="700" >
												<table border="0" cellpadding="0" cellspacing="0" height="87" width="100%">
                  										<tbody>
													<tr>
			                    									<td align="center" width="240"><a href="http://nic.ru/"><img src="<? echo $thisTemplatePath; ?>/images/logo.gif" border="0" height="62" width="210"></a>	</td>
		                    										<td>
															<h1 class="top_header">
																Спорттовары
															</h1>
															<h2 class="top_header">
																Пример магазина на CMS Joomla
															</h2>
				 										</td>
                  											</tr>
												</tbody>
												</table>

												<?php if (mosCountModules( 'vm_top' ) ) { ?>	
												<div class="vm_topmenu">
													<?php mosLoadModules ( 'vm_top' ); ?>
												</div>
												<?php } ?>

											</td>
                									<td align="center" valign="top"  class='vm_basket_block'>

												<?php if (mosCountModules( 'vm_basket' ) ) { ?>	
				
												<table  border="0" cellpadding="0" cellspacing="0">
	                  									<tbody>
													<tr>
	                    											<td width="91" valign="top" colspan="2" align='left'>
															<img src="<? echo $thisTemplatePath; ?>/images/bask1.gif" height="17" width="91">
														</td>
	                    										</tr>
	                  										<tr>
	                    											<td valign="top" class="basket_icon" >
															<img src="<? echo $thisTemplatePath; ?>/images/bask.gif" height="42" width="91">
														</td>
	                    											<td align="left"  valign="top" class="basket_text">
															<?php mosLoadModules ( 'vm_basket' ); ?>
														</td>
                	  										</tr>
	                									</tbody>
												</table>
												<?php } ?>
                  									</td>
										</tr>
            								</tbody>
									</table>
              							</td>
            						</tr>
        					</tbody>
						</table>
          
          					<table border="0" cellpadding="0" cellspacing="0" width="100%">
            					<tbody>
							<tr>
              							<td valign="top" width="30%" align="left" class="col_left">
<div id="dopmenublock">
<?php if (mosCountModules( 'user1' ) ) { ?>
	<div style="margin-bottom:30px;" class="blueblock">
		<table border="0" cellpadding="0" cellspacing="0"  class="blueblock_table">
		<tbody>
			<tr>
                    		<td class="blb_right_top" height='17'>&nbsp;</td>
                  	</tr>
                  	<tr>
                    		<td class="blb_content">
				<?php mosLoadModules ( 'user1' ); ?>
                    		</td>
			</tr>
		  	<tr>
                   		 <td class="blb_right_bottom"  height='17'>&nbsp;</td>
                  	</tr>
                </tbody>
		</table>
	</div>
<?php } ?>
</div>


<!-- /goods menu -->
<!-- goods menu -->

<?php if (mosCountModules( 'vm_cat' ) ) { ?>
<div id='vm_cat'>
		<table border="0" cellpadding="0" cellspacing="0"  class="blueblock_table">
		<tbody>
			<tr>
                    		<td class="blb_right_top" height='17'>&nbsp;</td>
                  	</tr>
                  	<tr>
                    		<td class="blb_content">
				<?php mosLoadModules ( 'vm_cat' ); ?>
                      		</td>
			</tr>
		  	<tr>
                   		 <td class="blb_right_bottom"  height='17'>&nbsp;</td>
                  	</tr>
                </tbody>
		</table>

</div>
<?php } ?>




<?php if (mosCountModules( 'vm_topten' ) + mosCountModules( 'vm_ftrprod' )  ) { ?>
<div align="center" style="width:252px">
<?php if (mosCountModules( 'vm_ftrprod' ) ) { ?>

	<table border="0" cellpadding="0" cellspacing="0" width="230" class="gray_bbl">
	<tbody>
		<tr>
			<th width="17" height="30" class='gblb_top_left'>&nbsp;</td>
			<th  class='gblb_top_center' >Спецпредложение</td>
			<th  width="17" class='gblb_top_right'>&nbsp;</td>
		</tr>
		<tr>
			<td class="gblb_left">&nbsp;</td>
			<td class="gblb_main"  style="padding-top:2.3em;">
					<center><?php mosLoadModules ( 'vm_ftrprod' ); ?><center>
			</td>
			<td class="gblb_right">&nbsp;</td>
		</tr>
		<tr>
			<td  height="21" class="gblb_bottom_left">&nbsp;</td> <td  class="gblb_bottom_center">&nbsp;</td><td  class="gblb_bottom_right">&nbsp;</td>
		</tr>
	</tbody>
	</table>
<?php } ?>
<?php if (mosCountModules( 'vm_topten' ) ) { ?>
	<span class='vm_topten'>
		<table border="0" cellpadding="0" cellspacing="0" width="230" class="gray_bbl">
		<tbody>
		<tr>
			<th width="17" height="30" class='gblb_top_left'>&nbsp;</td>
			<th  class='gblb_top_center' >Хиты продаж</td>
			<th  width="17" class='gblb_top_right'>&nbsp;</td>
		</tr>
		<tr>
			<td class="gblb_left">&nbsp;</td>
			<td class="gblb_main" >
	
			<center><?php mosLoadModules ( 'vm_topten' ); ?></center>

			</td>
			<td class="gblb_right">&nbsp;</td>
		</tr>
		<tr>
			<td  height="21" class="gblb_bottom_left">&nbsp;</td> <td  class="gblb_bottom_center">&nbsp;</td><td  class="gblb_bottom_right">&nbsp;</td>
		</tr>
	</tbody>
	</table>
	</span>
<?php } ?>
                </div>
<?php } ?>

<br /><br />
<div id="dopmenublock">
<?php if (mosCountModules( 'vm_auth' ) ) { ?>
<div class='vm_auth'>


	<div style="margin-left: 20px;">

	<?php mosLoadModules ( 'vm_auth' ); ?>

         </div>
 
</div>
<?php } ?>
</div>
</td>
<td valign="top" width="70%">

<?php if (mosCountModules( 'vm_search' ) ) { ?>	
<div style="maRgin-right: 120px; margin-top: 10px;" align="right" class="vm_search">


<?php mosLoadModules ( 'vm_search' ); ?>

</div>

<?php } ?>

 <table border="0" cellpadding="0" cellspacing="0" width="640">
 <tbody>
	 <tr>
		<td>
<!-- "Хлебные крошки" генерируемые движком Joomla!. Дублируются при выводе списка товаров. 
<?php mosPathWay(); ?> 
/-->
<span class="main_body">
<?php mosMainBody(); ?>
</span>
		</td>
	</tr>
</table>

</td>
</tr>
</table>
</td>
</tr>

<tr><td>

<!-- footer -->

    <table style="border-top:1px #f0f0f0 solid;background-image: url(<? echo $thisTemplatePath; ?>/images/bot_back.gif); background-repeat: repeat-x; background-position: center bottom;" border="0" cellpadding="0" cellspacing="0" height="96" width="100%">
    <tbody>
	    <tr>
		<td align="left" height="95" valign="bottom" width="17">
			<img src="<? echo $thisTemplatePath; ?>/images/bot_corn1.gif" height="16" width="17">
		</td>
		<td height="95" valign="top">
			<table border="0" cellpadding="0" cellspacing="0" width="100%">
			<tbody>
				<tr>
            				<td width="40%" style="padding-top: 10px; padding-left: 10px;">
						<a href="http://nic.ru/"><img src="<? echo $thisTemplatePath; ?>/images/logo2.gif" border="0" height="38" width="88"></a>
	  					<div class="smalltext" style="margin-left: 35px;">Региональный Сетевой<br>Информационный Центр</div>
					</td>
					<td width="60%">
						<div class="smalltext"><nobr>Copyright © 2007 RU-CENTER. Демонстрационный сайт интернет-магазина. <a style="color:inherit;text-decoration:none" target="_blank" href='http://hosting.nic.ru'>http://hosting.nic.ru</a>.<nobr>
						<br>
						<a style="color:inherit;text-decoration:none" target="_blank" href="http://joom.ru">Joomla</a>,
						<a style="color:inherit;text-decoration:none" href="http://virtuemart.ru" target="_blank">VirtueMart</a> — свободное программное обеспечение, распространяемое по лицензии GPL.
						</div>
					</td>
				</tr>
			</tbody>
			</table>
		</td>
        	<td align="left" height="95" valign="bottom" width="17"><img src="<? echo $thisTemplatePath; ?>/images/bot_corn2.gif" height="16" width="17"></td>
		</tr>
	</tbody>
	</table>

<!-- footer -->

</td>
</tr>
</table>

    </td>
    <td class="main_right">&nbsp;</td>
  </tr>
</tbody></table>
</p>
</span>
</body></html>