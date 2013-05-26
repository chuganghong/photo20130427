<?php /* Smarty version Smarty-3.1.12, created on 2013-05-26 07:56:43
         compiled from "templates\adminMenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3067051a1c03b461db0-43632659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e15b74695c8a2e09bdc52b9b6b3b7c608b3f8e86' => 
    array (
      0 => 'templates\\adminMenu.tpl',
      1 => 1369550670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3067051a1c03b461db0-43632659',
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
  'unifunc' => 'content_51a1c03b60d612_12888676',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a1c03b60d612_12888676')) {function content_51a1c03b60d612_12888676($_smarty_tpl) {?>
管理中心<br />
<br />
<a href="<?php echo $_smarty_tpl->tpl_vars['url_1']->value;?>
" target="adminIndexRight">栏目管理</a><br />
<a href="<?php echo $_smarty_tpl->tpl_vars['url_2']->value;?>
" target="adminIndexRight">图集管理</a><br />
<a href="<?php echo $_smarty_tpl->tpl_vars['url_3']->value;?>
" target="adminIndexRight">图片管理</a><br /><?php }} ?>