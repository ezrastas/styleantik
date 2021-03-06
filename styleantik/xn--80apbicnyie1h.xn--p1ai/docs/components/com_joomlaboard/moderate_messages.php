<?php
/**
* moderate_messages.php joomlaboard message moderation
* @package com_joomlaboard
* @copyright (C) 2000 - 2007 TSMF / Jan de Graaff / All Rights Reserved
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @author TSMF
* Joomla! is Free Software
**/
// Dont allow direct linking
defined( '_VALID_MOS' ) or die( '������ ������ ������.' );
global $my;
//securing form elements
$catid=(int)$catid;

if (!$is_moderator) { die ("�� �� ���������!! <br/> ��� ������ ����������������, � ��� ����� IP ������� ������������������� ����� �����; ��������..");}
//but we don't send the email; we might do that in the future, but for now we just want to scare 'em off..

// determine what to do
$action=mosGetParam($_POST,'action','list');
$cid=mosGetParam($_POST,'cid',array());
switch ($action) {
	case _MOD_DELETE:
		switch (jbDeletePosts($database,$cid)) {
			case -1:
				mosRedirect(JB_LIVEURL.'func=review&amp;catid='.$catid, "������: ���� ��� ������, �� ����� �� ��� ���� ������ �������� #__sb_messages_text � �������� ��� mesid IN". explode(',',$cid));
				break;
			case 0:
				mosRedirect(JB_LIVEURL.'&amp;func=review&amp;catid='.$catid, _MODERATION_DELETE_ERROR );
				break;
			case 1:
			default:
				mosRedirect(JB_LIVEURL.'&amp;func=review&amp;catid='.$catid, _MODERATION_DELETE_SUCCESS );
				break;
		}
		break;
	case _MOD_APPROVE:
		switch(jbApprovePosts($database,$cid)) {
			case 0:
				mosRedirect(JB_LIVEURL.'amp;func=review&amp;catid='.$catid, _MODERATION_APPROVE_ERROR );
				break;
			default:
			case 1:
				mosRedirect(JB_LIVEURL.'&amp;func=review&amp;catid='.$catid, _MODERATION_APPROVE_SUCCESS );
				break;		  
		}
		break;
	default:
	case 'list':
		echo '<p class="sectionname"><?php echo _MESSAGE_ADMINISTRATION; ?></p>';
		$database->setQuery("SELECT m.id,m.time,m.name,m.subject,m.hold,t.message FROM #__sb_messages AS m LEFT JOIN #__sb_messages_text as t ON m.id=t.mesid WHERE hold='1' AND catid=$catid ORDER BY id ASC");
		if (!$database->query())
			echo $database->getErrorMsg(); // TODO
		$allMes=$database->loadObjectList();
		if (count($allMes)>0)
			jbListMessages($allMes,$catid);
		else
			echo '<p style="text-align:center">'._MODERATION_MESSAGES.'</p>';
		break;
}

/**
 * Lists messages to be moderated
 * @param array	allMes list of object
 * @param string sbs action string
 */
function jbListMessages($allMes,$catid) {
	global $sbConfig;
	echo '<form action="'.sefRelToAbs(JB_LIVEURL.'&amp;func=review').'" name="moderation" method="post">';
      ?>
	<script>
	function ConfirmDelete(){
	if (confirm("<?php echo _MODERATION_DELETE_MESSAGE; ?>"))
		document.moderation.submit();
	else
		return false;		
	}
	
	</script>
	<table width="100%" border=0 cellspacing=1 cellpadding=3>      
    	<tr height="10" class="sb_table_header">
        	<th align="center"><b><?php echo _GEN_DATE; ?></b></th>
			<th width="8%" align="center"><b><?php echo _GEN_AUTHOR; ?></b></th>
			<th width="13%" align="center"><b><?php echo _GEN_SUBJECT; ?></b></th>
			<th width="55%" align="center"><b><?php echo _GEN_MESSAGE; ?></b></th>
			<th width="13%" align="center"><b><?php echo _GEN_ACTION; ?></b></th>
		</tr>
<?php
	$i=1;
	foreach ($allMes as $message){
		$i= 1-$i;
		echo '<tr class="sb_message'.$i.'">';
		echo '<td valign="top">'.date(_DATETIME , $message->time).'</td>';
		echo '<td valign="top">'.$message->name.'</td>';
		echo '<td valign="top"><b>'.$message->subject.'<b></td>';
		echo '<td valign="top">'.smile::smileReplace($message->message,0,$sbConfig['disemoticons']).'</td>';
		echo '<td valign="top"><input type="checkbox" name="cid[]" value="'.$message->id.'" /></td>';
		echo '</tr>';
	}

?>
		<tr><td colspan="5" align="center" valign="top" style="text-align:center">
		<input type="hidden" name="catid" value="<?php echo $catid; ?>" />
		<input type="submit" align="center" class="button" name="action" value="<?php echo _MOD_APPROVE; ?>" border="0">
		<input type="submit" align="center" class="button" name="action" onclick="ConfirmDelete()" value="<?php echo _MOD_DELETE; ?>" border="0">		
		</td></tr>
      	<tr height="10" bgcolor="#e2e2e2">
        <td colspan="5">&nbsp;</td>
		</tr>
      </table>
      </form>
<?php
}
/**
 * delete selected messages
 * @param object database
 * @param array	cid post ids
 * @param string sbs action string
 */
function jbDeletePosts($database,$cid) {
	if (count($cid)==0)
		return 0;
	$ids=implode(',',$cid);
	$database->setQuery('DELETE FROM `#__sb_messages` WHERE `id` IN ('.$ids.')');
	if($database->query()){
		$database->setQuery('DELETE FROM `#__sb_messages_text` WHERE `mesid` IN ('.$ids.')');
		if ($database->query())
			return 1;
		else
			return -1;
	}
	return 0;
}
/**
 * approve selected messages
 * @param object database
 * @param array cid post ids
 */
function jbApprovePosts($database,$cid) {
	if (count($cid)==0) 
		return 0;
	$ids=implode(',',$cid);
	$database->setQuery('UPDATE `#__sb_messages` SET `hold`=0 WHERE `id` IN ('.$ids.')');	
	if($database->query())
		return 1;
	return 0;
}
?>