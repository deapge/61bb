<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
define('EmpireCMSConfig',TRUE);

//数据库设置
$phome_use_db='mysql';	//数据库类型
$phome_use_dbver='5.0';	//数据库版本
$phome_db_server='localhost';	//数据库登陆地址
$phome_db_port='';	//端口，不填为按默认
$phome_db_username='61baobao';	//数据库用户名
$phome_db_password='zz123456';	//数据库密码
$phome_db_dbname='61baobao';	//数据库名
$phome_db_char='utf8';	//设置默认编码
$phome_db_dbchar='utf8';	//数据库默认编码
$dbtbpre='phome_';	//数据表前缀
$ecmslang='gb';	//语言包

//页面编码设置
$phome_ecms_charver='utf-8';	//安装帝国CMS的编码版本
$phome_headercharset=1;	//页面默认字符集,0=关闭 1=开启

//后台相关配置
$do_openonlinesetting=3;	//开启后台在线配置参数(0为关闭,1为开启防火墙配置,2为开启安全配置,3为全开启)

//其它配置
$do_openbqquery=1;	//开启标签支持sql语句查询(0为不支持,1为开启)
$do_openreadfile=0;	//开启标签支持读取本地文件,一般不要开启(0为不支持,1为开启)
$do_txtpath=ECMS_PATH.'d/txt/';	//文本型数据存放目录
$saveurlimgclearurl=0;	//远程保存图片自动去除图片的链接(0为保留,1为去除)
$ecmsdeftempid=0;	//默认模板组ID


//-------EmpireCMS.Seting.area-------

//后台安全设置
$do_loginauth='';	//登录认证码,如果设置登录需要输入此认证码才能通过
$do_ecookiernd='SWQkfG2DyDFji3sFNnGKwz5SqNme3D';	//后台登录COOKIE认证码(填写10~50个任意字符，最好多种字符组合)
$do_ckhloginfile=0;	//后台是否启用文件验证,0为验证,1为不验证
$do_ckhloginip=0;	//后台是否验证登录IP,0为不验证,1为验证
$do_theloginlog=0;	//是否记录登陆日志(0为记录,1为不记录)
$do_thedolog=0;		//是否记录操作日志(0为记录,1为不记录)

//COOKIE设置
$phome_cookiedomain='';		//cookie作用域
$phome_cookiepath='/';		//cookie作用路径
$phome_cookievarpre='rcyav';		//前台cookie变量前缀
$phome_cookieadminvarpre='ytdaz';		//后台cookie变量前缀
$phome_cookieckrnd='zhGTp48wkVL5JhjxqNJ2qTu4F2TfVx';	//COOKIE验证随机码(填写10~50个任意字符，最好多种字符组合)

//网站防火墙配置
$efw_open=0;	//开启防火墙(0为关闭,1为开启)
$efw_pass='';	//防火墙加密密钥(填写10~50个任意字符，最好多种字符组合)
$efw_adminloginurl='';	//允许后台登陆的域名,设置后必须通过这个域名才能访问后台
$efw_adminhour='';	//允许登陆后台的时间：0~23小时，多个时间点用半角逗号格开
$efw_adminweek='';	//允许登陆后台的星期：星期0~6，多个星期用半角逗号格开
$efw_adminckpassvar='';	//后台预登陆验证变量名
$efw_adminckpassval='';	//后台预登陆认证码
$efw_cleargettext='';	//屏蔽提交敏感字符，多个用半角逗号格开

//-------EmpireCMS.Seting.area-------


//文件类型
$tranpicturetype=',.jpg,.gif,.png,.bmp,.jpeg,';	//图片
$tranflashtype=',.swf,.flv,.dcr,';	//FLASH
$mediaplayertype=',.wmv,.asf,.wma,.mp3,.asx,.mid,.midi,';	//mediaplayer
$realplayertype=',.rm,.ra,.rmvb,.mp4,.mov,.avi,.wav,.ram,.mpg,.mpeg,';	//realplayer



//***************** 以下部分为缓存，不用设置 **************

//-------EmpireCMS.Public.Cache-------

