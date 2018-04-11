function history_show(){   
		 var history_info=getCookies("history_info"); 
		 var content='';
		 if(history_info != null){
			 history_arg=history_info.split("@");			 
			 for(var i=0;i<=6;i++){
			  if(history_arg[i] != null && history_arg[i] !=''){
					var wlink=history_arg[i].split(",");
					var id = wlink[0];var title = wlink[1];var titlepic=wlink[2];var classpath = wlink[3].replace("null","");
					content+=('<li><a target="_blank" href="'+classpath+'">'+unescape(title)+'</a></li>');
			   }
			   $(".play_history1").html(content);
			 }
		}else{
		content+='<li style="width:auto">你没有浏览过的历史！</li>';
		content+=''
		$(".play_history1").html(content);

		}
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