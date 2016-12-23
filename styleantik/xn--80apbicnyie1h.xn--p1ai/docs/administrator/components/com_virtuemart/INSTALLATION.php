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
������ �������������� ��������� ��������� ������� � ����� README.php ������ ���������.

��� �� ����� ������������ ��� ����������, ����� ���� ������� ������ ���������.

�� ������ ������������ ���� ����, ������ ����� ���� �������� � ���������� ������� (safe mode) PHP
��� ������ �������� � Joomla / Mambo ������������.


���� ���������� �����  ������� (Safe Mode = On) ? ����� ������ ��������� ��� ��� ���������.

������ ��������� VIRTUEMART

�������� ����� �����
-----------------
���� ���� �������� ��������� ��� ������ ��������� VirtueMart.


�������� VirtueMart
------------------------------
VirtueMart ��� ������ � �������� �������� ����� (Open Source) ����������� �������� ���  Joomla � Mambo.



MANUAL INSTALLATION PROCEDURE
--------------------------------------------------
  
1. ���������� �������� ���� (���� �� ������� �������� ���� "README.txt"):

	VirtueMart_Manual-Installation-Package_1.x.tar.gz
	
	������ �� ������ ������ ��������� �����:
	  * /administrator
	  * /components
	  * /modules
	  * /mambots
	
	��������� ����� � ���� ����������� ����� �� ��� �� ����� �����  Joomla/Mambo.
	
2.  ������� FTP ���������� � �����  Joomla/Mambo ������ � �������� �����.
	
	/components
	�
	  /��������-�����-�����/components/

	/administrator
	�
	  /��������-�����-�����/administrator/
	  
	/modules
	�
	  /��������-�����-�����/modules/

	/mambots
	�
	  /path-to-site-root/mambots/
	  
	�� ������ ���������� ������������� ������������ ������ � ���� ������.
	������������ ���������������� ���� �� ������ ���� �����������.


3.  ������� � ����������������� ����� Joomla / Mambo (��� ���������� ������).

	  http://www.xxxxxx.ru/administrator/
	
	* ����� ����� �� ������� ��������� �����(URL) � �������� ������ ��������:
	
	  http://www.xxxxxx.ru/administrator/index2.php
	
	* ������ ������� "?option=com_virtuemart" ����� index2.php, ������ ������ ������ ����� ��������� ��� ���:
	  
		http://www.xxxxxx.ru/administrator/index2.php?option=com_virtuemart
	
	  � ������� Enter.
	
	* ������ �� ������ ������� ������� "��������� ������ �������...".
	  ������ �� ������ ������� �� ������
		"����� � ������� >>" 
	  ��� 
		"����������� ���� ������" (����� �� ������ �������� ��������� ����-������� � ��������� � ��� �������).

	* ��������� ���������.

������ � ������� (�������).
-----------------------

4. ������ � ������� (�������) � ������, �� �������� ������ �������� VirtueMart Main Module (������� ������  VirtueMart),
	������� ������� �� ���� ������:
	/modules/mod_virtuemart.php
	/modules/mod_virtuemart.xml
	
	��� ����� ���� ������ ��� ������� � ��������� ������� �� ������ ��������.

	�������� phpMyAdmin � �������� ���� ���� ������.
	������� ������ "SQL" �� ������ ����������� ������, ������ ����������� ����������.
	
	������ �������� ��� ������� ���� �� ����������� Joomla � ��������� jos_ :
	
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

	��� ��� ������� ���� �� ����������� Mambo � ��������� mos_ .

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


5.  � ����������������� ����� Joomla / Mambo ������� �  "Modules" => "������ �����" �
	������� ������ VirtueMart.
	�������� ������ �� ��� �����������.
	���������� �������� ��� ����������� ������ ���� ����������� 
		"VirtueMart Module"

		
</pre>