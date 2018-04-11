// JavaScript Document
$(document).ready(function(){
	
    var X = $(".btn").offset().left;
	var Y = $(".btn").offset().top;
    $(".lightSwitcher").offset({top:Y-30,left:X+216});
    $("#shadow").css("height", $(document).height()).hide();
    $(".lightSwitcher").click(function(){
        $("#shadow").toggle();
        if ($("#shadow").is(":hidden")){
            $(this).html("<i></i><a href='javascript:;'>关灯</a><div class='c'></div>").removeClass("turnedOff");
            //$("html").removeClass("turnedOff");				
		}else{
            $(this).html("<em></em><a href='javascript:;'>开灯</a><div class='c'></div>").addClass("turnedOff");
		}
    });

}); 
//重播放
$(document).ready(function(){
		var strMovieUrl;
        $("#rp").click(function(){
			if($.browser.msie) {
  				var fo=document.getElementById('flashid1');
				strMovieUrl = fo.movie;
                fo.movie = " ";
                fo.movie = strMovieUrl;				
			 }else{
         		var newsrc=$('#flashid2').attr('src');
		        $('#flashid2').attr('src',newsrc);
			 } 
         
       })
        $("#rppic").click(function(){
			if($.browser.msie) {
  				var fo=document.getElementById('flashid1');
				strMovieUrl = fo.movie;
                fo.movie = " ";
                fo.movie = strMovieUrl;				
			 }else{
         		var newsrc=$('#flashid2').attr('src');
		        $('#flashid2').attr('src',newsrc);
			 } 
         
       })
})
            