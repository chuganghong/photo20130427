<?php /* Smarty version Smarty-3.1.12, created on 2013-04-25 08:41:40
         compiled from ".\templates\adminMenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16295178ec448c5a26-26992240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '318b544bcfe68f70cf4973694b3bea0065d170bf' => 
    array (
      0 => '.\\templates\\adminMenu.tpl',
      1 => 1366775311,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16295178ec448c5a26-26992240',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_1' => 0,
    'url_2' => 0,
    'url_3' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5178ec449dd507_00660471',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5178ec449dd507_00660471')) {function content_5178ec449dd507_00660471($_smarty_tpl) {?>
管理中心<br />
<br />
<a href="<?php echo $_smarty_tpl->tpl_vars['url_1']->value;?>
" target="adminIndexRight">栏目管理</a><br />
<a href="<?php echo $_smarty_tpl->tpl_vars['url_2']->value;?>
" target="adminIndexRight">图集管理</a><br />
<a href="<?php echo $_smarty_tpl->tpl_vars['url_3']->value;?>
" target="adminIndexRight">图片管理</a><br /><?php }} ?>