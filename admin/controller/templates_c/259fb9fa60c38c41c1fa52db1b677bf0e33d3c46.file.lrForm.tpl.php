<?php /* Smarty version Smarty-3.1.12, created on 2013-05-29 09:26:48
         compiled from "..\templates\lrForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:299051a5c8b2ac3aa4-87217793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '259fb9fa60c38c41c1fa52db1b677bf0e33d3c46' => 
    array (
      0 => '..\\templates\\lrForm.tpl',
      1 => 1369819606,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '299051a5c8b2ac3aa4-87217793',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51a5c8b2cba0e7_25763615',
  'variables' => 
  array (
    'header' => 0,
    'action' => 0,
    'which' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a5c8b2cba0e7_25763615')) {function content_51a5c8b2cba0e7_25763615($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['header']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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