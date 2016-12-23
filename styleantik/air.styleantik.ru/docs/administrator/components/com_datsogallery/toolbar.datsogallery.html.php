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
	
	class menudatsogallery {
	
	function NEW_MENU() {
	mosMenuBar::startTable();
	mosMenuBar::save();
    mosMenuBar::spacer();
	mosMenuBar::cancel();
	mosMenuBar::endTable();
	}
	
	function NEW_CTG_MENU() {
	mosMenuBar::startTable();
	mosMenuBar::save('savecatg');
    mosMenuBar::spacer();
	mosMenuBar::cancel('cancelcatg');
	mosMenuBar::endTable();
	}
	
	function EDIT_MENU() {
	mosMenuBar::startTable();
	mosMenuBar::save('save', _DG_SAVEPIC_TB);
    mosMenuBar::spacer();
	mosMenuBar::cancel('cancel', _DG_CANCEL_TB);
	mosMenuBar::endTable();
	}
	
	function EDIT_CTG_MENU() {
	mosMenuBar::startTable();
	mosMenuBar::save('savecatg');
    mosMenuBar::spacer();
	mosMenuBar::cancel('cancelcatg');
	mosMenuBar::endTable();
	}
	
	function CTG_MENU() {
	mosMenuBar::startTable();
	mosMenuBar::publishList('publishcatg', _DG_PUBLISHCAT_TB);
    mosMenuBar::spacer();
	mosMenuBar::unpublishList('unpublishcatg', _DG_UNPUBLISHCAT_TB);
    mosMenuBar::spacer();
	mosMenuBar::addNew('newcatg', _DG_ADDNEWCAT_TB);
    mosMenuBar::spacer();
	mosMenuBar::editList('editcatg', _DG_EDITCAT_TB);
    mosMenuBar::spacer();
	mosMenuBar::deleteList('','removecatg', _DG_REMOVECAT_TB);
	mosMenuBar::endTable();
	}
	
	function DATSOMAIN_MENU() {
	mosMenuBar::startTable();
	mosMenuBar::publishList('publish', _DG_PUBLISHPIC_TB);
    mosMenuBar::spacer();
	mosMenuBar::unpublishList('unpublish', _DG_UNPUBLISHPIC_TB);
	mosMenuBar::spacer();
	mosMenuBar::custom('approvepic', 'upload.png', 'upload_f2.png', _DG_APPROVEPIC_TB);
	mosMenuBar::spacer();
	mosMenuBar::addNew('new', _DG_ADDNEWPIC_TB);
    mosMenuBar::spacer();
	mosMenuBar::editList('edit', _DG_EDITPIC_TB);
    mosMenuBar::spacer();
	mosMenuBar::deleteList('', 'remove', _DG_DELETEPIC_TB);
	mosMenuBar::endTable();
	}
	
	function CONFIG_MENU() {
	mosMenuBar::startTable();
	mosMenuBar::save('savesettings', _DG_SAVESETTINGS_TB);
    mosMenuBar::spacer();
    mosMenuBar::apply('savelaguage', _DG_LANG);
    mosMenuBar::spacer();
	mosMenuBar::cancel();
	mosMenuBar::endTable();
	}
	
	function COMMENTS_MENU() {
	mosMenuBar::startTable();
	mosMenuBar::publishList('publishcmt', _DG_PUBLISHCMT_TB);
    mosMenuBar::spacer();
	mosMenuBar::unpublishList('unpublishcmt', _DG_UNPUBLISHCMT_TB);
	mosMenuBar::spacer();
	mosMenuBar::deleteList('', 'removecmt', _DG_REMOVECMT_TB);
	mosMenuBar::endTable();
	}

	}
?>
