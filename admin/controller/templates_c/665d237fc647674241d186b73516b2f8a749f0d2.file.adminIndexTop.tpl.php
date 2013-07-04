<?php /* Smarty version Smarty-3.1.12, created on 2013-06-27 10:44:12
         compiled from "D:\wamp\www\GitHub\photo20130427\admin\templates\adminIndexTop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:473451aa003256ee27-21685901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '665d237fc647674241d186b73516b2f8a749f0d2' => 
    array (
      0 => 'D:\\wamp\\www\\GitHub\\photo20130427\\admin\\templates\\adminIndexTop.tpl',
      1 => 1372329846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '473451aa003256ee27-21685901',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51aa0032648135_27221049',
  'variables' => 
  array (
    'nickname' => 0,
    'home' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51aa0032648135_27221049')) {function content_51aa0032648135_27221049($_smarty_tpl) {?>
<style type="text/css">
ul,li
{
	list-style-type:none;
	float:left;
}
li { margin-left:10px; }
</style>
<ul>
	<li>管理中心 </li>
	<li>欢迎你，<?php echo $_smarty_tpl->tpl_vars['nickname']->value;?>
！</li>
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
" target="_blank">网站首页</a></li>
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">退出登录</a></li>
</ul><?php }} ?>