<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$public_r['add_www.92game.net.ming']?>:儿歌-儿歌视频大全-儿歌串烧50首-儿歌大全-儿童歌曲-儿童歌曲大全-儿歌童谣</title>
<meta name="keywords" content="儿童,儿歌,儿歌大全,儿歌视频大全,经典童谣,童谣大全,儿歌串烧50首,儿童歌曲大全,儿童歌曲,儿歌童谣,儿歌播放器,幼儿儿歌,幼儿故事,erge,动画片,儿童动画片,儿歌mp3,儿歌下载,英语儿歌,英文儿歌,儿歌童谣,儿歌flash,幼儿儿歌,儿歌大全,六一儿童网,宝宝的儿歌网." />
<meta name="description" content="<?=$public_r['add_www.92game.net.ming']?>收集儿歌视频大全，儿童小游戏，儿童故事，儿童歌曲，儿童歌曲大全，儿歌童谣，儿童故事，经典儿歌，儿童游戏，儿歌下载，儿童音乐，儿童动画片，儿童文学，宝宝主页。是宝宝妈妈最喜欢的儿歌大全网站。独立自主开发的亲宝儿歌播放器是百度搜索开放平台合作伙伴。"/>
<link rel="stylesheet" type="text/css" href="/css/index.css"/>
<script language="javascript" src="/js/jquery-1.7.min.js"></script>
<script language="javascript" src="/js/func.js"></script>
<link rel="shortcut icon" href="favicon.ico"/>
<link rel="stylesheet" href="/css/colorbox.css" type="text/css" />
<script language="javascript" src="/js/jquery.colorbox.js"></script>
<script language="javascript" src="/js/xqfunc.js"></script>
</head>
<body>
<!-- 顶部开始 --> 

<div id="shortcut">
  <div class="w">
    <ul>
      <li><a href="/" target="_blank"><?=$public_r['add_www.92game.net.ming']?></a></li>
      <li><a href="/s/n180.html" target="_blank">最新儿歌</a></li>
      <li><a href="/s/h180.html" target="_blank">热门儿歌</a></li>
      <li><a href="/s/t180.html" target="_blank">推荐儿歌</a></li>
     
      
    </ul>
    <ul class="divLoginBar">
       
      <li id="add"><a onclick="AddFavorite('http://<?=$public_r['add_siteurl']?>','<?=$public_r['add_sitename']?>:儿歌-儿童小游戏-儿歌大全-儿童歌曲-儿童歌曲大全-儿歌视频大全-儿歌童谣-童谣大全-儿歌播放器-儿童资源_<?=$public_r['add_siteurl']?>')" style="cursor:hand" href="javascript:;">加入收藏</a></li>
      <li id="conf"><a onclick="SetHome(this,'')" href="javascript:;">设为首页</a></li>
    </ul>
  </div>
</div>
<div class="c"></div>

