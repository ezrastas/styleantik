<?php
	/***************************************************\
	**   DatsoGallery - A Joomla! Gallery Component    **
	**   Copyright (C) 2006-2007  by Andrey Datso      **
	**   Version    : 1.3.9.1                          **
	**   Homepage   : http://www.datso.fr              **
	**   License    : Copyright, don't distribute      **
    **   Based on   : Akogallery 2.1 by Arthur Konze   **
	\***************************************************/

    defined ('_VALID_MOS') or die( 'Direct Access to this location is not allowed.' );

    if (isset($_POST['submit']) && $ad_security > 0 && $gid <= 2){
    $cryptinstall="./components/com_datsogallery/crypt/cryptographp.fct.php";
    require $cryptinstall;
    if (chk_crypt($_POST['code'])) {
    $cmtip=getenv( 'REMOTE_ADDR' );
    $cmtdate=time();
    $cmttext=strip_tags( $cmttext );
    $cmtname=strip_tags( $cmtname );
    $database->setQuery( "INSERT INTO #__datsogallery_comments VALUES ('', '$id', '$cmtip', '$cmtname', '$cmttext', '$cmtdate', '1')" );
    $database->query();
    mosRedirect(sefRelToAbs("$dgurl&func=detail&catid=$catid&id=$id"),  _DG_COMM_SAVED);
    } else {
    mosRedirect(sefRelToAbs("$dgurl&func=detail&catid=$catid&id=$id"),  _DG_SECURITY_NOT_VALUE);
    }
    } else if (isset($_POST['submit']) && $gid <= 2){
    $cmtip=getenv( 'REMOTE_ADDR' );
    $cmtdate=time();
    $cmttext=strip_tags( $cmttext );
    $cmtname=strip_tags( $cmtname );
    $database->setQuery( "INSERT INTO #__datsogallery_comments VALUES ('', '$id', '$cmtip', '$cmtname', '$cmttext', '$cmtdate', '1')" );
    $database->query();
    mosRedirect(sefRelToAbs("$dgurl&func=detail&catid=$catid&id=$id"),  _DG_COMM_SAVED);
    } else {
    mosRedirect(sefRelToAbs("$dgurl"), "SPAM");
    }
?>
