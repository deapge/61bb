<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_4usky_favs`;");
E_C("CREATE TABLE `phome_4usky_favs` (
  `favid` int(4) NOT NULL AUTO_INCREMENT,
  `typeid` int(4) NOT NULL,
  `userid` int(4) NOT NULL,
  `gameid` int(10) NOT NULL,
  `gamename` varchar(50) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `picurl` varchar(100) DEFAULT NULL,
  `tagid` int(4) DEFAULT NULL,
  `createdate` int(10) DEFAULT NULL,
  PRIMARY KEY (`favid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `phome_4usky_favs` values('4','2','75','42','跑跑卡丁','/game.php?do=view&gc=42','/pk/game/42kadingche/btu.jpg','0','1312768636');");

@include("../../inc/footer.php");
?>