<div id="bb_box"> <div id="header">
  <div id="bb_logo"><a href="/"><img alt="<?=$public_r['add_www.92game.net.ming']?>" src="/css/logo.gif"/></a></div>
  <div id="topgg"> <script src="/d/js/acmsd/thea2.js"></script></div>
  <div class="c"></div>
  <div id="bb_nav">
    <ul>
      <li id="home" class="current" ><a href="/" >首页</a></li>
      <li  id="c1"><a href="/tingerge/">听儿歌</a></li>
      <li id="c2"><a href="/jianggushi/">儿童故事</a></li>
      <li id="c3"><a href="/xuezhishi/">学知识</a></li>
      <li id="c4"><a href="/wanyouxi/">儿童游戏</a></li>
      <li id="c5"><a href="/donghuapian/">动画片</a></li>
      <li  id="TV"><a href="/fm/">亲宝电台</a></li>
      <li id="park"><a href="http://www.taohi.cn"  target="_blank" >宝宝乐园</a></li>
      <li id="c199"><a href="/jiaoan/">幼儿园教案</a> </li>
    </ul>
    <div class="nav_search">
            <div class="seachslect" onmouseout="selectseout('select_tops')" onmouseover="selectseover('select_tops')">
            	<span class="currcodes">
                <em id="selectvalue">视频</em>
                    <div id="select_tops" class="subtop_select" style="display: none;">
                    	<a onclick="return search_show('1','0',this)" href="javascript:void(0)">视频</a>
                        <a onclick="return search_show('2','0',this)" href="javascript:void(0)">文章</a>
                    </div>
                </span>
            </div>      
             <form name="fsearch" method="post" action="/e/search/index.php" target="_blank">
              <input type="hidden" name="show" value="title">
              <input id="tempid" type="hidden" name="tempid" value="1">
              <input id="tbname" type="hidden" name="tbname" value="game">
                <input type="hidden" name="show" value="title,smalltext,newstext,writer" />
                <input id="classid" name="classid" type="hidden" value="0" />
                <input name="keyboard" type="text"  class="nav_box"  value="输入儿歌名称" id="keys"/>
              <input type="submit" value="搜索" class="nav_btn">
              <div class="c"></div>
            </form>
      </div>
    <div class="c"></div>
  </div>
  <div class="extra">
   
    <ul>
      <li><a href="/tingerge/zhongwenerge/" target="_blank" >中文儿歌</a></li>
      <li><a href="/tingerge/yingwenerge/" target="_blank">英文儿歌</a></li>
      <li><a href="/tingerge/tongyao/" target="_blank" >童谣</a></li>
      <li><a href="/donghuapian/" target="_blank">儿童动画片</a></li>
      <li><a href="/jianggushi/jingdianxiaogushi/" target="_blank" >儿童故事</a></li>
      <li><a href="/jianggushi/tonghuagushi/" target="_blank">童话</a> <a href="/jianggushi/yuyangushi/" target="_blank">寓言</a></li>
      <li><a href="/jianggushi/chengyugushi/" target="_blank">成语故事</a></li>
      <li><a href="/jianggushi/shenhuachuanshuo/" target="_blank">神话传说</a></li>
      <li><a href="/wudao/ertongwudao/" target="_blank">儿童舞蹈</a></li>
      <li><a href="/xuezhishi/tangshisongci/" target="_blank">唐诗宋词</a></li>
      <li><a href="/xuezhishi/kuailepinyin/" target="_blank">快乐拼音</a></li>
      <li><a href="/xuezhishi/youerqimeng/" target="_blank">幼儿启蒙</a></li>
      <li><a href="/xuezhishi/yingyujiaoyu/" target="_blank">英语教育</a></li>
      <li><a href="/xuezhishi/baikechangshi/" target="_blank">百科常识</a></li>
      <li><a href="/miyu/" target="_blank">谜语</a></li>
      <li><a href="/tonghua/" target="_blank">童话故事</a></li>

    </ul>
  </div>
