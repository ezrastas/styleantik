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
)  COMMENT='Используется для хранения запис'
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
)  COMMENT='Заказы по партнерке ';
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
)  COMMENT='Продавец-пользователь';
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
)  COMMENT='Категории товаров хранятся здес'  ;
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
)  COMMENT='Связи между категориями';
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
)  COMMENT='Список стран'  ;
");
##
## Dumping data for table `#__{vm}_country`
##
$db->query("
INSERT INTO `#__{vm}_country` VALUES (1, 1, 'Афганистан', 'AFG', 'AF')
, (2, 1, 'Албания', 'ALB', 'AL')
, (3, 1, 'Алжир', 'DZA', 'DZ')
, (4, 1, 'Американская саомя', 'ASM', 'AS')
, (5, 1, 'Андорра', 'AND', 'AD')
, (6, 1, 'Ангола', 'AGO', 'AO')
, (7, 1, 'Ангилья', 'AIA', 'AI')
, (8, 1, 'Антарктида', 'ATA', 'AQ')
, (9, 1, 'Антигуа и Барбуда', 'ATG', 'AG')
, (10, 1, 'Аргентина', 'ARG', 'AR')
, (11, 1, 'Армения', 'ARM', 'AM')
, (12, 1, 'Аруба', 'ABW', 'AW')
, (13, 1, 'Австралия', 'AUS', 'AU')
, (14, 1, 'Австрия', 'AUT', 'AT')
, (15, 1, 'Азербайджан', 'AZE', 'AZ')
, (16, 1, 'Багамы', 'BHS', 'BS')
, (17, 1, 'Бахрейн', 'BHR', 'BH')
, (18, 1, 'Бангладеш', 'BGD', 'BD')
, (19, 1, 'Барбадос', 'BRB', 'BB')
, (20, 1, 'Беларусь', 'BLR', 'BY')
, (21, 1, 'Бельгия', 'BEL', 'BE')
, (22, 1, 'Белиз', 'BLZ', 'BZ')
, (23, 1, 'Бенин', 'BEN', 'BJ')
, (24, 1, 'Бермуды', 'BMU', 'BM')
, (25, 1, 'Бутан', 'BTN', 'BT')
, (26, 1, 'Боливия', 'BOL', 'BO')
, (27, 1, 'Босния и Герцеговина', 'BIH', 'BA')
, (28, 1, 'Ботсвана', 'BWA', 'BW')
, (29, 1, 'Остров бувет', 'BVT', 'BV')
, (30, 1, 'Бразилия', 'BRA', 'BR')
, (31, 1, 'Британские острова в Тихом океане', 'IOT', 'IO')
, (32, 1, 'Остров Бруней', 'BRN', 'BN')
, (33, 1, 'Болгария', 'BGR', 'BG')
, (34, 1, 'Буркино фасо', 'BFA', 'BF')
, (35, 1, 'Бурунди', 'BDI', 'BI')
, (36, 1, 'Камбоджа', 'KHM', 'KH')
, (37, 1, 'Камерун', 'CMR', 'CM')
, (38, 1, 'Канада', 'CAN', 'CA')
, (39, 1, 'Капе верде', 'CPV', 'CV')
, (40, 1, 'Каймановы острова', 'CYM', 'KY')
, (41, 1, 'Центральная африканская республика', 'CAF', 'CF')
, (42, 1, 'Республика Чад', 'TCD', 'TD')
, (43, 1, 'Чили', 'CHL', 'CL')
, (44, 1, 'Китай', 'CHN', 'CN')
, (45, 1, 'Остров Рождества', 'CXR', 'CX')
, (46, 1, 'Острова Кокоса', 'CCK', 'CC')
, (47, 1, 'Колумбия', 'COL', 'CO')
, (48, 1, 'Коморос', 'COM', 'KM')
, (49, 1, 'Конго', 'COG', 'CG')
, (50, 1, 'Острова Кука', 'COK', 'CK')
, (51, 1, 'Коста Рика', 'CRI', 'CR')
, (52, 1, 'Кот-де-Вуар', 'CIV', 'CI')
, (53, 1, 'Хорватия', 'HRV', 'HR')
, (54, 1, 'Куба', 'CUB', 'CU')
, (55, 1, 'Кипр', 'CYP', 'CY')
, (56, 1, 'Чехия', 'CZE', 'CZ')
, (57, 1, 'Дания', 'DNK', 'DK')
, (58, 1, 'Джибути', 'DJI', 'DJ')
, (59, 1, 'Доминика', 'DMA', 'DM')
, (60, 1, 'Доминиканская реп.', 'DOM', 'DO')
, (61, 1, 'Вост. Тимор', 'TMP', 'TP')
, (62, 1, 'Эквадор', 'ECU', 'EC')
, (63, 1, 'Египет', 'EGY', 'EG')
, (64, 1, 'Сальвадор', 'SLV', 'SV')
, (65, 1, 'Экватор. Гвинея', 'GNQ', 'GQ')
, (66, 1, 'Эритрея', 'ERI', 'ER')
, (67, 1, 'Эстония', 'EST', 'EE')
, (68, 1, 'Эфиопия', 'ETH', 'ET')
, (69, 1, 'Фолклендские острова', 'FLK', 'FK')
, (70, 1, 'Острова Фаро', 'FRO', 'FO')
, (71, 1, 'Фиджи', 'FJI', 'FJ')
, (72, 1, 'Финляндия', 'FIN', 'FI')
, (73, 1, 'Франция', 'FRA', 'FR')
, (74, 1, 'Франция, метрополия', 'FXX', 'FX')
, (75, 1, 'Франц. Гайана', 'GUF', 'GF')
, (76, 1, 'Франц. Полинезия', 'PYF', 'PF')
, (77, 1, 'Франц. Южн. Территории', 'ATF', 'TF')
, (78, 1, 'Габон', 'GAB', 'GA')
, (79, 1, 'Гамбия', 'GMB', 'GM')
, (80, 1, 'Грузия', 'GEO', 'GE')
, (81, 1, 'Германия', 'DEU', 'DE')
, (82, 1, 'Гана', 'GHA', 'GH')
, (83, 1, 'Гибралтар', 'GIB', 'GI')
, (84, 1, 'Греция', 'GRC', 'GR')
, (85, 1, 'Гренландия', 'GRL', 'GL')
, (86, 1, 'Гренада', 'GRD', 'GD')
, (87, 1, 'Гваделупа', 'GLP', 'GP')
, (88, 1, 'Гуам', 'GUM', 'GU')
, (89, 1, 'Гватемала', 'GTM', 'GT')
, (90, 1, 'Гвинея', 'GIN', 'GN')
, (91, 1, 'Гвинея-биссау', 'GNB', 'GW')
, (92, 1, 'Гайана', 'GUY', 'GY')
, (93, 1, 'Гаити', 'HTI', 'HT')
, (94, 1, 'Острова Хеад и Макдональд', 'HMD', 'HM')
, (95, 1, 'Гондурас', 'HND', 'HN')
, (96, 1, 'Гонконг', 'HKG', 'HK')
, (97, 1, 'Венгрия', 'HUN', 'HU')
, (98, 1, 'Исландия', 'ISL', 'IS')
, (99, 1, 'Индия', 'IND', 'IN')
, (100, 1, 'Индонезия', 'IDN', 'ID')
, (101, 1, 'Иран', 'IRN', 'IR')
, (102, 1, 'Ирак', 'IRQ', 'IQ')
, (103, 1, 'Ирландия', 'IRL', 'IE')
, (104, 1, 'Израиль', 'ISR', 'IL')
, (105, 1, 'Италия', 'ITA', 'IT')
, (106, 1, 'Ямайка', 'JAM', 'JM')
, (107, 1, 'Япония', 'JPN', 'JP')
, (108, 1, 'Иордан', 'JOR', 'JO')
, (109, 1, 'Казахстан', 'KAZ', 'KZ')
, (110, 1, 'Кения', 'KEN', 'KE')
, (111, 1, 'Кирибати', 'KIR', 'KI')
, (112, 1, 'Демокр. реп. Корея', 'PRK', 'KP')
, (113, 1, 'Корея', 'KOR', 'KR')
, (114, 1, 'Кувейт', 'KWT', 'KW')
, (115, 1, 'Киргизстан', 'KGZ', 'KG')
, (116, 1, 'Демокр. реп. Лаос', 'LAO', 'LA')
, (117, 1, 'Латвия', 'LVA', 'LV')
, (118, 1, 'Лебанон', 'LBN', 'LB')
, (119, 1, 'Лесото', 'LSO', 'LS')
, (120, 1, 'Либерия', 'LBR', 'LR')
, (121, 1, 'Ливийсякая араб. Джамахирия', 'LBY', 'LY')
, (122, 1, 'Лихтенштейн', 'LIE', 'LI')
, (123, 1, 'Литва', 'LTU', 'LT')
, (124, 1, 'Люксембург', 'LUX', 'LU')
, (125, 1, 'Маккау', 'MAC', 'MO')
, (126, 1, 'Македония', 'MKD', 'MK')
, (127, 1, 'Мадагаскар', 'MDG', 'MG')
, (128, 1, 'Малави', 'MWI', 'MW')
, (129, 1, 'Малайзия', 'MYS', 'MY')
, (130, 1, 'Мальдивы', 'MDV', 'MV')
, (131, 1, 'Мали', 'MLI', 'ML')
, (132, 1, 'Мальта', 'MLT', 'MT')
, (133, 1, 'Острова Маршал', 'MHL', 'MH')
, (134, 1, 'Мартиника', 'MTQ', 'MQ')
, (135, 1, 'Мавритания', 'MRT', 'MR')
, (136, 1, 'Мауритос', 'MUS', 'MU')
, (137, 1, 'Майёт', 'MYT', 'YT')
, (138, 1, 'Мексика', 'MEX', 'MX')
, (139, 1, 'Микронезия', 'FSM', 'FM')
, (140, 1, 'Молдова', 'MDA', 'MD')
, (141, 1, 'Монако', 'MCO', 'MC')
, (142, 1, 'Монголия', 'MNG', 'MN')
, (143, 1, 'Монсерат', 'MSR', 'MS')
, (144, 1, 'Морокко', 'MAR', 'MA')
, (145, 1, 'Мозамбик', 'MOZ', 'MZ')
, (146, 1, 'Мянмар', 'MMR', 'MM')
, (147, 1, 'Намибия', 'NAM', 'NA')
, (148, 1, 'Науру', 'NRU', 'NR')
, (149, 1, 'Непал', 'NPL', 'NP')
, (150, 1, 'Недерланды', 'NLD', 'NL')
, (151, 1, 'Голландские высоты', 'ANT', 'AN')
, (152, 1, 'Нов. каледония', 'NCL', 'NC')
, (153, 1, 'Нов. Зеладния', 'NZL', 'NZ')
, (154, 1, 'Никарагуа', 'NIC', 'NI')
, (155, 1, 'Нигер', 'NER', 'NE')
, (156, 1, 'Нигерия', 'NGA', 'NG')
, (157, 1, 'Ниу', 'NIU', 'NU')
, (158, 1, 'Остров Норфолк', 'NFK', 'NF')
, (159, 1, 'Сев. острова Мариана', 'MNP', 'MP')
, (160, 1, 'Норвегия', 'NOR', 'NO')
, (161, 1, 'Оман', 'OMN', 'OM')
, (162, 1, 'Пакистан', 'PAK', 'PK')
, (163, 1, 'Палау', 'PLW', 'PW')
, (164, 1, 'Панама', 'PAN', 'PA')
, (165, 1, 'Папуа, новая гвинея', 'PNG', 'PG')
, (166, 1, 'Парагвай', 'PRY', 'PY')
, (167, 1, 'Перу', 'PER', 'PE')
, (168, 1, 'Филипинны', 'PHL', 'PH')
, (169, 1, 'Питкаин', 'PCN', 'PN')
, (170, 1, 'Польша', 'POL', 'PL')
, (171, 1, 'Португалия', 'PRT', 'PT')
, (172, 1, 'Пуерто Рико', 'PRI', 'PR')
, (173, 1, 'Катар', 'QAT', 'QA')
, (174, 1, 'Реюнион', 'REU', 'RE')
, (175, 1, 'Румыния', 'ROM', 'RO')
, (176, 1, 'Российская Федерация', 'RUS', 'RU')
, (177, 1, 'Руанда', 'RWA', 'RW')
, (178, 1, 'Св. Китс и Невис', 'KNA', 'KN')
, (179, 1, 'Св. Лючия', 'LCA', 'LC')
, (180, 1, 'Св. Винсент и Гренады', 'VCT', 'VC')
, (181, 1, 'Самоа', 'WSM', 'WS')
, (182, 1, 'Сан Марино', 'SMR', 'SM')
, (183, 1, 'Св. Том и принцип', 'STP', 'ST')
, (184, 1, 'Саудовская Аравия', 'SAU', 'SA')
, (185, 1, 'Сенегал', 'SEN', 'SN')
, (186, 1, 'Сейшелы', 'SYC', 'SC')
, (187, 1, 'Сьерра Леоне', 'SLE', 'SL')
, (188, 1, 'Сингапур', 'SGP', 'SG')
, (189, 1, 'Словакия', 'SVK', 'SK')
, (190, 1, 'Словения', 'SVN', 'SI')
, (191, 1, 'Острова Соломона', 'SLB', 'SB')
, (192, 1, 'Сомали', 'SOM', 'SO')
, (193, 1, 'Южная Африка', 'ZAF', 'ZA')
, (194, 1, 'Южные Сендвич. острова', 'SGS', 'GS')
, (195, 1, 'Испания', 'ESP', 'ES')
, (196, 1, 'Шри Ланка', 'LKA', 'LK')
, (197, 1, 'Св. Елена', 'SHN', 'SH')
, (198, 1, 'Св. Пьер и Микелон', 'SPM', 'PM')
, (199, 1, 'Судан', 'SDN', 'SD')
, (200, 1, 'Суринам', 'SUR', 'SR')
, (201, 1, 'Свалбард и Ян Майен Острова', 'SJM', 'SJ')
, (202, 1, 'Свазиленд', 'SWZ', 'SZ')
, (203, 1, 'Швеция', 'SWE', 'SE')
, (204, 1, 'Швейцария', 'CHE', 'CH')
, (205, 1, 'Сирия', 'SYR', 'SY')
, (206, 1, 'Тайвань', 'TWN', 'TW')
, (207, 1, 'Таджикистан', 'TJK', 'TJ')
, (208, 1, 'Танзания', 'TZA', 'TZ')
, (209, 1, 'Тайланд', 'THA', 'TH')
, (210, 1, 'Того', 'TGO', 'TG')
, (211, 1, 'Токелау', 'TKL', 'TK')
, (212, 1, 'Тонга', 'TON', 'TO')
, (213, 1, 'Тринидад и Тобаго', 'TTO', 'TT')
, (214, 1, 'Тунис', 'TUN', 'TN')
, (215, 1, 'Турция', 'TUR', 'TR')
, (216, 1, 'Туркменестан', 'TKM', 'TM')
, (217, 1, 'Тркс и Кайкос острова', 'TCA', 'TC')
, (218, 1, 'Тувалу', 'TUV', 'TV')
, (219, 1, 'Уганда', 'UGA', 'UG')
, (220, 1, 'Украина', 'UKR', 'UA')
, (221, 1, 'ОАЭ', 'ARE', 'AE')
, (222, 1, 'Великобритания', 'GBR', 'GB')
, (223, 1, 'США', 'USA', 'US')
, (224, 1, 'Соед. Штаты Оутландс островов', 'UMI', 'UM')
, (225, 1, 'Уругвай', 'URY', 'UY')
, (226, 1, 'Узбекистан', 'UZB', 'UZ')
, (227, 1, 'Ванату', 'VUT', 'VU')
, (228, 1, 'Ватикан', 'VAT', 'VA')
, (229, 1, 'Венесуела', 'VEN', 'VE')
, (230, 1, 'Вьетнам', 'VNM', 'VN')
, (231, 1, 'Вирджинские о-ва (Англия)', 'VGB', 'VG')
, (232, 1, 'Вирджинские о-ва (США)', 'VIR', 'VI')
, (233, 1, 'Уэльс', 'WLF', 'WF')
, (234, 1, 'Зап. Сахара', 'ESH', 'EH')
, (235, 1, 'Йемен', 'YEM', 'YE')
, (236, 1, 'Югославия', 'YUG', 'YU')
, (237, 1, 'Заир', 'ZAR', 'ZR')
, (238, 1, 'Замбия', 'ZMB', 'ZM')
, (239, 1, 'Зимбабве', 'ZWE', 'ZW');
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
)  COMMENT='Для храния кодов купонов' ;
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
)  COMMENT='Для хранения типов кредитных кар' AUTO_INCREMENT=8 ;
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
)  COMMENT='Поля для CSV импорта экспорта'  ;
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
)  COMMENT='Валюты'  ;
");
##
## Dumping data for table `#__{vm}_currency`
##

