<?php
/**
* @version $Id: cpanel.php 2704 2006-03-08 10:26:56Z stingrey $
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
* @translator Sourpuss (sourpuss@mamboteam.ru)
*/

/** �������� ��������� ����� ����� ������-���������� */
defined( '_VALID_MOS' ) or die( '������ ���������' );

?>
<table class="adminform">
<tr>
	<td width="55%" valign="top">
	   <?php mosLoadAdminModules( 'icon', 0 ); ?>
	</td>
	<td width="45%" valign="top">
		<div style="width: 100%;">
			<form action="index2.php" method="post" name="adminForm">
			<?php mosLoadAdminModules( 'cpanel', 1 ); ?>
			</form>
		</div>
	</td>
</tr>
</table>