<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_infoclass_game`;");
E_C("CREATE TABLE `phome_ecms_infoclass_game` (
  `classid` int(11) NOT NULL DEFAULT '0',
  `zz_title` text NOT NULL,
  `z_title` varchar(255) NOT NULL DEFAULT '',
  `qz_title` varchar(255) NOT NULL DEFAULT '',
  `save_title` varchar(10) NOT NULL DEFAULT '',
  `zz_titlepic` text NOT NULL,
  `z_titlepic` varchar(255) NOT NULL DEFAULT '',
  `qz_titlepic` varchar(255) NOT NULL DEFAULT '',
  `save_titlepic` varchar(10) NOT NULL DEFAULT '',
  `zz_newstime` text NOT NULL,
  `z_newstime` varchar(255) NOT NULL DEFAULT '',
  `qz_newstime` varchar(255) NOT NULL DEFAULT '',
  `save_newstime` varchar(10) NOT NULL DEFAULT '',
  `zz_pinyin` text NOT NULL,
  `z_pinyin` varchar(255) NOT NULL,
  `qz_pinyin` varchar(255) NOT NULL,
  `save_pinyin` varchar(10) NOT NULL,
  `zz_star` text NOT NULL,
  `z_star` varchar(255) NOT NULL DEFAULT '',
  `qz_star` text NOT NULL,
  `save_star` varchar(10) NOT NULL DEFAULT '',
  `zz_filesize` text NOT NULL,
  `z_filesize` varchar(255) NOT NULL DEFAULT '',
  `qz_filesize` text NOT NULL,
  `save_filesize` varchar(10) NOT NULL DEFAULT '',
  `zz_flashurl` text NOT NULL,
  `z_flashurl` varchar(255) NOT NULL DEFAULT '',
  `qz_flashurl` text NOT NULL,
  `save_flashurl` varchar(10) NOT NULL DEFAULT '',
  `zz_width` text NOT NULL,
  `z_width` varchar(255) NOT NULL DEFAULT '',
  `qz_width` text NOT NULL,
  `save_width` varchar(10) NOT NULL DEFAULT '',
  `zz_height` text NOT NULL,
  `z_height` varchar(255) NOT NULL DEFAULT '',
  `qz_height` text NOT NULL,
  `save_height` varchar(10) NOT NULL DEFAULT '',
  `zz_flashsay` text NOT NULL,
  `z_flashsay` varchar(255) NOT NULL DEFAULT '',
  `qz_flashsay` text NOT NULL,
  `save_flashsay` varchar(10) NOT NULL DEFAULT '',
  `zz_gamebigpic` text NOT NULL,
  `z_gamebigpic` varchar(255) NOT NULL,
  `qz_gamebigpic` varchar(255) NOT NULL,
  `save_gamebigpic` varchar(10) NOT NULL,
  `zz_cjinfoid` text NOT NULL,
  `z_cjinfoid` varchar(255) NOT NULL,
  `qz_cjinfoid` varchar(255) NOT NULL,
  `save_cjinfoid` varchar(10) NOT NULL,
  `zz_cjinfo` text NOT NULL,
  `z_cjinfo` varchar(255) NOT NULL,
  `qz_cjinfo` varchar(255) NOT NULL,
  `save_cjinfo` varchar(10) NOT NULL,
  `zz_flashurl_4usky` text NOT NULL,
  `z_flashurl_4usky` varchar(255) NOT NULL,
  `qz_flashurl_4usky` varchar(255) NOT NULL,
  `save_flashurl_4usky` varchar(10) NOT NULL,
  `zz_gamebigpic_4usky` text NOT NULL,
  `z_gamebigpic_4usky` varchar(255) NOT NULL,
  `qz_gamebigpic_4usky` varchar(255) NOT NULL,
  `save_gamebigpic_4usky` varchar(10) NOT NULL,
  `zz_titlepic_4usky` text NOT NULL,
  `z_titlepic_4usky` varchar(255) NOT NULL,
  `qz_titlepic_4usky` varchar(255) NOT NULL,
  `save_titlepic_4usky` varchar(10) NOT NULL,
  `zz_recommendedage` text NOT NULL,
  `z_recommendedage` varchar(255) NOT NULL,
  `qz_recommendedage` varchar(255) NOT NULL,
  `save_recommendedage` varchar(10) NOT NULL,
  `zz_volumenum` text NOT NULL,
  `z_volumenum` varchar(255) NOT NULL,
  `qz_volumenum` varchar(255) NOT NULL,
  `save_volumenum` varchar(10) NOT NULL,
  `zz_isover` text NOT NULL,
  `z_isover` varchar(255) NOT NULL,
  `qz_isover` varchar(255) NOT NULL,
  `save_isover` varchar(10) NOT NULL,
  `zz_state` text NOT NULL,
  `z_state` varchar(255) NOT NULL,
  `qz_state` varchar(255) NOT NULL,
  `save_state` varchar(10) NOT NULL,
  `zz_checkover` text NOT NULL,
  `z_checkover` varchar(255) NOT NULL,
  `qz_checkover` varchar(255) NOT NULL,
  `save_checkover` varchar(10) NOT NULL,
  PRIMARY KEY (`classid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_infoclass_game` values('17','var title=''[!--title--]'';','','','','','','','','','','','','','','','','','','','','','','','',' <script>addswf(''[!--flashurl--]''); ','','',' checked','','667','','','','479','','','<div id=\"mysay\">[!--flashsay--]</div>\r\n','','','','var titlepic=''[!--gamebigpic--]'';','','',' checked','var id=''[!--cjinfoid--]'';','','','',' <script>addswf(''[!--cjinfo--]''); ','','','',' <script>addswf(''[!--flashurl_4usky--]''); ','','','','var titlepic=''[!--gamebigpic_4usky--]'';','','','','var titlepic=''[!--titlepic_4usky--]'';','','','','','三个月以上','','','','','','','','','','','','','','','','','','');");
E_D("replace into `phome_ecms_infoclass_game` values('27','var title=''[!--title--]'';','','','','','','','','','','','','','','','','','','','','','','','',' <script>addswf(''[!--flashurl--]''); ','','',' checked','','667','','','','479','','','<div id=\"mysay\">[!--flashsay--]</div>\r\n','','','','var titlepic=''[!--gamebigpic--]'';','','',' checked','var id=''[!--cjinfoid--]'';','','','',' <script>addswf(\\\\''[!--cjinfo--]\\\\''); ','','','',' <script>addswf(\\\\''[!--flashurl_4usky--]\\\\''); ','','','','var titlepic=\\\\''[!--gamebigpic_4usky--]\\\\'';','','','','var titlepic=\\\\''[!--titlepic_4usky--]\\\\'';','','','','','三个月以上','','','','','','','','','','','','','','','','','','');");
E_D("replace into `phome_ecms_infoclass_game` values('28','var title=''[!--title--]'';','','','','','','','','','','','','','','','','','','','','','','','',' <script>addswf(''[!--flashurl--]''); ','','',' checked','','667','','','','479','','','<div id=\"mysay\">[!--flashsay--]</div>\r\n','','','','var titlepic=''[!--gamebigpic--]'';','','',' checked','var id=''[!--cjinfoid--]'';','','','',' <script>addswf(\\\\''[!--cjinfo--]\\\\''); ','','','',' <script>addswf(\\\\''[!--flashurl_4usky--]\\\\''); ','','','','var titlepic=\\\\''[!--gamebigpic_4usky--]\\\\'';','','','','var titlepic=\\\\''[!--titlepic_4usky--]\\\\'';','','','','','三个月以上','','','','','','','','','','','','','','','','','','');");
E_D("replace into `phome_ecms_infoclass_game` values('29','var title=''[!--title--]'';','','','','','','','','','','','','','','','','','','','','','','','',' <script>addswf(''[!--flashurl--]''); ','','',' checked','','667','','','','479','','','<div id=\"mysay\">[!--flashsay--]</div>\r\n','','','','var titlepic=''[!--gamebigpic--]'';','','',' checked','var id=''[!--cjinfoid--]'';','','','',' <script>addswf(\\\\''[!--cjinfo--]\\\\''); ','','','',' <script>addswf(\\\\''[!--flashurl_4usky--]\\\\''); ','','','','var titlepic=\\\\''[!--gamebigpic_4usky--]\\\\'';','','','','var titlepic=\\\\''[!--titlepic_4usky--]\\\\'';','','','','','三个月以上','','','','','','','','','','','','','','','','','','');");
E_D("replace into `phome_ecms_infoclass_game` values('30','var title=''[!--title--]'';','','','','','','','','','','','','','','','','','','','','','','','',' <script>addswf(''[!--flashurl--]''); ','','',' checked','','667','','','','479','','','<div id=\"mysay\">[!--flashsay--]</div>\r\n','','','','var titlepic=''[!--gamebigpic--]'';','','',' checked','var id=''[!--cjinfoid--]'';','','','',' <script>addswf(''[!--cjinfo--]''); ','','','',' <script>addswf(''[!--flashurl_4usky--]''); ','','','','var titlepic=''[!--gamebigpic_4usky--]'';','','','','var titlepic=''[!--titlepic_4usky--]'';','','','','','三个月以上','','','','','','','','','','','','','','','','','','');");
E_D("replace into `phome_ecms_infoclass_game` values('31','var title=''[!--title--]'';','','','','','','','','','','','','','','','','','','','','','','','',' <script>addswf(''[!--flashurl--]''); ','','',' checked','','667','','','','479','','','<div id=\"mysay\">[!--flashsay--]</div>\r\n','','','','var titlepic=''[!--gamebigpic--]'';','','',' checked','var id=''[!--cjinfoid--]'';','','','',' <script>addswf(\\\\''[!--cjinfo--]\\\\''); ','','','',' <script>addswf(\\\\''[!--flashurl_4usky--]\\\\''); ','','','','var titlepic=\\\\''[!--gamebigpic_4usky--]\\\\'';','','','','var titlepic=\\\\''[!--titlepic_4usky--]\\\\'';','','','','','三个月以上','','','','','','','','','','','','','','','','','','');");
E_D("replace into `phome_ecms_infoclass_game` values('32','var title=''[!--title--]'';','','','','','','','','','','','','','','','','','','','','','','','',' <script>addswf(''[!--flashurl--]''); ','','',' checked','','667','','','','479','','','<div id=\"mysay\">[!--flashsay--]</div>\r\n','','','','var titlepic=''[!--gamebigpic--]'';','','',' checked','var id=''[!--cjinfoid--]'';','','','',' <script>addswf(\\\\''[!--cjinfo--]\\\\''); ','','','',' <script>addswf(\\\\''[!--flashurl_4usky--]\\\\''); ','','','','var titlepic=\\\\''[!--gamebigpic_4usky--]\\\\'';','','','','var titlepic=\\\\''[!--titlepic_4usky--]\\\\'';','','','','','三个月以上','','','','','','','','','','','','','','','','','','');");
E_D("replace into `phome_ecms_infoclass_game` values('33','var title=''[!--title--]'';','','','','','','','','','','','','','','','','','','','','','','','',' <script>addswf(''[!--flashurl--]''); ','','',' checked','','667','','','','479','','','<div id=\"mysay\">[!--flashsay--]</div>\r\n','','','','var titlepic=''[!--gamebigpic--]'';','','',' checked','var id=''[!--cjinfoid--]'';','','','',' <script>addswf(\\\\''[!--cjinfo--]\\\\''); ','','','',' <script>addswf(\\\\''[!--flashurl_4usky--]\\\\''); ','','','','var titlepic=\\\\''[!--gamebigpic_4usky--]\\\\'';','','','','var titlepic=\\\\''[!--titlepic_4usky--]\\\\'';','','','','','三个月以上','','','','','','','','','','','','','','','','','','');");
E_D("replace into `phome_ecms_infoclass_game` values('18','<h1><a href=\"*\" target=\"_blank\">[!--title--]</a></h1>','','','','','','','','','','','','','','','','','','','','','','','','&id=[!--flashurl--]\"','','','','','','','','','','','','<div id=\"mysay\">[!--flashsay--]</div>\r\n','','','','<img width=\"280\" src=''[!--gamebigpic--]''','','',' checked','&id=[!--cjinfoid--]\"','','','','<h2>剧集列表</h2>*<ul>[!--cjinfo--]</ul>','','','','&id=[!--flashurl_4usky--]\"','','','','<img width=\"280\" src=''[!--gamebigpic_4usky--]''','','','','<img width=\"280\" src=''[!--titlepic_4usky--]''','','','','<b>适合年龄：</b>[!--recommendedage--] </li>','','','','','','','','','','','','','','','','','','','');");
E_D("replace into `phome_ecms_infoclass_game` values('34','var title=''[!--title--]'';','','','','','','','','','','','','','','','','','','','','','','','',' <script>addswf(''[!--flashurl--]''); ','','',' checked','','667','','','','479','','','<div id=\"mysay\">[!--flashsay--]</div>\r\n','','','','var titlepic=''[!--gamebigpic--]'';','','',' checked','var id=''[!--cjinfoid--]'';','','','',' <script>addswf(\\\\''[!--cjinfo--]\\\\''); ','','','',' <script>addswf(\\\\''[!--flashurl_4usky--]\\\\''); ','','','','var titlepic=\\\\''[!--gamebigpic_4usky--]\\\\'';','','','','var titlepic=\\\\''[!--titlepic_4usky--]\\\\'';','','','','','三个月以上','','','','','','','','','','','','','','','','','','');");
E_D("replace into `phome_ecms_infoclass_game` values('35','var title=''[!--title--]'';','','','','','','','','','','','','','','','','','','','','','','','',' <script>addswf(''[!--flashurl--]''); ','','',' checked','','667','','','','479','','','<div id=\"mysay\">[!--flashsay--]</div>\r\n','','','','var titlepic=''[!--gamebigpic--]'';','','',' checked','var id=''[!--cjinfoid--]'';','','','',' <script>addswf(\\\\''[!--cjinfo--]\\\\''); ','','','',' <script>addswf(\\\\''[!--flashurl_4usky--]\\\\''); ','','','','var titlepic=\\\\''[!--gamebigpic_4usky--]\\\\'';','','','','var titlepic=\\\\''[!--titlepic_4usky--]\\\\'';','','','','','三个月以上','','','','','','','','','','','','','','','','','','');");
E_D("replace into `phome_ecms_infoclass_game` values('36','var title=\\\\''[!--title--]\\\\'';','','','','','','','','','','','','','','','','','','','','','','','',' <script>addswf(\\\\''[!--flashurl--]\\\\''); ','','',' checked','','667','','','','479','','','<div id=\\\\\"mysay\\\\\">[!--flashsay--]</div>\r\n','','','','var titlepic=\\\\''[!--gamebigpic--]\\\\'';','','',' checked','var id=\\\\''[!--cjinfoid--]\\\\'';','','','',' <script>addswf(\\\\''[!--cjinfo--]\\\\''); ','','','',' <script>addswf(\\\\''[!--flashurl_4usky--]\\\\''); ','','','','var titlepic=\\\\''[!--gamebigpic_4usky--]\\\\'';','','','','var titlepic=\\\\''[!--titlepic_4usky--]\\\\'';','','','','','三个月以上','','','','','','','','','','','','','','','','','','');");
E_D("replace into `phome_ecms_infoclass_game` values('37','var title=''[!--title--]'';','','','','','','','','','','','','','','','','','','','','','','','',' <script>addswf(''[!--flashurl--]''); ','','',' checked','','667','','','','479','','','<div id=\"mysay\">[!--flashsay--]</div>\r\n','','','','var titlepic=''[!--gamebigpic--]'';','','',' checked','var id=''[!--cjinfoid--]'';','','','',' <script>addswf(\\\\''[!--cjinfo--]\\\\''); ','','','',' <script>addswf(\\\\''[!--flashurl_4usky--]\\\\''); ','','','','var titlepic=\\\\''[!--gamebigpic_4usky--]\\\\'';','','','','var titlepic=\\\\''[!--titlepic_4usky--]\\\\'';','','','','','三个月以上','','','','','','','','','','','','','','','','','','');");
E_D("replace into `phome_ecms_infoclass_game` values('38','var title=''[!--title--]'';','','','','','','','','','','','','','','','','','','','','','','','',' <script>addswf(''[!--flashurl--]''); ','','',' checked','','667','','','','479','','','<div id=\"mysay\">[!--flashsay--]</div>\r\n','','','','var titlepic=''[!--gamebigpic--]'';','','',' checked','var id=''[!--cjinfoid--]'';','','','',' <script>addswf(\\\\''[!--cjinfo--]\\\\''); ','','','',' <script>addswf(\\\\''[!--flashurl_4usky--]\\\\''); ','','','','var titlepic=\\\\''[!--gamebigpic_4usky--]\\\\'';','','','','var titlepic=\\\\''[!--titlepic_4usky--]\\\\'';','','','','','三个月以上','','','','','','','','','','','','','','','','','','');");
E_D("replace into `phome_ecms_infoclass_game` values('39','var title=''[!--title--]'';','','','','','','','','','','','','','','','','','','','','','','','',' <script>addswf(''[!--flashurl--]''); ','','',' checked','','667','','','','479','','','<div id=\"mysay\">[!--flashsay--]</div>\r\n','','','','var titlepic=''[!--gamebigpic--]'';','','',' checked','var id=''[!--cjinfoid--]'';','','','',' <script>addswf(\\\\''[!--cjinfo--]\\\\''); ','','','',' <script>addswf(\\\\''[!--flashurl_4usky--]\\\\''); ','','','','var titlepic=\\\\''[!--gamebigpic_4usky--]\\\\'';','','','','var titlepic=\\\\''[!--titlepic_4usky--]\\\\'';','','','','','三个月以上','','','','','','','','','','','','','','','','','','');");
E_D("replace into `phome_ecms_infoclass_game` values('40','var title=''[!--title--]'';','','','','','','','','','','','','','','','','','','','','','','','',' <script>addswf(''[!--flashurl--]''); ','','',' checked','','667','','','','479','','','<div id=\"mysay\">[!--flashsay--]</div>\r\n','','','','var titlepic=''[!--gamebigpic--]'';','','',' checked','var id=''[!--cjinfoid--]'';','','','',' <script>addswf(\\\\''[!--cjinfo--]\\\\''); ','','','',' <script>addswf(\\\\''[!--flashurl_4usky--]\\\\''); ','','','','var titlepic=\\\\''[!--gamebigpic_4usky--]\\\\'';','','','','var titlepic=\\\\''[!--titlepic_4usky--]\\\\'';','','','','','三个月以上','','','','','','','','','','','','','','','','','','');");
E_D("replace into `phome_ecms_infoclass_game` values('41','var title=''[!--title--]'';','','','','','','','','','','','','','','','','','','','','','','','',' <script>addswf(''[!--flashurl--]''); ','','',' checked','','667','','','','479','','','<div id=\"mysay\">[!--flashsay--]</div>\r\n','','','','var titlepic=''[!--gamebigpic--]'';','','',' checked','var id=''[!--cjinfoid--]'';','','','',' <script>addswf(\\\\''[!--cjinfo--]\\\\''); ','','','',' <script>addswf(\\\\''[!--flashurl_4usky--]\\\\''); ','','','','var titlepic=\\\\''[!--gamebigpic_4usky--]\\\\'';','','','','var titlepic=\\\\''[!--titlepic_4usky--]\\\\'';','','','','','三个月以上','','','','','','','','','','','','','','','','','','');");
E_D("replace into `phome_ecms_infoclass_game` values('42','var title=''[!--title--]'';','','','','','','','','','','','','','','','','','','','','','','','',' <script>addswf(''[!--flashurl--]''); ','','',' checked','','667','','','','479','','','<div id=\"mysay\">[!--flashsay--]</div>\r\n','','','','var titlepic=''[!--gamebigpic--]'';','','',' checked','var id=''[!--cjinfoid--]'';','','','',' <script>addswf(\\\\''[!--cjinfo--]\\\\''); ','','','',' <script>addswf(\\\\''[!--flashurl_4usky--]\\\\''); ','','','','var titlepic=\\\\''[!--gamebigpic_4usky--]\\\\'';','','','','var titlepic=\\\\''[!--titlepic_4usky--]\\\\'';','','','','','三个月以上','','','','','','','','','','','','','','','','','','');");
E_D("replace into `phome_ecms_infoclass_game` values('43','var title=''[!--title--]'';','','','','','','','','','','','','','','','','','','','','','','','',' <script>addswf(''[!--flashurl--]''); ','','',' checked','','667','','','','479','','','<div id=\"mysay\">[!--flashsay--]</div>\r\n','','','','var titlepic=''[!--gamebigpic--]'';','','',' checked','var id=''[!--cjinfoid--]'';','','','',' <script>addswf(\\\\''[!--cjinfo--]\\\\''); ','','','',' <script>addswf(\\\\''[!--flashurl_4usky--]\\\\''); ','','','','var titlepic=\\\\''[!--gamebigpic_4usky--]\\\\'';','','','','var titlepic=\\\\''[!--titlepic_4usky--]\\\\'';','','','','','三个月以上','','','','','','','','','','','','','','','','','','');");
E_D("replace into `phome_ecms_infoclass_game` values('44','var title=''[!--title--]'';','','','','','','','','','','','','','','','','','','','','','','','',' <script>addswf(''[!--flashurl--]''); ','','',' checked','','667','','','','479','','','<div id=\"mysay\">[!--flashsay--]</div>\r\n','','','','var titlepic=''[!--gamebigpic--]'';','','',' checked','var id=''[!--cjinfoid--]'';','','','',' <script>addswf(\\\\''[!--cjinfo--]\\\\''); ','','','',' <script>addswf(\\\\''[!--flashurl_4usky--]\\\\''); ','','','','var titlepic=\\\\''[!--gamebigpic_4usky--]\\\\'';','','','','var titlepic=\\\\''[!--titlepic_4usky--]\\\\'';','','','','','三个月以上','','','','','','','','','','','','','','','','','','');");
E_D("replace into `phome_ecms_infoclass_game` values('45','var title=''[!--title--]'';','','','','','','','','','','','','','','','','','','','','','','','',' <script>addswf(''[!--flashurl--]''); ','','',' checked','','667','','','','479','','','<div id=\"mysay\">[!--flashsay--]</div>\r\n','','','','var titlepic=''[!--gamebigpic--]'';','','',' checked','var id=''[!--cjinfoid--]'';','','','',' <script>addswf(\\\\''[!--cjinfo--]\\\\''); ','','','',' <script>addswf(\\\\''[!--flashurl_4usky--]\\\\''); ','','','','var titlepic=\\\\''[!--gamebigpic_4usky--]\\\\'';','','','','var titlepic=\\\\''[!--titlepic_4usky--]\\\\'';','','','','','三个月以上','','','','','','','','','','','','','','','','','','');");
E_D("replace into `phome_ecms_infoclass_game` values('46','var title=''[!--title--]'';','','','','','','','','','','','','','','','','','','','','','','','',' <script>addswf(''[!--flashurl--]''); ','','',' checked','','667','','','','479','','','<div id=\"mysay\">[!--flashsay--]</div>\r\n','','','','var titlepic=''[!--gamebigpic--]'';','','',' checked','var id=''[!--cjinfoid--]'';','','','',' <script>addswf(\\\\''[!--cjinfo--]\\\\''); ','','','',' <script>addswf(\\\\''[!--flashurl_4usky--]\\\\''); ','','','','var titlepic=\\\\''[!--gamebigpic_4usky--]\\\\'';','','','','var titlepic=\\\\''[!--titlepic_4usky--]\\\\'';','','','','','三个月以上','','','','','','','','','','','','','','','','','','');");
E_D("replace into `phome_ecms_infoclass_game` values('47','var title=''[!--title--]'';','','','','','','','','','','','','','','','','','','','','','','','',' <script>addswf(''[!--flashurl--]''); ','','',' checked','','667','','','','479','','','<div id=\"mysay\">[!--flashsay--]</div>\r\n','','','','var titlepic=''[!--gamebigpic--]'';','','',' checked','var id=''[!--cjinfoid--]'';','','','',' <script>addswf(\\\\''[!--cjinfo--]\\\\''); ','','','',' <script>addswf(\\\\''[!--flashurl_4usky--]\\\\''); ','','','','var titlepic=\\\\''[!--gamebigpic_4usky--]\\\\'';','','','','var titlepic=\\\\''[!--titlepic_4usky--]\\\\'';','','','','','三个月以上','','','','','','','','','','','','','','','','','','');");
E_D("replace into `phome_ecms_infoclass_game` values('48','var title=''[!--title--]'';','','','','','','','','','','','','','','','','','','','','','','','',' <script>addswf(''[!--flashurl--]''); ','','',' checked','','667','','','','479','','','<div id=\"mysay\">[!--flashsay--]</div>\r\n','','','','var titlepic=''[!--gamebigpic--]'';','','',' checked','var id=''[!--cjinfoid--]'';','','','',' <script>addswf(\\\\''[!--cjinfo--]\\\\''); ','','','',' <script>addswf(\\\\''[!--flashurl_4usky--]\\\\''); ','','','','var titlepic=\\\\''[!--gamebigpic_4usky--]\\\\'';','','','','var titlepic=\\\\''[!--titlepic_4usky--]\\\\'';','','','','','三个月以上','','','','','','','','','','','','','','','','','','');");
E_D("replace into `phome_ecms_infoclass_game` values('49','var title=''[!--title--]'';','','','','','','','','','','','','','','','','','','','','','','','',' <script>addswf(''[!--flashurl--]''); ','','',' checked','','667','','','','479','','','<div id=\"mysay\">[!--flashsay--]</div>\r\n','','','','var titlepic=''[!--gamebigpic--]'';','','',' checked','var id=''[!--cjinfoid--]'';','','','',' <script>addswf(\\\\''[!--cjinfo--]\\\\''); ','','','',' <script>addswf(\\\\''[!--flashurl_4usky--]\\\\''); ','','','','var titlepic=\\\\''[!--gamebigpic_4usky--]\\\\'';','','','','var titlepic=\\\\''[!--titlepic_4usky--]\\\\'';','','','','','三个月以上','','','','','','','','','','','','','','','','','','');");
E_D("replace into `phome_ecms_infoclass_game` values('50','var title=''[!--title--]'';','','','','','','','','','','','','','','','','','','','','','','','',' <script>addswf(''[!--flashurl--]''); ','','',' checked','','667','','','','479','','','<div id=\"mysay\">[!--flashsay--]</div>\r\n','','','','var titlepic=''[!--gamebigpic--]'';','','',' checked','var id=''[!--cjinfoid--]'';','','','',' <script>addswf(\\\\''[!--cjinfo--]\\\\''); ','','','',' <script>addswf(\\\\''[!--flashurl_4usky--]\\\\''); ','','','','var titlepic=\\\\''[!--gamebigpic_4usky--]\\\\'';','','','','var titlepic=\\\\''[!--titlepic_4usky--]\\\\'';','','','','','三个月以上','','','','','','','','','','','','','','','','','','');");
E_D("replace into `phome_ecms_infoclass_game` values('51','var title=''[!--title--]'';','','','','','','','','','','','','','','','','','','','','','','','',' <script>addswf(''[!--flashurl--]''); ','','',' checked','','667','','','','479','','','<div id=\"mysay\">[!--flashsay--]</div>\r\n','','','','var titlepic=''[!--gamebigpic--]'';','','',' checked','var id=''[!--cjinfoid--]'';','','','',' <script>addswf(\\\\''[!--cjinfo--]\\\\''); ','','','',' <script>addswf(\\\\''[!--flashurl_4usky--]\\\\''); ','','','','var titlepic=\\\\''[!--gamebigpic_4usky--]\\\\'';','','','','var titlepic=\\\\''[!--titlepic_4usky--]\\\\'';','','','','','三个月以上','','','','','','','','','','','','','','','','','','');");
E_D("replace into `phome_ecms_infoclass_game` values('52','var title=''[!--title--]'';','','','','','','','','','','','','','','','','','','','','','','','',' <script>addswf(''[!--flashurl--]''); ','','',' checked','','667','','','','479','','','<div id=\"mysay\">[!--flashsay--]</div>\r\n','','','','var titlepic=''[!--gamebigpic--]'';','','',' checked','var id=''[!--cjinfoid--]'';','','','',' <script>addswf(\\\\''[!--cjinfo--]\\\\''); ','','','',' <script>addswf(\\\\''[!--flashurl_4usky--]\\\\''); ','','','','var titlepic=\\\\''[!--gamebigpic_4usky--]\\\\'';','','','','var titlepic=\\\\''[!--titlepic_4usky--]\\\\'';','','','','','三个月以上','','','','','','','','','','','','','','','','','','');");
E_D("replace into `phome_ecms_infoclass_game` values('53','var title=''[!--title--]'';','','','','','','','','','','','','','','','','','','','','','','','',' <script>addswf(''[!--flashurl--]''); ','','',' checked','','667','','','','479','','','<div id=\"mysay\">[!--flashsay--]</div>\r\n','','','','var titlepic=''[!--gamebigpic--]'';','','',' checked','var id=''[!--cjinfoid--]'';','','','',' <script>addswf(\\\\''[!--cjinfo--]\\\\''); ','','','',' <script>addswf(\\\\''[!--flashurl_4usky--]\\\\''); ','','','','var titlepic=\\\\''[!--gamebigpic_4usky--]\\\\'';','','','','var titlepic=\\\\''[!--titlepic_4usky--]\\\\'';','','','','','三个月以上','','','','','','','','','','','','','','','','','','');");
E_D("replace into `phome_ecms_infoclass_game` values('54','var title=''[!--title--]'';','','','','','','','','','','','','','','','','','','','','','','','',' <script>addswf(''[!--flashurl--]''); ','','',' checked','','667','','','','479','','','<div id=\"mysay\">[!--flashsay--]</div>\r\n','','','','var titlepic=''[!--gamebigpic--]'';','','',' checked','var id=''[!--cjinfoid--]'';','','','',' <script>addswf(\\\\''[!--cjinfo--]\\\\''); ','','','',' <script>addswf(\\\\''[!--flashurl_4usky--]\\\\''); ','','','','var titlepic=\\\\''[!--gamebigpic_4usky--]\\\\'';','','','','var titlepic=\\\\''[!--titlepic_4usky--]\\\\'';','','','','','三个月以上','','','','','','','','','','','','','','','','','','');");
E_D("replace into `phome_ecms_infoclass_game` values('55','var title=''[!--title--]'';','','','','','','','','','','','','','','','','','','','','','','','',' <script>addswf(''[!--flashurl--]''); ','','',' checked','','667','','','','479','','','<div id=\"mysay\">[!--flashsay--]</div>\r\n','','','','var titlepic=''[!--gamebigpic--]'';','','',' checked','var id=''[!--cjinfoid--]'';','','','',' <script>addswf(\\\\''[!--cjinfo--]\\\\''); ','','','',' <script>addswf(\\\\''[!--flashurl_4usky--]\\\\''); ','','','','var titlepic=\\\\''[!--gamebigpic_4usky--]\\\\'';','','','','var titlepic=\\\\''[!--titlepic_4usky--]\\\\'';','','','','','三个月以上','','','','','','','','','','','','','','','','','','');");
E_D("replace into `phome_ecms_infoclass_game` values('56','var title=\\\\''[!--title--]\\\\'';','','','','','','','','','','','','','','','','','','','','','','','',' <script>addswf(\\\\''[!--flashurl--]\\\\''); ','','',' checked','','667','','','','479','','','<div id=\\\\\"mysay\\\\\">[!--flashsay--]</div>\r\n','','','','var titlepic=\\\\''[!--gamebigpic--]\\\\'';','','',' checked','var id=\\\\''[!--cjinfoid--]\\\\'';','','','',' <script>addswf(\\\\''[!--cjinfo--]\\\\''); ','','','',' <script>addswf(\\\\''[!--flashurl_4usky--]\\\\''); ','','','','var titlepic=\\\\''[!--gamebigpic_4usky--]\\\\'';','','','','var titlepic=\\\\''[!--titlepic_4usky--]\\\\'';','','','','','三个月以上','','','','','','','','','','','','','','','','','','');");

@include("../../inc/footer.php");
?>