$db->query("
INSERT INTO `#__{vm}_currency` VALUES (1, 'Andorran Peseta', 'ADP')
, (2, 'ОАЭ дихрам', 'AED')
, (3, 'Афганистан. афгани', 'AFA')
, (4, 'Албанск. лек', 'ALL')
, (5, 'Гульден Голландских высот', 'ANG')
, (6, 'Ангольская кванца', 'AOK')
, (7, 'Аргентинск. пессо', 'ARA')
, (9, 'Австралл. доллар', 'AUD')
, (10, 'Аруб. флоран', 'AWG')
, (11, 'Барбадос. доллар', 'BBD')
, (12, 'Бангладеш. така', 'BDT')
, (14, 'Болгарск. лев', 'BGL')
, (15, 'Бахрейн. динар', 'BHD')
, (16, 'Бурунди франк', 'BIF')
, (17, 'Бермуд. доллар', 'BMD')
, (18, 'Брунейск. доллар', 'BND')
, (19, 'Боливийск. боливиано', 'BOB')
, (20, 'Бразильск. реал', 'BRL')
, (21, 'Багамск. доллар', 'BSD')
, (22, 'Бутан нгултрум', 'BTN')
, (23, 'Бирма кайят', 'BUK')
, (24, 'Ботсванск. була', 'BWP')
, (25, 'Белизск. доллар', 'BZD')
, (26, 'Канадск. доллар', 'CAD')
, (27, 'Швейц. франк', 'CHF')
, (28, 'Чилийск. фоменто', 'CLF')
, (29, 'Чилийск. пессо', 'CLP')
, (30, 'Кит. йены', 'CNY')
, (31, 'Колумбийск. пессо', 'COP')
, (32, 'Коста Рико колон', 'CRC')
, (33, 'Чешск. крона', 'CZK')
, (34, 'Кубинск. пессо', 'CUP')
, (35, 'Капе Верде эскудо', 'CVE')
, (36, 'Кипрск. фунт', 'CYP')
, (40, 'Датск. крона', 'DKK')
, (41, 'Доминиканск. пессо', 'DOP')
, (42, 'Алжирский динар', 'DZD')
, (43, 'Эквадор сукре', 'ECS')
, (44, 'Египетск. фунт', 'EGP')
, (46, 'Эфиопск. бирр', 'ETB')
, (47, 'Евро', 'EUR')
, (49, 'Фиджи доллар', 'FJD')
, (50, 'Фалклендск. фунт', 'FKP')
, (52, 'Британск. фунт', 'GBP')
, (53, 'Ганайнск. кеди', 'GHC')
, (54, 'Гибралтарск. фунт', 'GIP')
, (55, 'Гамбианск. галези', 'GMD')
, (56, 'Гвинейск. франк', 'GNF')
, (58, 'Гватемалск. кетзал', 'GTQ')
, (59, 'Гвинейск. пессо', 'GWP')
, (60, 'Гайанск. доллар', 'GYD')
, (61, 'Гон-конгск. доллар', 'HKD')
, (62, 'Гондуран Гемпира', 'HNL')
, (63, 'Гаитянск. джорде', 'HTG')
, (64, 'Венгерск. форинт', 'HUF')
, (65, 'Индонезиск. рупия', 'IDR')
, (66, 'Ирландск фунт', 'IEP')
, (67, 'Израильск. шекель', 'ILS')
, (68, 'Индийск. рупия', 'INR')
, (69, 'Иракск. динар', 'IQD')
, (70, 'Иранск. риал', 'IRR')
, (73, 'Ямайск. доллар', 'JMD')
, (74, 'Иорданск. динар', 'JOD')
, (75, 'Японск. йена', 'JPY')
, (76, 'Кенийск. шиллинг', 'KES')
, (77, 'Кампучийск. риал', 'KHR')
, (78, 'Коморосск. франк', 'KMF')
, (79, 'Сев. корейск. вон', 'KPW')
, (80, 'Южн. корейск. вон', 'KRW')
, (81, 'Кувейтск динар', 'KWD')
, (82, 'Кайманск. доллар', 'KYD')
, (83, 'Лаоск. кип', 'LAK')
, (84, 'Лебанезск. фунт', 'LBP')
, (85, 'Шри-Ланка рупия', 'LKR')
, (86, 'Либерийск доллар', 'LRD')
, (87, 'Лессото лоти', 'LSL')
, (89, 'Либийск динар', 'LYD')
, (90, 'Морокканск. дихрам', 'MAD')
, (91, 'Малагазск. франк', 'MGF')
, (92, 'Монгольск. тугрик', 'MNT')
, (93, 'Макайск. птака', 'MOP')
, (94, 'Мавританск огуйя', 'MRO')
, (95, 'Мальтеска лира', 'MTL')
, (96, 'Мауритус рупия', 'MUR')
, (97, 'Мальдив руфия', 'MVR')
, (98, 'Малави квача', 'MWK')
, (99, 'Мексиканск. пессо', 'MXP')
, (100, 'Малазийск риггат', 'MYR')
, (101, 'Мозамбикск. метикал', 'MZM')
, (102, 'Нигерийск. найра', 'NGN')
, (103, 'Никарагуаск. корбода', 'NIC')
, (105, 'Норвежск. крона', 'NOK')
, (106, 'Непал рупия', 'NPR')
, (107, 'Нов. Зеландск. доллар', 'NZD')
, (108, 'Омани риал', 'OMR')
, (109, 'Панамск. балбоа', 'PAB')
, (110, 'Перу инти', 'PEI')
, (111, 'Папуа Нов. Гвинея кина', 'PGK')
, (112, 'Филлипинск. пессо', 'PHP')
, (113, 'Пакистанск. рупия', 'PKR')
, (114, 'Пользский злотый', 'PLZ')
, (116, 'Парагвайск гарани', 'PYG')
, (117, 'Катарск. риал', 'QAR')
, (118, 'Румынск. лей', 'ROL')
, (119, 'Руанда франк', 'RWF')
, (120, 'Сауд. Аравийск. риал', 'SAR')
, (121, 'Соломон. о-ва доллар', 'SBD')
, (122, 'Сейшелл рупия', 'SCR')
, (123, 'Суданск. фунт', 'SDP')
, (124, 'Шведск. крона', 'SEK')
, (125, 'Сингапурск. доллар', 'SGD')
, (126, 'Св. Елена фунт', 'SHP')
, (127, 'Сьерра Леоне леон', 'SLL')
, (128, 'Сомали шиллинг', 'SOS')
, (129, 'Суринам гульден', 'SRG')
, (130, 'Св. Том и принцип добра', 'STD')
, (131, 'Российский рубль', 'RUB')
, (132, 'Сальвадорск. колон', 'SVC')
, (133, 'Сирийск. потмд', 'SYP')
, (134, 'Свазилендск. лилангени', 'SZL')
, (135, 'Тайский бат', 'THB')
, (136, 'Тунисск. динар', 'TND')
, (137, 'Тонга панга', 'TOP')
, (138, 'Вост. Тимор эскудо', 'TPE')
, (139, 'Турецкая лира', 'TRL')
, (140, 'Тринидад и Тобаго доллар', 'TTD')
, (141, 'Тайваньски доллар', 'TWD')
, (142, 'Танзинийск. шиллинг', 'TZS')
, (143, 'Угадна шиллинг', 'UGS')
, (144, 'США доллар', 'USD')
, (145, 'Уругвайск. пессо', 'UYP')
, (146, 'Венесуельск. боливар', 'VEB')
, (147, 'Вьетнамск. донг', 'VND')
, (148, 'Ванату вату', 'VUV')
, (149, 'Самоа тала', 'WST')
, (150, 'Демокр. Йемен динар', 'YDD')
, (151, 'Йеменск. риал', 'YER')
, (152, 'Югославск. динар', 'YUD')
, (153, 'Юж. Африка ренд', 'ZAR')
, (154, 'Замбийск. квача', 'ZMK')
, (155, 'Заирск. заир', 'ZRZ')
, (156, 'Зимбабвск. доллар', 'ZWD')
, (157, 'Словакск. крона', 'SKK');
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
)  COMMENT='Зарегистрированные функции' AUTO_INCREMENT=169 ;
");
##
## Dumping data for table `#__{vm}_function`
##

