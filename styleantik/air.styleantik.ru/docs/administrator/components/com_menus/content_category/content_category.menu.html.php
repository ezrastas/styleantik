<?php
/**
* @version $Id: content_category.menu.html.php 6070 2006-12-20 02:09:09Z robs $
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
* @translator Oleg A. Myasnikov aka Sourpuss (sourpuss@mail.ru)
*/

// ������ ������� �������
defined( '_VALID_MOS' ) or die( '������ ��������' );

/**
* Writes the edit form for new and existing content item
*
* A new record is defined when <var>$row</var> is passed with the <var>id</var>
* property set to 0.
* @package Joomla RE
* @subpackage Menus
*/
class content_category_menu_html {

	function editCategory( &$menu, &$lists, &$params, $option ) {
		global $mosConfig_live_site;
		?>
		<div id="overDiv" style="position:absolute; visibility:hidden; z-index:10000;"></div>
		<script language="javascript" type="text/javascript">
		function submitbutton(pressbutton) {
			if ( pressbutton == 'cancel' ) {
				submitform( pressbutton );
				return;
			}
			var form = document.adminForm;
			<?php
			if ( !$menu->id ) {
				?>
				if ( getSelectedValue( 'adminForm', 'componentid' ) < 1 ) {
					alert( '�� ������ ������� ���������' );
					return;
				}
				sectcat = getSelectedText( 'adminForm', 'componentid' );
				sectcats = sectcat.split('/');
				section = getSelectedOption( 'adminForm', 'componentid' );

				form.link.value = "index.php?option=com_content&task=category&sectionid=" + section.id + "&id=" + form.componentid.value;
				if ( form.name.value == '' ) {
					form.name.value = sectcats[1];
				}
				submitform( pressbutton );
				<?php
			} else {
				?>
				if ( form.name.value == '' ) {
					alert( '���� ����� ���� ������ ����� ��������' );
				} else {
					submitform( pressbutton );
				}
				<?php
			}
			?>
		}
		</script>
		<form action="index2.php" method="post" name="adminForm">
		<table class="adminheading">
		<tr>
			<th>
			<?php echo $menu->id ? '��������� -' : '���������� -';?> ����� ���� :: ������� - ���������� ���������
			</th>
		</tr>
		</table>

		<table width="100%">
		<tr valign="top">
			<td width="60%">
				<table class="adminform">
				<tr>
					<th colspan="3">
					������
					</th>
				</tr>
				<tr>
					<td width="20%" align="right" valign="top">
					��������:
					</td>
					<td width="200px">
					<input type="text" name="name" size="30" maxlength="100" class="inputbox" value="<?php echo htmlspecialchars( $menu->name, ENT_QUOTES ); ?>"/>
					</td>
					<td>
					<?php
					if ( !$menu->id ) {
						echo mosToolTip( '���� ���� ����� ��������� ������, �� ������������� ����� ������������ �������� ���������' );
					}
					?>
					</td>
				</tr>
				<tr>
					<td width="20%" align="right" valign="top">
					���������:
					</td>
					<td colspan="2">
					<?php echo $lists['componentid']; ?>
					</td>
				</tr>
				<tr>
					<td align="right">
					URL:
					</td>
					<td colspan="2">
                    <?php echo ampReplace($lists['link']); ?>
					</td>
				</tr>
				<tr>
					<td align="right">
					������������ ����� ����:
					</td>
					<td colspan="2">
					<?php echo $lists['parent'];?>
					</td>
				</tr>
				<tr>
					<td valign="top" align="right">
					������� ������������:
					</td>
					<td colspan="2">
					<?php echo $lists['ordering']; ?>
					</td>
				</tr>
				<tr>
					<td valign="top" align="right">
					������� �������:
					</td>
					<td colspan="2">
					<?php echo $lists['access']; ?>
					</td>
				</tr>
				<tr>
					<td valign="top" align="right">
					������������ (�� �����):
					</td>
					<td colspan="2">
					<?php echo $lists['published']; ?>
					</td>
				</tr>
				<tr>
					<td colspan="3">&nbsp;</td>
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
					<?php echo $params->render();?>
					</td>
				</tr>
				</table>
			</td>
		</tr>
		</table>

		<input type="hidden" name="option" value="<?php echo $option;?>" />
		<input type="hidden" name="id" value="<?php echo $menu->id; ?>" />
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