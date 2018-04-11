<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><table width='100%' align=center cellpadding=3 cellspacing=1 bgcolor='#DBEAF5'><tr><td width='16%' height=25 bgcolor='ffffff'>作品名</td><td bgcolor='ffffff'><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#DBEAF5">
<tr> 
  <td height="25" bgcolor="#FFFFFF">
<?=$tts?"<select name='ttid'><option value='0'>标题分类</option>$tts</select>":""?>
	<input type=text name=title value="<?=htmlspecialchars(stripSlashes($r[title]))?>" size="60"> 
	<input type="button" name="button" value="图文" onclick="document.add.title.value=document.add.title.value+'(图文)';"> 
  </td>
</tr>
<tr> 
  <td height="25" bgcolor="#FFFFFF">属性: 
	<input name="titlefont[b]" type="checkbox" value="b"<?=$titlefontb?>>粗体
	<input name="titlefont[i]" type="checkbox" value="i"<?=$titlefonti?>>斜体
	<input name="titlefont[s]" type="checkbox" value="s"<?=$titlefonts?>>删除线
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;颜色: <input name="titlecolor" type="text" value="<?=stripSlashes($r[titlecolor])?>" size="10"><a onclick="foreColor();"><img src="../data/images/color.gif" width="21" height="21" align="absbottom"></a>
  </td>
</tr>
</table></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>特殊属性</td><td bgcolor='ffffff'>
<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#DBEAF5">
  <tr>
    <td height="25" bgcolor="#FFFFFF">信息属性: 
      <input name="checked" type="checkbox" value="1"<?=$r[checked]?' checked':''?>>
      审核 &nbsp;&nbsp; 推荐 
      <select name="isgood" id="isgood">
        <option value="0"<?=$r[isgood]==0?' selected':''?>>不推荐</option>
        <option value="1"<?=$r[isgood]==1?' selected':''?>>一级推荐</option>
        <option value="2"<?=$r[isgood]==2?' selected':''?>>二级推荐</option>
        <option value="3"<?=$r[isgood]==3?' selected':''?>>三级推荐</option>
        <option value="4"<?=$r[isgood]==4?' selected':''?>>四级推荐</option>
        <option value="5"<?=$r[isgood]==5?' selected':''?>>五级推荐</option>
        <option value="6"<?=$r[isgood]==6?' selected':''?>>六级推荐</option>
        <option value="7"<?=$r[isgood]==7?' selected':''?>>七级推荐</option>
        <option value="8"<?=$r[isgood]==8?' selected':''?>>八级推荐</option>
        <option value="9"<?=$r[isgood]==9?' selected':''?>>九级推荐</option>
      </select>
      &nbsp;&nbsp; 头条 
      <select name="firsttitle" id="firsttitle">
        <option value="0"<?=$r[firsttitle]==0?' selected':''?>>非头条</option>
        <option value="1"<?=$r[firsttitle]==1?' selected':''?>>一级头条</option>
        <option value="2"<?=$r[firsttitle]==2?' selected':''?>>二级头条</option>
        <option value="3"<?=$r[firsttitle]==3?' selected':''?>>三级头条</option>
        <option value="4"<?=$r[firsttitle]==4?' selected':''?>>四级头条</option>
        <option value="5"<?=$r[firsttitle]==5?' selected':''?>>五级头条</option>
        <option value="6"<?=$r[firsttitle]==6?' selected':''?>>六级头条</option>
        <option value="7"<?=$r[firsttitle]==7?' selected':''?>>七级头条</option>
        <option value="8"<?=$r[firsttitle]==8?' selected':''?>>八级头条</option>
        <option value="9"<?=$r[firsttitle]==9?' selected':''?>>九级头条</option>
      </select></td>
  </tr>
  <tr> 
    <td height="25" bgcolor="#FFFFFF">关键字&nbsp;&nbsp;&nbsp;: 
      <input name="keyboard" type="text" size="52" value="<?=stripSlashes($r[keyboard])?>">
      <font color="#666666">(多个请用&quot;,&quot;隔开)</font></td>
  </tr>
  <tr> 
    <td height="25" bgcolor="#FFFFFF">外部链接: 
      <input name="titleurl" type="text" value="<?=stripSlashes($r[titleurl])?>" size="52">
      <font color="#666666">(填写后信息连接地址将为此链接)</font></td>
  </tr>
