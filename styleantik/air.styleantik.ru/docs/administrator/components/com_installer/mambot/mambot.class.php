<?php
/**
* @version $Id: mambot.class.php 4994 2006-09-10 16:33:55Z friesengeist $
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
* Module installer
* @package Joomla RE
* @subpackage Installer
*/
class mosInstallerMambot extends mosInstaller {
	/**
	* Custom install method
	* @param boolean True if installing from directory
	*/
	function install( $p_fromdir = null ) {
		global $mosConfig_absolute_path, $database;

		if (!$this->preInstallCheck( $p_fromdir, 'mambot' )) {
			return false;
		}

		$xmlDoc 	= $this->xmlDoc();
		$mosinstall =& $xmlDoc->documentElement;

		// Set some vars
		$e = &$mosinstall->getElementsByPath( 'name', 1 );
		$this->elementName( $e->getText() );

		$folder = $mosinstall->getAttribute( 'group' );
		$this->elementDir( mosPathName( $mosConfig_absolute_path . '/mambots/' . $folder ) );

		if(!file_exists($this->elementDir()) && !mosMakePath($this->elementDir())) {
			$this->setError( 1, '���������� ������� ������� "' . $this->elementDir() . '"' );
			return false;
		}

		if ($this->parseFiles( 'files', 'mambot', '��� ������, ���������� ��� �������' ) === false) {
			return false;
		}

		// Insert mambot in DB
		$query = "SELECT id"
		. "\n FROM #__mambots"
		. "\n WHERE element = " . $database->Quote( $this->elementName() )
		;
		$database->setQuery( $query );
		if (!$database->query()) {
			$this->setError( 1, '������ SQL: ' . $database->stderr( true ) );
			return false;
		}

		$id = $database->loadResult();

		if (!$id) {
			$row = new mosMambot( $database );
			$row->name 		= $this->elementName();
			$row->ordering 	= 0;
			$row->folder 	= $folder;
			$row->iscore 	= 0;
			$row->access 	= 0;
			$row->client_id = 0;
			$row->element 	= $this->elementSpecial();
			
			if ($folder == 'editors') {
				$row->published	= 1;
			}

			if (!$row->store()) {
				$this->setError( 1, '������ SQL: ' . $row->getError() );
				return false;
			}
		} else {
			$this->setError( 1, 'Mambot "' . $this->elementName() . '" already exists!' );
			return false;
		}
		if ($e = &$mosinstall->getElementsByPath( 'description', 1 )) {
			$this->setError( 0, $this->elementName() . '<p>' . $e->getText() . '</p>' );
		}

		return $this->copySetupFile('front');
	}
	/**
	* Custom install method
	* @param int The id of the module
	* @param string The URL option
	* @param int The client id
	*/
	function uninstall( $id, $option, $client=0 ) {
		global $database, $mosConfig_absolute_path;

		$id = intval( $id );
		$query = "SELECT name, folder, element, iscore"
		. "\n FROM #__mambots"
		. "\n WHERE id = " . (int) $id
		;
		$database->setQuery( $query );

		$row = null;
		$database->loadObject( $row );
		if ($database->getErrorNum()) {
			HTML_installer::showInstallMessage( $database->stderr(), '������ �������������',
			$this->returnTo( $option, 'mambot', $client ) );
			exit();
		}
		if ($row == null) {
			HTML_installer::showInstallMessage( '������������ id �������', '������ �������������',
			$this->returnTo( $option, 'mambot', $client ) );
			exit();
		}

		if (trim( $row->folder ) == '') {
			HTML_installer::showInstallMessage( '���� ����� ������, ���������� ������� �����', '������ �������������',
			$this->returnTo( $option, 'mambot', $client ) );
			exit();
		}

		$basepath 	= $mosConfig_absolute_path . '/mambots/' . $row->folder . '/';
		$xmlfile 	= $basepath . $row->element . '.xml';

		// see if there is an xml install file, must be same name as element
		if (file_exists( $xmlfile )) {
			$this->i_xmldoc = new DOMIT_Lite_Document();
			$this->i_xmldoc->resolveErrors( true );

			if ($this->i_xmldoc->loadXML( $xmlfile, false, true )) {
				$mosinstall =& $this->i_xmldoc->documentElement;
				// get the files element
				$files_element =& $mosinstall->getElementsByPath( 'files', 1 );
				if (!is_null( $files_element )) {
					$files = $files_element->childNodes;
					foreach ($files as $file) {
						// delete the files
						$filename = $file->getText();
						if (file_exists( $basepath . $filename )) {
							$parts = pathinfo( $filename );
							$subpath = $parts['dirname'];
							if ($subpath != '' && $subpath != '.' && $subpath != '..') {
								echo '<br />��������: '. $basepath . $subpath;
								$result = deldir(mosPathName( $basepath . $subpath . '/' ));
							} else {
								echo '<br />��������: '. $basepath . $filename;
								$result = unlink( mosPathName ($basepath . $filename, false));
							}
							echo intval( $result );
						}
					}

					// remove XML file from front
					echo "Deleting XML File: $xmlfile";
					@unlink(  mosPathName ($xmlfile, false ) );

					// define folders that should not be removed
					$sysFolders = array(
						'content',
						'search'
					);
					if (!in_array( $row->folder, $sysFolders )) {
						// delete the non-system folders if empty
						if (count( mosReadDirectory( $basepath ) ) < 1) {
							deldir( $basepath );
						}
					}
				}
			}
		}

		if ($row->iscore) {
			HTML_installer::showInstallMessage( $row->name .' - ������� ���� � �� ����� ���� ������.<br />���� �� �� ������ ��� ������������, �� �������� ��� ����������',
			'������ �������������', $this->returnTo( $option, 'mambot', $client ) );
			exit();
		}

		$query = "DELETE FROM #__mambots"
		. "\n WHERE id = " . (int) $id
		;
		$database->setQuery( $query );
		if (!$database->query()) {
			$msg = $database->stderr;
			die( $msg );
		}
		return true;
	}
}
?>