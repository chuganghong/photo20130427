<!-- 导航 --->
<script language="javascript" type="text/javascript">
function copyToClipBoard(){ 
	var text = []; 
	text.push(document.title+'，来看看吧，美女哦！！');
	text.push('\r\n');
	text.push(this.location.href);
	if(window.clipboardData){
		window.clipboardData.setData("Text",text.join(''));
		alert("复制成功！请粘贴到您的QQ、博客、论坛上推荐给您的好友。"); 
	}else{
		window.prompt("复制下面的链接发送给好友吧！", text.join(''));
	}
}
</script>
<div class="header" id="cen">
<div class="logo"><img src="{dede:global.cfg_templets_skin/}/style/logo.gif" /></div>
<div class="fav"><li><a style="cursor:pointer;" onclick="window.external.AddFavorite('{dede:global.cfg_basehost/}','{dede:global.cfg_webname/}');">收藏</a></li><li><a href="http://www.xiuzhanwang.com" onClick="copyToClipBoard();">分享</a></li></div>
<div class="dh">
<a href="/">首 页</a>
{dede:channel type='top' row='4' currentstyle="<a class='cur' href='~typelink~' ~rel~>~typename~</a>"}
<a href="[field:typeurl/]" [field:rel/]>[field:typename/]</a>{/dede:channel}
<a href="http://www.xiuzhanwang.com" target="_blank">织梦建站</a>
</div>
</div>