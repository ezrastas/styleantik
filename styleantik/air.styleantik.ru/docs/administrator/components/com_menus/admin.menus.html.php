<?php
/**
* @version $Id: admin.menus.html.php 5993 2006-12-13 00:24:58Z friesengeist $
* @package Joomla RE
* @subpackage Menus
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

/**
* @package Joomla
* @subpackage Menus
*/
class HTML_menusections {

	function showMenusections( $rows, $pageNav, $search, $levellist, $menutype, $option ) {
		global $my;

		mosCommonHTML::loadOverlib();
		?>
		<form action="index2.php" method="post" name="adminForm">
		<table class="adminheading">
		<tr>
			<th class="menus">
			���������� ���� <small><small>[ <?php echo $menutype;?> ]</small></small>
			</th>
			<td nowrap="nowrap">
      ����������� �������
			</td>
			<td>
			<?php echo $levellist;?>
			</td>
			<td>
			������:
			</td>
			<td>
			<input type="text" name="search" value="<?php echo htmlspecialchars( $search );?>" class="inputbox" onChange="document.adminForm.submit();" />
			</td>
		</tr>
		<?php
		if ( $menutype == 'mainmenu' ) {
			?>
			<tr>
				<td align="right" nowrap="nowrap" style="color: red; font-weight: normal;" colspan="5">
				<?php echo _MAINMENU_DEL; ?>
				<br/>
				<span style="color: black;">
				<?php echo _MAINMENU_HOME; ?>
				</span>
				</td>
			</tr>
			<?php
		}
		?>
		</table>

		<table class="adminlist">
		<tr>
			<th width="20">
			#
			</th>
			<th width="20">
			<input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count($rows); ?>);" />
			</th>
			<th class="title" width="40%">
			����� ����
			</th>
			<th width="5%">
			�������
			</th>
			<th colspan="2" width="5%">
			����������
			</th>
			<th width="2%">
      �������
			</th>
			<th width="1%">
			<a href="javascript: saveorder( <?php echo count( $rows )-1; ?> )"><img src="images/filesave.png" border="0" width="16" height="16" alt="��������� �������" /></a>
			</th>
			<th width="10%">
			������
			</th>
			<th>
			Itemid
			</th>
			<th width="35%" align="left">
      ���
			</th>
			<th>
			CID
			</th>
		</tr>
		<?php
		$k = 0;
		$i = 0;
		$n = count( $rows );
		foreach ($rows as $row) {
			mosMakeHtmlSafe( $row, ENT_QUOTES, 'treename' );
			$access 	= mosCommonHTML::AccessProcessing( $row, $i );
			$checked 	= mosCommonHTML::CheckedOutProcessing( $row, $i );
			$published 	= mosCommonHTML::PublishedProcessing( $row, $i );
			?>
			<tr class="<?php echo "row$k"; ?>">
				<td>
				<?php echo $i + 1 + $pageNav->limitstart;?>
				</td>
				<td>
				<?php echo $checked; ?>
				</td>
				<td nowrap="nowrap">
				<?php
				if ( $row->checked_out && ( $row->checked_out != $my->id ) ) {
					echo $row->treename;
				} else {
					$link = 'index2.php?option=com_menus&menutype='. $row->menutype .'&task=edit&id='. $row->id . '&hidemainmenu=1';
					?>
					<a href="<?php echo $link; ?>">
					<?php echo $row->treename; ?>
					</a>
					<?php
				}
				?>
				</td>
				<td width="10%" align="center">
				<?php echo $published;?>
				</td>
				<td>
				<?php echo $pageNav->orderUpIcon( $i ); ?>
				</td>
				<td>
				<?php echo $pageNav->orderDownIcon( $i, $n ); ?>
				</td>
				<td align="center" colspan="2">
				<input type="text" name="order[]" size="5" value="<?php echo $row->ordering; ?>" class="text_area" style="text-align: center" />
				</td>
				<td align="center">
				<?php echo $access;?>
				</td>
				<td align="center">
				<?php echo $row->id; ?>
				</td>
				<td align="left">
					<span class="editlinktip">
						<?php
						echo mosToolTip( $row->descrip, '', 280, 'tooltip.png', $row->type, $row->edit );
						?>
					</span>
				</td>
				<td align="center">
				<?php echo $row->componentid; ?>
				</td>
			</tr>
			<?php
			$k = 1 - $k;
			$i++;
		}
		?>
		</table>

