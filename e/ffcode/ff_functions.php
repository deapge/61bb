<?php
//截取内容
function GetStr($content,$startStr,$endStr)
{
	//echo("c:".$content);
	//echo("start:".$startStr);
	//$s=stripos($content,$startStr);
	$ss=stristr($content,$startStr);
	
	$e=stripos($ss,$endStr);
	
	$returnstr=substr($ss,strlen($startStr),$e-strlen($startStr));
	return $returnstr;

}
//生成所有内容页面
function ReTagHtml($start,$classid,$from,$retype,$startday,$endday,$startid,$endid,$havehtml){
	global $empire,$public_r,$class_r,$fun_r,$dbtbpre;
	$start=(int)$start;
	//按ID
	if($retype)
	{
		$startid=(int)$startid;
		$endid=(int)$endid;
		$add1=$endid?' and tagid>='.$startid.' and tagid<='.$endid:'';
		
    }
	else
	{
		$startday=RepPostVar($startday);
		$endday=RepPostVar($endday);
		$add1=$startday&&$endday?' and createdate>='.to_time($startday.' 00:00:00').' and createdate<='.to_time($endday.' 23:59:59'):'';
    }
	
	
	$b=0;
	$sql=$empire->query("select tagid,tagdir,tagname,intro,bpic,num,cid from {$dbtbpre}enewstags where tagid>$start".$add1."  order by tagid limit 2");
	while($r=$empire->fetch($sql))
	{
		
		$b=1;
		TagHtml($r,1);
		$new_start=$r[tagid];
		echo("当前:".$r[tagid]);
		
	}
	if(empty($b))
	{
		echo "<link rel=\"stylesheet\" href=\"../data/images/css.css\" type=\"text/css\"><center><b>".$tbname.$fun_r[ReTableIsOK]."!</b></center>";
		db_close();
		$empire=null;
		exit();
	}
	echo"<link rel=\"stylesheet\" href=\"../data/images/css.css\" type=\"text/css\"><meta http-equiv=\"refresh\" content=\"".$public_r['realltime'].";url=mkhtml.php?enews=ReTagHtml&tbname=$tbname&classid=$classid&start=$new_start&from=$from&retype=$retype&startday=$startday&endday=$endday&startid=$startid&endid=$endid&havehtml=$havehtml&reallinfotime=".$_GET['reallinfotime']."\">".$fun_r[OneReNewsHtmlSuccess]."(ID:<font color=red><b>".$new_start."</b></font>)";
	exit();
}

//生成所有boxtag内容页面  2011-8-24 smallmuda qq:1936240
function ReBoxTagHtml($start,$classid,$from,$retype,$startday,$endday,$startid,$endid,$havehtml){
	global $empire,$public_r,$class_r,$fun_r,$dbtbpre;
	//$tbname=RepPostVar($tbname);
	//if(empty($tbname))
	//{
	//	printerror("ErrorUrl","history.go(-1)");
   // }
	$start=(int)$start;
	//按ID

	$sql=$empire->query("SELECT max(tagid) as a ,min(tagid) as b FROM phome_enewstags where isgood=1 order by tagid desc limit 70; ");
	while($r=$empire->fetch($sql))
	{
	$startid=$r[b];
	$endid=$r[a];
	}
	 
		$startid=(int)$startid;
		$endid=(int)$endid;
		$add1=$endid?' and tagid>='.$startid.' and tagid<='.$endid:'';

	$b=0;
	$sql=$empire->query("select tagid,tagdir,tagname from {$dbtbpre}enewstags where tagid>$start".$add1."  order by tagid limit 2");
	while($r=$empire->fetch($sql))
	{
		
		$b=1;
		TagHtml4Box($r[tagid],1,$r[tagdir],$r[tagname]);
		$new_start=$r[tagid];
		echo("当前:".$r[tagid]);
	}
	if(empty($b))
	{
		echo "<link rel=\"stylesheet\" href=\"../data/images/css.css\" type=\"text/css\"><center><b>".$tbname.$fun_r[ReTableIsOK]."!</b></center>";
		db_close();
		$empire=null;
		exit();
	}
	echo"<link rel=\"stylesheet\" href=\"../data/images/css.css\" type=\"text/css\"><meta http-equiv=\"refresh\" content=\"".$public_r['realltime'].";url=mkhtml.php?enews=ReBoxTagHtml&tbname=$tbname&classid=$classid&start=$new_start&from=$from&retype=$retype&startday=$startday&endday=$endday&startid=$startid&endid=$endid&havehtml=$havehtml&reallinfotime=".$_GET['reallinfotime']."\">".$fun_r[OneReNewsHtmlSuccess]."(ID:<font color=red><b>".$new_start."</b></font>)";
	exit();
}

