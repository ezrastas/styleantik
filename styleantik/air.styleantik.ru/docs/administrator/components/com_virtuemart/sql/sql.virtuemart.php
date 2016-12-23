<?php
# $Id: virtuemart.installation.joomla.sql,v 1.2.2.5 2006/09/12 19:23:56 soeren_nb Exp $
#
# To undo the changes done by this script, run virtuemart.uninstallation.mysql.sql
#
############################################################
# DATABASE STRUCTURE AND CORE DATA FOR VirtueMart
############################################################

##
## Table structure for table `#__{vm}_affiliate`
##

$db->query("
CREATE TABLE IF NOT EXISTS `#__vm_affiliate` (
  `affiliate_id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL default '0',
  `active` char(1) NOT NULL default 'N',
  `rate` int(11) NOT NULL default '0',
  PRIMARY KEY  (`affiliate_id`)
)  COMMENT='������������ ��� �������� �����'
") ;

##
## Dumping data for table `#__{vm}_affiliate`
##


## --------------------------------------------------------

##
## Table structure for table `#__{vm}_affiliate_sale`
##

$db->query("
CREATE TABLE IF NOT EXISTS `#__vm_affiliate_sale` (
  `order_id` int(11) NOT NULL default '0',
  `visit_id` varchar(32) NOT NULL default '',
  `affiliate_id` int(11) NOT NULL default '0',
  `rate` int(2) NOT NULL default '0',
  PRIMARY KEY  (`order_id`)
)  COMMENT='������ �� ��������� ';
") ;
##
## Dumping data for table `#__{vm}_affiliate_sale`
##


## --------------------------------------------------------

##
## Table structure for table `#__{vm}_auth_user_vendor`
##

$db->query( "CREATE TABLE IF NOT EXISTS `#__{vm}_auth_user_vendor` (
  `user_id` int(11) default NULL,
  `vendor_id` int(11) default NULL,
  KEY `idx_auth_user_vendor_user_id` (`user_id`),
  KEY `idx_auth_user_vendor_vendor_id` (`vendor_id`)
)  COMMENT='��������-������������';
");
##
## Dumping data for table `#__{vm}_auth_user_vendor`
##


## --------------------------------------------------------

##
## Table structure for table `#__{vm}_category`
##

$db->query("
CREATE TABLE IF NOT EXISTS `#__vm_category` (
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
  `category_flypage` varchar(255) NOT NULL ,
  `list_order` int(11)  NOT NULL ,
  PRIMARY KEY  (`category_id`),
  KEY `idx_category_vendor_id` (`vendor_id`),
  KEY `idx_category_name` (`category_name`)
)  COMMENT='��������� ������� �������� ����'  ;
");
##
## Dumping data for table `#__{vm}_category`
##


## --------------------------------------------------------

##
## Table structure for table `#__{vm}_category_xref`
##

$db->query("
CREATE TABLE IF NOT EXISTS `#__vm_category_xref` (
  `category_parent_id` int(11) NOT NULL default '0',
  `category_child_id` int(11) NOT NULL default '0',
  `category_list` int(11) default NULL,
  KEY `category_xref_category_parent_id` (`category_parent_id`),
  KEY `category_xref_category_child_id` (`category_child_id`),
  KEY `idx_category_xref_category_list` (`category_list`)
)  COMMENT='����� ����� �����������';
");
##
## Dumping data for table `#__{vm}_category_xref`
##


## --------------------------------------------------------

##
## Table structure for table `#__{vm}_country`
##

$db->query("
CREATE TABLE IF NOT EXISTS `#__vm_country` (
  `country_id` int(11) NOT NULL auto_increment,
  `zone_id` int(11) NOT NULL default '1',
  `country_name` varchar(64) default NULL,
  `country_3_code` char(3) default NULL,
  `country_2_code` char(2) default NULL,
  PRIMARY KEY  (`country_id`),
  KEY `idx_country_name` (`country_name`)
)  COMMENT='������ �����'  ;
");
##
## Dumping data for table `#__{vm}_country`
##
$db->query("
INSERT INTO `#__{vm}_country` VALUES (1, 1, '����������', 'AFG', 'AF')
, (2, 1, '�������', 'ALB', 'AL')
, (3, 1, '�����', 'DZA', 'DZ')
, (4, 1, '������������ �����', 'ASM', 'AS')
, (5, 1, '�������', 'AND', 'AD')
, (6, 1, '������', 'AGO', 'AO')
, (7, 1, '�������', 'AIA', 'AI')
, (8, 1, '����������', 'ATA', 'AQ')
, (9, 1, '������� � �������', 'ATG', 'AG')
, (10, 1, '���������', 'ARG', 'AR')
, (11, 1, '�������', 'ARM', 'AM')
, (12, 1, '�����', 'ABW', 'AW')
, (13, 1, '���������', 'AUS', 'AU')
, (14, 1, '�������', 'AUT', 'AT')
, (15, 1, '�����������', 'AZE', 'AZ')
, (16, 1, '������', 'BHS', 'BS')
, (17, 1, '�������', 'BHR', 'BH')
, (18, 1, '���������', 'BGD', 'BD')
, (19, 1, '��������', 'BRB', 'BB')
, (20, 1, '��������', 'BLR', 'BY')
, (21, 1, '�������', 'BEL', 'BE')
, (22, 1, '�����', 'BLZ', 'BZ')
, (23, 1, '�����', 'BEN', 'BJ')
, (24, 1, '�������', 'BMU', 'BM')
, (25, 1, '�����', 'BTN', 'BT')
, (26, 1, '�������', 'BOL', 'BO')
, (27, 1, '������ � �����������', 'BIH', 'BA')
, (28, 1, '��������', 'BWA', 'BW')
, (29, 1, '������ �����', 'BVT', 'BV')
, (30, 1, '��������', 'BRA', 'BR')
, (31, 1, '���������� ������� � ����� ������', 'IOT', 'IO')
, (32, 1, '������ ������', 'BRN', 'BN')
, (33, 1, '��������', 'BGR', 'BG')
, (34, 1, '������� ����', 'BFA', 'BF')
, (35, 1, '�������', 'BDI', 'BI')
, (36, 1, '��������', 'KHM', 'KH')
, (37, 1, '�������', 'CMR', 'CM')
, (38, 1, '������', 'CAN', 'CA')
, (39, 1, '���� �����', 'CPV', 'CV')
, (40, 1, '��������� �������', 'CYM', 'KY')
, (41, 1, '����������� ����������� ����������', 'CAF', 'CF')
, (42, 1, '���������� ���', 'TCD', 'TD')
, (43, 1, '����', 'CHL', 'CL')
, (44, 1, '�����', 'CHN', 'CN')
, (45, 1, '������ ���������', 'CXR', 'CX')
, (46, 1, '������� ������', 'CCK', 'CC')
, (47, 1, '��������', 'COL', 'CO')
, (48, 1, '�������', 'COM', 'KM')
, (49, 1, '�����', 'COG', 'CG')
, (50, 1, '������� ����', 'COK', 'CK')
, (51, 1, '����� ����', 'CRI', 'CR')
, (52, 1, '���-��-����', 'CIV', 'CI')
, (53, 1, '��������', 'HRV', 'HR')
, (54, 1, '����', 'CUB', 'CU')
, (55, 1, '����', 'CYP', 'CY')
, (56, 1, '�����', 'CZE', 'CZ')
, (57, 1, '�����', 'DNK', 'DK')
, (58, 1, '�������', 'DJI', 'DJ')
, (59, 1, '��������', 'DMA', 'DM')
, (60, 1, '������������� ���.', 'DOM', 'DO')
, (61, 1, '����. �����', 'TMP', 'TP')
, (62, 1, '�������', 'ECU', 'EC')
, (63, 1, '������', 'EGY', 'EG')
, (64, 1, '���������', 'SLV', 'SV')
, (65, 1, '�������. ������', 'GNQ', 'GQ')
, (66, 1, '�������', 'ERI', 'ER')
, (67, 1, '�������', 'EST', 'EE')
, (68, 1, '�������', 'ETH', 'ET')
, (69, 1, '������������ �������', 'FLK', 'FK')
, (70, 1, '������� ����', 'FRO', 'FO')
, (71, 1, '�����', 'FJI', 'FJ')
, (72, 1, '���������', 'FIN', 'FI')
, (73, 1, '�������', 'FRA', 'FR')
, (74, 1, '�������, ����������', 'FXX', 'FX')
, (75, 1, '�����. ������', 'GUF', 'GF')
, (76, 1, '�����. ���������', 'PYF', 'PF')
, (77, 1, '�����. ���. ����������', 'ATF', 'TF')
, (78, 1, '�����', 'GAB', 'GA')
, (79, 1, '������', 'GMB', 'GM')
, (80, 1, '������', 'GEO', 'GE')
, (81, 1, '��������', 'DEU', 'DE')
, (82, 1, '����', 'GHA', 'GH')
, (83, 1, '���������', 'GIB', 'GI')
, (84, 1, '������', 'GRC', 'GR')
, (85, 1, '����������', 'GRL', 'GL')
, (86, 1, '�������', 'GRD', 'GD')
, (87, 1, '���������', 'GLP', 'GP')
, (88, 1, '����', 'GUM', 'GU')
, (89, 1, '���������', 'GTM', 'GT')
, (90, 1, '������', 'GIN', 'GN')
, (91, 1, '������-������', 'GNB', 'GW')
, (92, 1, '������', 'GUY', 'GY')
, (93, 1, '�����', 'HTI', 'HT')
, (94, 1, '������� ���� � ����������', 'HMD', 'HM')
, (95, 1, '��������', 'HND', 'HN')
, (96, 1, '�������', 'HKG', 'HK')
, (97, 1, '�������', 'HUN', 'HU')
, (98, 1, '��������', 'ISL', 'IS')
, (99, 1, '�����', 'IND', 'IN')
, (100, 1, '���������', 'IDN', 'ID')
, (101, 1, '����', 'IRN', 'IR')
, (102, 1, '����', 'IRQ', 'IQ')
, (103, 1, '��������', 'IRL', 'IE')
, (104, 1, '�������', 'ISR', 'IL')
, (105, 1, '������', 'ITA', 'IT')
, (106, 1, '������', 'JAM', 'JM')
, (107, 1, '������', 'JPN', 'JP')
, (108, 1, '������', 'JOR', 'JO')
, (109, 1, '���������', 'KAZ', 'KZ')
, (110, 1, '�����', 'KEN', 'KE')
, (111, 1, '��������', 'KIR', 'KI')
, (112, 1, '������. ���. �����', 'PRK', 'KP')
, (113, 1, '�����', 'KOR', 'KR')
, (114, 1, '������', 'KWT', 'KW')
, (115, 1, '����������', 'KGZ', 'KG')
, (116, 1, '������. ���. ����', 'LAO', 'LA')
, (117, 1, '������', 'LVA', 'LV')
, (118, 1, '�������', 'LBN', 'LB')
, (119, 1, '������', 'LSO', 'LS')
, (120, 1, '�������', 'LBR', 'LR')
, (121, 1, '���������� ����. ����������', 'LBY', 'LY')
, (122, 1, '�����������', 'LIE', 'LI')
, (123, 1, '�����', 'LTU', 'LT')
, (124, 1, '����������', 'LUX', 'LU')
, (125, 1, '������', 'MAC', 'MO')
, (126, 1, '���������', 'MKD', 'MK')
, (127, 1, '����������', 'MDG', 'MG')
, (128, 1, '������', 'MWI', 'MW')
, (129, 1, '��������', 'MYS', 'MY')
, (130, 1, '��������', 'MDV', 'MV')
, (131, 1, '����', 'MLI', 'ML')
, (132, 1, '������', 'MLT', 'MT')
, (133, 1, '������� ������', 'MHL', 'MH')
, (134, 1, '���������', 'MTQ', 'MQ')
, (135, 1, '����������', 'MRT', 'MR')
, (136, 1, '��������', 'MUS', 'MU')
, (137, 1, '����', 'MYT', 'YT')
, (138, 1, '�������', 'MEX', 'MX')
, (139, 1, '����������', 'FSM', 'FM')
, (140, 1, '�������', 'MDA', 'MD')
, (141, 1, '������', 'MCO', 'MC')
, (142, 1, '��������', 'MNG', 'MN')
, (143, 1, '��������', 'MSR', 'MS')
, (144, 1, '�������', 'MAR', 'MA')
, (145, 1, '��������', 'MOZ', 'MZ')
, (146, 1, '������', 'MMR', 'MM')
, (147, 1, '�������', 'NAM', 'NA')
, (148, 1, '�����', 'NRU', 'NR')
, (149, 1, '�����', 'NPL', 'NP')
, (150, 1, '����������', 'NLD', 'NL')
, (151, 1, '����������� ������', 'ANT', 'AN')
, (152, 1, '���. ���������', 'NCL', 'NC')
, (153, 1, '���. ��������', 'NZL', 'NZ')
, (154, 1, '���������', 'NIC', 'NI')
, (155, 1, '�����', 'NER', 'NE')
, (156, 1, '�������', 'NGA', 'NG')
, (157, 1, '���', 'NIU', 'NU')
, (158, 1, '������ �������', 'NFK', 'NF')
, (159, 1, '���. ������� �������', 'MNP', 'MP')
, (160, 1, '��������', 'NOR', 'NO')
, (161, 1, '����', 'OMN', 'OM')
, (162, 1, '��������', 'PAK', 'PK')
, (163, 1, '�����', 'PLW', 'PW')
, (164, 1, '������', 'PAN', 'PA')
, (165, 1, '�����, ����� ������', 'PNG', 'PG')
, (166, 1, '��������', 'PRY', 'PY')
, (167, 1, '����', 'PER', 'PE')
, (168, 1, '���������', 'PHL', 'PH')
, (169, 1, '�������', 'PCN', 'PN')
, (170, 1, '������', 'POL', 'PL')
, (171, 1, '����������', 'PRT', 'PT')
, (172, 1, '������ ����', 'PRI', 'PR')
, (173, 1, '�����', 'QAT', 'QA')
, (174, 1, '�������', 'REU', 'RE')
, (175, 1, '�������', 'ROM', 'RO')
, (176, 1, '���������� ���������', 'RUS', 'RU')
, (177, 1, '������', 'RWA', 'RW')
, (178, 1, '��. ���� � �����', 'KNA', 'KN')
, (179, 1, '��. �����', 'LCA', 'LC')
, (180, 1, '��. ������� � �������', 'VCT', 'VC')
, (181, 1, '�����', 'WSM', 'WS')
, (182, 1, '��� ������', 'SMR', 'SM')
, (183, 1, '��. ��� � �������', 'STP', 'ST')
, (184, 1, '���������� ������', 'SAU', 'SA')
, (185, 1, '�������', 'SEN', 'SN')
, (186, 1, '�������', 'SYC', 'SC')
, (187, 1, '������ �����', 'SLE', 'SL')
, (188, 1, '��������', 'SGP', 'SG')
, (189, 1, '��������', 'SVK', 'SK')
, (190, 1, '��������', 'SVN', 'SI')
, (191, 1, '������� ��������', 'SLB', 'SB')
, (192, 1, '������', 'SOM', 'SO')
, (193, 1, '����� ������', 'ZAF', 'ZA')
, (194, 1, '����� �������. �������', 'SGS', 'GS')
, (195, 1, '�������', 'ESP', 'ES')
, (196, 1, '��� �����', 'LKA', 'LK')
, (197, 1, '��. �����', 'SHN', 'SH')
, (198, 1, '��. ���� � �������', 'SPM', 'PM')
, (199, 1, '�����', 'SDN', 'SD')
, (200, 1, '�������', 'SUR', 'SR')
, (201, 1, '�������� � �� ����� �������', 'SJM', 'SJ')
, (202, 1, '���������', 'SWZ', 'SZ')
, (203, 1, '������', 'SWE', 'SE')
, (204, 1, '���������', 'CHE', 'CH')
, (205, 1, '�����', 'SYR', 'SY')
, (206, 1, '�������', 'TWN', 'TW')
, (207, 1, '�����������', 'TJK', 'TJ')
, (208, 1, '��������', 'TZA', 'TZ')
, (209, 1, '�������', 'THA', 'TH')
, (210, 1, '����', 'TGO', 'TG')
, (211, 1, '�������', 'TKL', 'TK')
, (212, 1, '�����', 'TON', 'TO')
, (213, 1, '�������� � ������', 'TTO', 'TT')
, (214, 1, '�����', 'TUN', 'TN')
, (215, 1, '������', 'TUR', 'TR')
, (216, 1, '������������', 'TKM', 'TM')
, (217, 1, '���� � ������ �������', 'TCA', 'TC')
, (218, 1, '������', 'TUV', 'TV')
, (219, 1, '������', 'UGA', 'UG')
, (220, 1, '�������', 'UKR', 'UA')
, (221, 1, '���', 'ARE', 'AE')
, (222, 1, '��������������', 'GBR', 'GB')
, (223, 1, '���', 'USA', 'US')
, (224, 1, '����. ����� �������� ��������', 'UMI', 'UM')
, (225, 1, '�������', 'URY', 'UY')
, (226, 1, '����������', 'UZB', 'UZ')
, (227, 1, '������', 'VUT', 'VU')
, (228, 1, '�������', 'VAT', 'VA')
, (229, 1, '���������', 'VEN', 'VE')
, (230, 1, '�������', 'VNM', 'VN')
, (231, 1, '����������� �-�� (������)', 'VGB', 'VG')
, (232, 1, '����������� �-�� (���)', 'VIR', 'VI')
, (233, 1, '�����', 'WLF', 'WF')
, (234, 1, '���. ������', 'ESH', 'EH')
, (235, 1, '�����', 'YEM', 'YE')
, (236, 1, '���������', 'YUG', 'YU')
, (237, 1, '����', 'ZAR', 'ZR')
, (238, 1, '������', 'ZMB', 'ZM')
, (239, 1, '��������', 'ZWE', 'ZW');
");
## --------------------------------------------------------

##
## Table structure for table `#__{vm}_coupons`
##

$db->query("
CREATE TABLE IF NOT EXISTS `#__vm_coupons` (
  `coupon_id` int(16) NOT NULL auto_increment,
  `coupon_code` varchar(32) NOT NULL default '',
  `percent_or_total` enum('percent','total') NOT NULL default 'percent',
  `coupon_type` enum('gift','permanent') NOT NULL default 'gift',
  `coupon_value` decimal(12,2) NOT NULL default '0.00',
  PRIMARY KEY  (`coupon_id`)
)  COMMENT='��� ������ ����� �������' ;
");
##
## Dumping data for table `#__{vm}_coupons`
##


## --------------------------------------------------------

##
## Table structure for table `#__{vm}_creditcard`
##

$db->query("
CREATE TABLE IF NOT EXISTS `#__vm_creditcard` (
  `creditcard_id` int(11) NOT NULL auto_increment,
  `vendor_id` int(11) NOT NULL default '0',
  `creditcard_name` varchar(70) NOT NULL default '',
  `creditcard_code` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`creditcard_id`)
)  COMMENT='��� �������� ����� ��������� ���' AUTO_INCREMENT=8 ;
");
##
## Dumping data for table `#__{vm}_creditcard`
##

$db->query("
INSERT INTO `#__{vm}_creditcard` VALUES (1, 1, 'Visa', 'VISA');
INSERT INTO `#__{vm}_creditcard` VALUES (2, 1, 'MasterCard', 'MC');
INSERT INTO `#__{vm}_creditcard` VALUES (3, 1, 'American Express', 'amex');
INSERT INTO `#__{vm}_creditcard` VALUES (4, 1, 'Discover Card', 'discover');
INSERT INTO `#__{vm}_creditcard` VALUES (5, 1, 'Diners Club', 'diners');
INSERT INTO `#__{vm}_creditcard` VALUES (6, 1, 'JCB', 'jcb');
INSERT INTO `#__{vm}_creditcard` VALUES (7, 1, 'Australian Bankcard', 'australian_bc');
") ;
## --------------------------------------------------------

##
## Table structure for table `#__{vm}_csv`
##

$db->query("
CREATE TABLE IF NOT EXISTS `#__vm_csv` (
  `field_id` int(11) NOT NULL auto_increment,
  `field_name` varchar(128) NOT NULL default '',
  `field_default_value` text,
  `field_ordering` int(3) NOT NULL default '0',
  `field_required` char(1) default 'N',
  PRIMARY KEY  (`field_id`)
)  COMMENT='���� ��� CSV ������� ��������'  ;
");
##
## Dumping data for table `#__{vm}_csv`
##

$db->query( "INSERT INTO `#__{vm}_csv` VALUES (1, 'product_sku', '', 1, 'Y'),
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
(21, 'product_parent_sku', '0', 21, 'N'),
(22, 'attribute', '', 22, 'N'),
(23, 'custom_attribute', '', 23, 'N'),
(24, 'attributes', '', 24, 'N'),
(25, 'attribute_values', '', 25, 'N'),
(26, 'product_discount', '', 26, 'N');
" );

## --------------------------------------------------------

##
## Table structure for table `#__{vm}_currency`
##

$db->query("
CREATE TABLE IF NOT EXISTS `#__vm_currency` (
  `currency_id` int(11) NOT NULL auto_increment,
  `currency_name` varchar(64) default NULL,
  `currency_code` char(3) default NULL,
  PRIMARY KEY  (`currency_id`),
  KEY `idx_currency_name` (`currency_name`)
)  COMMENT='������'  ;
");
##
## Dumping data for table `#__{vm}_currency`
##

$db->query("
INSERT INTO `#__{vm}_currency` VALUES (1, 'Andorran Peseta', 'ADP')
, (2, '��� ������', 'AED')
, (3, '����������. ������', 'AFA')
, (4, '�������. ���', 'ALL')
, (5, '������� ����������� �����', 'ANG')
, (6, '���������� ������', 'AOK')
, (7, '����������. �����', 'ARA')
, (9, '��������. ������', 'AUD')
, (10, '����. ������', 'AWG')
, (11, '��������. ������', 'BBD')
, (12, '���������. ����', 'BDT')
, (14, '��������. ���', 'BGL')
, (15, '�������. �����', 'BHD')
, (16, '������� �����', 'BIF')
, (17, '������. ������', 'BMD')
, (18, '��������. ������', 'BND')
, (19, '���������. ���������', 'BOB')
, (20, '���������. ����', 'BRL')
, (21, '�������. ������', 'BSD')
, (22, '����� ��������', 'BTN')
, (23, '����� �����', 'BUK')
, (24, '���������. ����', 'BWP')
, (25, '�������. ������', 'BZD')
, (26, '�������. ������', 'CAD')
, (27, '�����. �����', 'CHF')
, (28, '�������. �������', 'CLF')
, (29, '�������. �����', 'CLP')
, (30, '���. ����', 'CNY')
, (31, '����������. �����', 'COP')
, (32, '����� ���� �����', 'CRC')
, (33, '�����. �����', 'CZK')
, (34, '�������. �����', 'CUP')
, (35, '���� ����� ������', 'CVE')
, (36, '������. ����', 'CYP')
, (40, '�����. �����', 'DKK')
, (41, '�����������. �����', 'DOP')
, (42, '��������� �����', 'DZD')
, (43, '������� �����', 'ECS')
, (44, '��������. ����', 'EGP')
, (46, '�������. ����', 'ETB')
, (47, '����', 'EUR')
, (49, '����� ������', 'FJD')
, (50, '����������. ����', 'FKP')
, (52, '��������. ����', 'GBP')
, (53, '��������. ����', 'GHC')
, (54, '�����������. ����', 'GIP')
, (55, '���������. ������', 'GMD')
, (56, '��������. �����', 'GNF')
, (58, '����������. ������', 'GTQ')
, (59, '��������. �����', 'GWP')
, (60, '�������. ������', 'GYD')
, (61, '���-������. ������', 'HKD')
, (62, '�������� �������', 'HNL')
, (63, '��������. ������', 'HTG')
, (64, '��������. ������', 'HUF')
, (65, '����������. �����', 'IDR')
, (66, '�������� ����', 'IEP')
, (67, '���������. ������', 'ILS')
, (68, '�������. �����', 'INR')
, (69, '������. �����', 'IQD')
, (70, '������. ����', 'IRR')
, (73, '������. ������', 'JMD')
, (74, '��������. �����', 'JOD')
, (75, '������. ����', 'JPY')
, (76, '�������. �������', 'KES')
, (77, '����������. ����', 'KHR')
, (78, '���������. �����', 'KMF')
, (79, '���. �������. ���', 'KPW')
, (80, '���. �������. ���', 'KRW')
, (81, '�������� �����', 'KWD')
, (82, '��������. ������', 'KYD')
, (83, '�����. ���', 'LAK')
, (84, '���������. ����', 'LBP')
, (85, '���-����� �����', 'LKR')
, (86, '��������� ������', 'LRD')
, (87, '������� ����', 'LSL')
, (89, '������� �����', 'LYD')
, (90, '����������. ������', 'MAD')
, (91, '���������. �����', 'MGF')
, (92, '���������. ������', 'MNT')
, (93, '�������. �����', 'MOP')
, (94, '���������� �����', 'MRO')
, (95, '��������� ����', 'MTL')
, (96, '�������� �����', 'MUR')
, (97, '������� �����', 'MVR')
, (98, '������ �����', 'MWK')
, (99, '����������. �����', 'MXP')
, (100, '��������� ������', 'MYR')
, (101, '����������. �������', 'MZM')
, (102, '���������. �����', 'NGN')
, (103, '�����������. �������', 'NIC')
, (105, '��������. �����', 'NOK')
, (106, '����� �����', 'NPR')
, (107, '���. ��������. ������', 'NZD')
, (108, '����� ����', 'OMR')
, (109, '�������. ������', 'PAB')
, (110, '���� ����', 'PEI')
, (111, '����� ���. ������ ����', 'PGK')
, (112, '����������. �����', 'PHP')
, (113, '����������. �����', 'PKR')
, (114, '��������� ������', 'PLZ')
, (116, '���������� ������', 'PYG')
, (117, '�������. ����', 'QAR')
, (118, '�������. ���', 'ROL')
, (119, '������ �����', 'RWF')
, (120, '����. ��������. ����', 'SAR')
, (121, '�������. �-�� ������', 'SBD')
, (122, '������� �����', 'SCR')
, (123, '�������. ����', 'SDP')
, (124, '������. �����', 'SEK')
, (125, '����������. ������', 'SGD')
, (126, '��. ����� ����', 'SHP')
, (127, '������ ����� ����', 'SLL')
, (128, '������ �������', 'SOS')
, (129, '������� �������', 'SRG')
, (130, '��. ��� � ������� �����', 'STD')
, (131, '���������� �����', 'RUB')
, (132, '�����������. �����', 'SVC')
, (133, '�������. �����', 'SYP')
, (134, '�����������. ���������', 'SZL')
, (135, '������� ���', 'THB')
, (136, '�������. �����', 'TND')
, (137, '����� �����', 'TOP')
, (138, '����. ����� ������', 'TPE')
, (139, '�������� ����', 'TRL')
, (140, '�������� � ������ ������', 'TTD')
, (141, '���������� ������', 'TWD')
, (142, '����������. �������', 'TZS')
, (143, '������ �������', 'UGS')
, (144, '��� ������', 'USD')
, (145, '���������. �����', 'UYP')
, (146, '�����������. �������', 'VEB')
, (147, '���������. ����', 'VND')
, (148, '������ ����', 'VUV')
, (149, '����� ����', 'WST')
, (150, '������. ����� �����', 'YDD')
, (151, '�������. ����', 'YER')
, (152, '���������. �����', 'YUD')
, (153, '��. ������ ����', 'ZAR')
, (154, '��������. �����', 'ZMK')
, (155, '������. ����', 'ZRZ')
, (156, '���������. ������', 'ZWD')
, (157, '��������. �����', 'SKK');
") ;
## --------------------------------------------------------

##
## Table structure for table `#__{vm}_function`
##

$db->query("
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
)  COMMENT='������������������ �������' AUTO_INCREMENT=169 ;
");
##
## Dumping data for table `#__{vm}_function`
##

$db->query( "INSERT INTO `#__{vm}_function` VALUES (1, 1, 'userAdd', 'ps_user', 'add', '', 'admin,storeadmin'),
(2, 1, 'userDelete', 'ps_user', 'delete', '', 'admin,storeadmin'),
(3, 1, 'userUpdate', 'ps_user', 'update', '', 'admin,storeadmin'),
(4, 1, 'adminPasswdUpdate', 'ps_user', 'update_admin_passwd', '�������� ������ ��������������', 'admin'),
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
(66, 1, 'countryUpdate', 'ps_country', 'update', '�������� ������ � ������', 'storeadmin,admin'),
(67, 1, 'countryDelete', 'ps_country', 'delete', '������� ������ � ������', 'storeadmin,admin'),
(68, 2, 'product_csv', 'ps_csv', 'upload_csv', '', 'admin'),
(110, 7, 'waitingListAdd', 'zw_waiting_list', 'add', '', 'none'),
(111, 13, 'addzone', 'ps_zone', 'add', '���������� ����', 'admin,storeadmin'),
(112, 13, 'updatezone', 'ps_zone', 'update', '��������� ����', 'admin,storeadmin'),
(113, 13, 'deletezone', 'ps_zone', 'delete', '�������� ����', 'admin,storeadmin'),
(114, 13, 'zoneassign', 'ps_zone', 'assign', '���������� ������ � ����', 'admin,storeadmin'),
(115, 1, 'writeConfig', 'ps_config', 'writeconfig', '���������� ������������ virtuemart.cfg.php', 'admin'),
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
(168, 2, 'csvFieldDelete', 'ps_csv', 'delete', 'Delete a CSV Field', 'storeadmin,admin'),
(170, 20, 'export_yml', 'ps_csv', 'export_yml', '������� � ������', 'none'); ") ;
## --------------------------------------------------------

##
## Table structure for table `#__{vm}_manufacturer`
##

$db->query("
CREATE TABLE IF NOT EXISTS `#__vm_manufacturer` (
  `manufacturer_id` int(11) NOT NULL auto_increment,
  `mf_name` varchar(64) default NULL,
  `mf_email` varchar(255) default NULL,
  `mf_desc` text,
  `mf_category_id` int(11) default NULL,
  `mf_url` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`manufacturer_id`)
)  COMMENT='������������� �������'  ;
");
##
## Dumping data for table `#__{vm}_manufacturer`
##


## --------------------------------------------------------

##
## Table structure for table `#__{vm}_manufacturer_category`
##

$db->query("
CREATE TABLE IF NOT EXISTS `#__vm_manufacturer_category` (
  `mf_category_id` int(11) NOT NULL auto_increment,
  `mf_category_name` varchar(64) default NULL,
  `mf_category_desc` text,
  PRIMARY KEY  (`mf_category_id`),
  KEY `idx_manufacturer_category_category_name` (`mf_category_name`)
)  COMMENT='��������� ��������������'  ;
");
##
## Dumping data for table `#__{vm}_manufacturer_category`
##


## --------------------------------------------------------

##
## Table structure for table `#__{vm}_module`
##

$db->query("
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
)  COMMENT='������ ����������' AUTO_INCREMENT=19 ;
");
##
## Dumping data for table `#__{vm}_module`
##

$db->query( "INSERT INTO `#__{vm}_module` VALUES (1, 'admin', '<h4>������ ��� ���������������</h4>\r\n\r\n<p>����� ���������� ���������:</p>\r\n<OL>\r\n\r\n<LI>�������� �������������</LI>\r\n<LI>�������� �������</LI>\r\n<LI>�������� �������</LI>\r\n</OL>\r\n', 'admin', 'Y', 1),
(2, 'product', '<p>����� �� ������ ��������� ����� ������ ��������� �������.  ������������� �������� ����� ���� ����� ��� �� �������� ��������� ������, �������� ����� �������, �������������� ������� ������, � ������� ������ ��� ������� �������� �������� .</p>', 'storeadmin,admin', 'Y', 4),
(3, 'vendor', '<h4>������ ��� ���������������</h4>\r\n<p>����� �� ������ ��������� ���������� � ����������.</p>', 'admin', 'Y', 6),
(4, 'shopper', '<p>���������� ��������� � ����� ��������.  ��������� ��������� ������ ��������.  ������ �������� ����� ���� ������������ ����� �������������� ��������� ������.  ��� ��������� ��������� ��������� ���� ��� ��������� ����� �������������.  ��� ������� �� ������ ������ ����� ���� ''�������'' � ''�����������������'' group. </p>', 'admin,storeadmin', 'Y', 4),
(5, 'order', '<p>���������� ����� � �������� ������ ������.</p>', 'admin,storeadmin', 'Y', 5),
(6, 'msgs', '������ ��������� � ������������ ��� ������ ��������� ��������� �������������. ���� ���������� ������ ��� �������������� �� ������ ������ �� ��� �����������.', 'none', 'N', 99),
(7, 'shop', '��� ������ ��������  \"3456.ru\" .  ���� ���� ������� ������� � ����������� �������� ����������.', 'none', 'Y', 99),
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
(18, 'coupon', '���������� ��������', 'admin,storeadmin', 'Y', 11),
(20, 'export_yml', '������� � ������', 'admin,storeadmin', 'N', 99)
;
");

## --------------------------------------------------------

##
## Table structure for table `#__{vm}_order_history`
##

$db->query("
CREATE TABLE IF NOT EXISTS `#__vm_order_history` (
  `order_status_history_id` int(11) NOT NULL auto_increment,
  `order_id` int(11) NOT NULL default '0',
  `order_status_code` char(1) NOT NULL default '0',
  `date_added` datetime NOT NULL default '0000-00-00 00:00:00',
  `customer_notified` int(1) default '0',
  `comments` text,
  PRIMARY KEY  (`order_status_history_id`)
)  COMMENT='�������' AUTO_INCREMENT=1 ;
");
##
## Dumping data for table `#__{vm}_order_history`
##


## --------------------------------------------------------

##
## Table structure for table `#__{vm}_order_item`
##

$db->query("
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
)  COMMENT='������ ��� ������� ������� �����' AUTO_INCREMENT=1 ;
");
##
## Dumping data for table `#__{vm}_order_item`
##


## --------------------------------------------------------

##
## Table structure for table `#__{vm}_order_payment`
##

$db->query("
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
)  COMMENT='������� ������ ������� ���� ����';
");
##
## Dumping data for table `#__{vm}_order_payment`
##


## --------------------------------------------------------

##
## Table structure for table `#__{vm}_order_status`
##

$db->query("
CREATE TABLE IF NOT EXISTS `#__vm_order_status` (
  `order_status_id` int(11) NOT NULL auto_increment,
  `order_status_code` char(1) NOT NULL default '',
  `order_status_name` varchar(64) default NULL,
  `list_order` int(11) default NULL,
  `vendor_id` int(11) default NULL,
  PRIMARY KEY  (`order_status_id`),
  KEY `idx_order_status_list_order` (`list_order`),
  KEY `idx_order_status_vendor_id` (`vendor_id`)
)  COMMENT='��� ��������� ������� ������' AUTO_INCREMENT=6 ;
");
##
## Dumping data for table `#__{vm}_order_status`
##

$db->query("
INSERT INTO `#__{vm}_order_status` VALUES (1, 'P', '��������', 1, 1)
, (2, 'C', '������������', 2, 1)
, (3, 'X', '��������', 3, 1)
, (4, 'R', '��������', 4, 1)
, (5, 'S', '����������', 5, 1);
");
## --------------------------------------------------------

##
## Table structure for table `#__{vm}_order_user_info`
##

$db->query("
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
)  COMMENT='������ ���������� ��������� � ��' AUTO_INCREMENT=1 ;
");
##
## Dumping data for table `#__{vm}_order_user_info`
##


## --------------------------------------------------------

##
## Table structure for table `#__{vm}_orders`
##

$db->query("
CREATE TABLE IF NOT EXISTS `#__vm_orders` (
  `order_id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL default '0',
  `vendor_id` int(11) NOT NULL default '0',
  `order_number` varchar(32) default NULL,
  `user_info_id` varchar(32) default NULL,
  `order_total` decimal(15,2) NOT NULL default '0.00',
  `order_subtotal` decimal(15,5) default NULL,
  `order_tax` decimal(10,2) default NULL,
  `order_tax_details` text NOT NULL,
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
)  COMMENT='������������ ��� �������� �����?' AUTO_INCREMENT=1 ;
");
##
## Dumping data for table `#__{vm}_orders`
##


## --------------------------------------------------------

##
## Table structure for table `#__{vm}_payment_method`
##

$db->query("
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
)  COMMENT='������ ������ ��� ������ �������' AUTO_INCREMENT=1 ;
");
##
## Dumping data for table `#__{vm}_payment_method`
##


## --------------------------------------------------------

##
## Table structure for table `#__{vm}_product`
##

$db->query("
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
)  COMMENT='��� ������ �������� �����' AUTO_INCREMENT=16 ;
");
##
## Dumping data for table `#__{vm}_product`
##


## --------------------------------------------------------

##
## Table structure for table `#__{vm}_product_attribute`
##

$db->query("
CREATE TABLE IF NOT EXISTS `#__vm_product_attribute` (
  `product_id` int(11) NOT NULL default '0',
  `attribute_name` char(255) NOT NULL default '',
  `attribute_value` char(255) NOT NULL default '',
  KEY `idx_product_attribute_product_id` (`product_id`),
  KEY `idx_product_attribute_name` (`attribute_name`)
)  COMMENT='�������� ��������  � �� �������� ';
");
##
## Dumping data for table `#__{vm}_product_attribute`
##


## --------------------------------------------------------

##
## Table structure for table `#__{vm}_product_attribute_sku`
##

$db->query("
CREATE TABLE IF NOT EXISTS `#__vm_product_attribute_sku` (
  `product_id` int(11) NOT NULL default '0',
  `attribute_name` char(255) NOT NULL default '',
  `attribute_list` int(11) NOT NULL default '0',
  KEY `idx_product_attribute_sku_product_id` (`product_id`),
  KEY `idx_product_attribute_sku_attribute_name` (`attribute_name`),
  KEY `idx_product_attribute_list` (`attribute_list`)
)  COMMENT='�������� ��� ������������ �����';
");
##
## Dumping data for table `#__{vm}_product_attribute_sku`
##


## --------------------------------------------------------

##
## Table structure for table `#__{vm}_product_category_xref`
##

$db->query("
CREATE TABLE IF NOT EXISTS `#__vm_product_category_xref` (
  `category_id` int(11) NOT NULL default '0',
  `product_id` int(11) NOT NULL default '0',
  `product_list` int(11) default NULL,
  KEY `idx_product_category_xref_category_id` (`category_id`),
  KEY `idx_product_category_xref_product_id` (`product_id`),
  KEY `idx_product_category_xref_product_list` (`product_list`)
)  COMMENT='������ ������-���������';
");
##
## Dumping data for table `#__{vm}_product_category_xref`
##


## --------------------------------------------------------

##
## Table structure for table `#__{vm}_product_discount`
##

$db->query( "CREATE TABLE IF NOT EXISTS IF NOT EXISTS `#__{vm}_product_discount` (
  `discount_id` int(11) NOT NULL auto_increment,
  `amount` decimal(12,2) NOT NULL default '0.00',
  `is_percent` tinyint(1) NOT NULL default '0',
  `start_date` int(11) NOT NULL default '0',
  `end_date` int(11) NOT NULL default '0',
  PRIMARY KEY  (`discount_id`)
)  COMMENT='���������� ������'; ");


## --------------------------------------------------------

##
## Table structure for table `#__{vm}_product_download`
##

$db->query("
CREATE TABLE IF NOT EXISTS `#__vm_product_download` (
  `product_id` int(11) NOT NULL default '0',
  `user_id` int(11) NOT NULL default '0',
  `order_id` int(11) NOT NULL default '0',
  `end_date` int(11) NOT NULL default '0',
  `download_max` int(11) NOT NULL default '0',
  `download_id` varchar(32) NOT NULL default '',
  `file_name` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`download_id`)
)  COMMENT='�������� ���������� ��� �������';
");
##
## Dumping data for table `#__{vm}_product_download`
##


## --------------------------------------------------------

##
## Table structure for table `#__{vm}_product_files`
##

$db->query("
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
)  COMMENT='�������������� ����������� � ��' AUTO_INCREMENT=1 ;
");
##
## Dumping data for table `#__{vm}_product_files`
##


## --------------------------------------------------------

##
## Table structure for table `#__{vm}_product_mf_xref`
##

$db->query("
CREATE TABLE IF NOT EXISTS `#__vm_product_mf_xref` (
  `product_id` int(11) default NULL,
  `manufacturer_id` int(11) default NULL,
  KEY `idx_product_mf_xref_product_id` (`product_id`),
  KEY `idx_product_mf_xref_manufacturer_id` (`manufacturer_id`)
)  COMMENT='������ �����-�������������';
");
##
## Dumping data for table `#__{vm}_product_mf_xref`
##


## --------------------------------------------------------

##
## Table structure for table `#__{vm}_product_price`
##

$db->query("
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
)  COMMENT='���� �� �����' AUTO_INCREMENT=277 ;
");
##
## Dumping data for table `#__{vm}_product_price`
##


## --------------------------------------------------------

##
## Table structure for table `#__{vm}_product_product_type_xref`
##

$db->query("
CREATE TABLE IF NOT EXISTS `#__vm_product_product_type_xref` (
  `product_id` int(11) NOT NULL default '0',
  `product_type_id` int(11) NOT NULL default '0',
  KEY `idx_product_product_type_xref_product_id` (`product_id`),
  KEY `idx_product_product_type_xref_product_type_id` (`product_type_id`)
)  COMMENT='������ �����-��� ������';
");
##
## Dumping data for table `#__{vm}_product_product_type_xref`
##


## --------------------------------------------------------

##
## Table structure for table `#__{vm}_product_relations`
##

$db->query("
CREATE TABLE IF NOT EXISTS `#__vm_product_relations` (
  `product_id` int(11) NOT NULL default '0',
  `related_products` text,
  PRIMARY KEY  (`product_id`)
) ;
");
##
## Dumping data for table `#__{vm}_product_relations`
##


## --------------------------------------------------------

##
## Table structure for table `#__{vm}_product_reviews`
##

$db->query("
CREATE TABLE IF NOT EXISTS `#__vm_product_reviews` (
  `product_id` varchar(255) NOT NULL default '',
  `comment` text NOT NULL,
  `userid` int(11) NOT NULL default '0',
  `time` int(11) NOT NULL default '0',
  `user_rating` tinyint(1) NOT NULL default '0',
  `review_ok` int(11) NOT NULL default '0',
  `review_votes` int(11) NOT NULL default '0'
) ;
");
##
## Dumping data for table `#__{vm}_product_reviews`
##


## --------------------------------------------------------

##
## Table structure for table `#__{vm}_product_type`
##

$db->query("
CREATE TABLE IF NOT EXISTS `#__vm_product_type` (
  `product_type_id` int(11) NOT NULL auto_increment,
  `product_type_name` varchar(255) NOT NULL default '',
  `product_type_description` text,
  `product_type_publish` char(1) default NULL,
  `product_type_browsepage` varchar(255) default NULL,
  `product_type_flypage` varchar(255) default NULL,
  `product_type_list_order` int(11) default NULL,
  PRIMARY KEY  (`product_type_id`)
)  AUTO_INCREMENT=1 ;
");
##
## Dumping data for table `#__{vm}_product_type`
##


## --------------------------------------------------------

##
## Table structure for table `#__{vm}_product_type_parameter`
##

$db->query("
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
");
##
## Dumping data for table `#__{vm}_product_type_parameter`
##


## --------------------------------------------------------

##
## Table structure for table `#__{vm}_product_votes`
##

$db->query("
CREATE TABLE IF NOT EXISTS `#__vm_product_votes` (
  `product_id` int(255) NOT NULL default '0',
  `votes` text NOT NULL,
  `allvotes` int(11) NOT NULL default '0',
  `rating` tinyint(1) NOT NULL default '0',
  `lastip` varchar(50) NOT NULL default '0'
)  COMMENT='��� ������ ��� ������';
");
##
## Dumping data for table `#__{vm}_product_votes`
##


## --------------------------------------------------------

##
## Table structure for table `#__{vm}_shipping_carrier`
##

$db->query("
CREATE TABLE IF NOT EXISTS `#__vm_shipping_carrier` (
  `shipping_carrier_id` int(11) NOT NULL auto_increment,
  `shipping_carrier_name` char(80) NOT NULL default '',
  `shipping_carrier_list_order` int(11) NOT NULL default '0',
  PRIMARY KEY  (`shipping_carrier_id`)
)  COMMENT='������� �������� ��� ����������' AUTO_INCREMENT=2 ;
");
##
## Dumping data for table `#__{vm}_shipping_carrier`
##


## --------------------------------------------------------

##
## Table structure for table `#__{vm}_shipping_rate`
##

$db->query("

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
)  COMMENT='������ �������� ��� �����������?' AUTO_INCREMENT=1 ;
");
##
## Dumping data for table `#__{vm}_shipping_rate`
##


## --------------------------------------------------------

##
## Table structure for table `#__{vm}_shopper_group`
##

$db->query("
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
)  COMMENT='������ ��������' AUTO_INCREMENT=8 ;
");
##
## Dumping data for table `#__{vm}_shopper_group`
##

$db->query("
INSERT INTO `#__{vm}_shopper_group` VALUES (5, 1, '-�� ���������-', '��� ����������� ������ ��������.', 0.00, 1, 1)
, (6, 1, '�����������������', '����������������� ������� ��������.', 0.00, 1, 0)
, (7, 1, '��������', '��������, ������� �������� ������.', 0.00, 0, 0);
");

## --------------------------------------------------------

##
## Table structure for table `#__{vm}_shopper_vendor_xref`
##

$db->query("
CREATE TABLE IF NOT EXISTS `#__vm_shopper_vendor_xref` (
  `user_id` int(11) default NULL,
  `vendor_id` int(11) default NULL,
  `shopper_group_id` int(11) default NULL,
  `customer_number` varchar(32) default NULL,
  KEY `idx_shopper_vendor_xref_user_id` (`user_id`),
  KEY `idx_shopper_vendor_xref_vendor_id` (`vendor_id`),
  KEY `idx_shopper_vendor_xref_shopper_group_id` (`shopper_group_id`)
)  COMMENT='������ ������ ��������-��������';
");
##
## Dumping data for table `#__{vm}_shopper_vendor_xref`
##


## --------------------------------------------------------

##
## Table structure for table `#__{vm}_state`
##

$db->query("
CREATE TABLE IF NOT EXISTS `#__vm_state` (
  `state_id` int(11) NOT NULL auto_increment,
  `country_id` int(11) NOT NULL default '1',
  `state_name` varchar(64) default NULL,
  `state_3_code` char(3) default NULL,
  `state_2_code` char(2) default NULL,
  PRIMARY KEY  (`state_id`),
  UNIQUE KEY `state_3_code` (`state_3_code`,`state_2_code`),
  KEY `idx_country_id` (`country_id`)
)  COMMENT='�������' AUTO_INCREMENT=255 ;
");
##
## Dumping data for table `#__{vm}_state`
##

$db->query("INSERT INTO `#__{vm}_state` VALUES (1, 223, 'Alabama', 'ALA', 'AL'),
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
(165, 44, 'Zhejiang', 'ZHE', 'ZH'),
(245, 176, '�������� ��������� ���������� �����', 'AGB', '80'),
(166, 176, '������ ����������', 'AD', '01'),
(169, 176, '����� ����������', 'AL', '04'),
(187, 176, '��������� ����', 'ALT', '22'),
(193, 176, '�������� �������', 'AMU', '28'),
(194, 176, '������������� �������', 'ARK', '29'),
(195, 176, '������������ �������', 'AST', '30'),
(167, 176, '������������ ����������', 'BA', '02'),
(196, 176, '������������ �������', 'BEL', '31'),
(197, 176, '�������� �������', 'BRY', '32'),
(168, 176, '������� ����������', 'BU', '03'),
(198, 176, '������������ �������', 'VLA', '33'),
(199, 176, '������������� �������', 'VGG', '34'),
(200, 176, '����������� �������', 'VLG', '35'),
(201, 176, '����������� �������', 'VOR', '36'),
(170, 176, '�������� ����������', 'DA', '05'),
(244, 176, '��������� ���������� �������', 'YEV', '79'),
(202, 176, '���������� �������', 'IVA', '37'),
(171, 176, '��������� ����������', 'IN', '06'),
(203, 176, '��������� �������', 'IRK', '38'),
(172, 176, '���������-���������� ����������', 'KB', '07'),
(204, 176, '��������������� �������', 'KGD', '39'),
(173, 176, '�������� ����������', 'KL', '08'),
(205, 176, '��������� �������', 'KLU', '40'),
(206, 176, '���������� ����', 'KAM', '41'),
(174, 176, '���������-���������� ����������', 'KC', '09'),
(175, 176, '������� ����������', 'KR', '10'),
(207, 176, '����������� �������', 'KEM', '42'),
(208, 176, '��������� �������', 'KIR', '43'),
(176, 176, '���� ����������', 'KO', '11'),
(209, 176, '����������� �������', 'KOS', '44'),
(188, 176, '������������� ����', 'KDA', '23'),
(189, 176, '������������ ����', 'KIA', '24'),
(210, 176, '���������� �������', 'KGN', '45'),
(211, 176, '������� �������', 'KRS', '46'),
(212, 176, '������������� �������', 'LEN', '47'),
(213, 176, '�������� �������', 'LIP', '48'),
(214, 176, '����������� �������', 'MAG', '49'),
(177, 176, '����� �� ����������', 'ME', '12'),
(178, 176, '�������� ����������', 'MO', '13'),
(242, 176, '������', 'MOW', '77'),
(215, 176, '���������� �������', 'MOS', '50'),
(216, 176, '���������� �������', 'MUR', '51'),
(248, 176, '�������� ���������� �����', 'NEN', '83'),
(217, 176, '������������� �������', 'NIZ', '52'),
(218, 176, '������������ �������', 'NGR', '53'),
(219, 176, '������������� �������', 'NVS', '54'),
(220, 176, '������ �������', 'OMS', '55'),
(221, 176, '������������ �������', 'ORE', '56'),
(222, 176, '��������� �������', 'ORL', '57'),
(223, 176, '���������� �������', 'PNZ', '58'),
(224, 176, '�������� ����', 'PER', '59'),
(190, 176, '���������� ����', 'PRI', '25'),
(225, 176, '��������� �������', 'PSK', '60'),
(226, 176, '���������� �������', 'ROS', '61'),
(227, 176, '��������� �������', 'RYA', '62'),
(228, 176, '��������� �������', 'SAM', '63'),
(243, 176, '�����-���������', 'SPE', '78'),
(229, 176, '����������� �������', 'SAR', '64'),
(230, 176, '����������� �������', 'SAK', '65'),
(179, 176, '���� (������) ����������', 'SA', '14'),
(231, 176, '������������ �������', 'SVE', '66'),
(180, 176, '�������� ������-������ ����������', 'SE', '15'),
(232, 176, '���������� �������', 'SMO', '67'),
(191, 176, '�������������� ����', 'STA', '26'),
(233, 176, '���������� �������', 'TAM', '68'),
(181, 176, '��������� ����������', 'TA', '16'),
(234, 176, '�������� �������', 'TVE', '69'),
(235, 176, '������� �������', 'TOM', '70'),
(236, 176, '�������� �������', 'TUL', '71'),
(182, 176, '���� ����������', 'TY', '17'),
(237, 176, '��������� �������', 'TYU', '72'),
(183, 176, '���������� ����������', 'UD', '18'),
(238, 176, '����������� �������', 'ULY', '73'),
(250, 176, '����-��������� ��������� ���������� �����', 'UOB', '85'),
(192, 176, '����������� ����', 'KHA', '27'),
(184, 176, '������� ����������', 'KK', '19'),
(251, 176, '�����-���������� ���������� �����', 'KHM', '86'),
(239, 176, '����������� �������', 'CHE', '74'),
(185, 176, '��������� ����������', 'CE', '20'),
(240, 176, '��������� �������', 'CHI', '75'),
(186, 176, '��������� ����������', 'CU', '21'),
(252, 176, '��������� ���������� �����', 'CHU', '87'),
(254, 176, '�����-�������� ���������� �����', 'YAN', '89'),
(241, 176, '����������� �������', 'YAR', '76')
; " );

## --------------------------------------------------------

##
## Table structure for table `#__{vm}_tax_rate`
##

$db->query("
CREATE TABLE IF NOT EXISTS `#__vm_tax_rate` (
  `tax_rate_id` int(11) NOT NULL auto_increment,
  `vendor_id` int(11) default NULL,
  `tax_state` varchar(64) default NULL,
  `tax_country` varchar(64) default NULL,
  `mdate` int(11) default NULL,
  `tax_rate` decimal(10,4) default NULL,
  PRIMARY KEY  (`tax_rate_id`),
  KEY `idx_tax_rate_vendor_id` (`vendor_id`)
)  COMMENT='������ ��������' AUTO_INCREMENT=4 ;
");
##
## Dumping data for table `#__{vm}_tax_rate`
##

$db->query("INSERT INTO `#__vm_tax_rate` VALUES (2, 1, 'CA', 'USA', 964565926, 0.0825);");
$db->query("INSERT INTO `#__vm_tax_rate` VALUES (3, 1, '���', '���������� ���������', 4556755, 0.013);");

## --------------------------------------------------------

##
## Table structure for table `#__{vm}_user_info`
##

$db->query("
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
)  COMMENT='���������� � ������� BT = ��������';
");
##
## Dumping data for table `#__{vm}_user_info`
##


## --------------------------------------------------------

##
## Table structure for table `#__{vm}_vendor`
##

$db->query("
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
)  COMMENT='��������' AUTO_INCREMENT=3 ;
");
##
## Dumping data for table `#__{vm}_vendor`
##
$db->query(
" INSERT INTO `#__{vm}_vendor` VALUES (1, '3456.ru', '������', '��������', '�����������', '�������������', '8-926-223-49-05', '8-926-223-49-05', '8-926-223-49-05', 'wov2004@gmail.com', '8-926-223-49-05', '', '', '�������', '50', 'RUS', '140007', '3456.ru', '<p align=\"center\">��� ���������������� ������� VirtueMart ��� CMS Joomla.</p><p align=\"center\">������ �� ������������, �� ��������� � �� ������������.</p><p align=\"center\">���� ����� ��� ����������, �������� �� ���� <a href=\"http://3456.ru\">������ ������</a>  </p>', 0, '', '9e974f0a64262e06d0a145b19fe8e51c.gif', 'RUB', 950302468, 1165668615, 'shop_image/', '<p align=\"center\">��� ���������������� ������� VirtueMart ��� CMS Joomla.</p><p align=\"center\">������ �� ������������, �� ��������� � �� ������������.</p><p align=\"center\">���� ����� ��� ����������, �������� �� ���� <a href=\"http://3456.ru/\">������ ������</a>  </p>', 'http://3456.ru', 0.00, 0.00, '1|���\0|0|,| |1|8')
");
## --------------------------------------------------------

##
## Table structure for table `#__{vm}_vendor_category`
##

$db->query("
CREATE TABLE IF NOT EXISTS `#__vm_vendor_category` (
  `vendor_category_id` int(11) NOT NULL auto_increment,
  `vendor_category_name` varchar(64) default NULL,
  `vendor_category_desc` text,
  PRIMARY KEY  (`vendor_category_id`),
  KEY `idx_vendor_category_category_name` (`vendor_category_name`)
)  COMMENT='��������� ���������' AUTO_INCREMENT=7 ;
");
##
## Dumping data for table `#__{vm}_vendor_category`
##

$db->query("INSERT INTO `#__{vm}_vendor_category` VALUES (6, '-�� ���������-', '�����������');");

## --------------------------------------------------------

##
## Table structure for table `#__{vm}_visit`
##

$db->query("
CREATE TABLE IF NOT EXISTS `#__{vm}_visit` (
  `visit_id` varchar(255) NOT NULL default '',
  `affiliate_id` int(11) NOT NULL default '0',
  `pages` int(11) NOT NULL default '0',
  `entry_page` varchar(255) NOT NULL default '',
  `exit_page` varchar(255) NOT NULL default '',
  `sdate` int(11) NOT NULL default '0',
  `edate` int(11) NOT NULL default '0',
  PRIMARY KEY  (`visit_id`)
)  COMMENT='������ � ��������� ���������';
");
##
## Dumping data for table `#__{vm}_visit`
##


## --------------------------------------------------------

##
## Table structure for table `#__{vm}_waiting_list`
##

$db->query("
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
) TYPE=MyISAM COMMENT='�����������';
");
##
## Dumping data for table `#__{vm}_waiting_list`
##


## --------------------------------------------------------

##
## Table structure for table `#__{vm}_zone_shipping`
##

$db->query("
CREATE TABLE IF NOT EXISTS `#__vm_zone_shipping` (
  `zone_id` int(11) NOT NULL auto_increment,
  `zone_name` varchar(255) default NULL,
  `zone_cost` decimal(10,2) default NULL,
  `zone_limit` decimal(10,2) default NULL,
  `zone_description` text NOT NULL,
  `zone_tax_rate` int(11) NOT NULL default '0',
  PRIMARY KEY  (`zone_id`),
  KEY `zone_id` (`zone_id`)
)  COMMENT='���� ���  ������ �������� �� ����' AUTO_INCREMENT=1 ;
");
##
## Dumping data for table `#__{vm}_zone_shipping`
##

$db->query( "INSERT INTO `#__{vm}_zone_shipping` VALUES (1, '�� ���������', 6.00, 35.00, '��� ���� �������� �� ���������. ��� ���� ����� �������������� ���� �� �� ��������� ������ ������ ���� ����.', 2),
(2, 'Zone 1', 1000.00, 10000.00, '������ ����', 2),
(3, 'Zone 2', 2.00, 22.00, '��� ������ ����. �� ������ ������������ ��� ����, ����� ������ ������� � ����.', 2),
(4, 'Zone 3', 11.00, 64.00, '����� ��������� ��� ������������ � ���� ��� ����������� ���������.', 2);
");

/**
 * You wonder why users are visible in VirtueMart after installation?
 * Well, because we add them here.
 */
$db->query( "SELECT `id`, `email`, `registerDate`, `lastvisitDate` FROM `#__users`");
$row = $db->loadObjectList();
foreach( $row as $user) {
	$db->query( "INSERT INTO `#__{vm}_auth_user_vendor` VALUES ('".$user->id."', '1');" );
	$db->query( "INSERT INTO `#__{vm}_shopper_vendor_xref` VALUES ('".$user->id."', '1', '5', '');" );
	$db->query( "INSERT INTO `#__{vm}_user_info` (`user_info_id`,`user_id`, `address_type`,`cdate`,`mdate`,`user_email` )
					VALUES( '".md5(uniqid('virtuemart'))."','".$user->id."','BT', UNIX_TIMESTAMP('".$user->registerDate."'),UNIX_TIMESTAMP('".$user->lastvisitDate."'),'".$user->email."');" );
}

$db->query( "INSERT INTO `#__{vm}_payment_method` VALUES (1, 1, '������ ��� ������', '', 6, '0.00', 4, 'PO', 'N', 0, 'Y', '', '', '');" );
$db->query( "INSERT INTO `#__{vm}_payment_method` VALUES (2, 1, '������ ��� ���������', '', 5, '-2.00', 5, 'COD', 'N', 0, 'Y', '', '', '');" );
$db->query( "INSERT INTO `#__{vm}_payment_method` VALUES (3, 1, '������ �� ��������� �����', 'ps_authorize', 5, '0.00', 0, 'AN', 'Y', 0, 'Y', '1,2,6,7,', '', '');
" );
$db->query( "INSERT INTO `#__{vm}_payment_method` VALUES (4, 1, '������ ����� PayPal', 'ps_paypal', 5, '0.00', 0, 'PP', 'P', 0, 'Y', '', '', '');
" );
$db->query( "INSERT INTO `#__{vm}_payment_method` VALUES (5, 1, 'PayMate', 'ps_paymate', 5, '0.00', 0, 'PM', 'P', 0, 'N', '', '<script type=\"text/javascript\" language=\"javascript\">
  function openExpress(){
	var url = \'https://www.paymate.com.au/PayMate/ExpressPayment?mid=<?php echo PAYMATE_USERNAME.
	  \"&amt=\".\$db->f(\"order_total\").
	  \"&currency=\".\$_SESSION[\'vendor_currency\'].
	  \"&ref=\".\$db->f(\"order_id\").
	  \"&pmt_sender_email=\".\$user->email.
	  \"&pmt_contact_firstname=\".\$user->first_name.
	  \"&pmt_contact_surname=\".\$user->last_name.
	  \"&regindi_address1=\".\$user->address_1.
	  \"&regindi_address2=\".\$user->address_2.
	  \"&regindi_sub=\".\$user->city.
	  \"&regindi_pcode=\".\$user->zip;?>\'
	var newWin = window.open(url, \'wizard\', \'height=640,width=500,scrollbars=0,toolbar=no\');
	self.name = \'parent\';
	newWin.focus();
  }
  </script>
  <div align=\"center\">
  <p>
  <a href=\"javascript:openExpress();\">
  <img src=\"https://www.paymate.com.au/homepage/images/butt_PayNow.gif\" border=\"0\" alt=\"Pay with Paymate Express\">
  <br />click here to pay your account</a>
  </p>
  </div>', '');" );
$db->query( "INSERT INTO `#__{vm}_payment_method` VALUES (6, 1, 'WorldPay', 'ps_worldpay', 5, '0.00', 0, 'WP', 'P', 0, 'N', '', '<form action=\"https://select.worldpay.com/wcc/purchase\" method=\"post\">
						  <input type=hidden name=\"testMode\" value=\"100\">
						  <input type=\"hidden\" name=\"instId\" value=\"<?php echo WORLDPAY_INST_ID ?>\" />
						  <input type=\"hidden\" name=\"cartId\" value=\"<?php echo \$db->f(\"order_id\") ?>\" />
						  <input type=\"hidden\" name=\"amount\" value=\"<?php echo \$db->f(\"order_total\") ?>\" />
						  <input type=\"hidden\" name=\"currency\" value=\"<?php echo \$_SESSION[\'vendor_currency\'] ?>\" />
						  <input type=\"hidden\" name=\"desc\" value=\"Products\" />
						  <input type=\"hidden\" name=\"email\" value=\"<?php echo \$user->email?>\" />
						  <input type=\"hidden\" name=\"address\" value=\"<?php echo \$user->address_1?>&#10<?php echo \$user->address_2?>&#10<?php echo
						  \$user->city?>&#10<?php echo \$user->state?>\" />
						  <input type=\"hidden\" name=\"name\" value=\"<?php echo \$user->title?><?php echo \$user->first_name?>. <?php echo \$user->middle_name?><?php echo \$user->last_name?>\" />
						  <input type=\"hidden\" name=\"country\" value=\"<?php echo \$user->country?>\"/>
						  <input type=\"hidden\" name=\"postcode\" value=\"<?php echo \$user->zip?>\" />
						  <input type=\"hidden\" name=\"tel\"  value=\"<?php echo \$user->phone_1?>\">
						  <input type=\"hidden\" name=\"withDelivery\"  value=\"true\">
						  <br />
						  <input type=\"submit\" value =\"PROCEED TO PAYMENT PAGE\" />
						  </form>', '');
						  " );
$db->query( "INSERT INTO `#__{vm}_payment_method` VALUES (7, 1, '2Checkout', 'ps_twocheckout', 5, '0.00', 0, '2CO', 'P', 0, 'N', '', '<?php
	\$q  = \"SELECT * FROM #__users WHERE user_info_id=\'\".\$db->f(\"user_info_id\").\"\'\";
	\$dbbt = new ps_DB;
	\$dbbt->setQuery(\$q);
	\$dbbt->query();
	\$dbbt->next_record();
	// Get ship_to information
	if( \$db->f(\"user_info_id\") != \$dbbt->f(\"user_info_id\")) {
	  \$q2  = \"SELECT * FROM #__{vm}_user_info WHERE user_info_id=\'\".\$db->f(\"user_info_id\").\"\'\";
	  \$dbst = new ps_DB;
	  \$dbst->setQuery(\$q2);
	  \$dbst->query();
	  \$dbst->next_record();
	}
	else  {
	  \$dbst = \$dbbt;
	}

	//Authnet vars to send
	\$formdata = array (
	 \'x_login\' => TWOCO_LOGIN,
	 \'x_email_merchant\' => ((TWOCO_MERCHANT_EMAIL == \'True\') ? \'TRUE\' : \'FALSE\'),

	 // Customer Name and Billing Address
	 \'x_first_name\' => \$dbbt->f(\"first_name\"),
	 \'x_last_name\' => \$dbbt->f(\"last_name\"),
	 \'x_company\' => \$dbbt->f(\"company\"),
	 \'x_address\' => \$dbbt->f(\"address_1\"),
	 \'x_city\' => \$dbbt->f(\"city\"),
	 \'x_state\' => \$dbbt->f(\"state\"),
	 \'x_zip\' => \$dbbt->f(\"zip\"),
	 \'x_country\' => \$dbbt->f(\"country\"),
	 \'x_phone\' => \$dbbt->f(\"phone_1\"),
	 \'x_fax\' => \$dbbt->f(\"fax\"),
	 \'x_email\' => \$dbbt->f(\"email\"),

	 // Customer Shipping Address
	 \'x_ship_to_first_name\' => \$dbst->f(\"first_name\"),
	 \'x_ship_to_last_name\' => \$dbst->f(\"last_name\"),
	 \'x_ship_to_company\' => \$dbst->f(\"company\"),
	 \'x_ship_to_address\' => \$dbst->f(\"address_1\"),
	 \'x_ship_to_city\' => \$dbst->f(\"city\"),
	 \'x_ship_to_state\' => \$dbst->f(\"state\"),
	 \'x_ship_to_zip\' => \$dbst->f(\"zip\"),
	 \'x_ship_to_country\' => \$dbst->f(\"country\"),

	 \'x_invoice_num\' => \$db->f(\"order_number\"),
	 \'x_receipt_link_url\' => SECUREURL.\"2checkout_notify.php\"
	 );

	if( TWOCO_TESTMODE == \"Y\" )
	  \$formdata[\'demo\'] = \"Y\";

	 \$version = \"2\";
	 \$url = \"https://www2.2checkout.com/2co/buyer/purchase\";
	 \$formdata[\'x_amount\'] = number_format(\$db->f(\"order_total\"), 2, \'.\', \'\');

	 //build the post string
	 \$poststring = \'\';
	 foreach(\$formdata AS \$key => \$val){
	   \$poststring .= \"<input type=\'hidden\' name=\'\$key\' value=\'\$val\' />
	\";
	 }

	?>
	<form action=\"<?php echo \$url ?>\" method=\"post\" target=\"_blank\">
	<?php echo \$poststring ?>
	<p>Click on the Image below to pay...</p>
	<input type=\"image\" name=\"submit\" src=\"https://www.2checkout.com/images/buy_logo.gif\" border=\"0\" alt=\"Make payments with 2Checkout, it\'s fast and secure!\" title=\"Pay your Order with 2Checkout, it\'s fast and secure!\" />
	</form>', '');
	" );
$db->query( "INSERT INTO `#__{vm}_payment_method` VALUES (8, 1, '������ �� NoChex', 'ps_nochex', 5, '0.00', 0, 'NOCHEX', 'P', 0, 'N', '', '<form action=\"https://www.nochex.com/nochex.dll/checkout\" method=post target=\"_blank\">
											<input type=\"hidden\" name=\"email\" value=\"<?php echo NOCHEX_EMAIL ?>\" />
											<input type=\"hidden\" name=\"amount\" value=\"<?php printf(\"%.2f\", \$db->f(\"order_total\"))?>\" />
											<input type=\"hidden\" name=\"ordernumber\" value=\"<?php \$db->p(\"order_id\") ?>\" />
											<input type=\"hidden\" name=\"logo\" value=\"<?php echo \$vendor_image_url ?>\" />
											<input type=\"hidden\" name=\"returnurl\" value=\"<?php echo SECUREURL .\"index.php?option=com_virtuemart&amp;page=checkout.result&amp;order_id=\".\$db->f(\"order_id\") ?>\" />
											<input type=\"image\" name=\"submit\" src=\"http://www.nochex.com/web/images/paymeanimated.gif\">
											</form>', '');" );
$db->query( "INSERT INTO `#__{vm}_payment_method` VALUES (9, 1, '������ �� ��������� ����� (PayMeNow)', 'ps_paymenow', 5, '0.00', 0, 'PN', 'Y', 0, 'N', '1,2,3,', '', '');" );
$db->query( "INSERT INTO `#__{vm}_payment_method` VALUES (10, 1, '������ �� eWay', 'ps_eway', 5, '0.00', 0, 'EW', 'Y', 0, 'N', '', '', '');");
$db->query( "INSERT INTO `#__{vm}_payment_method` VALUES (11, 1, '������ �� eCheck.net', 'ps_echeck', 5, '0.00', 0, 'ECK', 'B', 0, 'N', '', '', '');");
$db->query( "INSERT INTO `#__{vm}_payment_method` VALUES (12, 1, '������ �� ��������� ����� (eProcessingNetwork)', 'ps_epn', 5, '0.00', 0, 'EPN', 'Y', 0, 'N', '1,2,3,', '', '');" );
$db->query( "INSERT INTO `#__{vm}_payment_method` VALUES (13, 1, '������ �� iKobo', '', 5, '0.00', 0, 'IK', 'P', 0, 'N', '', '<form action=\"https://www.iKobo.com/store/index.php\" method=\"post\">
  <input type=\"hidden\" name=\"cmd\" value=\"cart\" />�������� �� �������� ���� ����� �������� Pay with iKobo
  <input type=\"image\" src=\"https://www.ikobo.com/merchant/buttons/ikobo_pay1.gif\" name=\"submit\" alt=\"������� ����� iKobo\" />
  <input type=\"hidden\" name=\"poid\" value=\"USER_ID\" />
  <input type=\"hidden\" name=\"item\" value=\"Order: <?php \$db->p(\"order_id\") ?>\" />
  <input type=\"hidden\" name=\"price\" value=\"<?php printf(\"%.2f\", \$db->f(\"order_total\"))?>\" />
  <input type=\"hidden\" name=\"firstname\" value=\"<?php echo \$user->first_name?>\" />
  <input type=\"hidden\" name=\"lastname\" value=\"<?php echo \$user->last_name?>\" />
  <input type=\"hidden\" name=\"address\" value=\"<?php echo \$user->address_1?>&#10<?php echo \$user->address_2?>\" />
  <input type=\"hidden\" name=\"city\" value=\"<?php echo \$user->city?>\" />
  <input type=\"hidden\" name=\"state\" value=\"<?php echo \$user->state?>\" />
  <input type=\"hidden\" name=\"zip\" value=\"<?php echo \$user->zip?>\" />
  <input type=\"hidden\" name=\"phone\" value=\"<?php echo \$user->phone_1?>\" />
  <input type=\"hidden\" name=\"email\" value=\"<?php echo \$user->email?>\" />
  </form> >', '');
  ");
$db->query( "INSERT INTO `#__{vm}_payment_method` VALUES (14, 1, '������ �� iTransact', '', 5, '0.00', 0, 'ITR', 'P', 0, 'N', '', '<?php
  //your iTransact account details
  \$vendorID = \"XXXXX\";
  global \$vendor_name;
  \$mername = \$vendor_name;

  //order details
  \$total = \$db->f(\"order_total\");\$first_name = \$user->first_name;\$last_name = \$user->last_name;\$address = \$user->address_1;\$city = \$user->city;\$state = \$user->state;\$zip = \$user->zip;\$country = \$user->country;\$email = \$user->email;\$phone = \$user->phone_1;\$home_page = \$mosConfig_live_site.\"/index.php\";\$ret_addr = \$mosConfig_live_site.\"/index.php\";\$cc_payment_image = \$mosConfig_live_site.\"/components/com_virtuemart/shop_image/ps_image/cc_payment.jpg\";
  ?>
  <form action=\"https://secure.paymentclearing.com/cgi-bin/mas/split.cgi\" method=\"POST\">
		<input type=\"hidden\" name=\"vendor_id\" value=\"<?php echo \$vendorID; ?>\" />
		<input type=\"hidden\" name=\"home_page\" value=\"<?php echo \$home_page; ?>\" />
		<input type=\"hidden\" name=\"ret_addr\" value=\"<?php echo \$ret_addr; ?>\" />
		<input type=\"hidden\" name=\"mername\" value=\"<?php echo \$mername; ?>\" />
		<!--Enter text in the next value that should appear on the bottom of the order form.-->
		<INPUT type=\"hidden\" name=\"mertext\" value=\"\" />
		<!--If you are accepting checks, enter the number 1 in the next value.  Enter the number 0 if you are not accepting checks.-->
		<INPUT type=\"hidden\" name=\"acceptchecks\" value=\"0\" />
		<!--Enter the number 1 in the next value if you want to allow pre-registered customers to pay with a check.  Enter the number 0 if not.-->
		<INPUT type=\"hidden\" name=\"allowreg\" value=\"0\" />
		<!--If you are set up with Check Guarantee, enter the number 1 in the next value.  Enter the number 0 if not.-->
		<INPUT type=\"hidden\" name=\"checkguar\" value=\"0\" />
		<!--Enter the number 1 in the next value if you are accepting credit card payments.  Enter the number zero if not.-->
		<INPUT type=\"hidden\" name=\"acceptcards\" value=\"1\">
		<!--Enter the number 1 in the next value if you want to allow a separate mailing address for credit card orders.  Enter the number 0 if not.-->
		<INPUT type=\"hidden\" name=\"altaddr\" value=\"0\" />
		<!--Enter the number 1 in the next value if you want the customer to enter the CVV number for card orders.  Enter the number 0 if not.-->
		<INPUT type=\"hidden\" name=\"showcvv\" value=\"1\" />

		<input type=\"hidden\" name=\"1-desc\" value=\"Order Total\" />
		<input type=\"hidden\" name=\"1-cost\" value=\"<?php echo \$total; ?>\" />
		<input type=\"hidden\" name=\"1-qty\" value=\"1\" />
		<input type=\"hidden\" name=\"total\" value=\"<?php echo \$total; ?>\" />
		<input type=\"hidden\" name=\"first_name\" value=\"<?php echo \$first_name; ?>\" />
		<input type=\"hidden\" name=\"last_name\" value=\"<?php echo \$last_name; ?>\" />
		<input type=\"hidden\" name=\"address\" value=\"<?php echo \$address; ?>\" />
		<input type=\"hidden\" name=\"city\" value=\"<?php echo \$city; ?>\" />
		<input type=\"hidden\" name=\"state\" value=\"<?php echo \$state; ?>\" />
		<input type=\"hidden\" name=\"zip\" value=\"<?php echo \$zip; ?>\" />
		<input type=\"hidden\" name=\"country\" value=\"<?php echo \$country; ?>\" />
		<input type=\"hidden\" name=\"phone\" value=\"<?php echo \$phone; ?>\" />
		<input type=\"hidden\" name=\"email\" value=\"<?php echo \$email; ?>\" />
		<p><input type=\"image\" alt=\"Process Secure Credit Card Transaction using iTransact\" border=\"0\" height=\"60\" width=\"210\" src=\"<?php echo \$cc_payment_image; ?>\" /> </p>
		</form>', '');
		");

$db->query( "INSERT INTO `#__{vm}_payment_method` VALUES (17, 1, 'RUS yandex-������', 'ps_yandex', 5, 0.00, 0, 'YNX', 'P', 0, 'Y', '', '
<form method=POST action=\"http://money.yandex.ru/select-wallet.xml\">
<input type=hidden name=TargetCurrency value=\"643\">
<input type=hidden name=ShopID value=\"�����\">
<input type=hidden name=Currency value=\"643\">

<input type=hidden name=wbp_InactivityPeriod value=\"2\">
<input type=hidden name=wbp_ShopAddress value=\"ws1.paycash.ru:8128\">
<input type=hidden name=wbp_ShopEncryptionKey value=\"�����������������\">
<input type=hidden name=wbp_ShopErrorInfo value=\"\">
<input type=hidden name=wbp_ShopKeyID value=\"������\">
<input type=hidden name=wbp_Version value=\'1.0\'>

<input type=hidden name=InvoiceArticlesNames value=\"����������\">
<input type=hidden name=Sum value=\"�����\">
<input type=hidden name=OrderID value=\"����������\">
<input type=hidden name=CustAddr value=\"�������� ���������\">

<input type=submit value=\"��������\">
', '');");
$db->query( "INSERT INTO `#__{vm}_payment_method` VALUES (19, 1, 'RUS rupay', 'ps_rupay', 5, 0.00, 0, 'RPY', 'P', 0, 'Y', '', '<?\r\n/**********************************\r\nthis is a \"payment extra info\" code\r\n**********************************/\r\n\r\n\$task = mosGetParam(\$_REQUEST, \"task\", \"show\");\r\nrequire_once( CLASSPATH.\"payment/\".\$db->f(\"payment_class\").\".php\" );\r\n\r\n\$rupay = new ps_rupay();\r\n\r\nswitch(\$task) {\r\n  case \"send\":\r\n    \$method = mosGetParam(\$_REQUEST, \"method\");\r\n    \$amount = mosGetParam(\$_REQUEST, \"amount\");\r\n    \$currency = mosGetParam(\$_REQUEST, \"currency\");\r\n    \$order_id = intval(mosGetParam(\$_REQUEST, \"order_id\"));\r\n    \$customer_note = mosGetParam(\$_REQUEST, \"customer_note\", \"\");\r\n    if( !\$result = \$rupay->get_payment_properties( \$order_id, \$method, \$currency, \$amount ) )\r\n      echo \$VM_LANG->PHPSHOP_RUPAY_ERROR_GET_PAYMENT_PROPERTIES;\r\n    else\r\n      echo \$result;\r\n    break;\r\n\r\n  case \"check\":\r\n    if( !\$result = \$rupay->check_payment_status(  ) )\r\n      echo \$VM_LANG->PHPSHOP_RUPAY_ERROR_CHECK_PAYMENT_STATUS;\r\n    else\r\n      echo \$result;\r\n    break;\r\n\r\n  case \"show\":\r\n  default:\r\n    \$order_id = intval(mosGetParam(\$vars, \"order_id\"));\r\n    if( !\$result = \$rupay->get_payment_methods( \$order_id, \$_SESSION[\"vendor_currency\"], round( \$db->f(\"order_subtotal\")+\$tax_total-\$discount_total, 2)) ) {\r\n      echo \$VM_LANG->PHPSHOP_RUPAY_ERROR_GET_PAYMENT_METHODS;\r\n    }\r\n    else {\r\n      echo \$result;\r\n    }\r\n    break;\r\n}\r\n\r\n?>', '');");
$db->query( "INSERT INTO `#__{vm}_payment_method` VALUES (22, 1, 'RUS webmoney', 'ps_webmoney', 5, 0.00, 0, 'WBM', 'P', 0, 'Y', '', '<?php require_once( CLASSPATH. \'payment/ps_wm_paymentextra.php\' );?>', '');");
$db->query( "INSERT INTO `#__{vm}_payment_method` VALUES ('', 1, '������ �� Dankort / PBS', 'ps_pbs', 5, '0.00', 0, 'PBS', 'P', 0, 'N', '', '', '');");
$db->query( "INSERT INTO `#__{vm}_payment_method` VALUES ('', 1, '������ �� PayFlow Pro', 'ps_pfp', 5, '0.00', 0, 'PFP', 'Y', 0, 'Y', '1,2,6,7,', '', '');" );

$db->query( "INSERT INTO `#__{vm}_manufacturer` VALUES ('1', '�������������', 'info@manufacturer.com', '������ ������������� �������', '1', 'http://www.a-url.com');" );
$db->query( "INSERT INTO `#__{vm}_manufacturer_category` VALUES ('1', '-�� ���������-', '��������� �������������� �� ���������'); " );

##
## ��������� ������� `#__{vm}_rp_assign_zone`
##
$db->query("
CREATE TABLE IF NOT EXISTS `#__{vm}_rp_assign_zone` (
  `vendor_state_code` char(2) NOT NULL default '0',
  `shopper_state_code` char(2) NOT NULL default '0',
  `zone_rate` int(11) NOT NULL default '0',
  UNIQUE KEY `state of zone` (`vendor_state_code`,`shopper_state_code`)
) TYPE=MyISAM COMMENT='States that are assigned to a country';
");

##
## ���� ������ ������� `#__{vm}_rp_assign_zone`
##
$db->query("
INSERT INTO `#__{vm}_rp_assign_zone` VALUES ('23', '01', 1), ('23', '02', 2),
('23', '03', 4), ('23', '04', 3), ('23', '05', 2), ('23', '06', 2), ('23', '07', 2),
('23', '08', 2), ('23', '09', 1), ('23', '10', 3), ('23', '11', 3), ('23', '12', 2),
('23', '13', 2), ('23', '14', 5), ('23', '15', 2), ('23', '16', 2), ('23', '17', 4),
('23', '18', 2), ('23', '19', 3), ('23', '20', 3), ('23', '21', 3), ('23', '22', 3),
('23', '23', 1), ('23', '24', 3), ('23', '25', 5), ('23', '26', 1), ('23', '27', 5),
('23', '28', 5), ('23', '29', 3), ('23', '30', 2), ('23', '31', 2), ('23', '32', 2),
('23', '33', 2), ('23', '34', 2), ('23', '35', 3), ('23', '36', 2), ('23', '37', 2),
('23', '38', 4), ('23', '39', 3), ('23', '40', 2), ('23', '41', 5), ('23', '42', 3),
('23', '43', 3), ('23', '44', 2), ('23', '45', 3), ('23', '46', 2), ('23', '47', 3),
('23', '48', 2), ('23', '49', 5), ('23', '50', 3), ('23', '51', 3), ('23', '52', 2),
('23', '53', 3), ('23', '54', 3), ('23', '55', 3), ('23', '56', 3), ('23', '57', 2),
('23', '58', 2), ('23', '59', 3), ('23', '60', 3), ('23', '61', 1), ('23', '62', 2),
('23', '63', 2), ('23', '64', 2), ('23', '65', 5), ('23', '66', 3), ('23', '67', 2),
('23', '68', 2), ('23', '69', 2), ('23', '70', 3), ('23', '71', 2), ('23', '72', 3),
('23', '73', 2), ('23', '74', 3), ('23', '75', 4), ('23', '76', 2), ('23', '77', 2),
('23', '78', 3), ('23', '79', 5), ('23', '87', 5), ('23', '90', 0), ('30', '01', 2),
('30', '02', 2), ('30', '03', 4), ('30', '04', 3), ('30', '05', 1), ('30', '06', 1),
('30', '07', 2), ('30', '08', 2), ('30', '09', 2), ('30', '10', 3), ('30', '11', 3),
('30', '12', 2), ('30', '13', 2), ('30', '14', 4), ('30', '15', 2), ('30', '16', 2),
('30', '17', 3), ('30', '18', 2), ('30', '19', 3), ('30', '20', 1), ('30', '21', 2),
('30', '22', 3), ('30', '23', 2), ('30', '24', 3), ('30', '25', 5), ('30', '26', 2),
('30', '27', 5), ('30', '28', 5), ('30', '29', 3), ('30', '30', 1), ('30', '31', 2),
('30', '32', 2), ('30', '33', 2), ('30', '34', 1), ('30', '35', 2), ('30', '36', 2),
('30', '37', 2), ('30', '38', 4), ('30', '39', 3), ('30', '40', 2), ('30', '41', 5),
('30', '42', 3), ('30', '43', 2), ('30', '44', 2), ('30', '45', 3), ('30', '46', 2),
('30', '47', 3), ('30', '48', 2), ('30', '49', 5), ('30', '50', 2), ('30', '51', 3),
('30', '52', 2), ('30', '53', 3), ('30', '54', 3), ('30', '55', 3), ('30', '56', 2),
('30', '57', 2), ('30', '58', 2), ('30', '59', 3), ('30', '60', 3), ('30', '61', 2),
('30', '62', 2), ('30', '63', 2), ('30', '64', 2), ('30', '65', 5), ('30', '66', 3),
('30', '67', 2), ('30', '68', 2), ('30', '69', 2), ('30', '70', 3), ('30', '71', 2),
('30', '72', 3), ('30', '73', 2), ('30', '74', 2), ('30', '75', 4), ('30', '76', 2),
('30', '77', 2), ('30', '78', 3), ('30', '79', 5), ('30', '87', 5), ('30', '90', 0),
('47', '01', 3), ('47', '02', 3), ('47', '03', 4), ('47', '04', 3), ('47', '05', 3),
('47', '06', 3), ('47', '07', 3), ('47', '08', 3), ('47', '09', 3), ('47', '10', 1),
('47', '11', 2), ('47', '12', 2), ('47', '13', 2), ('47', '14', 5), ('47', '15', 3),
('47', '16', 2), ('47', '17', 2), ('47', '18', 2), ('47', '19', 3), ('47', '20', 3),
('47', '21', 2), ('47', '22', 3), ('47', '23', 3), ('47', '24', 3), ('47', '25', 5),
('47', '26', 3), ('47', '27', 5), ('47', '28', 5), ('47', '29', 2), ('47', '30', 3),
('47', '31', 2), ('47', '32', 2), ('47', '33', 2), ('47', '34', 2), ('47', '35', 2),
('47', '36', 2), ('47', '37', 2), ('47', '38', 4), ('47', '39', 2), ('47', '40', 2),
('47', '41', 5), ('47', '42', 3), ('47', '43', 2), ('47', '44', 2), ('47', '45', 3),
('47', '46', 2), ('47', '47', 1), ('47', '48', 2), ('47', '49', 5), ('47', '50', 2),
('47', '51', 2), ('47', '52', 2), ('47', '53', 1), ('47', '54', 3), ('47', '55', 3),
('47', '56', 3), ('47', '57', 2), ('47', '58', 2), ('47', '59', 2), ('47', '60', 1),
('47', '61', 2), ('47', '62', 2), ('47', '63', 2), ('47', '64', 2), ('47', '65', 5),
('47', '66', 3), ('47', '67', 2), ('47', '68', 2), ('47', '69', 1), ('47', '70', 3),
('47', '71', 3), ('47', '72', 3), ('47', '73', 2), ('47', '74', 3), ('47', '75', 4),
('47', '76', 2), ('47', '77', 2), ('47', '78', 1), ('47', '79', 5), ('47', '87', 5),
('50', '01', 2), ('50', '02', 2), ('50', '03', 4), ('50', '04', 3), ('50', '05', 3),
('50', '06', 2), ('50', '07', 2), ('50', '08', 2), ('50', '09', 2), ('50', '10', 2),
('50', '11', 2), ('50', '12', 2), ('50', '13', 2), ('50', '14', 4), ('50', '15', 2),
('50', '16', 2), ('50', '17', 3), ('50', '18', 2), ('50', '19', 3), ('50', '20', 2),
('50', '21', 2), ('50', '22', 3), ('50', '23', 2), ('50', '24', 3), ('50', '25', 5),
('50', '26', 2), ('50', '27', 5), ('50', '28', 4), ('50', '29', 2), ('50', '30', 2),
('50', '31', 2), ('50', '32', 1), ('50', '33', 1), ('50', '34', 2), ('50', '35', 1),
('50', '36', 1), ('50', '37', 1), ('50', '38', 4), ('50', '39', 2), ('50', '40', 1),
('50', '41', 5), ('50', '42', 3), ('50', '43', 2), ('50', '44', 1), ('50', '45', 3),
('50', '46', 1), ('50', '47', 2), ('50', '48', 1), ('50', '49', 5), ('50', '50', 1),
('50', '51', 2), ('50', '52', 1), ('50', '53', 2), ('50', '54', 3), ('50', '55', 3),
('50', '56', 2), ('50', '57', 1), ('50', '58', 2), ('50', '59', 2), ('50', '60', 2),
('50', '61', 2), ('50', '62', 1), ('50', '63', 2), ('50', '64', 2), ('50', '65', 5),
('50', '66', 2), ('50', '67', 1), ('50', '68', 1), ('50', '69', 1), ('50', '70', 3),
('50', '71', 1), ('50', '72', 3), ('50', '73', 2), ('50', '74', 2), ('50', '75', 4),
('50', '76', 1), ('50', '77', 1), ('50', '78', 2), ('50', '79', 5), ('50', '81', 2),
('50', '82', 2), ('50', '83', 4), ('50', '84', 2), ('50', '85', 5), ('50', '86', 3),
('50', '87', 5), ('50', '88', 1), ('50', '89', 3), ('50', '90', 2), ('54', '01', 3),
('54', '02', 2), ('54', '03', 3), ('54', '04', 1), ('54', '05', 3), ('54', '06', 3),
('54', '07', 3), ('54', '08', 3), ('54', '09', 3), ('54', '10', 3), ('54', '11', 3),
('54', '12', 3), ('54', '13', 3), ('54', '14', 3), ('54', '15', 3), ('54', '16', 3),
('54', '17', 2), ('54', '18', 3), ('54', '19', 2), ('54', '20', 3), ('54', '21', 3),
('54', '22', 1), ('54', '23', 3), ('54', '24', 2), ('54', '25', 4), ('54', '26', 3),
('54', '27', 4), ('54', '28', 3), ('54', '29', 3), ('54', '30', 3), ('54', '31', 3),
('54', '32', 3), ('54', '33', 3), ('54', '34', 3), ('54', '35', 3), ('54', '36', 3),
('54', '37', 3), ('54', '38', 2), ('54', '39', 3), ('54', '40', 3), ('54', '41', 5),
('54', '42', 1), ('54', '43', 3), ('54', '44', 3), ('54', '45', 2), ('54', '46', 3),
('54', '47', 3), ('54', '48', 3), ('54', '49', 0), ('54', '50', 3), ('54', '51', 3),
('54', '52', 3), ('54', '53', 3), ('54', '54', 1), ('54', '55', 2), ('54', '56', 3),
('54', '57', 3), ('54', '58', 3), ('54', '59', 2), ('54', '60', 3), ('54', '61', 3),
('54', '62', 3), ('54', '63', 3), ('54', '64', 3), ('54', '65', 4), ('54', '66', 2),
('54', '67', 3), ('54', '68', 3), ('54', '69', 3), ('54', '70', 1), ('54', '71', 3),
('54', '72', 2), ('54', '73', 3), ('54', '74', 2), ('54', '75', 3), ('54', '76', 3),
('54', '77', 3), ('54', '78', 3), ('59', '01', 3), ('59', '02', 2), ('59', '03', 3),
('59', '04', 3), ('59', '05', 3), ('59', '06', 3), ('59', '07', 3), ('59', '08', 3),
('59', '09', 3), ('59', '10', 2), ('59', '11', 2), ('59', '12', 2), ('59', '13', 2),
('59', '14', 4), ('59', '15', 3), ('59', '16', 2), ('59', '17', 2), ('59', '18', 1),
('59', '19', 3), ('59', '20', 3), ('59', '21', 2), ('59', '22', 3), ('59', '23', 3),
('59', '24', 3), ('59', '25', 4), ('59', '26', 3), ('59', '27', 4), ('59', '28', 4),
('59', '29', 2), ('59', '30', 3), ('59', '31', 3), ('59', '32', 2), ('59', '33', 2),
('59', '34', 2), ('59', '35', 2), ('59', '36', 2), ('59', '37', 2), ('59', '38', 3),
('59', '39', 3), ('59', '40', 2), ('59', '41', 5), ('59', '42', 3), ('59', '43', 1),
('59', '44', 2), ('59', '45', 2), ('59', '46', 2), ('59', '47', 2), ('59', '48', 2),
('59', '49', 0), ('59', '50', 2), ('59', '51', 3), ('59', '52', 2), ('59', '53', 2),
('59', '54', 2), ('59', '55', 2), ('59', '56', 2), ('59', '57', 2), ('59', '58', 2),
('59', '59', 1), ('59', '60', 2), ('59', '61', 3), ('59', '62', 2), ('59', '63', 2),
('59', '64', 2), ('59', '65', 5), ('59', '66', 1), ('59', '67', 2), ('59', '68', 2),
('59', '69', 2), ('59', '70', 3), ('59', '71', 3), ('59', '72', 2), ('59', '73', 2),
('59', '74', 2), ('59', '75', 3), ('59', '76', 2), ('59', '77', 2), ('59', '78', 2),
('61', '01', 1), ('61', '02', 2), ('61', '03', 4), ('61', '04', 3), ('61', '05', 2),
('61', '06', 2), ('61', '07', 2), ('61', '08', 1), ('61', '09', 1), ('61', '10', 3),
('61', '11', 3), ('61', '12', 2), ('61', '13', 2), ('61', '14', 5), ('61', '15', 2),
('61', '16', 2), ('61', '17', 4), ('61', '18', 2), ('61', '19', 3), ('61', '20', 2),
('61', '21', 2), ('61', '22', 3), ('61', '23', 1), ('61', '24', 3), ('61', '25', 5),
('61', '26', 1), ('61', '27', 5), ('61', '28', 5), ('61', '29', 3), ('61', '30', 2),
('61', '31', 2), ('61', '32', 2), ('61', '33', 2), ('61', '34', 1), ('61', '35', 2),
('61', '36', 2), ('61', '37', 2), ('61', '38', 4), ('61', '39', 3), ('61', '40', 2),
('61', '41', 5), ('61', '42', 3), ('61', '43', 3), ('61', '44', 2), ('61', '45', 3),
('61', '46', 2), ('61', '47', 2), ('61', '48', 2), ('61', '49', 5), ('61', '50', 2),
('61', '51', 3), ('61', '52', 2), ('61', '53', 2), ('61', '54', 3), ('61', '55', 3),
('61', '56', 2), ('61', '57', 2), ('61', '58', 2), ('61', '59', 3), ('61', '60', 2),
('61', '61', 1), ('61', '62', 2), ('61', '63', 2), ('61', '64', 2), ('61', '65', 5),
('61', '66', 3), ('61', '67', 2), ('61', '68', 2), ('61', '69', 2), ('61', '70', 2),
('61', '71', 2), ('61', '72', 3), ('61', '73', 2), ('61', '74', 3), ('61', '75', 4),
('61', '76', 2), ('61', '77', 2), ('61', '78', 2), ('61', '79', 5), ('61', '80', 0),
('61', '81', 3), ('61', '82', 2), ('61', '83', 4), ('61', '84', 2), ('61', '85', 0),
('61', '87', 5), ('61', '88', 2), ('61', '89', 3), ('61', '90', 3), ('77', '01', 2),
('77', '02', 2), ('77', '03', 4), ('77', '04', 3), ('77', '05', 3), ('77', '06', 2),
('77', '07', 2), ('77', '08', 2), ('77', '09', 2), ('77', '10', 2), ('77', '11', 2),
('77', '12', 2), ('77', '13', 2), ('77', '14', 4), ('77', '15', 2), ('77', '16', 2),
('77', '17', 3), ('77', '18', 2), ('77', '19', 3), ('77', '20', 2), ('77', '21', 2),
('77', '22', 3), ('77', '23', 2), ('77', '24', 3), ('77', '25', 5), ('77', '26', 2),
('77', '27', 5), ('77', '28', 4), ('77', '29', 2), ('77', '30', 2), ('77', '31', 2),
('77', '32', 1), ('77', '33', 1), ('77', '34', 2), ('77', '35', 1), ('77', '36', 1),
('77', '37', 1), ('77', '38', 4), ('77', '39', 2), ('77', '40', 1), ('77', '41', 5),
('77', '42', 3), ('77', '43', 2), ('77', '44', 1), ('77', '45', 3), ('77', '46', 1),
('77', '47', 2), ('77', '48', 1), ('77', '49', 5), ('77', '50', 1), ('77', '51', 2),
('77', '52', 1), ('77', '53', 2), ('77', '54', 3), ('77', '55', 3), ('77', '56', 2),
('77', '57', 1), ('77', '58', 2), ('77', '59', 2), ('77', '60', 2), ('77', '61', 2),
('77', '62', 1), ('77', '63', 2), ('77', '64', 2), ('77', '65', 5), ('77', '66', 2),
('77', '67', 1), ('77', '68', 1), ('77', '69', 1), ('77', '70', 3), ('77', '71', 1),
('77', '72', 3), ('77', '73', 2), ('77', '74', 2), ('77', '75', 4), ('77', '76', 1),
('77', '77', 1), ('77', '78', 2), ('77', '79', 5), ('77', '81', 2), ('77', '82', 2),
('77', '83', 4), ('77', '84', 2), ('77', '85', 5), ('77', '86', 3), ('77', '87', 5),
('77', '88', 1), ('77', '89', 3), ('77', '90', 2), ('78', '01', 3), ('78', '02', 3),
('78', '03', 4), ('78', '04', 3), ('78', '05', 3), ('78', '06', 3), ('78', '07', 3),
('78', '08', 3), ('78', '09', 3), ('78', '10', 1), ('78', '11', 2), ('78', '12', 2),
('78', '13', 2), ('78', '14', 5), ('78', '15', 3), ('78', '16', 2), ('78', '17', 2),
('78', '18', 2), ('78', '19', 3), ('78', '20', 3), ('78', '21', 2), ('78', '22', 3),
('78', '23', 3), ('78', '24', 3), ('78', '25', 5), ('78', '26', 3), ('78', '27', 5),
('78', '28', 5), ('78', '29', 2), ('78', '30', 3), ('78', '31', 2), ('78', '32', 2),
('78', '33', 2), ('78', '34', 2), ('78', '35', 2), ('78', '36', 2), ('78', '37', 2),
('78', '38', 4), ('78', '39', 2), ('78', '40', 2), ('78', '41', 5), ('78', '42', 3),
('78', '43', 2), ('78', '44', 2), ('78', '45', 3), ('78', '46', 2), ('78', '47', 1),
('78', '48', 2), ('78', '49', 5), ('78', '50', 2), ('78', '51', 2), ('78', '52', 2),
('78', '53', 1), ('78', '54', 3), ('78', '55', 3), ('78', '56', 3), ('78', '57', 2),
('78', '58', 2), ('78', '59', 2), ('78', '60', 1), ('78', '61', 2), ('78', '62', 2),
('78', '63', 2), ('78', '64', 2), ('78', '65', 5), ('78', '66', 3), ('78', '67', 2),
('78', '68', 2), ('78', '69', 1), ('78', '70', 3), ('78', '71', 3), ('78', '72', 3),
('78', '73', 2), ('78', '74', 3), ('78', '75', 4), ('78', '76', 2), ('78', '77', 2),
('78', '78', 1), ('78', '79', 5), ('78', '87', 5), ('78', '90', 0);
");

##
## ��������� ������� `#__{vm}_rp_state`
##
$db->query("
CREATE TABLE IF NOT EXISTS `#__{vm}_rp_state` (
  `state_id` int(11) NOT NULL auto_increment,
  `group_id` int(11) NOT NULL default '0',
  `state_name` varchar(64) default NULL,
  `state_code` char(2) default NULL,
  `delivery_id` smallint(1) NOT NULL default '1',
  PRIMARY KEY  (`state_id`),
  KEY `idx_country_id` (`group_id`)
) TYPE=MyISAM COMMENT='States that are assigned to a rate group' AUTO_INCREMENT=276 ;
");

##
## ���� ������ ������� `#__{vm}_rp_state`
##
$db->query("
INSERT INTO `#__{vm}_rp_state` VALUES (254, 0, '�������� ��������� ���������� �����', '80', 0),
(166, 1, '������ ����������', '01', 1),
(167, 3, '����� ����������', '04', 1),
(168, 2, '��������� ����', '22', 1),
(169, 3, '�������� �������', '28', 1),
(170, 2, '������������� �������', '29', 1),
(171, 1, '������������ �������', '30', 1),
(255, 0, '��������', '90', 1),
(172, 2, '������������ ����������', '02', 1),
(173, 1, '������������ �������', '31', 1),
(174, 1, '�������� �������', '32', 1),
(175, 2, '������� ����������', '03', 1),
(176, 1, '������������ �������', '33', 1),
(177, 1, '������������� �������', '34', 1),
(178, 2, '����������� �������', '35', 1),
(179, 1, '����������� �������', '36', 1),
(180, 1, '�������� ����������', '05', 1),
(181, 3, '��������� ���������� �������', '79', 1),
(182, 1, '���������� �������', '37', 1),
(183, 1, '��������� ����������', '06', 1),
(184, 2, '��������� �������', '38', 1),
(185, 1, '���������-���������� ����������', '07', 1),
(186, 1, '��������������� �������', '39', 1),
(187, 2, '�������� ����������', '08', 1),
(188, 1, '��������� �������', '40', 1),
(189, 4, '���������� ����', '41', 1),
(190, 1, '���������-���������� ����������', '09', 1),
(191, 2, '������� ����������', '10', 1),
(192, 3, '����������� �������', '42', 1),
(193, 2, '��������� �������', '43', 1),
(194, 2, '���� ����������', '11', 1),
(195, 0, '����-��������� ���������� �����', '81', 0),
(197, 1, '����������� �������', '44', 1),
(198, 1, '������������� ����', '23', 1),
(199, 2, '������������ ����', '24', 1),
(200, 2, '���������� �������', '45', 1),
(201, 1, '������� �������', '46', 1),
(202, 1, '������������� �������', '47', 1),
(203, 1, '�������� �������', '48', 1),
(204, 4, '����������� �������', '49', 2),
(205, 1, '�����-�� ����������', '12', 1),
(206, 1, '�������� ����������', '13', 1),
(207, 1, '������', '77', 1),
(208, 1, '���������� �������', '50', 1),
(209, 3, '���������� �������', '51', 1),
(210, 4, '�������� ���������� �����', '83', 0),
(211, 1, '������������� �������', '52', 1),
(212, 1, '������������ �������', '53', 1),
(213, 2, '������������� �������', '54', 1),
(214, 2, '������ �������', '55', 1),
(215, 2, '������������ �������', '56', 1),
(216, 1, '��������� �������', '57', 1),
(217, 1, '���������� �������', '58', 1),
(218, 2, '�������� ����', '59', 1),
(219, 3, '���������� ����', '25', 1),
(220, 1, '��������� �������', '60', 1),
(221, 1, '���������� �������', '61', 1),
(222, 1, '��������� �������', '62', 1),
(223, 1, '��������� �������', '63', 1),
(224, 1, '�����-���������', '78', 1),
(225, 1, '����������� �������', '64', 1),
(226, 4, '���� (������) ����������', '14', 1),
(227, 4, '����������� �������', '65', 1),
(228, 2, '������������ �������', '66', 1),
(229, 1, '�������� ������-������', '15', 1),
(230, 1, '���������� �������', '67', 1),
(231, 1, '�������������� ����', '26', 1),
(232, 0, '���������� ���������� �����', '84', 0),
(233, 1, '���������� �������', '68', 1),
(234, 1, '���������', '16', 1),
(235, 1, '�������� �������', '69', 1),
(236, 3, '������� �������', '70', 1),
(237, 1, '�������� �������', '71', 1),
(238, 2, '���� ����������', '17', 1),
(239, 2, '��������� �������', '72', 1),
(240, 2, '���������� ����������', '18', 1),
(241, 1, '����������� �������', '73', 1),
(242, 0, '����-��������� ��������� ��', '85', 0),
(243, 3, '����������� ����', '27', 1),
(244, 2, '������� ����������', '19', 1),
(245, 3, '�����-���������� ���������� �����', '86', 0),
(246, 2, '����������� �������', '74', 1),
(247, 1, '��������� ����������', '20', 1),
(248, 3, '��������� �������', '75', 1),
(249, 1, '��������� ����������', '21', 1),
(250, 5, '��������� ���������� �����', '87', 2),
(251, 0, '����������� ���������� �����', '88', 0),
(252, 4, '�����-�������� ���������� �����', '89', 0),
(253, 1, '����������� �������', '76', 1);
");

##
## ��������� ������� `#__{vm}_rp_zone_rate`
##
$db->query("
CREATE TABLE IF NOT EXISTS `#__{vm}_rp_zone_rate` (
  `rate_id` smallint(2) NOT NULL auto_increment,
  `group_id` smallint(1) NOT NULL default '0',
  `zone_rate` int(11) NOT NULL default '0',
  `zone_desc` varchar(255) NOT NULL default '',
  `zone_cost` decimal(10,2) default NULL,
  `zone_cost_above` decimal(10,2) default NULL,
  `zone_tax_rate` int(11) NOT NULL default '0',
  PRIMARY KEY  (`rate_id`),
  KEY `zone_id` (`rate_id`)
) TYPE=MyISAM COMMENT='The Zones managed by the Russian Post Shipping Module' AUTO_INCREMENT=33 ;
");

##
## ���� ������ ������� `#__{vm}_rp_zone_rate`
##
$db->query("
INSERT INTO `#__{vm}_rp_zone_rate` VALUES (1, 1, 1, '�� 600 ��', 61.50, 5.50, 0),
(2, 1, 2, '601 - 2000 ��', 64.80, 5.90, 0),
(3, 1, 3, '2001 - 5000 ��', 77.40, 7.40, 0),
(4, 1, 4, '5001 - 8000 ��', 103.55, 9.45, 0),
(5, 1, 5, '����� 8000 ��', 116.65, 10.40, 0),
(30, 1, 9, '��������� �����������', 102.30, 30.70, 0),
(8, 2, 1, '�� 600 ��', 68.45, 6.10, 0),
(9, 2, 2, '601 - 2000 ��', 72.10, 6.60, 0),
(10, 2, 3, '2001 - 5000 ��', 86.10, 8.20, 0),
(11, 2, 4, '5001 - 8000 ��', 115.30, 10.55, 0),
(12, 2, 5, '����� 8000 ��', 130.00, 11.60, 0),
(31, 2, 9, '��������� �����������', 114.35, 34.30, 0),
(13, 3, 1, '�� 600 ��', 74.75, 6.70, 0),
(14, 3, 2, '601 - 2000 ��', 78.80, 7.20, 0),
(15, 3, 3, '2001 - 5000 ��', 94.00, 9.00, 0),
(16, 3, 4, '5001 - 8000 ��', 125.90, 11.50, 0),
(17, 3, 5, '����� 8000 ��', 141.80, 12.65, 0),
(32, 3, 9, '��������� �����������', 125.30, 37.60, 0),
(18, 4, 1, '�� 600 ��', 88.20, 7.90, 0),
(19, 4, 2, '601 - 2000 ��', 93.00, 8.50, 0),
(20, 4, 3, '2001 - 5000 ��', 111.05, 10.60, 0),
(21, 4, 4, '5001 - 8000 ��', 148.60, 13.60, 0),
(22, 4, 5, '����� 8000 ��', 167.40, 14.90, 0),
(23, 4, 9, '��������� �����������', 145.00, 43.50, 0),
(24, 5, 1, '�� 600 ��', 95.30, 8.60, 0),
(25, 5, 2, '601 - 2000 ��', 100.45, 9.10, 0),
(26, 5, 3, '2001 - 5000 ��', 120.00, 11.45, 0),
(27, 5, 4, '5001 - 8000 ��', 160.50, 14.60, 0),
(28, 5, 5, '����� 8000 ��', 180.80, 16.15, 0),
(29, 5, 9, '��������� �����������', 158.60, 47.60, 0);
");
?>