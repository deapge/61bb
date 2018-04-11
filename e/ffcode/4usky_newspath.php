<?php
//更新旧游戏路径 2011-11-21 3366.4usky.com
require("../class/connect.php");
require("../class/db_sql.php");
require("../class/functions.php");
require("ff_functions.php");
$link=db_connect();
$empire=new mysqlquery();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<TITLE></TITLE>

<link rel="stylesheet" href="/e/admin/adminstyle/<?=$loginadminstyleid?>/adminstyle.css" type="text/css">
</HEAD>
<BODY>
<table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#7EA9DE">
 
  <tr>
    <td width="100%" colspan="3" bgcolor="#FFFFFF">
    <?php
	$yushu=$add["yushu"];
	if(empty($yushu))
	{
		$sql="select id from {$dbtbpre}ecms_game where  newspath=''";
		$yushu=$empire->num($sql);
	}
	if($yushu<0)$yushu=0;
	echo"<center>剩余个数为:<font color=red>$yushu</font>个</center><br>";

	$needrefresh=0;
 //
	    $sql=$empire->query("select id,newstime from {$dbtbpre}ecms_game where  newspath='' order by id limit 500");
		while($value=$empire->fetch($sql))
		{
			
			$id=$value["id"];
			$t=$value["newstime"]; 
			$y=date("Ym",$t); 
			// echo("update".$id."-".$y."<br>");
			// echo("update {$dbtbpre}ecms_game set newspath='$y' where id=$value[id]");
			 
			$empire->query("update {$dbtbpre}ecms_game set newspath='$y' where id=$value[id];"); 
			
		}
		db_close();
		$empire=null;

		$yushu=$yushu-200;
		if($yushu<0)$yushu=0;
		//exit("yushu-".$yushu);
		if($yushu>0)
		echo"<meta http-equiv=\"refresh\" content=\"1;url=?yushu=$yushu\">";
		else
		{
			echo("<br>cjintro ok...");
			echo"<meta http-equiv=\"refresh\" content=\"1;url=?showspecial=4&sear=1\">)";
		}
	
?>  </td> 
  </tr>
  </table>
</center> 
</BODY>
</HTML> 
 