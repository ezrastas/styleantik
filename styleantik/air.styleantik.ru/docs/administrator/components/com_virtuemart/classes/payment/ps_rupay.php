<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
/**
* @version $Id: ps_rupay.php, v 1.0 2006/02/17 Exp $
* @package Virtuemart
* @subpackage Payment
* @copyright (C) 2006 http://tug.dumagency.ru
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*
* The ps_payment class, containing the payment processing code for russian payment system RUpay
*
*/

class rupay_language {
  var $PHPSHOP_ADMIN_CFG_RUPAY_DEBUG = "Отладочный режим";
  var $PHPSHOP_ADMIN_CFG_RUPAY_DEBUG_EXPLAIN = "Отладочный режим. Когда включен счет не выписывается.";
  var $PHPSHOP_ADMIN_CFG_RUPAY_SITE_ID = "Идентификатор сайта";
  var $PHPSHOP_ADMIN_CFG_RUPAY_SITE_ID_EXPLAIN = "ID Вашего сайта, через который проводятся платежи.";
  var $PHPSHOP_ADMIN_CFG_RUPAY_RUPAY_SECRET_KEY = "Секретный ключ";
  var $PHPSHOP_ADMIN_CFG_RUPAY_RUPAY_SECRET_KEY_EXPLAIN = "Секретный ключ требуется для определения состояния платежа и записан в настройках аккаунта в RUpay.";
  var $PHPSHOP_ADMIN_CFG_RUPAY_NOTIFY_EMAIL = "E-mail для отчётов";
  var $PHPSHOP_ADMIN_CFG_RUPAY_NOTIFY_EMAIL_EXPLAIN = "На этот e-mail Вам будут высылаться информация предварительного запроса и оповещение о платеже.";
  var $PHPSHOP_ADMIN_CFG_RUPAY_METHODS = "Методы оплаты";
  var $PHPSHOP_ADMIN_CFG_RUPAY_METHODS_EXPLAIN = "Выберите методы оплаты из доступных.";
  
  var $PHPSHOP_ADMIN_CFG_RUPAY_STATUS_SUCCESS = "Статус успешной оплаты";
  var $PHPSHOP_ADMIN_CFG_RUPAY_STATUS_SUCCESS_EXPLAIN = "Выбранный статус будет выставлен заказу, который был успешно оплачен.";
  var $PHPSHOP_ADMIN_CFG_RUPAY_PENDING_STATUS = "Статус в процессе оплаты";
  var $PHPSHOP_ADMIN_CFG_RUPAY_PENDING_STATUS_EXPLAIN = "Выбранный статус будет выставлен заказу, который ещё не оплачен, но находится в процессе оплаты.";
  var $PHPSHOP_ADMIN_CFG_RUPAY_STATUS_FAILED = "Статус отмененной оплаты";
  var $PHPSHOP_ADMIN_CFG_RUPAY_STATUS_FAILED_EXPLAIN = "Выбранный статус будет выставлен заказу, который по каким-либо причинам не был оплачен.";

  var $PHPSHOP_RUPAY_ERROR_GET_PAYMENT_PROPERTIES = "Не удалось получить реквизиты для оплаты по этим способом";
  var $PHPSHOP_RUPAY_ERROR_CHECK_PAYMENT_STATUS = "Не удалось проверить статус оплаты";
  var $PHPSHOP_RUPAY_ERROR_GET_PAYMENT_METHODS = "Не удалось получить список способов оплаты";
       
  var $PHPSHOP_RUPAY_ERROR_WRONG_ORDER_NUMBER = "Неправильный номер заказа";
  var $PHPSHOP_RUPAY_ERROR_UNDEFINED_CURRENCY = "Неизвестная валюта";
  var $PHPSHOP_RUPAY_ERROR_MIN_AMOUNT = "Минимально допустимая сумма оплаты - 5 USD";
  var $PHPSHOP_RUPAY_ERROR_NO_METHODS = "Не удалось получить доступные методы оплаты";  
       
