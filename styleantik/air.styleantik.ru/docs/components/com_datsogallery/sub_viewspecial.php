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

    require_once($mosConfig_absolute_path . "/administrator/components/com_datsogallery/config.datsogallery.php");
    global $database, $dgurl, $gid, $mainframe;

    GalleryHeader();

	switch (@$sorting) {
	case 'find':

    $searchstring = trim(strtolower($sstring));
    $database->setQuery("select * "
	. " from #__datsogallery as a, #__datsogallery_catg "
	. " as ca where a.catid=ca.cid "
    . " and (( a.imgtitle like '%$searchstring%' ) or ( a.imgtext like '%$searchstring%' )) "
	. " and a.published=1 "
	. " and a.approved=1 "
    . " and ca.published=1 "
	. " and ca.access<=$gid "
	. " order by id desc ");

	$tl_title = _DG_SEARCH_RESULTS." $sstring ";
    $pw_title = _DG_SEARCH_RESULTS." $sstring ";
	break;

	case 'lastcomment':

    $database->setQuery("select a.*, cc.cmtid "
	. " from #__datsogallery as a, #__datsogallery_comments "
	. " as cc, #__datsogallery_catg "
	. " as ca where a.id=cc.cmtpic "
	. " and a.catid=ca.cid "
	. " and a.published=1 "
	. " and a.approved=1 "
    . " and ca.published=1 "
	. " and ca.access<=$gid "
	. " order by cc.cmtid desc limit $ad_toplist ");

	$tl_title = " $ad_toplist " ._DG_LAST_COMMENT_PIC;
    $pw_title = _DG_LAST_COMMENTED;

    break;

	case 'lastadd':

    $database->setQuery("select * "
	. " from #__datsogallery as a, #__datsogallery_catg "
	. " as ca where a.catid=ca.cid "
	. " and a.published=1 "
	. " and a.approved=1 "
    . " and ca.published=1 "
	. " and ca.access<=$gid "
	. " order by a.id desc limit $ad_toplist");

	$tl_title = " $ad_toplist " ._DG_NEW_PIC;
    $pw_title = _DG_LAST_ADDED;

    break;

	case 'rating':
	$database->setQuery("select *, "
	. " imgvotesum "
	. " as rating from #__datsogallery "
	. " as a, #__datsogallery_catg "
	. " as ca where  a.catid=ca.cid "
	. " and a.imgvotes>0 "
	. " and a.published=1 "
	. " and a.approved=1 "
    . " and ca.published=1 "
	. " and ca.access<=$gid "
	. " order by rating desc limit $ad_toplist");

	$tl_title = " $ad_toplist " ._DG_BEST_RATED_PIC;
    $pw_title = _DG_TOP_RATED;

    break;

	default:

	$database->setQuery("select * "
	. " from #__datsogallery "
	. " as a, #__datsogallery_catg "
	. " as ca where a.catid=ca.cid "
	. " and a.published=1 "
	. " and a.approved=1 "
    . " and ca.published=1 "
	. " and ca.access<=$gid"
	. " order by imgcounter desc limit $ad_toplist");

	$tl_title = " $ad_toplist " ._DG_MOST_VIEWED_PIC;
    $pw_title = _DG_MOST_VIEWED;

    break;
	}

    $rows = $database->loadObjectList();

    $mainframe->setPageTitle($pw_title);
    $mainframe->AppendPathway($pw_title);

    echo "<table width='100%' border='0' cellspacing='1' cellpadding='0'>";
    echo "<tr><td colspan='2' class='sectiontableheader' width='100%'>$tl_title</td>";
    $rowcounter = 0;

	if (count($rows)) {
	foreach ($rows as $row1) {
	echo "</tr><tr>";
    echo "<td class='sectiontableentry1' align='center'>";
    echo "<a href='" . sefRelToAbs("$dgurl&func=detail&catid=$row1->catid&id=$row1->id") . "'><img src='$thumbnailpath$row1->imgthumbname' style='".$ad_imgstyle."' alt='' /></a>";
    echo "</td><td class='sectiontableentry1' width='100%' valign='top'><b>$row1->imgtitle</b>";

	if ($ad_showdetail)
	echo "<br />". _DG_HITS . ": $row1->imgcounter ";

	if ($ad_showrating) {
	if ($row1->imgvotes > 0) {
	$fimgvotesum = number_format($row1->imgvotesum / $row1->imgvotes, 2, ",", ".");

	$frating = "$fimgvotesum ($row1->imgvotes "._DG_VOTES.")";
	} else {
	$frating = "". _DG_NO_RATE ."";
	}

	echo "<br />". _DG_RATING.": $frating";
	}

	if ($ad_showcomment) {
	$database->setQuery("select cmtid from #__datsogallery_comments where cmtpic='$row1->id'");
    $comments_result = $database->query();
    $comments = mysql_num_rows($comments_result);
    echo "<br />". _DG_COMMENTS .": $comments";
	}

	echo "</td>";
    $rowcounter++;
	}
	}
    echo "</tr></table>";

?>
