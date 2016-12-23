<?php // no direct access
defined('_JEXEC') or die('Restricted access');
if($module->position == 'showcase'){
	$cols = VmConfig::get ('homepage_categories_per_row', 3);
	if($cols < 1) $cols = 1;
?>
<div class="row-fluid cols-<?php echo $cols; ?>">
	<?php foreach ($categories as $category){ ?>
	<div class="span12 item">
		<?php $caturl = JRoute::_('index.php?option=com_virtuemart&view=category&virtuemart_category_id='.$category->virtuemart_category_id);
		if(!empty($category->virtuemart_media_id[0])){
			$db = JFactory::getDbo();
			$query = $db->getQuery(true);
			$query->select($db->quoteName(array('file_url', 'file_url_thumb')))
				->from($db->quoteName('#__virtuemart_medias'))
				->where($db->quoteName('virtuemart_media_id') . ' = '. $db->quote($category->virtuemart_media_id[0]));
			$db->setQuery($query);
			$results = $db->loadAssoc();
			$category->file_url_thumb = $results['file_url_thumb'] != '' ? $results['file_url_thumb'] : $results['file_url'];
			$catthumb = '<img src="'.$category->file_url_thumb.'" alt="'.$category->category_name.'">';
			echo '<figure class="vm-product-media-container">'.JHTML::link($caturl, $catthumb).'</figure>';
		}
		$cattext = $category->category_name;
		echo '<h3 class="vm-category__title">'.JHTML::link($caturl, $cattext).'</h3>'; ?>
	</div>
	<?php } ?>
</div>
<?php } else { ?>
<?php 
		//$app = JFactory::getApplication();
		//$doc = JFactory::getDocument();
		//$language  = $doc->language;
		//var_dump(VmConfig::$jDefLang);
		$db = JFactory::getDBO();
		$q  = 'SELECT `category_name`,`virtuemart_category_id` FROM `#__virtuemart_categories_'.VmConfig::$jDefLang.'` WHERE `virtuemart_category_id`='.$category_id;
		$db->setQuery($q);
		$categoriesParent = $db->loadAssoc();
		//print_r($categoriesParent['virtuemart_category_id']);
		//print_r($categoriesParent['category_name']);
		$active_menu = '';
		$caturl = JRoute::_('index.php?option=com_virtuemart&view=category&virtuemart_category_id='.$categoriesParent['virtuemart_category_id']);
		$cattext = $categoriesParent['category_name'];

		if (in_array( $categoriesParent['virtuemart_category_id'], $parentCategories)) $active_menu .= ' active';
	?>
	<span class="iceModuleTile <?php echo $active_menu ?>">
				<?php echo JHTML::link($caturl, $cattext); ?>
			</span>
<ul class="menu<?php echo $class_sfx ?>" >
<?php  foreach ($categories as $category){

		$active_menu = '';
		$caturl = JRoute::_('index.php?option=com_virtuemart&view=category&virtuemart_category_id='.$category->virtuemart_category_id);
		$cattext = $category->category_name;
		//if ($active_category_id == $category->virtuemart_category_id) $active_menu = 'class="active"';
		if (in_array( $category->virtuemart_category_id, $parentCategories)) $active_menu .= ' active';
		if ($category->childs ) $active_menu .= ' parent'; ?>
<li class="<?php echo $active_menu ?>">
		<?php echo JHTML::link($caturl, $cattext); ?>
<?php if ($category->childs ) { ?>
<ul class="menu<?php echo $class_sfx; ?>">
<?php
	foreach ($category->childs as $child){
		$caturl = JRoute::_('index.php?option=com_virtuemart&view=category&virtuemart_category_id='.$child->virtuemart_category_id);
		$cattext = $child->category_name; ?>
<li>
	<?php echo JHTML::link($caturl, $cattext); ?>
</li>
<?php } ?>
</ul>
<?php } ?>
</li>
<?php } ?>
</ul>
<?php } ?>