function addFlash(player,purl)
{
	var w=671;
	var h=479;//440
	var pary=purl.split('$');
	var plen=pary.length;
	var playhtml="";
	//player= base64decode(base64decode(base64decode((player))));
	//purl= base64decode(base64decode(base64decode((purl))));
	switch(plen)
	{
		case 1:break;
		
		case 3:
		player=pary[2];
		purl=pary[1];
		break;
		
		default:
		alert('播放参数错误');
		return;
		break;
	}
	switch(player)
	{
		case 'tudou':
		playhtml+= ("<OBJECT ID='flashgame' classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0' width='"+w+"' height='"+h+"'>\n");
		playhtml+= ("<PARAM NAME='allowScriptAccess' VALUE='never'>\n");
		playhtml+= ("<PARAM NAME='movie' VALUE='http://js.tudouui.com/bin/douwan/douwanPlayer_3.swf?iid=" + purl + "'>\n");
		playhtml+= ("<PARAM NAME='allowFullScreen' VALUE='true'>\n");
		playhtml+= ("<PARAM NAME='allowNetworking' VALUE='internal'>\n");
		playhtml+=("<embed id='flashgame1' name='flashgame' src='http://js.tudouui.com/bin/douwan/douwanPlayer_3.swf?iid=" + purl + "' quality='high' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' width='"+w+"' height='"+h+"' allowScriptAccess='never' allowNetworking='internal'></embed>");
		playhtml+= ("<PARAM NAME='quality' VALUE='high'>\n");
		playhtml+= ("</OBJECT>\n");
		break;
		case 'youku':
		playhtml+=('<embed type="application/x-shockwave-flash" src="http://static.youku.com/v1.0.0182/v/swf/qplayer.swf" id="flashgame1" name="flashgame" quality="high" flashvars="isShowRelatedVideo=false&amp;showAd=0&amp;show_pre=1&amp;show_next=1&amp;isAutoPlay=false&amp;isDebug=false&amp;winType=interior&amp;playMovie=true&amp;MMControl=false&amp;MMout=false&amp;VideoIDS='+purl+'" wmode="transparent"  allowFullScreen="true" allowscriptaccess="never" width="'+w+'" height="'+h+'">');break;
		case 'sina':
		playhtml+= ("<OBJECT ID='flashgame' classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0' width='"+w+"' height='"+h+"'>\n");
		playhtml+= ("<PARAM NAME='allowScriptAccess' VALUE='never'>\n");
		playhtml+= ("<PARAM NAME='movie' VALUE='http://vhead.blog.sina.com.cn/player/bn_topic.swf?vid=" + purl + "&clip_id=&imgurl=&auto=1&vblog=1&type=0&tabad=1'>\n");
		playhtml+= ("<PARAM NAME='allowFullScreen' VALUE='true'>\n");
		playhtml+= ("<PARAM NAME='allowNetworking' VALUE='internal'>\n");
		playhtml+=("<embed id='flashgame1' name='flashgame' src='http://vhead.blog.sina.com.cn/player/bn_topic.swf?vid=" + purl + "&clip_id=&imgurl=&auto=1&vblog=1&type=0&tabad=1' quality='high' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' width='"+w+"' height='"+h+"' allowScriptAccess='never' allowNetworking='internal'></embed>");
		playhtml+= ("<PARAM NAME='quality' VALUE='high'>\n");
		playhtml+= ("</OBJECT>\n");
		break;
		case 'ku6':
			playhtml+=('<embed type="application/x-shockwave-flash" src="http://player.ku6cdn.com/default/out/pV2.7.3.swf" id="flashgame1" name="flashgame" quality="high" flashvars="ver=108&amp;jump=0&amp;api=1&amp;auto=1&amp;color=0&amp;deflogo=0&amp;flag=hd&amp;adss=0&amp;vid='+purl+'&amp;type=v" wmode="transparent" allowscriptaccess="always" allowfullscreen="true" width="'+w+'" height="'+h+'">');break;
		case '56':
		playhtml+= ("<OBJECT ID='flashgame' classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0' width='"+w+"' height='"+h+"'>\n");
		playhtml+= ("<PARAM NAME='allowScriptAccess' VALUE='never'>\n");
		playhtml+= ("<PARAM NAME='movie' VALUE='http://player.56.com/" + purl + ".swf'>\n");
		playhtml+= ("<PARAM NAME='allowFullScreen' VALUE='true'>\n");
		playhtml+= ("<PARAM NAME='allowNetworking' VALUE='internal'>\n");
		playhtml+=("<embed id='flashgame1' name='flashgame' src='http://player.56.com/" + purl + ".swf' quality='high' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' width='"+w+"' height='"+h+"' allowScriptAccess='never' allowNetworking='internal'></embed>");
		playhtml+= ("<PARAM NAME='quality' VALUE='high'>\n");
		playhtml+= ("</OBJECT>\n");
		break;
		case 'sohu':
		playhtml+= ("<OBJECT ID='flashgame' classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0' width='"+w+"' height='"+h+"'>\n");
		playhtml+= ("<PARAM NAME='allowScriptAccess' VALUE='always'>\n");
		playhtml+= ("<PARAM NAME='movie' VALUE='http://share.vrs.sohu.com/" + purl + "/v.swf'>\n");
		playhtml+= ("<PARAM NAME='allowFullScreen' VALUE='true'>\n");
		playhtml+= ("<PARAM NAME='allowNetworking' VALUE='internal'>\n");
		playhtml+= ("<embed id='flashgame1' name='flashgame' src='http://share.vrs.sohu.com/" + purl + "/v.swf' quality='high' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' width='"+w+"' height='"+h+"' allowScriptAccess='always' allowNetworking='internal'></embed>");
		playhtml+= ("<PARAM NAME='quality' VALUE='high'>\n");
		playhtml+= ("</OBJECT>\n");break;
		case 'qiyi':
		
		playhtml+= ("<OBJECT ID='flashgame' classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0' width='"+w+"' height='"+h+"'>\n");
		playhtml+= ("<PARAM NAME='allowScriptAccess' VALUE='never'>\n");
		playhtml+= ("<PARAM NAME='movie' VALUE='http://www.qiyi.com/player/20110506184000/player.swf?vid="+purl+"'>\n");
		playhtml+= ("<PARAM NAME='allowFullScreen' VALUE='true'>\n");
		playhtml+= ("<PARAM NAME='allowNetworking' VALUE='internal'>\n");
		playhtml+=("<embed id='flashgame1' width='"+w+"'  height='"+h+"' align='middle'   allowscriptaccess='always' hint='true' wmode='window'  ipad='true'  flashvars='preLoaderUrl=http://www.qiyi.com/player/20111125234543/preloader.swf&vid=" + purl + "&pid=34441&ptype=2&albumId=125830&tvId=118776&UUIDDuration=3000&cid=qc_100001_100012&browser=fireFox'   src='http://www.qiyi.com/player/20111208105202/qiyi_n_player.swf' type='application/x-shockwave-flash'  menu='true'  allowfullscreen='true'  devicefont='false' scale='showall'  quality='hight'  play='true'  loop='true' pluginspage='http://www.macromedia.com/go/getflashplayer'>");
		playhtml+= ("<PARAM NAME='quality' VALUE='high'>\n");
		playhtml+= ("</OBJECT>\n");

		//alert(playhtml);
		break;
		case 'cctv':
			playhtml+=('<object id="flashgame" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="'+w+'" height="'+h+'"><param name="movie" value="http://space.tv.cctv.com/playcfg/CCTVvideoplayer.swf?id='+purl+'&amp;site=http://space.tv.cctv.com&amp;method=http&amp;share=1"><param name="allowFullScreen" value="true"><param name="flashvars" value=""><param name="quality" value="high"><param name="bgcolor" value="#000"><param name="menu" value="false"><param name="SCALE" value="exactfit"><param name="allowScriptAccess" value="always"><embed id="flashgame1" name="flashgame" src="http://space.tv.cctv.com/playcfg/CCTVvideoplayer.swf?id='+purl+'&amp;site=http://space.tv.cctv.com&amp;method=http&amp;share=1" flashvars="" allowscriptaccess="always" quality="high" bgcolor="#000" allowfullscreen="true" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="'+w+'" height="'+h+'"></object>');
			break;
		case 'cntv':
            playhtml+=("<embed id=\'v_player_cctv\' width=\'"+w+"\' height=\'"+h+"\' flashvars=\'videoId=20110103100224&isAutoPlay=true&tai=ent&configPath=http:\/\/ent.cntv.cn\/nettv\/Library\/enttv\/player\/config.xml&widgetsConfig=http:\/\/ent.cntv.cn\/nettv\/Library\/enttv\/player\/widgetsConfig.xml&languageConfig=http:\/\/ent.cntv.cn\/nettv\/Library\/enttv\/player\/zh_cn.xml&hour24DataURL=&outsideChannelId=channelBugu&videoCenterId="+purl+"\'  allowScriptAccess=\'never\' allowfullscreen=\'true\' menu=\'false\' quality=\'best\' bgcolor=\'#000000\'  name=\'v_player_cctv\' src=\'http:\/\/player.cntv.cn\/standard\/cntvOutSidePlayer.swf?v=0.171.5.7.2\' type=\'application\/x-shockwave-flash\'\/>");break;
		default:
		playhtml+= ("<OBJECT ID='flashgame' classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0' width='"+w+"' height='"+h+"'>\n");
		playhtml+= ("<PARAM NAME='allowScriptAccess' VALUE='never'>\n");
		playhtml+= ("<PARAM NAME='movie' VALUE='" + purl + "'>\n");
		playhtml+= ("<PARAM NAME='allowFullScreen' VALUE='true'>\n");
		playhtml+= ("<PARAM NAME='allowNetworking' VALUE='internal'>\n");
		playhtml+=("<embed id='flashgame1' name='flashgame' src='" + purl + "' quality='high' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' width='"+w+"' height='"+h+"' allowScriptAccess='never' allowNetworking='internal'></embed>");
		playhtml+= ("<PARAM NAME='quality' VALUE='high'>\n");
		playhtml+= ("</OBJECT>\n");
		break;
	}
	//alert(playhtml);
	return playhtml;
}
function base64encode(str) { 
str = utf16to8(str); 
var out, i, len;    
var c1, c2, c3;    
var base64EncodeChars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/"; 
len = str.length;    
i = 0;    
out = "";    
while(i < len) { 
c1 = str.charCodeAt(i++) & 0xff;    
if(i == len){ 
out += base64EncodeChars.charAt(c1 >> 2); 
out += base64EncodeChars.charAt((c1 & 0x3) << 4); 
out += "==";       
break;    
}    
c2 = str.charCodeAt(i++);    
if(i == len)    {        
out += base64EncodeChars.charAt(c1 >> 2);        
out += base64EncodeChars.charAt(((c1 & 0x3)<< 4) | ((c2 & 0xF0) >> 4));        
out += base64EncodeChars.charAt((c2 & 0xF) << 2);        
out += "=";        
break;    
} 
c3 = str.charCodeAt(i++);    
out += base64EncodeChars.charAt(c1 >> 2);    
out += base64EncodeChars.charAt(((c1 & 0x3)<< 4) | ((c2 & 0xF0) >> 4));    
out += base64EncodeChars.charAt(((c2 & 0xF) << 2) | ((c3 & 0xC0) >>6));    
out += base64EncodeChars.charAt(c3 & 0x3F);    
}   
return out; 
} 
function base64decode(str){ 
var c1, c2, c3, c4;    
var i, len, out;   
var base64DecodeChars = new Array(-1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 
-1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 
-1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 62, -1, -1, -1, 63, 
52, 53, 54, 55, 56, 57, 58, 59, 60, 61, -1, -1, -1, -1, -1, -1, 
-1,  0,  1,  2,  3,  4,  5,  6,  7,  8,  9, 10, 11, 12, 13, 14, 
15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, -1, -1, -1, -1, -1, 
-1, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 
41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, -1, -1, -1, -1, -1); 
len = str.length;    
i = 0;    
out = "";    
while(i < len) {    
do {        
c1 = base64DecodeChars[str.charCodeAt(i++) & 0xff];    
} 
while(i < len && c1 == -1);    
if(c1 == -1) break;   
do {        
c2 = base64DecodeChars[str.charCodeAt(i++) & 0xff];    
} 
while(i < len && c2 == -1);    
if(c2 == -1)  break;    
out += String.fromCharCode((c1 << 2) | ((c2 & 0x30) >> 4));    
do {        
c3 = str.charCodeAt(i++) & 0xff;        
if(c3 == 61) return out;        
c3 = base64DecodeChars[c3];    
} 
while(i < len && c3 == -1);    
if(c3 == -1) break;    
out += String.fromCharCode(((c2 & 0XF) << 4) | ((c3 & 0x3C) >> 2));    
do {        
c4 = str.charCodeAt(i++) & 0xff;        
if(c4 == 61) return out;        
c4 = base64DecodeChars[c4];    
} 
while(i < len && c4 == -1);    
if(c4 == -1) break;    
out += String.fromCharCode(((c3 & 0x03) << 6) | c4);    
} 
out = utf8to16(out); 
return out; 
} 
function utf16to8(str) {    
var out, i, len, c;    
out = "";    len = str.length;    
for(i = 0; i < len; i++) {    
c = str.charCodeAt(i);    
if ((c >= 0x0001) && (c <= 0x007F)) {        
out += str.charAt(i);    
} else if (c > 0x07FF) {        
out += String.fromCharCode(0xE0 | ((c >> 12) & 0x0F));        
out += String.fromCharCode(0x80 | ((c >>  6) & 0x3F));        
out += String.fromCharCode(0x80 | ((c >>  0) & 0x3F));    
} else {        
out += String.fromCharCode(0xC0 | ((c >>  6) & 0x1F));        
out += String.fromCharCode(0x80 | ((c >>  0) & 0x3F));    
}    
}    
return out; 
} 

