<?php
/**
 * field tos
 *
 * @package	VirtueMart
 * @subpackage Cart
 * @author Max Milbers
 * @link http://www.virtuemart.net
 * @copyright Copyright (c) 2014 VirtueMart Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL2, see LICENSE.php
 * @version $Id: cart.php 7682 2014-02-26 17:07:20Z Milbo $
 */

defined('_JEXEC') or die('Restricted access');
jimport( 'joomla.filter.filteroutput' );
$products_per_row = $viewData['products_per_row'];
$currency = $viewData['currency'];
$showRating = $viewData['showRating'];
$tabshome = $viewData['tabshome'];
$prodslider = $viewData['prodslider'];
//print_r($tabshome);
if ($tabshome == 'tabshome'){
	$listing_class = 'tab-pane fade in';
	$link_params = 'role="tab" data-toggle="tab"';
} else {
	$listing_class = '';
	$link_params = '';
}


$app    = JFactory::getApplication();
$template = $app->getTemplate(true);
$params = $template->params;

$themeLayout = $params->get('themeLayout');

switch ($themeLayout) {
  case '0':
    $rowClass = 'row';
    break;

  case '1':
    $rowClass = 'row-fluid';
    break;
  
  default:
    $rowClass = 'row';
    break;
}

$ItemidStr = '';
$Itemid = shopFunctionsF::getLastVisitedItemId();
if(!empty($Itemid)){
	$ItemidStr = '&Itemid='.$Itemid;
}
if ($tabshome == 'tabshome'){	
//var_dump($viewData['products']['featured']); ?>
<div class="bs-example-tabs" data-example-id="togglable-tabs">
<ul class="nav nav-tab" role="tablist">
	<?php foreach ($this->products as $type => $productList ) { ?>	
	<li role="presentation" class="heading-style-3 <?php echo $type ?> <?php echo $type == 'featured' ? 'active' : '' ?>">
		<a id="<?php echo $type ?>-tab" aria-controls="<?php echo $type ?>-view" href="#<?php echo $type ?>-view" <?php echo $link_params; ?>>

			<?php
			if($type !== 'topten'){
			 	echo JText::_('COM_VIRTUEMART_'.$type.'_PRODUCT');
			 }else {
				echo JText::_('TPL_VIRTUEMART_TOP_PRODUCTS');
			 }
			?>
		</a>
	</li>

	<?php } ?>
	<div class="clearfix both"></div>
</ul>
<div class="tab-content">
<?php }
foreach ($viewData['products'] as $type => $products ) {

	// Category and Columns Counter
	$col = 1;
	$nb = 1;
	$row = 1;
	$BrowseTotalProducts = count($products);
	//vmdebug('amount to browse '.$type,$BrowseTotalProducts);
	if(!empty($type)){

		$productTitle = vmText::_('COM_VIRTUEMART_'.$type.'_PRODUCT');
		?>
		<div id="<?php echo $type ?>-view" class="<?php echo $listing_class; ?> <?php echo $type ?>-view <?php echo $type == 'featured' ? 'active' : '' ?>" id="<?php echo $type ?>">
		<?php // Start the Output
	}

	$rowHeights = array();
	$rowsHeight = array();
	foreach($products as $product){

		$priceRows = 0;
		//Lets calculate the height of the prices
		foreach($currency->_priceConfig as $name=>$values){
			if(!empty($currency->_priceConfig[$name][0])){
				if(!empty($product->prices[$name]) or $name == 'billTotal' or $name == 'billTaxAmount'){
					$priceRows++;
				}
			}
		}
		$rowHeights[$row]['price'][] = $priceRows;
		$position = 'addtocart';
		if(!empty($product->customfieldsSorted[$position])){
			$customs = count($product->customfieldsSorted[$position]);
		} else {
			$customs = 0;
		}
		$rowHeights[$row]['customs'][] = $customs;
		$nb ++;

		if ($col == $products_per_row || $nb>$BrowseTotalProducts) {
			$col = 1;
			$max = 0;
			foreach($rowHeights[$row] as $type => $cols){
				//vmdebug('my rows heights $type',$type);
				$rowsHeight[$row][$type] = 0;
				foreach($cols as $col){
					$rowsHeight[$row][$type] =  max($rowsHeight[$row][$type],$col);
					//vmdebug('my rows  $cols',$col);
				}
				//vmdebug('my rows  $type',$type);
			}

			$rowHeights = array();
			$row++;
		} else {
			$col ++;
		}

	}

	//vmdebug('my rows heights',$rowsHeight);
	$col = 1;
	$nb = 1;
	$row = 1;

	foreach ( $products as $product ) {

		// this is an indicator wether a row needs to be opened or not
		if ($col == 1) {
			if ($prodslider == 'prodslider') {	
		 ?>
			<div class='itemslide'>
		<?php } else { ?>		
			<div class="<?php echo $rowClass; ?>">
		<?php
			}  
		}

		// Show the vertical seperator
		if ($nb == $products_per_row or $nb % $products_per_row == 0) {
			$show_vertical_separator = ' ';
		}

		// Show Products ?>
	<div class="product vm-product-horizon <?php if ($prodslider == 'prodslider') { echo 'slide';}else{echo 'vm-col span' . floor(12/$products_per_row);}  ?>">
		<div class="prod-box">
      <div class="vm-product-media-rating">
        <div class="vm-product-media-container">
					<a href="<?php echo $product->link.$ItemidStr; ?>"><?php echo $product->images[0]->displayMediaThumb('class="browseProductImage"', false); ?></a>
				</div>
       <?php /*
         if ( VmConfig::get ('display_stock', 1)) { ?>
        <div class="vmicon vm2-<?php echo $product->stock->stock_level ?>" title="<?php echo $product->stock->stock_tip ?>"></div>
          <?php } ?>
          <?php //echo shopFunctionsF::renderVmField('stockhandle',array('product'=>$product));
          */?>
        
      </div>
      <div class="vm-product-details-container">
		<div class="vm-rating">
          <?php
          //print_r($showRating);
            echo shopFunctionsF::renderVmSubLayout('rating',array('showRating'=>$showRating, 'product'=>$product)); ?>
           
        </div>
        <div class="vm3pr">
          <?php echo shopFunctionsF::renderVmSubLayout('prices',array('product'=>$product,'currency'=>$currency)); ?>
        </div>
      	<h5 class="item_name product_title">
			<?php $url = JRoute::_ ('index.php?option=com_virtuemart&view=productdetails&virtuemart_product_id=' . $product->virtuemart_product_id . '&virtuemart_category_id=' .
				$product->virtuemart_category_id); ?>

			<a href="<?php echo $url ?>"><?php echo shopFunctionsF::limitStringByWord($product->product_name,'50', '...'); ?></a> 
			</h5> 
        <?php // Product Short Description
        	
          if (!empty($product->product_s_desc)) {
            ?>
            <p class="product_s_desc">
              <?php echo shopFunctionsF::limitStringByWord (JFilterOutput::cleanText($product->product_s_desc), 120, '...') ?>
            </p>
        <?php }  ?>
        

        <?php 
    	echo shopFunctionsF::renderVmSubLayout('variants',array('product'=>$product,'row'=>0));
    	?>
        <?php 
        echo shopFunctionsF::renderVmSubLayout('addtocart',array('product'=>$product,'row'=>0));
         ?>
         <?php /*
         <div class="vm-details-button">
          <?php // Product Details Button
          echo JHtml::link ( JRoute::_ ( 'index.php?option=com_virtuemart&view=productdetails&virtuemart_product_id=' . $product->virtuemart_product_id . '&virtuemart_category_id=' . $product->virtuemart_category_id , FALSE), vmText::_ ( 'COM_VIRTUEMART_PRODUCT_DETAILS' ), array ('title' => $product->product_name, 'class' => 'product-details btn' ) );
          ?>
        </div> */?>
      </div>
      <div class="clearfix"></div> 
      </div> 
    </div>
    	<?php 
		if ($prodslider == 'prodslider') {	
		 
			$nb ++;

		// Do we need to close the current row now?
		if ($col == $products_per_row || $nb>$BrowseTotalProducts) { ?>
			</div>
			<?php
			$col = 1;
			$row++;
		} else {
			$col ++;
		}
		 } else { 		
			$nb ++;

		// Do we need to close the current row now?
		if ($col == $products_per_row || $nb>$BrowseTotalProducts) { ?>
			</div>
			<?php
			$col = 1;
			$row++;
		} else {
			$col ++;
		}
			}  
	} ?>

	<div class="clearfix"></div>
	</div>
<?php } 
	if ($tabshome == 'tabshome'){ 
		echo '</div></div>';
	}
