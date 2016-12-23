<?php
/**
* @version $Id: components.menu.html.php 6070 2006-12-20 02:09:09Z robs $
* @package Joomla RE
* @subpackage Menus
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
* Writes the edit form for new and existing content item
*
* A new record is defined when <var>$row</var> is passed with the <var>id</var>
* property set to 0.
* @package Joomla RE
* @subpackage Menus
*/
class components_menu_html {


	function edit( &$menu, &$components, &$lists, &$params, $option ) {
		global $mosConfig_live_site;

		if ( $menu->id ) {
			$title = '[ '. $lists['componentname'] .' ]';
		} else {
			$title = '';
		}
		?>
		<div id="overDiv" style="position:absolute; visibility:hidden; z-index:10000;"></div>
		<script language="javascript" type="text/javascript">
		function submitbutton(pressbutton) {
			var form = document.adminForm;
			if (pressbutton == 'cancel') {
				submitform( pressbutton );
				return;
			}

			var comp_links = new Array;
			<?php
			foreach ($components as $row) {
				?>
				comp_links[ <?php echo $row->value;?> ] = 'index.php?<?php echo addslashes( $row->link );?>';
				<?php
			}
			?>
			if ( form.id.value == 0 ) {
				var comp_id = getSelectedValue( 'adminForm', 'componentid' );
				form.link.value = comp_links[comp_id];
			} else {
				form.link.value = comp_links[form.componentid.value];
			}

			if ( trim( form.name.value ) == "" ){
				alert( "������ ������ ����� ���" );
			} else if (form.componentid.value == ""){
				alert( "�������� ���������" );
			} else {
				submitform( pressbutton );
			}
		}
		</script>

		<form action="index2.php" method="post" name="adminForm">

		<table class="adminheading">
		<tr>
			<th>
			<?php echo $menu->id ? '��������� -' : '���������� -';?> ����� ���� :: ��������� <small><small><?php echo $title; ?></small></small>
			</th>
		</tr>
		</table>

		<table width="100%">
		<tr valign="top">
			<td width="60%">
				<table class="adminform">
				<tr>
					<th colspan="2">
					������
					</th>
				</tr>
				<tr>
					<td width="10%" align="right">��������:</td>
					<td width="80%">
					<input class="inputbox" type="text" name="name" size="50" maxlength="100" value="<?php echo htmlspecialchars( $menu->name, ENT_QUOTES ); ?>" />
					</td>
				</tr>
				<tr>
					<td valign="top" align="right">���������:</td>
					<td>
					<?php echo $lists['componentid']; ?>
					</td>
				</tr>
				<tr>
					<td width="10%" align="right">URL:</td>
					<td width="80%">
                    <?php echo ampReplace($lists['link']); ?>
					</td>
				</tr>
				<tr>
					<td align="right">������������ ����� ����:</td>
					<td>
					<?php echo $lists['parent'];?>
					</td>
				</tr>

				<tr>
					<td valign="top" align="right">������� ������������:</td>
					<td>
					<?php echo $lists['ordering']; ?>
					</td>
				</tr>
				<tr>
					<td valign="top" align="right">������� �������:</td>
					<td>
					<?php echo $lists['access']; ?>
					</td>
				</tr>
				<tr>
					<td valign="top" align="right">������������ (�� �����):</td>
					<td>
					<?php echo $lists['published']; ?>
					</td>
				</tr>
				<tr>
					<td colspan="2">&nbsp;</td>
				</tr>
				</table>
			</td>
			<td width="40%">
				<table class="adminform">
				<tr>
					<th>
					���������
					</th>
				</tr>
				<tr>
					<td>
					<?php
					if ($menu->id) {
						echo $params->render();
					} else {
						?>
						<strong>������ ���������� ����� �������� ������ ����� ���������� ����� ������ ������ ����</strong>
						<?php
					}
					?>
					</td>
				</tr>
				</table>
			</td>
		</tr>
		</table>

		<input type="hidden" name="option" value="<?php echo $option;?>" />
		<input type="hidden" name="id" value="<?php echo $menu->id; ?>" />
		<input type="hidden" name="link" value="" />
		<input type="hidden" name="menutype" value="<?php echo $menu->menutype; ?>" />
		<input type="hidden" name="type" value="<?php echo $menu->type; ?>" />
		<input type="hidden" name="task" value="" />
		<input type="hidden" name="hidemainmenu" value="0" />
		</form>
		<script language="Javascript" src="<?php echo $mosConfig_live_site;?>/includes/js/overlib_mini.js"></script>
		<?php
	}
}
?>