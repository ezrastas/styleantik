<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
/**
* @version $Id: ps_webmoney.php,v 0.2 2005/09/11 14:58:00 soeren_nb Exp $
* @package mambo-phpShop
* @subpackage Payment
* @copyright (C) 2005 www.tworec.ru
*
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* mambo-phpShop is Free Software.
* mambo-phpShop comes with absolute no warranty.
*
* www.tworec.ru
*
* The ps_webmoney class.
*
* Доработка под VirtueMart: sourpuss (c) 2007 Joom.ru
*/

class ps_webmoney {

    var $classname = "ps_webmoney";
    var $payment_code = "Webmoney";

    /**
    * Show all configuration parameters for this payment method
    * @returns boolean False when the Payment method has no configration
    */
    function show_configuration() {
        global $VM_LANG;
        $db = new ps_DB();

        /** Read current Configuration ***/
        include_once(CLASSPATH ."payment/".$this->classname.".cfg.php");
    ?>
    <table>
           <tr>
        <td><strong>Информация о модуле:</strong></td>
            <td>
          &nbsp;
            </td>
            <td>
	    <p>
Модуль платежей через "WebMoney Transfer" для Virtuemart.
copyright (C) 2005 www.tworec.ru
доработка: sourpuss (c) Joom.ru
интеграция в ВМРЕ: Федоринов Григорий ака skynet80 virtuemart.ru
</p>
            </td>
        </tr>
            <tr>
        <td><strong>Настройка webmoney:</strong></td>
            <td>
          &nbsp;
            </td>
            <td>
	    <p>
Откройте https://merchant.webmoney.ru/ и перейдите в раздел "Настройки",
настройте все кошельки который вы указали в полях "WMx Кошелек продавца:" и настройте их для приема платежей по инструкции "Merchant WebMoney Transfer".
В поле "Result URL:"  впишите следующий адрес;
если ваш хостинг поддерживает передачу данных через SSL то "https://(имя вашего сайта)/administrator/components/com_virtuemart/mailer_wm.php",
если нет то "http://(имя вашего сайта)/administrator/components/com_virtuemart/mailer_wm.php",
Для полей "Success URL:, Fail URL:" впишите следующий адрес;
если ваш хостинг поддерживает передачу данных через SSL то "https://(имя вашего сайта)/administrator/components/com_virtuemart/notify_wm.php",
если нет то "http://(имя вашего сайта)/administrator/components/com_virtuemart/notify_wm.php",
а "методы вызова" для этих полей поставьте в "POST".
Обязательно отметьте поле "Позволять использовать URL, передаваемые в форме:" а то параметр "Тест Да/Нет?" не будет обрабатываться, а будет использоваться из настроек
в "Merchant WebMoney Transfer".

Примечание: Не устанавливайте флажок "Передавать параметры в предварительном запросе" модуль пока их не обрабатывает.
</p>
            </td>
        </tr>       
        <tr>
        <td><strong><?php echo $VM_LANG->_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE ?></strong></td>
            <td>
                <select name="LMI_MODE" class="inputbox" >
                <option <?php if (@LMI_MODE == '1') echo "selected=\"selected\""; ?> value="1"><?php echo $VM_LANG->_PHPSHOP_ADMIN_CFG_YES ?></option>
                <option <?php if (@LMI_MODE != '1') echo "selected=\"selected\""; ?> value="0"><?php echo $VM_LANG->_PHPSHOP_ADMIN_CFG_NO ?></option>
                </select>
            </td>
            <td>
	    <?php echo $VM_LANG->_PHPSHOP_ADMIN_CFG_WEBMONEY_MODE_EXPLAIN ?>
            </td>
        </tr>
        <tr>
        <td><strong><?php echo $VM_LANG->_PHPSHOP_ADMIN_CFG_WEBMONEY_WMR_PURSE ?></strong></td>
            <td>
                <input type="text" name="LMI_PAYEE_WMR_PURSE" class="inputbox" value="<?  echo LMI_PAYEE_WMR_PURSE ?>" />
            </td>
            <td><?php echo $VM_LANG->_PHPSHOP_ADMIN_CFG_WEBMONEY_WMR_PURSE_EXPLAIN ?>
            </td>
        </tr>
        <tr>
        <td><strong><?php echo $VM_LANG->_PHPSHOP_ADMIN_CFG_WEBMONEY_WMZ_PURSE ?></strong></td>
            <td>
                <input type="text" name="LMI_PAYEE_WMZ_PURSE" class="inputbox" value="<?  echo LMI_PAYEE_WMZ_PURSE ?>" />
            </td>
            <td><?php echo $VM_LANG->_PHPSHOP_ADMIN_CFG_WEBMONEY_WMZ_PURSE_EXPLAIN ?>
            </td>
        </tr>
        <tr>
        <td><strong><?php echo $VM_LANG->_PHPSHOP_ADMIN_CFG_WEBMONEY_WMZ_RATE ?></strong></td>
            <td>
                <input type="text" name="LMI_PAYEE_WMZ_RATE" class="inputbox" value="<?  echo LMI_PAYEE_WMZ_RATE ?>" />
            </td>
            <td><?php echo $VM_LANG->_PHPSHOP_ADMIN_CFG_WEBMONEY_WMZ_RATE_EXPLAIN ?>
            </td>
        </tr>
        <tr>
        <td><strong><?php echo $VM_LANG->_PHPSHOP_ADMIN_CFG_WEBMONEY_WME_PURSE ?></strong></td>
            <td>
                <input type="text" name="LMI_PAYEE_WME_PURSE" class="inputbox" value="<?  echo LMI_PAYEE_WME_PURSE ?>" />
            </td>
            <td><?php echo $VM_LANG->_PHPSHOP_ADMIN_CFG_WEBMONEY_WME_PURSE_EXPLAIN ?>
            </td>
        </tr>
        <tr>
        <td><strong><?php echo $VM_LANG->_PHPSHOP_ADMIN_CFG_WEBMONEY_WME_RATE ?></strong></td>
            <td>
                <input type="text" name="LMI_PAYEE_WME_RATE" class="inputbox" value="<?  echo LMI_PAYEE_WME_RATE ?>" />
            </td>
            <td><?php echo $VM_LANG->_PHPSHOP_ADMIN_CFG_WEBMONEY_WME_RATE_EXPLAIN ?>
            </td>
        </tr>
        <tr>
        <td><strong><?php echo $VM_LANG->_PHPSHOP_ADMIN_CFG_WEBMONEY_WMU_PURSE ?></strong></td>
            <td>
                <input type="text" name="LMI_PAYEE_WMU_PURSE" class="inputbox" value="<?  echo LMI_PAYEE_WMU_PURSE ?>" />
            </td>
            <td><?php echo $VM_LANG->_PHPSHOP_ADMIN_CFG_WEBMONEY_WMU_PURSE_EXPLAIN ?>
            </td>
        </tr>
        <tr>
        <td><strong><?php echo $VM_LANG->_PHPSHOP_ADMIN_CFG_WEBMONEY_WMU_RATE ?></strong></td>
            <td>
                <input type="text" name="LMI_PAYEE_WMU_RATE" class="inputbox" value="<?  echo LMI_PAYEE_WMU_RATE ?>" />
            </td>
            <td><?php echo $VM_LANG->_PHPSHOP_ADMIN_CFG_WEBMONEY_WMU_RATE_EXPLAIN ?>
            </td>
        </tr>
        <tr>
        <td><strong><?php echo $VM_LANG->_PHPSHOP_ADMIN_CFG_WEBMONEY_EMAIL ?></strong></td>
            <td>
                <input type="text" name="WEBMONEY_EMAIL" class="inputbox" value="<?  echo WEBMONEY_EMAIL ?>" />
            </td>
            <td><?php echo $VM_LANG->_PHPSHOP_ADMIN_CFG_WEBMONEY_EMAIL_EXPLAIN ?>
            </td>
        </tr>
        <tr>
            <td><strong><?php echo $VM_LANG->_PHPSHOP_ADMIN_CFG_WEBMONEY_STATUS_SUCCESS ?></strong></td>
            <td>
                <select name="WEBMONEY_VERIFIED_STATUS" class="inputbox" >
                <?php
                    $q = "SELECT order_status_name,order_status_code FROM #__vm_order_status ORDER BY list_order";
                    $db->query($q);
                    $order_status_code = Array();
                    $order_status_name = Array();

                    while ($db->next_record()) {
                      $order_status_code[] = $db->f("order_status_code");
                      $order_status_name[] =  $db->f("order_status_name");
                    }
                    for ($i = 0; $i < sizeof($order_status_code); $i++) {
                      echo "<option value=\"" . $order_status_code[$i];
                      if (WEBMONEY_VERIFIED_STATUS == $order_status_code[$i])
                         echo "\" selected=\"selected\">";
                      else
                         echo "\">";
                      echo $order_status_name[$i] . "</option>\n";
                    }?>
                    </select>
            </td>
            <td><?php echo $VM_LANG->_PHPSHOP_ADMIN_CFG_WEBMONEY_STATUS_SUCCESS_EXPLAIN ?>
            </td>
        </tr>
        </tr>
            <tr>
            <td><strong><?php echo $VM_LANG->_PHPSHOP_ADMIN_CFG_WEBMONEY_STATUS_FAILED ?></strong></td>
            <td>
                <select name="WEBMONEY_INVALID_STATUS" class="inputbox" >
                <?php
                    for ($i = 0; $i < sizeof($order_status_code); $i++) {
                      echo "<option value=\"" . $order_status_code[$i];
                      if (WEBMONEY_INVALID_STATUS == $order_status_code[$i])
                         echo "\" selected=\"selected\">";
                      else
                         echo "\">";
                      echo $order_status_name[$i] . "</option>\n";
                    } ?>
                    </select>
            </td>
            <td><?php echo $VM_LANG->_PHPSHOP_ADMIN_CFG_WEBMONEY_STATUS_FAILED_EXPLAIN ?>
            </td>
        </tr>
      </table>
    <?php
    }

