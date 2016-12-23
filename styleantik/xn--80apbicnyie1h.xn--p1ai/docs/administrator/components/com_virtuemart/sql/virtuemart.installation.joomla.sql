# $Id: virtuemart.installation.joomla.sql 694 2007-02-21 11:42:48Z soeren_nb $
#
# To undo the changes done by this script, run virtuemart.uninstallation.mysql.sql
#
############################################################
# DATABASE STRUCTURE AND CORE DATA FOR VirtueMart
############################################################

## phpMyAdmin SQL Dump
## version 2.6.2-pl1
## http://www.phpmyadmin.net
## 
## Host: localhost
## Generation Time: Oct 01, 2005 at 05:54 PM
## Server version: 4.1.12
## PHP Version: 5.0.4
## 
## Database: `joomla1`
## 

## --------------------------------------------------------

## 
## Table structure for table `#__vm_affiliate`
## 

CREATE TABLE IF NOT EXISTS `#__vm_affiliate` (
  `affiliate_id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL default '0',
  `active` char(1) NOT NULL default 'N',
  `rate` int(11) NOT NULL default '0',
  PRIMARY KEY  (`affiliate_id`)
)  COMMENT='������������ ��� �������� ������� � ���������';

## 
## Dumping data for table `#__vm_affiliate`
## 


## --------------------------------------------------------

## 
## Table structure for table `#__vm_affiliate_sale`
## 

CREATE TABLE IF NOT EXISTS `#__vm_affiliate_sale` (
  `order_id` int(11) NOT NULL default '0',
  `visit_id` varchar(32) NOT NULL default '',
  `affiliate_id` int(11) NOT NULL default '0',
  `rate` int(2) NOT NULL default '0',
  PRIMARY KEY  (`order_id`)
) TYPE=MyISAM COMMENT='Stores orders that affiliates have placed';

## 
## Dumping data for table `jos_vm_affiliate_sale`
## 


## --------------------------------------------------------

## 
## Table structure for table `jos_vm_auth_user_vendor`
## 

CREATE TABLE IF NOT EXISTS `jos_vm_auth_user_vendor` (
  `user_id` int(11) default NULL,
  `vendor_id` int(11) default NULL,
  KEY `idx_auth_user_vendor_user_id` (`user_id`),
  KEY `idx_auth_user_vendor_vendor_id` (`vendor_id`)
) TYPE=MyISAM COMMENT='Maps a user to a vendor';

## 
## Dumping data for table `jos_vm_auth_user_vendor`
## 


## --------------------------------------------------------

## 
## Table structure for table `jos_vm_category`
## 

CREATE TABLE IF NOT EXISTS `jos_vm_category` (
  `category_id` int(11) NOT NULL auto_increment,
  `vendor_id` int(11) NOT NULL default '0',
  `category_name` varchar(128) NOT NULL default '',
  `category_description` text,
  `category_thumb_image` varchar(255) default NULL,
  `category_full_image` varchar(255) default NULL,
  `category_publish` char(1) default NULL,
  `cdate` int(11) default NULL,
  `mdate` int(11) default NULL,
  `category_browsepage` varchar(255) NOT NULL default 'browse_1',
  `products_per_row` tinyint(2) NOT NULL default '1',
  `category_flypage` varchar(255) default NULL,
  `list_order` int(11) default NULL,
  PRIMARY KEY  (`category_id`),
  KEY `idx_category_vendor_id` (`vendor_id`),
  KEY `idx_category_name` (`category_name`)
) TYPE=MyISAM COMMENT='Product Categories are stored here';

## 
## Dumping data for table `jos_vm_category`
## 


## --------------------------------------------------------

## 
## Table structure for table `jos_vm_category_xref`
## 

CREATE TABLE IF NOT EXISTS `jos_vm_category_xref` (
  `category_parent_id` int(11) NOT NULL default '0',
  `category_child_id` int(11) NOT NULL default '0',
  `category_list` int(11) default NULL,
  KEY `category_xref_category_parent_id` (`category_parent_id`),
  KEY `category_xref_category_child_id` (`category_child_id`),
  KEY `idx_category_xref_category_list` (`category_list`)
) TYPE=MyISAM COMMENT='Category child-parent relation list';

## 
## Dumping data for table `jos_vm_category_xref`
## 


## --------------------------------------------------------

## 
## Table structure for table `jos_vm_country`
## 

CREATE TABLE IF NOT EXISTS `jos_vm_country` (
  `country_id` int(11) NOT NULL auto_increment,
  `zone_id` int(11) NOT NULL default '1',
  `country_name` varchar(64) default NULL,
  `country_3_code` char(3) default NULL,
  `country_2_code` char(2) default NULL,
  PRIMARY KEY  (`country_id`),
  KEY `idx_country_name` (`country_name`)
) TYPE=MyISAM COMMENT='Country records';

## 
## Dumping data for table `jos_vm_country`
## 

INSERT INTO `#__vm_country` VALUES (1, 1, '����������', 'AFG', 'AF'),
(2, 1, '�������', 'ALB', 'AL'),
(3, 1, '�����', 'DZA', 'DZ'),
(4, 1, '������������ �����', 'ASM', 'AS'),
(5, 1, '�������', 'AND', 'AD'),
(6, 1, '������', 'AGO', 'AO'),
(7, 1, '�������', 'AIA', 'AI'),
(8, 1, '����������', 'ATA', 'AQ'),
(9, 1, '������� � �������', 'ATG', 'AG'),
(10, 1, '���������', 'ARG', 'AR'),
(11, 1, '�������', 'ARM', 'AM'),
(12, 1, '�����', 'ABW', 'AW'),
(13, 1, '���������', 'AUS', 'AU'),
(14, 1, '�������', 'AUT', 'AT'),
(15, 1, '�����������', 'AZE', 'AZ'),
(16, 1, '������', 'BHS', 'BS'),
(17, 1, '�������', 'BHR', 'BH'),
(18, 1, '���������', 'BGD', 'BD'),
(19, 1, '��������', 'BRB', 'BB'),
(20, 1, '��������', 'BLR', 'BY'),
(21, 1, '�������', 'BEL', 'BE'),
(22, 1, '�����', 'BLZ', 'BZ'),
(23, 1, '�����', 'BEN', 'BJ'),
(24, 1, '�������', 'BMU', 'BM'),
(25, 1, '�����', 'BTN', 'BT'),
(26, 1, '�������', 'BOL', 'BO'),
(27, 1, '������ � �����������', 'BIH', 'BA'),
(28, 1, '��������', 'BWA', 'BW'),
(29, 1, '������ �����', 'BVT', 'BV'),
(30, 1, '��������', 'BRA', 'BR'),
(31, 1, '���������� ������� � ����� ������', 'IOT', 'IO'),
(32, 1, '������ ������', 'BRN', 'BN'),
(33, 1, '��������', 'BGR', 'BG'),
(34, 1, '������� ����', 'BFA', 'BF'),
(35, 1, '�������', 'BDI', 'BI'),
(36, 1, '��������', 'KHM', 'KH'),
(37, 1, '�������', 'CMR', 'CM'),
(38, 1, '������', 'CAN', 'CA'),
(39, 1, '���� �����', 'CPV', 'CV'),
(40, 1, '��������� �������', 'CYM', 'KY'),
(41, 1, '����������� ����������� ����������', 'CAF', 'CF'),
(42, 1, '���������� ���', 'TCD', 'TD'),
(43, 1, '����', 'CHL', 'CL'),
(44, 1, '�����', 'CHN', 'CN'),
(45, 1, '������ ���������', 'CXR', 'CX'),
(46, 1, '������� ������', 'CCK', 'CC'),
(47, 1, '��������', 'COL', 'CO'),
(48, 1, '�������', 'COM', 'KM'),
(49, 1, '�����', 'COG', 'CG'),
(50, 1, '������� ����', 'COK', 'CK'),
(51, 1, '����� ����', 'CRI', 'CR'),
(52, 1, '���-��-����', 'CIV', 'CI'),
(53, 1, '��������', 'HRV', 'HR'),
(54, 1, '����', 'CUB', 'CU'),
(55, 1, '����', 'CYP', 'CY'),
(56, 1, '�����', 'CZE', 'CZ'),
(57, 1, '�����', 'DNK', 'DK'),
(58, 1, '�������', 'DJI', 'DJ'),
(59, 1, '��������', 'DMA', 'DM'),
(60, 1, '������������� ���.', 'DOM', 'DO'),
(61, 1, '����. �����', 'TMP', 'TP'),
(62, 1, '�������', 'ECU', 'EC'),
(63, 1, '������', 'EGY', 'EG'),
(64, 1, '���������', 'SLV', 'SV'),
(65, 1, '�������. ������', 'GNQ', 'GQ'),
(66, 1, '�������', 'ERI', 'ER'),
(67, 1, '�������', 'EST', 'EE'),
(68, 1, '�������', 'ETH', 'ET'),
(69, 1, '������������ �������', 'FLK', 'FK'),
(70, 1, '������� ����', 'FRO', 'FO'),
(71, 1, '�����', 'FJI', 'FJ'),
(72, 1, '���������', 'FIN', 'FI'),
(73, 1, '�������', 'FRA', 'FR'),
(74, 1, '�������, ����������', 'FXX', 'FX'),
(75, 1, '�����. ������', 'GUF', 'GF'),
(76, 1, '�����. ���������', 'PYF', 'PF'),
(77, 1, '�����. ���. ����������', 'ATF', 'TF'),
(78, 1, '�����', 'GAB', 'GA'),
(79, 1, '������', 'GMB', 'GM'),
(80, 1, '������', 'GEO', 'GE'),
(81, 1, '��������', 'DEU', 'DE'),
(82, 1, '����', 'GHA', 'GH'),
(83, 1, '���������', 'GIB', 'GI'),
(84, 1, '������', 'GRC', 'GR'),
(85, 1, '����������', 'GRL', 'GL'),
(86, 1, '�������', 'GRD', 'GD'),
(87, 1, '���������', 'GLP', 'GP'),
(88, 1, '����', 'GUM', 'GU'),
(89, 1, '���������', 'GTM', 'GT'),
(90, 1, '������', 'GIN', 'GN'),
(91, 1, '������-������', 'GNB', 'GW'),
(92, 1, '������', 'GUY', 'GY'),
(93, 1, '�����', 'HTI', 'HT'),
(94, 1, '������� ���� � ����������', 'HMD', 'HM'),
(95, 1, '��������', 'HND', 'HN'),
(96, 1, '�������', 'HKG', 'HK'),
(97, 1, '�������', 'HUN', 'HU'),
(98, 1, '��������', 'ISL', 'IS'),
(99, 1, '�����', 'IND', 'IN'),
(100, 1, '���������', 'IDN', 'ID'),
(101, 1, '����', 'IRN', 'IR'),
(102, 1, '����', 'IRQ', 'IQ'),
(103, 1, '��������', 'IRL', 'IE'),
(104, 1, '�������', 'ISR', 'IL'),
(105, 1, '������', 'ITA', 'IT'),
(106, 1, '������', 'JAM', 'JM'),
(107, 1, '������', 'JPN', 'JP'),
(108, 1, '������', 'JOR', 'JO'),
(109, 1, '���������', 'KAZ', 'KZ'),
(110, 1, '�����', 'KEN', 'KE'),
(111, 1, '��������', 'KIR', 'KI'),
(112, 1, '������. ���. �����', 'PRK', 'KP'),
(113, 1, '�����', 'KOR', 'KR'),
(114, 1, '������', 'KWT', 'KW'),
(115, 1, '����������', 'KGZ', 'KG'),
(116, 1, '������. ���. ����', 'LAO', 'LA'),
(117, 1, '������', 'LVA', 'LV'),
(118, 1, '�������', 'LBN', 'LB'),
(119, 1, '������', 'LSO', 'LS'),
(120, 1, '�������', 'LBR', 'LR'),
(121, 1, '���������� ����. ����������', 'LBY', 'LY'),
(122, 1, '�����������', 'LIE', 'LI'),
(123, 1, '�����', 'LTU', 'LT'),
(124, 1, '����������', 'LUX', 'LU'),
(125, 1, '������', 'MAC', 'MO'),
(126, 1, '���������', 'MKD', 'MK'),
(127, 1, '����������', 'MDG', 'MG'),
(128, 1, '������', 'MWI', 'MW'),
(129, 1, '��������', 'MYS', 'MY'),
(130, 1, '��������', 'MDV', 'MV'),
(131, 1, '����', 'MLI', 'ML'),
(132, 1, '������', 'MLT', 'MT'),
(133, 1, '������� ������', 'MHL', 'MH'),
(134, 1, '���������', 'MTQ', 'MQ'),
(135, 1, '����������', 'MRT', 'MR'),
(136, 1, '��������', 'MUS', 'MU'),
(137, 1, '����', 'MYT', 'YT'),
(138, 1, '�������', 'MEX', 'MX'),
(139, 1, '����������', 'FSM', 'FM'),
(140, 1, '�������', 'MDA', 'MD'),
(141, 1, '������', 'MCO', 'MC'),
(142, 1, '��������', 'MNG', 'MN'),
(143, 1, '��������', 'MSR', 'MS'),
(144, 1, '�������', 'MAR', 'MA'),
(145, 1, '��������', 'MOZ', 'MZ'),
(146, 1, '������', 'MMR', 'MM'),
(147, 1, '�������', 'NAM', 'NA'),
(148, 1, '�����', 'NRU', 'NR'),
(149, 1, '�����', 'NPL', 'NP'),
(150, 1, '����������', 'NLD', 'NL'),
(151, 1, '����������� ������', 'ANT', 'AN'),
(152, 1, '���. ���������', 'NCL', 'NC'),
(153, 1, '���. ��������', 'NZL', 'NZ'),
(154, 1, '���������', 'NIC', 'NI'),
(155, 1, '�����', 'NER', 'NE'),
(156, 1, '�������', 'NGA', 'NG'),
(157, 1, '���', 'NIU', 'NU'),
(158, 1, '������ �������', 'NFK', 'NF'),
(159, 1, '���. ������� �������', 'MNP', 'MP'),
(160, 1, '��������', 'NOR', 'NO'),
(161, 1, '����', 'OMN', 'OM'),
(162, 1, '��������', 'PAK', 'PK'),
(163, 1, '�����', 'PLW', 'PW'),
(164, 1, '������', 'PAN', 'PA'),
(165, 1, '�����, ����� ������', 'PNG', 'PG'),
(166, 1, '��������', 'PRY', 'PY'),
(167, 1, '����', 'PER', 'PE'),
(168, 1, '���������', 'PHL', 'PH'),
(169, 1, '�������', 'PCN', 'PN'),
(170, 1, '������', 'POL', 'PL'),
(171, 1, '����������', 'PRT', 'PT'),
(172, 1, '������ ����', 'PRI', 'PR'),
(173, 1, '�����', 'QAT', 'QA'),
(174, 1, '�������', 'REU', 'RE'),
(175, 1, '�������', 'ROM', 'RO'),
(176, 1, '���������� ���������', 'RUS', 'RU'),
(177, 1, '������', 'RWA', 'RW'),
(178, 1, '��. ���� � �����', 'KNA', 'KN'),
(179, 1, '��. �����', 'LCA', 'LC'),
(180, 1, '��. ������� � �������', 'VCT', 'VC'),
(181, 1, '�����', 'WSM', 'WS'),
(182, 1, '��� ������', 'SMR', 'SM'),
(183, 1, '��. ��� � �������', 'STP', 'ST'),
(184, 1, '���������� ������', 'SAU', 'SA'),
(185, 1, '�������', 'SEN', 'SN'),
(186, 1, '�������', 'SYC', 'SC'),
(187, 1, '������ �����', 'SLE', 'SL'),
(188, 1, '��������', 'SGP', 'SG'),
(189, 1, '��������', 'SVK', 'SK'),
(190, 1, '��������', 'SVN', 'SI'),
(191, 1, '������� ��������', 'SLB', 'SB'),
(192, 1, '������', 'SOM', 'SO'),
(193, 1, '����� ������', 'ZAF', 'ZA'),
(194, 1, '����� �������. �������', 'SGS', 'GS'),
(195, 1, '�������', 'ESP', 'ES'),
(196, 1, '��� �����', 'LKA', 'LK'),
(197, 1, '��. �����', 'SHN', 'SH'),
(198, 1, '��. ���� � �������', 'SPM', 'PM'),
(199, 1, '�����', 'SDN', 'SD'),
(200, 1, '�������', 'SUR', 'SR'),
(201, 1, '�������� � �� ����� �������', 'SJM', 'SJ'),
(202, 1, '���������', 'SWZ', 'SZ'),
(203, 1, '������', 'SWE', 'SE'),
(204, 1, '���������', 'CHE', 'CH'),
(205, 1, '�����', 'SYR', 'SY'),
(206, 1, '�������', 'TWN', 'TW'),
(207, 1, '�����������', 'TJK', 'TJ'),
(208, 1, '��������', 'TZA', 'TZ'),
(209, 1, '�������', 'THA', 'TH'),
(210, 1, '����', 'TGO', 'TG'),
(211, 1, '�������', 'TKL', 'TK'),
(212, 1, '�����', 'TON', 'TO'),
(213, 1, '�������� � ������', 'TTO', 'TT'),
(214, 1, '�����', 'TUN', 'TN'),
(215, 1, '������', 'TUR', 'TR'),
(216, 1, '������������', 'TKM', 'TM'),
(217, 1, '���� � ������ �������', 'TCA', 'TC'),
(218, 1, '������', 'TUV', 'TV'),
(219, 1, '������', 'UGA', 'UG'),
(220, 1, '�������', 'UKR', 'UA'),
(221, 1, '���', 'ARE', 'AE'),
(222, 1, '��������������', 'GBR', 'GB'),
(223, 1, '���', 'USA', 'US'),
(224, 1, '����. ����� �������� ��������', 'UMI', 'UM'),
(225, 1, '�������', 'URY', 'UY'),
(226, 1, '����������', 'UZB', 'UZ'),
(227, 1, '������', 'VUT', 'VU'),
(228, 1, '�������', 'VAT', 'VA'),
(229, 1, '���������', 'VEN', 'VE'),
(230, 1, '�������', 'VNM', 'VN'),
(231, 1, '����������� �-�� (������)', 'VGB', 'VG'),
(232, 1, '����������� �-�� (���)', 'VIR', 'VI'),
(233, 1, '�����', 'WLF', 'WF'),
(234, 1, '���. ������', 'ESH', 'EH'),
(235, 1, '�����', 'YEM', 'YE'),
(236, 1, '���������', 'YUG', 'YU'),
(237, 1, '����', 'ZAR', 'ZR'),
(238, 1, '������', 'ZMB', 'ZM'),
(239, 1, '��������', 'ZWE', 'ZW');

## --------------------------------------------------------

## 
## Table structure for table `#__vm_coupons`
## 

CREATE TABLE IF NOT EXISTS `#__vm_coupons` (
  `coupon_id` int(16) NOT NULL auto_increment,
  `coupon_code` varchar(32) NOT NULL default '',
  `percent_or_total` enum('percent','total') NOT NULL default 'percent',
  `coupon_type` enum('gift','permanent') NOT NULL default 'gift',
  `coupon_value` decimal(12,2) NOT NULL default '0.00',
  PRIMARY KEY  (`coupon_id`)
)  COMMENT='��� ������ ����� �������';

## 
## Dumping data for table `#__vm_coupons`
## 


## --------------------------------------------------------

## 
## Table structure for table `#__vm_creditcard`
## 

CREATE TABLE IF NOT EXISTS `#__vm_creditcard` (
  `creditcard_id` int(11) NOT NULL auto_increment,
  `vendor_id` int(11) NOT NULL default '0',
  `creditcard_name` varchar(70) NOT NULL default '',
  `creditcard_code` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`creditcard_id`)
)  COMMENT='��� �������� ����� ��������� ����';