function TagHtml($r,$orderby){
	global $empire,$dbtbpre,$emod_r,$public_r,$class_r,$class_zr,$fun_r,$class_tr,$level_r;

	 
		$lefttag="";
		$sql0=$empire->query("select tagid,tagdir,tagname,spic,num from {$dbtbpre}enewstags  where cid=0 order by rand() limit 13");
		
		while($ar=$empire->fetch($sql0))
		{
			$lefttag=$lefttag." <li><a href=\"/tag/$ar[tagdir]/\" class=\"pic\" title=\"$ar[tagname]\"><img src=\"$ar[spic]\" alt=\"$ar[tagname]\"/><s></s></a><div class=\"txt\"><p><a href=\"/tag/$ar[tagdir]/\" title=\"$ar[tagname]\">$ar[tagname]</a></p><span>含$ar[num]款</span></div></li>";
		}


/*
	$sql0=$empire->query("select tagid  from {$dbtbpre}enewstags  where cid=0 order by tagid ");
	$ii=0;
	$pos=0;
	$tpagenum=0;
	while($alltags=$empire->fetch($sql0))
	{
		$ii+=1;
		if($alltags[tagid]==$r[tagid])
		{
			$pos=$ii;
		}
	}
	if($pos%13==0)
		$tpagenum=ceil($pos/13);
	else
		$tpagenum=ceil($pos/13)-1;

	if($ii%13==0)
		$allpagenum=ceil($ii/13);
	else
		$allpagenum=ceil($ii/13)-1;
	
	//echo($tpagenum);
	$lnum=$tpagenum*13;
	//exit("select tagid,tagdir,tagname,spic,num from {$dbtbpre}enewstags  where cid=0 order by tagid limit ".$lnum.",13");
	$lefttag="";
	$sql0=$empire->query("select tagid,tagdir,tagname,spic,num from {$dbtbpre}enewstags  where cid=0 order by tagid limit ".$lnum.",13");
	
	while($ar=$empire->fetch($sql0))
	{
		$lefttag=$lefttag." <li><a href=\"/tag/$ar[tagdir]/\" class=\"pic\" title=\"$ar[tagname]\"><img src=\"$ar[spic]\" alt=\"$ar[tagname]\"/><s></s></a><div class=\"txt\"><p><a href=\"/tag/$ar[tagdir]/\" title=\"$ar[tagname]\">$ar[tagname]</a></p><span>含354款</span></div></li>";
	}
	$subpage=$allpagenum-$tpagenum;
	if($subpage>2)
	{
		$p1=$tpagenum-2;
		$p2=$tpagenum-1;
		$p3=$tpagenum;
		$p4=$tpagenum+1;
		$p5=$tpagenum+2;
	}
	else
	{
	
	}
	$lefttag=$lefttag."</ul><div class=\"mgp_pages\" id=\"bot_page_div\"><a href='69_new.shtml' title='上一页' class='page_prev'></a><a href='56_new.shtml' title='第4页' >$p1</a><a href='69_new.shtml' title='第5页' >$p2</a><a class='page_cur'>$p3</a><a href='95_new.shtml' title='第7页' >$p4</a><a href='108_new.shtml' title='第8页' >$p5</a><a href='95_new.shtml' title='下一页' class='page_next' ></a></div>";
*/	
	$GLOBALS['navclassid']=$r[tagid];
	$doclass="index";
	$classlevel='';
	$selfclassid=$r[tagid];
	$doenews=0;
	$pagetitle=htmlspecialchars($r[tagname]);
	$url="<a href=\"/\">首页</a> >>&nbsp;&nbsp;<a href=\"/tag/".$r[tagdir]."\">".$r[tagname]."</a>";
	$haveclass=1;		
	$doclasspath="tag/".$r[tagdir];
	if(!file_exists(ECMS_PATH."/tag/"))
	{
		DoMkdir(ECMS_PATH."/tag/");
	}
	$dopath=ECMS_PATH.$doclasspath."/";
	
	if(!file_exists($dopath))
	{
		DoMkdir($dopath);
	}
	$dolink=$public_r[newsurl].$doclasspath."/";
	//exit("dolink:".$dolink);
	$dotype=".htm";
	$onclick="<script src='".$public_r[newsurl]."e/public/onclick?enews=dotag&tagid=$tagid'></script>";
	//模板
	$listtempid=$class_r[$classid][listtempid];
	$lencord=126;
	$listtemp_r=GetListTemp(10);
	//列表模板
	if(empty($r[bpic]))
		$hiddencss="hidden";	
	else
		$hiddencss="";
    $listtemp=$listtemp_r[temptext];	
	$listtemp=str_replace('[!--news.url--]',$public_r[newsurl],$listtemp);
	$listtemp=str_replace('[!--tagname--]',$r[tagname],$listtemp);//替换sql中的tagname
	$listtemp=str_replace('[!--hiddencss--]',$hiddencss,$listtemp);
	$listtemp=str_replace('[!--bpic--]',$r[bpic],$listtemp);
	$listtemp=str_replace('[!--intro--]',$r[intro],$listtemp); 
	$listtemp=str_replace('[!--newsnav--]',$url,$listtemp); 
	$listtemp=str_replace('[!--num--]',$r[num],$listtemp); 
	$listtemp=str_replace('[!--lefttag--]',$lefttag,$listtemp);
	
	
	/*
	if(strstr($listtemp,'[!--taginfo--]'))//
	{
		$tag_exp="[!--taginfo--]";
		$taginfo_r=explode($tag_exp,$listtemp);
		$taginfo=$taginfo_r[1];
		$tagstr=getTagInfo($taginfo);
		$listtemp=str_replace($taginfo,$tagstr,$listtemp);
		$listtemp=str_replace('[!--taginfo--]','',$listtemp);
	}
	if(strstr($listtemp,'[!--tagcinfo--]'))//
	{
		$tag_exp="[!--tagcinfo--]";
		$tagcinfo_r=explode($tag_exp,$listtemp);
		$tagcinfo=$tagcinfo_r[1];
		$tagstr=getTagInfo($tagcinfo);
		$listtemp=str_replace($tagcinfo,$tagstr,$listtemp);
		$listtemp=str_replace('[!--tagcinfo--]','',$listtemp);
	}
	*/
	//echo($listtemp);
	//exit();
	

	$subnews=$listtemp_r[subnews];
	$subtitle=$listtemp_r[subtitle];
	$docode=$listtemp_r[docode];
	$listvar=str_replace('[!--news.url--]',$public_r[newsurl],$listtemp_r[listvar]);	
	$rownum=$listtemp_r[rownum];
	$formatdate=$listtemp_r[showdate];
	if(empty($rownum))
	{
		$rownum=1;
	}
	if(empty($mid))
	{
		$mid=$listtemp_r[modid];
	}
	$field=ReturnReplaceListF($mid);
	//分页列表函数
	if(!empty($public_r['listpagefun'])||!empty($public_r['listpagelistfun']))
	{
		if(strstr($listtemp,'[!--show.page--]'))//下拉式
		{
			$thefun=$public_r['listpagefun'];
			$bereplistpage='[!--show.page--]';
		}
		else//列表式
		{
			$thefun=$public_r['listpagelistfun'];
			$bereplistpage='[!--show.listpage--]';
		}
	}
	else
	{
		$thefun='sys_ShowListPage';
		$bereplistpage='[!--show.page--]';
	}
	//替换模板变量
	//$listtemp=str_replace('[!--newsnav--]',$url,$listtemp);//位置导航
	
	//$listtemp=Class_ReplaceSvars($listtemp,$url,$selfclassid,$pagetitle,$pagekey,$pagedes,$classimg,$add,$doenews);
	$listtemp=str_replace('[!--pagetitle--]',$pagetitle,$listtemp);
	$listtemp=str_replace('[!--page.stats--]',$onclick,$listtemp);
	$no=1;
	$ok=0;
	$changerow=1;
	$totalquery="select count(*) as total from {$dbtbpre}ecms_game where  checked=1 and infotags LIKE '%".str_replace(" ","%",$r[tagname])."%' ";//统计
	$num=$empire->gettotal($totalquery);
	//最大数
	if($limitnum&&$limitnum<$num)
	{
		$num=$limitnum;
	}
	$page=ceil($num/$lencord);
	//取得列表模板
	$list_exp="[!--empirenews.listtemp--]";
	$list_r=explode($list_exp,$listtemp);
	//无信息
	if(empty($num))
	{
		$noinfopath=$dopath."index".$dotype;
		NotinfoListHtml($noinfopath,$list_r,$classlevel);
		return "";
	}
//--------------------------------------onclick----------------------------
	$query="select * from {$dbtbpre}ecms_game where checked=1 and infotags LIKE '%".str_replace(" ","%",$r[tagname])."%' order by onclick desc".$limit;	
	//exit($query);
	$sql=$empire->query($query);
	$listtext=$list_r[1];
	
	while($k=$empire->fetch($sql))
	{
		//替换列表变量
		
		$repvar=ReplaceListVars($no,$listvar,$subnews,$subtitle,$formatdate,$url,$haveclass,$k,$field,$docode);
		$listtext=str_replace("<!--list.var".$changerow."-->",$repvar,$listtext);
		//exit("repvar:".$repvar);
		
		$changerow+=1;
		//超过行数
		if($changerow>$rownum)
		{
			$changerow=1;
			$string.=$listtext;
			$listtext=$list_r[1];
		}
		if($no%$lencord==0||($num%$lencord<>0&&$num==$no))
		{
			$ok+=1;
			$pagenum=ceil($no/$lencord);
			//首页
			if($pagenum==1)
			{
				$path=$dopath."index".$dotype;
			}
			else
			{
				$path=$dopath."index_".$ok.$dotype;
			}
			
			//取得分页参数
			$returnpager=$thefun($num,$pagenum,$dolink,$dotype,$page,$lencord,$ok,$myoptions);
			$showpage=$returnpager['showpage'];
			$myoptions=$returnpager['option'];
			$list1=str_replace($bereplistpage,$showpage,$list_r[0]);
			$list2=str_replace($bereplistpage,$showpage,$list_r[2]);
			//多余数据
			if($changerow<=$rownum&&$listtext<>$list_r[1])
			{
				$string.=$listtext;
			}
			$listtext=$list_r[1];
			$changerow=1;
			$string=$list1.$string.$list2;

			
			
			//替换分页数
			$string=str_replace('[!--list.pageno--]',$pagenum,$string);

			$string=str_replace('[!--css2--]',"class=\"current\"",$string);
			$string=str_replace('[!--css1--]',"",$string);
			$string=str_replace('[!--css3--]',"",$string);
			
			WriteFiletext($path,$classlevel.$string);
			$string='';
		}
		$no++;
	}
	//$empire->free($sql);
//---------------------------------------top----------------------------------------------------------
$no=1;
	$ok=0;
	$changerow=1;

$query="select * from {$dbtbpre}ecms_game where checked=1 and infotags LIKE '%".str_replace(" ","%",$r[tagname])."%' order by id desc".$limit;	
	$sql=$empire->query($query);
	$listtext=$list_r[1];
	
	while($k=$empire->fetch($sql))
	{
		//替换列表变量
		$repvar=ReplaceListVars($no,$listvar,$subnews,$subtitle,$formatdate,$url,$haveclass,$k,$field,$docode);
		$listtext=str_replace("<!--list.var".$changerow."-->",$repvar,$listtext);
		$changerow+=1;
		//超过行数
		if($changerow>$rownum)
		{
			$changerow=1;
			$string.=$listtext;
			$listtext=$list_r[1];
		}
		if($no%$lencord==0||($num%$lencord<>0&&$num==$no))
		{
			$ok+=1;
			$pagenum=ceil($no/$lencord);
			//首页
			if($pagenum==1)
			{
				$path=$dopath."index_n".$dotype;
			}
			else
			{
				$path=$dopath."index_n_".$ok.$dotype;
			}
			//取得分页参数
			$returnpager=$thefun($num,$pagenum,$dolink,$dotype,$page,$lencord,$ok,$myoptions);
			$showpage=$returnpager['showpage'];
			$myoptions=$returnpager['option'];
			$list1=str_replace($bereplistpage,$showpage,$list_r[0]);
			$list2=str_replace($bereplistpage,$showpage,$list_r[2]);
			$list2=str_replace('index','index_n',$list2);
			$list2=str_replace('index_nOf','indexOf',$list2);
			//多余数据
			if($changerow<=$rownum&&$listtext<>$list_r[1])
			{
				$string.=$listtext;
			}
			$listtext=$list_r[1];
			$changerow=1;
			$string=$list1.$string.$list2;
			//替换分页数
			$string=str_replace('[!--list.pageno--]',$pagenum,$string);
			
			$string=str_replace('[!--css2--]',"",$string);
			$string=str_replace('[!--css1--]',"class=\"current\"",$string);
			$string=str_replace('[!--css3--]',"",$string);

			$zz2="/\<p class=\"renqi\">(.*?)<\/p>/i";
			$sj=date("Y-m-j",$k[newstime]);
			$string=preg_replace($zz2," <p class=\"date\">".$sj."</p>",$string);
			 

			WriteFiletext($path,$classlevel.$string);
			$string='';
		}
		$no++;
	}
//-------------score---------------------------------------------------------------------------------
	
$no=1;
	$ok=0;
	$changerow=1;

$query="select * from {$dbtbpre}ecms_game where checked=1 and infotags LIKE '%".str_replace(" ","%",$r[tagname])."%' order by infopfen/infopfennum desc".$limit;	
	$sql=$empire->query($query);
	$listtext=$list_r[1];
	
	while($k=$empire->fetch($sql))
	{
		//替换列表变量
		$repvar=ReplaceListVars($no,$listvar,$subnews,$subtitle,$formatdate,$url,$haveclass,$k,$field,$docode);
		$listtext=str_replace("<!--list.var".$changerow."-->",$repvar,$listtext);
		$changerow+=1;
		//超过行数
		if($changerow>$rownum)
		{
			$changerow=1;
			$string.=$listtext;
			$listtext=$list_r[1];
		}
		if($no%$lencord==0||($num%$lencord<>0&&$num==$no))
		{
			$ok+=1;
			$pagenum=ceil($no/$lencord);
			//首页
			if($pagenum==1)
			{
				$path=$dopath."index_c".$dotype;
			}
			else
			{
				$path=$dopath."index_c_".$ok.$dotype;
			}
			//取得分页参数
			$returnpager=$thefun($num,$pagenum,$dolink,$dotype,$page,$lencord,$ok,$myoptions);
			$showpage=$returnpager['showpage'];
			$myoptions=$returnpager['option'];
			$list1=str_replace($bereplistpage,$showpage,$list_r[0]);
			$list2=str_replace($bereplistpage,$showpage,$list_r[2]);
			$list2=str_replace('index','index_c',$list2);
			$list2=str_replace('index_cOf','indexOf',$list2);
			
			//多余数据
			if($changerow<=$rownum&&$listtext<>$list_r[1])
			{
				$string.=$listtext;
			}
			$listtext=$list_r[1];
			$changerow=1;
			$string=$list1.$string.$list2;
			//替换分页数
			$string=str_replace('[!--list.pageno--]',$pagenum,$string);
			
			$string=str_replace('[!--css1--]',"",$string);
			$string=str_replace('[!--css2--]',"",$string);
			$string=str_replace('[!--css3--]',"class=\"current\"",$string);
			$df0=round($k[infopfen]/$k[infopfennum]);
			$df=round($k[infopfen]/$k[infopfennum],1);
			$zz2="/\<p class=\"renqi\">(.*?)<\/p>/i";
			$string=preg_replace($zz2," <p class=\"score\"><i class=\"i_star s".$df0."\" id=\"span_score1\"></i><em class=\"c_num\">".$df."</em></p>",$string);
			 

			//$string=preg_replace($zz2," <p class=\"date\">".$df."</p>",$string);
			WriteFiletext($path,$classlevel.$string);
			$string='';
		}
		$no++;
	}
	//$empire->free($sql);
//---------------------------------------new----------------------------------------------------------
 
	$empire->free($sql);
	
}