</div> 
</div>
  <div class="line"> <span class="l_line"></span> <span class="r_line"></span>
    <div class="c"></div>
  </div>
  <div id="content">
    <div class="box_content">
      <div class="head_top"></div>
      <div class="head_mid">
        <div class="rollBox">
          <div class="an_left"> <img onmousedown="ISL_GoDown()" onmouseup="ISL_StopDown()" onmouseout="ISL_StopDown()"  class="img1" src="/images/slide_left.gif" width="14" height="45" /> </div>
          <div class="Tool">
            <div class="Cont" id="ISL_Cont">
              <div class="ScrCont">
                <div id="List1"> 
                  <!-- 图片列表 begin 头条信息 --> 
                 <? @sys_GetEcmsInfo(0,24,8,0,13,15,0);?><!-- 图片列表 end --> 
                </div>
                <div id="List2"></div>
              </div>
            </div>
          </div>
          <div class="an_right"> <img  onmousedown="ISL_GoUp()" onmouseup="ISL_StopUp()" onmouseout="ISL_StopUp()"  class="img2" src="/images/slide_right.gif" width="14" height="45" /> </div>
          <div class="c"></div>
        </div>
        <script language="javascript" src="/js/roll.js"></script> 
        <!-- 列表第一行开始 -->
        <div class="list_box list_style4">
          <div class="list_l"> <span class="list_btn"><a href="/tingerge/" target="_blank">儿童歌曲</a></span> <span class="list_content"><!--推1--> <? @sys_GetEcmsInfo(1,7,20,0,2,22,0,'isgood=1');?> </span> <span class="list_more"> >>
            <ul><!--推2-->
             <? @sys_GetEcmsInfo(1,8,32,0,0,28,0,'isgood=2');?>
              <div class="c"></div>
            </ul>
            </span>
            <div class="c"></div>
          </div>
          <div class="list_r"> <span class="list_btn"><a href="/donghuapian/" target="_blank">动画片</a></span> <span class="list_content"><!--推1--> <? @sys_GetEcmsInfo(5,7,20,0,2,22,0,'isgood=1');?> </span> <span class="list_more"> >>
            <ul>
             <!--推2-->
             <? @sys_GetEcmsInfo(5,8,32,0,0,28,0,'isgood=2');?>
              <div class="c"></div>
            </ul>
            </span>
            <div class="c"></div>
          </div>
          <div class="c"></div>
        </div>
        <!-- 列表第一行结束 --> 
        <!-- 列表第二行开始 -->
        <div class="list_box list_style">
          <div class="list_l"> <span class="list_btn"><a href="/jianggushi/" target="_blank">儿童故事</a></span> <span class="list_content"> <!--推1--> <? @sys_GetEcmsInfo(2,7,20,0,2,22,0,'isgood=1');?> </span> <span class="list_more"> >>
            <ul>
              <!--推2-->
             <? @sys_GetEcmsInfo(2,8,32,0,0,28,0,'isgood=2');?>
              <div class="c"></div>
            </ul>
            </span>
            <div class="c"></div>
          </div>
          <div class="list_r"> <span class="list_btn"><a href="/xuezhishi/" target="_blank">儿童知识</a></span> <span class="list_content"><!--推1--> <? @sys_GetEcmsInfo(3,7,20,0,2,22,0,'isgood=1');?> </span> <span class="list_more"> >>
            <ul>
            <!--推2-->
             <? @sys_GetEcmsInfo(3,8,32,0,0,28,0,'isgood=2');?>
              <div class="c"></div>
            </ul>
            </span>
            <div class="c"></div>
          </div>
          <div class="c"></div>
        </div>
        <!-- 列表第二行结束 --> 
        <!-- 列表第三行开始 -->
        <div class="list_box list_style3">
          <div class="list_l"> <span class="list_btn"><a href="/wanyouxi/" target="_blank">儿童游戏</a></span> <span class="list_content"><!--推1--> <? @sys_GetEcmsInfo(4,7,20,0,2,22,0,'isgood=1');?> </span><span class="list_more"> >>
            <ul>
            <!--推2-->
             <? @sys_GetEcmsInfo(4,8,32,0,0,28,0,'isgood=2');?>
              <div class="c"></div>
            </ul>
            </span>
            <div class="c"></div>
          </div>
          <div class="list_r"> <span class="list_btn"><a href="/s/" target="_blank">儿童专题</a></span> <span class="list_content"> <a href="/s/katongban/" target="_blank" ><font color=red>亲宝儿歌</font></a> <a href="/s/h50.html" target="_blank" ><font color="red">儿歌串烧50首</font></a> <a href="/s/ertongdianshiju/" ><font>儿童剧场</font></a> <a href="/s/qinbao/" target="_blank"><font color=red>亲宝儿歌经典系列</font></a> <a href="/s/qiaohulezhixiaotiandi/" target="_blank">巧虎乐智小天地</a> </span> <span class="list_more"> >>
            <ul>
             
              <li><a href="/s/xiaoyouxi/" target="_blank" >儿童小游戏</a></li>
              <li><a href="/zt/jingdianerge/" target="_blank" >经典儿歌</a></li>
              <div class="c"></div>
            </ul>
            </span>
            <div class="c"></div>
          </div>
          <div class="c"></div>
        </div>
        <!-- 列表第三行结束 -->
        
       
      </div>
      <div class="head_bottom"></div>
    </div>
 <div class="ad"> <!-- 广告位：首页 横幅3 960x60 --><script src="/d/js/acmsd/thea4.js"></script></div>
    <div class="box_content z">
      <div class="rec_box">
        <div class="rec_top"></div>
        <div class="rec_mid">
          <h3 class="rec_t"><span class="zs">儿童资源</span></h3>
          <ul >
            <li><a href="/tingerge/zhongwenerge/" target="_blank" >中文儿歌</a></li>
            <li class="margin_l"><a href="/wudao/ertongwudao/" target="_blank">儿童舞蹈</a></li>
            <li><a href="/tingerge/tongyao/" target="_blank" >童谣</a></li>
            <li class="margin_l"><a href="/donghuapian/ertongdonghuapian/" target="_blank">儿童动画片</a></li>
            <li><a href="/jianggushi/jingdianxiaogushi/" target="_blank" >儿童故事</a></li>
            <li class="margin_l"><a href="/xuezhishi/tangshisongci/"  target="_blank" >唐诗宋词</a></li>
            <li><a href="/miyu/" target="_blank">谜语</a></li>
            <li class="margin_l"><a href="/tonghua/" target="_blank">童话故事</a></li>
            <div class="c"></div>
          </ul>
          <ul class="rec_extra">
            <li><a href="/jianggushi/chengyugushi/" target="_blank" >成语故事</a></li>
            <li class="margin_l"><a href="/jianggushi/sanguoyanyi/" target="_blank">三国演义</a></li>
            <li><a href="/xuezhishi/youerqimeng/" target="_blank" >幼儿启蒙</a></li>
            <li class="margin_l"><a href="/xuezhishi/xuehanzi/" target="_blank">学汉字</a></li>
            <li><a href="/wanyouxi/yizhiyouxi/" target="_blank">益智游戏</a></li>
            <li class="margin_l"><a href="/wanyouxi/pintutianse/" target="_blank" >拼图游戏</a></li>
            <li><a href="/jianggushi/yuyangushi/" target="_blank">寓言故事
