<?php
/**
* @version $Id: mambot.php 2924 2006-03-27 06:58:11Z akede $
* @package Joomla RE
* @subpackage Installer
* @localized ��������� ����� (C) 2005 Joom.Ru - ������� ��� Joomla!
* @copyright ��������� ����� (C) 2005 Open Source Matters. ��� ����� ��������.
* @license �������� http://www.gnu.org/copyleft/gpl.html GNU/GPL, �������� LICENSE.php
* Joomla! - ��������� ����������� �����������. ��� ������ ����� ���� ��������
* � ������������ � ����������� ������������ ��������� GNU, ������� ��������
* � ���������� ��������������� � ������� ���������� ������, ����������������
* �������� ����������� ������������ ��������� GNU ��� ������ �������� ��������� 
* �������� ��� �������� � �������� �������� �����.
* ��� ��������� ������������ � ��������� �� ��������� �����, �������� ���� COPYRIGHT.php.
* 
* @translator Oleg A. Myasnikov aka Sourpuss (sourpuss@mamboteam.ru)
* */

// ������ ������� �������
defined( '_VALID_MOS' ) or die( '������ ���������' );

// ensure user has access to this function
if ( !$acl->acl_check( 'administration', 'install', 'users', $my->usertype, $element . 's', 'all' ) ) {
	mosRedirect( 'index2.php', _NOT_AUTH );
}

require_once( $mainframe->getPath( 'installer_html', 'mambot' ) );

HTML_installer::showInstallForm( '��������� ����� ��������', $option, 'mambot', '', dirname(__FILE__) );
?>
<table class="content">
<?php
writableCell( 'media' );
writableCell( 'language' );
writableCell( 'mambots' );
writableCell( 'mambots/content' );
writableCell( 'mambots/search' );
writableCell( 'mambots/system' );?>
</table>
<?php
showInstalledMambots( $option );

function showInstalledMambots( $_option ) {
	global $database, $mosConfig_absolute_path;

	$query = "SELECT id, name, folder, element, client_id"
	. "\n FROM #__mambots"
	. "\n WHERE iscore = 0"
	. "\n ORDER BY folder, name"
	;
	$database->setQuery( $query );
	$rows = $database->loadObjectList();

	// path to mambot directory
	$mambotBaseDir	= mosPathName( mosPathName( $mosConfig_absolute_path ) . "mambots" );

	$id = 0;
	$n = count( $rows );
	for ($i = 0; $i < $n; $i++) {
		$row =& $rows[$i];
		// xml file for module
		$xmlfile = $mambotBaseDir. "/" .$row->folder . '/' . $row->element .".xml";

		if (file_exists( $xmlfile )) {
			$xmlDoc = new DOMIT_Lite_Document();
			$xmlDoc->resolveErrors( true );
			if (!$xmlDoc->loadXML( $xmlfile, false, true )) {
				continue;
			}

			$root = &$xmlDoc->documentElement;

			if ($root->getTagName() != 'mosinstall') {
				continue;
			}
			if ($root->getAttribute( "type" ) != "mambot") {
				continue;
			}

			$element 			= &$root->getElementsByPath('creationDate', 1);
			$row->creationdate 	= $element ? $element->getText() : '';

			$element 			= &$root->getElementsByPath('author', 1);
			$row->author 		= $element ? $element->getText() : '';

			$element 			= &$root->getElementsByPath('copyright', 1);
			$row->copyright 	= $element ? $element->getText() : '';

			$element 			= &$root->getElementsByPath('authorEmail', 1);
			$row->authorEmail 	= $element ? $element->getText() : '';

			$element 			= &$root->getElementsByPath('authorUrl', 1);
			$row->authorUrl 	= $element ? $element->getText() : '';

			$element 			= &$root->getElementsByPath('version', 1);
			$row->version 		= $element ? $element->getText() : '';
		}
	}

	HTML_mambot::showInstalledMambots($rows, $_option, $id, $xmlfile );
}
?>