<?php
/**
* @version $Id: toolbar.templates.php 3495 2006-05-15 01:44:00Z stingrey $
* @package Joomla RE
* @subpackage Templates
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

$client = strval( mosGetParam( $_REQUEST, 'client', '' ) );

switch ($task) {

	case 'view':
		TOOLBAR_templates::_VIEW();
		break;

	case 'edit_source':
		TOOLBAR_templates::_EDIT_SOURCE();
		break;

	case 'edit_css':
		TOOLBAR_templates::_EDIT_CSS();
		break;

	case 'assign':
		TOOLBAR_templates::_ASSIGN();
		break;

	case 'positions':
		TOOLBAR_templates::_POSITIONS();
		break;

	default:
		TOOLBAR_templates::_DEFAULT($client);
		break;
}
?>