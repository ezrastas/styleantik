<?php
/**
* @version $Id: component_item_link.menu.php 85 2005-09-15 23:12:03Z eddieajau $
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

mosAdminMenus::menuItem( $type );

switch ( $task ) {
	case 'component_item_link':
		// this is the new item, ie, the same name as the menu `type`
		component_item_link_menu::edit( 0, $menutype, $option );
		break;

	case 'edit':
		component_item_link_menu::edit( $cid[0], $menutype, $option );
		break;

	case 'save':
	case 'apply':
		saveMenu( $option, $task );
		break;
}
?>