//2011-8-24 4usky.com
function TagHtml4Box($tagid,$orderby,$tagdir,$tagname){
	global $empire,$dbtbpre,$emod_r,$public_r,$class_r,$class_zr,$fun_r,$class_tr,$level_r;
	
	$GLOBALS['navclassid']=$tagid;
	$doclass="index";
	$classlevel='';
	$selfclassid=$tagid;
	$doenews=0;
	$pagetitle=htmlspecialchars($tagname);
	$url="<a href=\"/\">首页</a> >>&nbsp;&nbsp;<a href=\"/tag/".$tagdir."\">".$tagname."</a>";
	$haveclass=1;		
	$doclasspath="box/tag/".$tagdir;
	if(!file_exists(ECMS_PATH."/box/tag/"))
	{
		DoMkdir(ECMS_PATH."/box/tag/");
	}
	$dopath=ECMS_PATH.$doclasspath."/";
	echo($dopath);
	if(!file_exists($dopath))
	{
		DoMkdir($dopath);
	}
	$dolink=$public_r[newsurl].$doclasspath."/";
	//exit("dolink:".$dolink);
	$dotype=".htm";
	$onclick="<script src='".$public_r[newsurl]."e/public/onclick?enews=dotag&tagid=$tagid'></script>";
	//模板
	$listtempid=$class_r[$classid][listtempid];
	$lencord=12;
	
	//列表模板
	$listtemp_r=GetListTemp(14);	
    $listtemp=$listtemp_r[temptext];	
	$listtemp=str_replace('[!--tagname--]',$tagname,$listtemp);//替换sql中的tagname
	
	$subnews=$listtemp_r[subnews];
	$subtitle=$listtemp_r[subtitle];
	$docode=$listtemp_r[docode];
	$listvar=str_replace('[!--news.url--]',$public_r[newsurl],$listtemp_r[listvar]);	
	$rownum=$listtemp_r[rownum];
	$formatdate=$listtemp_r[showdate];
	if(empty($rownum))
	{
		$rownum=1;
	}
	if(empty($mid))
	{
		$mid=$listtemp_r[modid];
	}
	$field=ReturnReplaceListF($mid);
	//分页列表函数
	if(!empty($public_r['listpagefun'])||!empty($public_r['listpagelistfun']))
	{
		if(strstr($listtemp,'[!--show.page--]'))//下拉式
		{
			$thefun=$public_r['listpagefun'];
			$bereplistpage='[!--show.page--]';
		}
		else//列表式
		{
			$thefun=$public_r['listpagelistfun'];
			$bereplistpage='[!--show.listpage--]';
		}
	}
	else
	{
		$thefun='sys_ShowListPage';
		$bereplistpage='[!--show.page--]';
	}
	//替换模板变量
	//$listtemp=str_replace('[!--newsnav--]',$url,$listtemp);//位置导航
	
	//$listtemp=Class_ReplaceSvars($listtemp,$url,$selfclassid,$pagetitle,$pagekey,$pagedes,$classimg,$add,$doenews);
	$listtemp=str_replace('[!--pagetitle--]',$pagetitle,$listtemp);
	$listtemp=str_replace('[!--page.stats--]',$onclick,$listtemp);
	$no=1;
	$ok=0;
	$changerow=1;
	$totalquery="select count(*) as total from {$dbtbpre}ecms_game where  checked=1 and infotags LIKE '%".str_replace(" ","%",$tagname)."%' ";//统计
	$num=$empire->gettotal($totalquery);
	//最大数
	if($limitnum&&$limitnum<$num)
	{
		$num=$limitnum;
	}
	$page=ceil($num/$lencord);
	//取得列表模板
	$list_exp="[!--empirenews.listtemp--]";
	$list_r=explode($list_exp,$listtemp);
	//无信息
	if(empty($num))
	{
		$noinfopath=$dopath."index".$dotype;
		NotinfoListHtml($noinfopath,$list_r,$classlevel);
		return "";
	}
//--------------------------------------onclick----------------------------
	$query="select * from {$dbtbpre}ecms_game where checked=1 and infotags LIKE '%".str_replace(" ","%",$tagname)."%' order by onclick desc".$limit;	
	//exit($query);
	$sql=$empire->query($query);
	$listtext=$list_r[1];
	
	while($k=$empire->fetch($sql))
	{
		//替换列表变量
		
		$repvar=ReplaceListVars($no,$listvar,$subnews,$subtitle,$formatdate,$url,$haveclass,$k,$field,$docode);
		$listtext=str_replace("<!--list.var".$changerow."-->",$repvar,$listtext);
		//exit("repvar:".$repvar);
		
		$changerow+=1;
		//超过行数
		if($changerow>$rownum)
		{
			$changerow=1;
			$string.=$listtext;
			$listtext=$list_r[1];
		}
		if($no%$lencord==0||($num%$lencord<>0&&$num==$no))
		{
			$ok+=1;
			$pagenum=ceil($no/$lencord);
			//首页
			if($pagenum==1)
			{
				$path=$dopath."index".$dotype;
			}
			else
			{
				$path=$dopath."index_".$ok.$dotype;
			}
			
			//取得分页参数
			$returnpager=$thefun($num,$pagenum,$dolink,$dotype,$page,$lencord,$ok,$myoptions);
			$showpage=$returnpager['showpage'];
			$myoptions=$returnpager['option'];
			$list1=str_replace($bereplistpage,$showpage,$list_r[0]);
			$list2=str_replace($bereplistpage,$showpage,$list_r[2]);
			//多余数据
			if($changerow<=$rownum&&$listtext<>$list_r[1])
			{
				$string.=$listtext;
			}
			$listtext=$list_r[1];
			$changerow=1;
			$string=$list1.$string.$list2;

			
			
			//替换分页数
			$string=str_replace('[!--list.pageno--]',$pagenum,$string);

			$string=str_replace('[!--class1--]',"class=\"current\"",$string);
			$string=str_replace('[!--class2--]',"",$string);
			$string=str_replace('[!--class3--]',"",$string);
			
			WriteFiletext($path,$classlevel.$string);
			$string='';
		}
		$no++;
	}
	//$empire->free($sql);
//---------------------------------------top----------------------------------------------------------
$no=1;
	$ok=0;
	$changerow=1;

$query="select * from {$dbtbpre}ecms_game where checked=1 and infotags LIKE '%".str_replace(" ","%",$tagname)."%' order by newstime desc".$limit;	
	$sql=$empire->query($query);
	$listtext=$list_r[1];
	
	while($k=$empire->fetch($sql))
	{
		//替换列表变量
		$repvar=ReplaceListVars($no,$listvar,$subnews,$subtitle,$formatdate,$url,$haveclass,$k,$field,$docode);
		$listtext=str_replace("<!--list.var".$changerow."-->",$repvar,$listtext);
		$changerow+=1;
		//超过行数
		if($changerow>$rownum)
		{
			$changerow=1;
			$string.=$listtext;
			$listtext=$list_r[1];
		}
		if($no%$lencord==0||($num%$lencord<>0&&$num==$no))
		{
			$ok+=1;
			$pagenum=ceil($no/$lencord);
			//首页
			if($pagenum==1)
			{
				$path=$dopath."index_n".$dotype;
			}
			else
			{
				$path=$dopath."index_n_".$ok.$dotype;
			}
			//取得分页参数
			$returnpager=$thefun($num,$pagenum,$dolink,$dotype,$page,$lencord,$ok,$myoptions);
			$showpage=$returnpager['showpage'];
			$myoptions=$returnpager['option'];
			$list1=str_replace($bereplistpage,$showpage,$list_r[0]);
			$list2=str_replace($bereplistpage,$showpage,$list_r[2]);
			$list2=str_replace('index','index_n',$list2);
			$list2=str_replace('index_nOf','indexOf',$list2);
			//多余数据
			if($changerow<=$rownum&&$listtext<>$list_r[1])
			{
				$string.=$listtext;
			}
			$listtext=$list_r[1];
			$changerow=1;
			$string=$list1.$string.$list2;
			//替换分页数
			$string=str_replace('[!--list.pageno--]',$pagenum,$string);
			
			$string=str_replace('[!--class1--]',"",$string);
			$string=str_replace('[!--class2--]',"class=\"current\"",$string);
			$string=str_replace('[!--class3--]',"",$string);
			WriteFiletext($path,$classlevel.$string);
			$string='';
		}
		$no++;
	}
//-------------score---------------------------------------------------------------------------------
	
$no=1;
	$ok=0;
	$changerow=1;

$query="select * from {$dbtbpre}ecms_game where checked=1 and infotags LIKE '%".str_replace(" ","%",$tagname)."%' order by plnum desc".$limit;	
	$sql=$empire->query($query);
	$listtext=$list_r[1];
	
	while($k=$empire->fetch($sql))
	{
		//替换列表变量
		$repvar=ReplaceListVars($no,$listvar,$subnews,$subtitle,$formatdate,$url,$haveclass,$k,$field,$docode);
		$listtext=str_replace("<!--list.var".$changerow."-->",$repvar,$listtext);
		$changerow+=1;
		//超过行数
		if($changerow>$rownum)
		{
			$changerow=1;
			$string.=$listtext;
			$listtext=$list_r[1];
		}
		if($no%$lencord==0||($num%$lencord<>0&&$num==$no))
		{
			$ok+=1;
			$pagenum=ceil($no/$lencord);
			//首页
			if($pagenum==1)
			{
				$path=$dopath."index_c".$dotype;
			}
			else
			{
				$path=$dopath."index_c_".$ok.$dotype;
			}
			//取得分页参数
			$returnpager=$thefun($num,$pagenum,$dolink,$dotype,$page,$lencord,$ok,$myoptions);
			$showpage=$returnpager['showpage'];
			$myoptions=$returnpager['option'];
			$list1=str_replace($bereplistpage,$showpage,$list_r[0]);
			$list2=str_replace($bereplistpage,$showpage,$list_r[2]);
			$list2=str_replace('index','index_c',$list2);
			$list2=str_replace('index_cOf','indexOf',$list2);
			
			//多余数据
			if($changerow<=$rownum&&$listtext<>$list_r[1])
			{
				$string.=$listtext;
			}
			$listtext=$list_r[1];
			$changerow=1;
			$string=$list1.$string.$list2;
			//替换分页数
			$string=str_replace('[!--list.pageno--]',$pagenum,$string);
			
			$string=str_replace('[!--class1--]',"",$string);
			$string=str_replace('[!--class2--]',"",$string);
			$string=str_replace('[!--class3--]',"class=\"current\"",$string);
			WriteFiletext($path,$classlevel.$string);
			$string='';
		}
		$no++;
	}
	//$empire->free($sql);
//---------------------------------------new----------------------------------------------------------
 
	$empire->free($sql);
	
}


