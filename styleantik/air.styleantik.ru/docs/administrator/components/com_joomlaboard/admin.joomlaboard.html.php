<?php
/**
* admin.joomlaboard.html.php joomlaboard backend display class
* @package com_joomlaboard
* @copyright (C) 2000 - 2007 TSMF / Jan de Graaff / All Rights Reserved
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @author TSMF
* Joomla! is Free Software
**/


// ################################################################
// MOS Intruder Alerts
defined( '_VALID_MOS' ) or die( 'Прямой доступ закрыт.' );
// ################################################################

class HTML_SIMPLEBOARD {
   
   function controlPanel($version2) {
   
   ?>
   <table class="adminheading" border="0">
   <tr>
      <th class="cpanel">Панель управления Joomlaboard</th>
   </tr>
   </table>
<?php
   $path = JB_ABSADMPATH."/sb_cpanel.php";
   if (file_exists( $path )) {
          require $path;
      } else {
          echo '<br />mcap==: '.$_CONFIG->SITEPATH.' .... help!!';
         mosLoadAdminModules( 'cpanel', 1 );
      }
   }  

   function showAdministration( $rows, $pageNav, $option ) {
?>
   <form action="index2.php" method="post" name="adminForm">
   <table class="adminheading" cellpadding="4" cellspacing="0" border="0" width="100%">
   <tr>
      <th width="100%" class="modules">Управление Joomlaboard</th>
      <td nowrap><?php echo _COM_A_DISPLAY;?></td>
      <td>
         <?php echo $pageNav->writeLimitBox('index2.php?option='.$option.'&amp;task=showAdministration'); ?>
      </td>
   </tr>
   <tr>
      <td colspan="3"><img src="images/cpanel.png" width="16px" height="16px" align="middle" border="0"/>  <a href="index2.php?option=com_joomlaboard"><?php echo _COM_C_BACK;?></a></td>
   </tr>
   </table>

   <table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
      <tr>
         <th width="20">#</th>
         <th width="20">
            <input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $rows ); ?>);" />
         </th>
         <th class="title">Категория / Форум</td>
         <th><small>Закрыто</small></td>
         <th><small>Модерируется</small></td>
         <th><small>Просмотр</small></td>
         <th><small>Публикация</small></td>
         <th><small>Доступ пользователя</small></td>
         <th><small>Доступ администратора</small></td>
         <th><small>Снять блокировки</small></td>
         <th colspan="2"><small>Сортировать</small></th>
      </tr>
      <?php
      $k = 0;
      $i = 0;

      for ($i=0, $n=count( $rows ); $i < $n; $i++) {
         $row = $rows[$i];

         if($row->parent==0){?>
            <tr bgcolor="#D4D4D4"><?php
         }else{?>
            <tr class="row<?php echo $k; ?>">
       <?php }?>
            <td width="20" align="right"><?php echo $i+$pageNav->limitstart+1;?></td>
            <td width="20"><input type="checkbox" id="cb<?php echo $i;?>" name="cid[]" value="<?php echo $row->id; ?>" onClick="isChecked(this.checked);"></td>
            <td width="70%"><a href="#edit" onclick="return listItemTask('cb<?php echo $i; ?>','edit')"><?php echo ($row->category ? "$row->category/$row->name" : "$row->name"); ?></a></td>
            <td align="center"><?php echo (!$row->category ? "&nbsp;" : ($row->locked==1    ? "<img src=\"images/tick.png\">" : "<img src=\"images/publish_x.png\">")); ?></td>
            <td align="center"><?php echo ($row->moderated==1 ? "<img src=\"images/tick.png\">" : "<img src=\"images/publish_x.png\">"); ?></td>
            <td align="center"><?php echo (!$row->category ? "&nbsp;" : ($row->review==1    ? "<img src=\"images/tick.png\">" : "<img src=\"images/publish_x.png\">")); ?></td>
<?php
         $task = $row->published ? 'unpublish' : 'publish';
         $img = $row->published ? 'publish_g.png' : 'publish_x.png';
         if ($row->pub_access==0)
         {
            $groupname='Everybody';
         }
         else if ($row->pub_access==-1)
         {
            $groupname='All Registered';
         }
         else
         {
            $groupname=$row->groupname=="" ? "&nbsp;" : $row->groupname;
         }

         $adm_groupname = $row->admingroup=="" ? "&nbsp;" :$row->admingroup;

?>
            <td width="10%" align="center"><a href="javascript: void(0);" onclick="return listItemTask('cb<?php echo $i;?>','<?php echo $task;?>')"><img src="images/<?php echo $img;?>" width="12" height="12" border="0" alt="" /></a></td>
            <td width="" align="center"><?php echo $groupname;?></td>
            <td width="" align="center"><?php echo $adm_groupname ;?></td>
            <td width="15%" align="center"><?php echo $row->editor;?>&nbsp;</td>
      <td>
<?php    if ($i > 0 || ($i+$pageNav->limitstart > 0)) { ?>
         <a href="#reorder" onClick="return listItemTask('cb<?php echo $i;?>','orderup')">
            <img src="images/uparrow.png" width="12" height="12" border="0" alt="Move Up">
         </a>
<?php    } ?>
      </td>
      <td>
<?php    if ($i < $n-1 || $i+$pageNav->limitstart < $pageNav->total-1) { ?>
         <a href="#reorder" onClick="return listItemTask('cb<?php echo $i;?>','orderdown')">
            <img src="images/downarrow.png" width="12" height="12" border="0" alt="Move Down">
         </a>
<?php    } ?>
      </td>
            <?php
               $k = 1 - $k;
         }?>
      </tr>
      <tr>
         <th align="center" colspan="12">
            <?php echo $pageNav->writePagesLinks(); ?></th>
      </tr>
      <tr>
         <td align="center" colspan="12">
            <?php echo $pageNav->writePagesCounter(); ?></td>
      </tr>
      </table>
         <input type="hidden" name="option" value="<?php echo $option; ?>">
         <input type="hidden" name="task" value="showAdministration">
         <input type="hidden" name="boxchecked" value="0">
   </form>
