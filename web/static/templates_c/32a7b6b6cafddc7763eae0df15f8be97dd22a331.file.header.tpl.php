<?php /* Smarty version Smarty-3.1.12, created on 2013-07-05 09:08:21
         compiled from "D:\wamp\www\GitHub\photo20130427\web\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28551d68d05e67a61-06576985%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32a7b6b6cafddc7763eae0df15f8be97dd22a331' => 
    array (
      0 => 'D:\\wamp\\www\\GitHub\\photo20130427\\web\\templates\\header.tpl',
      1 => 1372240169,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28551d68d05e67a61-06576985',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'css' => 0,
    'home' => 0,
    'pre' => 0,
    'TopicData' => 0,
    'linkTopic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51d68d06092991_04224263',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d68d06092991_04224263')) {function content_51d68d06092991_04224263($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>主页</title>
<link style="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
">
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
    	<img src="<?php echo $_smarty_tpl->tpl_vars['pre']->value;?>
logo.jpg" style="width:280px;height:100px;" />   	        
    </div>
    <!--logo end-->
    <!--导航栏-->
    <div id="nav">    	
    	<ul>
        	<li><a href="#"><span>首页</span></a></li>
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
    <!--导航栏结束-->
</div><?php }} ?>