</a></li>
            <li class="margin_l"><a href="/jiaoan/" target="_blank">幼儿园教案</a></li>
            <div class="c"></div>
          </ul>
        </div>
        <div class="rec_bottom"><b></b></div>
      </div>
      <!-- 广告位开始 -->
      <div class="slide"> 
        <!-- 首页焦点轮播图 --> 
        <div id="picplayer" style="position:relative;overflow:hidden;width:476px;height:184px;clear:none;"> 
         loading... 
        </div> 
      </div>
      <!-- 广告位结束 --> 
      <!-- 热门儿歌开始 -->
      <div class="hot">
        <div class="hot_top">
          <div class="hot_left"></div>
          <div class="hot_mid">
            <h3><span class="zs">热门儿歌</span></h3>
            <div class="roll_btn"> <span class="roll_l" onmousedown="ISL_GoDownx()" onmouseup="ISL_StopDownx()" onmouseout="ISL_StopDownx()"></span> <span class="roll_r" onmousedown="ISL_GoUpx()" onmouseup="ISL_StopUpx()" onmouseout="ISL_StopUpx()"></span>
              <div class="c"></div>
            </div>
          </div>
          <div class="hot_right"></div>
        </div>
        <div class="rollBoxx">
          <div class="Contx" id="ISL_Contx">
            <div class="ScrContx">
              <div id="List1x"> 
                <!-- 图片列表 begin --> 
                <? @sys_GetEcmsInfo(1,12,8,0,1,27,0);?>
                <!-- 图片列表 end --> 
              </div>
              <div id="List2x"></div>
            </div>
          </div>
        </div>
        <script language="javascript" src="/js/roll2.js"></script>
          <script language="javascript" src="/js/get_cookie_history.js"></script>
        <div class="hot_list">
<img src="/images/erge_history.gif">
        <ul class="play_history1">
        <div class="c"></div>
          </ul>
        </div>
        <div class="hot_bottom"></div>
      </div>  
