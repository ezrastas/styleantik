<?php
/**
* @version $Id: newsfeeds.class.php 85 2005-09-15 23:12:03Z eddieajau $
* @package Joomla RE
* @subpackage Newsfeeds
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

// ������ ������� �������
defined( '_VALID_MOS' ) or die( '������ ���������' );

/**
* @package Joomla RE
* @subpackage Newsfeeds
*/
class mosNewsFeed extends mosDBTable {
/** @var int Primary key */
	var $id					= null;
/** @var int */
	var $catid				= null;
/** @var string */
	var $name				= null;
/** @var string */
	var $link				= null;
/** @var string */
	var $filename			= null;
/** @var int */
	var $published			= null;
/** @var int */
	var $numarticles		= null;
/** @var int */
	var $cache_time			= null;
/** @var int */
	var $checked_out		= null;
/** @var time */
	var $checked_out_time	= null;
/** @var int */
	var $ordering			= null;

/**
* @param database A database connector object
*/
	function mosNewsFeed( &$db ) {
		$this->mosDBTable( '#__newsfeeds', 'id', $db );
	}
}
?>