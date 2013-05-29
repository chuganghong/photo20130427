<?php /* Smarty version Smarty-3.1.12, created on 2013-05-29 09:36:28
         compiled from "..\templates\adminMenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:685651a5cc1c83e7c7-67386191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd893d5f6a4de69ba4d91f675cd165aaf89dac67' => 
    array (
      0 => '..\\templates\\adminMenu.tpl',
      1 => 1369550670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '685651a5cc1c83e7c7-67386191',
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
  'unifunc' => 'content_51a5cc1c90cc49_32860577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a5cc1c90cc49_32860577')) {function content_51a5cc1c90cc49_32860577($_smarty_tpl) {?>
管理中心<br />
<br />
<a href="<?php echo $_smarty_tpl->tpl_vars['url_1']->value;?>
" target="adminIndexRight">栏目管理</a><br />
<a href="<?php echo $_smarty_tpl->tpl_vars['url_2']->value;?>
" target="adminIndexRight">图集管理</a><br />
<a href="<?php echo $_smarty_tpl->tpl_vars['url_3']->value;?>
" target="adminIndexRight">图片管理</a><br /><?php }} ?>