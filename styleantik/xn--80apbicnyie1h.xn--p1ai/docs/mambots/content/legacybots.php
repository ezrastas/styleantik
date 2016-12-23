<?php
/**
* @version $Id: legacybots.php 2695 2006-03-07 20:26:09Z stingrey $
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

$_MAMBOTS->registerFunction( 'onPrepareContent', 'botLegacyBots' );

/**
* ��������� ����� �������������� ����� � �������� /mambots
*
* ���� ���� ����� ���� **��������� ������ ** ���� �� ��� ������������ ��������
* @param object - ������ �����������
* @param int - ��������� ����� ����������
* @param int - ����� ��������
*/
function botLegacyBots( $published, &$row, &$params, $page=0 ) {
	global $mosConfig_absolute_path;

	// ��������, ����������� �� ������
	if ( !$published ) {
		return true;
	}

	// ������� ������������ �����
	$bots = mosReadDirectory( "$mosConfig_absolute_path/mambots", "\.php$" );
	sort( $bots );
	foreach ($bots as $bot) {
		require $mosConfig_absolute_path ."/mambots/$bot";
	}
}
?>