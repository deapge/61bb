<?php
//---------------------------用户自定义标签函数文件
//显示TAGS 2011-5-13  4usky.com
//分类ID,显示数量,每行显示数量,显示排序,只显示推荐,推荐TAGS属性,显示间隔符,是否显示信息数,链接附加参数
function user_skyShowTags($cid,$num=0,$line=0,$order='',$isgood='',$isgoodshow='',$showjg='',$shownum=0,$cs=''){
	global $empire,$dbtbpre,$public_r,$navinfor;
	$str='';
	if(empty($showjg))
	{
		$showjg=' &nbsp; ';
	}
	$ln=0;
	if($cid=='selfinfo')
	{
		if(empty($navinfor['infotags']))
		{
			return '';
		}
		$jg='';
		$r=explode(',',$navinfor['infotags']);
		$count=count($r);
		

		for($i=0;$i<$count;$i++)
		{
			if($i==$count-1)
				$add=$add." tagname='".$r[$i]."'";
			else
				$add=$add." tagname='".$r[$i]."' or ";
		}
		$sql="select tagname,tagdir from {$dbtbpre}enewstags where  ".$add."";
		//echo($sql."<br>");
		$key_sql=$empire->query($sql);
		while($link_r=$empire->fetch($key_sql))
		{
			$str.="<a target=_blank href=/tag/".$link_r[tagdir]."/>".$link_r[tagname]."</a>&nbsp;&nbsp;";
		}
	}
	else
	{
		$and='';
		$where='';
		if($cid)
		{
			$where=strstr($cid,',')?"cid in ($cid)":"cid='$cid'";
			$and=' and ';
		}
		if($isgood)
		{
			$where.=$and.'isgood=1';
		}
		if($where)
		{
			$where=' where '.$where;
		}
		$order=$order?' '.$order:' tagid desc';
		$limit='';
		if($num)
		{
			$limit=' limit '.$num;
		}
		//推荐标红
		$gfont1='';
		$gfont2='';
		if($isgoodshow)
		{
			if(strstr($isgoodshow,'r'))
			{
				$gfont1='<font color="red">';
				$gfont2='</font>';
			}
			if(strstr($isgoodshow,'s'))
			{
				$gfont1=$gfont1.'<b>';
				$gfont2='</b>'.$gfont2;
			}
		}
		$jg='';
		$snum='';
		$sql=$empire->query("select tagid,tagname,num,isgood,tagdir from {$dbtbpre}enewstags".$where." order by".$order.$limit);
		while($r=$empire->fetch($sql))
		{
			if($shownum)
			{
				$snum='('.$r[num].')';
			}
			$font1='';
			$font2='';
			if($isgoodshow&&$r[isgood])
			{
				$font1=$gfont1;
				$font2=$gfont2;
			}
			$ln++;
			$br='';
			if($line)
			{
				if($ln%$line==0)
				{
					$br='<br>';
				}
			}
			$str.=$jg.'<a href="/tag/'.$r[tagdir].'/" target="_blank">'.$font1.$r[tagname].$snum.$font2.'</a>'.$br;
			$jg=$br?'':$showjg;
		}
	}
	echo $str;
}

