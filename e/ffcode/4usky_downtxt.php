<?php
require("../class/connect.php");
require("../class/db_sql.php");
require("../class/functions.php");
require("ff_functions.php");
/**/
$domain='http://'.$_SERVER['HTTP_HOST'];
$domain=get_domain($domain);
//echo($domain."<br>");
$pre=substr(md5($domain),0,4);
//echo($pre."<br>");
$str=$pre.$domain.'4u92skygamenecomt';
$str=md5(md5($str));
//echo($str);
if($str!=$phome_domainstr)
	exit('文件已经损坏');
/**/


$link=db_connect();
$empire=new mysqlquery();
$id=(int)$_GET['id'];

$sqltext="SELECT title FROM {$dbtbpre}ecms_news where id='$id' limit 1";
//echo($sqltext);
$r=$empire->fetch1($sqltext);
$title=$r['title'];

$sqltext="SELECT newstext FROM {$dbtbpre}ecms_news_data_1 where id='$id' limit 1";
$r=$empire->fetch1($sqltext);

$text=$r['newstext'];
$web=$public_r['add_www.92game.net.ming'].'【网址：http://'.$public_r['add_siteurl'].'/】<br><br>';
$text=$web.$text;
$text= str_replace("<br>", "\r\n", $text);
$text= str_replace("<BR>", "\r\n", $text);
$text= str_replace("<tr>", "", $text);
$text= str_replace("</tr>", "", $text);
$text= str_replace("<td>", "", $text);
$text= str_replace("</td>", "", $text);
$text= str_replace("<STRONG>", "", $text);
$text= str_replace("</STRONG>", "", $text);
$text= str_replace("<P>", "", $text);
$text= str_replace("</P>", "", $text);
$text= str_replace("<td height=10>", "", $text);
$text= str_replace(" ", "", $text);
//$text= strip_tags($text);

$ua = $_SERVER["HTTP_USER_AGENT"];
$filename = $title.".txt";
$encoded_filename = urlencode($filename);
$encoded_filename = str_replace("+", "%20", $encoded_filename);
header("Content-Type: application/octet-stream");
if (preg_match("/MSIE/", $_SERVER['HTTP_USER_AGENT']) ) {
	header('Content-Disposition:  attachment; filename="' . $encoded_filename . '"');
} elseif (preg_match("/Firefox/", $_SERVER['HTTP_USER_AGENT'])) {
	header('Content-Disposition: attachment; filename*="utf8' .  $filename . '"');
} else {
	header('Content-Disposition: attachment; filename="' .  $filename . '"');
}

 
echo($text); 
db_close();
$empire=null;
 
?>
