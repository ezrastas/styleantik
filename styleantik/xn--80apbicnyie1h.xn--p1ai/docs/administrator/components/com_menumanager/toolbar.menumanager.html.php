<?php
/**
* @version $Id: toolbar.menumanager.html.php 108 2005-09-16 17:39:25Z stingrey $
* @package Joomla RE
* @subpackage Menus
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
* @subpackage Menus
*/
class TOOLBAR_menumanager {
	/**
	* Draws the menu for the Menu Manager
	*/
	function _DEFAULT() {
		mosMenuBar::startTable();
		mosMenuBar::customX( 'copyconfirm', 'copy.png', 'copy_f2.png', '�����', true );
		mosMenuBar::spacer();
		mosMenuBar::customX( 'deleteconfirm', 'delete.png', 'delete_f2.png', '�������', true );
		mosMenuBar::spacer();
		mosMenuBar::editListX();
		mosMenuBar::spacer();
		mosMenuBar::addNewX();
		mosMenuBar::spacer();
		mosMenuBar::help( 'screen.menumanager' );
		mosMenuBar::endTable();
	}

	/**
	* Draws the menu to delete a menu
	*/
	function _DELETE() {
		mosMenuBar::startTable();
		mosMenuBar::cancel( );
		mosMenuBar::endTable();
	}

	/**
	* Draws the menu to create a New menu
	*/
	function _NEWMENU()	{
		mosMenuBar::startTable();
		mosMenuBar::custom( 'savemenu', 'save.png', 'save_f2.png', '���������', false );
		mosMenuBar::spacer();
		mosMenuBar::cancel();
		mosMenuBar::spacer();
		mosMenuBar::help( 'screen.menumanager.new' );
		mosMenuBar::endTable();
	}

	/**
	* Draws the menu to create a New menu
	*/
	function _COPYMENU()	{
		mosMenuBar::startTable();
		mosMenuBar::custom( 'copymenu', 'copy.png', 'copy_f2.png', '�����', false );
		mosMenuBar::spacer();
		mosMenuBar::cancel();
		mosMenuBar::spacer();
		mosMenuBar::help( 'screen.menumanager.copy' );
		mosMenuBar::endTable();
	}

}
?>