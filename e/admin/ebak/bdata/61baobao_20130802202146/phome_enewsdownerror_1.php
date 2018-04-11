<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsdownerror`;");
E_C("CREATE TABLE `phome_enewsdownerror` (
  `errorid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL DEFAULT '0',
  `errortext` varchar(255) NOT NULL DEFAULT '',
  `errortime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `errorip` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(80) NOT NULL DEFAULT '',
  `classid` smallint(6) NOT NULL DEFAULT '0',
  `cid` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`errorid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsdownerror` values('1','2905','fdsafdsa','2012-07-20 01:20:44','219.144.164.163','fsafds@dssd.com','5','0');");
E_D("replace into `phome_enewsdownerror` values('2','4740','1.播放器内黑屏, 看不到动画或动画框区域空白解决方法：\r\n\r\n（1）.检查网络连接状况，确认网络连接正常. \r\n\r\n（2）.再次刷新页面，在播放器区域会出现FLASH官方版本升级和安装的提示，并包含有下载链接的地址，这时请您点击进入下载页面，根据提示下载安装即可。\r\n\r\n（3）.本站使用Adobe FlashPlayer作为动画播放器，安装或升级Flash最新播放器: \r\n\r\n','2012-08-01 11:44:27','221.206.117.184','1971806271@qq.com','229','0');");
E_D("replace into `phome_enewsdownerror` values('3','4740','法第三法第三埃弗顿撒分倒萨范德萨','2012-08-01 21:14:33','110.83.44.17','测试反馈','229','0');");
E_D("replace into `phome_enewsdownerror` values('4','5527','好像匹配错了','2012-08-26 09:58:49','180.155.127.253','huyouhu@gmail.com','15','0');");

@include("../../inc/footer.php");
?>