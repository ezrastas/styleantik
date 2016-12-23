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
    error_reporting(E_ALL ^ E_WARNING);
    global $database, $dgurl, $my;
    $ip = $_SERVER['REMOTE_ADDR'];
    $host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
    $browser = $_SERVER['HTTP_USER_AGENT'];
    if($my->username) {
    $vip="$my->username";
    }else{
    $vip = "$ip $host $browser";
    }
	$vpic = $id;
    $database->setQuery("SELECT * FROM #__datsogallery_votes WHERE vpic='$vpic'");
    $database->setQuery( @$query );
    $votes = NULL;
    if ( !( $database->loadObject( $votes ) ) ) {
    $query = "INSERT INTO #__datsogallery_votes VALUES ( $vpic, '$vip' )";
	$database->setQuery( $query );
    if ($database->query()!=1) {
    echo mosRedirect(sefRelToAbs("$dgurl&func=detail&catid=$catid&id=$id"),  _DG_ALREADY_VOTE);
    die();
    } else {
    $database->setQuery( "SELECT imgvotes, imgvotesum FROM #__datsogallery WHERE id = '$id'" );
    $result1=$database->query();
    list( $imgvotes, $imgvotesum )=mysql_fetch_row( $result1 );
    $imgvotes++;
    $imgvotesum=$imgvotesum + $imgvote;
    $database->setQuery( "UPDATE #__datsogallery SET imgvotes='$imgvotes', imgvotesum='$imgvotesum' WHERE id=$id" );
    $database->query();
    echo mosRedirect(sefRelToAbs("$dgurl&func=detail&catid=$catid&id=$id"),  _DG_VOTE_COUNTED);
    }
  }
?>
