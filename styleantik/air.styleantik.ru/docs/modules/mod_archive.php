<?php
/**
* @version $Id: mod_archive.php 5883 2006-11-29 23:26:33Z predator $
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
* @localized (C) 2005-2006 Joom.Ru - Русский дом Joomla!
* @translator Sourpuss (sourpuss@mamboteam.ru)
*/

// запрет прямого доступа
defined( '_VALID_MOS' ) or die( 'Доступ запрещен' );

$count 	= intval( $params->def( 'count', 10 ) );
$now 	= _CURRENT_SERVER_TIME;

$query = "SELECT MONTH(created) AS created_month, created, id, sectionid, title, YEAR(created) AS created_year"
. "\n FROM #__content"
. "\n WHERE ( state = -1 AND checked_out = 0 AND sectionid > 0 )"
. "\n GROUP BY created_year DESC, created_month DESC"
;
$database->setQuery( $query, 0, $count );
$rows = $database->loadObjectList();

if( count( $rows ) ) {

echo '<ul>';

foreach ( $rows as $row ) {
	$created_month 	= mosFormatDate ( $row->created, "%m" );
	$month_name 	= mosFormatDate ( $row->created, "%B" );
	$created_year 	= mosFormatDate ( $row->created, "%Y" );
	$link			= sefRelToAbs( 'index.php?option=com_content&amp;task=archivecategory&amp;year='. $created_year .'&amp;month='. $created_month .'&amp;module=1' );
	$text			= $month_name .', '. $created_year;
	?>
	<li>
		<a href="<?php echo $link; ?>">
			<?php echo $text; ?></a>
	</li>
	<?php
}
echo '</ul>';
}
?>