//-----------------------4usky.com 2010-10-9
function getTagInfo($taginfo)
{
	global $empire,$dbtbpre,$emod_r,$public_r,$class_r,$class_zr,$fun_r,$class_tr,$level_r;
	$tag_r=explode(",",$taginfo);
	if($tag_r[4]==1)
	{
		$tagsql="select * from {$dbtbpre}ecms_game where checked=1 and infotags like '%".str_replace(" ","%",$tag_r[0])."%' order by onclick desc limit ".$tag_r[1];
	}
	else
	{
		$tagsql="select * from {$dbtbpre}ecms_game where checked=1 and isgood=1 and infotags like '%".str_replace(" ","%",$tag_r[0])."%' order by onclick desc limit ".$tag_r[1];
	}
	$tsql=$empire->query($tagsql);
	$listtext=$list_r[1];
	$i=1;
	while($k=$empire->fetch($tsql))
	{
		$titleurl=sys_ReturnBqTitleLink($k);
		//$titleurl=$public_r[newsurl]."e/action/ShowInfo.php?classid=$k[classid]&id=$k[id]";
		$tagstr=$tagstr."<li>".$i.". <a href=\"".$titleurl."\"  target=\"_blank\">".$k[title]."</a></li>";
		$i=$i+1;
	}
	return $tagstr;
}



