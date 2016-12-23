INSERT INTO `jos_components` VALUES (178,'VirtueMart RE','option=com_virtuemart',0,0,'option=com_virtuemart','VirtueMart RE','com_virtuemart',0,'../administrator/components/com_virtuemart/favicon.ico',0,'');
INSERT INTO `jos_components` VALUES (179,'virtuemart_version','',0,9999,'','','',0,'',0,'RELEASE=1.0.12.1\nDEV_STATUS=stable');
 
INSERT INTO `jos_mambots` VALUES (21,'RusVirtuemart поисковый плагин','virtuemart.searchbot','search',0,0,0,0,0,0,'0000-00-00 00:00:00','');
 

INSERT INTO `jos_modules` VALUES (34,'Ваша корзина','',1,'vm_basket',0,'0000-00-00 00:00:00',1,'mod_virtuemart_cart',0,0,1,'moduleclass_sfx=\nclass_sfx=',0,0);
INSERT INTO `jos_modules` VALUES (35,'Товары Лучший выбор','',1,'vm_ftrprod',0,'0000-00-00 00:00:00',1,'mod_virtuemart_featureprod',0,0,0,'max_items=2\nshow_price=1\nshow_addtocart=1\ndisplay_style=vertical\nproducts_per_row=4\ncategory_id=\nmoduleclass_sfx=\nclass_sfx=',0,0);
INSERT INTO `jos_modules` VALUES (36,'Последние поступления','',12,'left',0,'0000-00-00 00:00:00',0,'mod_virtuemart_latestprod',0,0,1,'',0,0);
INSERT INTO `jos_modules` VALUES (37,'Модуль Производители','',13,'left',0,'0000-00-00 00:00:00',0,'mod_virtuemart_manufacturers',0,0,1,'',0,0);
INSERT INTO `jos_modules` VALUES (38,'RusVirtueMart Десять лучших товаров','',1,'vm_topten',0,'0000-00-00 00:00:00',1,'mod_virtuemart_topten',0,0,0,'num_topsellers=10\nmoduleclass_sfx=\nclass_sfx=',0,0);
INSERT INTO `jos_modules` VALUES (39,'Главный модуль RusVirtueMart','',14,'left',0,'0000-00-00 00:00:00',0,'mod_virtuemart',0,0,1,'',0,0);
INSERT INTO `jos_modules` VALUES (40,'Модуль категорий товаров','',1,'vm_cat',0,'0000-00-00 00:00:00',1,'mod_product_categories',0,0,0,'menutype=links\njscook_type=menu\njscookMenu_style=ThemeOffice\nmenu_orientation=vbr\njscookTree_style=ThemeXP\nroot_label=Магазин\nmoduleclass_sfx=\nclass_sfx=',0,0);
INSERT INTO `jos_modules` VALUES (41,'Меню магазина','',1,'vm_top',0,'0000-00-00 00:00:00',1,'mod_mainmenu',0,0,0,'class_sfx=\nmoduleclass_sfx=\nmenutype=vm_topmenu\nmenu_style=horiz_flat\nfull_active_id=0\ncache=0\nmenu_images=0\nmenu_images_align=0\nexpand_menu=0\nactivate_parent=0\nindent_image=0\nindent_image1=\nindent_image2=\nindent_image3=\nindent_image4=\nindent_image5=\nindent_image6=\nspacer=\nend_spacer=',0,0);
INSERT INTO `jos_modules` VALUES (42,'Авторизация','',1,'vm_auth',0,'0000-00-00 00:00:00',1,'mod_login',0,0,1,'moduleclass_sfx=\npretext=\nposttext=\nlogin=\nlogout=\nlogin_message=0\nlogout_message=0\ngreeting=1\nname=0',1,0);

INSERT INTO `jos_modules` VALUES (43,'Поиск','',1,'vm_search',0,'0000-00-00 00:00:00',1,'mod_search',0,0,0,'moduleclass_sfx=\ncache=0\nset_itemid=\nwidth=20\ntext=\nbutton=\nbutton_pos=right\nbutton_text=',0,0);
 
INSERT INTO `jos_modules_menu` VALUES (34,0);
INSERT INTO `jos_modules_menu` VALUES (35,0);
INSERT INTO `jos_modules_menu` VALUES (36,0);
INSERT INTO `jos_modules_menu` VALUES (37,0);
INSERT INTO `jos_modules_menu` VALUES (38,0);
INSERT INTO `jos_modules_menu` VALUES (39,0);
INSERT INTO `jos_modules_menu` VALUES (40,0);
INSERT INTO `jos_modules_menu` VALUES (41,0);
INSERT INTO `jos_modules_menu` VALUES (42,0);
INSERT INTO `jos_modules_menu` VALUES (43,0);

INSERT INTO `jos_menu` VALUES ('','vm_topmenu','О магазине','index.php?option=com_content&task=view&id=12','content_typed',1,0,12,0,1,0,'0000-00-00 00:00:00',0,0,0,0,'');
INSERT INTO `jos_menu` VALUES ('','vm_topmenu','Оплата','index.php?option=com_content&task=view&id=13','content_typed',1,0,13,0,3,0,'0000-00-00 00:00:00',0,0,0,0,'');
INSERT INTO `jos_menu` VALUES ('','vm_topmenu','Доставка','index.php?option=com_content&task=view&id=14','content_typed',1,0,14,0,4,0,'0000-00-00 00:00:00',0,0,0,0,'');
INSERT INTO `jos_menu` VALUES ('','vm_topmenu','Контакты','index.php?option=com_content&task=view&id=15','content_typed',1,0,15,0,5,0,'0000-00-00 00:00:00',0,0,0,0,'');
INSERT INTO `jos_menu` VALUES ('','vm_topmenu','Каталог','index.php?option=com_virtuemart','components',1,0,19,0,2,0,'0000-00-00 00:00:00',0,0,0,0,'');

INSERT INTO jos_templates_menu (template, menuid, client_id) SELECT 'ru-center_ishop', id, '0' from jos_menu where `name` = 'Каталог' and `link` = 'index.php?option=com_virtuemart' and menutype = 'vm_topmenu';

INSERT INTO `jos_template_positions` VALUES ('','vm_basket','Корзина товаров VirtueMart');
INSERT INTO `jos_template_positions` VALUES ('','vm_search','Поиск');
INSERT INTO `jos_template_positions` VALUES ('','vm_cat','Список категорий товаров VirtueMart');
INSERT INTO `jos_template_positions` VALUES ('','vm_auth','Авторизация');
INSERT INTO `jos_template_positions` VALUES ('','vm_topten','Десять лучших товаров');
INSERT INTO `jos_template_positions` VALUES ('','vm_ftrprod','Спецпредложения');
INSERT INTO `jos_template_positions` VALUES ('','vm_top','Верхнее меню VirtueMart');


