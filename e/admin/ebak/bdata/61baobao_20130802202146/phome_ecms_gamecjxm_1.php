<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_gamecjxm`;");
E_C("CREATE TABLE `phome_ecms_gamecjxm` (
  `id` int(4) NOT NULL,
  `cjxm` varchar(10) CHARACTER SET gbk NOT NULL,
  `jsurl` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `jscjbody` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `tagbody` varchar(200) CHARACTER SET gbk DEFAULT NULL,
  `swfurl` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `swfcjbody` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `gamename` varchar(100) DEFAULT NULL,
  `gamesize` varchar(200) CHARACTER SET gbk DEFAULT NULL,
  `gameclass` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `gameintro` varchar(500) DEFAULT NULL,
  `gameoperation` varchar(100) DEFAULT NULL,
  `gamespic` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `gamebpic` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `gameheight` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `gamewidth` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `gamepath` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `tagpic` varchar(100) DEFAULT NULL,
  `tagcjbody` varchar(100) DEFAULT NULL,
  `tagintro` varchar(100) DEFAULT NULL,
  `gxurl` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `gxbody` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `gxfg` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `gxid` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_gamecjxm` values('1','7k7k','http://www.7k7k.com/flash/[ID].htm','<div class=\"gate_c\">\$<div class=\"gate_b\"></div>','<li class=\"tag\">标签：\$</li>','http://www.7k7k.com/swf/[ID].htm','document.domain = \"7k7k.com\"\$<div id=\"vl\" style=\"\">','<h1>\$</h1>','大小：\$</li>','_gameclass = \$,','小游戏说明：</span>\$</p>','<ul><li>操作方法：</li>\$</ul>','_gamepic = \"\$\",','_gamebigpic = \"\$\",','_gameheight = \$,','_gamewidth = \$,','_gamepath = \"\$\",','<img src=\"\$\" />\r\n','<div class=\"heji_pic\">\$<div class=\"heji_detail_main\">','<div class=\"cont\"><p>\$</p></div>\r\n','http://www.7k7k.com/top/new.htm','<ul>\$</ul>','</li>','<a href=\"/flash/\$.htm\"');");

@include("../../inc/footer.php");
?>