$db->query( "INSERT INTO `#__{vm}_function` VALUES (1, 1, 'userAdd', 'ps_user', 'add', '', 'admin,storeadmin'),
(2, 1, 'userDelete', 'ps_user', 'delete', '', 'admin,storeadmin'),
(3, 1, 'userUpdate', 'ps_user', 'update', '', 'admin,storeadmin'),
(4, 1, 'adminPasswdUpdate', 'ps_user', 'update_admin_passwd', 'Изменяет пароль администратора', 'admin'),
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
(66, 1, 'countryUpdate', 'ps_country', 'update', 'Изменить запись о стране', 'storeadmin,admin'),
(67, 1, 'countryDelete', 'ps_country', 'delete', 'Удаляет запись о старне', 'storeadmin,admin'),
(68, 2, 'product_csv', 'ps_csv', 'upload_csv', '', 'admin'),
(110, 7, 'waitingListAdd', 'zw_waiting_list', 'add', '', 'none'),
(111, 13, 'addzone', 'ps_zone', 'add', 'Добавление зоны', 'admin,storeadmin'),
(112, 13, 'updatezone', 'ps_zone', 'update', 'Изменение зоны', 'admin,storeadmin'),
(113, 13, 'deletezone', 'ps_zone', 'delete', 'Удаление зоны', 'admin,storeadmin'),
(114, 13, 'zoneassign', 'ps_zone', 'assign', 'Добавление страны к зоне', 'admin,storeadmin'),
(115, 1, 'writeConfig', 'ps_config', 'writeconfig', 'Записывает конфигурацию virtuemart.cfg.php', 'admin'),
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
(170, 20, 'export_yml', 'ps_csv', 'export_yml', 'Экспорт в Яндекс', 'none'); ") ;
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
)  COMMENT='Производители товаров'  ;
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
)  COMMENT='Категории производителей'  ;
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
)  COMMENT='Модули виртумарта' AUTO_INCREMENT=19 ;
");
##
## Dumping data for table `#__{vm}_module`
##