<?php
   }

   function editForum( &$row, $categoryList, $moderatorList, $lists, $accessLists, $option ) {
	   $tabs = new mosTabs(3);
?>
      <style>
      .hideable {position: relative; visibility: hidden; }
      </style>
      <script language="javascript" type="text/javascript">

      function submitbutton(pressbutton) {
         var form = document.adminForm;
         if (pressbutton == 'cancel') {
            submitform( pressbutton );
            return;
         }

         // do field validation
         try {
         document.adminForm.onsubmit();
         }
         catch(e){}
         if (form.name.value == ""){
            alert( "Category / Forum must have a name" );
         } else {
            submitform( pressbutton );
         }
      }
      </script>
<table cellpadding="4" class="adminheading" cellspacing="0" border="0" width="100%">
    <tr>
      <th width="100%" class="edit"><?php echo $row->id ? 'Edit' : 'Add';?> Категория/Форум</th>
    </tr>
  </table>
      <form action="index2.php" method="POST" name="adminForm">
	<?php
	$tabs->startPane("forums");
	$tabs->startTab('Basics',"apage1");
	?>
      <table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminform">
         <tr>
            <td width="200">Родитель:</td>
            <td><?php echo $categoryList; ?></td>
            <td>
               Внимание: Чтобы создать Категорию, выберите 'Главную Категорию' как Родитель.
               Категория служит контейнером для Форумов.<br />
               Форум может быть создан <strong>только</strong> в пределах Категории, 
			   выбранной как Родитель для Форума.<br />
               Сообщения <strong>НЕ</strong> могут публиковаться в категориях; только в форуме.
            </td>
         </tr>

         <tr>
            <td width="200">Название:</td>
            <td colspan="2"><input class="inputbox" type="text" name="name" size="25" maxlength="100" value="<?php echo $row->name; ?>"></td>
         </tr>

         <tr>
            <td valign="top">Описание:</td>
            <td colspan="2"><textarea class="inputbox" cols="50" rows="3" name="description" id="description" style="width:500px" width="500"><?php echo $row->description; ?></textarea></td>

         </tr>
      </table>
	<?php
	$tabs->endTab();
	$tabs->startTab('Advanced',"apage2");
	?>
      <table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminform">
         <tr>
            <td> Блокировка: </td>
            <td> <?php echo $lists['forumLocked']; ?></td>
            <td>
               Установите &quot;Да&quot;, если хотите заблокировать форум.
               Никто, кроме Модераторов и Администраторов не может создать новые темы или ответы на закрытом форуме.
            </td>
         </tr>
         <tr height="5"><td>&nbsp;</td></tr>
         <tr>
            <td> Уровень доступа пользователей:</td>
            <td> <?php echo $accessLists['pub_access']; ?></td>
            <td>
               Чтобы создавать Непубличный Форум, Вы можете определить минимум уровень пользователя, который может просматривать/участвовать в этом форуме.
               По умолчанию минимум уровень пользователя установлен для &quot;Всех&quot;.<br />
               <b> Пожалуйста отметьте </b>: если Вы ограничите доступ на целой Категории к одному или более определенным группам, то это скроет все Форумы, это содержит к любому не наличие надлежащих привилегий на Категории <b> даже </b>, если один или больше этих Форумов имеют более низкий уровень доступа! 

Это держится для Ведущих также; Вы должны будете добавить Ведущего к списку ведущего Категории, если он не имеет надлежащего уровня группы, чтобы видеть Категорию. <br />
               Это - независимо от факта, что Категории не могут быть Уменьшены; Ведущие могут все еще добавляться к списку ведущего.
            </td>
         </tr>
         <tr>
            <td> Включить Детские Группы:</td>
            <td> <?php echo $lists['pub_recurse']; ?></td>
            <td>
Детским группам нужноли разрешить доступ? Если установлено  &quot;Нет&quot; доступ к этому форуму будет <b>ограничен.</b>
            </td>
         </tr>
         <tr height="5"><td>&nbsp;</td></tr>
         <tr>
            <td> Уровень доступа Администратора:</td>
            <td> <?php echo $accessLists['admin_access']; ?></td>
            <td>
               Если Вы создаете форум с ограничениями Открытого доступа, Вы можете определить здесь дополнительный Уровень Доступа Администрирования. <br/>
               Если Вы ограничите доступ к форуму к специальной группе пользователей Внешнего интерфейса и не будете определять Общественную Внутреннюю Группу здесь, то администраторы не будут в состоянии просматривать/редактировать Форум.
            </td>
         </tr>
         <tr>
            <td> Включить Детские Группы:</td>
            <td> <?php echo $lists['admin_recurse']; ?></td>
            <td>
               Детским группам нужноли разрешить доступ? Если установлено  &quot;Нет&quot; доступ к этому форуму будет <b>ограничен.</b>
            </td>
         </tr>
         <tr height="5"><td>&nbsp;</td></tr>
         <tr>
            <td> Просмот постов:</td>
            <td> <?php echo $lists['forumReview']; ?></td>
            <td>
               Установите &quot;Да&quot; если Вы хотите, чтобы посты просматривались до публикации их на этом форуме. Это полезно только на маленьком форуме! <br/>
               Если Вы устанавливаете это без каких-нибудь определенных Ведущих, Администрация Сайта исключительно ответственна за одобрение/удаление представленные посты, поскольку они будут сохранены 'в ожидании'!
            </td>
         </tr>
      </table>
	<?php
	$tabs->endTab();
	$tabs->startTab('Moderation',"apage3");
	?>
      <table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminform">
         <tr>
            <td> Модерирование:</td>
            <td> <?php echo $lists['forumModerated']; ?></td>
            <td>
               Установите &quot;Да&quot; если Вы хотите быть назначить Ведущих на этот форум. <br/>
               <strong> Примечание: </strong> Это не означает, что новый пост должен быть просмотрет до публикации его на форум! <ответвление/>
               Вы будете должны для этого установить опцию &quot;Просмотр&quot; в первой таблице. <br/> <br/>
               <strong> Пожалуйста отметьте: </strong> После установки модерирования &quot;Да&quot; Вы должны сначала сохранить конфигурацию форума, прежде чем Вы будете добавлять Ведущих, используя новую кнопку.
            </td>
         </tr>
      </table><br />
      <?php
      if ($row->moderated) {?>
      <table cellpadding="4" cellspacing="0" border="0" width="100%">
          <tr>
            <th width="100%" class="user">Модераторы данного форума:</th>
          </tr>
      </table>
      <table class="adminlist" border=0 cellspacing=0 cellpadding=3 width="100%" >
         <tr>
            <th width="20">#</th>
            <th width="20">
               <input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $moderatorList ); ?>);" />
            </th>
            <th align="left">Имя</th>
            <th align="left">Логин</th>
            <th align="left">Email</th>
            <th align="centercase "edit":">Опубликованный</th>
         </tr>
         <?php
         if (count($moderatorList)== 0)
         {
            echo "<tr><td colspan=\"5\">There are no Moderators assigned to this forum</td></tr>";
         }else
         {
            $k=1;
            $i=0;
            foreach($moderatorList as $ml)
            {
               $k=1-$k;
               ?>
               <tr class="row<?php echo $k;?>">
                  <td width="20"><?php echo $i+1;?></td>
                  <td width="20"><input type="checkbox" id="cb<?php echo $i;?>" name="cid[]" value="<?php echo $ml->id; ?>" onClick="isChecked(this.checked);"></td>
                  <td><?php echo $ml->name;?></td>
                  <td><?php echo $ml->username;?></td>
                  <td><?php echo $ml->email;?></td>
                  <td align="center"><img src="images/tick.png"></td>
               </tr>
               <?php
               $i++;
            }
         }
         ?>
      </table>
   <?php
   }?>
	<?php
	$tabs->endTab();
	$tabs->endPane();
	?>

   <input type="hidden" name="id" value="<?php echo $row->id; ?>">
   <input type="hidden" name="option" value="<?php echo $option; ?>">
   <input type="hidden" name="task" value="showAdministration">
   <?php if ($row->ordering!=0){echo '<input type="hidden" name="ordering" value="'.$row->ordering.'">';}?>

   </form>
   <?php
   }

   function showConfig( &$sbConfig, &$lists, $option ) {
   global $mosConfig_live_site;
   $tabs = new mosTabs(2);
?>
<style>
h1 { 
	color: #C64934;
	font-size: 1.5em;
    border-left: 25px solid #C64934;
	border-bottom: 1px solid #C64934;
	padding: 0 0 2px 5px;
}
</style>
   <form action="index2.php" method="post" name="adminForm">
   <table cellpadding="4" class="adminheading" cellspacing="0" border="0" width="100%">
      <tr>
         <th width="100%" class="config">Joomlaboard <?php echo _COM_A_CONFIG ?></th>
      </tr>
      <tr>
         <td colspan="2"><img src="images/cpanel.png" width="16px" height="16px" align="middle" border="0"/>  <a href="index2.php?option=com_joomlaboard"><?php echo _COM_C_BACK;?></a></td>
      </tr>
   </table>
	<?php
	$tabs->startPane("settings");
	$tabs->startTab(_COM_A_BASICS,"page1");
	?>

   <table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminform">
      <tr align="center" valign="middle">
         <th width="20%">&nbsp;</th>
         <th width="20%"><?php echo _COM_A_CURRENT_SETTINGS ?></th>
         <th width="60%"><?php echo _COM_A_EXPLANATION ?></th>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_BOARD_TITLE ?></td>
         <td align="left" valign="top"><input type="text" name="cfg_board_title" value="<?php echo $sbConfig['board_title']; ?>" /></td>
         <td align="left" valign="top"><?php echo _COM_A_BOARD_TITLE_DESC ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_EMAIL ?></td>
         <td align="left" valign="top"><input type="text" name="cfg_email" value="<?php echo $sbConfig['email']; ?>" /></td>
         <td align="left" valign="top"><?php echo _COM_A_EMAIL_DESC ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_BOARD_OFFLINE ?></td>
         <td align="left" valign="top"><?php echo $lists['board_offline']; ?></td>
         <td align="left" valign="top"><?php echo _COM_A_BOARD_OFFLINE_DESC ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_BOARD_OFSET ?></td>
         <td align="left" valign="top"><input type="text" name="cfg_board_ofset" value="<?php echo $sbConfig['board_ofset']; ?>" /></td>
         <td align="left" valign="top"><?php echo _COM_A_BOARD_OFSET_DESC ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_BOARD_OFFLINE_MES ?></td>
         <td align="left" valign="top" colspan="2"><textarea name="cfg_offline_message" rows="3" cols="50" ><?php echo $sbConfig['offline_message']; ?></textarea></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_VIEW_TYPE ?></td>
         <td align="left" valign="top"><?php echo $lists['default_view']; ?></td>
         <td align="left" valign="top"><?php echo _COM_A_VIEW_TYPE_DESC ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_RSS ?></td>
         <td align="left" valign="top"><?php echo $lists['enableRSS']; ?></td>
         <td align="left" valign="top"><img src="<?php echo $mosConfig_live_site;?>/images/M_images/rss.png" /> <?php echo _COM_A_RSS_DESC ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_PDF ?></td>
         <td align="left" valign="top"><?php echo $lists['enablePDF']; ?></td>
         <td align="left" valign="top"><img src="<?php echo $mosConfig_live_site;?>/images/M_images/pdf_button.png" /> <?php echo _COM_A_PDF_DESC ?></td>
      </tr>		
      <tr align="center" valign="middle">
         <th colspan="3">&nbsp;</th>
      </tr>
   </table>
	<?php
	$tabs->endTab();
	$tabs->startTab(_COM_A_FRONTEND,"page2");
	?>
   <table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminform">
      <tr align="center" valign="middle">
         <th width="20%">&nbsp;</th>
         <th width="20%"><?php echo _COM_A_CURRENT_SETTINGS ?></th>
         <th width="60%"><?php echo _COM_A_EXPLANATION ?></th>
      </tr>
      <tr><td colspan="3"><h1><?php echo _COM_A_LOOKS ?></h1></td></tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_THREADS ?></td>
         <td align="left" valign="top"><input type="text" name="cfg_threads_per_page" value="<?php echo $sbConfig['threads_per_page']; ?>" /></td>
         <td align="left" valign="top"><?php echo _COM_A_THREADS_DESC ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_MESSAGES ?></td>
         <td align="left" valign="top"><input type="text" name="cfg_messages_per_page" value="<?php echo $sbConfig['messages_per_page']; ?>" /></td>
         <td align="left" valign="top"><?php echo _COM_A_MESSAGES_DESC ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_HISTORY ?></td>
         <td align="left" valign="top"><?php echo $lists['showHistory']; ?></td>
         <td align="left" valign="top"><?php echo _COM_A_HISTORY_DESC ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_HISTLIM ?></td>
         <td align="left" valign="top"><input type="text" name="cfg_historyLimit" value="<?php echo $sbConfig['historyLimit'];?>" /></td>
         <td align="left" valign="top"><?php echo _COM_A_HISTLIM_DESC ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_SHOWNEW ?></td>
         <td align="left" valign="top"><?php echo $lists['showNew']; ?></td>
         <td align="left" valign="top"><?php echo _COM_A_SHOWNEW_DESC ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_NEWCHAR ?></td>
         <td align="left" valign="top"><input type="text" name="cfg_newChar" value="<?php echo $sbConfig['newChar'];?>" /></td>
         <td align="left" valign="top"><?php echo _COM_A_NEWCHAR_DESC ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_DISEMOTICONS ?></td>
         <td align="left" valign="top"><?php echo $lists['disemoticons']; ?></td>
         <td align="left" valign="top"><?php echo _COM_A_DISEMOTICONS_DESC ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_TEMPLATE ?></td>
         <td align="left" valign="top"><?php echo $lists['template']; ?></td>
         <td align="left" valign="top"><?php echo _COM_A_TEMPLATE_DESC ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_TAWIDTH ?></td>
         <td align="left" valign="top"><input type="text" name="cfg_rtewidth" value="<?php echo $sbConfig['rtewidth'];?>" /></td>
         <td align="left" valign="top"><?php echo _COM_A_TAWIDTH_DESC ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_TAHEIGHT ?></td>
         <td align="left" valign="top"><input type="text" name="cfg_rteheight" value="<?php echo $sbConfig['rteheight'];?>" /></td>
         <td align="left" valign="top"><?php echo _COM_A_TAHEIGHT_DESC ?></td>
      </tr>      
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_RULESPAGE ?></td>
         <td align="left" valign="top"><?php echo $lists['enableRulesPage']; ?></td>
         <td align="left" valign="top"><?php echo _COM_A_RULESPAGE_DESC ?></td>
      </tr>
	  <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_STATSPAGE ?></td>
         <td align="left" valign="top"><?php echo $lists['enableStatsPage']; ?></td>
         <td align="left" valign="top"><?php echo _COM_A_STATSPAGE_DESC ?></td>
      </tr>	
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_FORUM_JUMP ?></td>
         <td align="left" valign="top"><?php echo $lists['enableForumJump']; ?></td>
         <td align="left" valign="top"><?php echo _COM_A_FORUM_JUMP_DESC ?></td>
      </tr>            
      <tr><td colspan="3"><h1><?php echo _COM_A_USERS ?></h1></td></tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_USERNAME ?></td>
         <td align="left" valign="top"><?php echo $lists['username']; ?></td>
         <td align="left" valign="top"><?php echo _COM_A_USERNAME_DESC ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_ASK_EMAIL ?></td>
         <td align="left" valign="top"><?php echo $lists['askemail']; ?></td>
         <td align="left" valign="top"><?php echo _COM_A_ASK_EMAIL_DESC ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_SHOWMAIL ?></td>
         <td align="left" valign="top"><?php echo $lists['showemail']; ?></td>
         <td align="left" valign="top"><?php echo _COM_A_SHOWMAIL_DESC ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_USERSTATS ?></td>
         <td align="left" valign="top"><?php echo $lists['showstats']; ?></td>
         <td align="left" valign="top"><?php echo _COM_A_USERSTATS_DESC ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_POSTSTATSBAR ?></td>
         <td align="left" valign="top"><?php echo $lists['postStats']; ?></td>
         <td align="left" valign="top"><?php echo _COM_A_POSTSTATSBAR_DESC ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_POSTSTATSCOLOR ?></td>
         <td align="left" valign="top"><input type="text" name="cfg_statsColor" value="<?php echo $sbConfig['statsColor'];?>" /></td>
         <td align="left" valign="top"><?php echo _COM_A_POSTSTATSCOLOR_DESC ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td colspan=2>&nbsp;</td>
         <td align="left" valign="top">
            <table size=100%>
               <tr>
                  <td> 1: <img src="<?php echo $mosConfig_live_site;?>/components/com_joomlaboard/graph/col1m.png" width="15" height="4"><td>
                  <td> 2: <img src="<?php echo $mosConfig_live_site;?>/components/com_joomlaboard/graph/col2m.png" width="15" height="4"><td>
                  <td> 3: <img src="<?php echo $mosConfig_live_site;?>/components/com_joomlaboard/graph/col3m.png" width="15" height="4"><td>
                  <td> 4: <img src="<?php echo $mosConfig_live_site;?>/components/com_joomlaboard/graph/col4m.png" width="15" height="4"><td>
                  <td> 5: <img src="<?php echo $mosConfig_live_site;?>/components/com_joomlaboard/graph/col5m.png" width="15" height="4"><td>
                  <td> 6: <img src="<?php echo $mosConfig_live_site;?>/components/com_joomlaboard/graph/col6m.png" width="15" height="4"><td>
                </tr><tr>
                  <td> 7: <img src="<?php echo $mosConfig_live_site;?>/components/com_joomlaboard/graph/col7m.png" width="15" height="4"><td>
                  <td> 8: <img src="<?php echo $mosConfig_live_site;?>/components/com_joomlaboard/graph/col8m.png" width="15" height="4"><td>
                  <td> 9: <img src="<?php echo $mosConfig_live_site;?>/components/com_joomlaboard/graph/col9m.png" width="15" height="4"><td>
                  <td> 10: <img src="<?php echo $mosConfig_live_site;?>/components/com_joomlaboard/graph/col10m.png" width="15" height="4"><td>
                  <td> 11: <img src="<?php echo $mosConfig_live_site;?>/components/com_joomlaboard/graph/col11m.png" width="15" height="4"><td>
                  <td> 12: <img src="<?php echo $mosConfig_live_site;?>/components/com_joomlaboard/graph/col12m.png" width="15" height="4"><td>
                </tr>
              </table>
         </td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_KARMA ?></td>
         <td align="left" valign="top"><?php echo $lists['showkarma']; ?></td>
         <td align="left" valign="top"><?php echo _COM_A_KARMA_DESC ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_USER_EDIT ?></td>
         <td align="left" valign="top"><?php echo $lists['useredit']; ?></td>
         <td align="left" valign="top"><?php echo _COM_A_USER_EDIT_DESC ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_USER_MARKUP ?></td>
         <td align="left" valign="top"><?php echo $lists['editMarkUp']; ?></td>
         <td align="left" valign="top"><?php echo _COM_A_USER_MARKUP_DESC ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_SUBSCRIPTIONS ?></td>
         <td align="left" valign="top"><?php echo $lists['allowsubscriptions']; ?></td>
         <td align="left" valign="top"><?php echo _COM_A_SUBSCRIPTIONS_DESC ?></td>
      </tr>
      <tr><td colspan="3"><h1><?php echo _COM_A_LENGTHS ?></h1></td></tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_WRAP ?></td>
         <td align="left" valign="top"><input type="text" name="cfg_wrap" value="<?php echo $sbConfig['wrap'];?>" /></td>
         <td align="left" valign="top"><?php echo _COM_A_WRAP_DESC ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_SUBJECTLENGTH ?></td>
         <td align="left" valign="top"><input type="text" name="cfg_maxSubject" value="<?php echo $sbConfig['maxSubject'];?>" /></td>
         <td align="left" valign="top"><?php echo _COM_A_SUBJECTLENGTH_DESC ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_SIGNATURE ?></td>
         <td align="left" valign="top"><input type="text" name="cfg_maxSig" value="<?php echo $sbConfig['maxSig'];?>" /></td>
         <td align="left" valign="top"><?php echo _COM_A_SIGNATURE_DESC ?></td>
      </tr>
   </table>
	<?php
	$tabs->endTab();
	$tabs->startTab(_COM_A_SECURITY,"page3");
	?>
   <table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminform">
      <tr align="center" valign="middle">
         <th width="20%">&nbsp;</th>
         <th width="20%"><?php echo _COM_A_CURRENT_SETTINGS ?></th>
         <th width="60%"><?php echo _COM_A_EXPLANATION ?></th>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_REGISTERED_ONLY ?></td>
         <td align="left" valign="top"><?php echo $lists['regonly']; ?></td>
         <td align="left" valign="top"><?php echo _COM_A_REG_ONLY_DESC ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_CHANGENAME ?></td>
         <td align="left" valign="top"><?php echo $lists['changename']; ?></td>
         <td align="left" valign="top"><?php echo _COM_A_CHANGENAME_DESC ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_PUBWRITE ?></td>
         <td align="left" valign="top"><?php echo $lists['pubwrite']; ?></td>
         <td align="left" valign="top"><?php echo _COM_A_PUBWRITE_DESC ?></td>
      </tr>
       <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_FLOOD ?></td>
         <td align="left" valign="top"><input type="text" name="cfg_floodprotection" value="<?php echo $sbConfig['floodprotection'];?>" /></td>
         <td align="left" valign="top"><?php echo _COM_A_FLOOD_DESC ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_MODERATION ?></td>
         <td align="left" valign="top"><?php echo $lists['mailmod']; ?></td>
         <td align="left" valign="top"><?php echo _COM_A_MODERATION_DESC ?></td>
      </tr>
   </table>
	<?php
	$tabs->endTab();
	$tabs->startTab(_COM_A_AVATARS,"page4");
	?>
   <table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminform">
      <tr align="center" valign="middle">
         <th width="20%">&nbsp;</th>
         <th width="20%"><?php echo _COM_A_CURRENT_SETTINGS ?></th>
         <th width="60%"><?php echo _COM_A_EXPLANATION ?></th>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_AVATAR ?></td>
         <td align="left" valign="top"><?php echo $lists['allowAvatar']; ?></td>
         <td align="left" valign="top"><?php echo _COM_A_AVATAR_DESC ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_AVATARUPLOAD ?></td>
         <td align="left" valign="top"><?php echo $lists['allowAvatarUpload']; ?></td>
         <td align="left" valign="top"><?php echo _COM_A_AVATARUPLOAD_DESC ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_AVATARGALLERY ?></td>
         <td align="left" valign="top"><?php echo $lists['allowAvatarGallery']; ?></td>
         <td align="left" valign="top"><?php echo _COM_A_AVATARGALLERY_DESC ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_AVHEIGHT ?></td>
         <td align="left" valign="top"><input type="text" name="cfg_avatarHeight" value="<?php echo $sbConfig['avatarHeight'];?>" /></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_AVWIDTH ?></td>
         <td align="left" valign="top"><input type="text" name="cfg_avatarWidth" value="<?php echo $sbConfig['avatarWidth'];?>" /></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_AVSIZE ?></td>
         <td align="left" valign="top"><input type="text" name="cfg_avatarSize" value="<?php echo $sbConfig['avatarSize'];?>" /></td>
      </tr>
   </table>
	<?php
	$tabs->endTab();
	$tabs->startTab(_COM_A_UPLOADS,"page5");
	?>
   <table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminform">
      <tr align="center" valign="middle">
         <th width="20%">&nbsp;</th>
         <th width="20%"><?php echo _COM_A_CURRENT_SETTINGS ?></th>
         <th width="60%"><?php echo _COM_A_EXPLANATION ?></th>
      </tr>
      <tr><td colspan="3"><h1><?php echo _COM_A_IMAGE ?></h1></td></tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_IMAGEUPLOAD ?></td>
         <td align="left" valign="top"><?php echo $lists['allowImageUpload']; ?></td>
         <td align="left" valign="top"><?php echo _COM_A_IMAGEUPLOAD_DESC ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_IMAGEREGUPLOAD ?></td>
         <td align="left" valign="top"><?php echo $lists['allowImageRegUpload']; ?></td>
         <td align="left" valign="top"><?php echo _COM_A_IMAGEREGUPLOAD_DESC ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_IMGHEIGHT ?></td>
         <td align="left" valign="top"><input type="text" name="cfg_imageHeight" value="<?php echo $sbConfig['imageHeight'];?>" /></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_IMGWIDTH ?></td>
         <td align="left" valign="top"><input type="text" name="cfg_imageWidth" value="<?php echo $sbConfig['imageWidth'];?>" /></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_IMGSIZE ?></td>
         <td align="left" valign="top"><input type="text" name="cfg_imageSize" value="<?php echo $sbConfig['imageSize'];?>" /></td>
      </tr>
      <tr><td colspan="3"><h1><?php echo _COM_A_FILE ?></h1></td></tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_FILEUPLOAD ?></td>
         <td align="left" valign="top"><?php echo $lists['allowFileUpload']; ?></td>
         <td align="left" valign="top"><?php echo _COM_A_FILEUPLOAD_DESC ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_FILEREGUPLOAD ?></td>
         <td align="left" valign="top"><?php echo $lists['allowFileRegUpload']; ?></td>
         <td align="left" valign="top"><?php echo _COM_A_FILEREGUPLOAD_DESC ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_FILEALLOWEDTYPES ?></td>
         <td align="left" valign="top"><input type="text" name="cfg_fileTypes" value="<?php echo $sbConfig['fileTypes'];?>" /></td>
         <td align="left" valign="top"><?php echo _COM_A_FILEALLOWEDTYPES_DESC ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_FILESIZE ?></td>
         <td align="left" valign="top"><input type="text" name="cfg_fileSize" value="<?php echo $sbConfig['fileSize'];?>" /></td>
      </tr>
   </table>
	<?php
	$tabs->endTab();
	$tabs->startTab(_COM_A_RANKING,"page6");
	?>
   <table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminform">
      <tr align="center" valign="middle">
         <th width="20%">&nbsp;</th>
         <th width="20%"><?php echo _COM_A_CURRENT_SETTINGS ?></th>
         <th width="60%"><?php echo _COM_A_EXPLANATION ?></th>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_RANKING ?></td>
         <td align="left" valign="top"><?php echo $lists['showranking']; ?></td>
         <td align="left" valign="top"><?php echo _COM_A_RANKING_DESC ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_RANKINGIMAGES ?></td>
         <td align="left" valign="top"><?php echo $lists['rankimages']; ?></td>
         <td align="left" valign="top"><?php echo _COM_A_RANKINGIMAGES_DESC ?></td>
      </tr>
   </table>
   <table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminform">
      <tr align="center" valign="middle">
         <th align="left" valign="top"><?php echo _COM_A_RANK ?></td>
         <th align="left" valign="top"><?php echo _COM_A_RANK_LIMIT ?></td>
         <th align="left" valign="top">&nbsp;</td>
         <th align="left" valign="top"><?php echo _COM_A_RANK_NAME ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top">0 - <?php echo _COM_A_RANK1 ?></td>
         <td align="left" valign="top"><input type="text" name="cfg_rank1" value="<?php echo $sbConfig['rank1'];?>" /></td>
         <td align="left" valign="top"><?php echo _COM_A_RANK1TXT ?></td>
         <td align="left" valign="top"><input type="text" name="cfg_rank1txt" value="<?php echo $sbConfig['rank1txt'];?>" /></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_RANK2 ?></td>
         <td align="left" valign="top"><input type="text" name="cfg_rank2" value="<?php echo $sbConfig['rank2'];?>" /></td>
         <td align="left" valign="top"><?php echo _COM_A_RANK2TXT ?></td>
         <td align="left" valign="top"><input type="text" name="cfg_rank2txt" value="<?php echo $sbConfig['rank2txt'];?>" /></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_RANK3 ?></td>
         <td align="left" valign="top"><input type="text" name="cfg_rank3" value="<?php echo $sbConfig['rank3'];?>" /></td>
         <td align="left" valign="top"><?php echo _COM_A_RANK3TXT ?></td>
         <td align="left" valign="top"><input type="text" name="cfg_rank3txt" value="<?php echo $sbConfig['rank3txt'];?>" /></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_RANK4 ?></td>
         <td align="left" valign="top"><input type="text" name="cfg_rank4" value="<?php echo $sbConfig['rank4'];?>" /></td>
         <td align="left" valign="top"><?php echo _COM_A_RANK4TXT ?></td>
         <td align="left" valign="top"><input type="text" name="cfg_rank4txt" value="<?php echo $sbConfig['rank4txt'];?>" /></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_RANK5 ?></td>
         <td align="left" valign="top"><input type="text" name="cfg_rank5" value="<?php echo $sbConfig['rank5'];?>" /></td>
         <td align="left" valign="top"><?php echo _COM_A_RANK5TXT ?></td>
         <td align="left" valign="top"><input type="text" name="cfg_rank5txt" value="<?php echo $sbConfig['rank5txt'];?>" /></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_RANK6 ?></td>
         <td align="left" valign="top">- 9999999</td>
         <td align="left" valign="top"><?php echo _COM_A_RANK6TXT ?></td>
         <td align="left" valign="top"><input type="text" name="cfg_rank6txt" value="<?php echo $sbConfig['rank6txt'];?>" /></td>
      </tr>
   </table>
	<?php
	$tabs->endTab();
	$tabs->startTab(_COM_A_INTEGRATION,"page7");
	?>
   <table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminform">
      <tr align="center" valign="middle">
         <th width="20%">&nbsp;</th>
         <th width="20%"><?php echo _COM_A_CURRENT_SETTINGS ?></th>
         <th width="60%"><?php echo _COM_A_EXPLANATION ?></th>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_AVATAR_SRC ?></td>
         <td align="left" valign="top"><?php echo $lists['avatar_src']; ?></td>
         <td align="left" valign="top"><?php echo _COM_A_AVATAR_SRC_DESC ?></td>
      </tr>
      <tr><td colspan="3"><h1><?php echo _COM_A_PMS_TITLE ?></h1></td></tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_PMS ?></td>
         <td align="left" valign="top"><?php echo $lists['pm_component']; ?></td>
         <td align="left" valign="top"><?php echo _COM_A_PMS_DESC ?></td>
      </tr>
      <tr><td colspan="3"><h1><?php echo _COM_A_COMBUILDER_TITLE ?></h1></td></tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_COMBUILDER ?></td>
         <td align="left" valign="top"><?php echo $lists['cb_profile']; ?></td>
         <td align="left" valign="top"><?php echo _COM_A_COMBUILDER_DESC ?></td>
      </tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_COMBUILDER_PROFILE ?></td>
         <td align="left" valign="top"><a href="index2.php?option=com_joomlaboard&amp;task=loadCBprofile" style="text-decoration:none;" title="<?php echo _COM_A_COMBUILDER_PROFILE_DESC;?>"><?php echo _COM_A_COMBUILDER_PROFILE_CLICK ?></a></td>
         <td align="left" valign="top"><?php echo _COM_A_COMBUILDER_PROFILE_DESC ?></td>
      </tr>
      <tr><td colspan="3"><h1><?php echo _COM_A_MOSBOT_TITLE ?></h1></td></tr>
      <tr align="center" valign="middle">
         <td align="left" valign="top"><?php echo _COM_A_MOSBOT ?></td>
         <td align="left" valign="top"><?php echo $lists['discussBot']; ?></td>
         <td align="left" valign="top"><?php echo _COM_A_MOSBOT_DESC ?><br /><br />
            <!-- Start Arno code test -->
            <script language="javascript">
            <!--
            function openWin(url)
            {
               var newWin= window.open(url,"popup","toolbar=no,scrollbars=yes,width=500,height=250,left=0,top=0");

              newWin.focus();
            }
            //-->
            </script>
            <input type="button" class="button" value="<?php echo _COM_A_BOT_REFERENCE;?>" onClick="openWin('components/com_joomlaboard/joomlaboard_mosbot_help.php')">
            <!-- End Arno code test -->
         </td>
      </tr>
   </table>
	<?php
	$tabs->endTab();
	$tabs->endPane();
	?>
   <input type="hidden" name="task" value="showConfig" />
   <input type="hidden" name="option" value="<?php echo $option; ?>" />
   <input type="hidden" name="cfg_version" value="<?php echo $sbConfig['version']; ?>" />
   </form>


<?php
   }

