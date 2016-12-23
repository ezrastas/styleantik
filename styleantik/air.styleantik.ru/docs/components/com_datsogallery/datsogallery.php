<?php
	/***************************************************\
	**   DatsoGallery - A Joomla! Gallery Component    **
	**   Copyright (C) 2006-2007  by Andrey Datso      **
	**   Version    : 1.3.9.1                          **
	**   Homepage   : http://www.datso.fr              **
	**   License    : Copyright, don't distribute      **
    **   Based on   : Akogallery 2.1 by Arthur Konze   **
	\***************************************************/

    defined ('_VALID_MOS') or die('Direct Access to this location is not allowed.');
    error_reporting(E_ALL ^ E_NOTICE);
    echo "<script src=\"$mosConfig_live_site/includes/js/overlib_mini.js\" type=\"text/javascript\"></script>";
    require_once($mosConfig_absolute_path."/administrator/components/com_datsogallery/globals.datsogallery.php");
    require($mosConfig_absolute_path . "/administrator/components/com_datsogallery/config.datsogallery.php");
	require_once($mosConfig_absolute_path . "/administrator/components/com_datsogallery/class.datsogallery.php");

    $uid                 = intval( mosGetParam( $_REQUEST, 'uid', 0 ) );
    $id                  = intval( mosGetParam( $_REQUEST, 'id', 0 ) );
    $catid               = intval( mosGetParam( $_REQUEST, 'catid', 0 ) );
    $cmtid               = intval( mosGetParam( $_REQUEST, 'cmtid', 0 ) );
    $imgvote             = intval( mosGetParam( $_REQUEST, 'imgvote', 0 ) );
    $startpage           = intval( mosGetParam( $_REQUEST, 'startpage', 0 ) );
    $cmtpic              = intval( mosGetParam( $_POST, 'cmtpic', 0 ) );
    $cmtpic              = intval( mosGetParam( $_REQUEST, 'cmtpic', '' ) );
    $Itemid              = intval( mosGetParam( $_REQUEST, 'Itemid', '' ) );
    $sstring             = $database->getEscaped( trim( mosGetParam( $_POST, 'sstring', '' ) ) );
    $sstring             = $database->getEscaped( trim( mosGetParam( $_REQUEST, 'sstring', '' ) ) );
    $imgtitle            = $database->getEscaped( trim( mosGetParam( $_POST, 'imgtitle', '' ) ) );
    $imgtext             = $database->getEscaped( trim( mosGetParam( $_POST, 'imgtext', '' ) ) );
    $cmtname             = $database->getEscaped( trim( mosGetParam( $_POST, 'cmtname', '' ) ) );
    $cmttext             = $database->getEscaped( trim( mosGetParam( $_POST, 'cmttext', '' ) ) );
    $thumbcreation       = trim( mosGetParam( $_POST, 'thumbcreation', '' ) );
    $imgauthor           = trim( mosGetParam( $_POST, 'imgauthor', '' ) );
    $imgoriginalname     = trim( mosGetParam( $_POST, 'imgoriginalname', '' ) );
    $imgfilename         = trim( mosGetParam( $_POST, 'imgfilename', '' ) );
    $imgthumbname        = trim( mosGetParam( $_POST, 'imgthumbname', '' ) );
    $ordering            = trim( mosGetParam( $_POST, 'ordering', '' ) );
    $sorting             = trim( mosGetParam( $_POST, 'sorting', '' ) );
    $func                = trim( mosGetParam( $_POST, 'func', '' ) );
    $func                = trim( mosGetParam( $_REQUEST, 'func', '' ) );
    $sorting             = trim( mosGetParam( $_REQUEST, 'sorting', '' ) );
    $method              = trim( mosGetParam($_REQUEST, 'method', '') );
    $org_screenshot      = $_FILES['org_screenshot']['tmp_name'];
	$org_screenshot_name = $_FILES['org_screenshot']['name'];

    $dgurl         = "index.php?option=com_datsogallery&Itemid=$Itemid";
	$gallerypath   = $mosConfig_live_site . "/components/com_datsogallery";
    $gallerydir    = $mosConfig_absolute_path . "/components/com_datsogallery";
	$originalpath  = $mosConfig_live_site . $ad_pathoriginals . "/";
	$picturepath   = $mosConfig_live_site . $ad_pathimages . "/";
    $originaldir   = $mosConfig_absolute_path . $ad_pathoriginals . "/";
	$picturedir    = $mosConfig_absolute_path . $ad_pathimages . "/";
	$thumbnailpath = $mosConfig_live_site . $ad_paththumbs . "/";

    if (file_exists($gallerydir.'/sub_download.php')) {
    unlink($gallerydir.'/sub_download.php');
    }

    if (file_exists($mosConfig_absolute_path . '/components/com_datsogallery/language/' . $mosConfig_lang . '.php')) {
	require($mosConfig_absolute_path . '/components/com_datsogallery/language/' . $mosConfig_lang . '.php');
	} else {
	require($mosConfig_absolute_path . '/components/com_datsogallery/language/english.php');
	}

    $mainframe->setPageTitle ( _DG_GALLERY );
	$is_editor = (strtolower($my->usertype) == 'editor' || strtolower($my->usertype) == 'administrator' || strtolower($my->usertype) == 'super administrator');
	$is_user = (strtolower($my->usertype) <> '');
	function GalleryHeader (){
	global $database,$mosToolTip,$catid,$Itemid,$id,$dgurl,$is_editor,$gid,$ad_showsend2friend,$ad_showdownload,$ad_downpub,$ad_pathway,$allowcomment,
    $ad_showtip,$ad_showrating,$ad_showcomment,$ad_comtitle,$ad_search,$ad_showpanel,$ad_userpannel,$ad_special,$ad_rating,$ad_cp,$ad_name_or_user,$ad_security,
    $ad_lastadd,$ad_lastcomment,$ad_sortby,$ad_showwatermark,$my,$ad_cr,$gallerypath,$ad_olfe,$is_allowed,$mainframe,$ad_picincat,$ad_lightbox,$ad_anoncomment;

    echo "<table width='98%' cellpadding='3' cellspacing='4' border='0' align='center' class='newspane'>\n";
    if ($ad_comtitle) {
    echo "<tr>\n";
    echo "<td class='componentheading'>"._DG_GALLERY."</td>\n";
    echo "</tr>\n"; }
    echo "<tr>\n";
    echo "<td>\n";
    echo "<table width='100%' border='0' cellspacing='0' cellpadding='3'>\n";
    echo "<tr align='left'>\n";
    echo "<td align='left' width='100%'><a href='" . sefRelToAbs("$dgurl") . "'>";

	if ($catid <> "") {
	echo ShowCategoryPathLink($catid);
	} else if ($id) {
	$database->setQuery("select a.*, cc.name as category "
	. " from #__datsogallery as a, #__datsogallery_catg as cc "
	. " where a.catid=cc.cid and a.id=$id "
	. " and cc.access<='$gid'");
	$rows = $database->loadObjectList();
	$row = &$rows[0];
	echo ShowCategoryPathLink($row->catid);
	} else if (!$catid && !$ad_pathway){
    echo "<img src='$gallerypath/images/home.gif' hspace='6' border='0' align='left' alt='' /> ". _DG_HOME."</a>";
    }

	echo "</td>\n";

    if ($ad_search) {
	echo "<td align='right' class='directorypath' valign='middle'>";
    echo "<form action='".sefRelToAbs("$dgurl")."' name='searchgalform' target='_top' method='post'>";
	echo "<input type='hidden' name='option' value='com_datsogallery' />";
    echo "<input type='hidden' name='Itemid' value='$Itemid' />";
	echo "<input type='hidden' name='func' value='special' />";
    echo "<input type='hidden' name='sorting' value='find' />";
	echo "<input type='text' name='sstring' class='inputbox' onblur=\"if(this.value=='') this.value='';\" onfocus=\"if(this.value=='". _DG_SEARCH ."') this.value='';\" value='". _DG_SEARCH ."' /></form>";
	echo "</td>\n";
    }
	echo "</tr>\n</table>\n</td>\n</tr>\n<tr>\n<td align='right'><div id='dt1'>";
	if ($ad_showpanel){
	if ($my->username){
    if ($ad_userpannel){
	echo "<a href='" . sefRelToAbs("$dgurl&func=userpannel") . "'><b>". _DG_USER_PANEL ."</b></a> | ";}
	}
    if ($ad_special){
	echo "<a href='" . sefRelToAbs("$dgurl&func=special") . "'>". _DG_MOST_VIEWED ."</a> | ";}
    if ($ad_rating){
	echo "<a href='" . sefRelToAbs("$dgurl&func=special&sorting=rating") . "'>". _DG_TOP_RATED ."</a> | ";}
    if ($ad_lastadd){
	echo "<a href='" . sefRelToAbs("$dgurl&func=special&sorting=lastadd") . "'>". _DG_LAST_ADDED ."</a> | ";}
    if ($ad_lastcomment){
	echo "<a href='" . sefRelToAbs("$dgurl&func=special&sorting=lastcomment") . "'>". _DG_LAST_COMMENTED ."</a>";}
	echo "</div></td>\n</tr>\n<tr>\n<td>\n";
	return;
	}
	}

	function GalleryFooter(){
    global $ad_cr, $ad_powered;
	echo "</td>\n</tr>\n";
    if ($ad_powered){
    echo "<tr>\n";
    echo "<td align = 'center'><font class='small'>$ad_cr</font></td>\n";
    echo "</tr>\n";
    }else{
    echo "<tr>\n";
    echo "<td><span style='display:none'>$ad_cr</span></td>\n";
    echo "</tr>\n";}
	echo "</table>\n";
	return;
	}

	switch (@$func) {
    case 'download':
    $imgoriginalname = $_GET['file'];
    $orgdir = $mosConfig_absolute_path.$ad_pathoriginals;
    $picname = $orgdir.'/'.$imgoriginalname;
    $fext = strtolower(substr(strrchr($picname,'.'),1));
    if ($fext != 'jpg' && $fext != 'jpeg' && $fext != 'png' && $fext != 'gif'){
    mosRedirect(sefRelToAbs("$dgurl"));
	die();
    }else{
    if(is_file($picname)){
    ob_clean();
	header('Content-Description: File Transfer');
	header('Content-Type: application/force-download');
	header('Content-Length: ' . filesize($picname));
	header('Content-Disposition: attachment; filename='.$imgoriginalname.'');
	header('Cache-Control: cache, must-revalidate');
	header('Pragma: public');
    $orgpic = file_get_contents($picname);
	echo $orgpic;
	ob_end_flush();
    die();
    }
    }
    break;
	case 'special':
	include($gallerydir.'/sub_viewspecial.php');
	break;
	case 'detail':
	include($gallerydir.'/sub_viewdetails.php');
	break;
	case 'votepic':
	include($gallerydir.'/sub_votepic.php');
	break;
	case 'editpic':
	if (!$my->username) {
	mosRedirect(sefRelToAbs("$dgurl",  _DG_YOU_NOT_LOGED));
	die();
	}
	GalleryHeader();
	editPic($uid, $option, $thumbnailpath);
	break;
	case 'savepic':
	if (!$my->username) {
	mosRedirect(sefRelToAbs("$dgurl",  _DG_YOU_NOT_LOGED));
	die();
	}
	savePic($option);
	break;
	case 'deletepic':
	if (!$my->username) {
	mosRedirect(sefRelToAbs("$dgurl",  _DG_YOU_NOT_LOGED));
	die();
	}
	deletePic($uid, $option);
	break;
	case 'commentpic':
	include($gallerydir.'/sub_commentpic.php');
	break;
	case 'deletecomment':
	GalleryHeader();
	include($gallerydir.'/sub_deletecomment.php');
	break;
	case 'viewcategory':
	GalleryHeader();
	$database->setQuery("select count(*) from #__datsogallery_catg"
	. " where cid = '" . $catid . "'"
	. " and access<='$gid'");
	$is_allowed = $database->loadResult();
	if ($is_allowed < 1) {
	mosRedirect(sefRelToAbs("$dgurl"), _DG_NOT_ACCESS_THIS_DIRECTORY);
	die();
	}
	echo dgCategories($catid, $Itemid);
	$database->setQuery("select count(*) from #__datsogallery as a "
	. " left join #__datsogallery_catg as c on c.cid=a.catid "
	. " where a.published = '1' "
    . " and a.catid = '$catid'"
	. " and a.approved = 1 "
    . " and c.access<='$gid' ");
	$count = $database->loadResult();
	$gesamtseiten = floor($count / $ad_perpage);
	$seitenrest = $count % $ad_perpage;
	if ($seitenrest > 0) {
	$gesamtseiten++;
	}
	if (isset($startpage)) {
	if ($startpage > $gesamtseiten) {
	$startpage = $gesamtseiten;
	} else if ($startpage < 1) {
	$startpage = 1;
	}
	} else {
	$startpage = 1;
	}
    if($ad_picincat){
    if ($count == 1){ $cpics = _DG_COUNT_PIC_ONE;
    } else if ($count > 1 && ($count < 5)){ $cpics = _DG_COUNT_PIC_TWO_TO_FOUR;
    } else if ($count > 4){ $cpics = _DG_COUNT_PIC_MORE_THAN_FOUR;}
	echo '' . _DG_THERE_ARE . " $count " . $cpics . " " . _DG_IN_CATEGORY . ' <br />';}
	$start = ($startpage - 1) * $ad_perpage;
    echo '<p />';
    $query = "SELECT * FROM #__datsogallery_catg WHERE cid = '".$catid."' ORDER BY ordering";
    $database->setQuery($query);
    $vcats = $database->loadObjectList();
    $vcat = &$vcats[0];
    $mainframe->setPageTitle ($vcat->name);
	echo "<table width='100%' border='0' cellspacing='1' cellpadding='0'>";
    echo "<tr>\n<td colspan='4' class='sectiontableheader' width='100%'><div style='float:left;display:block;'>".$vcat->name."</div>";
    if ($count > $ad_perpage){
    echo "<div style='float:right;display:block;'>";
    echo _DG_PAGES . ': ';
	$seiterueck = $startpage - 1;
	if ($seiterueck > 0) {
	echo "<a href='" . sefRelToAbs("$dgurl&func=viewcategory&catid=$catid&startpage=$seiterueck") . "'><strong>&laquo;</strong></a> ";
	}
	for ($i = 1; $i <= $gesamtseiten; $i++) {
	if ($i == $startpage) {
	echo "$i ";
	} else {
	echo "<a href='" . sefRelToAbs("$dgurl&func=viewcategory&catid=$catid&startpage=$i") . "'>$i</a> ";
	}
	}
	$seitevor = $startpage + 1;

	if ($seitevor <= $gesamtseiten) {
	echo "<a href='" . sefRelToAbs("$dgurl&func=viewcategory&catid=$catid&startpage=$seitevor") . "'><strong>&raquo;</strong></a> ";
	}
    echo "</div>";
    }
    echo "</td>\n</tr>\n";

	$database->setQuery("select * from #__datsogallery as a "
	. " left join #__datsogallery_catg as c on c.cid=a.catid "
	. " where a.published = '1' and a.catid = '$catid' "
	. " and a.approved = 1 "
    . " and c.access<='$gid' "
	. " order by a.ordering $ad_sortby limit " . $start . "," . $ad_perpage);
	$rows = $database->loadObjectList();
    
	echo "<tr>\n";
	$rowcounter = 0;
	foreach ($rows as $row1) {
	if (($rowcounter % $ad_cp == 0) && ($rowcounter <> 0))
	echo "</tr>\n<tr>\n";

	echo "<td class='sectiontableentry2' width='25%' align='center' valign='middle'>";

	if ($ad_showdetail)

	if ($ad_showrating) {
	if ($row1->imgvotes > 0) {
	$fimgvotesum = number_format($row1->imgvotesum / $row1->imgvotes, 2, ",", ".");
	$frating = "$fimgvotesum / $row1->imgvotes ";
	} else {
	$frating = _DG_NO_VOTES;
	}
	}

	if ($ad_showcomment) {
	$database->setQuery("SELECT cmtid FROM #__datsogallery_comments WHERE cmtpic='$row1->id'");
	$comments_result = $database->query();
	$comments = mysql_num_rows($comments_result);
	}

    $dghits = _DG_HITS;
    $dgvotes = _DG_RATING;
    $dgcomment = _DG_COMMENT1;
    $tle = ereg_replace('"', '', $row1->imgtitle);
    if ($ad_showtip) {
	echo "<a href='" . sefRelToAbs("$dgurl&func=detail&catid=$catid&id=$row1->id") . "'";
    echo "onmouseover=\"return overlib('";
    echo "<strong>$tle</strong>";
    if ($ad_showimgcounter > 0){ echo "<br />$dghits: $row1->imgcounter";}
    if ($ad_showrating > 0) { echo "<br />$dgvotes: $frating";}
    if ($ad_showcomment > 0) { echo "<br />$dgcomment : $comments";}
    echo "');\"";
    echo "onmouseout=\"return nd();\"><img src='$thumbnailpath$row1->imgthumbname' style='".$ad_imgstyle."' alt='".$tle."' /></a><br />";
    } else {
    echo "<div align='center'><a href='" . sefRelToAbs("$dgurl&func=detail&catid=$catid&id=$row1->id") . "'><img src='$thumbnailpath$row1->imgthumbname' style='".$ad_imgstyle."' title='".$tle."' alt='".$tle."' /><div>$tle</div></a></div>";
    }
    echo "</td>\n";
    $rowcounter++;
    }
	if ($rowcounter % $ad_cp <> 0) {
	for ($i = 1; $i <= ($ad_cp - ($rowcounter % $ad_cp)); $i++) {
	echo "<td class='sectiontableentry2' width='25%' valign='middle'>&nbsp;</td>\n";
	}
	}

	echo "</tr>\n</table>\n";

	break;

	case "showupload":

	if (!$my->username) {
	mosRedirect(sefRelToAbs("$dgurl"), _DG_YOU_NOT_LOGED);
    die();
	}

	GalleryHeader();

	showUpload($option, @$batchul);

	break;

	case "uploadhandler":

	if (!$my->username) {
	mosRedirect(sefRelToAbs("$dgurl"), _DG_YOU_NOT_LOGED);
    die();
	}
    require_once($mosConfig_absolute_path."/administrator/components/com_datsogallery/globals.datsogallery.php");
    require_once($mosConfig_absolute_path."/administrator/components/com_datsogallery/config.datsogallery.php");
    require_once($mosConfig_absolute_path."/administrator/components/com_datsogallery/images.datsogallery.php");
	echo "<p />";

    if (preg_match('/[^A-Za-z0-9._-]/', $org_screenshot_name) ) {
    mosRedirect(sefRelToAbs("$dgurl&func=showupload"), _DG_FILENAME_CAR_ERR);
	die();
	}
	$tag = ereg_replace(".*\.([^\.]*)$", "\\1", $org_screenshot_name);
	$tag = strtolower($tag);

	if ($_FILES["org_screenshot"]["size"] > $ad_maxfilesize) {
	mosRedirect(sefRelToAbs("$dgurl&func=userpannel"), _DG_SIX_ERR_ONE . ' ' . $ad_maxfilesize . ' ' . _DG_SIX_ERR_TWO);
    die();
	}

	if (($tag == "jpeg") || ($tag == "jpg") || ($tag == "gif") || ($tag == "png")) {
	if (file_exists($mosConfig_absolute_path . $ad_pathoriginals . "/$org_screenshot_name" )) {
	mosRedirect(sefRelToAbs("$dgurl&func=showupload"), _DG_FILE_EXIST);
	die();
	}

    $img_info = getimagesize($org_screenshot);
    if (!$img_info) {
    mosRedirect(sefRelToAbs("$dgurl&func=userpannel"), _DG_FILENAME_BAD);
    die();
    } else if ($img_info[0] < $ad_maxwidth or $img_info[1] < $ad_maxheight) {
	mosRedirect(sefRelToAbs("$dgurl&func=userpannel"), _DG_MIN_WH . ' ' . $ad_maxwidth . 'x' .$ad_maxheight.' ' . _DG_MIN_WH_TWO);
    die();
    }
    
	if ($org_screenshot)
	copy($org_screenshot, $mosConfig_absolute_path . $ad_pathoriginals . "/$org_screenshot_name");
	if (strlen($org_screenshot) > 0 and $org_screenshot != "none") {
	$img_info = getimagesize($org_screenshot);
	if ($img_info[0] > $ad_maxwidth or $img_info[1] > $ad_maxheight) {
	resize_image($org_screenshot, $mosConfig_absolute_path . $ad_pathimages . "/med_$org_screenshot_name", "$ad_maxwidth", "$ad_thumbcreation", "$ad_thumbquality");
    } else {
	copy($org_screenshot, $mosConfig_absolute_path . $ad_pathimages . "/med_$org_screenshot_name");
	}
	}
	if ($thumbcreation)
    if ($ad_crsc == "crop") {
    thumb($org_screenshot, $mosConfig_absolute_path . $ad_paththumbs . "/tn_$org_screenshot_name", $ad_thumbwidth, $ad_thumbheight, $ad_thumbquality);
    } else {
    resize_image( $org_screenshot, $mosConfig_absolute_path . $ad_paththumbs . "/tn_$org_screenshot_name", "$ad_thumbwidth", "$ad_thumbcreation", "$ad_thumbquality");
    }
    $row = new mosdatsogallery($database);
	if (!$row->bind($_POST, "approved owner published ordering")) {
	echo "<script> alert('" . $row->getError() . "'); window.history.go(-1); </script>";
	exit();
	}
    $database->setQuery( "select ordering from #__datsogallery where catid='".$row->catid."' order by ordering desc limit 1" );
    $ordering1 = $database->loadResult();
    $ordering = $ordering1+1;
    $row->ordering = $ordering;
	$row->imgdate = mktime();
	$row->owner = $my->username;
	$row->published = 1;

	if ($ad_approve) {
	$row->approved = 0;
	} else {
	$row->approved = 1;
	}
    if ($row->owner == $is_editor){
    $row->approved = 1;
    }
	$row->imgoriginalname = $org_screenshot_name;
	$row->imgfilename = "med_" . $org_screenshot_name;
	$row->imgthumbname = "tn_" . $org_screenshot_name;
    if ($row->owner == $is_editor){
    $row->useruploaded = 0;
    } else {
	$row->useruploaded = 1; }
	if (!$row->store()) {
	echo "<script> alert('" . $row->getError() . "'); window.history.go(-1); </script>";
	exit();
	} else {
	require_once($mosConfig_absolute_path."/components/com_messages/messages.class.php");
	$database->setQuery( " select id from #__users where sendEmail = '1' " );
	$users = $database->loadResultArray();
	foreach ($users as $user_id) {
	$msg = new mosMessage($database);
	$msg->send($my->id,
	$user_id,
	_DG_NEW_PIC_SUBMITED,
	sprintf( _DG_NEW_CONTENT_SUBMITED . " %s " . _DG_TITLED ." %s.",
	$my->username,
	$row->imgtitle));
	}
	}
	mosRedirect(sefRelToAbs("$dgurl&func=userpannel"), _DG_PIC_SUCCESSFULLY_ADD);
	} else {
	die(_DG_FILENAME_BAD);
	}

	mosRedirect(sefRelToAbs("$dgurl&func=showupload"), _DG_INVALID_IMG_TYPE);

	break;
	case "userpannel":
	if (!$my->username) {
	mosRedirect(sefRelToAbs("$dgurl&func=showupload"), _DG_YOU_NOT_LOGED);
	die();
	}
	GalleryHeader();
	userPannel();
	break;

	case "send2friend":
    $query = "select id from #__menu where link = 'index.php?option=com_datsogallery'";
    $database->setQuery($query);
    $rows = $database->loadObjectList();
    if (isset($rows[0]->id)) {
    $Itemid = $rows[0]->id;
    } else {
    $Itemid = "";
    }
	$send2friendname = mosGetParam($_POST, "send2friendname", '');
	$send2friendemail = mosGetParam($_POST, "send2friendemail", '');
	$from2friendname = mosGetParam($_POST, "from2friendname", '');
	$from2friendemail = mosGetParam($_POST, "from2friendemail", '');
	$id = intval(mosGetParam($_POST, "id", ''));
	$text=$from2friendname . " (" . $from2friendemail . ")" . " ". _DG_INVITE_VIEW_PIC. " \r \n";
	$text .= $mosConfig_live_site . "/index.php?option=com_datsogallery&Itemid=$Itemid&func=detail&catid=$catid&id=$id \r \n";
	$subject=$mosConfig_sitename . ' - ' . _DG_RECCOMEND_PIC_FROM_FREND;

	mosMail( $mosConfig_mailfrom, $mosConfig_fromname, $send2friendemail, $subject, $text);
    mosRedirect(sefRelToAbs("index.php?option=com_datsogallery&Itemid=$Itemid&func=detail&catid=$catid&id=$id"), _DG_MAIL_SENT);
    break;

    default:
	GalleryHeader();
    echo dgCategories($catid, $Itemid);
    break;
	}

	GalleryFooter();

    function showUpload ($option, $batchul){
	global $my, $database, $dgurl, $ad_maxuserimage, $ad_category, $ad_maxwidth, $ad_maxheight, $ad_maxfilesize, $mainframe;
    $mainframe->setPageTitle(_DG_NEW_PICTURE);
    $mainframe->AppendPathway(_DG_NEW_PICTURE);
    $database->setQuery("select count(*) from #__datsogallery where owner = '$my->username'");
	$count_pic = $database->loadResult();
    if($is_editor){
    $count_pic = false;
    }
	if ($count_pic >= $ad_maxuserimage) {
	mosRedirect(sefRelToAbs("$dgurl&func=userpannel"), _DG_MAY_ADD_MAX_OFF . ' ' . $ad_maxuserimage . ' ' . _DG_PICTURES);
	die();
	}
	$clist = ShowDropDownCategoryList($ad_category, "catid", ' size="1"');
    echo "<script language = \"javascript\" type = \"text/javascript\">\n";
	echo "function checkMe() {\n";
	echo "var form = document.adminForm;\n";
	echo "if (form.imgtitle.value == \"\") {\n";
	echo "alert('"._DG_PIC_MUST_HAVE_TITLE."');\n";
	echo "return false;\n";
	echo "} else if (form.catid.value == \"0\") {\n";
	echo "alert('"._DG_MUST_SELECT_CATEGORY."');\n";
	echo "return false;\n";
	echo "} else if (form.screenshot.value == \"\") {\n";
	echo "alert('"._DG_MUST_HAVE_FNAME."');\n";
	echo "return false;\n";
	echo "} else {\n";
	echo "form.submit();\n";
	echo "}\n";
	echo "}\n";
	echo "</script>\n";
    echo "<table cellpadding='4' cellspacing='0' border='0' width='100%'>\n";
    echo "<tr class='sectiontableheader'>\n";
    echo "<td>\n"._DG_NEW_PICTURE."</td>\n";
    echo "</tr>\n";
    echo "</table>\n";
    echo "<table cellpadding='4' cellspacing='1' border='0' width='100%'>\n";
    echo "<form action='".sefRelToAbs("$dgurl&func=uploadhandler")."' method='post' name='adminForm' enctype='multipart/form-data' onsubmit='checkform();'>";
    echo "<input type='hidden' name='option' value='".$option."'/>";
    echo "<tr class='sectiontableentry2'>\n";
    echo "<td width='20%' align='right'> "._DG_TITLE.":</td>\n";
    echo "<td width='80%'>\n";
    echo "<input class='inputbox' type='text' name='imgtitle' size='50' maxlength='100' value='".htmlspecialchars(@$row->imgtitle, ENT_QUOTES)."' />";
    echo "<td valign='top'>" .mosToolTip( _DG_SHOWUPLOAD_1 )."</td>";
    echo "</td>\n";
    echo "</tr>\n";
    echo "<tr class='sectiontableentry2'>\n";
    echo "<td valign='top' align='right'>"._DG_CATEGORY.":</td>\n";
    echo "<td>\n";
	echo $clist;
    echo "<td valign='top'>" .mosToolTip( _DG_SHOWUPLOAD_2 )."</td>";
    echo "</td>\n";
    echo "</tr>\n";
    echo "<tr class='sectiontableentry2'>\n";
    echo "<td valign='top' align='right'>". _DG_DESCRIPTION.":</td>\n";
    echo "<td>\n";
    echo "<textarea class='inputbox' cols='47' rows='5' name='imgtext'>";
	echo htmlspecialchars(@$row->imgtext, ENT_QUOTES);
	echo "</textarea>";
    echo "<td valign='top'>" .mosToolTip( _DG_SHOWUPLOAD_3 )."</td>";
    echo "</td>\n";
    echo "</tr>\n";
    echo "<tr class='sectiontableentry2'>\n";
    echo "<td valign='top' align='right'>"._DG_AUTHOR_OWNER.":</td>\n";
    echo "<td>\n";
    echo "<input class='inputbox' type='text' name='imgauthor' value='".@$row->imgauthor."' size='50' maxlength='100' />";
    echo "<td valign='top'>" .mosToolTip( _DG_SHOWUPLOAD_4 )."</td>";
    echo "</td>\n";
    echo "</tr>\n";
    echo "<tr class='sectiontableentry2'>\n";
    echo "<td valign='top' align='right'>"._DG_PICTURE.":</td>\n";
    echo "<td>\n";
    echo "<input class='inputbox' type='file' name='org_screenshot'/>";
    echo "<td valign='top'>" .mosToolTip( _DG_SHOWUPLOAD_5 . $ad_maxwidth .' x '.$ad_maxheight.' ' . _DG_MIN_WH_TWO._DG_SHOWUPLOAD_6 .format_filesize($ad_maxfilesize).'<br />'._DG_SHOWUPLOAD_7)."</td>";
    echo "</td>\n";
    echo "</tr>\n";
    echo "<tr class='sectiontableentry2'>\n";
    echo "<td colspan='3' align='center'>\n";
    echo "<input type='hidden' name='screenshot' value='ON' checked />";
    echo "<input type='hidden' name='thumbcreation' value='ON' checked />";
    echo "<input type='button' value='"._DG_UPLOAD."' class='button' onclick='checkMe();' />";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='button' value='"._DG_CANCEL_TB."' class='button' onclick='javascript:history.go(-1);' />";
    echo "</td>\n";
    echo "</tr>\n";
    echo "</table>\n";
    echo "<input type='hidden' name='id' value='".@$row->id."' />";
    echo "<input type='hidden' name='option' value='".$option."' />";
    echo "<input type='hidden' name='task' value=''/>";
    echo "</form>";
	}

	function editPic ($uid, $option, $thumbnailpath) {
	global $my, $database, $mosConfig_absolute_path, $ad_category, $dgurl, $mosConfig_live_site, $mosConfig_absolute_path, $ad_imgstyle, $mainframe;
    $mainframe->setPageTitle(_DG_NSDES);
    $mainframe->AppendPathway(_DG_NSDES);
	$row = new mosdatsogallery($database);
    $row->load($uid);
    if ($row->owner !== $my->username) {
	mosRedirect(sefRelToAbs("$dgurl&func=userpannel"), _DG_NOT_ALOWED_EDIT_PIC);
	die(); }
	$clist = ShowDropDownCategoryList($row->catid, "catid", ' size="1"');
    echo "<script language = \"javascript\" type = \"text/javascript\">\n";
	echo "function checkMe() {\n";
	echo "var form = document.adminForm;\n";
	echo "if (form.imgtitle.value == \"\") {\n";
	echo "alert('"._DG_PIC_MUST_HAVE_TITLE."');\n";
	echo "return false;\n";
	echo "} else if (form.catid.value == \"0\") {\n";
	echo "alert('"._DG_MUST_SELECT_CATEGORY."');\n";
	echo "return false;\n";
	echo "} else {\n";
	echo "form.submit();\n";
	echo "}\n";
	echo "}\n";
	echo "</script>\n";
    echo "<table width='100%' cellpadding='4' cellspacing='0' border='0'>\n";
    echo "<tr class = 'sectiontableheader'>\n";
    echo "<td>\n "._DG_NSDES." </td>\n";
    echo "</tr>\n";
    echo "</table>\n";
    echo "<table cellpadding='4' cellspacing='1' border='0' width='100%'>\n";
    echo "<form action ='".sefRelToAbs("$dgurl&func=savepic")."' method='post' name='adminForm' enctype='multipart/form-data' onsubmit='checkform();'>";
    echo "<input type = 'hidden' name = 'option' value = '".$option."'/>";
    echo "<tr class='sectiontableentry2'>\n";
    echo "<td width = '20%' align = 'right'>"._DG_TITLE.":</td>\n";
    echo "<td width = '80%'>";
    echo "<input class='inputbox' type='text' name='imgtitle' size='51' maxlength='100' value='".htmlspecialchars($row->imgtitle, ENT_QUOTES)."'/>";
    echo "</td>\n";
    echo "</tr>\n";
    echo "<tr class='sectiontableentry2'>\n";
    echo "<td valign='top' align='right'>"._DG_CATEGORY.":</td>\n";
    echo "<td>\n";
	echo $clist;
    echo "</td>\n";
    echo "</tr>\n";
    echo "<tr class='sectiontableentry2'>\n";
    echo "<td valign = 'top' align = 'right'>"._DG_DESCRIPTION.":</td>\n";
    echo "<td>\n";
    echo "<textarea class='inputbox' cols='47' rows='5' name='imgtext'>";
	echo htmlspecialchars($row->imgtext, ENT_QUOTES);
    echo "</textarea>";
    echo "</td>\n";
    echo "</tr>\n";
    echo "<tr class='sectiontableentry2'>\n";
    echo "<td valign = 'top' align = 'right'>"._DG_AUTHOR_OWNER.":</td>\n";
    echo "<td>\n";
    echo "<input class='inputbox' type='text' name='imgauthor' value='".$row->imgauthor."' size='51' maxlength='100' />";
    echo "</td>\n";
    echo "</tr>\n";
    echo "<tr class='sectiontableentry2'>\n";
    echo "<td valign = 'top' align = 'right'>"._DG_PICTURE.":</td>\n";
    echo "<td>\n<img src='".$thumbnailpath."/".$row->imgthumbname."' name='imagelib' style='".$ad_imgstyle."' title='"._DG_THUMB_PREVIEW."' alt='' /></td>\n";
    echo "</tr>\n";
    echo "<tr class='sectiontableentry2'>\n";
    echo "<td colspan='2' align='center'>";
    echo "<input type='button' value='"._DG_SAVE."' class='button' onclick='checkMe();' />";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='button' value='"._DG_CANCEL_TB."' class='button' onclick='javascript:history.go(-1);' />";
    echo "</td>\n";
    echo "</tr>\n";
    echo "</table>\n";
    echo "<input type='hidden' name='id' value='".$row->id."' />";
    echo "<input type='hidden' name='option' value='".$option."' />";
    echo "<input type='hidden' name='task' value='savepic' />";
    echo "</form>";
    }
    ?>
	<script language="javascript" type="text/javascript">
	<!--
	function showThumb(title, name) {
	html = '<div style="width:100%;text-align:center;vertical-align:middle;"><img style="border:1px solid #fff; margin:20px" src='+name+' name="imagelib" alt="No Pics" /></div>';
	return overlib(html, CAPTION, title)
	}
	-->
	</script>
    <?php
	function userPannel() {
    global $database, $my, $ad_approve, $dgurl, $mosConfig_live_site, $mosConfig_absolute_path, $ad_paththumbs, $mainframe, $ad_perpage;

    $limit = trim( mosGetParam( $_REQUEST, 'limit', 10 ) );
    $limitstart = trim( mosGetParam( $_REQUEST, 'limitstart', 0 ) );

    $database->setQuery("select count(*) from #__datsogallery where owner='$my->username' order by ordering desc");
	$count = $database->loadResult();
    require_once("includes/pageNavigation.php");
    $pageNav = new mosPageNav( $count, $limitstart, $limit );
    $mainframe->setPageTitle(_DG_USER_PANEL);
    $mainframe->AppendPathway(_DG_USER_PANEL);
    echo '<p />';
    echo "<table width='100%' border='0' cellspacing='1' cellpadding='4'>\n";
    echo "<tr>\n";
    echo "<td align='right'>\n";
    echo "<input type='button' name='Button' value='"._DG_NEW_PICTURE."'";
	echo "onclick = \"javascript:location.href='".sefRelToAbs("$dgurl&func=showupload")."';\"";
	echo "class='button'>";
    echo "</td>\n";
    echo "</tr>\n";
    echo "<tr class='sectiontableheader'>";
    echo "<td width='40%'>"._DG_PIC_NAME."</td>\n";
    echo "<td width='5%'>"._DG_HITS."</td>\n";
    echo "<td width='55%'>"._DG_CATEGORY."</td>\n";
    echo "<td colspan='2'>"._DG_ACTION."</td>\n";
    if ($ad_approve) {
    echo "<td>\n"._DG_APPROWED."</td>\n"; }
    echo "</tr>\n";

	$database->setQuery( "select * from #__datsogallery where owner='$my->username' order by id desc limit $limitstart, $limit" );
	$rows = $database->loadObjectList();
	$k = 0;
    if (count($rows)) {
    foreach ($rows as $row) {
	$k = 1 - $k;
    $kp = $k + 1;
    $imgprev = $mosConfig_live_site.$ad_paththumbs."/$row->imgthumbname";

    echo "<tr class = 'sectiontableentry".$kp."'>\n";
    echo "<td>\n<a href='".sefRelToAbs("$dgurl&func=editpic&uid=$row->id")."' \"javascript:void(0);\"
	onmouseover=\"showThumb('"._DG_EDIT." : ".$row->imgtitle."', '".$imgprev."')\" onmouseout=\"return nd();\">".$row->imgtitle."</a></td>\n";
    echo "<td>\n".$row->imgcounter."</td>\n";
    echo "<td>\n".ShowCategoryPath($row->catid)."</td>\n";
    echo "<td align='center' width='20'>";
    echo "<a href='".sefRelToAbs("$dgurl&func=editpic&uid=$row->id")."'>";
    echo "<img src='components/com_datsogallery/images/edit.png' width='16' height='16' border='0' title='"._DG_EDIT."'></a>";
    echo "</td>\n";
    echo "<td align='center' width'20'>";
    echo "<a href=\"javascript:if (confirm('"._DG_SURE_DELETE_SELECT_ITEM."')){ location.href='".sefRelToAbs("$dgurl&func=deletepic&uid=$row->id")."';}\" title='"._DG_DELETE."'>";
    echo "<img src='components/com_datsogallery/images/edit_trash.png' width='16' border='0'></a>\n";
    echo "</td>\n";

	if ($ad_approve) {
	if ($row->approved) {
	$a_pic = "tick.png";
	} else {
	$a_pic = "publish_x.png";
    }

    echo "<td align='center' width='20'><img src='components/com_datsogallery/images/$a_pic' border='0'></a></td>\n"; }
    echo "</tr>\n"; }
	} else {
    echo "<tr class = 'sectiontableentry'".$kp."''>";
    echo "<td width='15' align='center' valign='middle'>";
    echo "<div align='center'><img src='images/M_images/arrow.png' width='9' height='9'></div>";
    echo "</td>\n";
    echo "<td colspan='5'>"._DG_NOT_HAVE_PIC."</td>\n";
    echo "</tr>\n";
	}
    echo "</table>\n";
    echo "<br />";
    echo "<div align='center'>";
    echo $pageNav->writePagesLinks("$dgurl&func=userpannel");
    echo "<br />";
    echo $pageNav->writePagesCounter();
    echo "<br />";
    echo $pageNav->writeLimitBox ("$dgurl&func=userpannel");
    echo "</div>";
    }

	function savePic ($option) {
	global $database, $ad_approve, $dgurl, $my, $is_editor;
	$row = new mosdatsogallery($database);
    if (!$row->bind($_POST, "approved owner published orgimagename imgfilename imgthumbname")) {
	echo "<script> alert('" . $row->getError() . "'); window.history.go(-1); </script>\n";
	exit(); }
	$row->imgdate = mktime();
	$row->owner = $my->username;
	$row->published = 1;
    if ($ad_approve) {
	$row->approved = 0;
	} else {
	$row->approved = 1; }
    if ($row->owner == $is_editor){
    $row->approved = 1;
    }
    if (!$row->store()) {
	echo "<script> alert('" . $row->getError() . "'); window.history.go(-1); </script>\n";
	exit();
	}
    mosRedirect(sefRelToAbs("$dgurl&func=userpannel"), _DG_UIC_SUCCESS_IPDATED);
	}

	function deletePic ($uid, $option) {
	global $database, $my, $mosConfig_absolute_path, $ad_pathoriginals, $ad_pathimages, $ad_paththumbs, $dgurl;
    $database->setQuery("select owner from #__datsogallery where id=" . intval($uid));
	$own = $database->loadResult();
    if ($own !== $my->username) {
	mosRedirect(sefRelToAbs("$dgurl&func=userpannel"), _DG_NOT_ALOWED_DELETE_PIC);
	die();
	}
    if ($uid) {
	$row = new mosdatsogallery($database);
	$row->load($uid);
    if (unlink($mosConfig_absolute_path . $ad_pathoriginals . "/$row->imgoriginalname"))
    if (unlink($mosConfig_absolute_path . $ad_pathimages . "/$row->imgfilename"))
    if (unlink($mosConfig_absolute_path . $ad_paththumbs . "/$row->imgthumbname")) {
	$database->setQuery("delete from #__datsogallery_comments where cmtpic=$uid");
    if (!$database->query()) {
	echo "<script> alert('" . $database->getErrorMsg() . "'); window.history.go(-1); </script>\n";
	}
    $database->setQuery("delete from #__datsogallery where id=$uid");
    if (!$database->query()) {
	echo "<script> alert('" . $database->getErrorMsg() . "'); window.history.go(-1); </script>\n"; }
	} else {
	die(_DG_NOT_DELETE_THMB_IMAGE_FILE); }
	} else {
	die(_DG_FFFFFFF);
	}
    mosRedirect(sefRelToAbs("$dgurl&func=userpannel"), _DG_PIC_COMMENT_DELETED);
	}

	function ShowDropDownCategoryList ($cat, $cname = "cat", $extra = null, $flag = 0) {
	global $database, $ad_category, $gid, $dgurl;
	$arr_cat = explode(",", $ad_category);
	$category = "<select name=\"$cname\" class=\"inputbox\" $extra>";
    if ($flag == 1) {
	$add_category = true; }
    if (@$add_category) {
	$category .= "<option value=0></option>";
	} else {
	$category .= "<option value='0'></option>"; }
	$database->setQuery(" select * from #__datsogallery_catg where access<='".$gid."' order by name asc ");
    $result = $database->query();
	$num_rows = mysql_num_rows($result);
	$i = 0;
    while ($i < $num_rows) {
	$category_id = mysql_result($result, $i, 'cid');
	$category_name = mysql_result($result, $i, 'name');
    if (in_array($category_id, $arr_cat)) {
	@$category_list .= "<option value='$category_id' ";
    if ($category_id == $cat) {
	$category_list .= "selected"; }
    $category_list .= ">" . ShowCategoryPath($category_id) . "</option>\n"; }
    $i++;
	}
	$categories = explode("\n", $category_list);
	asort($categories);
	$category .= implode("\n", $categories);
    $category .= "</select>";
    return $category;
	}

    function dgCategories($catid, $Itemid){
    global $database, $my, $gid, $dgurl, $ad_imgstyle, $ad_ncsc, $thumbnailpath, $gallerypath, $ad_thumbwidth, $ad_thumbheight;
    $database->setQuery(" select d.* "
    . " from #__datsogallery_catg as d "
    . " where d.parent=$catid and d.published='1' and access<='".$my->gid."' "
    . " order by d.ordering desc ");
    $rows = $database->loadObjectList();
    $num_rows = count($rows);
    $index   = 0;
    if ($num_rows == 0){
    $output  = '<table cellspacing="1" cellpadding="4" border="0" width="100%"><tr><td></td></tr>';
    } else if ($ad_ncsc > $num_rows){
    $ad_ncsc = $num_rows;
    } else {
    $ad_ncsc = $ad_ncsc;
    }
    if($ad_ncsc == '1'){$cw = '100%';
    } else if ($ad_ncsc == '2') { $cw = '50%';
    } else if ($ad_ncsc == '3') { $cw = '34%';
    } else if ($ad_ncsc == '4') { $cw = '25%';
    } else if ($ad_ncsc == '5') { $cw = '20%';}
    $colspan = $ad_ncsc*2;
    $output  = '<table cellspacing="1" cellpadding="4" border="0" width="100%">';
    if (!$num_rows) {
    $output .= '<tr><td></td></tr>';
    } else if ($rows[0]->parent) {
    $output .= '<tr><td align="left" colspan="'.$colspan.'" class="sectiontableheader">'._DG_SUBCATEGORIES.'</td></tr>';
    } else {
    $output .= '<tr><td align="left" colspan="'.$colspan.'" class="sectiontableheader">'._DG_CATEGORIES.'</td></tr>';
    }
    for ( $row_count = 0; $row_count < ( $num_rows/$ad_ncsc ); $row_count++ ) {
    $output .= '<tr>';
    for ($i = 0; $i < $ad_ncsc; $i++) {
    $cur_name = @$rows[$index];
    $output .= '<td class="sectiontableentry2" align="left" valign="middle">';
    $output .= '<a href="' . sefRelToAbs("$dgurl&func=viewcategory&catid=$cur_name->cid") . '">';
    if (!$cur_name->cid){
    $output .= '</td><td class="sectiontableentry2">&nbsp;</td>';
    } else {
    $catid  = $cur_name->cid;
    $query = "select *, c.access from #__datsogallery as p "
    ." left join #__datsogallery_catg as c on c.cid=p.catid "
    ." where " . ( $catid ? " ( p.catid in (". $catid .") )" : '' )
    ." and p.published = '1' and p.approved='1' and c.access<='".$my->gid."' "
    . ( $catid ? " or ( c.parent in (". $catid .") )" : '' )
    ." and p.published = '1' and p.approved='1' and c.access<='".$my->gid."' "
    ." order by rand() limit 1";
    $database->setQuery($query);
    $rows2 = $database->loadObjectList();
    $row2 = &$rows2[0];
    $database->setQuery($query);
    $count = $database->loadResult();
    if ($count > 0) {
    $output .= '<img src="'.$thumbnailpath.$row2->imgthumbname.'" style="'.$ad_imgstyle.'" title="'. _DG_OPEN_CAT .'" alt="" ></a></td>';
    $output .= '<td class="sectiontableentry2" align="left" valign="top" width="'.$cw.'">';
    } else {
    $output .= '<img src="'.$gallerypath.'/images/blank.png" width="'.$ad_thumbwidth.'" height="'.$ad_thumbheight.'"  style="'.$ad_imgstyle.'" alt="" ></a></td>';
    $output .= '<td class="sectiontableentry2" align="left" valign="top" width="'.$cw.'">';}
    } if ($cur_name) {
    $output .= '<a href="' . sefRelToAbs("$dgurl&func=viewcategory&catid=$cur_name->cid") . '">';
    $output .= $cur_name->name . '</a><br />';
    $output .= '<font size="-7">(' . GetNumberOfLinks($cur_name->cid) . ')</font>';
    } else {
    $output .= '&nbsp;';
    }
    $output .= '<br />' . @$cur_name->description . '</td>';
    $index++;
    }
    $output .= '</tr>';
    }
    $output .= '</table>';
    return $output;
    }

	function ShowCategoryPathLink ($cat) {
	global $database, $mainframe, $mosConfig_absolute_path, $mosConfig_live_site, $gid, $dgurl, $gallerypath, $ad_pathway;
    $home    = "<img src='$gallerypath/images/home.gif' hspace='6' border='0' align='left' alt='' /> ". _DG_HOME."</a>";
    $arrow   = 'templates/' . $mainframe->getTemplate() . '/images/arrow.png';
    if (file_exists( "$mosConfig_absolute_path/$arrow" )) {
    $picarrow = '<img src="' . $mosConfig_live_site . '/' . $arrow . '" hspace="4" alt="" />';
    } else { $arrow = '/images/M_images/arrow.png';
    if (file_exists( $mosConfig_absolute_path . $arrow )) {
    $picarrow = '<img src="' . $mosConfig_live_site . '/images/M_images/arrow.png" hspace="4" alt="" />';
    } else { $picarrow = '&raquo;'; }
    }
	$cat = intval($cat);
	$parent = 1000;
	while ($parent) {
    $database->setQuery(" select * from #__datsogallery_catg where cid=$cat and published=1 and access<='".$gid."' ");
    $rows    = $database->loadObjectList();
	$row     = &$rows[0];
   	$name    = $row->name;
	$parent  = $row->parent;
	$cid     = $row->cid;
	$name    = "<a href='" . sefRelToAbs("$dgurl&func=viewcategory&catid=$cat") . "'>".$name."</a>";
    if (empty($path)) {
    $path    = $name;
    } else {
    $path    = $name . $picarrow . $path;
    }
    $cat     = $parent;
    }
    if(!$ad_pathway){
    $pathName = $home . $picarrow . $path;
    }else{
    $pathName = $mainframe->AppendPathway($path);
    }
    return $pathName;
    }

	function GetNumberOfLinks ($cat){
	global $database, $gid, $dgurl;
	$queue[] = intval($cat);
	while (list($key, $cat) = each($queue)) {
	$database->setQuery("select cid from #__datsogallery_catg where parent=$cat and published=1");
	$result = $database->query();
	$total = mysql_num_rows($result);
	$j = 0;

	while ($j < $total) {
	$val = mysql_fetch_row($result);
	$queue[] = $val[0];
	$j++;
	}
	}
    reset($queue);
	$query = "select count(*) from #__datsogallery  where ( 0!=0";
	while (list($key, $cat) = each($queue)) {
	$query .= " or catid = $cat";
	}
	$query = $query . " ) and published=1 and approved = 1";

	$database->setQuery($query);
    $result = $database->query();
	$val = mysql_fetch_row($result);
    if ($val[0] == 1){ $capics = _DG_COUNT_PIC_ONE;
    } else if ($val[0] > 1 && ($val[0] < 5)){ $capics = _DG_COUNT_PIC_TWO_TO_FOUR;
    } else if ($val[0] > 4){ $capics = _DG_COUNT_PIC_MORE_THAN_FOUR;}
	return $val[0]. ' ' . $capics;
	}

	function ShowCategoryPath ($cat){
	global $database, $mosConfig_lang, $gid, $dgurl;
	$cat = intval($cat);
	$parent = 1000;
    while ($parent) {
	$database->setQuery( "select * from #__datsogallery_catg where cid=$cat and access<='".$gid."' ");
    $rows    = $database->loadObjectList();
	$row     = &$rows[0];
	$parent  = $row->parent;
	$name    = $row->name;
    if (empty($path)) {
	$path = $name;
	} else {
	$path = $name . ' &raquo; ' . $path;
	}
	$cat = $parent;
	}
    return $path . " ";
	}
?>