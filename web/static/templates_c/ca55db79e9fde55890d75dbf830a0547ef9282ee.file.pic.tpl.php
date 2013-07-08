<?php /* Smarty version Smarty-3.1.12, created on 2013-07-08 05:57:05
         compiled from "D:\wamp\www\GitHub\photo20130427\web\templates\pic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1652551d7c222c6e601-03364115%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca55db79e9fde55890d75dbf830a0547ef9282ee' => 
    array (
      0 => 'D:\\wamp\\www\\GitHub\\photo20130427\\web\\templates\\pic.tpl',
      1 => 1373262926,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1652551d7c222c6e601-03364115',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51d7c223290941_56087357',
  'variables' => 
  array (
    'AAN' => 0,
    'pre' => 0,
    'home' => 0,
    'TopicData' => 0,
    'linkTopic' => 0,
    'topic' => 0,
    'ATN' => 0,
    'linkPageNext' => 0,
    'CP' => 0,
    'AP' => 0,
    'PS' => 0,
    'BPA' => 0,
    'BLP' => 0,
    'BNA' => 0,
    'CRA' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d7c223290941_56087357')) {function content_51d7c223290941_56087357($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $_smarty_tpl->tpl_vars['AAN']->value;?>
</title>
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pre']->value;?>
pic.css">
<script type="text/javascript">
function addFavorite()
{
	if( document.all )
	{
		window.external.addFavorite("<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
","收藏夹");
	}
	else if( window.sidebar )
	{
		window.sidebar.addPanel("美女网","<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
","");
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
    	<a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['pre']->value;?>
logo.jpg" alt="strtotime()" title="natsort()" style="width:280px;height:100px;" /></a>
    </div>
	<div id="menus">
    	<ul>
        	<li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
">首页</a></li>
        	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['topic'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['topic']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['name'] = 'topic';
$_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['TopicData']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['topic']['total']);
?>
        		<li><a href="<?php echo $_smarty_tpl->tpl_vars['linkTopic']->value;?>
<?php echo $_smarty_tpl->tpl_vars['TopicData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['topic']['index']]["id"];?>
"><?php echo $_smarty_tpl->tpl_vars['TopicData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['topic']['index']]["topicName"];?>
</a></li>
           	<?php endfor; endif; ?>           
        </ul>
    </div>
</div>
<div class="space"></div>	
<div id="main">
	<div id="topicnav">
    	当前位置：
        <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
">主页</a>
        >
        <a href="<?php echo $_smarty_tpl->tpl_vars['topic']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ATN']->value;?>
</a>
        >
    </div>
    <div id="mainTitle">
    	<div class="btn">
        	<a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
" title="网站首页">网站首页</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['topic']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['ATN']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ATN']->value;?>
</a>
        </div>
        <h1><?php echo $_smarty_tpl->tpl_vars['AAN']->value;?>
</h1>
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
    	<?php if ($_smarty_tpl->tpl_vars['linkPageNext']->value=="a"){?><!--奇怪：当$linkPageNext赋值为0时，此表达式总是成立-->
    		<p class="mainPicImg"><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['AP']->value[$_smarty_tpl->tpl_vars['CP']->value]["pictureUrl"];?>
"  alt="<?php echo $_smarty_tpl->tpl_vars['AAN']->value;?>
" onclick="noPic()" /></a></p>
    	<?php }else{ ?>
    		<p class="mainPicImg"><a href="<?php echo $_smarty_tpl->tpl_vars['linkPageNext']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['AP']->value[$_smarty_tpl->tpl_vars['CP']->value]["pictureUrl"];?>
"  alt="<?php echo $_smarty_tpl->tpl_vars['AAN']->value;?>
" /></a></p>
        <?php }?>
        <p><?php echo $_smarty_tpl->tpl_vars['AAN']->value;?>
</p>
        
    </div>
    <?php echo $_smarty_tpl->tpl_vars['PS']->value;?>
<!--分页-->
    
    <div id="bottomnav">
    	<ul>
    		<?php if ($_smarty_tpl->tpl_vars['BPA']->value==0){?>
    			<li class="left">上一篇：没有了</li>
    		<?php }else{ ?>
        		<li class="left">上一篇：<a href="<?php echo $_smarty_tpl->tpl_vars['BLP']->value;?>
<?php echo $_smarty_tpl->tpl_vars['BPA']->value["id"];?>
"><?php echo $_smarty_tpl->tpl_vars['BPA']->value["albumName"];?>
</a></li>
        	<?php }?>
        	<?php if ($_smarty_tpl->tpl_vars['BNA']->value==0){?>
        		<li class="right">下一篇：没有了</li>
        	<?php }else{ ?>        	
            	<li class="right">下一篇：<a href="<?php echo $_smarty_tpl->tpl_vars['BLP']->value;?>
<?php echo $_smarty_tpl->tpl_vars['BNA']->value["id"];?>
"><?php echo $_smarty_tpl->tpl_vars['BNA']->value["albumName"];?>
</a></li>
            <?php }?>
        </ul>
    </div>

</div>
<div class="space"></div>
<div class="suggest">
	<div id="sugnav">
    	<span>推荐最性感美女图片</span>
    </div>
	<div id="suglist">	
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['album'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['album']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['album']['name'] = 'album';
$_smarty_tpl->tpl_vars['smarty']->value['section']['album']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['CRA']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['album']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['album']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['album']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['album']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['album']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['album']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['album']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['album']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['album']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['album']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['album']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['album']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['album']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['album']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['album']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['album']['total']);
?>
        	<ul>
        		<li class="img"><a href="<?php echo $_smarty_tpl->tpl_vars['BLP']->value;?>
<?php echo $_smarty_tpl->tpl_vars['CRA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['album']['index']]["id"];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['CRA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['album']['index']]["thumbUrl"];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['CRA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['album']['index']]["albumName"];?>
" title="<?php echo $_smarty_tpl->tpl_vars['CRA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['album']['index']]["albumName"];?>
" /></a></li>
            	<li class="sugtitle"><a href="<?php echo $_smarty_tpl->tpl_vars['BLP']->value;?>
<?php echo $_smarty_tpl->tpl_vars['CRA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['album']['index']]["id"];?>
"><?php echo $_smarty_tpl->tpl_vars['CRA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['album']['index']]["albumName"];?>
</a></li>
        	</ul>
        <?php endfor; endif; ?>     
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
<?php }} ?>