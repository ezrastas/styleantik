<?php
/**
* @version $Id: mod_stats.php 85 2005-09-15 23:12:03Z eddieajau $
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

// ������ ������� �������
defined( '_VALID_MOS' ) or die( '������ ���������' );

$query = "SELECT menutype, COUNT(id) AS numitems"
. "\n FROM #__menu"
. "\n WHERE published = 1"
. "\n GROUP BY menutype"
;
$database->setQuery( $query );
$rows = $database->loadObjectList();
?>
<table class="adminlist">
	<tr>
		<th class="title" width="80%">
			����
		</th>
		<th class="title">�������</th>
	</tr>
<?php
foreach ($rows as $row) {
	$link = 'index2.php?option=com_menus&amp;menutype='. $row->menutype;
	?>
	<tr>
		<td>
			<a href="<?php echo $link; ?>">
				<?php echo $row->menutype;?></a>
		</td>
		<td style="text-align: center;">
			<?php echo $row->numitems;?>
		</td>
	</tr>
<?php
}
?>
<tr>
	<th colspan="2">
	</th>
</tr>
</table>