<?php
/**
* @version $Id: toolbar.media.html.php 181 2005-09-19 01:01:12Z stingrey $
* @package Joomla RE
* @subpackage Massmail
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
* @subpackage Massmail
*/
class TOOLBAR_media {
	/**
	* Draws the menu for a New Media
	*/

	function _DEFAULT() {
		mosMenuBar::startTable();
		mosMenuBar::custom('upload','upload.png','upload_f2.png','���������',false);
		mosMenuBar::spacer();
		mosMenuBar::custom('newdir','new.png','new_f2.png','�������' ,false);
		mosMenuBar::spacer();
		mosMenuBar::cancel();
		mosMenuBar::spacer();
		mosMenuBar::help( 'screen.mediamanager' );
		mosMenuBar::endTable();
	}
}
?>