function CjNewsIn_newall($classid,$id,$tid,$checked,$uptime,$userid,$username){
	global $class_r,$empire,$public_r,$dbtbpre,$emod_r;
	$checked=(int)$checked;	
	if(is_array($id))
	{
		$a=$id[$tid];//每次读一个
		for($i=0;$i<count($id);$i++)
		{
			$ids.="".$id[$i].", ";
		}
	}
	else
	{
		$ids=$id;
		$id=explode(",",$id);
		$a=$id[$tid];
	}
	//echo("id:".$id."<br>");
	//echo("tid:".$tid."<br>");	
	//echo("ids:".$ids);


	if(empty($a))
	{printerror("CjLoadDbSuccess","/e/ffcode/4usky_checkcj_all.php");exit();}
	
	//echo($a);
	//echo($ids);
	//exit();
	
		//去掉最后一个 or
		//$a=substr($a,0,strlen($a)-4);
		$sql=$empire->query("select * from {$dbtbpre}ecms_infotmp_game where id=".$a." and checked=0");
		//echo($ccount);
		//exit();
		$filetime=date("Y-m-d H:i:s");
		$todaytime=time();
		while($r=$empire->fetch($sql))
		{
			//----------------------------------------------------------------------------------------------------
			$classid=$r[classid];//重新从数据库里获得classid
	
			CheckLevel($userid,$username,$classid,"cj");//操作权限
			$count=count($id);
			if(empty($count))
			{
				printerror("NotCjNewsIn","history.go(-1)");
			}
			$cr=$empire->fetch1("select * from {$dbtbpre}enewsinfoclass where classid='$classid'");
			//副表
			$cra=$empire->fetch1("select * from {$dbtbpre}ecms_infoclass_".$cr[tbname]." where classid='$classid'");

			
			//组合两数组
			$cr=TogTwoArray($cr,$cra);
			//导入gd处理文件
			if($cr['mark']||$cr['getfirstspic'])//判断是否要加水印
			{
				@include_once("gd.php");
			}
			$mid=$class_r[$cr[newsclassid]][modid];
			
			$savetxtf=$emod_r[$mid]['savetxtf'];
			$stb=$emod_r[$mid]['deftb'];
			//取得采集字段
			$record="<!--record-->";
			$field="<!--field--->";
			$mr=$empire->fetch1("select cj from {$dbtbpre}enewsmod where mid='".$class_r[$cr[newsclassid]][modid]."'");

			//echo($mr[cj]);
			//exit();
			$cjr=explode($record,$mr[cj]);
			$ccount=count($cjr);
			//取得优化字段
			for($ci=0;$ci<$ccount-1;$ci++)
			{
				$cir=explode($field,$cjr[$ci]);
				$cifield=$cir[1];
				if($cifield=="title")
				{
					continue;
				}
				$updatefield.=",".$cifield."=''";
			}	
			//============================================================================================================
			$ivalue='';
			$ifield='';
			$dataivalue='';
			$dataifield='';
			$titlepicnoval=0;
			for($j=0;$j<$ccount-1;$j++)
			{
				$cjr1=explode($field,$cjr[$j]);
				$dofield=$cjr1[1];
				$var="zz_".$dofield;
				$var1="z_".$dofield;
				$var2="qz_".$dofield;
				$var3="save_".$dofield;
				$value=$r[$dofield];
				//自身链接
				if($dofield=="empireselfurl")
				{
					$value=$r['oldurl'];
				}
				//内容
				if($dofield=="newstext"&&($cr[copyimg]||$cr[copyflash]))
				{
					$GLOBALS['cjnewsurl']=$r[oldurl];
					$value=addslashes(CopyImg(stripSlashes($value),$cr[copyimg],$cr[copyflash],$cr[newsclassid],$cr[imgurl],$username,0,$r['id'],$cr['mark']));
				}
				//简介
				if($dofield=="smalltext")
				{
					if(empty($value))
					{
						$value=SubSmalltextVal($r[newstext],$cr[smalltextlen]);
					}
					else
					{
						$value=DoClearSmalltextVal($value);
					}
				}
			
				//图片集
				if($dofield=="morepic")
				{
					echo('morepic');
					if($cr[$var3]==" checked")
					{
						$msavepic=1;
						$r['filepass']=$r['id'];
						$value=LoadInSaveMorepicFile($value,$msavepic,$cr[newsclassid],0,$r);						
					}
				}
				
				//信息时间
				if($dofield=="newstime")
				{continue;}

				//echo($cr[zz_titlepicl]);
				//图片标题
				if($dofield=="titlepic"&&$cr[zz_titlepicl])
				{
					$cr[$var]=$cr[zz_titlepicl];
					$cr[$var1]=$cr[z_titlepicl];
					$cr[$var2]=$cr[qz_titlepicl];
					$cr[$var3]=$cr[save_titlepicl];
					
					//echo('titlepic');
				}
				//exit();
				if($dofield=="titlepic"&&empty($value))
				{
					$titlepicnoval=1;
				}

				//Tags flash34.com code
				//if($dofield=="biao")
				//{
				//	$value = CreateTag($value);
					
					//echo($value);
					//exit();
				//}
				//是否远程保存
				if($value&&!$cr[$var1]&&$cr[$var3]==" checked"&&$dofield!="morepic")
				{					
					if($dofield=="flash")//判断flash地址是否为.swf，如果不是就直接采用原地址不下载
					{
						if (substr($value,-4)==".swf")
						{
							$tranr=DoTranUrl($value,$cr[newsclassid]);
							//echo($tranr[tran]);
							//exit();
							if($tranr[tran])
							{
								$tranr[filesize]=(int)$tranr[filesize];
								$tranr[type]=(int)$tranr[type];
								$r[id]=(int)$r[id];

								//-----2010-8-5 flash34 code
								if (substr($tranr[filename],-4)==".swf")
								{
									$swfsize=$tranr[filesize];			
								}
								//echo("swfsize--".$swfsize);
								//记录数据库
								//$usql=$empire->query("insert into {$dbtbpre}enewsfile(filename,filesize,adduser,path,filetime,classid,no,type,id,cjid,onclick,fpath) values('$tranr[filename]',$tranr[filesize],'$username','$tranr[filepath]','$filetime',$cr[newsclassid],'[URL]".$tranr[filename]."',$tranr[type],0,$r[id],0,'$public_r[fpath]');");
								$fname=str_replace("'","_",$tranr[filename]);
								$furl=str_replace("'","_",$tranr[url]);
								//记录数据库
								$usql=$empire->query("insert into {$dbtbpre}enewsfile(filename,filesize,adduser,path,filetime,classid,no,type,id,cjid,onclick,fpath) values('$fname',$tranr[filesize],'$username','$tranr[filepath]','$filetime',$cr[newsclassid],'$furl',$tranr[type],0,$r[id],0,'$public_r[fpath]');");
							
								$value=$tranr[url];
							}
						}
						else
						{
							$value=$value;
							$swfsize=-1;
						}
					}
					else
					{

						$tranr=DoTranUrl($value,$cr[newsclassid]);
						//echo($tranr[tran]);
						//exit();
						if($tranr[tran])
						{
							$tranr[filesize]=(int)$tranr[filesize];
							$tranr[type]=(int)$tranr[type];
							$r[id]=(int)$r[id];

							//-----2010-8-5 flash34 code
							if (substr($tranr[filename],-4)==".swf")
							{
								$swfsize=$tranr[filesize];			
							}
							//echo("swfsize--".$swfsize);
							//记录数据库
							//$usql=$empire->query("insert into {$dbtbpre}enewsfile(filename,filesize,adduser,path,filetime,classid,no,type,id,cjid,onclick,fpath) values('$tranr[filename]',$tranr[filesize],'$username','$tranr[filepath]','$filetime',$cr[newsclassid],'[URL]".$tranr[filename]."',$tranr[type],0,$r[id],0,'$public_r[fpath]');");
							$fname=str_replace("'","_",$tranr[filename]);
							$furl=str_replace("'","_",$tranr[url]);
							//记录数据库
							$usql=$empire->query("insert into {$dbtbpre}enewsfile(filename,filesize,adduser,path,filetime,classid,no,type,id,cjid,onclick,fpath) values('$fname',$tranr[filesize],'$username','$tranr[filepath]','$filetime',$cr[newsclassid],'$furl',$tranr[type],0,$r[id],0,'$public_r[fpath]');");
						
							$value=$tranr[url];
						}
					}
				}
				
			
				//存放文本
				if($savetxtf==$dofield)
				{
					//建立目录
					$thetxtfile=GetFileMd5();
					$truevalue=MkDirTxtFile(date("Y/md"),$thetxtfile);
					//echo($truevalue);
					//exit();
					//写放文件
					EditTxtFieldText($truevalue,$value);
					$value=$truevalue;
				}
				$value=RepDyh($value);
				if(strstr($emod_r[$mid]['tbdataf'],','.$dofield.','))//副表
				{
					$dataifield.=",".$dofield;
					$dataivalue.=",'".$value."'";
				}
				else
				{
					$ifield.=",".$dofield;
					$ivalue.=",'".$value."'";
				}
			}
			$r[keyboard]=RepDyh($r[keyboard]);
			//时间
			if($uptime)//当前时间
			{
				$r[newstime]=$todaytime;
				$r[truetime]=$todaytime;
			}
			else
			{
				if($r[newstime]=="0000-00-00 00:00:00")
				{
					$r[newstime]=$todaytime;
				}
				else
				{
					$r[newstime]=to_time($r[newstime]);
				}
			}
			//查看目录是否存在，不存在则建立
			$newspath=FormatPath($cr[newsclassid],"",0);
			//强制签发
			if($class_r[$cr[newsclassid]][docheckuser]&&$class_r[$cr[newsclassid]][checkuser])
			{
				$checkuser=",".$class_r[$cr[newsclassid]][checkuser].",";
				$checked=0;
				$isqf=1;
			}
			else
			{
				$checkuser="";
				$checked=$checked;
				$isqf=0;
			}
			//变量处理
			$newstempid=0;
			//取得返回关键字
			$keyid=GetKeyid($r[keyboard],$cr[newsclassid],0,$class_r[$cr[newsclassid]][link_num]);
			
			$isql=$empire->query("insert into {$dbtbpre}ecms_".$cr[tbname]."(classid,onclick,newspath,keyboard,keyid,userid,username,ztid,checked,istop,truetime,ismember,dokey,isgood,titlefont,titleurl,filename,groupid,newstempid,plnum,firsttitle,isqf,userfen,totaldown,closepl,havehtml,lastdotime,haveaddfen,infopfen,infopfennum,votenum,stb,ttid,newstime".$ifield.") values($cr[newsclassid],0,'$newspath','$r[keyboard]','$keyid',$r[userid],'$r[username]','$cr[newsztid]','$checked',0,'$r[truetime]',0,1,0,'$r[titlefont]','$r[titleurl]','$filename',0,'".$newstempid."',0,0,'$isqf',0,0,0,0,'$r[truetime]',0,'3.5',1,0,'$stb',0,'$r[newstime]'".$ivalue.");");
			$lastid=$empire->lastid();
			//副表
			$fisql=$empire->query("insert into {$dbtbpre}ecms_".$cr[tbname]."_data_".$stb."(id,classid".$dataifield.") values('$lastid','$cr[newsclassid]'".$dataivalue.");");
			//签发
			if($isqf==1)
			{
				$iqfsql=$empire->query("insert into {$dbtbpre}enewsqf(id,classid,checkuser,docheckuser,viewcheckuser,returncheck,notdocheckuser,checked) values('$lastid','$cr[newsclassid]','".addslashes($checkuser)."',',',',',0,',',0);");
			}
			//更新附件
			UpdateTheFile($id,$r['id']);
			//取第一张图片为标题图片
			$addtitlepic="";
			if($cr['getfirstpic']&&$titlepicnoval)
			{
				$firsttitlepic=GetFpicToTpic($cr[newsclassid],$lastid,$cr['getfirstpic'],$cr['getfirstspic'],$cr['getfirstspicw'],$cr['getfirstspich']);
				if($firsttitlepic)
				{
					$addtitlepic=",titlepic='".addslashes($firsttitlepic)."'";
				}
			}
			//文件命名
			$filename=ReturnInfoFilename($cr[newsclassid],$lastid,$r[filenameqz]);
			
			
			$usql=$empire->query("update {$dbtbpre}ecms_".$cr[tbname]." set filename='$filename'".$addtitlepic." where id='$lastid'");

			echo("<br>ss--".$filename);
			//exit();
		}
		//状态原记录
		if($cr['delloadinfo'])//删除
		{
			$del=$empire->query("delete from {$dbtbpre}ecms_infotmp_".$cr[tbname]." where id=".$a);
		}
		else
		{
			echo("update".$a);
			$del=$empire->query("update {$dbtbpre}ecms_infotmp_".$cr[tbname]." set checked=1,keyboard=''".$updatefield." where id=".$a);
		}
		
		insert_dolog("classid=".$classid);
		
		$tid=$tid+1;
		if($tid<count($id)-1)
		{	
			echo "<b>$cr[classname]</b>&nbsp;&nbsp;(ID:<font color=red><b>".$a."</b></font>)<script>self.location.href='ecmscj.php?enews=CjNewsIn_newall&checked=$checked&uptime=$uptime&start=$tid&classid=$classid&id=$ids&fm=$fm&from=$_POST[from]';</script>";
			//echo "<b>$cr[classname]</b>&nbsp;&nbsp;(ID:<font color=red><b>".$a."</b></font>)";
			exit();
		}
		else
		{
			printerror("CjLoadDbSuccess","/e/admin/CheckCj.php?classid=$classid&from=$_GET[from]");
		}
		
	//}
	//else
	//{
		//操作日志
		
		//printerror("CjLoadDbSuccess","CheckCj.php?classid=$classid&from=$_POST[from]");
	//}
}


