<?php
/**
*
* Description
*
* @package	VirtueMart
* @subpackage
* @author
* @link http://www.virtuemart.net
* @copyright Copyright (c) 2004 - 2010 VirtueMart Team. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* @version $Id: default.php 8695 2015-02-12 14:05:25Z Milbo $
*/

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

?>
<div id="com_virtuemart" class="comvirtuemartmod">
<?php # Vendor Store Description
//echo $this->add_product_link;
if (!empty($this->vendor->vendor_store_desc) and VmConfig::get('show_store_desc', 1)) { ?>
<div class="vendor-store-desc">
	<?php echo $this->vendor->vendor_store_desc; ?>
</div>
<?php } ?>

<?php
# load categories from front_categories if exist
if ($this->categories and VmConfig::get('show_categories', 1)) echo $this->renderVmSubLayout('categories',array('categories'=>$this->categories));

# Show template for : topten,Featured, Latest Products if selected in config BE
if (!empty($this->products) ) {
	$tabshome='tabshome';
	$products_per_row = VmConfig::get ( 'homepage_products_per_row', 3 ) ;
	echo $this->renderVmSubLayout($this->productsLayout,array('products'=>$this->products,'currency'=>$this->currency,'products_per_row'=>$products_per_row,'showRating'=>$this->showRating,'tabshome'=>$tabshome)); //$this->loadTemplate('products');
}

?> <?php vmTime('vm view Finished task ','Start'); ?>

</div>

<script>
	jQuery.extend(Virtuemart, {
		product: function(carts){
			carts.each(function(){
				var cart = jQuery(this),
				quantityInput=cart.find('input[name="quantity[]"]'),
				plus   = cart.find('.quantity-plus'),
				minus  = cart.find('.quantity-minus'),
				select = cart.find('select:not(.no-vm-bind)'),
				radio = cart.find('input:radio:not(.no-vm-bind)'),
				virtuemart_product_id = cart.find('input[name="virtuemart_product_id[]"]').val(),
				quantity = cart.find('.quantity-input');

				var Ste = parseInt(quantityInput.attr("step"));

				//Fallback for layouts lower than 2.0.18b
				if(isNaN(Ste)){
					Ste = 1;
				}

		        jQuery(plus).off('click', Virtuemart.incrQuantity);
		        jQuery(plus).on('click', {cart:cart}, Virtuemart.incrQuantity);

		        jQuery(minus).off('click', Virtuemart.decrQuantity);
		        jQuery(minus).on('click', {cart:cart},Virtuemart.decrQuantity);

		        jQuery(select).off('change', Virtuemart.eventsetproducttype);
		        jQuery(select).on('change', {cart:cart,virtuemart_product_id:virtuemart_product_id},Virtuemart.eventsetproducttype);

		        jQuery(radio).off('change', Virtuemart.eventsetproducttype);
		        jQuery(radio).on('change', {cart:cart,virtuemart_product_id:virtuemart_product_id},Virtuemart.eventsetproducttype);

		        jQuery(quantity).off('keyup', Virtuemart.eventsetproducttype);
		        jQuery(quantity).on('keyup', {cart:cart,virtuemart_product_id:virtuemart_product_id},Virtuemart.eventsetproducttype);

		        this.action ="#";
		        addtocart = cart.find('.addtocart-button[name="addtocart"]');
		        jQuery(addtocart).off('click',Virtuemart.addtocart);
		        jQuery(addtocart).on('click',{cart:cart},Virtuemart.addtocart);
			});
		}
	});
</script>