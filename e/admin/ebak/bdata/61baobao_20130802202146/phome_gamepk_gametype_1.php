<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_gamepk_gametype`;");
E_C("CREATE TABLE `phome_gamepk_gametype` (
  `gtypeid` smallint(6) unsigned NOT NULL AUTO_INCREMENT COMMENT '游戏分类ID',
  `gtypesid` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '游戏分类显示顺序ID',
  `gtypename` varchar(15) NOT NULL COMMENT '游戏分类名称',
  `gtypeicon` varchar(255) NOT NULL DEFAULT 'gif' COMMENT '游戏分类图片',
  `gtypeexttag` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '游戏分类扩展标志位',
  PRIMARY KEY (`gtypeid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `phome_gamepk_gametype` values('1','0','益智','png','0');");
E_D("replace into `phome_gamepk_gametype` values('2','0','敏捷','png','0');");
E_D("replace into `phome_gamepk_gametype` values('3','0','体育','png','0');");
E_D("replace into `phome_gamepk_gametype` values('4','0','射击','png','0');");
E_D("replace into `phome_gamepk_gametype` values('5','0','冒险','png','0');");
E_D("replace into `phome_gamepk_gametype` values('6','0','搞怪','png','0');");

@include("../../inc/footer.php");
?>