<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
/**
*
* @version $Id: russianpost.ini,v 1.0 2007/02/09 21:36:21 esmark Exp $
* @package VirtueMart
* @subpackage shipping
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


/**
* Welcome To The Russian Post Shipping Module
* @copyright (C) 2007 www.virtuemart.ru  All rights reserved.
* @author Kamil Khadeyev <esmark@mail.ru>
*/
class russianpost {

  var $classname = "russianpost";

  /**************************************************************************
  ** name: list_rates($d)
  ** created by: esmark <esmark@mail.ru>
  ** description:  Get the rate according to what is in the basket AND
  **               the zone charge unless it hits the limit, then return that
  ** parameters: $ship_to_info_id - Where are we shipping to
  **             $zone_rate
  ** returns: the cost to ship this order
  ***************************************************************************/
  function list_rates( &$d ) {
    global $CURRENCY_DISPLAY;

    /** Read current Configuration ***/
    require_once(CLASSPATH ."shipping/".$this->classname.".cfg.php");

    $cart = $_SESSION['cart'];

	define ('POSTPACKET_WEIGHT_MIN','0.1');
	define ('POSTPACKET_WEIGHT_ABOVE','0.02');
	define ('POSTPACKET_WEIGHT_MAX','2');
	define ('PACKAGE_WEIGHT_MIN','0.5');
	define ('PACKAGE_WEIGHT_ABOVE','0.5');
	define ('PACKAGE_WEIGHT_MAX','20');

	$i = 0;
    $method_off = array(0, 0, 0, 0);
    $postpacket_simple_weight[$i] = $package_weight[$i] = 0; //�������� ��� ��������� �������
    $postpacket_simple_cost[$i] = $postpacket_registered_cost[$i] = $package_ground_cost[$i] = $package_avia_cost[$i] = 0;

    $db = new ps_DB;
    //���������� ���������� ��������� �������, ��������� � �������
	$q = "SELECT DISTINCT(vendor_id) FROM #__{vm}_product WHERE product_id=".$cart[$i]["product_id"];
	$db->query($q);
	$db->next_record();
    $vendor_id[$i] = $db->f("vendor_id");

    //���������� ���������� ���������

    $dbv = new ps_DB;
	//���������� ������, �������, �����, ������ ���������� ��������
	$q = "SELECT vendor_country, vendor_state, vendor_zip ";
    $q .= "FROM #__{vm}_vendor ";
    $q .= "WHERE vendor_id=".$vendor_id[$i];
	$dbv->query($q);
	$dbv->next_record();
	$vendor_country[$i] = $dbv->f("vendor_country");
	$vendor_state[$i] = $dbv->f("vendor_state");
	$vendor_zip[$i] = $dbv->f("vendor_zip");

	//���������� ������ �������� ����� ������, � ������� ��������� ��������
	$q2 = "SELECT * FROM #__{vm}_rp_state ";
	$q2 .= "WHERE state_code='".$vendor_state[$i]."'";
	$dbv->query($q2);
	$dbv->next_record();
	$group_id[$i] = $dbv->f("group_id");

	//���������� ������ � ������� ���������� �������
	$q = "SELECT country, state, zip FROM #__{vm}_user_info WHERE ";
	$q .= "user_info_id='". $d["ship_to_info_id"] . "'";
	$db->query($q);
	$db->next_record();
	$country = $db->f("country");
	$state = $db->f("state");
	$zip = $db->f("zip");
    if ((!$state || !intval($state)) && (PACKAGE_ON == 1 || PACKAGE_AVIA_ON == 1)) {
		$note[] = "���� ������� �� �����������! ������� ������� ��������.";
        $method_off[2] = $method_off[3] = 1;
  	}

    $order_weight[$i] = $d['weight']; //��� ������
    if (!isset($d['weight']) || !$d['weight']) {
        $note[] = "��� ������(-��) �� ������! �� ��������� ����� ��� ������� ������ �� 0 ��.";
    }

	if ($vendor_country[$i] == $country) {
        //���������� �������� (�� ������)

		if( POSTPACKET_SIMPLE_ON == "1" || POSTPACKET_REGISTERED_ON == "1" ) {
        //������ ��������� ���������

			if( $order_weight[$i] <= POSTPACKET_WEIGHT_MAX ) {

            	if( $order_weight[$i] <= POSTPACKET_WEIGHT_MIN ) {

                	$postpacket_simple_weight[$i] = POSTPACKET_WEIGHT_MIN;
                	$postpacket_simple_cost[$i] = POSTPACKET_SIMPLE_COST;
                	$postpacket_registered_cost[$i] = POSTPACKET_REGISTERED_COST;

                } else {

                    $n = ceil(($order_weight[$i] - POSTPACKET_WEIGHT_MIN) / POSTPACKET_WEIGHT_ABOVE);
	                $postpacket_simple_weight[$i] = $n * POSTPACKET_WEIGHT_ABOVE + POSTPACKET_WEIGHT_MIN;
                    $postpacket_simple_cost[$i] = POSTPACKET_SIMPLE_COST + $n * POSTPACKET_SIMPLE_COST_ABOVE;
                    $postpacket_registered_cost[$i] = POSTPACKET_REGISTERED_COST + $n * POSTPACKET_REGISTERED_COST_ABOVE;

                }
            }
            else { //���������� ���� ���������
	            $method_off[0] = $method_off[1] = 1;
                $note[] = "���������� ������������� ���� ���������! ���� �� ������� �������� ������ ����������, ��������� �� �� ��������� ������� � �������� ��������.";
            }
        }

		if( PACKAGE_ON == "1" || PACKAGE_AVIA_ON == "1" ) { //������ �������

            //��������� ������� ������ ���� � �� ����� ������ (ruspost_on)//

            //��������� ��� �� ������� � ������� ���������� -> �������� ������//

	        //���������� �������� ���� �������� ���������� �� ��������� � �������� ��������
	        $q2 = "SELECT * FROM #__{vm}_rp_assign_zone WHERE vendor_state_code='$vendor_state[$i]' AND shopper_state_code='$state'";
	        $db->query($q2);
	        $db->next_record();
	        $zone_rate[$i] = $db->f("zone_rate");
	        //���������� �������� ���� �������� �������� �� ��������� � �������� ����������
	        if (!$zone_rate[$i] || !intval($zone_rate[$i])) {
	            $q2 = "SELECT * FROM #__{vm}_rp_assign_zone WHERE vendor_state_code='$state' AND shopper_state_code='$vendor_state[$i]'";
	            $db->query($q2);
	            $db->next_record();
	            $zone_rate[$i] = $db->f("zone_rate");
	            $debugnote = "����������� ���� �������� ��������, �.�. ���� �������� �������� �� �����������.";
	        }

            //���������� ������ �������� �����������
            $q3 = "SELECT * FROM #__{vm}_rp_zone_rate WHERE zone_rate = '$zone_rate[$i]' AND group_id = '$group_id[$i]'";
	        $db->query($q3);
	        $db->next_record();
            $zone_cost = $db->f("zone_cost");
            $zone_cost_above = $db->f("zone_cost_above");
	        if (!$zone_cost || !intval($zone_cost)) {
	            $method_off[2] = 1;
	        }

            //���������� ������ ��������� �����������
            $q4 = "SELECT * FROM #__{vm}_rp_zone_rate WHERE zone_rate = '9' AND group_id = '$group_id[$i]'";
	        $db->query($q4);
	        $db->next_record();
            $avia_cost = $db->f("zone_cost");
            $avia_cost_above = $db->f("zone_cost_above");
	        if (!$avia_cost || !intval($avia_cost)) {
	            $method_off[3] = 1;
	        }

            //����������� ���������� ����� �� ��������� ������
            /*
            */

            if( $order_weight[$i] <= PACKAGE_WEIGHT_MAX ) { //������ ��������� �������

            	if( $order_weight[$i] <= PACKAGE_WEIGHT_MIN ) {
                	$package_weight[$i] = PACKAGE_WEIGHT_MIN;
                	$package_ground_cost[$i] = $zone_cost;
                }
                else{
                    $n = ceil(($order_weight[$i]-PACKAGE_WEIGHT_MIN)/PACKAGE_WEIGHT_ABOVE);
                    $package_weight[$i] = $n * PACKAGE_WEIGHT_ABOVE + PACKAGE_WEIGHT_MIN;
                    $package_ground_cost[$i] = $n * $zone_cost_above + $zone_cost;
                }
	            $package_avia_cost[$i] = $package_ground_cost[$i] + $avia_cost;

	            if( $order_weight[$i] > 10 ) { //������ ��������� ����-������� ��������������� ����
	                $package_avia_cost[$i] = $package_avia_cost[$i] + $avia_cost_above;
                }
            }
            else {
	            $method_off[2] = $method_off[3] = 1;
                $note[] = "���������� ������������� ���� �������! ���� �� ������� �������� ������, ��������� �� �� ��������� ������� � �������� ��������.";
            }
        }

        $header = "<h3 align=center>����� ������</h3>";
        $result = $footer = "";

        $post_method = array( POSTPACKET_SIMPLE_ON, POSTPACKET_REGISTERED_ON, PACKAGE_ON, PACKAGE_AVIA_ON );

        //�������� �� ������� ����������� ������
        if (($method_off[0] == 1 || $method_off[1] == 1) && ($post_method[0] == 1 || $post_method[1] == 1)){
            $note[] = "<font color=red>������ �������� ���������� ����������!</font>";
        }
        if (($method_off[2] == 1 || $method_off[3] == 1) && ($post_method[2] == 1 || $post_method[3] == 1)){
            $note[] = "��������� ����������� ������ ��� �������. <font color=red>������ �������� �������� ����������!</font>";
        }

        $rate_name = array( "������� ��������� (�������� ���������)",
                            "�������� ��������� (�������� ���������)",
                            "������ ������� �������� �����������",
                            "������ ������� ��������� �����������" );

        $rate_cost = array( $postpacket_simple_cost[$i],
                            $postpacket_registered_cost[$i],
                            $package_ground_cost[$i],
                            $package_avia_cost[$i] );

        $header .= "<table width=\"100%\">\n<tr class=\"sectiontableheader\">";
        $header .= "<th width=\"190\">������ ��������</th>";
        //$header .= "<th>������ ��������</th>";
        $header .= "<th width=\"20\">���������</th></tr>\n";

        //$n = 0;
        // THE ORDER OF THOSE VALUES IS IMPORTANT:
        // carrier_name|rate_name|totalshippingcosts|rate_id
        foreach ( $post_method as $key => $method_on ) {
            if ($method_on == 1 && $method_off[$key] != 1) {
                $value = urlencode( $this->classname."|����� ������|".$rate_name[$key]."|".$rate_cost[$key] );
                $_SESSION[$value] = "1";
                $result .= "<tr><td><input type=\"radio\" checked=\"checked\" name=\"shipping_rate_id\" value=\"$value\" />";
                $result .= $rate_name[$key]."</td>";
                //$result .= !$n?"<td rowspan = ". $rows['1'] .">". $regions[$id] ."</td>":"";
                $result .= "<td align=center><strong>". $CURRENCY_DISPLAY->getFullValue($rate_cost[$key])."</strong></td></tr>";
                //$n++;
            }
        }

        $result .= "</table>\n";

        //����� ��������� �� �������
        if (isset($note)) {
            $footer .= "<b>����������� �� ������� � ������� ��������:</b><ul>";
            foreach ( $note as $val ) {
                $footer .= "<li> ".$val."</li>";
            }
            $footer .= "</ul>";
        }
    echo $header.$result.$footer;
    }
    else{
    	echo "<b>������ ���������� ��� �������� �� �������� �������. ���������� ������ ���������� � ������ ������!</b>";

    /*
    //������������� ��������
	$q2 = "SELECT country, zone_id FROM #__{vm}_country WHERE country_3_code='$country' ";
	$db->query($q2);
	$db->next_record();
	$zone = $db->f("zone_id");
	$country_name = $db->f("country_name");
    */
    //������ ������������� ��������

    //////////////////////////////
    //		� ����������		//
    // ����������� � ������ 1.1 //
    //////////////////////////////

    }
  if (DEBUG){
    echo"<h3 align=center>������� ������ �������� ����� ������</h3>";
    /*
    echo "���������� ���������� ������:<br>";
    print_r($d);

    echo "<br><br>���������� �������:<br>";
    print_r($cart);
    */

    echo "<h4>��������� ��������:</h4>";
    if (!$vendor_state[$i] || !intval($vendor_state[$i]))
    	echo "<font color=red>������� �������� �� �����������! ��������������� �������� � ��������� �������.</font>";
    else
    	echo "������� ��������, ������ ������������ ����� ID - ".$vendor_state[$i];

    if (!$group_id[$i] || !intval($group_id[$i])) {
        echo "<br><font color=red>������ ��������� �������� �� �����������! ���������� � ����� ������ ��������� ������� ��������.</font>";
    } else
    	echo "<br>������ ��������� �������� - ".$group_id[$i];

    if (!$state || !intval($state))
    	echo "<br><font color=red>������� ���������� �� �����������! ��������������� ����������.</font>";
    else
    	echo "<br>������� ����������, ���� ������������ ����� ID - ".$state;

    if (!isset($zone_rate[$i]) || !$zone_rate[$i]) {
        echo "<br><font color=red>�������� ���� �� ���������! ���������� �������� ����.</font>";
    } else {
        if (isset($debugnote))
            echo "<br><font color=red>".$debugnote."</font>";
    	echo "<br>�������� ���� �".$zone_rate[$i];
    }

    if (!isset($d['weight']) || !$d['weight'])
        echo "<br><font color=red>����� ��� ������ �� ���������! ������� ��� ��� ������� ������.</font>";
    else
    	echo "<br>����� ��� ������� � ������� - ".$d['weight']." ��";

    //�������� ��������� ������
    echo "<br>�������� ��� ��������� - ".$postpacket_simple_weight[$i]." ��";
    echo "<br>��������� ������� ��������� - ".$postpacket_simple_cost[$i];
    echo "<br>��������� �������� ��������� - ".$postpacket_registered_cost[$i];
    /*
    echo "<br>zone_cost - ".$zone_cost;
    echo "<br>zone_cost_above - ".$zone_cost_above;
    */
    echo "<br>�������� ��� ������� - ".$package_weight[$i]." ��";
    echo "<br>��������� ������� �������� �������� - ".$package_ground_cost[$i];
    echo "<br>��������� ������� ��������� �������� - ".$package_avia_cost[$i];
    }
  }

