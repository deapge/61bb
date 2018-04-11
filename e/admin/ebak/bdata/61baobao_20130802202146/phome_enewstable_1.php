<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewstable`;");
E_C("CREATE TABLE `phome_enewstable` (
  `tid` smallint(6) NOT NULL AUTO_INCREMENT,
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `tname` varchar(60) NOT NULL DEFAULT '',
  `tsay` text NOT NULL,
  `isdefault` tinyint(1) NOT NULL DEFAULT '0',
  `datatbs` text NOT NULL,
  `deftb` varchar(6) NOT NULL DEFAULT '',
  `yhid` smallint(6) NOT NULL DEFAULT '0',
  `mid` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewstable` values('4','game','儿歌系统数据表','儿歌系统数据表','1',',1,','1','0','4');");
E_D("replace into `phome_enewstable` values('5','news','新闻系统数据表','新闻系统数据表','0',',1,','1','0','5');");

@include("../../inc/footer.php");
?>