<script> history_show();</script>
      <!-- 热门儿歌结束 -->
      <div class="c"></div>
    </div>
    
    <div class="box_content"> 
      <!-- 排名开始 -->
      <div class="rank">
        <div class="rank_top"></div>
        <div class="rank_mid">
          <h3><span class="zs">排行榜</span></h3>
          <div class="top10"></div>
          <ul>
            <? @sys_GetEcmsInfo(0,10,14,1,4,26,0);?>           <div class="c"></div>
          </ul>
          <div class="c"></div>
        </div>
        <div class="rank_bottom"></div>
      </div>
      <!-- 排名结束 --> 
      <!-- 推荐开始 -->
      <div class="recommend">
        <div class="recommend_top">
          <h3><span class="zs">推荐专题</span></h3>
          <span class="update"></span>
          <i class="more mt">
          <a href="/s/" target="_blank">更多</a>
          </i>
          <p onclick="AddFavorite('',document.title)"><img src="/images/sc1.gif"/>请记得我们的网站<?=$public_r[add_siteurl]?> 点此收藏</p>
          <div class="c"></div>
        </div>
        <div class="recommend_mid">
         <dl>
            <dd> <a href="/s/youergequ/" target="_blank" ><img border="0" src="/images/zt/24.jpg"  alt="幼儿歌曲大全" /></a> </dd>
            <dt> <a href="/s/youergequ/" target="_blank">幼儿歌曲大全</a> </dt>
          </dl>
          <dl>
            <dd> <a href="/s/qiaohuyouxi/" target="_blank" ><img border="0" src="/images/zt/12.jpg"  alt="巧虎快乐版2011"/></a> </dd>
            <dt> <a href="/s/qiaohuyouxi/" target="_blank">巧虎快乐版2011</a> </dt>
          </dl>
          <dl>
            <dd> <a href="/s/qinbaoshici/" target="_blank" ><img border="0" src="/images/zt/13.jpg" alt="亲宝诗词" /></a> </dd>
            <dt> <a href="/s/qinbaoshici/" target="_blank">亲宝诗词</a> </dt>
          </dl>
          <dl>
            <dd> <a href="/s/ertongshuiqiangushi/" target="_blank" ><img border="0" src="/images/zt/14.jpg" alt="睡前故事" /></a> </dd>
            <dt> <a href="/s/ertongshuiqiangushi/" target="_blank">睡前故事</a> </dt>
          </dl>
          <dl>
            <dd> <a href="/s/lianliankan/" target="_blank" ><img border="0" src="/images/zt/15.jpg"  alt="连连看"/></a> </dd>
            <dt> <a href="/s/lianliankan/" target="_blank">连连看</a> </dt>
          </dl>
          <dl>
            <dd> <a href="/s/h50.html" target="_blank" ><img border="0" src="/images/zt/16.jpg"  alt="儿歌串烧50首" /></a> </dd>
            <dt> <a href="/s/h50.html" target="_blank">儿歌串烧50首</a> </dt>
          </dl>
          <dl>
            <dd> <a href="/s/haotingdeerge.html" target="_blank" ><img border="0" src="/images/zt/17.jpg" alt="好听的儿歌"  /></a> </dd>
            <dt> <a href="/s/haotingdeerge.html" target="_blank">好听的儿歌</a> </dt>
          </dl>
          <dl>
            <dd> <a href="/s/ertonggequdaquan/" target="_blank" ><img border="0" src="/images/zt/18.jpg"  alt="儿童歌曲大全" /></a> </dd>
            <dt> <a href="/s/ertonggequdaquan/" target="_blank">儿童歌曲大全</a> </dt>
          </dl>
          <dl>
            <dd> <a href="/s/ergedaquan100shou/" target="_blank" ><img border="0" src="/images/zt/19.jpg"  alt="儿歌大全100首" /></a> </dd>
            <dt> <a href="/s/ergedaquan100shou/" target="_blank">儿歌大全100首</a> </dt>
          </dl>
          <dl>
            <dd> <a href="/s/sanzijing/" target="_blank" ><img border="0" src="/images/zt/20.jpg"  alt="三字经" /></a> </dd>
            <dt> <a href="/s/sanzijing/" target="_blank">三字经</a> </dt>
          </dl>
          <dl>
            <dd> <a href="/s/beva.html" target="_blank" ><img border="0" src="/images/zt/21.jpg" alt="贝瓦儿歌" /></a> </dd>
            <dt> <a href="/s/beva.html" target="_blank">贝瓦儿歌</a> </dt>
          </dl>
          <dl>
            <dd> <a href="/s/qinbao/" target="_blank" ><img border="0" src="/images/zt/22.jpg"  alt="亲宝儿歌经典系列" /></a> </dd>
            <dt> <a href="/s/qinbao/" target="_blank">亲宝儿歌经典系列</a> </dt>
          </dl>
          <dl>
            <dd> <a href="/s/youergushi/" target="_blank" ><img border="0" src="/images/zt/23.jpg" alt="幼儿故事大全"  /></a> </dd>
            <dt> <a href="/s/youergushi/" target="_blank">幼儿故事大全</a> </dt>
          </dl>
          <dl>
            <dd> <a href="/s/katongban/" target="_blank" ><img border="0" src="/images/zt/11.jpg" alt="亲宝儿歌" /></a> </dd>
            <dt> <a href="/s/katongban/" target="_blank">亲宝儿歌</a> </dt>
          </dl>
          
        </div>
        <div class="recommend_bottom"></div>
      </div>
      <!-- 推荐结束 -->
      <div class="c"></div>
    </div>
    <div class="ad"> <!-- 广告位：首页 横幅3 960x60 --><script src="/d/js/acmsd/thea4.js"></script></div>

	<div class="box_content">
      <div class="yl_top">
         <a href="/donghuapian/" target="_blank"> <h3 class="lesson_dhp"><span class="zs">动画片</span></h3></a>
          <i class="more mt">
			<a target="_blank" href="/donghuapian/">更多</a>
		  </i>
          <div class="c"></div>
      </div>
      <div class="yl_mid">  
      	<span class="channel3" style="display:block"> 
            <? @sys_GetEcmsInfo(5,55,12,0,2,1,0,'','id DESC');?>
			<div class="c"></div>
	        <div class="list_yl" style="display:block">
    	      <ul>
        	    <? @sys_GetEcmsInfo(5,48,20,0,0,28,0,'','id DESC');?>
            	<div class="c"></div>
          	  </ul>
        	</div>
         </span>        
        </div>
      <div class="yl_bottom"></div>
    </div>
    
    <div class="box_content">
      <div class="yl_top">
           <a href="/tingerge/" target="_blank"><h3 class="lesson_erge"><span class="zs">儿歌</span></h3></a>
          <i class="more mt">
			<a target="_blank" href="/tingerge/">更多</a>
		  </i>
          <div class="c"></div>
      </div>
      <div class="yl_mid"> 
      <span class="channel2" style="display:block">
 		<? @sys_GetEcmsInfo(1,55,12,0,2,1,0,'','id DESC');?>        <div class="c"></div>
        <div class="list_yl" style="display:block">
          <ul>
            <? @sys_GetEcmsInfo(1,48,20,0,0,28,0,'','id DESC');?>
            <div class="c"></div>
          </ul>
        </div>
        </span> </div>
      <div class="yl_bottom"></div>
    </div>
    <div class="idxad960_1"><!-- 广告 首页 横幅4 960x60 --><script src="/d/js/acmsd/thea4.js"></script></div>
    <div class="box_content">
      <div class="yl_top">
       <a href="/jiaoan/" target="_blank"> <h3 class="lesson"><span class="zs">幼儿园教案</span></h3></a>
        <span class="update">今日更新<span style="color:red">10</span>新篇教案</span> <i class="more"><a href="/jiaoan/" target="_blank">更多</a></i>
        <div class="c"></div>
      </div>
      <div class="yl_mid" id="yl_mid">
        <div class="list_yl remove">
          <ul>
            <? @sys_GetEcmsInfo(199,96,20,0,0,28,0);?>
            <div class="c"></div>
          </ul>
        </div>
      </div>
      <div class="yl_bottom"></div>
    </div>
    <div class="box_content">
      <div class="yl_top">
       <a href="/miyu/" target="_blank"> <h3 class="miyu_bt"><span class="zs">谜语</span></h3></a>
        <span class="update">今日更新<span style="color:red">10</span>最新谜语</span> <i class="more"><a href="/miyu/" target="_blank">更多</a></i>
        <div class="c"></div>
      </div>
      <div class="yl_mid" id="yl_mid">
        <div class="list_yl remove">
          <ul>
           <? @sys_GetEcmsInfo(44,96,20,0,0,28,0);?>
           <div class="c"></div>
          </ul>
        </div>
      </div>
      <div class="yl_bottom"></div>
    </div>
    <div class="box_content">
      <div class="yl_top">
       <a href="/tonghua/"target="_blank"> <h3 class="tonghua_bt"><span class="zs">童话故事</span></h3></a>
        <span class="update">今日更新<span style="color:red">10</span>最新童话故事</span> <i class="more"><a href="/tonghua/" target="_blank">更多</a></i>
        <div class="c"></div>
      </div>
      <div class="yl_mid" id="yl_mid">
        <div class="list_yl remove">
          <ul>
            <? @sys_GetEcmsInfo(188,96,20,0,0,28,0);?>
             <div class="c"></div>
          </ul>
        </div>
      </div>
      <div class="yl_bottom"></div>
    </div>
    <div class="box_content">
      <div class="yl_top">
        <h3 class="links"><span class="zs">友情链接</span></h3>
        <span class="links_about"></span> <i class="more"></i>
        <div class="c"></div>
      </div>
      <div class="yl_mid">
        <p class="f_list"> <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select * from [!db.pre!]enewslink where checked=1 order by myorder',20,24,0);
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
             <a href="<?=$bqr[lurl]?>" target="_blank"><?=$bqr[lname]?></a>
           <?php
}
?>
</div>
    <div class="yl_bottom"></div>  
