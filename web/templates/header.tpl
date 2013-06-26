<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>主页</title>
<link style="text/css" rel="stylesheet" href="{$css}">
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
<!--topnav start-->
<div id="topnav">
	<ul>
    	<li class="left"></li>
        <li class="right">
        	<a href="#">设为首页</a>
            |
            <a href="#" onclick="addFavorite()">收藏起来下次看吧！</a>
        </li>
     </ul>
</div>
<!--topnav end-->
<!--header start-->
<div id="header">
	<!--logo start-->	
    <div id="logo"> 
    	<img src="{$pre}logo.jpg" style="width:280px;height:100px;" />   	        
    </div>
    <!--logo end-->
    <!--导航栏-->
    <div id="nav">    	
    	<ul>
        	<li><a href="#"><span>首页</span></a></li>
        	{section name=topic loop=$TopicData}
            	<li><a href="{$linkTopic}{$TopicData[topic]["id"]}"><span>{$TopicData[topic]["topicName"]}</span></a></li>
            {/section}            
        </ul>       
    </div>
    <!--导航栏结束-->
</div>