  var $PHPSHOP_RUPAY_PAYMENT_METHOD = "Метод оплаты";
  var $PHPSHOP_RUPAY_PAYMENT_CURRENCY = "Валюта";
  var $PHPSHOP_RUPAY_PAYMENT_TOTAL = "Итого с комиссией RUpay";
  var $PHPSHOP_RUPAY_PAYMENT_COMMISSION = "Комиссия RUpay";
  var $PHPSHOP_RUPAY_PAY = "Оплатить";    
  var $PHPSHOP_RUPAY_PAYMENT_METHOD_CERTIFICATION_REQUIRED = "Для оплаты этим способом требуется аттестация продавца (Выводится только при тестировании)";
  var $PHPSHOP_RUPAY_PAYMENT_METHOD_CODE = "Код метода оплаты (Выводится только при тестировании)";
}

class ps_rupay {

  var $classname = "ps_rupay";
  var $payment_code = "RUpay";

  /**
  * Conctructor, that merge our language varibles to VM_LANG
  */
  function ps_rupay() {
    global $VM_LANG;
    $status = $VM_LANG->merge('rupay_language');
    if($status) return true;
    else false;
  }
  
  /**
  * Show all configuration parameters for this payment method
  * @returns boolean False when the Payment method has no configration
  */
  function show_configuration() {
    global $db, $VM_LANG;

    if(htmlspecialchars( $db->sf("payment_extrainfo")) == '' ) {
      $db->record[$db->row]->payment_extrainfo = '<?
/**********************************
this is a "payment extra info" code
**********************************/

$task = mosGetParam($_REQUEST, "task", "show");
require_once( CLASSPATH."payment/".$db->f("payment_class").".php" );

$rupay = new ps_rupay();

switch($task) {
  case "send":
    $method = mosGetParam($_REQUEST, "method");
    $amount = mosGetParam($_REQUEST, "amount");
    $currency = mosGetParam($_REQUEST, "currency");
    $order_id = intval(mosGetParam($_REQUEST, "order_id"));
    $customer_note = mosGetParam($_REQUEST, "customer_note", "");
    if( !$result = $rupay->get_payment_properties( $order_id, $method, $currency, $amount ) )
      echo $VM_LANG->PHPSHOP_RUPAY_ERROR_GET_PAYMENT_PROPERTIES;
    else
      echo $result;
    break;

  case "check":
    if( !$result = $rupay->check_payment_status(  ) )
      echo $VM_LANG->PHPSHOP_RUPAY_ERROR_CHECK_PAYMENT_STATUS;
    else
      echo $result;
    break;

  case "show":
  default:
    $order_id = intval(mosGetParam($vars, "order_id"));
    if( !$result = $rupay->get_payment_methods( $order_id, $_SESSION["vendor_currency"], round( $db->f("order_subtotal")+$tax_total-$discount_total, 2)) ) {
      echo $VM_LANG->PHPSHOP_RUPAY_ERROR_GET_PAYMENT_METHODS;
    }
    else {
      echo $result;
    }
    break;
}

?>';
    }

    /** Read current Configuration ***/
    if($this->has_configuration())
      include_once(CLASSPATH ."payment/".$this->classname.".cfg.php");
    else
      return false;
    ?>
    <table>
      <tr>
        <td><strong><?php echo $VM_LANG->PHPSHOP_ADMIN_CFG_RUPAY_DEBUG ?>:</strong></td>
        <td>
            <select name="RUPAY_DEBUG" class="inputbox" >
            <option <?php if (@RUPAY_DEBUG == '1') echo "selected=\"selected\""; ?> value="1"><?php echo $VM_LANG->_PHPSHOP_ADMIN_CFG_YES; ?></option>
            <option <?php if (@RUPAY_DEBUG != '1') echo "selected=\"selected\""; ?> value="0"><?php echo $VM_LANG->_PHPSHOP_ADMIN_CFG_NO; ?></option>
            </select>
        </td>
        <td><?php echo $VM_LANG->PHPSHOP_ADMIN_CFG_RUPAY_DEBUG_EXPLAIN; ?></td>
      </tr>
      <tr>
        <td><strong><?php echo $VM_LANG->PHPSHOP_ADMIN_CFG_RUPAY_SITE_ID; ?>:</strong></td>
        <td>
            <input type="text" name="RUPAY_SITE_ID" class="inputbox" value="<? if(RUPAY_SITE_ID != '') echo RUPAY_SITE_ID; ?>" />
        </td>
        <td><?php echo $VM_LANG->PHPSHOP_ADMIN_CFG_RUPAY_SITE_ID_EXPLAIN; ?></td>
      </tr>
      <tr>
        <td><strong><?php echo $VM_LANG->PHPSHOP_ADMIN_CFG_RUPAY_RUPAY_SECRET_KEY; ?>:</strong></td>
        <td>
            <input type="text" name="RUPAY_SECRET_KEY" class="inputbox" value="<? if(RUPAY_SECRET_KEY != '') echo RUPAY_SECRET_KEY; ?>" />
        </td>
        <td><?php echo $VM_LANG->PHPSHOP_ADMIN_CFG_RUPAY_RUPAY_SECRET_KEY_EXPLAIN; ?></td>
      </tr>
      <tr>
        <td><strong><?php echo $VM_LANG->PHPSHOP_ADMIN_CFG_RUPAY_NOTIFY_EMAIL; ?>:</strong></td>
        <td>
            <input type="text" name="RUPAY_NOTIFY_EMAIL" class="inputbox" value="<? if(RUPAY_NOTIFY_EMAIL != '') echo RUPAY_NOTIFY_EMAIL; ?>" />
        </td>
        <td><?php echo $VM_LANG->PHPSHOP_ADMIN_CFG_RUPAY_NOTIFY_EMAIL_EXPLAIN; ?></td>
      </tr>
      <tr>
        <td valign="top"><strong><?php echo $VM_LANG->PHPSHOP_ADMIN_CFG_RUPAY_METHODS; ?>:</strong></td>
        <td>
          <select name="RUPAY_PAYMENT_METHODS[]" class="inputbox" multiple="multiple" size="10">
          <?php 
            $method = $this->get_payment_methods_curl();
            if(!defined('RUPAY_PAYMENT_METHODS')) define('RUPAY_PAYMENT_METHODS', '');
            if(RUPAY_PAYMENT_METHODS != '') {
              $my_methods = explode(',', RUPAY_PAYMENT_METHODS);
              if(is_array($my_methods) && $count = count($my_methods)) {
                for($i=0; $i < $count; $i++) {
                  $my_methods[] = intval(trim($my_methods[$i]));                 
                }
              }
              else {
                $my_methods[] = $my_methods;
              }           
            }           
                                                                 
            foreach($method as $key => $value) {
              if(RUPAY_PAYMENT_METHODS == '' || (is_array($my_methods) && in_array($key, $my_methods))) {              
                $selected = 'selected="selected"';
              }
              else {
                $selected = '';
              }
              
              echo '<option '.$selected.' value="'.$key.'">'.$method[$key]['name'].'</option>';
            }
          ?>
          </select>
        </td>
        <td valign="top"><?php echo $VM_LANG->PHPSHOP_ADMIN_CFG_RUPAY_METHODS_EXPLAIN; ?></td>
      </tr>
      
      <!-- STATUSES -->
      <?php      
        $q = "SELECT order_status_name, order_status_code FROM #__{vm}_order_status ORDER BY list_order";
        $dbs = new ps_DB;
        $dbs->query($q);
        $order_status_code = Array();
        $order_status_name = Array();
        
        while ($dbs->next_record()) {
          $order_status_code[] = $dbs->f("order_status_code");
          $order_status_name[] =  $dbs->f("order_status_name");
        }                 
      ?>
      
      <tr>
          <td><strong><?php echo $VM_LANG->PHPSHOP_ADMIN_CFG_RUPAY_STATUS_SUCCESS; ?></strong></td>
          <td>
            <select name="RUPAY_VERIFIED_STATUS" class="inputbox" >
            <?php              
              for ($i=0; $i < sizeof($order_status_code); $i++) {
                if (RUPAY_VERIFIED_STATUS == $order_status_code[$i]) $selected = 'selected="selected"';
                else $selected = '';
                
                echo '<option '.$selected.' value="'.$order_status_code[$i].'">'.$order_status_name[$i].'</option>';
              }
            ?>
            </select>
          </td>
          <td><?php echo $VM_LANG->PHPSHOP_ADMIN_CFG_RUPAY_STATUS_SUCCESS_EXPLAIN; ?>
          </td>
      </tr>
          <tr>
          <td><strong><?php echo $VM_LANG->PHPSHOP_ADMIN_CFG_RUPAY_PENDING_STATUS; ?></strong></td>
          <td>
            <select name="RUPAY_PENDING_STATUS" class="inputbox" >
            <?php              
              for ($i=0; $i < sizeof($order_status_code); $i++) {
                if (RUPAY_PENDING_STATUS == $order_status_code[$i]) $selected = 'selected="selected"';
                else $selected = '';
                
                echo '<option '.$selected.' value="'.$order_status_code[$i].'">'.$order_status_name[$i].'</option>';
              }
            ?>
            </select>
          </td>
          <td><?php echo $VM_LANG->PHPSHOP_ADMIN_CFG_RUPAY_PENDING_STATUS_EXPLAIN; ?></td>
      </tr>
      </tr>
          <tr>
          <td><strong><?php echo $VM_LANG->PHPSHOP_ADMIN_CFG_RUPAY_STATUS_FAILED ?></strong></td>
          <td>
            <select name="RUPAY_INVALID_STATUS" class="inputbox" >
            <?php              
              for ($i=0; $i < sizeof($order_status_code); $i++) {
                if (RUPAY_INVALID_STATUS == $order_status_code[$i]) $selected = 'selected="selected"';
                else $selected = '';
                
                echo '<option '.$selected.' value="'.$order_status_code[$i].'">'.$order_status_name[$i].'</option>';
              }
            ?>
            </select>
          </td>
          <td><?php echo $VM_LANG->PHPSHOP_ADMIN_CFG_RUPAY_STATUS_FAILED_EXPLAIN ?>
          </td>
      </tr>
    </table>
    <?php
  }
  
  

