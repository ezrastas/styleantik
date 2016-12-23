<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
/**
*
* @version $Id: ps_zone.php,v 1.4 2005/09/29 20:01:14 soeren_nb Exp $
* @package VirtueMart
* @subpackage classes
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


class ps_zone {
  var $classname = "ps_zone";

  /*
  ** VALIDATION FUNCTIONS
  **
  */

  function validate_add(&$d) {

    $db = new ps_DB;

    $q = "SELECT * from #__{vm}_rp_zone_rate WHERE group_id='" . $d["group_id"] . "' ";
    $q .= "AND zone_rate='" . $d["zone_rate"] . "'";
    $db->query($q);
    if ($db->next_record()) {
      $d["error"] = "ОШИБКА: Этот тарифный пояс уже существует. Пожалуйста, выбирете другой тарифный пояс.";
      return False;
    }
    if (!$d["zone_rate"]) {
      $d["error"] = "ОШИБКА: Вы должны указать номер тарифного пояса.";
      return False;
    }
    if (!$d["zone_cost"] || !$d["zone_cost_above"]) {
      $d["error"] = "ОШИБКА: Вы не указали должным образом стоимость посылки для данного тарифного пояса. Для бесплатной доставки поставьте 0.00 в каждое поле стоимости.";
      return False;
    }
    return True;
  }

  function validate_delete($d) {

    if (!$d["rate_id"]) {
      $d["error"] = "ERROR:  Please select a zone to delete.";
      return False;
    }
    else {
      return True;
    }
  }

  function validate_update(&$d) {
    $db = new ps_DB;

    if (!$d["zone_rate"]) {
      $d["error"] = "ОШИБКА: Вы должны указать номер тарифного пояса.";
      return False;
    }
    if (!$d["zone_cost"] || !$d["zone_cost_above"]) {
      $d["error"] = "ОШИБКА: Вы не указали должным образом стоимость посылки для данного тарифного пояса. Для бесплатной доставки поставьте 0.00 в каждое поле стоимости.";
      return False;
    }
    return True;
  }

    function validate_assign(&$d) {

    if (!$d["zone_rate"]) {
      $d["error"] = "ERROR:  You must select a zone.";
      return False;
    }
    /*
    if (!$d["country_id"]) {
      $d["error"] = "ERROR:  You must select a country.";
      return False;
    }
    */
    return True;
  }

  /**************************************************************************
   * name: add()
   * created by: mike
   * description: creates a new zone rate record
   * parameters:
   * returns:
   **************************************************************************/
  function add(&$d) {
    $db = new ps_DB;
    //$ps_vendor_id = $_SESSION["ps_vendor_id"];
    //$timestamp = time();

    if (!$this->validate_add($d)) {
      return False;
    }

    foreach ($d as $key => $value)
        $d[$key] = addslashes($value);

    $q = "INSERT INTO #__{vm}_rp_zone_rate (rate_id, group_id, zone_rate, zone_desc, ";
    $q .= "zone_cost, zone_cost_above, zone_tax_rate) VALUES ('";
    $q .= $d["rate_id"] . "','";
    $q .= $d["group_id"] . "','";
    $q .= $d["zone_rate"] . "','";
    $q .= $d["zone_desc"] . "','";
    $q .= $d["zone_cost"] . "','";
    $q .= $d["zone_cost_above"] . "','0')";
    $db->query($q);
    $db->next_record();

    return True;
  }

  /**************************************************************************
   * name: update()
   * created by: mike
   * description: updates function information
   * parameters:
   * returns:
   **************************************************************************/
  function update(&$d) {
    $db = new ps_DB;
    //$ps_vendor_id = $_SESSION["ps_vendor_id"];
    //$timestamp = time();

    if (!$this->validate_update($d)) {
      return False;
    }

    foreach ($d as $key => $value)
        if( !is_array($value))
          $d[$key] = addslashes($value);

    $q = "UPDATE #__{vm}_rp_zone_rate SET ";
    $q .= "rate_id='" . $d["rate_id"];
    $q .= "',group_id='".$d["group_id"];
    $q .= "',zone_rate='" . $d["zone_rate"];
    $q .= "',zone_desc='" . $d["zone_desc"];
    $q .= "',zone_cost='" . $d["zone_cost"];
    $q .= "',zone_cost_above='" . $d["zone_cost_above"];
    $q .= "',zone_tax_rate='0";
    $q .= "' WHERE rate_id='" . $d["rate_id"] . "'";
    $db->query($q);
    $db->next_record();

    return True;
  }

	/**
	* Controller for Deleting Records.
	*/
	function delete(&$d) {

		if (!$this->validate_delete($d)) {
		  return False;
		}
		$record_id = $d["rate_id"];

		if( is_array( $record_id)) {
			foreach( $record_id as $record) {
				if( !$this->delete_record( $record, $d ))
					return false;
			}
			return true;
		}
		else {
			return $this->delete_record( $record_id, $d );
		}
	}
	/**
	* Deletes one Record.
	*/
	function delete_record( $record_id, &$d ) {
		global $db;
		//$ps_vendor_id = $_SESSION["ps_vendor_id"];

		$q = "DELETE FROM #__{vm}_rp_zone_rate WHERE rate_id='$record_id'";
		$db->query($q);
		$db->next_record();
		return True;
	}
  /**************************************************************************
   * name: assign()
   * created by: mike, esmark
   * description: Assigns a zone to a state
   * parameters:
   * returns:
   **************************************************************************/
  function assign(&$d) {
    $db = new ps_DB;
    $timestamp = time();

    if (!$this->validate_assign($d)) {
      return False;
    }
	if( is_array( $d["state_code"] )) {
		$i = 0;
		foreach( $d["state_code"] as $shopper_state_code ) {
        	$q = "REPLACE INTO #__{vm}_rp_assign_zone (vendor_state_code, shopper_state_code, zone_rate) ";
            $q.= "VALUES ('".$d["vendor_state_code"]."', '".$shopper_state_code."', '".$d["zone_rate"][$i]."')";
			$db->query($q);
			$i++;
		}
	}
    return True;
  }
  /**************************************************************************
  ** name: list_groups($list_name,$value)
  ** created by: pfmartin/mwattier
  ** description:  Returns an HTML dropdown box for the states
  ** parameters: $name - name of the HTML dropdown element
  **             $value - Drop down item to make selected
  **             $arr - array used to build the HTML drop down element
  ** returns: prints HTML drop down element to standard output
  ***************************************************************************/
   function list_groups( $value ) {
	$groups = array( "Пересылка посылок из Республики Адыгея, Республики Дагестан, Республики Ингушетия, Кабардино-Балкарской республики, Карачаево-Черкесской республики, Республики Марий Эл, Республики Татарстан, Мордовской республики, Республики Северная Осетия-Алания, Чувашской республики, Астраханской области, Белгородской области, Брянской области, Владимирской области, Волгоградской области, Воронежской области, Ивановской области, Калининградской области, Калужской области, Костромской области, Краснодарского края, Курской области, Липецкой области, Московской области, Нижегородской области, Новгородской области, Орловской области, Пензенской области, Псковской области, Ростовской области, Рязанской области, Самарской области, Саратовской области, Смоленской области, Ставропольского края, Тамбовской области, Тверской области, Тульской области, Ульяновской области, Ярославской области, г. Москвы, г. Санкт-Петербурга и Ленинградской области, Чеченской республики",
	                "Пересылка посылок из Республики Калмыкия, Вологодской области, Республики Карелия, Кировской области, Курганской области, Оренбургской области, Пермской области, Свердловской области, Челябинской области, Республики Башкортостан, Удмуртской Республики, Тюменской области, Алтайского края, Архангельской области, Республики Коми, Красноярского края, Республики Хакассия, Иркутской области, Республики Бурятия, Республики Тыва, Новосибирской области, Омской области",
	                "Пересылка посылок из Кемеровской области, Томской области, Приморского края, Читинской области, Республики Алтай, Мурманской области, Хабаровского края, Еврейского АО, Амурской области, Ханты-Мансийского АО",
	                "Пересылка посылок из Магаданской области, Республики Саха-Якутия, Сахалинской области, Ямало-Ненецкого АО, Ненецкого АО, Камчатской области",
	                "Пересылка посылок из Чукотского АО" );

     return $groups[$value - 1];
   }

  /**************************************************************************
  ** name: list_zones($list_name,$value)
  ** created by: pfmartin/mwattier
  ** description:  Returns an HTML dropdown box for the states
  ** parameters: $name - name of the HTML dropdown element
  **             $value - Drop down item to make selected
  **             $arr - array used to build the HTML drop down element
  ** returns: prints HTML drop down element to standard output
  ***************************************************************************/
   function list_zones($zone_code,$value,$max_code=5) {
     $db = new ps_DB;

	$html = "<select class=\"inputbox\" name=\"$zone_code\">\n";
	$html .= "<option value=\"0";
	if (!$value) {
	    $html.= "\" selected=\"selected";
	}
	$html .= "\">Выбрать</option>\n";
	for ($i = 1; $i <= 5; $i++) {
       $html .= "<option value=\"" . $i;
       if ($value == $i) {
			$html.= "\" selected=\"selected";
       }
       $html .= "\">Пояс " . $i . "</option>\n";
    }
    if ($max_code >=9 ) {
	    $html .= "<option value=\"9\"";
	    if ($value == "9") {
	        $html.= "\" selected=\"selected";
	    }
	    $html .= "\">Авиа</option>\n";
    }
    $html .= "</select>\n";
    return $html;
   }

	/**
	 * Creates a drop-down list of states
	 *
	 * @param string $list_name The name of the select element
	 * @param string $selected_item The value of the pre-selected option
	 * @param int $country_id The ID of a country to filter states from
	 * @param string $extra More attributes for the select element when needed
	 * @return HTML code with the drop-down list
	 */
	function list_states($list_name,$selected_item,$extra="") {
     $db = new ps_DB;

		$q = "SELECT state_name, state_code FROM #__{vm}_rp_state ";
		$q .= "WHERE delivery_id = 1 Or delivery_id = 2 And group_id = !0 ";
		$q .= "ORDER BY state_name";
		$db->query( $q );

		echo "<select class=\"inputbox\" name=\"$list_name\" size=\"1\" onchange=\"document.adminForm0.submit();\">\n";
		while( $db->next_record() ) {
            $selected = "";
            if( $db->f("state_code") == $selected_item ) {
                $selected = "selected=\"selected\"";
            }
            echo "<option value=\"".$db->f("state_code")."\" $selected>".$db->f("state_name");
            echo "</option>\n";
		}
		echo "</select>\n";

		return True;
	}

 /**************************************************************************
  ** name: per_item($rate_id)
  ** created by: mwattier <geek@devcompany.com>
  ** description:  get the per item limit
  ** parameters:
  **
  **
  ** returns: the cost limit for this zone
  ***************************************************************************/
   function per_item($rate_id) {
      $db = new ps_DB;

      $q = "SELECT zone_cost FROM #__{vm}_rp_zone_rate WHERE rate_id ='$rate_id' ";
      $db->query($q);
      $db->next_record();

      return $db->f("zone_cost");

   }
}
?>