</div>
</div>
<!-- 尾部开始 -->
<!-- 尾部开始 --> 
  <div id="footer_wrapx">
  	<div id="footer_x">
  		<div id="footer_content">
        	<p class="about"><a href="/info/about.html" target="_blank">关于我们</a> | <a href="/info/contact.html" target="_blank">联系我们</a> | <a href="/info/terms.html" target="_blank">服务条款</a> | <a href="/info/privacy.html" target="_blank">隐私保护</a> | <a href="/info/map.html" target="_blank">网站地图</a> | <a href="/info/ad.html" target="_blank">广告服务</a> | <a href="/info/link.html" target="_blank">友情链接</a> | <a href="/info/help.html" target="_blank">网站帮助</a> | <a href="/info/upload.html" target="_blank">作品投稿</a> </p>
            <p><a href="http://<?=$public_r['add_siteurl']?>/"><?=$public_r['add_www.92game.net.ming']?></a>专注于提供：<a href="http://<?=$public_r['add_siteurl']?>" target="_blank" alt="儿童歌曲大全"><b>儿童歌曲</b></a>、<b><a href="http://<?=$public_r['add_siteurl']?>/donghuapian/" target="_blank" alt="儿童动画片">动画片</a></b>、<a href="http://<?=$public_r['add_siteurl']?>/wanyouxi/" target="_blank" alt="儿童小游戏大全"><b>儿童小游戏</b></a>力争做最好的儿童网站。<br />
