<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewspagetemp`;");
E_C("CREATE TABLE `phome_enewspagetemp` (
  `tempid` smallint(6) NOT NULL AUTO_INCREMENT,
  `tempname` varchar(30) NOT NULL DEFAULT '',
  `temptext` mediumtext NOT NULL,
  PRIMARY KEY (`tempid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewspagetemp` values('1','关于我们','<!DOCTYPE html PUBLIC \\\\\"-//W3C//DTD XHTML 1.0 Transitional//EN\\\\\" \\\\\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\\\\\">\r\n<html xmlns=\\\\\"http://www.w3.org/1999/xhtml\\\\\">\r\n<head>\r\n<title>[!--pagetitle--]-<?=\$public_r[\\\\''add_sitename_simple\\\\'']?></title>\r\n<meta http-equiv=\\\\\"Content-Type\\\\\" content=\\\\\"text/html; charset=utf-8\\\\\" />\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagetitle--]erge,儿歌，mp3,儿歌下载,英语儿歌,英文儿歌,儿歌童谣,儿歌flash,幼儿儿歌,儿歌大全,宝宝的<?=\$public_r[\\\\''add_sitename_simple\\\\'']?>\\\\\" />\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"<?=\$public_r[\\\\''add_sitename_simple\\\\'']?>提供最新儿歌视听和儿歌下载，包括经典的童谣，儿童FLASH，为儿童打造一个优良是视听环境。\\\\\"/>\r\n<link rel=\\\\\"stylesheet\\\\\" type=\\\\\"text/css\\\\\" href=\\\\\"/css/index.css\\\\\"/>\r\n<script language=\\\\\"javascript\\\\\" src=\\\\\"/js/jquery-1.7.min.js\\\\\"></script>\r\n<script language=\\\\\"javascript\\\\\" src=\\\\\"/js/func.js\\\\\"></script>\r\n<link rel=\\\\\"stylesheet\\\\\" href=\\\\\"/css/colorbox.css\\\\\" type=\\\\\"text/css\\\\\" />\r\n<script language=\\\\\"javascript\\\\\" src=\\\\\"/js/jquery.colorbox.js\\\\\"></script>\r\n<script language=\\\\\"javascript\\\\\" src=\\\\\"/js/xqfunc.js\\\\\"></script>\r\n</head>\r\n<body>\r\n[!--temp.header--]\r\n\r\n<div class=\\\\\"adm_960\\\\\" id=\\\\\"adm\\\\\"><script src=\\\\\"/d/js/acmsd/thea4.js\\\\\"></script></div>\r\n\r\n <div id=\\\\\"content\\\\\">\r\n		<div id=\\\\\"about_us\\\\\">\r\n        	<div class=\\\\\"about_top\\\\\"></div>\r\n            <div class=\\\\\"about_mid\\\\\">\r\n            	<div class=\\\\\"about_left\\\\\">\r\n                	<ul>\r\n                    	<li class=\\\\\"current\\\\\">关于我们</li>\r\n                        <li><a href=\\\\\"contact.html\\\\\">联系我们</a></li>\r\n                        <li><a href=\\\\\"job.html\\\\\">招聘信息</a></li>\r\n                        <li><a href=\\\\\"terms.html\\\\\">服务条款</a></li>\r\n                        <li><a href=\\\\\"privacy.html\\\\\">隐私保护</a></li>\r\n                        <li><a href=\\\\\"ad.html\\\\\">广告服务</a></li>\r\n                        <li><a href=\\\\\"http://my.qqbaobao.com/reg.php\\\\\" target=\\\\\"_blank\\\\\">会员注册</a></li>\r\n                        <li><a href=\\\\\"help.html\\\\\">网站帮助</a></li>\r\n                        <li><a href=\\\\\"map.html\\\\\">网站地图</a></li>\r\n                        <li><a href=\\\\\"link.html\\\\\">友情链接</a></li>\r\n                        <li><a href=\\\\\"upload.html\\\\\">作品投稿</a></li>\r\n                    </ul>\r\n                </div>\r\n                <div class=\\\\\"about_right\\\\\">\r\n                	[!--pagetext--]中国源码库 www.cnymk.com\r\n                </div>\r\n                <div class=\\\\\"c\\\\\"></div>\r\n            </div>\r\n            <div class=\\\\\"about_bottom\\\\\"></div>\r\n        </div>\r\n    </div>    \r\n  </div>\r\n\r\n                \r\n<!-- 尾部开始 --> \r\n[!--temp.footer--] \r\n<!-- 尾部结束 -->\r\n</body>\r\n</html>');");

@include("../../inc/footer.php");
?>