<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
/**
*
* @version $Id: zone.assign_zones.php 617 2007-01-04 19:43:08Z soeren_nb $
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

$_PHPSHOP_RUSPOST_ASSIGN_ZONE_TITLE = "Назначить тарифный пояс";
$_PHPSHOP_RUSPOST_ASSIGN_STATE = "Область, Край, Республика доставки";
$_PHPSHOP_RUSPOST_CURRENT_ZONE = "Текущий пояс";
$_PHPSHOP_RUSPOST_ASSIGN_ZONE = "Назначить тарифный пояс";

$vendor_state_code = empty($vendor_state_code)?mosgetparam( $_REQUEST, 'vendor_state_code', "77"):$vendor_state_code;
$q = "";
$state_code = "";

$list = "SELECT state_code, state_name FROM #__{vm}_rp_state ";
$list .= "WHERE delivery_id!='0' ";
$list .= "ORDER BY state_name ASC";
$list .= $q . " LIMIT $limitstart, " . $limit;

$count = "SELECT count(*) as num_rows FROM #__{vm}_rp_state ";
$count .= "WHERE delivery_id='1'";
$count .= $q;

$db->query($count);
$db->next_record();
$num_rows = $db->f("num_rows");

$db1 = new ps_DB;

/*
//$list  = "SELECT * FROM #__{vm}_rp_state ORDER BY state_code ASC ";
$count = "SELECT count(*) as num_rows FROM #__{vm}_rp_state, #__{vm}_ruspost_state ";
$count .= "WHERE #__{vm}_rp_state.delivery_id=1 ";
$count .= "AND #__{vm}_rp_state.state_code=#__{vm}_ruspost_state.shopper_state_code ";
$count .= "AND vendor_state_code=$vendor_state_code";
$count .= $q;
*/

echo "<form name=\"adminForm0\" action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">";
?>
<table class="adminheading">
<tr>
    <th><?php echo "Область отправки: " ?></th>
    <td width="right">
    	<?php $ps_zone->list_states("vendor_state_code", $vendor_state_code); ?>
    </td>
	<td>
        <?php echo mm_ToolTip("Выберите область отправки, откуда будет происходить доставка. Назначьте тарифные пояса для каждой области, куда будет происходить доставка.") ?>
    </td>
</tr>
</table>
<?php
echo "<input type=\"hidden\" name=\"option\" value=\"$option\" />";
echo "<input type=\"hidden\" name=\"page\" value=\"". $modulename . "." . $pagename . "\" />";
echo "<input type=\"hidden\" name=\"pshop_mode\" value=\"". mosGetParam( $_REQUEST, "pshop_mode") . "\" />";
echo "<input type=\"hidden\" name=\"task\" value=\"\" />\n";
echo "<input type=\"hidden\" name=\"func\" value=\"\" />\n";
echo "</form>\n";

//Then Start the form
//$formObj->startForm();

// Create the Page Navigation
$pageNav = new vmPageNav( $num_rows, $limitstart, $limit );

// Create the List Object with page navigation
$listObj = new listFactory( $pageNav );

// print out the search field and a list heading
$listObj->writeSearchHeader($_PHPSHOP_RUSPOST_ASSIGN_ZONE, '', $modulename, "assign_zones");

// start the list table
$listObj->startTable();

// these are the columns in the table
$columns = Array(  "#" => "width=\"20\"",
					$_PHPSHOP_RUSPOST_ASSIGN_STATE => '',
					$_PHPSHOP_RUSPOST_CURRENT_ZONE => '',
					$_PHPSHOP_RUSPOST_ASSIGN_ZONE => ''
				);
$listObj->writeTableHeader( $columns );

$db->query($list);
$i = 0;
while ($db->next_record()) {
	$state_code = $db->f("state_code");

	$fetch = "SELECT zone_rate FROM #__{vm}_rp_assign_zone ";
	$fetch .= "WHERE shopper_state_code=$state_code ";
	$fetch .= "AND vendor_state_code=$vendor_state_code";
	$db1->query($fetch);
	$db1->next_record();

	$listObj->newRow();

	// The row number
	$listObj->addCell( $pageNav->rowNumber( $i ) );

	$tmp_cell = '<input type="hidden" name="state_code[]" value="'. $state_code .'" />';
	$tmp_cell .= $db->f("state_name");
	$listObj->addCell( $tmp_cell );

	$tmp_cell = $db1->f("zone_rate")?'<strong>'. $db1->f("zone_rate") .'</strong>':"не назначен";
    $listObj->addCell( $tmp_cell );

	$tmp_cell = $ps_zone->list_zones("zone_rate[]", $db1->f("zone_rate"));

    $listObj->addCell( $tmp_cell );

	$i++;

}

$listObj->writeTable();

$listObj->endTable();

$listObj->writeFooter( $keyword, '&vendor_state_code='.$vendor_state_code );

//$option = empty($option)?mosgetparam( $_REQUEST, 'option', 'com_virtuemart'):$option;
//$formObj->hiddenField( 'vendor_state_code', $vendor_state_code );

// Write your form with mixed tags and text fields
// and finally close the form:
//$formObj->finishForm( "zoneassign", $modulename.'.assign_zones', $option );
?>
<script type="text/javascript">document.adminForm.boxchecked.value = 1;</script>