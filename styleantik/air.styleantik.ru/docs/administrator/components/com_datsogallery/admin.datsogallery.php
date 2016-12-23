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
	$dgver = "1.3.9.1";
	error_reporting(E_ALL ^ E_NOTICE);
    require_once($mosConfig_absolute_path."/administrator/components/com_datsogallery/class.datsogallery.php");
    require_once($mosConfig_absolute_path."/administrator/components/com_datsogallery/globals.datsogallery.php");
    require_once($mosConfig_absolute_path."/administrator/components/com_datsogallery/images.datsogallery.php");
    require_once($mosConfig_absolute_path."/administrator/components/com_datsogallery/globals.datsogallery.php");
	require_once( $mainframe->getPath( 'admin_html' ) );
	if (file_exists($mosConfig_absolute_path . '/components/com_datsogallery/language/' . $mosConfig_lang . '.php')) {
	include($mosConfig_absolute_path . '/components/com_datsogallery/language/' . $mosConfig_lang . '.php');
	} else {
	include($mosConfig_absolute_path . '/components/com_datsogallery/language/english.php');
	}
    mosCommonHTML::loadOverlib();
    switch ($act) {
	case "showcatg":
	$task = "showcatg";
	break;
	case "comments":
	$task = "comments";
	break;
	case "upload":
	$task = "upload";
	break;
	case "batchupload":
	$task = "batchupload";
	break;
	case "batchimport":
	$task = "batchimport";
	break;
	case "settings":
	$task = "settings";
	break;
	case "resetvotes":
	$task = "resetvotes";
	break;
    case "rebuild":
	$task = "rebuild";
    break;
	}
	switch ($task) {
	case "publish":
	publishPicture( $id, 1, $option );
	break;
	case "unpublish":
	publishPicture( $id, 0, $option );
	break;
	case "new":
	editPicture( $option, 0 );
	break;
	case "edit":
	editPicture( $option, $id[0] );
	break;
	case "remove":
	removePicture( $id, $option );
	break;
	case "save":
	savePicture( $option );
	break;
	case "categories":
	mosRedirect( "index2.php?option=categories&section=com_datsogallery" );
	break;
	case "comments":
	showComments( $option );
	break;
	case "publishcmt":
	publishComment( $id, 1, $option );
	break;
	case "unpublishcmt":
	publishComment( $id, 0, $option );
	break;
	case "removecmt":
	removeComment( $id, $option );
	break;
	case "upload":
	showUpload( $option, @$batchul );
	break;
	case "batchupload":
	showBatchUpload( $option );
	break;
	case "batchimport":
	showBatchImport( $option );
	break;
	case "resetvotes":
	resetVotes( $option );
	break;
    case "rebuild":
    showDGrebuild( $option );
	break;
    case "startdgrebuild":
    startDGrebuild( $option );
	break;
    case 'savelaguage':
	saveLanguage( $option );
	break;
	case "uploadhandler":
	require_once($mosConfig_absolute_path."/administrator/components/com_datsogallery/config.datsogallery.php");
	echo "<p />";
	if (preg_match('/[^A-Za-z0-9._-]/', $org_screenshot_name) ) {
	echo "<script> alert('" . _DG_FILENAME_CAR_ERR . "'); window.history.go(-1);</script>\n";
	exit;
	mosRedirect("index2.php?option=com_datsogallery&act=upload");
	}
	if ( $org_screenshot )
	copy($org_screenshot, $mosConfig_absolute_path.$ad_pathoriginals."/$org_screenshot_name");
	if ( strlen( $org_screenshot ) > 0 and $org_screenshot != "none" ){
	$img_info = getimagesize( $org_screenshot );
	if ( $img_info[0] > $ad_maxwidth or $img_info[1] > $ad_maxheight ){
	resize_image( $org_screenshot,$mosConfig_absolute_path . $ad_pathimages . "/med_$org_screenshot_name","$ad_maxwidth","$ad_thumbcreation","$ad_thumbquality" );
	} else {
	copy( $org_screenshot, $mosConfig_absolute_path . $ad_pathimages . "/med_$org_screenshot_name" );
	}
	}
	if ($thumbcreation)
    if ($ad_crsc == "crop") {
    thumb($org_screenshot, $mosConfig_absolute_path . $ad_paththumbs . "/tn_$org_screenshot_name", $ad_thumbwidth, $ad_thumbheight, $ad_thumbquality);
    } else {
    resize_image( $org_screenshot,$mosConfig_absolute_path . $ad_paththumbs . "/th_$org_screenshot_name","$ad_thumbwidth","$ad_thumbcreation","$ad_thumbquality" );
    }
	mosRedirect( "index2.php?option=com_datsogallery&act=upload&batchul=1" );
	break;
	case "batchuploadhandler":
	$temp_dir = "media";
	require_once($mosConfig_absolute_path."/administrator/components/com_datsogallery/config.datsogallery.php");
	require_once($mosConfig_absolute_path."/administrator/includes/pcl/pclzip.lib.php");
    $zipfile = new PclZip( $_FILES['zippack']['tmp_name'] );
    $ziplist = $zipfile->listContent();
    $zipfile->extract($p_path = $mosConfig_absolute_path . '/' . $temp_dir);
	echo "<p />";
    for ($i=0; $i<sizeof($ziplist); $i++) {
	$origfilename = $ziplist[$i]['filename'];
	$fileextension = strtolower(substr(strrchr($origfilename,'.'),1));
    $compacttitle = strtolower(str_replace( ' ', '', $gentitle ));
	$newfilename = $compacttitle . $i . '_' . date(Ymd) . '_' . mt_rand(1000000000, 2099999999) . '.' . $fileextension;
	echo _DG_FN . " : $origfilename <br />";
	echo _DG_NEW_FILENAME . " : $newfilename <br />";
	copy($mosConfig_absolute_path."/$temp_dir/$origfilename", $mosConfig_absolute_path.$ad_pathoriginals."/$newfilename");
	resize_image($mosConfig_absolute_path."/$temp_dir/$origfilename", $mosConfig_absolute_path.$ad_pathimages."/$newfilename", "$ad_maxwidth", "$ad_thumbcreation", "$ad_thumbquality");
    if ($ad_crsc == "crop") {
    thumb($mosConfig_absolute_path."/$temp_dir/$origfilename", $mosConfig_absolute_path.$ad_paththumbs."/$newfilename", $ad_thumbwidth, $ad_thumbheight, $ad_thumbquality);
    } else {
    resize_image($mosConfig_absolute_path."/$temp_dir/$origfilename", $mosConfig_absolute_path.$ad_paththumbs."/$newfilename", "$ad_thumbwidth", "$ad_thumbcreation", "$ad_thumbquality");
    }
	unlink($p_path=$mosConfig_absolute_path."/$temp_dir/$origfilename");
	global $database;
    $batchtime = mktime();
    $database->setQuery( "select ordering from #__datsogallery where catid=$catid order by ordering desc limit 1" );
    $ordering1 = $database->loadResult();
    $ordering = $ordering1+1;
	$database->setQuery( "insert into #__datsogallery(id,catid,imgtitle,imgauthor,imgtext,imgdate,imgcounter,ordering,imgvotes,imgvotesum,published,imgfilename,imgthumbname,imgoriginalname,checked_out,owner,approved) VALUES (NULL,'$catid','$gentitle $i','$photocred','$gendesc','$batchtime','0','$ordering','0','0','1','$newfilename','$newfilename','$newfilename','0','$my->username',1)" );
	if (!$database->query()) {
	echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
	exit();
	}
	}
	mosRedirect( "index2.php?option=com_datsogallery&act=pictures" );
	break;
	case "batchimporthandler":
	$dir = $mosConfig_absolute_path.'/zipimport';
	$filelist=array();
	require_once($mosConfig_absolute_path."/administrator/components/com_datsogallery/config.datsogallery.php");
	require_once($mosConfig_absolute_path."/administrator/includes/pcl/pclzip.lib.php");
	if (class_exists("PclZip")) {
	$directory_zip = opendir($dir);
	while ($file_name = readdir($directory_zip)) {
	$ext = strtolower(substr($file_name,-4));
	if ($ext == ".zip") {
	$archive = new PclZip($dir . "/$file_name");
	if (@$archive -> extract(PCLZIP_OPT_PATH, $dir) == TRUE) {
	unlink($dir . "/$file_name");
	}
	}
	}
	closedir($directory_zip);
	}
	$compacttitle = strtolower(str_replace( ' ', '', $gentitle ));
	if($directory_zip=opendir($dir)) {
	$i=0;
	while($file=readdir($directory_zip)) {
	if($file != "." && $file != ".." && (strcasecmp($file, "index.html")!=0)) {
	$i++;
	$origfilename = $file;
	$fileextension = strtolower(substr(strrchr($origfilename,'.'),1));
	$newfilename = $compacttitle . $i . '_' . date(Ymd) . '_' . mt_rand(1000000000, 2099999999) . '.' . $fileextension;
	echo _DG_FN . " : $origfilename <br />";
	echo _DG_NEW_FILENAME . " : $newfilename <br />";
	copy($mosConfig_absolute_path."/zipimport/$origfilename", $mosConfig_absolute_path.$ad_pathoriginals."/$newfilename");
	resize_image($mosConfig_absolute_path."/zipimport/$origfilename", $mosConfig_absolute_path.$ad_pathimages."/$newfilename", "$ad_maxwidth", "$ad_thumbcreation", "$ad_thumbquality");
    if ($ad_crsc == "crop") {
    thumb($mosConfig_absolute_path."/zipimport/$origfilename", $mosConfig_absolute_path.$ad_paththumbs."/$newfilename", $ad_thumbwidth, $ad_thumbheight, $ad_thumbquality);
    } else {
    resize_image($mosConfig_absolute_path."/zipimport/$origfilename", $mosConfig_absolute_path.$ad_paththumbs."/$newfilename", "$ad_thumbwidth", "$ad_thumbcreation", "$ad_thumbquality");
    }
	unlink ($dir . "/$origfilename");
	global $database;
	$batchtime = mktime();
    $database->setQuery( "select ordering from #__datsogallery where catid=$catid order by ordering desc limit 1" );
    $ordering1 = $database->loadResult();
    $ordering = $ordering1+1;
	$database->setQuery( "insert into #__datsogallery(id,catid,imgtitle,imgauthor,imgtext,imgdate,imgcounter,ordering,imgvotes,imgvotesum,published,imgfilename,imgthumbname,imgoriginalname,checked_out,owner,approved) VALUES (NULL,'$catid','$gentitle $i','$photocred','$gendesc','$batchtime','0','$ordering','0','0','1','$newfilename','$newfilename','$newfilename','0','$my->username',1)" );
	if (!$database->query()) {
	echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
	exit();
	}
	}
	}
	}
	closedir($directory_zip);
	mosRedirect( "index2.php?option=com_datsogallery&act=pictures" );
	break;
	case "settings":
	showConfig($option);
	break;
	case "savesettings":
	saveConfig($option,$ad_pathimages,$ad_paththumbs,$ad_pathoriginals,$ad_thumbcreation,$ad_thumbwidth,$ad_thumbheight,
    $ad_thumbquality,$ad_showdetail,$ad_showrating,$ad_showcomment,$ad_comtitle,$ad_showpanel,$ad_userpannel,$ad_special,$ad_crsc,
    $ad_rating,$ad_lastadd,$ad_lastcomment,$ad_search,$ad_showtip,$ad_showsend2friend,$ad_picincat,$ad_showwatermark,
    $ad_showdownload,$ad_downpub,$ad_anoncomment,$ad_perpage,$ad_sortby,$ad_maxvoting,$ad_toplist,$ad_slideshow,$ad_lightbox_fa,
    $ad_bbcodesupport,$ad_approve,$ad_pathway,$ad_powered,$ad_maxuserimage,$ad_maxfilesize,$ad_maxwidth,$ad_maxheight,
    $ad_category,$ad_imgstyle,$ad_ncsc,$ad_cr,$ad_showimgtext,$ad_showfimgdate,$ad_showimgcounter,$ad_showfrating,$ad_showres,
    $ad_showfimgsize,$ad_showimgauthor,$ad_cp,$ad_security,$ad_lightbox,$ad_name_or_user);
	break;
	case "newcatg":
	editCatg( 0, $option);
	break;
	case "editcatg":
	editCatg( $cid[0], $option );
	break;
	case "showcatg":
	viewCatg( $option );
	break;
	case "savecatg":
	saveCatg( $option , $task);
	break;
	case "removecatg":
	removeCatg( $cid, $option );
	break;
	case "publishcatg":
	publishCatg( $cid, 1, $option );
	break;
	case "unpublishcatg":
	publishCatg( $cid, 0, $option );
	break;
	case "approvepic":
	approvePicture($id, 1, $option );
	break;
	case "rejectpic":
	approvePicture( $id, 0, $option );
	break;
    case "orderup":
    orderPic( $id[0], 1, $option );
    break;
    case "orderdown":
    orderPic( $id[0], -1, $option );
    break;
    case "saveorder":
    saveOrder( $id );
    break;
	case "cancelcatg":
	cancelCatg( $option );
	break;
	case "orderupcatg":
	orderCatg( $cid[0], -1, $option );
	break;
	case "orderdowncatg":
	orderCatg( $cid[0], 1, $option );
	break;
    case "cancel":
	mosRedirect("index2.php?option=$option" );
	break;
	default:
	showPictures( $option );
	break;
	}

	function showPictures( $option ) {
    global $database, $mainframe, $group;
    $catid      = $mainframe->getUserStateFromRequest("catid{$option}", 'catid', 0);
    $search     = $mainframe->getUserStateFromRequest("search{$option}", 'search', '');
    $search     = $database->getEscaped(trim(strtolower($search)));
    $sort       = $mainframe->getUserStateFromRequest("sort{$option}",'sort', 0);
    $sorder     = $mainframe->getUserStateFromRequest("sorder{$option}",'sorder', 0);
    $limit      = $mainframe->getUserStateFromRequest('viewlistlimit', 'limit', 10);
    $limitstart = $mainframe->getUserStateFromRequest("view{$option}limitstart", 'limitstart', 0);

    $where = array();
    if ($catid > 0) { $where[] = "catid='$catid'"; }
    if ($sort == 1) { $where[] = "approved = 0"; }
    if ($sort == 2) { $where[] = "approved = 1"; }
    if ($sort == 3) { $where[] = "useruploaded = 1"; }
    if ($sort == 4) { $where[] = "useruploaded = 0"; }
    if ($sorder == 0) { $sortorder = "a.catid asc, a.ordering desc, imgdate desc, imgtitle asc"; }
    if ($sorder == 1) { $sortorder = "a.catid asc, a.ordering asc, imgdate desc, imgtitle asc"; }

    if ($search) {
    $where[] = "lower(imgtitle) like '%$search%' or lower(imgtext) like '%$search%'";
    $group = "group by id";
    }

    $database->setQuery( "select count(*) from #__datsogallery as a " . (count($where) ? ' where ' . implode(' and ', $where) : ''));
    $total = $database->loadResult();
    echo $database->getErrorMsg();
    if ($limit > $total) { $limitstart = 0;
    }

    $where[] = 'a.catid = cc.cid';
    $picincat = count($where) ? ' where ' . implode(' and ', $where) : '';
    $database->setQuery( "select a.*, cc.name as category "
    . "from #__datsogallery as a, #__datsogallery_catg "
    . "as cc $picincat $group "
    . "order by $sortorder limit $limitstart, $limit" );
    $rows = $database->loadObjectList();
    if ($database->getErrorNum()) {
    echo $database->stderr();
    return false;
    }

    $clist = ShowDropDownCategoryList($catid, 'catid', 'class="inputbox" size="1" onchange="document.adminForm.submit();"');

    $s_options[] = mosHTML::makeOption(_DG_SHOW_ALL_PICT, 0);
    $s_options[] = mosHTML::makeOption("1",_DG_NOT_APPROVED);
    $s_options[] = mosHTML::makeOption("2",_DG_APPROVED);
    $s_options[] = mosHTML::makeOption("3",_DG_USER_UPLOAD_PIC);
    $s_options[] = mosHTML::makeOption("4",_DG_ADMIN_UPLOAD_PIC);
    $slist = mosHTML::selectList($s_options, 'sort', 'class="inputbox" size="1" onchange="document.adminForm.submit();"','value', 'text', $sort);

    include_once("includes/pageNavigation.php");
    $pageNav = new mosPageNav( $total, $limitstart, $limit  );
    HTML_datsogallery::showPictures($option, $rows, $clist, $slist, $search, $pageNav);
    }

    function orderPic( $uid, $inc, $option ) {
    global $database;

    $database->setQuery( "select catid from #__datsogallery where id=$uid");
    $piccatid = $database->loadResult();

    $database->setQuery( "select ordering, id from #__datsogallery where id=$uid");
    $result = $database->query();
    $id1 = mysql_result($result, 0, 'id');
    $ordering1 = mysql_result($result, 0, 'ordering');

    if ($inc==1) {
    $database->setQuery( "select ordering, id from #__datsogallery where catid=$piccatid and ordering > $ordering1 order by ordering limit 1");
    } else {
    $database->setQuery( "select ordering, id from #__datsogallery where catid=$piccatid and ordering < $ordering1 order by ordering desc limit 1");
    }
    $result = $database->query();

    $ordering2 = mysql_result($result, 0, 'ordering');
    $id2 = mysql_result($result, 0, 'id');

    $database->setQuery( "update #__datsogallery set ordering=$ordering1 where id=$id2");
    $result = $database->query();
    $database->setQuery( "update #__datsogallery set ordering=$ordering2 where id=$id1");
    $result = $database->query();

    mosRedirect('index2.php?option=com_datsogallery' );
    }

    function saveOrder( &$cid ) {
    global $database;
    $total  = count( $cid );
    $order  = josGetArrayInts( 'order' );

    for( $i=0; $i < $total; $i++ ) {
    $query = "update #__datsogallery set ordering = ".(int)$order[$i]." where id = ".(int)$cid[$i];
	$database->setQuery( $query );
    if (!$database->query()) {
    echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
    exit();
    }

    $row = new mosdatsogallery($database);
    $row->load($cid[$i]);
    $row->updateOrder(' ');
    }
    mosRedirect('index2.php?option=com_datsogallery', _DG_ORDERING_OK);
    }


    function removePicture( $cid, $option ) {
	global $database, $mosConfig_absolute_path, $ad_pathimages, $ad_paththumbs, $ad_pathoriginals;
	require_once($mosConfig_absolute_path."/administrator/components/com_datsogallery/config.datsogallery.php");
	if (!is_array( $cid ) || count( $cid ) < 1) {
	echo "<script> alert('" . _DG_SELECT_ITEM_TO_DELETE . "'); window.history.go(-1);</script>\n";
	exit;
	}
	
	if (count( $cid )) {
	for ($i = 0; $i < count($cid); $i++) {

	$database->setQuery( "select id, imgfilename, imgthumbname, imgoriginalname from #__datsogallery where id = $cid[$i]" );
	if ($database->query()) {
	$rows = $database->loadObjectList();
	$row = $rows[0];
	if (removeFile($row->imgfilename, $mosConfig_absolute_path . $ad_pathimages)) {
	if (removeFile($row->imgthumbname, $mosConfig_absolute_path . $ad_paththumbs)) {
	if (!removeFile($row->imgoriginalname, $mosConfig_absolute_path . $ad_pathoriginals)) {
	die(_DG_FFFFFFF);
	}
	} else {
	die(_DG_NOT_DELETE_THMB_IMAGE_FILE);
	}
	} else {
	die(_DG_FFFFFFF);
	}
	} else {
	echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
	}
	}
	if (count( $cid )) {
	$cids = implode( ',', $cid );
	$database->setQuery( "DELETE from #__datsogallery where id IN ($cids)" );
	if (!$database->query()) {
	echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
	}
	$database->setQuery( "DELETE from #__datsogallery_comments where cmtpic IN ($cids)" );
	if (!$database->query()) {
	echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
	}
	}
	}
	mosRedirect( "index2.php?option=$option" );
	}
	function publishPicture( $cid=null, $publish=1,  $option ) {
	global $database;
	if (!is_array( $cid ) || count( $cid ) < 1) {
	$action = $publish ? 'publish' : 'unpublish';
	echo "<script> alert('" . _DG_SELECT_AN_ITEM . " $action'); window.history.go(-1);</script>\n";
	exit;
	}
	$cids = implode( ',', $cid );
	$database->setQuery( "update #__datsogallery set published='$publish' where id IN ($cids)" );
	if (!$database->query()) {
	echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
	exit();
	}
	mosRedirect( "index2.php?option=$option" );
	}
	function approvePicture( $cid=null, $approve=1,  $option ) {
	global $database;
	if (!is_array( $cid ) || count( $cid ) < 1) {
	$action = $approve ? 'approve' : 'reject';
	echo "<script> alert('" . _DG_SELECT_AN_ITEM . " $action'); window.history.go(-1);</script>\n";
	exit;
	}
	$cids = implode( ',', $cid );
	$database->setQuery( "update #__datsogallery set approved='$approve' where id IN ($cids)" );
	if (!$database->query()) {
	echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
	exit();
	}
	mosRedirect( "index2.php?option=$option" );
	}
	function editPicture( $option, $uid ) {
	global $database, $mosConfig_absolute_path, $ad_thumbwidth, $ad_thumbheight, $ad_imgstyle;
	require_once($mosConfig_absolute_path."/administrator/components/com_datsogallery/config.datsogallery.php");
	$row = new mosdatsogallery( $database );
	$row->load( $uid );
	$clist = ShowDropDownCategoryList( $row->catid ,"catid",' size="1"');
	$imgFiles = mosReadDirectory( "$mosConfig_absolute_path$ad_pathimages" );
	$images = array( mosHTML::makeOption( '', _DG_SELECT_MED_PIC) );
	foreach ($imgFiles as $file) {
	if (eregi( "jpeg|gif|jpg|png", $file )) {
	$images[] = mosHTML::makeOption( $file );
	}
	}
	$imagelist = mosHTML::selectList( $images, 'imgfilename', "class=\"inputbox\" size=\"1\""
	. " onchange=\"javascript:if (document.forms[0].imgfilename.options[selectedIndex].value!='') {document.imagelib3.src='..$ad_pathimages/' + document.forms[0].imgfilename.options[selectedIndex].value} else {document.imagelib3.src='../images/M_images/blank.png'}\"",
	'value', 'text', $row->imgfilename );
	$thuFiles = mosReadDirectory( "$mosConfig_absolute_path$ad_paththumbs" );
	$thumbs = array( mosHTML::makeOption( '', _DG_SELECT_THUMB_PIC) );
	foreach ($thuFiles as $tfile) {
	if (eregi( "jpeg|gif|jpg|png", $tfile )) {
	$thumbs[] = mosHTML::makeOption( $tfile );
	}
	}
	$thumblist = mosHTML::selectList( $thumbs, 'imgthumbname', "class=\"inputbox\" size=\"1\""
	. " onchange=\"javascript:if (document.forms[0].imgthumbname.options[selectedIndex].value!='') {document.imagelib2.src='..$ad_paththumbs/' + document.forms[0].imgthumbname.options[selectedIndex].value} else {document.imagelib2.src='../images/M_images/blank.png'}\"",
	'value', 'text', $row->imgthumbname );
	$orgFiles = mosReadDirectory( "$mosConfig_absolute_path$ad_pathoriginals" );
	$originals = array( mosHTML::makeOption( '', _DG_SELECT_ORG_PIC) );
	foreach ($orgFiles as $ofile) {
	if (eregi( "jpeg|gif|jpg|png", $ofile )) {
	$originals[] = mosHTML::makeOption( $ofile );
	}
	}
	$originallist = mosHTML::selectList( $originals, 'imgoriginalname', "class=\"inputbox\" size=\"1\""
	. " onchange=\"javascript:if (document.forms[0].imgoriginalname.options[selectedIndex].value!='') {document.imagelib.src='..$ad_pathoriginals/' + document.forms[0].imgoriginalname.options[selectedIndex].value} else {document.imagelib.src='../images/M_images/blank.png'}\"",
	'value', 'text', $row->imgoriginalname );
	if (!$uid) $row->published = 0;
	HTML_datsogallery::editPicture( $option, $row, $clist, $originallist, $imagelist, $thumblist, $ad_pathoriginals, $ad_pathimages, $ad_paththumbs, $ad_thumbwidth, $ad_thumbheight, $ad_imgstyle );
	}
	function savePicture( $option ) {
	global $database,$catid;
	$row = new mosdatsogallery( $database );
	if (!$row->bind( $_POST )) {
	echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
	exit();
	}
	$row->imgdate = mktime();
    $database->setQuery( "select ordering from #__datsogallery where catid=$catid order by ordering desc limit 1" );
    $ordering1 = $database->loadResult();
    $row->ordering = $ordering1+1;
	if (!$row->store()) {
	echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
	exit();
	}
	mosRedirect( "index2.php?option=$option" );
	}

	function showUpload( $option, $batchul) {
	global $my;
    echo "<table class=\"adminheading\">\n";
    echo "<tr>\n";
    echo "<th class='mediamanager'>"._DG_NORMAL_UPLOAD_TITLE."</th>\n";
    echo "</tr>\n";
    echo "</table>";
	echo "<form action='index2.php?task=uploadhandler' method='post' name='adminForm' enctype='multipart/form-data' onSubmit=\"return FormCheck(this)\">";
	echo "<table width='100%' border='0' cellpadding='4' cellspacing='2' class='adminform'>";
	echo "<tr align='center' valign='middle'><td align='center' valign='top'>";
	if ($batchul) echo _DG_UPLOAD_COMP_CHOOSE_NEXT . ":<p />";
	echo "<input type='hidden' name='option' value='$option' />";
	echo "<input type='hidden' name='approved' value='1' />";
	echo "<input type='hidden' name='owner' value='$my->username' />";
	echo "<input type='file' name='org_screenshot' /><br />";
	echo "<input type='hidden' name='screenshot' value='ON' checked />";
	echo "<input type='hidden' name='thumbcreation' value='ON' checked /><br />";
	echo "<input type='submit' value='" . _DG_UPLOAD . "' />";
	echo "</td></tr></table></form>";
	}

	function showBatchUpload( $option ) {
    echo "<script language=\"Javascript\">\n";
    echo "<!--\n";
    echo "\n";
    echo "function BatchFormCheck(theForm) {\n";
    echo "\n";
    echo "if (theForm.catid.value == '0') {\n";
    echo "alert('" . _DG_ONE_ERR . "\\n');\n";
    echo "return false;\n";
    echo "}\n";
    echo "\n";
    echo "if (theForm.gentitle.value ==\"\" || theForm.gentitle.value == null) {\n";
    echo "alert('" . _DG_TWO_ERR . "');\n";
    echo "document.adminForm.gentitle.focus();\n";
    echo "return false;\n";
    echo "}\n";
    echo "\n";
    echo "if (theForm.gentitle.value.match (/[^ a-zA-Z0-9\\-]/)) {\n";
    echo "alert('" . _DG_THREE_ERR . "');\n";
    echo "return false;\n";
    echo "}\n";
    echo "\n";
    echo "}\n";
    echo "-->\n";
    echo "</script>";
    echo "<table class=\"adminheading\">\n";
    echo "<tr>\n";
    echo "<th class='mediamanager'>"._DG_BATCH_UPLOAD_TITLE."</th>\n";
    echo "</tr>\n";
    echo "</table>";
	echo "<table cellpadding='4' cellspacing='0' border='0' width='100%'><tr><td width='100%' class='sectionname'></td></tr></table>";
	echo "<form action='index2.php?task=batchuploadhandler' method='post' name='adminForm' enctype='multipart/form-data' onSubmit=\"return BatchFormCheck(this)\">";
	echo "<table width='100%' border='0' cellpadding='4' cellspacing='2' class='adminform'>";
	echo "<tr align='center' valign='middle'><td align='center' valign='top'>";
	echo "<input type='hidden' name='option' value='$option' />";
	echo "<table border='0'>";
	echo "<tr>";
	echo "<td align='right'><b>" . _DG_IMAGE_PACK_FIL . "</b></td>";
    echo "<td><input type='file' name='zippack' accept='application/zip, application/x-zip-compressed'></td>";
	echo "</tr><tr>";
	echo "<td align='right'><b>" . _DG_CAT_PHOTO_ASS . "</b></td><td>";
	
	global $database, $mainframe;
	$catid = $mainframe->getUserStateFromRequest( "catid{$option}", 'catid', 0 );
    $categories[] = mosHTML::makeOption( '0', _DG_SELECT_CAT );
	$database->setQuery( "select id as value, title as text from #__categories"
	. " where section='com_datsogallery' order by ordering" );
	$categories = array_merge( $categories, $database->loadObjectList() );
    $clist = mosHTML::selectList( $categories, 'catid', 'class="inputbox" size="1" style="width:228;"','value', 'text', $catid );
	$clist = ShowDropDownCategoryList(0,'catid',' class="inputbox" size="1" style="width:228;"');

    echo $clist;

	echo "</td>";
	echo "</tr><tr>";
	echo "<td align='right'><b>" . _DG_GENERIC_TITLE . " " . _DG_AZ09 . "</b></td><td><input type=\"text\" name=\"gentitle\" size=\"34\" maxlength=\"256\"></td>";
	echo "</tr><tr>";
	echo "<td align='right'><b>" . _DG_GENERIC_DESC . ' ' . _DG_OPT. "</b></td><td><input type=\"text\" name=\"gendesc\" size=\"34\" maxlength=\"1000\"></td>";
	echo "</tr><tr>";
	echo "<td align='right'><b>" . _DG_AUTHOR . ' ' . _DG_OPT . "</b></td><td><input type=\"text\" name=\"photocred\" size=\"34\" maxlength=\"256\"></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td colspan='2' align='center'><br><input type='submit' value='" . _DG_UPLOAD . "' class='button' /></td></form>";
	echo "</tr>";
	echo "</table>";
	echo "</td></tr></table>";
	}

	function showBatchImport( $option ) {
	echo "<SCRIPT language=\"Javascript\">\n";
	echo "<!--\n";
	echo "\n";
	echo "function BatchFormCheck(theForm) {\n";
	echo "\n";
	echo "      if (theForm.catid.value == '0') {\n";
	echo "        alert('" . _DG_ONE_ERR . "\\n');\n";
	echo "        return false;\n";
	echo "          }\n";
	echo "\n";
	echo "       if (theForm.gentitle.value ==\"\" || theForm.gentitle.value == null) {\n";
	echo "      alert('" . _DG_TWO_ERR . "');\n";
	echo "      document.adminForm.gentitle.focus();\n";
	echo "        return false;\n";
	echo "      }\n";
	echo "\n";
	echo "      if (theForm.gentitle.value.match (/[^ a-zA-Z0-9\\-]/)) {\n";
	echo "       alert('" . _DG_THREE_ERR . "');\n";
	echo "         return false;\n";
	echo "      }\n";
	echo "\n";
	echo "}\n";
	echo "-->\n";
	echo "</SCRIPT>";
    echo "<table class=\"adminheading\">\n";
    echo "<tr>\n";
    echo "<th class='mediamanager'>"._DG_BATCH_IMPORT_TITLE."</th>\n";
    echo "</tr>\n";
    echo "</table>";
	echo "<form action='index2.php?task=batchimporthandler' method='post' name='adminForm' enctype='multipart/form-data' onSubmit=\"return BatchFormCheck(this)\">";
	echo "<table width='100%' border='0' cellpadding='4' cellspacing='2' class='adminform'>";
	echo "<tr align='center' valign='middle'><td align='center' valign='top'>";
	echo "<input type='hidden' name='option' value='$option' />";
	echo "<table border='0'>";
	echo "<tr><td align='right'><b>" . _DG_CAT_PHOTO_ASS . ":</b></td><td>";

	global $database, $mainframe;
	$catid = $mainframe->getUserStateFromRequest( "catid{$option}", 'catid', 0 );

	$categories[] = mosHTML::makeOption( '0', _DG_SELECT_CAT );
	$database->setQuery( "select id AS value, title AS text from #__categories"
	. "\nwhere section='com_datsogallery' order by ordering" );
	$categories = array_merge( $categories, $database->loadObjectList() );
	
	$clist = mosHTML::selectList( $categories, 'catid', 'class="inputbox" size="1" style="width:228;"','value', 'text', $catid );
	$clist = ShowDropDownCategoryList(0,'catid',' class="inputbox" size="1" style="width:228;"');

	echo $clist;
	echo "</td>";
	echo "</tr><tr>";
	echo "<td align='right'><b>" . _DG_GENERIC_TITLE . " " . _DG_AZ09 . ":</b></td><td><input type=\"text\" name=\"gentitle\" size=\"34\" maxlength=\"256\"></td>";
	echo "</tr><tr>";
	echo "<td align='right'><b>" . _DG_GENERIC_DESC . ' ' . _DG_OPT. ":</b></td><td><input type=\"text\" name=\"gendesc\" size=\"34\" maxlength=\"1000\"></td>";
	echo "</tr><tr>";
	echo "<td align='right'><b>" . _DG_AUTHOR . ' ' . _DG_OPT . ":</b></td><td><input type=\"text\" name=\"photocred\" size=\"34\" maxlength=\"256\"></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td colspan='2' align='center'><br><input type='submit' value='" . _DG_ZIP_IMPORT . "' class='button' /></td></form><br />";
	echo "</tr>";
	echo "</table>";
	echo "</td></tr></table>";
	}

	function showConfig($option) {
	global $mosConfig_absolute_path, $dgver;
	$tabs = new mosTabs(0);
	require($mosConfig_absolute_path."/administrator/components/com_datsogallery/config.datsogallery.php");
    require_once($mosConfig_absolute_path."/administrator/components/com_datsogallery/update.datsogallery.php");
	$arr_ad_category  = explode(",",$ad_category);

	$clist = testCat($arr_ad_category, "ad_category[]", $extras="multiple  size=\"6\"", $levellimit="4");

    echo "<script language=\"javascript\" type=\"text/javascript\">\n";
    echo "function submitbutton(pressbutton) {\n";
    echo "var form = document.adminForm;\n";
    echo "if (pressbutton == 'cancel') {\n";
    echo "submitform( pressbutton );\n";
    echo "return;\n";
    echo "}\n";
    echo "if (form.ad_paththumbs.value == \"\"){\n";
    echo "alert( "._DG_FIVE_ERR." );\n";
    echo "} else {\n";
    echo "submitform( pressbutton );\n";
    echo "}\n";
    echo "}\n";
    echo "</script>";

    echo "<form action=\"index2.php\" method=\"post\" name=\"adminForm\">\n";
    echo "<script language=\"JavaScript\" src=\"includes/js/overlib_mini.js\" type=\"text/javascript\"></script>\n";
    echo "<table class=\"adminheading\">\n";
    echo "<tr>\n";
    echo "<th class=\"config\">"._DG_CONFIG_DATSOGALLERY."</th>\n";
    echo "</tr>\n";
    echo "</table>";

	$tabs->startPane("settings");
	$tabs->startTab(_DG_DIRS,"page1");

    echo "<table class=\"adminform\">\n";
    echo "<tr>\n";
    echo "<th  colspan=\"4\">\n";
    echo "<div align=\"left\">"._DG_DIRS2."</div></th>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td width=\"20%\" align=\"left\" valign=\"top\"><strong>"._DG_ORG_PIC_PATH.":</strong></td>\n";
    echo "<td width=\"20%\" align=\"left\" valign=\"top\">\n";
    echo "<input type=\"text\" name=\"ad_pathoriginals\" value=".$ad_pathoriginals." size=\"42\"></td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_ORG_PIC_PATH_I)."</td>\n";
    echo "<td align=\"left\" valign=\"top\">&nbsp;</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td width=\"20%\" align=\"left\" valign=\"top\"><strong>"._DG_MED_PIC_PATH.":</strong></td>\n";
    echo "<td width=\"20%\" align=\"left\" valign=\"top\">\n";
    echo "<input type=\"text\" name=\"ad_pathimages\" value=".$ad_pathimages." size=\"42\"></td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip (_DG_MED_PIC_PATH_I)."</td>\n";
    echo "<td align=\"left\" valign=\"top\">&nbsp;</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td width=\"20%\" align=\"left\" valign=\"top\"><strong>"._DG_THUMB_PIC_PATH.":</strong></td>\n";
    echo "<td width=\"20%\" align=\"left\" valign=\"top\">\n";
    echo "<input type=\"text\" name=\"ad_paththumbs\" value=".$ad_paththumbs." size=\"42\"></td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_THUMB_PIC_PATH_I)."</td>\n";
    echo "<td align=\"left\" valign=\"top\">&nbsp;</td>\n";
    echo "</tr>";
    echo "</table>";

	$tabs->endTab();
	$tabs->startTab(_DG_PROCESSING,"page2");

    echo "<table class=\"adminform\">\n";
    echo "<tr>\n";
    echo "<th colspan=\"4\">\n";
    echo "<div align=\"left\">"._DG_PROCESSING2."</div></th>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td width=\"20%\" align=\"left\" valign=\"top\"><strong>"._DG_THUMBNAIL_CREATOR.":</strong></td>\n";
    echo "<td width=\"20%\" align=\"left\" valign=\"top\">";

    if(function_exists("gd_info")) {
    $info = gd_info();
    $version = $info["GD Version"];
    if(strpos($version,'2.') !== false) {
	$thumbcreator = 'gd2';
    } else {
	$thumbcreator = 'gd1'; }
    } else {
    echo "<strong><font face='Tahoma' size='1' color='#FF0000' style='text-decoration:blink'>". _DG_GDIMAGE_NOT ."</font></strong>";
    }

    $mc_ad_thumbcreation = "<input type='hidden' name='ad_thumbcreation' value='".$thumbcreator."'>";
	echo $mc_ad_thumbcreation;

    if($thumbcreator)
    echo "<strong><font face='Tahoma' size='1'>GD Version: <font color='#008000'>".$version."</font></font></strong>";
	echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\"></font>".mosToolTip(_DG_CHOOS_IMA_PEOCES_TH)."</td>\n";
    echo "<td align=\"left\" valign=\"top\">&nbsp;</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_MAX_WIDTH.":</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">\n";
    echo "<input type=\"text\" name=\"ad_maxwidth\" value=".$ad_maxwidth." size=\"5\">&nbsp;<b>px</b></td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_MAX_WIDTH_IMAGE)."</td>\n";
    echo "<td align=\"left\" valign=\"top\">&nbsp;</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_MAX_HIGHT.":</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">\n";
    echo "<input type=\"text\" name=\"ad_maxheight\" value=".$ad_maxheight." size=\"5\">&nbsp;<b>px</b></td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_MAX_HIGHT_IMAGE)."</td>\n";
    echo "<td align=\"left\" valign=\"top\">&nbsp;</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_THUMBNAIL_WIDTH.":</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">\n";
    echo "<input type=\"text\" name=\"ad_thumbwidth\" value=".$ad_thumbwidth." size=\"5\">&nbsp;<b>px</b></td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_WIDTH_THUMBNAIL_CREAT)."</td>\n";
    echo "<td align=\"left\" valign=\"top\">&nbsp;</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_THUMBNAIL_HEIGHT.":</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">\n";
    echo "<input type=\"text\" name=\"ad_thumbheight\" value=".$ad_thumbheight." size=\"5\">&nbsp;<b>px</b></td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_HEIGHT_THUMBNAIL_CREAT)."</td>\n";
    echo "<td align=\"left\" valign=\"top\">&nbsp;</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td width=\"20%\" align=\"left\" valign=\"top\"><strong>"._DG_SKETCHING_METHOD."</strong></td>\n";
    echo "<td width=\"20%\" align=\"left\" valign=\"top\">";
	$crsc[] = mosHTML::makeOption( 'crop', _DG_CROP_METHOD );
	$crsc[] = mosHTML::makeOption( 'scale', _DG_SCALE_METHOD );
	$cs_ad_crsc = mosHTML::selectList( $crsc, 'ad_crsc', 'class="inputbox"', 'value', 'text', $ad_crsc );
	echo $cs_ad_crsc;
    echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_SKETCHING_METHOD_I)."</td>\n";
    echo "</tr>";

    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_THUMBNAIL_QUALIT.":</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">\n";
    echo "<input type=\"text\" name=\"ad_thumbquality\" value=".$ad_thumbquality." size=\"5\">&nbsp;<b>%</b></td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_THUMBNAIL_QUALIT_I)."</td>\n";
    echo "<td align=\"left\" valign=\"top\">&nbsp;</td>\n";
    echo "</tr>\n";
    echo "</table>";

	$tabs->endTab();
	$tabs->startTab(_DG_VIEW,"page4");

	echo "<table class=\"adminform\">\n";
    echo "<tr>\n";
    echo "<th colspan=\"3\">\n";
    echo "<div align=\"left\">"._DG_VIEW_DETAILS."</div>\n";
    echo "</th>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td width=\"20%\" align=\"left\" valign=\"top\"><strong>"._DG_SHOW_DETAILS."</strong></td>\n";
    echo "<td width=\"20%\" align=\"left\" valign=\"top\">";
	$yesno[] = mosHTML::makeOption( '0', _DG_NO );
	$yesno[] = mosHTML::makeOption( '1', _DG_YES );
	$yn_ad_showdetail = mosHTML::selectList( $yesno, 'ad_showdetail', 'class="inputbox"', 'value', 'text', $ad_showdetail );
	echo $yn_ad_showdetail;
    echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_SHOW_DETAILS_I)."</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_DESCRIPTION.":</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">\n";;
    $yn_ad_showimgtext = mosHTML::selectList( $yesno, 'ad_showimgtext', 'class=\"inputbox\"', 'value', 'text', $ad_showimgtext );
    echo $yn_ad_showimgtext;
    echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_DESCRIPTION_I)."</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_DATE_ADD.":</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">\n";
    $yn_ad_showfimgdate = mosHTML::selectList( $yesno, 'ad_showfimgdate', 'class=\"inputbox\"', 'value', 'text', $ad_showfimgdate );
    echo $yn_ad_showfimgdate;
    echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_DATE_ADD_I)."</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_HITS.":</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">\n";
    $yn_ad_showimgcounter = mosHTML::selectList( $yesno, 'ad_showimgcounter', 'class=\"inputbox\"', 'value', 'text', $ad_showimgcounter );
    echo $yn_ad_showimgcounter;
    echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_HITS_I)."</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_RATING.":</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">\n";
    $yn_ad_showfrating = mosHTML::selectList( $yesno, 'ad_showfrating', 'class=\"inputbox\"', 'value', 'text', $ad_showfrating );
    echo $yn_ad_showfrating;
    echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_RATING_I)."</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_SIZE.":</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">\n";
    $yn_ad_showres = mosHTML::selectList( $yesno, 'ad_showres', 'class=\"inputbox\"', 'value', 'text', $ad_showres );
    echo $yn_ad_showres;
    echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_SIZE_I)."</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_FILESIZE.":</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">\n";
    $yn_ad_showfimgsize = mosHTML::selectList( $yesno, 'ad_showfimgsize', 'class=\"inputbox\"', 'value', 'text', $ad_showfimgsize );
    echo $yn_ad_showfimgsize;
    echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_FILESIZE_I)."</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_AUTHOR_OWNER.":</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">\n";
    $yn_ad_showimgauthor = mosHTML::selectList( $yesno, 'ad_showimgauthor', 'class=\"inputbox\"', 'value', 'text', $ad_showimgauthor );
    echo $yn_ad_showimgauthor;
    echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_AUTHOR_OWNER_I)."</td>\n";
    echo "</tr>\n";
    echo "<tr>\n";
    echo "<th colspan=\"3\">\n";
    echo "<div align=\"left\">"._DG_VIEW_NAV_PANEL."</div>\n";
    echo "</th>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_SHOW_PANEL."</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">";
	$yn_ad_showpanel = mosHTML::selectList( $yesno, 'ad_showpanel', 'class="inputbox"', 'value', 'text', $ad_showpanel );
	echo $yn_ad_showpanel;
	echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_SHOW_PANEL_I)."</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_SHOW_USERPANEL."</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">";
	$yn_ad_userpannel = mosHTML::selectList( $yesno, 'ad_userpannel', 'class="inputbox"', 'value', 'text', $ad_userpannel );
	echo $yn_ad_userpannel;
	echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_SHOW_USERPANEL_I)."</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_SHOW_SPECIALPANEL."</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">";
	$yn_ad_special = mosHTML::selectList( $yesno, 'ad_special', 'class="inputbox"', 'value', 'text', $ad_special );
	echo $yn_ad_special;
	echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_SHOW_SPECIALPANEL_I)."</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_SHOW_RATINGPANEL."</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">";
	$yn_ad_rating = mosHTML::selectList( $yesno, 'ad_rating', 'class="inputbox"', 'value', 'text', $ad_rating );
	echo $yn_ad_rating;
	echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_SHOW_RATINGPANEL_I)."</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_SHOW_NEWPANEL."</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">";
	$yn_ad_lastadd = mosHTML::selectList( $yesno, 'ad_lastadd', 'class="inputbox"', 'value', 'text', $ad_lastadd );
	echo $yn_ad_lastadd;
	echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_SHOW_NEWPANEL_I)."</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_SHOW_LASTCOMMENTPANEL."</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">";
	$yn_ad_lastcomment = mosHTML::selectList( $yesno, 'ad_lastcomment', 'class="inputbox"', 'value', 'text', $ad_lastcomment );
	echo $yn_ad_lastcomment;
	echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_SHOW_LASTCOMMENTPANEL_I)."</td>\n";
    echo "</tr>\n";
    echo "<tr>\n";
    echo "<th colspan=\"3\">\n";
    echo "<div align=\"left\">"._DG_VIEW_OPTIONAL."</div>\n";
    echo "</th>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_SHOW_TITLE_COM.":</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">";
	$yn_ad_comtitle = mosHTML::selectList( $yesno, 'ad_comtitle', 'class="inputbox"', 'value', 'text', $ad_comtitle );
	echo $yn_ad_comtitle;
    echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_SHOW_TITLE_COM_I)."</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_SHOW_POWERED."</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">";
	$yn_ad_powered = mosHTML::selectList( $yesno, 'ad_powered', 'class="inputbox"', 'value', 'text', $ad_powered );
	echo $yn_ad_powered;
	echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_SHOW_POWERED_I)."</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_SHOW_PICINCAT."</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">";
	$yn_ad_picincat = mosHTML::selectList( $yesno, 'ad_picincat', 'class="inputbox"', 'value', 'text', $ad_picincat );
	echo $yn_ad_picincat;
	echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_SHOW_PICINCAT_I)."</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_COLUMNS_IN_SUBCAT."</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">\n";
    echo "<input type=\"text\" name=\"ad_ncsc\" value=\"".$ad_ncsc."\" size=\"5\">\n";
    echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_COLUMNS_IN_SUBCAT_I)."</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\"   >\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_COLUMNS_IN_SUBCAT_TH."</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">\n";
    echo "<input type=\"text\" name=\"ad_cp\" value=\"".$ad_cp."\" size=\"5\">\n";
    echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_COLUMNS_IN_SUBCAT_TH_I)."</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_DISPLAY_PIC."</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">\n";
    echo "<input type=\"text\" name=\"ad_perpage\" value=\"".$ad_perpage."\" size=\"5\">\n";
    echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_DISPLAY_PIC_I)."</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td width=\"20%\" align=\"left\" valign=\"top\"><strong>"._DG_SORTBY.":</strong></td>\n";
    echo "<td width=\"20%\" align=\"left\" valign=\"top\">";
	$sortby[] = mosHTML::makeOption( 'ASC', _DG_SORTBYASC );
	$sortby[] = mosHTML::makeOption( 'DESC', _DG_SORTBYDESC );
	$sb_ad_sortby = mosHTML::selectList( $sortby, 'ad_sortby', 'class="inputbox"', 'value', 'text', $ad_sortby );
	echo $sb_ad_sortby;
	echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_SORTBY_I)."</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_DISPLAY_TOP."</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">\n";
    echo "<input type=\"text\" name=\"ad_toplist\" value=\"".$ad_toplist."\" size=\"5\">\n";
    echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_DISPLAY_TOP_I)."</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_IMGSTYLE."</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">\n";
    echo "<input type=\"text\" name=\"ad_imgstyle\" value=\"".$ad_imgstyle."\" size=\"42\">\n";
    echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_IMGSTYLE_I)."\n";
    echo "&nbsp;<code>(ex: <font size=\"x-small\" color=\"#008000\"> border:1px solid #DFDFFF;margin:4px;padding:4px </font>)</code></td>\n";
    echo "</tr>\n";
    echo "</table>";

	$tabs->endTab();
	$tabs->startTab(_DG_UPBYUSER,"page5");

	echo "<table class=\"adminform\">\n";
    echo "<tr>\n";
    echo "<th colspan=\"3\">\n";
    echo "<div align=\"left\">"._DG_USER_UPLOAD_SETTING."</div>\n";
    echo "</th>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_ADMIN_APPRO_NEEDED.":</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">";
	$yn_ad_approve = mosHTML::selectList( $yesno, 'ad_approve', 'class="inputbox"', 'value', 'text', $ad_approve );
	echo $yn_ad_approve;
	echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_USER_UPLOAD_NEDD_APPROVAL)."</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td width=\"20%\" align=\"left\" valign=\"top\"><strong>"._DG_MAX_NR_IMAGES.":</strong></td>\n";
    echo "<td width=\"20%\" align=\"left\" valign=\"top\">\n";
    echo "<input type=\"text\" name=\"ad_maxuserimage\" value=\"".$ad_maxuserimage."\" size=\"5\">\n";
    echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_MAX_ALLOWED_PICS)."</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_MAX_SIZE_IMAGE.":</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">\n";
    echo "<input type=\"text\" name=\"ad_maxfilesize\" value=\"".$ad_maxfilesize."\" size=\"5\"></td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_MAX_ALLOWED_FILESIZE)."</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_ALLOWED_CAT.":</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">".$clist."</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_ALLOWED_CAT_I)."</td>\n";
    echo "</tr>\n";
    echo "</table>";

	$tabs->endTab();
	$tabs->startTab(_DG_RATE,"page6");

    echo "<table class=\"adminform\">\n";
    echo "<tr>\n";
    echo "<th colspan=\"3\">\n";
    echo "<div align=\"left\">"._DG_RATE_SETTING."</div>\n";
    echo "</th>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td width=\"20%\" align=\"left\" valign=\"top\"><strong>"._DG_ALLOW_RATING.":</strong></td>\n";
    echo "<td width=\"20%\" align=\"left\" valign=\"top\">";
	$yn_ad_showrating = mosHTML::selectList( $yesno, 'ad_showrating', 'class="inputbox"', 'value', 'text', $ad_showrating );
	echo $yn_ad_showrating;
	echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_ALLOW_RATING_I)."</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_HIGHEST_RATING.":</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">\n";
    echo "<input type=\"text\" name=\"ad_maxvoting\" value=\"".$ad_maxvoting."\" size=\"5\">\n";
    echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_HIGHEST_RATING_I)."</td>\n";
    echo "</tr>\n";
    echo "</table>";

	$tabs->endTab();
	$tabs->startTab(_DG_COMMENT1,"page7");

	echo "<table class=\"adminform\">\n";
    echo "<tr>\n";
    echo "<th colspan=\"3\">\n";
    echo "<div align=\"left\">"._DG_COMMENT_SETTING."</div>\n";
    echo "</th>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_ALLOW_COMM.":</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">";
	$yn_ad_showcomment = mosHTML::selectList( $yesno, 'ad_showcomment', 'class="inputbox"', 'value', 'text', $ad_showcomment );
	echo $yn_ad_showcomment;
	echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_ALLOW_COMM_I)."</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td width=\"20%\" align=\"left\" valign=\"top\"><strong>"._DG_ANONYM_COMM.":</strong></td>\n";
    echo "<td width=\"20%\" align=\"left\" valign=\"top\">";
	$yn_ad_anoncomment = mosHTML::selectList( $yesno, 'ad_anoncomment', 'class="inputbox"', 'value', 'text', $ad_anoncomment );
	echo $yn_ad_anoncomment;
	echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_ANONYM_COMM_I)."</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_ALLOW_BB_COD.":</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">";
	$yn_ad_bbcodesupport = mosHTML::selectList( $yesno, 'ad_bbcodesupport', 'class="inputbox"', 'value', 'text', $ad_bbcodesupport );
	echo $yn_ad_bbcodesupport;
	echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_ALLOW_BB_COD_I)."</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_SECURITY.":</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">";
	$yn_ad_security = mosHTML::selectList( $yesno, 'ad_security', 'class="inputbox"', 'value', 'text', $ad_security );
	echo $yn_ad_security;
	echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_SECURITY_I)."</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td width=\"20%\" align=\"left\" valign=\"top\"><strong>"._DG_NAME_OR_USER.":</strong></td>\n";
    echo "<td width=\"20%\" align=\"left\" valign=\"top\">";
	$name_or_user[] = mosHTML::makeOption( 'user', _DG_AS_USER );
	$name_or_user[] = mosHTML::makeOption( 'name', _DG_AS_NAME );
	$un_ad_name_or_user = mosHTML::selectList( $name_or_user, 'ad_name_or_user', 'class="inputbox"', 'value', 'text', $ad_name_or_user );
	echo $un_ad_name_or_user;
    echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_NAME_OR_USER_I)."</td>\n";
    echo "</tr>";
    echo "</table>";

	$tabs->endTab();
	$tabs->startTab(_DG_OPTION,"page8");

	echo "<table class=\"adminform\">\n";
    echo "<tr>\n";
    echo "<th colspan=\"3\">\n";
    echo "<div align=\"left\">"._DG_OPTION2."</div>\n";
    echo "</th>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td width=\"20%\" align=\"left\" valign=\"top\"><strong>"._DG_USE_LIGHTBOX.":</strong></td>\n";
    echo "<td width=\"20%\" align=\"left\" valign=\"top\">";
	$yn_ad_lightbox = mosHTML::selectList( $yesno, 'ad_lightbox', 'class="inputbox"', 'value', 'text', $ad_lightbox );
	echo $yn_ad_lightbox;
	echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_USE_LIGHTBOX_I)."</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td width=\"20%\" align=\"left\" valign=\"top\"><strong>"._DG_LIGHTBOX_FOR_ALL.":</strong></td>\n";
    echo "<td width=\"20%\" align=\"left\" valign=\"top\">";
	$yn_ad_lightbox_fa = mosHTML::selectList( $yesno, 'ad_lightbox_fa', 'class="inputbox"', 'value', 'text', $ad_lightbox_fa );
	echo $yn_ad_lightbox_fa;
	echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_LIGHTBOX_FOR_ALL_I)."</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td width=\"20%\" align=\"left\" valign=\"top\"><strong>"._DG_USE_WATERMARK."</strong></td>\n";
    echo "<td width=\"20%\" align=\"left\" valign=\"top\">";
	$yn_ad_showwatermark = mosHTML::selectList( $yesno, 'ad_showwatermark', 'class="inputbox"', 'value', 'text', $ad_showwatermark );
	echo $yn_ad_showwatermark;
	echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_USE_WATERMARK_I)."</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_USE_DOWNLOAD."</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">";
	$yn_ad_showdownload = mosHTML::selectList( $yesno, 'ad_showdownload', 'class="inputbox"', 'value', 'text', $ad_showdownload );
	echo $yn_ad_showdownload;
	echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_USE_DOWNLOAD_I)."</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_PUB_DOWNLOAD.":</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">";
	$yn_ad_downpub = mosHTML::selectList( $yesno, 'ad_downpub', 'class="inputbox"', 'value', 'text', $ad_downpub );
	echo $yn_ad_downpub;
	echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_PUB_DOWNLOAD_I)."</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_ALLOW_SLIDESHOW.":</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">";
	$yn_ad_slideshow = mosHTML::selectList( $yesno, 'ad_slideshow', 'class="inputbox"', 'value', 'text', $ad_slideshow );
	echo $yn_ad_slideshow;
	echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_SHOW_SLIDESHOW_BUTON_USER)."</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_SHOW_SEARCH.":</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">";
	$yn_ad_search = mosHTML::selectList( $yesno, 'ad_search', 'class="inputbox"', 'value', 'text', $ad_search );
	echo $yn_ad_search;
	echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_SHOW_SEARCH_I)."</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_USE_PATHWAY."</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">";
	$yn_ad_pathway = mosHTML::selectList( $yesno, 'ad_pathway', 'class="inputbox"', 'value', 'text', $ad_pathway );
	echo $yn_ad_pathway;
	echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_USE_PATHWAY_I)."</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_SHOW_SEND2FRIEND."</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">";
	$yn_ad_showsend2friend = mosHTML::selectList( $yesno, 'ad_showsend2friend', 'class="inputbox"', 'value', 'text', $ad_showsend2friend );
	echo $yn_ad_showsend2friend;
	echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_SHOW_SEND2FRIEND_I)."</td>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td align=\"left\" valign=\"top\"><strong>"._DG_SHOW_HINTS.":</strong></td>\n";
    echo "<td align=\"left\" valign=\"top\">";
	$yn_ad_showtip = mosHTML::selectList( $yesno, 'ad_showtip', 'class="inputbox"', 'value', 'text', $ad_showtip );
	echo $yn_ad_showtip;
	echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\">".mosToolTip(_DG_SHOW_HINTS_I)."</td>\n";
    echo "</tr>\n";
    echo "</table>";

    $tabs->endTab();
	$tabs->startTab(_DG_LANG,"page10");

    echo showLanguage($option);

    $tabs->endTab();
	$tabs->startTab(_DG_VERSION,"page11");

    echo "<table class=\"adminform\">\n";
    echo "<tr>\n";
    echo "<th colspan=\"3\">\n";
    echo "<div align=\"left\">"._DG_VERSION_INFO1."</div>\n";
    echo "</th>\n";
    echo "</tr>\n";
    echo "<tr align=\"left\" valign=\"middle\">\n";
    echo "<td width=\"15%\" align=\"left\" valign=\"top\">\n";
    echo "<a href=\"http://www.datso.fr\" target=\"_blank\"><img src=\"components/com_datsogallery/images/datso_logo.gif\"
    alt=\"\" title=\"DATSOGALLERY LOGO\" width=\"128\" height=\"128\" align=\"middle\" border=\"0\" hspace=\"5\" vspace=\"5\" /></a></td>\n";
    echo "<td width=\"25%\" align=\"left\" valign=\"top\">";
	echo "<p><strong><font color='#A3A3A3'>"._DG_VERSION_INFO."</font> <font color='#88C44D'>".$dgver."</font></strong></p>";
	echo "<ul>";
	echo "<li><a href='http://www.datso.fr'>"._DG_CHECK_VERSION."</a></li>";
	echo "<li><a href='http://www.datso.fr/blogcategory/datsogallery-dev-news.html'>"._DG_CHECK_MODS_AND_PGS."</a></li>";
	echo "<li><a href='http://www.datso.fr/flash-demo.html'>"._DG_FLASH_DEMO."</a></li>";
	echo "</ul>";
	echo "<p><font color='#A3A3A3'><strong>"._DG_MAKE_DONATION."</font></strong><p>";
	echo "<iframe name=\"donation\" src=\"components/com_datsogallery/donation.htm\" width=\"100\" height=\"80\" align=\"top\" frameborder=\"0\" scrolling=\"no\"></iframe>";

	echo "</td>\n";
    echo "<td align=\"left\" valign=\"top\"></td>\n";
    echo "</tr>\n";
    echo "</table>";

    $tabs->endTab();
	$tabs->endPane();

    echo "<input type='hidden' name='option' value='$option' />";
    echo "<input type='hidden' name='act' value='' />\n";
    echo "</form>\n";

	}

	$ad_cr="DatsoGallery ".$dgver." Multilingual<br />By <a href='http://www.datso.fr'>Andrey Datso</a>";

	function saveConfig($option,$ad_pathimages,$ad_paththumbs,$ad_pathoriginals,$ad_thumbcreation,$ad_thumbwidth,$ad_thumbheight,
    $ad_thumbquality,$ad_showdetail,$ad_showrating,$ad_showcomment,$ad_comtitle,$ad_showpanel,$ad_userpannel,$ad_special,$ad_crsc,
    $ad_rating,$ad_lastadd,$ad_lastcomment,$ad_search,$ad_showtip,$ad_showsend2friend,$ad_picincat,$ad_showwatermark,
    $ad_showdownload,$ad_downpub,$ad_anoncomment,$ad_perpage,$ad_sortby,$ad_maxvoting,$ad_toplist,$ad_slideshow,$ad_lightbox_fa,
    $ad_bbcodesupport,$ad_approve,$ad_pathway,$ad_powered,$ad_maxuserimage,$ad_maxfilesize,$ad_maxwidth,$ad_maxheight,
    $ad_category,$ad_imgstyle,$ad_ncsc,$ad_cr,$ad_showimgtext,$ad_showfimgdate,$ad_showimgcounter,$ad_showfrating,$ad_showres,
    $ad_showfimgsize,$ad_showimgauthor,$ad_cp,$ad_security,$ad_lightbox,$ad_name_or_user){
	global $dgver;
	$ad_cr="DatsoGallery Multilingual<br />By <a href='http://www.datso.fr'>Andrey Datso</a>";
	$configfile = "components/com_datsogallery/config.datsogallery.php";
	@chmod ($configfile, 0766);
	$permission = is_writable($configfile);
	if (!$permission) {
	$mosmsg = _DG_CONFIG_NO_WRITE;
	mosRedirect("index2.php?option=$option&act=config",$mosmsg);
	break;
	}
	$ad_category2 = implode( ",",$ad_category);

	$config  = "<?php\n";
	$config .= "\$ad_pathoriginals = \"$ad_pathoriginals\";\n";
	$config .= "\$ad_pathimages = \"$ad_pathimages\";\n";
	$config .= "\$ad_paththumbs = \"$ad_paththumbs\";\n";
	$config .= "\$ad_thumbcreation = \"$ad_thumbcreation\";\n";
	$config .= "\$ad_thumbwidth = \"$ad_thumbwidth\";\n";
    $config .= "\$ad_thumbheight = \"$ad_thumbheight\";\n";
    $config .= "\$ad_crsc = \"$ad_crsc\";\n";
	$config .= "\$ad_thumbquality = \"$ad_thumbquality\";\n";
	$config .= "\$ad_showdetail = \"$ad_showdetail\";\n";
	$config .= "\$ad_showrating = \"$ad_showrating\";\n";
	$config .= "\$ad_showcomment = \"$ad_showcomment\";\n";
    $config .= "\$ad_pathway = \"$ad_pathway\";\n";
	$config .= "\$ad_showpanel = \"$ad_showpanel\";\n";
    $config .= "\$ad_userpannel = \"$ad_userpannel\";\n";
    $config .= "\$ad_special = \"$ad_special\";\n";
    $config .= "\$ad_rating = \"$ad_rating\";\n";
    $config .= "\$ad_lastadd = \"$ad_lastadd\";\n";
    $config .= "\$ad_lastcomment = \"$ad_lastcomment\";\n";
    $config .= "\$ad_search = \"$ad_search\";\n";
    $config .= "\$ad_showtip = \"$ad_showtip\";\n";
    $config .= "\$ad_comtitle = \"$ad_comtitle\";\n";
	$config .= "\$ad_showsend2friend = \"$ad_showsend2friend\";\n";
    $config .= "\$ad_picincat = \"$ad_picincat\";\n";
    $config .= "\$ad_powered = \"$ad_powered\";\n";
	$config .= "\$ad_showwatermark = \"$ad_showwatermark\";\n";
	$config .= "\$ad_showdownload = \"$ad_showdownload\";\n";
    $config .= "\$ad_downpub = \"$ad_downpub\";\n";
	$config .= "\$ad_anoncomment = \"$ad_anoncomment\";\n";
	$config .= "\$ad_perpage = \"$ad_perpage\";\n";
    $config .= "\$ad_sortby = \"$ad_sortby\";\n";
	$config .= "\$ad_maxvoting = \"$ad_maxvoting\";\n";
	$config .= "\$ad_toplist = \"$ad_toplist\";\n";
	$config .= "\$ad_slideshow = \"$ad_slideshow\";\n";
	$config .= "\$ad_bbcodesupport = \"$ad_bbcodesupport\";\n";
	$config .= "\$ad_approve = \"$ad_approve\";\n";
	$config .= "\$ad_maxuserimage = \"$ad_maxuserimage\";\n";
	$config .= "\$ad_maxfilesize = \"$ad_maxfilesize\";\n";
	$config .= "\$ad_maxwidth = \"$ad_maxwidth\";\n";
	$config .= "\$ad_maxheight = \"$ad_maxheight\";\n";
	$config .= "\$ad_category = \"$ad_category2\";\n";
	$config .= "\$ad_imgstyle = \"$ad_imgstyle\";\n";
    $config .= "\$ad_ncsc = \"$ad_ncsc\";\n";
	$config .= "\$ad_cr = \"$ad_cr\";\n";
    $config .= "\$ad_showimgtext = \"$ad_showimgtext\";\n";
    $config .= "\$ad_showfimgdate = \"$ad_showfimgdate\";\n";
    $config .= "\$ad_showimgcounter = \"$ad_showimgcounter\";\n";
    $config .= "\$ad_showfrating = \"$ad_showfrating\";\n";
    $config .= "\$ad_showres = \"$ad_showres\";\n";
    $config .= "\$ad_showfimgsize = \"$ad_showfimgsize\";\n";
    $config .= "\$ad_showimgauthor = \"$ad_showimgauthor\";\n";
    $config .= "\$ad_cp = \"$ad_cp\";\n";
    $config .= "\$ad_security = \"$ad_security\";\n";
    $config .= "\$ad_lightbox = \"$ad_lightbox\";\n";
    $config .= "\$ad_lightbox_fa = \"$ad_lightbox_fa\";\n";
    $config .= "\$ad_name_or_user = \"$ad_name_or_user\";\n";
	$config .= "?>";
	
	if ($fp = fopen("$configfile", "w")) {
	fputs($fp, $config, strlen($config));
	fclose ($fp); }
	mosRedirect("index2.php?option=$option&task=settings", _DG_SETT_SAVED);
	}
	
    function publishComment( $cid=null, $publish=1,  $option ) {
	global $database;
    if (!is_array( $cid ) || count( $cid ) < 1) {
	$action = $publish ? 'publish' : 'unpublish';
	echo "<script> alert('"._DG_SELECT_AN_ITEM." $action'); window.history.go(-1);</script>\n";
	exit; }
    $cids = implode( ',', $cid );
    $database->setQuery( "update #__datsogallery_comments set published='$publish' where cmtid in ($cids)" );
	if (!$database->query()) {
	echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
	exit(); }
    mosRedirect( "index2.php?option=$option&task=comments" );
	}
	
	function removeComment( $cid, $option ) {
	global $database;
	if (!is_array( $cid ) || count( $cid ) < 1) {
	echo "<script> alert('"._DG_SELECT_ITEM_TO_DELETE."'); window.history.go(-1);</script>\n";
	exit; }
	if (count( $cid )) {
	$cids = implode( ',', $cid );
	$database->setQuery( "delete from #__datsogallery_comments where cmtid in ($cids)" );
	if (!$database->query()) {
	echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n"; }
	}
	mosRedirect( "index2.php?option=$option&task=comments" );
	}
	
	function showComments( $option ) {
	global $database;
    $limit = intval( mosGetParam( $_POST, 'limit', 10 ) );
	$limitstart = intval( mosGetParam( $_POST, 'limitstart', 0 ) );
    $search = trim( strtolower( mosGetParam( $_POST, 'search', '' ) ) );
	$where = array();
	if ($search) {
	$where[] = "lower(cmttext) like '%$search%' or lower(cmtname) like '%$search%' ";
	}
    $database->setQuery( "select count(*) from #__datsogallery_comments AS a".(count( $where ) ? "\nwhere " . implode( ' AND ', $where ) : "") );
	$total = $database->loadResult();
	echo $database->getErrorMsg();
	if ($limit > $total) {
	$limitstart = 0; }
    $database->setQuery( "select * from #__datsogallery_comments "
	. (count( $where ) ? "\nwhere " . implode( ' AND ', $where ) : "")
	. " order by cmtdate DESC "
	. " LIMIT $limitstart, $limit "
	);
	$rows = $database->loadObjectList();
	if ($database->getErrorNum()) {
	echo $database->stderr();
	return false; }
    include_once( "includes/pageNavigation.php" );
	$pageNav = new mosPageNav( $total, $limitstart, $limit  );
    HTML_datsogallery::showComments( $option, $rows, $search, $pageNav );
	}

	function viewCatg( $option) {
	global $database, $mainframe;
	$limit = $mainframe->getUserStateFromRequest( "viewlistlimit", 'limit', 10 );
	$limitstart = $mainframe->getUserStateFromRequest( "view{$option}limitstart", 'limitstart', 0 );
	$search = $mainframe->getUserStateFromRequest( "search{$option}", 'search', '' );
	$search = $database->getEscaped( trim( strtolower( $search ) ) );
    $where = "";
	if ($search) {
	$where = " where a.name like '%$search%' or a.description like '%$search%'";
	}
    $database->setQuery( " select count(*) from #__datsogallery_catg AS a $where " );
	$total = $database->loadResult();
    require_once( "includes/pageNavigation.php" );
	$pageNav = new mosPageNav( $total, $limitstart, $limit  );
    $database->setQuery( " select a.*, g.name AS groupname "
	. " from #__datsogallery_catg AS a "
	. " left join #__groups AS g on g.id = a.access "
	. " $where "
	. " order by a.ordering asc "
	. " limit $pageNav->limitstart, $pageNav->limit "
	);
	$rows = $database->loadObjectList();
	HTML_datsogallery::showCatgs( $rows, $search, $pageNav, $option );
	}
	
	function editCatg( $uid, $option ) {
	global $database, $my;
	$row = new mosCatgs( $database );
	$row->load( $uid );
    $orders    = mosGetOrderingList( "select ordering as value, name as text from #__datsogallery_catg order by ordering desc" );
	$orderlist = mosHTML::selectList( $orders, 'ordering', 'class="inputbox" size="1"', 'value', 'text', intval( $row->ordering ) );
    $yesno[]   = mosHTML::makeOption( '0', _DG_NO );
	$yesno[]   = mosHTML::makeOption( '1', _DG_YES );
    $publist   = mosHTML::selectList( $yesno, 'published', 'class="inputbox" size="2"', 'value', 'text', $row->published );
    $database->setQuery( "select id as value, name as text from #__groups order by id" );
	$groups    = $database->loadObjectList();
    $glist     = mosHTML::selectList( $groups, 'access', 'class="inputbox" size="1"', 'value', 'text', intval( $row->access ) );
    $row->parent = $row->parent > 1;
    $Lists["catgs"] = ShowDropDownCategoryList("$row->parent","parent","dests");
    $Lists['image'] = mosAdminMenus::Images( 'image', $row->image );
	HTML_datsogallery::editCatg( $row, $publist, $option , $glist , $Lists, $orderlist );
	}
	
	function saveCatg( $option, $task ) {
	global $database, $my;
    $row = new mosCatgs( $database );
	if (!$row->bind( $_POST )) {
	echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
	exit(); }
	mosMakeHtmlSafe($row->name);
    if ($row->parent == $row->cid) {
    mosRedirect( "index2.php?option=$option&task=showcatg", _DG_SUBCAT_SELECT_ERROR );
    }
    if (!$row->check()) {
	echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
	exit(); }
	if (!$row->store()) {
	echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
	exit(); }
	$row->checkin();
	$row->updateOrder( "" );
	mosRedirect( "index2.php?option=$option&task=showcatg" );
	}
	
	function publishCatg( $cid=null, $publish=1, $option ) {
	global $database, $my;
    if (!is_array( $cid ) || count( $cid ) < 1) {
	$action = $publish ? 'publish' : 'unpublish';
	echo "<script> alert('"._DG_SELECT_AN_ITEM." $action'); window.history.go(-1);</script>\n";
	exit; }
    $cids = implode( ',', $cid );
    $database->setQuery( "update #__datsogallery_catg set published='$publish' where cid in ($cids)" );
	if (!$database->query()) {
	echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
	exit(); }
    if (count( $cid ) == 1) {
	$row = new mosCatgs( $database );
	$row->checkin( $cid[0] );
	}
	mosRedirect( "index2.php?option=$option&task=showcatg" );
	}
	
	function removeCatg( $cid, $option ) {
	global $database;
    if (count( $cid )) {
	$cids = implode( ',', $cid );
	foreach ($cid as $cc) {
    $database->setQuery( "delete from #__datsogallery_catg where cid=$cc" );
	$database->query();
	echo $database->getErrorMsg(); }
	}
    mosRedirect( "index2.php?option=$option&task=showcatg",$error);
	}
	
    function cancelCatg( $option ) {
	global $database;
    $row = new mosCatgs( $database );
	$row->bind( $_POST );
	$row->checkin();
	mosRedirect( "index2.php?option=$option&task=showcatg" );
	}
	
    function ShowCategoryPath ($cat){
	global $database, $mosConfig_lang, $gid, $dgurl;
	$cat = intval($cat);
	$parent = 1000;
    while ($parent) {
	$database->setQuery( "select * from #__datsogallery_catg where cid=$cat" );
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
	
	function ShowDropDownCategoryList($cat,$cname="cat",$extra=null,$flag=0) {
	global $database;
    $category        = "<select name='$cname' class='inputbox' $extra>";
	if($flag==1) { $add_category = true; }
    if(@$add_category) {
	$category       .= "<option value=0>"._DG_SUBCAT_SELECT."</option>";
	} else {
	$category       .= "<option value='0'>"._DG_SUBCAT_SELECT."</option>"; }
    $database->setQuery( "select * from #__datsogallery_catg order by cid asc" );
	$result= $database->query();
    $num_rows = mysql_num_rows($result);
    $i = 0;
	while($i < $num_rows){
	$category_id = mysql_result($result,$i,"cid");
	$category_name = mysql_result($result,$i,"name");
    if($category_id != @$hide) {
	@$category_list .= "<option value='$category_id' ";
    if($category_id == $cat){
	$category_list  .= " selected"; }
    $category_list  .= ">".ShowCategoryPath($category_id)."</option>\n"; }
	$i++; }
	$categories = explode("\n",$category_list);
	asort($categories);
	$category       .= implode("\n",$categories);
    $category       .= "</select>";
    return $category;
	}
	
	function orderCatg( $uid, $inc, $option ) {
	global $database;
	$fp = new mosCatgs( $database );
	$fp->load( $uid );
	$fp->move( $inc );
    mosRedirect( "index2.php?option=$option&task=showcatg" );
	}

	function resetVotes( $option ) {
	global $database;
	$database->setQuery( "delete from #__datsogallery_votes" );
	if (!$database->query()) {
	echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n"; }
	$database->setQuery( "update #__datsogallery set imgvotes='0', imgvotesum='0'" );
	if (!$database->query()) {
	echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n"; }
	mosRedirect( "index2.php?option=com_datsogallery&act=pictures" );
	}

	function testCat( $cat, $cname, $extras="", $levellimit="4" ) {
	global $database;
    $database->setQuery( "select cid as id, parent, name from #__datsogallery_catg order by ordering" );
    $items = $database->loadObjectList();
    $children = array();
    foreach ($items as $v ) {
	$pt = $v->parent;
	$list = @$children[$pt] ? $children[$pt] : array();
	array_push( $list, $v );
	$children[$pt] = $list; }
    $list = catTreeRecurse( 0, '', array(), $children );
    $items = array();
	$items[] = mosHTML::makeOption( '', ' ' );
	foreach ($list as $item) {
	$items[] = mosHTML::makeOption( $item->id, $item->treename ); }
	asort($items);
    $parlist =selectList2( $items, $cname, 'class="inputbox" '.$extras, 'value', 'text', $cat );
	return $parlist;
	}

	function catTreeRecurse($id, $indent="&nbsp;&nbsp;&nbsp;", $list, &$children, $maxlevel=9999, $level=0 , $seperator=" » ") {
	if (@$children[$id] && $level <= $maxlevel) {
	foreach ($children[$id] as $v) {
	$id = $v->id;
	$txt = $v->name;
	$pt = $v->parent;
	$list[$id] = $v;
	$list[$id]->treename = "$indent$txt";
	$list[$id]->children = count( @$children[$id] );
	$list = catTreeRecurse( $id, "$indent$txt$seperator", $list, $children, $maxlevel, $level+1 ); }
	}
    return $list;
	}

    function showDGrebuild ( $option ){
    global $database, $mosConfig_absolute_path, $mosConfig_live_site;
    require_once($mosConfig_absolute_path."/administrator/components/com_datsogallery/config.datsogallery.php");
    $database->setQuery("select imgthumbname from #__datsogallery order by ordering limit 1");
	$thumb = $database->loadResult();
    $imgprev = $mosConfig_live_site .$ad_paththumbs.'/'.$thumb;
    echo "<table class=\"adminheading\">\n";
    echo "<tr>\n";
    echo "<th style='background: url(components/com_datsogallery/images/rebuild.png) no-repeat left'>"._DG_THUMB_REBUILD_TITLE."</th>\n";
    echo "</tr>\n";
    echo "</table>";
    echo "<table width='100%' border='0' cellspacing='0' cellpadding='0' class='adminform'>\n";
    echo "<tr>\n";
    echo "<td width='20%'><div align='center' class='clr'>";
    echo "<img src='$imgprev' style='".$ad_imgstyle."' alt='' />";
    echo"</div></td>\n";
    echo "<form action='index2.php?task=startdgrebuild' name='adminForm' method='post'>\n";
    echo "<td width='80%'>";
    echo "<fieldset><legend>"._DG_THUMB_REBUILD_TITLE."</legend>\n";
    echo _DG_THUMB_REBUILD_DESCRIPTION;
    echo "<b>"._DG_THUMBS_IS."&nbsp;&nbsp;";
    $clist = ShowDropDownCategoryList($catid, 'catid', 'class="inputbox" size="1"');
    echo is_writable( $mosConfig_absolute_path.$ad_paththumbs."/".$thumb ) ?
    '<b><font color="green"> '._DG_WRITEABLE.'</font></b><br /><br />'.$clist.'' : '<b><font color="red"> '._DG_UNWRITEABLE.'</font></b><br /><br />';
    echo "<input type='hidden' name='option' value='$option' />";
    echo "&nbsp;<input type='submit' name='startdgrebuild' value='"._DG_BEGIN."' class='button' />";
    echo "</fieldset>\n";
    echo "</td>\n";
    echo "</form>\n";
    echo "</tr>\n";
    echo "</table>";
    }

    function startDGrebuild( $option ) {
    global $database, $mosConfig_absolute_path, $catid;
    require_once($mosConfig_absolute_path."/administrator/components/com_datsogallery/config.datsogallery.php");
    require_once($mosConfig_absolute_path."/administrator/components/com_datsogallery/images.datsogallery.php");
    $orgls = $mosConfig_absolute_path . $ad_pathoriginals . '/';
    $thmbs = $mosConfig_absolute_path . $ad_paththumbs. '/';
    $database->setQuery( "select * from #__datsogallery where catid=$catid" );
    $pics = $database->loadObjectList();
    if ($pics[0]!=""){
	foreach ($pics as $pic){
    if ($ad_crsc == "crop") {
    thumb($orgls.$pic->imgoriginalname, $thmbs.$pic->imgthumbname, $ad_thumbwidth, $ad_thumbheight, $ad_thumbquality);
    } else {
    resize_image($orgls.$pic->imgoriginalname, $thmbs.$pic->imgthumbname, $ad_thumbwidth, $ad_thumbcreation, $ad_thumbquality); }
    }
    }
    mosRedirect("index2.php?option=$option&act=rebuild", _DG_THUMB_REBUILD_END);
    }
	
	function selectList2( &$arr, $tag_name, $tag_attribs, $key, $text, $selected ) {
	reset( $arr );
	$html   = "\n<select name=\"$tag_name\" $tag_attribs>";
	for ($i=0, $n=count( $arr ); $i < $n; $i++ ) {
	$k      = $arr[$i]->$key;
	$t      = $arr[$i]->$text;
	$id     = @$arr[$i]->id;
    $extra  = '';
	$extra .= $id ? " id=\"" . $arr[$i]->id . "\"" : '';
	if (is_array( $selected )) {
	foreach ($selected as $obj) {
	$k2 = $obj;
	if ($k == $k2) {
	$extra .= " selected=\"selected\"";
	break; }
	}
	} else {
	$extra .= ($k == $selected ? " selected=\"selected\"" : ''); }
	$html  .= "\n\t<option value=\"".$k."\"$extra>" . $t . "</option>"; }
	$html  .= "\n</select>\n";
	return $html;
	}

    function showLanguage($option) {
    global $mosConfig_absolute_path, $mosConfig_lang;
    if (file_exists($mosConfig_absolute_path.'/components/com_datsogallery/language/'.$mosConfig_lang.'.php')) {
    $file = $mosConfig_absolute_path.'/components/com_datsogallery/language/'.$mosConfig_lang.'.php';
    } else {
    $file = $mosConfig_absolute_path.'/components/com_datsogallery/language/english.php';
    }
    echo showSource($file,$option);
    }

    function saveLanguage( $option ) {
    global $mosConfig_absolute_path, $mosConfig_lang;
    $file 		 = mosGetParam( $_POST, 'file', '' );
    $filecontent = mosGetParam( $_POST, 'filecontent', '', _MOS_ALLOWHTML );

    if (!$filecontent) {
    mosRedirect( "index2.php?option=$option&act=settings", _DG_LANG_EMPTY );
    }

    if (file_exists($mosConfig_absolute_path.'/components/com_datsogallery/language/'.$mosConfig_lang.'.php')) {
    $file = $mosConfig_absolute_path.'/components/com_datsogallery/language/'.$mosConfig_lang.'.php';
    } else {
    $file = $mosConfig_absolute_path.'/components/com_datsogallery/language/english.php';
    }

    $enable_write = mosGetParam($_POST,'enable_write',0);
    $oldperms = fileperms($file);
    if ($enable_write) @chmod($file, $oldperms | 0222);

    clearstatcache();
    if (is_writable( $file ) == false) {
    mosRedirect( "index2.php?option=$option&act=settings", _DG_LANG_IS_NOT_WRITEABLE );
    }

    if ($fp = fopen ($file, "w")) {
    fputs( $fp, stripslashes( $filecontent ) );
    fclose( $fp );
    if ($enable_write) {
    @chmod($file, $oldperms);
    } else {
    if (mosGetParam($_POST,'disable_write',0))
    @chmod($file, $oldperms & 0777555);
    }
    mosRedirect( "index2.php?option=$option&act=settings", _DG_LANG_SAVED );
    } else {
    if ($enable_write) @chmod($file, $oldperms);
    mosRedirect( "index2.php?option=$option", _DG_LANG_IS_NOT_WRITEABLE );
    }
    }

    function showSource($file, $option) {
    global $mosConfig_lang;

    $file = stripslashes($file);
    $f=fopen($file,"r");
    $content = fread($f, filesize($file));
    $content = htmlspecialchars($content);

    echo "<form action='index2.php' name='adminForm' method='post'>\n";
    echo "<table cellpadding='4' cellspacing='0' border='0' width='100%' class='adminform'>\n";
    echo "<tr>\n";
    echo "<th colspan='4'>";
    echo _DG_LANG_FILE . $mosConfig_lang.".php "._DG_LANG_IS." :";
	echo is_writable($file) ? '<font color="green"> '._DG_WRITEABLE.'</font>' : '<font color="red"> '._DG_UNWRITEABLE.'</font>';
    echo "</th>\n";
    echo "<tr>\n";
    echo "<td><textarea cols='100' rows='20' name='filecontent'>".$content."</textarea>\n";
    echo "</td>\n";
    echo "</tr>";
    echo "<tr><td>";
    if (mosIsChmodable($file)) {
	if (is_writable($file)) {
    echo "<input type=\"checkbox\" id=\"disable_write\" name=\"disable_write\" value=\"1\"/>\n";
    echo "<label for=\"disable_write\"><b>"._DG_MAKE_UNWRITEABLE."</b></label>";
    } else {
    echo "<input type=\"checkbox\" id=\"enable_write\" name=\"enable_write\" value=\"1\"/>\n";
    echo "<label for=\"enable_write\"><b>"._DG_OVERRRIDE_UNWRITEABLE."</b></label>";
    }
    }
    echo "</td>";
    echo "</tr>\n";
    echo "</table>\n";
    echo "<input type='hidden' name='file' value='$file' />\n";
    echo "<input type='hidden' name='option' value='$option' />";
    echo "<input type='hidden' name='task' value='' />\n";
    echo "</form>\n";
    }

    echo "<br><div class='small' align='center'><br />".$ad_cr."</div>";

?>