$db->query( "INSERT INTO `#__{vm}_module` VALUES (1, 'admin', '<h4>ТОЛЬКО ДЛЯ АДМИНИСТРАТОРОВ</h4>\r\n\r\n<p>могут пользовать следующим:</p>\r\n<OL>\r\n\r\n<LI>Создание пользователей</LI>\r\n<LI>Создание модулей</LI>\r\n<LI>Создание функций</LI>\r\n</OL>\r\n', 'admin', 'Y', 1),
(2, 'product', '<p>Здесь вы можете управлять вашим онлайн каталогом товаров.  Администратор каталога может дать права вам на создание категорий товара, создание новых товаров, редактирования свойств товара, и позиций товара для каждого значения свойства .</p>', 'storeadmin,admin', 'Y', 4),
(3, 'vendor', '<h4>ТОЛЬКО ДЛЯ АДМИНИСТРАТОРОВ</h4>\r\n<p>Здесь вы можете управлять продавцами в Виртумарте.</p>', 'admin', 'Y', 6),
(4, 'shopper', '<p>Управление клиентами в вашем магазине.  Позволяет создавать группы клиентов.  Группы клиентов могут быть использованы когда настравивается стоимость товара.  Это позволяет создавать различные цены для различных типов пользователей.  Для примера вы можете группы могут быть ''Обычные'' и ''Превилигированные'' group. </p>', 'admin,storeadmin', 'Y', 4),
(5, 'order', '<p>Посмотреть Заказ и Изменить статус заказа.</p>', 'admin,storeadmin', 'Y', 5),
(6, 'msgs', 'Модуль незащищен и используется для показа системных сообщений пользователям. Если происходит ошибка или предупреждение мы должны видеть их без авторизации.', 'none', 'N', 99),
(7, 'shop', 'Это модуль магазина  \"3456.ru\" .  Этот демо магазин включен в дистрибутив русского виртумарта.', 'none', 'Y', 99),
(8, 'store', '', 'storeadmin,admin', 'Y', 2),
(9, 'account', 'Этот модуль позволяет клиентом обновлять свой профиль и просмотра предыдщих заказов.', 'shopper,storeadmin,admin,demo', 'N', 99),
(10, 'checkout', '', 'none', 'N', 99),
(11, 'tax', 'Модуль доставки, позволяет устанавливать стоимость доставки в различные регионы и страны.  Ставка устанавливается в десятичной форме.  Для примера, 2 процента будет 0.02.', 'admin,storeadmin', 'Y', 8),
(12, 'reportbasic', 'Основной модуль отчетов, позволяет вам делать отчеты по всем заказам.', 'admin,storeadmin', 'Y', 7),
(13, 'zone', 'Это модуль доставки по зонам. Здесь вы можете управлять стоимостью вашей доставки в различные зоны.', 'admin,storeadmin', 'N', 9),
(14, 'shipping', '<h4>Доставка</h4><p>Этот модуль вычисляет стоимость достаки для покупателя.<br>Создайте несущие для зон доставки и весовых групп.</p>', 'admin,storeadmin', 'Y', 10),
(15, 'affiliate', 'управление партнерскими программами для вашего магазина.', 'storeadmin,admin', 'N', 99),
(16, 'manufacturer', 'Управление производителями в вашем магазине.', 'storeadmin,admin', 'Y', 12),
(17, 'help', 'Модуль помощи', 'admin,storeadmin', 'Y', 13),
(18, 'coupon', 'Управление купонами', 'admin,storeadmin', 'Y', 11),
(20, 'export_yml', 'Экспорт в яндекс', 'admin,storeadmin', 'N', 99)
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
)  COMMENT='История' AUTO_INCREMENT=1 ;
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
)  COMMENT='Хранит все позиции которые являю' AUTO_INCREMENT=1 ;
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
)  COMMENT='Способы оплаты которые были выбр';
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
)  COMMENT='Все доступные способы заказа' AUTO_INCREMENT=6 ;
");
##
## Dumping data for table `#__{vm}_order_status`
##