function showInstructions($database, $option, $mosConfig_lang)
   {
      include(JB_ABSADMPATH.'/joomlaboard_config.php');
   ?>


   <table width="90%" border="0" cellpadding="2" cellspacing="2" class="adminForm">
      <TR>
        <td width="100%" >
        <table width="60%"><tr>
        <td><img src="components/com_joomlaboard/images/logo.png"></td><td><div align="center" class="sectionname">Инструкции</div></td>
        </tr></table>
        <p>
        Спасибо за использование форума Joomlaboard.<br /><br />
        Обширная документация относительно Joomlaboard,  может быть найдена на этом  вебсайте. Проверьте главное меню для 'Документации' и выберите 'Joomlaboard 0.7 и' секция для всех документов. Документы могут быть загружены в формате PDF. </p>
        <p>Там Вы найдете все, что Вы должны знать об Администрировании Форума. Если у Вас возникли какие-нибудь вопросы, замечания, пожелания или предложения: не стесняйтесь связываться со мной на этом вебсайте  <a href="http://tsmf.jigsnet.com" target="_blank">Two Shoes Module Factory</a><br />
          <br />
        PS. Я также хотел бы получить известие от Вас, если Вам понравился этот Компонент Форума ;-) </p>
      </p>
      </td></tr></table>
      <?php global $version2; ?>
 <?php
   } //end function showInstructions

