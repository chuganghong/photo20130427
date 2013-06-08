<?php /* Smarty version Smarty-3.1.12, created on 2013-06-01 14:07:46
         compiled from "D:\wamp\www\GitHub\photo20130427\admin\templates\adminIndexTop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:473451aa003256ee27-21685901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '665d237fc647674241d186b73516b2f8a749f0d2' => 
    array (
      0 => 'D:\\wamp\\www\\GitHub\\photo20130427\\admin\\templates\\adminIndexTop.tpl',
      1 => 1369550670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '473451aa003256ee27-21685901',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nickname' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51aa0032648135_27221049',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51aa0032648135_27221049')) {function content_51aa0032648135_27221049($_smarty_tpl) {?>
管理中心    欢迎你，<?php echo $_smarty_tpl->tpl_vars['nickname']->value;?>
！ 修改资料 <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">退出登录</a><?php }} ?>