## 
## Dumping data for table `#__vm_creditcard`
## 

INSERT INTO `#__vm_creditcard` VALUES (1, 1, 'Visa', 'VISA'),
(2, 1, 'MasterCard', 'MC'),
(3, 1, 'American Express', 'amex'),
(4, 1, 'Discover Card', 'discover'),
(5, 1, 'Diners Club', 'diners'),
(6, 1, 'JCB', 'jcb'),
(7, 1, 'Australian Bankcard', 'australian_bc');

## --------------------------------------------------------

## 
## Table structure for table `#__vm_csv`
## 

CREATE TABLE IF NOT EXISTS `#__vm_csv` (
  `field_id` int(11) NOT NULL auto_increment,
  `field_name` varchar(128) NOT NULL default '',
  `field_default_value` text,
  `field_ordering` int(3) NOT NULL default '0',
  `field_required` char(1) default 'N',
  PRIMARY KEY  (`field_id`)
)  COMMENT='���� ��� CSV ������� ��������';

## 
## Dumping data for table `#__vm_csv`
## 

INSERT INTO `#__vm_csv` VALUES (1, 'product_sku', '', 1, 'Y'),
(2, 'product_s_desc', '', 5, 'N'),
(3, 'product_desc', '', 6, 'N'),
(4, 'product_thumb_image', '', 7, 'N'),
(5, 'product_full_image', '', 8, 'N'),
(6, 'product_weight', '', 9, 'N'),
(7, 'product_weight_uom', 'KG', 10, 'N'),
(8, 'product_length', '', 11, 'N'),
(9, 'product_width', '', 12, 'N'),
(10, 'product_height', '', 13, 'N'),
(11, 'product_lwh_uom', '', 14, 'N'),
(12, 'product_in_stock', '0', 15, 'N'),
(13, 'product_available_date', '', 16, 'N'),
(14, 'product_discount_id', '', 17, 'N'),
(15, 'product_name', '', 2, 'Y'),
(16, 'product_price', '', 4, 'N'),
(17, 'category_path', '', 3, 'Y'),
(18, 'manufacturer_id', '', 18, 'N'),
(19, 'product_tax_id', '', 19, 'N'),
(20, 'product_sales', '', 20, 'N'),
(21, 'product_parent_id', '0', 21, 'N'),
(22, 'attribute', '', 22, 'N'),
(23, 'custom_attribute', '', 23, 'N'),
(24, 'attributes', '', 24, 'N'),
(25, 'attribute_values', '', 25, 'N'),
(26, 'product_discount', '', 26, 'N');

## --------------------------------------------------------

## 
## Table structure for table `#__vm_currency`
## 

CREATE TABLE IF NOT EXISTS `#__vm_currency` (
  `currency_id` int(11) NOT NULL auto_increment,
  `currency_name` varchar(64) default NULL,
  `currency_code` char(3) default NULL,
  PRIMARY KEY  (`currency_id`),
  KEY `idx_currency_name` (`currency_name`)
)  COMMENT='������';

## 
## Dumping data for table `#__vm_currency`
## 

INSERT INTO `#__vm_currency` VALUES (1, 'Andorran Peseta', 'ADP'),
(2, '��� ������', 'AED'),
(3, '����������. ������', 'AFA'),
(4, '�������. ���', 'ALL'),
(5, '������� ����������� �����', 'ANG'),
(6, '���������� ������', 'AOK'),
(7, '����������. �����', 'ARA'),
(9, '��������. ������', 'AUD'),
(10, '����. ������', 'AWG'),
(11, '��������. ������', 'BBD'),
(12, '���������. ����', 'BDT'),
(14, '��������. ���', 'BGL'),
(15, '�������. �����', 'BHD'),
(16, '������� �����', 'BIF'),
(17, '������. ������', 'BMD'),
(18, '��������. ������', 'BND'),
(19, '���������. ���������', 'BOB'),
(20, '���������. ����', 'BRL'),
(21, '�������. ������', 'BSD'),
(22, '����� ��������', 'BTN'),
(23, '����� �����', 'BUK'),
(24, '���������. ����', 'BWP'),
(25, '�������. ������', 'BZD'),
(26, '�������. ������', 'CAD'),
(27, '�����. �����', 'CHF'),
(28, '�������. �������', 'CLF'),
(29, '�������. �����', 'CLP'),
(30, '���. ����', 'CNY'),
(31, '����������. �����', 'COP'),
(32, '����� ���� �����', 'CRC'),
(33, '�����. �����', 'CZK'),
(34, '�������. �����', 'CUP'),
(35, '���� ����� ������', 'CVE'),
(36, '������. ����', 'CYP'),
(40, '�����. �����', 'DKK'),
(41, '�����������. �����', 'DOP'),
(42, '��������� �����', 'DZD'),
(43, '������� �����', 'ECS'),
(44, '��������. ����', 'EGP'),
(46, '�������. ����', 'ETB'),
(47, '����', 'EUR'),
(49, '����� ������', 'FJD'),
(50, '����������. ����', 'FKP'),
(52, '��������. ����', 'GBP'),
(53, '��������. ����', 'GHC'),
(54, '�����������. ����', 'GIP'),
(55, '���������. ������', 'GMD'),
(56, '��������. �����', 'GNF'),
(58, '����������. ������', 'GTQ'),
(59, '��������. �����', 'GWP'),
(60, '�������. ������', 'GYD'),
(61, '���-������. ������', 'HKD'),
(62, '�������� �������', 'HNL'),
(63, '��������. ������', 'HTG'),
(64, '��������. ������', 'HUF'),
(65, '����������. �����', 'IDR'),
(66, '�������� ����', 'IEP'),
(67, '���������. ������', 'ILS'),
(68, '�������. �����', 'INR'),
(69, '������. �����', 'IQD'),
(70, '������. ����', 'IRR'),
(73, '������. ������', 'JMD'),
(74, '��������. �����', 'JOD'),
(75, '������. ����', 'JPY'),
(76, '�������. �������', 'KES'),
(77, '����������. ����', 'KHR'),
(78, '���������. �����', 'KMF'),
(79, '���. �������. ���', 'KPW'),
(80, '���. �������. ���', 'KRW'),
(81, '�������� �����', 'KWD'),
(82, '��������. ������', 'KYD'),
(83, '�����. ���', 'LAK'),
(84, '���������. ����', 'LBP'),
(85, '���-����� �����', 'LKR'),
(86, '��������� ������', 'LRD'),
(87, '������� ����', 'LSL'),
(89, '������� �����', 'LYD'),
(90, '����������. ������', 'MAD'),
(91, '���������. �����', 'MGF'),
(92, '���������. ������', 'MNT'),
(93, '�������. �����', 'MOP'),
(94, '���������� �����', 'MRO'),
(95, '��������� ����', 'MTL'),
(96, '�������� �����', 'MUR'),
(97, '������� �����', 'MVR'),
(98, '������ �����', 'MWK'),
(99, '����������. �����', 'MXP'),
(100, '��������� ������', 'MYR'),
(101, '����������. �������', 'MZM'),
(102, '���������. �����', 'NGN'),
(103, '�����������. �������', 'NIC'),
(105, '��������. �����', 'NOK'),
(106, '����� �����', 'NPR'),
(107, '���. ��������. ������', 'NZD'),
(108, '����� ����', 'OMR'),
(109, '�������. ������', 'PAB'),
(110, '���� ����', 'PEI'),
(111, '����� ���. ������ ����', 'PGK'),
(112, '����������. �����', 'PHP'),
(113, '����������. �����', 'PKR'),
(114, '��������� ������', 'PLZ'),
(116, '���������� ������', 'PYG'),
(117, '�������. ����', 'QAR'),
(118, '�������. ���', 'ROL'),
(119, '������ �����', 'RWF'),
(120, '����. ��������. ����', 'SAR'),
(121, '�������. �-�� ������', 'SBD'),
(122, '������� �����', 'SCR'),
(123, '�������. ����', 'SDP'),
(124, '������. �����', 'SEK'),
(125, '����������. ������', 'SGD'),
(126, '��. ����� ����', 'SHP'),
(127, '������ ����� ����', 'SLL'),
(128, '������ �������', 'SOS'),
(129, '������� �������', 'SRG'),
(130, '��. ��� � ������� �����', 'STD'),
(131, '������� �����', 'RUB'),
(132, '�����������. �����', 'SVC'),
(133, '�������. �����', 'SYP'),
(134, '�����������. ���������', 'SZL'),
(135, '������� ���', 'THB'),
(136, '�������. �����', 'TND'),
(137, '����� �����', 'TOP'),
(138, '����. ����� ������', 'TPE'),
(139, '�������� ����', 'TRL'),
(140, '�������� � ������ ������', 'TTD'),
(141, '���������� ������', 'TWD'),
(142, '����������. �������', 'TZS'),
(143, '������ �������', 'UGS'),
(144, '��� ������', 'USD'),
(145, '���������. �����', 'UYP'),
(146, '�����������. �������', 'VEB'),
(147, '���������. ����', 'VND'),
(148, '������ ����', 'VUV'),
(149, '����� ����', 'WST'),
(150, '������. ����� �����', 'YDD'),
(151, '�������. ����', 'YER'),
(152, '���������. �����', 'YUD'),
(153, '��. ������ ����', 'ZAR'),
(154, '��������. �����', 'ZMK'),
(155, '������. ����', 'ZRZ'),
(156, '���������. ������', 'ZWD'),
(157, '��������. �����', 'SKK');

## --------------------------------------------------------

## 
## Table structure for table `#__vm_function`
## 