//---------------------------用户自定义标签函数文件
//显示TAGS 2011-8-24  4usky.com  2144a.com
//分类ID,显示数量,每行显示数量,显示排序,只显示推荐,推荐TAGS属性,显示间隔符,是否显示信息数,链接附加参数
function user_4uskyBoxTags($cid,$num=0,$line=0,$order='',$isgood='',$isgoodshow='',$showjg='',$shownum=0,$cs=''){
	global $empire,$dbtbpre,$public_r,$navinfor;
	$str='';
	if(empty($showjg))
	{
		$showjg=' &nbsp; ';
	}
	$ln=0;
	if($cid=='selfinfo')
	{
		if(empty($navinfor['infotags']))
		{
			return '';
		}
		$jg='';
		$r=explode(',',$navinfor['infotags']);
		$count=count($r);
		

		for($i=0;$i<$count;$i++)
		{
			if($i==$count-1)
				$add=$add." tagname='".$r[$i]."'";
			else
				$add=$add." tagname='".$r[$i]."' or ";
		}
		$sql="select tagname,tagdir from {$dbtbpre}enewstags where  ".$add."";
		//echo($sql."<br>");
		$key_sql=$empire->query($sql);
		
		while($link_r=$empire->fetch($key_sql))
		{
			$str.="<a target=_blank href=/tag/".$link_r[tagdir]."/>".$link_r[tagname]."</a>&nbsp;&nbsp;";

		}
	}
	else
	{
		$and='';
		$where='';
		if($cid)
		{
			$where=strstr($cid,',')?"cid in ($cid)":"cid='$cid'";
			$and=' and ';
		}
		if($isgood)
		{
			$where.=$and.'isgood=1';
		}
		if($where)
		{
			$where=' where '.$where;
		}
		$order=$order?' '.$order:' tagid desc';
		$limit='';
		if($num)
		{
			$limit=' limit '.$num;
		}
		//推荐标红
		$gfont1='';
		$gfont2='';
		if($isgoodshow)
		{
			if(strstr($isgoodshow,'r'))
			{
				$gfont1='<font color="red">';
				$gfont2='</font>';
			}
			if(strstr($isgoodshow,'s'))
			{
				$gfont1=$gfont1.'<b>';
				$gfont2='</b>'.$gfont2;
			}
		}
		$jg='';
		$snum='';
		$sql=$empire->query("select tagid,tagname,num,isgood,tagdir from {$dbtbpre}enewstags".$where." order by".$order.$limit);

		$i=0;
		while($r=$empire->fetch($sql))
		{
			if($shownum)
			{
				$snum='('.$r[num].')';
			}
			$font1='';
			$font2='';
			if($isgoodshow&&$r[isgood])
			{
				$font1=$gfont1;
				$font2=$gfont2;
			}
			$ln++;
			$br='';
			if($line)
			{
				if($ln%$line==0)
				{
					$br='<br>';
				}
			}
			if ($i % 14 == 0)
			{
				$str.=$jg.'<a href="/box/tag/'.$r[tagdir].'/" id="select_menu"  hidefocus="true"   class="menu_item_list"><div class="Findgame_Arrow"></div>'.$font1.$r[tagname].$snum.$font2.'</a>'.$br;
			}
			else
			{
				$str.=$jg.'<a href="/box/tag/'.$r[tagdir].'/" hidefocus="true"   class="menu_item_list">'.$font1.$r[tagname].$snum.$font2.'</a>'.$br;
			}
			$jg=$br?'':$showjg;

			$i=$i+1;
		}
	}
	echo $str;
}

//调用TAGS信息 2011-5-18 4usky.com
//TAGS的ID,显示条数,标题截取数,标签模板ID,栏目ID,系统模型ID
function user_skyShowTagsInfo($tagid,$line,$strlen,$tempid,$classid='',$addsql=''){
	global $empire,$dbtbpre,$public_r,$class_r,$emod_r,$navclassid;
	if(empty($tagid))
	{
		return '';
	}
	if($tagid=='selfinfo')//显示当前栏目信息
	{
		$tagid=$navclassid;
	}
	
	$namer=$empire->fetch1("select tagname from {$dbtbpre}enewstags where tagid='$tagid'");
	if(empty($namer[tagname]))
	{
		return '';
	}
	
	$query="select classid,id from {$dbtbpre}ecms_game where infotags LIKE '%".str_replace(" ","%",$namer[tagname])."%' ".$addsql." limit ".$line;
	
	
	$sql=$empire->query1($query);

	//取得模板 
	$tr=sys_ReturnBqTemp($tempid);
	if(empty($tr['tempid']))
	{return "";}
	$listtemp=str_replace('[!--news.url--]',$public_r[newsurl],$tr[temptext]);
	$subnews=$tr[subnews];
	$listvar=str_replace('[!--news.url--]',$public_r[newsurl],$tr[listvar]);
	$rownum=$tr[rownum];
	$formatdate=$tr[showdate];
	$docode=$tr[docode];
	if(empty($rownum))
	{$rownum=1;}
	//字段
	$ret_r=ReturnReplaceListF($tr[modid]);
	//列表
	$list_exp="[!--empirenews.listtemp--]";
	$list_r=explode($list_exp,$listtemp);
	$listtext=$list_r[1];
	$no=1;
	$changerow=1;
	while($r=$empire->fetch($sql))
	{
		if(empty($class_r[$r[classid]][tbname]))
		{
			continue;
		}
		$infor=$empire->fetch1("select * from {$dbtbpre}ecms_".$class_r[$r[classid]][tbname]." where id='$r[id]'");
		if(empty($infor[checked]))
		{
			continue;
		}
		$infor[oldtitle]=$infor[title];
		//替换列表变量
		$repvar=ReplaceListVars($no,$listvar,$subnews,$strlen,$formatdate,$url,$have_class,$infor,$ret_r,$docode);
		$listtext=str_replace("<!--list.var".$changerow."-->",$repvar,$listtext);
		$changerow+=1;
		//超过行数
		if($changerow>$rownum)
		{
			$changerow=1;
			$string.=$listtext;
			$listtext=$list_r[1];
		}
		$no++;
    }
	//多余数据
    if($changerow<=$rownum&&$listtext<>$list_r[1])
	{
		$string.=$listtext;
    }
    $string=$list_r[0].$string.$list_r[2];
	echo $string;
}

