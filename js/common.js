// JavaScript Document
//视频星星打分
window.onload=function(){
//box 为整个结构的最外层容器，由他来捕捉所有事件
	var box = document.getElementById("stardiv");
	//默认级别,星星的变化都是通过这个层的背景图片的backgroundPosition 变化来实现
	var defaultStars = document.getElementById("defaultStars");
	//获得设置的默认级别
	var defaultValue = box.getAttribute("default");
	var defaultPosition = defaultValue*30 - 150 + "px -30px";
	defaultStars.style.backgroundPosition = defaultPosition;

	box.onmouseover = function(e){
		var src = e?e.target:event.srcElement;
		if (src.tagName == "LI"){
			var x = -150 + src.innerHTML*30;
			defaultStars.style.backgroundPosition = x + "px -30px";
			//显示当前分数
			//$(".infoscore>em").html(src.innerHTML)
			//显示当前提示
			var strnote='还可以！';
			var m=parseInt(src.innerHTML);
			switch(m){
				case 1:
						strnote = "太烂了！";
						break;	
				case 2:
						strnote = "凑合吧！";
						break;	
				case 3:
						strnote = "还可以！";
						break;	
				case 4:
						strnote = "还不错，推荐！";
						break;	
				case 5:
						strnote = "棒极了，极品！";
						break;	
			}
			$(".infoscore>p>i").html(strnote)
		}
	}//
	box.onmouseout = function(e){
		defaultStars.style.backgroundPosition = defaultPosition;
	}
	box.onclick = function(e){//点击评分
		var src = e?e.target:event.srcElement;
		if (src.tagName == "LI"){
			var x = -150 + src.innerHTML*30;
			defaultStars.style.backgroundPosition = x + "px -60px";
			//移除事件，让box不在对鼠标动作作出反映
			box.onmouseover = box.onmouseout = box.onclick = null;
			box.style.cursor = "default";
			var pf = src.innerHTML;
			//alert(pf);
			$.get("/e/enews/index.php", {enews:'AddInfoPfen', classid:cid,id:id, pf:pf},
			function(data){
				if(data=="1"){
					alert("评分成功，谢谢你的支持！");
				}
				else
				{
					alert("您已评分！");
				}
				//$(".infoscore>em").html(pf+"分");
			});
		}
	}
}

//锚点函数
function goto(id) {
	$("#" + id).ScrollTo(800);
}
//判断简介是否存在
var mysay = $("#mysay").html();

if($.trim(mysay)==''){
	$("#nonesay").css("display","block"); 
}

