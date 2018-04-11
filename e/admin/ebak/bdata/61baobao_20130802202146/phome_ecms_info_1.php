<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_info`;");
E_C("CREATE TABLE `phome_ecms_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classid` smallint(6) NOT NULL DEFAULT '0',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `newspath` varchar(20) NOT NULL DEFAULT '',
  `keyboard` varchar(160) NOT NULL DEFAULT '',
  `keyid` varchar(255) NOT NULL DEFAULT '',
  `userid` int(11) NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `ztid` varchar(255) NOT NULL DEFAULT '',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `istop` tinyint(1) NOT NULL DEFAULT '0',
  `truetime` int(10) NOT NULL DEFAULT '0',
  `ismember` tinyint(1) NOT NULL DEFAULT '0',
  `dokey` tinyint(1) NOT NULL DEFAULT '0',
  `userfen` smallint(6) NOT NULL DEFAULT '0',
  `isgood` tinyint(1) NOT NULL DEFAULT '0',
  `titlefont` varchar(20) NOT NULL DEFAULT '',
  `titleurl` varchar(200) NOT NULL DEFAULT '',
  `filename` varchar(60) NOT NULL DEFAULT '',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `newstempid` smallint(6) NOT NULL DEFAULT '0',
  `plnum` int(11) NOT NULL DEFAULT '0',
  `firsttitle` tinyint(1) NOT NULL DEFAULT '0',
  `isqf` tinyint(1) NOT NULL DEFAULT '0',
  `totaldown` int(11) NOT NULL DEFAULT '0',
  `title` varchar(200) NOT NULL DEFAULT '',
  `newstime` int(10) NOT NULL DEFAULT '0',
  `titlepic` varchar(200) NOT NULL DEFAULT '',
  `closepl` tinyint(1) NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  `lastdotime` int(10) NOT NULL DEFAULT '0',
  `haveaddfen` tinyint(1) NOT NULL DEFAULT '0',
  `infopfen` int(11) NOT NULL DEFAULT '0',
  `infopfennum` int(11) NOT NULL DEFAULT '0',
  `votenum` int(11) NOT NULL DEFAULT '0',
  `smalltext` text NOT NULL,
  `myarea` varchar(30) NOT NULL DEFAULT '',
  `stb` varchar(4) NOT NULL DEFAULT '',
  `copyids` varchar(255) NOT NULL DEFAULT '',
  `ttid` smallint(6) NOT NULL DEFAULT '0',
  `infotags` varchar(160) NOT NULL DEFAULT '',
  `ispic` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `checked` (`checked`),
  KEY `newstime` (`newstime`),
  KEY `truetime` (`truetime`),
  KEY `classid` (`classid`),
  KEY `ttid` (`ttid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>