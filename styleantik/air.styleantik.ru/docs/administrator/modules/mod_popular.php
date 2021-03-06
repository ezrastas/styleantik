<?php
/**
* @version $Id: mod_popular.php 5675 2006-11-07 23:12:11Z friesengeist $
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

$query = "SELECT a.hits, a.id, a.sectionid, a.title, a.created, u.name"
. "\n FROM #__content AS a"
. "\n LEFT JOIN #__users AS u ON u.id=a.created_by"
. "\n WHERE a.state != -2"
. "\n ORDER BY hits DESC"
;
$database->setQuery( $query, 0, 10 );
$rows = $database->loadObjectList();
?>

<table class="adminlist">
<tr>
	<th class="title">
		����� ���������������
	</th>
	<th class="title">
		�������
	</th>
	<th class="title">
		����������
	</th>
</tr>
<?php
foreach ($rows as $row) {
	if ( $row->sectionid == 0 ) {
		$link = 'index2.php?option=com_typedcontent&amp;task=edit&amp;hidemainmenu=1&amp;id='. $row->id;
	} else {
		$link = 'index2.php?option=com_content&amp;task=edit&amp;hidemainmenu=1&amp;id='. $row->id;
	}
	?>
	<tr>
		<td>
			<a href="<?php echo $link; ?>">
				<?php echo htmlspecialchars($row->title, ENT_QUOTES);?></a>
		</td>
		<td>
			<?php echo $row->created;?>
		</td>
		<td style="text-align: center">
			<?php echo $row->hits;?>
		</td>
	</tr>
	<?php
}
?>
<tr>
	<th colspan="3">
	</th>
</tr>
</table>