  /**
  * Returns the "has_configuration" status of the module
  * @param void
  * @returns boolean True when the configuration is, false when not
  */
  function has_configuration() {
    if(file_exists( CLASSPATH."payment/".$this->classname.".cfg.php" )) {
      include_once( CLASSPATH."payment/".$this->classname.".cfg.php" );
    }
    else {
      if(!$this->write_configuration($d)) {
        return false;
      }
    }
    return true;
  }

  /**
  * Returns the "is_writeable" status of the configuration file
  * @param void
  * @returns boolean True when the configuration file is writeable, false when not
  */
  function configfile_writeable() {
    return is_writeable( CLASSPATH."payment/".$this->classname.".cfg.php" );
  }

  /**
  * Returns the "is_readable" status of the configuration file
  * @param void
  * @returns boolean True when the configuration file is readable, false when not
  */
  function configfile_readable() {
    return is_readable( CLASSPATH."payment/".$this->classname.".cfg.php" );
  }

  /**
  * Writes the configuration file for this payment method
  * @param array An array of objects
  * @returns boolean True when writing was successful
  */
  function write_configuration( &$d ) {
    global $database, $mosConfig_live_site, $mosConfig_absolute_path, $mosConfig_lang, $mosConfig_locale;

    /** Set default values **/
    if (!is_array($d)) {
      $d['RUPAY_DEBUG'] = 1;
      $d['RUPAY_SECRET_KEY'] = 'tugdumagencygoodsite';
    }
    
    /*print_r($d);*/

    /** Check for empty values **/
    if (is_array($d)) {
      if(!$d['RUPAY_DEBUG']) {
        $my_config_array['RUPAY_DEBUG'] = '';
      }
      else $my_config_array['RUPAY_DEBUG'] = $d['RUPAY_DEBUG'];

      if(!$d['RUPAY_SITE_ID']) {
        $my_config_array['RUPAY_SITE_ID'] = '';
      }
      else $my_config_array['RUPAY_SITE_ID'] = $d['RUPAY_SITE_ID'];

      if(!$d['RUPAY_SECRET_KEY']) {
        $my_config_array['RUPAY_SECRET_KEY'] = '';
      }
      else $my_config_array['RUPAY_SECRET_KEY'] = $d['RUPAY_SECRET_KEY'];

      if(!$d['RUPAY_NOTIFY_EMAIL']) {
        $dbv = new ps_DB;
        $qt  = "SELECT * from #__{vm}_vendor ";
        $qt .= "WHERE vendor_id = '".$_SESSION['ps_vendor_id']."'";
        $dbv->query($qt);
        $dbv->next_record();

        $my_config_array['RUPAY_NOTIFY_EMAIL'] = $dbv->f("contact_email");
      }
      else $my_config_array['RUPAY_NOTIFY_EMAIL'] = $d['RUPAY_NOTIFY_EMAIL'];
      
      if(is_array($d['RUPAY_PAYMENT_METHODS'])) {
        $my_config_array['RUPAY_PAYMENT_METHODS'] = implode(',', $d['RUPAY_PAYMENT_METHODS']);
      }
      else {
        $my_config_array['RUPAY_PAYMENT_METHODS'] = ''; 
      }
      
      if ($d['RUPAY_VERIFIED_STATUS']) $my_config_array ['RUPAY_VERIFIED_STATUS'] = $d['RUPAY_VERIFIED_STATUS'];
      else $my_config_array ['RUPAY_VERIFIED_STATUS'] = 'C';
      
      if ($d['RUPAY_PENDING_STATUS']) $my_config_array ['RUPAY_PENDING_STATUS'] = $d['RUPAY_PENDING_STATUS'];
      else $my_config_array ['RUPAY_PENDING_STATUS'] = 'P';
      
      if ($d['RUPAY_INVALID_STATUS']) $my_config_array ['RUPAY_INVALID_STATUS'] = $d['RUPAY_INVALID_STATUS'];       
      else $my_config_array ['RUPAY_INVALID_STATUS'] = 'X';
    }

    $config = "<?php
defined('_VALID_MOS') or die('Direct Access to this location is not allowed.');

";

    while (list($key, $value) = each($my_config_array)) {
      if(substr($key, 0, 5) == 'text_') {
        $config .= $value."\n";
      }
      else {
        $key = strtoupper($key);
        $config .= "define ('".$key."', '".$value."');\n";
      }
    }
    $config .= "?>";

    /*
    if(file_exists($file) && !is_writable($file)){
      if (!@chmod ($file, 0775)) return false;
    }
    */

    if ($fp = fopen( CLASSPATH."payment/".$this->classname.".cfg.php", "w")) {
      fputs($fp, stripslashes($config));
      fclose($fp);
      return true;
    }
    else {
      return false;
    }
  }

