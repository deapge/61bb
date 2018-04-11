<?php
$add=$_GET;
$id=$add["id"];
$gname=$add["gname"];
if ($gname=="")
{
	$gname="2144小游戏";
	$gname = urldecode($gname);
	$gname = mb_convert_encoding($gname,'GB2312','UTF-8');
}
if($id=="")
{
$Shortcut = "[InternetShortcut] 
URL=http://2144-3.92game.net/?desktop 
IDList= 
[{000214A0-0000-0000-C000-000000000046}] 
Prop3=19,2 
"; 
}
else
{
$Shortcut = "[InternetShortcut] 
URL=http://2144-3.92game.net/?desktop 
IDList= 
[{000214A0-0000-0000-C000-000000000046}] 
Prop3=19,2 
"; 
}
Header("Content-type: application/octet-stream;"); 
header("Content-Disposition: attachment; filename=".$gname.".url;"); 
echo $Shortcut; 
?>