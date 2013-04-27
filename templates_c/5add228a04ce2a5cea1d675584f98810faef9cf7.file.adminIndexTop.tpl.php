<?php /* Smarty version Smarty-3.1.12, created on 2013-04-25 08:41:40
         compiled from ".\templates\adminIndexTop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118645178ec448c0a19-07227872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5add228a04ce2a5cea1d675584f98810faef9cf7' => 
    array (
      0 => '.\\templates\\adminIndexTop.tpl',
      1 => 1366770885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118645178ec448c0a19-07227872',
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
  'unifunc' => 'content_5178ec44a09cd1_84523838',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5178ec44a09cd1_84523838')) {function content_5178ec44a09cd1_84523838($_smarty_tpl) {?>
管理中心    欢迎你，<?php echo $_smarty_tpl->tpl_vars['nickname']->value;?>
！ 修改资料 <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">退出登录</a><?php }} ?>