function utf8to16(str) {    
var out, i, len, c;    
var char2, char3;    
out = "";    
len = str.length;    
i = 0;    
while(i < len) {    
c = str.charCodeAt(i++);    
switch(c >> 4){       
case 0: case 1: case 2: case 3: case 4: case 5: case 6: case 7:            
out += str.charAt(i-1);        
break;      
case 12: case 13:              
char2 = str.charCodeAt(i++);        
out += String.fromCharCode(((c & 0x1F) << 6)|(char2 & 0x3F));        
break;      
case 14:               
char2 = str.charCodeAt(i++);        
char3 = str.charCodeAt(i++);        
out += String.fromCharCode(((c & 0x0F) << 12)|((char2 & 0x3F) << 6)|((char3 & 0x3F) << 0)); 
break;    
} 
}   
return out; 
}


//控制放大
//$(".flashcontroller>a").eq(0).click(function(){//zoom +
//	$("#flashid1").attr({"width":"780","height":"585"});
//	$(".flashipad").removeClass("flashipad").addClass("flashipad2");
//	$(".arc_l").css({"width":"960px"});
//	$(".arc_r").css({display:"none"});
//	
//})
//控制还原
//$(".flashcontroller>a").eq(1).click(function(){//zoom +
//	$("#flashid1").attr({"width":"580","height":"435"});
//	$(".flashipad2").removeClass("flashipad2").addClass("flashipad");
//	$(".arc_l").css({"width":"700px"});
//	$(".arc_r").css({display:"block"});
//	
//})
//分享
$(".share").click(function(){
	songClip()
	
});
$(".share_txt").click(function(){
	songClip()
	
});

