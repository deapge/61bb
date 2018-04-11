<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><tr><td bgcolor=ffffff>作品名</td><td bgcolor=ffffff><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#DBEAF5">
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
</table></td></tr><tr><td bgcolor=ffffff>发布时间</td><td bgcolor=ffffff><input name="newstime" type="text" value="<?=$r[newstime]?>"><input type=button name=button value="设为当前时间" onclick="document.add.newstime.value='<?=$todaytime?>'"></td></tr><tr><td bgcolor=ffffff>作品预览图</td><td bgcolor=ffffff>
<input name="titlepic" type="text" id="titlepic" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($r[titlepic]))?>" size="45">
<a onclick="window.open('ecmseditor/FileMain.php?type=1&classid=<?=$classid?>&filepass=<?=$filepass?>&doing=1&field=titlepic','','width=700,height=550,scrollbars=yes');" title="选择已上传的图片"><img src="../data/images/changeimg.gif" border="0" align="absbottom"></a> 
</td></tr><tr><td bgcolor=ffffff>拼音</td><td bgcolor=ffffff>
<input name="pinyin" type="text" id="pinyin" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($r[pinyin]))?>" size="">
</td></tr><tr><td bgcolor=ffffff>作品评价</td><td bgcolor=ffffff><select name="star" id="star"><option value="1"<?=$r[star]=="1"?' selected':''?>>1星</option><option value="2"<?=$r[star]=="2"||$ecmsfirstpost==1?' selected':''?>>2星</option><option value="3"<?=$r[star]=="3"?' selected':''?>>3星</option><option value="4"<?=$r[star]=="4"?' selected':''?>>4星</option><option value="5"<?=$r[star]=="5"?' selected':''?>>5星</option></select></td></tr><tr><td bgcolor=ffffff>文件大小</td><td bgcolor=ffffff><input name="filesize" type="text" size=60 id="filesize" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($r[filesize]))?>">
<select name="select" onchange="document.add.filesize.value+=this.value">
        <option value="">单位</option>
        <option value=" MB">MB</option>
        <option value=" KB">KB</option>
        <option value=" GB">GB</option>
        <option value=" BYTES">BYTES</option>
      </select></td></tr><tr><td bgcolor=ffffff>Flash地址</td><td bgcolor=ffffff>
<input name="flashurl" type="text" id="flashurl" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($r[flashurl]))?>" size="45">
<a onclick="window.open('ecmseditor/FileMain.php?type=2&classid=<?=$classid?>&filepass=<?=$filepass?>&doing=1&field=flashurl','','width=700,height=550,scrollbars=yes');" title="选择已上传的FLASH"><img src="../data/images/changeflash.gif" border="0" align="absbottom"></a> 
</td></tr><tr><td bgcolor=ffffff>Flash宽度</td><td bgcolor=ffffff><input name="width" type="text" size=6 id="width" value="<?=$ecmsfirstpost==1?"600":htmlspecialchars(stripSlashes($r[width]))?>">
</td></tr><tr><td bgcolor=ffffff>Flash高度</td><td bgcolor=ffffff><input name="height" type="text" size=6 id="height" value="<?=$ecmsfirstpost==1?"450":htmlspecialchars(stripSlashes($r[height]))?>">
</td></tr><tr><td bgcolor=ffffff>作品简介</td><td bgcolor=ffffff><textarea name="flashsay" cols="80" rows="10" id="flashsay"><?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($r[flashsay]))?></textarea>
</td></tr><tr><td bgcolor=ffffff>大图</td><td bgcolor=ffffff>
<input name="gamebigpic" type="text" id="gamebigpic" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($r[gamebigpic]))?>" size="45">
<a onclick="window.open('ecmseditor/FileMain.php?type=1&classid=<?=$classid?>&filepass=<?=$filepass?>&doing=1&field=gamebigpic','','width=700,height=550,scrollbars=yes');" title="选择已上传的图片"><img src="../data/images/changeimg.gif" border="0" align="absbottom"></a> 
</td></tr><tr><td bgcolor=ffffff>适合年龄</td><td bgcolor=ffffff>
<input name="recommendedage" type="text" id="recommendedage" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($r[recommendedage]))?>" size="">
</td></tr><tr><td bgcolor=ffffff>采集信息ID</td><td bgcolor=ffffff>
<input name="cjinfoid" type="text" id="cjinfoid" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($r[cjinfoid]))?>" size="">
</td></tr><tr><td bgcolor=ffffff>采集信息</td><td bgcolor=ffffff><textarea name="cjinfo" cols="60" rows="20" id="cjinfo"><?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($r[cjinfo]))?></textarea>
</td></tr><tr><td bgcolor=ffffff>SWF地址源</td><td bgcolor=ffffff>
<input name="flashurl_4usky" type="text" id="flashurl_4usky" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($r[flashurl_4usky]))?>" size="">
</td></tr><tr><td bgcolor=ffffff>大图源</td><td bgcolor=ffffff>
<input name="gamebigpic_4usky" type="text" id="gamebigpic_4usky" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($r[gamebigpic_4usky]))?>" size="">
</td></tr><tr><td bgcolor=ffffff>缩略图源</td><td bgcolor=ffffff>
<input name="titlepic_4usky" type="text" id="titlepic_4usky" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($r[titlepic_4usky]))?>" size="">
</td></tr>