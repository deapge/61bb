<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_gamepk_gamerecords`;");
E_C("CREATE TABLE `phome_gamepk_gamerecords` (
  `rid` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `gid` smallint(6) unsigned NOT NULL,
  `uid` mediumint(8) unsigned NOT NULL,
  `gusername` varchar(15) NOT NULL,
  `gscore` varchar(10) NOT NULL,
  `glevel` varchar(10) DEFAULT NULL,
  `gip` char(15) DEFAULT NULL,
  `gdateline` int(10) NOT NULL,
  `gprize` smallint(6) unsigned NOT NULL,
  `gpkprize` smallint(6) unsigned NOT NULL,
  `gnextid` smallint(6) unsigned NOT NULL,
  `gstar` tinyint(1) NOT NULL DEFAULT '0',
  `gstatus` tinyint(1) NOT NULL DEFAULT '0',
  `grexttag` smallint(6) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`rid`),
  KEY `gid` (`gid`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `phome_gamepk_gamerecords` values('1','110','1','admin','7675','0','218.85.14.50','1302769848','0','0','1','0','0','0');");
E_D("replace into `phome_gamepk_gamerecords` values('2','45','1','admin','112','1','218.85.14.50','1302770007','0','0','1','0','0','0');");
E_D("replace into `phome_gamepk_gamerecords` values('3','115','1','admin','0','0','218.85.14.50','1302774348','0','0','1','0','0','0');");
E_D("replace into `phome_gamepk_gamerecords` values('4','105','1','admin','180','2','218.85.14.50','1302775960','0','0','1','0','0','0');");
E_D("replace into `phome_gamepk_gamerecords` values('5','132','1','admin','64','0','218.85.14.50','1302776095','0','0','1','0','0','0');");
E_D("replace into `phome_gamepk_gamerecords` values('6','116','994','test','19','0','218.28.239.170','1302783972','0','0','1','0','0','0');");
E_D("replace into `phome_gamepk_gamerecords` values('7','110','994','test','16012','0','218.28.239.170','1302785380','0','0','1','0','0','0');");
E_D("replace into `phome_gamepk_gamerecords` values('8','106','1','admin','1440','1','60.182.199.160','1303143378','0','0','1','0','0','0');");
E_D("replace into `phome_gamepk_gamerecords` values('9','59','3351','zhang369000','90319','10','219.145.62.250','1306762323','0','0','1','0','0','0');");

@include("../../inc/footer.php");
?>