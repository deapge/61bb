<?php
define('empirecms','1'); 
if(!defined('InEmpireCMS'))
{
	exit();
}

//echo constant('empirecms');
?>
<?php
$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href='".$titleurl."'>".$r[title]."</a>&nbsp;>&nbsp;提交错误报告";
require(ECMS_PATH.'e/data/template/cp_1.php');
?>
  <div id="content" class="mt10">
<div id="feedback">
        	<div class="feedback_top"></div>
        	<div class="feedback_mid">
            	<div class="feedback_left">
                	<div class="question">
                    	<h1>《<?=$r[title]?>》播放遇到问题了？</h1>
                        <span>请向我们反馈,我们尽快对您提出的问题做出跟进解决.</span>
                    </div>
                    <form name="form1" method="post" action="../../enews/index.php">
                    	<input type="hidden" name="cid" value="0">
                        <div class="feedback_rd">
                            <h2>您的邮箱:</h2>
                            <input name="email" type="text" id="email">（方便回复您）
                            <div class="c"></div>
                        </div>
                        <div class="feedback_content">
                        	<h2>报告内容(*):</h2>
                            <span>(详细描述您遇到的问题、意见、建议等)</span>
                            <div class="c"></div>
                            <textarea name="errortext" id="name4"></textarea>
                            <input  type="submit" name="Submit" class="question_btn" value="提交问题"/>  
                            <input name="enews" type="hidden" id="enews" value="AddError">
                            <input name="id" type="hidden" id="id" value="<?=$id?>">
                            <input name="classid" type="hidden" id="classid" value="<?=$classid?>">
                        </div>
                    </form>    
                </div>
                <div class="feedback_right">
                	<h2>常见问题解答：</h2>
                    <p>1.播放器内黑屏, 看不到动画或动画框区域空白解决方法：</p>
                    <p>（1）.检查网络连接状况，确认网络连接正常. 
</p>
                    <p>（2）.再次刷新页面，在播放器区域会出现FLASH官方版本升级和安装的提示，并包含有下载链接的地址，这时请您点击进入下载页面，根据提示下载安装即可。</p>
                    <p>（3）.本站使用Adobe FlashPlayer作为动画播放器，安装或升级Flash最新播放器: 
</p>
                    <a href="http://www.adobe.com/software/flash/about/" target="_blank">Flash官方下载</a>
                    <span>注: 下载安装后, 须关闭全部浏览器窗口, 重新开启浏览器方可正常播放动画。</span>
                    <h2>2.动画加载很慢：</h2>
                    <p>网速慢或者网络连接不稳定的时候会出现播放动画加载很慢的情况，如果你开了迅雷、旋风等下载软件会占用网速，请暂停并且退出软件.</p>
                </div>
                <div class="c"></div>
            </div>
            <div class="feedback_bottom"></div>
        </div>
    </div>    
  </div>

<?php
require(ECMS_PATH.'e/data/template/cp_2.php');
?>