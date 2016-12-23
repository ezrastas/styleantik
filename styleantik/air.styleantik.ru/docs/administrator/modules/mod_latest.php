<?php
/**
* @version $Id: mod_latest.php 5675 2006-11-07 23:12:11Z friesengeist $
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
* @translator Sourpuss (sourpuss@mail.ru)
*/

// запрет прямого доступа
defined( '_VALID_MOS' ) or die( 'Доступ запрещен' );

$query = "SELECT a.id, a.sectionid, a.title, a.created, u.name, a.created_by_alias, a.created_by"
. "\n FROM #__content AS a"
. "\n LEFT JOIN #__users AS u ON u.id = a.created_by"
. "\n WHERE a.state != -2"
. "\n ORDER BY created DESC"
;
$database->setQuery( $query, 0, 10 );
$rows = $database->loadObjectList();
?>

<table class="adminlist">
<tr>
	<th colspan="3">
	Последнее добавленное содержимое
	</th>
</tr>
<?php
foreach ($rows as $row) {
	if ( $row->sectionid == 0 ) {
		$link = 'index2.php?option=com_typedcontent&amp;task=edit&amp;hidemainmenu=1&amp;id='. $row->id;
	} else {
		$link = 'index2.php?option=com_content&amp;task=edit&amp;hidemainmenu=1&amp;id='. $row->id;
	}

	if ( $acl->acl_check( 'administration', 'manage', 'users', $my->usertype, 'components', 'com_users' ) ) {
		if ( $row->created_by_alias ) {
			$author = $row->created_by_alias;
		} else {
			$linkA 	= 'index2.php?option=com_users&task=editA&amp;hidemainmenu=1&id='. $row->created_by;
			$author = '<a href="'. $linkA .'" title="Изменить данные пользователя">'. htmlspecialchars( $row->name, ENT_QUOTES ) .'</a>';
		}
	} else {
		if ( $row->created_by_alias ) {
			$author = $row->created_by_alias;
		} else {
			$author = htmlspecialchars( $row->name, ENT_QUOTES );
		}
	}
	?>
	<tr>
		<td>
		<a href="<?php echo $link; ?>">
		<?php echo htmlspecialchars($row->title, ENT_QUOTES);?>
		</a>
		</td>
		<td>
		<?php echo $row->created;?>
		</td>
		<td>
		<?php echo $author;?>
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