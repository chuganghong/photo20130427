<?php /* Smarty version Smarty-3.1.12, created on 2013-05-29 09:36:28
         compiled from "..\templates\adminIndexTop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213851a5cc1c69e800-39941877%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f03f0800760a4b547e0cca4a79f10dfaccdf4cf8' => 
    array (
      0 => '..\\templates\\adminIndexTop.tpl',
      1 => 1369550670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213851a5cc1c69e800-39941877',
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
  'unifunc' => 'content_51a5cc1c7576a9_73640212',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a5cc1c7576a9_73640212')) {function content_51a5cc1c7576a9_73640212($_smarty_tpl) {?>
管理中心    欢迎你，<?php echo $_smarty_tpl->tpl_vars['nickname']->value;?>
！ 修改资料 <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">退出登录</a><?php }} ?>