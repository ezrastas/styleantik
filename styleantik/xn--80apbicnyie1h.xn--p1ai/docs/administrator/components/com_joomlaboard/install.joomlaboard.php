<?php
/**
* install.joomlaboard.php 
* @package com_joomlaboard
* @copyright (C) 2000 - 2006 TSMF / Jan de Graaff / All Rights Reserved
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @author TSMF & Jan de Graaff
* Joomla! is Free Software
**/

// Dont allow direct linking
defined( '_VALID_MOS' ) or die( 'Прямой доступ закрыт.' );

/**
 * Function that upgrades joomlaboard database tables
 * 
 * @param dbo database object
 * @return boolean
 */
function jbTablesUpdate(&$database,$bool_jbNeedUpgrade) {
	// determine version
	// $database->setQuery('SELECT `value` FROM #__sb_config WHERE `key`=version');
	// $str_jb_version=$database->loadResult();
	// if (empty($str_jb_version)) {
	//	return false;
	// }
	if ($bool_jbNeedUpgrade) {
		$database->setQuery('ALTER TABLE `#__sb_categories` DROP INDEX `catid` , ADD PRIMARY KEY (`id` )');
		if(!$database->query())
			return false;
		$database->setQuery('ALTER TABLE `#__sb_categories` ADD INDEX `published_pubaccess_id` (`published` , `pub_access` , `id` )');
		if(!$database->query())
			return false;
		$database->setQuery('ALTER TABLE `#__sb_messages` DROP INDEX `id`');
		if(!$database->query())
			return false;
		$database->setQuery('ALTER TABLE `#__sb_messages` DROP INDEX `time_2`');
		$database->query();
		$database->setQuery('ALTER TABLE `#__sb_messages` ADD INDEX `hold_time` ( `hold` , `time` )');
		if(!$database->query())
			return false;	
		$database->setQuery('ALTER TABLE `#__sb_messages_text` DROP INDEX `mesid` , ADD PRIMARY KEY ( `mesid` )');
		if(!$database->query())
			return false;	
		$database->setQuery('ALTER TABLE `#__sb_attachments` DROP INDEX `mesid_2`');
		if(!$database->query())
			return false;	
		$database->setQuery('ALTER TABLE `#__sb_moderation` DROP INDEX `catid`');
		if(!$database->query())
			return false;
		return true;
	}
	else {
		$database->setQuery('SELECT * FROM #__sb_smileys');
		if ($database->query() && $database->getNumRows() > 0 )
			return true;
		$database->setQuery("INSERT INTO `#__sb_smileys` VALUES (1, 'B)', 'cool.png', 'cool-grey.png', 1),
				(8, ';)', 'wink.png', 'wink-grey.png', 1),
				(3, ':)', 'smile.png', 'smile-grey.png', 1),
				(10, ':P', 'tongue.png', 'tongue-grey.png', 1),
				(6, ':laugh:', 'laughing.png', 'laughing-grey.png', 1),
				(17, ':ohmy:', 'shocked.png', 'shocked-grey.png', 1),
				(22, ':sick:', 'sick.png', 'sick-grey.png', 1),
				(14, ':angry:', 'angry.png', 'angry-grey.png', 1),
				(25, ':blink:', 'blink.png', 'blink-grey.png', 1),
				(2, ':(', 'sad.png', 'sad-grey.png', 1),
				(16, ':unsure:', 'unsure.png', 'unsure-grey.png', 1),
				(27, ':kiss:', 'kissing.png', 'kissing-grey.png', 1),
				(29, ':woohoo:', 'w00t.png', 'w00t-grey.png', 1),
				(21, ':lol:', 'grin.png', 'grin-grey.png', 1),
				(23, ':silly:', 'silly.png', 'silly-grey.png', 1),
				(35, ':pinch:', 'pinch.png', 'pinch-grey.png', 1),
				(30, ':side:', 'sideways.png', 'sideways-grey.png', 1),
				(34, ':whistle:', 'whistling.png', 'whistling-grey.png', 1),
				(33, ':evil:', 'devil.png', 'devil-grey.png', 1),
				(31, ':S', 'dizzy.png', 'dizzy-grey.png', 1),
				(26, ':blush:', 'blush.png', 'blush-grey.png', 1),
				(7, ':cheer:', 'cheerful.png', 'cheerful-grey.png', 1),
				(18, ':huh:', 'wassat.png', 'wassat-grey.png', 1),
				(19, ':dry:', 'ermm.png', 'ermm-grey.png', 1),
				(4, ':-)', 'smile.png', 'smile-grey.png', 0),
				(5, ':-(', 'sad.png', 'sad-grey.png', 0),
				(9, ';-)', 'wink.png', 'wink-grey.png', 0),
				(37, ':D', 'laughing.png', 'laughing-grey.png', 0),
				(12, ':X', 'sick.png', 'sick-grey.png', 0),
				(13, ':x', 'sick.png', 'sick-grey.png', 0),
				(15, ':mad:', 'angry.png', 'angry-grey.png', 0),
				(20, ':ermm:', 'ermm.png', 'ermm-grey.png', 0),
				(24, ':y32b4:', 'silly.png', 'silly-grey.png', 0),
				(28, ':rolleyes:', 'blink.png', 'blink-grey.png', 0),
				(32, ':s', 'dizzy.png', 'dizzy-grey.png', 0),
				(36, ':p', 'tongue.png', 'tongue-grey.png', 0)");
				if (!$database->query())
					return false;
	}
	return true;
}
/**
 * 	Function to set up icon in backend
 * 
 * @param dbo database object
 * @return boolean
 */
function jbIconSetup(&$database) {
	$database->setQuery( "SELECT id FROM #__components WHERE admin_menu_link = 'option=com_joomlaboard'" );
	$id = $database->loadResult();

	//add new admin menu images
	$database->setQuery( "UPDATE #__components " .
                        "SET admin_menu_img  = '../administrator/components/com_joomlaboard/images/sbmenu.png'" .
                        ",   admin_menu_link = 'option=com_joomlaboard' " .
                        "WHERE id='$id'");
	if ($database->query())
		return true;
	else
		return false;
}


function jbConfigurationUpdate(&$database,$bool_jbNeedUpgrade) {
	global $mainframe;
	
	if ($bool_jbNeedUpgrade) {
		// normally we just add the new config variables here from now on and update the version number.
	}
	require_once($mainframe->getCfg( 'absolute_path' ).'/administrator/components/com_joomlaboard/joomlaboard_config.php');
	foreach ($sbConfig as $KEY=>$VALUE) {
		if (get_magic_quotes_gpc()) {
       		$VALUE = stripslashes($VALUE);
       		$KEY = stripslashes($KEY);
   		}
		$KEY=$database->getEscaped($KEY);
		$VALUE=$database->getEscaped($VALUE);
		$database->setQuery('SELECT `jbvalue` FROM #__sb_config WHERE `jbkey`=\''.$KEY.'\'');
		if ($database->loadResult()=='') {
   			$database->setQuery('INSERT INTO #__sb_config VALUES (\''.$KEY.'\',\''.$VALUE.'\')');
			if (!$database->query())
				return false;
		}
	}
	return true;		
}
function com_install() {
	global $database;
	$bool_jbNeedUpgrade=true;
	$database->setQuery('SHOW KEYS FROM #__sb_categories');
	foreach ($database->loadObjectList() as $row) {
		if ($row->Key_name=='published_pubaccess_id')
			$bool_jbNeedUpgrade=false;
	}
	

	
?>
<div>
	<span style="float: left;text-align: left;min-width:251px;width:25%"><img src="components/com_joomlaboard/images/logo.png" alt="Joomlaboard logo" /></span>
	<span style="float: right;text-align: left;width:75%">
		<strong>Компонент форума Joomlaboard </strong><em>для Joomla! 1.0.x and 1.5.x</em><br />
		&copy; 2001 - 2006 <a href="http://www.tsmf.net" target="_blank">TSMF</a><br />
		Все прова зарегистрированны
		<br />
		<br />
           Компонент распространяется по лицензии 
           <a href="index2.php?option=com_admisc&amp;task=license">GNU/GPL</a>.<br/>
  </span>
	<div style="clear:both">&nbsp;</div>
</div>
<div style="text-align:left">
<h3 class="title">Процес установки:</h3>
<p>Установлен значок в панели администратора: 
<?php echo jbIconSetup($database) ? '<img src="images/tick.png" alt="OK" />' : '<img src="images/publish_x.png" alt="FAILED" />'; ?>
<br />
Обновление конфигурации:
<?php echo jbConfigurationUpdate($database,$bool_jbNeedUpgrade) ? '<img src="images/tick.png" alt="OK" />' : '<img src="images/publish_x.png" alt="FAILED" />'; ?>
<br />Обновление таблиц базы данных:
<?php echo jbTablesUpdate($database,$bool_jbNeedUpgrade) ? '<img src="images/tick.png" alt="OK" />' : '<img src="images/publish_x.png" alt="FAILED" /><br />ERROR: '.$database->getErrorMsg(); ?><br />
</p>
<p>Установка закончина.</p>
<h3 class="title">Документация</h3>
<p>Вся документация относительно компонента joomlaboard  может быть найдена на <a href="http://www.tsmf.net" target="_blank">сайте tsmf</a>.</p>
<h3 class="title">Юридическое примечание</h3>
<p>Joomlaboard - свободное программное обеспечение и поэтому распространяется &quot;как есть&quot; без гарантий, любого вида.</p>
<p>Команда  (на них будут далее ссылаться как 'TSMF') предлагают Вам Joomlaboard для абсолютно свободного для вашего собственного личного использования, удовольствия и образования. TSMF резервирует право обвинить корпоративных или других коммерческих пользователей Программного обеспечения для этого или будущих версий или поддержки на платном основании. </p>
<p>Любая версия Joomlaboard может содержать ошибки, ошибки и/или может вызвать проблемы иначе. В то время как мы полагаем, что безопасно использовать эту версию, мы действительно указываем Вам на этот факт.</p>
<p>Используйте это программное обеспечение на ваш собственный риск; мы не гарантируем ничего! </p>
<p style="font-size:x-small">Спасибо за то, что выбирали наш продукт Joomlaboard!</p>
</div>
<?php } ?>