?>
<script>
jQuery(document).ready(function () {
	jQuery('.comvirtuemartmod .prod-box ul.variants a.selected').each(function(){
		input_ids = jQuery(this).parents('ul').attr('data-type');
		data_title = jQuery(this).parents('ul').find('a.selected').data('titleVariants');
		jQuery(this).parents('ul').find('input[id="'+input_ids+'"]').val(data_title);
		//alert(data_title);
	})
	jQuery(document).on('click', '.comvirtuemartmod .prod-box ul.variants a', function(e){
		e.preventDefault();
		var btn = jQuery(this);
		input_id = jQuery(this).parents('ul').attr('data-type');
		jQuery(this).parents('ul').find('a').each(function(){jQuery(this).removeClass('selected')});
		jQuery(this).parents('ul').find('input[id="'+input_id+'"]').val(jQuery(this).attr('data-title-variants'));
		jQuery(this).addClass('selected');
		var data_title_variants = [];
		jQuery(this).parents('.variants-area').find('ul').each(function(){
			input_ids = jQuery(this).attr('data-type');
			data_title_variants.push(jQuery(this).find('input[id="'+input_ids+'"]').val());	
			
		})
		
		var maxH = btn.parents('.prod-box').find('.vm-product-media-container').height();

		//alert (maxH);
		var custom_id = jQuery(this).data('customId');
		var prod_id = jQuery(this).data('id');
		var prodoption = prod_id+','+custom_id+','+data_title_variants;

		jQuery.ajax({
			url: '?option=com_virtuemart&task=ap&view=productdetails&virtuemart_product_id='+prod_id,
			type: 'post',
			data: 'prodoption='+prodoption,
			dataType: 'json',
			beforeSend: function(){
	            },
			success: function(json){
				alert(json.prodid);
				if(json.prodid.length !== 0){
					//alert(json.prodid.length);
					element = btn.parents('.prod-box').find('.variants-area');
					var element = btn.parents('.prod-box').find('.addtocart-area input[name="virtuemart_product_id[]"]').val(json.prodid);
					var imagesHeight = btn.parents('.prod-box').find('.vm-product-media-container').css("height", maxH);
					var images = btn.parents('.prod-box').find('.vm-product-media-container a').remove();
					var vmrating = btn.parents('.prod-box').find('.vm-rating').html('');
					var title = btn.parents('.prod-box').find('h5.product_title a').remove();
					var product_s_des = btn.parents('.prod-box').find('.product_s_desc').html('');
					var price = btn.parents('.prod-box').find('.vm3pr > div').remove();

					btn.parents('.prod-box').find('.vm-product-media-container').html(json.images);
					btn.parents('.prod-box').find('.vm-rating').html(json.ratings);
					btn.parents('.prod-box').find('h5.product_title').html(json.title);
					btn.parents('.prod-box').find('.product_s_desc').html(json.product_s_desc);
					btn.parents('.prod-box').find('.vm3pr').html(json.price);
					//btn.parents('.prod-box').find('.addtocart-bar .notify ').addClass('addtocart-button');
					if(json.addcart == 'notify'){
						//alert('notify');
						btn.parents('.prod-box').find('.addtocart-bar .hiddennotify').addClass('displayblock');
						btn.parents('.prod-box').find('.addtocart-bar .addtocart-button').addClass('displaynone');
						btn.parents('.prod-box').find('.addtocart-bar .notify.btn').removeClass('displaynone');
					}else {
						//alert('cart');
						btn.parents('.prod-box').find('.addtocart-bar .hiddenaddcart').addClass('displayblock');
						btn.parents('.prod-box').find('.addtocart-bar .notify.btn').addClass('displaynone');
						btn.parents('.prod-box').find('.addtocart-bar .addtocart-button').removeClass('displaynone');
					}
				} else {
					alert('empty element');
					btn.parents('.prod-box').find('.addtocart-bar .hiddennotify').addClass('displayblock');
					btn.parents('.prod-box').find('.addtocart-bar .addtocart-button').addClass('displaynone');
					btn.parents('.prod-box').find('.addtocart-bar .notify.btn').removeClass('displaynone');
				}

				//alert (price);
			}
		}); 
		
	});
	});
</script>