CREATE TABLE IF NOT EXISTS `#__vm_function` (
  `function_id` int(11) NOT NULL auto_increment,
  `module_id` int(11) default NULL,
  `function_name` varchar(32) default NULL,
  `function_class` varchar(32) default NULL,
  `function_method` varchar(32) default NULL,
  `function_description` text,
  `function_perms` varchar(255) default NULL,
  PRIMARY KEY  (`function_id`),
  KEY `idx_function_module_id` (`module_id`),
  KEY `idx_function_name` (`function_name`)
)  COMMENT='������������������ �������';

## 
## Dumping data for table `#__vm_function`
## 

INSERT INTO `#__vm_function` VALUES (1, 1, 'userAdd', 'ps_user', 'add', '', 'admin,storeadmin'),
(2, 1, 'userDelete', 'ps_user', 'delete', '', 'admin,storeadmin'),
(3, 1, 'userUpdate', 'ps_user', 'update', '', 'admin,storeadmin'),
(4, 1, 'adminPasswdUpdate', 'ps_user', 'update_admin_passwd', 'Updates Site Administrator Password', 'admin'),
(31, 2, 'productAdd', 'ps_product', 'add', '', 'admin,storeadmin'),
(6, 1, 'functionAdd', 'ps_function', 'add', '', 'admin'),
(7, 1, 'functionUpdate', 'ps_function', 'update', '', 'admin'),
(8, 1, 'functionDelete', 'ps_function', 'delete', '', 'admin'),
(9, 1, 'userLogout', 'ps_user', 'logout', '', 'none'),
(10, 1, 'userAddressAdd', 'ps_user_address', 'add', '', 'admin,storeadmin,shopper,demo'),
(11, 1, 'userAddressUpdate', 'ps_user_address', 'update', '', 'admin,storeadmin,shopper'),
(12, 1, 'userAddressDelete', 'ps_user_address', 'delete', '', 'admin,storeadmin,shopper'),
(13, 1, 'moduleAdd', 'ps_module', 'add', '', 'admin'),
(14, 1, 'moduleUpdate', 'ps_module', 'update', '', 'admin'),
(15, 1, 'moduleDelete', 'ps_module', 'delete', '', 'admin'),
(16, 1, 'userLogin', 'ps_user', 'login', '', 'none'),
(17, 3, 'vendorAdd', 'ps_vendor', 'add', '', 'admin'),
(18, 3, 'vendorUpdate', 'ps_vendor', 'update', '', 'admin,storeadmin'),
(19, 3, 'vendorDelete', 'ps_vendor', 'delete', '', 'admin'),
(20, 3, 'vendorCategoryAdd', 'ps_vendor_category', 'add', '', 'admin'),
(21, 3, 'vendorCategoryUpdate', 'ps_vendor_category', 'update', '', 'admin'),
(22, 3, 'vendorCategoryDelete', 'ps_vendor_category', 'delete', '', 'admin'),
(23, 4, 'shopperAdd', 'ps_shopper', 'add', '', 'none'),
(24, 4, 'shopperDelete', 'ps_shopper', 'delete', '', 'admin,storeadmin'),
(25, 4, 'shopperUpdate', 'ps_shopper', 'update', '', 'admin,storeadmin,shopper'),
(26, 4, 'shopperGroupAdd', 'ps_shopper_group', 'add', '', 'admin,storeadmin'),
(27, 4, 'shopperGroupUpdate', 'ps_shopper_group', 'update', '', 'admin,storeadmin'),
(28, 4, 'shopperGroupDelete', 'ps_shopper_group', 'delete', '', 'admin,storeadmin'),
(29, 5, 'orderSearch', 'ps_order', 'find', '', 'admin,storeadmin,demo'),
(30, 5, 'orderStatusSet', 'ps_order', 'order_status_update', '', 'admin,storeadmin'),
(32, 2, 'productDelete', 'ps_product', 'delete', '', 'admin,storeadmin'),
(33, 2, 'productUpdate', 'ps_product', 'update', '', 'admin,storeadmin'),
(34, 2, 'productCategoryAdd', 'ps_product_category', 'add', '', 'admin,storeadmin'),
(35, 2, 'productCategoryUpdate', 'ps_product_category', 'update', '', 'admin,storeadmin'),
(36, 2, 'productCategoryDelete', 'ps_product_category', 'delete', '', 'admin,storeadmin'),
(37, 2, 'productPriceAdd', 'ps_product_price', 'add', '', 'admin,storeadmin'),
(38, 2, 'productPriceUpdate', 'ps_product_price', 'update', '', 'admin,storeadmin'),
(39, 2, 'productPriceDelete', 'ps_product_price', 'delete', '', 'admin,storeadmin'),
(40, 2, 'productAttributeAdd', 'ps_product_attribute', 'add', '', 'admin,storeadmin'),
(41, 2, 'productAttributeUpdate', 'ps_product_attribute', 'update', '', 'admin,storeadmin'),
(42, 2, 'productAttributeDelete', 'ps_product_attribute', 'delete', '', 'admin,storeadmin'),
(43, 7, 'cartAdd', 'ps_cart', 'add', '', 'none'),
(44, 7, 'cartUpdate', 'ps_cart', 'update', '', 'none'),
(45, 7, 'cartDelete', 'ps_cart', 'delete', '', 'none'),
(46, 10, 'checkoutComplete', 'ps_checkout', 'add', '', 'shopper,storeadmin,admin'),
(47, 1, 'setLanguage', 'ps_module', 'set_language', '', 'none'),
(48, 8, 'paymentMethodUpdate', 'ps_payment_method', 'update', '', 'admin,storeadmin'),
(49, 8, 'paymentMethodAdd', 'ps_payment_method', 'add', '', 'admin,storeadmin'),
(50, 8, 'paymentMethodDelete', 'ps_payment_method', 'delete', '', 'admin,storeadmin'),
(51, 5, 'orderDelete', 'ps_order', 'delete', '', 'admin,storeadmin'),
(52, 11, 'addTaxRate', 'ps_tax', 'add', '', 'admin,storeadmin'),
(53, 11, 'updateTaxRate', 'ps_tax', 'update', '', 'admin,storeadmin'),
(54, 11, 'deleteTaxRate', 'ps_tax', 'delete', '', 'admin,storeadmin'),
(55, 10, 'checkoutValidateST', 'ps_checkout', 'validate_shipto', '', 'none'),
(59, 5, 'orderStatusUpdate', 'ps_order_status', 'update', '', 'admin,storeadmin'),
(60, 5, 'orderStatusAdd', 'ps_order_status', 'add', '', 'storeadmin,admin'),
(61, 5, 'orderStatusDelete', 'ps_order_status', 'delete', '', 'admin,storeadmin'),
(62, 1, 'currencyAdd', 'ps_currency', 'add', 'add a currency', 'storeadmin,admin'),
(63, 1, 'currencyUpdate', 'ps_currency', 'update', '        update a currency', 'storeadmin,admin'),
(64, 1, 'currencyDelete', 'ps_currency', 'delete', 'delete a currency', 'storeadmin,admin'),
(65, 1, 'countryAdd', 'ps_country', 'add', 'Add a country ', 'storeadmin,admin'),
(66, 1, 'countryUpdate', 'ps_country', 'update', 'Update a country record', 'storeadmin,admin'),
(67, 1, 'countryDelete', 'ps_country', 'delete', 'Delete a country record', 'storeadmin,admin'),
(68, 2, 'product_csv', 'ps_csv', 'upload_csv', '', 'admin'),
(110, 7, 'waitingListAdd', 'zw_waiting_list', 'add', '', 'none'),
(111, 13, 'addzone', 'ps_zone', 'add', 'This will add a zone', 'admin,storeadmin'),
(112, 13, 'updatezone', 'ps_zone', 'update', 'This will update a zone', 'admin,storeadmin'),
(113, 13, 'deletezone', 'ps_zone', 'delete', 'This will delete a zone', 'admin,storeadmin'),
(114, 13, 'zoneassign', 'ps_zone', 'assign', 'This will assign a country to a zone', 'admin,storeadmin'),
(115, 1, 'writeConfig', 'ps_config', 'writeconfig', 'This will write the configuration details to phpshop.cfg.php', 'admin'),
(116, 14, 'carrierAdd', 'ps_shipping', 'add', '', 'admin,storeadmin'),
(117, 14, 'carrierDelete', 'ps_shipping', 'delete', '', 'admin,storeadmin'),
(118, 14, 'carrierUpdate', 'ps_shipping', 'update', '', 'admin,storeadmin'),
(119, 14, 'rateAdd', 'ps_shipping', 'rate_add', '', 'admin,storeadmin'),
(120, 14, 'rateUpdate', 'ps_shipping', 'rate_update', '', 'admin,shopadmin'),
(121, 14, 'rateDelete', 'ps_shipping', 'rate_delete', '', 'admin,storeadmin'),
(122, 10, 'checkoutProcess', 'ps_checkout', 'process', '', 'shopper,storeadmin,admin,demo'),
(123, 5, 'downloadRequest', 'ps_order', 'download_request', 'This checks if the download request is valid and sends the file to the browser as file download if the request was successful, otherwise echoes an error', 'admin,storeadmin,shopper'),
(124, 15, 'affiliateAdd', 'ps_affiliate', 'add', '', 'admin,storeadmin'),
(125, 15, 'affiliateUpdate', 'ps_affiliate', 'update', '', 'admin,storeadmin'),
(126, 15, 'affiliateDelete', 'ps_affiliate', 'delete', '', 'admin,storeadmin'),
(127, 15, 'affiliateEmail', 'ps_affiliate', 'email', '', 'admin,storeadmin'),
(128, 16, 'manufacturerAdd', 'ps_manufacturer', 'add', '', 'admin,storeadmin'),
(129, 16, 'manufacturerUpdate', 'ps_manufacturer', 'update', '', 'admin,storeadmin'),
(130, 16, 'manufacturerDelete', 'ps_manufacturer', 'delete', '', 'admin,storeadmin'),
(131, 16, 'manufacturercategoryAdd', 'ps_manufacturer_category', 'add', '', 'admin,storeadmin'),
(132, 16, 'manufacturercategoryUpdate', 'ps_manufacturer_category', 'update', '', 'admin,storeadmin'),
(133, 16, 'manufacturercategoryDelete', 'ps_manufacturer_category', 'delete', '', 'admin,storeadmin'),
(134, 7, 'addReview', 'ps_reviews', 'process_review', 'This lets the user add a review and rating to a product.', 'admin,storeadmin,shopper,demo'),
(135, 7, 'productReviewDelete', 'ps_reviews', 'delete_review', 'This deletes a review and from a product.', 'admin,storeadmin'),
(136, 8, 'creditcardAdd', 'ps_creditcard', 'add', 'Adds a Credit Card entry.', 'admin,storeadmin'),
(137, 8, 'creditcardUpdate', 'ps_creditcard', 'update', 'Updates a Credit Card entry.', 'admin,storeadmin'),
(138, 8, 'creditcardDelete', 'ps_creditcard', 'delete', 'Deletes a Credit Card entry.', 'admin,storeadmin'),
(139, 2, 'changePublishState', 'vmAbstractObject.class', 'handlePublishState', 'Changes the publish field, so that a record can be published or unpublished easily.', 'admin,storeadmin'),
(140, 2, 'export_csv', 'ps_csv', 'export_csv', 'This function exports all relevant product data to CSV.', 'admin,storeadmin'),
(141, 2, 'reorder', 'ps_product_category', 'reorder', 'Changes the list order of a category.', 'admin,storeadmin'),
(142, 2, 'discountAdd', 'ps_product_discount', 'add', 'Adds a discount.', 'admin,storeadmin'),
(143, 2, 'discountUpdate', 'ps_product_discount', 'update', 'Updates a discount.', 'admin,storeadmin'),
(144, 2, 'discountDelete', 'ps_product_discount', 'delete', 'Deletes a discount.', 'admin,storeadmin'),
(145, 8, 'shippingmethodSave', 'ps_shipping_method', 'save', '', 'admin,storeadmin'),
(146, 2, 'uploadProductFile', 'ps_product_files', 'add', 'Uploads and Adds a Product Image/File.', 'admin,storeadmin'),
(147, 2, 'updateProductFile', 'ps_product_files', 'update', 'Updates a Product Image/File.', 'admin,storeadmin'),
(148, 2, 'deleteProductFile', 'ps_product_files', 'delete', 'Deletes a Product Image/File.', 'admin,storeadmin'),
(149, 18, 'couponAdd', 'ps_coupon', 'add_coupon_code', 'Adds a Coupon.', 'admin,storeadmin'),
(150, 18, 'couponUpdate', 'ps_coupon', 'update_coupon', 'Updates a Coupon.', 'admin,storeadmin'),
(151, 18, 'couponDelete', 'ps_coupon', 'remove_coupon_code', 'Deletes a Coupon.', 'admin,storeadmin'),
(152, 18, 'couponProcess', 'ps_coupon', 'process_coupon_code', 'Processes a Coupon.', 'admin,storeadmin,shopper,demo'),
(153, 2, 'ProductTypeAdd', 'ps_product_type', 'add', 'Function add a Product Type and create new table product_type_<id>.', 'admin'),
(154, 2, 'ProductTypeUpdate', 'ps_product_type', 'update', 'Update a Product Type.', 'admin'),
(155, 2, 'ProductTypeDelete', 'ps_product_type', 'delete', 'Delete a Product Type and drop table product_type_<id>.', 'admin'),
(156, 2, 'ProductTypeReorder', 'ps_product_type', 'reorder', 'Changes the list order of a Product Type.', 'admin'),
(157, 2, 'ProductTypeAddParam', 'ps_product_type_parameter', 'add_parameter', 'Function add a Parameter into a Product Type and create new column in table product_type_<id>.', 'admin'),
(158, 2, 'ProductTypeUpdateParam', 'ps_product_type_parameter', 'update_parameter', 'Function update a Parameter in a Product Type and a column in table product_type_<id>.', 'admin'),
(159, 2, 'ProductTypeDeleteParam', 'ps_product_type_parameter', 'delete_parameter', 'Function delete a Parameter from a Product Type and drop a column in table product_type_<id>.', 'admin'),
(160, 2, 'ProductTypeReorderParam', 'ps_product_type_parameter', 'reorder_parameter', 'Changes the list order of a Parameter.', 'admin'),
(161, 2, 'productProductTypeAdd', 'ps_product_product_type', 'add', 'Add a Product into a Product Type.', 'admin,storeadmin'),
(162, 2, 'productProductTypeDelete', 'ps_product_product_type', 'delete', 'Delete a Product from a Product Type.', 'admin,storeadmin'),
(163, 1, 'stateAdd', 'ps_country', 'addState', 'Add a State ', 'storeadmin,admin'),
(164, 1, 'stateUpdate', 'ps_country', 'updateState', 'Update a state record', 'storeadmin,admin'),
(165, 1, 'stateDelete', 'ps_country', 'deleteState', 'Delete a state record', 'storeadmin,admin'),
(166, 2, 'csvFieldAdd', 'ps_csv', 'add', 'Add a CSV Field ', 'storeadmin,admin'),
(167, 2, 'csvFieldUpdate', 'ps_csv', 'update', 'Update a CSV Field', 'storeadmin,admin'),
(168, 2, 'csvFieldDelete', 'ps_csv', 'delete', 'Delete a CSV Field', 'storeadmin,admin');

