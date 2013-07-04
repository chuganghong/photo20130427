<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link style="text/css" rel="stylesheet" href="{$pre}list.css">
<script type="text/javascript">
function addFavorite()
{
	if(document.all)
	{
		window.external.addFavorite("{$home}","收藏夹");
	}
	else if(window.sidebar)
	{
		window.sidebar.addPanel("美女网","{$home}","");
	}
}
</script>
<title>{$ATN}</title>
</head>

<body>
<div id="topnav">
	<ul>
    	<li></li>
        <li>
        	<a href="#">设为首页</a>
            |
            <a href="#" onclick="addFavorite()">收藏起来下次看吧！</a>
        </li>
    </ul>
</div>
<div id="header">
	<div id="logo">
    	<img src="{$pre}logo.jpg" alt="strtotime()" title="strstr" style="height:106px;width:280px" />
    </div>
    <div id="menus">
    	<ul>
        	<li><a href="{$home}"><span>首页</span></a></li>
        	{section name=topic loop=$TopicData}
            	<li><a href="{$linkTopic}{$TopicData[topic]["id"]}"><span>{$TopicData[topic]["topicName"]}</span></a></li>
            {/section}           
        </ul>
   </div>
</div>
<div class="space"></div>
<div id="nav">
        	当前位置：
            <a href="{$home}">主页</a>
            >
            <a href="{$topic}">{$ATN}</a>
            >
</div>
<div class="space"></div>
<div id="wrap1000">		  
    <div id="list">
        {section name=album loop=$ANA}
        	<ul>
				<li class="pic"><a href="{$linkPic}{$ANA[album]["id"]}" target="_blank"><img src="{$ANA[album]['thumbUrl']}" alt="{$ANA[album]["albumName"]}" title="{$ANA[album]["albumName"]}" style="width:140px;height:180px;" /></a></li>
				<li class="title"><a href="#">{$ANA[album]["albumName"]}</a></li>
			</ul>
		{/section}		
    </div>    
</div>
{$pageStr}<!--分页符-->
<!--
<div class="page">
	<ul>
    	<li><a href="#"><span>首页</span></a></li>
        <li><a href="#"><span>上一页</span></a></li>
       <li><a href="#"><span>1</span></a></li>
        <li><a href="#"><span>2</span></a></li>
       <li><span class="current">3</span></li>
        <li><a href="#"><span>4</span></a></li>
        <li><a href="#"><span>5</span></a></li>
        <li><a href="#"><span>6</span></a></li>
        <li><a href="#"><span>7</span></a></li>
        <li><a href="#"><span>8</span></a></li>
        <li><a href="#"><span>9</span></a></li>
        <li><a href="#"><span>10</span></a></li>
        <li><a href="#"><span>下一页</span></a></li>
        <li><a href="#"><span>末页</span></a></li>
    </ul>        
</div>   
-->
<div id="suggestPic">
	<div class="topicnav">
    	<span>推荐美女</span>
    </div>
    <div id="sugpic">
    	{section name=album loop=$BRA}    	
    		<ul>
        		<li class="img"><a href="{$linkPic}{$BRA[album]['id']}"><img src="{$BRA[album]["thumbUrl"]}" alt="{$BRA[album]['albumName']}" title="{$BRA[album]['albumName']}" style="width:140px;height:180px;" /></a></li>
            	<li class="sugtitle"><a href="{$linkPic}{$BRA[album]['id']}">{$BRA[album]['albumName']}</a></li>
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