</table>
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>发布时间</td><td bgcolor='ffffff'><input name="newstime" type="text" value="<?=$r[newstime]?>"><input type=button name=button value="设为当前时间" onclick="document.add.newstime.value='<?=$todaytime?>'"></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>作品预览图</td><td bgcolor='ffffff'>
<input name="titlepic" type="text" id="titlepic" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($r[titlepic]))?>" size="45">
<a onclick="window.open('ecmseditor/FileMain.php?type=1&classid=<?=$classid?>&filepass=<?=$filepass?>&doing=1&field=titlepic','','width=700,height=550,scrollbars=yes');" title="选择已上传的图片"><img src="../data/images/changeimg.gif" border="0" align="absbottom"></a> 
源:
<input name="titlepic_4usky" type="text" id="titlepic_4usky" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($r[titlepic_4usky]))?>" size="">
检测小图:
<input name="spic_err" type="text" id="spic_err" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($r[spic_err]))?>" size="">
</td></tr>
<tr><td width='16%' height=25 bgcolor='ffffff'>大图</td><td bgcolor='ffffff'>
<input name="gamebigpic" type="text" id="gamebigpic" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($r[gamebigpic]))?>" size="45">
<a onclick="window.open('ecmseditor/FileMain.php?type=1&classid=<?=$classid?>&filepass=<?=$filepass?>&doing=1&field=gamebigpic','','width=700,height=550,scrollbars=yes');" title="选择已上传的图片"><img src="../data/images/changeimg.gif" border="0" align="absbottom"></a> 
源:
<input name="gamebigpic_4usky" type="text" id="gamebigpic_4usky" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($r[gamebigpic_4usky]))?>" size="">
检测大图:
<input name="bpic_err" type="text" id="bpic_err" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($r[bpic_err]))?>" size="">
</td></tr>
<tr><td width='16%' height=25 bgcolor='ffffff'>适合年龄</td><td bgcolor='ffffff'>
<input name="recommendedage" type="text" id="recommendedage" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($r[recommendedage]))?>" size="">
集数：
<input name="volumenum" type="text" id="volumenum" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($r[volumenum]))?>" size="">
</td></tr>
<tr><td width='16%' height=25 bgcolor='ffffff'>Flash地址</td><td bgcolor='ffffff'>
<input name="flashurl" type="text" id="flashurl" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($r[flashurl]))?>" size="45">
<a onclick="window.open('ecmseditor/FileMain.php?type=2&classid=<?=$classid?>&filepass=<?=$filepass?>&doing=1&field=flashurl','','width=700,height=550,scrollbars=yes');" title="选择已上传的FLASH"><img src="../data/images/changeflash.gif" border="0" align="absbottom"></a> 
源:
<input name="flashurl_4usky" type="text" id="flashurl_4usky" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($r[flashurl_4usky]))?>" size="">
</td></tr>
<tr><td width='16%' height=25 bgcolor='ffffff'>拼音</td><td bgcolor='ffffff'>
<input name="pinyin" type="text" id="pinyin" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($r[pinyin]))?>" size="">
文件大小:<input name="filesize" type="text" size=60 id="filesize" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($r[filesize]))?>">
<select name="select" onchange="document.add.filesize.value+=this.value">
        <option value="">单位</option>
        <option value=" MB">MB</option>
        <option value=" KB">KB</option>
        <option value=" GB">GB</option>
        <option value=" BYTES">BYTES</option>
      </select></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>作品评价</td><td bgcolor='ffffff'><select name="star" id="star"><option value="1"<?=$r[star]=="1"?' selected':''?>>1星</option><option value="2"<?=$r[star]=="2"||$ecmsfirstpost==1?' selected':''?>>2星</option><option value="3"<?=$r[star]=="3"?' selected':''?>>3星</option><option value="4"<?=$r[star]=="4"?' selected':''?>>4星</option><option value="5"<?=$r[star]=="5"?' selected':''?>>5星</option></select>标识：<select name="sign" id="sign"><option value="0"<?=$r[sign]=="0"?' selected':''?>>无标识</option><option value="1"<?=$r[sign]=="1"||$ecmsfirstpost==1?' selected':''?>>最新</option><option value="2"<?=$r[sign]=="2"?' selected':''?>>最热</option><option value="3"<?=$r[sign]=="3"?' selected':''?>>中文</option><option value=""<?=$r[sign]==""?' selected':''?>></option></select>月点击：
<input name="monthclick" type="text" id="monthclick" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($r[monthclick]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>Flash规格</td><td bgcolor='ffffff'><input name="width" type="text" size=6 id="width" value="<?=$ecmsfirstpost==1?"600":htmlspecialchars(stripSlashes($r[width]))?>">
*<input name="height" type="text" size=6 id="height" value="<?=$ecmsfirstpost==1?"450":htmlspecialchars(stripSlashes($r[height]))?>">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>作品简介</td><td bgcolor='ffffff'><textarea name="flashsay" cols="80" rows="10" id="flashsay"><?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($r[flashsay]))?></textarea>
</td></tr>

<tr><td width='16%' height=25 bgcolor='ffffff'>采集信息ID</td><td bgcolor='ffffff'>
<input name="cjinfoid" type="text" id="cjinfoid" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($r[cjinfoid]))?>" size="">
</td></tr>
<tr><td width='16%' height=25 bgcolor='ffffff'>视频播放路径：<br><br>(说明：用|||分隔每集路径，用,分隔地址网站标示和地址参数)</td><td bgcolor='ffffff'><textarea name="cjmoviepath" cols="140" rows="20" id="cjmoviepath"><?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($r[cjmoviepath]))?></textarea>
<br>支持的视频网站（tudou,youku,sina,ku6,56,sohu,qiyi,cctv,cntv）</td></tr>
<tr><td width='16%' height=25 bgcolor='ffffff'>采集信息</td><td bgcolor='ffffff'><textarea name="cjinfo" cols="60" rows="20" id="cjinfo"><?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($r[cjinfo]))?></textarea>
</td></tr>
<tr><td width='16%' height=25 bgcolor='ffffff'>是否完结</td><td bgcolor='ffffff'>完结<input name="isover" type="radio" value="0"<?=$r[isover]=="0"?' checked':''?>>否<input name="isover" type="radio" value="1"<?=$r[isover]=="1"?' checked':''?>>是   检测完结<input name="checkover" type="radio" value="0"<?=$r[checkover]=="0"?' checked':''?>>否<input name="checkover" type="radio" value="1"<?=$r[checkover]=="1"?' checked':''?>>是   状态
<input name="state" type="text" id="state" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($r[state]))?>" size="">
</td></tr>
</table>