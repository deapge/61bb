<!--//--><![CDATA[//><!--
//图片滚动列表 mengjia 070816
var Speed = 10; //速度(毫秒)
var Space = 10; //每次移动(px)
var PageWidthx = 136; //翻页宽度
var fill = 0; //整体移位
var MoveLock = false;
var MoveTimeObj;
var Comp = 0;
var AutoPlayObj = null;
GetObj("List2x").innerHTML = GetObj("List1x").innerHTML;
GetObj('ISL_Contx').scrollLeft = fill;
GetObj("ISL_Contx").onmouseover = function(){clearInterval(AutoPlayObj);}
GetObj("ISL_Contx").onmouseout = function(){AutoPlay();}
AutoPlay();
function GetObj(objName){if(document.getElementById){return eval('document.getElementById("'+objName+'")')}else{return eval

('document.all.'+objName)}}
function AutoPlay(){ //自动滚动
clearInterval(AutoPlayObj);
AutoPlayObj = setInterval('ISL_GoDownx();ISL_StopDownx();',5000); //间隔时间
}
function ISL_GoUpx(){ //上翻开始
if(MoveLock) return;
clearInterval(AutoPlayObj);
MoveLock = true;
MoveTimeObj = setInterval('ISL_ScrUpx();',Speed);
}
function ISL_StopUpx(){ //上翻停止
clearInterval(MoveTimeObj);
if(GetObj('ISL_Contx').scrollLeft % PageWidthx - fill != 0){
Comp = fill - (GetObj('ISL_Contx').scrollLeft % PageWidthx);
CompScrx();
}else{
MoveLock = false;
}
AutoPlay();
}
function ISL_ScrUpx(){ //上翻动作
if(GetObj('ISL_Contx').scrollLeft <= 0){GetObj('ISL_Contx').scrollLeft = GetObj

('ISL_Contx').scrollLeft + GetObj('List1x').offsetWidth}
GetObj('ISL_Contx').scrollLeft -= Space ;
}
function ISL_GoDownx(){ //下翻
clearInterval(MoveTimeObj);
if(MoveLock) return;
clearInterval(AutoPlayObj);
MoveLock = true;
ISL_ScrDownx();
MoveTimeObj = setInterval('ISL_ScrDownx()',Speed);
}
function ISL_StopDownx(){ //下翻停止
clearInterval(MoveTimeObj);
if(GetObj('ISL_Contx').scrollLeft % PageWidthx - fill != 0 ){
Comp = PageWidthx - GetObj('ISL_Contx').scrollLeft % PageWidthx + fill;
CompScrx();
}else{
MoveLock = false;
}
AutoPlay();
}
function ISL_ScrDownx(){ //下翻动作
if(GetObj('ISL_Contx').scrollLeft >= GetObj('List1x').scrollWidth){GetObj('ISL_Contx').scrollLeft =

GetObj('ISL_Contx').scrollLeft - GetObj('List1x').scrollWidth;}
GetObj('ISL_Contx').scrollLeft += Space ;
}
function CompScrx(){
var num;
if(Comp == 0){MoveLock = false;return;}
if(Comp < 0){ //上翻
if(Comp < -Space){
   Comp += Space;
   num = Space;
}else{
   num = -Comp;
   Comp = 0;
}
GetObj('ISL_Contx').scrollLeft -= num;
setTimeout('CompScrx()',Speed);
}else{ //下翻
if(Comp > Space){
   Comp -= Space;
   num = Space;
}else{
   num = Comp;
   Comp = 0;
}
GetObj('ISL_Contx').scrollLeft += num;
setTimeout('CompScrx()',Speed);
}
}
//--><!]]>