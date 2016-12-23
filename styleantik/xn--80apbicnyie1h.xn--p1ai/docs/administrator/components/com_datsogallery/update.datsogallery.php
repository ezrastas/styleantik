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

    global $database, $mosConfig_dbprefix, $mosConfig_db, $mosConfig_absolute_path, $mosConfig_lang;
	$tables = mysql_list_tables($mosConfig_db);
	$num_tables = @mysql_numrows($tables);
	$i = 0;
	$exist = 0;
	while($i < $num_tables) {
	$tablename = mysql_tablename($tables, $i);
	if ($tablename==$mosConfig_dbprefix.'datsogallery_votes') $exist=1;
	$i++;
	}
	if ($exist==0) {
	$database->setQuery("create table #__datsogallery_votes ( vpic int(11) not null default '0', vip varchar(255) not null default '', unique index (vpic,vip) ) TYPE=MyISAM;");
    if (!$database->query()) {
	echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
    }
	$database->setQuery("alter table #__datsogallery_catg add image varchar(150) default null after published;");
    if (!$database->query()) {
	echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
    }
	$database->setQuery("select a.id from #__components as a where a.name = 'DatsoGallery'");
	$dgp1 = $database->loadResult();
	$database->setQuery("insert into `#__components` values ('', 'Reset Votes', '', '', '$dgp1', 'option=com_datsogallery&act=resetvotes', 'Reset Votes', 'com_datsogallery', 6, 'js/ThemeOffice/component.png', 0, '');");
    if (!$database->query()) {
	echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
    }
    echo "<p><font color='#008000'><strong>"._DG_UPGRADE_SUCCESS."</strong></font>";
    }

    $database->setQuery("select name from #__components as a where a.name = 'Batch Import'");
	$dgp2 = $database->loadResult();
	if (!$dgp2){
    $database->setQuery( "alter table #__datsogallery_catg DROP PRIMARY KEY;");
	$database->query();
    $database->setQuery( "alter table #__datsogallery_catg ADD UNIQUE INDEX (vpic,vip);");
	$database->query();
    $database->setQuery( "alter table `#__datsogallery_votes` CHANGE `vip` `vip` VARCHAR( 255 ) NOT NULL;");
	$database->query();
	$database->setQuery( "select id from #__components where name='DatsoGallery'" );
	$id = $database->loadResult();
	@copy($mosConfig_absolute_path .'/components/com_datsogallery/images/datsogallery.png', $mosConfig_absolute_path .'/includes/js/ThemeOffice/datsogallery.png');
	$database->setQuery( "update #__components set admin_menu_img='js/ThemeOffice/datsogallery.png' where id='$id'");
	$database->query();
	@copy($mosConfig_absolute_path .'/components/com_datsogallery/images/dgpics.png', $mosConfig_absolute_path .'/includes/js/ThemeOffice/dgpics.png');
	$database->setQuery( "update #__components set admin_menu_img='js/ThemeOffice/dgpics.png' where parent='$id' AND name='Pictures'");
	$database->query();
	@copy($mosConfig_absolute_path .'/components/com_datsogallery/images/dgcategory.png', $mosConfig_absolute_path .'/includes/js/ThemeOffice/dgcategory.png');
	$database->setQuery( "update #__components set admin_menu_img='js/ThemeOffice/dgcategory.png' where parent='$id' AND name='Categories'");
	$database->query();
	@copy($mosConfig_absolute_path .'/components/com_datsogallery/images/dgcomment.png', $mosConfig_absolute_path .'/includes/js/ThemeOffice/dgcomment.png');
	$database->setQuery( "update #__components set admin_menu_img='js/ThemeOffice/dgcomment.png' where parent='$id' AND name='Comments'");
	$database->query();
	@copy($mosConfig_absolute_path .'/components/com_datsogallery/images/dgupload.png', $mosConfig_absolute_path .'/includes/js/ThemeOffice/dgupload.png');
	$database->setQuery( "update #__components set admin_menu_img='js/ThemeOffice/dgupload.png' where parent='$id' AND name='Normal Upload'");
	$database->query();
	@copy($mosConfig_absolute_path .'/components/com_datsogallery/images/dgzipupload.png', $mosConfig_absolute_path .'/includes/js/ThemeOffice/dgzipupload.png');
	$database->setQuery( "update #__components set admin_menu_img='js/ThemeOffice/dgzipupload.png' where parent='$id' AND name='Batch Upload'");
	$database->query();
	@copy($mosConfig_absolute_path .'/components/com_datsogallery/images/dgimport.png', $mosConfig_absolute_path .'/includes/js/ThemeOffice/dgimport.png');
	$database->setQuery( "insert into `#__components` VALUES ('', 'Batch Import', '', '', '$id', 'option=com_datsogallery&act=batchimport', 'Batch Import', 'com_datsogallery', 5, 'js/ThemeOffice/dgimport.png', 0, '');");
	$database->query();
	@copy($mosConfig_absolute_path .'/components/com_datsogallery/images/dgconfig.png', $mosConfig_absolute_path .'/includes/js/ThemeOffice/dgconfig.png');
	$database->setQuery( "update #__components set admin_menu_img='js/ThemeOffice/dgconfig.png' where parent='$id' AND name='Configuration'");
	$database->query();
	@copy($mosConfig_absolute_path .'/components/com_datsogallery/images/dgreset.png', $mosConfig_absolute_path .'/includes/js/ThemeOffice/dgreset.png');
	$database->setQuery( "update #__components set admin_menu_img='js/ThemeOffice/dgreset.png' where parent='$id' AND name='Reset Votes'");
	$database->query();
    if(!is_dir( $mosConfig_absolute_path.'/zipimport' )){
    mkdir($mosConfig_absolute_path.'/zipimport', 0777) && fopen($mosConfig_absolute_path.'/zipimport/index.html', 'a');
    echo "<p><font color='#008000'><strong>"._DG_UPGRADE_SUCCESS."</strong></font>";
    }
    }

    $database->setQuery("select name from #__components as a where a.name = 'Thumb Rebuild'");
	$dgp3 = $database->loadResult();
	if (!$dgp3){
    $database->setQuery( "select id from #__components where name='DatsoGallery'" );
	$id = $database->loadResult();
    $database->setQuery("alter table #__datsogallery_catg drop column `image`");
	$database->query();
    @copy($mosConfig_absolute_path .'/components/com_datsogallery/images/dgrebuild.png', $mosConfig_absolute_path .'/includes/js/ThemeOffice/dgrebuild.png');
	$database->setQuery( "insert into `#__components` values ('', 'Thumb Rebuild', '', '', '$id', 'option=com_datsogallery&act=rebuild', 'Thumb Rebuild', 'com_datsogallery', 8, 'js/ThemeOffice/dgrebuild.png', 0, '');");
	$database->query();
    $database->setQuery( "alter table `#__datsogallery` add `ordering` float unsigned not null default '0' after `published`");
	$database->query();
    echo "<p><font color='#008000'><strong>"._DG_UPGRADE_SUCCESS."</strong></font>";
    }
?>