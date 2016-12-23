DROP TABLE IF EXISTS `jos_sb_attachments`;
CREATE TABLE `jos_sb_attachments` (
  `mesid` int(11) NOT NULL default '0',
  `filelocation` text NOT NULL,
  KEY `mesid` (`mesid`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

DROP TABLE IF EXISTS `jos_sb_categories`;
CREATE TABLE `jos_sb_categories` (
  `id` int(11) NOT NULL auto_increment,
  `parent` int(11) default '0',
  `name` tinytext,
  `cat_emoticon` tinyint(4) NOT NULL default '0',
  `locked` tinyint(4) NOT NULL default '0',
  `alert_admin` tinyint(4) NOT NULL default '0',
  `moderated` tinyint(4) NOT NULL default '0',
  `moderators` varchar(15) default NULL,
  `pub_access` tinyint(4) default '1',
  `pub_recurse` tinyint(4) default '1',
  `admin_access` tinyint(4) default '0',
  `admin_recurse` tinyint(4) default '1',
  `ordering` tinyint(4) NOT NULL default '0',
  `future2` int(11) default '0',
  `published` tinyint(4) NOT NULL default '0',
  `checked_out` tinyint(4) NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `review` tinyint(4) NOT NULL default '0',
  `hits` int(11) NOT NULL default '0',
  `description` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `published_pubaccess_id` (`published`,`pub_access`,`id`),
  KEY `catparent` (`parent`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

DROP TABLE IF EXISTS `jos_sb_config`;
CREATE TABLE `jos_sb_config` (
  `jbkey` tinytext NOT NULL,
  `jbvalue` tinytext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

DROP TABLE IF EXISTS `jos_sb_messages`;
CREATE TABLE `jos_sb_messages` (
  `id` int(11) NOT NULL auto_increment,
  `parent` int(11) default '0',
  `thread` int(11) default '0',
  `catid` int(11) NOT NULL default '0',
  `name` tinytext,
  `userid` int(11) NOT NULL default '0',
  `email` tinytext,
  `subject` tinytext,
  `time` int(11) NOT NULL default '0',
  `ip` varchar(15) default NULL,
  `topic_emoticon` int(11) NOT NULL default '0',
  `locked` tinyint(4) NOT NULL default '0',
  `hold` tinyint(4) NOT NULL default '0',
  `ordering` int(11) default '0',
  `hits` int(11) default '0',
  `moved` tinyint(4) default '0',
  PRIMARY KEY  (`id`),
  KEY `thread` (`thread`),
  KEY `parent` (`parent`),
  KEY `catid` (`catid`),
  KEY `ip` (`ip`),
  KEY `userid` (`userid`),
  KEY `hold_time` (`hold`,`time`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

DROP TABLE IF EXISTS `jos_sb_messages_text`;
CREATE TABLE `jos_sb_messages_text` (
  `mesid` int(11) NOT NULL default '0',
  `message` text NOT NULL,
  PRIMARY KEY  (`mesid`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

DROP TABLE IF EXISTS `jos_sb_moderation`;
CREATE TABLE `jos_sb_moderation` (
  `catid` int(11) NOT NULL default '0',
  `userid` int(11) NOT NULL default '0',
  `future1` tinyint(4) default '0',
  `future2` int(11) default '0',
  PRIMARY KEY  (`catid`,`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

DROP TABLE IF EXISTS `jos_sb_sessions`;
CREATE TABLE `jos_sb_sessions` (
  `userid` int(11) NOT NULL default '0',
  `allowed` text,
  `lasttime` int(11) NOT NULL default '0',
  `readtopics` text,
  PRIMARY KEY  (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

DROP TABLE IF EXISTS `jos_sb_smileys`;
CREATE TABLE `jos_sb_smileys` (
  `id` int(4) NOT NULL auto_increment,
  `code` varchar(12) NOT NULL default '',
  `location` varchar(50) NOT NULL default '',
  `greylocation` varchar(60) NOT NULL default '',
  `emoticonbar` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=cp1251;

DROP TABLE IF EXISTS `jos_sb_subscriptions`;
CREATE TABLE `jos_sb_subscriptions` (
  `thread` int(11) NOT NULL default '0',
  `userid` int(11) NOT NULL default '0',
  `future1` int(11) default '0',
  KEY `thread` (`thread`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

DROP TABLE IF EXISTS `jos_sb_users`;
CREATE TABLE `jos_sb_users` (
  `userid` int(11) NOT NULL default '0',
  `view` varchar(8) NOT NULL default 'flat',
  `signature` text,
  `moderator` int(11) default '0',
  `ordering` int(11) default '0',
  `posts` int(11) default '0',
  `avatar` varchar(50) default NULL,
  `karma` int(11) default '0',
  `karma_time` int(11) default '0',
  PRIMARY KEY  (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;


INSERT INTO `jos_components` VALUES (COM_NEWID,'Форум Joomlaboard','option=com_joomlaboard',0,0,'option=com_joomlaboard','Форум Joomlaboard','com_joomlaboard',0,'../administrator/components/com_joomlaboard/images/sbmenu.png',0,'');
 
INSERT INTO `jos_mambots` VALUES (MAM_NEWID,'Обсуждения на форуме','jbdiscussbot','content',0,0,0,0,0,0,'0000-00-00 00:00:00','');
 
INSERT INTO `jos_modules` VALUES (MOD_NEWID,'Последние темы','',99,'left',0,'0000-00-00 00:00:00',0,'mod_jb_last_subjects',0,0,1,'',0,0);
 
INSERT INTO `jos_modules_menu` VALUES (MOD_NEWID,0);
 

INSERT INTO `jos_sb_config` VALUES ('board_title','Форум');
INSERT INTO `jos_sb_config` VALUES ('email','change@me.com');
INSERT INTO `jos_sb_config` VALUES ('board_offline','0');
INSERT INTO `jos_sb_config` VALUES ('board_ofset','7');
INSERT INTO `jos_sb_config` VALUES ('offline_message','<h2>Форум временно закрыт на обслуживание.</h2>\r\n\r\nЗайдите позже!');
INSERT INTO `jos_sb_config` VALUES ('default_view','flat');
INSERT INTO `jos_sb_config` VALUES ('enableRSS','1');
INSERT INTO `jos_sb_config` VALUES ('enablePDF','0');
INSERT INTO `jos_sb_config` VALUES ('threads_per_page','15');
INSERT INTO `jos_sb_config` VALUES ('messages_per_page','6');
INSERT INTO `jos_sb_config` VALUES ('showHistory','1');
INSERT INTO `jos_sb_config` VALUES ('historyLimit','6');
INSERT INTO `jos_sb_config` VALUES ('showNew','1');
INSERT INTO `jos_sb_config` VALUES ('newChar','!');
INSERT INTO `jos_sb_config` VALUES ('disemoticons','0');
INSERT INTO `jos_sb_config` VALUES ('template','default');
INSERT INTO `jos_sb_config` VALUES ('rtewidth','450');
INSERT INTO `jos_sb_config` VALUES ('rteheight','300');
INSERT INTO `jos_sb_config` VALUES ('enableRulesPage','1');
INSERT INTO `jos_sb_config` VALUES ('enableStatsPage','0');
INSERT INTO `jos_sb_config` VALUES ('enableForumJump','1');
INSERT INTO `jos_sb_config` VALUES ('username','1');
INSERT INTO `jos_sb_config` VALUES ('askemail','0');
INSERT INTO `jos_sb_config` VALUES ('showemail','0');
INSERT INTO `jos_sb_config` VALUES ('showstats','1');
INSERT INTO `jos_sb_config` VALUES ('postStats','1');
INSERT INTO `jos_sb_config` VALUES ('statsColor','9');
INSERT INTO `jos_sb_config` VALUES ('showkarma','1');
INSERT INTO `jos_sb_config` VALUES ('useredit','1');
INSERT INTO `jos_sb_config` VALUES ('editMarkUp','1');
INSERT INTO `jos_sb_config` VALUES ('allowsubscriptions','1');
INSERT INTO `jos_sb_config` VALUES ('wrap','100');
INSERT INTO `jos_sb_config` VALUES ('maxSubject','50');
INSERT INTO `jos_sb_config` VALUES ('maxSig','300');
INSERT INTO `jos_sb_config` VALUES ('regonly','0');
INSERT INTO `jos_sb_config` VALUES ('changename','0');
INSERT INTO `jos_sb_config` VALUES ('pubwrite','1');
INSERT INTO `jos_sb_config` VALUES ('floodprotection','0');
INSERT INTO `jos_sb_config` VALUES ('mailmod','1');
INSERT INTO `jos_sb_config` VALUES ('allowAvatar','1');
INSERT INTO `jos_sb_config` VALUES ('allowAvatarUpload','1');
INSERT INTO `jos_sb_config` VALUES ('allowAvatarGallery','1');
INSERT INTO `jos_sb_config` VALUES ('avatarHeight','70');
INSERT INTO `jos_sb_config` VALUES ('avatarWidth','70');
INSERT INTO `jos_sb_config` VALUES ('avatarSize','40');
INSERT INTO `jos_sb_config` VALUES ('allowImageUpload','0');
INSERT INTO `jos_sb_config` VALUES ('allowImageRegUpload','1');
INSERT INTO `jos_sb_config` VALUES ('imageHeight','499');
INSERT INTO `jos_sb_config` VALUES ('imageWidth','499');
INSERT INTO `jos_sb_config` VALUES ('imageSize','50');
INSERT INTO `jos_sb_config` VALUES ('allowFileUpload','0');
INSERT INTO `jos_sb_config` VALUES ('allowFileRegUpload','1');
INSERT INTO `jos_sb_config` VALUES ('fileTypes','zip,txt,doc,gz');
INSERT INTO `jos_sb_config` VALUES ('fileSize','65');
INSERT INTO `jos_sb_config` VALUES ('showranking','1');
INSERT INTO `jos_sb_config` VALUES ('rankimages','1');
INSERT INTO `jos_sb_config` VALUES ('rank1','5');
INSERT INTO `jos_sb_config` VALUES ('rank1txt','Новичек');
INSERT INTO `jos_sb_config` VALUES ('rank2','10');
INSERT INTO `jos_sb_config` VALUES ('rank2txt','Смотрящий');
INSERT INTO `jos_sb_config` VALUES ('rank3','20');
INSERT INTO `jos_sb_config` VALUES ('rank3txt','Ученик');
INSERT INTO `jos_sb_config` VALUES ('rank4','40');
INSERT INTO `jos_sb_config` VALUES ('rank4txt','Специалист');
INSERT INTO `jos_sb_config` VALUES ('rank5','50');
INSERT INTO `jos_sb_config` VALUES ('rank5txt','Эксперт');
INSERT INTO `jos_sb_config` VALUES ('rank6txt','Мастер');
INSERT INTO `jos_sb_config` VALUES ('avatar_src','sb');
INSERT INTO `jos_sb_config` VALUES ('pm_component','no');
INSERT INTO `jos_sb_config` VALUES ('cb_profile','0');
INSERT INTO `jos_sb_config` VALUES ('badwords','0');
INSERT INTO `jos_sb_config` VALUES ('discussBot','1');
INSERT INTO `jos_sb_config` VALUES ('version','\"Русская версия\"');


INSERT INTO `jos_sb_smileys` VALUES (1,'B)','cool.png','cool-grey.png',1);
INSERT INTO `jos_sb_smileys` VALUES (8,';)','wink.png','wink-grey.png',1);
INSERT INTO `jos_sb_smileys` VALUES (3,':)','smile.png','smile-grey.png',1);
INSERT INTO `jos_sb_smileys` VALUES (10,':P','tongue.png','tongue-grey.png',1);
INSERT INTO `jos_sb_smileys` VALUES (6,':laugh:','laughing.png','laughing-grey.png',1);
INSERT INTO `jos_sb_smileys` VALUES (17,':ohmy:','shocked.png','shocked-grey.png',1);
INSERT INTO `jos_sb_smileys` VALUES (22,':sick:','sick.png','sick-grey.png',1);
INSERT INTO `jos_sb_smileys` VALUES (14,':angry:','angry.png','angry-grey.png',1);
INSERT INTO `jos_sb_smileys` VALUES (25,':blink:','blink.png','blink-grey.png',1);
INSERT INTO `jos_sb_smileys` VALUES (2,':(','sad.png','sad-grey.png',1);
INSERT INTO `jos_sb_smileys` VALUES (16,':unsure:','unsure.png','unsure-grey.png',1);
INSERT INTO `jos_sb_smileys` VALUES (27,':kiss:','kissing.png','kissing-grey.png',1);
INSERT INTO `jos_sb_smileys` VALUES (29,':woohoo:','w00t.png','w00t-grey.png',1);
INSERT INTO `jos_sb_smileys` VALUES (21,':lol:','grin.png','grin-grey.png',1);
INSERT INTO `jos_sb_smileys` VALUES (23,':silly:','silly.png','silly-grey.png',1);
INSERT INTO `jos_sb_smileys` VALUES (35,':pinch:','pinch.png','pinch-grey.png',1);
INSERT INTO `jos_sb_smileys` VALUES (30,':side:','sideways.png','sideways-grey.png',1);
INSERT INTO `jos_sb_smileys` VALUES (34,':whistle:','whistling.png','whistling-grey.png',1);
INSERT INTO `jos_sb_smileys` VALUES (33,':evil:','devil.png','devil-grey.png',1);
INSERT INTO `jos_sb_smileys` VALUES (31,':S','dizzy.png','dizzy-grey.png',1);
INSERT INTO `jos_sb_smileys` VALUES (26,':blush:','blush.png','blush-grey.png',1);
INSERT INTO `jos_sb_smileys` VALUES (7,':cheer:','cheerful.png','cheerful-grey.png',1);
INSERT INTO `jos_sb_smileys` VALUES (18,':huh:','wassat.png','wassat-grey.png',1);
INSERT INTO `jos_sb_smileys` VALUES (19,':dry:','ermm.png','ermm-grey.png',1);
INSERT INTO `jos_sb_smileys` VALUES (4,':-)','smile.png','smile-grey.png',0);
INSERT INTO `jos_sb_smileys` VALUES (5,':-(','sad.png','sad-grey.png',0);
INSERT INTO `jos_sb_smileys` VALUES (9,';-)','wink.png','wink-grey.png',0);
INSERT INTO `jos_sb_smileys` VALUES (37,':D','laughing.png','laughing-grey.png',0);
INSERT INTO `jos_sb_smileys` VALUES (12,':X','sick.png','sick-grey.png',0);
INSERT INTO `jos_sb_smileys` VALUES (13,':x','sick.png','sick-grey.png',0);
INSERT INTO `jos_sb_smileys` VALUES (15,':mad:','angry.png','angry-grey.png',0);
INSERT INTO `jos_sb_smileys` VALUES (20,':ermm:','ermm.png','ermm-grey.png',0);
INSERT INTO `jos_sb_smileys` VALUES (24,':y32b4:','silly.png','silly-grey.png',0);
INSERT INTO `jos_sb_smileys` VALUES (28,':rolleyes:','blink.png','blink-grey.png',0);
INSERT INTO `jos_sb_smileys` VALUES (32,':s','dizzy.png','dizzy-grey.png',0);
INSERT INTO `jos_sb_smileys` VALUES (36,':p','tongue.png','tongue-grey.png',0);
