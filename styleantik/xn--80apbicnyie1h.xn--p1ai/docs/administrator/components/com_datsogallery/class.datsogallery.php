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
	
	class mosdatsogallery extends mosDBTable {
	var $id=null;
	var $catid=null;
	var $imgtitle=null;
	var $imgauthor=null;
	var $imgtext=null;
	var $imgdate=null;
	var $imgcounter=null;
	var $imgvotes=null;
	var $imgvotesum=null;
	var $published=null;
    var $ordering=null;
	var $imgfilename=null;
	var $imgthumbname=null;
	var $imgoriginalname=null;
	var $checked_out=null;
	var $owner=null;
	var $approved=null;
	var $useruploaded=null;

	function mosdatsogallery( &$db ) {
	$this->mosDBTable( '#__datsogallery', 'id', $db );
	}
	}
	
	class mosCatgs extends mosDBTable {
	var $cid=null;
	var $name=null;
	var $description=null;
	var $parent=null;
	var $published=null;
	var $ordering=null;
	var $access=null;
	var $image=null;

	function mosCatgs( &$db ) {
	$this->mosDBTable( '#__datsogallery_catg', 'cid', $db );
	}
	
	function check() {
	$this->cid = intval( $this->cid );
	return true;
	}
	}
?>