DROP TABLE IF EXISTS `jos_vm_affiliate`;
CREATE TABLE `jos_vm_affiliate` (
  `affiliate_id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL default '0',
  `active` char(1) NOT NULL default 'N',
  `rate` int(11) NOT NULL default '0',
  PRIMARY KEY  (`affiliate_id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 COMMENT='Используется для хранения запис';

--
-- Dumping data for table `jos_vm_affiliate`
--

LOCK TABLES `jos_vm_affiliate` WRITE;
/*!40000 ALTER TABLE `jos_vm_affiliate` DISABLE KEYS */;
/*!40000 ALTER TABLE `jos_vm_affiliate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_affiliate_sale`
--

DROP TABLE IF EXISTS `jos_vm_affiliate_sale`;
CREATE TABLE `jos_vm_affiliate_sale` (
  `order_id` int(11) NOT NULL default '0',
  `visit_id` varchar(32) NOT NULL default '',
  `affiliate_id` int(11) NOT NULL default '0',
  `rate` int(2) NOT NULL default '0',
  PRIMARY KEY  (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 COMMENT='Заказы по партнерке ';

--
-- Dumping data for table `jos_vm_affiliate_sale`
--

LOCK TABLES `jos_vm_affiliate_sale` WRITE;
/*!40000 ALTER TABLE `jos_vm_affiliate_sale` DISABLE KEYS */;
/*!40000 ALTER TABLE `jos_vm_affiliate_sale` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_auth_user_vendor`
--

DROP TABLE IF EXISTS `jos_vm_auth_user_vendor`;
CREATE TABLE `jos_vm_auth_user_vendor` (
  `user_id` int(11) default NULL,
  `vendor_id` int(11) default NULL,
  KEY `idx_auth_user_vendor_user_id` (`user_id`),
  KEY `idx_auth_user_vendor_vendor_id` (`vendor_id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 COMMENT='Продавец-пользователь';

--
-- Dumping data for table `jos_vm_auth_user_vendor`
--

LOCK TABLES `jos_vm_auth_user_vendor` WRITE;
/*!40000 ALTER TABLE `jos_vm_auth_user_vendor` DISABLE KEYS */;
INSERT INTO `jos_vm_auth_user_vendor` VALUES (62,1);
/*!40000 ALTER TABLE `jos_vm_auth_user_vendor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_category`
--

DROP TABLE IF EXISTS `jos_vm_category`;
CREATE TABLE `jos_vm_category` (
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
  `category_flypage` varchar(255) NOT NULL default '',
  `list_order` int(11) NOT NULL default '0',
  PRIMARY KEY  (`category_id`),
  KEY `idx_category_vendor_id` (`vendor_id`),
  KEY `idx_category_name` (`category_name`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=cp1251 COMMENT='Категории товаров хранятся здес';

--
-- Dumping data for table `jos_vm_category`
--

LOCK TABLES `jos_vm_category` WRITE;
/*!40000 ALTER TABLE `jos_vm_category` DISABLE KEYS */;
INSERT INTO `jos_vm_category` VALUES (13,1,'Роликовые коньки','','','','Y',1196079357,1198059068,'browse_1',2,'shop.flypage',2);
INSERT INTO `jos_vm_category` VALUES (14,1,'Велосипеды','','','','Y',1196079375,1198059075,'browse_1',2,'shop.flypage',3);
INSERT INTO `jos_vm_category` VALUES (12,1,'Горные лыжи','','','','Y',1196079308,1198059061,'browse_1',2,'shop.flypage',1);
/*!40000 ALTER TABLE `jos_vm_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_category_xref`
--

DROP TABLE IF EXISTS `jos_vm_category_xref`;
CREATE TABLE `jos_vm_category_xref` (
  `category_parent_id` int(11) NOT NULL default '0',
  `category_child_id` int(11) NOT NULL default '0',
  `category_list` int(11) default NULL,
  KEY `category_xref_category_parent_id` (`category_parent_id`),
  KEY `category_xref_category_child_id` (`category_child_id`),
  KEY `idx_category_xref_category_list` (`category_list`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 COMMENT='Связи между категориями';

--
-- Dumping data for table `jos_vm_category_xref`
--

LOCK TABLES `jos_vm_category_xref` WRITE;
/*!40000 ALTER TABLE `jos_vm_category_xref` DISABLE KEYS */;
INSERT INTO `jos_vm_category_xref` VALUES (0,14,NULL);
INSERT INTO `jos_vm_category_xref` VALUES (0,13,NULL);
INSERT INTO `jos_vm_category_xref` VALUES (0,12,NULL);
/*!40000 ALTER TABLE `jos_vm_category_xref` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_country`
--

DROP TABLE IF EXISTS `jos_vm_country`;
CREATE TABLE `jos_vm_country` (
  `country_id` int(11) NOT NULL auto_increment,
  `zone_id` int(11) NOT NULL default '1',
  `country_name` varchar(64) default NULL,
  `country_3_code` char(3) default NULL,
  `country_2_code` char(2) default NULL,
  PRIMARY KEY  (`country_id`),
  KEY `idx_country_name` (`country_name`)
) ENGINE=MyISAM AUTO_INCREMENT=240 DEFAULT CHARSET=cp1251 COMMENT='Список стран';

--
-- Dumping data for table `jos_vm_country`
--

LOCK TABLES `jos_vm_country` WRITE;
/*!40000 ALTER TABLE `jos_vm_country` DISABLE KEYS */;
INSERT INTO `jos_vm_country` VALUES (1,1,'Афганистан','AFG','AF');
INSERT INTO `jos_vm_country` VALUES (2,1,'Албания','ALB','AL');
INSERT INTO `jos_vm_country` VALUES (3,1,'Алжир','DZA','DZ');
INSERT INTO `jos_vm_country` VALUES (4,1,'Американская саомя','ASM','AS');
INSERT INTO `jos_vm_country` VALUES (5,1,'Андорра','AND','AD');
INSERT INTO `jos_vm_country` VALUES (6,1,'Ангола','AGO','AO');
INSERT INTO `jos_vm_country` VALUES (7,1,'Ангилья','AIA','AI');
INSERT INTO `jos_vm_country` VALUES (8,1,'Антарктида','ATA','AQ');
INSERT INTO `jos_vm_country` VALUES (9,1,'Антигуа и Барбуда','ATG','AG');
INSERT INTO `jos_vm_country` VALUES (10,1,'Аргентина','ARG','AR');
INSERT INTO `jos_vm_country` VALUES (11,1,'Армения','ARM','AM');
INSERT INTO `jos_vm_country` VALUES (12,1,'Аруба','ABW','AW');
INSERT INTO `jos_vm_country` VALUES (13,1,'Австралия','AUS','AU');
INSERT INTO `jos_vm_country` VALUES (14,1,'Австрия','AUT','AT');
INSERT INTO `jos_vm_country` VALUES (15,1,'Азербайджан','AZE','AZ');
INSERT INTO `jos_vm_country` VALUES (16,1,'Багамы','BHS','BS');
INSERT INTO `jos_vm_country` VALUES (17,1,'Бахрейн','BHR','BH');
INSERT INTO `jos_vm_country` VALUES (18,1,'Бангладеш','BGD','BD');
INSERT INTO `jos_vm_country` VALUES (19,1,'Барбадос','BRB','BB');
INSERT INTO `jos_vm_country` VALUES (20,1,'Беларусь','BLR','BY');
INSERT INTO `jos_vm_country` VALUES (21,1,'Бельгия','BEL','BE');
INSERT INTO `jos_vm_country` VALUES (22,1,'Белиз','BLZ','BZ');
INSERT INTO `jos_vm_country` VALUES (23,1,'Бенин','BEN','BJ');
INSERT INTO `jos_vm_country` VALUES (24,1,'Бермуды','BMU','BM');
INSERT INTO `jos_vm_country` VALUES (25,1,'Бутан','BTN','BT');
INSERT INTO `jos_vm_country` VALUES (26,1,'Боливия','BOL','BO');
INSERT INTO `jos_vm_country` VALUES (27,1,'Босния и Герцеговина','BIH','BA');
INSERT INTO `jos_vm_country` VALUES (28,1,'Ботсвана','BWA','BW');
INSERT INTO `jos_vm_country` VALUES (29,1,'Остров бувет','BVT','BV');
INSERT INTO `jos_vm_country` VALUES (30,1,'Бразилия','BRA','BR');
INSERT INTO `jos_vm_country` VALUES (31,1,'Британские острова в Тихом океане','IOT','IO');
INSERT INTO `jos_vm_country` VALUES (32,1,'Остров Бруней','BRN','BN');
INSERT INTO `jos_vm_country` VALUES (33,1,'Болгария','BGR','BG');
INSERT INTO `jos_vm_country` VALUES (34,1,'Буркино фасо','BFA','BF');
INSERT INTO `jos_vm_country` VALUES (35,1,'Бурунди','BDI','BI');
INSERT INTO `jos_vm_country` VALUES (36,1,'Камбоджа','KHM','KH');
INSERT INTO `jos_vm_country` VALUES (37,1,'Камерун','CMR','CM');
INSERT INTO `jos_vm_country` VALUES (38,1,'Канада','CAN','CA');
INSERT INTO `jos_vm_country` VALUES (39,1,'Капе верде','CPV','CV');
INSERT INTO `jos_vm_country` VALUES (40,1,'Каймановы острова','CYM','KY');
INSERT INTO `jos_vm_country` VALUES (41,1,'Центральная африканская республика','CAF','CF');
INSERT INTO `jos_vm_country` VALUES (42,1,'Республика Чад','TCD','TD');
INSERT INTO `jos_vm_country` VALUES (43,1,'Чили','CHL','CL');
INSERT INTO `jos_vm_country` VALUES (44,1,'Китай','CHN','CN');
INSERT INTO `jos_vm_country` VALUES (45,1,'Остров Рождества','CXR','CX');
INSERT INTO `jos_vm_country` VALUES (46,1,'Острова Кокоса','CCK','CC');
INSERT INTO `jos_vm_country` VALUES (47,1,'Колумбия','COL','CO');
INSERT INTO `jos_vm_country` VALUES (48,1,'Коморос','COM','KM');
INSERT INTO `jos_vm_country` VALUES (49,1,'Конго','COG','CG');
INSERT INTO `jos_vm_country` VALUES (50,1,'Острова Кука','COK','CK');
INSERT INTO `jos_vm_country` VALUES (51,1,'Коста Рика','CRI','CR');
INSERT INTO `jos_vm_country` VALUES (52,1,'Кот-де-Вуар','CIV','CI');
INSERT INTO `jos_vm_country` VALUES (53,1,'Хорватия','HRV','HR');
INSERT INTO `jos_vm_country` VALUES (54,1,'Куба','CUB','CU');
INSERT INTO `jos_vm_country` VALUES (55,1,'Кипр','CYP','CY');
INSERT INTO `jos_vm_country` VALUES (56,1,'Чехия','CZE','CZ');
INSERT INTO `jos_vm_country` VALUES (57,1,'Дания','DNK','DK');
INSERT INTO `jos_vm_country` VALUES (58,1,'Джибути','DJI','DJ');
INSERT INTO `jos_vm_country` VALUES (59,1,'Доминика','DMA','DM');
INSERT INTO `jos_vm_country` VALUES (60,1,'Доминиканская реп.','DOM','DO');
INSERT INTO `jos_vm_country` VALUES (61,1,'Вост. Тимор','TMP','TP');
INSERT INTO `jos_vm_country` VALUES (62,1,'Эквадор','ECU','EC');
INSERT INTO `jos_vm_country` VALUES (63,1,'Египет','EGY','EG');
INSERT INTO `jos_vm_country` VALUES (64,1,'Сальвадор','SLV','SV');
INSERT INTO `jos_vm_country` VALUES (65,1,'Экватор. Гвинея','GNQ','GQ');
INSERT INTO `jos_vm_country` VALUES (66,1,'Эритрея','ERI','ER');
INSERT INTO `jos_vm_country` VALUES (67,1,'Эстония','EST','EE');
INSERT INTO `jos_vm_country` VALUES (68,1,'Эфиопия','ETH','ET');
INSERT INTO `jos_vm_country` VALUES (69,1,'Фолклендские острова','FLK','FK');
INSERT INTO `jos_vm_country` VALUES (70,1,'Острова Фаро','FRO','FO');
INSERT INTO `jos_vm_country` VALUES (71,1,'Фиджи','FJI','FJ');
INSERT INTO `jos_vm_country` VALUES (72,1,'Финляндия','FIN','FI');
INSERT INTO `jos_vm_country` VALUES (73,1,'Франция','FRA','FR');
INSERT INTO `jos_vm_country` VALUES (74,1,'Франция, метрополия','FXX','FX');
INSERT INTO `jos_vm_country` VALUES (75,1,'Франц. Гайана','GUF','GF');
INSERT INTO `jos_vm_country` VALUES (76,1,'Франц. Полинезия','PYF','PF');
INSERT INTO `jos_vm_country` VALUES (77,1,'Франц. Южн. Территории','ATF','TF');
INSERT INTO `jos_vm_country` VALUES (78,1,'Габон','GAB','GA');
INSERT INTO `jos_vm_country` VALUES (79,1,'Гамбия','GMB','GM');
INSERT INTO `jos_vm_country` VALUES (80,1,'Грузия','GEO','GE');
INSERT INTO `jos_vm_country` VALUES (81,1,'Германия','DEU','DE');
INSERT INTO `jos_vm_country` VALUES (82,1,'Гана','GHA','GH');
INSERT INTO `jos_vm_country` VALUES (83,1,'Гибралтар','GIB','GI');
INSERT INTO `jos_vm_country` VALUES (84,1,'Греция','GRC','GR');
INSERT INTO `jos_vm_country` VALUES (85,1,'Гренландия','GRL','GL');
INSERT INTO `jos_vm_country` VALUES (86,1,'Гренада','GRD','GD');
INSERT INTO `jos_vm_country` VALUES (87,1,'Гваделупа','GLP','GP');
INSERT INTO `jos_vm_country` VALUES (88,1,'Гуам','GUM','GU');
INSERT INTO `jos_vm_country` VALUES (89,1,'Гватемала','GTM','GT');
INSERT INTO `jos_vm_country` VALUES (90,1,'Гвинея','GIN','GN');
INSERT INTO `jos_vm_country` VALUES (91,1,'Гвинея-биссау','GNB','GW');
INSERT INTO `jos_vm_country` VALUES (92,1,'Гайана','GUY','GY');
INSERT INTO `jos_vm_country` VALUES (93,1,'Гаити','HTI','HT');
INSERT INTO `jos_vm_country` VALUES (94,1,'Острова Хеад и Макдональд','HMD','HM');
INSERT INTO `jos_vm_country` VALUES (95,1,'Гондурас','HND','HN');
INSERT INTO `jos_vm_country` VALUES (96,1,'Гонконг','HKG','HK');
INSERT INTO `jos_vm_country` VALUES (97,1,'Венгрия','HUN','HU');
INSERT INTO `jos_vm_country` VALUES (98,1,'Исландия','ISL','IS');
INSERT INTO `jos_vm_country` VALUES (99,1,'Индия','IND','IN');
INSERT INTO `jos_vm_country` VALUES (100,1,'Индонезия','IDN','ID');
INSERT INTO `jos_vm_country` VALUES (101,1,'Иран','IRN','IR');
INSERT INTO `jos_vm_country` VALUES (102,1,'Ирак','IRQ','IQ');
INSERT INTO `jos_vm_country` VALUES (103,1,'Ирландия','IRL','IE');
INSERT INTO `jos_vm_country` VALUES (104,1,'Израиль','ISR','IL');
INSERT INTO `jos_vm_country` VALUES (105,1,'Италия','ITA','IT');
INSERT INTO `jos_vm_country` VALUES (106,1,'Ямайка','JAM','JM');
INSERT INTO `jos_vm_country` VALUES (107,1,'Япония','JPN','JP');
INSERT INTO `jos_vm_country` VALUES (108,1,'Иордан','JOR','JO');
INSERT INTO `jos_vm_country` VALUES (109,1,'Казахстан','KAZ','KZ');
INSERT INTO `jos_vm_country` VALUES (110,1,'Кения','KEN','KE');
INSERT INTO `jos_vm_country` VALUES (111,1,'Кирибати','KIR','KI');
INSERT INTO `jos_vm_country` VALUES (112,1,'Демокр. реп. Корея','PRK','KP');
INSERT INTO `jos_vm_country` VALUES (113,1,'Корея','KOR','KR');
INSERT INTO `jos_vm_country` VALUES (114,1,'Кувейт','KWT','KW');
INSERT INTO `jos_vm_country` VALUES (115,1,'Киргизстан','KGZ','KG');
INSERT INTO `jos_vm_country` VALUES (116,1,'Демокр. реп. Лаос','LAO','LA');
INSERT INTO `jos_vm_country` VALUES (117,1,'Латвия','LVA','LV');
INSERT INTO `jos_vm_country` VALUES (118,1,'Лебанон','LBN','LB');
INSERT INTO `jos_vm_country` VALUES (119,1,'Лесото','LSO','LS');
INSERT INTO `jos_vm_country` VALUES (120,1,'Либерия','LBR','LR');
INSERT INTO `jos_vm_country` VALUES (121,1,'Ливийсякая араб. Джамахирия','LBY','LY');
INSERT INTO `jos_vm_country` VALUES (122,1,'Лихтенштейн','LIE','LI');
INSERT INTO `jos_vm_country` VALUES (123,1,'Литва','LTU','LT');
INSERT INTO `jos_vm_country` VALUES (124,1,'Люксембург','LUX','LU');
INSERT INTO `jos_vm_country` VALUES (125,1,'Маккау','MAC','MO');
INSERT INTO `jos_vm_country` VALUES (126,1,'Македония','MKD','MK');
INSERT INTO `jos_vm_country` VALUES (127,1,'Мадагаскар','MDG','MG');
INSERT INTO `jos_vm_country` VALUES (128,1,'Малави','MWI','MW');
INSERT INTO `jos_vm_country` VALUES (129,1,'Малайзия','MYS','MY');
INSERT INTO `jos_vm_country` VALUES (130,1,'Мальдивы','MDV','MV');
INSERT INTO `jos_vm_country` VALUES (131,1,'Мали','MLI','ML');
INSERT INTO `jos_vm_country` VALUES (132,1,'Мальта','MLT','MT');
INSERT INTO `jos_vm_country` VALUES (133,1,'Острова Маршал','MHL','MH');
INSERT INTO `jos_vm_country` VALUES (134,1,'Мартиника','MTQ','MQ');
INSERT INTO `jos_vm_country` VALUES (135,1,'Мавритания','MRT','MR');
INSERT INTO `jos_vm_country` VALUES (136,1,'Мауритос','MUS','MU');
INSERT INTO `jos_vm_country` VALUES (137,1,'Майёт','MYT','YT');
INSERT INTO `jos_vm_country` VALUES (138,1,'Мексика','MEX','MX');
INSERT INTO `jos_vm_country` VALUES (139,1,'Микронезия','FSM','FM');
INSERT INTO `jos_vm_country` VALUES (140,1,'Молдова','MDA','MD');
INSERT INTO `jos_vm_country` VALUES (141,1,'Монако','MCO','MC');
INSERT INTO `jos_vm_country` VALUES (142,1,'Монголия','MNG','MN');
INSERT INTO `jos_vm_country` VALUES (143,1,'Монсерат','MSR','MS');
INSERT INTO `jos_vm_country` VALUES (144,1,'Морокко','MAR','MA');
INSERT INTO `jos_vm_country` VALUES (145,1,'Мозамбик','MOZ','MZ');
INSERT INTO `jos_vm_country` VALUES (146,1,'Мянмар','MMR','MM');
INSERT INTO `jos_vm_country` VALUES (147,1,'Намибия','NAM','NA');
INSERT INTO `jos_vm_country` VALUES (148,1,'Науру','NRU','NR');
INSERT INTO `jos_vm_country` VALUES (149,1,'Непал','NPL','NP');
INSERT INTO `jos_vm_country` VALUES (150,1,'Недерланды','NLD','NL');
INSERT INTO `jos_vm_country` VALUES (151,1,'Голландские высоты','ANT','AN');
INSERT INTO `jos_vm_country` VALUES (152,1,'Нов. каледония','NCL','NC');
INSERT INTO `jos_vm_country` VALUES (153,1,'Нов. Зеладния','NZL','NZ');
INSERT INTO `jos_vm_country` VALUES (154,1,'Никарагуа','NIC','NI');
INSERT INTO `jos_vm_country` VALUES (155,1,'Нигер','NER','NE');
INSERT INTO `jos_vm_country` VALUES (156,1,'Нигерия','NGA','NG');
INSERT INTO `jos_vm_country` VALUES (157,1,'Ниу','NIU','NU');
INSERT INTO `jos_vm_country` VALUES (158,1,'Остров Норфолк','NFK','NF');
INSERT INTO `jos_vm_country` VALUES (159,1,'Сев. острова Мариана','MNP','MP');
INSERT INTO `jos_vm_country` VALUES (160,1,'Норвегия','NOR','NO');
INSERT INTO `jos_vm_country` VALUES (161,1,'Оман','OMN','OM');
INSERT INTO `jos_vm_country` VALUES (162,1,'Пакистан','PAK','PK');
INSERT INTO `jos_vm_country` VALUES (163,1,'Палау','PLW','PW');
INSERT INTO `jos_vm_country` VALUES (164,1,'Панама','PAN','PA');
INSERT INTO `jos_vm_country` VALUES (165,1,'Папуа, новая гвинея','PNG','PG');
INSERT INTO `jos_vm_country` VALUES (166,1,'Парагвай','PRY','PY');
INSERT INTO `jos_vm_country` VALUES (167,1,'Перу','PER','PE');
INSERT INTO `jos_vm_country` VALUES (168,1,'Филипинны','PHL','PH');
INSERT INTO `jos_vm_country` VALUES (169,1,'Питкаин','PCN','PN');
INSERT INTO `jos_vm_country` VALUES (170,1,'Польша','POL','PL');
INSERT INTO `jos_vm_country` VALUES (171,1,'Португалия','PRT','PT');
INSERT INTO `jos_vm_country` VALUES (172,1,'Пуерто Рико','PRI','PR');
INSERT INTO `jos_vm_country` VALUES (173,1,'Катар','QAT','QA');
INSERT INTO `jos_vm_country` VALUES (174,1,'Реюнион','REU','RE');
INSERT INTO `jos_vm_country` VALUES (175,1,'Румыния','ROM','RO');
INSERT INTO `jos_vm_country` VALUES (176,1,'Российская Федерация','RUS','RU');
INSERT INTO `jos_vm_country` VALUES (177,1,'Руанда','RWA','RW');
INSERT INTO `jos_vm_country` VALUES (178,1,'Св. Китс и Невис','KNA','KN');
INSERT INTO `jos_vm_country` VALUES (179,1,'Св. Лючия','LCA','LC');
INSERT INTO `jos_vm_country` VALUES (180,1,'Св. Винсент и Гренады','VCT','VC');
INSERT INTO `jos_vm_country` VALUES (181,1,'Самоа','WSM','WS');
INSERT INTO `jos_vm_country` VALUES (182,1,'Сан Марино','SMR','SM');
INSERT INTO `jos_vm_country` VALUES (183,1,'Св. Том и принцип','STP','ST');
INSERT INTO `jos_vm_country` VALUES (184,1,'Саудовская Аравия','SAU','SA');
INSERT INTO `jos_vm_country` VALUES (185,1,'Сенегал','SEN','SN');
INSERT INTO `jos_vm_country` VALUES (186,1,'Сейшелы','SYC','SC');
INSERT INTO `jos_vm_country` VALUES (187,1,'Сьерра Леоне','SLE','SL');
INSERT INTO `jos_vm_country` VALUES (188,1,'Сингапур','SGP','SG');
INSERT INTO `jos_vm_country` VALUES (189,1,'Словакия','SVK','SK');
INSERT INTO `jos_vm_country` VALUES (190,1,'Словения','SVN','SI');
INSERT INTO `jos_vm_country` VALUES (191,1,'Острова Соломона','SLB','SB');
INSERT INTO `jos_vm_country` VALUES (192,1,'Сомали','SOM','SO');
INSERT INTO `jos_vm_country` VALUES (193,1,'Южная Африка','ZAF','ZA');
INSERT INTO `jos_vm_country` VALUES (194,1,'Южные Сендвич. острова','SGS','GS');
INSERT INTO `jos_vm_country` VALUES (195,1,'Испания','ESP','ES');
INSERT INTO `jos_vm_country` VALUES (196,1,'Шри Ланка','LKA','LK');
INSERT INTO `jos_vm_country` VALUES (197,1,'Св. Елена','SHN','SH');
INSERT INTO `jos_vm_country` VALUES (198,1,'Св. Пьер и Микелон','SPM','PM');
INSERT INTO `jos_vm_country` VALUES (199,1,'Судан','SDN','SD');
INSERT INTO `jos_vm_country` VALUES (200,1,'Суринам','SUR','SR');
INSERT INTO `jos_vm_country` VALUES (201,1,'Свалбард и Ян Майен Острова','SJM','SJ');
INSERT INTO `jos_vm_country` VALUES (202,1,'Свазиленд','SWZ','SZ');
INSERT INTO `jos_vm_country` VALUES (203,1,'Швеция','SWE','SE');
INSERT INTO `jos_vm_country` VALUES (204,1,'Швейцария','CHE','CH');
INSERT INTO `jos_vm_country` VALUES (205,1,'Сирия','SYR','SY');
INSERT INTO `jos_vm_country` VALUES (206,1,'Тайвань','TWN','TW');
INSERT INTO `jos_vm_country` VALUES (207,1,'Таджикистан','TJK','TJ');
INSERT INTO `jos_vm_country` VALUES (208,1,'Танзания','TZA','TZ');
INSERT INTO `jos_vm_country` VALUES (209,1,'Тайланд','THA','TH');
INSERT INTO `jos_vm_country` VALUES (210,1,'Того','TGO','TG');
INSERT INTO `jos_vm_country` VALUES (211,1,'Токелау','TKL','TK');
INSERT INTO `jos_vm_country` VALUES (212,1,'Тонга','TON','TO');
INSERT INTO `jos_vm_country` VALUES (213,1,'Тринидад и Тобаго','TTO','TT');
INSERT INTO `jos_vm_country` VALUES (214,1,'Тунис','TUN','TN');
INSERT INTO `jos_vm_country` VALUES (215,1,'Турция','TUR','TR');
INSERT INTO `jos_vm_country` VALUES (216,1,'Туркменестан','TKM','TM');
INSERT INTO `jos_vm_country` VALUES (217,1,'Тркс и Кайкос острова','TCA','TC');
INSERT INTO `jos_vm_country` VALUES (218,1,'Тувалу','TUV','TV');
INSERT INTO `jos_vm_country` VALUES (219,1,'Уганда','UGA','UG');
INSERT INTO `jos_vm_country` VALUES (220,1,'Украина','UKR','UA');
INSERT INTO `jos_vm_country` VALUES (221,1,'ОАЭ','ARE','AE');
INSERT INTO `jos_vm_country` VALUES (222,1,'Великобритания','GBR','GB');
INSERT INTO `jos_vm_country` VALUES (223,1,'США','USA','US');
INSERT INTO `jos_vm_country` VALUES (224,1,'Соед. Штаты Оутландс островов','UMI','UM');
INSERT INTO `jos_vm_country` VALUES (225,1,'Уругвай','URY','UY');
INSERT INTO `jos_vm_country` VALUES (226,1,'Узбекистан','UZB','UZ');
INSERT INTO `jos_vm_country` VALUES (227,1,'Ванату','VUT','VU');
INSERT INTO `jos_vm_country` VALUES (228,1,'Ватикан','VAT','VA');
INSERT INTO `jos_vm_country` VALUES (229,1,'Венесуела','VEN','VE');
INSERT INTO `jos_vm_country` VALUES (230,1,'Вьетнам','VNM','VN');
INSERT INTO `jos_vm_country` VALUES (231,1,'Вирджинские о-ва (Англия)','VGB','VG');
INSERT INTO `jos_vm_country` VALUES (232,1,'Вирджинские о-ва (США)','VIR','VI');
INSERT INTO `jos_vm_country` VALUES (233,1,'Уэльс','WLF','WF');
INSERT INTO `jos_vm_country` VALUES (234,1,'Зап. Сахара','ESH','EH');
INSERT INTO `jos_vm_country` VALUES (235,1,'Йемен','YEM','YE');
INSERT INTO `jos_vm_country` VALUES (236,1,'Югославия','YUG','YU');
INSERT INTO `jos_vm_country` VALUES (237,1,'Заир','ZAR','ZR');
INSERT INTO `jos_vm_country` VALUES (238,1,'Замбия','ZMB','ZM');
INSERT INTO `jos_vm_country` VALUES (239,1,'Зимбабве','ZWE','ZW');
/*!40000 ALTER TABLE `jos_vm_country` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_coupons`
--

DROP TABLE IF EXISTS `jos_vm_coupons`;
CREATE TABLE `jos_vm_coupons` (
  `coupon_id` int(16) NOT NULL auto_increment,
  `coupon_code` varchar(32) NOT NULL default '',
  `percent_or_total` enum('percent','total') NOT NULL default 'percent',
  `coupon_type` enum('gift','permanent') NOT NULL default 'gift',
  `coupon_value` decimal(12,2) NOT NULL default '0.00',
  PRIMARY KEY  (`coupon_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=cp1251 COMMENT='Для храния кодов купонов';

--
-- Dumping data for table `jos_vm_coupons`
--

LOCK TABLES `jos_vm_coupons` WRITE;
/*!40000 ALTER TABLE `jos_vm_coupons` DISABLE KEYS */;
INSERT INTO `jos_vm_coupons` VALUES (1,'test1','','','6.00');
INSERT INTO `jos_vm_coupons` VALUES (2,'test2','','','15.00');
INSERT INTO `jos_vm_coupons` VALUES (3,'test3','','','4.00');
INSERT INTO `jos_vm_coupons` VALUES (4,'test4','','','15.00');
INSERT INTO `jos_vm_coupons` VALUES (5,'11','total','gift','300.00');
/*!40000 ALTER TABLE `jos_vm_coupons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_creditcard`
--

DROP TABLE IF EXISTS `jos_vm_creditcard`;
CREATE TABLE `jos_vm_creditcard` (
  `creditcard_id` int(11) NOT NULL auto_increment,
  `vendor_id` int(11) NOT NULL default '0',
  `creditcard_name` varchar(70) NOT NULL default '',
  `creditcard_code` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`creditcard_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=cp1251 COMMENT='Для хранения типов кредитных кар';

--
-- Dumping data for table `jos_vm_creditcard`
--

LOCK TABLES `jos_vm_creditcard` WRITE;
/*!40000 ALTER TABLE `jos_vm_creditcard` DISABLE KEYS */;
/*!40000 ALTER TABLE `jos_vm_creditcard` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_csv`
--

DROP TABLE IF EXISTS `jos_vm_csv`;
CREATE TABLE `jos_vm_csv` (
  `field_id` int(11) NOT NULL auto_increment,
  `field_name` varchar(128) NOT NULL default '',
  `field_default_value` text,
  `field_ordering` int(3) NOT NULL default '0',
  `field_required` char(1) default 'N',
  PRIMARY KEY  (`field_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=cp1251 COMMENT='Поля для CSV импорта экспорта';

--
-- Dumping data for table `jos_vm_csv`
--

LOCK TABLES `jos_vm_csv` WRITE;
/*!40000 ALTER TABLE `jos_vm_csv` DISABLE KEYS */;
INSERT INTO `jos_vm_csv` VALUES (1,'product_sku','',1,'Y');
INSERT INTO `jos_vm_csv` VALUES (2,'product_s_desc','',5,'N');
INSERT INTO `jos_vm_csv` VALUES (3,'product_desc','',6,'N');
INSERT INTO `jos_vm_csv` VALUES (4,'product_thumb_image','',7,'N');
INSERT INTO `jos_vm_csv` VALUES (5,'product_full_image','',8,'N');
INSERT INTO `jos_vm_csv` VALUES (6,'product_weight','',9,'N');
INSERT INTO `jos_vm_csv` VALUES (7,'product_weight_uom','KG',10,'N');
INSERT INTO `jos_vm_csv` VALUES (8,'product_length','',11,'N');
INSERT INTO `jos_vm_csv` VALUES (9,'product_width','',12,'N');
INSERT INTO `jos_vm_csv` VALUES (10,'product_height','',13,'N');
INSERT INTO `jos_vm_csv` VALUES (11,'product_lwh_uom','',14,'N');
INSERT INTO `jos_vm_csv` VALUES (12,'product_in_stock','0',15,'N');
INSERT INTO `jos_vm_csv` VALUES (13,'product_available_date','',16,'N');
INSERT INTO `jos_vm_csv` VALUES (14,'product_discount_id','',17,'N');
INSERT INTO `jos_vm_csv` VALUES (15,'product_name','',2,'Y');
INSERT INTO `jos_vm_csv` VALUES (16,'product_price','',4,'N');
INSERT INTO `jos_vm_csv` VALUES (17,'category_path','',3,'Y');
INSERT INTO `jos_vm_csv` VALUES (18,'manufacturer_id','',18,'N');
INSERT INTO `jos_vm_csv` VALUES (19,'product_tax_id','',19,'N');
INSERT INTO `jos_vm_csv` VALUES (20,'product_sales','',20,'N');
INSERT INTO `jos_vm_csv` VALUES (21,'product_parent_sku','0',21,'N');
INSERT INTO `jos_vm_csv` VALUES (22,'attribute','',22,'N');
INSERT INTO `jos_vm_csv` VALUES (23,'custom_attribute','',23,'N');
INSERT INTO `jos_vm_csv` VALUES (24,'attributes','',24,'N');
INSERT INTO `jos_vm_csv` VALUES (25,'attribute_values','',25,'N');
INSERT INTO `jos_vm_csv` VALUES (26,'product_discount','',26,'N');
/*!40000 ALTER TABLE `jos_vm_csv` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_currency`
--

DROP TABLE IF EXISTS `jos_vm_currency`;
CREATE TABLE `jos_vm_currency` (
  `currency_id` int(11) NOT NULL auto_increment,
  `currency_name` varchar(64) default NULL,
  `currency_code` char(3) default NULL,
  PRIMARY KEY  (`currency_id`),
  KEY `idx_currency_name` (`currency_name`)
) ENGINE=MyISAM AUTO_INCREMENT=158 DEFAULT CHARSET=cp1251 COMMENT='Валюты';

--
-- Dumping data for table `jos_vm_currency`
--

LOCK TABLES `jos_vm_currency` WRITE;
/*!40000 ALTER TABLE `jos_vm_currency` DISABLE KEYS */;
INSERT INTO `jos_vm_currency` VALUES (1,'Andorran Peseta','ADP');
INSERT INTO `jos_vm_currency` VALUES (2,'ОАЭ дихрам','AED');
INSERT INTO `jos_vm_currency` VALUES (3,'Афганистан. афгани','AFA');
INSERT INTO `jos_vm_currency` VALUES (4,'Албанск. лек','ALL');
INSERT INTO `jos_vm_currency` VALUES (5,'Гульден Голландских высот','ANG');
INSERT INTO `jos_vm_currency` VALUES (6,'Ангольская кванца','AOK');
INSERT INTO `jos_vm_currency` VALUES (7,'Аргентинск. пессо','ARA');
INSERT INTO `jos_vm_currency` VALUES (9,'Австралл. доллар','AUD');
INSERT INTO `jos_vm_currency` VALUES (10,'Аруб. флоран','AWG');
INSERT INTO `jos_vm_currency` VALUES (11,'Барбадос. доллар','BBD');
INSERT INTO `jos_vm_currency` VALUES (12,'Бангладеш. така','BDT');
INSERT INTO `jos_vm_currency` VALUES (14,'Болгарск. лев','BGL');
INSERT INTO `jos_vm_currency` VALUES (15,'Бахрейн. динар','BHD');
INSERT INTO `jos_vm_currency` VALUES (16,'Бурунди франк','BIF');
INSERT INTO `jos_vm_currency` VALUES (17,'Бермуд. доллар','BMD');
INSERT INTO `jos_vm_currency` VALUES (18,'Брунейск. доллар','BND');
INSERT INTO `jos_vm_currency` VALUES (19,'Боливийск. боливиано','BOB');
INSERT INTO `jos_vm_currency` VALUES (20,'Бразильск. реал','BRL');
INSERT INTO `jos_vm_currency` VALUES (21,'Багамск. доллар','BSD');
INSERT INTO `jos_vm_currency` VALUES (22,'Бутан нгултрум','BTN');
INSERT INTO `jos_vm_currency` VALUES (23,'Бирма кайят','BUK');
INSERT INTO `jos_vm_currency` VALUES (24,'Ботсванск. була','BWP');
INSERT INTO `jos_vm_currency` VALUES (25,'Белизск. доллар','BZD');
INSERT INTO `jos_vm_currency` VALUES (26,'Канадск. доллар','CAD');
INSERT INTO `jos_vm_currency` VALUES (27,'Швейц. франк','CHF');
INSERT INTO `jos_vm_currency` VALUES (28,'Чилийск. фоменто','CLF');
INSERT INTO `jos_vm_currency` VALUES (29,'Чилийск. пессо','CLP');
INSERT INTO `jos_vm_currency` VALUES (30,'Кит. йены','CNY');
INSERT INTO `jos_vm_currency` VALUES (31,'Колумбийск. пессо','COP');
INSERT INTO `jos_vm_currency` VALUES (32,'Коста Рико колон','CRC');
INSERT INTO `jos_vm_currency` VALUES (33,'Чешск. крона','CZK');
INSERT INTO `jos_vm_currency` VALUES (34,'Кубинск. пессо','CUP');
INSERT INTO `jos_vm_currency` VALUES (35,'Капе Верде эскудо','CVE');
INSERT INTO `jos_vm_currency` VALUES (36,'Кипрск. фунт','CYP');
INSERT INTO `jos_vm_currency` VALUES (40,'Датск. крона','DKK');
INSERT INTO `jos_vm_currency` VALUES (41,'Доминиканск. пессо','DOP');
INSERT INTO `jos_vm_currency` VALUES (42,'Алжирский динар','DZD');
INSERT INTO `jos_vm_currency` VALUES (43,'Эквадор сукре','ECS');
INSERT INTO `jos_vm_currency` VALUES (44,'Египетск. фунт','EGP');
INSERT INTO `jos_vm_currency` VALUES (46,'Эфиопск. бирр','ETB');
INSERT INTO `jos_vm_currency` VALUES (47,'Евро','EUR');
INSERT INTO `jos_vm_currency` VALUES (49,'Фиджи доллар','FJD');
INSERT INTO `jos_vm_currency` VALUES (50,'Фалклендск. фунт','FKP');
INSERT INTO `jos_vm_currency` VALUES (52,'Британск. фунт','GBP');
INSERT INTO `jos_vm_currency` VALUES (53,'Ганайнск. кеди','GHC');
INSERT INTO `jos_vm_currency` VALUES (54,'Гибралтарск. фунт','GIP');
INSERT INTO `jos_vm_currency` VALUES (55,'Гамбианск. галези','GMD');
INSERT INTO `jos_vm_currency` VALUES (56,'Гвинейск. франк','GNF');
INSERT INTO `jos_vm_currency` VALUES (58,'Гватемалск. кетзал','GTQ');
INSERT INTO `jos_vm_currency` VALUES (59,'Гвинейск. пессо','GWP');
INSERT INTO `jos_vm_currency` VALUES (60,'Гайанск. доллар','GYD');
INSERT INTO `jos_vm_currency` VALUES (61,'Гон-конгск. доллар','HKD');
INSERT INTO `jos_vm_currency` VALUES (62,'Гондуран Гемпира','HNL');
INSERT INTO `jos_vm_currency` VALUES (63,'Гаитянск. джорде','HTG');
INSERT INTO `jos_vm_currency` VALUES (64,'Венгерск. форинт','HUF');
INSERT INTO `jos_vm_currency` VALUES (65,'Индонезиск. рупия','IDR');
INSERT INTO `jos_vm_currency` VALUES (66,'Ирландск фунт','IEP');
INSERT INTO `jos_vm_currency` VALUES (67,'Израильск. шекель','ILS');
INSERT INTO `jos_vm_currency` VALUES (68,'Индийск. рупия','INR');
INSERT INTO `jos_vm_currency` VALUES (69,'Иракск. динар','IQD');
INSERT INTO `jos_vm_currency` VALUES (70,'Иранск. риал','IRR');
INSERT INTO `jos_vm_currency` VALUES (73,'Ямайск. доллар','JMD');
INSERT INTO `jos_vm_currency` VALUES (74,'Иорданск. динар','JOD');
INSERT INTO `jos_vm_currency` VALUES (75,'Японск. йена','JPY');
INSERT INTO `jos_vm_currency` VALUES (76,'Кенийск. шиллинг','KES');
INSERT INTO `jos_vm_currency` VALUES (77,'Кампучийск. риал','KHR');
INSERT INTO `jos_vm_currency` VALUES (78,'Коморосск. франк','KMF');
INSERT INTO `jos_vm_currency` VALUES (79,'Сев. корейск. вон','KPW');
INSERT INTO `jos_vm_currency` VALUES (80,'Южн. корейск. вон','KRW');
INSERT INTO `jos_vm_currency` VALUES (81,'Кувейтск динар','KWD');
INSERT INTO `jos_vm_currency` VALUES (82,'Кайманск. доллар','KYD');
INSERT INTO `jos_vm_currency` VALUES (83,'Лаоск. кип','LAK');
INSERT INTO `jos_vm_currency` VALUES (84,'Лебанезск. фунт','LBP');
INSERT INTO `jos_vm_currency` VALUES (85,'Шри-Ланка рупия','LKR');
INSERT INTO `jos_vm_currency` VALUES (86,'Либерийск доллар','LRD');
INSERT INTO `jos_vm_currency` VALUES (87,'Лессото лоти','LSL');
INSERT INTO `jos_vm_currency` VALUES (89,'Либийск динар','LYD');
INSERT INTO `jos_vm_currency` VALUES (90,'Морокканск. дихрам','MAD');
INSERT INTO `jos_vm_currency` VALUES (91,'Малагазск. франк','MGF');
INSERT INTO `jos_vm_currency` VALUES (92,'Монгольск. тугрик','MNT');
INSERT INTO `jos_vm_currency` VALUES (93,'Макайск. птака','MOP');
INSERT INTO `jos_vm_currency` VALUES (94,'Мавританск огуйя','MRO');
INSERT INTO `jos_vm_currency` VALUES (95,'Мальтеска лира','MTL');
INSERT INTO `jos_vm_currency` VALUES (96,'Мауритус рупия','MUR');
INSERT INTO `jos_vm_currency` VALUES (97,'Мальдив руфия','MVR');
INSERT INTO `jos_vm_currency` VALUES (98,'Малави квача','MWK');
INSERT INTO `jos_vm_currency` VALUES (99,'Мексиканск. пессо','MXP');
INSERT INTO `jos_vm_currency` VALUES (100,'Малазийск риггат','MYR');
INSERT INTO `jos_vm_currency` VALUES (101,'Мозамбикск. метикал','MZM');
INSERT INTO `jos_vm_currency` VALUES (102,'Нигерийск. найра','NGN');
INSERT INTO `jos_vm_currency` VALUES (103,'Никарагуаск. корбода','NIC');
INSERT INTO `jos_vm_currency` VALUES (105,'Норвежск. крона','NOK');
INSERT INTO `jos_vm_currency` VALUES (106,'Непал рупия','NPR');
INSERT INTO `jos_vm_currency` VALUES (107,'Нов. Зеландск. доллар','NZD');
INSERT INTO `jos_vm_currency` VALUES (108,'Омани риал','OMR');
INSERT INTO `jos_vm_currency` VALUES (109,'Панамск. балбоа','PAB');
INSERT INTO `jos_vm_currency` VALUES (110,'Перу инти','PEI');
INSERT INTO `jos_vm_currency` VALUES (111,'Папуа Нов. Гвинея кина','PGK');
INSERT INTO `jos_vm_currency` VALUES (112,'Филлипинск. пессо','PHP');
INSERT INTO `jos_vm_currency` VALUES (113,'Пакистанск. рупия','PKR');
INSERT INTO `jos_vm_currency` VALUES (114,'Пользский злотый','PLZ');
INSERT INTO `jos_vm_currency` VALUES (116,'Парагвайск гарани','PYG');
INSERT INTO `jos_vm_currency` VALUES (117,'Катарск. риал','QAR');
INSERT INTO `jos_vm_currency` VALUES (118,'Румынск. лей','ROL');
INSERT INTO `jos_vm_currency` VALUES (119,'Руанда франк','RWF');
INSERT INTO `jos_vm_currency` VALUES (120,'Сауд. Аравийск. риал','SAR');
INSERT INTO `jos_vm_currency` VALUES (121,'Соломон. о-ва доллар','SBD');
INSERT INTO `jos_vm_currency` VALUES (122,'Сейшелл рупия','SCR');
INSERT INTO `jos_vm_currency` VALUES (123,'Суданск. фунт','SDP');
INSERT INTO `jos_vm_currency` VALUES (124,'Шведск. крона','SEK');
INSERT INTO `jos_vm_currency` VALUES (125,'Сингапурск. доллар','SGD');
INSERT INTO `jos_vm_currency` VALUES (126,'Св. Елена фунт','SHP');
INSERT INTO `jos_vm_currency` VALUES (127,'Сьерра Леоне леон','SLL');
INSERT INTO `jos_vm_currency` VALUES (128,'Сомали шиллинг','SOS');
INSERT INTO `jos_vm_currency` VALUES (129,'Суринам гульден','SRG');
INSERT INTO `jos_vm_currency` VALUES (130,'Св. Том и принцип добра','STD');
INSERT INTO `jos_vm_currency` VALUES (131,'Российский рубль','RUB');
INSERT INTO `jos_vm_currency` VALUES (132,'Сальвадорск. колон','SVC');
INSERT INTO `jos_vm_currency` VALUES (133,'Сирийск. потмд','SYP');
INSERT INTO `jos_vm_currency` VALUES (134,'Свазилендск. лилангени','SZL');
INSERT INTO `jos_vm_currency` VALUES (135,'Тайский бат','THB');
INSERT INTO `jos_vm_currency` VALUES (136,'Тунисск. динар','TND');
INSERT INTO `jos_vm_currency` VALUES (137,'Тонга панга','TOP');
INSERT INTO `jos_vm_currency` VALUES (138,'Вост. Тимор эскудо','TPE');
INSERT INTO `jos_vm_currency` VALUES (139,'Турецкая лира','TRL');
INSERT INTO `jos_vm_currency` VALUES (140,'Тринидад и Тобаго доллар','TTD');
INSERT INTO `jos_vm_currency` VALUES (141,'Тайваньски доллар','TWD');
INSERT INTO `jos_vm_currency` VALUES (142,'Танзинийск. шиллинг','TZS');
INSERT INTO `jos_vm_currency` VALUES (143,'Угадна шиллинг','UGS');
INSERT INTO `jos_vm_currency` VALUES (144,'США доллар','USD');
INSERT INTO `jos_vm_currency` VALUES (145,'Уругвайск. пессо','UYP');
INSERT INTO `jos_vm_currency` VALUES (146,'Венесуельск. боливар','VEB');
INSERT INTO `jos_vm_currency` VALUES (147,'Вьетнамск. донг','VND');
INSERT INTO `jos_vm_currency` VALUES (148,'Ванату вату','VUV');
INSERT INTO `jos_vm_currency` VALUES (149,'Самоа тала','WST');
INSERT INTO `jos_vm_currency` VALUES (150,'Демокр. Йемен динар','YDD');
INSERT INTO `jos_vm_currency` VALUES (151,'Йеменск. риал','YER');
INSERT INTO `jos_vm_currency` VALUES (152,'Югославск. динар','YUD');
INSERT INTO `jos_vm_currency` VALUES (153,'Юж. Африка ренд','ZAR');
INSERT INTO `jos_vm_currency` VALUES (154,'Замбийск. квача','ZMK');
INSERT INTO `jos_vm_currency` VALUES (155,'Заирск. заир','ZRZ');
INSERT INTO `jos_vm_currency` VALUES (156,'Зимбабвск. доллар','ZWD');
INSERT INTO `jos_vm_currency` VALUES (157,'Словакск. крона','SKK');
/*!40000 ALTER TABLE `jos_vm_currency` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_function`
--

DROP TABLE IF EXISTS `jos_vm_function`;
CREATE TABLE `jos_vm_function` (
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
) ENGINE=MyISAM AUTO_INCREMENT=171 DEFAULT CHARSET=cp1251 COMMENT='Зарегистрированные функции';

--
-- Dumping data for table `jos_vm_function`
--

LOCK TABLES `jos_vm_function` WRITE;
/*!40000 ALTER TABLE `jos_vm_function` DISABLE KEYS */;
INSERT INTO `jos_vm_function` VALUES (1,1,'userAdd','ps_user','add','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (2,1,'userDelete','ps_user','delete','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (3,1,'userUpdate','ps_user','update','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (4,1,'adminPasswdUpdate','ps_user','update_admin_passwd','Изменяет пароль администратора','admin');
INSERT INTO `jos_vm_function` VALUES (31,2,'productAdd','ps_product','add','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (6,1,'functionAdd','ps_function','add','','admin');
INSERT INTO `jos_vm_function` VALUES (7,1,'functionUpdate','ps_function','update','','admin');
INSERT INTO `jos_vm_function` VALUES (8,1,'functionDelete','ps_function','delete','','admin');
INSERT INTO `jos_vm_function` VALUES (9,1,'userLogout','ps_user','logout','','none');
INSERT INTO `jos_vm_function` VALUES (10,1,'userAddressAdd','ps_user_address','add','','admin,storeadmin,shopper,demo');
INSERT INTO `jos_vm_function` VALUES (11,1,'userAddressUpdate','ps_user_address','update','','admin,storeadmin,shopper');
INSERT INTO `jos_vm_function` VALUES (12,1,'userAddressDelete','ps_user_address','delete','','admin,storeadmin,shopper');
INSERT INTO `jos_vm_function` VALUES (13,1,'moduleAdd','ps_module','add','','admin');
INSERT INTO `jos_vm_function` VALUES (14,1,'moduleUpdate','ps_module','update','','admin');
INSERT INTO `jos_vm_function` VALUES (15,1,'moduleDelete','ps_module','delete','','admin');
INSERT INTO `jos_vm_function` VALUES (16,1,'userLogin','ps_user','login','','none');
INSERT INTO `jos_vm_function` VALUES (17,3,'vendorAdd','ps_vendor','add','','admin');
INSERT INTO `jos_vm_function` VALUES (18,3,'vendorUpdate','ps_vendor','update','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (19,3,'vendorDelete','ps_vendor','delete','','admin');
INSERT INTO `jos_vm_function` VALUES (20,3,'vendorCategoryAdd','ps_vendor_category','add','','admin');
INSERT INTO `jos_vm_function` VALUES (21,3,'vendorCategoryUpdate','ps_vendor_category','update','','admin');
INSERT INTO `jos_vm_function` VALUES (22,3,'vendorCategoryDelete','ps_vendor_category','delete','','admin');
INSERT INTO `jos_vm_function` VALUES (23,4,'shopperAdd','ps_shopper','add','','none');
INSERT INTO `jos_vm_function` VALUES (24,4,'shopperDelete','ps_shopper','delete','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (25,4,'shopperUpdate','ps_shopper','update','','admin,storeadmin,shopper');
INSERT INTO `jos_vm_function` VALUES (26,4,'shopperGroupAdd','ps_shopper_group','add','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (27,4,'shopperGroupUpdate','ps_shopper_group','update','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (28,4,'shopperGroupDelete','ps_shopper_group','delete','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (29,5,'orderSearch','ps_order','find','','admin,storeadmin,demo');
INSERT INTO `jos_vm_function` VALUES (30,5,'orderStatusSet','ps_order','order_status_update','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (32,2,'productDelete','ps_product','delete','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (33,2,'productUpdate','ps_product','update','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (34,2,'productCategoryAdd','ps_product_category','add','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (35,2,'productCategoryUpdate','ps_product_category','update','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (36,2,'productCategoryDelete','ps_product_category','delete','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (37,2,'productPriceAdd','ps_product_price','add','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (38,2,'productPriceUpdate','ps_product_price','update','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (39,2,'productPriceDelete','ps_product_price','delete','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (40,2,'productAttributeAdd','ps_product_attribute','add','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (41,2,'productAttributeUpdate','ps_product_attribute','update','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (42,2,'productAttributeDelete','ps_product_attribute','delete','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (43,7,'cartAdd','ps_cart','add','','none');
INSERT INTO `jos_vm_function` VALUES (44,7,'cartUpdate','ps_cart','update','','none');
INSERT INTO `jos_vm_function` VALUES (45,7,'cartDelete','ps_cart','delete','','none');
INSERT INTO `jos_vm_function` VALUES (46,10,'checkoutComplete','ps_checkout','add','','shopper,storeadmin,admin');
INSERT INTO `jos_vm_function` VALUES (47,1,'setLanguage','ps_module','set_language','','none');
INSERT INTO `jos_vm_function` VALUES (48,8,'paymentMethodUpdate','ps_payment_method','update','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (49,8,'paymentMethodAdd','ps_payment_method','add','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (50,8,'paymentMethodDelete','ps_payment_method','delete','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (51,5,'orderDelete','ps_order','delete','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (52,11,'addTaxRate','ps_tax','add','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (53,11,'updateTaxRate','ps_tax','update','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (54,11,'deleteTaxRate','ps_tax','delete','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (55,10,'checkoutValidateST','ps_checkout','validate_shipto','','none');
INSERT INTO `jos_vm_function` VALUES (59,5,'orderStatusUpdate','ps_order_status','update','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (60,5,'orderStatusAdd','ps_order_status','add','','storeadmin,admin');
INSERT INTO `jos_vm_function` VALUES (61,5,'orderStatusDelete','ps_order_status','delete','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (62,1,'currencyAdd','ps_currency','add','add a currency','storeadmin,admin');
INSERT INTO `jos_vm_function` VALUES (63,1,'currencyUpdate','ps_currency','update','        update a currency','storeadmin,admin');
INSERT INTO `jos_vm_function` VALUES (64,1,'currencyDelete','ps_currency','delete','delete a currency','storeadmin,admin');
INSERT INTO `jos_vm_function` VALUES (65,1,'countryAdd','ps_country','add','Add a country ','storeadmin,admin');
INSERT INTO `jos_vm_function` VALUES (66,1,'countryUpdate','ps_country','update','Изменить запись о стране','storeadmin,admin');
INSERT INTO `jos_vm_function` VALUES (67,1,'countryDelete','ps_country','delete','Удаляет запись о старне','storeadmin,admin');
INSERT INTO `jos_vm_function` VALUES (68,2,'product_csv','ps_csv','upload_csv','','admin');
INSERT INTO `jos_vm_function` VALUES (110,7,'waitingListAdd','zw_waiting_list','add','','none');
INSERT INTO `jos_vm_function` VALUES (111,13,'addzone','ps_zone','add','Добавление зоны','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (112,13,'updatezone','ps_zone','update','Изменение зоны','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (113,13,'deletezone','ps_zone','delete','Удаление зоны','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (114,13,'zoneassign','ps_zone','assign','Добавление страны к зоне','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (115,1,'writeConfig','ps_config','writeconfig','Записывает конфигурацию virtuemart.cfg.php','admin');
INSERT INTO `jos_vm_function` VALUES (116,14,'carrierAdd','ps_shipping','add','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (117,14,'carrierDelete','ps_shipping','delete','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (118,14,'carrierUpdate','ps_shipping','update','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (119,14,'rateAdd','ps_shipping','rate_add','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (120,14,'rateUpdate','ps_shipping','rate_update','','admin,shopadmin');
INSERT INTO `jos_vm_function` VALUES (121,14,'rateDelete','ps_shipping','rate_delete','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (122,10,'checkoutProcess','ps_checkout','process','','shopper,storeadmin,admin,demo');
INSERT INTO `jos_vm_function` VALUES (123,5,'downloadRequest','ps_order','download_request','This checks if the download request is valid and sends the file to the browser as file download if the request was successful, otherwise echoes an error','admin,storeadmin,shopper');
INSERT INTO `jos_vm_function` VALUES (124,15,'affiliateAdd','ps_affiliate','add','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (125,15,'affiliateUpdate','ps_affiliate','update','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (126,15,'affiliateDelete','ps_affiliate','delete','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (127,15,'affiliateEmail','ps_affiliate','email','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (128,16,'manufacturerAdd','ps_manufacturer','add','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (129,16,'manufacturerUpdate','ps_manufacturer','update','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (130,16,'manufacturerDelete','ps_manufacturer','delete','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (131,16,'manufacturercategoryAdd','ps_manufacturer_category','add','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (132,16,'manufacturercategoryUpdate','ps_manufacturer_category','update','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (133,16,'manufacturercategoryDelete','ps_manufacturer_category','delete','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (134,7,'addReview','ps_reviews','process_review','This lets the user add a review and rating to a product.','admin,storeadmin,shopper,demo');
INSERT INTO `jos_vm_function` VALUES (135,7,'productReviewDelete','ps_reviews','delete_review','This deletes a review and from a product.','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (136,8,'creditcardAdd','ps_creditcard','add','Adds a Credit Card entry.','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (137,8,'creditcardUpdate','ps_creditcard','update','Updates a Credit Card entry.','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (138,8,'creditcardDelete','ps_creditcard','delete','Deletes a Credit Card entry.','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (139,2,'changePublishState','vmAbstractObject.class','handlePublishState','Changes the publish field, so that a record can be published or unpublished easily.','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (140,2,'export_csv','ps_csv','export_csv','This function exports all relevant product data to CSV.','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (141,2,'reorder','ps_product_category','reorder','Changes the list order of a category.','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (142,2,'discountAdd','ps_product_discount','add','Adds a discount.','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (143,2,'discountUpdate','ps_product_discount','update','Updates a discount.','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (144,2,'discountDelete','ps_product_discount','delete','Deletes a discount.','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (145,8,'shippingmethodSave','ps_shipping_method','save','','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (146,2,'uploadProductFile','ps_product_files','add','Uploads and Adds a Product Image/File.','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (147,2,'updateProductFile','ps_product_files','update','Updates a Product Image/File.','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (148,2,'deleteProductFile','ps_product_files','delete','Deletes a Product Image/File.','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (149,18,'couponAdd','ps_coupon','add_coupon_code','Adds a Coupon.','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (150,18,'couponUpdate','ps_coupon','update_coupon','Updates a Coupon.','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (151,18,'couponDelete','ps_coupon','remove_coupon_code','Deletes a Coupon.','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (152,18,'couponProcess','ps_coupon','process_coupon_code','Processes a Coupon.','admin,storeadmin,shopper,demo');
INSERT INTO `jos_vm_function` VALUES (153,2,'ProductTypeAdd','ps_product_type','add','Function add a Product Type and create new table product_type_<id>.','admin');
INSERT INTO `jos_vm_function` VALUES (154,2,'ProductTypeUpdate','ps_product_type','update','Update a Product Type.','admin');
INSERT INTO `jos_vm_function` VALUES (155,2,'ProductTypeDelete','ps_product_type','delete','Delete a Product Type and drop table product_type_<id>.','admin');
INSERT INTO `jos_vm_function` VALUES (156,2,'ProductTypeReorder','ps_product_type','reorder','Changes the list order of a Product Type.','admin');
INSERT INTO `jos_vm_function` VALUES (157,2,'ProductTypeAddParam','ps_product_type_parameter','add_parameter','Function add a Parameter into a Product Type and create new column in table product_type_<id>.','admin');
INSERT INTO `jos_vm_function` VALUES (158,2,'ProductTypeUpdateParam','ps_product_type_parameter','update_parameter','Function update a Parameter in a Product Type and a column in table product_type_<id>.','admin');
INSERT INTO `jos_vm_function` VALUES (159,2,'ProductTypeDeleteParam','ps_product_type_parameter','delete_parameter','Function delete a Parameter from a Product Type and drop a column in table product_type_<id>.','admin');
INSERT INTO `jos_vm_function` VALUES (160,2,'ProductTypeReorderParam','ps_product_type_parameter','reorder_parameter','Changes the list order of a Parameter.','admin');
INSERT INTO `jos_vm_function` VALUES (161,2,'productProductTypeAdd','ps_product_product_type','add','Add a Product into a Product Type.','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (162,2,'productProductTypeDelete','ps_product_product_type','delete','Delete a Product from a Product Type.','admin,storeadmin');
INSERT INTO `jos_vm_function` VALUES (163,1,'stateAdd','ps_country','addState','Add a State ','storeadmin,admin');
INSERT INTO `jos_vm_function` VALUES (164,1,'stateUpdate','ps_country','updateState','Update a state record','storeadmin,admin');
INSERT INTO `jos_vm_function` VALUES (165,1,'stateDelete','ps_country','deleteState','Delete a state record','storeadmin,admin');
INSERT INTO `jos_vm_function` VALUES (166,2,'csvFieldAdd','ps_csv','add','Add a CSV Field ','storeadmin,admin');
INSERT INTO `jos_vm_function` VALUES (167,2,'csvFieldUpdate','ps_csv','update','Update a CSV Field','storeadmin,admin');
INSERT INTO `jos_vm_function` VALUES (168,2,'csvFieldDelete','ps_csv','delete','Delete a CSV Field','storeadmin,admin');
INSERT INTO `jos_vm_function` VALUES (170,20,'export_yml','ps_csv','export_yml','Экспорт в Яндекс','none');
/*!40000 ALTER TABLE `jos_vm_function` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_manufacturer`
--

DROP TABLE IF EXISTS `jos_vm_manufacturer`;
CREATE TABLE `jos_vm_manufacturer` (
  `manufacturer_id` int(11) NOT NULL auto_increment,
  `mf_name` varchar(64) default NULL,
  `mf_email` varchar(255) default NULL,
  `mf_desc` text,
  `mf_category_id` int(11) default NULL,
  `mf_url` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`manufacturer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=cp1251 COMMENT='Производители товаров';

--
-- Dumping data for table `jos_vm_manufacturer`
--

LOCK TABLES `jos_vm_manufacturer` WRITE;
/*!40000 ALTER TABLE `jos_vm_manufacturer` DISABLE KEYS */;
INSERT INTO `jos_vm_manufacturer` VALUES (5,'Atomic','','',1,'');
INSERT INTO `jos_vm_manufacturer` VALUES (6,'Rossignol','','',1,'');
INSERT INTO `jos_vm_manufacturer` VALUES (7,'Iron Horse','','',1,'');
INSERT INTO `jos_vm_manufacturer` VALUES (8,'Cannondale','','',1,'');
INSERT INTO `jos_vm_manufacturer` VALUES (9,'Panther','','',1,'');
INSERT INTO `jos_vm_manufacturer` VALUES (10,'Rosec','','',1,'');
INSERT INTO `jos_vm_manufacturer` VALUES (11,'Fila','','',1,'');
/*!40000 ALTER TABLE `jos_vm_manufacturer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_manufacturer_category`
--

DROP TABLE IF EXISTS `jos_vm_manufacturer_category`;
CREATE TABLE `jos_vm_manufacturer_category` (
  `mf_category_id` int(11) NOT NULL auto_increment,
  `mf_category_name` varchar(64) default NULL,
  `mf_category_desc` text,
  PRIMARY KEY  (`mf_category_id`),
  KEY `idx_manufacturer_category_category_name` (`mf_category_name`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=cp1251 COMMENT='Категории производителей';

--
-- Dumping data for table `jos_vm_manufacturer_category`
--

LOCK TABLES `jos_vm_manufacturer_category` WRITE;
/*!40000 ALTER TABLE `jos_vm_manufacturer_category` DISABLE KEYS */;
INSERT INTO `jos_vm_manufacturer_category` VALUES (1,'-по умолчанию-','Категория производителей по умолчанию');
/*!40000 ALTER TABLE `jos_vm_manufacturer_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_module`
--

DROP TABLE IF EXISTS `jos_vm_module`;
CREATE TABLE `jos_vm_module` (
  `module_id` int(11) NOT NULL auto_increment,
  `module_name` varchar(255) default NULL,
  `module_description` text,
  `module_perms` varchar(255) default NULL,
  `module_publish` char(1) default NULL,
  `list_order` int(11) default NULL,
  PRIMARY KEY  (`module_id`),
  KEY `idx_module_name` (`module_name`),
  KEY `idx_module_list_order` (`list_order`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=cp1251 COMMENT='Модули виртумарта';

--
-- Dumping data for table `jos_vm_module`
--

LOCK TABLES `jos_vm_module` WRITE;
/*!40000 ALTER TABLE `jos_vm_module` DISABLE KEYS */;
INSERT INTO `jos_vm_module` VALUES (1,'admin','<h4>ТОЛЬКО ДЛЯ АДМИНИСТРАТОРОВ</h4>\r\n\r\n<p>могут пользовать следующим:</p>\r\n<OL>\r\n\r\n<LI>Создание пользователей</LI>\r\n<LI>Создание модулей</LI>\r\n<LI>Создание функций</LI>\r\n</OL>\r\n','admin','Y',1);
INSERT INTO `jos_vm_module` VALUES (2,'product','<p>Здесь вы можете управлять вашим онлайн каталогом товаров.  Администратор каталога может дать права вам на создание категорий товара, создание новых товаров, редактирования свойств товара, и позиций товара для каждого значения свойства .</p>','storeadmin,admin','Y',4);
INSERT INTO `jos_vm_module` VALUES (3,'vendor','<h4>ТОЛЬКО ДЛЯ АДМИНИСТРАТОРОВ</h4>\r\n<p>Здесь вы можете управлять продавцами в Виртумарте.</p>','admin','Y',6);
INSERT INTO `jos_vm_module` VALUES (4,'shopper','<p>Управление клиентами в вашем магазине.  Позволяет создавать группы клиентов.  Группы клиентов могут быть использованы когда настравивается стоимость товара.  Это позволяет создавать различные цены для различных типов пользователей.  Для примера вы можете группы могут быть \'Обычные\' и \'Превилигированные\' group. </p>','admin,storeadmin','Y',4);
INSERT INTO `jos_vm_module` VALUES (5,'order','<p>Посмотреть Заказ и Изменить статус заказа.</p>','admin,storeadmin','Y',5);
INSERT INTO `jos_vm_module` VALUES (6,'msgs','Модуль незащищен и используется для показа системных сообщений пользователям. Если происходит ошибка или предупреждение мы должны видеть их без авторизации.','none','N',99);
INSERT INTO `jos_vm_module` VALUES (7,'shop','Это модуль магазина  \"3456.ru\" .  Этот демо магазин включен в дистрибутив русского виртумарта.','none','Y',99);
INSERT INTO `jos_vm_module` VALUES (8,'store','','storeadmin,admin','Y',2);
INSERT INTO `jos_vm_module` VALUES (9,'account','Этот модуль позволяет клиентом обновлять свой профиль и просмотра предыдущих заказов.','shopper,storeadmin,admin,demoshopper,storeadmin,admin,demo','y',99);
INSERT INTO `jos_vm_module` VALUES (10,'checkout','','none','N',99);
INSERT INTO `jos_vm_module` VALUES (11,'tax','Модуль доставки, позволяет устанавливать стоимость доставки в различные регионы и страны.  Ставка устанавливается в десятичной форме.  Для примера, 2 процента будет 0.02.','admin,storeadmin','Y',8);
INSERT INTO `jos_vm_module` VALUES (12,'reportbasic','Основной модуль отчетов, позволяет вам делать отчеты по всем заказам.','admin,storeadmin','Y',7);
INSERT INTO `jos_vm_module` VALUES (13,'zone','Это модуль доставки по зонам. Здесь вы можете управлять стоимостью вашей доставки в различные зоны.','admin,storeadmin','N',9);
INSERT INTO `jos_vm_module` VALUES (14,'shipping','<h4>Доставка</h4><p>Этот модуль вычисляет стоимость достаки для покупателя.<br>Создайте несущие для зон доставки и весовых групп.</p>','admin,storeadmin','Y',10);
INSERT INTO `jos_vm_module` VALUES (15,'affiliate','управление партнерскими программами для вашего магазина.','storeadmin,admin','N',99);
INSERT INTO `jos_vm_module` VALUES (16,'manufacturer','Управление производителями в вашем магазине.','storeadmin,admin','Y',12);
INSERT INTO `jos_vm_module` VALUES (17,'help','Модуль помощи','admin,storeadmin','Y',13);
INSERT INTO `jos_vm_module` VALUES (18,'coupon','Управление купонами','admin,storeadmin','Y',11);
INSERT INTO `jos_vm_module` VALUES (20,'export_yml','Экспорт в яндекс','admin,storeadmin','N',99);
/*!40000 ALTER TABLE `jos_vm_module` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_order_history`
--

DROP TABLE IF EXISTS `jos_vm_order_history`;
CREATE TABLE `jos_vm_order_history` (
  `order_status_history_id` int(11) NOT NULL auto_increment,
  `order_id` int(11) NOT NULL default '0',
  `order_status_code` char(1) NOT NULL default '0',
  `date_added` datetime NOT NULL default '0000-00-00 00:00:00',
  `customer_notified` int(1) default '0',
  `comments` text,
  PRIMARY KEY  (`order_status_history_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=cp1251 COMMENT='История';

--
-- Dumping data for table `jos_vm_order_history`
--

LOCK TABLES `jos_vm_order_history` WRITE;
/*!40000 ALTER TABLE `jos_vm_order_history` DISABLE KEYS */;
INSERT INTO `jos_vm_order_history` VALUES (1,1,'P','2007-11-13 13:11:16',1,'');
INSERT INTO `jos_vm_order_history` VALUES (2,2,'P','2007-11-19 18:33:58',1,'');
INSERT INTO `jos_vm_order_history` VALUES (3,3,'P','2007-11-19 18:34:49',1,'');
INSERT INTO `jos_vm_order_history` VALUES (4,4,'P','2007-11-19 18:42:24',1,'');
INSERT INTO `jos_vm_order_history` VALUES (5,5,'P','2007-11-20 08:14:52',1,'');
INSERT INTO `jos_vm_order_history` VALUES (6,6,'P','2007-11-22 14:05:19',1,'');
INSERT INTO `jos_vm_order_history` VALUES (7,7,'P','2007-11-22 14:06:42',1,'');
INSERT INTO `jos_vm_order_history` VALUES (8,7,'R','2007-11-22 14:15:41',0,'');
INSERT INTO `jos_vm_order_history` VALUES (9,7,'S','2007-11-22 14:16:42',1,'');
INSERT INTO `jos_vm_order_history` VALUES (10,8,'P','2007-11-22 14:21:56',1,'');
INSERT INTO `jos_vm_order_history` VALUES (11,9,'P','2007-11-22 14:29:17',1,'');
INSERT INTO `jos_vm_order_history` VALUES (12,9,'S','2007-11-22 14:29:44',1,'');
INSERT INTO `jos_vm_order_history` VALUES (13,10,'P','2007-11-22 14:38:11',1,'');
INSERT INTO `jos_vm_order_history` VALUES (14,10,'S','2007-11-22 14:38:29',1,'');
INSERT INTO `jos_vm_order_history` VALUES (15,11,'P','2007-11-27 17:23:19',1,'');
/*!40000 ALTER TABLE `jos_vm_order_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_order_item`
--

DROP TABLE IF EXISTS `jos_vm_order_item`;
CREATE TABLE `jos_vm_order_item` (
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
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=cp1251 COMMENT='Хранит все позиции которые являю';

--
-- Dumping data for table `jos_vm_order_item`
--

LOCK TABLES `jos_vm_order_item` WRITE;
/*!40000 ALTER TABLE `jos_vm_order_item` DISABLE KEYS */;
INSERT INTO `jos_vm_order_item` VALUES (1,1,'b32b0a58029cac587c37ad50cbdc9aea',1,11,'Mirta Soia 3 Franc',' Диван-кровать София 3х местный',1,'18000.00000','19485.00','RUB','P',1194948676,1194948676,'');
INSERT INTO `jos_vm_order_item` VALUES (2,2,'',1,1,'v-3','Диван Виктория 3',1,'9000.00000','9000.00','RUB','P',1195486438,1195486438,'obivka :red');
INSERT INTO `jos_vm_order_item` VALUES (3,3,'',1,15,'Viktoria 1','Диван-книжка Виктория 1',1,'6000.00000','6000.00','RUB','P',1195486489,1195486489,'');
INSERT INTO `jos_vm_order_item` VALUES (4,4,'',1,15,'Viktoria 1','Диван-книжка Виктория 1',1,'6000.00000','6000.00','RUB','P',1195486944,1195486944,'');
INSERT INTO `jos_vm_order_item` VALUES (5,5,'',1,8,'Viktoria 5 kr-k','Кресло-кровать Виктория 5',1,'4500.00000','4500.00','RUB','P',1195535692,1195535692,'');
INSERT INTO `jos_vm_order_item` VALUES (6,6,'',1,16,'123456','фото1',1,'100.00000','100.00','RUB','P',1195729519,1195729519,'');
INSERT INTO `jos_vm_order_item` VALUES (7,7,'b32b0a58029cac587c37ad50cbdc9aea',1,16,'123456','фото1',1,'100.00000','108.25','RUB','S',1195729602,1195730202,'');
INSERT INTO `jos_vm_order_item` VALUES (8,8,'b32b0a58029cac587c37ad50cbdc9aea',1,16,'123456','фото1',2,'0.00000','0.00','RUB','P',1195730516,1195730516,'');
INSERT INTO `jos_vm_order_item` VALUES (9,8,'b32b0a58029cac587c37ad50cbdc9aea',1,15,'Viktoria 1','Диван-книжка Виктория 1',1,'6000.00000','6495.00','RUB','P',1195730516,1195730516,'');
INSERT INTO `jos_vm_order_item` VALUES (10,9,'b32b0a58029cac587c37ad50cbdc9aea',1,16,'123456','фото1',1,'100.00000','108.25','RUB','S',1195730957,1195730984,'');
INSERT INTO `jos_vm_order_item` VALUES (11,10,'b32b0a58029cac587c37ad50cbdc9aea',1,16,'123456','фото1',1,'100.00000','108.25','RUB','S',1195731491,1195731509,'');
INSERT INTO `jos_vm_order_item` VALUES (12,11,'',1,27,'333','Rosec Chn',1,'1753.00000','1753.00','RUB','P',1196173399,1196173399,'');
INSERT INTO `jos_vm_order_item` VALUES (13,11,'',0,18,'112','Atomic Bluemoon',1000,'14900.00000','14900.00','RUB','P',1196173399,1196173399,'');
/*!40000 ALTER TABLE `jos_vm_order_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_order_payment`
--

DROP TABLE IF EXISTS `jos_vm_order_payment`;
CREATE TABLE `jos_vm_order_payment` (
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
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 COMMENT='Способы оплаты которые были выбр';

--
-- Dumping data for table `jos_vm_order_payment`
--

LOCK TABLES `jos_vm_order_payment` WRITE;
/*!40000 ALTER TABLE `jos_vm_order_payment` DISABLE KEYS */;
INSERT INTO `jos_vm_order_payment` VALUES (1,25,'','',943995600,'','','');
INSERT INTO `jos_vm_order_payment` VALUES (7,25,'','',943995600,'','','');
INSERT INTO `jos_vm_order_payment` VALUES (8,2,'','',943995600,'','Информация для оплаты получена и сохранена для дальнейшей обработки.<br />','');
INSERT INTO `jos_vm_order_payment` VALUES (9,2,'','',943995600,'','Информация для оплаты получена и сохранена для дальнейшей обработки.<br />','');
INSERT INTO `jos_vm_order_payment` VALUES (10,2,'','',943995600,'','Информация для оплаты получена и сохранена для дальнейшей обработки.<br />','');
/*!40000 ALTER TABLE `jos_vm_order_payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_order_status`
--

DROP TABLE IF EXISTS `jos_vm_order_status`;
CREATE TABLE `jos_vm_order_status` (
  `order_status_id` int(11) NOT NULL auto_increment,
  `order_status_code` char(1) NOT NULL default '',
  `order_status_name` varchar(64) default NULL,
  `list_order` int(11) default NULL,
  `vendor_id` int(11) default NULL,
  PRIMARY KEY  (`order_status_id`),
  KEY `idx_order_status_list_order` (`list_order`),
  KEY `idx_order_status_vendor_id` (`vendor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=cp1251 COMMENT='Все доступные способы заказа';

--
-- Dumping data for table `jos_vm_order_status`
--

LOCK TABLES `jos_vm_order_status` WRITE;
/*!40000 ALTER TABLE `jos_vm_order_status` DISABLE KEYS */;
INSERT INTO `jos_vm_order_status` VALUES (1,'P','Ожидание',1,1);
INSERT INTO `jos_vm_order_status` VALUES (2,'C','Подтверждено',2,1);
INSERT INTO `jos_vm_order_status` VALUES (3,'X','Отменено',3,1);
INSERT INTO `jos_vm_order_status` VALUES (4,'R','Оплачено',4,1);
INSERT INTO `jos_vm_order_status` VALUES (5,'S','Доставлено',5,1);
/*!40000 ALTER TABLE `jos_vm_order_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_order_user_info`
--

DROP TABLE IF EXISTS `jos_vm_order_user_info`;
CREATE TABLE `jos_vm_order_user_info` (
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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=cp1251 COMMENT='Хранит информацию ОплатитьВ и До';

--
-- Dumping data for table `jos_vm_order_user_info`
--

LOCK TABLES `jos_vm_order_user_info` WRITE;
/*!40000 ALTER TABLE `jos_vm_order_user_info` DISABLE KEYS */;
INSERT INTO `jos_vm_order_user_info` VALUES (1,1,62,'BT',NULL,'Конко-ко','Г-жа','Главная','Администратор','нет','322-22-33','','','1-2-3','','Вешки','80','RUS','113326','kalinova@nicmail.ru','','','','','','','','','','','Checking');
INSERT INTO `jos_vm_order_user_info` VALUES (2,2,0,'BT','-default-','','','','Васечкин','','1111111','','','Москва','','','','','','elenika@bk.ru','','','','','','','','','','','');
INSERT INTO `jos_vm_order_user_info` VALUES (3,3,0,'BT','-default-','','','','fsdf','','1111111','','','варпва','','','','','','elenika@bk.ru','','','','','','','','','','','');
INSERT INTO `jos_vm_order_user_info` VALUES (4,4,0,'BT','-default-','','','','ertwe4t','','1111111','','','Москва, Молодежная 100','','','','','','elenika@bk.ru','','','','','','','','','','','');
INSERT INTO `jos_vm_order_user_info` VALUES (5,5,0,'BT','-default-','','','','Хома','','7776655','','','Зеленая долина третий холм слева','','','','','','bronton@yandex.ru','','','','','','','','','','','');
INSERT INTO `jos_vm_order_user_info` VALUES (6,6,0,'BT','-default-','','','','hgkj','','1234567','','','Москва? 100','','','','','','kalinova@nicmail.ru','','','','','','','','','','','');
INSERT INTO `jos_vm_order_user_info` VALUES (7,7,62,'BT',NULL,'Конко-ко','Г-жа','Главная','Администратор','нет','322-22-33','','','1-2-3','','Вешки','80','RUS','113326','kalinova@nicmail.ru','','','','','','','','','','','Checking');
INSERT INTO `jos_vm_order_user_info` VALUES (8,8,62,'BT',NULL,'Конко-ко','Г-жа','Главная','Администратор','нет','322-22-33','','','1-2-3','','Вешки','80','RUS','113326','kalinova@nicmail.ru','','','','','','','','','','','Checking');
INSERT INTO `jos_vm_order_user_info` VALUES (9,9,62,'BT',NULL,'Конко-ко','Г-жа','Главная','Администратор','нет','322-22-33','','','1-2-3','','Вешки','80','RUS','113326','kalinova@nicmail.ru','','','','','','','','','','','Checking');
INSERT INTO `jos_vm_order_user_info` VALUES (10,10,62,'BT',NULL,'Конко-ко','Г-жа','Главная','Администратор','нет','322-22-33','','','1-2-3','','Вешки','80','RUS','113326','kalinova@nicmail.ru','','','','','','','','','','','Checking');
INSERT INTO `jos_vm_order_user_info` VALUES (11,11,0,'BT','-default-','','','','gkjh','','1234567','','','москва,100','','','','','','','','','','','','','','','','','');
/*!40000 ALTER TABLE `jos_vm_order_user_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_orders`
--

DROP TABLE IF EXISTS `jos_vm_orders`;
CREATE TABLE `jos_vm_orders` (
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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=cp1251 COMMENT='Используется для хранения заказ?';

--
-- Dumping data for table `jos_vm_orders`
--

LOCK TABLES `jos_vm_orders` WRITE;
/*!40000 ALTER TABLE `jos_vm_orders` DISABLE KEYS */;
INSERT INTO `jos_vm_orders` VALUES (1,62,1,'187efcea109703baab1b547d56e25db1','b32b0a58029cac587c37ad50cbdc9aea','21045.97','18000.00000','1485.00','a:1:{s:6:\"0.0825\";d:118.964999999999918145476840436458587646484375;}','1442.00','118.97','0.00','0.00','RUB','P',1194948676,1194948676,'flex|STD|Стандартная доставка больше 25.00|1560.965','','194.226.46.202');
INSERT INTO `jos_vm_orders` VALUES (2,0,1,'7d7be614be59461dc7031a9fc4b3222c','','9000.46','9000.46189','0.00','','0.00','0.00','0.00','0.00','RUB','P',1195486438,1195486438,'','','194.226.46.208');
INSERT INTO `jos_vm_orders` VALUES (3,0,1,'05ae46069b466c27f825916489b252c8','','6000.00','6000.00000','0.00','','0.00','0.00','0.00','0.00','RUB','P',1195486489,1195486489,'','','194.226.46.208');
INSERT INTO `jos_vm_orders` VALUES (4,0,1,'e735399508d9d4405ef53411d3d8c26a','','6000.00','6000.00000','0.00','N;','0.00','0.00','0.00','0.00','RUB','P',1195486944,1195486944,'','','194.226.46.208');
INSERT INTO `jos_vm_orders` VALUES (5,0,1,'463a4be3bf3303701c3bd630e61b1259','','4499.77','4499.76905','0.00','N;','0.00','0.00','0.00','0.00','RUB','P',1195535692,1195535692,'','Покупка без регистрации','194.226.46.202');
INSERT INTO `jos_vm_orders` VALUES (6,0,1,'d850ab719a469c399649be2c448770bf','','99.77','99.76905','0.00','N;','0.00','0.00','0.00','0.00','RUB','P',1195729519,1195729519,'','','194.226.46.208');
INSERT INTO `jos_vm_orders` VALUES (7,62,1,'0c73cfeebb0e2d9765180d99181d4478','b32b0a58029cac587c37ad50cbdc9aea','118.82','99.76905','8.25','a:1:{s:6:\"0.0825\";d:0.8234757505773675489990637288428843021392822265625;}','9.98','0.82','0.00','0.00','RUB','S',1195729602,1195730202,'flex|STD|Стандартная доставка больше 25.00|10.805','','194.226.46.208');
INSERT INTO `jos_vm_orders` VALUES (8,62,1,'a85d03a23807382ac8a2778c59ed2982','b32b0a58029cac587c37ad50cbdc9aea','7018.77','6000.00000','495.15','a:1:{s:6:\"0.0825\";d:39.7649999999999863575794734060764312744140625;}','482.00','39.77','0.00','-2.00','RUB','P',1195730516,1195730516,'flex|STD|Стандартная доставка больше 25.00|521.765','','194.226.46.208');
INSERT INTO `jos_vm_orders` VALUES (9,62,1,'6cb06cd4aa00aa213a0965b3b927bae4','b32b0a58029cac587c37ad50cbdc9aea','120.82','99.76905','8.40','a:1:{s:6:\"0.0825\";d:0.8234757505773675489990637288428843021392822265625;}','9.98','0.82','0.00','-2.00','RUB','S',1195730957,1195730984,'flex|STD|Стандартная доставка больше 25.00|10.805','','194.226.46.208');
INSERT INTO `jos_vm_orders` VALUES (10,62,1,'68b4ff45a97f3936219af5f8597293b1','b32b0a58029cac587c37ad50cbdc9aea','120.82','99.76905','8.40','a:1:{s:6:\"0.0825\";d:0.8234757505773675489990637288428843021392822265625;}','9.98','0.82','0.00','-2.00','RUB','S',1195731491,1195731509,'flex|STD|Стандартная доставка больше 25.00|10.805','','194.226.46.208');
INSERT INTO `jos_vm_orders` VALUES (11,0,1,'b35d94d1393bd2e5699e417a7ada5364','','14901522.40','14901522.40184','0.00','N;','0.00','0.00','0.00','0.00','RUB','P',1196173399,1196173399,'','','194.226.46.208');
/*!40000 ALTER TABLE `jos_vm_orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_payment_method`
--

DROP TABLE IF EXISTS `jos_vm_payment_method`;
CREATE TABLE `jos_vm_payment_method` (
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
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=cp1251 COMMENT='Методы оплаты для вашего магазин';

--
-- Dumping data for table `jos_vm_payment_method`
--

LOCK TABLES `jos_vm_payment_method` WRITE;
/*!40000 ALTER TABLE `jos_vm_payment_method` DISABLE KEYS */;
INSERT INTO `jos_vm_payment_method` VALUES (1,1,'Оплата при заказе','',6,'0.00',4,'PO','N',0,'Y','','','');
INSERT INTO `jos_vm_payment_method` VALUES (2,1,'Оплата при получении','',5,'-2.00',5,'COD','N',0,'Y','','','');
INSERT INTO `jos_vm_payment_method` VALUES (3,1,'Оплата по кредитной карте','ps_authorize',5,'0.00',0,'AN','Y',0,'Y','1,2,6,7,','','');
INSERT INTO `jos_vm_payment_method` VALUES (4,1,'Оплата через PayPal','ps_paypal',5,'0.00',0,'PP','P',0,'Y','','','');
INSERT INTO `jos_vm_payment_method` VALUES (5,1,'PayMate','ps_paymate',5,'0.00',0,'PM','P',0,'N','','<script type=\"text/javascript\" language=\"javascript\">\n  function openExpress(){\n	var url = \'https://www.paymate.com.au/PayMate/ExpressPayment?mid=<?php echo PAYMATE_USERNAME.\n	  \"&amt=\".$db->f(\"order_total\").\n	  \"&currency=\".$_SESSION[\'vendor_currency\'].\n	  \"&ref=\".$db->f(\"order_id\").\n	  \"&pmt_sender_email=\".$user->email.\n	  \"&pmt_contact_firstname=\".$user->first_name.\n	  \"&pmt_contact_surname=\".$user->last_name.\n	  \"&regindi_address1=\".$user->address_1.\n	  \"&regindi_address2=\".$user->address_2.\n	  \"&regindi_sub=\".$user->city.\n	  \"&regindi_pcode=\".$user->zip;?>\'\n	var newWin = window.open(url, \'wizard\', \'height=640,width=500,scrollbars=0,toolbar=no\');\n	self.name = \'parent\';\n	newWin.focus();\n  }\n  </script>\n  <div align=\"center\">\n  <p>\n  <a href=\"javascript:openExpress();\">\n  <img src=\"https://www.paymate.com.au/homepage/images/butt_PayNow.gif\" border=\"0\" alt=\"Pay with Paymate Express\">\n  <br />click here to pay your account</a>\n  </p>\n  </div>','');
INSERT INTO `jos_vm_payment_method` VALUES (6,1,'WorldPay','ps_worldpay',5,'0.00',0,'WP','P',0,'N','','<form action=\"https://select.worldpay.com/wcc/purchase\" method=\"post\">\n						  <input type=hidden name=\"testMode\" value=\"100\">\n						  <input type=\"hidden\" name=\"instId\" value=\"<?php echo WORLDPAY_INST_ID ?>\" />\n						  <input type=\"hidden\" name=\"cartId\" value=\"<?php echo $db->f(\"order_id\") ?>\" />\n						  <input type=\"hidden\" name=\"amount\" value=\"<?php echo $db->f(\"order_total\") ?>\" />\n						  <input type=\"hidden\" name=\"currency\" value=\"<?php echo $_SESSION[\'vendor_currency\'] ?>\" />\n						  <input type=\"hidden\" name=\"desc\" value=\"Products\" />\n						  <input type=\"hidden\" name=\"email\" value=\"<?php echo $user->email?>\" />\n						  <input type=\"hidden\" name=\"address\" value=\"<?php echo $user->address_1?>&#10<?php echo $user->address_2?>&#10<?php echo\n						  $user->city?>&#10<?php echo $user->state?>\" />\n						  <input type=\"hidden\" name=\"name\" value=\"<?php echo $user->title?><?php echo $user->first_name?>. <?php echo $user->middle_name?><?php echo $user->last_name?>\" />\n						  <input type=\"hidden\" name=\"country\" value=\"<?php echo $user->country?>\"/>\n						  <input type=\"hidden\" name=\"postcode\" value=\"<?php echo $user->zip?>\" />\n						  <input type=\"hidden\" name=\"tel\"  value=\"<?php echo $user->phone_1?>\">\n						  <input type=\"hidden\" name=\"withDelivery\"  value=\"true\">\n						  <br />\n						  <input type=\"submit\" value =\"PROCEED TO PAYMENT PAGE\" />\n						  </form>','');
INSERT INTO `jos_vm_payment_method` VALUES (7,1,'2Checkout','ps_twocheckout',5,'0.00',0,'2CO','P',0,'N','','<?php\n	$q  = \"SELECT * FROM #__users WHERE user_info_id=\'\".$db->f(\"user_info_id\").\"\'\";\n	$dbbt = new ps_DB;\n	$dbbt->setQuery($q);\n	$dbbt->query();\n	$dbbt->next_record();\n	// Get ship_to information\n	if( $db->f(\"user_info_id\") != $dbbt->f(\"user_info_id\")) {\n	  $q2  = \"SELECT * FROM #__vm_user_info WHERE user_info_id=\'\".$db->f(\"user_info_id\").\"\'\";\n	  $dbst = new ps_DB;\n	  $dbst->setQuery($q2);\n	  $dbst->query();\n	  $dbst->next_record();\n	}\n	else  {\n	  $dbst = $dbbt;\n	}\n\n	//Authnet vars to send\n	$formdata = array (\n	 \'x_login\' => TWOCO_LOGIN,\n	 \'x_email_merchant\' => ((TWOCO_MERCHANT_EMAIL == \'True\') ? \'TRUE\' : \'FALSE\'),\n\n	 // Customer Name and Billing Address\n	 \'x_first_name\' => $dbbt->f(\"first_name\"),\n	 \'x_last_name\' => $dbbt->f(\"last_name\"),\n	 \'x_company\' => $dbbt->f(\"company\"),\n	 \'x_address\' => $dbbt->f(\"address_1\"),\n	 \'x_city\' => $dbbt->f(\"city\"),\n	 \'x_state\' => $dbbt->f(\"state\"),\n	 \'x_zip\' => $dbbt->f(\"zip\"),\n	 \'x_country\' => $dbbt->f(\"country\"),\n	 \'x_phone\' => $dbbt->f(\"phone_1\"),\n	 \'x_fax\' => $dbbt->f(\"fax\"),\n	 \'x_email\' => $dbbt->f(\"email\"),\n\n	 // Customer Shipping Address\n	 \'x_ship_to_first_name\' => $dbst->f(\"first_name\"),\n	 \'x_ship_to_last_name\' => $dbst->f(\"last_name\"),\n	 \'x_ship_to_company\' => $dbst->f(\"company\"),\n	 \'x_ship_to_address\' => $dbst->f(\"address_1\"),\n	 \'x_ship_to_city\' => $dbst->f(\"city\"),\n	 \'x_ship_to_state\' => $dbst->f(\"state\"),\n	 \'x_ship_to_zip\' => $dbst->f(\"zip\"),\n	 \'x_ship_to_country\' => $dbst->f(\"country\"),\n\n	 \'x_invoice_num\' => $db->f(\"order_number\"),\n	 \'x_receipt_link_url\' => SECUREURL.\"2checkout_notify.php\"\n	 );\n\n	if( TWOCO_TESTMODE == \"Y\" )\n	  $formdata[\'demo\'] = \"Y\";\n\n	 $version = \"2\";\n	 $url = \"https://www2.2checkout.com/2co/buyer/purchase\";\n	 $formdata[\'x_amount\'] = number_format($db->f(\"order_total\"), 2, \'.\', \'\');\n\n	 //build the post string\n	 $poststring = \'\';\n	 foreach($formdata AS $key => $val){\n	   $poststring .= \"<input type=\'hidden\' name=\'$key\' value=\'$val\' />\n	\";\n	 }\n\n	?>\n	<form action=\"<?php echo $url ?>\" method=\"post\" target=\"_blank\">\n	<?php echo $poststring ?>\n	<p>Click on the Image below to pay...</p>\n	<input type=\"image\" name=\"submit\" src=\"https://www.2checkout.com/images/buy_logo.gif\" border=\"0\" alt=\"Make payments with 2Checkout, it\'s fast and secure!\" title=\"Pay your Order with 2Checkout, it\'s fast and secure!\" />\n	</form>','');
INSERT INTO `jos_vm_payment_method` VALUES (8,1,'Оплата по NoChex','ps_nochex',5,'0.00',0,'NOCHEX','P',0,'N','','<form action=\"https://www.nochex.com/nochex.dll/checkout\" method=post target=\"_blank\">\n											<input type=\"hidden\" name=\"email\" value=\"<?php echo NOCHEX_EMAIL ?>\" />\n											<input type=\"hidden\" name=\"amount\" value=\"<?php printf(\"%.2f\", $db->f(\"order_total\"))?>\" />\n											<input type=\"hidden\" name=\"ordernumber\" value=\"<?php $db->p(\"order_id\") ?>\" />\n											<input type=\"hidden\" name=\"logo\" value=\"<?php echo $vendor_image_url ?>\" />\n											<input type=\"hidden\" name=\"returnurl\" value=\"<?php echo SECUREURL .\"index.php?option=com_virtuemart&amp;page=checkout.result&amp;order_id=\".$db->f(\"order_id\") ?>\" />\n											<input type=\"image\" name=\"submit\" src=\"http://www.nochex.com/web/images/paymeanimated.gif\">\n											</form>','');
INSERT INTO `jos_vm_payment_method` VALUES (9,1,'Оплата по кредитной карте (PayMeNow)','ps_paymenow',5,'0.00',0,'PN','Y',0,'N','1,2,3,','','');
INSERT INTO `jos_vm_payment_method` VALUES (10,1,'Оплата по eWay','ps_eway',5,'0.00',0,'EW','Y',0,'N','','','');
INSERT INTO `jos_vm_payment_method` VALUES (11,1,'Оплата по eCheck.net','ps_echeck',5,'0.00',0,'ECK','B',0,'N','','','');
INSERT INTO `jos_vm_payment_method` VALUES (12,1,'Оплата по кредитной карте (eProcessingNetwork)','ps_epn',5,'0.00',0,'EPN','Y',0,'N','1,2,3,','','');
INSERT INTO `jos_vm_payment_method` VALUES (13,1,'Оплата по iKobo','',5,'0.00',0,'IK','P',0,'N','','<form action=\"https://www.iKobo.com/store/index.php\" method=\"post\">\n  <input type=\"hidden\" name=\"cmd\" value=\"cart\" />Щелкните по картинке ниже чтобы оплатить Pay with iKobo\n  <input type=\"image\" src=\"https://www.ikobo.com/merchant/buttons/ikobo_pay1.gif\" name=\"submit\" alt=\"Платить через iKobo\" />\n  <input type=\"hidden\" name=\"poid\" value=\"USER_ID\" />\n  <input type=\"hidden\" name=\"item\" value=\"Order: <?php $db->p(\"order_id\") ?>\" />\n  <input type=\"hidden\" name=\"price\" value=\"<?php printf(\"%.2f\", $db->f(\"order_total\"))?>\" />\n  <input type=\"hidden\" name=\"firstname\" value=\"<?php echo $user->first_name?>\" />\n  <input type=\"hidden\" name=\"lastname\" value=\"<?php echo $user->last_name?>\" />\n  <input type=\"hidden\" name=\"address\" value=\"<?php echo $user->address_1?>&#10<?php echo $user->address_2?>\" />\n  <input type=\"hidden\" name=\"city\" value=\"<?php echo $user->city?>\" />\n  <input type=\"hidden\" name=\"state\" value=\"<?php echo $user->state?>\" />\n  <input type=\"hidden\" name=\"zip\" value=\"<?php echo $user->zip?>\" />\n  <input type=\"hidden\" name=\"phone\" value=\"<?php echo $user->phone_1?>\" />\n  <input type=\"hidden\" name=\"email\" value=\"<?php echo $user->email?>\" />\n  </form> >','');
INSERT INTO `jos_vm_payment_method` VALUES (14,1,'Оплата по iTransact','',5,'0.00',0,'ITR','P',0,'N','','<?php\n  //your iTransact account details\n  $vendorID = \"XXXXX\";\n  global $vendor_name;\n  $mername = $vendor_name;\n\n  //order details\n  $total = $db->f(\"order_total\");$first_name = $user->first_name;$last_name = $user->last_name;$address = $user->address_1;$city = $user->city;$state = $user->state;$zip = $user->zip;$country = $user->country;$email = $user->email;$phone = $user->phone_1;$home_page = $mosConfig_live_site.\"/index.php\";$ret_addr = $mosConfig_live_site.\"/index.php\";$cc_payment_image = $mosConfig_live_site.\"/components/com_virtuemart/shop_image/ps_image/cc_payment.jpg\";\n  ?>\n  <form action=\"https://secure.paymentclearing.com/cgi-bin/mas/split.cgi\" method=\"POST\">\n		<input type=\"hidden\" name=\"vendor_id\" value=\"<?php echo $vendorID; ?>\" />\n		<input type=\"hidden\" name=\"home_page\" value=\"<?php echo $home_page; ?>\" />\n		<input type=\"hidden\" name=\"ret_addr\" value=\"<?php echo $ret_addr; ?>\" />\n		<input type=\"hidden\" name=\"mername\" value=\"<?php echo $mername; ?>\" />\n		<!--Enter text in the next value that should appear on the bottom of the order form.-->\n		<INPUT type=\"hidden\" name=\"mertext\" value=\"\" />\n		<!--If you are accepting checks, enter the number 1 in the next value.  Enter the number 0 if you are not accepting checks.-->\n		<INPUT type=\"hidden\" name=\"acceptchecks\" value=\"0\" />\n		<!--Enter the number 1 in the next value if you want to allow pre-registered customers to pay with a check.  Enter the number 0 if not.-->\n		<INPUT type=\"hidden\" name=\"allowreg\" value=\"0\" />\n		<!--If you are set up with Check Guarantee, enter the number 1 in the next value.  Enter the number 0 if not.-->\n		<INPUT type=\"hidden\" name=\"checkguar\" value=\"0\" />\n		<!--Enter the number 1 in the next value if you are accepting credit card payments.  Enter the number zero if not.-->\n		<INPUT type=\"hidden\" name=\"acceptcards\" value=\"1\">\n		<!--Enter the number 1 in the next value if you want to allow a separate mailing address for credit card orders.  Enter the number 0 if not.-->\n		<INPUT type=\"hidden\" name=\"altaddr\" value=\"0\" />\n		<!--Enter the number 1 in the next value if you want the customer to enter the CVV number for card orders.  Enter the number 0 if not.-->\n		<INPUT type=\"hidden\" name=\"showcvv\" value=\"1\" />\n\n		<input type=\"hidden\" name=\"1-desc\" value=\"Order Total\" />\n		<input type=\"hidden\" name=\"1-cost\" value=\"<?php echo $total; ?>\" />\n		<input type=\"hidden\" name=\"1-qty\" value=\"1\" />\n		<input type=\"hidden\" name=\"total\" value=\"<?php echo $total; ?>\" />\n		<input type=\"hidden\" name=\"first_name\" value=\"<?php echo $first_name; ?>\" />\n		<input type=\"hidden\" name=\"last_name\" value=\"<?php echo $last_name; ?>\" />\n		<input type=\"hidden\" name=\"address\" value=\"<?php echo $address; ?>\" />\n		<input type=\"hidden\" name=\"city\" value=\"<?php echo $city; ?>\" />\n		<input type=\"hidden\" name=\"state\" value=\"<?php echo $state; ?>\" />\n		<input type=\"hidden\" name=\"zip\" value=\"<?php echo $zip; ?>\" />\n		<input type=\"hidden\" name=\"country\" value=\"<?php echo $country; ?>\" />\n		<input type=\"hidden\" name=\"phone\" value=\"<?php echo $phone; ?>\" />\n		<input type=\"hidden\" name=\"email\" value=\"<?php echo $email; ?>\" />\n		<p><input type=\"image\" alt=\"Process Secure Credit Card Transaction using iTransact\" border=\"0\" height=\"60\" width=\"210\" src=\"<?php echo $cc_payment_image; ?>\" /> </p>\n		</form>','');
INSERT INTO `jos_vm_payment_method` VALUES (17,1,'RUS yandex-деньги','ps_yandex',5,'0.00',0,'YNX','P',0,'Y','','\n<form method=POST action=\"http://money.yandex.ru/select-wallet.xml\">\n<input type=hidden name=TargetCurrency value=\"643\">\n<input type=hidden name=ShopID value=\"ШопИД\">\n<input type=hidden name=Currency value=\"643\">\n\n<input type=hidden name=wbp_InactivityPeriod value=\"2\">\n<input type=hidden name=wbp_ShopAddress value=\"ws1.paycash.ru:8128\">\n<input type=hidden name=wbp_ShopEncryptionKey value=\"ШопКейКодирования\">\n<input type=hidden name=wbp_ShopErrorInfo value=\"\">\n<input type=hidden name=wbp_ShopKeyID value=\"ШопКей\">\n<input type=hidden name=wbp_Version value=\'1.0\'>\n\n<input type=hidden name=InvoiceArticlesNames value=\"Примечание\">\n<input type=hidden name=Sum value=\"Сумма\">\n<input type=hidden name=OrderID value=\"ИдАккаунта\">\n<input type=hidden name=CustAddr value=\"Обратная страничка\">\n\n<input type=submit value=\"Оплатить\">\n','');
INSERT INTO `jos_vm_payment_method` VALUES (19,1,'RUS rupay','ps_rupay',5,'0.00',0,'RPY','P',0,'Y','','<?\r\n/**********************************\r\nthis is a \"payment extra info\" code\r\n**********************************/\r\n\r\n$task = mosGetParam($_REQUEST, \"task\", \"show\");\r\nrequire_once( CLASSPATH.\"payment/\".$db->f(\"payment_class\").\".php\" );\r\n\r\n$rupay = new ps_rupay();\r\n\r\nswitch($task) {\r\n  case \"send\":\r\n    $method = mosGetParam($_REQUEST, \"method\");\r\n    $amount = mosGetParam($_REQUEST, \"amount\");\r\n    $currency = mosGetParam($_REQUEST, \"currency\");\r\n    $order_id = intval(mosGetParam($_REQUEST, \"order_id\"));\r\n    $customer_note = mosGetParam($_REQUEST, \"customer_note\", \"\");\r\n    if( !$result = $rupay->get_payment_properties( $order_id, $method, $currency, $amount ) )\r\n      echo $VM_LANG->PHPSHOP_RUPAY_ERROR_GET_PAYMENT_PROPERTIES;\r\n    else\r\n      echo $result;\r\n    break;\r\n\r\n  case \"check\":\r\n    if( !$result = $rupay->check_payment_status(  ) )\r\n      echo $VM_LANG->PHPSHOP_RUPAY_ERROR_CHECK_PAYMENT_STATUS;\r\n    else\r\n      echo $result;\r\n    break;\r\n\r\n  case \"show\":\r\n  default:\r\n    $order_id = intval(mosGetParam($vars, \"order_id\"));\r\n    if( !$result = $rupay->get_payment_methods( $order_id, $_SESSION[\"vendor_currency\"], round( $db->f(\"order_subtotal\")+$tax_total-$discount_total, 2)) ) {\r\n      echo $VM_LANG->PHPSHOP_RUPAY_ERROR_GET_PAYMENT_METHODS;\r\n    }\r\n    else {\r\n      echo $result;\r\n    }\r\n    break;\r\n}\r\n\r\n?>','');
INSERT INTO `jos_vm_payment_method` VALUES (22,1,'RUS webmoney','ps_webmoney',5,'0.00',0,'WBM','P',0,'Y','','<?php require_once( CLASSPATH. \'payment/ps_wm_paymentextra.php\' );?>','');
INSERT INTO `jos_vm_payment_method` VALUES (23,1,'Оплата по Dankort / PBS','ps_pbs',5,'0.00',0,'PBS','P',0,'N','','','');
INSERT INTO `jos_vm_payment_method` VALUES (24,1,'Оплата по PayFlow Pro','ps_pfp',5,'0.00',0,'PFP','Y',0,'N','1,2,6,7,','','');
INSERT INTO `jos_vm_payment_method` VALUES (25,1,'Квитанция Сбербанка','ps_kvit',5,'0.00',0,'kvit','P',0,'Y','','<script type=\\\"text/javascript\\\">\r\nvar kvit = null;\r\nfunction print_kvitok(){\r\nkvit = window.open(\\\"\\\",\\\"kvitokwin\\\", \\\"fullscreen=no,status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=yes,resizable=yes,directories=no,location=no,width=710,height=600\\\");\r\n\r\nwith (kvit.document) {\r\nvar kvitok=document.getElementById(\\\'kvitok\\\');\r\nkvitan=kvitok.innerHTML;\r\nopen(\\\'text/html\\\');\r\nwriteln(\\\'<!DOCTYPE html PUBLIC \\\"-//W3C//DTD XHTML 1.0 Transitional//EN\\\" \\\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\\\">\\\');\r\nwriteln(\\\'<html xmlns=\\\"http://www.w3.org/1999/xhtml\\\">\\\');\r\nwriteln(\\\'<html>\\\');\r\nwriteln(\\\'<head>\\\');\r\nwriteln(\\\'<title>Банковский перевод</title>\\\');\r\nwriteln(\\\'<link rel=\\\"stylesheet\\\" href=\\\"/style.css\\\">\\\');\r\nwriteln(\\\'</head>\\\');\r\nwriteln(\\\'<style type=\\\"text/css\\\">\\\');\r\nwriteln(\\\'H1 {font-size: 12pt;}\\\');\r\nwriteln(\\\'p, ul, ol, h1 {margin-top:6px; margin-bottom:6px}\\\');\r\nwriteln(\\\'td {font-size: 9pt;}\\\');\r\nwriteln(\\\'small {font-size: 7pt;}\\\');\r\nwriteln(\\\'body {font-size: 10pt;}\\\');\r\nwriteln(\\\'</style>\\\');\r\nwriteln(\\\'<body style=\\\"margin:2px;\\\" marginheight=0 marginwidth=0 bgcolor=\\\"#ffffff\\\" link=\\\"black\\\" vlink=\\\"#a0a0a0\\\" alink=\\\"#fa0055\\\">\\\');\r\nwriteln(\\\'<table align=\\\"center\\\" width=\\\"90%\\\" cellspacing=\\\"2\\\" cellpadding=\\\"2\\\" border=\\\"0\\\"><tr>\\\');\r\nwriteln(\\\'<td valign=\\\"top\\\" height=\\\"90%\\\" colspan=\\\"2\\\">\\\');\r\nwriteln(kvitan);\r\nwriteln(\\\'</td></tr>\\\');\r\nwriteln(\\\'<tr><td align=\\\"right\\\"><a href=\\\"javascript:void(0)\\\" onClick=\\\"window.close()\\\">Закрыть окно</a> </td>\\\');\r\nwriteln(\\\'<td align=\\\"left\\\"> <a href=\\\"javascript:void(0)\\\" onClick=\\\"window.print(); return false\\\">Печать квитанции</a></td></tr></table>\\\');\r\nwriteln(\\\'</body>\\\');\r\nwriteln(\\\'</html>\\\');\r\nclose();\r\n}}\r\n</script>\r\n<script type=\\\"text/javascript\\\">\r\nfunction displayParameterInfo()\r\n{\r\nif(document.getElementById(\\\'kvitok\\\').style.display == \\\'block\\\')\r\n{\r\ndocument.getElementById(\\\'kvitok\\\').style.display = \\\'none\\\';\r\ndocument.getElementById(\\\'show\\\').style.display = \\\'block\\\';\r\ndocument.getElementById(\\\'hide\\\').style.display = \\\'none\\\';\r\n}\r\nelse\r\n{\r\ndocument.getElementById(\\\'kvitok\\\').style.display = \\\'block\\\';\r\ndocument.getElementById(\\\'show\\\').style.display = \\\'none\\\';\r\ndocument.getElementById(\\\'hide\\\').style.display = \\\'block\\\';\r\n}\r\n}\r\n</script>\r\n<?php\r\n$advanced = \\\'block\\\';\r\n$simple = \\\'none\\\';\r\n$kvitok = \\\'none\\\';\r\n?>\r\n<table width=\\\"100%\\\">\r\n<tr>\r\n<td valign=\\\"top\\\" align=\\\"center\\\">\r\n<div align=\\\"center\\\" style=\\\"margin: 0 auto\\\"><strong>Квитанция:</strong></div>\r\n</td>\r\n<td valign=\\\"top\\\" align=\\\"center\\\">\r\n<div id = \\\"show\\\" style=\\\"display:<?php echo $simple;?>\\\"><strong><a href=\\\"javascript:displayParameterInfo();\\\">Показать/Скрыть </a></strong>\r\n</div>\r\n<div id = \\\"hide\\\" style=\\\"display:<?php echo $advanced;?>\\\"><strong><a href=\\\"javascript:displayParameterInfo();\\\">Показать/Скрыть</a></strong>\r\n</div>\r\n</td>\r\n<td valign=\\\"top\\\" align=\\\"center\\\">\r\n<div align=\\\"center\\\" style=\\\"margin: 0 auto\\\"><strong><a href=\\\"javascript:void(0)\\\" onclick=\\\"print_kvitok(); return false;\\\" target=\\\"_self\\\">Открыть для печати в новом окне</a></strong></div>\r\n</td>\r\n</tr>\r\n</table>\r\n<br />\r\n<div id=kvitok STYLE=\\\"display:<?php echo $kvitok;?>; margin: auto;\\\" align=center>\r\n\r\n<!-- Шаблон квитанции - начало -->\r\n  <table style=\\\"width: 180mm; height: 145mm; background: #ffffff\\\" border=\\\"0\\\" cellpadding=\\\"0\\\" cellspacing=\\\"0\\\">\r\n    <tbody>\r\n      <tr valign=\\\"top\\\">\r\n        <td style=\\\"border-style: solid none none solid; border-color: #000000; border-width: 1pt medium medium 1pt; width: 50mm; height: 70mm;\\\" align=\\\"center\\\"><em>Извещение</em><br />\r\n          <font style=\\\"font-size: 53mm;\\\">&nbsp;<br />\r\n          </font> <b>Кассир</b> </td>\r\n        <td style=\\\"border-style: solid solid none; border-color: rgb(0, 0, 0) rgb(0, 0, 0) -moz-use-text-color; border-width: 1pt 1pt medium;\\\" align=\\\"center\\\"><table style=\\\"width: 122mm; margin-top: 3pt;\\\" border=\\\"0\\\" cellpadding=\\\"0\\\" cellspacing=\\\"0\\\">\r\n            <tbody>\r\n              <tr>\r\n                <td align=\\\"right\\\"><small><i>Форма № ПД-4</i></small></td>\r\n              </tr>\r\n              <tr>\r\n                <td style=\\\"border-bottom: 1pt solid rgb(0, 0, 0)\\\" align=\\\"center\\\"><strong><?php echo CONF_PHYS_COMPANYNAME ?></strong></td>\r\n              </tr>\r\n              <tr>\r\n                <td align=\\\"center\\\"><small>(наименование получателя платежа)</small></td>\r\n              </tr>\r\n            </tbody>\r\n          </table>\r\n          <table style=\\\"width: 122mm; margin-top: 3pt;\\\" border=\\\"0\\\" cellpadding=\\\"0\\\" cellspacing=\\\"0\\\">\r\n            <tbody>\r\n              <tr>\r\n                <td style=\\\"border-bottom: 1pt solid rgb(0, 0, 0); width: 37mm;\\\" align=\\\"center\\\"><strong>ИНН: <?php echo CONF_PHYS_INN ?></strong></td>\r\n                <td style=\\\"width: 9mm;\\\">&nbsp;</td>\r\n                <td style=\\\"border-bottom: 1pt solid rgb(0, 0, 0);\\\" align=\\\"center\\\"><strong>р/с <?php echo CONF_PHYS_BANK_ACCOUNT_NUMBER ?></strong></td>\r\n              </tr>\r\n              <tr>\r\n                <td align=\\\"center\\\"><small>(ИНН получателя платежа)</small></td>\r\n                <td><small>&nbsp;</small></td>\r\n                <td align=\\\"center\\\"><small>(номер счета получателя платежа)</small></td>\r\n              </tr>\r\n            </tbody>\r\n          </table>\r\n          <table style=\\\"width: 122mm; margin-top: 3pt;\\\" border=\\\"0\\\" cellpadding=\\\"0\\\" cellspacing=\\\"0\\\">\r\n            <tbody>\r\n              <tr>\r\n                <td>в&nbsp;</td>\r\n                <td style=\\\"border-bottom: 1pt solid rgb(0, 0, 0); width: 73mm;\\\" align=\\\"center\\\"><strong><?php echo CONF_PHYS_BANKNAME ?></strong></td>\r\n                <td align=\\\"right\\\">БИК&nbsp;&nbsp;</td>\r\n                <td style=\\\"border-bottom: 1pt solid rgb(0, 0, 0); width: 33mm;\\\"><strong><?php echo CONF_PHYS_BIK ?></strong></td>\r\n              </tr>\r\n              <tr>\r\n                <td></td>\r\n                <td align=\\\"center\\\"><small>(наименование банка получателя платежа)</small></td>\r\n                <td></td>\r\n                <td></td>\r\n              </tr>\r\n            </tbody>\r\n          </table>\r\n          <table style=\\\"width: 122mm; margin-top: 3pt;\\\" border=\\\"0\\\" cellpadding=\\\"0\\\" cellspacing=\\\"0\\\">\r\n            <tbody>\r\n              <tr>\r\n                <td nowrap=\\\"nowrap\\\" width=\\\"1%\\\">Номер кор./сч. банка получателя платежа&nbsp;&nbsp;</td>\r\n                <td style=\\\"border-bottom: 1pt solid rgb(0, 0, 0);\\\" width=\\\"100%\\\"><strong><?php echo CONF_PHYS_BANK_KOR_NUMBER ?></strong></td>\r\n              </tr>\r\n            </tbody>\r\n          </table>\r\n          <table style=\\\"width: 122mm; margin-top: 3pt;\\\" border=\\\"0\\\" cellpadding=\\\"0\\\" cellspacing=\\\"0\\\">\r\n            <tbody>\r\n              <tr>\r\n                <td style=\\\"border-bottom: 1pt solid rgb(0, 0, 0); width: 60mm;\\\" align=\\\"center\\\"><STRONG> Платеж № <?php printf(\\\"%08d\\\", $db->f(\\\"order_id\\\"))?></STRONG></td>\r\n                <td style=\\\"width: 2mm;\\\">&nbsp;</td>\r\n                <td style=\\\"border-bottom: 1pt solid rgb(0, 0, 0);\\\">&nbsp;</td>\r\n              </tr>\r\n              <tr>\r\n                <td align=\\\"center\\\"><small>(наименование платежа)</small></td>\r\n                <td><small>&nbsp;</small></td>\r\n                <td align=\\\"center\\\"><small>(номер лицевого счета (код) плательщика)</small></td>\r\n              </tr>\r\n            </tbody>\r\n          </table>\r\n          <table style=\\\"width: 122mm; margin-top: 3pt;\\\" border=\\\"0\\\" cellpadding=\\\"0\\\" cellspacing=\\\"0\\\">\r\n            <tbody>\r\n              <tr>\r\n                <td nowrap=\\\"nowrap\\\" width=\\\"1%\\\">Ф.И.О. плательщика&nbsp;&nbsp;</td>\r\n                <td style=\\\"border-bottom: 1pt solid rgb(0, 0, 0);\\\" width=\\\"100%\\\">&nbsp;\r\n                  <!--Ф.И.О. плательщика--></td>\r\n              </tr>\r\n            </tbody>\r\n          </table>\r\n          <table style=\\\"width: 122mm; margin-top: 3pt;\\\" border=\\\"0\\\" cellpadding=\\\"0\\\" cellspacing=\\\"0\\\">\r\n            <tbody>\r\n              <tr>\r\n                <td nowrap=\\\"nowrap\\\" width=\\\"1%\\\">Адрес плательщика&nbsp;&nbsp;</td>\r\n                <td style=\\\"border-bottom: 1pt solid rgb(0, 0, 0);\\\" width=\\\"100%\\\">&nbsp;\r\n                  <!--Адрес плательщика--></td>\r\n              </tr>\r\n            </tbody>\r\n          </table>\r\n          <table style=\\\"width: 122mm; margin-top: 3pt;\\\" border=\\\"0\\\" cellpadding=\\\"0\\\" cellspacing=\\\"0\\\">\r\n            <tbody>\r\n              <tr>\r\n                <td>Сумма платежа&nbsp;<STRONG><?php printf(\\\"%.2f\\\", $db->f(\\\"order_total\\\"))?></STRONG> руб.</td>\r\n                <td align=\\\"right\\\">&nbsp;&nbsp;Сумма платы за услуги&nbsp;&nbsp;_____&nbsp;руб.&nbsp;____&nbsp;коп.</td>\r\n              </tr>\r\n            </tbody>\r\n          </table>\r\n          <table style=\\\"width: 122mm; margin-top: 3pt;\\\" border=\\\"0\\\" cellpadding=\\\"0\\\" cellspacing=\\\"0\\\">\r\n            <tbody>\r\n              <tr>\r\n                <td>Итого&nbsp;&nbsp;_______&nbsp;руб.&nbsp;____&nbsp;коп.</td>\r\n                <td align=\\\"right\\\"><STRONG><?php echo (strftime (_DATE_FORMAT_LC)); ?> г.</STRONG></td>\r\n              </tr>\r\n            </tbody>\r\n          </table>\r\n          <table style=\\\"width: 122mm; margin-top: 3pt;\\\" border=\\\"0\\\" cellpadding=\\\"0\\\" cellspacing=\\\"0\\\">\r\n            <tbody>\r\n              <tr>\r\n                <td><small>С условиями приема указанной в платежном документе суммы, в т.ч. с суммой взимаемой платы за услуги банка, ознакомлен и согласен.</small></td>\r\n              </tr>\r\n            </tbody>\r\n          </table>\r\n          <table style=\\\"width: 122mm; margin-top: 3pt;\\\" border=\\\"0\\\" cellpadding=\\\"0\\\" cellspacing=\\\"0\\\">\r\n            <tbody>\r\n              <tr>\r\n                <td align=\\\"right\\\"><b>Подпись плательщика _____________________</b></td>\r\n              </tr>\r\n            </tbody>\r\n          </table></td>\r\n      </tr>\r\n      <tr valign=\\\"top\\\">\r\n        <td style=\\\"border-style: solid none solid solid; border-color: rgb(0, 0, 0); -moz-use-text-color rgb(0, 0, 0) rgb(0, 0, 0); border-width: 1pt medium 1pt 1pt; width: 50mm; height: 70mm;\\\" align=\\\"center\\\"><font style=\\\"font-size: 50mm;\\\">&nbsp;<br />\r\n          </font> <b>Квитанция</b><br>\r\n          <font style=\\\"font-size: 8pt;\\\">&nbsp;<br>\r\n          </font> <b>Кассир</b> </td>\r\n        <td style=\\\"border: 1pt solid rgb(0, 0, 0);\\\" align=\\\"center\\\"><table style=\\\"width: 122mm; margin-top: 3pt;\\\" border=\\\"0\\\" cellpadding=\\\"0\\\" cellspacing=\\\"0\\\">\r\n            <tbody>\r\n              <tr>\r\n                <td align=\\\"right\\\"><small>&nbsp;</small></td>\r\n              </tr>\r\n              <tr>\r\n                <td style=\\\"border-bottom: 1pt solid rgb(0, 0, 0)\\\" align=\\\"center\\\"><strong><?php echo CONF_PHYS_COMPANYNAME ?></strong></td>\r\n              </tr>\r\n              <tr>\r\n                <td align=\\\"center\\\"><small>(наименование получателя платежа)</small></td>\r\n              </tr>\r\n            </tbody>\r\n          </table>\r\n          <table style=\\\"width: 122mm; margin-top: 3pt;\\\" border=\\\"0\\\" cellpadding=\\\"0\\\" cellspacing=\\\"0\\\">\r\n            <tbody>\r\n              <tr>\r\n                <td style=\\\"border-bottom: 1pt solid rgb(0, 0, 0); width: 37mm;\\\" align=\\\"center\\\"><strong>ИНН: <?php echo CONF_PHYS_INN ?></strong></td>\r\n                <td style=\\\"width: 9mm;\\\">&nbsp;</td>\r\n                <td style=\\\"border-bottom: 1pt solid rgb(0, 0, 0);\\\" align=\\\"center\\\"><strong>р/с <?php echo CONF_PHYS_BANK_ACCOUNT_NUMBER ?></strong></td>\r\n              </tr>\r\n              <tr>\r\n                <td align=\\\"center\\\"><small>(ИНН получателя платежа)</small></td>\r\n                <td><small>&nbsp;</small></td>\r\n                <td align=\\\"center\\\"><small>(номер счета получателя платежа)</small></td>\r\n              </tr>\r\n            </tbody>\r\n          </table>\r\n          <table style=\\\"width: 122mm; margin-top: 3pt;\\\" border=\\\"0\\\" cellpadding=\\\"0\\\" cellspacing=\\\"0\\\">\r\n            <tbody>\r\n              <tr>\r\n                <td>в&nbsp;</td>\r\n                <td style=\\\"border-bottom: 1pt solid rgb(0, 0, 0); width: 73mm;\\\" align=\\\"center\\\"><strong><?php echo CONF_PHYS_BANKNAME ?></strong></td>\r\n                <td align=\\\"right\\\">БИК&nbsp;&nbsp;</td>\r\n                <td style=\\\"border-bottom: 1pt solid rgb(0, 0, 0); width: 33mm;\\\"><strong><?php echo CONF_PHYS_BIK ?></strong></td>\r\n              </tr>\r\n              <tr>\r\n                <td></td>\r\n                <td align=\\\"center\\\"><small>(наименование банка получателя платежа)</small></td>\r\n                <td></td>\r\n                <td></td>\r\n              </tr>\r\n            </t\\\" border=\\\"0\\\" cellpadding=\\\"0\\\" cellspacing=\\\"0\\\">\r\n            <tbody>\r\n              <tr>\r\n                <td nowrap=\\\"nowrap\\\" width=\\\"1%\\\">Номер кор./сч. банка получателя платежа&nbsp;&nbsp;</td>\r\n                <td style=\\\"border-bottom: 1pt solid rgb(0, 0, 0);\\\" width=\\\"100%\\\"><strong><?php echo CONF_PHYS_BANK_KOR_NUMBER ?></strong></td>\r\n              </tr>\r\n            </tbody>\r\n          </table>\r\n          <table style=\\\"width: 122mm; margin-top: 3pt;\\\" border=\\\"0\\\" cellpadding=\\\"0\\\" cellspacing=\\\"0\\\">\r\n            <tbody>\r\n              <tr>\r\n                <td style=\\\"border-bottom: 1pt solid rgb(0, 0, 0); width: 60mm;\\\" align=\\\"center\\\"><STRONG> Платеж № <?php printf(\\\"%08d\\\", $db->f(\\\"order_id\\\"))?></STRONG></td>\r\n                <td style=\\\"width: 2mm;\\\">&nbsp;</td>\r\n                <td style=\\\"border-bottom: 1pt solid rgb(0, 0, 0);\\\">&nbsp;</td>\r\n              </tr>\r\n              <tr>\r\n                <td align=\\\"center\\\"><small>(наименование платежа)</small></td>\r\n                <td><small>&nbsp;</small></td>\r\n                <td align=\\\"center\\\"><small>(номер лицевого счета (код) плательщика)</small></td>\r\n              </tr>\r\n            </tbody>\r\n          </table>\r\n          <table style=\\\"width: 122mm; margin-top: 3pt;\\\" border=\\\"0\\\" cellpadding=\\\"0\\\" cellspacing=\\\"0\\\">\r\n            <tbody>\r\n              <tr>\r\n                <td nowrap=\\\"nowrap\\\" width=\\\"1%\\\">Ф.И.О. плательщика&nbsp;&nbsp;</td>\r\n                <td style=\\\"border-bottom: 1pt solid rgb(0, 0, 0);\\\" width=\\\"100%\\\">&nbsp;\r\n                  <!--Ф.И.О. плательщика--></td>\r\n              </tr>\r\n            </tbody>\r\n          </table>\r\n          <table style=\\\"width: 122mm; margin-top: 3pt;\\\" border=\\\"0\\\" cellpadding=\\\"0\\\" cellspacing=\\\"0\\\">\r\n            <tbody>\r\n              <tr>\r\n                <td nowrap=\\\"nowrap\\\" width=\\\"1%\\\">Адрес плательщика&nbsp;&nbsp;</td>\r\n                <td style=\\\"border-bottom: 1pt solid rgb(0, 0, 0);\\\" width=\\\"100%\\\">&nbsp;\r\n                  <!--Адрес плательщика--></td>\r\n              </tr>\r\n            </tbody>\r\n          </table>\r\n          <table style=\\\"width: 122mm; margin-top: 3pt;\\\" border=\\\"0\\\" cellpadding=\\\"0\\\" cellspacing=\\\"0\\\">\r\n            <tbody>\r\n              <tr>\r\n                <td>Сумма платежа&nbsp;<STRONG><?php printf(\\\"%.2f\\\", $db->f(\\\"order_total\\\"))?></STRONG> руб.</td>\r\n                <td align=\\\"right\\\">&nbsp;&nbsp;Сумма платы за услуги&nbsp;&nbsp;_____&nbsp;руб.&nbsp;____&nbsp;коп.</td>\r\n              </tr>\r\n            </tbody>\r\n          </table>\r\n          <table style=\\\"width: 122mm; margin-top: 3pt;\\\" border=\\\"0\\\" cellpadding=\\\"0\\\" cellspacing=\\\"0\\\">\r\n            <tbody>\r\n              <tr>\r\n                <td>Итого&nbsp;&nbsp;_______&nbsp;руб.&nbsp;____&nbsp;коп.</td>\r\n                <td align=\\\"right\\\"><STRONG><?php echo (strftime (_DATE_FORMAT_LC)); ?> г.</STRONG></td>\r\n              </tr>\r\n            </tbody>\r\n          </table>\r\n          <table style=\\\"width: 122mm; margin-top: 3pt;\\\" border=\\\"0\\\" cellpadding=\\\"0\\\" cellspacing=\\\"0\\\">\r\n            <tbody>\r\n              <tr>\r\n                <td><small>С условиями приема указанной в платежном документе суммы, в т.ч. с суммой взимаемой платы за услуги банка, ознакомлен и согласен.</small></td>\r\n              </tr>\r\n            </tbody>\r\n          </table>\r\n          <table style=\\\"width: 122mm; margin-top: 3pt;\\\" border=\\\"0\\\" cellpadding=\\\"0\\\" cellspacing=\\\"0\\\">\r\n            <tbody>\r\n              <tr>\r\n                <td align=\\\"right\\\"><b>Подпись плательщика _____________________</b></td>\r\n              </tr>\r\n            </tbody>\r\n          </table></td>\r\n      </tr>\r\n    </tbody>\r\n  </table>\r\n<!-- Шаблон квитанции - конец -->\r\n</div>\r\n<BLOCKQUOTE>\r\n<P>Примечания:\r\n  Это стандартная форма для платежа через банк (Сбербанк). Иногда на квитанции требуется написать фамилию, адрес плательщика, другую дополнительную информацию. Всё это можно сделать непосредственно в банке при оплате. </P>\r\n</BLOCKQUOTE>','');
/*!40000 ALTER TABLE `jos_vm_payment_method` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_product`
--

DROP TABLE IF EXISTS `jos_vm_product`;
CREATE TABLE `jos_vm_product` (
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
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=cp1251 COMMENT='Все товары хранятся здесь';

--
-- Dumping data for table `jos_vm_product`
--

LOCK TABLES `jos_vm_product` WRITE;
/*!40000 ALTER TABLE `jos_vm_product` DISABLE KEYS */;
INSERT INTO `jos_vm_product` VALUES (18,1,0,'112','Характеристики: Горные лыжи Atomic Bluemoon\r\nгеометрия (мм/см)	115 х 72 х 100 / 169\r\nрадиус (м/см)	16,5 / 169\r\nростовки	148 / 155 / 162 / 169 / 176 \r\n','<p class=\\\"item_description\\\">\r\n<li>технология: Beta TFC </li> \r\n<li>шасси: 4Tix Trackplate </li> \r\n<li>материал профиля: фибергласс </li>\r\n<li>поверхность: Glossy </li>\r\n<li>база: UHMW Electra Graphite</li> \r\n</p>   ','7bdfd0b4ab6cf84ccca8c9d554c5cbf2.jpg','6d90eba6d448bd275da5740cec9db39d.jpg','Y','0.0000','кг','0.0000','0.0000','0.0000','см','',0,1196024400,'','N',0,NULL,1196081119,1198059731,'Atomic Bluemoon',1000,'','',2,'шт',0);
INSERT INTO `jos_vm_product` VALUES (19,1,0,'113','Характеристики: Горные лыжи Rossignol Bandit B104\r\nгеометрия (мм/см)	130-104-117\r\nрадиус (м/см)	36,9м (194)\r\nростовки	189, 194\r\n','<p class=\\\"item_description\\\">\r\n<li> комплектация: крепления AXIAL2 200</li>\r\n<li> конструкция: TRIPLE HYBRID CORE </li>\r\n<li>сердечник: древесина тополя </li>\r\n<li>поглощение вибраций </li>\r\n<li> вставки из эластомера</li>\r\n</p>','4d2227f8ddbfb4c0d33ae33e3b0fe9ff.jpg','4c38ed10c639b042ee65b32f358b17f3.jpg','Y','0.0000','кг','0.0000','0.0000','0.0000','см','',0,1196024400,'','N',0,NULL,1196081942,1198059246,'Rossignol Bandit B104',0,'','',2,'шт',0);
INSERT INTO `jos_vm_product` VALUES (17,1,0,'111','Характеристики: Горные лыжи Atomic Crimson \r\nсерия	Nomad\r\nгеометрия (мм/см)	128 х 86 х 114 / 176\r\nрадиус (м/см)	18 / 176\r\nростовки	155 / 162 / 169 / 176 / 183','<p class=\\\"item_description\\\">\r\n<li>технология: Beta TFC</li> \r\n<li>комплектация: крепления Neox 412 </li>\r\n<li>материал профиля: TFC Sector </li> \r\n<li>поверхность: Glossy </li> \r\n<li>база: UHMW Electra Graphite </li>\r\n</p>','e7dc1d521af65934fde592d8c65d21c0.jpg','b821eb9ed17c3476334ad906d2f3696b.jpg','Y','0.0000','кг','0.0000','0.0000','0.0000','см','',0,1196024400,'','N',0,NULL,1196080663,1198059702,'Atomic Crimson',0,'','',2,'шт',0);
INSERT INTO `jos_vm_product` VALUES (20,1,0,'124','Характеристики: Горные лыжи Rossignol Scratch Steeze\r\nгеометрия (мм/см)	140-110-133\r\nрадиус (м/см)	21 м (186)\r\nростовки	174, 186\r\n\r\n','<p class=\\\"item_description\\\">\r\n<li> новая топ-модель в семействе FS/BC </li>\r\n<li> второе поколение комбинированных сердечников в лыжах SCRATCH</li>\r\n<li> технология распределения стекловолокна</li>\r\n<li> скошенные несущие боковые стенки</li>\r\n</p>','b331ff64167600a16915ea51511bd751.jpg','4a0af8a69d16571f92cc64b05fb8f360.jpg','Y','0.0000','кг','0.0000','0.0000','0.0000','см','',0,1196024400,'','N',0,NULL,1196082148,1198059214,'Rossignol Scratch Steeze',0,'','',2,'шт',0);
INSERT INTO `jos_vm_product` VALUES (21,1,0,'221','Рама: 4” TRAVEL TRAIL DUAL SUSPENSION\r\nВилка: RST 191-T7, 80MM TRAVEL\r\nРулевая колонка: THREADLESS STEEL\r\nПередний тормоз: TEKTRO ALLOY LINEAR PULL\r\nЗадний тормоз: TEKTRO ALLOY LINEAR PULL\r\n','<p class=\\\"item_description\\\">\r\n<li>Рама: 4” TRAVEL TRAIL DUAL SUSPENSION </li>\r\n<li>Вилка: RST 191-T7, 80MM TRAVEL</li>\r\n<li>Рулевая колонка: THREADLESS STEEL</li>\r\n<li>Передний тормоз: TEKTRO ALLOY LINEAR PULL</li>\r\n<li>Задний тормоз: TEKTRO ALLOY LINEAR PULL</li>\r\n<li>Тормозные ручки: SHIMANO EF-50</li>\r\n<li>Цепь: KMC Z-72</li>\r\n<li>Шатуны: SUNTOUR XCC T102 42/34/24T</li>\r\n<li>Каретка: SEALED CARTRIDGE</li>\r\n<li>Обода: ALLOY, 26” 36H</li>\r\n<li>Передняя втулка: ALLOY, 32H</li>\r\n<li>Задняя втулка: ALLOY, 32H</li>\r\n<li>Передняя покрышка: Kenda Kinetic 26 x 2.1”</li>\r\n<li>Задняя покрышка: Kenda Kinetic 26 x 2.1”</li>\r\n<li>Седло: IRON HORSE W/ MEMORY FOAM PADDING</li>\r\n<li>Подседельный штырь:  ALLOY MICRO ADJUST 27.2MM</li>\r\n<li>Кассета: SHIMANO TZ-07, 14/28T, 7 SPEED FREEWHEEL</li>\r\n<li>Передний переключатель: SHIMANO TZ-31</li>\r\n<li>Задний переключатель: SHIMANO TX30</li>\r\n<li>Задний амортизатор: Fusion KS-200</li>\r\nvМанетки: SHIMANO EF-50</li>\r\n</p>','b80442555b4cb78ff5e9a1624da69c53.gif','2795a2a44247938cc34f7788cbb7ee16.gif','Y','0.0000','кг','0.0000','0.0000','0.0000','см','',0,1196024400,'','N',0,NULL,1196085173,1198059591,'Ignition 3.3',0,'','',2,'шт',0);
INSERT INTO `jos_vm_product` VALUES (22,1,0,'222','Рама Prophet 120 mm\r\nамортизатор Fox Float RP3 Air\r\nвилка Fox 32 Float RLC 120 mm\r\nвтулки Mavic CrossMax ST\r\nвынос FSA OS-150 XTC 31.8 mm\r\nзадний перекл. SRAM X-0','<p class=\\\"item_description\\\">\r\n<li>рама Prophet 120 mm </li>\r\n<li>амортизатор Fox Float RP3 Air </li>\r\n<li>вилка Fox 32 Float RLC 120 mm</li>\r\n<li>втулки Mavic CrossMax ST</li>\r\n<li>вынос FSA OS-150 XTC 31.8 mm</li>\r\n<li>задний перекл. SRAM X-0</li>\r\n<li>каретка FSA MegaExo</li>\r\n<li>кассета SRAM PG-990, 11-32</li>\r\n<li>манетки SRAM X-9 Trigger</li>\r\n<li>обода Mavic CrossMax ST UST</li>\r\n<li>передний перекл. Shimano XT</li>\r\n<li>подсидельный штырь FSA SL-K Carbon, 27.2 x 350 mm</li>\r\n<li>покрышки Maxxis CrossMark UST, 26 x 2.1”</li>\r\n<li>рулевая колонка: FSA Orbit Xtreme Pro 1.5”</li>\r\n<li>руль FSA K-Force Carbon, 25 mm rise</li>\r\n<li>седло Fizik Gobi w/Ti rails</li>\r\n<li>система FSA K-Force MegaExo Carbon, 22/32/44</li>\r\n<li>спицы Mavic CrossMax ST</li>\r\n<li>тормоза Avid Juicy Carbon w/185/160 mm rotors</li>\r\n<li>тормозные ручки Avid Juicy Carbon</li>\r\n<li>цепь SRAM 991</li>\r\n</p>','2c9e6d65c61438eb90d47ff7d4592720.gif','0ea5beaefbd9b99f6ca7d690a4b10406.gif','Y','0.0000','кг','0.0000','0.0000','0.0000','см','',0,1196024400,'','N',0,NULL,1196085365,1198059552,'Prophet 1 SL',0,'','',2,'шт',0);
INSERT INTO `jos_vm_product` VALUES (23,1,0,'223','Рама Prophet 120 mm\r\nамортизатор Fox Float RP3 Air\r\nвилка RockShox Revelation 426 DualAir 120 mm\r\nвтулки DT Swiss XC\r\nвынос FSA OS-150 XTC 31.8 mm\r\nзадний перекл. SRAM X-9\r\nкаретка FSA MegaExo\r\n\r\n','<p class=\\\"item_description\\\">\r\n<li>рама Prophet 120 mm </li>\r\n<li>амортизатор Fox Float RP3 Air </li>\r\n<li>вилка RockShox Revelation 426 DualAir 120 mm</li>\r\n<li>втулки DT Swiss XC</li>\r\n<li>вынос FSA OS-150 XTC 31.8 mm</li>\r\n<li>задний перекл. SRAM X-9</li>\r\n<li>каретка FSA MegaExo</li>\r\n<li>кассета SRAM PG-970, 11-34</li>\r\n<li>манетки SRAM X-7 Trigger</li>\r\n<li>обода Mavic XM317 Disc, 32 hole</li>\r\n<li>педали CrankBrothers Candy C</li>\r\n<li>передний перекл. Shimano LX</li>\r\n<li>подсидельный штырь Cannondale C3, 27.2 x 350 mm</li>\r\n<li>рулевая колонка FSA Orbit DL 1-1/8”</li>\r\n<li>руль FSA XC-282-AOS, 25 mm rise</li>\r\n<li>седло Cannondale 71 All Mountain w/ Ti rails</li>\r\n<li>система FSA Afterburner MegaExo,22/32/44</li>\r\n<li>спицы DT Swiss Competition</li>\r\n<li>тормоза Avid Juicy 7w/185/160 mm rotors</li>\r\n<li>тормозные ручки Avid Juicy 7</li>\r\n<li>цепь SRAM 951</li>\r\n<li>покрышки Maxxis Ignitor, 26 x 2.1”</li>\r\n</p>\r\n','1cc7e6f17fb4619a191ac97a663e2e3b.gif','40ecc1905ce2f1878c238190070d90ea.gif','Y','0.0000','кг','0.0000','0.0000','0.0000','см','',0,1196024400,'','N',0,NULL,1196085764,1198059385,'Prophet 2 SL',0,'','',2,'шт',0);
INSERT INTO `jos_vm_product` VALUES (24,1,0,'224','Рама Hi-Ten Y-tandem susp. 48/48 см\r\nСкоростей 21. Вилка Suntour NCX-D Magnesium. Руль MFcity. Дополнительно стояночный свет.\r\n','<p class=\\\"item_description\\\">\r\n<li>Рама: Hi-Ten Y-tandem susp. 48/48 см </li>\r\n<li>Скоростей: 21</li>\r\n<li>Вилка: Suntour NCX-D Magnesium</li>\r\n<li>Переключатель: Deore/RS41</li>\r\n<li>Тормоз: Magura HS11</li>\r\n<li>Руль: MFcity</li>\r\n<li>Дополнительно: Стояночный свет</li>\r\n\r\n</p>','22cead84bc80b7bc9b4928cf04e555f7.gif','decc8656ccfe64f9433e36c950902aa8.gif','Y','0.0000','кг','0.0000','0.0000','0.0000','см','',0,1196024400,'','Y',0,NULL,1196085895,1198059670,'FACTOR 2',0,'','',2,'шт',0);
INSERT INTO `jos_vm_product` VALUES (25,1,0,'331','Роликовые коньки женские. \r\nКласс подшипников ABEC 5.\r\n','<p class=\\\"item_description\\\">\r\n<li>вентилируемый ботинок BIOMEX </li>\r\n<li>виброгасящая прослойка </li>\r\n<li>застежка: клипса + шнуровка </li>\r\n<li>поликарбонатная рама </li> \r\n<li>медные втулки</li>\r\n<p>','1d55100dde327bcd2fc5d31cc06f47d5.jpg','3f42830af5660ffd7b0b1727344f0044.jpg','Y','0.0000','кг','0.0000','0.0000','0.0000','см','',0,1196024400,'','N',0,NULL,1196087052,1198059273,'Rosec WN',0,'','',2,'шт',0);
INSERT INTO `jos_vm_product` VALUES (26,1,0,'332','Коньки роликовые мужские. Класс подшипников ABEC 5.','<p class=\\\"item_description\\\">\r\n<li>Конструкция Biomex </li>\r\n<li> нейлоновая рама </li> \r\n<li>клипсы с памятью </li> \r\n<li>виброгасящая вставка </li>\r\n<li> вентиляция внутреннего ботинка </li>\r\n<li>система быстрой шнуровки с фиксатором </li> \r\n<li>колеса - 84 мм/80А </li> \r\n</p>','ea2a0a2fd7fd14f67c958b70e11c6d4b.jpg','94394a8c62b980c642a18178946858d5.jpg','Y','0.0000','кг','0.0000','0.0000','0.0000','см','',0,1196024400,'','N',0,NULL,1196087204,1198059302,'Rosec MN',0,'','',2,'шт',0);
INSERT INTO `jos_vm_product` VALUES (27,1,0,'333','Детские раздвижные роликовые коньки с мягким ботинком, изготовленные по технологии Biomex.','<p class=\\\"item_description\\\">\r\n<li> мягкий ботинок</li>\r\n<li> микрорегулировка по размеру</li>\r\n<li> конструкция Biomex</li>\r\n<li> контроль движения</li>\r\n<li> прекрасная вентиляция</li>\r\n</p>','805e081e498686927239d5ca429a83a4.jpg','e07be15c2ac24fd4d2cf544a11507f67.jpg','Y','0.0000','кг','0.0000','0.0000','0.0000','см','',0,1196024400,'','N',0,NULL,1196087334,1198059330,'Rosec Chn',1,'','',2,'шт',0);
INSERT INTO `jos_vm_product` VALUES (28,1,0,'334','Базовая бюджетная фитнесс-модель по очень привлекательной цене.','<p class=\\\"item_description\\\">\r\n<li>колеса 80мм/82А </li>\r\n<li>подшипники ABEC5</li> \r\n<li>ботинок доработан с учетом анатомии</li>\r\n</p>','3c58f3b7236a6d24f29dd20ff932b2fd.jpg','eec9c661fa0d7f3cb46e22b8d1dbc30e.jpg','Y','0.0000','кг','0.0000','0.0000','0.0000','см','',0,1196024400,'','N',0,NULL,1196087486,1198059631,'Fila US',0,'','',2,'шт',0);
/*!40000 ALTER TABLE `jos_vm_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_product_attribute`
--

DROP TABLE IF EXISTS `jos_vm_product_attribute`;
CREATE TABLE `jos_vm_product_attribute` (
  `product_id` int(11) NOT NULL default '0',
  `attribute_name` char(255) NOT NULL default '',
  `attribute_value` char(255) NOT NULL default '',
  KEY `idx_product_attribute_product_id` (`product_id`),
  KEY `idx_product_attribute_name` (`attribute_name`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 COMMENT='Хранятся свойства  и их значения ';

--
-- Dumping data for table `jos_vm_product_attribute`
--

LOCK TABLES `jos_vm_product_attribute` WRITE;
/*!40000 ALTER TABLE `jos_vm_product_attribute` DISABLE KEYS */;
INSERT INTO `jos_vm_product_attribute` VALUES (16,'download','foto1.jpg');
/*!40000 ALTER TABLE `jos_vm_product_attribute` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_product_attribute_sku`
--

DROP TABLE IF EXISTS `jos_vm_product_attribute_sku`;
CREATE TABLE `jos_vm_product_attribute_sku` (
  `product_id` int(11) NOT NULL default '0',
  `attribute_name` char(255) NOT NULL default '',
  `attribute_list` int(11) NOT NULL default '0',
  KEY `idx_product_attribute_sku_product_id` (`product_id`),
  KEY `idx_product_attribute_sku_attribute_name` (`attribute_name`),
  KEY `idx_product_attribute_list` (`attribute_list`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 COMMENT='Атрибуты для родительских товар';

--
-- Dumping data for table `jos_vm_product_attribute_sku`
--

LOCK TABLES `jos_vm_product_attribute_sku` WRITE;
/*!40000 ALTER TABLE `jos_vm_product_attribute_sku` DISABLE KEYS */;
/*!40000 ALTER TABLE `jos_vm_product_attribute_sku` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_product_category_xref`
--

DROP TABLE IF EXISTS `jos_vm_product_category_xref`;
CREATE TABLE `jos_vm_product_category_xref` (
  `category_id` int(11) NOT NULL default '0',
  `product_id` int(11) NOT NULL default '0',
  `product_list` int(11) default NULL,
  KEY `idx_product_category_xref_category_id` (`category_id`),
  KEY `idx_product_category_xref_product_id` (`product_id`),
  KEY `idx_product_category_xref_product_list` (`product_list`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 COMMENT='Ссылки товары-категории';

--
-- Dumping data for table `jos_vm_product_category_xref`
--

LOCK TABLES `jos_vm_product_category_xref` WRITE;
/*!40000 ALTER TABLE `jos_vm_product_category_xref` DISABLE KEYS */;
INSERT INTO `jos_vm_product_category_xref` VALUES (13,27,NULL);
INSERT INTO `jos_vm_product_category_xref` VALUES (13,26,NULL);
INSERT INTO `jos_vm_product_category_xref` VALUES (14,24,NULL);
INSERT INTO `jos_vm_product_category_xref` VALUES (14,23,NULL);
INSERT INTO `jos_vm_product_category_xref` VALUES (14,22,NULL);
INSERT INTO `jos_vm_product_category_xref` VALUES (12,20,NULL);
INSERT INTO `jos_vm_product_category_xref` VALUES (14,21,NULL);
INSERT INTO `jos_vm_product_category_xref` VALUES (13,25,NULL);
INSERT INTO `jos_vm_product_category_xref` VALUES (13,28,NULL);
INSERT INTO `jos_vm_product_category_xref` VALUES (12,18,NULL);
INSERT INTO `jos_vm_product_category_xref` VALUES (12,19,NULL);
INSERT INTO `jos_vm_product_category_xref` VALUES (12,17,NULL);
/*!40000 ALTER TABLE `jos_vm_product_category_xref` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_product_discount`
--

DROP TABLE IF EXISTS `jos_vm_product_discount`;
CREATE TABLE `jos_vm_product_discount` (
  `discount_id` int(11) NOT NULL auto_increment,
  `amount` decimal(12,2) NOT NULL default '0.00',
  `is_percent` tinyint(1) NOT NULL default '0',
  `start_date` int(11) NOT NULL default '0',
  `end_date` int(11) NOT NULL default '0',
  PRIMARY KEY  (`discount_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=cp1251 COMMENT='Дисконтная скидка';

--
-- Dumping data for table `jos_vm_product_discount`
--

LOCK TABLES `jos_vm_product_discount` WRITE;
/*!40000 ALTER TABLE `jos_vm_product_discount` DISABLE KEYS */;
/*!40000 ALTER TABLE `jos_vm_product_discount` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_product_download`
--

DROP TABLE IF EXISTS `jos_vm_product_download`;
CREATE TABLE `jos_vm_product_download` (
  `product_id` int(11) NOT NULL default '0',
  `user_id` int(11) NOT NULL default '0',
  `order_id` int(11) NOT NULL default '0',
  `end_date` int(11) NOT NULL default '0',
  `download_max` int(11) NOT NULL default '0',
  `download_id` varchar(32) NOT NULL default '',
  `file_name` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`download_id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 COMMENT='Активные скачивания для скачива';

--
-- Dumping data for table `jos_vm_product_download`
--

LOCK TABLES `jos_vm_product_download` WRITE;
/*!40000 ALTER TABLE `jos_vm_product_download` DISABLE KEYS */;
INSERT INTO `jos_vm_product_download` VALUES (16,62,10,1196163571,98,'0ee09662cb682aca8bdd7d202d295d46','foto1.jpg');
/*!40000 ALTER TABLE `jos_vm_product_download` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_product_files`
--

DROP TABLE IF EXISTS `jos_vm_product_files`;
CREATE TABLE `jos_vm_product_files` (
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=cp1251 COMMENT='Дополнительные изображения и фа';

--
-- Dumping data for table `jos_vm_product_files`
--

LOCK TABLES `jos_vm_product_files` WRITE;
/*!40000 ALTER TABLE `jos_vm_product_files` DISABLE KEYS */;
/*!40000 ALTER TABLE `jos_vm_product_files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_product_mf_xref`
--

DROP TABLE IF EXISTS `jos_vm_product_mf_xref`;
CREATE TABLE `jos_vm_product_mf_xref` (
  `product_id` int(11) default NULL,
  `manufacturer_id` int(11) default NULL,
  KEY `idx_product_mf_xref_product_id` (`product_id`),
  KEY `idx_product_mf_xref_manufacturer_id` (`manufacturer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 COMMENT='Ссылки товар-производитель';

--
-- Dumping data for table `jos_vm_product_mf_xref`
--

LOCK TABLES `jos_vm_product_mf_xref` WRITE;
/*!40000 ALTER TABLE `jos_vm_product_mf_xref` DISABLE KEYS */;
INSERT INTO `jos_vm_product_mf_xref` VALUES (20,6);
INSERT INTO `jos_vm_product_mf_xref` VALUES (21,7);
INSERT INTO `jos_vm_product_mf_xref` VALUES (22,8);
INSERT INTO `jos_vm_product_mf_xref` VALUES (26,10);
INSERT INTO `jos_vm_product_mf_xref` VALUES (25,10);
INSERT INTO `jos_vm_product_mf_xref` VALUES (23,8);
INSERT INTO `jos_vm_product_mf_xref` VALUES (18,5);
INSERT INTO `jos_vm_product_mf_xref` VALUES (19,6);
INSERT INTO `jos_vm_product_mf_xref` VALUES (24,9);
INSERT INTO `jos_vm_product_mf_xref` VALUES (17,5);
INSERT INTO `jos_vm_product_mf_xref` VALUES (27,10);
INSERT INTO `jos_vm_product_mf_xref` VALUES (28,11);
/*!40000 ALTER TABLE `jos_vm_product_mf_xref` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_product_price`
--

DROP TABLE IF EXISTS `jos_vm_product_price`;
CREATE TABLE `jos_vm_product_price` (
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
) ENGINE=MyISAM AUTO_INCREMENT=290 DEFAULT CHARSET=cp1251 COMMENT='Цены на товар';

--
-- Dumping data for table `jos_vm_product_price`
--

LOCK TABLES `jos_vm_product_price` WRITE;
/*!40000 ALTER TABLE `jos_vm_product_price` DISABLE KEYS */;
INSERT INTO `jos_vm_product_price` VALUES (285,24,'34200.00000','RUB',0,0,1196085895,1198059670,5,0,0);
INSERT INTO `jos_vm_product_price` VALUES (284,23,'18352.00000','RUB',0,0,1196085764,1198059385,5,0,0);
INSERT INTO `jos_vm_product_price` VALUES (283,22,'15883.00000','RUB',0,0,1196085365,1198059552,5,0,0);
INSERT INTO `jos_vm_product_price` VALUES (281,20,'19483.00000','RUB',0,0,1196082148,1198059214,5,0,0);
INSERT INTO `jos_vm_product_price` VALUES (289,28,'3600.00000','RUB',0,0,1196087486,1198059631,5,0,0);
INSERT INTO `jos_vm_product_price` VALUES (287,26,'2800.00000','RUB',0,0,1196087204,1198059302,5,0,0);
INSERT INTO `jos_vm_product_price` VALUES (286,25,'2400.00000','RUB',0,0,1196087052,1198059273,5,0,0);
INSERT INTO `jos_vm_product_price` VALUES (282,21,'10369.00000','RUB',0,0,1196085173,1198059591,5,0,0);
INSERT INTO `jos_vm_product_price` VALUES (288,27,'1753.00000','RUB',0,0,1196087334,1198059330,5,0,0);
INSERT INTO `jos_vm_product_price` VALUES (279,18,'14900.00000','RUB',0,0,1196081119,1198059731,5,0,0);
INSERT INTO `jos_vm_product_price` VALUES (280,19,'15585.00000','RUB',0,0,1196081942,1198059246,5,0,0);
INSERT INTO `jos_vm_product_price` VALUES (278,17,'22500.00000','RUB',0,0,1196080663,1198059702,5,0,0);
/*!40000 ALTER TABLE `jos_vm_product_price` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_product_product_type_xref`
--

DROP TABLE IF EXISTS `jos_vm_product_product_type_xref`;
CREATE TABLE `jos_vm_product_product_type_xref` (
  `product_id` int(11) NOT NULL default '0',
  `product_type_id` int(11) NOT NULL default '0',
  KEY `idx_product_product_type_xref_product_id` (`product_id`),
  KEY `idx_product_product_type_xref_product_type_id` (`product_type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 COMMENT='Ссылка товар-тип товара';

--
-- Dumping data for table `jos_vm_product_product_type_xref`
--

LOCK TABLES `jos_vm_product_product_type_xref` WRITE;
/*!40000 ALTER TABLE `jos_vm_product_product_type_xref` DISABLE KEYS */;
/*!40000 ALTER TABLE `jos_vm_product_product_type_xref` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_product_relations`
--

DROP TABLE IF EXISTS `jos_vm_product_relations`;
CREATE TABLE `jos_vm_product_relations` (
  `product_id` int(11) NOT NULL default '0',
  `related_products` text,
  PRIMARY KEY  (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Dumping data for table `jos_vm_product_relations`
--

LOCK TABLES `jos_vm_product_relations` WRITE;
/*!40000 ALTER TABLE `jos_vm_product_relations` DISABLE KEYS */;
/*!40000 ALTER TABLE `jos_vm_product_relations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_product_reviews`
--

DROP TABLE IF EXISTS `jos_vm_product_reviews`;
CREATE TABLE `jos_vm_product_reviews` (
  `product_id` varchar(255) NOT NULL default '',
  `comment` text NOT NULL,
  `userid` int(11) NOT NULL default '0',
  `time` int(11) NOT NULL default '0',
  `user_rating` tinyint(1) NOT NULL default '0',
  `review_ok` int(11) NOT NULL default '0',
  `review_votes` int(11) NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Dumping data for table `jos_vm_product_reviews`
--

LOCK TABLES `jos_vm_product_reviews` WRITE;
/*!40000 ALTER TABLE `jos_vm_product_reviews` DISABLE KEYS */;
/*!40000 ALTER TABLE `jos_vm_product_reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_product_type`
--

DROP TABLE IF EXISTS `jos_vm_product_type`;
CREATE TABLE `jos_vm_product_type` (
  `product_type_id` int(11) NOT NULL auto_increment,
  `product_type_name` varchar(255) NOT NULL default '',
  `product_type_description` text,
  `product_type_publish` char(1) default NULL,
  `product_type_browsepage` varchar(255) default NULL,
  `product_type_flypage` varchar(255) default NULL,
  `product_type_list_order` int(11) default NULL,
  PRIMARY KEY  (`product_type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Dumping data for table `jos_vm_product_type`
--

LOCK TABLES `jos_vm_product_type` WRITE;
/*!40000 ALTER TABLE `jos_vm_product_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `jos_vm_product_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_product_type_parameter`
--

DROP TABLE IF EXISTS `jos_vm_product_type_parameter`;
CREATE TABLE `jos_vm_product_type_parameter` (
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
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 COMMENT='Параметры - часть типа товара';

--
-- Dumping data for table `jos_vm_product_type_parameter`
--

LOCK TABLES `jos_vm_product_type_parameter` WRITE;
/*!40000 ALTER TABLE `jos_vm_product_type_parameter` DISABLE KEYS */;
/*!40000 ALTER TABLE `jos_vm_product_type_parameter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_product_votes`
--

DROP TABLE IF EXISTS `jos_vm_product_votes`;
CREATE TABLE `jos_vm_product_votes` (
  `product_id` int(255) NOT NULL default '0',
  `votes` text NOT NULL,
  `allvotes` int(11) NOT NULL default '0',
  `rating` tinyint(1) NOT NULL default '0',
  `lastip` varchar(50) NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 COMMENT='Все голоса для товара';

--
-- Dumping data for table `jos_vm_product_votes`
--

LOCK TABLES `jos_vm_product_votes` WRITE;
/*!40000 ALTER TABLE `jos_vm_product_votes` DISABLE KEYS */;
/*!40000 ALTER TABLE `jos_vm_product_votes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_rp_assign_zone`
--

DROP TABLE IF EXISTS `jos_vm_rp_assign_zone`;
CREATE TABLE `jos_vm_rp_assign_zone` (
  `vendor_state_code` char(2) NOT NULL default '0',
  `shopper_state_code` char(2) NOT NULL default '0',
  `zone_rate` int(11) NOT NULL default '0',
  UNIQUE KEY `state of zone` (`vendor_state_code`,`shopper_state_code`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 COMMENT='States that are assigned to a country';

--
-- Dumping data for table `jos_vm_rp_assign_zone`
--

LOCK TABLES `jos_vm_rp_assign_zone` WRITE;
/*!40000 ALTER TABLE `jos_vm_rp_assign_zone` DISABLE KEYS */;
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','01',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','02',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','03',4);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','04',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','05',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','06',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','07',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','08',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','09',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','10',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','11',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','12',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','13',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','14',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','15',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','16',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','17',4);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','18',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','19',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','20',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','21',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','22',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','23',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','24',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','25',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','26',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','27',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','28',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','29',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','30',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','31',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','32',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','33',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','34',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','35',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','36',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','37',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','38',4);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','39',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','40',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','41',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','42',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','43',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','44',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','45',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','46',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','47',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','48',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','49',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','50',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','51',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','52',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','53',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','54',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','55',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','56',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','57',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','58',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','59',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','60',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','61',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','62',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','63',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','64',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','65',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','66',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','67',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','68',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','69',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','70',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','71',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','72',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','73',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','74',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','75',4);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','76',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','77',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','78',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','79',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','87',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('23','90',0);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','01',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','02',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','03',4);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','04',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','05',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','06',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','07',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','08',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','09',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','10',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','11',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','12',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','13',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','14',4);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','15',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','16',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','17',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','18',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','19',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','20',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','21',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','22',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','23',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','24',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','25',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','26',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','27',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','28',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','29',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','30',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','31',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','32',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','33',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','34',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','35',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','36',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','37',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','38',4);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','39',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','40',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','41',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','42',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','43',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','44',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','45',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','46',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','47',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','48',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','49',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','50',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','51',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','52',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','53',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','54',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','55',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','56',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','57',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','58',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','59',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','60',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','61',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','62',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','63',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','64',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','65',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','66',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','67',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','68',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','69',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','70',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','71',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','72',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','73',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','74',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','75',4);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','76',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','77',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','78',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','79',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','87',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('30','90',0);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','01',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','02',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','03',4);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','04',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','05',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','06',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','07',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','08',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','09',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','10',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','11',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','12',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','13',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','14',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','15',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','16',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','17',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','18',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','19',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','20',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','21',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','22',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','23',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','24',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','25',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','26',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','27',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','28',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','29',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','30',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','31',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','32',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','33',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','34',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','35',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','36',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','37',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','38',4);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','39',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','40',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','41',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','42',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','43',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','44',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','45',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','46',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','47',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','48',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','49',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','50',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','51',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','52',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','53',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','54',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','55',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','56',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','57',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','58',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','59',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','60',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','61',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','62',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','63',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','64',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','65',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','66',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','67',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','68',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','69',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','70',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','71',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','72',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','73',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','74',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','75',4);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','76',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','77',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','78',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','79',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('47','87',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','01',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','02',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','03',4);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','04',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','05',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','06',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','07',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','08',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','09',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','10',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','11',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','12',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','13',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','14',4);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','15',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','16',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','17',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','18',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','19',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','20',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','21',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','22',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','23',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','24',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','25',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','26',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','27',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','28',4);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','29',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','30',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','31',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','32',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','33',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','34',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','35',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','36',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','37',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','38',4);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','39',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','40',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','41',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','42',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','43',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','44',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','45',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','46',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','47',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','48',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','49',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','50',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','51',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','52',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','53',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','54',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','55',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','56',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','57',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','58',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','59',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','60',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','61',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','62',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','63',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','64',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','65',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','66',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','67',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','68',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','69',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','70',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','71',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','72',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','73',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','74',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','75',4);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','76',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','77',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','78',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','79',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','81',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','82',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','83',4);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','84',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','85',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','86',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','87',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','88',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','89',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('50','90',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','01',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','02',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','03',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','04',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','05',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','06',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','07',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','08',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','09',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','10',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','11',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','12',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','13',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','14',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','15',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','16',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','17',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','18',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','19',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','20',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','21',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','22',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','23',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','24',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','25',4);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','26',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','27',4);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','28',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','29',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','30',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','31',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','32',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','33',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','34',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','35',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','36',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','37',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','38',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','39',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','40',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','41',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','42',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','43',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','44',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','45',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','46',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','47',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','48',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','49',0);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','50',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','51',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','52',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','53',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','54',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','55',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','56',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','57',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','58',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','59',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','60',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','61',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','62',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','63',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','64',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','65',4);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','66',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','67',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','68',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','69',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','70',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','71',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','72',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','73',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','74',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','75',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','76',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','77',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('54','78',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','01',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','02',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','03',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','04',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','05',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','06',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','07',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','08',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','09',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','10',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','11',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','12',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','13',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','14',4);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','15',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','16',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','17',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','18',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','19',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','20',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','21',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','22',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','23',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','24',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','25',4);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','26',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','27',4);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','28',4);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','29',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','30',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','31',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','32',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','33',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','34',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','35',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','36',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','37',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','38',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','39',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','40',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','41',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','42',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','43',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','44',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','45',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','46',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','47',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','48',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','49',0);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','50',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','51',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','52',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','53',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','54',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','55',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','56',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','57',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','58',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','59',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','60',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','61',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','62',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','63',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','64',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','65',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','66',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','67',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','68',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','69',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','70',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','71',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','72',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','73',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','74',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','75',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','76',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','77',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('59','78',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','01',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','02',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','03',4);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','04',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','05',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','06',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','07',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','08',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','09',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','10',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','11',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','12',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','13',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','14',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','15',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','16',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','17',4);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','18',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','19',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','20',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','21',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','22',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','23',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','24',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','25',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','26',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','27',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','28',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','29',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','30',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','31',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','32',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','33',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','34',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','35',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','36',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','37',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','38',4);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','39',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','40',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','41',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','42',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','43',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','44',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','45',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','46',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','47',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','48',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','49',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','50',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','51',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','52',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','53',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','54',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','55',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','56',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','57',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','58',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','59',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','60',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','61',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','62',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','63',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','64',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','65',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','66',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','67',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','68',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','69',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','70',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','71',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','72',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','73',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','74',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','75',4);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','76',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','77',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','78',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','79',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','80',0);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','81',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','82',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','83',4);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','84',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','85',0);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','87',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','88',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','89',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('61','90',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','01',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','02',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','03',4);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','04',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','05',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','06',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','07',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','08',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','09',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','10',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','11',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','12',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','13',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','14',4);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','15',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','16',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','17',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','18',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','19',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','20',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','21',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','22',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','23',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','24',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','25',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','26',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','27',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','28',4);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','29',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','30',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','31',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','32',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','33',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','34',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','35',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','36',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','37',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','38',4);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','39',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','40',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','41',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','42',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','43',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','44',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','45',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','46',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','47',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','48',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','49',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','50',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','51',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','52',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','53',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','54',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','55',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','56',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','57',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','58',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','59',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','60',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','61',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','62',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','63',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','64',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','65',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','66',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','67',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','68',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','69',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','70',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','71',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','72',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','73',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','74',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','75',4);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','76',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','77',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','78',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','79',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','81',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','82',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','83',4);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','84',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','85',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','86',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','87',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','88',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','89',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('77','90',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','01',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','02',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','03',4);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','04',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','05',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','06',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','07',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','08',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','09',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','10',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','11',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','12',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','13',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','14',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','15',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','16',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','17',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','18',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','19',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','20',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','21',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','22',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','23',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','24',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','25',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','26',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','27',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','28',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','29',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','30',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','31',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','32',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','33',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','34',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','35',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','36',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','37',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','38',4);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','39',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','40',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','41',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','42',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','43',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','44',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','45',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','46',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','47',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','48',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','49',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','50',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','51',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','52',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','53',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','54',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','55',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','56',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','57',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','58',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','59',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','60',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','61',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','62',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','63',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','64',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','65',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','66',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','67',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','68',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','69',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','70',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','71',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','72',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','73',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','74',3);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','75',4);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','76',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','77',2);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','78',1);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','79',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','87',5);
INSERT INTO `jos_vm_rp_assign_zone` VALUES ('78','90',0);
/*!40000 ALTER TABLE `jos_vm_rp_assign_zone` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_rp_state`
--

DROP TABLE IF EXISTS `jos_vm_rp_state`;
CREATE TABLE `jos_vm_rp_state` (
  `state_id` int(11) NOT NULL auto_increment,
  `group_id` int(11) NOT NULL default '0',
  `state_name` varchar(64) default NULL,
  `state_code` char(2) default NULL,
  `delivery_id` smallint(1) NOT NULL default '1',
  PRIMARY KEY  (`state_id`),
  KEY `idx_country_id` (`group_id`)
) ENGINE=MyISAM AUTO_INCREMENT=276 DEFAULT CHARSET=cp1251 COMMENT='States that are assigned to a rate group';

--
-- Dumping data for table `jos_vm_rp_state`
--

LOCK TABLES `jos_vm_rp_state` WRITE;
/*!40000 ALTER TABLE `jos_vm_rp_state` DISABLE KEYS */;
INSERT INTO `jos_vm_rp_state` VALUES (254,0,'Агинский Бурятский автономный округ','80',0);
INSERT INTO `jos_vm_rp_state` VALUES (166,1,'Адыгея Республика','01',1);
INSERT INTO `jos_vm_rp_state` VALUES (167,3,'Алтай Республика','04',1);
INSERT INTO `jos_vm_rp_state` VALUES (168,2,'Алтайский край','22',1);
INSERT INTO `jos_vm_rp_state` VALUES (169,3,'Амурская область','28',1);
INSERT INTO `jos_vm_rp_state` VALUES (170,2,'Архангельская область','29',1);
INSERT INTO `jos_vm_rp_state` VALUES (171,1,'Астраханская область','30',1);
INSERT INTO `jos_vm_rp_state` VALUES (255,0,'Байконур','90',1);
INSERT INTO `jos_vm_rp_state` VALUES (172,2,'Башкортостан Республика','02',1);
INSERT INTO `jos_vm_rp_state` VALUES (173,1,'Белгородская область','31',1);
INSERT INTO `jos_vm_rp_state` VALUES (174,1,'Брянская область','32',1);
INSERT INTO `jos_vm_rp_state` VALUES (175,2,'Бурятия Республика','03',1);
INSERT INTO `jos_vm_rp_state` VALUES (176,1,'Владимирская область','33',1);
INSERT INTO `jos_vm_rp_state` VALUES (177,1,'Волгоградская область','34',1);
INSERT INTO `jos_vm_rp_state` VALUES (178,2,'Вологодская область','35',1);
INSERT INTO `jos_vm_rp_state` VALUES (179,1,'Воронежская область','36',1);
INSERT INTO `jos_vm_rp_state` VALUES (180,1,'Дагестан Республика','05',1);
INSERT INTO `jos_vm_rp_state` VALUES (181,3,'Еврейская автономная область','79',1);
INSERT INTO `jos_vm_rp_state` VALUES (182,1,'Ивановская область','37',1);
INSERT INTO `jos_vm_rp_state` VALUES (183,1,'Ингушетия Республика','06',1);
INSERT INTO `jos_vm_rp_state` VALUES (184,2,'Иркутская область','38',1);
INSERT INTO `jos_vm_rp_state` VALUES (185,1,'Кабардино-Балкарская Республика','07',1);
INSERT INTO `jos_vm_rp_state` VALUES (186,1,'Калининградская область','39',1);
INSERT INTO `jos_vm_rp_state` VALUES (187,2,'Калмыкия Республика','08',1);
INSERT INTO `jos_vm_rp_state` VALUES (188,1,'Калужская область','40',1);
INSERT INTO `jos_vm_rp_state` VALUES (189,4,'Камчатский край','41',1);
INSERT INTO `jos_vm_rp_state` VALUES (190,1,'Карачаево-Черкесская Республика','09',1);
INSERT INTO `jos_vm_rp_state` VALUES (191,2,'Карелия Республика','10',1);
INSERT INTO `jos_vm_rp_state` VALUES (192,3,'Кемеровская область','42',1);
INSERT INTO `jos_vm_rp_state` VALUES (193,2,'Кировская область','43',1);
INSERT INTO `jos_vm_rp_state` VALUES (194,2,'Коми Республика','11',1);
INSERT INTO `jos_vm_rp_state` VALUES (195,0,'Коми-Пермяцкий автономный округ','81',0);
INSERT INTO `jos_vm_rp_state` VALUES (197,1,'Костромская область','44',1);
INSERT INTO `jos_vm_rp_state` VALUES (198,1,'Краснодарский край','23',1);
INSERT INTO `jos_vm_rp_state` VALUES (199,2,'Красноярский край','24',1);
INSERT INTO `jos_vm_rp_state` VALUES (200,2,'Курганская область','45',1);
INSERT INTO `jos_vm_rp_state` VALUES (201,1,'Курская область','46',1);
INSERT INTO `jos_vm_rp_state` VALUES (202,1,'Ленинградская область','47',1);
INSERT INTO `jos_vm_rp_state` VALUES (203,1,'Липецкая область','48',1);
INSERT INTO `jos_vm_rp_state` VALUES (204,4,'Магаданская область','49',2);
INSERT INTO `jos_vm_rp_state` VALUES (205,1,'Марий-Эл Республика','12',1);
INSERT INTO `jos_vm_rp_state` VALUES (206,1,'Мордовия Республика','13',1);
INSERT INTO `jos_vm_rp_state` VALUES (207,1,'МОСКВА','77',1);
INSERT INTO `jos_vm_rp_state` VALUES (208,1,'Московская область','50',1);
INSERT INTO `jos_vm_rp_state` VALUES (209,3,'Мурманская область','51',1);
INSERT INTO `jos_vm_rp_state` VALUES (210,4,'Ненецкий автономный округ','83',0);
INSERT INTO `jos_vm_rp_state` VALUES (211,1,'Нижегородская область','52',1);
INSERT INTO `jos_vm_rp_state` VALUES (212,1,'Новгородская область','53',1);
INSERT INTO `jos_vm_rp_state` VALUES (213,2,'Новосибирская область','54',1);
INSERT INTO `jos_vm_rp_state` VALUES (214,2,'Омская область','55',1);
INSERT INTO `jos_vm_rp_state` VALUES (215,2,'Оренбургская область','56',1);
INSERT INTO `jos_vm_rp_state` VALUES (216,1,'Орловская область','57',1);
INSERT INTO `jos_vm_rp_state` VALUES (217,1,'Пензенская область','58',1);
INSERT INTO `jos_vm_rp_state` VALUES (218,2,'Пермский край','59',1);
INSERT INTO `jos_vm_rp_state` VALUES (219,3,'Приморский край','25',1);
INSERT INTO `jos_vm_rp_state` VALUES (220,1,'Псковская область','60',1);
INSERT INTO `jos_vm_rp_state` VALUES (221,1,'Ростовская область','61',1);
INSERT INTO `jos_vm_rp_state` VALUES (222,1,'Рязанская область','62',1);
INSERT INTO `jos_vm_rp_state` VALUES (223,1,'Самарская область','63',1);
INSERT INTO `jos_vm_rp_state` VALUES (224,1,'САНКТ-ПЕТЕРБУРГ','78',1);
INSERT INTO `jos_vm_rp_state` VALUES (225,1,'Саратовская область','64',1);
INSERT INTO `jos_vm_rp_state` VALUES (226,4,'Саха (Якутия) Республика','14',1);
INSERT INTO `jos_vm_rp_state` VALUES (227,4,'Сахалинская область','65',1);
INSERT INTO `jos_vm_rp_state` VALUES (228,2,'Свердловская область','66',1);
INSERT INTO `jos_vm_rp_state` VALUES (229,1,'Северная Осетия-Алания','15',1);
INSERT INTO `jos_vm_rp_state` VALUES (230,1,'Смоленская область','67',1);
INSERT INTO `jos_vm_rp_state` VALUES (231,1,'Ставропольский край','26',1);
INSERT INTO `jos_vm_rp_state` VALUES (232,0,'Таймырский автономный округ','84',0);
INSERT INTO `jos_vm_rp_state` VALUES (233,1,'Тамбовская область','68',1);
INSERT INTO `jos_vm_rp_state` VALUES (234,1,'Татарстан','16',1);
INSERT INTO `jos_vm_rp_state` VALUES (235,1,'Тверская область','69',1);
INSERT INTO `jos_vm_rp_state` VALUES (236,3,'Томская область','70',1);
INSERT INTO `jos_vm_rp_state` VALUES (237,1,'Тульская область','71',1);
INSERT INTO `jos_vm_rp_state` VALUES (238,2,'Тыва Республика','17',1);
INSERT INTO `jos_vm_rp_state` VALUES (239,2,'Тюменская область','72',1);
INSERT INTO `jos_vm_rp_state` VALUES (240,2,'Удмуртская Республика','18',1);
INSERT INTO `jos_vm_rp_state` VALUES (241,1,'Ульяновская область','73',1);
INSERT INTO `jos_vm_rp_state` VALUES (242,0,'Усть-Ордынский Бурятский АО','85',0);
INSERT INTO `jos_vm_rp_state` VALUES (243,3,'Хабаровский край','27',1);
INSERT INTO `jos_vm_rp_state` VALUES (244,2,'Хакасия Республика','19',1);
INSERT INTO `jos_vm_rp_state` VALUES (245,3,'Ханты-Мансийский автономный округ','86',0);
INSERT INTO `jos_vm_rp_state` VALUES (246,2,'Челябинская область','74',1);
INSERT INTO `jos_vm_rp_state` VALUES (247,1,'Чеченская Республика','20',1);
INSERT INTO `jos_vm_rp_state` VALUES (248,3,'Читинская область','75',1);
INSERT INTO `jos_vm_rp_state` VALUES (249,1,'Чувашская Республика','21',1);
INSERT INTO `jos_vm_rp_state` VALUES (250,5,'Чукотский автономный округ','87',2);
INSERT INTO `jos_vm_rp_state` VALUES (251,0,'Эвенкийский автономный округ','88',0);
INSERT INTO `jos_vm_rp_state` VALUES (252,4,'Ямало-Ненецкий автономный округ','89',0);
INSERT INTO `jos_vm_rp_state` VALUES (253,1,'Ярославская область','76',1);
/*!40000 ALTER TABLE `jos_vm_rp_state` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_rp_zone_rate`
--

DROP TABLE IF EXISTS `jos_vm_rp_zone_rate`;
CREATE TABLE `jos_vm_rp_zone_rate` (
  `rate_id` smallint(2) NOT NULL auto_increment,
  `group_id` smallint(1) NOT NULL default '0',
  `zone_rate` int(11) NOT NULL default '0',
  `zone_desc` varchar(255) NOT NULL default '',
  `zone_cost` decimal(10,2) default NULL,
  `zone_cost_above` decimal(10,2) default NULL,
  `zone_tax_rate` int(11) NOT NULL default '0',
  PRIMARY KEY  (`rate_id`),
  KEY `zone_id` (`rate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=cp1251 COMMENT='The Zones managed by the Russian Post Shipping Module';

--
-- Dumping data for table `jos_vm_rp_zone_rate`
--

LOCK TABLES `jos_vm_rp_zone_rate` WRITE;
/*!40000 ALTER TABLE `jos_vm_rp_zone_rate` DISABLE KEYS */;
INSERT INTO `jos_vm_rp_zone_rate` VALUES (1,1,1,'до 600 км','61.50','5.50',0);
INSERT INTO `jos_vm_rp_zone_rate` VALUES (2,1,2,'601 - 2000 км','64.80','5.90',0);
INSERT INTO `jos_vm_rp_zone_rate` VALUES (3,1,3,'2001 - 5000 км','77.40','7.40',0);
INSERT INTO `jos_vm_rp_zone_rate` VALUES (4,1,4,'5001 - 8000 км','103.55','9.45',0);
INSERT INTO `jos_vm_rp_zone_rate` VALUES (5,1,5,'свыше 8000 км','116.65','10.40',0);
INSERT INTO `jos_vm_rp_zone_rate` VALUES (30,1,9,'Воздушным транспортом','102.30','30.70',0);
INSERT INTO `jos_vm_rp_zone_rate` VALUES (8,2,1,'до 600 км','68.45','6.10',0);
INSERT INTO `jos_vm_rp_zone_rate` VALUES (9,2,2,'601 - 2000 км','72.10','6.60',0);
INSERT INTO `jos_vm_rp_zone_rate` VALUES (10,2,3,'2001 - 5000 км','86.10','8.20',0);
INSERT INTO `jos_vm_rp_zone_rate` VALUES (11,2,4,'5001 - 8000 км','115.30','10.55',0);
INSERT INTO `jos_vm_rp_zone_rate` VALUES (12,2,5,'свыше 8000 км','130.00','11.60',0);
INSERT INTO `jos_vm_rp_zone_rate` VALUES (31,2,9,'Воздушным транспортом','114.35','34.30',0);
INSERT INTO `jos_vm_rp_zone_rate` VALUES (13,3,1,'до 600 км','74.75','6.70',0);
INSERT INTO `jos_vm_rp_zone_rate` VALUES (14,3,2,'601 - 2000 км','78.80','7.20',0);
INSERT INTO `jos_vm_rp_zone_rate` VALUES (15,3,3,'2001 - 5000 км','94.00','9.00',0);
INSERT INTO `jos_vm_rp_zone_rate` VALUES (16,3,4,'5001 - 8000 км','125.90','11.50',0);
INSERT INTO `jos_vm_rp_zone_rate` VALUES (17,3,5,'свыше 8000 км','141.80','12.65',0);
INSERT INTO `jos_vm_rp_zone_rate` VALUES (32,3,9,'Воздушным транспортом','125.30','37.60',0);
INSERT INTO `jos_vm_rp_zone_rate` VALUES (18,4,1,'до 600 км','88.20','7.90',0);
INSERT INTO `jos_vm_rp_zone_rate` VALUES (19,4,2,'601 - 2000 км','93.00','8.50',0);
INSERT INTO `jos_vm_rp_zone_rate` VALUES (20,4,3,'2001 - 5000 км','111.05','10.60',0);
INSERT INTO `jos_vm_rp_zone_rate` VALUES (21,4,4,'5001 - 8000 км','148.60','13.60',0);
INSERT INTO `jos_vm_rp_zone_rate` VALUES (22,4,5,'свыше 8000 км','167.40','14.90',0);
INSERT INTO `jos_vm_rp_zone_rate` VALUES (23,4,9,'Воздушным транспортом','145.00','43.50',0);
INSERT INTO `jos_vm_rp_zone_rate` VALUES (24,5,1,'до 600 км','95.30','8.60',0);
INSERT INTO `jos_vm_rp_zone_rate` VALUES (25,5,2,'601 - 2000 км','100.45','9.10',0);
INSERT INTO `jos_vm_rp_zone_rate` VALUES (26,5,3,'2001 - 5000 км','120.00','11.45',0);
INSERT INTO `jos_vm_rp_zone_rate` VALUES (27,5,4,'5001 - 8000 км','160.50','14.60',0);
INSERT INTO `jos_vm_rp_zone_rate` VALUES (28,5,5,'свыше 8000 км','180.80','16.15',0);
INSERT INTO `jos_vm_rp_zone_rate` VALUES (29,5,9,'Воздушным транспортом','158.60','47.60',0);
/*!40000 ALTER TABLE `jos_vm_rp_zone_rate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_shipping_carrier`
--

DROP TABLE IF EXISTS `jos_vm_shipping_carrier`;
CREATE TABLE `jos_vm_shipping_carrier` (
  `shipping_carrier_id` int(11) NOT NULL auto_increment,
  `shipping_carrier_name` char(80) NOT NULL default '',
  `shipping_carrier_list_order` int(11) NOT NULL default '0',
  PRIMARY KEY  (`shipping_carrier_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=cp1251 COMMENT='Несущие доставки для стандартно';

--
-- Dumping data for table `jos_vm_shipping_carrier`
--

LOCK TABLES `jos_vm_shipping_carrier` WRITE;
/*!40000 ALTER TABLE `jos_vm_shipping_carrier` DISABLE KEYS */;
INSERT INTO `jos_vm_shipping_carrier` VALUES (1,'Почта России',0);
/*!40000 ALTER TABLE `jos_vm_shipping_carrier` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_shipping_rate`
--

DROP TABLE IF EXISTS `jos_vm_shipping_rate`;
CREATE TABLE `jos_vm_shipping_rate` (
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=cp1251 COMMENT='Ставки доставки для стандартног?';

--
-- Dumping data for table `jos_vm_shipping_rate`
--

LOCK TABLES `jos_vm_shipping_rate` WRITE;
/*!40000 ALTER TABLE `jos_vm_shipping_rate` DISABLE KEYS */;
/*!40000 ALTER TABLE `jos_vm_shipping_rate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_shopper_group`
--

DROP TABLE IF EXISTS `jos_vm_shopper_group`;
CREATE TABLE `jos_vm_shopper_group` (
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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=cp1251 COMMENT='Группы клиентов';

--
-- Dumping data for table `jos_vm_shopper_group`
--

LOCK TABLES `jos_vm_shopper_group` WRITE;
/*!40000 ALTER TABLE `jos_vm_shopper_group` DISABLE KEYS */;
INSERT INTO `jos_vm_shopper_group` VALUES (5,1,'-по умолчанию-','Это стандартная группа клиентов.','0.00',1,1);
INSERT INTO `jos_vm_shopper_group` VALUES (6,1,'Привелигированный','Привелигированный уровень клиентов.','0.00',1,0);
INSERT INTO `jos_vm_shopper_group` VALUES (7,1,'Оптовики','Оптовики, которые покупают партии.','0.00',0,0);
/*!40000 ALTER TABLE `jos_vm_shopper_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_shopper_vendor_xref`
--

DROP TABLE IF EXISTS `jos_vm_shopper_vendor_xref`;
CREATE TABLE `jos_vm_shopper_vendor_xref` (
  `user_id` int(11) default NULL,
  `vendor_id` int(11) default NULL,
  `shopper_group_id` int(11) default NULL,
  `customer_number` varchar(32) default NULL,
  KEY `idx_shopper_vendor_xref_user_id` (`user_id`),
  KEY `idx_shopper_vendor_xref_vendor_id` (`vendor_id`),
  KEY `idx_shopper_vendor_xref_shopper_group_id` (`shopper_group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 COMMENT='Ссылки группа клиентов-продавец';

--
-- Dumping data for table `jos_vm_shopper_vendor_xref`
--

LOCK TABLES `jos_vm_shopper_vendor_xref` WRITE;
/*!40000 ALTER TABLE `jos_vm_shopper_vendor_xref` DISABLE KEYS */;
INSERT INTO `jos_vm_shopper_vendor_xref` VALUES (62,1,5,'');
INSERT INTO `jos_vm_shopper_vendor_xref` VALUES (65,1,5,'18037306884579501e65413');
/*!40000 ALTER TABLE `jos_vm_shopper_vendor_xref` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_state`
--

DROP TABLE IF EXISTS `jos_vm_state`;
CREATE TABLE `jos_vm_state` (
  `state_id` int(11) NOT NULL auto_increment,
  `country_id` int(11) NOT NULL default '1',
  `state_name` varchar(64) default NULL,
  `state_3_code` char(3) default NULL,
  `state_2_code` char(2) default NULL,
  PRIMARY KEY  (`state_id`),
  UNIQUE KEY `state_3_code` (`state_3_code`,`state_2_code`),
  KEY `idx_country_id` (`country_id`)
) ENGINE=MyISAM AUTO_INCREMENT=255 DEFAULT CHARSET=cp1251 COMMENT='Регионы';

--
-- Dumping data for table `jos_vm_state`
--

LOCK TABLES `jos_vm_state` WRITE;
/*!40000 ALTER TABLE `jos_vm_state` DISABLE KEYS */;
INSERT INTO `jos_vm_state` VALUES (1,223,'Alabama','ALA','AL');
INSERT INTO `jos_vm_state` VALUES (2,223,'Alaska','ALK','AK');
INSERT INTO `jos_vm_state` VALUES (3,223,'Arizona','ARZ','AZ');
INSERT INTO `jos_vm_state` VALUES (4,223,'Arkansas','ARK','AR');
INSERT INTO `jos_vm_state` VALUES (5,223,'California','CAL','CA');
INSERT INTO `jos_vm_state` VALUES (6,223,'Colorado','COL','CO');
INSERT INTO `jos_vm_state` VALUES (7,223,'Connecticut','CCT','CT');
INSERT INTO `jos_vm_state` VALUES (8,223,'Delaware','DEL','DE');
INSERT INTO `jos_vm_state` VALUES (9,223,'District Of Columbia','DOC','DC');
INSERT INTO `jos_vm_state` VALUES (10,223,'Florida','FLO','FL');
INSERT INTO `jos_vm_state` VALUES (11,223,'Georgia','GEA','GA');
INSERT INTO `jos_vm_state` VALUES (12,223,'Hawaii','HWI','HI');
INSERT INTO `jos_vm_state` VALUES (13,223,'Idaho','IDA','ID');
INSERT INTO `jos_vm_state` VALUES (14,223,'Illinois','ILL','IL');
INSERT INTO `jos_vm_state` VALUES (15,223,'Indiana','IND','IN');
INSERT INTO `jos_vm_state` VALUES (16,223,'Iowa','IOA','IA');
INSERT INTO `jos_vm_state` VALUES (17,223,'Kansas','KAS','KS');
INSERT INTO `jos_vm_state` VALUES (18,223,'Kentucky','KTY','KY');
INSERT INTO `jos_vm_state` VALUES (19,223,'Louisiana','LOA','LA');
INSERT INTO `jos_vm_state` VALUES (20,223,'Maine','MAI','ME');
INSERT INTO `jos_vm_state` VALUES (21,223,'Maryland','MLD','MD');
INSERT INTO `jos_vm_state` VALUES (22,223,'Massachusetts','MSA','MA');
INSERT INTO `jos_vm_state` VALUES (23,223,'Michigan','MIC','MI');
INSERT INTO `jos_vm_state` VALUES (24,223,'Minnesota','MIN','MN');
INSERT INTO `jos_vm_state` VALUES (25,223,'Mississippi','MIS','MS');
INSERT INTO `jos_vm_state` VALUES (26,223,'Missouri','MIO','MO');
INSERT INTO `jos_vm_state` VALUES (27,223,'Montana','MOT','MT');
INSERT INTO `jos_vm_state` VALUES (28,223,'Nebraska','NEB','NE');
INSERT INTO `jos_vm_state` VALUES (29,223,'Nevada','NEV','NV');
INSERT INTO `jos_vm_state` VALUES (30,223,'New Hampshire','NEH','NH');
INSERT INTO `jos_vm_state` VALUES (31,223,'New Jersey','NEJ','NJ');
INSERT INTO `jos_vm_state` VALUES (32,223,'New Mexico','NEM','NM');
INSERT INTO `jos_vm_state` VALUES (33,223,'New York','NEY','NY');
INSERT INTO `jos_vm_state` VALUES (34,223,'North Carolina','NOC','NC');
INSERT INTO `jos_vm_state` VALUES (35,223,'North Dakota','NOD','ND');
INSERT INTO `jos_vm_state` VALUES (36,223,'Ohio','OHI','OH');
INSERT INTO `jos_vm_state` VALUES (37,223,'Oklahoma','OKL','OK');
INSERT INTO `jos_vm_state` VALUES (38,223,'Oregon','ORN','OR');
INSERT INTO `jos_vm_state` VALUES (39,223,'Pennsylvania','PEA','PA');
INSERT INTO `jos_vm_state` VALUES (40,223,'Rhode Island','RHI','RI');
INSERT INTO `jos_vm_state` VALUES (41,223,'South Carolina','SOC','SC');
INSERT INTO `jos_vm_state` VALUES (42,223,'South Dakota','SOD','SD');
INSERT INTO `jos_vm_state` VALUES (43,223,'Tennessee','TEN','TN');
INSERT INTO `jos_vm_state` VALUES (44,223,'Texas','TXS','TX');
INSERT INTO `jos_vm_state` VALUES (45,223,'Utah','UTA','UT');
INSERT INTO `jos_vm_state` VALUES (46,223,'Vermont','VMT','VT');
INSERT INTO `jos_vm_state` VALUES (47,223,'Virginia','VIA','VA');
INSERT INTO `jos_vm_state` VALUES (48,223,'Washington','WAS','WA');
INSERT INTO `jos_vm_state` VALUES (49,223,'West Virginia','WEV','WV');
INSERT INTO `jos_vm_state` VALUES (50,223,'Wisconsin','WIS','WI');
INSERT INTO `jos_vm_state` VALUES (51,223,'Wyoming','WYO','WY');
INSERT INTO `jos_vm_state` VALUES (52,38,'Alberta','ALB','AB');
INSERT INTO `jos_vm_state` VALUES (53,38,'British Columbia','BRC','BC');
INSERT INTO `jos_vm_state` VALUES (54,38,'Manitoba','MAB','MB');
INSERT INTO `jos_vm_state` VALUES (55,38,'New Brunswick','NEB','NB');
INSERT INTO `jos_vm_state` VALUES (56,38,'Newfoundland and Labrador','NFL','NL');
INSERT INTO `jos_vm_state` VALUES (57,38,'Northwest Territories','NWT','NT');
INSERT INTO `jos_vm_state` VALUES (58,38,'Nova Scotia','NOS','NS');
INSERT INTO `jos_vm_state` VALUES (59,38,'Nunavut','NUT','NU');
INSERT INTO `jos_vm_state` VALUES (60,38,'Ontario','ONT','ON');
INSERT INTO `jos_vm_state` VALUES (61,38,'Prince Edward Island','PEI','PE');
INSERT INTO `jos_vm_state` VALUES (62,38,'Quebec','QEC','QC');
INSERT INTO `jos_vm_state` VALUES (63,38,'Saskatchewan','SAK','SK');
INSERT INTO `jos_vm_state` VALUES (64,38,'Yukon','YUT','YT');
INSERT INTO `jos_vm_state` VALUES (65,222,'England','ENG','EN');
INSERT INTO `jos_vm_state` VALUES (66,222,'Northern Ireland','NOI','NI');
INSERT INTO `jos_vm_state` VALUES (67,222,'Scotland','SCO','SD');
INSERT INTO `jos_vm_state` VALUES (68,222,'Wales','WLS','WS');
INSERT INTO `jos_vm_state` VALUES (69,13,'Australian Capital Territory','ACT','AT');
INSERT INTO `jos_vm_state` VALUES (70,13,'New South Wales','NSW','NW');
INSERT INTO `jos_vm_state` VALUES (71,13,'Northern Territory','NOT','NT');
INSERT INTO `jos_vm_state` VALUES (72,13,'Queensland','QLD','QL');
INSERT INTO `jos_vm_state` VALUES (73,13,'South Australia','SOA','SA');
INSERT INTO `jos_vm_state` VALUES (74,13,'Tasmania','TAS','TA');
INSERT INTO `jos_vm_state` VALUES (75,13,'Victoria','VIC','VI');
INSERT INTO `jos_vm_state` VALUES (76,13,'Western Australia','WEA','WA');
INSERT INTO `jos_vm_state` VALUES (77,138,'Aguascalientes','AGS','AG');
INSERT INTO `jos_vm_state` VALUES (78,138,'Baja California Norte','BCN','BN');
INSERT INTO `jos_vm_state` VALUES (79,138,'Baja California Sur','BCS','BS');
INSERT INTO `jos_vm_state` VALUES (80,138,'Campeche','CAM','CA');
INSERT INTO `jos_vm_state` VALUES (81,138,'Chiapas','CHI','CS');
INSERT INTO `jos_vm_state` VALUES (82,138,'Chihuahua','CHA','CH');
INSERT INTO `jos_vm_state` VALUES (83,138,'Coahuila','COA','CO');
INSERT INTO `jos_vm_state` VALUES (84,138,'Colima','COL','CM');
INSERT INTO `jos_vm_state` VALUES (85,138,'Distrito Federal','DFM','DF');
INSERT INTO `jos_vm_state` VALUES (86,138,'Durango','DGO','DO');
INSERT INTO `jos_vm_state` VALUES (87,138,'Guanajuato','GTO','GO');
INSERT INTO `jos_vm_state` VALUES (88,138,'Guerrero','GRO','GU');
INSERT INTO `jos_vm_state` VALUES (89,138,'Hidalgo','HGO','HI');
INSERT INTO `jos_vm_state` VALUES (90,138,'Jalisco','JAL','JA');
INSERT INTO `jos_vm_state` VALUES (91,138,'MГ©xico (Estado de)','EDM','EM');
INSERT INTO `jos_vm_state` VALUES (92,138,'MichoacГЎn','MCN','MI');
INSERT INTO `jos_vm_state` VALUES (93,138,'Morelos','MOR','MO');
INSERT INTO `jos_vm_state` VALUES (94,138,'Nayarit','NAY','NY');
INSERT INTO `jos_vm_state` VALUES (95,138,'Nuevo LeГіn','NUL','NL');
INSERT INTO `jos_vm_state` VALUES (96,138,'Oaxaca','OAX','OA');
INSERT INTO `jos_vm_state` VALUES (97,138,'Puebla','PUE','PU');
INSERT INTO `jos_vm_state` VALUES (98,138,'QuerГ©taro','QRO','QU');
INSERT INTO `jos_vm_state` VALUES (99,138,'Quintana Roo','QUR','QR');
INSERT INTO `jos_vm_state` VALUES (100,138,'San Luis PotosГ­','SLP','SP');
INSERT INTO `jos_vm_state` VALUES (101,138,'Sinaloa','SIN','SI');
INSERT INTO `jos_vm_state` VALUES (102,138,'Sonora','SON','SO');
INSERT INTO `jos_vm_state` VALUES (103,138,'Tabasco','TAB','TA');
INSERT INTO `jos_vm_state` VALUES (104,138,'Tamaulipas','TAM','TM');
INSERT INTO `jos_vm_state` VALUES (105,138,'Tlaxcala','TLX','TX');
INSERT INTO `jos_vm_state` VALUES (106,138,'Veracruz','VER','VZ');
INSERT INTO `jos_vm_state` VALUES (107,138,'YucatГЎn','YUC','YU');
INSERT INTO `jos_vm_state` VALUES (108,138,'Zacatecas','ZAC','ZA');
INSERT INTO `jos_vm_state` VALUES (109,30,'Acre','ACR','AC');
INSERT INTO `jos_vm_state` VALUES (110,30,'Alagoas','ALG','AL');
INSERT INTO `jos_vm_state` VALUES (111,30,'AmapГЎ','AMP','AP');
INSERT INTO `jos_vm_state` VALUES (112,30,'Amazonas','AMZ','AM');
INSERT INTO `jos_vm_state` VALUES (113,30,'BahГ­a','BAH','BA');
INSERT INTO `jos_vm_state` VALUES (114,30,'CearГЎ','CEA','CE');
INSERT INTO `jos_vm_state` VALUES (115,30,'Distrito Federal','DFB','DF');
INSERT INTO `jos_vm_state` VALUES (116,30,'Espirito Santo','ESS','ES');
INSERT INTO `jos_vm_state` VALUES (117,30,'GoiГЎs','GOI','GO');
INSERT INTO `jos_vm_state` VALUES (118,30,'MaranhГЈo','MAR','MA');
INSERT INTO `jos_vm_state` VALUES (119,30,'Mato Grosso','MAT','MT');
INSERT INTO `jos_vm_state` VALUES (120,30,'Mato Grosso do Sul','MGS','MS');
INSERT INTO `jos_vm_state` VALUES (121,30,'Minas GeraГ­s','MIG','MG');
INSERT INTO `jos_vm_state` VALUES (122,30,'ParanГЎ','PAR','PR');
INSERT INTO `jos_vm_state` VALUES (123,30,'ParaГ­ba','PRB','PB');
INSERT INTO `jos_vm_state` VALUES (124,30,'ParГЎ','PAB','PA');
INSERT INTO `jos_vm_state` VALUES (125,30,'Pernambuco','PER','PR');
INSERT INTO `jos_vm_state` VALUES (126,30,'PiauГ­','PIA','PI');
INSERT INTO `jos_vm_state` VALUES (127,30,'Rio Grande do Norte','RGN','RN');
INSERT INTO `jos_vm_state` VALUES (128,30,'Rio Grande do Sul','RGS','RS');
INSERT INTO `jos_vm_state` VALUES (129,30,'Rio de Janeiro','RDJ','RJ');
INSERT INTO `jos_vm_state` VALUES (130,30,'RondГґnia','RON','RO');
INSERT INTO `jos_vm_state` VALUES (131,30,'Roraima','ROR','RR');
INSERT INTO `jos_vm_state` VALUES (132,30,'Santa Catarina','SAC','SC');
INSERT INTO `jos_vm_state` VALUES (133,30,'Sergipe','SER','SE');
INSERT INTO `jos_vm_state` VALUES (134,30,'SГЈo Paulo','SAP','SP');
INSERT INTO `jos_vm_state` VALUES (135,30,'Tocantins','TOC','TO');
INSERT INTO `jos_vm_state` VALUES (136,44,'Anhui','ANH','AN');
INSERT INTO `jos_vm_state` VALUES (137,44,'Beijing','BEI','BE');
INSERT INTO `jos_vm_state` VALUES (138,44,'Fujian','FUJ','FJ');
INSERT INTO `jos_vm_state` VALUES (139,44,'Gansu','GAN','GU');
INSERT INTO `jos_vm_state` VALUES (140,44,'Guangdong','GUA','GU');
INSERT INTO `jos_vm_state` VALUES (141,44,'Guangxi Zhuang','GUZ','GZ');
INSERT INTO `jos_vm_state` VALUES (142,44,'Guizhou','GUI','GI');
INSERT INTO `jos_vm_state` VALUES (143,44,'Hainan','HAI','HA');
INSERT INTO `jos_vm_state` VALUES (144,44,'Hebei','HEB','HE');
INSERT INTO `jos_vm_state` VALUES (145,44,'Heilongjiang','HEI','HG');
INSERT INTO `jos_vm_state` VALUES (146,44,'Henan','HEN','HN');
INSERT INTO `jos_vm_state` VALUES (147,44,'Hubei','HUB','HI');
INSERT INTO `jos_vm_state` VALUES (148,44,'Hunan','HUN','HU');
INSERT INTO `jos_vm_state` VALUES (149,44,'Jiangsu','JIA','JI');
INSERT INTO `jos_vm_state` VALUES (150,44,'Jiangxi','JIX','JX');
INSERT INTO `jos_vm_state` VALUES (151,44,'Jilin','JIL','JN');
INSERT INTO `jos_vm_state` VALUES (152,44,'Liaoning','LIA','LI');
INSERT INTO `jos_vm_state` VALUES (153,44,'Nei Mongol','NML','NM');
INSERT INTO `jos_vm_state` VALUES (154,44,'Ningxia Hui','NIH','NH');
INSERT INTO `jos_vm_state` VALUES (155,44,'Qinghai','QIN','QI');
INSERT INTO `jos_vm_state` VALUES (156,44,'Shaanxi','SHA','SH');
INSERT INTO `jos_vm_state` VALUES (157,44,'Shandong','SNG','SG');
INSERT INTO `jos_vm_state` VALUES (158,44,'Shanghai','SHH','SI');
INSERT INTO `jos_vm_state` VALUES (159,44,'Shanxi','SHX','SX');
INSERT INTO `jos_vm_state` VALUES (160,44,'Sichuan','SIC','SN');
INSERT INTO `jos_vm_state` VALUES (161,44,'Tianjin','TIA','TI');
INSERT INTO `jos_vm_state` VALUES (162,44,'Xinjiang Uygur','XIU','XU');
INSERT INTO `jos_vm_state` VALUES (163,44,'Xizang','XIZ','XI');
INSERT INTO `jos_vm_state` VALUES (164,44,'Yunnan','YUN','YU');
INSERT INTO `jos_vm_state` VALUES (165,44,'Zhejiang','ZHE','ZH');
INSERT INTO `jos_vm_state` VALUES (245,176,'Агинский Бурятский автономный округ','AGB','80');
INSERT INTO `jos_vm_state` VALUES (166,176,'Адыгея Республика','AD','01');
INSERT INTO `jos_vm_state` VALUES (169,176,'Алтай Республика','AL','04');
INSERT INTO `jos_vm_state` VALUES (187,176,'Алтайский край','ALT','22');
INSERT INTO `jos_vm_state` VALUES (193,176,'Амурская область','AMU','28');
INSERT INTO `jos_vm_state` VALUES (194,176,'Архангельская область','ARK','29');
INSERT INTO `jos_vm_state` VALUES (195,176,'Астраханская область','AST','30');
INSERT INTO `jos_vm_state` VALUES (167,176,'Башкортостан Республика','BA','02');
INSERT INTO `jos_vm_state` VALUES (196,176,'Белгородская область','BEL','31');
INSERT INTO `jos_vm_state` VALUES (197,176,'Брянская область','BRY','32');
INSERT INTO `jos_vm_state` VALUES (168,176,'Бурятия Республика','BU','03');
INSERT INTO `jos_vm_state` VALUES (198,176,'Владимирская область','VLA','33');
INSERT INTO `jos_vm_state` VALUES (199,176,'Волгоградская область','VGG','34');
INSERT INTO `jos_vm_state` VALUES (200,176,'Вологодская область','VLG','35');
INSERT INTO `jos_vm_state` VALUES (201,176,'Воронежская область','VOR','36');
INSERT INTO `jos_vm_state` VALUES (170,176,'Дагестан Республика','DA','05');
INSERT INTO `jos_vm_state` VALUES (244,176,'Еврейская автономная область','YEV','79');
INSERT INTO `jos_vm_state` VALUES (202,176,'Ивановская область','IVA','37');
INSERT INTO `jos_vm_state` VALUES (171,176,'Ингушетия Республика','IN','06');
INSERT INTO `jos_vm_state` VALUES (203,176,'Иркутская область','IRK','38');
INSERT INTO `jos_vm_state` VALUES (172,176,'Кабардино-Балкарская Республика','KB','07');
INSERT INTO `jos_vm_state` VALUES (204,176,'Калининградская область','KGD','39');
INSERT INTO `jos_vm_state` VALUES (173,176,'Калмыкия Республика','KL','08');
INSERT INTO `jos_vm_state` VALUES (205,176,'Калужская область','KLU','40');
INSERT INTO `jos_vm_state` VALUES (206,176,'Камчатский край','KAM','41');
INSERT INTO `jos_vm_state` VALUES (174,176,'Карачаево-Черкесская Республика','KC','09');
INSERT INTO `jos_vm_state` VALUES (175,176,'Карелия Республика','KR','10');
INSERT INTO `jos_vm_state` VALUES (207,176,'Кемеровская область','KEM','42');
INSERT INTO `jos_vm_state` VALUES (208,176,'Кировская область','KIR','43');
INSERT INTO `jos_vm_state` VALUES (176,176,'Коми Республика','KO','11');
INSERT INTO `jos_vm_state` VALUES (209,176,'Костромская область','KOS','44');
INSERT INTO `jos_vm_state` VALUES (188,176,'Краснодарский край','KDA','23');
INSERT INTO `jos_vm_state` VALUES (189,176,'Красноярский край','KIA','24');
INSERT INTO `jos_vm_state` VALUES (210,176,'Курганская область','KGN','45');
INSERT INTO `jos_vm_state` VALUES (211,176,'Курская область','KRS','46');
INSERT INTO `jos_vm_state` VALUES (212,176,'Ленинградская область','LEN','47');
INSERT INTO `jos_vm_state` VALUES (213,176,'Липецкая область','LIP','48');
INSERT INTO `jos_vm_state` VALUES (214,176,'Магаданская область','MAG','49');
INSERT INTO `jos_vm_state` VALUES (177,176,'Марий Эл Республика','ME','12');
INSERT INTO `jos_vm_state` VALUES (178,176,'Мордовия Республика','MO','13');
INSERT INTO `jos_vm_state` VALUES (242,176,'Москва','MOW','77');
INSERT INTO `jos_vm_state` VALUES (215,176,'Московская область','MOS','50');
INSERT INTO `jos_vm_state` VALUES (216,176,'Мурманская область','MUR','51');
INSERT INTO `jos_vm_state` VALUES (248,176,'Ненецкий автономный округ','NEN','83');
INSERT INTO `jos_vm_state` VALUES (217,176,'Нижегородская область','NIZ','52');
INSERT INTO `jos_vm_state` VALUES (218,176,'Новгородская область','NGR','53');
INSERT INTO `jos_vm_state` VALUES (219,176,'Новосибирская область','NVS','54');
INSERT INTO `jos_vm_state` VALUES (220,176,'Омская область','OMS','55');
INSERT INTO `jos_vm_state` VALUES (221,176,'Оренбургская область','ORE','56');
INSERT INTO `jos_vm_state` VALUES (222,176,'Орловская область','ORL','57');
INSERT INTO `jos_vm_state` VALUES (223,176,'Пензенская область','PNZ','58');
INSERT INTO `jos_vm_state` VALUES (224,176,'Пермский край','PER','59');
INSERT INTO `jos_vm_state` VALUES (190,176,'Приморский край','PRI','25');
INSERT INTO `jos_vm_state` VALUES (225,176,'Псковская область','PSK','60');
INSERT INTO `jos_vm_state` VALUES (226,176,'Ростовская область','ROS','61');
INSERT INTO `jos_vm_state` VALUES (227,176,'Рязанская область','RYA','62');
INSERT INTO `jos_vm_state` VALUES (228,176,'Самарская область','SAM','63');
INSERT INTO `jos_vm_state` VALUES (243,176,'Санкт-Петербург','SPE','78');
INSERT INTO `jos_vm_state` VALUES (229,176,'Саратовская область','SAR','64');
INSERT INTO `jos_vm_state` VALUES (230,176,'Сахалинская область','SAK','65');
INSERT INTO `jos_vm_state` VALUES (179,176,'Саха (Якутия) Республика','SA','14');
INSERT INTO `jos_vm_state` VALUES (231,176,'Свердловская область','SVE','66');
INSERT INTO `jos_vm_state` VALUES (180,176,'Северная Осетия-Алания Республика','SE','15');
INSERT INTO `jos_vm_state` VALUES (232,176,'Смоленская область','SMO','67');
INSERT INTO `jos_vm_state` VALUES (191,176,'Ставропольский край','STA','26');
INSERT INTO `jos_vm_state` VALUES (233,176,'Тамбовская область','TAM','68');
INSERT INTO `jos_vm_state` VALUES (181,176,'Татарстан Республика','TA','16');
INSERT INTO `jos_vm_state` VALUES (234,176,'Тверская область','TVE','69');
INSERT INTO `jos_vm_state` VALUES (235,176,'Томская область','TOM','70');
INSERT INTO `jos_vm_state` VALUES (236,176,'Тульская область','TUL','71');
INSERT INTO `jos_vm_state` VALUES (182,176,'Тыва Республика','TY','17');
INSERT INTO `jos_vm_state` VALUES (237,176,'Тюменская область','TYU','72');
INSERT INTO `jos_vm_state` VALUES (183,176,'Удмуртская Республика','UD','18');
INSERT INTO `jos_vm_state` VALUES (238,176,'Ульяновская область','ULY','73');
INSERT INTO `jos_vm_state` VALUES (250,176,'Усть-Ордынский Бурятский автономный округ','UOB','85');
INSERT INTO `jos_vm_state` VALUES (192,176,'Хабаровский край','KHA','27');
INSERT INTO `jos_vm_state` VALUES (184,176,'Хакасия Республика','KK','19');
INSERT INTO `jos_vm_state` VALUES (251,176,'Ханты-Мансийский автономный округ','KHM','86');
INSERT INTO `jos_vm_state` VALUES (239,176,'Челябинская область','CHE','74');
INSERT INTO `jos_vm_state` VALUES (185,176,'Чеченская Республика','CE','20');
INSERT INTO `jos_vm_state` VALUES (240,176,'Читинская область','CHI','75');
INSERT INTO `jos_vm_state` VALUES (186,176,'Чувашская Республика','CU','21');
INSERT INTO `jos_vm_state` VALUES (252,176,'Чукотский автономный округ','CHU','87');
INSERT INTO `jos_vm_state` VALUES (254,176,'Ямало-Ненецкий автономный округ','YAN','89');
INSERT INTO `jos_vm_state` VALUES (241,176,'Ярославская область','YAR','76');
/*!40000 ALTER TABLE `jos_vm_state` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_tax_rate`
--

DROP TABLE IF EXISTS `jos_vm_tax_rate`;
CREATE TABLE `jos_vm_tax_rate` (
  `tax_rate_id` int(11) NOT NULL auto_increment,
  `vendor_id` int(11) default NULL,
  `tax_state` varchar(64) default NULL,
  `tax_country` varchar(64) default NULL,
  `mdate` int(11) default NULL,
  `tax_rate` decimal(10,4) default NULL,
  PRIMARY KEY  (`tax_rate_id`),
  KEY `idx_tax_rate_vendor_id` (`vendor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=cp1251 COMMENT='Ставки доставки';

--
-- Dumping data for table `jos_vm_tax_rate`
--

LOCK TABLES `jos_vm_tax_rate` WRITE;
/*!40000 ALTER TABLE `jos_vm_tax_rate` DISABLE KEYS */;
INSERT INTO `jos_vm_tax_rate` VALUES (2,1,'CA','USA',964565926,'0.0825');
INSERT INTO `jos_vm_tax_rate` VALUES (3,1,'МСК','Российская Федерация',4556755,'0.0130');
/*!40000 ALTER TABLE `jos_vm_tax_rate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_user_info`
--

DROP TABLE IF EXISTS `jos_vm_user_info`;
CREATE TABLE `jos_vm_user_info` (
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
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 COMMENT='Информация о клиенте BT = Оплатить';

--
-- Dumping data for table `jos_vm_user_info`
--

LOCK TABLES `jos_vm_user_info` WRITE;
/*!40000 ALTER TABLE `jos_vm_user_info` DISABLE KEYS */;
INSERT INTO `jos_vm_user_info` VALUES ('b32b0a58029cac587c37ad50cbdc9aea',62,'BT',NULL,'Конко-ко','Г-жа','Главная','Администратор','нет','322-22-33','','','1-2-3','','Вешки','80','RUS','113326','kalinova@nicmail.ru','','','','','',1181050542,1182844787,'shopper','','','','','','Checking');
/*!40000 ALTER TABLE `jos_vm_user_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_vendor`
--

DROP TABLE IF EXISTS `jos_vm_vendor`;
CREATE TABLE `jos_vm_vendor` (
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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=cp1251 COMMENT='Продавцы';

--
-- Dumping data for table `jos_vm_vendor`
--

LOCK TABLES `jos_vm_vendor` WRITE;
/*!40000 ALTER TABLE `jos_vm_vendor` DISABLE KEYS */;
INSERT INTO `jos_vm_vendor` VALUES (1,'Тестовый магазин','','','','','','','','sales@demo-shop.nic.ru','','','','Москва','77','RUS','','Тестовый магазин','<p align=\\\"center\\\">Это демонстрационный магазин VirtueMart для CMS Joomla.</p><p align=\\\"center\\\">Товары не отправляются, не продаются и не возвращаются.</p><p align=\\\"center\\\"><a href=\\\"http://3456.ru\\\"><br /></a>  </p>',0,'','9e974f0a64262e06d0a145b19fe8e51c.gif','RUB',950302468,1196175859,'shop_image/','<p align=\\\"center\\\">Это демонстрационный магазин VirtueMart для CMS Joomla.</p><p align=\\\"center\\\">Товары не отправляются, не продаются и не возвращаются.</p><p align=\\\"center\\\"><a href=\\\"http://3456.ru/\\\"><br /></a>  </p>','','0.00','0.00','1|руб.|0|,| |1|8');
/*!40000 ALTER TABLE `jos_vm_vendor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_vendor_category`
--

DROP TABLE IF EXISTS `jos_vm_vendor_category`;
CREATE TABLE `jos_vm_vendor_category` (
  `vendor_category_id` int(11) NOT NULL auto_increment,
  `vendor_category_name` varchar(64) default NULL,
  `vendor_category_desc` text,
  PRIMARY KEY  (`vendor_category_id`),
  KEY `idx_vendor_category_category_name` (`vendor_category_name`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=cp1251 COMMENT='Категории продавцов';

--
-- Dumping data for table `jos_vm_vendor_category`
--

LOCK TABLES `jos_vm_vendor_category` WRITE;
/*!40000 ALTER TABLE `jos_vm_vendor_category` DISABLE KEYS */;
INSERT INTO `jos_vm_vendor_category` VALUES (6,'-по умолчанию-','Стандартная');
/*!40000 ALTER TABLE `jos_vm_vendor_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_visit`
--

DROP TABLE IF EXISTS `jos_vm_visit`;
CREATE TABLE `jos_vm_visit` (
  `visit_id` varchar(255) NOT NULL default '',
  `affiliate_id` int(11) NOT NULL default '0',
  `pages` int(11) NOT NULL default '0',
  `entry_page` varchar(255) NOT NULL default '',
  `exit_page` varchar(255) NOT NULL default '',
  `sdate` int(11) NOT NULL default '0',
  `edate` int(11) NOT NULL default '0',
  PRIMARY KEY  (`visit_id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 COMMENT='Записи о посещении партнерки';

--
-- Dumping data for table `jos_vm_visit`
--

LOCK TABLES `jos_vm_visit` WRITE;
/*!40000 ALTER TABLE `jos_vm_visit` DISABLE KEYS */;
/*!40000 ALTER TABLE `jos_vm_visit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_waiting_list`
--

DROP TABLE IF EXISTS `jos_vm_waiting_list`;
CREATE TABLE `jos_vm_waiting_list` (
  `waiting_list_id` int(11) NOT NULL auto_increment,
  `product_id` int(11) NOT NULL default '0',
  `user_id` int(11) NOT NULL default '0',
  `notify_email` varchar(150) NOT NULL default '',
  `notified` enum('0','1') default '0',
  `notify_date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`waiting_list_id`),
  KEY `product_id` (`product_id`),
  KEY `notify_email` (`notify_email`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 COMMENT='Уведомления';

--
-- Dumping data for table `jos_vm_waiting_list`
--

LOCK TABLES `jos_vm_waiting_list` WRITE;
/*!40000 ALTER TABLE `jos_vm_waiting_list` DISABLE KEYS */;
/*!40000 ALTER TABLE `jos_vm_waiting_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jos_vm_zone_shipping`
--

DROP TABLE IF EXISTS `jos_vm_zone_shipping`;
CREATE TABLE `jos_vm_zone_shipping` (
  `zone_id` int(11) NOT NULL auto_increment,
  `zone_name` varchar(255) default NULL,
  `zone_cost` decimal(10,2) default NULL,
  `zone_limit` decimal(10,2) default NULL,
  `zone_description` text NOT NULL,
  `zone_tax_rate` int(11) NOT NULL default '0',
  PRIMARY KEY  (`zone_id`),
  KEY `zone_id` (`zone_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=cp1251 COMMENT='Зоны для  Модуля доставки по зона';

--
-- Dumping data for table `jos_vm_zone_shipping`
--

LOCK TABLES `jos_vm_zone_shipping` WRITE;
/*!40000 ALTER TABLE `jos_vm_zone_shipping` DISABLE KEYS */;
INSERT INTO `jos_vm_zone_shipping` VALUES (1,'По умолчанию','6.00','35.00','Эта зона доставки по умолчанию. Эта зона будет использоваться пока вы не назначите каждой стране свою зону.',2);
INSERT INTO `jos_vm_zone_shipping` VALUES (2,'Zone 1','1000.00','10000.00','Пример зоны',2);
INSERT INTO `jos_vm_zone_shipping` VALUES (3,'Zone 2','2.00','22.00','Это вторая зона. Вы можете использовать это поле, чтобы делать заметки о зоне.',2);
INSERT INTO `jos_vm_zone_shipping` VALUES (4,'Zone 3','11.00','64.00','Очень практично для подробностей о зоне или специальных замечаний.',2);
/*!40000 ALTER TABLE `jos_vm_zone_shipping` ENABLE KEYS */;
UNLOCK TABLES;

INSERT INTO `jos_content` VALUES (12,'О магазине','О магазине','<h3>О магазине </h3>  <p class=\"MsoNormal\">На этой странице Вы можете кратко описать свой магазин. Рассказать об истории компании, ее стратегии, команде. О том, какие преимущества дает Ваш магазин, что уникального он может предложить по сравнению с конкурентами. </p>  <p class=\"MsoNormal\">Также это удачное место для размещения различных новостей: сообщения о распродажах, специальных предложениях и акциях, возможных способах сотрудничества. Со временем Вы сможете похвастаться здесь количеством Ваших клиентов, а также рассказать, какие бренды с Вами сотрудничают, какие крупные компании стали Вашими клиентами.</p>  
<p class=\"MsoNormal\">Если у Вас есть <span>offline</span>-магазины, на данной странице Вы можете разместить их адреса, схемы проезда.</p>\r\n\r\n','',1,0,0,0,'2007-12-20 17:01:41',62,'','2007-12-20 17:01:49',62,0,'0000-00-00 00:00:00','2007-12-20 16:58:44','0000-00-00 00:00:00','','','menu_image=-1\nitem_title=0\npageclass_sfx=\nback_button=\nrating=\nauthor=\ncreatedate=\nmodifydate=\npdf=\nprint=\nemail=',1,0,0,'','',0,0);

INSERT INTO `jos_content` VALUES (13,'Оплата','Оплата','<h3>Оплата</h3>  \r\n<p class=\"MsoNormal\">Для клиентов интернет-магазина особенно актуальными являются вопросы, связанные с возможными способами оплаты и доставки товара.<span>&nbsp; </span></p>  <p class=\"MsoNormal\">На этой странице Вы можете перечислить все возможные в Вашем магазине способы оплаты, указать платежные системы, с которыми интегрирован Ваш магазин. </p><p class=\"MsoNormal\">Ваши покупатели могут быть как физическими, так и юридическими лицами. Для каждой категории покупателей опишите наиболее удобные способы оплаты, подтверждающие и отчетные документы, предоставляемые в Вашем магазине. &nbsp;</p>','',1,0,0,0,'2007-12-20 17:02:34',62,'','2007-12-20 17:02:36',62,0,'0000-00-00 00:00:00','2007-12-20 17:01:53','0000-00-00 00:00:00','','','menu_image=-1\nitem_title=0\npageclass_sfx=\nback_button=\nrating=\nauthor=\ncreatedate=\nmodifydate=\npdf=\nprint=\nemail=',1,0,0,'','',0,0);

INSERT INTO `jos_content` VALUES (14,'Доставка','Доставка','<h3>Доставка</h3> <p >Для клиентов интернет-магазина особенно актуальными являются вопросы, связанные с возможными способами оплаты и доставки товара.</p>  <p >Посетители Вашего ресурса могут быть из другого города и даже из другого региона. Поэтому предоставление пользователям максимума информации благотворно скажется на их решении совершить покупку именно в Вашем магазине.</p>  <p >На этой странице Вы можете подробно описать возможные способы доставки товара в Вашем магазине, указать особенности и преимущества каждого из них. Оговорить сроки и возможную стоимость доставки, от чего они зависят. </p>\r\n','',1,0,0,0,'2007-12-20 17:03:50',62,'','2007-12-20 17:03:54',62,0,'0000-00-00 00:00:00','2007-12-20 17:02:39','0000-00-00 00:00:00','','','menu_image=-1\nitem_title=0\npageclass_sfx=\nback_button=\nrating=\nauthor=\ncreatedate=\nmodifydate=\npdf=\nprint=\nemail=',1,0,0,'','',0,0);

INSERT INTO `jos_content` VALUES (15,'Контакты','Контакты','<h3> Контакты</h3>   <p>Возможно, покупатель захочет связаться с Вами. И даже если Ваш центральный офис &ndash; это Ваш личный автомобиль, стоит указать хотя бы электронный адрес для связи. </p> <p >Вы от этого только выиграете!  </p>  <p>Степень доверия к магазину, до которого никак нельзя &laquo;достучаться&raquo;, резко падает, даже если выбор товаров огромный, а цены низкие.</p> <p>Кроме того контактная информация может понадобиться Ваши будущим партнерам или представителям СМИ.</p>\r\n','',1,0,0,0,'2007-12-20 17:04:51',62,'','2007-12-20 17:04:53',62,0,'0000-00-00 00:00:00','2007-12-20 17:04:12','0000-00-00 00:00:00','','','menu_image=-1\nitem_title=0\npageclass_sfx=\nback_button=\nrating=\nauthor=\ncreatedate=\nmodifydate=\npdf=\nprint=\nemail=',1,0,0,'','',0,0);
