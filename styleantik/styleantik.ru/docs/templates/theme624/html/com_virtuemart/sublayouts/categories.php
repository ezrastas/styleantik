<?php
/**
*
* Shows the products/categories of a category
*
* @package	VirtueMart
* @subpackage
* @author Max Milbers
* @link http://www.virtuemart.net
* @copyright Copyright (c) 2004 - 2014 VirtueMart Team. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
 * @version $Id: default.php 6104 2012-06-13 14:15:29Z alatak $
*/

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

$categories = $viewData['categories'];
$categories_per_row = VmConfig::get ( 'categories_per_row', 3 );
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

if ($categories) {

// Category and Columns Counter
$iCol = 1;
$iCategory = 1;

// Calculating Categories Per Row
$category_cellwidth = ' span'.floor ( 12 / $categories_per_row );
?>

<div class="category-view">

<?php 

// Start the Output
    foreach ( $categories as $category ) {

	    // this is an indicator wether a row needs to be opened or not
	    if ($iCol == 1) { ?>
  <div class="<?php echo $rowClass; ?>">
        <?php }

        // Category Link
        $caturl = JRoute::_ ( 'index.php?option=com_virtuemart&view=category&virtuemart_category_id=' . $category->virtuemart_category_id , FALSE);

          // Show Category ?>
    <div class="category<?php echo $category_cellwidth; ?>">
     <?php if($category->virtuemart_media_id){ ?>
      <div class="spacer">
          <a href="<?php echo $caturl ?>">
          <?php
          //var_dump($category->virtuemart_media_id);
           
             echo $category->images[0]->displayMediaThumb("",false); 
             
           ?>
          </a>
      </div>
      <?php } ?>
      <h4><a class="" href="<?php echo $caturl ?>"><?php echo $category->category_name ?></a></h4>

    </div>
	    <?php
	    $iCategory ++;

	    // Do we need to close the current row now?
        if ($iCol == $categories_per_row) { ?>
    <div class="clear"></div>
	</div>
		    <?php
		    $iCol = 1;
	    } else {
		    $iCol ++;
	    }
    }
	// Do we need a final closing row tag?
	if ($iCol != 1) { ?>
		<div class="clear"></div>
	</div>
	<?php
	}
	?></div><?php
 } ?>
