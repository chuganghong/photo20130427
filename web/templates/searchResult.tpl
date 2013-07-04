<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link style="text/css" rel="stylesheet" href="{$pre}searchResult.css">
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
<title>{$title}--搜索结果</title>
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
            <a href="#">搜索结果</a>
            >
</div>
<div class="space"></div>
<div id="wrap1000">		  
    <div id="list">
        {if $data eq 0}
        	<p>没有符合条件的搜索结果</p>
        {else}
        {section name=album loop=$data}
        	<ul>
				<li class="pic"><a href="{$linkPic}{$data[album]['topicId']}&albumId={$data[album]["id"]}" target="_blank"><img src="{$data[album]['thumbUrl']}" alt="{$data[album]["albumName"]}" title="{$data[album]["albumName"]}" style="width:140px;height:180px;" /></a></li>
				<li class="title"><a href="#">{$data[album]["albumName"]}</a></li>
			</ul>
		{/section}	
		{/if}	
    </div> 
    {if $data > 0}
    {$pageStr}<!--分页符-->   
    {/if}    
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