function showCss($file, $option)
{

   $file = stripslashes($file);
   $f=fopen($file,"r");
   $content = fread($f, filesize($file));
   $content = htmlspecialchars($content);
   ?>
   <form action="index2.php?" method="post" name="adminForm" class="adminForm" id="adminForm">
   <table cellpadding="4" class="adminheading" cellspacing="0" border="0" width="100%">
      <tr>
         <th class="templates" width="100%">Редактор стиля шаблона  для Joomlaboard</th>
      </tr>
      <tr>
         <td><img src="images/cpanel.png" width="16px" height="16px" align="middle" border="0"/>  <a href="index2.php?option=com_joomlaboard"><?php echo _COM_C_BACK;?></a></td>
      </tr>
   </table>
   <table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminform">
       <tr>
         <th colspan="4">Путь: <?php echo $file; ?></td> 
       </tr>
       <tr>
         <td> <textarea cols="100" rows="20" name="csscontent"><?php echo $content; ?></textarea>
         </td>
       </tr>
       <tr>
         <td class="error">Пожалуйста отметьте: Файл Шаблона CSS должен быть достуным для записи, чтобы сохранить изменения.</td>
       </tr>
   </table>
   <input type="hidden" name="file" value="<?php echo $file; ?>" />
   <input type="hidden" name="option" value="<?php echo $option; ?>">
   <input type="hidden" name="task" value="">
   <input type="hidden" name="boxchecked" value="0">
   </form>
   <?php

}//end function showCss

   function showProfiles( $option, $mosConfig_lang,&$profileList,$countPL,$pageNavSP,$order, $search)
   {


      ?>
      <form action="index2.php" method="POST" name="adminForm">
         <table class="adminheading" cellpadding="4" cellspacing="0" border="0" width="100%">
         <tr>
            <th width="100%" class="user">Управление параметрами пользователя Joomlaboard</th>
            <td nowrap align="right"><?php echo _COM_A_DISPLAY;?></td>
            <td nowrap  align="right">
               <?php echo $pageNavSP->writeLimitBox('index2.php?option='.$option.'&amp;task=profiles'); ?>
            </td>
            <td nowrap align="right">Поиск:</td>
            <td nowrap align="right"> <input type="text" name="search" value="<?php echo $search;?>" class="inputbox" onChange="document.adminForm.submit();" />
            </td>
         </tr>
         <tr>
            <td colspan="1"><img src="images/cpanel.png" width="16px" height="16px" align="middle" border="0"/>  <a href="index2.php?option=com_joomlaboard"><?php echo _COM_C_BACK;?></a></td>
            <td colspan="4" nowrap>
                       сортировать по: <a href="index2.php?option=com_joomlaboard&task=profiles&order=0">пользователям</a>; <a href="index2.php?option=com_joomlaboard&task=profiles&order=1">модераторам</a>; <a href="index2.php?option=com_joomlaboard&task=profiles&order=2">имени</a></td>
         </tr>
   </table>
      <table class="adminlist" border=0 cellspacing=0 cellpadding=3 width="100%" >
      <tr>
         <th width="20"><input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $profileList ); ?>);" /></th>
         <th width="10">id</th>
         <th width="100">Имя</th>
         <th width="100">email</th>
         <th width="15">Модератор</th>
         <th width="10">Просмотр</th>
         <th width="*" >Подпись</th>
      </tr>
      <?php
      if ($countPL>0)
      {
         $k=0;
         //foreach ($profileList as $pl)
         $i = 0;
         for ($i=0, $n=count( $profileList ); $i < $n; $i++)
         {
            $pl = &$profileList[$i];

            $k = 1-$k;
            ?>
            <tr class="row<?php echo $k;?>">
               <td width="20"><input type="checkbox" id="cb<?php echo $i;?>" name="uid[]" value="<?php echo $pl->id; ?>" onClick="isChecked(this.checked);"></td>
               <td width="10"><a href="#edit" onclick="return listItemTask('cb<?php echo $i; ?>','userprofile')"><?php echo $pl->userid;?></a></td>
               <td width="100"><a href="#edit" onclick="return listItemTask('cb<?php echo $i; ?>','userprofile')"><?php echo $pl->name;?></a></td>
               <td width="100"><?php echo $pl->email;?>&nbsp;</td>
               <td align="center" width="15"><?php if($pl->moderator){echo "Yes";}else{echo "No";} ;?>&nbsp;</td>
               <td align="center" width="10"><?php echo $pl->view;?>&nbsp;</td>
               <td width="*" ><?php echo $pl->signature;?>&nbsp;</td>
            </tr>
            <?php
         }
      }
      else
      {
         echo "<tr><td colspan=\"7\">Не найдено профиля пользователя.</td></tr>";
      }?>
   <input type="hidden" name="order" value="<?php echo "$order";?>">
   <input type="hidden" name="option" value="<?php echo $option; ?>">
   <input type="hidden" name="task" value="showprofiles">
   <input type="hidden" name="boxchecked" value="0">
      <tr>
         <th align="center" colspan="7">
            <?php echo $pageNavSP->writePagesLinks(); ?></th>
      </tr>
      <tr>
         <td align="center" colspan="7">
            <?php echo $pageNavSP->writePagesCounter(); ?></td>
      </tr>
   </table>


   </form>
   <?php
   }//end function showProfiles


   function newModerator ($option, $id, $moderators, &$modIDs,$forumName, &$userList,$countUL,$pageNav) {

   ?>
   <form action="index2.php" method="post" name="adminForm">
         <table cellpadding="4" class="adminheading" cellspacing="0" border="0" width="100%">
         <tr>
            <th width="100%" class="user">Добавить модератора на <?php echo $forumName;?> </th>
            <td nowrap><?php echo _COM_A_DISPLAY;?></td>
            <td>
               <?php echo $pageNav->writeLimitBox('index2.php?option='.$option.'&amp;task=newmoderator&amp;id='.$id); ?>
            </td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
         </tr>
   </table>
      <table class="adminlist" border=0 cellspacing=0 cellpadding=3 width="100%" >
      <tr>
         <th width="20">#</th>
         <th width="20">
            <input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $userList ); ?>);" />
         </th>
         <th>id</th>
         <th align="left">Имя</th>
         <th align="left">email</th>
         <th>Опубликован</th>
         <th>&nbsp;</th>
      </tr>
      <?php
      if ($countUL>0)
      {
         $k=0;
         $i = 0;
         for ($i=0, $n=count( $userList ); $i < $n; $i++)
         {
            $pl = &$userList[$i];

            $k = 1-$k;
            ?>
            <tr class="row<?php echo $k;?>">
               <td width="20" align="right"><?php echo $i+$pageNav->limitstart+1;?></td>
               <td width="20"><input type="checkbox" id="cb<?php echo $i;?>" name="cid[]" value="<?php echo $pl->id; ?>" onClick="isChecked(this.checked);"></td>
               <td width="20"><a href="index2.php?option=com_joomlaboard&task=userprofile&do=show&user_id=<?php echo $pl->id;?>"><?php echo $pl->id;?>&nbsp;</td>
               <td ><?php echo $pl->name;?>&nbsp;</td>
               <td ><?php echo $pl->email;?>&nbsp;</td>
               <td align="center">
               <?php
               if($moderators)
               {
                  if (in_array($pl->id, $modIDs))
                  { echo "<img src=\"images/tick.png\">";}
                  else{
                     echo "<img src=\"images/publish_x.png\">";
                  }
               }else {
                  echo "<img src=\"images/publish_x.png\">";
               }?>
               </td>
               <td >&nbsp;</td>
            </tr>
            <?php
         }
      }
      else
      {
         echo "<tr><td align='left' colspan='7'>Модераторы не найдены. Прочитайте 'примечание' ниже.</td></tr>";
      }?>
   <input type="hidden" name="option" value="<?php echo $option; ?>">
   <input type="hidden" name="id" value="<?php echo $id; ?>">
   <input type="hidden" name="boxchecked" value="0">
   <input type="hidden" name="task" value="newmoderator">
      <tr>
         <th align="center" colspan="7">
            <?php echo $pageNav->writePagesLinks(); ?></th>
      </tr>
      <tr>
         <td align="center" colspan="7">
            <?php echo $pageNav->writePagesCounter(); ?></td>
      </tr>
      <tr>
         <td colspan="7">
