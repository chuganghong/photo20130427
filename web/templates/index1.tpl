{include file="{$header}"}
<!--header end-->
<div class="space"></div>
<div id="main">
	<div id="content1">
    	<div id="content1_left">
        	<a href="#"><img src="http://tu.ny369.com/tu/1589/hd.jpg" title="strtotime()" style="width:600px;height:380px" /></a>
        </div>
        <div id="content1_right">
        	<div id="newmeinv">最新发布</div>
            <div id="news">
            	<div id="news_list">
                	<ul>
                    	{section name=new loop=$new}
                    		<li><a href="{$linkNew}topicId={$new[new]["topicId"]}&albumId={$new[new]["id"]}" target="_blank"><span class="new_list_title">{$new[new]['albumName']}</span></a><span class="date">06-20</span></li>
                    	{/section}
                    	<!--
                    	<li><a href="#">白色迷人衬衣私房靓丽写照</a><span class="date">06-20</span></li>
                        <li><a href="#">白色迷人衬衣私房靓丽写照</a><span class="date">06-20</span></li>
                        <li><a href="#">白色迷人衬衣私房靓丽写照</a><span class="date">06-20</span></li>
                        <li><a href="#">白色迷人衬衣私房靓丽写照</a><span class="date">06-20</span></li>
                        <li><a href="#">白色迷人衬衣私房靓丽写照</a><span class="date">06-20</span></li>
                        <li><a href="#">白色迷人衬衣私房靓丽写照</a><span class="date">06-20</span></li>
                        <li><a href="#">白色迷人衬衣私房靓丽写照</a><span class="date">06-20</span></li>
                        <li><a href="#">白色迷人衬衣私房靓丽写照</a><span class="date">06-20</span></li>
                        <li><a href="#">白色迷人衬衣私房靓丽写照</a><span class="date">06-20</span></li>
                        <li><a href="#">白色迷人衬衣私房靓丽写照</a><span class="date">06-20</span></li>
                        <li><a href="#">白色迷人衬衣私房靓丽写照</a><span class="date">06-20</span></li>
                        -->
                    </ul>
                </div>
                <div id="search">
                	<form action="#" method="post">
                    	<input class="search_area" type="text" value="美女写真 清纯美女 自拍 ..." />
                        <input class="search_button" value="" type="submit"  />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="space"></div>
<div class="content2">
	<div id="siwa">
    	<ul>
        	<li class="topic"><a href="{$linkTA}" target="_blank">{$Aname}</a></li>
            <li class="more"><a href="{$linkTA}" target="_blank">>> 更多</a></li>
        </ul>
    </div>
    <div class="pic_list">
    	<ul>
        	{section name=tinyPic loop=$AtinyPic}
        		
        		<li class="pic">
            		<ul>
        				<li class="picimg"><a href="{$LPA}{$AtinyPic[tinyPic]["id"]}" target="_blank"><img src="{$AtinyPic[tinyPic]["thumbUrl"]}" alt="{$AtinyPic[tinyPic]["albumName"]}" title="{$AtinyPic[tinyPic]["albumName"]}"  style="width:140px;height:180px;" /></a></li>
                    	<li class="title"><a href="{$LPA}{$AtinyPic[tinyPic]["id"]}" target="_blank">{$AtinyPic[tinyPic]["albumName"]}</a></li>
                	</ul>
            	</li>
            {/section}            
         </ul>
    </div>
</div>
<div class="space"></div>
<div class="content3">
	<div id="xiezhen">
    	<ul>
        	<li class="topic"><a href="{$linkTB}" target="_blank">{$BtopicName}</a></li>
            <li class="more"><a href="{$linkTB}" target="_blank">>> 更多</a></li>
        </ul>
    </div>
    <div class="pics">
    	<ul>
        	<li class="pic_left">
            	<ul>
                	<li class="bigPic">
                    	<ul>
                        	<li class="bigPic_img"><a href="{$LPB}{$Bmedium["id"]}" target="_blank"><img src="{$Bmedium["thumbUrl"]}" style="width:286px;height:314px;" /></a></li>
                            <li class="bigPic_title"><a href="{$LPB}{$Bmedium["id"]}" target="_blank">{$Bmedium["albumName"]}</a></li>
                        </ul>
                    </li>
                    <li class="listTitle">
                    	<ul>
                    		{section name=text loop=$Btext}
                    			<li>·<a href="{$LPB}{$Btext[text]["id"]}" target="_blank">{$Btext[text]["albumName"]}</a></li>
                        	{/section}                            
                        </ul>
                    </li>
                 </ul>
            </li>
            <li class="pic_right">
            	<ul>
                	{section name=tinyPic loop=$BtinyPic}
                		<li class="pic">
                    		<ul>
                        		<li class="picimg"><a href="{$LPB}{$BtinyPic[tinyPic]["id"]}" target="_blank"><img src="{$BtinyPic[tinyPic]['thumbUrl']}" style="width:140px; height:180px;" /></a></li>
                            	<li class="title"><a href="{$LPB}{$BtinyPic[tinyPic]["id"]}" target="_blank">{$BtinyPic[tinyPic]['albumName']}</a></li>
                        	</ul>
                    	</li>
                    {/section}                  
               </ul>                 
            </li>
        </ul>
    </div>
</div>
<div class="space"></div>
<div id="footer1">
<div id="footer">
	<ul>
    	<li>
        	<a href="#">美女</a>
            <a href="#">美女图片</a>
            <a href="#">日本美女</a>
        </li>
        <li>
        	本站除标明"本站原创"外所有照片版权归创作人所有，如有冒犯，请直接联系本站，我们将立即予以纠正并致歉 2011-2012 女友美图网. All Rights Reserved ！网站统计 站长统计
        </li>
    </ul>
</div>
</div>
</body>
</html>