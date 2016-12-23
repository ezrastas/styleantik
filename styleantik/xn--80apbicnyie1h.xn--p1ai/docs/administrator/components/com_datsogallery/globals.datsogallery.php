<?php
	/***************************************************\
	**   DatsoGallery - A Joomla! Gallery Component    **
	**   Copyright (C) 2006-2007  by Andrey Datso      **
	**   Version    : 1.3.9.1                          **
	**   Homepage   : http://www.datso.fr              **
	**   License    : Copyright, don't distribute      **
	\***************************************************/

    defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

    $ad_pathoriginals    = mosGetParam($_POST, 'ad_pathoriginals', '');
    $ad_pathimages       = mosGetParam($_POST, 'ad_pathimages', '');
    $ad_paththumbs       = mosGetParam($_POST, 'ad_paththumbs', '');
    $ad_thumbcreation    = mosGetParam($_POST, 'ad_thumbcreation', '');
    $ad_thumbwidth       = mosGetParam($_POST, 'ad_thumbwidth', '');
    $ad_thumbheight      = mosGetParam($_POST, 'ad_thumbheight', '');
    $ad_crsc             = mosGetParam($_POST, 'ad_crsc', '');
    $ad_thumbquality     = mosGetParam($_POST, 'ad_thumbquality', '');
    $ad_showdetail       = mosGetParam($_POST, 'ad_showdetail', '');
    $ad_showrating       = mosGetParam($_POST, 'ad_showrating', '');
    $ad_showcomment      = mosGetParam($_POST, 'ad_showcomment', '');
    $ad_showpanel        = mosGetParam($_POST, 'ad_showpanel', '');
    $ad_userpannel       = mosGetParam($_POST, 'ad_userpannel', '');
    $ad_special          = mosGetParam($_POST, 'ad_special', '');
    $ad_rating           = mosGetParam($_POST, 'ad_rating', '');
    $ad_lastadd          = mosGetParam($_POST, 'ad_lastadd', '');
    $ad_lastcomment      = mosGetParam($_POST, 'ad_lastcomment', '');
    $ad_search           = mosGetParam($_POST, 'ad_search', '');
    $ad_pathway          = mosGetParam($_POST, 'ad_pathway', '');
    $ad_showtip          = mosGetParam($_POST, 'ad_showtip', '');
    $ad_comtitle         = mosGetParam($_POST, 'ad_comtitle', '');
    $ad_showsend2friend  = mosGetParam($_POST, 'ad_showsend2friend', '');
    $ad_picincat         = mosGetParam($_POST, 'ad_picincat', '');
    $ad_powered          = mosGetParam($_POST, 'ad_powered', '');
    $ad_showwatermark    = mosGetParam($_POST, 'ad_showwatermark', '');
    $ad_showdownload     = mosGetParam($_POST, 'ad_showdownload', '');
    $ad_downpub          = mosGetParam($_POST, 'ad_downpub', '');
    $ad_anoncomment      = mosGetParam($_POST, 'ad_anoncomment', '');
    $ad_perpage          = mosGetParam($_POST, 'ad_perpage', '');
    $ad_sortby           = mosGetParam($_POST, 'ad_sortby', '');
    $ad_maxvoting        = mosGetParam($_POST, 'ad_maxvoting', '');
    $ad_toplist          = mosGetParam($_POST, 'ad_toplist', '');
    $ad_slideshow        = mosGetParam($_POST, 'ad_slideshow', '');
    $ad_bbcodesupport    = mosGetParam($_POST, 'ad_bbcodesupport', '');
    $ad_approve          = mosGetParam($_POST, 'ad_approve', '');
    $ad_maxuserimage     = mosGetParam($_POST, 'ad_maxuserimage', '');
    $ad_maxfilesize      = mosGetParam($_POST, 'ad_maxfilesize', '');
    $ad_maxwidth         = mosGetParam($_POST, 'ad_maxwidth', '');
    $ad_maxheight        = mosGetParam($_POST, 'ad_maxheight', '');
    $ad_category         = mosGetParam($_POST, 'ad_category', '');
    $ad_imgstyle         = mosGetParam($_POST, 'ad_imgstyle', '');
    $ad_ncsc             = mosGetParam($_POST, 'ad_ncsc', '');
    $ad_cr               = mosGetParam($_POST, 'ad_cr', '');
    $ad_showimgtext      = mosGetParam($_POST, 'ad_showimgtext', '');
    $ad_showfimgdate     = mosGetParam($_POST, 'ad_showfimgdate', '');
    $ad_showimgcounter   = mosGetParam($_POST, 'ad_showimgcounter', '');
    $ad_showfrating      = mosGetParam($_POST, 'ad_showfrating', '');
    $ad_showres          = mosGetParam($_POST, 'ad_showres', '');
    $ad_showfimgsize     = mosGetParam($_POST, 'ad_showfimgsize', '');
    $ad_showimgauthor    = mosGetParam($_POST, 'ad_showimgauthor', '');
    $ad_cp               = mosGetParam($_POST, 'ad_cp', '');
    $ad_security         = mosGetParam($_POST, 'ad_security', '');
    $ad_lightbox         = mosGetParam($_POST, 'ad_lightbox', '');
    $ad_lightbox_fa      = mosGetParam($_POST, 'ad_lightbox_fa', '');
    $ad_name_or_user     = mosGetParam($_POST, 'ad_name_or_user', '');

    $id                  = mosGetParam($_REQUEST, 'id', null);
    $cid                 = mosGetParam($_REQUEST, 'cid', '');
    $catid               = mosGetParam($_REQUEST, 'catid','');
    $approved            = mosGetParam($_REQUEST, 'approoved','');
    $catimage            = mosGetParam($_REQUEST, 'catimage', '');
    $act                 = mosGetParam($_REQUEST, 'act', null);
    $task                = mosGetParam($_REQUEST, 'task', null);
    $option              = mosGetParam($_REQUEST, 'option', null);
    $batchul             = mosGetParam($_REQUEST, 'batchul', null);
    $name                = mosGetParam($_REQUEST, 'name', '');
    $parent              = mosGetParam($_REQUEST, 'parent', '');
    $description         = mosGetParam($_REQUEST, 'description', '');
    $access              = mosGetParam($_REQUEST, 'access', '');
    $ordering            = mosGetParam($_REQUEST, 'ordering', '');
    $imgtitle            = mosGetParam($_REQUEST, 'imgtitle', '');
    $imgtext             = mosGetParam($_REQUEST, 'imgtext', '');
    $owner               = mosGetParam($_REQUEST, 'owner','');
    $imgauthor           = mosGetParam($_REQUEST, 'imgauthor','');
    $imgoriginalname     = mosGetParam($_REQUEST, 'imgoriginalname','');
    $imgfilename         = mosGetParam($_REQUEST, 'imgfilename','');
    $imgthumbname        = mosGetParam($_REQUEST, 'imgthumbname','');

    $gentitle            = mosGetParam($_POST, 'gentitle','');
    $gendesc             = mosGetParam($_REQUEST, 'gendesc', '');
    $photocred           = mosGetParam($_REQUEST, 'photocred', '');
    $ordering            = mosGetParam($_POST, 'ordering', '');

    $org_screenshot      = $_FILES['org_screenshot']['tmp_name'];
	$org_screenshot_name = $_FILES['org_screenshot']['name'];
	$method              = mosGetParam($_REQUEST, 'method', '');
    $thumbcreation       = mosGetParam($_POST, 'thumbcreation', '');
    $zippack             = mosGetParam($_FILES, 'zippack','');

    function format_filesize($tfilesize) {
    global $dgfilesize;

    if ($tfilesize >= 1073741824) {
    $dgfilesize = number_format(($tfilesize / 1073741824), 1) .' '. _DG_FILESIZE_GB;
    } elseif ($tfilesize >= 1048576) {
    $dgfilesize = number_format(($tfilesize / 1048576), 1) .' '. _DG_FILESIZE_MB;
    } elseif ($tfilesize >= 1024) {
    $dgfilesize = number_format(($tfilesize / 1024), 1) .' '. _DG_FILESIZE_KB;
    } elseif ($tfilesize >= 0) {
    $dgfilesize = $tfilesize .' '. _DG_FILESIZE_BYTES;
    } else {
    $dgfilesize = "0 bytes";
    }
    return $dgfilesize;
}

?>