$db->query("
INSERT INTO `#__{vm}_order_status` VALUES (1, 'P', 'Ожидание', 1, 1)
, (2, 'C', 'Подтверждено', 2, 1)
, (3, 'X', 'Отменено', 3, 1)
, (4, 'R', 'Оплачено', 4, 1)
, (5, 'S', 'Доставлено', 5, 1);
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
)  COMMENT='Хранит информацию ОплатитьВ и До' AUTO_INCREMENT=1 ;
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
)  COMMENT='Используется для хранения заказ?' AUTO_INCREMENT=1 ;
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
)  COMMENT='Методы оплаты для вашего магазин' AUTO_INCREMENT=1 ;
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
)  COMMENT='Все товары хранятся здесь' AUTO_INCREMENT=16 ;
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
)  COMMENT='Хранятся свойства  и их значения ';
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
)  COMMENT='Атрибуты для родительских товар';
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
)  COMMENT='Ссылки товары-категории';
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
)  COMMENT='Дисконтная скидка'; ");


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
)  COMMENT='Активные скачивания для скачива';
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
)  COMMENT='Дополнительные изображения и фа' AUTO_INCREMENT=1 ;
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
)  COMMENT='Ссылки товар-производитель';
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
)  COMMENT='Цены на товар' AUTO_INCREMENT=277 ;
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
)  COMMENT='Ссылка товар-тип товара';
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
)  COMMENT='Параметры - часть типа товара';
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
)  COMMENT='Все голоса для товара';
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
)  COMMENT='Несущие доставки для стандартно' AUTO_INCREMENT=2 ;
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
)  COMMENT='Ставки доставки для стандартног?' AUTO_INCREMENT=1 ;
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
)  COMMENT='Группы клиентов' AUTO_INCREMENT=8 ;
");
##
## Dumping data for table `#__{vm}_shopper_group`
##

$db->query("
INSERT INTO `#__{vm}_shopper_group` VALUES (5, 1, '-по умолчанию-', 'Это стандартная группа клиентов.', 0.00, 1, 1)
, (6, 1, 'Привелигированный', 'Привелигированный уровень клиентов.', 0.00, 1, 0)
, (7, 1, 'Оптовики', 'Оптовики, которые покупают партии.', 0.00, 0, 0);
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
)  COMMENT='Ссылки группа клиентов-продавец';
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
)  COMMENT='Регионы' AUTO_INCREMENT=255 ;
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
(91, 138, 'MГ©xico (Estado de)', 'EDM', 'EM'),
(92, 138, 'MichoacГЎn', 'MCN', 'MI'),
(93, 138, 'Morelos', 'MOR', 'MO'),
(94, 138, 'Nayarit', 'NAY', 'NY'),
(95, 138, 'Nuevo LeГіn', 'NUL', 'NL'),
(96, 138, 'Oaxaca', 'OAX', 'OA'),
(97, 138, 'Puebla', 'PUE', 'PU'),
(98, 138, 'QuerГ©taro', 'QRO', 'QU'),
(99, 138, 'Quintana Roo', 'QUR', 'QR'),
(100, 138, 'San Luis PotosГ­', 'SLP', 'SP'),
(101, 138, 'Sinaloa', 'SIN', 'SI'),
(102, 138, 'Sonora', 'SON', 'SO'),
(103, 138, 'Tabasco', 'TAB', 'TA'),
(104, 138, 'Tamaulipas', 'TAM', 'TM'),
(105, 138, 'Tlaxcala', 'TLX', 'TX'),
(106, 138, 'Veracruz', 'VER', 'VZ'),
(107, 138, 'YucatГЎn', 'YUC', 'YU'),
(108, 138, 'Zacatecas', 'ZAC', 'ZA'),
(109, 30, 'Acre', 'ACR', 'AC'),
(110, 30, 'Alagoas', 'ALG', 'AL'),
(111, 30, 'AmapГЎ', 'AMP', 'AP'),
(112, 30, 'Amazonas', 'AMZ', 'AM'),
(113, 30, 'BahГ­a', 'BAH', 'BA'),
(114, 30, 'CearГЎ', 'CEA', 'CE'),
(115, 30, 'Distrito Federal', 'DFB', 'DF'),
(116, 30, 'Espirito Santo', 'ESS', 'ES'),
(117, 30, 'GoiГЎs', 'GOI', 'GO'),
(118, 30, 'MaranhГЈo', 'MAR', 'MA'),
(119, 30, 'Mato Grosso', 'MAT', 'MT'),
(120, 30, 'Mato Grosso do Sul', 'MGS', 'MS'),
(121, 30, 'Minas GeraГ­s', 'MIG', 'MG'),
(122, 30, 'ParanГЎ', 'PAR', 'PR'),
(123, 30, 'ParaГ­ba', 'PRB', 'PB'),
(124, 30, 'ParГЎ', 'PAB', 'PA'),
(125, 30, 'Pernambuco', 'PER', 'PR'),
(126, 30, 'PiauГ­', 'PIA', 'PI'),
(127, 30, 'Rio Grande do Norte', 'RGN', 'RN'),
(128, 30, 'Rio Grande do Sul', 'RGS', 'RS'),
(129, 30, 'Rio de Janeiro', 'RDJ', 'RJ'),
(130, 30, 'RondГґnia', 'RON', 'RO'),
(131, 30, 'Roraima', 'ROR', 'RR'),
(132, 30, 'Santa Catarina', 'SAC', 'SC'),
(133, 30, 'Sergipe', 'SER', 'SE'),
(134, 30, 'SГЈo Paulo', 'SAP', 'SP'),
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
(245, 176, 'Агинский Бурятский автономный округ', 'AGB', '80'),
(166, 176, 'Адыгея Республика', 'AD', '01'),
(169, 176, 'Алтай Республика', 'AL', '04'),
(187, 176, 'Алтайский край', 'ALT', '22'),
(193, 176, 'Амурская область', 'AMU', '28'),
(194, 176, 'Архангельская область', 'ARK', '29'),
(195, 176, 'Астраханская область', 'AST', '30'),
(167, 176, 'Башкортостан Республика', 'BA', '02'),
(196, 176, 'Белгородская область', 'BEL', '31'),
(197, 176, 'Брянская область', 'BRY', '32'),
(168, 176, 'Бурятия Республика', 'BU', '03'),
(198, 176, 'Владимирская область', 'VLA', '33'),
(199, 176, 'Волгоградская область', 'VGG', '34'),
(200, 176, 'Вологодская область', 'VLG', '35'),
(201, 176, 'Воронежская область', 'VOR', '36'),
(170, 176, 'Дагестан Республика', 'DA', '05'),
(244, 176, 'Еврейская автономная область', 'YEV', '79'),
(202, 176, 'Ивановская область', 'IVA', '37'),
(171, 176, 'Ингушетия Республика', 'IN', '06'),
(203, 176, 'Иркутская область', 'IRK', '38'),
(172, 176, 'Кабардино-Балкарская Республика', 'KB', '07'),
(204, 176, 'Калининградская область', 'KGD', '39'),
(173, 176, 'Калмыкия Республика', 'KL', '08'),
(205, 176, 'Калужская область', 'KLU', '40'),
(206, 176, 'Камчатский край', 'KAM', '41'),
(174, 176, 'Карачаево-Черкесская Республика', 'KC', '09'),
(175, 176, 'Карелия Республика', 'KR', '10'),
(207, 176, 'Кемеровская область', 'KEM', '42'),
(208, 176, 'Кировская область', 'KIR', '43'),
(176, 176, 'Коми Республика', 'KO', '11'),
(209, 176, 'Костромская область', 'KOS', '44'),
(188, 176, 'Краснодарский край', 'KDA', '23'),
(189, 176, 'Красноярский край', 'KIA', '24'),
(210, 176, 'Курганская область', 'KGN', '45'),
(211, 176, 'Курская область', 'KRS', '46'),
(212, 176, 'Ленинградская область', 'LEN', '47'),
(213, 176, 'Липецкая область', 'LIP', '48'),
(214, 176, 'Магаданская область', 'MAG', '49'),
(177, 176, 'Марий Эл Республика', 'ME', '12'),
(178, 176, 'Мордовия Республика', 'MO', '13'),
(242, 176, 'Москва', 'MOW', '77'),
(215, 176, 'Московская область', 'MOS', '50'),
(216, 176, 'Мурманская область', 'MUR', '51'),
(248, 176, 'Ненецкий автономный округ', 'NEN', '83'),
(217, 176, 'Нижегородская область', 'NIZ', '52'),
(218, 176, 'Новгородская область', 'NGR', '53'),
(219, 176, 'Новосибирская область', 'NVS', '54'),
(220, 176, 'Омская область', 'OMS', '55'),
(221, 176, 'Оренбургская область', 'ORE', '56'),
(222, 176, 'Орловская область', 'ORL', '57'),
(223, 176, 'Пензенская область', 'PNZ', '58'),
(224, 176, 'Пермский край', 'PER', '59'),
(190, 176, 'Приморский край', 'PRI', '25'),
(225, 176, 'Псковская область', 'PSK', '60'),
(226, 176, 'Ростовская область', 'ROS', '61'),
(227, 176, 'Рязанская область', 'RYA', '62'),
(228, 176, 'Самарская область', 'SAM', '63'),
(243, 176, 'Санкт-Петербург', 'SPE', '78'),
(229, 176, 'Саратовская область', 'SAR', '64'),
(230, 176, 'Сахалинская область', 'SAK', '65'),
(179, 176, 'Саха (Якутия) Республика', 'SA', '14'),
(231, 176, 'Свердловская область', 'SVE', '66'),
(180, 176, 'Северная Осетия-Алания Республика', 'SE', '15'),
(232, 176, 'Смоленская область', 'SMO', '67'),
(191, 176, 'Ставропольский край', 'STA', '26'),
(233, 176, 'Тамбовская область', 'TAM', '68'),
(181, 176, 'Татарстан Республика', 'TA', '16'),
(234, 176, 'Тверская область', 'TVE', '69'),
(235, 176, 'Томская область', 'TOM', '70'),
(236, 176, 'Тульская область', 'TUL', '71'),
(182, 176, 'Тыва Республика', 'TY', '17'),
(237, 176, 'Тюменская область', 'TYU', '72'),
(183, 176, 'Удмуртская Республика', 'UD', '18'),
(238, 176, 'Ульяновская область', 'ULY', '73'),
(250, 176, 'Усть-Ордынский Бурятский автономный округ', 'UOB', '85'),
(192, 176, 'Хабаровский край', 'KHA', '27'),
(184, 176, 'Хакасия Республика', 'KK', '19'),
(251, 176, 'Ханты-Мансийский автономный округ', 'KHM', '86'),
(239, 176, 'Челябинская область', 'CHE', '74'),
(185, 176, 'Чеченская Республика', 'CE', '20'),
(240, 176, 'Читинская область', 'CHI', '75'),
(186, 176, 'Чувашская Республика', 'CU', '21'),
(252, 176, 'Чукотский автономный округ', 'CHU', '87'),
(254, 176, 'Ямало-Ненецкий автономный округ', 'YAN', '89'),
(241, 176, 'Ярославская область', 'YAR', '76')
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
)  COMMENT='Ставки доставки' AUTO_INCREMENT=4 ;
");
##
## Dumping data for table `#__{vm}_tax_rate`
##

