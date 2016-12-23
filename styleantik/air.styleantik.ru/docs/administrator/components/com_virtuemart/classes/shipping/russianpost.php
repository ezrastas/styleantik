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
    $postpacket_simple_weight[$i] = $package_weight[$i] = 0; //тарифный вес бандероли посылки
    $postpacket_simple_cost[$i] = $postpacket_registered_cost[$i] = $package_ground_cost[$i] = $package_avia_cost[$i] = 0;

    $db = new ps_DB;
    //определяем уникальных продавцов товаров, имеющихся в корзине
	$q = "SELECT DISTINCT(vendor_id) FROM #__{vm}_product WHERE product_id=".$cart[$i]["product_id"];
	$db->query($q);
	$db->next_record();
    $vendor_id[$i] = $db->f("vendor_id");

    //определяем количество продавцов

    $dbv = new ps_DB;
	//определяем страну, область, город, индекс проживания продавца
	$q = "SELECT vendor_country, vendor_state, vendor_zip ";
    $q .= "FROM #__{vm}_vendor ";
    $q .= "WHERE vendor_id=".$vendor_id[$i];
	$dbv->query($q);
	$dbv->next_record();
	$vendor_country[$i] = $dbv->f("vendor_country");
	$vendor_state[$i] = $dbv->f("vendor_state");
	$vendor_zip[$i] = $dbv->f("vendor_zip");

	//определяем регион отправки Почты России, в котором находится продавец
	$q2 = "SELECT * FROM #__{vm}_rp_state ";
	$q2 .= "WHERE state_code='".$vendor_state[$i]."'";
	$dbv->query($q2);
	$dbv->next_record();
	$group_id[$i] = $dbv->f("group_id");

	//определяем страну и область проживания клиента
	$q = "SELECT country, state, zip FROM #__{vm}_user_info WHERE ";
	$q .= "user_info_id='". $d["ship_to_info_id"] . "'";
	$db->query($q);
	$db->next_record();
	$country = $db->f("country");
	$state = $db->f("state");
	$zip = $db->f("zip");
    if ((!$state || !intval($state)) && (PACKAGE_ON == 1 || PACKAGE_AVIA_ON == 1)) {
		$note[] = "Ваша область не установлена! Укажите область доставки.";
        $method_off[2] = $method_off[3] = 1;
  	}

    $order_weight[$i] = $d['weight']; //вес заказа
    if (!isset($d['weight']) || !$d['weight']) {
        $note[] = "Вес товара(-ов) не указан! По умолчанию общий вес товаров принят за 0 кг.";
    }

	if ($vendor_country[$i] == $country) {
        //внутренняя доставка (по России)

		if( POSTPACKET_SIMPLE_ON == "1" || POSTPACKET_REGISTERED_ON == "1" ) {
        //расчет стоимости бандероли

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
            else { //Превышение веса бандероли
	            $method_off[0] = $method_off[1] = 1;
                $note[] = "Превышение максимального веса бандероли! Если вы желаете получить товары бандеролью, разделите их на несколько заказов и закажите отдельно.";
            }
        }

		if( PACKAGE_ON == "1" || PACKAGE_AVIA_ON == "1" ) { //расчет посылки

            //проверить наличие данной зоны в БД Почты России (ruspost_on)//

            //проверить нет ли индекса в списках исключений -> прервать расчет//

	        //определяем тарифный пояс субъекта покупателя по отношению к субъекту продавца
	        $q2 = "SELECT * FROM #__{vm}_rp_assign_zone WHERE vendor_state_code='$vendor_state[$i]' AND shopper_state_code='$state'";
	        $db->query($q2);
	        $db->next_record();
	        $zone_rate[$i] = $db->f("zone_rate");
	        //определяем тарифный пояс субъекта продавца по отношению к субъекту покупателя
	        if (!$zone_rate[$i] || !intval($zone_rate[$i])) {
	            $q2 = "SELECT * FROM #__{vm}_rp_assign_zone WHERE vendor_state_code='$state' AND shopper_state_code='$vendor_state[$i]'";
	            $db->query($q2);
	            $db->next_record();
	            $zone_rate[$i] = $db->f("zone_rate");
	            $debugnote = "Определение зоны обратным способом, т.к. зоны доставки продавца не установлены.";
	        }

            //определяем тарифы наземным транспортом
            $q3 = "SELECT * FROM #__{vm}_rp_zone_rate WHERE zone_rate = '$zone_rate[$i]' AND group_id = '$group_id[$i]'";
	        $db->query($q3);
	        $db->next_record();
            $zone_cost = $db->f("zone_cost");
            $zone_cost_above = $db->f("zone_cost_above");
	        if (!$zone_cost || !intval($zone_cost)) {
	            $method_off[2] = 1;
	        }

            //определяем тарифы воздушным транспортом
            $q4 = "SELECT * FROM #__{vm}_rp_zone_rate WHERE zone_rate = '9' AND group_id = '$group_id[$i]'";
	        $db->query($q4);
	        $db->next_record();
            $avia_cost = $db->f("zone_cost");
            $avia_cost_above = $db->f("zone_cost_above");
	        if (!$avia_cost || !intval($avia_cost)) {
	            $method_off[3] = 1;
	        }

            //определение страхового сбора от стоимости товара
            /*
            */

            if( $order_weight[$i] <= PACKAGE_WEIGHT_MAX ) { //расчет стоимости посылки

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

	            if( $order_weight[$i] > 10 ) { //расчет стоимости авиа-посылки сверхустановлен веса
	                $package_avia_cost[$i] = $package_avia_cost[$i] + $avia_cost_above;
                }
            }
            else {
	            $method_off[2] = $method_off[3] = 1;
                $note[] = "Превышение максимального веса посылки! Если вы желаете получить товары, разделите их на несколько заказов и закажите отдельно.";
            }
        }

        $header = "<h3 align=center>Почта России</h3>";
        $result = $footer = "";

        $post_method = array( POSTPACKET_SIMPLE_ON, POSTPACKET_REGISTERED_ON, PACKAGE_ON, PACKAGE_AVIA_ON );

        //проверка на наличие критических ошибок
        if (($method_off[0] == 1 || $method_off[1] == 1) && ($post_method[0] == 1 || $post_method[1] == 1)){
            $note[] = "<font color=red>Расчет доставки бандеролью невозможен!</font>";
        }
        if (($method_off[2] == 1 || $method_off[3] == 1) && ($post_method[2] == 1 || $post_method[3] == 1)){
            $note[] = "Недостают необходимые данные для расчета. <font color=red>Расчет доставки посылкой невозможен!</font>";
        }

        $rate_name = array( "Простая бандероль (печатная продукция)",
                            "Заказная бандероль (печатная продукция)",
                            "Ценная посылка наземным транспортом",
                            "Ценная посылка воздушным транспортом" );

        $rate_cost = array( $postpacket_simple_cost[$i],
                            $postpacket_registered_cost[$i],
                            $package_ground_cost[$i],
                            $package_avia_cost[$i] );

        $header .= "<table width=\"100%\">\n<tr class=\"sectiontableheader\">";
        $header .= "<th width=\"190\">Способ доставки</th>";
        //$header .= "<th>Регион отправки</th>";
        $header .= "<th width=\"20\">Стоимость</th></tr>\n";

        //$n = 0;
        // THE ORDER OF THOSE VALUES IS IMPORTANT:
        // carrier_name|rate_name|totalshippingcosts|rate_id
        foreach ( $post_method as $key => $method_on ) {
            if ($method_on == 1 && $method_off[$key] != 1) {
                $value = urlencode( $this->classname."|Почта России|".$rate_name[$key]."|".$rate_cost[$key] );
                $_SESSION[$value] = "1";
                $result .= "<tr><td><input type=\"radio\" checked=\"checked\" name=\"shipping_rate_id\" value=\"$value\" />";
                $result .= $rate_name[$key]."</td>";
                //$result .= !$n?"<td rowspan = ". $rows['1'] .">". $regions[$id] ."</td>":"";
                $result .= "<td align=center><strong>". $CURRENCY_DISPLAY->getFullValue($rate_cost[$key])."</strong></td></tr>";
                //$n++;
            }
        }

        $result .= "</table>\n";

        //показ сообщений об ошибках
        if (isset($note)) {
            $footer .= "<b>Уведомления об ошибках в расчете доставки:</b><ul>";
            foreach ( $note as $val ) {
                $footer .= "<li> ".$val."</li>";
            }
            $footer .= "</ul>";
        }
    echo $header.$result.$footer;
    }
    else{
    	echo "<b>Страны покупателя или продавца не являются Россией. Дальнейший расчет невозможен в данной версии!</b>";

    /*
    //Международная доставка
	$q2 = "SELECT country, zone_id FROM #__{vm}_country WHERE country_3_code='$country' ";
	$db->query($q2);
	$db->next_record();
	$zone = $db->f("zone_id");
	$country_name = $db->f("country_name");
    */
    //Расчет международной доставки

    //////////////////////////////
    //		в разработке		//
    // планируется с версии 1.1 //
    //////////////////////////////

    }
  if (DEBUG){
    echo"<h3 align=center>Отладка модуля доставки Почты России</h3>";
    /*
    echo "Содержимое переданных данных:<br>";
    print_r($d);

    echo "<br><br>Содержимое корзины:<br>";
    print_r($cart);
    */

    echo "<h4>Пошаговая проверка:</h4>";
    if (!$vendor_state[$i] || !intval($vendor_state[$i]))
    	echo "<font color=red>Область продавца не установлена! Зарегистрируйте продавца с указанием области.</font>";
    else
    	echo "Область продавца, откуда отправляется товар ID - ".$vendor_state[$i];

    if (!$group_id[$i] || !intval($group_id[$i])) {
        echo "<br><font color=red>Группа субъектов продавца не установлена! Определите к какой группе относится субъект продавца.</font>";
    } else
    	echo "<br>Группа субъектов продавца - ".$group_id[$i];

    if (!$state || !intval($state))
    	echo "<br><font color=red>Область покупателя не установлена! Зарегистрируйте покупателя.</font>";
    else
    	echo "<br>Область покупателя, куда доставляется товар ID - ".$state;

    if (!isset($zone_rate[$i]) || !$zone_rate[$i]) {
        echo "<br><font color=red>Тарифный пояс не определен! Установите тарифный пояс.</font>";
    } else {
        if (isset($debugnote))
            echo "<br><font color=red>".$debugnote."</font>";
    	echo "<br>Тарифный пояс №".$zone_rate[$i];
    }

    if (!isset($d['weight']) || !$d['weight'])
        echo "<br><font color=red>Общий вес товара не определен! Укажите вес для каждого товара.</font>";
    else
    	echo "<br>Общий вес товаров в корзине - ".$d['weight']." кг";

    //проверка расчетных данных
    echo "<br>Тарифный вес бандероли - ".$postpacket_simple_weight[$i]." кг";
    echo "<br>Стоимость простой бандероли - ".$postpacket_simple_cost[$i];
    echo "<br>Стоимость заказной бандероли - ".$postpacket_registered_cost[$i];
    /*
    echo "<br>zone_cost - ".$zone_cost;
    echo "<br>zone_cost_above - ".$zone_cost_above;
    */
    echo "<br>Тарифный вес посылки - ".$package_weight[$i]." кг";
    echo "<br>Стоимость посылки наземным способом - ".$package_ground_cost[$i];
    echo "<br>Стоимость посылки воздушным способом - ".$package_avia_cost[$i];
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

$tabs->startTab( 'Доставка по России', "ruspost-inner");
?>
<fieldset>
<legend>Бандероль</legend>
  <table class="adminform">
    <tr class="row0">
        <td width=50%><strong>Доставка простой бандеролью</strong></td>
		<td width=50%>
            <input type="checkbox" name="POSTPACKET_SIMPLE_ON" class="inputbox" value="1" <?php if (POSTPACKET_SIMPLE_ON == 1) echo "checked=\"checked\""; ?> />
		</td>
		<td>
          <?php echo mm_ToolTip("Поставьте галочку, если хотите включить подсчет доставки простой бандероли.") ?>
        </td>
    </tr>
    <tr class="row1">
        <td><strong>Оплата весом до 100 г</strong>
		</td>
		<td>
            <input type="text" name="POSTPACKET_SIMPLE_COST" class="inputbox" value="<?php echo POSTPACKET_SIMPLE_COST ?>" />
		</td>
		<td>
            <?php echo mm_ToolTip("Оплата весом до 100 г.") ?>
        </td>
    </tr>
    <tr class="row0">
        <td><strong>Оплата за последующие 20 г</strong>
		</td>
		<td>
            <input type="text" name="POSTPACKET_SIMPLE_COST_ABOVE" class="inputbox" value="<?php echo POSTPACKET_SIMPLE_COST_ABOVE ?>" />
		</td>
		<td>
            <?php echo mm_ToolTip("Оплата за каждые последующие полные или неполные 20 г веса.") ?>
        </td>
    </tr>
	<tr class="row1">
        <td><strong>Доставка заказной бандеролью</strong></td>
		<td>
            <input type="checkbox" id="POSTPACKET_REGISTERED_ON" name="POSTPACKET_REGISTERED_ON" class="inputbox" value="1" <?php if (POSTPACKET_REGISTERED_ON == 1) echo "checked=\"checked\""; ?> />
		</td>
		<td>
          <?php echo mm_ToolTip("Поставьте галочку, если хотите включить подсчет доставки заказной бандероли.") ?>
        </td>
    </tr>
    <tr class="row0">
        <td><strong>Оплата весом до 100 г</strong>
		</td>
		<td>
            <input type="text" name="POSTPACKET_REGISTERED_COST" class="inputbox" value="<?php echo POSTPACKET_REGISTERED_COST ?>" />
		</td>
		<td>
            <?php echo mm_ToolTip("Оплата весом до 100 г.") ?>
        </td>
    </tr>
    <tr class="row1">
        <td><strong>Оплата за последующие 20 г</strong>
		</td>
		<td>
            <input type="text" name="POSTPACKET_REGISTERED_COST_ABOVE" class="inputbox" value="<?php echo POSTPACKET_REGISTERED_COST_ABOVE ?>" />
		</td>
		<td>
            <?php echo mm_ToolTip("Оплата за каждые последующие полные или неполные 20 г веса.") ?>
        </td>
    </tr>
  </table>
</fieldset>
<br />
<fieldset>
<legend>Посылка</legend>
  <table class="adminform">
    <tr class="row0">
        <td width=50%><strong>Доставка наземным транспортом</strong></td>
		<td width=50%>
            <input type="checkbox" name="PACKAGE_ON" class="inputbox" value="1" <?php if (PACKAGE_ON == 1) echo "checked=\"checked\""; ?> />
		</td>
		<td>
          <?php echo mm_ToolTip("Поставьте галочку, если хотите включить подсчет доставки посылки наземным транспортом.") ?>
        </td>
    </tr>
    <tr class="row1">
        <td><strong>Доставка воздушным транспортом</strong></td>
        <td>
            <input type="checkbox" id="PACKAGE_AVIA_ON" name="PACKAGE_AVIA_ON" class="inputbox" value="1" <?php if (PACKAGE_AVIA_ON == 1) echo "checked=\"checked\""; ?> />
        </td>
        <td>
          <?php echo mm_ToolTip("Поставьте галочку, если хотите включить подсчет доставки посылки воздушным транспортом.") ?>
        </td>
    </tr>
    <tr class="row0">
        <td><strong>Тарифы на пересылку посылок</strong></td>
		<td><a href=<?php echo $sess->url( $_SERVER['PHP_SELF']."?page=zone.zone_list" ) ?>>Сконфигурировать</a></td>
		<td>
          <?php echo mm_ToolTip("Перейдите по ссылке, чтобы сконфигурировать тарифы на пересылку посылок по России.") ?>
        </td>
    </tr>
    <tr class="row1">
        <td><strong>Назначить тарифный пояс</strong>
		</td>
		<td><a href=<?php echo $sess->url( $_SERVER['PHP_SELF']."?pshop_mode=admin&page=zone.assign_zones" ) ?>>Сконфигурировать</a></td>
		<td>
            <?php echo mm_ToolTip("Перейдите по ссылке, чтобы сконфигурировать тарифный пояс от вашего субъекта ко всем субъектам России.") ?>
        </td>
    </tr>
<!--
    <tr class="row0">
        <td><strong>Почтовый сбор массой до 10 кг</strong>
		</td>
		<td>
            <input type="text" name="PACKAGE_AVIA_COST" class="inputbox" value="" />
		</td>
		<td>
            <?php echo mm_ToolTip("При пересылке посылок массой до 10 кг по всем воздушным линиям федерального и местного значения сверх авиатарифов, установленных авиапредприятиями, за пересылку взимается почтовый сбор.") ?>
        </td>
    </tr>
    <tr class="row1">
        <td><strong>Надбавка к плате за всю массу посылки массой свыше 10 кг</strong>
		</td>
		<td>
            <input type="text" name="PACKAGE_AVIA_COST_ABOVE" class="inputbox" value="" />
		</td>
		<td>
            <?php echo mm_ToolTip("За посылки  с отметкой \"Осторожно\", крупногабаритные, а также массой свыше 10 кг взимается надбавка к плате за всю массу посылки.") ?>
        </td>
-->
    </tr>
  </table>
</fieldset>
    <?php
    $tabs->endTab();

    $tabs->startTab( 'Международная доставка', "ruspost-international");
    echo "<h3 align=center>В разработке</h3>";
    echo "<p align=center>Планируется с версии 1.1.</p><br><br>";
    $tabs->endTab();
    $tabs->startTab( 'Поддержка', "ruspost-international");
    ?>
    <p>Таблицы баз данных Почты России оставляйте<a href="http://forum.virtuemart.ru/index.php?topic=546.0">здесь</a>, о найденных ошибках сообщайте <a href="http://forum.virtuemart.ru/index.php?topic=235.0">здесь</a>.
    <br>Поддержите проект модуля доставки Почта России, <br>проинвестируйте денежными средствами на<br>
    Яндекс.Деньги: 4100138070455,<br>
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
		$vmLogger->err( "Ошибка записи файла конфигурации" );
        return false;
	 }
   }

}
?>