function songClip(){
	var textobj=window.document.all.songclipurl;
	textobj.select();
	if (document.all) {
	therange=textobj.createTextRange();
	therange.execCommand("Copy")         
	window.alert("恭喜你，复制成功！现在您可以直接粘贴或按住键盘的 Ctrl+V 把本页分享给好友!");      
	}
}
//common_game.js

var initData = {
	isFullScreen	: false,
	flashStr		: "",
	flashid			: "Myflash",
	innerdiv		: "moviesbox",
	tPShowRightControl: ""
}
$(function(){
	$(".play_content").mousemove(function(e){
		showRightControl(1,0.6,0.2);
	});
	$(".play_content").bind('mouseleave', function() {
		showRightControl(0,1,0.2);
	});
	$('.play_main a').bind('click', function() {
		$(this).blur();
	});
	$(".flash_c .k1 a").bind("click", fullScreen);
});
//n:1-显示,0-隐藏;doTime:执行时长;delayTime:多久后执行
function showRightControl(n,doTime,delayTime){
	var delayTime = delayTime > 0 ? delayTime : 0;
	var doTime = doTime > 0 ? doTime : 0;
	if(initData.tPShowRightControl != "")clearTimeout(initData.tPShowRightControl);
	if(n){
		initData.tPShowRightControl=setTimeout(function(){$(".flash_c").css({display:"block",'opacity':0.7});$(".flash_c").stop().animate({width:"100px"},doTime*1000,function(){showRightControl(0,1,1.5);})},delayTime*1000);
	}else{
		initData.tPShowRightControl = setTimeout( function(){$(".flash_c").stop().animate({width:"0px"},doTime*1000,function(){$(".flash_c").css({display:"none"});});}, delayTime*1000 );
	}
}
//isWide:是否宽频，1000：宽屏；680：标屏 {duration:500}
function setPlaySize(){
	if($('.play_main').width() < 1000){
		$('.play_main').css({'width':'1000px'});
		$("#"+initData.innerdiv).css({'width':'1000px'});
		$('.flash_c .k1 a').css({'backgroundPosition': '34px -300px'});
		$('.flash_c .k1 a').html('标屏');
	}else{
		$('.play_main').css({'width':'680px'});
		$("#"+initData.innerdiv).css({'width':'680px'});
		$('.flash_c .k1 a').css({'backgroundPosition': '34px 10px'});
		$('.flash_c .k1 a').html('宽屏');
	}
	$(".flash_c .k1 a").unbind("click");
	$(".flash_c .k1 a").bind("click", setPlaySize);
}
function fullScreen(){
	if(initData.isFullScreen){
		$(document.body).css({'height': "auto",'overflow':'auto'});
		$("#play_main").removeAttr("style");
		$("#play_main").addClass("play_main");
		$("#play_main").css({'position': 'relative','width':"680px",'height':"auto"});
		$("#play_content").css({'width':"680px",'height':"480px"});
		$("#"+initData.innerdiv).css({'width':"100%",'height':"480px",'margin-left':"0px"});
		$(".flash_c").css({'top': (($("#"+initData.innerdiv).height()-$(".flash_c").height())/2)+"px"});
		$(".flash_c .k1 a").html("全屏");
	}else{
		$(document.body).css({'height': $(window).height()+"px",'overflow':'hidden'});
		$("#play_main").removeClass("play_main");
		$("#play_main").css({'position': 'absolute','left': '0px','top': $(document).scrollTop()+"px",'width':$(window).width()+"px",'height':($(window).height()-$(".play").height())+"px",'z-index':'9999'});
		$("#play_content").css({'width':$(window).width()+"px",'height':($(window).height()-$(".play").height())+"px",'background-color':'#000'});
		$("#"+initData.innerdiv).css({'width':(680*$(window).height()/480)+"px",'height':($(window).height()-$(".play").height())+"px",'margin-left':(($(window).width()-680*$(window).height()/480)/2)+"px"});
		$(".flash_c").css({'top': (($(window).height()-$(".flash_c").height())/2)+"px"});
		$(".flash_c .k1 a").html("退出全屏");
	}
	initData.isFullScreen = initData.isFullScreen ? false : true;
}
function GetflashMovieObject(movieName) {
    if (window.document[movieName]) {
        return window.document[movieName]
    }
    if (navigator.appName.indexOf("Microsoft Internet") == -1) {
        if (document.embeds && document.embeds[movieName]) return document.embeds[movieName]
    } else {
        return document.getElementById(movieName)
    }
}
function writeFlash(url, flashid, innerdiv) {
    initData.flashStr += '<object id="' + flashid + '" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="100%" height="100%" align="middle" VIEWASTEXT><param name="allowScriptAccess" value="sameDomain"><param name="allowFullScreen" value="true"><param name="movie" value="' + url + '"><param name="quality" value="high"><param name="play" value="true"><param name="bgcolor" value="#ffffff"><param name="wmode" value="Opaque"><embed src="' + url + '" quality="high" wmode="Opaque" pluginspage="http://www.macromedia.com/go/getflashplayer" align="middle" type="application/x-shockwave-flash" bgcolor="#ffffff" allowScriptAccess="sameDomain" allowFullScreen="true" play="true" width="671" height="479" name="' + flashid + '"></embed></object>';
	$("#" + initData.innerdiv).css({'width':initData.flashWidth,'height':initData.flashHeight});
    $("#" + initData.innerdiv).html(initData.flashStr);
	initData.flashMovie = GetflashMovieObject(initData.flashid);
}
function init() {
    writeFlash(getFlashUrl(initData.flashUrl), initData.flashid, initData.innerdiv);
}
var flashChars=new Array(-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,62,-1,-1,-1,63,52,53,54,55,56,57,58,59,60,61,-1,-1,-1,-1,-1,-1,-1,0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,-1,-1,-1,-1,-1,-1,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,-1,-1,-1,-1,-1);
function getFlashUrl(str){var c1,c2,c3,c4;var i,len,out;len=str.length;i=0;out="";while(i<len){do{c1=flashChars[str.charCodeAt(i++)&0xff]}while(i<len&&c1==-1);if(c1==-1)break;do{c2=flashChars[str.charCodeAt(i++)&0xff]}while(i<len&&c2==-1);if(c2==-1)break;out+=String.fromCharCode((c1<<2)|((c2&0x30)>>4));do{c3=str.charCodeAt(i++)&0xff;if(c3==61)return out;c3=flashChars[c3]}while(i<len&&c3==-1);if(c3==-1)break;out+=String.fromCharCode(((c2&0XF)<<4)|((c3&0x3C)>>2));do{c4=str.charCodeAt(i++)&0xff;if(c4==61)return out;c4=flashChars[c4]}while(i<len&&c4==-1);if(c4==-1)break;out+=String.fromCharCode(((c3&0x03)<<6)|c4)}return out}