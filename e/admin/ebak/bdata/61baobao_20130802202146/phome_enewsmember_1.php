<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsmember`;");
E_C("CREATE TABLE `phome_enewsmember` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `rnd` varchar(30) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `registertime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `userfen` int(11) NOT NULL DEFAULT '0',
  `userdate` int(11) NOT NULL DEFAULT '0',
  `money` float(11,2) NOT NULL DEFAULT '0.00',
  `zgroupid` smallint(6) NOT NULL DEFAULT '0',
  `havemsg` tinyint(1) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `salt` varchar(8) NOT NULL DEFAULT '',
  `connect2qzone_openid` varchar(255) NOT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsmember` values('3','test','96e79218965eb72c92a549dd5a330112','V2ueh7ZcsvUt','ssdfs@sdads.com','2012-02-29 18:23:04','1','0','0','0.00','0','0','1','','');");

@include("../../inc/footer.php");
?>