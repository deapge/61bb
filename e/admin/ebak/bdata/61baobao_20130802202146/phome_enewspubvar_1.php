<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewspubvar`;");
E_C("CREATE TABLE `phome_enewspubvar` (
  `varid` smallint(6) NOT NULL AUTO_INCREMENT,
  `myvar` varchar(60) NOT NULL DEFAULT '',
  `varname` varchar(20) NOT NULL DEFAULT '',
  `varvalue` text NOT NULL,
  `varsay` varchar(255) NOT NULL DEFAULT '',
  `myorder` smallint(6) NOT NULL DEFAULT '0',
  `classid` smallint(6) NOT NULL DEFAULT '0',
  `tocache` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`varid`),
  UNIQUE KEY `varname` (`varname`),
  KEY `classid` (`classid`),
  KEY `tocache` (`tocache`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewspubvar` values('1','domain','域名','haoid.cn','不要加www.,例如cnymk.com，不是www.cnymk.com','0','0','1');");
E_D("replace into `phome_enewspubvar` values('3','beian','网站备案号','www.haoid.cn','','0','0','1');");
E_D("replace into `phome_enewspubvar` values('4','www.92game.net.ming','网站名','儿歌网','','0','0','1');");
E_D("replace into `phome_enewspubvar` values('5','siteurl','网址','127.0.0.1','','0','0','1');");
E_D("replace into `phome_enewspubvar` values('6','sitename_simple','网站简称','好站长资源儿歌网','','0','0','1');");
E_D("replace into `phome_enewspubvar` values('9','baidushareID','百度分享ID','14351','','0','0','1');");

@include("../../inc/footer.php");
?>