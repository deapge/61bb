<?php
if(!defined('InEmpireCMS'))
{
        exit();
}
if($returnshowplnum==1)//返回总评论数显示
{
	echo $num."<!--empirecms.infocomment-->";
}
?>
<?php
$plstep=$num-$page*$line;//起始楼层
while($r=$empire->fetch($sql))
{
	$plusername=$r[username];
	if(empty($r[username]))
	{
		$plusername='匿名';
	}
	if($r[userid])
	{
		$plusername="<a href='$public_r[newsurl]e/space/?userid=$r[userid]' target='_blank'>$r[username]</a>";
	}
	//ip
	$sayip=ToReturnXhIp($r[sayip]);
	//副表
	$fr=$empire->fetch1("select saytext from {$dbtbpre}enewspl_data_".$r[stb]." where plid='$r[plid]'");
	$saytext=RepPltextFace(stripSlashes($fr['saytext']));//替换表情
	$includelink=" onclick=\"javascript:document.saypl.saytext.value+='[quote]".$r[plid]."[/quote]';document.saypl.repid.value='".$r[plid]."';document.saypl.saytext.focus();\"";
?>
	<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" style="margin:0 auto;word-break:break-all; word-wrap:break-all;">
		<tr> 
          <td height="30"><span class="name">
            <?=$plusername?>
            </span> <font color="#666666">ip: 
            <?=$sayip?>
            </font></td>
          <td><div align="right"><font color="#666666"> 
              <?=$r[saytime]?>
              发表</font>  [<?=$plstep?> 楼]</div></td>
        </tr>
        <tr valign="top"> 
          <td height="50" colspan="2" class="text"> 
            <?=$saytext?>
          </td>
        </tr>
        <tr> 
          <td height="30">&nbsp;</td>
          <td><div align="right" class="re"><a href="#tosaypl"<?=$includelink?>>回复</a>&nbsp; 
              <a href="JavaScript:CommentMakeRequest('<?=$public_r[newsurl]?>e/enews/?enews=DoForPl&plid=<?=$r[plid]?>&classid=<?=$classid?>&id=<?=$id?>&dopl=1&doajax=1&ajaxarea=zcpldiv<?=$r[plid]?>','EchoReturnedText','GET','');">支持</a>[<span id="zcpldiv<?=$r[plid]?>"> 
              <?=$r[zcnum]?>
              </span>]&nbsp; <a href="JavaScript:CommentMakeRequest('<?=$public_r[newsurl]?>e/enews/?enews=DoForPl&plid=<?=$r[plid]?>&classid=<?=$classid?>&id=<?=$id?>&dopl=0&doajax=1&ajaxarea=fdpldiv<?=$r[plid]?>','EchoReturnedText','GET','');">反对</a>[<span id="fdpldiv<?=$r[plid]?>"> 
              <?=$r[fdnum]?>
              </span>] </div></td>
        </tr>
      </table>
      <table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td background="<?=$public_r[newsurl]?>skin/default/images/plhrbg.gif"></td>
        </tr>
      </table>
      
<?php
	//楼层
	$plstep=$plstep-1;
}
?>
<table width="100%" border="0" cellspacing="1" cellpadding="3">
  <tr>
    <td><div class="epages" align="right"><?=$listpage?></div></td>
  </tr>
</table>