    function has_configuration() {
      // return false if there's no configuration
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
	* @returns boolean True when the configuration file is writeable, false when not
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

      $my_config_array = array(
                              "LMI_MODE" => $d['LMI_MODE'],
                              "LMI_PAYEE_WMR_PURSE" => $d['LMI_PAYEE_WMR_PURSE'],
                              "LMI_PAYEE_WMZ_PURSE" => $d['LMI_PAYEE_WMZ_PURSE'],
			      "LMI_PAYEE_WMZ_RATE" => $d['LMI_PAYEE_WMZ_RATE'],
                              "LMI_PAYEE_WME_PURSE" => $d['LMI_PAYEE_WME_PURSE'],
			      "LMI_PAYEE_WME_RATE" => $d['LMI_PAYEE_WME_RATE'],
                              "LMI_PAYEE_WMU_PURSE" => $d['LMI_PAYEE_WMU_PURSE'],
			      "LMI_PAYEE_WMU_RATE" => $d['LMI_PAYEE_WMU_RATE'],
			      "WEBMONEY_EMAIL" => $d['WEBMONEY_EMAIL'],
                              "WEBMONEY_VERIFIED_STATUS" => $d['WEBMONEY_VERIFIED_STATUS'],
                              "WEBMONEY_INVALID_STATUS" => $d['WEBMONEY_INVALID_STATUS']
                            );
      $config = "<?php\n";
      $config .= "defined('_VALID_MOS') or die('Direct Access to this location is not allowed.'); \n\n";
      foreach( $my_config_array as $key => $value ) {
        $config .= "define ('$key', '$value');\n";
      }

      $config .= "?>";

      if ($fp = fopen(CLASSPATH ."payment/".$this->classname.".cfg.php", "w")) {
          fputs($fp, $config, strlen($config));
          fclose ($fp);
          return true;
     }
     else
        return false;
   }

  /**************************************************************************
  ** name: process_payment()
  ** returns:
  ***************************************************************************/
   function process_payment($order_number, $order_total, &$d) {
        return true;
    }

}
