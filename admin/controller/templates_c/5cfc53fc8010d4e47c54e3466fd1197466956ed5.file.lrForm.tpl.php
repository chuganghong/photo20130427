<?php /* Smarty version Smarty-3.1.12, created on 2013-06-01 14:07:39
         compiled from "D:\wamp\www\GitHub\photo20130427\admin\templates\lrForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1293151aa002b79ff30-20558958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cfc53fc8010d4e47c54e3466fd1197466956ed5' => 
    array (
      0 => 'D:\\wamp\\www\\GitHub\\photo20130427\\admin\\templates\\lrForm.tpl',
      1 => 1369819606,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1293151aa002b79ff30-20558958',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header' => 0,
    'action' => 0,
    'which' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51aa002b915dc7_13508641',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51aa002b915dc7_13508641')) {function content_51aa002b915dc7_13508641($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['header']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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