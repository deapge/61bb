<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewstagsclass`;");
E_C("CREATE TABLE `phome_enewstagsclass` (
  `classid` smallint(6) NOT NULL AUTO_INCREMENT,
  `classname` varchar(60) NOT NULL DEFAULT '',
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewstagsclass` values('1','休闲');");
E_D("replace into `phome_enewstagsclass` values('2','益智');");
E_D("replace into `phome_enewstagsclass` values('3','动作');");
E_D("replace into `phome_enewstagsclass` values('4','射击');");
E_D("replace into `phome_enewstagsclass` values('5','冒险');");
E_D("replace into `phome_enewstagsclass` values('6','体育');");
E_D("replace into `phome_enewstagsclass` values('7','战争');");
E_D("replace into `phome_enewstagsclass` values('8','换装');");
E_D("replace into `phome_enewstagsclass` values('9','儿童');");
E_D("replace into `phome_enewstagsclass` values('10','解谜');");
E_D("replace into `phome_enewstagsclass` values('11','敏捷');");

@include("../../inc/footer.php");
?>