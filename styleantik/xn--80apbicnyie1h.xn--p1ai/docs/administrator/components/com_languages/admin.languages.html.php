<?php
/**
* @version $Id: admin.languages.html.php 6070 2006-12-20 02:09:09Z robs $
* @package Joomla RE
* @subpackage Languages
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
* @subpackage Languages
*/
class HTML_languages {

	function showLanguages( $cur_lang, &$rows, &$pageNav, $option ) {
		global $my;
		?>
		<form action="index2.php" method="post" name="adminForm">
		<table class="adminheading">
		<tr>
			<th class="langmanager">
			���������� ��������� �������� <small><small>[ ���� ]</small></small>
			</th>
		</tr>
		</table>

		<table class="adminlist">
		<tr>
			<th width="20">
			#
			</th>
			<th width="30">
			&nbsp;
			</th>
			<th width="25%" class="title">
			����
			</th>
			<th width="5%">
			�� �����
			</th>
			<th width="10%">
			������
			</th>
			<th width="10%">
			����
			</th>
			<th width="20%">
			�����
			</th>
			<th width="25%">
			E-mail ������
			</th>
		</tr>
		<?php
		$k = 0;
		for ($i=0, $n=count( $rows ); $i < $n; $i++) {
			$row = &$rows[$i];
			?>
			<tr class="<?php echo "row$k"; ?>">
				<td width="20"><?php echo $pageNav->rowNumber( $i ); ?></td>
				<td width="20">
				<input type="radio" id="cb<?php echo $i;?>" name="cid[]" value="<?php echo $row->language; ?>" onClick="isChecked(this.checked);" />
				</td>
				<td width="25%">
				<a href="#edit" onclick="hideMainMenu();return listItemTask('cb<?php echo $i;?>','edit_source')"><?php echo $row->name;?></a></td>
				<td width="5%" align="center">
				<?php
				if ($row->published == 1) {	 ?>
					<img src="images/tick.png" alt="������������"/>
					<?php
				} else {
					?>
					&nbsp;
				<?php
				}
				?>
				</td>
				<td align=center>
				<?php echo $row->version; ?>
				</td>
				<td align=center>
				<?php echo $row->creationdate; ?>
				</td>
				<td align=center>
				<?php echo $row->author; ?>
				</td>
				<td align=center>
				<?php echo $row->authorEmail; ?>
				</td>
			</tr>
		<?php
		}
		?>
		</table>
		<?php echo $pageNav->getListFooter(); ?>

		<input type="hidden" name="option" value="<?php echo $option;?>" />
		<input type="hidden" name="task" value="" />
		<input type="hidden" name="hidemainmenu" value="0" />
		<input type="hidden" name="boxchecked" value="0" />
		</form>
		<?php
	}

	function editLanguageSource( $language, &$content, $option ) {
		global $mosConfig_absolute_path;
		$language_path = $mosConfig_absolute_path . "/language/" . $language . ".php";
		?>
		<form action="index2.php" method="post" name="adminForm">
		<table cellpadding="1" cellspacing="1" border="0" width="100%">
		<tr>
			<td width="270"><table class="adminheading"><tr><th class="langmanager">�������� �����</th></tr></table></td>
			<td width="240">
				<span class="componentheading"><?php echo $language; ?>.php is :
				<b><?php echo is_writable($language_path) ? '<font color="green"> �������� ��� ������</font>' : '<font color="red"> ���������� ��� ������</font>' ?></b>
				</span>
			</td>
<?php
			if (mosIsChmodable($language_path)) {
				if (is_writable($language_path)) {
?>
			<td>
				<input type="checkbox" id="disable_write" name="disable_write" value="1"/>
				<label for="disable_write">������� ����������� ��� ������ ����� ����������</label>
			</td>
<?php
				} else {
?>
			<td>
				<input type="checkbox" id="enable_write" name="enable_write" value="1"/>
				<label for="enable_write">��� ���������� ������������ ������ �� ������</label>
			</td>
<?php
				} // if
			} // if
?>
		</tr>
		</table>
		<table class="adminform">
			<tr><th><?php echo $language_path; ?></th></tr>
			<tr><td><textarea style="width:100%" cols="110" rows="25" name="filecontent" class="inputbox"><?php echo $content; ?></textarea></td></tr>
		</table>
		<input type="hidden" name="language" value="<?php echo $language; ?>" />
		<input type="hidden" name="option" value="<?php echo $option;?>" />
		<input type="hidden" name="task" value="" />
		</form>
	<?php
	}

}
?>