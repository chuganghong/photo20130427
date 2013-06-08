<?php /* Smarty version Smarty-3.1.12, created on 2013-06-01 14:07:46
         compiled from "D:\wamp\www\GitHub\photo20130427\admin\templates\adminMenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2358551aa0032608537-92928056%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cca2ef8814dec3702e4c21cf760367f4c40dc52' => 
    array (
      0 => 'D:\\wamp\\www\\GitHub\\photo20130427\\admin\\templates\\adminMenu.tpl',
      1 => 1369550670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2358551aa0032608537-92928056',
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
  'unifunc' => 'content_51aa003272c1a2_95746375',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51aa003272c1a2_95746375')) {function content_51aa003272c1a2_95746375($_smarty_tpl) {?>
管理中心<br />
<br />
<a href="<?php echo $_smarty_tpl->tpl_vars['url_1']->value;?>
" target="adminIndexRight">栏目管理</a><br />
<a href="<?php echo $_smarty_tpl->tpl_vars['url_2']->value;?>
" target="adminIndexRight">图集管理</a><br />
<a href="<?php echo $_smarty_tpl->tpl_vars['url_3']->value;?>
" target="adminIndexRight">图片管理</a><br /><?php }} ?>