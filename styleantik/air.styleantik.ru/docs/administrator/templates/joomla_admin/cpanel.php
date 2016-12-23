<?php
/**
* @version $Id: cpanel.php 2704 2006-03-08 10:26:56Z stingrey $
* @package Joomla RE
* @copyright Авторские права (C) 2005 Open Source Matters. Все права защищены.
* @license Лицензия http://www.gnu.org/copyleft/gpl.html GNU/GPL, смотрите LICENSE.php
* Joomla! - свободное программное обеспечение. Эта версия может быть изменена
* в соответствии с Генеральной Общественной Лицензией GNU, поэтому возможно
* её дальнейшее распространение в составе результата работы, лицензированного
* согласно Генеральной Общественной Лицензией GNU или других лицензий свободных 
* программ или программ с открытым исходным кодом.
* Для просмотра подробностей и замечаний об авторском праве, смотрите файл COPYRIGHT.php.
* 
* @localized (C) 2005 Joom.Ru
* @translator Sourpuss (sourpuss@mamboteam.ru)
*/

/** проверка включения этого файла файлом-источником */
defined( '_VALID_MOS' ) or die( 'Доступ ограничен' );

?>
<table class="adminform">
<tr>
	<td width="55%" valign="top">
	   <?php mosLoadAdminModules( 'icon', 0 ); ?>
	</td>
	<td width="45%" valign="top">
		<div style="width: 100%;">
			<form action="index2.php" method="post" name="adminForm">
			<?php mosLoadAdminModules( 'cpanel', 1 ); ?>
			</form>
		</div>
	</td>
</tr>
</table>