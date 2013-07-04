<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>{$AAN}</title>
<link type="text/css" rel="stylesheet" href="{$pre}pic.css">
<script type="text/javascript">
function addFavorite()
{
	if( document.all )
	{
		window.external.addFavorite("{$home}","收藏夹");
	}
	else if( window.sidebar )
	{
		window.sidebar.addPanel("美女网","{$home}","");
	}
}
</script>
</head>

<body>
<div id="topnav">
	<ul>    	
        <li>
        	<a href="#">设为首页</a>
            |
            <a href="#" onclick="addFavorite()">收藏起来下次看吧！</a>
        </li>
    </ul>
</div>
<div id="header">
	<div id="logo">
    	<a href="#"><img src="{$pre}logo.jpg" alt="strtotime()" title="natsort()" style="width:280px;height:100px;" /></a>
    </div>
	<div id="menus">
    	<ul>
        	<li><a href="{$home}">首页</a></li>
        	{section name=topic loop=$TopicData}
        		<li><a href="{$linkTopic}{$TopicData[topic]["id"]}">{$TopicData[topic]["topicName"]}</a></li>
           	{/section}
           	<!--
            <li><a href="#">美女图片</a></li>
            <li><a href="#">美女写真</a></li>
            <li><a href="#">丝袜美女</a></li>
            <li><a href="#">明星模特</a></li>
            <li><a href="#">日韩美女</a></li>
            <li><a href="#">动漫美女</a></li>
            -->
        </ul>
    </div>
</div>
<div class="space"></div>	
<div id="main">
	<div id="topicnav">
    	当前位置：
        <a href="{$home}">主页</a>
        >
        <a href="{$topic}">{$ATN}</a>
        >
    </div>
    <div id="mainTitle">
    	<div class="btn">
        	<a href="{$home}" title="网站首页">网站首页</a>
            <a href="{$topic}" title="{$ATN}">{$ATN}</a>
        </div>
        <h1>{$AAN}</h1>
    </div>
    <div class="imgTip">
    	温馨提示：点击图片查看下一页
   	</div>
    <div id="mainPic">
    <script type="text/javascript">
    function noPic()
    {
    	alert("这是最后一张了！");
    }
    </script>
    	{if $linkPageNext == "a"}<!--奇怪：当$linkPageNext赋值为0时，此表达式总是成立-->
    		<p class="mainPicImg"><a href="#"><img src="{$AP[$CP]["pictureUrl"]}"  alt="{$AAN}" onclick="noPic()" /></a></p>
    	{else}
    		<p class="mainPicImg"><a href="{$linkPageNext}"><img src="{$AP[$CP]["pictureUrl"]}"  alt="{$AAN}" /></a></p>
        {/if}
        <p>{$AAN}</p>
        
    </div>
    {$PS}<!--分页-->
    
    <div id="bottomnav">
    	<ul>
    		{if $BPA eq 0}
    			<li class="left">上一篇：没有了</li>
    		{else}
        		<li class="left">上一篇：<a href="{$BLP}{$BPA["id"]}">{$BPA["albumName"]}</a></li>
        	{/if}
        	{if $BNA eq 0}
        		<li class="right">下一篇：没有了</li>
        	{else}        	
            	<li class="right">下一篇：<a href="{$BLP}{$BNA["id"]}">{$BNA["albumName"]}</a></li>
            {/if}
        </ul>
    </div>

</div>
<div class="space"></div>
<div class="suggest">
	<div id="sugnav">
    	<span>推荐最性感美女图片</span>
    </div>
	<div id="suglist">	
        {section name=album loop=$CRA}
        	<ul>
        		<li class="img"><a href="{$BLP}{$CRA[album]["id"]}"><img src="{$CRA[album]["thumbUrl"]}" alt="{$CRA[album]["albumName"]}" title="{$CRA[album]["albumName"]}" /></a></li>
            	<li class="sugtitle"><a href="{$BLP}{$CRA[album]["id"]}">{$CRA[album]["albumName"]}</a></li>
        	</ul>
        {/section}     
    </div>
</div> 
<div class="space"></div> 
<div id="footer1">
	<div id="footer">
    	<ul>
    		<li>       	
            	<a href="#">美女</a>
            	<a href="#">美女图片</a>
            	<a href="#">mm</a>
            	<a href="#">丝袜美女</a>
            	<a href="#">动漫美女</a>           
      		</li>
       		<li>
       		本站除标明"本站原创"外所有照片版权归创作人所有，如有冒犯，请直接联系本站，我们将立即予以纠正并致歉 2011-2012 女友美图网. All Rights Reserved ！网站统计 站长统计
      		 </li>
   		</ul>
    </div>
</div>
</body>
</html>
