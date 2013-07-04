<?php /* Smarty version Smarty-3.1.12, created on 2013-07-01 08:58:43
         compiled from "D:\wamp\www\GitHub\photo20130427\web\templates\searchResult.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1929751cfe17459d338-38522071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e408106e4c03f9409c5f209066ea53318e533fdc' => 
    array (
      0 => 'D:\\wamp\\www\\GitHub\\photo20130427\\web\\templates\\searchResult.tpl',
      1 => 1372669119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1929751cfe17459d338-38522071',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51cfe1747a2bd0_67230689',
  'variables' => 
  array (
    'pre' => 0,
    'home' => 0,
    'title' => 0,
    'TopicData' => 0,
    'linkTopic' => 0,
    'data' => 0,
    'linkPic' => 0,
    'pageStr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51cfe1747a2bd0_67230689')) {function content_51cfe1747a2bd0_67230689($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<link style="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pre']->value;?>
searchResult.css">
<script type="text/javascript">
function addFavorite()
{
	if(document.all)
	{
		window.external.addFavorite("<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
","收藏夹");
	}
	else if(window.sidebar)
	{
		window.sidebar.addPanel("美女网","<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
","");
	}
}
</script>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
--搜索结果</title>
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
    	<img src="<?php echo $_smarty_tpl->tpl_vars['pre']->value;?>
logo.jpg" alt="strtotime()" title="strstr" style="height:106px;width:280px" />
    </div>
    <div id="menus">
    	<ul>
        	<li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
"><span>首页</span></a></li>
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
"><span><?php echo $_smarty_tpl->tpl_vars['TopicData']->value[$_smarty_tpl->getVariable('smarty')->value['section']['topic']['index']]["topicName"];?>
</span></a></li>
            <?php endfor; endif; ?>            
        </ul>
   </div>
</div>
<div class="space"></div>
<div id="nav">
        	当前位置：
            <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
">主页</a>
            >
            <a href="#">搜索结果</a>
            >
</div>
<div class="space"></div>
<div id="wrap1000">		  
    <div id="list">
        <?php if ($_smarty_tpl->tpl_vars['data']->value==0){?>
        	<p>没有符合条件的搜索结果</p>
        <?php }else{ ?>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['album'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['album']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['album']['name'] = 'album';
$_smarty_tpl->tpl_vars['smarty']->value['section']['album']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['data']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<li class="pic"><a href="<?php echo $_smarty_tpl->tpl_vars['linkPic']->value;?>
<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['album']['index']]['topicId'];?>
&albumId=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['album']['index']]["id"];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['album']['index']]['thumbUrl'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['album']['index']]["albumName"];?>
" title="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['album']['index']]["albumName"];?>
" style="width:140px;height:180px;" /></a></li>
				<li class="title"><a href="#"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['album']['index']]["albumName"];?>
</a></li>
			</ul>
		<?php endfor; endif; ?>	
		<?php }?>	
    </div> 
    <?php if ($_smarty_tpl->tpl_vars['data']->value>0){?>
    <?php echo $_smarty_tpl->tpl_vars['pageStr']->value;?>
<!--分页符-->   
    <?php }?>    
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
</html><?php }} ?>