## --------------------------------------------------------

## 
## Table structure for table `#__vm_manufacturer`
## 

CREATE TABLE IF NOT EXISTS `#__vm_manufacturer` (
  `manufacturer_id` int(11) NOT NULL auto_increment,
  `mf_name` varchar(64) default NULL,
  `mf_email` varchar(255) default NULL,
  `mf_desc` text,
  `mf_category_id` int(11) default NULL,
  `mf_url` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`manufacturer_id`)
)  COMMENT='������������� �������';

## 
## Dumping data for table `#__vm_manufacturer`
## 


## --------------------------------------------------------

## 
## Table structure for table `#__vm_manufacturer_category`
## 

CREATE TABLE IF NOT EXISTS `#__vm_manufacturer_category` (
  `mf_category_id` int(11) NOT NULL auto_increment,
  `mf_category_name` varchar(64) default NULL,
  `mf_category_desc` text,
  PRIMARY KEY  (`mf_category_id`),
  KEY `idx_manufacturer_category_category_name` (`mf_category_name`)
)  COMMENT='��������� ��������������';

## 
## Dumping data for table `#__vm_manufacturer_category`
## 


## --------------------------------------------------------

## 
## Table structure for table `#__vm_module`
## 

CREATE TABLE IF NOT EXISTS `#__vm_module` (
  `module_id` int(11) NOT NULL auto_increment,
  `module_name` varchar(255) default NULL,
  `module_description` text,
  `module_perms` varchar(255) default NULL,
  `module_publish` char(1) default NULL,
  `list_order` int(11) default NULL,
  PRIMARY KEY  (`module_id`),
  KEY `idx_module_name` (`module_name`),
  KEY `idx_module_list_order` (`list_order`)
)  COMMENT='������ ����������';

## 
## Dumping data for table `#__vm_module`
## 

INSERT INTO `#__vm_module` VALUES (1, 'admin', '<h4>������ ��� ���������������</h4>\r\n\r\n<p>����� ���������� ���������:</p>\r\n<OL>\r\n\r\n<LI>�������� �������������</LI>\r\n<LI>�������� �������</LI>\r\n<LI>�������� �������</LI>\r\n</OL>\r\n', 'admin', 'Y', 1),
(2, 'product', '<p>����� �� ������ ��������� ����� ������ ��������� �������.  ������������� �������� ����� ���� ����� ��� �� �������� ��������� ������, �������� ����� �������, �������������� ������� ������, � ������� ������ ��� ������� �������� �������� .</p>', 'storeadmin,admin', 'Y', 4),
(3, 'vendor', '<h4>������ ��� ���������������</h4>\r\n<p>����� �� ������ ��������� ���������� � ����������.</p>', 'admin', 'Y', 6),
(4, 'shopper', '<p>���������� ��������� � ����� ��������.  ��������� ��������� ������ ��������.  ������ �������� ����� ���� ������������ ����� �������������� ��������� ������.  ��� ��������� ��������� ��������� ���� ��� ��������� ����� �������������.  ��� ������� �� ������ ������ ����� ���� ''�������'' � ''�����������������'' group. </p>', 'admin,storeadmin', 'Y', 4),
(5, 'order', '<p>���������� ����� � �������� ������ ������.</p>', 'admin,storeadmin', 'Y', 5),
(6, 'msgs', '������ ��������� � ������������ ��� ������ ��������� ��������� �������������. ���� ���������� ������ ��� �������������� �� ������ ������ �� ��� �����������.', 'none', 'N', 99),
(7, 'shop', '��� ������ ��������  "3456.ru" .  ���� ���� ������� ������� � ����������� �������� ����������.', 'none', 'Y', 99),
(8, 'store', '', 'storeadmin,admin', 'Y', 2),
(9, 'account', '���� ������ ��������� �������� ��������� ���� ������� � ��������� ��������� �������.', 'shopper,storeadmin,admin,demo', 'N', 99),
(10, 'checkout', '', 'none', 'N', 99),
(11, 'tax', '������ ��������, ��������� ������������� ��������� �������� � ��������� ������� � ������.  ������ ��������������� � ���������� �����.  ��� �������, 2 �������� ����� 0.02.', 'admin,storeadmin', 'Y', 8),
(12, 'reportbasic', '�������� ������ �������, ��������� ��� ������ ������ �� ���� �������.', 'admin,storeadmin', 'Y', 7),
(13, 'zone', '��� ������ �������� �� �����. ����� �� ������ ��������� ���������� ����� �������� � ��������� ����.', 'admin,storeadmin', 'N', 9),
(14, 'shipping', '<h4>��������</h4><p>���� ������ ��������� ��������� ������� ��� ����������.<br>�������� ������� ��� ��� �������� � ������� �����.</p>', 'admin,storeadmin', 'Y', 10),
(15, 'affiliate', '���������� ������������ ����������� ��� ������ ��������.', 'storeadmin,admin', 'N', 99),
(16, 'manufacturer', '���������� ��������������� � ����� ��������.', 'storeadmin,admin', 'Y', 12),
(17, 'help', '������ ������', 'admin,storeadmin', 'Y', 13),
(18, 'coupon', '���������� ���������', 'admin,storeadmin', 'Y', 11);

## --------------------------------------------------------

## 
## Table structure for table `#__vm_order_history`
## 

CREATE TABLE IF NOT EXISTS `#__vm_order_history` (
  `order_status_history_id` int(11) NOT NULL auto_increment,
  `order_id` int(11) NOT NULL default '0',
  `order_status_code` char(1) NOT NULL default '0',
  `date_added` datetime NOT NULL default '0000-00-00 00:00:00',
  `customer_notified` int(1) default '0',
  `comments` text,
  PRIMARY KEY  (`order_status_history_id`)
)  COMMENT='������ ��� �������� � �������� ������� ��������� � �������';

## 
## Dumping data for table `#__vm_order_history`
## 


## --------------------------------------------------------

## 
## Table structure for table `#__vm_order_item`
## 

CREATE TABLE IF NOT EXISTS `#__vm_order_item` (
  `order_item_id` int(11) NOT NULL auto_increment,
  `order_id` int(11) default NULL,
  `user_info_id` varchar(32) default NULL,
  `vendor_id` int(11) default NULL,
  `product_id` int(11) default NULL,
  `order_item_sku` varchar(64) NOT NULL default '',
  `order_item_name` varchar(64) NOT NULL default '',
  `product_quantity` int(11) default NULL,
  `product_item_price` decimal(15,5) default NULL,
  `product_final_price` decimal(12,2) NOT NULL default '0.00',
  `order_item_currency` varchar(16) default NULL,
  `order_status` char(1) default NULL,
  `cdate` int(11) default NULL,
  `mdate` int(11) default NULL,
  `product_attribute` text,
  PRIMARY KEY  (`order_item_id`),
  KEY `idx_order_item_order_id` (`order_id`),
  KEY `idx_order_item_user_info_id` (`user_info_id`),
  KEY `idx_order_item_vendor_id` (`vendor_id`)
)  COMMENT='������ ��� ������� ������� �������� ������ ������';

## 
## Dumping data for table `#__vm_order_item`
## 


## --------------------------------------------------------

## 
## Table structure for table `#__vm_order_payment`
## 

CREATE TABLE IF NOT EXISTS `#__vm_order_payment` (
  `order_id` int(11) NOT NULL default '0',
  `payment_method_id` int(11) default NULL,
  `order_payment_code` varchar(30) NOT NULL default '',
  `order_payment_number` blob,
  `order_payment_expire` int(11) default NULL,
  `order_payment_name` varchar(255) default NULL,
  `order_payment_log` text,
  `order_payment_trans_id` text NOT NULL,
  KEY `idx_order_payment_order_id` (`order_id`),
  KEY `idx_order_payment_method_id` (`payment_method_id`)
)  COMMENT='������� ������ ������� ���� ������� ��� ������';

## 
## Dumping data for table `#__vm_order_payment`
## 


## --------------------------------------------------------

## 
## Table structure for table `#__vm_order_status`
## 

CREATE TABLE IF NOT EXISTS `#__vm_order_status` (
  `order_status_id` int(11) NOT NULL auto_increment,
  `order_status_code` char(1) NOT NULL default '',
  `order_status_name` varchar(64) default NULL,
  `list_order` int(11) default NULL,
  `vendor_id` int(11) default NULL,
  PRIMARY KEY  (`order_status_id`),
  KEY `idx_order_status_list_order` (`list_order`),
  KEY `idx_order_status_vendor_id` (`vendor_id`)
)  COMMENT='��� ��������� ������� ������';

## 
## Dumping data for table `#__vm_order_status`
## 

INSERT INTO `#__vm_order_status` VALUES (1, 'P', '��������', 1, 1),
(2, 'C', '������������', 2, 1),
(3, 'X', '��������', 3, 1),
(4, 'R', '�������', 4, 1),
(5, 'S', '����������', 5, 1);

## --------------------------------------------------------

## 
## Table structure for table `#__vm_order_user_info`
## 

CREATE TABLE IF NOT EXISTS `#__vm_order_user_info` (
  `order_info_id` int(11) NOT NULL auto_increment,
  `order_id` int(11) NOT NULL default '0',
  `user_id` int(11) NOT NULL default '0',
  `address_type` char(2) default NULL,
  `address_type_name` varchar(32) default NULL,
  `company` varchar(64) default NULL,
  `title` varchar(32) default NULL,
  `last_name` varchar(32) default NULL,
  `first_name` varchar(32) default NULL,
  `middle_name` varchar(32) default NULL,
  `phone_1` varchar(32) default NULL,
  `phone_2` varchar(32) default NULL,
  `fax` varchar(32) default NULL,
  `address_1` varchar(64) NOT NULL default '',
  `address_2` varchar(64) default NULL,
  `city` varchar(32) NOT NULL default '',
  `state` varchar(32) NOT NULL default '',
  `country` varchar(32) NOT NULL default 'US',
  `zip` varchar(32) NOT NULL default '',
  `user_email` varchar(255) default NULL,
  `extra_field_1` varchar(255) default NULL,
  `extra_field_2` varchar(255) default NULL,
  `extra_field_3` varchar(255) default NULL,
  `extra_field_4` char(1) default NULL,
  `extra_field_5` char(1) default NULL,
  `bank_account_nr` varchar(32) NOT NULL default '',
  `bank_name` varchar(32) NOT NULL default '',
  `bank_sort_code` varchar(16) NOT NULL default '',
  `bank_iban` varchar(64) NOT NULL default '',
  `bank_account_holder` varchar(48) NOT NULL default '',
  `bank_account_type` enum('Checking','Business Checking','Savings') NOT NULL default 'Checking',
  PRIMARY KEY  (`order_info_id`),
  KEY `idx_order_info_order_id` (`order_id`)
)  COMMENT='������ ���������� ��������� � ���������� �� ����� ������';

## 
## Dumping data for table `#__vm_order_user_info`
## 


## --------------------------------------------------------

## 
## Table structure for table `#__vm_orders`
## 

