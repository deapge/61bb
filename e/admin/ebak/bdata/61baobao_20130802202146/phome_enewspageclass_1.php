<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewspageclass`;");
E_C("CREATE TABLE `phome_enewspageclass` (
  `classid` smallint(6) NOT NULL AUTO_INCREMENT,
  `classname` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewspageclass` values('1','js');");
E_D("replace into `phome_enewspageclass` values('2','css');");
E_D("replace into `phome_enewspageclass` values('3','htm');");
E_D("replace into `phome_enewspageclass` values('4','php');");

@include("../../inc/footer.php");
?>