//标签列表页面 2012-1-12 4usky.com
//生成所有标签列表页面

function TagsHtml(){
	global $empire,$dbtbpre,$emod_r,$public_r,$class_r,$class_zr,$fun_r,$class_tr,$level_r;

	$doclass="index";
	$classlevel='';
	
	$doenews=0;
	 
	$haveclass=1;		
	$doclasspath="tag/";
	if(!file_exists(ECMS_PATH."/tag/"))
	{
		DoMkdir(ECMS_PATH."/tag/");
	}
	$dopath=ECMS_PATH.$doclasspath;
	
	if(!file_exists($dopath))
	{
		DoMkdir($dopath);
	}
	$dolink=$public_r[newsurl].$doclasspath;
 
	$dotype=".htm";
	
	//模板
 
	$lencord=35;
	$listtemp_r=GetListTemp(15);
	//列表模板
	if(empty($r[bpic]))
		$hiddencss="hidden";	
	else
		$hiddencss="";
    $listtemp=$listtemp_r[temptext];	
	$listtemp=str_replace('[!--news.url--]',$public_r[newsurl],$listtemp);
	$listvar=str_replace('[!--news.url--]',$public_r[newsurl],$listtemp_r[listvar]);	

	
	$rownum=$listtemp_r[rownum];
	$formatdate=$listtemp_r[showdate];
	if(empty($rownum))
	{
		$rownum=1;
	}
	if(empty($mid))
	{
		$mid=$listtemp_r[modid];
	}
	$field=ReturnReplaceListF($mid);
	//分页列表函数
	if(!empty($public_r['listpagefun'])||!empty($public_r['listpagelistfun']))
	{
		if(strstr($listtemp,'[!--show.page--]'))//下拉式
		{
			$thefun=$public_r['listpagefun'];
			$bereplistpage='[!--show.page--]';
		}
		else//列表式
		{
			$thefun=$public_r['listpagelistfun'];
			$bereplistpage='[!--show.listpage--]';
		}
	}
	else
	{
		$thefun='sys_ShowListPage';
		$bereplistpage='[!--show.page--]';
	}

	$listtemp=str_replace('[!--pagetitle--]',$pagetitle,$listtemp);
	$listtemp=str_replace('[!--page.stats--]',$onclick,$listtemp);
	$no=1;
	$ok=0;
	$changerow=1;
	$totalquery="select count(*) as total from {$dbtbpre}enewstags where  cid=0 ";//统计
	$num=$empire->gettotal($totalquery);
	//最大数
	if($limitnum&&$limitnum<$num)
	{
		$num=$limitnum;
	}
	$page=ceil($num/$lencord);
	//取得列表模板
	$list_exp="[!--empirenews.listtemp--]";
	$list_r=explode($list_exp,$listtemp);
	//无信息
	if(empty($num))
	{
		$noinfopath=$dopath."index".$dotype;
		NotinfoListHtml($noinfopath,$list_r,$classlevel);
		return "";
	}
	$query="select tagid,tagdir,tagname,spic,num from {$dbtbpre}enewstags  where cid=0 order by num desc".$limit;	
	
	$sql=$empire->query($query);
	$listtext=$list_r[1];
	
	while($k=$empire->fetch($sql))
	{
		//替换列表变量
		$var=str_replace('[!--tagid--]',$k[tagid],$listvar);
		$var=str_replace('[!--tagdir--]',$k[tagdir],$var);
		$var=str_replace('[!--tagname--]',$k[tagname],$var);
		$var=str_replace('[!--spic--]',$k[spic],$var);
		$var=str_replace('[!--num--]',$k[num],$var);
		//exit($var);
		$listtext=str_replace("<!--list.var".$changerow."-->",$var,$listtext);
		//exit("repvar:".$repvar);
		
		$changerow+=1;
		//超过行数
		if($changerow>$rownum)
		{
			$changerow=1;
			$string.=$listtext;
			$listtext=$list_r[1];
		}
		if($no%$lencord==0||($num%$lencord<>0&&$num==$no))
		{
			$ok+=1;
			$pagenum=ceil($no/$lencord);
			//首页
			if($pagenum==1)
			{
				$path=$dopath."index".$dotype;
			}
			else
			{
				$path=$dopath."index_".$ok.$dotype;
			}
			
			//取得分页参数
			$returnpager=$thefun($num,$pagenum,$dolink,$dotype,$page,$lencord,$ok,$myoptions);
			$showpage=$returnpager['showpage'];
			$myoptions=$returnpager['option'];
			$list1=str_replace($bereplistpage,$showpage,$list_r[0]);
			$list2=str_replace($bereplistpage,$showpage,$list_r[2]);
			//多余数据
			if($changerow<=$rownum&&$listtext<>$list_r[1])
			{
				$string.=$listtext;
			}
			$listtext=$list_r[1];
			$changerow=1;
			$string=$list1.$string.$list2;

			//替换分页数
			$string=str_replace('[!--list.pageno--]',$pagenum,$string);			
			WriteFiletext($path,$classlevel.$string);
			echo('生成第'.$pagenum.'页<br>');
			$string='';
		}
		$no++;
	}
 
	$empire->free($sql);
	echo('<a href="../admin/tags/ListTags.php">返回tags管理页</a>');
}
function get_domain($url){
	$pattern = "/[w-] .(com|net|org|gov|cc|biz|info|cn)(.(cn|hk))*/";
	preg_match($pattern, $url, $matches);
	if(count($matches) > 0) {
		return $matches[0];
	}else{
		$rs = parse_url($url);
		$main_url = $rs["host"];
		if(!strcmp(long2ip(sprintf("%u",ip2long($main_url))),$main_url)) {
			return $main_url;
		}else{
			$arr = explode(".",$main_url);
			$count=count($arr);
			$endArr = array("com","net","org","3322");//com.cn net.cn 等情况
			if (in_array($arr[$count-2],$endArr)){
				$domain = $arr[$count-3].".".$arr[$count-2].".".$arr[$count-1];
			}else{
				$domain = $arr[$count-2].".".$arr[$count-1];
			}
			return $domain;
		}
	}
}
?>