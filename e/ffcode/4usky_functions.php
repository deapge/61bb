<?php
require("../class/connect.php");
require("../class/db_sql.php");
require("../data/dbcache/class.php");
require("../class/user.php");
require("../data/dbcache/MemberLevel.php");
$link=db_connect();
$empire=new mysqlquery();
$sky=$_POST['sky'];
if(empty($sky))
{
	$sky=$_GET['sky'];
}

if($sky=='addfav')
{
	$userid=(int)getcvar('mluserid');
	if(!$userid)
	{
		exit('var gAddFavResult = {"result":10002,"resultstr":"您还没有登录，请登录后再操作！","uin":0};');
	}
	//$cid=$_GET['cid']; 收藏类别，用户自定义类别
	$cid=0;
	$id=$_GET['id'];
	$classid=$_GET['classid'];
	//$from=$_GET['from'];
	$from='';
	AddFava_4usky($id,$classid,$cid,$from);
}
elseif($sky=='getfav')
{
	$userid=(int)getcvar('mluserid');
	if(!$userid)
	{
		exit('var gMyFavResult = {"result":10002,"resultstr":"您还没有登录，请登录后再操作！","uin":0};');
	}
	GetFav_4usky($userid);
}
elseif($sky=='delfav')
{
	$userid=(int)getcvar('mluserid');

	$id=$_GET['id'];
	$classid=$_GET['classid'];
	if(!$userid)
	{
		exit('var gRemoveFavResult = {"result":10002,"resultstr":"您还没有登录，请登录后再操作！","uin":0};');
	}
	DelFava_4usky($id,$classid);
}
elseif($sky=='getmypkinfo')
{
	$userid=(int)getcvar('mluserid');
	if(!$userid)
	{
		exit('var gFeedShowResult = {"result":10002,"resultstr":"您还没有登录，请登录后再操作！","uin":0};');
	}
	GetMyPKInfo_4usky($userid);
}





//增加收藏
function AddFava_4usky($id,$classid,$cid,$from){
	global $empire,$level_r,$class_r,$dbtbpre;
	//是否登陆
	$user_r=islogin();
	$id=(int)$id;
	$cid=(int)$cid;
	$classid=(int)$classid;

	if(empty($id)||empty($classid))
	{
		exit('var gAddFavResult = {"result":11006,"resultstr":"系统内部繁忙，请稍候再试！","uin":'.$user_r[userid].'};');
    }
	//表不存在
	if(empty($class_r[$classid][tbname]))
	{
		exit('var gAddFavResult = {"result":11007,"resultstr":"系统内部繁忙，请稍候再试！","uin":'.$user_r[userid].'};');
	}
	$num=$empire->gettotal("select count(*) as total from {$dbtbpre}ecms_".$class_r[$classid][tbname]." where id='$id' and classid='$classid'");
	if(empty($num))
	{exit('var gAddFavResult = {"result":11008,"resultstr":"系统内部繁忙，请稍候再试！","uin":'.$user_r[userid].'};');}
	//是否已收藏
	$newsnum=$empire->gettotal("select count(*) as total from {$dbtbpre}enewsfava where id='$id' and classid='$classid' and userid='$user_r[userid]'");
	if($newsnum)
	{
		//printerror("ReFava","history.go(-1)",1);
		exit('var gAddFavResult = {"result":0,"resultstr":"操作已成功！","uin":'.$user_r[userid].',"isfull":"0"};');
	}
	$favanum=$empire->gettotal("select count(*) as total from {$dbtbpre}enewsfava where userid='$user_r[userid]'");
	$groupid=$user_r[groupid];
	//exit('dd'.$level_r[$groupid][groupname]);
	if($level_r[$groupid][favanum]<=$favanum)
	{
		//printerror("MoreFava","history.go(-1)",1);
		exit('var gAddFavResult = {"result":0,"resultstr":"收藏数已经满了！","uin":'.$user_r[userid].',"isfull":"1"};');
	}
	$favatime=date("Y-m-d H:i:s");
	$sql=$empire->query("insert into {$dbtbpre}enewsfava(id,favatime,userid,username,classid,cid) values('$id','$favatime','$user_r[userid]','$user_r[username]','$classid','$cid');");
	if($sql)
	{
		exit('var gAddFavResult = {"result":0,"resultstr":"操作成功！","uin":'.$user_r[userid].',"isfull":"0"};');
	}
	else
	{
		exit('var gAddFavResult = {"result":11009,"resultstr":"系统内部繁忙，请稍候再试！","uin":'.$user_r[userid].'};');
	}
}

