<?php
/**
*
* Layout for the shopping cart and the mail
* shows the chosen adresses of the shopper
* taken from the cart in the session
*
* @package	VirtueMart
* @subpackage Cart
* @author Max Milbers
*
* @link http://www.virtuemart.net
* @copyright Copyright (c) 2004 - 2014 VirtueMart Team. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
*
*/

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');
$cartfieldNames = array();
foreach( $this->userFieldsCart['fields'] as $fields){
	$cartfieldNames[] = $fields['name'];
}
$html = '';
foreach ($this->cart->BTaddress['fields'] as $item) {
	if(in_array($item['name'],$cartfieldNames)) continue;
	if (!empty($item['value'])) {
		if ($item['name'] === 'agreed') {
			$item['value'] = ($item['value'] === 0) ? vmText::_ ('COM_VIRTUEMART_USER_FORM_BILLTO_TOS_NO') : vmText::_ ('COM_VIRTUEMART_USER_FORM_BILLTO_TOS_YES');
		}
		$html .= '<p class="values vm2-'.$item['name'].'">'.$item['value'].'</p>';
	}
}
if($html != ''){
?>
	<div class="clear"></div>
</div>
<?php } ?>
