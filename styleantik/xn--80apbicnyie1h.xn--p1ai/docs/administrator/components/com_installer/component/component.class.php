<?php
/**
* @version $Id: component.class.php 4994 2006-09-10 16:33:55Z friesengeist $
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
* @translator Oleg A. Myasnikov aka Sourpuss (sourpuss@mail.ru)
*/

// ������ ������� �������
defined( '_VALID_MOS' ) or die( '������ ��������' );

/**
* Component installer
* @package Joomla RE
* @subpackage Installer
*/
class mosInstallerComponent extends mosInstaller {
	var $i_componentadmindir 	= '';
	var $i_hasinstallfile 		= false;
	var $i_installfile 			= '';

	function componentAdminDir($p_dirname = null) {
		if(!is_null($p_dirname)) {
			$this->i_componentadmindir = mosPathName($p_dirname);
		}
		return $this->i_componentadmindir;
	}

	/**
	* Custom install method
	* @param boolean True if installing from directory
	*/
	function install($p_fromdir = null) {
		global $mosConfig_absolute_path,$database;

		if (!$this->preInstallCheck( $p_fromdir, 'component' )) {
			return false;
		}

		// aje moved down to here. ??  seemed to be some referencing problems
		$xmlDoc 	= $this->xmlDoc();
		$mosinstall = &$xmlDoc->documentElement;

		// Set some vars
		$e = &$mosinstall->getElementsByPath('name', 1);
		$this->elementName($e->getText());
		$this->elementDir( mosPathName( $mosConfig_absolute_path . "/components/"
			. strtolower("com_" . str_replace(" ","",$this->elementName())) . "/" )
		);
		$this->componentAdminDir( mosPathName( $mosConfig_absolute_path . "/administrator/components/"
			. strtolower( "com_" . str_replace( " ","",$this->elementName() ) ) )
		);

		if (file_exists($this->elementDir())) {
			$this->setError( 1, '������ ��������� ��� ���������� �������: "' . $this->elementDir() . '"' );
			return false;
		}

		if(!file_exists($this->elementDir()) && !mosMakePath($this->elementDir())) {
			$this->setError( 1, '���������� ������� ������� "' . $this->elementDir() . '"' );
			return false;
		}

		if(!file_exists($this->componentAdminDir()) && !mosMakePath($this->componentAdminDir())) {
			$this->setError( 1, '���������� ������� ������� "' . $this->componentAdminDir() . '"' );
			return false;
		}

		// Find files to copy
		if ($this->parseFiles( 'files' ) === false) {
			return false;
		}
		$this->parseFiles( 'images' );
		$this->parseFiles( 'administration/files','','',1 );
		$this->parseFiles( 'administration/images','','',1 );

		// Are there any SQL queries??
		$query_element = &$mosinstall->getElementsByPath('install/queries', 1);
		if (!is_null($query_element)) {
			$queries = $query_element->childNodes;
			foreach($queries as $query)
			{
				$database->setQuery( $query->getText());
				if (!$database->query())
				{
					$this->setError( 1, "������ SQL " . $database->stderr( true ) );
					return false;
				}
			}
		}

		// Is there an installfile
		$installfile_elemet = &$mosinstall->getElementsByPath('installfile', 1);

		if (!is_null($installfile_elemet)) {
			// check if parse files has already copied the install.component.php file (error in 3rd party xml's!)
			if (!file_exists($this->componentAdminDir().$installfile_elemet->getText())) {
				if(!$this->copyFiles($this->installDir(), $this->componentAdminDir(), array($installfile_elemet->getText())))  			{
					$this->setError( 1, '�� ���� ����������� PHP-���� ���������.' );
					return false;
				}
			}
			$this->hasInstallfile(true);
			$this->installFile($installfile_elemet->getText());
		}
		// Is there an uninstallfile
		$uninstallfile_elemet = &$mosinstall->getElementsByPath('uninstallfile',1);
		if(!is_null($uninstallfile_elemet)) {
			if (!file_exists($this->componentAdminDir().$uninstallfile_elemet->getText())) {
				if(!$this->copyFiles($this->installDir(), $this->componentAdminDir(), array($uninstallfile_elemet->getText()))) {
					$this->setError( 1, '�� ���� ����������� PHP-���� ��������' );
					return false;
				}
			}
		}

		// Is the menues ?
		$adminmenu_element = &$mosinstall->getElementsByPath('administration/menu',1);
		if(!is_null($adminmenu_element))
		{
			$adminsubmenu_element	= &$mosinstall->getElementsByPath('administration/submenu',1);
			$com_name				= strtolower("com_" . str_replace(" ","",$this->elementName()));
			$com_admin_menuname		= $adminmenu_element->getText();

			if(!is_null($adminsubmenu_element))
			{
				$com_admin_menu_id	= $this->createParentMenu($com_admin_menuname,$com_name);
				if($com_admin_menu_id === false)
				{
					return false;
				}
				$com_admin_submenus = $adminsubmenu_element->childNodes;

				$submenuordering = 0;
				foreach($com_admin_submenus as $admin_submenu)
				{
					$com = new mosComponent( $database );
					$com->name		= $admin_submenu->getText();
					$com->link		= '';
					$com->menuid	= 0;
					$com->parent	= $com_admin_menu_id;
					$com->iscore	= 0;

					if ( $admin_submenu->getAttribute("act"))
					{
						$com->admin_menu_link = "option=$com_name&act=" . $admin_submenu->getAttribute("act");
					}
					else if ($admin_submenu->getAttribute("task"))
					{
						$com->admin_menu_link = "option=$com_name&task=" . $admin_submenu->getAttribute("task");
					}
					else if ($admin_submenu->getAttribute("link"))
					{
						$com->admin_menu_link = $admin_submenu->getAttribute("link");
					}
					else
					{
						$com->admin_menu_link = "option=$com_name";
					}
					$com->admin_menu_alt = $admin_submenu->getText();
					$com->option = $com_name;
					$com->ordering = $submenuordering++;
					$com->admin_menu_img = "js/ThemeOffice/component.png";

					if (!$com->store())
					{
						$this->setError( 1, $database->stderr( true ) );
						return false;
					}
				}
			}
			else
			{
				$this->createParentMenu($com_admin_menuname,$com_name);
			}
		}

		$desc= '';
		if ($e = &$mosinstall->getElementsByPath( 'description', 1 )) {
			$desc = $this->elementName() . '<p>' . $e->getText() . '</p>';
		}
		$this->setError( 0, $desc );

		if ($this->hasInstallfile()) {
			if (is_file($this->componentAdminDir() . '/' . $this->installFile())) {
				require_once($this->componentAdminDir() . "/" . $this->installFile());
				$ret = com_install();
				if ($ret != '') {
					$this->setError( 0, $desc . $ret );
				}
			}
		}
		return $this->copySetupFile();
	}

