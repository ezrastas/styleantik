<?php
/**
* @version $Id: content_blog_category.menu.php 85 2005-09-15 23:12:03Z eddieajau $
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

switch ($task) {
	case 'content_blog_category':
		// this is the new item, ie, the same name as the menu `type`
		content_blog_category::edit( 0, $menutype, $option );
		break;

	case 'edit':
		content_blog_category::edit( $cid[0], $menutype, $option );
		break;

	case 'save':
	case 'apply':
		content_blog_category::saveMenu( $option, $task );
		break;
}
?>