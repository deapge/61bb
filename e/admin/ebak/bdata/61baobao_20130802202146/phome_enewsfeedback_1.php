<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsfeedback`;");
E_C("CREATE TABLE `phome_enewsfeedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bid` smallint(6) NOT NULL DEFAULT '0',
  `title` varchar(120) NOT NULL DEFAULT '',
  `message` text NOT NULL,
  `name` varchar(30) NOT NULL DEFAULT '',
  `email` varchar(80) NOT NULL DEFAULT '',
  `call` varchar(30) NOT NULL DEFAULT '',
  `homepage` varchar(160) NOT NULL DEFAULT '',
  `company` varchar(80) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `saytime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `job` varchar(36) NOT NULL DEFAULT '',
  `ip` varchar(20) NOT NULL DEFAULT '',
  `filepath` varchar(20) NOT NULL DEFAULT '',
  `filename` text NOT NULL,
  `userid` int(11) NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `gameid` varchar(255) NOT NULL DEFAULT '',
  `causes` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `bid` (`bid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsfeedback` values('1','1','2','2','222','2222','22','22','22','2','2011-07-17 11:35:00','22','119.100.196.208','','','0','','','','');");
E_D("replace into `phome_enewsfeedback` values('2','1','反馈--飞哥与小佛建塔','','null','','','','','','2012-04-12 21:59:47','','110.83.31.115','','','0','','','','');");

@include("../../inc/footer.php");
?>