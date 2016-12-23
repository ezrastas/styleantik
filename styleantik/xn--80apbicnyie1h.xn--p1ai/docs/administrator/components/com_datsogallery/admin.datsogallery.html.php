<?php
	/***************************************************\
	**   DatsoGallery - A Joomla! Gallery Component    **
	**   Copyright (C) 2006-2007  by Andrey Datso      **
	**   Version    : 1.3.9.1                          **
	**   Homepage   : http://www.datso.fr              **
	**   License    : Copyright, don't distribute      **
    **   Based on   : Akogallery 2.1 by Arthur Konze   **
	\***************************************************/
	
	defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
	error_reporting(E_ALL ^ E_NOTICE);
	class HTML_datsogallery {
	function showPictures( $option, &$rows, &$clist, &$slist, &$search, &$pageNav ) {
	global $database, $mosConfig_live_site, $mosConfig_absolute_path, $ad_thumbwidth, $ad_thumbheight;
    require_once($mosConfig_absolute_path."/administrator/components/com_datsogallery/config.datsogallery.php");
    ?>

	<form action="index2.php" method="post" name="adminForm">
	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminheading">
	<tr>
	<th class="mediamanager"><?php echo _DG_PICS_MANAGER_TITLE; ?></th>
	<td nowrap="nowrap"><?php echo _DG_DISPLAY; ?><br>
	<?php echo $pageNav->writeLimitBox(); ?> </td>
	<td><?php echo _DG_SEAR; ?><br>
	<input type="text" name="search" value="<?php echo $search;?>" class="inputbox" onchange="document.adminForm.submit();" />
	</td>
	<td width="center"> <?php echo _DG_SORT_BY_CAT; ?><br>
	<?php echo $clist;?> </td>
	<td width="center"> <?php echo _DG_SORT_BY_TYPE; ?><br>
	<?php echo $slist;?> </td>
	</tr>
	</table>
	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
	<tr>
    <th align="center">#ID</th>
	<th>
	<input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $rows ); ?>);" />
	</th>
	<th class="title" width="12%"><?php echo _DG_TITLE; ?></th>
	<th width="28%" align="left"><?php echo _DG_CATEGORY; ?></th>
	<th width="5%" align="center"><?php echo _DG_HITS; ?></th>
    <th width="10%" align="left"><?php echo _DG_RATING; ?></th>
    <th width="5%">
    <span align="center"><?php echo _DG_ORDER; ?></span>
    </th>
    <th width="5%">
    <span align="center"><a href="javascript: saveorder( <?php echo count( $rows )-1; ?> )">
    <img src="images/filesave.png" border="0" width="16" title="<?php echo _DG_SAVEORDER_PICS; ?>" alt="" /></a></span>
    </th>
	<th width="5%"><?php echo _DG_PUBLISHED; ?></th>
	<th width="5%"><?php echo _DG_APPROWED; ?></th>
	<th width="10%"><?php echo _DG_AUTHOR_OWNER; ?></th>
	<th width="5%"><?php echo _DG_TYPE; ?></th>
	<th width="10%"><?php echo _DG_DATE_ADD; ?></th>
	</tr>
	<?php
	mosCommonHTML::loadOverlib();
	$k = 0;
    for ($i=0, $n=count( $rows ); $i < $n; $i++) {
    $row = &$rows[$i];
    if ($row->imgvotes > 0) {
    $fimgvotesum = number_format($row->imgvotesum / $row->imgvotes, 2, ",", ".");
    $frating = "$fimgvotesum / $row->imgvotes";
    }else{ $frating = _DG_NO_VOTES; }
	$taska = $row->approved ? 'rejectpic' : 'approvepic';
	$imga = $row->approved ? 'tick.png' : 'publish_x.png';
	$task = $row->published ? 'unpublish' : 'publish';
	$img = $row->published ? 'tick.png' : 'publish_x.png';
	$database->setQuery("select id from #__users where username='$row->owner'");
	$userid = $database->loadResult();
	$imgprev = $mosConfig_live_site.$ad_paththumbs."/$row->imgthumbname";
    $info = getimagesize($mosConfig_absolute_path.$ad_pathoriginals."/$row->imgoriginalname");
    $size = filesize($mosConfig_absolute_path.$ad_pathoriginals."/$row->imgoriginalname");
    $type = array(1=>'GIF',2=>'JPG',3=>'PNG',4=>'SWF',5=>'PSD',6=>'BMP',7=>'TIFF',8=>'TIFF',9=>'JPC',10=>'JP2',11=>'JPX',12=>'JB2',13=>'SWC',14=>'IFF');
    $info[2] = $type[$info[2]];
    $fsize = format_filesize($size);
    $overlib = '<table>';
    $overlib .= '<tr>';
    $overlib .= '<td>';
    $overlib .= _DG_ORG_WIDTH;
    $overlib .= '</td>';
    $overlib .= '<td>: ';
    $overlib .= $info[0].' '._DG_PIXELS;
    $overlib .= '</td>';
    $overlib .= '</tr>';
    $overlib .= '<tr>';
    $overlib .= '<td>';
    $overlib .= _DG_ORG_HEIGHT;
    $overlib .= '</td>';
    $overlib .= '<td>: ';
    $overlib .= $info[1].' '._DG_PIXELS;
    $overlib .= '</td>';
    $overlib .= '</tr>';
    $overlib .= '<tr>';
    $overlib .= '<td>';
    $overlib .= _DG_ORG_TYPE;
    $overlib .= '</td>';
    $overlib .= '<td>: ';
    $overlib .= $info[2];
    $overlib .= '</td>';
    $overlib .= '</tr>';
    $overlib .= '<tr>';
    $overlib .= '<td>';
    $overlib .= _DG_FILESIZE;
    $overlib .= '</td>';
    $overlib .= '<td>: ';
    $overlib .= $fsize;
    $overlib .= '</td>';
    $overlib .= '</tr>';
    $overlib .= '</table>';
	?>
	<script language="Javascript">
	<!--
	function showInfo(title, name, dimensions) {
	html = '<div style="width:100%;text-align:center;vertical-align:middle;"><img style="border:1px solid #fff;margin:20px" src='+name+' name="imagelib" alt="No Pics" /><div style="font-family:Tahoma,sans-serif;font-size:10px;text-align:left">'+dimensions+'</div></div>';
	return overlib(html, CAPTION, title, dimensions)
	}
	function editEntry(number) {
	var elm = document.getElementById('cb'+number);
	if (elm) {
	elm.checked = true;
	}
	}
	-->
	</script>
	<tr class="<?php echo "row$k"; ?>">
    <td><?php echo $row->id; ?></td>
	<td>
	<input type="checkbox" id="cb<?php echo $i;?>" name="id[]" value="<?php echo $row->id; ?>" onclick="isChecked(this.checked);" />
	</td>
	<td><a href="javascript:editEntry(<?php echo $i; ?>); submitform('edit');"
	onmouseover="showInfo('<?php echo $row->imgtitle; ?>', '<?php echo $imgprev;?>', '<?php echo $overlib;?>')" onmouseout="return nd();"><b><?php echo $row->imgtitle; ?></b></a></td>
	<td><?php echo ShowCategoryPath($row->catid); ?></td>
	<td><?php echo $row->imgcounter; ?></td>
    <td><?php echo $frating; ?></td>
    <td align="center">
    <?php echo $pageNav->orderUpIcon( $i, ($row->catid == @$rows[$i-1]->catid) ); ?>&nbsp;&nbsp;
    <?php echo $pageNav->orderDownIcon( $i, $n, ($row->catid == @$rows[$i+1]->catid) ); ?>
    </td>
    <td align="center">
    <input type="text" name="order[]" size="5" value="<?php echo $row->ordering;?>" class="text_area" style="text-align:center" />
    </td>
    <td align='center'>
    <a href="javascript: void(0);" onClick="return listItemTask('cb<?php echo $i;?>','<?php echo $task;?>')">
    <img src="images/<?php echo $img;?>" width="12" height="12" border="0" alt="" /></a>
    </td>
    <td align='center'>
    <a href="javascript: void(0);" onclick="return listItemTask('cb<?php echo $i;?>','<?php echo $taska;?>')">
    <img src="images/<?php echo $imga;?>" width="12" height="12" border="0" alt="" /></a></td>
	<td align="center"><b><?php echo $row->owner; ?></b></td>
	<td align="center">
	<?php if ($row->useruploaded ) {?>
	<img src="../includes/js/ThemeOffice/users.png" title="<?php echo _DG_USER_UPLOAD; ?>">
	<?php } else { ?>
	<img src="../includes/js/ThemeOffice/credits.png" title="<?php echo _DG_ADMIN_UPLOAD; ?>">
	<?php } ?>
	</td>
	<td width="10%" align="center"><?php echo strftime("%d.%m.%Y %H:%M",$row->imgdate); ?></td>
	<?php
    $k = 1 - $k;
    echo "</tr>";
    }
    ?>
    <th align="center" colspan="13"> <?php echo $pageNav->writePagesLinks(); ?></th>
	</tr>
	<tr>
	<td align="center" colspan="13"> <?php echo $pageNav->writePagesCounter(); ?></td>
	</tr>
	</table>
	<input type="hidden" name="option" value="<?php echo $option;?>" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="boxchecked" value="0" />
	</form>
	<?php
	}
	function editPicture( $option, &$row, &$clist, &$originallist, &$imagelist, &$thumblist, $ad_pathoriginals, $ad_pathimages, $ad_paththumbs, $ad_thumbwidth, $ad_thumbheight, $ad_imgstyle ) {
	global $my;
	?>
	<script type="text/javascript">
    function submitbutton(pressbutton) {
    var form = document.adminForm;
    if (pressbutton == 'cancel') {
    submitform( pressbutton );
    return;
    }
    if (form.imgtitle.value == ""){
    alert( "<?php echo _DG_PIC_ENTER_TITLE;?>" );
    } else if (form.catid.value == "0"){
    alert( "<?php echo _DG_SELECT_CAT;?>" );
    } else if (form.imgoriginalname.value == ""){
    alert( "<?php echo _DG_SELECT_ORG_PIC;?>" );
    } else if (form.imgfilename.value == ""){
    alert( "<?php echo _DG_SELECT_MED_PIC;?>" );
    } else if (form.imgthumbname.value == ""){
    alert( "<?php echo _DG_SELECT_THUMB_PIC;?>" );
    } else {
    submitform( pressbutton );
    }
    }
    </script>
    <table width="100%" border="0" cellspacing="0" cellpadding="6" class="adminform" style="table-layout: auto; white-space: nowrap;">
    <tr>
    <td width="50" align="left" valign="top">
	<form action="index2.php" method="post" name="adminForm" id="adminForm">
	<table cellpadding="4" cellspacing="1" border="0" width="100%">
    <tr>
	<td width="20%"><b><?php echo _DG_TITLE; ?>:</b></td>
	<td width="80%">
	<input class="inputbox" type="text" name="imgtitle" size="39" maxlength="100" value="<?php echo htmlspecialchars( $row->imgtitle, ENT_QUOTES );?>" />	</td>
	</tr>
	<tr>
	<td valign="top"><b><?php echo _DG_CATEGORY; ?>:</b></td>
	<td> <?php echo $clist; ?> </td>
	</tr>
	<tr>
	<td valign="top" align="right"><b><?php echo _DG_DESCRIPTION; ?>:</b></td>
	<td>
	<?php editorArea( 'editor1', str_replace('&','&amp;',$row->imgtext) , 'imgtext', '500', '200', '70', '10' ); ?>	</td>
	</tr>
	<tr>
	<td valign="top"><b><?php echo _DG_AUTHOR_OWNER; ?>:</b></td>
	<td>
	<input class="inputbox" type="text" name="imgauthor" value="<?php echo $row->imgauthor; ?>" size="39" maxlength="100" />	</td>
	</tr>
	<tr>
	<td valign="top"><b><?php echo _DG_LIST_ORG_PIC; ?>:</b></td>
	<td width="320" valign="top"> <?php echo $originallist; ?> </td>
	</tr>
	<tr>
	<td valign="top"><b><?php echo _DG_LIST_MED_PIC; ?>:</b></td>
	<td width="320" valign="top"> <?php echo $imagelist; ?> </td>
	</tr>
	<tr>
	<td valign="top"><b><?php echo _DG_LIST_THUMB_PIC; ?>:</b></td>
	<td width="320" valign="top"> <?php echo $thumblist; ?> </td>
	</tr>
	</table>
	<input type="hidden" name="id" value="<?php echo $row->id; ?>" />
	<input type="hidden" name="option" value="<?php echo $option;?>" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="owner" value="<?php if ($row->owner) {echo $row->owner;} else {echo $my->username;} ?>" />
	<input type="hidden" name="approved" value="<?php if ($row->approved == "") {echo "1";} else {echo $row->approved;} ?>" />
	</form>	</td>
    <td width="50" align="left" valign="top">

    <table width="50%" border="0" cellspacing="0" cellpadding="0">
    <tr>
    <td align="center">
    <fieldset>
    <legend><?php echo _DG_ORG_PIC_PREVIEW; ?></legend>
    <script type="text/javascript">
	if (document.forms[0].imgoriginalname.options.value!=''){
	jsimg='<?php echo "..$ad_pathoriginals/"; ?>' + getSelectedValue( 'adminForm', 'imgoriginalname' );
	} else {
	jsimg='../images/M_images/blank.png';
	}
	document.write('<img src=' + jsimg + ' name="imagelib" width="<?php echo $ad_thumbwidth; ?>" height="<?php echo $ad_thumbheight; ?>" style="<?php echo $ad_imgstyle; ?>" title="<?php echo _DG_ORG_PIC_PREVIEW; ?>" />');
	</script>
    </fieldset>
    </td>
    </tr>
    <tr>
    <td align="center"><fieldset><legend><?php echo _DG_MED_PIC_PREVIEW; ?></legend>
    <script type="text/javascript">
	if (document.forms[0].imgfilename.options.value!=''){
	jsimg='<?php echo "..$ad_pathimages/"; ?>' + getSelectedValue( 'adminForm', 'imgfilename' );
	} else {
	jsimg='../images/M_images/blank.png';
	}
	document.write('<img src=' + jsimg + ' name="imagelib3" width="<?php echo $ad_thumbwidth; ?>" height="<?php echo $ad_thumbheight; ?>" style="<?php echo $ad_imgstyle; ?>" title="<?php echo _DG_MED_PIC_PREVIEW; ?>" />');
	</script></fieldset></td>
    </tr>
    <tr>
    <td align="center"><fieldset><legend><?php echo _DG_THUMB_PIC_PREVIEW; ?></legend>
    <script type="text/javascript">
	if (document.forms[0].imgthumbname.options.value!=''){
	jsimg='<?php echo "..$ad_paththumbs/"; ?>' + getSelectedValue( 'adminForm', 'imgthumbname' );
	} else {
	jsimg='../images/M_images/blank.png';
	}
	document.write('<img src=' + jsimg + ' name="imagelib2" width="<?php echo $ad_thumbwidth; ?>" height="<?php echo $ad_thumbheight; ?>" style="<?php echo $ad_imgstyle; ?>" title="<?php echo _DG_THUMB_PIC_PREVIEW; ?>" />');
	</script></fieldset></td>
    </tr>
    </table>
    </td>
    </tr>
    </table>
	<?php
	}
	function showComments( $option, &$rows, &$search, &$pageNav ) {
	?>
	<form action="index2.php" method="post" name="adminForm">
	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminheading">
	<tr>
    <th class="langmanager"><?php echo _DG_COMMENTS_MANAGER_TITLE;?></th>
	<td width="100%" class="sectionname"> </td>
	<td nowrap="nowrap"><?php echo _DG_DISPLAY ; ?></td>
	<td> <?php echo $pageNav->writeLimitBox(); ?> </td>
	<td><?php echo _DG_SEAR; ?>:</td>
	<td>
	<input type="text" name="search" value="<?php echo $search;?>" class="inputbox" onchange="document.adminForm.submit();" />
	</td>
	</tr>
	</table>
	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
	<tr>
	<th width="20">
	<input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $rows ); ?>);" />
	</th>
	<th class="title" width="25%"><?php echo _DG_AUTHOR_OWNER; ?></th>
	<th width="25%" align="left"><?php echo _DG_TEXT; ?></th>
	<th width="10%" align="left"><?php echo _DG_IP; ?></th>
	<th width="10%"><?php echo _DG_PUBLISHED; ?></th>
	<th width="15%"><?php echo _DG_PIC; ?></th>
	<th width="15%"><?php echo _DG_DATE_ADD; ?></th>
	</tr>
	<?php
    $k = 0;
    for ($i=0, $n=count( $rows ); $i < $n; $i++) {
    $row = &$rows[$i];
    ?>
	<tr class="<?php echo "row$k"; ?>">
	<td>
	<input type="checkbox" id="cb<?php echo $i;?>" name="id[]" value="<?php echo $row->cmtid; ?>" onclick="isChecked(this.checked);" />
	</td>
	<td><b><?php echo $row->cmtname; ?></b></td>
	<td><?php echo $row->cmttext; ?></td>
	<td><?php echo $row->cmtip; ?></td>
	<?php
    echo "<td align='center'>";
    if ($row->published == "1") {
	echo "<img src='images/tick.png'>";
	} else {
	echo "<img src='images/publish_x.png'>";
	}
    echo "</td>";
    ?>
	<td width="10%" align="center"><?php echo $row->cmtpic; ?></td>
	<td width="10%" align="center"><?php echo strftime("%d.%m.%Y %H:%M",$row->cmtdate); ?></td>
	<?php
    $k = 1 - $k;
    echo "</tr>";
    }
    ?>
	<tr>
	<th align="center" colspan="7"> <?php echo $pageNav->writePagesLinks(); ?></th>
	</tr>
	<tr>
	<td align="center" colspan="7"> <?php echo $pageNav->writePagesCounter(); ?></td>
	</tr>
	</table>
	<input type="hidden" name="option" value="<?php echo $option;?>" />
	<input type="hidden" name="task" value="comments" />
	<input type="hidden" name="boxchecked" value="0" />
	</form>
	<?php
    }
    function showCatgs( &$rows, $search, $pageNav, $option ) {
    ?>
	<div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;"></div>
	<script language="Javascript" src="../includes/js/overlib_mini.js"></script>
	<form action="index2.php" method="post" name="adminForm">
	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminheading">
	<tr>
    <th class="categories"><?php echo _DG_CAT_MANAGER; ?></th>
	<td nowrap><?php echo _DG_DISPLAY; ?></td>
	<td> <?php echo $pageNav->writeLimitBox(); ?> </td>
	<td><?php echo _DG_SEAR; ?>:</td>
	<td>
	<input type="text" name="search" value="<?php echo $search;?>" class="inputbox" onchange="document.adminForm.submit();" />
	</td>
	</tr>
	<tr>
	<td width="100%"> </td>
	</tr>
	</table>
	<table width="100%" border="0" cellpadding="4" cellspacing="0"  class="adminlist">
	<tr>
    <th width="20">#ID</th>
	<th width="20">
	<input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $rows ); ?>);" />
	</th>
	<th class="title" nowrap="nowrap"><?php echo _DG_CATEGORY; ?></th>
	<th align="left"><?php echo _DG_PARENT_CAT; ?></th>
	<th nowrap="nowrap"><?php echo _DG_PUBLISHED; ?></th>
	<th nowrap="nowrap"><?php echo _DG_ACCESS; ?></th>
	<th colspan="2" nowrap="nowrap">
	<div align="center"><?php echo _DG_REORDER; ?></div>
	</th>
	</tr>
	<?php
	$k = 0;
	$i = 0;
	for ($i=0, $n=count( $rows ); $i < $n; $i++) {
	$row = &$rows[$i];
    ?>
	<tr class="row<?php echo $k; ?>">
    <td align="center"><?php echo $row->cid; ?></td>
	<td width="20">
	<input type="checkbox" id="cb<?php echo $i;?>" name="cid[]" value="<?php echo $row->cid; ?>" onclick="isChecked(this.checked);">
	</td>
	<td align="left" width="25%"><a href="#edit" onclick="return listItemTask('cb<?php echo $i; ?>','editcatg')"><?php echo $row->name; ?></a></td>
	<td align="left" width="55%"><?php echo ShowCategoryPath($row->parent); ?></td>
	<?php
	$task = $row->published ? 'unpublishcatg' : 'publishcatg';
	$img = $row->published ? 'tick.png' : 'publish_x.png';
	?>
	<td width="10%" align="center" nowrap><a href="javascript: void(0);" onclick="return listItemTask('cb<?php echo $i;?>','<?php echo $task;?>')"><img src="images/<?php echo $img;?>" width="12" height="12" border="0" alt="" /></a></td>
	<td width="10%" align="center" nowrap><?php echo $row->groupname;?></td>
	<td>
	<?php if ($i > 0 || ($i+$pageNav->limitstart > 0)) { ?>
	<div align="center"><a href="#reorder" onclick="return listItemTask('cb<?php echo $i;?>','orderupcatg')">
    <img src="images/uparrow.png" width="12" height="12" border="0" title="<?php echo _DG_UP; ?>"></a>
	<?php } else { echo "&nbsp;"; } ?>
	</div>
	</td>
	<td>
	<?php if ($i < $n-1 || $i+$pageNav->limitstart < $pageNav->total-1) { ?>
	<div align="center"><a href="#reorder" onclick="return listItemTask('cb<?php echo $i;?>','orderdowncatg')">
    <img src="images/downarrow.png" width="12" height="12" border="0" title="<?php echo _DG_DOWN; ?>"></a>
	<?php } else { echo "&nbsp;"; } ?>
	</div>
	</td>
	<?php $k = 1 - $k; } ?>
	</tr>
	<tr>
	<th align="center" colspan="8"> <?php echo $pageNav->writePagesLinks(); ?></th>
	</tr>
	<tr>
	<td align="center" colspan="8"> <?php echo $pageNav->writePagesCounter(); ?></td>
	</tr>
	</table>
	<input type="hidden" name="option" value="<?php echo $option; ?>">
	<input type="hidden" name="task" value="showcatg">
	<input type="hidden" name="boxchecked" value="0">
	</form>
	<?php
	}
	
	function editCatg( &$row, &$publist, $option , $glist , $Lists, $orderlist ) {
	global $mainframe;
    mosMakeHtmlSafe( $row, ENT_QUOTES, 'description' );
	?>
	<script type="text/javascript">
	function submitbutton(pressbutton) {
	var form = document.adminForm;
	if (pressbutton == 'cancelcatg') {
	submitform( pressbutton );
	return;
	}
	
	try {
	document.adminForm.onsubmit();
	}
	catch(e){}
	if (form.name.value == ""){
	alert( "<?php echo _DG_CAT_TITLE; ?>" );
	} else {
	<?php getEditorContents( 'editor1', 'description' ) ; ?>
	submitform( pressbutton );
	}
	}
	</script>
	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminheading">
	<tr>
    <th class="categories"><?php echo $row->cid ? _DG_EDIT_CAT : _DG_ADD_CAT; ?> <?php echo _DG_CATEGORY1; ?></th>
	</tr>
	</table>
	<form action="index2.php" method="POST" name="adminForm">
	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminform">
	<tr>
	<td width="200"><b><?php echo _DG_TITLE; ?>:</b></td>
	<td>
	<input class="inputbox" type="text" name="name" size="25" value="<?php echo $row->name; ?>">
	</td>
	</tr>
	<tr>
	<td valign="top" ><b><?php echo _DG_PARENT_CAT; ?>:</b></td>
	<td nowrap ><?php echo $Lists["catgs"]; ?></td>
	</tr>
    <tr>
	<td valign="top"><b><?php echo _DG_DESCRIPTION; ?>:</b></td>
	<td>
	<?php editorArea( 'editor1', str_replace('&','&amp;',$row->description) , 'description', '500', '200', '70', '10' ) ; ?>
	</td>
	</tr>
	<tr>
	<td valign="top" ><b><?php echo _DG_ACCESS; ?>:</b></td>
	<td nowrap ><?php echo $glist?></td>
	</tr>
	<tr>
	<td valign="top" ><b><?php echo _DG_ORDER; ?>:</b></td>
	<td nowrap ><?php echo $orderlist?></td>
	</tr>
	</table>
	</div>
	<input type="hidden" name="cid" value="<?php echo $row->cid; ?>">
	<input type="hidden" name="task" value="">
	<input type="hidden" name="option" value="<?php echo $option; ?>">
	</form>
	<?php 
	}
	}
?>