$db->query("INSERT INTO `#__vm_tax_rate` VALUES (2, 1, 'CA', 'USA', 964565926, 0.0825);");
$db->query("INSERT INTO `#__vm_tax_rate` VALUES (3, 1, 'МСК', 'Российская Федерация', 4556755, 0.013);");

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
)  COMMENT='Информация о клиенте BT = Оплатить';
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
)  COMMENT='Продавцы' AUTO_INCREMENT=3 ;
");
##
## Dumping data for table `#__{vm}_vendor`
##
$db->query(
" INSERT INTO `#__{vm}_vendor` VALUES (1, '3456.ru', 'Ковалёв', 'Владимир', 'Анатольевич', 'Администратор', '8-926-223-49-05', '8-926-223-49-05', '8-926-223-49-05', 'wov2004@gmail.com', '8-926-223-49-05', '', '', 'Люберцы', '50', 'RUS', '140007', '3456.ru', '<p align=\"center\">Это демонстрационный магазин VirtueMart для CMS Joomla.</p><p align=\"center\">Товары не отправляются, не продаются и не возвращаются.</p><p align=\"center\">Если товар вам понравился, пройдите на сайт <a href=\"http://3456.ru\">Мягкая мебель</a>  </p>', 0, '', '9e974f0a64262e06d0a145b19fe8e51c.gif', 'RUB', 950302468, 1165668615, 'shop_image/', '<p align=\"center\">Это демонстрационный магазин VirtueMart для CMS Joomla.</p><p align=\"center\">Товары не отправляются, не продаются и не возвращаются.</p><p align=\"center\">Если товар вам понравился, пройдите на сайт <a href=\"http://3456.ru/\">Мягкая мебель</a>  </p>', 'http://3456.ru', 0.00, 0.00, '1|руб\0|0|,| |1|8')
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
)  COMMENT='Категории продавцов' AUTO_INCREMENT=7 ;
");
##
## Dumping data for table `#__{vm}_vendor_category`
##

$db->query("INSERT INTO `#__{vm}_vendor_category` VALUES (6, '-по умолчанию-', 'Стандартная');");

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
)  COMMENT='Записи о посещении партнерки';
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
) TYPE=MyISAM COMMENT='Уведомления';
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
)  COMMENT='Зоны для  Модуля доставки по зона' AUTO_INCREMENT=1 ;
");
##
## Dumping data for table `#__{vm}_zone_shipping`
##