</p>
            <p>Copyright&copy; <a href="http://<?=$public_r['add_siteurl']?>/"><?=$public_r['add_www.92game.net.ming']?></a> <?=$public_r['add_domain']?> All Rights Reserved</p>
            <p>技术支持:宝贝<b><a href="http://<?=$public_r['add_siteurl']?>" target="_blank"><?=$public_r['add_www.92game.net.ming']?></a></b>  ICP备案证号:<?=$public_r['add_beian']?></p>
 <p style="font-size:10px">本站部分资源来自网友上传，如有侵权请邮件通知，我们将在3个工作日内删除。<p> 
        </div>
  	</div>
  </div> 
<!-- 尾部结束 --> 
<div style="display:none;">
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F855494e4fd05db2e589008845a9e0344' type='text/javascript'%3E%3C/script%3E"));
</script></div>

<!-- 尾部结束 --> 
<script language="javascript" src="/js/substr.js"></script> 
<script language="javascript" src="/js/index.js"></script> 
<script language="javascript" src="/js/jquery.tween.js"></script> 
<script> 
var p = $('#picplayer'); 
var pics1 = [{url:'/images/index/1.jpg',link:'#',time:5000},{url:'/images/index/2.jpg',link:'#',time:4000},{url:'/images/index/3.jpg',link:'#',time:6000},{url:'/images/index/4.jpg',link:'#',time:6000},{url:'/images/index/5.jpg',link:'#',time:6000}]; 
initPicPlayer(pics1,p.css('width').split('px')[0],p.css('height').split('px')[0]); 
</script>

<!-- Baidu Button BEGIN -->
<script type="text/javascript" id="bdshare_js" data="type=slide&amp;img=7&amp;uid=<?=$public_r['add_baidushareID']?>" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
	document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?t=" + new Date().getHours();
</script>
<!-- Baidu Button END -->
</body>
</html>