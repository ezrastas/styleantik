DROP TABLE IF EXISTS `#__zhyandexmaps_maps`;

CREATE TABLE `#__zhyandexmaps_maps` (
  `id` int(11) NOT NULL auto_increment,
  `catid` int(11) NOT NULL default '0',
  `title` varchar(255) NOT NULL default '',
  `width` int(5) NOT NULL default '0',
  `height` int(5) NOT NULL default '0',
  `latitude` varchar(20) NOT NULL default '',
  `longitude` varchar(20) NOT NULL default '',
  `zoom` int(3) NOT NULL default '0',
  `minzoom` int(3) NOT NULL default '1',
  `maxzoom` int(3) NOT NULL default '200',
  `doubleclickzoom` tinyint(1) NOT NULL default '0',
  `scrollwheelzoom` tinyint(1) NOT NULL default '0',
  `zoomcontrol` tinyint(1) NOT NULL default '0',
  `scalecontrol` tinyint(1) NOT NULL default '0',
  `maptype` tinyint(1) NOT NULL default '0',
  `maptypecontrol` tinyint(1) NOT NULL default '0',
  `pmaptypecontrol` tinyint(1) NOT NULL default '0',
  `minimap` tinyint(1) NOT NULL default '0',
  `minimaptype` tinyint(1) NOT NULL default '0',
  `toolbar` tinyint(1) NOT NULL default '0',
  `search` tinyint(1) NOT NULL default '0',
  `traffic` tinyint(1) NOT NULL default '0',
  `trafficlayer` tinyint(1) NOT NULL default '0',
  `trafficprovider` tinyint(1) NOT NULL default '0',
  `balloon` tinyint(1) NOT NULL default '0',
  `description` text NOT NULL,
  `markergroupcontrol` tinyint(1) NOT NULL default '0',
  `markergroupwidth` int(5) NOT NULL default '20',
  `markergroupshowicon` tinyint(1) NOT NULL default '0',
  `markergroupcss` int(5) NOT NULL default '0',
  `published` tinyint(1) NOT NULL default '0',
  `kmllayer` text NOT NULL,
  `kmllayerkml` text NOT NULL,
  `kmllayergpx` text NOT NULL,
  `markergroupdesc1` text NOT NULL,
  `markergroupdesc2` text NOT NULL,
  `markergrouptitle` varchar(255) NOT NULL default '',
  `markergroupsep1` tinyint(1) NOT NULL default '0',
  `markergroupsep2` tinyint(1) NOT NULL default '0',
  `zoomcontrolpos` tinyint(1) NOT NULL default '0',
  `scalecontrolpos` tinyint(1) NOT NULL default '0',
  `maptypecontrolpos` tinyint(1) NOT NULL default '0',
  `pmaptypecontrolpos` tinyint(1) NOT NULL default '2',
  `minimappos` tinyint(1) NOT NULL default '0',
  `toolbarpos` tinyint(1) NOT NULL default '0',
  `searchpos` tinyint(1) NOT NULL default '0',
  `trafficpos` tinyint(1) NOT NULL default '0',
  `zoomcontrolofsx` int(5) NOT NULL default '0',
  `scalecontrolofsx` int(5) NOT NULL default '0',
  `maptypecontrolofsx` int(5) NOT NULL default '0',
  `pmaptypecontrolofsx` int(5) NOT NULL default '80',
  `minimapofsx` int(5) NOT NULL default '0',
  `toolbarofsx` int(5) NOT NULL default '0',
  `searchofsx` int(5) NOT NULL default '0',
  `trafficofsx` int(5) NOT NULL default '0',
  `zoomcontrolofsy` int(5) NOT NULL default '0',
  `scalecontrolofsy` int(5) NOT NULL default '0',
  `maptypecontrolofsy` int(5) NOT NULL default '0',
  `pmaptypecontrolofsy` int(5) NOT NULL default '40',
  `minimapofsy` int(5) NOT NULL default '0',
  `toolbarofsy` int(5) NOT NULL default '0',
  `searchofsy` int(5) NOT NULL default '0',
  `trafficofsy` int(5) NOT NULL default '0',
  `markermanager` tinyint(1) NOT NULL default '0',
  `headerhtml` text NOT NULL,
  `footerhtml` text NOT NULL,
  `headersep` tinyint(1) NOT NULL default '0',
  `footersep` tinyint(1) NOT NULL default '0',
  `usermarkers` tinyint(1) NOT NULL default '0',
  `usermarkersfilter` tinyint(1) NOT NULL default '0',
  `usermarkerspublished` tinyint(1) NOT NULL default '0',
  `usermarkersicon` tinyint(1) NOT NULL default '1',
  `usercontact` tinyint(1) NOT NULL default '0',
  `usercontactpublished` tinyint(1) NOT NULL default '0',
  `findcontrol` tinyint(1) NOT NULL default '0',
  `findpos` int(5) NOT NULL default '0',
  `findwidth` int(5) NOT NULL default '0',
  `findroute` tinyint(1) NOT NULL default '0',
  `autoposition` tinyint(1) NOT NULL default '0',
  `autopositionpos` int(5) NOT NULL default '0',
  `autopositionposofsx` int(5) NOT NULL default '0',
  `autopositionposofsy` int(5) NOT NULL default '0',
  `autopositioncontrol` tinyint(1) NOT NULL default '0',
  `autopositionbutton` tinyint(1) NOT NULL default '0',
  `useruser` tinyint(1) NOT NULL default '0',
  `rightbuttonmagnifier` tinyint(1) NOT NULL default '0',
  `magnifier` tinyint(1) NOT NULL default '0',
  `draggable` tinyint(1) NOT NULL default '1',
  `gridcoordinates` tinyint(1) NOT NULL default '0',
  `markerlist` tinyint(1) NOT NULL default '0',
  `markerlistpos` tinyint(1) NOT NULL default '0',
  `markerlistbuttonpos` tinyint(1) NOT NULL default '0',
  `markerlistposofsx` int(5) NOT NULL default '0',
  `markerlistposofsy` int(5) NOT NULL default '0',  
  `markerlistwidth` int(5) NOT NULL default '0',
  `markerlistheight` int(5) NOT NULL default '0',
  `markerlistbgcolor` text NOT NULL,
  `markerlistaction` tinyint(1) NOT NULL default '0',
  `markerlistcontent` tinyint(1) NOT NULL default '0',
  `markerlistbuttontype` tinyint(1) NOT NULL default '0',
  `css2load` text NOT NULL,
  `cssclassname` text NOT NULL,
  `preseticontype` varchar(250) NOT NULL default '',
  `markercluster` tinyint(1) NOT NULL default '0',
  `markerclustergroup` tinyint(1) NOT NULL default '0',
  `clusterzoom` int(3) NOT NULL default '10',
  `clusterdisableclickzoom` tinyint(1) NOT NULL default '0',
  `clustersynchadd` tinyint(1) NOT NULL default '0',
  `clusterorderalphabet` tinyint(1) NOT NULL default '0',
  `clustergridsize` int(5) NOT NULL default '64',
  `clusterminclustersize` int(5) NOT NULL default '2',
  `lang` varchar(20) NOT NULL default '',
  `mapbounds` varchar(100) NOT NULL default '',
  `custommaptype` tinyint(1) NOT NULL default '0',
  `custommaptypelist` text NOT NULL,
  `openstreet` tinyint(1) NOT NULL default '0',
  `showbelong` tinyint(1) NOT NULL default '1',
  `useajax` tinyint(1) NOT NULL default '0',
  `useajaxobject` tinyint(1) NOT NULL default '0',
  `ajaxbufferplacemark` int(5) NOT NULL default '0',
  `ajaxgetplacemark` tinyint(1) NOT NULL default '0',
  `fullscreencontrol` tinyint(1) NOT NULL default '1',
  `fullscreenpos` tinyint(1) NOT NULL default '0',
  `fullscreenposofsx` int(5) NOT NULL default '0',
  `fullscreenposofsy` int(5) NOT NULL default '0',
  `rulercontrol` tinyint(1) NOT NULL default '0',
  `rulerpos` tinyint(1) NOT NULL default '0',
  `rulerposofsx` int(5) NOT NULL default '0',
  `rulerposofsy` int(5) NOT NULL default '0',
  `suppressmapopenblock` tinyint(1) NOT NULL default '0',
  `params` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM CHARACTER SET `utf8`;

DROP TABLE IF EXISTS `#__zhyandexmaps_markers`;

CREATE TABLE `#__zhyandexmaps_markers` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `catid` int(11) NOT NULL default '0',
  `title` varchar(250) NOT NULL default '',
  `latitude` varchar(20) NOT NULL default '',
  `longitude` varchar(20) NOT NULL default '',
  `mapid` int(11) NOT NULL default '0',
  `openbaloon` tinyint(1) NOT NULL default '0',
  `icontype` varchar(250) NOT NULL default '',
  `description` text NOT NULL,
  `descriptionhtml` text NOT NULL,
  `hrefsite` text NOT NULL,
  `hrefimage` text NOT NULL,
  `hrefsitename` text NOT NULL,
  `markergroup` int(11) NOT NULL default '0',
  `showiconcontent` tinyint(1) NOT NULL default '0',
  `published` tinyint(1) NOT NULL default '0',
  `createdbyuser` int(11) NOT NULL default '0',
  `markercontent` tinyint(1) NOT NULL default '0',
  `userprotection` tinyint(1) NOT NULL default '0',
  `contactid` int(11) NOT NULL default '0',
  `iconofsetx` tinyint(1) NOT NULL default '0',
  `iconofsety` tinyint(1) NOT NULL default '0',
  `showcontact` tinyint(1) NOT NULL default '0',
  `showuser` tinyint(1) NOT NULL default '0',
  `publish_up` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_down` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `actionbyclick` tinyint(1) NOT NULL default '1',
  `zoombyclick` int(3) NOT NULL default '100',
  `preseticontype` varchar(250) NOT NULL default '',
  `presettitle` varchar(250) NOT NULL default '',
  `params` text NOT NULL,
  `attribute1` text NOT NULL,
  `attribute2` text NOT NULL,
  `attribute3` text NOT NULL,
  `attribute4` text NOT NULL,
  `attribute5` text NOT NULL,
  `attribute6` text NOT NULL,
  `attribute7` text NOT NULL,
  `attribute8` text NOT NULL,
  `attribute9` text NOT NULL,
  `includeinlist` tinyint(1) NOT NULL default '1',
  `access` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM CHARACTER SET `utf8`;

DROP TABLE IF EXISTS `#__zhyandexmaps_routers`;

CREATE TABLE `#__zhyandexmaps_routers` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `catid` int(11) NOT NULL default '0',
  `title` varchar(250) NOT NULL default '',
  `route` text NOT NULL,
  `kmllayerymapsml` text NOT NULL,
  `kmllayerkml` text NOT NULL,
  `kmllayergpx` text NOT NULL,
  `mapid` int(11) NOT NULL default '0',
  `description` text NOT NULL,
  `published` tinyint(1) NOT NULL default '0',
  `routebymarker` text NOT NULL,
  `showpanel` tinyint(1) NOT NULL default '0',
  `showpaneltotal` tinyint(1) NOT NULL default '1',
  `showdescription` tinyint(1) NOT NULL default '0',  
  `descriptionhtml` text NOT NULL,
  `showtype` tinyint(1) NOT NULL default '0',
  `checktraffic` tinyint(1) NOT NULL default '0',
  `hidewaypoints` tinyint(1) NOT NULL default '0',
  `publish_up` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_down` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `params` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM CHARACTER SET `utf8`;


DROP TABLE IF EXISTS `#__zhyandexmaps_paths`;

CREATE TABLE `#__zhyandexmaps_paths` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `catid` int(11) NOT NULL default '0',
  `title` varchar(250) NOT NULL default '',
  `width` tinyint(1) NOT NULL default '0',
  `color` varchar(250) NOT NULL default '',
  `path` text NOT NULL,
  `mapid` int(11) NOT NULL default '0',
  `description` text NOT NULL,
  `descriptionhtml` text NOT NULL,
  `opacity` varchar(20) NOT NULL default '',
  `infowincontent` tinyint(1) NOT NULL default '0',
  `actionbyclick` tinyint(1) NOT NULL default '0',
  `objecttype` tinyint(1) NOT NULL default '0',
  `fillcolor` varchar(250) NOT NULL default '',
  `fillopacity` varchar(20) NOT NULL default '',
  `radius` varchar(250) NOT NULL default '',
  `geodesic` tinyint(1) NOT NULL default '0',
  `published` tinyint(1) NOT NULL default '0',
  `publish_up` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_down` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `fillimageurl` text NOT NULL,
  `params` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM CHARACTER SET `utf8`;

DROP TABLE IF EXISTS `#__zhyandexmaps_markergroups`;

CREATE TABLE `#__zhyandexmaps_markergroups` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `catid` int(11) NOT NULL default '0',
  `title` varchar(250) NOT NULL default '',
  `icontype` varchar(250) NOT NULL default '',
  `iconofsetx` tinyint(1) NOT NULL default '0',
  `iconofsety` tinyint(1) NOT NULL default '0',
  `description` text NOT NULL,
  `overridemarkericon` tinyint(1) NOT NULL default '0',
  `activeincluster` tinyint(1) NOT NULL default '0',
  `markermanagerminzoom` int(3) NOT NULL default '1',
  `markermanagermaxzoom` int(3) NOT NULL default '17',
  `published` tinyint(1) NOT NULL default '0',
  `publish_up` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_down` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `params` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM CHARACTER SET `utf8`;

DROP TABLE IF EXISTS `#__zhyandexmaps_maptypes`;

CREATE TABLE `#__zhyandexmaps_maptypes` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `catid` int(11) NOT NULL default '0',
  `title` varchar(250) NOT NULL default '',
  `description` text NOT NULL,
  `published` tinyint(1) NOT NULL default '0',
  `gettileurl` text NOT NULL,
  `notfoundtileurl` text NOT NULL,
  `tilewidth` int(5) NOT NULL default '256',
  `tileheight` int(5) NOT NULL default '256',
  `opacity` varchar(20) NOT NULL default '',
  `projection` int(3) NOT NULL default '0',
  `publish_up` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_down` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `transparent` tinyint(1) NOT NULL default '0',
  `overlay` tinyint(1) NOT NULL default '0',
  `minzoom` int(3) NOT NULL default '1',
  `maxzoom` int(3) NOT NULL default '23',
  `params` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM CHARACTER SET `utf8`;


ALTER TABLE `#__zhyandexmaps_maps` ADD INDEX `idx_catid` (`catid`);

ALTER TABLE `#__zhyandexmaps_markers` ADD INDEX `idx_catid` (`catid`);
ALTER TABLE `#__zhyandexmaps_markers` ADD INDEX `idx_mapid` (`mapid`);
ALTER TABLE `#__zhyandexmaps_markers` ADD INDEX `idx_markergroup` (`markergroup`);
ALTER TABLE `#__zhyandexmaps_markers` ADD INDEX `idx_createdbyuser` (`createdbyuser`);
ALTER TABLE `#__zhyandexmaps_markers` ADD INDEX `idx_access` (`access`);

ALTER TABLE `#__zhyandexmaps_routers` ADD INDEX `idx_catid` (`catid`);
ALTER TABLE `#__zhyandexmaps_routers` ADD INDEX `idx_mapid` (`mapid`);

ALTER TABLE `#__zhyandexmaps_paths` ADD INDEX `idx_catid` (`catid`);
ALTER TABLE `#__zhyandexmaps_paths` ADD INDEX `idx_mapid` (`mapid`);

ALTER TABLE `#__zhyandexmaps_markergroups` ADD INDEX `idx_catid` (`catid`);

ALTER TABLE `#__zhyandexmaps_maptypes` ADD INDEX `idx_catid` (`catid`);


