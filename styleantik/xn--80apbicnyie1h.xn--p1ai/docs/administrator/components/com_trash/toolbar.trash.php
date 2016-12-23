<?php
/**
* @version $Id: toolbar.trash.php 85 2005-09-15 23:12:03Z eddieajau $
* @package Joomla RE
* @subpackage Trash
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

require_once( $mainframe->getPath( 'toolbar_html' ) );

switch ($task) {

	case 'settings':
		TOOLBAR_Trash::_SETTINGS();
		break;

	case 'restoreconfirm':
	case 'deleteconfirm':
		TOOLBAR_Trash::_DELETE();
		break;

	default:
		TOOLBAR_Trash::_DEFAULT();
		break;
}
?>