CREATE TABLE IF NOT EXISTS `#__vm_orders` (
  `order_id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL default '0',
  `vendor_id` int(11) NOT NULL default '0',
  `order_number` varchar(32) default NULL,
  `user_info_id` varchar(32) default NULL,
  `order_total` decimal(15,2) NOT NULL default '0.00',
  `order_subtotal` decimal(15,5) default NULL,
  `order_tax` decimal(10,2) default NULL,
  `order_tax_details` TEXT NOT NULL,
  `order_shipping` decimal(10,2) default NULL,
  `order_shipping_tax` decimal(10,2) default NULL,
  `coupon_discount` decimal(12,2) NOT NULL default '0.00',
  `order_discount` decimal(12,2) NOT NULL default '0.00',
  `order_currency` varchar(16) default NULL,
  `order_status` char(1) default NULL,
  `cdate` int(11) default NULL,
  `mdate` int(11) default NULL,
  `ship_method_id` varchar(255) default NULL,
  `customer_note` text NOT NULL,
  `ip_address` varchar(15) NOT NULL default '',
  PRIMARY KEY  (`order_id`),
  KEY `idx_orders_user_id` (`user_id`),
  KEY `idx_orders_vendor_id` (`vendor_id`),
  KEY `idx_orders_order_number` (`order_number`),
  KEY `idx_orders_user_info_id` (`user_info_id`),
  KEY `idx_orders_ship_method_id` (`ship_method_id`)
)  COMMENT='������������ ��� �������� �������';

## 
## Dumping data for table `#__vm_orders`
## 


## --------------------------------------------------------

## 
## Table structure for table `#__vm_payment_method`
## 

CREATE TABLE IF NOT EXISTS `#__vm_payment_method` (
  `payment_method_id` int(11) NOT NULL auto_increment,
  `vendor_id` int(11) default NULL,
  `payment_method_name` varchar(255) default NULL,
  `payment_class` varchar(50) NOT NULL default '',
  `shopper_group_id` int(11) default NULL,
  `payment_method_discount` decimal(12,2) default NULL,
  `list_order` int(11) default NULL,
  `payment_method_code` varchar(8) default NULL,
  `enable_processor` char(1) default NULL,
  `is_creditcard` tinyint(1) NOT NULL default '0',
  `payment_enabled` char(1) NOT NULL default 'N',
  `accepted_creditcards` varchar(128) NOT NULL default '',
  `payment_extrainfo` text NOT NULL,
  `payment_passkey` blob NOT NULL,
  PRIMARY KEY  (`payment_method_id`),
  KEY `idx_payment_method_vendor_id` (`vendor_id`),
  KEY `idx_payment_method_name` (`payment_method_name`),
  KEY `idx_payment_method_list_order` (`list_order`),
  KEY `idx_payment_method_shopper_group_id` (`shopper_group_id`)
)  COMMENT='������ ������ ��� ������ ��������';

## 
## Dumping data for table `#__vm_payment_method`
## 
INSERT INTO `jos_vm_payment_method` (`payment_method_id`, `vendor_id`, `payment_method_name`, `payment_class`, `shopper_group_id`, `payment_method_discount`, `list_order`, `payment_method_code`, `enable_processor`, `is_creditcard`, `payment_enabled`, `accepted_creditcards`, `payment_extrainfo`, `payment_passkey`) VALUES (1, 1, 'Purchase Order', '', 6, 0.00, 4, 'PO', 'N', 0, 'Y', '', '', ''),
(2, 1, 'Cash On Delivery', '', 5, -2.00, 5, 'COD', 'N', 0, 'Y', '', '', ''),
(3, 1, 'Credit Card', 'ps_authorize', 5, 0.00, 0, 'AN', 'Y', 0, 'Y', '1,2,6,7,', '', ''),
(4, 1, 'PayPal', 'ps_paypal', 5, 0.00, 0, 'PP', 'P', 0, 'Y', '', '<?php\r\n$url = \\"https://www.paypal.com/cgi-bin/webscr\\";\r\n$tax_total = $db->f(\\"order_tax\\") + $db->f(\\"order_shipping_tax\\");\r\n$discount_total = $db->f(\\"coupon_discount\\") + $db->f(\\"order_discount\\");\r\n$post_variables = Array(\r\n\\"cmd\\" => \\"_xclick\\",\r\n\\"business\\" => PAYPAL_EMAIL,\r\n\\"receiver_email\\" => PAYPAL_EMAIL,\r\n\\"item_name\\" => $VM_LANG->_PHPSHOP_ORDER_PRINT_PO_NUMBER.\\": \\". $db->f(\\"order_id\\"),\r\n\\"order_id\\" => $db->f(\\"order_id\\"),\r\n\\"invoice\\" => $db->f(\\"order_number\\"),\r\n\\"amount\\" => round( $db->f(\\"order_subtotal\\")+$tax_total-$discount_total, 2),\r\n\\"shipping\\" => sprintf(\\"%.2f\\", $db->f(\\"order_shipping\\")),\r\n\\"currency_code\\" => $_SESSION[\\''vendor_currency\\''],\r\n\\"image_url\\" => $vendor_image_url,\r\n\\"return\\" => SECUREURL .\\"index.php?option=com_virtuemart&page=checkout.result&order_id=\\".$db->f(\\"order_id\\"),\r\n\\"notify_url\\" => SECUREURL .\\"administrator/components/com_virtuemart/notify.php\\",\r\n\\"cancel_return\\" => SECUREURL .\\"index.php\\",\r\n\\"undefined_quantity\\" => \\"0\\",\r\n\\"test_ipn\\" => PAYPAL_DEBUG,\r\n\\"pal\\" => \\"NRUBJXESJTY24\\",\r\n\\"no_shipping\\" => \\"1\\",\r\n\\"no_note\\" => \\"1\\",\r\n\\"email\\" => $dbbt->f(\\"user_email\\"),\r\n\\"first_name\\" => $dbbt->f(\\"first_name\\"),\r\n\\"last_name\\" => $dbbt->f(\\"last_name\\"),\r\n\\"address1\\" => $dbbt->f(\\"address_1\\"),\r\n\\"address2\\" => $dbbt->f(\\"address_2\\"),\r\n\\"city\\" => $dbbt->f(\\"city\\"),\r\n\\"state\\" => $dbbt->f(\\"state\\"),\r\n\\"zip\\" => $dbbt->f(\\"zip\\"),\r\n\\"H_PhoneNumber\\" => $dbbt->f(\\"phone_1\\")\r\n);\r\nif( $page == \\"checkout.thankyou\\" ) {\r\n$query_string = \\"?\\";\r\nforeach( $post_variables as $name => $value ) {\r\n$query_string .= $name. \\"=\\" . urlencode($value) .\\"&\\";\r\n}\r\nmosRedirect( $url . $query_string );\r\n} else {\r\n\r\necho \\''<form action=\\"\\''.$url.\\''\\" method=\\"post\\" target=\\"_blank\\">\\'';\r\necho \\''<input type=\\"image\\" name=\\"submit\\" src=\\"http://images.paypal.com/images/x-click-but6.gif\\" border=\\"0\\" alt=\\"Make payments with PayPal, it is fast, free, and secure!\\">\\'';\r\n\r\nforeach( $post_variables as $name => $value ) {\r\necho \\''<input type=\\"hidden\\" name=\\"\\''.$name.\\''\\" value=\\"\\''.$value.\\''\\" />\\'';\r\n}\r\n\r\necho \\''</form>\\'';\r\n\r\n}\r\n?>', ''),
(5, 1, 'PayMate', 'ps_paymate', 5, 0.00, 0, 'PM', 'P', 0, 'N', '', '<script type="text/javascript" language="javascript">\n  function openExpress(){\n	var url = ''https://www.paymate.com.au/PayMate/ExpressPayment?mid=<?php echo PAYMATE_USERNAME.\n	  "&amt=".$db->f("order_total").\n	  "&currency=".$_SESSION[''vendor_currency''].\n	  "&ref=".$db->f("order_id").\n	  "&pmt_sender_email=".$user->email.\n	  "&pmt_contact_firstname=".$user->first_name.\n	  "&pmt_contact_surname=".$user->last_name.\n	  "&regindi_address1=".$user->address_1.\n	  "&regindi_address2=".$user->address_2.\n	  "&regindi_sub=".$user->city.\n	  "&regindi_pcode=".$user->zip;?>''\n	var newWin = window.open(url, ''wizard'', ''height=640,width=500,scrollbars=0,toolbar=no'');\n	self.name = ''parent'';\n	newWin.focus();\n  }\n  </script>\n  <div align="center">\n  <p>\n  <a href="javascript:openExpress();">\n  <img src="https://www.paymate.com.au/homepage/images/butt_PayNow.gif" border="0" alt="Pay with Paymate Express">\n  <br />click here to pay your account</a>\n  </p>\n  </div>', ''),
(6, 1, 'WorldPay', 'ps_worldpay', 5, 0.00, 0, 'WP', 'P', 0, 'N', '', '<form action="https://select.worldpay.com/wcc/purchase" method="post">\n						  <input type=hidden name="testMode" value="100"> \n						  <input type="hidden" name="instId" value="<?php echo WORLDPAY_INST_ID ?>" />\n						  <input type="hidden" name="cartId" value="<?php echo $db->f("order_id") ?>" />\n						  <input type="hidden" name="amount" value="<?php echo $db->f("order_total") ?>" />\n						  <input type="hidden" name="currency" value="<?php echo $_SESSION[''vendor_currency''] ?>" />\n						  <input type="hidden" name="desc" value="Products" />\n						  <input type="hidden" name="email" value="<?php echo $user->email?>" />\n						  <input type="hidden" name="address" value="<?php echo $user->address_1?>&#10<?php echo $user->address_2?>&#10<?php echo\n						  $user->city?>&#10<?php echo $user->state?>" />\n						  <input type="hidden" name="name" value="<?php echo $user->title?><?php echo $user->first_name?>. <?php echo $user->middle_name?><?php echo $user->last_name?>" />\n						  <input type="hidden" name="country" value="<?php echo $user->country?>"/>\n						  <input type="hidden" name="postcode" value="<?php echo $user->zip?>" />\n						  <input type="hidden" name="tel"  value="<?php echo $user->phone_1?>">\n						  <input type="hidden" name="withDelivery"  value="true">\n						  <br />\n						  <input type="submit" value ="PROCEED TO PAYMENT PAGE" />\n						  </form>', ''),
(7, 1, '2Checkout', 'ps_twocheckout', 5, 0.00, 0, '2CO', 'P', 0, 'N', '', '<?php\n	$q  = "SELECT * FROM #__users WHERE user_info_id=''".$db->f("user_info_id")."''"; \n	$dbbt = new ps_DB;\n	$dbbt->setQuery($q);\n	$dbbt->query();\n	$dbbt->next_record(); \n	// Get ship_to information\n	if( $db->f("user_info_id") != $dbbt->f("user_info_id")) {\n	  $q2  = "SELECT * FROM #__vm_user_info WHERE user_info_id=''".$db->f("user_info_id")."''"; \n	  $dbst = new ps_DB;\n	  $dbst->setQuery($q2);\n	  $dbst->query();\n	  $dbst->next_record();\n	}\n	else  {\n	  $dbst = $dbbt;\n	}\n			\n	//Authnet vars to send\n	$formdata = array (\n	 ''x_login'' => TWOCO_LOGIN,\n	 ''x_email_merchant'' => ((TWOCO_MERCHANT_EMAIL == ''True'') ? ''TRUE'' : ''FALSE''),\n			 \n	 // Customer Name and Billing Address\n	 ''x_first_name'' => $dbbt->f("first_name"),\n	 ''x_last_name'' => $dbbt->f("last_name"),\n	 ''x_company'' => $dbbt->f("company"),\n	 ''x_address'' => $dbbt->f("address_1"),\n	 ''x_city'' => $dbbt->f("city"),\n	 ''x_state'' => $dbbt->f("state"),\n	 ''x_zip'' => $dbbt->f("zip"),\n	 ''x_country'' => $dbbt->f("country"),\n	 ''x_phone'' => $dbbt->f("phone_1"),\n	 ''x_fax'' => $dbbt->f("fax"),\n	 ''x_email'' => $dbbt->f("email"),\n	\n	 // Customer Shipping Address\n	 ''x_ship_to_first_name'' => $dbst->f("first_name"),\n	 ''x_ship_to_last_name'' => $dbst->f("last_name"),\n	 ''x_ship_to_company'' => $dbst->f("company"),\n	 ''x_ship_to_address'' => $dbst->f("address_1"),\n	 ''x_ship_to_city'' => $dbst->f("city"),\n	 ''x_ship_to_state'' => $dbst->f("state"),\n	 ''x_ship_to_zip'' => $dbst->f("zip"),\n	 ''x_ship_to_country'' => $dbst->f("country"),\n	\n	 ''x_invoice_num'' => $db->f("order_number"),\n	 ''x_receipt_link_url'' => SECUREURL."2checkout_notify.php"\n	 );\n	 \n	if( TWOCO_TESTMODE == "Y" )\n	  $formdata[''demo''] = "Y";\n	\n	 $version = "2";\n	 $url = "https://www2.2checkout.com/2co/buyer/purchase";\n	 $formdata[''x_amount''] = number_format($db->f("order_total"), 2, ''.'', '''');\n	\n	 //build the post string\n	 $poststring = '''';\n	 foreach($formdata AS $key => $val){\n	   $poststring .= "<input type=''hidden'' name=''$key'' value=''$val'' />\n	";\n	 }\n	\n	?>\n	<form action="<?php echo $url ?>" method="post" target="_blank">\n	<?php echo $poststring ?>\n	<p>Click on the Image below to pay...</p>\n	<input type="image" name="submit" src="https://www.2checkout.com/images/buy_logo.gif" border="0" alt="Make payments with 2Checkout, it''s fast and secure!" title="Pay your Order with 2Checkout, it''s fast and secure!" />\n	</form>', ''),
(8, 1, 'NoChex', 'ps_nochex', 5, 0.00, 0, 'NOCHEX', 'P', 0, 'N', '', '<form action="https://www.nochex.com/nochex.dll/checkout" method=post target="_blank"> \n											<input type="hidden" name="email" value="<?php echo NOCHEX_EMAIL ?>" />\n											<input type="hidden" name="amount" value="<?php printf("%.2f", $db->f("order_total"))?>" />\n											<input type="hidden" name="ordernumber" value="<?php $db->p("order_id") ?>" />\n											<input type="hidden" name="logo" value="<?php echo $vendor_image_url ?>" />\n											<input type="hidden" name="returnurl" value="<?php echo SECUREURL ."index.php?option=com_virtuemart&amp;page=checkout.result&amp;order_id=".$db->f("order_id") ?>" />\n											<input type="image" name="submit" src="http://www.nochex.com/web/images/paymeanimated.gif"> \n											</form>', ''),
(9, 1, 'Credit Card (PayMeNow)', 'ps_paymenow', 5, 0.00, 0, 'PN', 'Y', 0, 'N', '1,2,3,', '', ''),
(10, 1, 'eWay', 'ps_eway', 5, 0.00, 0, 'EW', 'Y', 0, 'N', '', '', ''),
(11, 1, 'eCheck.net', 'ps_echeck', 5, 0.00, 0, 'ECK', 'B', 0, 'N', '', '', ''),
(12, 1, 'Credit Card (eProcessingNetwork)', 'ps_epn', 5, 0.00, 0, 'EPN', 'Y', 0, 'N', '1,2,3,', '', ''),
(13, 1, 'iKobo', '', 5, 0.00, 0, 'IK', 'P', 0, 'N', '', '<form action="https://www.iKobo.com/store/index.php" method="post"> \n  <input type="hidden" name="cmd" value="cart" />Click on the image below to Pay with iKobo\n  <input type="image" src="https://www.ikobo.com/merchant/buttons/ikobo_pay1.gif" name="submit" alt="Pay with iKobo" /> \n  <input type="hidden" name="poid" value="USER_ID" /> \n  <input type="hidden" name="item" value="Order: <?php $db->p("order_id") ?>" /> \n  <input type="hidden" name="price" value="<?php printf("%.2f", $db->f("order_total"))?>" /> \n  <input type="hidden" name="firstname" value="<?php echo $user->first_name?>" /> \n  <input type="hidden" name="lastname" value="<?php echo $user->last_name?>" /> \n  <input type="hidden" name="address" value="<?php echo $user->address_1?>&#10<?php echo $user->address_2?>" /> \n  <input type="hidden" name="city" value="<?php echo $user->city?>" /> \n  <input type="hidden" name="state" value="<?php echo $user->state?>" /> \n  <input type="hidden" name="zip" value="<?php echo $user->zip?>" /> \n  <input type="hidden" name="phone" value="<?php echo $user->phone_1?>" /> \n  <input type="hidden" name="email" value="<?php echo $user->email?>" /> \n  </form> >', ''),
(14, 1, 'iTransact', '', 5, 0.00, 0, 'ITR', 'P', 0, 'N', '', '<?php\n  //your iTransact account details\n  $vendorID = "XXXXX";\n  global $vendor_name;\n  $mername = $vendor_name;\n  \n  //order details\n  $total = $db->f("order_total");$first_name = $user->first_name;$last_name = $user->last_name;$address = $user->address_1;$city = $user->city;$state = $user->state;$zip = $user->zip;$country = $user->country;$email = $user->email;$phone = $user->phone_1;$home_page = $mosConfig_live_site."/index.php";$ret_addr = $mosConfig_live_site."/index.php";$cc_payment_image = $mosConfig_live_site."/components/com_virtuemart/shop_image/ps_image/cc_payment.jpg";\n  ?>\n  <form action="https://secure.paymentclearing.com/cgi-bin/mas/split.cgi" method="POST"> \n		<input type="hidden" name="vendor_id" value="<?php echo $vendorID; ?>" />\n		<input type="hidden" name="home_page" value="<?php echo $home_page; ?>" />\n		<input type="hidden" name="ret_addr" value="<?php echo $ret_addr; ?>" />\n		<input type="hidden" name="mername" value="<?php echo $mername; ?>" />\n		<!--Enter text in the next value that should appear on the bottom of the order form.-->\n		<INPUT type="hidden" name="mertext" value="" />\n		<!--If you are accepting checks, enter the number 1 in the next value.  Enter the number 0 if you are not accepting checks.-->\n		<INPUT type="hidden" name="acceptchecks" value="0" />\n		<!--Enter the number 1 in the next value if you want to allow pre-registered customers to pay with a check.  Enter the number 0 if not.-->\n		<INPUT type="hidden" name="allowreg" value="0" />\n		<!--If you are set up with Check Guarantee, enter the number 1 in the next value.  Enter the number 0 if not.-->\n		<INPUT type="hidden" name="checkguar" value="0" />\n		<!--Enter the number 1 in the next value if you are accepting credit card payments.  Enter the number zero if not.-->\n		<INPUT type="hidden" name="acceptcards" value="1">\n		<!--Enter the number 1 in the next value if you want to allow a separate mailing address for credit card orders.  Enter the number 0 if not.-->\n		<INPUT type="hidden" name="altaddr" value="0" />\n		<!--Enter the number 1 in the next value if you want the customer to enter the CVV number for card orders.  Enter the number 0 if not.-->\n		<INPUT type="hidden" name="showcvv" value="1" />\n		\n		<input type="hidden" name="1-desc" value="Order Total" />\n		<input type="hidden" name="1-cost" value="<?php echo $total; ?>" />\n		<input type="hidden" name="1-qty" value="1" />\n		<input type="hidden" name="total" value="<?php echo $total; ?>" />\n		<input type="hidden" name="first_name" value="<?php echo $first_name; ?>" />\n		<input type="hidden" name="last_name" value="<?php echo $last_name; ?>" />\n		<input type="hidden" name="address" value="<?php echo $address; ?>" />\n		<input type="hidden" name="city" value="<?php echo $city; ?>" />\n		<input type="hidden" name="state" value="<?php echo $state; ?>" />\n		<input type="hidden" name="zip" value="<?php echo $zip; ?>" />\n		<input type="hidden" name="country" value="<?php echo $country; ?>" />\n		<input type="hidden" name="phone" value="<?php echo $phone; ?>" />\n		<input type="hidden" name="email" value="<?php echo $email; ?>" />\n		<p><input type="image" alt="Process Secure Credit Card Transaction using iTransact" border="0" height="60" width="210" src="<?php echo $cc_payment_image; ?>" /> </p>\n		</form>', ''),
(15, 1, 'Dankort / PBS', 'ps_pbs', 5, 0.00, 0, 'PBS', 'P', 0, 'N', '', '', ''),
(16, 1, 'Verisign PayFlow Pro', 'ps_pfp', 5, 0.00, 0, 'PFP', 'Y', 0, 'Y', '1,2,6,7,', '', '');


## --------------------------------------------------------

## 
## Table structure for table `#__vm_product`
## 

CREATE TABLE IF NOT EXISTS `#__vm_product` (
  `product_id` int(11) NOT NULL auto_increment,
  `vendor_id` int(11) NOT NULL default '0',
  `product_parent_id` int(11) NOT NULL default '0',
  `product_sku` varchar(64) NOT NULL default '',
  `product_s_desc` varchar(255) default NULL,
  `product_desc` text,
  `product_thumb_image` varchar(255) default NULL,
  `product_full_image` varchar(255) default NULL,
  `product_publish` char(1) default NULL,
  `product_weight` decimal(10,4) default NULL,
  `product_weight_uom` varchar(32) default 'pounds.',
  `product_length` decimal(10,4) default NULL,
  `product_width` decimal(10,4) default NULL,
  `product_height` decimal(10,4) default NULL,
  `product_lwh_uom` varchar(32) default 'inches',
  `product_url` varchar(255) default NULL,
  `product_in_stock` int(11) unsigned default NULL,
  `product_available_date` int(11) default NULL,
  `product_availability` varchar(56) NOT NULL default '',
  `product_special` char(1) default NULL,
  `product_discount_id` int(11) default NULL,
  `ship_code_id` int(11) default NULL,
  `cdate` int(11) default NULL,
  `mdate` int(11) default NULL,
  `product_name` varchar(64) default NULL,
  `product_sales` int(11) NOT NULL default '0',
  `attribute` text,
  `custom_attribute` text NOT NULL,
  `product_tax_id` tinyint(2) NOT NULL default '0',
  `product_unit` varchar(32) default NULL,
  `product_packaging` int(11) default NULL,
  PRIMARY KEY  (`product_id`),
  KEY `idx_product_vendor_id` (`vendor_id`),
  KEY `idx_product_product_parent_id` (`product_parent_id`),
  KEY `idx_product_sku` (`product_sku`),
  KEY `idx_product_ship_code_id` (`ship_code_id`),
  KEY `idx_product_name` (`product_name`)
)  COMMENT='��� ������ �������� �����';

## 
## Dumping data for table `#__vm_product`
## 


## --------------------------------------------------------

## 
## Table structure for table `#__vm_product_attribute`
## 

CREATE TABLE IF NOT EXISTS `#__vm_product_attribute` (
  `product_id` int(11) NOT NULL default '0',
  `attribute_name` char(255) NOT NULL default '',
  `attribute_value` char(255) NOT NULL default '',
  KEY `idx_product_attribute_product_id` (`product_id`),
  KEY `idx_product_attribute_name` (`attribute_name`)
)  COMMENT='�������� ��������  � �� �������� ��� �������';

## 
## Dumping data for table `#__vm_product_attribute`
## 


## --------------------------------------------------------

## 
## Table structure for table `#__vm_product_attribute_sku`
## 

CREATE TABLE IF NOT EXISTS `#__vm_product_attribute_sku` (
  `product_id` int(11) NOT NULL default '0',
  `attribute_name` char(255) NOT NULL default '',
  `attribute_list` int(11) NOT NULL default '0',
  KEY `idx_product_attribute_sku_product_id` (`product_id`),
  KEY `idx_product_attribute_sku_attribute_name` (`attribute_name`),
  KEY `idx_product_attribute_list` (`attribute_list`)
)  COMMENT='�������� ��� ������������ ������� ������������ ���������';

## 
## Dumping data for table `#__vm_product_attribute_sku`
## 


## --------------------------------------------------------

## 
## Table structure for table `#__vm_product_category_xref`
## 

CREATE TABLE IF NOT EXISTS `#__vm_product_category_xref` (
  `category_id` int(11) NOT NULL default '0',
  `product_id` int(11) NOT NULL default '0',
  `product_list` int(11) default NULL,
  KEY `idx_product_category_xref_category_id` (`category_id`),
  KEY `idx_product_category_xref_product_id` (`product_id`),
  KEY `idx_product_category_xref_product_list` (`product_list`)
)  COMMENT='������ ������-���������';

## 
## Dumping data for table `#__vm_product_category_xref`
## 


## --------------------------------------------------------

## 
## Table structure for table `#__vm_product_discount`
## 

CREATE TABLE IF NOT EXISTS `#__vm_product_discount` (
  `discount_id` int(11) NOT NULL auto_increment,
  `amount` decimal(12,2) NOT NULL default '0.00',
  `is_percent` tinyint(1) NOT NULL default '0',
  `start_date` int(11) NOT NULL default '0',
  `end_date` int(11) NOT NULL default '0',
  PRIMARY KEY  (`discount_id`)
)  COMMENT='���������� ������, ������� ����� ���� ��������� ������';

## 
## Dumping data for table `#__vm_product_discount`
## 


## --------------------------------------------------------

## 
## Table structure for table `#__vm_product_download`
## 

CREATE TABLE IF NOT EXISTS `#__vm_product_download` (
  `product_id` int(11) NOT NULL default '0',
  `user_id` int(11) NOT NULL default '0',
  `order_id` int(11) NOT NULL default '0',
  `end_date` int(11) NOT NULL default '0',
  `download_max` int(11) NOT NULL default '0',
  `download_id` varchar(32) NOT NULL default '',
  `file_name` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`download_id`)
)  COMMENT='�������� ���������� ��� ����������� �������';