ОТМЕТЬТЕ: Только пользователи, которые имеют установленный флажек модератора в их настройках Joomlaboard, отображаються здесь. 
Чтобы добавить модератора, установите флажек, перейдя к <a href = "index2.php?option=com_joomlaboard&task=profiles"> Управление пользователями</a>, и найдите пользователя, которого Вы хотите сделать модератором. Затем обновите это окно. Флажок ведущего может только быть установлен администратором сайта. </td>
      </tr>
   </table>

   </form>
   <?php
   }

//   function showUserProfile ($database,$mosLang,$user_id,$do,$deleteSig,$signature,$newview,$user_id,$thread,$moderator)
//   {
//
//      include ('components/com_joomlaboard/moderate_user.php');
//   }

   function editUserProfile ($option, $database,$userDetails, $subslist, $selectPref,$selectMod,$selectOrder,$is_an_admin, $uid) {
	global $sbConfig;
   //fill the variables needed later
   foreach($userDetails as $user)
   {
      $signature = $user->signature;
      $username  = $user->name     ;
      $avatar    = $user->avatar   ;
      $ordering  = $user->ordering ;
      //that's what we got now; later the 'future_use' columns can be used..
   }
   $csubslist=count($subslist);

   include_once(JB_ABSADMPATH.'/bb_adm.js');
   include_once(JB_ABSADMPATH.'/joomlaboard_config.php');
   ?>
      <form action="index2.php?option=<?php echo $option;?>" method="POST" name="adminForm">
      <table border=0 cellspacing=0 width="100%" align="center" class="adminlist">
         <tr>
            <th class="user">Профиль для <?php echo $username;?></th></tr>
        </table>

      <table border=0 cellspacing=0 width="100%" align="center" class="adminlist">
         <tr>
         <th colspan="3" class="title">Главные настройки профиля</td>         </tr>
         <tr>
            <td width="150" class="contentpane"><strong>Просматривает чаще</strong>:</td>
            <td align="left" valign="top" class="contentpane">
               <?php
               echo $selectPref;
               ?>            </td>
            <td>&nbsp;</td>
         </tr>
         <tr>
            <td width="150" class="contentpane"><strong>Пишет чаще</strong>:</td>
            <td align="left" valign="top" class="contentpane">
               <?php
               echo $selectOrder;
               ?>            </td>
            <td>&nbsp;</td>
         </tr>
         <tr>
             <td width="150" class="contentpane"><strong>Является модератором</strong>:</td>
             <?php
             //admins are always moderators
             if ($is_an_admin)
             {?>
               <td align="left" valign="top" class="contentpane">
               <strong> Да </strong> (постоянный пользователь этого сайта (супер)администратор)
               <input type="hidden" name="moderator" value="1">               </td>
               <td>&nbsp;</td>
               <?php
             }
             else
             {?>
             <td align="left" valign="top" class="contentpane">
                <?php
                echo $selectMod;
             }   ?>            </td>
         <tr>
            <td width="150" class="contentpane">
               <strong>Подпись</strong>:<br />
               <i>макс <?php echo $sbConfig['maxSig'];?> символов</i><br />
               <input readonly type=text name=rem size=3 maxlength=3 value="" class="inputbox"><br />
               в HTML.            </td>
            <td align="left" valign="top" class="contentpane">

            <textarea rows="6" class="inputbox" onMouseOver="textCounter(this.form.message,this.form.rem,<?php echo $sbConfig['maxSig'];?>);" onClick="textCounter(this.form.message,this.form.rem,<?php echo $sbConfig['maxSig'];?>);" onKeyDown="textCounter(this.form.message,this.form.rem,<?php echo $sbConfig['maxSig'];?>);" onKeyUp="textCounter(this.form.message,this.form.rem,<?php echo $sbConfig['maxSig'];?>);"  cols="50" type="text" name="message"><?php echo $signature;?></textarea><br />
               <input type="button" class="button" accesskey="b" name="addbbcode0" value=" B " style="font-weight:bold; width: 30px" onClick="bbstyle(0)" onMouseOver="helpline('b')" />
               <input type="button" class="button" accesskey="i" name="addbbcode2" value=" i " style="font-style:italic; width: 30px" onClick="bbstyle(2)" onMouseOver="helpline('i')" />
               <input type="button" class="button" accesskey="u" name="addbbcode4" value=" u " style="text-decoration: underline; width: 30px" onClick="bbstyle(4)" onMouseOver="helpline('u')" />
               <input type="button" class="button" accesskey="p" name="addbbcode14" value="Img" style="width: 40px"  onClick="bbstyle(14)" onMouseOver="helpline('p')" />
               <input type="button" class="button" accesskey="w" name="addbbcode16" value="URL" style="text-decoration: underline; width: 40px" onClick="bbstyle(16)" onMouseOver="helpline('w')" />
               <br />
               Цвет:
               <select name="addbbcode20" onchange="bbfontstyle('[color=' + this.form.addbbcode20.options[this.form.addbbcode20.selectedIndex].value + ']', '[/color]');this.selectedIndex=0;" onmouseover="helpline('s')">
                 <option style="color:black;  background-color: #FAFAFA" value="">Стандартный</option>
                 <option style="color:red;    background-color: #FAFAFA" value="#FF0000">Красный</option>
                 <option style="color:blue;   background-color: #FAFAFA" value="#0000FF">Синий</option>
                 <option style="color:green;  background-color: #FAFAFA" value="#008000">Зеленый</option>
                 <option style="color:yellow; background-color: #FAFAFA" value="#FFFF00">Желтый</option>
                 <option style="color:orange; background-color: #FAFAFA" value="#FF6600">Оранжевый</option>
               </select>
              Размер: 
               <select name="addbbcode22" onChange="bbfontstyle('[size=' + this.form.addbbcode22.options[this.form.addbbcode22.selectedIndex].value + ']', '[/size]')" onMouseOver="helpline('f')">
                    <option value="1">Очень маленький</option>
                    <option value="2">Маленький</option>
                    <option value="3" selected>Обычный</option>
                    <option value="4">Большой</option>
                    <option value="5">Очень большой</option>
              </select>
               <a href="javascript:bbstyle(-1)" onMouseOver="helpline('a')"><small><?php echo _BBCODE_CLOSA;?></small></a></span><br />
               <input type="text" name="helpbox" size="45" maxlength="100" style="width:400px; font-size:8px" class="options" value="<?php echo _BBCODE_HINT;?>" />            </td>
            </td>
            <?php if ($sbConfig['allowAvatar']){?>
            <td class="contentpane" align="center">
               Аватар пользователя:<br />
               <?php
               if ($avatar!=''){
                  echo '<img src="../components/com_joomlaboard/avatars/'.$avatar.'" ><br />';
                  echo '<input type="hidden" value="'.$avatar.'" name="avatar">';
               }else{
                  echo "<em>None selected</em><br />";
                  echo '<input type="hidden" value="$avatar" name="avatar">';
               }?>            </td>
      <?php } else { echo "<td>&nbsp;</td>"; echo '<input type="hidden" value="" name="avatar">'; }?>
         </tr>
         <tr>
            <td colspan="2" class="contentpane"><input type="checkbox" value="1" name="deleteSig"><i> отметьте для удаления подписи</i></td>
            <?php if ($sbConfig['allowAvatar']){?>
               <td  class="contentpane"><input type="checkbox" value="1" name="deleteAvatar"><i> отметьте для удаления аватара</i></td>
            <?php } else { echo "<td>&nbsp;</td>"; }?>
         </tr>
         <tr cellspacing="3" colspan="2">&nbsp;</td>
         </tr>
      </table>
      <input type="hidden" name="uid" value="<?php echo $uid;?>">
      <input type="hidden" name="task" value="" />
      <input type="hidden" name="option" value="<?php echo $option; ?>" />
      </form>
      <table border=0 cellspacing=0 width="100%" align="center" class="adminlist">
         <tr>
            <th colspan="2" class="title"><?php echo $username;?> подписаны</td>
         </tr>
         <?php
         $enum=1;//reset value
         $k=0; //value for alternating rows
         if($csubslist >0){
            foreach($subslist as $subs){//get all message details for each subscription
               $database->setQuery("select * from #__sb_messages where id=$subs->thread");
               $subdet=$database->loadObjectList();
               foreach($subdet as $sub){
                  $k=1-$k;
                  echo "<tr class=\"row$k\">";
                  echo "  <td>$enum: $sub->subject by $sub->name";
                  echo "  <td>&nbsp;</td>";
                  echo "</tr>";
                  $enum++;
               }
            }
         }
         else{
            echo "<tr><td class=\"message\">No subscriptions found for this user</td></tr>";
         }
      echo "</table>";
   }
   //**************************
   // Prune Forum
   //**************************
   function pruneforum($option, $forumList)
   {
      include(JB_ABSADMPATH.'/joomlaboard_config.php');
      ?>
      <form action="index2.php" method="post" name="adminForm">
      <table class="adminheading" cellpadding="4" cellspacing="0" border="0" width="100%">
         <tr>
            <th width="100%" class="trash" colspan="2"><?php echo _COM_A_PRUNE ?></th>
         </tr>
         <tr>
            <td colspan="2"><img src="images/cpanel.png" width="16px" height="16px" align="middle" border="0"/>  <a href="index2.php?option=com_joomlaboard"><?php echo _COM_C_BACK;?></a></td>
         </tr></table>
      <table class="adminform" cellpadding="4" cellspacing="0" border="0" width="100%">
         
         <tr>
            <th width="100%" colspan="2">&nbsp;</th>
         </tr>
         <tr>
            <td colspan="2"><?php echo _COM_A_PRUNE_DESC ?></td>
         </tr>
         <tr>
            <td nowrap width="10%"><?php echo _COM_A_PRUNE_NAME ?></td>
            <td nowrap><?php echo $forumList['forum'] ?></td>
         </tr>
         <tr>
            <td nowrap width="10%"><?php echo _COM_A_PRUNE_NOPOSTS ?></td>
            <td nowrap><input type="text" name="prune_days" value="30"> <?php echo _COM_A_PRUNE_DAYS ?></td>
         </tr>
      </table>
      <input type="hidden" name="task" value="" />
      <input type="hidden" name="option" value="<?php echo $option; ?>" />

      </form>


   <?php
   }

   //**************************
   // Prune Users
   //**************************
   function pruneusers($option)
   {
      include(JB_ABSADMPATH.'/joomlaboard_config.php');
      ?>
      <form action="index2.php" method="post" name="adminForm">
      <table cellpadding="4" class="adminheading" cellspacing="0" border="0" width="100%">
         <tr>
            <th width="100%" class="trash"><?php echo _COM_A_PRUNE_USERS ?></th>
         </tr>
         <tr>
            <td colspan="2">
               <img src="images/cpanel.png" width="16px" height="16px" align="middle" border="0"/>  <a href="index2.php?option=com_joomlaboard"><?php echo _COM_C_BACK;?></a>
            </td>
         </tr></table>
      <table cellpadding="4" class="adminform" cellspacing="0" border="0" width="100%">
         <tr>
            <th width="100%" colspan="2">&nbsp;</th>
         </tr>
         <tr>
            <td colspan="2"><?php echo _COM_A_PRUNE_USERS_DESC ?></td>
         </tr>
      </table>
      <input type="hidden" name="task" value="" />
      <input type="hidden" name="option" value="<?php echo $option; ?>" />

      </form>


   <?php
   }

   //***************************************
   // uploaded Image browser
   //***************************************
   function browseUploaded ($option, $uploaded,$uploaded_path, $type)
   {
      global $database, $mainframe;
      $map=$mainframe->getCfg( 'absolute_path' );
      require(JB_ABSADMPATH.'/joomlaboard_config.php');
      ?>
      <SCRIPT LANGUAGE="Javascript">
      <!---
      function decision(message, url){
      if(confirm(message)) location.href = url;
      }
      // --->
      </SCRIPT>
      <?php
      echo '<table cellpadding="4" class="adminheading" cellspacing="0" border="0" width="100%">';
      echo '    <tr>';
      echo'      <th width="100%" class="mediamanager">';
      echo $type ? _COM_A_IMGB_IMG_BROWSE : _COM_A_IMGB_FILE_BROWSE;
      echo '</th>';
      echo'    </tr>';
      echo '   <tr>';
      echo '      <td>';
      echo '         <img src="images/cpanel.png" width="16px" height="16px" align="middle" border="0"/>  <a href="index2.php?option=com_joomlaboard">'._COM_C_BACK.'</a>';
      echo '      </td>';
      echo '   </tr>';
      echo'</table>';

      echo '<table class="adminform"><tr><td>';
      echo $type ? _COM_A_IMGB_TOTAL_IMG : _COM_A_IMGB_TOTAL_FILES;
      echo ': '.count($uploaded).'</td></tr>';
      echo '<tr><td>';
      echo $type ? _COM_A_IMGB_ENLARGE : _COM_A_IMGB_DOWNLOAD;
      echo '</td></tr><tr><td>';
      echo $type ? _COM_A_IMGB_DUMMY_DESC.'</td></tr><tr><td>'._COM_A_IMGB_DUMMY.':</td></tr><tr><td> <img src="../components/com_joomlaboard/uploaded/dummy.gif">' : '' ;
      echo '</td></tr></table>';
      echo '<table class="adminform"><tr>';
      for($i = 0; $i < count($uploaded); $i++) {
         $j=$i+1;
         //get the corresponding posting
         $query = $type ? "SELECT mesid FROM #__sb_attachments where filelocation='$map/components/com_joomlaboard/uploaded/images/$uploaded[$i]'" : "SELECT mesid FROM #__sb_attachments where filelocation='$map/components/com_joomlaboard/uploaded/files/$uploaded[$i]'";
         $database->setQuery($query);
         $mesid=$database->loadResult();
         //get the catid for the posting
         $database->setQuery("SELECT catid FROM #__sb_messages where id='$mesid'");
         $catid=$database->loadResult();
         echo $mesid == '' ? '<td>' : '<td>';
         echo '<table style="border: 1px solid #ccc;"><tr><td height="90" width="130" align="center">';
         echo $type ? '<a href="'.$uploaded_path.'/'.$uploaded[$i].'" target="_blank" title="'._COM_A_IMGB_ENLARGE.'" alt="'._COM_A_IMGB_ENLARGE.'"><img src="'.$uploaded_path .'/'. $uploaded[$i].'" width="80" heigth="80" border="0"></a>' : '<a href="'.$uploaded_path.'/'.$uploaded[$i].'" title="'._COM_A_IMGB_DOWNLOAD.'" alt="'._COM_A_IMGB_DOWNLOAD.'"><img src="../components/com_joomlaboard/emoticons/file.png" width="32" heigth="32" border="0"></a>';
         echo '</td></tr><tr><td align="middle">';
         //echo '<input type="radio" name="newAvatar" value="gallery/'.$uploaded[$i].'">';
         echo '<br /><small>';
         echo '<strong>'._COM_A_IMGB_NAME.': </strong> '.$uploaded[$i].'<br />';
         echo '<strong>'._COM_A_IMGB_SIZE.': </strong> '.filesize($uploaded_path.'/'.$uploaded[$i]).' bytes<br />';
         $type ? list($width, $height) = @getimagesize($uploaded_path.'/'.$uploaded[$i]): '' ;
         echo $type ? '<strong>'._COM_A_IMGB_DIMS.': </strong> '.$width.'x'.$height.'<br />' : '' ;
         echo $type ? '<a href="index2.php?option='.$option.'&task=replaceImage&OxP=1&img='.$uploaded[$i].'">'._COM_A_IMGB_REPLACE.'</a><br />' : '';
         echo $type ? '<a href="javascript:decision(\''._COM_A_IMGB_CONFIRM.'\',\'index2.php?option='.$option.'&task=replaceImage&OxP=2&img='.$uploaded[$i].'\')">'._COM_A_IMGB_REMOVE.'</a><br />' : '<a href="javascript:decision(\''._COM_A_IMGB_CONFIRM.'\',\'index2.php?option='.$option.'&task=deleteFile&fileName='.$uploaded[$i].'\')">'._COM_A_IMGB_REMOVE.'</a><br />';
         if ($mesid != ''){
            echo '<a href="../index.php?option='.$option.'&func=view&catid='.$catid.'&id='.$mesid.'#'.$mesid.'" target="_blank">'._COM_A_IMGB_VIEW.'</a>';
         } else {
            echo _COM_A_IMGB_NO_POST;
         }

         echo '</td></tr></table>';
         echo '</td>';
         if (function_exists('fmod')) {
             if (!fmod(($j),5)){echo '</tr><tr align="center" valign="middle">';}
         } else {
             if (!fmodReplace(($j),5)){echo '</tr><tr align="center" valign="middle">';}
         }
      }
      echo '</tr></table>';
      ?>
   <?php
   }
   function show_jb_stats(&$mainframe,$cb,$option) {
   	define('JB_LIVEURL',$mainframe->getCfg( 'live_site' ).'/index.php?option='.$option);
   	define('JB_DIRECTURL',$mainframe->getCfg( 'live_site' ).'/components/'.$option);
   	include_once(JB_ABSPATH.'/classes/stats.class.php');
   	?>
   <table class="adminheading" cellpadding="4" cellspacing="0" border="0" width="100%">
   <tr>
      <th width="100%" class="browser"><?php echo _COM_C_JBSTATS; ?></th>
   </tr>
   <tr>
      <td><img src="images/cpanel.png" width="16px" height="16px" align="middle" border="0"/>  <a href="index2.php?option=com_joomlaboard"><?php echo _COM_C_BACK;?></a></td>
   </tr>
   </table>
   <?php
   $tabs = new mosTabs(2);
   $tabs->startPane('stats');
   $tabs->startTab(_GEN_GENERAL,'page1');
   ?>
	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
	<tr><th><?php echo _STATS_GEN_STATS; ?></th></tr>
	<tr><td>
	<div style="width: 23%; float: left;">
	<?php echo _STATS_TOTAL_MEMBERS; ?><br />
	<?php echo _STATS_TOTAL_REPLIES; ?><br />
	<?php echo _STATS_TOTAL_TOPICS; ?><br />
	<?php echo _STATS_TODAY_TOPICS; ?><br />
	<?php echo _STATS_TODAY_REPLIES; ?><br />
	</div>
	<div style="width: 23%; float: left;">
	<?php 
	echo jbStats::get_total_members().'<br />';
	echo jbStats::get_total_messages() . '<br />';
	echo jbStats::get_total_topics() . '<br />';
	echo jbStats::get_total_topics(date("Y-m-d 00:00:01"),date("Y-m-d 23:59:59")) . '<br />';
	echo jbStats::get_total_messages(date("Y-m-d 00:00:01"),date("Y-m-d 23:59:59")) . '<br />';
	?>
	</div>
	
	<div style="width: 23%; float: left;">
	<?php echo _STATS_TOTAL_CATEGORIES; ?><br />
	<?php echo _STATS_TOTAL_SECTIONS; ?><br />
	<?php echo _STATS_LATEST_MEMBER; ?><br />
	<?php echo _STATS_YESTERDAY_TOPICS; ?><br />
	<?php echo _STATS_YESTERDAY_REPLIES; ?><br />
	</div>
	<div style="width: 23%; float: left;">
	<?php 
	$yesterday = mktime(0, 0, 0, date("m")  , date("d")-1, date("Y"));
	echo jbStats::get_total_categories() . '<br />';
	echo jbStats::get_total_sections() . '<br />';
	echo jbStats::get_latest_member() . '<br />';
	echo jbStats::get_total_topics() . '<br />';
	echo jbStats::get_total_messages(date("Y-m-d 00:00:01",$yesterday),date("Y-m-d 23:59:59",$yesterday)) . '<br />';
	?>
	</div>
	</td></tr>
	<tr> <th>&nbsp;</th></tr>
	</table>
	<?php
	$tabs->endTab();
	$tabs->startTab(_VIEW_USER,'page2');
	?>
	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
	<tr>
	<th width="50%"><?php echo _STATS_TOP_POSTERS; ?></th>
	<?php if ($cb) { ?><th width="50%"><?php echo  _STATS_POPULAR_PROFILE; ?></th><?php } ?>
	</tr>
	
	<tr>
	<td class="sectiontableentry2" valign="top" <?php echo $cb ? 'width="50%"':''; ?>>
	<table border="0" cellpadding="1" cellspacing="0" width="100%">
	<?php
	$jb_top_posters=jbStats::get_top_posters();
	foreach ($jb_top_posters as $jb_poster) {
		if ($jb_poster->posts == $jb_top_posters[0]->posts) {
			$barwidth = 100;
		}
		else {
			$barwidth = round(($jb_poster->posts * 100) / $jb_top_posters[0]->posts);
		}
	?>
	<tr>
		<td valign="top" width="50%">
			<?php echo $jb_poster->username;?>
		</td>
		<td align="left" valign="top" width="40%">
			<img style="margin-bottom:1px" src="<?php echo JB_DIRECTURL.'/graph/bar.gif'; ?>" alt="" height="15" width="<?php echo $barwidth;?>">
		</td>
		<td align="right" valign="top" width="10%"><?php echo $jb_poster->posts;?></td>
	</tr>
	<?php
	}
	?>
	</table>
	</td>
	<?php 	if ($cb) { ?>
	<td class="sectiontableentry2" valign="top" width="50%">
	<table border="0" cellpadding="1" cellspacing="0" width="100%">
	<?php 
		$cb_top_profiles=jbStats::get_top_cbprofiles();
		foreach ($cb_top_profiles as $cb_profile) {
			if ($cb_profile->hits == $cb_top_profiles[0]->hits)
				$barwidth = 100;
			else
				$barwidth = round(($cb_profile->hits * 100) / $cb_top_profiles[0]->hits);
	?>
	<tr>
		<td valing="top" width="50%"><?php echo $cb_profile->user; ?></td>
		<td align="left" valign="top" width="40%">
			<img style="margin-bottom:1px" src="<?php echo JB_DIRECTURL.'/graph/bar.gif'; ?>" alt="" height="15" width="<?php echo $barwidth;?>">
		</td>
		<td align="right" valign="top" width="10%"><?php echo $cb_profile->hits;?></td>
	</tr>
	<?php		
		}
	?>
	</table>
	</td><?php } ?>
	</tr>
	<tr><th <?php echo $cb ? 'colspan="2"':'';?>>&nbsp;</th></tr>
	</table>
	<?php
	$tabs->endTab();
	$tabs->startTab(_GEN_TOPIC,'page3');
	?>
	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
	<tr>
	<th colspan="3" width="100%"><?php echo _STATS_POPULAR_TOPICS; ?></th>
	</tr>
	
	<?php 
	$jb_top_posts=jbStats::get_top_topics();
	foreach ($jb_top_posts as $jb_post) {
		if ($jb_post->hits == $jb_top_posts[0]->hits) {
			$barwidth = 100;
		}
		else {
			$barwidth = round(($jb_post->hits * 100) / $jb_top_posts[0]->hits);
		}
		$link = JB_LIVEURL.'&func=view&id='.$jb_post->id.'&catid='.$jb_post->catid;
	?>
	<tr>
		<td valign="top" width="50%">
			<a href="<?php echo $link;?>"><?php echo $jb_post->subject;?></a>
		</td>
		<td align="left" valign="top" width="40%">
			<img src="<?php echo JB_DIRECTURL.'/graph/bar.gif'; ?>" alt="" style="margin-bottom:1px" height="15" width="<?php echo $barwidth;?>">
		</td>
		<td align="right" valign="top" width="10%"><?php echo $jb_post->hits;?></td>
	</tr>
	<?php } ?>
	<tr> <th colspan="3">&nbsp;</th></tr>
	</table>
	<?php
	$tabs->endTab();
	$tabs->endPane();
   }
} //end class
?>