  function get_rate( &$d ) {

	  $shipping_rate_id = $_REQUEST["shipping_rate_id"];
	  $zone_arr = explode("|", urldecode(urldecode($shipping_rate_id)) );
	  $order_shipping = $zone_arr[3];

	  return $order_shipping;
  }

  function get_tax_rate( $zone_id=0 ) {
        return 0;
  }

	/**
    * Validate this Shipping method by checking if the SESSION contains the key
    * @returns boolean False when the Shipping method is not in the SESSION
    */
	function validate( $d ) {
	  $shipping_rate_id = $_REQUEST["shipping_rate_id"];

	  if( array_key_exists( $shipping_rate_id, $_SESSION ))
		return true;
	  else
		return false;
	}

	/**
    * Show all configuration parameters for this Shipping method
    * @returns boolean False when the Shipping method has no configration
    */
    function show_configuration() {

      global $VM_LANG, $sess;
      /** Read current Configuration ***/
      require_once(CLASSPATH ."shipping/".$this->classname.".cfg.php");

$tabs = new mShopTabs(0, 1, "_ruspostform");
$tabs->startPane("userform-pane");

$tabs->startTab( '�������� �� ������', "ruspost-inner");
?>
<fieldset>
<legend>���������</legend>
  <table class="adminform">
    <tr class="row0">
        <td width=50%><strong>�������� ������� ����������</strong></td>
		<td width=50%>
            <input type="checkbox" name="POSTPACKET_SIMPLE_ON" class="inputbox" value="1" <?php if (POSTPACKET_SIMPLE_ON == 1) echo "checked=\"checked\""; ?> />
		</td>
		<td>
          <?php echo mm_ToolTip("��������� �������, ���� ������ �������� ������� �������� ������� ���������.") ?>
        </td>
    </tr>
    <tr class="row1">
        <td><strong>������ ����� �� 100 �</strong>
		</td>
		<td>
            <input type="text" name="POSTPACKET_SIMPLE_COST" class="inputbox" value="<?php echo POSTPACKET_SIMPLE_COST ?>" />
		</td>
		<td>
            <?php echo mm_ToolTip("������ ����� �� 100 �.") ?>
        </td>
    </tr>
    <tr class="row0">
        <td><strong>������ �� ����������� 20 �</strong>
		</td>
		<td>
            <input type="text" name="POSTPACKET_SIMPLE_COST_ABOVE" class="inputbox" value="<?php echo POSTPACKET_SIMPLE_COST_ABOVE ?>" />
		</td>
		<td>
            <?php echo mm_ToolTip("������ �� ������ ����������� ������ ��� �������� 20 � ����.") ?>
        </td>
    </tr>
	<tr class="row1">
        <td><strong>�������� �������� ����������</strong></td>
		<td>
            <input type="checkbox" id="POSTPACKET_REGISTERED_ON" name="POSTPACKET_REGISTERED_ON" class="inputbox" value="1" <?php if (POSTPACKET_REGISTERED_ON == 1) echo "checked=\"checked\""; ?> />
		</td>
		<td>
          <?php echo mm_ToolTip("��������� �������, ���� ������ �������� ������� �������� �������� ���������.") ?>
        </td>
    </tr>
    <tr class="row0">
        <td><strong>������ ����� �� 100 �</strong>
		</td>
		<td>
            <input type="text" name="POSTPACKET_REGISTERED_COST" class="inputbox" value="<?php echo POSTPACKET_REGISTERED_COST ?>" />
		</td>
		<td>
            <?php echo mm_ToolTip("������ ����� �� 100 �.") ?>
        </td>
    </tr>
    <tr class="row1">
        <td><strong>������ �� ����������� 20 �</strong>
		</td>
		<td>
            <input type="text" name="POSTPACKET_REGISTERED_COST_ABOVE" class="inputbox" value="<?php echo POSTPACKET_REGISTERED_COST_ABOVE ?>" />
		</td>
		<td>
            <?php echo mm_ToolTip("������ �� ������ ����������� ������ ��� �������� 20 � ����.") ?>
        </td>
    </tr>
  </table>
</fieldset>
<br />
<fieldset>
<legend>�������</legend>
  <table class="adminform">
    <tr class="row0">
        <td width=50%><strong>�������� �������� �����������</strong></td>
		<td width=50%>
            <input type="checkbox" name="PACKAGE_ON" class="inputbox" value="1" <?php if (PACKAGE_ON == 1) echo "checked=\"checked\""; ?> />
		</td>
		<td>
          <?php echo mm_ToolTip("��������� �������, ���� ������ �������� ������� �������� ������� �������� �����������.") ?>
        </td>
    </tr>
    <tr class="row1">
        <td><strong>�������� ��������� �����������</strong></td>
        <td>
            <input type="checkbox" id="PACKAGE_AVIA_ON" name="PACKAGE_AVIA_ON" class="inputbox" value="1" <?php if (PACKAGE_AVIA_ON == 1) echo "checked=\"checked\""; ?> />
        </td>
        <td>
          <?php echo mm_ToolTip("��������� �������, ���� ������ �������� ������� �������� ������� ��������� �����������.") ?>
        </td>
    </tr>
    <tr class="row0">
        <td><strong>������ �� ��������� �������</strong></td>
		<td><a href=<?php echo $sess->url( $_SERVER['PHP_SELF']."?page=zone.zone_list" ) ?>>����������������</a></td>
		<td>
          <?php echo mm_ToolTip("��������� �� ������, ����� ���������������� ������ �� ��������� ������� �� ������.") ?>
        </td>
    </tr>
    <tr class="row1">
        <td><strong>��������� �������� ����</strong>
		</td>
		<td><a href=<?php echo $sess->url( $_SERVER['PHP_SELF']."?pshop_mode=admin&page=zone.assign_zones" ) ?>>����������������</a></td>
		<td>
            <?php echo mm_ToolTip("��������� �� ������, ����� ���������������� �������� ���� �� ������ �������� �� ���� ��������� ������.") ?>
        </td>
    </tr>
<!--
    <tr class="row0">
        <td><strong>�������� ���� ������ �� 10 ��</strong>
		</td>
		<td>
            <input type="text" name="PACKAGE_AVIA_COST" class="inputbox" value="" />
		</td>
		<td>
            <?php echo mm_ToolTip("��� ��������� ������� ������ �� 10 �� �� ���� ��������� ������ ������������ � �������� �������� ����� �����������, ������������� �����������������, �� ��������� ��������� �������� ����.") ?>
        </td>
    </tr>
    <tr class="row1">
        <td><strong>�������� � ����� �� ��� ����� ������� ������ ����� 10 ��</strong>
		</td>
		<td>
            <input type="text" name="PACKAGE_AVIA_COST_ABOVE" class="inputbox" value="" />
		</td>
		<td>
            <?php echo mm_ToolTip("�� �������  � �������� \"���������\", ����������������, � ����� ������ ����� 10 �� ��������� �������� � ����� �� ��� ����� �������.") ?>
        </td>
-->
    </tr>
  </table>
</fieldset>
    <?php
    $tabs->endTab();

    $tabs->startTab( '������������� ��������', "ruspost-international");
    echo "<h3 align=center>� ����������</h3>";
    echo "<p align=center>����������� � ������ 1.1.</p><br><br>";
    $tabs->endTab();
    $tabs->startTab( '���������', "ruspost-international");
    ?>
    <p>������� ��� ������ ����� ������ ����������<a href="http://forum.virtuemart.ru/index.php?topic=546.0">�����</a>, � ��������� ������� ��������� <a href="http://forum.virtuemart.ru/index.php?topic=235.0">�����</a>.
    <br>���������� ������ ������ �������� ����� ������, <br>��������������� ��������� ���������� ��<br>
    ������.������: 4100138070455,<br>
    WebMoney: R182387693399,<br>
    Rupay: RU768145791.</p><br>
    <?php
    $tabs->endTab();
    $tabs->endPane();

      // return false if there's no configuration
      return true;
   }
  /**
  * Returns the "is_writeable" status of the configuration file
  * @param void
  * @returns boolean True when the configuration file is writeable, false when not
  */
   function configfile_writeable() {
      return is_writeable( CLASSPATH."shipping/".$this->classname.".cfg.php" );
   }

