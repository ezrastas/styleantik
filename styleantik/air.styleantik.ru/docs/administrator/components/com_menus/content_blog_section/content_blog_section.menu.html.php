<?php
/**
* @version $Id: content_blog_section.menu.html.php 6070 2006-12-20 02:09:09Z robs $
* @package Joomla RE
* @subpackage Menus
* @localized Авторские права (C) 2005 Joom.Ru - Русский дом Joomla!
* @copyright Авторские права (C) 2005 Open Source Matters. Все права защищены.
* @license Лицензия http://www.gnu.org/copyleft/gpl.html GNU/GPL, смотрите LICENSE.php
* Joomla! - свободное программное обеспечение. Эта версия может быть изменена
* в соответствии с Генеральной Общественной Лицензией GNU, поэтому возможно
* её дальнейшее распространение в составе результата работы, лицензированного
* согласно Генеральной Общественной Лицензией GNU или других лицензий свободных 
* программ или программ с открытым исходным кодом.
* Для просмотра подробностей и замечаний об авторском праве, смотрите файл COPYRIGHT.php.
* 
* @translator Oleg A. Myasnikov aka Sourpuss (sourpuss@mail.ru)
*/

// запрет прямого доступа
defined( '_VALID_MOS' ) or die( 'Доступ запрещен' );

/**
* Writes the edit form for new and existing content item
*
* A new record is defined when <var>$row</var> is passed with the <var>id</var>
* property set to 0.
* @package Joomla RE
* @subpackage Menus
*/
class content_blog_section_html {

	function edit( &$menu, &$lists, &$params, $option ) {
		/* in the HTML below, references to "section" were changed to "section" */
		global $mosConfig_live_site;
		?>
		<div id="overDiv" style="position:absolute; visibility:hidden; z-index:10000;"></div>
		<script language="javascript" type="text/javascript">
		function submitbutton(pressbutton) {
			if (pressbutton == 'cancel') {
				submitform( pressbutton );
				return;
			}
			var form = document.adminForm;
			<?php
			if ( !$menu->id ) {
				?>
				if ( form.name.value == '' ) {
					alert( 'Этот пункт меню должен иметь название' );
					return;
				} else {
					submitform( pressbutton );
				}
				<?php
			} else {
				?>
				if ( form.name.value == '' ) {
					alert( 'Этот пункт меню должен иметь название' );
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
			<?php echo $menu->id ? 'Изменение -' : 'Добавление -';?> Пункт меню :: Блог - Содержимое раздела
			</th>
		</tr>
		</table>

		<table width="100%">
		<tr valign="top">
			<td width="60%">
				<table class="adminform">
				<tr>
					<th colspan="3">
					Детали
					</th>
				</tr>
				<tr>
					<td width="10%" align="right">Название:</td>
					<td width="200px">
					<input class="inputbox" type="text" name="name" size="30" maxlength="100" value="<?php echo htmlspecialchars( $menu->name, ENT_QUOTES ); ?>" />
					</td>
					<td>
					</td>
				</tr>
				<tr>
					<td valign="top" align="right">
					Раздел:
					</td>
					<td>
					<?php echo $lists['sectionid']; ?>
			 		</td>
			 		<td valign="top">
			 		<?php
			 		echo mosToolTip( 'Вы можете выбрать несколько разделов' )
			 		?>
					</td>
				</tr>
				<tr>
					<td align="right">URL:</td>
					<td colspan="2">
                    <?php echo ampReplace($lists['link']); ?>
					</td>
				</tr>
				<tr>
					<td align="right">Родительский пункт меню:</td>
					<td colspan="2">
					<?php echo $lists['parent'];?>
					</td>
				</tr>
				<tr>
					<td valign="top" align="right">Порядок расположения:</td>
					<td colspan="2">
					<?php echo $lists['ordering']; ?>
					</td>
				</tr>
				<tr>
					<td valign="top" align="right">Уровень доступа:</td>
					<td colspan="2">
					<?php echo $lists['access']; ?>
					</td>
				</tr>
				<tr>
					<td valign="top" align="right">Опубликовано (на сайте):</td>
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
					Параметры
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
		<input type="hidden" name="link" value="index.php?option=com_content&task=blogsection&id=0" />
		<input type="hidden" name="componentid" value="0" />
		<input type="hidden" name="task" value="" />
		<input type="hidden" name="hidemainmenu" value="0" />
		</form>
		<script language="Javascript" src="<?php echo $mosConfig_live_site;?>/includes/js/overlib_mini.js"></script>
		<?php
	}
}
?>