//------------e_public
$public_r=array('sitename'=>'宝宝儿歌网',
'newsurl'=>'http://127.0.0.1/',
'filetype'=>'|.gif|.jpg|.swf|.rar|.zip|.mp3|.wmv|.txt|.doc|',
'filesize'=>2048,
'relistnum'=>8,
'renewsnum'=>50,
'min_keyboard'=>2,
'max_keyboard'=>20,
'search_num'=>56,
'search_pagenum'=>10,
'newslink'=>0,
'checked'=>0,
'pltime'=>20,
'searchtime'=>10,
'loginnum'=>5,
'logintime'=>60,
'addnews_ok'=>0,
'register_ok'=>0,
'indextype'=>'.html',
'goodlencord'=>0,
'goodtype'=>'',
'searchtype'=>'.html',
'exittime'=>32767,
'smalltextlen'=>160,
'defaultgroupid'=>1,
'fileurl'=>'/d/file/',
'install'=>0,
'phpmode'=>0,
'plsize'=>500,
'plincludesize'=>0,
'dorepnum'=>300,
'loadtempnum'=>50,
'bakdbpath'=>'bdata',
'bakdbzip'=>'zip',
'downpass'=>'EmpireCMS',
'filechmod'=>1,
'loginkey_ok'=>0,
'tbname'=>'game',
'limittype'=>0,
'plkey_ok'=>0,
'redodown'=>1,
'downsofttemp'=>'[ <a href=\"#ecms\" onclick=\"window.open(\'[!--down.url--]\',\'\',\'width=300,height=300,resizable=yes\');\">[!--down.name--]</a> ]',
'onlinemovietemp'=>'[ <a href=\"#ecms\" onclick=\"window.open(\'[!--down.url--]\',\'\',\'width=300,height=300,resizable=yes\');\">[!--down.name--]</a> ]',
'havefp'=>0,
'fpnum'=>0,
'lctime'=>1222406370,
'candocode'=>1,
'opennotcj'=>0,
'listpagetemp'=>'页次：[!--thispage--]/[!--pagenum--]&nbsp;每页[!--lencord--]&nbsp;总数[!--num--]&nbsp;&nbsp;&nbsp;&nbsp;[!--pagelink--]&nbsp;&nbsp;&nbsp;&nbsp;转到:[!--options--]',
'reuserpagenum'=>20,
'revotejsnum'=>100,
'readjsnum'=>100,
'qaddtran'=>1,
'qaddtransize'=>50,
'ebakthisdb'=>1,
'delnewsnum'=>300,
'markpos'=>5,
'markimg'=>'../data/mark/imgbg.gif',
'marktext'=>'',
'markfontsize'=>'5',
'markfontcolor'=>'',
'markfont'=>'../data/mark/cour.ttf',
'adminloginkey'=>1,
'php_outtime'=>5000,
'listpagefun'=>'sys_ShowListPage',
'textpagefun'=>'sys_ShowTextPage',
'adfile'=>'thea',
'notsaveurl'=>'',
'rssnum'=>50,
'rsssub'=>300,
'savetxtf'=>',',
'dorepdlevelnum'=>300,
'listpagelistfun'=>'sys_ShowListMorePage',
'listpagelistnum'=>10,
'infolinknum'=>100,
'searchgroupid'=>0,
'opencopytext'=>0,
'reuserjsnum'=>100,
'reuserlistnum'=>8,
'opentitleurl'=>1,
'searchtempvar'=>1,
'showinfolevel'=>0,
'navfh'=>'>',
'spicwidth'=>76,
'spicheight'=>76,
'spickill'=>1,
'jpgquality'=>100,
'markpct'=>100,
'redoview'=>24,
'reggetfen'=>0,
'regbooktime'=>30,
'revotetime'=>30,
'fpath'=>0,
'filepath'=>'',
'nreclass'=>',',
'nreinfo'=>',',
'nrejs'=>',',
'nottobq'=>',',
'defspacestyleid'=>1,
'canposturl'=>'',
'openspace'=>0,
'defadminstyle'=>1,
'realltime'=>0,
'closeip'=>'',
'openip'=>'',
'hopenip'=>'',
'plface'=>'||[~e.jy~]##1.gif||[~e.kq~]##2.gif||[~e.se~]##3.gif||[~e.sq~]##4.gif||[~e.lh~]##5.gif||[~e.ka~]##6.gif||[~e.hh~]##7.gif||[~e.ys~]##8.gif||[~e.ng~]##9.gif||[~e.ot~]##10.gif||',
'plfacenum'=>10,
'textpagelistnum'=>6,
'memberlistlevel'=>0,
'ebakcanlistdb'=>0,
'keytog'=>0,
'keytime'=>30,
'keyrnd'=>'BaTgTLunwrJFBeGFRnMWjbPEFA9tmY',
'checkdorepstr'=>',0,0,0,0,',
'regkey_ok'=>0,
'opengetdown'=>0,
'gbkey_ok'=>0,
'fbkey_ok'=>0,
'newaddinfotime'=>0,
'classnavs'=>'<a href=\"http://127.0.0.1/tingerge/\">听儿歌</a>&nbsp;|&nbsp;<a href=\"http://127.0.0.1/jianggushi/\">儿童故事</a>&nbsp;|&nbsp;<a href=\"http://127.0.0.1/xuezhishi/\">学知识</a>&nbsp;|&nbsp;<a href=\"http://127.0.0.1/wanyouxi/\">儿童游戏</a>&nbsp;|&nbsp;<a href=\"http://127.0.0.1/donghuapian/\">动画片</a>&nbsp;|&nbsp;<a href=\"http://127.0.0.1/wudao/\">舞蹈</a>&nbsp;|&nbsp;<a href=\"http://127.0.0.1/miyu/\">谜语</a>&nbsp;|&nbsp;<a href=\"http://127.0.0.1/tonghua/\">童话故事</a>&nbsp;|&nbsp;<a href=\"http://127.0.0.1/jiaoan/\">教案</a>',
'plgroupid'=>0,
'adminstyle'=>',1,2,',
'docnewsnum'=>300,
'openschall'=>0,
'schallfield'=>1,
'schallminlen'=>3,
'schallmaxlen'=>20,
'schallnum'=>20,
'schallpagenum'=>16,
'dtcanbq'=>1,
'dtcachetime'=>43200,
'defpltempid'=>1,
'buycarnum'=>0,
'shopddgroupid'=>0,
'repkeynum'=>0,
'regacttype'=>0,
'opengetpass'=>0,
'hlistinfonum'=>10,
'qlistinfonum'=>25,
'dtncanbq'=>1,
'dtncachetime'=>43200,
'readdinfotime'=>0,
'qeditinfotime'=>0,
'onclicktype'=>0,
'onclickfilesize'=>10,
'onclickfiletime'=>60,
'schalltime'=>0,
'defprinttempid'=>1,
'opentags'=>1,
'tagstempid'=>4,
'usetags'=>',4,',
'chtags'=>'',
'tagslistnum'=>25,
'closeqdt'=>0,
'settop'=>0,
'qlistinfomod'=>0,
'pl_num'=>20,
'gb_num'=>20,
'member_num'=>20,
'space_num'=>25,
'infolday'=>0,
'filelday'=>0,
'dorepkey'=>0,
'dorepword'=>0,
'onclickrnd'=>'',
'keybgcolor'=>'',
'keyfontcolor'=>'',
'keydistcolor'=>'',
'indexpageid'=>0,
'closeqdtmsg'=>'',
'openfileserver'=>0,
'fs_purl'=>'',
'closemods'=>'',
'deftempid'=>0,'add_domain'=>'haoid.cn','add_beian'=>'www.haoid.cn','add_www.92game.net.ming'=>'儿歌网','add_siteurl'=>'127.0.0.1','add_sitename_simple'=>'好站长资源儿歌网','add_baidushareID'=>'14351');
//------------e_public