	function createParentMenu($_menuname,$_comname, $_image = "js/ThemeOffice/component.png") {
		global $database;
		$db_name			= $_menuname;
		$db_link			= "option=$_comname";
		$db_menuid			= 0;
		$db_parent			= 0;
		$db_admin_menu_link	= "option=$_comname";
		$db_admin_menu_alt	= $_menuname;
		$db_option			= $_comname;
		$db_ordering		= 0;
		$db_admin_menu_img	= $_image;
		$db_iscore			= 0;
		$db_params			= '';

		$query = "INSERT INTO #__components"
		. "\n VALUES( '', " . $database->Quote( $db_name ) . ", " . $database->Quote( $db_link ) . ", " . (int) $db_menuid . ", " . (int) $db_parent . ", " . $database->Quote( $db_admin_menu_link ) . ", " . $database->Quote( $db_admin_menu_alt ) . ", " . $database->Quote( $db_option ) . ", " . (int) $db_ordering . ", " . $database->Quote( $db_admin_menu_img ) . ", " . (int) $db_iscore . ", '' )";
		$database->setQuery( $query );
		if(!$database->query())
		{
			$this->setError( 1, $database->stderr( true ) );
			return false;
		}
		$menuid = $database->insertid();
		return $menuid;
	}
	/**
	* Custom install method
	* @param int The id of the module
	* @param string The URL option
	* @param int The client id
	*/
	function uninstall( $cid, $option, $client=0 ) {
		global $database,$mosConfig_absolute_path;

		$uninstallret = '';

		$sql = "SELECT *"
		. "\n FROM #__components"
		. "\n WHERE id = " . (int) $cid
		;
		$database->setQuery($sql);

		$row = null;
		if (!$database->loadObject( $row )) {
			HTML_installer::showInstallMessage($database->stderr(true),'������ �������������',
				$this->returnTo( $option, 'component', $client ) );
			exit();
		}

		if ($row->iscore) {
			HTML_installer::showInstallMessage("��������� $row->name �������� ����������� ���� Joomla � �� ����� ���� ������.<br />�� ������ ����� ��� � ����������, ���� �� ������ ��� ������������", '��������  -  ������',
				$this->returnTo( $option, 'component', $client ) );
			exit();
		}

		// Delete entries in the DB
		$sql = "DELETE FROM #__components"
		. "\n WHERE parent = " . (int) $row->id
		;
		$database->setQuery($sql);
		if (!$database->query()) {
			HTML_installer::showInstallMessage($database->stderr(true),'��������  -  ������',
				$this->returnTo( $option, 'component', $client ) );
			exit();
		}

		$sql = "DELETE FROM #__components"
		. "\n WHERE id = " . (int) $row->id
		;
		$database->setQuery($sql);
		if (!$database->query()) {
			HTML_installer::showInstallMessage($database->stderr(true),'��������  -  ������',
				$this->returnTo( $option, 'component', $client ) );
			exit();
		}

		// Try to find the uninstall file
		$filesindir = mosReadDirectory( $mosConfig_absolute_path.'/administrator/components/'.$row->option, 'uninstall' );
		if (count( $filesindir ) > 0) {
			$uninstall_file = $filesindir[0];
			if(file_exists($mosConfig_absolute_path.'/administrator/components/'.$row->option .'/'.$uninstall_file))
			{
				require_once($mosConfig_absolute_path.'/administrator/components/'.$row->option .'/'.$uninstall_file );
				$uninstallret = com_uninstall();
			}
		}

		// Try to find the XML file
		$filesindir = mosReadDirectory( mosPathName( $mosConfig_absolute_path.'/administrator/components/'.$row->option ), '.xml$');
		if (count($filesindir) > 0) {
			$ismosinstall = false;
			$found = 0;
			foreach ($filesindir as $file) {
				$xmlDoc = new DOMIT_Lite_Document();
				$xmlDoc->resolveErrors( true );
				if (!$xmlDoc->loadXML( $mosConfig_absolute_path."/administrator/components/".$row->option . "/" . $file, false, true )) {
					return false;
				}
				$root = &$xmlDoc->documentElement;

				if ($root->getTagName() != 'mosinstall') {
					continue;
				}
				$found = 1;

				$query_element = &$root->getElementsbyPath( 'uninstall/queries', 1 );
				if(!is_null($query_element))
				{
					$queries = $query_element->childNodes;
					foreach($queries as $query)
					{
						$database->setQuery( $query->getText());
						if (!$database->query())
						{
							HTML_installer::showInstallMessage($database->stderr(true),'������ �������������',
								$this->returnTo( $option, 'component', $client ) );
							exit();
						}
					}
				}
			}
			if(!$found) {
				HTML_installer::showInstallMessage('������������ XML-����','������ �������������',
					$this->returnTo( $option, 'component', $client ) );
				exit();
			}
		} else {
			/*
			HTML_installer::showInstallMessage( 'XML-���� ��������� �� ������ '.$mosConfig_absolute_path.'/administrator/components/'.$row->option,
				'������ �������������', $option, 'component' );
			exit();
			*/
		}

		// Delete directories

		if (trim( $row->option )) {
			$result = 0;
			$path = mosPathName( $mosConfig_absolute_path.'/administrator/components/' . $row->option );
			if (is_dir( $path )) {
				$result |= deldir( $path );
			}
			$path = mosPathName( $mosConfig_absolute_path.'/components/'.$row->option );
			if (is_dir( $path )) {
				$result |= deldir( $path );
			}
			return $result;
		} else {
			HTML_installer::showInstallMessage( '���� ��������� ������ � ���������� ������� �����', '��������  -  ������', $option,'component');
			exit();
		}

		return $uninstallret;
	}
}
?>