## 
## Dumping data for table `#__vm_product_download`
## 


## --------------------------------------------------------

## 
## Table structure for table `#__vm_product_files`
## 

CREATE TABLE IF NOT EXISTS `#__vm_product_files` (
  `file_id` int(19) NOT NULL auto_increment,
  `file_product_id` int(11) NOT NULL default '0',
  `file_name` varchar(128) NOT NULL default '',
  `file_title` varchar(128) NOT NULL default '',
  `file_description` mediumtext NOT NULL,
  `file_extension` varchar(128) NOT NULL default '',
  `file_mimetype` varchar(64) NOT NULL default '',
  `file_url` varchar(254) NOT NULL default '',
  `file_published` tinyint(1) NOT NULL default '0',
  `file_is_image` tinyint(1) NOT NULL default '0',
  `file_image_height` int(11) NOT NULL default '0',
  `file_image_width` int(11) NOT NULL default '0',
  `file_image_thumb_height` int(11) NOT NULL default '50',
  `file_image_thumb_width` int(11) NOT NULL default '0',
  PRIMARY KEY  (`file_id`)
)  COMMENT='�������������� ����������� � ����� � ������';

## 
## Dumping data for table `#__vm_product_files`
## 


## --------------------------------------------------------

## 
## Table structure for table `#__vm_product_mf_xref`
## 

CREATE TABLE IF NOT EXISTS `#__vm_product_mf_xref` (
  `product_id` int(11) default NULL,
  `manufacturer_id` int(11) default NULL,
  KEY `idx_product_mf_xref_product_id` (`product_id`),
  KEY `idx_product_mf_xref_manufacturer_id` (`manufacturer_id`)
)  COMMENT='������ �����-�������������';

## 
## Dumping data for table `#__vm_product_mf_xref`
## 


## --------------------------------------------------------

## 
## Table structure for table `#__vm_product_price`
## 

CREATE TABLE IF NOT EXISTS `#__vm_product_price` (
  `product_price_id` int(11) NOT NULL auto_increment,
  `product_id` int(11) NOT NULL default '0',
  `product_price` decimal(12,5) default NULL,
  `product_currency` char(16) default NULL,
  `product_price_vdate` int(11) default NULL,
  `product_price_edate` int(11) default NULL,
  `cdate` int(11) default NULL,
  `mdate` int(11) default NULL,
  `shopper_group_id` int(11) default NULL,
  `price_quantity_start` int(11) unsigned NOT NULL default '0',
  `price_quantity_end` int(11) unsigned NOT NULL default '0',
  PRIMARY KEY  (`product_price_id`),
  KEY `idx_product_price_product_id` (`product_id`),
  KEY `idx_product_price_shopper_group_id` (`shopper_group_id`)
)  COMMENT='���� �� �����';

## 
## Dumping data for table `#__vm_product_price`
## 


## --------------------------------------------------------

## 
## Table structure for table `#__vm_product_product_type_xref`
## 

CREATE TABLE IF NOT EXISTS `#__vm_product_product_type_xref` (
  `product_id` int(11) NOT NULL default '0',
  `product_type_id` int(11) NOT NULL default '0',
  KEY `idx_product_product_type_xref_product_id` (`product_id`),
  KEY `idx_product_product_type_xref_product_type_id` (`product_type_id`)
)  COMMENT='������ �����-��� ������';

## 
## Dumping data for table `#__vm_product_product_type_xref`
## 


## --------------------------------------------------------

## 
## Table structure for table `#__vm_product_relations`
## 

CREATE TABLE IF NOT EXISTS `#__vm_product_relations` (
  `product_id` int(11) NOT NULL default '0',
  `related_products` text,
  PRIMARY KEY  (`product_id`)
) ;

## 
## Dumping data for table `#__vm_product_relations`
## 


## --------------------------------------------------------

## 
## Table structure for table `#__vm_product_reviews`
## 

CREATE TABLE IF NOT EXISTS `#__vm_product_reviews` (
  `product_id` varchar(255) NOT NULL default '',
  `comment` text NOT NULL,
  `userid` int(11) NOT NULL default '0',
  `time` int(11) NOT NULL default '0',
  `user_rating` tinyint(1) NOT NULL default '0',
  `review_ok` int(11) NOT NULL default '0',
  `review_votes` int(11) NOT NULL default '0'
) TYPE=MyISAM;

## 
## Dumping data for table `#__vm_product_reviews`
## 


## --------------------------------------------------------

## 
## Table structure for table `#__vm_product_type`
## 

CREATE TABLE IF NOT EXISTS `#__vm_product_type` (
  `product_type_id` int(11) NOT NULL auto_increment,
  `product_type_name` varchar(255) NOT NULL default '',
  `product_type_description` text,
  `product_type_publish` char(1) default NULL,
  `product_type_browsepage` varchar(255) default NULL,
  `product_type_flypage` varchar(255) default NULL,
  `product_type_list_order` int(11) default NULL,
  PRIMARY KEY  (`product_type_id`)
) TYPE=MyISAM;

## 
## Dumping data for table `#__vm_product_type`
## 


## --------------------------------------------------------

## 
## Table structure for table `#__vm_product_type_parameter`
## 

CREATE TABLE IF NOT EXISTS `#__vm_product_type_parameter` (
  `product_type_id` int(11) NOT NULL default '0',
  `parameter_name` varchar(255) NOT NULL default '',
  `parameter_label` varchar(255) NOT NULL default '',
  `parameter_description` text,
  `parameter_list_order` int(11) NOT NULL default '0',
  `parameter_type` char(1) NOT NULL default 'T',
  `parameter_values` varchar(255) default NULL,
  `parameter_multiselect` char(1) default NULL,
  `parameter_default` varchar(255) default NULL,
  `parameter_unit` varchar(32) default NULL,
  PRIMARY KEY  (`product_type_id`,`parameter_name`),
  KEY `idx_product_type_parameter_product_type_id` (`product_type_id`),
  KEY `idx_product_type_parameter_parameter_order` (`parameter_list_order`)
)  COMMENT='��������� - ����� ���� ������';

## 
## Dumping data for table `#__vm_product_type_parameter`
## 


## --------------------------------------------------------

## 
## Table structure for table `#__vm_product_votes`
## 

CREATE TABLE IF NOT EXISTS `#__vm_product_votes` (
  `product_id` int(255) NOT NULL default '0',
  `votes` text NOT NULL,
  `allvotes` int(11) NOT NULL default '0',
  `rating` tinyint(1) NOT NULL default '0',
  `lastip` varchar(50) NOT NULL default '0'
)  COMMENT='��� ������ ��� ������';

## 
## Dumping data for table `#__vm_product_votes`
## 


## --------------------------------------------------------

## 
## Table structure for table `#__vm_shipping_carrier`
## 

CREATE TABLE IF NOT EXISTS `#__vm_shipping_carrier` (
  `shipping_carrier_id` int(11) NOT NULL auto_increment,
  `shipping_carrier_name` char(80) NOT NULL default '',
  `shipping_carrier_list_order` int(11) NOT NULL default '0',
  PRIMARY KEY  (`shipping_carrier_id`)
)  COMMENT='������� �������� ��� ������������ ������ ��������';