function DelFava_4usky($id,$classid){
	global $empire,$level_r,$class_r,$dbtbpre;
	//是否登陆
	$user_r=islogin();
	$id=(int)$id;
	$cid=(int)$cid;
	$classid=(int)$classid;

	if(empty($id))
	{
		exit('var gRemoveFavResult = {"result":11006,"resultstr":"系统内部繁忙，请稍候再试！","uin":'.$user_r[userid].'};');
    }
	 
	$sql=$empire->query("delete from {$dbtbpre}enewsfava where id='$id' and userid=$user_r[userid]");
	
	if($sql)
	{
		exit('var gRemoveFavResult = {"result":0,"resultstr":"操作成功！","uin":'.$user_r[userid].',"isfull":"0"};');
	}
	else
	{
		exit('var gRemoveFavResult = {"result":11009,"resultstr":"系统内部繁忙，请稍候再试！","uin":'.$user_r[userid].'};');
	}
}

//var gRemoveFavResult = {"result":0,"resultstr":"操作成功！","uin":1936240};
function GetFav_4usky($userid)	{
global $empire,$class_r,$dbtbpre;
	$resultstr='var gMyFavResult = {"result":0,"resultstr":"操作成功！","uin":'.$userid.',"my_favorite":[';
	$query="select favaid,favatime,id,classid from {$dbtbpre}enewsfava where userid='$userid' order by favaid desc limit 6";
	$sql=$empire->query($query);
	$c='';
	while($fr=$empire->fetch($sql))
	{
		 
		if(empty($class_r[$fr[classid]][tbname]))
		{continue;}
		$r=$empire->fetch1("select title,titleurl,groupid,filename,newspath,onclick,classid,id,titlepic from {$dbtbpre}ecms_".$class_r[$fr[classid]][tbname]." where id='$fr[id]' and checked=1");
		//标题链接
		$titlelink=sys_ReturnBqTitleLink($r);
		if($r['id'])
		{
			$c=$c.'{"game_id":'.$r['id'].',"time":'.time($fr['favatime']).',"game_name":"'.$r['title'].'","game_icon":"'.$r['titlepic'].'","game_link":"'.$titlelink.'"},';
		}
	}
	$c=substr($c,0,strlen($c)-1);
	$resultstr=$resultstr.$c.']};';
	exit($resultstr);
}

function GetMyPKInfo_4usky($userid)	{
	global $empire,$class_r,$dbtbpre;
	$resultstr='var gFeedShowResult = {"result":0,"resultstr":"操作成功！","uin":'.$userid.',"mylist":[';
	$query="SELECT p.id,p.title,p.titleurl,p.groupid,p.classid,p.titlepic,p.filename,s.score,s.updatetime FROM {$dbtbpre}ecms_game p,{$dbtbpre}4usky_pkscores s WHERE s.gamecode = p.cjinfoid and s.userid=$userid order by s.updatetime desc limit 7";
	$sql=$empire->query($query);
	$c='';
	while($fr=$empire->fetch($sql))
	{
		 
		if(empty($class_r[$fr[classid]][tbname]))
		{continue;}
		$time=date("Y-m-d",$fr[updatetime]);
		//标题链接
		$titlelink=sys_ReturnBqTitleLink($fr);
		if($fr['id'])
		{
			$c=$c.'["'.$fr['id'].'","'.$fr['title'].'","'.$time.'","'.$fr['score'].'","'.$titlelink.'","'.$fr['titlepic'].'"],';
		}
	}
	$c=substr($c,0,strlen($c)-1);
	$resultstr=$resultstr.$c.'],"friendslist":[]};';
	exit($resultstr);
//exit('var gFeedShowResult = {"result":0,"resultstr":"操作成功！","uin":1936240,"mylist":[["1000251","弹火柴","2011-12-10","5274"],["1000245","挤番茄","∝\x20不是放弃、是放在心底","2012-01-14","78","751294162"]],"friendslist":[]};');
}
?>