  /**************************************************************************
  ** name: process_payment()
  ** returns:
  ***************************************************************************/
  function process_payment($order_number, $order_total, &$d) {
    return true;
  }

  /**************************************************************************
  ** name: get_payment_methods()
  ** @param double amount of payment
  ** @param string currency code RUR|UAH|EUR|USD on else false
  ** returns: html code on true or false if there is some errors
  ***************************************************************************/
  function get_payment_methods( $order_id, $val='USD', $sum ) {
    global $db, $VM_LANG, $customer_note;

    //echo 'sum: '.$sum.'<br/>';
    $q = "UPDATE #__{vm}_orders SET order_status = '".RUPAY_PENDING_STATUS."' WHERE order_id = ".$order_id."";
    
    if(!$order_id) {
      echo $VM_LANG->PHPSHOP_RUPAY_ERROR_WRONG_ORDER_NUMBER;;
      return false;
    }

    if($val != 'RUR' && $val != 'UAH' && $val != 'EUR' && $val != 'USD') {
      echo $VM_LANG->PHPSHOP_RUPAY_ERROR_UNDEFINED_CURRENCY;
      return false;
    }

    // get currency rates
    $submit_url = 'http://rupay.com/curs/curs_text.php';
    $ch = curl_init($submit_url);
    $submit = $data;
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $submit);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);

    /**
    *
    * http://rupay.com/curs/curs_text.php
    *
    * RUR=28.39,27.28
    * UAH=5.14,4.81
    * EUR=0.85,0.82
    *
    * s                       sum
    * u in valute = ------------------------ * kurs valuti
    * m             kurs po otnosheniu k USD
    *
    **/
    $lines = explode("\n", $result);
    $lines[] = 'USD=1.00,1.00';
    foreach ($lines as $key => $value) {
      if(trim($value) == '') continue;
      $temp = explode('=', $value);
      $currency = $temp[0];
      $currencies[] = $currency;
      $temp = explode(',', $temp[1]);
      $in = $temp[0];
      $out = $temp[1];

      $currency_data[$currency]['in'] = $in;
      $currency_data[$currency]['out'] = $out;
    }

    foreach($currencies as $currency) {
      // convesation
      if($val == $currency) {
        $totals[$currency] = $sum;
      }
      else {
        $totals[$currency] = ($sum/$currency_data[$val]['in'])*$currency_data[$currency]['in'];
      }
    }

    // get sum in USD
    // сумма для оплаты
    $sum = round($totals['USD'], 2);
    // валюта - USD, RUR, UAH, EUR
    $val = 'USD';

    //print_r($totals);
    //echo 'sum: '.$sum.' '.'val: '.$val;
    
    if((RUPAY_MIN_AMOUNT != '' && $sum < RUPAY_MIN_AMOUNT) || $sum < 5) {
      echo $VM_LANG->PHPSHOP_RUPAY_ERROR_MIN_AMOUNT;
      /**
      * ТУТ БУДЕТ КАК-ТО РЕАЛИЗОВАН ВЫБОР ДРУГОГО МЕТОДА ОПЛАТЫ ИЛИ ОТМЕНА ЗАКАЗА
      */
      return false;
    }

    // Способы оплаты для вывода на экран    
    $method = $this->get_payment_methods_curl($sum, $val);
    if(!$method) {
      $html = '<b>'.$VM_LANG->PHPSHOP_RUPAY_ERROR_NO_METHODS.'</b>';
      /**
      * ТУТ БУДЕТ КАК-ТО РЕАЛИЗОВАН ВЫБОР ДРУГОГО МЕТОДА ОПЛАТЫ ИЛИ ОТМЕНА ЗАКАЗА
      */
      return $html;
    }

    // Вывод на экран
    if(RUPAY_NATIVE_STYLE == 1) echo '<link rel="stylesheet" href="http://RUpay.com/RUpay/css/style.css">';
      
    if(RUPAY_DEBUG == 1) {
      $debug_titles = '
        <th>'.$VM_LANG->PHPSHOP_RUPAY_PAYMENT_METHOD_CERTIFICATION_REQUIRED.'</th>
        <th>'.$VM_LANG->PHPSHOP_RUPAY_PAYMENT_METHOD_CODE.'</th>
      ';
    }
    else {
      $debug_titles = '';        
    }
    
    // $my_method = array ( "3022","1005","3009","3001","3018","3003","2014","3011","3014","3030","3017","2016","1018","3019","3023","1008","2009","3006","2001","2004","2005","2006","2007","2008","2015","1001","1002","1006","1007","1012","1017");
    if(!defined('RUPAY_PAYMENT_METHODS')) define('RUPAY_PAYMENT_METHODS', '');
    
    if(RUPAY_PAYMENT_METHODS != '') {
      $my_methods = explode(',', RUPAY_PAYMENT_METHODS);
      if(is_array($my_methods) && $count = count($my_methods))
      for($i=0; $i < $count; $i++) {
         $my_methods[] = intval(trim($my_methods[$i]));                 
      }
    }
    
    // Header of table with payment methods
    $html = '
      <table border="0" cellspacing="1" cellpadding="5" align="center">
        <tr>
          <th>'.$VM_LANG->PHPSHOP_RUPAY_PAYMENT_METHOD.'</th>
          <th>'.$VM_LANG->PHPSHOP_RUPAY_PAYMENT_TOTAL.' '.$VM_LANG->PHPSHOP_RUPAY_PAYMENT_CURRENCY.'</th>
          <th>'.$VM_LANG->PHPSHOP_RUPAY_PAYMENT_COMMISSION.'</th>
          <th>'.$VM_LANG->PHPSHOP_RUPAY_PAY.'</th>
          '.$debug_titles.'
        </tr>
    ';
    
    // Content of table with payment methods
    foreach ($method as $key => $value) {
      // Данный код выводит определенные, указаные в конфиге, способы оплаты. Если способы не указаны, то будут выведены все доступные методы
      if (RUPAY_PAYMENT_METHODS != '' && (!is_array($my_methods) || !in_array($key, $my_methods))) {
        continue;      
      }      
      
      if ($method[$key]['att'] == '0') $att = '';
      else $att = '<img src="http://RUpay.com/ccurl/ccurla.gif" border="0" alt="'.$VM_LANG->PHPSHOP_RUPAY_PAYMENT_METHOD_CERTIFICATION_REQUIRED.'" />';

      if(RUPAY_DEBUG == 1) {
        $att = '<td align="center">'.$att.'</td>';
        $method[$key]['code'] = '<td align="center">'.$method[$key]['id'].'</td>';
      }
      else {
        $att = '';
        $method[$key]['code'] = '';
      }
      
      switch($method[$key]['val']) {
        case 'руб.':
          $method[$key]['val_code'] = 'RUR';
          break;

        case 'грн.':
          $method[$key]['val_code'] = 'UAH';
          break;

        case 'EUR.':
          $method[$key]['val_code'] = 'EUR';
          break;

        case '$':
        case 'WMZ':
        case 'USD':
        default:
          $method[$key]['val_code'] = 'USD';
          break;
      }

      $commission = round( (( $method[$key]['sum'] * 100 ) / $totals[$method[$key]['val_code']] ) - 100, 1);

      $html .= '
        <tr '.$style.' >
        <form action="'.SECUREURL.'index.php" method="POST" name="adminForm">
          <input type="hidden" name="page" value="checkout.thankyou" />
          <input type="hidden" name="method" value="'.$method[$key]['id'].'" />
          <input type="hidden" name="order_id" value="'.$order_id.'" />
          <input type="hidden" name="customer_note" value="'.$customer_note.'" />
          <input type="hidden" name="task" value="send" />
          <input type="hidden" name="amount" value="'.$method[$key]['sum'].'" />
          <input type="hidden" name="currency" value="'.$method[$key]['val_code'].'" />
          <input type="hidden" name="option" value="com_virtuemart" />

          <td align="right">'.$method[$key]['name'].'</td>
          <td align="center" nowrap="nowrap">'.$method[$key]['sum'].' '.$method[$key]['val'].'</td>
          <td nowrap="nowrap">'.$commission.'%</td>
          <td align="center"><input type="image" src="http://RUpay.com/ccurl/ccurl.gif" value="Submit" alt="Submit" type="Submit" align="absmiddle" border="0" /></td>
          '.$att.'
          '.$method[$key]['code'].'
        </form>
        </tr>
      ';
    }
    // footer of table with payment methods
    $html .= '</table>';

    return $html;
  }
  
  /**
  * RUpay function to get all the paymenyt methods
  * @param decimal amount of payment
  * @param string currency of payment USD|RUR|UAH|EUR
  * return array of payment methods
  */       
  function get_payment_methods_curl ($sum='5', $val='USD') {    
    $submit_url = 'http://www.RUpay.com/app/pay_show.php?summ='.$sum.'&val='.$val;
    $ch = curl_init($submit_url);
    $submit = $data;
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $submit);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);

    $lines = explode("\n", $result);
    foreach ($lines as $key => $value) {
      if ($value) {
        $ex = explode("::", $value);
        $id = $ex[0];

        $method[$id]['id'] = $ex[0];
        $method[$id]['name'] = $ex[1];
        $method[$id]['sum'] = $ex[2];
        $method[$id]['country'] = $ex[3];
        $method[$id]['val'] = $ex[4];
        $method[$id]['att'] = $ex[5];
      }
    }
    
    return $method; 
  }


  /**************************************************************************
  ** name: get_payment_properties()
  ** @param int order id
  ** @param string payment methode code from previsius page
  ** @param string currency code RUR|UAH|EUR|USD on else false
  ** @param decimal amount of payment
  ** returns: html code on true or false if there is some errors
  ***************************************************************************/
  function get_payment_properties( $order_id, $method, $currency, $amount) {
    global $VM_LANG, $auth, $customer_note;

    if(!$order_id) {
      echo $VM_LANG->PHPSHOP_RUPAY_ERROR_WRONG_ORDER_ID;
      return false;
    }

    /* get user info */
    $db = new ps_DB;
    $q  = "SELECT * FROM #__{vm}_orders, #__{vm}_order_user_info ";
    $q .= "WHERE #__{vm}_orders.order_id='$order_id' ";
    $q .= "AND #__{vm}_orders.user_id='" . $auth["user_id"] . "' ";
    $q .= "AND #__{vm}_order_user_info.order_id=#__{vm}_orders.order_id ";
    $db->query($q);
    $db->next_record();

    ////////////////////////////////////////////////////////////////
    // Тестовый режим
    ////////////////////////////////////////////////////////////////

    $data['test'] = RUPAY_DEBUG;

    ////////////////////////////////////////////////////////////////
    // Имя покупателя
    ////////////////////////////////////////////////////////////////

    $data['payer_name'] = $db->f("last_name").' '.$db->f("first_name").' '.$db->f("middle_name");

    ////////////////////////////////////////////////////////////////
    // E-Mail покупателя
    ////////////////////////////////////////////////////////////////

    $data['payer_email'] = $db->f("user_email");

    ////////////////////////////////////////////////////////////////
    // Сумма оплаты
    ////////////////////////////////////////////////////////////////

    $data['payment_summ'] = $amount;

    ////////////////////////////////////////////////////////////////
    // Валюта оплаты
    //
    // USD
    // RUR
    // UAH
    // EUR
    //
    ////////////////////////////////////////////////////////////////

    $data['payment_val'] = $currency;

    ////////////////////////////////////////////////////////////////
    // ID способа оплаты
    //
    // ID способа оплаты (и сумму к оплате) вы можете
    // получить по ссылке http://RUpay.com/app/pay_show.php?summ=xx.xx&val=xxx
    //
    // где xx.xx сумма которую должен оплатить покупатель
    //
    // при запросе будет выдан текст в виде
    //
    // 111::Privat 24::xx.xx::ua::грн.
    // 222::WebMoney::xx.xx::ru::WMZ
    // .......
    // 333::E-Gold::xx.xx::mn::$
    //
    ////////////////////////////////////////////////////////////////

    $data['payment_method'] = $method;

    ////////////////////////////////////////////////////////////////
    // ID магазина
    //
    // Впишите ID магазина в системе RUpay
    //
    ////////////////////////////////////////////////////////////////

    $data['payee_site_id'] = RUPAY_SITE_ID;

    ////////////////////////////////////////////////////////////////
    // Дополнительные поля для передачи
    //
    // Пример : Впишите названия доплнительных полей разделяя
    // их пробелом
    //
    // $data[payee_fields] = "user_city user_country";
    //
    ////////////////////////////////////////////////////////////////

    $data['payee_fields'] = "customer_note";

    ////////////////////////////////////////////////////////////////
    // Поля магазина
    //
    // Пример : Если например в дополнительных полях вы указали
    // $data[payee_fields] = "user_city user_country";
    //
    // значит добавьте две строки
    //
    // $data[user_city] = "London";
    // $data[user_country] = "UK";
    //
    ////////////////////////////////////////////////////////////////

    $data['customer_note'] = $customer_note;

    ////////////////////////////////////////////////////////////////
    // Номер счета в системе продавца
    ////////////////////////////////////////////////////////////////

    $data['payee_order_id'] = 'X-456/g5';

    ////////////////////////////////////////////////////////////////
    // Описание покупки
    ////////////////////////////////////////////////////////////////

    $data['payee_service_name'] = 'Идентификатор заказа: '.$db->f("order_id").'. Номер заказа: '.$db->f("order_number").'.';

    if(RUPAY_DEBUG == 1) {
      $data['payee_service_name'] .= ' (Режим тестовой покупки.)';
    }

    ////////////////////////////////////////////////////////////////
    // Отправка данных на сервер RUpay
    ////////////////////////////////////////////////////////////////

    $submit_url = "http://www.RUpay.com/app/pay_send.php";
    $ch = curl_init($submit_url);
    $submit = $data;
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $submit);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
    
    // Жестко препарируем форму рупея, спизжено у Maverick'а. Спасибо. 
    $result = preg_replace("'(background=\"https:\/\/rupay.com\/app\/bg.gif\")'","",$result); //remove backgr image
    $result = preg_replace("'(<br><br><center><a href=\"http:\/\/rupay.com\"><img src=\"https:\/\/rupay.com\/rupay\/images\/logo_sm.gif\" border=\"0\"></a></center>)'","",$result); //remove logo
    $result = preg_replace("'<link rel=\"stylesheet\" href=\"https:\/\/rupay.com/rupay/css/style.css\">'","",$result); //remove rupay style
    $result = preg_replace("'target=_top'","target=\"_blank\"",$result);
    if(stristr($result,"<form")) {
      $result=preg_replace("'<form'","<form target=\"_blank\"",$result);
    } // Open in BLANK page
    $result=preg_replace("'<input type=\"{0,1}submit\"{0,1}'","<input type=submit class=\"button\"",$result); //set new style for button

    echo "</form>"; 

    ////////////////////////////////////////////////////////////////
    // Вывод реквизитов для оплаты
    ////////////////////////////////////////////////////////////////
    if ($result == true) {
      return $result;
    }
    else {
      echo "ОШИБКА : Ошибка передачи данных";
      return false;
    }

  }
  
  function check_payment_status() {
    
    
    
  }

}
?>