<?php
/**
* @version $Id: toolbar.admin.html.php 85 2005-09-15 23:12:03Z eddieajau $
* @package Joomla RE
* @subpackage Admin
* @copyright ��������� ����� (C) 2005 Open Source Matters. ��� ����� ��������. 
* @localized ��������� ����� (C) 2005 Joom.Ru - ������� ��� Joomla! ��� ����� ��������.
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
* @subpackage Admin
*/
class TOOLBAR_admin {
	function _SYSINFO() {
		mosMenuBar::startTable();
		mosMenuBar::help( 'screen.system.info' );
		mosMenuBar::endTable();
	}
	/**
	* Draws the menu for a New category
	*/
	function _CPANEL() {
		mosMenuBar::startTable();
		mosMenuBar::help( 'screen.cpanel' );
		mosMenuBar::endTable();
	}
	/**
	* Draws the menu for a New category
	*/
	function _DEFAULT() {
		mosMenuBar::startTable();
		//mosMenuBar::help( 'screen.cpanel' );
		mosMenuBar::endTable();
	}
}
?>