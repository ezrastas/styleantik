<?php
defined('_JEXEC') or die('Restricted access');
defined('DS') or define('DS', DIRECTORY_SEPARATOR);
jimport('joomla.plugin.plugin');

class plgSystemVM3_Cart extends JPlugin {
	private $_cart=null;
	
	function __construct($event,$params){
		parent::__construct($event,$params);
				$this->_baseurl = str_replace('modules/mod_virtuemart_cart_tm/', '', JURI::base());

	}
	
	function onAfterInitialise() {
		if(JFactory::getApplication()->isAdmin()) {
			return;
		}

			 $input = JFactory::getApplication()->input;
		    if ( $input->getCmd( 'task', '' ) === 'ap' ) {

	    		if (!class_exists ('VmConfig')) {
					require(JPATH_ADMINISTRATOR . DS . 'components' . DS . 'com_virtuemart' . DS . 'helpers' . DS . 'config.php');
				}
				VmConfig::loadConfig ();
				// Load the language file of com_virtuemart.
				JFactory::getLanguage ()->load ('com_virtuemart');
				if (!class_exists ('calculationHelper')) {
					require(JPATH_ADMINISTRATOR . DS . 'components' . DS . 'com_virtuemart' . DS . 'helpers' . DS . 'calculationh.php');
				}
				if (!class_exists ('CurrencyDisplay')) {
					require(JPATH_ADMINISTRATOR . DS . 'components' . DS . 'com_virtuemart' . DS . 'helpers' . DS . 'currencydisplay.php');
				}
				if (!class_exists ('VirtueMartModelVendor')) {
					require(JPATH_ADMINISTRATOR . DS . 'components' . DS . 'com_virtuemart' . DS . 'models' . DS . 'vendor.php');
				}
				if (!class_exists ('VmImage')) {
					require(JPATH_ADMINISTRATOR . DS . 'components' . DS . 'com_virtuemart' . DS . 'helpers' . DS . 'image.php');
				}
				if (!class_exists ('shopFunctionsF')) {
					require(JPATH_SITE . DS . 'components' . DS . 'com_virtuemart' . DS . 'helpers' . DS . 'shopfunctionsf.php');
				}
				if (!class_exists ('calculationHelper')) {
					require(JPATH_COMPONENT_SITE . DS . 'helpers' . DS . 'cart.php');
				}
				if (!class_exists ('VirtueMartModelProduct')) {
					JLoader::import ('product', JPATH_ADMINISTRATOR . DS . 'components' . DS . 'com_virtuemart' . DS . 'models');
				}
				if(!class_exists('VirtueMartModelCustomfields'))require(VMPATH_ADMIN.DS.'models'.DS.'customfields.php');
			   JLoader::import( 'ratings', JPATH_ADMINISTRATOR . DS . 'components' . DS . 'com_virtuemart' . DS . 'models' );
				VmConfig::loadConfig();
				JFactory::getLanguage()->load('mod_virtuemart_cart_tm');

				$prodoption = JRequest::get('POST');
                $prodoption = explode(',', $prodoption['prodoption']);

                $prod_id = $prodoption[0];
                $data_title_variants_element = str_replace(array('/'), array(""), $prodoption[2]);
                $data_title_variants_element2 = str_replace(array('/'), array(""), $prodoption[3]);
                $data_title_variants_element3 = str_replace(array('/'), array(""), $prodoption[4]);
                $data_title_variants_element4 = str_replace(array('/'), array(""), $prodoption[5]);
                //print_r($data_title_variants_element);
                //print_r($data_title_variants_element2);
                //print_r($data_title_variants_element3);
                //print_r($data_title_variants_element4);
                $custom_id = $prodoption[1];
                $data_key_prod = array();
                $data_key_prod[] = str_replace(array('/'), array(""), $prodoption[2]);
                $data_key_prod[] = str_replace(array('/'), array(""), $prodoption[3]);
                $data_key_prod[] = str_replace(array('/'), array(""), $prodoption[4]);
                $data_key_prod[] = str_replace(array('/'), array(""), $prodoption[5]);

                 //var_dump($data_key_prod);

                $db=&JFactory::getDBO();
                $query = 'SELECT customfield_params FROM jos_virtuemart_product_customfields
                          WHERE (virtuemart_product_id = '.$prod_id.' AND virtuemart_custom_id = '.$custom_id.')';
                $db->setQuery($query);
                $data_array =  $db->loadResult();

                

                $data_array = explode('options=', $data_array);

                //$data_array = str_replace(array(' '), array(""), $data_array[2]);
                $data_array = preg_replace("/('|\r?\n)/", '', $data_array[2]); 
                //$data_array = trim($data_array[2]);
                $data_array = str_replace(array(' '), array(""), $data_array);
                
                $data_array = explode('|', $data_array);
               

                $data_array = explode('{', $data_array[0]);
                $data_array = explode('}', $data_array[1]);
                $divider = "'\'";

                $data_array = str_replace(array("[" , '\/' , '[' , ':' , ',' , ' ' , '\n'), array(""), $data_array);
                $data_array = str_replace('""', ',', $data_array);

                $data_array = str_replace(array('"'), array(""), $data_array);
               	$data_array = explode(']', $data_array[0]);
               	//var_dump($data_array);
               
                $data_array = array_filter ($data_array);

                $data = array();
                for($i=0; $i < count($data_array); $i++){
                   // echo $i.' ' ;
                    $data[] = explode(',', $data_array[$i]);
                }
                //$data_key = array();
                //var_dump($data);
                $prodid = array();
                foreach ($data as $key => $value) {
                	
                    if ($data_title_variants_element2 == ''){
                       if($value[1] === $data_title_variants_element) {
                            $prodid = $value[0];
                           // echo 'br1';
                        }
                    } 
                    elseif($data_title_variants_element3 == ''){
                    	//var_dump($value);
                    	if($value[1] === $data_title_variants_element && $value[2] === $data_title_variants_element2) {
                            $prodid = $value[0];
                           // echo 'br2';
                        }
                    }
                    elseif($data_title_variants_element4 == ''){
                    	if($value[1] === $data_title_variants_element && $value[2] === $data_title_variants_element2 && $value[3] === $data_title_variants_element3) {
                            $prodid = $value[0];
                            //echo 'br3';
                        }
                    }
                    elseif(!empty($data_title_variants_element4)){
                    	if($value[1] === $data_title_variants_element && $value[2] === $data_title_variants_element2 && $value[3] === $data_title_variants_element3 && $value[4] === $data_title_variants_element4) {
                            $prodid = $value[0];
                            //echo 'br4';
                        }
                    }
                }
                
                //$prodid = $prodid;
                $productModel = VmModel::getModel('product');
                $product = $productModel->getProduct($prodid);
                $productModel->addImages($product);
                $ratingModel = VmModel::getModel('ratings');
			    $rating = $productModel->withRating;
	            $rating = $ratingModel->getRatingByProduct($product->virtuemart_product_id);
	            $showRating = $rating->published;
	            //print_r($rating);
	            
					$maxrating = VmConfig::get('vm_maximum_rating_scale', 5);
					$ratings = "";
					if (!empty($rating->rating)) {
						$ratingwidth = $rating->rating * 15;
						$ratings.="<div class='ratingbox'>";
						$ratings.="<span class='rating-icons'>";
						for ($i = 1; $i <= 5 ; $i ++ ) { 		                            	
				        	if ($i <= $rating->rating) {
				        		$ratings.="<i class='fa fa-star'></i>";
				        	} else {
				        		$ratings.="<i class='fa fa-star-o'></i>";
				        	}
				        }	
				        $ratings.="</span>";
				        $ratings.="<div class='clearfix'></div>";
				        $ratings.="</div>";	
				    } else {
				    	$ratings.="<div class='ratingbox'>";
						$ratings.="<span class='rating-icons'>";
						for ($i = 1; $i <= 5 ; $i ++ ) { 		                            	
				        	if ($i <= $rating->rating) {
				        		$ratings.="<i class='fa fa-star'></i>";
				        	} else {
				        		$ratings.="<i class='fa fa-star-o'></i>";
				        	}
				        }	
				        $ratings.="</span>";
				        $ratings.="<div class='clearfix'></div>";
				        $ratings.="</div>";	
				    }    
					
					
				
		    	//print_r($showRating);
                //var_dump($products);
                //var_dump($product->product_name); 
                $ItemidStr = '';
				$Itemid = shopFunctionsF::getLastVisitedItemId();
				if(!empty($Itemid)){
					$ItemidStr = '&Itemid='.$Itemid;
				}
                ?>
                    
                <?php
				$imagespath = $product->images[0]->displayMediaThumb('class="browseProductImage"', false); 
                $images = "<a href=".$product->link.$ItemidStr.">".$imagespath."</a> ";
               
                //print_r($rating );
                $currency = CurrencyDisplay::getInstance( );
                 $url = JRoute::_ ('index.php?option=com_virtuemart&view=productdetails&virtuemart_product_id=' . $product->virtuemart_product_id . '&virtuemart_category_id=' .$product->virtuemart_category_id);

                $titlename =  shopFunctionsF::limitStringByWord($product->product_name,'25', '...');
                $title = "<a href=".$url.">".$titlename."</a>";
                $product_s_desc = shopFunctionsF::limitStringByWord (JFilterOutput::cleanText($product->product_s_desc), 120, '...');
               	$price = shopFunctionsF::renderVmSubLayout('prices',array('product'=>$product,'currency'=>$currency));

               	$stockhandle = VmConfig::get ('stockhandle', 'none');
				if (($stockhandle == 'disableit' or $stockhandle == 'disableadd') and ($product->product_in_stock - $product->product_ordered) < 1) { 
					$addcart = 'notify';
				}else{
					$addcart = 'addtocart';
				}
                    
                //echo $prodid;
                $response = array("success" => true, "prodid" => $prodid , "addcart" => $addcart,"title" => $title , 'price' => $price, 'images' => $images ,  'product_s_desc' => $product_s_desc, 'ratings' => $ratings);
                $document = JFactory::getDocument();
                $document->setMimeEncoding('application/json');
                // Change the suggested filename.
                JResponse::setHeader('Content-Disposition','attachment;filename="result.json"');
                echo json_encode($response);
                exit;
            }



		//var_dump(VMPATH_SITE);
		if (!class_exists( 'VmConfig' )) require(JPATH_ROOT.'/administrator/components/com_virtuemart/helpers/config.php');
		if(!class_exists('VirtueMartCart')) require(JPATH_ROOT.'/components/com_virtuemart/helpers/cart.php');

		VmConfig::loadConfig();

		if(JRequest::getCmd('option')=='com_virtuemart' && JRequest::getCmd('view')=='cart' && JRequest::getCmd('task')=='viewJS' && JRequest::getCmd('format')=='json') {
			JFactory::getLanguage()->load('mod_virtuemart_cart_tm');
			
			$cart = $this->prepareAjaxData();
			if ($cart->totalProduct > 1)
			    $cart->totalProductTxt = JText::sprintf('TM_VIRTUEMART_CART_X_PRODUCTS', $cart->totalProduct);
			else if ($cart->totalProduct == 1)
			    $cart->totalProductTxt = JText::_('TM_VIRTUEMART_ITEM');
			else
			    $cart->totalProductTxt = JText::_('TM_VIRTUEMART_EMPTY_CART');
				$cart->totalProductTxt = '<span class="cart_num"><span class="crt-text">'.JText::_('TM_VIRTUEMART_NOW_IN_YOUR_CART').'</span><a href="#cart">' . $cart->totalProductTxt . '</a></span>';
			if ($cart->dataValidated == true) {
			    $taskRoute = '&task=confirm';
			    $linkName = JText::_('COM_VIRTUEMART_CART_CONFIRM');
			} else {
			    $taskRoute = '';
			    $linkName = JText::_('COM_VIRTUEMART_CART_SHOW');
			}
			$cart->cart_show = '<a class="btn btn-default" href="' . JRoute::_("index.php?option=com_virtuemart&view=cart" . $taskRoute, true, VmConfig::get('useSSL', 0)) . '"><span><span>' . $linkName . '</span></span></a>';
			$cart->billTotal = '<div class="total2"><span>'.JText::_('COM_VIRTUEMART_CART_TOTAL').':</span>'.'<strong>' . $cart->billTotal . '</strong></div>';
			echo json_encode($cart);
			
			jexit();
		}
	}
	// Render the code for Ajax Cart
	function prepareAjaxData(){
		defined('DS') or define('DS', DIRECTORY_SEPARATOR);
		//error_reporting( E_ERROR );
		$this->_cart = VirtueMartCart::getCart(false);
		$this->_cart->prepareCartData(false);
		$weight_total = 0;
		$weight_subtotal = 0;

		//of course, some may argue that the $this->data->products should be generated in the view.html.php, but
		//]
		$data = new stdClass();
		$data->products = array();
		$data->totalProduct = 0;
		$i=0;
		
		if (!class_exists('CurrencyDisplay'))
		require(VMPATH_ADMIN . DS . 'helpers' . DS . 'currencydisplay.php');
		$currencyDisplay = CurrencyDisplay::getInstance();
		
		foreach ($this->_cart->products as $priceKey=>$product){
			$category_id = $this->_cart->getCardCategoryId($product->virtuemart_product_id);
			//Create product URL
			$url = JRoute::_('index.php?option=com_virtuemart&view=productdetails&virtuemart_product_id='.$product->virtuemart_product_id.'&virtuemart_category_id='.$category_id);
			// @todo Add variants
			$data->products[$i]['virtuemart_product_id'] = $product->virtuemart_product_id;
			$data->products[$i]['product_cart_id'] = $priceKey;
			$data->products[$i]['product_name'] = JHTML::link($url, $product->product_name);

			// Add the variants
				if(!class_exists('VirtueMartModelCustomfields'))require(VMPATH_ADMIN.DS.'models'.DS.'customfields.php');
				//  custom product fields display for cart
				$data->products[$i]['product_attributes'] = VirtueMartModelCustomfields::CustomsFieldCartModDisplay($product);
			$data->products[$i]['product_sku'] = $product->product_sku;
			// product Price total for ajax cart
			//$data->products[$i]['prices'] = $currency->priceDisplay($this->_cart->pricesUnformatted[$priceKey]['salesPrice']);
			$data->products[$i]['prices'] = $currencyDisplay->priceDisplay( $product->allPrices[$product->selectedPrice]['salesPrice']);
			// other possible option to use for display
			
			$data->products[$i]['subtotal'] = $currencyDisplay->priceDisplay($product->allPrices[$product->selectedPrice]['subtotal']);
			$data->products[$i]['subtotal_tax_amount'] = $currencyDisplay->priceDisplay($product->allPrices[$product->selectedPrice]['subtotal_tax_amount']);
			$data->products[$i]['subtotal_discount'] = $currencyDisplay->priceDisplay( $product->allPrices[$product->selectedPrice]['subtotal_discount']);
			$data->products[$i]['subtotal_with_tax'] = $currencyDisplay->priceDisplay($product->allPrices[$product->selectedPrice]['subtotal_with_tax']);

			/**			
            * Line for adding images to minicart
            **/
            //$data->products[$i]['image']='<img src="'.JFactory::getUri()->base().$product->image->file_url_thumb.'" />';
						$productModel = VmModel::getModel('Product');
			$product_images = $productModel->getProduct($product->virtuemart_product_id, true, false,true,$product->quantity);
			$productModel->addImages($product_images,1);

			$data->products[$i]['image']='<img src="'.$this->_baseurl.$product_images->images[0]->file_url.'" />';


			// UPDATE CART / DELETE FROM CART
			$data->products[$i]['quantity'] = $product->quantity."&nbsp;x&nbsp;";
			$data->totalProduct += $product->quantity ;

			$i++;
		}
		//JFactory::getLanguage()->load('mod_vm2cart');
		//$data->billTotal = count($data->products)?$this->_cart->prices['billTotal']:JText::_('MOD_VM2CART_CART_EMPTY');
		//$data->billTotal = $currencyDisplay->priceDisplay( $this->_cart->pricesUnformatted['billTotal'] );
		//print_r($this->_cart->pricesUnformatted);
		if(empty($this->_cart->pricesUnformatted) or $this->_cart->pricesUnformatted['billTotal'] < 0){
			$product->allPrices['billTotal'] = 0.0;
		}

		$data->billTotal = $currencyDisplay->priceDisplay($this->_cart->pricesUnformatted['billTotal']);

		$data->cart_empty_text  = JText::_('TM_VIRTUEMART_CART_EMPTY');
		$data->carttotaltext = '<span class="totalText">'.JText::_('TPL_VIRTUEMART_CART_TOTAL').'</span>';
		$data->cart_recent_text  = JText::_('TM_VIRTUEMART_CART_ADD_RECENTLY');
		//$data->dataValidated = $this->_dataValidated ;
		$data->dataValidated=false;
		return $data;
	}
}
?>