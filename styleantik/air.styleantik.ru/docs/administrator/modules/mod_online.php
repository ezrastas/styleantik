<?php
/**
* @version $Id: mod_online.php 5026 2006-09-13 18:45:52Z friesengeist $
* @package Joomla RE
* @copyright ��������� ����� (C) 2005 Open Source Matters. ��� ����� ��������.
* @license �������� http://www.gnu.org/copyleft/gpl.html GNU/GPL, �������� LICENSE.php
* Joomla! - ��������� ����������� �����������. ��� ������ ����� ���� ��������
* � ������������ � ����������� ������������ ��������� GNU, ������� ��������
* � ���������� ��������������� � ������� ���������� ������, ����������������
* �������� ����������� ������������ ��������� GNU ��� ������ �������� ��������� 
* �������� ��� �������� � �������� �������� �����.
* ��� ��������� ������������ � ��������� �� ��������� �����, �������� ���� COPYRIGHT.php.
* 
* @localized (C) 2005 Joom.Ru
* @translator Sourpuss (sourpuss@mail.ru)
*/

// ������ ������� �������
defined( '_VALID_MOS' ) or die( '������ ��������' );

$session_id = stripslashes( mosGetParam( $_SESSION, 'session_id', '' ) );

// Get no. of users online not including current session
$query = "SELECT COUNT( session_id )"
. "\n FROM #__session"
. "\n WHERE session_id != " . $database->Quote( $session_id )
;
$database->setQuery($query);
$online_num = intval( $database->loadResult() );

echo $online_num . " <img src=\"images/users.png\" align=\"middle\" alt=\"������������� ������\" />";
?>