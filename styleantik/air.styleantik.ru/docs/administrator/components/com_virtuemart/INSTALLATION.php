<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* @version $Id: INSTALLATION.php,v 1.2 2005/11/16 19:33:55 soeren_nb Exp $
* @package VirtueMart
* @subpackage core
* @copyright Copyright (C) 2004-2005 Soeren Eberhardt. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
*
* http://virtuemart.net
*/
?>
<pre>
Легкая автоматическая процедура установки описана в файле README.php ПОЛНОЙ УСТАНОВКИ.

Вам не нужно использовать эти инструкции, когда вами скачена ПОЛНАЯ УСТАНОВКА.

Вы должны использовать этот файл, только когда есть проблемы с безопасным режимом (safe mode) PHP
или другие проблемы с Joomla / Mambo установщиком.


Если безопасный режим  включен (Safe Mode = On) ? Тогда ручная установка это ваш спаситель.

РУЧНАЯ УСТАНОВКА VIRTUEMART

ОПИСАНИЕ ЭТОГО ФАЙЛА
-----------------
Этот файл содержит подсказки при РУЧНОЙ установке VirtueMart.


ОПИСАНИЕ VirtueMart
------------------------------
VirtueMart это плагин с открытым исходным кодом (Open Source) онлайнового магазина для  Joomla и Mambo.



MANUAL INSTALLATION PROCEDURE
--------------------------------------------------
  
1. Распокуйте архивный файл (один из которых содержит файл "README.txt"):

	VirtueMart_Manual-Installation-Package_1.x.tar.gz
	
	Теперь вы должны видеть следующие папки:
	  * /administrator
	  * /components
	  * /modules
	  * /mambots
	
	Структура папок в этих директориях такая же как на вашем сайте  Joomla/Mambo.
	
2.  Откроем FTP соединение с вашим  Joomla/Mambo сайтом и загрузим папки.
	
	/components
	в
	  /корневая-папка-сайта/components/

	/administrator
	в
	  /корневая-папка-сайта/administrator/
	  
	/modules
	в
	  /корневая-папка-сайта/modules/

	/mambots
	в
	  /path-to-site-root/mambots/
	  
	Вы должны подвердить переписывание существующих файлов в этих папках.
	Существующий конфигурационный файл не должен быть перезаписен.


3.  Зайдите в администраторскую часть Joomla / Mambo (так называемый Бекенд).

	  http://www.xxxxxx.ru/administrator/
	
	* Когда вошли вы увидете следующий адрес(URL) в адресной строке браузера:
	
	  http://www.xxxxxx.ru/administrator/index2.php
	
	* Теперь добавим "?option=com_virtuemart" после index2.php, теперь строка адреса будет выглядеть вот так:
	  
		http://www.xxxxxx.ru/administrator/index2.php?option=com_virtuemart
	
	  и нажмите Enter.
	
	* Теперь вы должны увидеть надпись "Установка прошла успешно...".
	  Теперь вы должны перейти по ссылке
		"Зайти в магазин >>" 
	  или 
		"УСТВАНОВИТЬ ДЕМО ДАННЫЕ" (когда вы хотите заказать несколько демо-товаров и категорий в ваш Магазин).

	* Установка закончена.

Модули и Плагины (Мамботы).
-----------------------

4. Модули и Плагины (Мамботы) в архиве, но наиболее важным является VirtueMart Main Module (главный модуль  VirtueMart),
	который состоит из двух файлов:
	/modules/mod_virtuemart.php
	/modules/mod_virtuemart.xml
	
	Вам нужен этот модуль для доступа и навигации клиента по вашему магазину.

	Откройте phpMyAdmin и выберите вашу базу данных.
	Нажмите кнопку "SQL" на панели инструметов сверху, кнопка расположена посередине.
	
	Теперь вставьте эти запросы если вы используете Joomla с префиксом jos_ :
	
