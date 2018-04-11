/* 搜索栏默认文字显示/隐藏 */
function clears()
{
  var content=$("#keys");
  if(content.val()=="输入儿歌名称")
  {
	  content.val('');
  }
}

function fnshow()
{
  var content=$("#keys");
  if(content.val()=="")
  {
	  content.val("输入儿歌名称");
  }
}
$(document).ready(function(){
	$("#keys").focus(function(){
		  if($(this).val()=="输入儿歌名称")
		  {
			  $(this).val('');
		  }
		})
	$("#keys").blur(function(){
		  if($(this).val()=="")
		  {
			  $(this).val("输入儿歌名称");
		  }
		})
});
$(document).ready(function(){
	
	var index=0;
	$(".recreation_nav ul li").click(function(){
		
		index=$(".recreation_nav ul li").index(this);
		$(".recreation_nav ul li").removeClass("current").eq(index).addClass("current");
		$(".yl_mid span").hide().eq(index).show();
		});
	});
	

$(document).ready(function(){
	
	var index=0;
	$(".recreation_nav ul li").click(function(){
		
		index=$(".recreation_nav ul li").index(this);
		$(".recreation_nav ul li").removeClass("current").eq(index).addClass("current");
		$(".yl_mid span").hide().eq(index).show();
		});
	});
	

 
$(document).ready(function(){
	
	$(".list_l .list_more").hover(function(){
		
		$(this).find("ul").stop(true,true).show();
	},function(){
	
	    $(this).find("ul").stop(true,true).hide();
		
		});
		
	$(".list_r .list_more").hover(function(){
		
		$(this).find("ul").stop(true,true).show();
	},function(){
	
	    $(this).find("ul").stop(true,true).hide();
		
		});	
});
 
$(document).ready(function(){
	
	var index=0;
	$(".best_fl ul li").click(function(){
		
		index=$(".best_fl ul li").index(this);
		$(".best_fl ul li").removeClass("current").eq(index).addClass("current");
		$(".change span").hide().eq(index).show();
		//if(index!=0)
		//{
		//	$(".page").hide();
		//	$(".change").css("height","905px");
		//}
		//else
		//{
			$(".page").show();
			$(".change").css("height","auto");
		//}
		});
	});


/*  function 当前页面添加收藏
*   author weifei
*	date 2012.1.8
*/
	function AddFavorite(sURL, sTitle) {
		if(!sURL){
			sURL = window.location.href;	
			}
		try {
			window.external.addFavorite(sURL, sTitle);
		} catch (e) {
			try {
				window.sidebar.addPanel(sTitle, sURL, "");
			} catch (e) {
				alert("加入收藏失败，请使用Ctrl+D进行添加");
			}
		}
	}
/*  function 当前页面设为首页
*   author weifei
*	date 2012.1.8
*/
	function SetHome(obj,vrl) {
		try {
			obj.style.behavior='url(#default#homepage)';obj.setHomePage(vrl);
		} catch(e) {
			if(window.netscape) {
				try {
					netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
				} catch (e) {
					alert("此操作被浏览器拒绝！\n请在浏览器地址栏输入\"about:config\"并回车\n然后将[signed.applets.codebase_principal_support]设置为'true'");
				}
				var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch);
				prefs.setCharPref('browser.startup.homepage',vrl);
			}
		}
	}
 

function copytoclipboard() {
	if (window.clipboardData) {
		window.clipboardData.clearData();
		window.clipboardData.setData("Text", window.location.href);
		alert("按Ctrl + V ,粘贴到MSN或QQ上发给你的好友们吧 ！");
	} else {
		alert("您的浏览器不支持自动复制功能，您可以在浏览器地址栏选中地址按Ctrl+C复制。");
		
	}
}
 
$(document).ready(function(){
	$(".nav_btn").click(function (){
	if(	$(".nav_box").val().length<2 || $(".nav_box").val()=="输入儿歌名称" || $(".nav_box").val()==""){
			alert("长度不能小于2个字符");
			$(".nav_box").focus();
			return false;
		}else if($(".nav_box").val().length>20){
			alert("长度不能大于20个字符");
			$(".nav_box").focus();
			return false;
		}
	})
});

$(document).ready(function(){
	$(".sub_search").click(function (){
	if(	$("#key_search").val().length<2 || $(".nav_box").val()=="输入儿歌名称" || $(".nav_box").val()==""){
			alert("长度不能小于2个字符");
			$("#key_search").focus();
			return false;
		}else if($("#key_search").val().length>20){
			alert("长度不能大于20个字符");
			$("#key_search").focus();
			return false;
		}
	})
});
 
$(document).ready(function(){
	
	var index=0;
	$(".hot ul.btn li").click(function(){
		
		index=$(".hot ul.btn li").index(this);
		$(".hot ul.btn li").removeClass("current").eq(index).addClass("current");
		$(".scrList_img ul").hide().eq(index).show();
		//alert(index);
		if(index!=0)
		{
			$(".src_ad").hide();
		}
		else
		{
			$(".src_ad").show();
		}
		
		});
	});
	
 
$(document).ready(function(){
$("#infopic").css("display","none");
  $(".rec_bottom").click(function(){
	  
	  $(".rec_extra").slideToggle();
	  $(".rec_bottom b").toggleClass("close");	  
	  });
});

//$(document).ready(function() {//返回顶部js代码
//    var $backToTopTxt = "返回顶部", $backToTopEle = $('<div class="backToTop"></div>').appendTo($("body"))
//        .text($backToTopTxt).attr("title", $backToTopTxt).click(function() {
//            $("html, body").animate({ scrollTop: 0 }, 120);
//    }), $backToTopFun = function() {
//        var st = $(document).scrollTop(), winh = $(window).height();
//        (st > 0)? $backToTopEle.show(): $backToTopEle.hide();
//        //IE6下的定位
//        if (!window.XMLHttpRequest) {
//            $backToTopEle.css("top", st + winh - 166);
//        }
//    };
//    $(window).bind("scroll", $backToTopFun);
//    $(function() { $backToTopFun(); });
//});
//$(document).ready(function(){
//	$("#cproIframe1").css('display','none');
//});

//
 function goto(id) {
        $("#" + id).ScrollTo(800);
    }
	
//搜索选着条件
function search_show(tid,cid,oj){
	$("#tempid").attr("value",tid);
	$("#classid").attr("value",cid);
	if(tid==1)
		$("#tbname").attr("value","game");
	else
		$("#tbname").attr("value","news");
	$("#selectvalue").replaceWith('<em id="selectvalue">'+oj.innerHTML+'</em>');
	$("#select_tops").css("display","none");
	$("#keys").focus();
	}
	
function selectseout(){//鼠标事件(移出)
	$("#select_tops").css("display","none");
	}
	
function selectseover(){//鼠标事件(移进)
	$("#select_tops").css("display","block");
	}	