## 
## Dumping data for table `#__vm_shipping_carrier`
## 


## --------------------------------------------------------

## 
## Table structure for table `#__vm_shipping_rate`
## 

CREATE TABLE IF NOT EXISTS `#__vm_shipping_rate` (
  `shipping_rate_id` int(11) NOT NULL auto_increment,
  `shipping_rate_name` varchar(255) NOT NULL default '',
  `shipping_rate_carrier_id` int(11) NOT NULL default '0',
  `shipping_rate_country` text NOT NULL,
  `shipping_rate_zip_start` varchar(32) NOT NULL default '',
  `shipping_rate_zip_end` varchar(32) NOT NULL default '',
  `shipping_rate_weight_start` decimal(10,3) NOT NULL default '0.000',
  `shipping_rate_weight_end` decimal(10,3) NOT NULL default '0.000',
  `shipping_rate_value` decimal(10,2) NOT NULL default '0.00',
  `shipping_rate_package_fee` decimal(10,2) NOT NULL default '0.00',
  `shipping_rate_currency_id` int(11) NOT NULL default '0',
  `shipping_rate_vat_id` int(11) NOT NULL default '0',
  `shipping_rate_list_order` int(11) NOT NULL default '0',
  PRIMARY KEY  (`shipping_rate_id`)
)  COMMENT='������ �������� ��� ������������ ������ ��������';

## 
## Dumping data for table `#__vm_shipping_rate`
## 


## --------------------------------------------------------

## 
## Table structure for table `#__vm_shopper_group`
## 

CREATE TABLE IF NOT EXISTS `#__vm_shopper_group` (
  `shopper_group_id` int(11) NOT NULL auto_increment,
  `vendor_id` int(11) default NULL,
  `shopper_group_name` varchar(32) default NULL,
  `shopper_group_desc` text,
  `shopper_group_discount` decimal(5,2) NOT NULL default '0.00',
  `show_price_including_tax` tinyint(1) NOT NULL default '1',
  `default` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`shopper_group_id`),
  KEY `idx_shopper_group_vendor_id` (`vendor_id`),
  KEY `idx_shopper_group_name` (`shopper_group_name`)
)  COMMENT='������ ��������';

## 
## Dumping data for table `#__vm_shopper_group`
## 

INSERT INTO `#__vm_shopper_group` VALUES (5, 1, '-�� ���������-', '��� ����������� ������ ��������.', 0.00, 1, 1),
(6, 1, '�����������������', '����������������� ������� ��������.', 0.00, 1, 0),
(7, 1, '��������', '��������, ������� �������� ������.', 0.00, 0, 0);

## --------------------------------------------------------

## 
## Table structure for table `#__vm_shopper_vendor_xref`
## 

CREATE TABLE IF NOT EXISTS `#__vm_shopper_vendor_xref` (
  `user_id` int(11) default NULL,
  `vendor_id` int(11) default NULL,
  `shopper_group_id` int(11) default NULL,
  `customer_number` varchar(32) default NULL,
  KEY `idx_shopper_vendor_xref_user_id` (`user_id`),
  KEY `idx_shopper_vendor_xref_vendor_id` (`vendor_id`),
  KEY `idx_shopper_vendor_xref_shopper_group_id` (`shopper_group_id`)
)  COMMENT='������ ������ ��������-��������';

## 
## Dumping data for table `#__vm_shopper_vendor_xref`
## 


## --------------------------------------------------------

## 
## Table structure for table `#__vm_state`
## 

CREATE TABLE IF NOT EXISTS `#__vm_state` (
  `state_id` int(11) NOT NULL auto_increment,
  `country_id` int(11) NOT NULL default '1',
  `state_name` varchar(64) default NULL,
  `state_3_code` char(3) default NULL,
  `state_2_code` char(2) default NULL,
  PRIMARY KEY  (`state_id`),
  UNIQUE KEY `state_3_code` (`state_3_code`,`state_2_code`),
  KEY `idx_country_id` (`country_id`)
)  COMMENT='�������';

## 
## Dumping data for table `#__vm_state`
## 

INSERT INTO `#__vm_state` VALUES (1, 223, 'Alabama', 'ALA', 'AL'),
(2, 223, 'Alaska', 'ALK', 'AK'),
(3, 223, 'Arizona', 'ARZ', 'AZ'),
(4, 223, 'Arkansas', 'ARK', 'AR'),
(5, 223, 'California', 'CAL', 'CA'),
(6, 223, 'Colorado', 'COL', 'CO'),
(7, 223, 'Connecticut', 'CCT', 'CT'),
(8, 223, 'Delaware', 'DEL', 'DE'),
(9, 223, 'District Of Columbia', 'DOC', 'DC'),
(10, 223, 'Florida', 'FLO', 'FL'),
(11, 223, 'Georgia', 'GEA', 'GA'),
(12, 223, 'Hawaii', 'HWI', 'HI'),
(13, 223, 'Idaho', 'IDA', 'ID'),
(14, 223, 'Illinois', 'ILL', 'IL'),
(15, 223, 'Indiana', 'IND', 'IN'),
(16, 223, 'Iowa', 'IOA', 'IA'),
(17, 223, 'Kansas', 'KAS', 'KS'),
(18, 223, 'Kentucky', 'KTY', 'KY'),
(19, 223, 'Louisiana', 'LOA', 'LA'),
(20, 223, 'Maine', 'MAI', 'ME'),
(21, 223, 'Maryland', 'MLD', 'MD'),
(22, 223, 'Massachusetts', 'MSA', 'MA'),
(23, 223, 'Michigan', 'MIC', 'MI'),
(24, 223, 'Minnesota', 'MIN', 'MN'),
(25, 223, 'Mississippi', 'MIS', 'MS'),
(26, 223, 'Missouri', 'MIO', 'MO'),
(27, 223, 'Montana', 'MOT', 'MT'),
(28, 223, 'Nebraska', 'NEB', 'NE'),
(29, 223, 'Nevada', 'NEV', 'NV'),
(30, 223, 'New Hampshire', 'NEH', 'NH'),
(31, 223, 'New Jersey', 'NEJ', 'NJ'),
(32, 223, 'New Mexico', 'NEM', 'NM'),
(33, 223, 'New York', 'NEY', 'NY'),
(34, 223, 'North Carolina', 'NOC', 'NC'),
(35, 223, 'North Dakota', 'NOD', 'ND'),
(36, 223, 'Ohio', 'OHI', 'OH'),
(37, 223, 'Oklahoma', 'OKL', 'OK'),
(38, 223, 'Oregon', 'ORN', 'OR'),
(39, 223, 'Pennsylvania', 'PEA', 'PA'),
(40, 223, 'Rhode Island', 'RHI', 'RI'),
(41, 223, 'South Carolina', 'SOC', 'SC'),
(42, 223, 'South Dakota', 'SOD', 'SD'),
(43, 223, 'Tennessee', 'TEN', 'TN'),
(44, 223, 'Texas', 'TXS', 'TX'),
(45, 223, 'Utah', 'UTA', 'UT'),
(46, 223, 'Vermont', 'VMT', 'VT'),
(47, 223, 'Virginia', 'VIA', 'VA'),
(48, 223, 'Washington', 'WAS', 'WA'),
(49, 223, 'West Virginia', 'WEV', 'WV'),
(50, 223, 'Wisconsin', 'WIS', 'WI'),
(51, 223, 'Wyoming', 'WYO', 'WY'),
(52, 38, 'Alberta', 'ALB', 'AB'),
(53, 38, 'British Columbia', 'BRC', 'BC'),
(54, 38, 'Manitoba', 'MAB', 'MB'),
(55, 38, 'New Brunswick', 'NEB', 'NB'),
(56, 38, 'Newfoundland and Labrador', 'NFL', 'NL'),
(57, 38, 'Northwest Territories', 'NWT', 'NT'),
(58, 38, 'Nova Scotia', 'NOS', 'NS'),
(59, 38, 'Nunavut', 'NUT', 'NU'),
(60, 38, 'Ontario', 'ONT', 'ON'),
(61, 38, 'Prince Edward Island', 'PEI', 'PE'),
(62, 38, 'Quebec', 'QEC', 'QC'),
(63, 38, 'Saskatchewan', 'SAK', 'SK'),
(64, 38, 'Yukon', 'YUT', 'YT'),
(65, 222, 'England', 'ENG', 'EN'),
(66, 222, 'Northern Ireland', 'NOI', 'NI'),
(67, 222, 'Scotland', 'SCO', 'SD'),
(68, 222, 'Wales', 'WLS', 'WS'),
(69, 13, 'Australian Capital Territory', 'ACT', 'AT'),
(70, 13, 'New South Wales', 'NSW', 'NW'),
(71, 13, 'Northern Territory', 'NOT', 'NT'),
(72, 13, 'Queensland', 'QLD', 'QL'),
(73, 13, 'South Australia', 'SOA', 'SA'),
(74, 13, 'Tasmania', 'TAS', 'TA'),
(75, 13, 'Victoria', 'VIC', 'VI'),
(76, 13, 'Western Australia', 'WEA', 'WA'),
(77, 138, 'Aguascalientes', 'AGS', 'AG'),
(78, 138, 'Baja California Norte', 'BCN', 'BN'),
(79, 138, 'Baja California Sur', 'BCS', 'BS'),
(80, 138, 'Campeche', 'CAM', 'CA'),
(81, 138, 'Chiapas', 'CHI', 'CS'),
(82, 138, 'Chihuahua', 'CHA', 'CH'),
(83, 138, 'Coahuila', 'COA', 'CO'),
(84, 138, 'Colima', 'COL', 'CM'),
(85, 138, 'Distrito Federal', 'DFM', 'DF'),
(86, 138, 'Durango', 'DGO', 'DO'),
(87, 138, 'Guanajuato', 'GTO', 'GO'),
(88, 138, 'Guerrero', 'GRO', 'GU'),
(89, 138, 'Hidalgo', 'HGO', 'HI'),
(90, 138, 'Jalisco', 'JAL', 'JA'),
(91, 138, 'México (Estado de)', 'EDM', 'EM'),
(92, 138, 'Michoacán', 'MCN', 'MI'),
(93, 138, 'Morelos', 'MOR', 'MO'),
(94, 138, 'Nayarit', 'NAY', 'NY'),
(95, 138, 'Nuevo León', 'NUL', 'NL'),
(96, 138, 'Oaxaca', 'OAX', 'OA'),
(97, 138, 'Puebla', 'PUE', 'PU'),
(98, 138, 'Querétaro', 'QRO', 'QU'),
(99, 138, 'Quintana Roo', 'QUR', 'QR'),
(100, 138, 'San Luis Potosí', 'SLP', 'SP'),
(101, 138, 'Sinaloa', 'SIN', 'SI'),
(102, 138, 'Sonora', 'SON', 'SO'),
(103, 138, 'Tabasco', 'TAB', 'TA'),
(104, 138, 'Tamaulipas', 'TAM', 'TM'),
(105, 138, 'Tlaxcala', 'TLX', 'TX'),
(106, 138, 'Veracruz', 'VER', 'VZ'),
(107, 138, 'Yucatán', 'YUC', 'YU'),
(108, 138, 'Zacatecas', 'ZAC', 'ZA'),
(109, 30, 'Acre', 'ACR', 'AC'),
(110, 30, 'Alagoas', 'ALG', 'AL'),
(111, 30, 'Amapá', 'AMP', 'AP'),
(112, 30, 'Amazonas', 'AMZ', 'AM'),
(113, 30, 'Bahía', 'BAH', 'BA'),
(114, 30, 'Ceará', 'CEA', 'CE'),
(115, 30, 'Distrito Federal', 'DFB', 'DF'),
(116, 30, 'Espirito Santo', 'ESS', 'ES'),
(117, 30, 'Goiás', 'GOI', 'GO'),
(118, 30, 'Maranhão', 'MAR', 'MA'),
(119, 30, 'Mato Grosso', 'MAT', 'MT'),
(120, 30, 'Mato Grosso do Sul', 'MGS', 'MS'),
(121, 30, 'Minas Geraís', 'MIG', 'MG'),
(122, 30, 'Paraná', 'PAR', 'PR'),
(123, 30, 'Paraíba', 'PRB', 'PB'),
(124, 30, 'Pará', 'PAB', 'PA'),
(125, 30, 'Pernambuco', 'PER', 'PR'),
(126, 30, 'Piauí', 'PIA', 'PI'),
(127, 30, 'Rio Grande do Norte', 'RGN', 'RN'),
(128, 30, 'Rio Grande do Sul', 'RGS', 'RS'),
(129, 30, 'Rio de Janeiro', 'RDJ', 'RJ'),
(130, 30, 'Rondônia', 'RON', 'RO'),
(131, 30, 'Roraima', 'ROR', 'RR'),
(132, 30, 'Santa Catarina', 'SAC', 'SC'),
(133, 30, 'Sergipe', 'SER', 'SE'),
(134, 30, 'São Paulo', 'SAP', 'SP'),
(135, 30, 'Tocantins', 'TOC', 'TO'),
(136, 44, 'Anhui', 'ANH', 'AN'),
(137, 44, 'Beijing', 'BEI', 'BE'),
(138, 44, 'Fujian', 'FUJ', 'FJ'),
(139, 44, 'Gansu', 'GAN', 'GU'),
(140, 44, 'Guangdong', 'GUA', 'GU'),
(141, 44, 'Guangxi Zhuang', 'GUZ', 'GZ'),
(142, 44, 'Guizhou', 'GUI', 'GI'),
(143, 44, 'Hainan', 'HAI', 'HA'),
(144, 44, 'Hebei', 'HEB', 'HE'),
(145, 44, 'Heilongjiang', 'HEI', 'HG'),
(146, 44, 'Henan', 'HEN', 'HN'),
(147, 44, 'Hubei', 'HUB', 'HI'),
(148, 44, 'Hunan', 'HUN', 'HU'),
(149, 44, 'Jiangsu', 'JIA', 'JI'),
(150, 44, 'Jiangxi', 'JIX', 'JX'),
(151, 44, 'Jilin', 'JIL', 'JN'),
(152, 44, 'Liaoning', 'LIA', 'LI'),
(153, 44, 'Nei Mongol', 'NML', 'NM'),
(154, 44, 'Ningxia Hui', 'NIH', 'NH'),
(155, 44, 'Qinghai', 'QIN', 'QI'),
(156, 44, 'Shaanxi', 'SHA', 'SH'),
(157, 44, 'Shandong', 'SNG', 'SG'),
(158, 44, 'Shanghai', 'SHH', 'SI'),
(159, 44, 'Shanxi', 'SHX', 'SX'),
(160, 44, 'Sichuan', 'SIC', 'SN'),
(161, 44, 'Tianjin', 'TIA', 'TI'),
(162, 44, 'Xinjiang Uygur', 'XIU', 'XU'),
(163, 44, 'Xizang', 'XIZ', 'XI'),
(164, 44, 'Yunnan', 'YUN', 'YU'),
(165, 44, 'Zhejiang', 'ZHE', 'ZH')
,(166, 176, '���������� ������', '001','01');
,(167, 176, '���������� ������������', '002','02')
,(168, 176, '���������� �������', '003','03')
,(169, 176, '���������� �����', '004','04')
,(170, 176, '���������� ��������', '005','05')
,(171, 176, '���������� ���������', '006','06')
,(172, 176, '���������-���������� ����������', '007','07')
,(173, 176, '���������� ��������', '008','08')
,(174, 176, '���������-���������� ����������', '009','09')
,(175, 176, '���������� �������', '010','10')
,(176, 176, '���������� ����', '011','11')
,(177, 176, '���������� ����� ��', '012','12')
,(178, 176, '���������� ��������', '013','13')
,(179, 176, '���������� ���� (������)', '014','14')
,(180, 176, '���������� �������� ������ (������)', '015','15')
,(181, 176, '���������� ���������', '016','16')
,(182, 176, '���������� ���� (����)', '017','17')
,(183, 176, '���������� ����������', '018','18')
,(184, 176, '���������� �������', '019','19')
,(185, 176, '��������� ����������', '020,95','20,95')
,(186, 176, '��������� ����������', '021','21')
,(187, 176, '��������� ����', '022','22')
,(188, 176, '������������� ����', '023','23')
,(189, 176, '������������ ����', '024','24')
,(190, 176, '���������� ����', '025','25')
,(191, 176, '�������������� ����', '026','26')
,(192, 176, '����������� ����', '027','27')
,(193, 176, '�������� �������', '028','28')
,(194, 176, '������������� �������', '029','29')
,(195, 176, '������������ �������', '030','30')
,(196, 176, '������������ �������', '031','31')
,(197, 176, '�������� �������', '032','32')
,(198, 176, '������������ �������', '033','33')
,(199, 176, '������������� �������', '034','34')
,(200, 176, '����������� �������', '035','35')
,(201, 176, '����������� �������', '036','36')
,(202, 176, '���������� �������', '037','37')
,(203, 176, '��������� �������', '038','38')
,(204, 176, '��������������� �������', '039','39')
,(205, 176, '��������� �������', '040','40')
,(206, 176, '���������� �������', '041','41')
,(207, 176, '����������� �������', '042','42')
,(208, 176, '��������� �������', '043','43')
,(209, 176, '����������� �������', '044','44')
,(210, 176, '���������� �������', '045','45')
,(211, 176, '������� �������', '046','46')
,(212, 176, '������������� �������', '047','47')
,(213, 176, '�������� �������', '048','48')
,(214, 176, '����������� �������', '049','49')
,(215, 176, '���������� �������', '050','50')
,(216, 176, '���������� �������', '051','51')
,(217, 176, '������������� �������', '052','52')
,(218, 176, '������������ �������', '053','53')
,(219, 176, '������������� �������', '054','54')
,(220, 176, '������ �������', '055','55')
,(221, 176, '������������ �������', '056','56')
,(222, 176, '��������� �������', '057','57')
,(223, 176, '���������� �������', '058','58')
,(224, 176, '�������� �������', '059','59')
,(225, 176, '��������� �������', '060','60')
,(226, 176, '���������� �������', '061','61')
,(227, 176, '��������� �������', '062','62')
,(228, 176, '��������� �������', '063','63')
,(229, 176, '����������� �������', '064','64')
,(230, 176, '����������� �������', '065','65')
,(231, 176, '������������ �������', '066','66')
,(232, 176, '���������� �������', '067','67')
,(233, 176, '���������� �������', '068','68')
,(234, 176, '�������� �������', '069','69')
,(235, 176, '������� �������', '070','70')
,(236, 176, '�������� �������', '071','71')
,(237, 176, '��������� �������', '072','72')
,(238, 176, '����������� �������', '073','73')
,(239, 176, '����������� �������', '074','74')
,(240, 176, '��������� �������', '075','75')
,(241, 176, '����������� �������', '076','76')
,(242, 176, '������', '077','77')
,(243, 176, '�����-���������', '078','78')
,(244, 176, '��������� ���������� �������', '079','79')
,(245, 176, '�������� ��������� ���������� �����', '080','80')
,(246, 176, '����-��������� ���������� �����', '081','81')
,(247, 176, '��������� ���������� �����', '082','82')
,(248, 176, '�������� ���������� �����', '083','83')
,(249, 176, '���������� (���������������) ���������� �����', '084','84')
,(250, 176, '����-��������� ��������� ���������� �����', '085','85')
,(251, 176, '�����-���������� ���������� �����', '086','86')
,(252, 176, '��������� ���������� �����', '087','87')
,(253, 176, '��������� ���������� �����', '088','88')
(254, 176, '�����-�������� ���������� �����', '089','89')
;