$db->query( "INSERT INTO `#__{vm}_zone_shipping` VALUES (1, 'По умолчанию', 6.00, 35.00, 'Эта зона доставки по умолчанию. Эта зона будет использоваться пока вы не назначите каждой стране свою зону.', 2),
(2, 'Zone 1', 1000.00, 10000.00, 'Пример зоны', 2),
(3, 'Zone 2', 2.00, 22.00, 'Это вторая зона. Вы можете использовать это поле, чтобы делать заметки о зоне.', 2),
(4, 'Zone 3', 11.00, 64.00, 'Очень практично для подробностей о зоне или специальных замечаний.', 2);
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

$db->query( "INSERT INTO `#__{vm}_payment_method` VALUES (1, 1, 'Оплата при заказе', '', 6, '0.00', 4, 'PO', 'N', 0, 'Y', '', '', '');" );
$db->query( "INSERT INTO `#__{vm}_payment_method` VALUES (2, 1, 'Оплата при получении', '', 5, '-2.00', 5, 'COD', 'N', 0, 'Y', '', '', '');" );
$db->query( "INSERT INTO `#__{vm}_payment_method` VALUES (3, 1, 'Оплата по кредитной карте', 'ps_authorize', 5, '0.00', 0, 'AN', 'Y', 0, 'Y', '1,2,6,7,', '', '');
" );
$db->query( "INSERT INTO `#__{vm}_payment_method` VALUES (4, 1, 'Оплата через PayPal', 'ps_paypal', 5, '0.00', 0, 'PP', 'P', 0, 'Y', '', '', '');
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
$db->query( "INSERT INTO `#__{vm}_payment_method` VALUES (8, 1, 'Оплата по NoChex', 'ps_nochex', 5, '0.00', 0, 'NOCHEX', 'P', 0, 'N', '', '<form action=\"https://www.nochex.com/nochex.dll/checkout\" method=post target=\"_blank\">
											<input type=\"hidden\" name=\"email\" value=\"<?php echo NOCHEX_EMAIL ?>\" />
											<input type=\"hidden\" name=\"amount\" value=\"<?php printf(\"%.2f\", \$db->f(\"order_total\"))?>\" />
											<input type=\"hidden\" name=\"ordernumber\" value=\"<?php \$db->p(\"order_id\") ?>\" />
											<input type=\"hidden\" name=\"logo\" value=\"<?php echo \$vendor_image_url ?>\" />
											<input type=\"hidden\" name=\"returnurl\" value=\"<?php echo SECUREURL .\"index.php?option=com_virtuemart&amp;page=checkout.result&amp;order_id=\".\$db->f(\"order_id\") ?>\" />
											<input type=\"image\" name=\"submit\" src=\"http://www.nochex.com/web/images/paymeanimated.gif\">
											</form>', '');" );
$db->query( "INSERT INTO `#__{vm}_payment_method` VALUES (9, 1, 'Оплата по кредитной карте (PayMeNow)', 'ps_paymenow', 5, '0.00', 0, 'PN', 'Y', 0, 'N', '1,2,3,', '', '');" );
$db->query( "INSERT INTO `#__{vm}_payment_method` VALUES (10, 1, 'Оплата по eWay', 'ps_eway', 5, '0.00', 0, 'EW', 'Y', 0, 'N', '', '', '');");
$db->query( "INSERT INTO `#__{vm}_payment_method` VALUES (11, 1, 'Оплата по eCheck.net', 'ps_echeck', 5, '0.00', 0, 'ECK', 'B', 0, 'N', '', '', '');");
$db->query( "INSERT INTO `#__{vm}_payment_method` VALUES (12, 1, 'Оплата по кредитной карте (eProcessingNetwork)', 'ps_epn', 5, '0.00', 0, 'EPN', 'Y', 0, 'N', '1,2,3,', '', '');" );
$db->query( "INSERT INTO `#__{vm}_payment_method` VALUES (13, 1, 'Оплата по iKobo', '', 5, '0.00', 0, 'IK', 'P', 0, 'N', '', '<form action=\"https://www.iKobo.com/store/index.php\" method=\"post\">
  <input type=\"hidden\" name=\"cmd\" value=\"cart\" />Щелкните по картинке ниже чтобы оплатить Pay with iKobo
  <input type=\"image\" src=\"https://www.ikobo.com/merchant/buttons/ikobo_pay1.gif\" name=\"submit\" alt=\"Платить через iKobo\" />
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
$db->query( "INSERT INTO `#__{vm}_payment_method` VALUES (14, 1, 'Оплата по iTransact', '', 5, '0.00', 0, 'ITR', 'P', 0, 'N', '', '<?php
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

$db->query( "INSERT INTO `#__{vm}_payment_method` VALUES (17, 1, 'RUS yandex-деньги', 'ps_yandex', 5, 0.00, 0, 'YNX', 'P', 0, 'Y', '', '
<form method=POST action=\"http://money.yandex.ru/select-wallet.xml\">
<input type=hidden name=TargetCurrency value=\"643\">
<input type=hidden name=ShopID value=\"ШопИД\">
<input type=hidden name=Currency value=\"643\">

<input type=hidden name=wbp_InactivityPeriod value=\"2\">
<input type=hidden name=wbp_ShopAddress value=\"ws1.paycash.ru:8128\">
<input type=hidden name=wbp_ShopEncryptionKey value=\"ШопКейКодирования\">
<input type=hidden name=wbp_ShopErrorInfo value=\"\">
<input type=hidden name=wbp_ShopKeyID value=\"ШопКей\">
<input type=hidden name=wbp_Version value=\'1.0\'>

<input type=hidden name=InvoiceArticlesNames value=\"Примечание\">
<input type=hidden name=Sum value=\"Сумма\">
<input type=hidden name=OrderID value=\"ИдАккаунта\">
<input type=hidden name=CustAddr value=\"Обратная страничка\">

<input type=submit value=\"Оплатить\">
', '');");
$db->query( "INSERT INTO `#__{vm}_payment_method` VALUES (19, 1, 'RUS rupay', 'ps_rupay', 5, 0.00, 0, 'RPY', 'P', 0, 'Y', '', '<?\r\n/**********************************\r\nthis is a \"payment extra info\" code\r\n**********************************/\r\n\r\n\$task = mosGetParam(\$_REQUEST, \"task\", \"show\");\r\nrequire_once( CLASSPATH.\"payment/\".\$db->f(\"payment_class\").\".php\" );\r\n\r\n\$rupay = new ps_rupay();\r\n\r\nswitch(\$task) {\r\n  case \"send\":\r\n    \$method = mosGetParam(\$_REQUEST, \"method\");\r\n    \$amount = mosGetParam(\$_REQUEST, \"amount\");\r\n    \$currency = mosGetParam(\$_REQUEST, \"currency\");\r\n    \$order_id = intval(mosGetParam(\$_REQUEST, \"order_id\"));\r\n    \$customer_note = mosGetParam(\$_REQUEST, \"customer_note\", \"\");\r\n    if( !\$result = \$rupay->get_payment_properties( \$order_id, \$method, \$currency, \$amount ) )\r\n      echo \$VM_LANG->PHPSHOP_RUPAY_ERROR_GET_PAYMENT_PROPERTIES;\r\n    else\r\n      echo \$result;\r\n    break;\r\n\r\n  case \"check\":\r\n    if( !\$result = \$rupay->check_payment_status(  ) )\r\n      echo \$VM_LANG->PHPSHOP_RUPAY_ERROR_CHECK_PAYMENT_STATUS;\r\n    else\r\n      echo \$result;\r\n    break;\r\n\r\n  case \"show\":\r\n  default:\r\n    \$order_id = intval(mosGetParam(\$vars, \"order_id\"));\r\n    if( !\$result = \$rupay->get_payment_methods( \$order_id, \$_SESSION[\"vendor_currency\"], round( \$db->f(\"order_subtotal\")+\$tax_total-\$discount_total, 2)) ) {\r\n      echo \$VM_LANG->PHPSHOP_RUPAY_ERROR_GET_PAYMENT_METHODS;\r\n    }\r\n    else {\r\n      echo \$result;\r\n    }\r\n    break;\r\n}\r\n\r\n?>', '');");
$db->query( "INSERT INTO `#__{vm}_payment_method` VALUES (22, 1, 'RUS webmoney', 'ps_webmoney', 5, 0.00, 0, 'WBM', 'P', 0, 'Y', '', '<?php require_once( CLASSPATH. \'payment/ps_wm_paymentextra.php\' );?>', '');");
$db->query( "INSERT INTO `#__{vm}_payment_method` VALUES ('', 1, 'Оплата по Dankort / PBS', 'ps_pbs', 5, '0.00', 0, 'PBS', 'P', 0, 'N', '', '', '');");
$db->query( "INSERT INTO `#__{vm}_payment_method` VALUES ('', 1, 'Оплата по PayFlow Pro', 'ps_pfp', 5, '0.00', 0, 'PFP', 'Y', 0, 'Y', '1,2,6,7,', '', '');" );

$db->query( "INSERT INTO `#__{vm}_manufacturer` VALUES ('1', 'Производитель', 'info@manufacturer.com', 'Пример производителя товаров', '1', 'http://www.a-url.com');" );
$db->query( "INSERT INTO `#__{vm}_manufacturer_category` VALUES ('1', '-по умолчанию-', 'Категория производителей по умолчанию'); " );

##
## Структура таблицы `#__{vm}_rp_assign_zone`
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
## Дамп данных таблицы `#__{vm}_rp_assign_zone`
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
## Структура таблицы `#__{vm}_rp_state`
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
## Дамп данных таблицы `#__{vm}_rp_state`
##
$db->query("
INSERT INTO `#__{vm}_rp_state` VALUES (254, 0, 'Агинский Бурятский автономный округ', '80', 0),
(166, 1, 'Адыгея Республика', '01', 1),
(167, 3, 'Алтай Республика', '04', 1),
(168, 2, 'Алтайский край', '22', 1),
(169, 3, 'Амурская область', '28', 1),
(170, 2, 'Архангельская область', '29', 1),
(171, 1, 'Астраханская область', '30', 1),
(255, 0, 'Байконур', '90', 1),
(172, 2, 'Башкортостан Республика', '02', 1),
(173, 1, 'Белгородская область', '31', 1),
(174, 1, 'Брянская область', '32', 1),
(175, 2, 'Бурятия Республика', '03', 1),
(176, 1, 'Владимирская область', '33', 1),
(177, 1, 'Волгоградская область', '34', 1),
(178, 2, 'Вологодская область', '35', 1),
(179, 1, 'Воронежская область', '36', 1),
(180, 1, 'Дагестан Республика', '05', 1),
(181, 3, 'Еврейская автономная область', '79', 1),
(182, 1, 'Ивановская область', '37', 1),
(183, 1, 'Ингушетия Республика', '06', 1),
(184, 2, 'Иркутская область', '38', 1),
(185, 1, 'Кабардино-Балкарская Республика', '07', 1),
(186, 1, 'Калининградская область', '39', 1),
(187, 2, 'Калмыкия Республика', '08', 1),
(188, 1, 'Калужская область', '40', 1),
(189, 4, 'Камчатский край', '41', 1),
(190, 1, 'Карачаево-Черкесская Республика', '09', 1),
(191, 2, 'Карелия Республика', '10', 1),
(192, 3, 'Кемеровская область', '42', 1),
(193, 2, 'Кировская область', '43', 1),
(194, 2, 'Коми Республика', '11', 1),
(195, 0, 'Коми-Пермяцкий автономный округ', '81', 0),
(197, 1, 'Костромская область', '44', 1),
(198, 1, 'Краснодарский край', '23', 1),
(199, 2, 'Красноярский край', '24', 1),
(200, 2, 'Курганская область', '45', 1),
(201, 1, 'Курская область', '46', 1),
(202, 1, 'Ленинградская область', '47', 1),
(203, 1, 'Липецкая область', '48', 1),
(204, 4, 'Магаданская область', '49', 2),
(205, 1, 'Марий-Эл Республика', '12', 1),
(206, 1, 'Мордовия Республика', '13', 1),
(207, 1, 'МОСКВА', '77', 1),
(208, 1, 'Московская область', '50', 1),
(209, 3, 'Мурманская область', '51', 1),
(210, 4, 'Ненецкий автономный округ', '83', 0),
(211, 1, 'Нижегородская область', '52', 1),
(212, 1, 'Новгородская область', '53', 1),
(213, 2, 'Новосибирская область', '54', 1),
(214, 2, 'Омская область', '55', 1),
(215, 2, 'Оренбургская область', '56', 1),
(216, 1, 'Орловская область', '57', 1),
(217, 1, 'Пензенская область', '58', 1),
(218, 2, 'Пермский край', '59', 1),
(219, 3, 'Приморский край', '25', 1),
(220, 1, 'Псковская область', '60', 1),
(221, 1, 'Ростовская область', '61', 1),
(222, 1, 'Рязанская область', '62', 1),
(223, 1, 'Самарская область', '63', 1),
(224, 1, 'САНКТ-ПЕТЕРБУРГ', '78', 1),
(225, 1, 'Саратовская область', '64', 1),
(226, 4, 'Саха (Якутия) Республика', '14', 1),
(227, 4, 'Сахалинская область', '65', 1),
(228, 2, 'Свердловская область', '66', 1),
(229, 1, 'Северная Осетия-Алания', '15', 1),
(230, 1, 'Смоленская область', '67', 1),
(231, 1, 'Ставропольский край', '26', 1),
(232, 0, 'Таймырский автономный округ', '84', 0),
(233, 1, 'Тамбовская область', '68', 1),
(234, 1, 'Татарстан', '16', 1),
(235, 1, 'Тверская область', '69', 1),
(236, 3, 'Томская область', '70', 1),
(237, 1, 'Тульская область', '71', 1),
(238, 2, 'Тыва Республика', '17', 1),
(239, 2, 'Тюменская область', '72', 1),
(240, 2, 'Удмуртская Республика', '18', 1),
(241, 1, 'Ульяновская область', '73', 1),
(242, 0, 'Усть-Ордынский Бурятский АО', '85', 0),
(243, 3, 'Хабаровский край', '27', 1),
(244, 2, 'Хакасия Республика', '19', 1),
(245, 3, 'Ханты-Мансийский автономный округ', '86', 0),
(246, 2, 'Челябинская область', '74', 1),
(247, 1, 'Чеченская Республика', '20', 1),
(248, 3, 'Читинская область', '75', 1),
(249, 1, 'Чувашская Республика', '21', 1),
(250, 5, 'Чукотский автономный округ', '87', 2),
(251, 0, 'Эвенкийский автономный округ', '88', 0),
(252, 4, 'Ямало-Ненецкий автономный округ', '89', 0),
(253, 1, 'Ярославская область', '76', 1);
");

##
## Структура таблицы `#__{vm}_rp_zone_rate`
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
## Дамп данных таблицы `#__{vm}_rp_zone_rate`
##
$db->query("
INSERT INTO `#__{vm}_rp_zone_rate` VALUES (1, 1, 1, 'до 600 км', 61.50, 5.50, 0),
(2, 1, 2, '601 - 2000 км', 64.80, 5.90, 0),
(3, 1, 3, '2001 - 5000 км', 77.40, 7.40, 0),
(4, 1, 4, '5001 - 8000 км', 103.55, 9.45, 0),
(5, 1, 5, 'свыше 8000 км', 116.65, 10.40, 0),
(30, 1, 9, 'Воздушным транспортом', 102.30, 30.70, 0),
(8, 2, 1, 'до 600 км', 68.45, 6.10, 0),
(9, 2, 2, '601 - 2000 км', 72.10, 6.60, 0),
(10, 2, 3, '2001 - 5000 км', 86.10, 8.20, 0),
(11, 2, 4, '5001 - 8000 км', 115.30, 10.55, 0),
(12, 2, 5, 'свыше 8000 км', 130.00, 11.60, 0),
(31, 2, 9, 'Воздушным транспортом', 114.35, 34.30, 0),
(13, 3, 1, 'до 600 км', 74.75, 6.70, 0),
(14, 3, 2, '601 - 2000 км', 78.80, 7.20, 0),
(15, 3, 3, '2001 - 5000 км', 94.00, 9.00, 0),
(16, 3, 4, '5001 - 8000 км', 125.90, 11.50, 0),
(17, 3, 5, 'свыше 8000 км', 141.80, 12.65, 0),
(32, 3, 9, 'Воздушным транспортом', 125.30, 37.60, 0),
(18, 4, 1, 'до 600 км', 88.20, 7.90, 0),
(19, 4, 2, '601 - 2000 км', 93.00, 8.50, 0),
(20, 4, 3, '2001 - 5000 км', 111.05, 10.60, 0),
(21, 4, 4, '5001 - 8000 км', 148.60, 13.60, 0),
(22, 4, 5, 'свыше 8000 км', 167.40, 14.90, 0),
(23, 4, 9, 'Воздушным транспортом', 145.00, 43.50, 0),
(24, 5, 1, 'до 600 км', 95.30, 8.60, 0),
(25, 5, 2, '601 - 2000 км', 100.45, 9.10, 0),
(26, 5, 3, '2001 - 5000 км', 120.00, 11.45, 0),
(27, 5, 4, '5001 - 8000 км', 160.50, 14.60, 0),
(28, 5, 5, 'свыше 8000 км', 180.80, 16.15, 0),
(29, 5, 9, 'Воздушным транспортом', 158.60, 47.60, 0);
");
?>