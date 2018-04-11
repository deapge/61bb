<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_gamepk_gamevs`;");
E_C("CREATE TABLE `phome_gamepk_gamevs` (
  `gvid` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `gid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `gname` varchar(50) NOT NULL,
  `gnextid` smallint(6) unsigned NOT NULL DEFAULT '1',
  `gstor` tinyint(1) NOT NULL DEFAULT '0',
  `uid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` varchar(15) NOT NULL,
  `ugscore` varchar(10) DEFAULT NULL,
  `touid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `tousername` varchar(15) NOT NULL,
  `tgscore` varchar(10) DEFAULT NULL,
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  `gstag` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`gvid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>