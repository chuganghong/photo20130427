<?php /* Smarty version Smarty-3.1.12, created on 2013-05-26 07:28:39
         compiled from "templates\lrForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2164951a1b9a71f39c8-96941209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52f2cdadfdfa1bd4de77fce3e604395d581fc8ca' => 
    array (
      0 => 'templates\\lrForm.tpl',
      1 => 1369550670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2164951a1b9a71f39c8-96941209',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'which' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51a1b9a72c7d26_36926724',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a1b9a72c7d26_36926724')) {function content_51a1b9a72c7d26_36926724($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<form action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="post">
UserName:
<input type="text" name="userName" />
<input type="hidden" name="which" value="<?php echo $_smarty_tpl->tpl_vars['which']->value;?>
" />
Password:
<input type="password" name="password" />
<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" />
</form>

<?php }} ?>