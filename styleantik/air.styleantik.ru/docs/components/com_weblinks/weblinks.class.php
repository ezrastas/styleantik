<?php
/**
* @version $Id: weblinks.class.php 4060 2006-06-19 22:31:10Z stingrey $
* @package Joomla RE
* @subpackage Weblinks
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
*/

// no direct access
defined( '_VALID_MOS' ) or die( '������ ���������' );

/**
* Category database table class
* @package Joomla RE
* @subpackage Weblinks
*/
class mosWeblink extends mosDBTable {
	/** @var int Primary key */
	var $id					= null;
	/** @var int */
	var $catid				= null;
	/** @var int */
	var $sid				= null;
	/** @var string */
	var $title				= null;
	/** @var string */
	var $url				= null;
	/** @var string */
	var $description		= null;
	/** @var datetime */
	var $date				= null;
	/** @var int */
	var $hits				= null;
	/** @var int */
	var $published			= null;
	/** @var boolean */
	var $checked_out		= null;
	/** @var time */
	var $checked_out_time	= null;
	/** @var int */
	var $ordering			= null;
	/** @var int */
	var $archived			= null;
	/** @var int */
	var $approved			= null;
	/** @var string */
	var $params				= null;

	/**
	* @param database A database connector object
	*/
	function mosWeblink( &$db ) {
		$this->mosDBTable( '#__weblinks', 'id', $db );
	}
	/** overloaded check function */
	function check() {
		// filter malicious code
		$ignoreList = array( 'params' );
		$this->filter( $ignoreList );

		// specific filters
		$iFilter = new InputFilter();

		if ($iFilter->badAttributeValue( array( 'href', $this->url ))) {
			$this->_error = '������� ���������� URL';
			return false;
		}

		/** check for valid name */
		if (trim( $this->title ) == '') {
			$this->_error = _WEBLINK_TITLE;
			return false;
		}

		if ( !( eregi( 'http://', $this->url ) || ( eregi( 'https://',$this->url ) )  || ( eregi( 'ftp://',$this->url ) ) ) ) {
			$this->url = 'http://'.$this->url;
		}
		
		// SQL injection protection
		$this->catid = intval($this->catid);
		$this->title = $this->_db->getEscaped( $this->title );

		/** check for existing name */
		$query = "SELECT id"
		. "\n FROM #__weblinks "
		. "\n WHERE title = '$this->title'"
		. "\n AND catid = $this->catid"
		;
		$this->_db->setQuery( $query );

		$xid = intval( $this->_db->loadResult() );
		if ($xid && $xid != intval( $this->id )) {
			$this->_error = _WEBLINK_EXIST;
			return false;
		}
		return true;
	}
}
?>