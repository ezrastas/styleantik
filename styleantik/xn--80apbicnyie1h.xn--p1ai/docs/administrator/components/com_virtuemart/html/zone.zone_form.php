<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
/**
*
* @version $Id: zone.zone_form.php,v 1.5 2005/09/30 10:14:30 codename-matrix Exp $
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

$group_id = mosgetparam( $_REQUEST, 'group_id');

$_PHPSHOP_RUSPOST_ZONE_RATE = 'Тарифы на пересылку посылок '. $group_id. ' группы субъектов Почты России';
$_PHPSHOP_RUSPOST_ZONE_FORM_COST_BEFORE = 'Стоимость посылки массой до 500 г';
$_PHPSHOP_RUSPOST_ZONE_FORM_COST_EACH_ABOVE = 'Стоимость за каждые последующие 500 г';
$_PHPSHOP_RUSPOST_ZONE_FORM_RATE = 'Тарифный пояс';
$_PHPSHOP_RUSPOST_ZONE_FORM_DESC = 'Описание пояса';

//First create the object and let it print a form heading
$formObj = &new formFactory( $_PHPSHOP_RUSPOST_ZONE_RATE );
//Then Start the form
$formObj->startForm();

$option = empty($option)?mosgetparam( $_REQUEST, 'option', 'com_virtuemart'):$option;
$rate_id = mosgetparam( $_REQUEST, 'rate_id');

if (!empty($rate_id)) {
  $q = "SELECT * FROM #__{vm}_rp_zone_rate WHERE rate_id='$rate_id'";
  $db->query($q);
  $db->next_record();
}
?>
<br/>

<table class="adminform">
	<tr>
		<td valign="top">
			<div align="right"><strong><?php echo $_PHPSHOP_RUSPOST_ZONE_FORM_RATE;?>:&nbsp;</strong></div>
		</td>
		<td valign="top">
          <?php
          echo $ps_zone->list_zones( "zone_rate", $db->f("zone_rate"), "9" );
          ?>
		</td>
	</tr>
	<tr>
		<td valign="top">
			<div align="right"><strong><?php echo $_PHPSHOP_RUSPOST_ZONE_FORM_DESC;?>:&nbsp;</strong></div>
		</td>
		<td valign="top">
		  <textarea name="zone_desc" rows="7" cols="35"><?php echo $db->sp("zone_desc");?></textarea>
		</td>
	</tr>
	<tr>
	  <td valign="top">
		  <div align="right"><strong><?php echo $_PHPSHOP_RUSPOST_ZONE_FORM_COST_BEFORE;?>:&nbsp;</strong></div>
	  </td>
	  <td valign="top">
		<input type="text" name="zone_cost" size="5" value="<?php
        echo $db->sp("zone_cost")."\" /> ";
	    echo mm_ToolTip("При пересылке посылок массой до 10 кг по всем воздушным линиям федерального и местного значения сверх авиатарифов, установленных авиапредприятиями, за пересылку взимается почтовый сбор.","Воздушным транспортом");
        ?>
	  </td>
	</tr>
	<tr>
	  <td valign="top">
		  <div align="right"><strong><?php echo $_PHPSHOP_RUSPOST_ZONE_FORM_COST_EACH_ABOVE;?>:&nbsp;</strong></div>
	  </td>
	  <td valign="top">
		<input type="text" name="zone_cost_above" size="5" value="<?php
        echo $db->sp("zone_cost_above")."\" /> ";
	    echo mm_ToolTip("За посылки с отметкой «Осторожно», крупногабаритные, а также массой свыше 10 кг взимается надбавка к плате за всю массу посылки.","Воздушным транспортом");
		?>
	  </td>
	</tr>
	<tr>
		<td valign="top" colspan="2">&nbsp; </td>
	</tr>
</table>
<?php
// Add necessary hidden fields
$formObj->hiddenField( 'rate_id', $rate_id );
$formObj->hiddenField( 'group_id', $group_id );

$funcname = !empty($rate_id) ? "updatezone" : "addzone";

// Write your form with mixed tags and text fields
// and finally close the form:
$formObj->finishForm( $funcname, $modulename.'.zone_list', $option );

?>