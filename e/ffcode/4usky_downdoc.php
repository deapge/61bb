<?php
require("../class/connect.php");
require("../class/db_sql.php");
require("../class/functions.php");
require("ff_functions.php");
require("MhtFileMaker.php");



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
db_close();
$empire=null;

$web='<img src="http://'.$public_r['add_siteurl'].'/css/logo.gif"><br><br>'.$public_r['add_www.92game.net.ming'].'【网址：http://'.$public_r['add_siteurl'].'/ 】<br><br>';
$text=$web.$text;
$text=$text.'<br><br>版权声明：<br>1、[<a href="http://'.$public_r['add_siteurl'].'/" target="_blank">'.$public_r['add_www.92game.net.ming'].'</a>]上的所有课件和资料均为课件作者提供和网友推荐收集整理而来，仅供学习和研究使用。如有侵犯你版权的，请指出，本站将立即改正。<br>2、访问[<a href="http://'.$public_r['add_siteurl'].'/" target="_blank">'.$public_r['add_www.92game.net.ming'].'</a>]的用户必须明白，[<a href="http://'.$public_r['add_siteurl'].'/" target="_blank">'.$public_r['add_www.92game.net.ming'].'</a>]对所提供下载的课件和程序代码不拥有任何权利，其版权归该课件和程序代码的合法拥有者所有。<br>3、[<a href="http://'.$public_r['add_siteurl'].'/" target="_blank">'.$public_r['add_www.92game.net.ming'].'</a>]保证站内提供的所有可下载资源（课件等等）都是按“原样”提供，本站未做过任何改动；但[<a href="http://'.$public_r['add_siteurl'].'/" target="_blank">'.$public_r['add_www.92game.net.ming'].'</a>]不保证本站提供的下载资源的准确性、安全性和完整性；同时[<a href="http://'.$public_r['add_siteurl'].'/" target="_blank">'.$public_r['add_www.92game.net.ming'].'</a>]也不承担用户因使用这些下载资源对自己和他人造成任何形式的损失或伤害。<br>4、[<a href="http://'.$public_r['add_siteurl'].'/" target="_blank">'.$public_r['add_www.92game.net.ming'].'</a>]网页内的资料提供者拥有该网页上资料的版权，未经[<a href="http://'.$public_r['add_siteurl'].'/" target="_blank">'.$public_r['add_www.92game.net.ming'].'</a>]的明确许可，任何人不得非法复制；不得盗链本站下载资源。[<a href="http://'.$public_r['add_siteurl'].'/" target="_blank">'.$public_r['add_www.92game.net.ming'].'</a>]对其自行开发的或和他人共同开发的所有内容，包括网站设计、布局结构、服务等拥有全部知识产权，未经[<a href="http://'.$public_r['add_siteurl'].'/" target="_blank">'.$public_r['add_www.92game.net.ming'].'</a>]的明确许可，任何人不得作全部或部分复制或仿造。<br>';

function getWordDocument( $content , $absolutePath = "" , $isEraseLink = true )
{
    $mht = new MhtFileMaker();
    if ($isEraseLink)
        $content = preg_replace('/<a\s*.*?\s*>(\s*.*?\s*)<\/a>/i' , '$1' , $content);   //去掉链接

    $images = array();
    $files = array();
    $matches = array();
    //这个算法要求src后的属性值必须使用引号括起来
    if ( preg_match_all('/<img[.\n]*?src\s*?=\s*?[\"\'](.*?)[\"\'](.*?)\/>/i',$content ,$matches ) )
    {
        $arrPath = $matches[1];
        for ( $i=0;$i<count($arrPath);$i++)
        {
            $path = $arrPath[$i];
            $imgPath = trim( $path );
            if ( $imgPath != "" )
            {
                $files[] = $imgPath;
                if( substr($imgPath,0,7) == 'http://')
                {
                    //绝对链接，不加前缀
                }
                else
                {
                    $imgPath = $absolutePath.$imgPath;
                }
                $images[] = $imgPath;
            }
        }
    }
    $mht->AddContents("tmp.html",$mht->GetMimeType("tmp.html"),$content);
    
    for ( $i=0;$i<count($images);$i++)
    {
        $image = $images[$i];
        if ( @fopen($image , 'r') )
        {
            $imgcontent = @file_get_contents( $image );
            if ( $content )
                $mht->AddContents($files[$i],$mht->GetMimeType($image),$imgcontent);
        }
        else
        {
            echo "file:".$image." not exist!<br />";
        }
    }
    
    return $mht->GetFile();
}


 
$fileContent = getWordDocument($text,"http://".$public_r['add_siteurl']."/",0);
//$fp = fopen("test.doc", 'w');
//fwrite($fp, $fileContent);
//fclose($fp);

$filename = $title.".doc";
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
echo($fileContent);
?>
