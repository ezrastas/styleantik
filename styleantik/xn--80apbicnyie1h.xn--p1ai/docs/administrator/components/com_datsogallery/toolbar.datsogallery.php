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
	
	require_once( $mainframe->getPath( 'toolbar_html' ) );
	require_once( $mainframe->getPath( 'toolbar_default' ) );
	
	if ($act) $task = $act;
	
	switch ($task) {
	case "new":
	menudatsogallery::NEW_MENU();
	break;
	
	case "newcatg":
	menudatsogallery::NEW_CTG_MENU();
	break;
	
	case "showcatg":
	menudatsogallery::CTG_MENU();
	break;
	
	case "edit":
	menudatsogallery::EDIT_MENU();
	break;
	case "editcatg":
	menudatsogallery::EDIT_CTG_MENU();
	break;
	
	case "settings":
	menudatsogallery::CONFIG_MENU();
	break;
	
	case "upload":
	case "uploadhandler":
	case "batchupload":
	case "batchuploadhandler":
	case "batchimport":
	case "batchimporthandler":
    case "rebuild":
	break;
	
	case "comments":
	menudatsogallery::COMMENTS_MENU();
	break;
	
	default:
	menudatsogallery::DATSOMAIN_MENU();
	break;
	}
?>
