<?php
/**
* @version $Id: mod_pathway.php 85 2005-09-15 23:12:03Z eddieajau $
* @package Joomla RE
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

// no direct access
defined( '_VALID_MOS' ) or die( '������ ��������' );

global $mosConfig_sitename;

if ($option != '') {
	$html = '';

	$html .= '<div class="pathway">';
	$html .= '<a href="'. $mosConfig_live_site .'/administrator/index2.php">';
	$html .= '<strong>' . $mosConfig_sitename . '</strong>';
	$html .= "</a>";

	if ($option != '') {
		$html .= " / ";
		// try to miss edit functions
		if ($task != '' && !eregi( 'edit', $task )) {
			$html .= "<a href=\"index2.php?option=$option\">$option</a>";
		} else {
			$html .= $option;
		}
	}

	if ($task != '') {
		$html .= " / $task";
	}
	$html .= '</div>';
	echo $html;
}
?>