<?php /* Smarty version Smarty-3.1.12, created on 2013-05-26 07:50:34
         compiled from "templates\adminIndexTop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:328051a1beca8d32c7-16632269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6696e7f8e97bc1cd9a712b5fe043f2ee941f11a0' => 
    array (
      0 => 'templates\\adminIndexTop.tpl',
      1 => 1369550670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '328051a1beca8d32c7-16632269',
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
  'unifunc' => 'content_51a1beca97f232_96490815',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a1beca97f232_96490815')) {function content_51a1beca97f232_96490815($_smarty_tpl) {?>
管理中心    欢迎你，<?php echo $_smarty_tpl->tpl_vars['nickname']->value;?>
！ 修改资料 <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">退出登录</a><?php }} ?>