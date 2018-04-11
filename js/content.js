
//初始化先放广告
$(".jindt>span").html("请稍后，儿歌正在加载中...");

timer20=10;//设置广告播放秒数		
timer2=window.setInterval(function(){
	$(".jindt>b").html("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;广告剩余"+timer20+"秒")
	timer20--;
	if(timer20==-1){
		$(".flash").css("display","block");
		$(".flashad,.jindt").css("display","none");
		window.clearInterval(timer2);
	}
	
},1000)

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
//关灯模式
function close_light(){
if($("#flashid1").length==0){alert("^_^请稍后，广告播放完成后才可使用影院模式...");return false;
}
		var height=$(document).height()>$("body").height()?$(document).height():$("body").height();
		var width=$(document).width()>$("body").width() ? $(document).width():$("body").width();

		width=width-21;
		$("#light_close").css({width:width,height: height}).fadeTo(500,0.95);
		$("#flashid1").attr({"width":"900","height":"680"});

}