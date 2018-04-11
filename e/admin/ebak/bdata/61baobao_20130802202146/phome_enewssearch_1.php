<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewssearch`;");
E_C("CREATE TABLE `phome_enewssearch` (
  `searchid` bigint(20) NOT NULL AUTO_INCREMENT,
  `keyboard` varchar(255) NOT NULL DEFAULT '',
  `searchtime` int(11) NOT NULL DEFAULT '0',
  `searchclass` varchar(255) NOT NULL DEFAULT '',
  `result_num` int(11) NOT NULL DEFAULT '0',
  `searchip` varchar(20) NOT NULL DEFAULT '',
  `classid` varchar(255) NOT NULL DEFAULT '',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `orderby` varchar(30) NOT NULL DEFAULT '0',
  `myorder` tinyint(1) NOT NULL DEFAULT '0',
  `checkpass` varchar(32) NOT NULL DEFAULT '',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `tempid` smallint(6) NOT NULL DEFAULT '0',
  `iskey` tinyint(1) NOT NULL DEFAULT '0',
  `andsql` text NOT NULL,
  `trueclassid` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`searchid`),
  KEY `checkpass` (`checkpass`)
) ENGINE=MyISAM AUTO_INCREMENT=151 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewssearch` values('105','quee','1340694246','title','1','222.205.125.112','0','1','newstime','0','0e460c6fc070face3004bd4aecc0b2f2','game','1','0',' and ((title LIKE ''%quee%''))','0');");
E_D("replace into `phome_enewssearch` values('106','老鼠','1342789193','title','4','219.144.164.143','0','1','newstime','0','54bcfbdc4822344596c625d961687056','game','1','0',' and ((title LIKE ''%老鼠%''))','0');");
E_D("replace into `phome_enewssearch` values('107','小兔','1343277469','title','27','110.84.174.110','0','1','newstime','0','bbfe80a3d753f199362bfce79a59fe92','game','1','0',' and ((title LIKE ''%小兔%''))','0');");
E_D("replace into `phome_enewssearch` values('108','大米','1343278192','title','7','110.84.174.110','0','1','newstime','0','6c5a35c3fa7474a28e2cf8982d79c5ad','game','1','0',' and ((title LIKE ''%大米%''))','0');");
E_D("replace into `phome_enewssearch` values('109','aa','1343279027','title','3','221.206.117.184','0','1','newstime','0','77d6ad50c2a43d18d48f89613a35925f','game','1','0',' and ((title LIKE ''%aa%''))','0');");
E_D("replace into `phome_enewssearch` values('110','喜羊羊','1343628321','title','8','110.84.174.110','0','1','newstime','0','41fa4a076aef07946f165da98e16b940','game','1','0',' and ((title LIKE ''%喜羊羊%''))','0');");
E_D("replace into `phome_enewssearch` values('111','两只老虎','1343628572','title','3','110.84.174.110','0','1','newstime','0','cc59704a97128eddd82f4c8704a08664','game','1','0',' and ((title LIKE ''%两只老虎%''))','0');");
E_D("replace into `phome_enewssearch` values('112','小鸟','1343751229','title','34','221.206.119.123','0','2','newstime','0','43d19e48a428244baa4fd4dadf461f10','game','1','0',' and ((title LIKE ''%小鸟%''))','0');");
E_D("replace into `phome_enewssearch` values('113','梦幻镇','1343701467','title','4','221.206.117.184','5','1','newstime','0','633d7b4c444833a419eb2725228797ab','game','1','0',' and classid=''5'' and ((title LIKE ''%梦幻镇%''))','5');");
E_D("replace into `phome_enewssearch` values('114','梦幻镇','1346229573','title','4','221.206.117.184','0','2','newstime','0','afbdde87cd1655f41ece87cbad08e0cb','game','1','0',' and ((title LIKE ''%梦幻镇%''))','0');");
E_D("replace into `phome_enewssearch` values('115','小喇叭','1343787699','title','2','221.206.117.184','0','1','newstime','0','4a4b501ddb99d0eebe15f850a27eb909','game','1','0',' and ((title LIKE ''%小喇叭%''))','0');");
E_D("replace into `phome_enewssearch` values('116','小喇叭','1343787574','title','2','221.206.117.184','0','1','newstime','0','4a4b501ddb99d0eebe15f850a27eb909','game','1','0',' and ((title LIKE ''%小喇叭%''))','0');");
E_D("replace into `phome_enewssearch` values('117','调虎离山','1343798602','title','2','221.206.117.184','0','1','newstime','0','0a25d3c867544dd17ecb28ef1be32451','game','1','0',' and ((title LIKE ''%调虎离山%''))','0');");
E_D("replace into `phome_enewssearch` values('118','已故门生','1343832426','title,smalltext','1','110.83.44.17','0','2','newstime','0','2ce0d498f1c5252ded11a987323ab177','news','2','0',' and ((title LIKE ''%已故门生%'') or (smalltext LIKE ''%已故门生%''))','0');");
E_D("replace into `phome_enewssearch` values('119','终无可取','1343833346','title,smalltext','1','110.83.44.17','0','1','newstime','0','e410fd7e35cdfec4c6c3309646d0ea76','news','2','0',' and ((title LIKE ''%终无可取%'') or (smalltext LIKE ''%终无可取%''))','0');");
E_D("replace into `phome_enewssearch` values('120','毛毛虫','1343833636','title,smalltext','29','110.83.44.17','0','1','newstime','0','18019b8ccc4f62d1e92583012aa1beca','news','2','0',' and ((title LIKE ''%毛毛虫%'') or (smalltext LIKE ''%毛毛虫%''))','0');");
E_D("replace into `phome_enewssearch` values('121','ss','1344239931','title','19','112.243.205.97','0','1','newstime','0','faf94a6fb5a6f1c9e70e174f86ef9e0b','game','1','0',' and ((title LIKE ''%ss%''))','0');");
E_D("replace into `phome_enewssearch` values('122','海绵宝宝','1344860483','title','9','222.77.45.190','0','2','newstime','0','b3e1498797a96c02712c852416194079','game','1','0',' and ((title LIKE ''%海绵宝宝%''))','0');");
E_D("replace into `phome_enewssearch` values('123','蜗牛','1344306746','title','15','58.246.186.206','0','1','newstime','0','33a4b52d710bee813d0373bee3ab65c9','game','1','0',' and ((title LIKE ''%蜗牛%''))','0');");
E_D("replace into `phome_enewssearch` values('124','111','1344406755','title','2','125.77.144.51','0','1','newstime','0','c4990126d24f7447c65bec3cc77f9603','game','1','0',' and ((title LIKE ''%111%''))','0');");
E_D("replace into `phome_enewssearch` values('125','小毛驴','1344496904','title','8','222.77.85.152','0','1','newstime','0','5094567f40ea1448a2a0218f56b3f274','game','1','0',' and ((title LIKE ''%小毛驴%''))','0');");
E_D("replace into `phome_enewssearch` values('126','小小智慧','1344555358','title','4','220.176.89.108','0','1','newstime','0','79e3531d1bdffffe513d878138542fcd','game','1','0',' and ((title LIKE ''%小小智慧%''))','0');");
E_D("replace into `phome_enewssearch` values('127','123','1344919674','title,smalltext','10','124.200.53.242','0','1','newstime','0','67d1c7590578fb2ef7b686cdc8e206d9','news','2','0',' and ((title LIKE ''%123%'') or (smalltext LIKE ''%123%''))','0');");
E_D("replace into `phome_enewssearch` values('128','淘气包马小跳','1345207296','title','3','120.68.240.211','0','1','newstime','0','03604f21fc3bf368a3dd25be5e9bfb6d','game','1','0',' and ((title LIKE ''%淘气包马小跳%''))','0');");
E_D("replace into `phome_enewssearch` values('129','小小智慧树','1345644767','title','4','183.16.29.114','0','2','newstime','0','c7a135d602dfb8fc46ef86ec1c6c7c80','game','1','0',' and ((title LIKE ''%小小智慧树%''))','0');");
E_D("replace into `phome_enewssearch` values('130','儿歌','1345533279','title','115','121.35.204.232','0','1','newstime','0','8ce13d97595516445aa589d74e3f7c08','game','1','0',' and ((title LIKE ''%儿歌%''))','0');");
E_D("replace into `phome_enewssearch` values('131','宝宝','1345538816','title','94','14.213.171.44','0','1','newstime','0','df753a0ce8ab6d006918161cb0724222','game','1','0',' and ((title LIKE ''%宝宝%''))','0');");
E_D("replace into `phome_enewssearch` values('132','小乌龟','1345570091','title','3','123.128.167.109','0','1','newstime','0','80b6cba455e60e725819a5cbe0d544c7','game','1','0',' and ((title LIKE ''%小乌龟%''))','0');");
E_D("replace into `phome_enewssearch` values('133','智慧树','1345635250','title','6','59.63.160.183','0','1','newstime','0','e15fb8e3c42cf0faba78e12e4247113f','game','1','0',' and ((title LIKE ''%智慧树%''))','0');");
E_D("replace into `phome_enewssearch` values('134','三国演义','1345645417','title','1','125.112.82.243','0','1','newstime','0','03ec9c7c8025267b80940caa7a178e12','game','1','0',' and ((title LIKE ''%三国演义%''))','0');");
E_D("replace into `phome_enewssearch` values('135','巴拉拉','1345722207','title','3','14.153.203.112','0','1','newstime','0','60e41db6abdbd3366a9de52241d76942','game','1','0',' and ((title LIKE ''%巴拉拉%''))','0');");
E_D("replace into `phome_enewssearch` values('136','巴拉拉小魔仙','1345722158','title','2','14.153.203.112','0','1','newstime','0','e1fd9820244f85743dc1d59393ea1201','game','1','0',' and ((title LIKE ''%巴拉拉小魔仙%''))','0');");
E_D("replace into `phome_enewssearch` values('137','小孩','1345736830','title','17','211.103.223.210','0','1','newstime','0','65eca395d81a4c32675452a317dd2a02','game','1','0',' and ((title LIKE ''%小孩%''))','0');");
E_D("replace into `phome_enewssearch` values('138','快乐的小蜗牛','1345787762','title','1','125.112.87.16','0','1','newstime','0','aa9c890e0c8591b99ddaa6708a0a99d7','game','1','0',' and ((title LIKE ''%快乐的小蜗牛%''))','0');");
E_D("replace into `phome_enewssearch` values('139','虹猫','1345907305','title','22','113.3.219.34','0','1','newstime','0','ac176cc0fb3eb9a2a99bb8e8f50a57ea','game','1','0',' and ((title LIKE ''%虹猫%''))','0');");
E_D("replace into `phome_enewssearch` values('140','pretty little horses','1345947804','title','3','180.155.127.253','0','2','newstime','0','8697d6a95bc981f032fc1a882229f179','game','1','0',' and ((title LIKE ''%pretty%little%horses%''))','0');");
E_D("replace into `phome_enewssearch` values('141','洗澡','1346153319','title','11','211.103.223.210','0','1','newstime','0','8652b8e449896f1de297c5dbe71cd5e0','game','1','0',' and ((title LIKE ''%洗澡%''))','0');");
E_D("replace into `phome_enewssearch` values('142','洗澡歌','1346470152','title','1','218.8.55.115','0','1','newstime','0','72ef78efe5b0bd880e5bd120b8c67096','game','1','0',' and ((title LIKE ''%洗澡歌%''))','0');");
E_D("replace into `phome_enewssearch` values('143','A梦','1346498815','title','13','123.150.197.174','0','1','newstime','0','2defdc486276c8aad4c1909e5025a97e','game','1','0',' and ((title LIKE ''%A梦%''))','0');");
E_D("replace into `phome_enewssearch` values('144','df','1346808457','title','3','118.122.176.100','0','1','newstime','0','8a2041b1bba9966c8f9dc8db84ec8fd4','game','1','0',' and ((title LIKE ''%df%''))','0');");
E_D("replace into `phome_enewssearch` values('145','欢天喜地','1346938161','title','1','122.227.222.104','0','1','newstime','0','99874b08f91a0fc31590cba10c2aecb8','game','1','0',' and ((title LIKE ''%欢天喜地%''))','0');");
E_D("replace into `phome_enewssearch` values('146','手之歌','1347188024','title','1','221.192.149.71','0','1','newstime','0','62fd788a33f8889a0130b018732f53f8','game','1','0',' and ((title LIKE ''%手之歌%''))','0');");
E_D("replace into `phome_enewssearch` values('147','丢手绢','1347188118','title','2','221.192.144.8','0','1','newstime','0','4afbcebe2b4177298bcadbd1c629a87e','game','1','0',' and ((title LIKE ''%丢手绢%''))','0');");
E_D("replace into `phome_enewssearch` values('148','%%','1347244964','title','10123','122.227.222.5','0','1','newstime','0','2a29510f4f96704197a5f00103326067','game','1','0',' and ((title LIKE ''%%%%''))','0');");
E_D("replace into `phome_enewssearch` values('149','葫芦娃','1347499198','title','6','221.206.130.53','0','1','newstime','0','6d15d48471060ce87532c9bc30d9a99e','game','1','0',' and ((title LIKE ''%葫芦娃%''))','0');");
E_D("replace into `phome_enewssearch` values('150','鲁冰花','1348735128','title','3','61.160.226.229','0','1','newstime','0','6c5e78ec799737af03ee406235980add','game','1','0',' and ((title LIKE ''%鲁冰花%''))','0');");

@include("../../inc/footer.php");
?>