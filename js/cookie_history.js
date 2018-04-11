// JavaScript Document
//cookie的相关函数

wlink    = "@"+id+","+title+","+titlepic+","+classpath; 
old_info = getCookies("history_info");

var insert=true; 
try{if(old_info.indexOf(wlink)>-1)	insert=false;}catch(e){}

 /////////////////////////////
if(insert)                //如果符合条件则重新写入数据
{
	wlink = wlink + getCookies("history_info");
	setCookies("history_info",escape(wlink));					
}

function getCookieVal (offset) { 
 var endstr = document.cookie.indexOf (";", offset); 
 if (endstr == -1) endstr = document.cookie.length; 
    return unescape(document.cookie.substring(offset, endstr)); 
 }     
 function getCookies (name) {
         var arg = name + "="; 
         var alen = arg.length; 
         var clen = document.cookie.length; 
         var i = 0; 
         while (i < clen) { 
             var j = i + alen; 
             if (document.cookie.substring(i, j) == arg) return getCookieVal (j); 
             i = document.cookie.indexOf(" ", i) + 1; 
             if (i == 0) break; 
         } 
      return null; 
 } 
function setCookies (name, value) { 
       var exp = new Date(); 
       exp.setTime (exp.getTime()+3600000000); 
       document.cookie = name + "=" + value + "; path=/;expires=" + exp.toGMTString(); 
}