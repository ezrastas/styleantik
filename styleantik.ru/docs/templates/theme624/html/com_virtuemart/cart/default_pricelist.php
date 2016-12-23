<?php
// Check to ensure this file is included in Joomla!
defined ('_JEXEC') or die('Restricted access');

$app = JFactory::getApplication('site');
$template = $app->getTemplate(true);
$lang = JFactory::getLanguage();
$extension = 'com_contact';
$base_dir = JPATH_SITE;
$language_tag = 'en-GB';
$reload = true;
$lang->load($extension, $base_dir, $language_tag, $reload);
?>
<script>
jQuery(function($){
	$('.setcols').each(function(){
		$(this).attr('data-colspan', $(this).attr('colspan'));
	})
	function setCols(w){
		if(w<768 && w>479){
			$('.setcols').each(function(){
				$(this).attr('colspan',parseInt($(this).attr('data-colspan'))-1);
			})
		}
		else if(w<480){
			$('.setcols').each(function(){
				$(this).attr('colspan',parseInt($(this).attr('data-colspan'))-3);
			})
		}
		else{
			$('.setcols').each(function(){
				$(this).attr('colspan',$(this).attr('data-colspan'));
			})
		}
	}
	setCols($(window).width());
	$(window).resize($.throttle(500, function(){setCols($(window).width())}));
	jQuery('.product-field-type-C').find('span').each(function(){
		jQuery(this).text(jQuery(this).text().split('/')[0]);
	})
})
</script>
<fieldset class="vm-fieldset-pricelist">
	<table class="cart-summary">
		<tr class="product_thead">
			<th><?php echo vmText::_ ('TPL_ITEM') ?></th>
			<th class="item_name"><?php echo vmText::_ ('COM_VIRTUEMART_CART_NAME') ?></th>
			<th><?php echo vmText::_ ('COM_VIRTUEMART_CART_QUANTITY') ?></th>
			<th><?php echo vmText::_ ('COM_VIRTUEMART_CART_PRICE') ?></th>
			<?php if (VmConfig::get ('show_tax')) {
				$tax = vmText::_ ('COM_VIRTUEMART_CART_SUBTOTAL_TAX_AMOUNT');
				if(!empty($this->cart->cartData['VatTax'])){
					reset($this->cart->cartData['VatTax']);
					$taxd = current($this->cart->cartData['VatTax']);
					$tax = $taxd['calc_name'] .' '. rtrim(trim($taxd['calc_value'],'0'),'.').'%';
				} ?>
			<th><?php echo $tax; ?></th>
			<?php } ?>
			<th class="sectiontableentry__desktop"><?php echo vmText::_ ('COM_VIRTUEMART_CART_SUBTOTAL_DISCOUNT_AMOUNT'); ?></th>
			<th class="sectiontableentry__desktop"><?php echo vmText::_ ('COM_VIRTUEMART_CART_TOTAL') ?></th>
		</tr>
		<?php
		$i = 1;
		foreach ($this->cart->products as $pkey => $prow) { ?>
		<tr class="product_tbody sectiontableentry<?php echo $i ?>">
			<td class="cart_product_image">
			<input type="hidden" name="cartpos[]" value="<?php echo $pkey ?>">
			<?php if ($prow->virtuemart_media_id) { ?>
				<span class="cart-images">
					<a href="<?php echo $prow->url; ?>"><?php
					if (!empty($prow->images[0])) {
						echo $prow->images[0]->displayMediaThumb ('', FALSE);
					} ?></a>
				</span>
				<?php } else {
					echo '&npsp;';
				} ?>
					<div class="item_title">
					<?php echo JHtml::link ($prow->url, $prow->product_name);
					echo $this->customfieldsModel->CustomsFieldCartDisplay ($prow); ?>
				</div>
			</td>
			<td class="cart_product_title sectiontableentry__desktop">
				<?php echo JHtml::link ($prow->url, $prow->product_name);
					echo $this->customfieldsModel->CustomsFieldCartDisplay ($prow); ?>
			</td>
			<td class="nowrap"><?php
						if ($prow->step_order_level)
							$step=$prow->step_order_level;
						else
							$step=1;
						if($step==0)
							$step=1; ?>
				   <input type="text"
						   onblur="Virtuemart.checkQuantity(this,<?php echo $step?>,'<?php echo vmText::_ ('COM_VIRTUEMART_WRONG_AMOUNT_ADDED')?>');"
						   onclick="Virtuemart.checkQuantity(this,<?php echo $step?>,'<?php echo vmText::_ ('COM_VIRTUEMART_WRONG_AMOUNT_ADDED')?>');"
						   onchange="Virtuemart.checkQuantity(this,<?php echo $step?>,'<?php echo vmText::_ ('COM_VIRTUEMART_WRONG_AMOUNT_ADDED')?>');"
						   onsubmit="Virtuemart.checkQuantity(this,<?php echo $step?>,'<?php echo vmText::_ ('COM_VIRTUEMART_WRONG_AMOUNT_ADDED')?>');"
						   title="<?php echo  vmText::_('COM_VIRTUEMART_CART_UPDATE') ?>" class="quantity-input inputbox js-recalculate" size="3" maxlength="4" name="quantity[<?php echo $pkey; ?>]" value="<?php echo $prow->quantity ?>">
					<button type="submit" class="vmicon vm2-add_quantity_cart btn hasTooltip" name="updatecart.<?php echo $pkey ?>" title="<?php echo  vmText::_ ('COM_VIRTUEMART_CART_UPDATE') ?>"><i class="fa fa-refresh"></i></button>
					<button type="submit" class="vmicon vm2-remove_from_cart btn hasTooltip" name="delete.<?php echo $pkey ?>" title="<?php echo vmText::_ ('COM_VIRTUEMART_CART_DELETE') ?>"><i class="fa fa-trash-o"></i></button>
			</td>
			<td>
			<div class="sectiontableentry__mobile"><?php echo vmText::_ ('COM_VIRTUEMART_CART_PRICE') ?></div>
				<?php if (VmConfig::get ('checkout_show_origprice', 1) && $prow->prices['discountedPriceWithoutTax'] != $prow->prices['priceWithoutTax']) {
					echo '<div class="line-through">' . $this->currencyDisplay->createPriceDiv ('basePriceVariant', '', $prow->prices, TRUE, FALSE) . '</div>';
				}
				if ($prow->prices['discountedPriceWithoutTax']) {
					echo $this->currencyDisplay->createPriceDiv ('discountedPriceWithoutTax', '', $prow->prices, FALSE, FALSE);
				} else {
					echo $this->currencyDisplay->createPriceDiv ('basePriceVariant', '', $prow->prices, FALSE, FALSE);
				} ?>


				<div class="priceColor2 sectiontableentry__mobile">
				<?php echo vmText::_ ('COM_VIRTUEMART_CART_SUBTOTAL_DISCOUNT_AMOUNT'); ?>
				<?php echo $this->currencyDisplay->createPriceDiv ('discountAmount', '', $prow->prices, FALSE, FALSE, $prow->quantity) ?></div>
				<div class="sectiontableentry__mobile">
				<?php echo vmText::_ ('COM_VIRTUEMART_CART_TOTAL') ?>
				<?php if (VmConfig::get ('checkout_show_origprice', 1) && !empty($prow->prices['basePriceWithTax']) && $prow->prices['basePriceWithTax'] != $prow->prices['salesPrice']) {
					echo '<div class="line-through">' . $this->currencyDisplay->createPriceDiv ('basePriceWithTax', '', $prow->prices, TRUE, FALSE, $prow->quantity) . '</div';
				}
				elseif (VmConfig::get ('checkout_show_origprice', 1) && empty($prow->prices['basePriceWithTax']) && $prow->prices['basePriceVariant'] != $prow->prices['salesPrice']) {
					echo '<div class="line-through">' . $this->currencyDisplay->createPriceDiv ('basePriceVariant', '', $prow->prices, TRUE, FALSE, $prow->quantity) . '</div>';
				}
				echo $this->currencyDisplay->createPriceDiv ('salesPrice', '', $prow->prices, FALSE, FALSE, $prow->quantity) ?>
				</div>
			</td>
			<?php if (VmConfig::get ('show_tax')) { ?>
			<td>
				<div class="priceColor2"><?php echo $this->currencyDisplay->createPriceDiv ('taxAmount', '', $prow->prices, FALSE, FALSE, $prow->quantity) ?></div>
			</td>
			<?php } ?>
			<td class="sectiontableentry__desktop"><div class="priceColor2"><?php echo $this->currencyDisplay->createPriceDiv ('discountAmount', '', $prow->prices, FALSE, FALSE, $prow->quantity) ?></div></td>
			<td class="sectiontableentry__desktop">
				<?php if (VmConfig::get ('checkout_show_origprice', 1) && !empty($prow->prices['basePriceWithTax']) && $prow->prices['basePriceWithTax'] != $prow->prices['salesPrice']) {
					echo '<div class="line-through">' . $this->currencyDisplay->createPriceDiv ('basePriceWithTax', '', $prow->prices, TRUE, FALSE, $prow->quantity) . '</div';
				}
				elseif (VmConfig::get ('checkout_show_origprice', 1) && empty($prow->prices['basePriceWithTax']) && $prow->prices['basePriceVariant'] != $prow->prices['salesPrice']) {
					echo '<div class="line-through">' . $this->currencyDisplay->createPriceDiv ('basePriceVariant', '', $prow->prices, TRUE, FALSE, $prow->quantity) . '</div>';
				}
				echo $this->currencyDisplay->createPriceDiv ('salesPrice', '', $prow->prices, FALSE, FALSE, $prow->quantity) ?>
			</td>
		</tr>
		<?php $i = ($i==1) ? 2 : 1;
		} ?>
		<!--Begin of SubTotal, Tax, Shipment, Coupon Discount and Total listing -->
		<?php if (VmConfig::get ('show_tax')){
			$colspan = 3;
		} else {
			$colspan = 2;
		} ?>


		<?php if (VmConfig::get ('coupons_enable')){ ?>
		<tr class="sectiontableentry2">
			<?php if (!empty($this->layoutName) && $this->layoutName == 'default'){ ?>
			<td class="setcols" colspan="5">
				<?php echo $this->loadTemplate ('coupon'); ?>
				<?php if (!empty($this->cart->cartData['couponCode'])){ ?>
				<span class="coupon_descr">
					<?php echo $this->cart->cartData['couponCode'];
					echo $this->cart->cartData['couponDescr'] ? (' (' . preg_replace('/\s+/', '', $this->cart->cartData['couponDescr']) . ')') : ''; ?>
				</span>
			</td>
			<?php }
			if (VmConfig::get ('show_tax')){ ?>
			<td><?php echo $this->currencyDisplay->createPriceDiv ('couponTax', '', $this->cart->cartPrices['couponTax'], FALSE); ?></td>
			<?php } ?>
			<td><?php echo $this->currencyDisplay->createPriceDiv ('salesPriceCoupon', '', $this->cart->cartPrices['salesPriceCoupon'], FALSE); ?></td>
			<?php } else { ?>
			<td colspan="6">&nbsp;</td>
			<?php }	?>
		</tr>
		<?php }
		foreach ($this->cart->cartData['DBTaxRulesBill'] as $rule){ ?>
		<tr class="sectiontableentry<?php echo $i ?>">
			<td class="setcols" colspan="4"><?php echo $rule['calc_name'] ?></td>
			<?php if (VmConfig::get ('show_tax')) { ?>
			<td></td>
			<?php } ?>
			<td><?php echo $this->currencyDisplay->createPriceDiv ($rule['virtuemart_calc_id'] . 'Diff', '', $this->cart->cartPrices[$rule['virtuemart_calc_id'] . 'Diff'], FALSE); ?></td>
			<td><
			<?php echo $this->currencyDisplay->createPriceDiv ($rule['virtuemart_calc_id'] . 'Diff', '', $this->cart->cartPrices[$rule['virtuemart_calc_id'] . 'Diff'], FALSE); ?></td>
		</tr>
			<?php
			if ($i) {
				$i = 1;
			} else {
				$i = 0;
			}
		}
		foreach ($this->cart->cartData['taxRulesBill'] as $rule) { ?>
		<tr class="sectiontableentry<?php echo $i ?>">
			<td class="setcols" colspan="4"><?php echo $rule['calc_name'] ?></td>
			<?php if (VmConfig::get ('show_tax')) { ?>
			<td><?php echo $this->currencyDisplay->createPriceDiv ($rule['virtuemart_calc_id'] . 'Diff', '', $this->cart->cartPrices[$rule['virtuemart_calc_id'] . 'Diff'], FALSE); ?></td>
			<?php } ?>
			<td></td>
			<td><?php echo $this->currencyDisplay->createPriceDiv ($rule['virtuemart_calc_id'] . 'Diff', '', $this->cart->cartPrices[$rule['virtuemart_calc_id'] . 'Diff'], FALSE); ?></td>
		</tr>
			<?php
			if ($i) {
				$i = 1;
			} else {
				$i = 0;
			}
		}
		foreach ($this->cart->cartData['DATaxRulesBill'] as $rule) { ?>
		<tr class="sectiontableentry<?php echo $i ?>">
			<td class="setcols" colspan="4"><?php echo   $rule['calc_name'] ?></td>
			<?php if (VmConfig::get ('show_tax')){ ?>
			<td></td>
			<?php } ?>
			<td><?php echo $this->currencyDisplay->createPriceDiv ($rule['virtuemart_calc_id'] . 'Diff', '', $this->cart->cartPrices[$rule['virtuemart_calc_id'] . 'Diff'], FALSE); ?></td>
			<td></td>
		</tr>
			<?php
			if ($i) {
				$i = 1;
			} else {
				$i = 0;
			}
		}
		if (VmConfig::get('oncheckout_opc',true) ||
			!VmConfig::get('oncheckout_show_steps',false) ||
			(!VmConfig::get('oncheckout_opc',true) && VmConfig::get('oncheckout_show_steps',false) &&
				!empty($this->cart->virtuemart_shipmentmethod_id) )
		){ ?>

		<?php }
		if ($this->cart->pricesUnformatted['salesPrice']>0.0 and
			(VmConfig::get('oncheckout_opc',true) or
				!VmConfig::get('oncheckout_show_steps',false) or
				( (!VmConfig::get('oncheckout_opc',true) and VmConfig::get('oncheckout_show_steps',false) ) and !empty($this->cart->virtuemart_paymentmethod_id))
			)
		){ ?>

		<?php } ?>
		<tr class="sectiontableentry2 sectiontableentry__desktop">
			<td class="setcols" colspan="4"><strong><?php echo vmText::_ ('COM_VIRTUEMART_CART_TOTAL') ?></strong></td>
			<?php if (VmConfig::get ('show_tax')){ ?>
			<td><div  class="priceColor2 bold"><?php echo $this->currencyDisplay->createPriceDiv ('billTaxAmount', '', $this->cart->cartPrices['billTaxAmount'], FALSE) ?></div></td>
			<?php } ?>
			<td><div  class="priceColor2 bold"><?php echo $this->currencyDisplay->createPriceDiv ('billDiscountAmount', '', $this->cart->cartPrices['billDiscountAmount'], FALSE) ?></div></td>
			<td class="total"><div class="bold"><?php echo $this->currencyDisplay->createPriceDiv ('billTotal', '', $this->cart->cartPrices['billTotal'], FALSE); ?></div></td>
		</tr>
		<tr class="sectiontableentry2 sectiontableentry__mobile">
			<td colspan="2"><strong><?php echo vmText::_ ('COM_VIRTUEMART_CART_TOTAL') ?>:</strong></td>
			<?php if (VmConfig::get ('show_tax')){ ?>
			<td><div  class="priceColor2 bold"><?php echo $this->currencyDisplay->createPriceDiv ('billTaxAmount', '', $this->cart->cartPrices['billTaxAmount'], FALSE) ?></div></td>
			<?php } ?>
			<td class="total"><div class="bold"><?php echo $this->currencyDisplay->createPriceDiv ('billTotal', '', $this->cart->cartPrices['billTotal'], FALSE); ?></div></td>
		</tr>
		<?php if ($this->totalInPaymentCurrency){ ?>
		<tr class="sectiontableentry2">
			<td class="setcols" colspan="4"><?php echo vmText::_ ('COM_VIRTUEMART_CART_TOTAL_PAYMENT') ?>:</td>
			<?php if (VmConfig::get ('show_tax')){ ?>
			<td></td>
			<?php } ?>
			<td></td>
			<td><strong><?php echo $this->totalInPaymentCurrency; ?></strong></td>
		</tr>
		<?php } ?>
	</table>
</fieldset>
