<?php
/**
* @version $Id: toolbar.banners.php 85 2005-09-15 23:12:03Z eddieajau $
* @package Joomla RE
* @subpackage Banners
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

require_once( $mainframe->getPath( 'toolbar_html' ) );

switch ($task) {
	case 'newclient':
	case 'editclient':
	case 'editclientA':
		TOOLBAR_bannerClient::_EDIT();
		break;

	case 'listclients':
		TOOLBAR_bannerClient::_DEFAULT();
		break;

	case 'new':
	case 'edit':
	case 'editA':
		TOOLBAR_banners::_EDIT();
		break;

	default:
		TOOLBAR_banners::_DEFAULT();
		break;
}
?>