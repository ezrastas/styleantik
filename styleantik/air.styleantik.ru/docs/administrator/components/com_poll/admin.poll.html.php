<?php
/**
* @version $Id: admin.poll.html.php 5948 2006-12-06 22:42:31Z facedancer $
* @package Joomla RE
* @subpackage Polls
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
* @package Joomla RE
* @subpackage Polls
*/
class HTML_poll {

	function showPolls( &$rows, &$pageNav, $option ) {
		global $my;

		mosCommonHTML::loadOverlib();
		?>
		<form action="index2.php" method="post" name="adminForm">
		<table class="adminheading">
		<tr>
			<th>���������� ��������</th>
		</tr>
		</table>

		<table class="adminlist">
		<tr>
			<th width="5">
			#
			</th>
			<th width="20">
			<input type="checkbox" name="toggle" value="" onClick="checkAll(<?php echo count( $rows ); ?>);" />
			</th>
			<th align="left">
			��������� ������
			</th>
			<th width="10%" align="center">
			�� �����
			</th>
			<th width="10%" align="center">
			���������
			</th>
			<th width="10%" align="center">
			��������
			</th>
		</tr>
		<?php
		$k = 0;
		for ($i=0, $n=count( $rows ); $i < $n; $i++) {
			$row = &$rows[$i];
			mosMakeHtmlSafe($row);
			$link 	= 'index2.php?option=com_poll&task=editA&hidemainmenu=1&id='. $row->id;

			$task 	= $row->published ? 'unpublish' : 'publish';
			$img 	= $row->published ? 'publish_g.png' : 'publish_x.png';
			$alt 	= $row->published ? '�����������' : '�������������';

			$checked 	= mosCommonHTML::CheckedOutProcessing( $row, $i );
			?>
			<tr class="<?php echo "row$k"; ?>">
				<td>
				<?php echo $pageNav->rowNumber( $i ); ?>
				</td>
				<td>
				<?php echo $checked; ?>
				</td>
				<td>
				<a href="<?php echo $link; ?>" title="�������� �����">
				<?php echo $row->title; ?>
				</a>
				</td>
				<td align="center">
				<a href="javascript: void(0);" onclick="return listItemTask('cb<?php echo $i;?>','<?php echo $task;?>')">
				<img src="images/<?php echo $img;?>" width="12" height="12" border="0" alt="<?php echo $alt; ?>" />
				</a>
				</td>
				<td align="center">
				<?php echo $row->numoptions; ?>
				</td>
				<td align="center">
				<?php echo $row->lag; ?>
				</td>
			</tr>
			<?php
			$k = 1 - $k;
		}
		?>
		</table>
		<?php echo $pageNav->getListFooter(); ?>

		<input type="hidden" name="option" value="<?php echo $option;?>" />
		<input type="hidden" name="task" value="" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="hidemainmenu" value="0">
		</form>
		<?php
	}


	function editPoll( &$row, &$options, &$lists ) {
		mosMakeHtmlSafe( $row, ENT_QUOTES );
		?>
		<script language="javascript" type="text/javascript">
		function submitbutton(pressbutton) {
			var form = document.adminForm;
			if (pressbutton == 'cancel') {
				submitform( pressbutton );
				return;
			}
			// do field validation
			if (form.title.value == "") {
				alert( "����� ������ ����� ��������" );
			} else if( isNaN( parseInt( form.lag.value ) ) ) {
				alert( "�������� ����� �������� �� ������ ���� �������" );
			//} else if (form.menu.options.value == ""){
			//	alert( "����� ������ ����� ��������." );
			//} else if (form.adminForm.textfieldcheck.value == 0){
			//	alert( "����� ������ ����� ������." );
			} else {
				submitform( pressbutton );
			}
		}
		</script>
		<form action="index2.php" method="post" name="adminForm">
		<table class="adminheading">
		<tr>
			<th>
			�����:
			<small>
			<?php echo $row->id ? '���������' : '�����';?>
			</small>
			</th>
		</tr>
		</table>

		<table class="adminform">
		<tr>
			<th colspan="4">
			�����������
			</th>
		</tr>
		<tr>
			<td width="10%">
			���������:
			</td>
			<td>
			<input class="inputbox" type="text" name="title" size="60" value="<?php echo $row->title; ?>" />
			</td>
			<td width="20px">&nbsp;

			</td>
			<td width="100%" rowspan="20" valign="top">
			������������ ��� ������� ����:
			<br />
			<?php echo $lists['select']; ?>
			</td>
		</tr>
		<tr>
			<td>
			�������� ����� ��������:
			</td>
			<td>
			<input class="inputbox" type="text" name="lag" size="10" value="<?php echo $row->lag; ?>" /> (������ ����� ��������)
			</td>
		</tr>
		<tr>
			<td valign="top">
			����������� (�� �����):
			</td>
			<td>
			<?php echo $lists['published']; ?>
			</td>
		</tr>
		<tr>
			<td colspan="3">
			<br /><br />
			�������� �������:
			</td>
		</tr>
		<?php
		for ($i=0, $n=count( $options ); $i < $n; $i++ ) {
			?>
			<tr>
				<td>
				<?php echo ($i+1); ?>
				</td>
				<td>
				<input class="inputbox" type="text" name="polloption[<?php echo $options[$i]->id; ?>]" value="<?php echo htmlspecialchars( stripslashes($options[$i]->text) ); ?>" size="60" />
				</td>
			</tr>
			<?php
		}
		for (; $i < 12; $i++) {
			?>
			<tr>
				<td>
				<?php echo ($i+1); ?>
				</td>
				<td>
				<input class="inputbox" type="text" name="polloption[]" value="" size="60"/>
				</td>
			</tr>
			<?php
		}
		?>
		</table>

		<input type="hidden" name="task" value="">
		<input type="hidden" name="option" value="com_poll" />
		<input type="hidden" name="id" value="<?php echo $row->id; ?>" />
		<input type="hidden" name="textfieldcheck" value="<?php echo $n; ?>" />
		</form>
		<?php
	}

}
?>