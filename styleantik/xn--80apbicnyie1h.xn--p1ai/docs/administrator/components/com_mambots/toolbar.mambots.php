<?php
/**
* @version $Id: toolbar.mambots.php 85 2005-09-15 23:12:03Z eddieajau $
* @package Joomla RE
* @subpackage Mambots
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

	case 'new':
	case 'edit':
	case 'editA':
		TOOLBAR_modules::_EDIT();
		break;

	default:
		TOOLBAR_modules::_DEFAULT();
		break;
}
?>