	/**
	* Writes the configuration file for this shipping method
	* @param array An array of objects
	* @returns boolean True when writing was successful
	*/
   function write_configuration( &$d ) {
      global $vmLogger;

    if (!isset($d['POSTPACKET_SIMPLE_ON'])) $d['POSTPACKET_SIMPLE_ON'] = 0;
    if (!isset($d['POSTPACKET_REGISTERED_ON'])) $d['POSTPACKET_REGISTERED_ON'] = 0;
    if (!isset($d['PACKAGE_ON'])) $d['PACKAGE_ON'] = 0;
    if (!isset($d['PACKAGE_AVIA_ON'])) $d['PACKAGE_AVIA_ON'] = 0;

      $my_config_array = array("POSTPACKET_SIMPLE_ON" => $d['POSTPACKET_SIMPLE_ON'],
							  "POSTPACKET_REGISTERED_ON" => $d['POSTPACKET_REGISTERED_ON'],
							  "PACKAGE_ON" => $d['PACKAGE_ON'],
							  "PACKAGE_AVIA_ON" => $d['PACKAGE_AVIA_ON'],
							  "POSTPACKET_SIMPLE_COST" => $d['POSTPACKET_SIMPLE_COST'],
							  "POSTPACKET_SIMPLE_COST_ABOVE" => $d['POSTPACKET_SIMPLE_COST_ABOVE'],
							  "POSTPACKET_REGISTERED_COST" => $d['POSTPACKET_REGISTERED_COST'],
							  "POSTPACKET_REGISTERED_COST_ABOVE" => $d['POSTPACKET_REGISTERED_COST_ABOVE'],
//							  "PACKAGE_AVIA_COST" => $d['PACKAGE_AVIA_COST'],
//							  "PACKAGE_AVIA_COST_ABOVE" => $d['PACKAGE_AVIA_COST_ABOVE']
							  );
      $config = "<?php\n";
      $config .= "defined('_VALID_MOS') or die('Direct Access to this location is not allowed.'); \n\n";
      foreach( $my_config_array as $key => $value ) {
        $config .= "define ('$key', '$value');\n";
      }

      $config .= "?>";

      if ($fp = fopen(CLASSPATH ."shipping/".$this->classname.".cfg.php", "w")) {
          fputs($fp, $config, strlen($config));
          fclose ($fp);
          return true;
     }
     else {
		$vmLogger->err( "������ ������ ����� ������������" );
        return false;
	 }
   }

}
?>