//TAGS的ID,显示条数,标题截取数,标签模板ID,栏目ID,系统模型ID
function user_4uskyShowTags($tagids,$tempid,$addsql=''){
	global $empire,$dbtbpre,$public_r,$class_r,$emod_r,$navclassid;
	if(empty($tagids))
	{
		return '';
	}
	 
	 
	$query="select tagname,tagdir,num,spic from {$dbtbpre}enewstags where cid=0 and tagid in($tagids)  ".$addsql." ";
	//$query="select classid,id from {$dbtbpre}ecms_game where infotags LIKE '%".str_replace(" ","%",$namer[tagname])."%' ".$addsql." limit ".$line;
	
	
	$sql=$empire->query1($query);

	//取得模板 
	$tr=sys_ReturnBqTemp($tempid);
	if(empty($tr['tempid']))
	{return "";}
	$listtemp=str_replace('[!--news.url--]',$public_r[newsurl],$tr[temptext]);
	$subnews=$tr[subnews];
	$listvar=str_replace('[!--news.url--]',$public_r[newsurl],$tr[listvar]);
	$rownum=$tr[rownum];
	$formatdate=$tr[showdate];
	$docode=$tr[docode];
	if(empty($rownum))
	{$rownum=1;}
	//字段
	$ret_r=ReturnReplaceListF($tr[modid]);
	//列表
	$list_exp="[!--empirenews.listtemp--]";
	$list_r=explode($list_exp,$listtemp);
	$listtext=$list_r[1];
	$no=1;
	$changerow=1;
	while($r=$empire->fetch($sql))
	{
		$listtext=$listvar;
		$listtext=str_replace("[!--tagname--]",$r[tagname],$listtext);
		$listtext=str_replace("[!--tagdir--]",$r[tagdir],$listtext);
		$listtext=str_replace("[!--num--]",$r[num],$listtext);
		$listtext=str_replace("[!--spic--]",$r[spic],$listtext);
		 
		$string.=$listtext;
		 
    }
	
    $string=$list_r[0].$string.$list_r[2];

	//$string=$query;
	echo $string;
}


function user_4uskyShowTags_All($num,$tempid,$addsql=''){
	global $empire,$dbtbpre,$public_r,$class_r,$emod_r,$navclassid;
	
	$query="select tagname,tagdir,num,spic from {$dbtbpre}enewstags where cid=0 ";
	if(!empty($addsql))
	{
		$query=$query.' and '.$addsql;
	}
	if($num)
	$query=$query.' limit 0,'.$num;
	//exit($query);
	$sql=$empire->query1($query);

	//取得模板 
	$tr=sys_ReturnBqTemp($tempid);
	if(empty($tr['tempid']))
	{return "";}
	$listtemp=str_replace('[!--news.url--]',$public_r[newsurl],$tr[temptext]);
	$subnews=$tr[subnews];
	$listvar=str_replace('[!--news.url--]',$public_r[newsurl],$tr[listvar]);
	$rownum=$tr[rownum];
	$formatdate=$tr[showdate];
	$docode=$tr[docode];
	if(empty($rownum))
	{$rownum=1;}
	//字段
	$ret_r=ReturnReplaceListF($tr[modid]);
	//列表
	$list_exp="[!--empirenews.listtemp--]";
	$list_r=explode($list_exp,$listtemp);
	$listtext=$list_r[1];
	$no=1;
	$changerow=1;
	while($r=$empire->fetch($sql))
	{
		$listtext=$listvar;
		$listtext=str_replace("[!--tagname--]",$r[tagname],$listtext);
		$listtext=str_replace("[!--tagdir--]",$r[tagdir],$listtext);
		$listtext=str_replace("[!--num--]",$r[num],$listtext);
		$listtext=str_replace("[!--spic--]",$r[spic],$listtext);
		 
		$string.=$listtext;
		 
    }
	
    $string=$list_r[0].$string.$list_r[2];

	//$string=$query;
	echo $string;
}

?>