## --------------------------------------------------------

## 
## Table structure for table `#__vm_tax_rate`
## 

CREATE TABLE IF NOT EXISTS `#__vm_tax_rate` (
  `tax_rate_id` int(11) NOT NULL auto_increment,
  `vendor_id` int(11) default NULL,
  `tax_state` varchar(64) default NULL,
  `tax_country` varchar(64) default NULL,
  `mdate` int(11) default NULL,
  `tax_rate` decimal(10,4) default NULL,
  PRIMARY KEY  (`tax_rate_id`),
  KEY `idx_tax_rate_vendor_id` (`vendor_id`)
)  COMMENT='������ ��������';

## 
## Dumping data for table `#__vm_tax_rate`
## 

INSERT INTO `#__vm_tax_rate` VALUES (2, 1, 'CA', 'USA', 964565926, 0.0825);
INSERT INTO `#__vm_tax_rate` VALUES (3, 1, '���', '���������� ���������', 4556755, 0.0825);

## --------------------------------------------------------

## 
## Table structure for table `#__vm_user_info`
## 

CREATE TABLE IF NOT EXISTS `#__vm_user_info` (
  `user_info_id` varchar(32) NOT NULL default '',
  `user_id` int(11) NOT NULL default '0',
  `address_type` char(2) default NULL,
  `address_type_name` varchar(32) default NULL,
  `company` varchar(64) default NULL,
  `title` varchar(32) default NULL,
  `last_name` varchar(32) default NULL,
  `first_name` varchar(32) default NULL,
  `middle_name` varchar(32) default NULL,
  `phone_1` varchar(32) default NULL,
  `phone_2` varchar(32) default NULL,
  `fax` varchar(32) default NULL,
  `address_1` varchar(64) NOT NULL default '',
  `address_2` varchar(64) default NULL,
  `city` varchar(32) NOT NULL default '',
  `state` varchar(32) NOT NULL default '',
  `country` varchar(32) NOT NULL default 'US',
  `zip` varchar(32) NOT NULL default '',
  `user_email` varchar(255) default NULL,
  `extra_field_1` varchar(255) default NULL,
  `extra_field_2` varchar(255) default NULL,
  `extra_field_3` varchar(255) default NULL,
  `extra_field_4` char(1) default NULL,
  `extra_field_5` char(1) default NULL,
  `cdate` int(11) default NULL,
  `mdate` int(11) default NULL,
  `perms` varchar(40) NOT NULL default 'shopper',
  `bank_account_nr` varchar(32) NOT NULL default '',
  `bank_name` varchar(32) NOT NULL default '',
  `bank_sort_code` varchar(16) NOT NULL default '',
  `bank_iban` varchar(64) NOT NULL default '',
  `bank_account_holder` varchar(48) NOT NULL default '',
  `bank_account_type` enum('Checking','Business Checking','Savings') NOT NULL default 'Checking',
  PRIMARY KEY  (`user_info_id`),
  KEY `idx_user_info_user_id` (`user_id`)
)  COMMENT='���������� � ������� BT = ��������� � ST = ����������';

## 
## Dumping data for table `#__vm_user_info`
## 


## --------------------------------------------------------

## 
## Table structure for table `#__vm_vendor`
## 

CREATE TABLE IF NOT EXISTS `#__vm_vendor` (
  `vendor_id` int(11) NOT NULL auto_increment,
  `vendor_name` varchar(64) default NULL,
  `contact_last_name` varchar(32) NOT NULL default '',
  `contact_first_name` varchar(32) NOT NULL default '',
  `contact_middle_name` varchar(32) default NULL,
  `contact_title` varchar(32) default NULL,
  `contact_phone_1` varchar(32) NOT NULL default '',
  `contact_phone_2` varchar(32) default NULL,
  `contact_fax` varchar(32) default NULL,
  `contact_email` varchar(255) default NULL,
  `vendor_phone` varchar(32) default NULL,
  `vendor_address_1` varchar(64) NOT NULL default '',
  `vendor_address_2` varchar(64) default NULL,
  `vendor_city` varchar(32) NOT NULL default '',
  `vendor_state` varchar(32) NOT NULL default '',
  `vendor_country` varchar(32) NOT NULL default 'US',
  `vendor_zip` varchar(32) NOT NULL default '',
  `vendor_store_name` varchar(128) NOT NULL default '',
  `vendor_store_desc` text,
  `vendor_category_id` int(11) default NULL,
  `vendor_thumb_image` varchar(255) default NULL,
  `vendor_full_image` varchar(255) default NULL,
  `vendor_currency` varchar(16) default NULL,
  `cdate` int(11) default NULL,
  `mdate` int(11) default NULL,
  `vendor_image_path` varchar(255) default NULL,
  `vendor_terms_of_service` text NOT NULL,
  `vendor_url` varchar(255) NOT NULL default '',
  `vendor_min_pov` decimal(10,2) default NULL,
  `vendor_freeshipping` decimal(10,2) NOT NULL default '0.00',
  `vendor_currency_display_style` varchar(64) NOT NULL default '',
  PRIMARY KEY  (`vendor_id`),
  KEY `idx_vendor_name` (`vendor_name`),
  KEY `idx_vendor_category_id` (`vendor_category_id`)
)  COMMENT='��������';

## 
## Dumping data for table `#__vm_vendor`
## 
INSERT INTO `#__vm_vendor` VALUES (1, '3456.ru', '������', '��������', '�����������', '�������������', '8-926-223-49-05', '8-926-223-49-05', '8-926-223-49-05', 'wov2004@gmail.com', '8-926-223-49-05', '', '', '�������', ' -', 'RUS', '140007', '3456.ru', '', 0, '', '571b702f930ee4991aa634086a13c293.jpg', 'Rus', 950302468, 1162379357, 'shop_image/', '', 'http://3456.ru', 0.00, 0.00, '1|���\0|0|,| |1|8'),
(2, 'Washupito''s Tiendita', 'Owner', 'Demo', 'Store', 'Mr.', '555-555-1212', '555-555-1212', '555-555-1212', 'demo_order@virtuemart.net', '555-555-1212', '100 Washupito Avenue, N.W.', '', 'Lake Forest', 'CA', 'USA', '92630', 'Washupito''s Tiendita', '<p>We have the best tools for do-it-yourselfers.  Check us out! </p>\r\n		<p>We were established in 1969 in a time when getting good tools was expensive, but the quality was good.  Now that only a select few of those authentic tools survive, we have dedicated this store to bringing the experience alive for collectors and master mechanics everywhere.</p>\r\n		<p>You can easily find products selecting the category you would like to browse above.</p>', 0, '', 'c19970d6f2970cb0d1b13bea3af3144a.gif', 'USD', 950302468, 968309845, 'shop_image/', '<h5>You haven''t configured any terms of service yet. Click <a href=administrator/index2.php?page=store.store_form&option=com_phpshop>here</a> to change this text.</h5>', 'http://virtuemart.net', 0.00, 0.00, '1|$|2|.| |2|1');

## --------------------------------------------------------

## 
## Table structure for table `#__vm_vendor_category`
## 

CREATE TABLE IF NOT EXISTS `#__vm_vendor_category` (
  `vendor_category_id` int(11) NOT NULL auto_increment,
  `vendor_category_name` varchar(64) default NULL,
  `vendor_category_desc` text,
  PRIMARY KEY  (`vendor_category_id`),
  KEY `idx_vendor_category_category_name` (`vendor_category_name`)
)  COMMENT='��������� ���������';

## 
## Dumping data for table `#__vm_vendor_category`
## 

INSERT INTO `#__vm_vendor_category` VALUES (6, '-�� ���������-', '�����������');

## --------------------------------------------------------

## 
## Table structure for table `#__vm_visit`
## 

CREATE TABLE IF NOT EXISTS `#__vm_visit` (
  `visit_id` varchar(255) NOT NULL default '',
  `affiliate_id` int(11) NOT NULL default '0',
  `pages` int(11) NOT NULL default '0',
  `entry_page` varchar(255) NOT NULL default '',
  `exit_page` varchar(255) NOT NULL default '',
  `sdate` int(11) NOT NULL default '0',
  `edate` int(11) NOT NULL default '0',
  PRIMARY KEY  (`visit_id`)
) TYPE=MyISAM COMMENT='Records the visit of an affiliate';

## 
## Dumping data for table `#__vm_visit`
## 


## --------------------------------------------------------

## 
## Table structure for table `#__vm_waiting_list`
## 

CREATE TABLE IF NOT EXISTS `#__vm_waiting_list` (
  `waiting_list_id` int(11) NOT NULL auto_increment,
  `product_id` int(11) NOT NULL default '0',
  `user_id` int(11) NOT NULL default '0',
  `notify_email` varchar(150) NOT NULL default '',
  `notified` enum('0','1') default '0',
  `notify_date` timestamp(14) NOT NULL,
  PRIMARY KEY  (`waiting_list_id`),
  KEY `product_id` (`product_id`),
  KEY `notify_email` (`notify_email`)
)  COMMENT='�����������';

## 
## Dumping data for table `#__vm_waiting_list`
## 


## --------------------------------------------------------

## 
## Table structure for table `#__vm_zone_shipping`
## 

CREATE TABLE IF NOT EXISTS `#__vm_zone_shipping` (
  `zone_id` int(11) NOT NULL auto_increment,
  `zone_name` varchar(255) default NULL,
  `zone_cost` decimal(10,2) default NULL,
  `zone_limit` decimal(10,2) default NULL,
  `zone_description` text NOT NULL,
  `zone_tax_rate` int(11) NOT NULL default '0',
  PRIMARY KEY  (`zone_id`),
  KEY `zone_id` (`zone_id`)
)  COMMENT='���� ���  ������ �������� �� �����';

INSERT INTO `#__components` (name, parent, params ) VALUES ( 'virtuemart_version', 9999, 'RELEASE=1.0.7RUS BETA2\nDEV_STATUS=stable');