//-------EmpireCMS.Public.Cache-------

$emod_pubr=Array('linkfields'=>'|');

$etable_r=array();
$etable_r['game']=Array('deftb'=>'1',
'yhid'=>0,
'mid'=>4);
$etable_r['news']=Array('deftb'=>'1',
'yhid'=>0,
'mid'=>5);


$emod_r=array();
$emod_r[4]=Array('mid'=>4,
'mname'=>'儿歌系统模型',
'qmname'=>'FLASH',
'defaulttb'=>1,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,special.field,newstime,titlepic,pinyin,star,filesize,flashurl,width,height,flashsay,gamebigpic,recommendedage,cjinfoid,cjinfo,monthclick,istagok,flashurl_4usky,gamebigpic_4usky,titlepic_4usky,sign,volumenum,cjmoviepath,isover,state,checkover,spic_err,bpic_err,',
'qenter'=>',title,special.field,titlepic,pinyin,filesize,flashurl,width,height,flashsay,gamebigpic,recommendedage,cjinfoid,cjinfo,monthclick,istagok,cjmoviepath,',
'listtempf'=>',title,newstime,titlepic,pinyin,star,filesize,flashurl,flashsay,gamebigpic,recommendedage,flashurl_4usky,gamebigpic_4usky,titlepic_4usky,sign,volumenum,isover,state,bpic_err,',
'tempf'=>',title,newstime,titlepic,pinyin,star,filesize,flashurl,width,height,flashsay,gamebigpic,recommendedage,cjinfoid,cjinfo,monthclick,istagok,flashurl_4usky,gamebigpic_4usky,titlepic_4usky,volumenum,cjmoviepath,isover,state,bpic_err,',
'mustqenterf'=>',title,gamebigpic,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>',title,pinyin,flashsay,',
'cj'=>',title,newstime,titlepic,pinyin,star,filesize,flashurl,width,height,flashsay,gamebigpic,recommendedage,cjinfoid,cjinfo,flashurl_4usky,gamebigpic_4usky,titlepic_4usky,',
'canaddf'=>',title,newstime,titlepic,pinyin,star,filesize,flashurl,width,height,flashsay,gamebigpic,recommendedage,cjinfoid,cjinfo,monthclick,istagok,flashurl_4usky,gamebigpic_4usky,titlepic_4usky,sign,volumenum,cjmoviepath,isover,state,checkover,spic_err,bpic_err,',
'caneditf'=>',title,newstime,titlepic,pinyin,star,filesize,flashurl,width,height,flashsay,gamebigpic,recommendedage,cjinfoid,cjinfo,monthclick,istagok,flashurl_4usky,gamebigpic_4usky,titlepic_4usky,sign,volumenum,cjmoviepath,isover,state,checkover,spic_err,bpic_err,',
'tbdataf'=>',',
'tobrf'=>',title,special.field,titlepic,newstime,pinyin,star,filesize,flashurl,width,height,flashsay,',
'dohtmlf'=>',title,special.field,titlepic,newstime,pinyin,star,filesize,flashurl,width,height,flashsay,gamebigpic,cjinfoid,cjinfo,monthclick,istagok,flashurl_4usky,gamebigpic_4usky,titlepic_4usky,sign,recommendedage,volumenum,cjmoviepath,isover,state,checkover,spic_err,bpic_err,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',',
'ubbeditorf'=>',',
'pagef'=>'',
'smalltextf'=>',flashsay,',
'filef'=>',',
'imgf'=>',titlepic,gamebigpic,',
'flashf'=>',flashurl,',
'linkfields'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|5|14|15|16|17|18|19|20|21|22|23|24|25|26|27|28|29|30|31|32|33|34|35|36|37|38|39|41|42|43|341|342|343|344|345|346|347|348|349|350|351|352|',
'tid'=>4,
'tbname'=>'game');
$emod_r[5]=Array('mid'=>5,
'mname'=>'新闻系统模型',
'qmname'=>'新闻',
'defaulttb'=>0,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,ftitle,special.field,newstime,titlepic,smalltext,writer,befrom,newstext,author,',
'qenter'=>',title,ftitle,special.field,titlepic,smalltext,writer,befrom,newstext,author,',
'listtempf'=>',title,ftitle,newstime,titlepic,smalltext,diggtop,author,',
'tempf'=>',title,ftitle,newstime,titlepic,smalltext,writer,befrom,newstext,diggtop,author,',
'mustqenterf'=>',title,newstext,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>',title,smalltext,author,',
'cj'=>',title,ftitle,newstime,titlepic,smalltext,writer,befrom,newstext,author,',
'canaddf'=>',title,ftitle,newstime,titlepic,smalltext,writer,befrom,newstext,author,',
'caneditf'=>',title,ftitle,newstime,titlepic,smalltext,writer,befrom,newstext,author,',
'tbdataf'=>',writer,befrom,newstext,',
'tobrf'=>',title,special.field,titlepic,newstime,ftitle,smalltext,writer,befrom,newstext,diggtop,',
'dohtmlf'=>',title,special.field,titlepic,newstime,ftitle,smalltext,writer,befrom,newstext,diggtop,author,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',newstext,',
'ubbeditorf'=>',',
'pagef'=>'newstext',
'smalltextf'=>',smalltext,',
'filef'=>',',
'imgf'=>',titlepic,',
'flashf'=>',',
'linkfields'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|45|46|47|48|49|50|51|52|53|54|55|56|57|58|59|60|61|62|63|64|65|66|67|68|69|70|71|72|73|74|75|76|77|78|79|80|81|82|83|84|85|86|87|88|89|90|91|92|93|94|95|96|97|98|99|100|101|102|103|104|105|106|107|108|109|110|111|112|113|114|115|116|117|118|119|120|121|122|123|124|125|126|127|128|129|130|131|132|133|134|135|136|137|138|139|140|141|142|143|144|145|146|147|148|149|150|151|152|153|154|155|156|157|158|159|160|161|162|163|164|165|166|167|168|169|170|171|172|173|174|175|176|177|178|179|180|181|182|183|184|185|186|187|189|190|191|192|193|194|195|196|197|198|201|202|203|204|205|206|208|209|210|211|212|213|214|215|216|217|218|219|220|221|222|224|225|226|227|228|229|230|231|232|233|234|235|236|237|238|240|241|242|243|244|245|246|247|248|249|250|251|252|253|254|256|257|258|259|260|261|262|263|264|265|266|267|268|269|271|272|273|274|275|276|277|278|279|281|282|283|285|286|287|288|289|290|292|293|294|295|296|297|298|299|300|301|302|303|305|306|307|308|309|310|311|312|313|314|316|317|318|319|320|321|323|324|325|326|328|329|330|331|332|333|334|336|337|338|339|340|',
'tid'=>5,
'tbname'=>'news');


//-------EmpireCMS.Public.Cache-------

?>