		<?php echo $pageNav->getListFooter(); ?>

		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="menutype" value="<?php echo $menutype; ?>" />
		<input type="hidden" name="task" value="" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="hidemainmenu" value="0" />
		</form>
		<?php
	}


	/**
	* Displays a selection list for menu item types
	*/
	function addMenuItem( &$cid, $menutype, $option, $types_content, $types_component, $types_link, $types_other, $types_submit ) {

		mosCommonHTML::loadOverlib();
		?>
		<style type="text/css">
		fieldset {
			border: 1px solid #777;
		}
		legend {
			font-weight: bold;
		}
		</style>

		<form action="index2.php" method="post" name="adminForm">
		<table class="adminheading">
		<tr>
			<th class="menus">
			����� ����� ����
			</th>
			<td valign="bottom" nowrap="nowrap" style="color: red;">
			<?php //echo _MENU_GROUP; ?>
			* �������� ��������, ��� ��������� ������ ���� ������ � ��������� �����, ������ ��� ��������� � ������ ���� ����.
			</td>
		</tr>
		</table>

		<table class="adminform">
		<tr>
			<td width="50%" valign="top">
				<fieldset>
				<legend>����������</legend>
					<table class="adminform">
					<?php
					$k 		= 0;
					$count 	= count( $types_content );
						for ( $i=0; $i < $count; $i++ ) {
						$row = &$types_content[$i];

						$link = 'index2.php?option=com_menus&menutype='. $menutype .'&task=edit&type='. $row->type .'&hidemainmenu=1';
						
						HTML_menusections::htmlOptions( $row, $link, $k, $i );
						
						$k = 1 - $k;
					}
					?>
					</table>
				</fieldset>
				<fieldset>
				<legend>������</legend>
					<table class="adminform">
					<?php
					$k 		= 0;
					$count 	= count( $types_other );
						for ( $i=0; $i < $count; $i++ ) {
						$row = &$types_other[$i];

						$link = 'index2.php?option=com_menus&menutype='. $menutype .'&task=edit&type='. $row->type.'&hidemainmenu=1';
						
						HTML_menusections::htmlOptions( $row, $link, $k, $i );
							
						$k = 1 - $k;
					}
					?>
					</table>
				</fieldset>
				<fieldset>
					<legend>��������</legend>
					<table class="adminform">
					<?php
					$k 		= 0;
					$count 	= count( $types_submit );
						for ( $i=0; $i < $count; $i++ ) {
						$row = &$types_submit[$i];

						$link = 'index2.php?option=com_menus&menutype='. $menutype .'&task=edit&type='. $row->type.'&hidemainmenu=1';
						
						HTML_menusections::htmlOptions( $row, $link, $k, $i );
							
						$k = 1 - $k;
					}
					?>
					</table>
				</fieldset>
			</td>
			<td width="50%" valign="top">
				<fieldset>
				<legend>����������</legend>
					<table class="adminform">
					<?php
					$k 		= 0;
					$count 	= count( $types_component );
						for ( $i=0; $i < $count; $i++ ) {
						$row = &$types_component[$i];

						$link = 'index2.php?option=com_menus&menutype='. $menutype .'&task=edit&type='. $row->type.'&hidemainmenu=1';
						
						HTML_menusections::htmlOptions( $row, $link, $k, $i );
							
						$k = 1 - $k;
					}
					?>
					</table>
				</fieldset>
				<fieldset>
				<legend>������</legend>
					<table class="adminform">
					<?php
					$k 		= 0;
					$count 	= count( $types_link );
						for ( $i=0; $i < $count; $i++ ) {
						$row = &$types_link[$i];

						$link = 'index2.php?option=com_menus&menutype='. $menutype .'&task=edit&type='. $row->type.'&hidemainmenu=1';
						
						HTML_menusections::htmlOptions( $row, $link, $k, $i );
							
						$k = 1 - $k;
					}
					?>
					</table>
				</fieldset>
			</td>
		</tr>
		</table>

		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="menutype" value="<?php echo $menutype; ?>" />
		<input type="hidden" name="task" value="edit" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="hidemainmenu" value="0" />
		</form>
		<?php
	}

	function htmlOptions( &$row, $link, $k, $i ) {
		?>
		<tr class="<?php echo "row$k"; ?>">
			<td width="20">
			</td>
			<td style="height: 30px;">
				<span class="editlinktip" style="cursor: pointer;">
						<?php
						echo mosToolTip( $row->descrip, $row->name, 250, '', $row->name, $link, 1 );
						?>
				</span>
			</td>
			<td width="20">
				<input type="radio" id="cb<?php echo $i;?>" name="type" value="<?php echo $row->type; ?>" onClick="isChecked(this.checked);" />
			</td>
			<td width="20">
			</td>
		</tr>
		<?php		
	}

	/**
	* Form to select Menu to move menu item(s) to
	*/
	function moveMenu( $option, $cid, $MenuList, $items, $menutype  ) {
		?>
		<form action="index2.php" method="post" name="adminForm">
		<br />
		<table class="adminheading">
		<tr>
			<th>
      ����������� ������� ����
			</th>
		</tr>
		</table>

		<br />
		<table class="adminform">
		<tr>
			<td width="3%"></td>
			<td align="left" valign="top" width="30%">
			<strong>����������� � ����:</strong>
			<br />
			<?php echo $MenuList ?>
			<br /><br />
			</td>
			<td align="left" valign="top">
			<strong>
			������������ ������ ����:
			</strong>
			<br />
			<ol>
			<?php
			foreach ( $items as $item ) {
				?>
				<li>
				<?php echo $item->name; ?>
				</li>
				<?php
			}
			?>
			</ol>
			</td>
		</tr>
		</table>
		<br /><br />

		<input type="hidden" name="option" value="<?php echo $option;?>" />
		<input type="hidden" name="boxchecked" value="1" />
		<input type="hidden" name="task" value="" />
		<input type="hidden" name="menutype" value="<?php echo $menutype; ?>" />
		<?php
		foreach ( $cid as $id ) {
			echo "\n <input type=\"hidden\" name=\"cid[]\" value=\"$id\" />";
		}
		?>
		</form>
		<?php
	}


	/**
	* Form to select Menu to copy menu item(s) to
	*/
	function copyMenu( $option, $cid, $MenuList, $items, $menutype  ) {
		?>
		<form action="index2.php" method="post" name="adminForm">
		<br />
		<table class="adminheading">
		<tr>
			<th>
			����������� ������� ����
			</th>
		</tr>
		</table>

		<br />
		<table class="adminform">
		<tr>
			<td width="3%"></td>
			<td align="left" valign="top" width="30%">
			<strong>
			���������� � ����:
			</strong>
			<br />
			<?php echo $MenuList ?>
			<br /><br />
			</td>
			<td align="left" valign="top">
			<strong>
			���������� ������ ����:
			</strong>
			<br />
			<ol>
			<?php
			foreach ( $items as $item ) {
				?>
				<li>
				<?php echo $item->name; ?>
				</li>
				<?php
			}
			?>
			</ol>
			</td>
		</tr>
		</table>
		<br /><br />

		<input type="hidden" name="option" value="<?php echo $option;?>" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="task" value="" />
		<input type="hidden" name="menutype" value="<?php echo $menutype; ?>" />
		<?php
		foreach ( $cid as $id ) {
			echo "\n <input type=\"hidden\" name=\"cid[]\" value=\"$id\" />";
		}
		?>
		</form>
		<?php
	}
}
?>