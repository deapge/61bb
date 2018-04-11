<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_movie_urls`;");
E_C("CREATE TABLE `phome_ecms_movie_urls` (
  `urlid` int(10) NOT NULL AUTO_INCREMENT,
  `movieid` int(10) DEFAULT NULL,
  `volumeid` int(10) DEFAULT NULL,
  `cjinfoid` int(10) DEFAULT NULL,
  `source` varchar(256) DEFAULT NULL,
  `content` varchar(256) DEFAULT NULL,
  `isget` int(10) DEFAULT '0',
  PRIMARY KEY (`urlid`)
) ENGINE=MyISAM AUTO_INCREMENT=2509 DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_movie_urls` values('2457','821','1','8','/donghuapian/8/1.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FNTZUWG89''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2458','821','2','8','/donghuapian/8/2.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FNTZUVEU9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2459','821','3','8','/donghuapian/8/3.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FNTZUVFU9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2460','821','4','8','/donghuapian/8/4.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FNTZVWGc9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2461','821','5','8','/donghuapian/8/5.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FNTZZM289''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2462','821','6','8','/donghuapian/8/6.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FNTZZelE9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2463','821','7','8','/donghuapian/8/7.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FNTZZekk9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2464','821','8','8','/donghuapian/8/8.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FNTZaM2M9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2465','821','9','8','/donghuapian/8/9.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FNTZaekU9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2466','821','10','8','/donghuapian/8/10.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FNTZaM2s9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2467','821','11','8','/donghuapian/8/11.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FNTZaek09''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2468','821','12','8','/donghuapian/8/12.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FNTZaelU9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2469','821','13','8','/donghuapian/8/13.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FNTZhelU9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2470','821','14','8','/donghuapian/8/14.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FOUVRVFU9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2471','821','15','8','/donghuapian/8/15.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FOUVUVEk9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2472','821','16','8','/donghuapian/8/16.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FOUVVVFE9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2473','821','17','8','/donghuapian/8/17.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FOUVVWGs9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2474','821','18','8','/donghuapian/8/18.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FOUVWWGs9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2475','821','19','8','/donghuapian/8/19.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FOUVWVFU9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2476','821','20','8','/donghuapian/8/20.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FOUVXWGs9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2477','821','21','8','/donghuapian/8/21.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FOUVXVEE9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2478','821','22','8','/donghuapian/8/22.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FOUVXVE09''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2479','821','23','8','/donghuapian/8/23.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FOUVXVFU9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2480','821','24','8','/donghuapian/8/24.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FOUVZM2c9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2481','821','25','8','/donghuapian/8/25.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FOUVZelE9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2482','821','26','8','/donghuapian/8/26.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FOUVZekk9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2483','821','27','8','/donghuapian/8/27.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FOUVaekE9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2484','821','28','8','/donghuapian/8/28.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FOUVaelE9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2485','821','29','8','/donghuapian/8/29.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FOUVhekU9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2486','821','30','8','/donghuapian/8/30.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FOUVhM289''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2487','821','31','8','/donghuapian/8/31.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FOUVhek09''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2488','821','32','8','/donghuapian/8/32.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FOVVRWGc9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2489','821','33','8','/donghuapian/8/33.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FOVVRWG89''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2490','821','34','8','/donghuapian/8/34.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FOVVSWGc9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2491','821','35','8','/donghuapian/8/35.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FOVVSVEU9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2492','821','36','8','/donghuapian/8/36.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FOVVTWGc9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2493','821','37','8','/donghuapian/8/37.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FOVVTVFU9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2494','821','38','8','/donghuapian/8/38.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FOVVVVE09''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2495','821','39','8','/donghuapian/8/39.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FOVVXVEU9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2496','821','40','8','/donghuapian/8/40.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FOVVZek09''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2497','821','41','8','/donghuapian/8/41.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FOVVZM2c9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2498','821','42','8','/donghuapian/8/42.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FOVVhM2c9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2499','821','43','8','/donghuapian/8/43.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FOVVaM289''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2500','821','44','8','/donghuapian/8/44.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FOVVaekU9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2501','821','45','8','/donghuapian/8/45.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5VMUVRWGM9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2502','821','46','8','/donghuapian/8/46.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5FOVVhekk9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2503','821','47','8','/donghuapian/8/47.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5VMUVRWGs9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2504','821','48','8','/donghuapian/8/48.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5VMUVRVEE9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2505','821','49','8','/donghuapian/8/49.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5VMUVRVEk9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2506','821','50','8','/donghuapian/8/50.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5VMUVSVEE9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2507','821','51','8','/donghuapian/8/51.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5VMUVSVEk9''','2');");
E_D("replace into `phome_ecms_movie_urls` values('2508','821','52','8','/donghuapian/8/52.html','''WXpJNWIyUlJQVDA9'',''VFZSVk5VMUVTWGs9''','2');");

@include("../../inc/footer.php");
?>