####
INSERT IGNORE INTO `jos_modules` (`title`, `content`, `ordering`, `position`, `checked_out`, `checked_out_time`, `published`, `module`, `numnews`, `access`, `showtitle`, `params`, `iscore`, `client_id`) VALUES ( 'VirtueMart Module', '', 99, 'left', 0, '0000-00-00 00:00:00', 1, 'mod_virtuemart', 0, 0, 1, '', 0, 0);
INSERT IGNORE INTO `jos_modules` (`title`, `content`, `ordering`, `position`, `checked_out`, `checked_out_time`, `published`, `module`, `numnews`, `access`, `showtitle`, `params`, `iscore`, `client_id`) VALUES ( 'VirtueMart TopTen products Module', '', 99, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_virtuemart_topten', 0, 0, 1, '', 0, 0);
INSERT IGNORE INTO `jos_modules` (`title`, `content`, `ordering`, `position`, `checked_out`, `checked_out_time`, `published`, `module`, `numnews`, `access`, `showtitle`, `params`, `iscore`, `client_id`) VALUES ( 'Product Scroller', '', 99, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_productscroller', 0, 0, 1, '', 0, 0);
INSERT IGNORE INTO `jos_modules` (`title`, `content`, `ordering`, `position`, `checked_out`, `checked_out_time`, `published`, `module`, `numnews`, `access`, `showtitle`, `params`, `iscore`, `client_id`) VALUES ( 'Product Categories Module', '', 99, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_product_categories', 0, 0, 1, '', 0, 0);
INSERT IGNORE INTO `jos_modules` (`title`, `content`, `ordering`, `position`, `checked_out`, `checked_out_time`, `published`, `module`, `numnews`, `access`, `showtitle`, `params`, `iscore`, `client_id`) VALUES ( 'All-In-One New/Featured/TopTen/Random Products Module', '', 99, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_virtuemart_allinone', 0, 0, 1, '', 0, 0);
INSERT IGNORE INTO `jos_modules` (`title`, `content`, `ordering`, `position`, `checked_out`, `checked_out_time`, `published`, `module`, `numnews`, `access`, `showtitle`, `params`, `iscore`, `client_id`) VALUES ( 'Your Cart Module', '', 99, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_virtuemart_cart', 0, 0, 1, '', 0, 0);
INSERT IGNORE INTO `jos_modules` (`title`, `content`, `ordering`, `position`, `checked_out`, `checked_out_time`, `published`, `module`, `numnews`, `access`, `showtitle`, `params`, `iscore`, `client_id`) VALUES ( 'Featured Products', '', 99, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_virtuemart_featureprod', 0, 0, 1, '', 0, 0);
INSERT IGNORE INTO `jos_modules` (`title`, `content`, `ordering`, `position`, `checked_out`, `checked_out_time`, `published`, `module`, `numnews`, `access`, `showtitle`, `params`, `iscore`, `client_id`) VALUES ( 'Latest products', '', 99, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_virtuemart_latestprod', 0, 0, 1, '', 0, 0);
INSERT IGNORE INTO `jos_modules` (`title`, `content`, `ordering`, `position`, `checked_out`, `checked_out_time`, `published`, `module`, `numnews`, `access`, `showtitle`, `params`, `iscore`, `client_id`) VALUES ( 'Manufacturer Module', '', 99, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_virtuemart_manufacturers', 0, 0, 1, '', 0, 0);
INSERT IGNORE INTO `jos_modules` (`title`, `content`, `ordering`, `position`, `checked_out`, `checked_out_time`, `published`, `module`, `numnews`, `access`, `showtitle`, `params`, `iscore`, `client_id`) VALUES ( 'Random Products Module', '', 99, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_virtuemart_randomprod', 0, 0, 1, '', 0, 0);
INSERT IGNORE INTO `jos_modules` (`title`, `content`, `ordering`, `position`, `checked_out`, `checked_out_time`, `published`, `module`, `numnews`, `access`, `showtitle`, `params`, `iscore`, `client_id`) VALUES ( 'VirtueMart Search Module', '', 99, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_virtuemart_search', 0, 0, 1, '', 0, 0);

INSERT IGNORE INTO `jos_mambots` (`id`, `name`, `element`, `folder`, `access`, `ordering`, `published`, `iscore`, `client_id`, `checked_out`, `checked_out_time`, `params`) VALUES (21, 'mosproductsnap', 'mosproductsnap', 'content', 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '');
INSERT IGNORE INTO `jos_mambots` (`id`, `name`, `element`, `folder`, `access`, `ordering`, `published`, `iscore`, `client_id`, `checked_out`, `checked_out_time`, `params`) VALUES (22, 'ProductSearchBot', 'virtuemart.searchbot', 'search', 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '');
####

	или эти запросы если вы используете Mambo с префиксом mos_ .

####
INSERT IGNORE INTO `mos_modules` (`title`, `content`, `ordering`, `position`, `checked_out`, `checked_out_time`, `published`, `module`, `numnews`, `access`, `showtitle`, `params`, `iscore`, `client_id`) VALUES ( 'VirtueMart Module', '', 99, 'left', 0, '0000-00-00 00:00:00', 1, 'mod_virtuemart', 0, 0, 1, '', 0, 0);
INSERT IGNORE INTO `mos_modules` (`title`, `content`, `ordering`, `position`, `checked_out`, `checked_out_time`, `published`, `module`, `numnews`, `access`, `showtitle`, `params`, `iscore`, `client_id`) VALUES ( 'VirtueMart TopTen products Module', '', 99, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_virtuemart_topten', 0, 0, 1, '', 0, 0);
INSERT IGNORE INTO `mos_modules` (`title`, `content`, `ordering`, `position`, `checked_out`, `checked_out_time`, `published`, `module`, `numnews`, `access`, `showtitle`, `params`, `iscore`, `client_id`) VALUES ( 'Product Scroller', '', 99, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_productscroller', 0, 0, 1, '', 0, 0);
INSERT IGNORE INTO `mos_modules` (`title`, `content`, `ordering`, `position`, `checked_out`, `checked_out_time`, `published`, `module`, `numnews`, `access`, `showtitle`, `params`, `iscore`, `client_id`) VALUES ( 'Product Categories Module', '', 99, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_product_categories', 0, 0, 1, '', 0, 0);
INSERT IGNORE INTO `mos_modules` (`title`, `content`, `ordering`, `position`, `checked_out`, `checked_out_time`, `published`, `module`, `numnews`, `access`, `showtitle`, `params`, `iscore`, `client_id`) VALUES ( 'All-In-One New/Featured/TopTen/Random Products Module', '', 99, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_virtuemart_allinone', 0, 0, 1, '', 0, 0);
INSERT IGNORE INTO `mos_modules` (`title`, `content`, `ordering`, `position`, `checked_out`, `checked_out_time`, `published`, `module`, `numnews`, `access`, `showtitle`, `params`, `iscore`, `client_id`) VALUES ( 'Your Cart Module', '', 99, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_virtuemart_cart', 0, 0, 1, '', 0, 0);
INSERT IGNORE INTO `mos_modules` (`title`, `content`, `ordering`, `position`, `checked_out`, `checked_out_time`, `published`, `module`, `numnews`, `access`, `showtitle`, `params`, `iscore`, `client_id`) VALUES ( 'Featured Products', '', 99, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_virtuemart_featureprod', 0, 0, 1, '', 0, 0);
INSERT IGNORE INTO `mos_modules` (`title`, `content`, `ordering`, `position`, `checked_out`, `checked_out_time`, `published`, `module`, `numnews`, `access`, `showtitle`, `params`, `iscore`, `client_id`) VALUES ( 'Latest products', '', 99, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_virtuemart_latestprod', 0, 0, 1, '', 0, 0);
INSERT IGNORE INTO `mos_modules` (`title`, `content`, `ordering`, `position`, `checked_out`, `checked_out_time`, `published`, `module`, `numnews`, `access`, `showtitle`, `params`, `iscore`, `client_id`) VALUES ( 'Manufacturer Module', '', 99, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_virtuemart_manufacturers', 0, 0, 1, '', 0, 0);
INSERT IGNORE INTO `mos_modules` (`title`, `content`, `ordering`, `position`, `checked_out`, `checked_out_time`, `published`, `module`, `numnews`, `access`, `showtitle`, `params`, `iscore`, `client_id`) VALUES ( 'Random Products Module', '', 99, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_virtuemart_randomprod', 0, 0, 1, '', 0, 0);
INSERT IGNORE INTO `mos_modules` (`title`, `content`, `ordering`, `position`, `checked_out`, `checked_out_time`, `published`, `module`, `numnews`, `access`, `showtitle`, `params`, `iscore`, `client_id`) VALUES ( 'VirtueMart Search Module', '', 99, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_virtuemart_search', 0, 0, 1, '', 0, 0);

INSERT IGNORE INTO `mos_mambots` (`id`, `name`, `element`, `folder`, `access`, `ordering`, `published`, `iscore`, `client_id`, `checked_out`, `checked_out_time`, `params`) VALUES (21, 'mosproductsnap', 'mosproductsnap', 'content', 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '');
INSERT IGNORE INTO `mos_mambots` (`id`, `name`, `element`, `folder`, `access`, `ordering`, `published`, `iscore`, `client_id`, `checked_out`, `checked_out_time`, `params`) VALUES (22, 'ProductSearchBot', 'virtuemart.searchbot', 'search', 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '');
####


5.  В администраторской части Joomla / Mambo зайдите в  "Modules" => "Модули сайта" и
	найдите модули VirtueMart.
	Выберите каждый из них опубликуйте.
	Пожалуйста заметьте что обязательно ДОЛЖЕН БЫТЬ ОПУБЛИКОВАН 
		"VirtueMart Module"

		
</pre>