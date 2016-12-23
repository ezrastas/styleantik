<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
/**
*
* @version $Id: zone.zone_list.php,v 1.0 2007/02/13 20:02:18 esmark Exp $
* @package VirtueMart
* @subpackage html
* @copyright Copyright (C) 2004-2005 Soeren Eberhardt. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/
mm_showMyFileName( __FILE__ );

require_once( CLASSPATH . "pageNavigation.class.php" );
require_once( CLASSPATH . "htmlTools.class.php" );

//$_PHPSHOP_RUSPOST_REGION_LIST_NAME = 'Регион';
$_PHPSHOP_RUSPOST_LIST_ZONE_RATE = 'Тарифный пояс';
$_PHPSHOP_ZONE_LIST_DESC_LBL = 'Описание тарифного пояса';
$_PHPSHOP_ZONE_LIST_COST_PER_LBL = 'Тарифы посылки';
$_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = 'Тарифы за дополнительную массу';

	$group_id = empty($group_id)?mosgetparam( $_REQUEST, 'group_id', "1"):$group_id;

    $group_name = $ps_zone->list_groups( $group_id );

if (!empty($keyword)) {
	$list  = "SELECT * FROM #__{vm}_rp_zone_rate WHERE ";
	$count = "SELECT count(*) as num_rows FROM #__{vm}_rp_zone_rate WHERE group_id=$group_id AND ";
	$q  = "(zone_desc LIKE '%$keyword%')";
	$q .= "ORDER BY zone_rate ASC ";
	$list .= $q . " LIMIT $limitstart, " . $limit;
	$count .= $q;
}
else {
	$q = "";
	$list  = "SELECT * FROM #__{vm}_rp_zone_rate WHERE group_id=$group_id ";
	$list .= "ORDER BY zone_rate ASC ";
	$count = "SELECT count(*) as num_rows FROM #__{vm}_rp_zone_rate";
	$list .= $q . " LIMIT $limitstart, " . $limit;
	$count .= $q;
}
$db->query($count);
$db->next_record();
$num_rows = $db->f("num_rows");

echo "<form name=\"adminForm0\" action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">";
?>
<table class="adminheading" width="50%">
<tr>
    <th><?php echo "Тарифы на пересылку посылок по России: " ?></th>
    <td width=90%>
    <?php
	$html = "<select class=\"inputbox\" name=\"group_id\" size=\"1\" onchange=\"document.adminForm0.submit();\">\n";
	for($i=1; $i<6; $i++) {
       $html .= "<option value=\"" . $i;
       if ($i == $group_id) {
			$html.= "\" selected=\"selected";
       }
       $html .= "\">" . $i . " группа субъектов</option>\n";
     }
     $html .= "</select>\n";
     echo $html."</td><td align=right>";
     echo mm_ToolTip("Выберите группу субъектов, откуда будет происходить доставка. Установите тарифы Почты России для каждого пояса данной группы.");
     echo "</td></tr><tr><td colspan=3><p align=justify>".$group_id.". ".$group_name."</p>";
	?>
    </td>
</tr>
</table>
<?php
echo "<input type=\"hidden\" name=\"option\" value=\"$option\" />";
echo "<input type=\"hidden\" name=\"page\" value=\"". $modulename . "." . $pagename . "\" />";
echo "<input type=\"hidden\" name=\"task\" value=\"\" />\n";
echo "<input type=\"hidden\" name=\"func\" value=\"\" />\n";
//echo "<input type=\"hidden\" name=\"group_id\" value=\"". $group_id ."\" />\n";
echo "</form>\n";

// Create the Page Navigation
$pageNav = new vmPageNav( $num_rows, $limitstart, $limit );

// Create the List Object with page navigation
$listObj = new listFactory( $pageNav );

// print out the search field and a list heading
$listObj->writeSearchHeader("Список тарифных поясов Почты России", "", $modulename, "zone_list");

// start the list table
$listObj->startTable();

// these are the columns in the table
$columns = Array(  "#" => "width=\"20\"",
					"<input type=\"checkbox\" name=\"toggle\" value=\"\" onclick=\"checkAll(".$num_rows.")\" />" => "width=\"20\"",
					$_PHPSHOP_RUSPOST_LIST_ZONE_RATE => '',
					$_PHPSHOP_ZONE_LIST_DESC_LBL => "width=\"30%\"",
					$_PHPSHOP_ZONE_LIST_COST_PER_LBL => '',
					$_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL => '',
					$VM_LANG->_E_REMOVE => "width=\"5%\""
				);
$listObj->writeTableHeader( $columns );

$db->query($list);
$i = 0;
while ($db->next_record()) {
	$listObj->newRow();

	// The row number
	$listObj->addCell( $pageNav->rowNumber( $i ) );

	// The Checkbox
	$listObj->addCell( mosHTML::idBox( $i, $db->f("product_id"), false, "product_id" ) );

	$url = $_SERVER['PHP_SELF']."?page=$modulename.zone_form&limitstart=$limitstart&group_id=$group_id&rate_id=" . $db->f("rate_id");
    if ($db->f("zone_rate") <= "5"){
		$tmp_cell = "<a href=\"" . $sess->url($url) . "\">Пояс ". $db->f("zone_rate"). "</a>";
    }else{
		$tmp_cell = "<a href=\"" . $sess->url($url) . "\">Авиа</a>";
    }
	$listObj->addCell( $tmp_cell );

    $listObj->addCell(  $db->f("zone_desc"));

	$listObj->addCell( $db->f("zone_cost"));

	$listObj->addCell( $db->f("zone_cost_above"));

	$listObj->addCell( $ps_html->deleteButton( "rate_id", $db->f("rate_id"), "deletezone", $keyword, $limitstart ) );

	$i++;
}
$listObj->writeTable();

$listObj->endTable();

$listObj->writeFooter( $keyword, '&group_id='.$group_id );

?>