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
	error_reporting(E_COMPILE_ERROR|E_ERROR|E_CORE_ERROR);
    function com_install() {
	global $database, $mosConfig_absolute_path, $mosConfig_lang;
    if(file_exists($mosConfig_absolute_path . '/components/com_datsogallery/language/' . $mosConfig_lang . '.php')){
	require($mosConfig_absolute_path . '/components/com_datsogallery/language/' . $mosConfig_lang . '.php');
	}else{
	require($mosConfig_absolute_path . '/components/com_datsogallery/language/english.php');
	}
    echo "<table width='60%' border='0' class='adminform'>\n";
    echo "<tr>\n";
    echo "<td align='left'><img src='components/com_datsogallery/images/datso_logo.gif'><br />\n";
    echo "<font class='small'>&copy; 2006-2007  by Andrey Datso<br />www.datso.fr</font><p/></td>\n";
    echo "</tr>\n";
    echo "<tr>\n";
    echo "<td background='#ECECFF' colspan='2'>\n";
    echo "<code>"._DG_INSTALL_PROCESS."<br /><br />";
    $iconpath = $mosConfig_absolute_path .'/includes/js/ThemeOffice';
    if(!is_writable($iconpath)){
    echo "<font color='red'>"._DG_INSTALL_ERROR.":</font> "._DG_COPY_TO_1."
    1. datsogallery.png<br />
    2. dgpics.png<br />
    3. dgcategory.png<br />
    4. dgcomment.png<br />
    5. dgupload.png<br />
    6. dgzipupload.png<br />
    7. dgimport.png<br />
    8. dgconfig.png<br />
    9. dgreset.png<br />
    10. dgrebuild.png<br />
    <br />"._DG_COPY_TO_2."<br /><font color='green'>$iconpath</font><br /><br />";}
    $database->setQuery( "SELECT id FROM #__components WHERE name='DatsoGallery'" );
	$id = $database->loadResult();
    if(!is_file($iconpath .'/datsogallery.png')){
    @copy($mosConfig_absolute_path .'/components/com_datsogallery/images/datsogallery.png', $iconpath .'/datsogallery.png');
    }
	$database->setQuery( "UPDATE #__components SET admin_menu_img='js/ThemeOffice/datsogallery.png' WHERE id='$id'");
	$result[1] = $database->query();
    if(!is_file($iconpath .'/dgpics.png')){
    @copy($mosConfig_absolute_path .'/components/com_datsogallery/images/dgpics.png', $iconpath .'/dgpics.png');
    }
	$database->setQuery( "UPDATE #__components SET admin_menu_img='js/ThemeOffice/dgpics.png' WHERE parent='$id' AND name='Pictures'");
	$result[2] = $database->query();
    if(!is_file($iconpath .'/dgcategory.png')){
    @copy($mosConfig_absolute_path .'/components/com_datsogallery/images/dgcategory.png', $iconpath .'/dgcategory.png');
    }
	$database->setQuery( "UPDATE #__components SET admin_menu_img='js/ThemeOffice/dgcategory.png' WHERE parent='$id' AND name='Categories'");
	$result[3] = $database->query();
    if(!is_file($iconpath .'/dgcomment.png')){
    @copy($mosConfig_absolute_path .'/components/com_datsogallery/images/dgcomment.png', $iconpath .'/dgcomment.png');
    }
	$database->setQuery( "UPDATE #__components SET admin_menu_img='js/ThemeOffice/dgcomment.png' WHERE parent='$id' AND name='Comments'");
	$result[4] = $database->query();
    if(!is_file($iconpath .'/dgupload.png')){
    @copy($mosConfig_absolute_path .'/components/com_datsogallery/images/dgupload.png', $iconpath .'/dgupload.png');
    }
	$database->setQuery( "UPDATE #__components SET admin_menu_img='js/ThemeOffice/dgupload.png' WHERE parent='$id' AND name='Normal Upload'");
	$result[5] = $database->query();
    if(!is_file($iconpath .'/dgzipupload.png')){
    @copy($mosConfig_absolute_path .'/components/com_datsogallery/images/dgzipupload.png', $iconpath .'/dgzipupload.png');
    }
	$database->setQuery( "UPDATE #__components SET admin_menu_img='js/ThemeOffice/dgzipupload.png' WHERE parent='$id' AND name='Batch Upload'");
	$result[6] = $database->query();
    if(!is_file($iconpath .'/dgimport.png')){
    @copy($mosConfig_absolute_path .'/components/com_datsogallery/images/dgimport.png', $iconpath .'/dgimport.png');
    }
    $database->setQuery( "UPDATE #__components SET admin_menu_img='js/ThemeOffice/dgimport.png' WHERE parent='$id' AND name='Batch Import'");
	$result[7] = $database->query();
    if(!is_file($iconpath .'/dgconfig.png')){
    @copy($mosConfig_absolute_path .'/components/com_datsogallery/images/dgconfig.png', $iconpath .'/dgconfig.png');
    }
	$database->setQuery( "UPDATE #__components SET admin_menu_img='js/ThemeOffice/dgconfig.png' WHERE parent='$id' AND name='Configuration'");
	$result[8] = $database->query();
    if(!is_file($iconpath .'/dgreset.png')){
    @copy($mosConfig_absolute_path .'/components/com_datsogallery/images/dgreset.png', $iconpath .'/dgreset.png');
    }
	$database->setQuery( "UPDATE #__components SET admin_menu_img='js/ThemeOffice/dgreset.png' WHERE parent='$id' AND name='Reset Votes'");
	$result[9] = $database->query();

    if(!is_file($iconpath .'/dgrebuild.png')){
    @copy($mosConfig_absolute_path .'/components/com_datsogallery/images/dgrebuild.png', $iconpath .'/dgrebuild.png');
    }
	$database->setQuery( "UPDATE #__components SET admin_menu_img='js/ThemeOffice/dgrebuild.png' WHERE parent='$id' AND name='Thumb Rebuild'");
	$result[10] = $database->query();

    $database->setQuery( "UPDATE #__components SET admin_menu_link='option=categories&section=com_datsogallery' WHERE admin_menu_link='option=com_datsogallery&act=categories'");
    foreach ($result as $i=>$res) {
    if ($res) {
    echo "<font color='green'>"._DG_INSTALL_FINISHED.":</font> "._DG_INSTALL_FINISHED_A." $i "._DG_INSTALL_FINISHED_B."<br />";
    }else{
    echo "<font color='red'>"._DG_INSTALL_ERROR."</font> "._DG_INSTALL_ERROR_A." $i "._DG_INSTALL_ERROR_B."<br />";
    }
    }
    if(!is_dir( $mosConfig_absolute_path.'/zipimport' )){
    @mkdir($mosConfig_absolute_path.'/zipimport', 0777) && @fopen($mosConfig_absolute_path.'/zipimport/index.html', 'a');
    echo "<font color='green'>"._DG_INSTALL_FINISHED.":</font> "._DG_INSTALL_FINISHED_C."<br />";
    }
	@chdir("../components/com_datsogallery");
	@mkdir("img_originals", 0777) && @fopen("img_originals/index.html", "a");
	@mkdir("img_pictures", 0777) && @fopen("img_pictures/index.html", "a");
	@mkdir("img_thumbnails", 0777) && @fopen("img_thumbnails/index.html", "a");
    echo "<font color='green'>"._DG_INSTALL_FINISHED.":</font> "._DG_INSTALL_FINISHED_D."<br />";
    echo "</code>\n";
    echo "</td>\n";
    echo "</tr>\n";
    echo "</table>\n";
}
?>
