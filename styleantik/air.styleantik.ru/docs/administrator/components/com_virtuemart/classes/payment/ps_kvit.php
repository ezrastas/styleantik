<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
/**
* @version $Id: ps_kvit.php,v 0.1 2007/01/11 14:58:00 soeren_nb Exp $
* @package Joomla-virtuemart
* @subpackage Payment
* @copyright (C) 2007 www.eesenia.ru
*
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* joomla-virtuemart is Free Software.
* joomla-virtuemart comes with absolute no warranty.
*
* www.eesenia.ru
*
* The ps_kvit class.
*
*/

class ps_kvit {

    var $classname = "ps_kvit";
    var $payment_code = "kvit";
    
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
            <td><strong>Имя компании :</strong></td>
            <td>
                <input type="text" name="CONF_PHYS_COMPANYNAME" class="inputbox" value="<?php echo CONF_PHYS_COMPANYNAME ?>" />
            </td>
            <td>Укажите название организации, от имени которой выписывается квитанция</td>
        </tr>
<tr>
            <td><strong>Расчетный счет :</strong></td>
            <td>
                <input type="text" name="CONF_PHYS_BANK_ACCOUNT_NUMBER" class="inputbox" value="<?php echo CONF_PHYS_BANK_ACCOUNT_NUMBER ?>" />
            </td>
        </tr>
<tr>
            <td><strong>ИНН :</strong></td>
            <td>
                <input type="text" name="CONF_PHYS_INN" class="inputbox" value="<?php echo CONF_PHYS_INN ?>" />
            </td>
        </tr>
<tr>
            <td><strong>КПП :</strong></td>
            <td>
                <input type="text" name="CONF_PHYS_KPP" class="inputbox" value="<?php echo CONF_PHYS_KPP ?>" />
            </td>
                    </tr>
<tr>
            <td><strong>Наименование банка :</strong></td>
            <td>
                <input type="text" name="CONF_PHYS_BANKNAME" class="inputbox" value="<?php echo CONF_PHYS_BANKNAME ?>" />
            </td>
        </tr>
<tr>
            <td><strong>Корреспондентский счет :</strong></td>
            <td>
                <input type="text" name="CONF_PHYS_BANK_KOR_NUMBER" class="inputbox" value="<?php echo CONF_PHYS_BANK_KOR_NUMBER ?>" />
            </td>
        </tr>
<tr>
            <td><strong>БИК :</strong></td>
            <td>
                <input type="text" name="CONF_PHYS_BIK" class="inputbox" value="<?php echo CONF_PHYS_BIK ?>" />
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
                             
					"CONF_PHYS_COMPANYNAME" => $d['CONF_PHYS_COMPANYNAME'],
					"CONF_PHYS_BANK_ACCOUNT_NUMBER" => $d['CONF_PHYS_BANK_ACCOUNT_NUMBER'],
					"CONF_PHYS_INN" => $d['CONF_PHYS_INN'],
					"CONF_PHYS_KPP" => $d['CONF_PHYS_KPP'],
					"CONF_PHYS_BANKNAME" => $d['CONF_PHYS_BANKNAME'],
					"CONF_PHYS_BANK_KOR_NUMBER" => $d['CONF_PHYS_BANK_KOR_NUMBER'],
					"CONF_PHYS_BIK" => $d['CONF_PHYS_BIK']
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
