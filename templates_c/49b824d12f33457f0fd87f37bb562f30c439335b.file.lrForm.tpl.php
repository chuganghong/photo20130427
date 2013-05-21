<?php /* Smarty version Smarty-3.1.12, created on 2013-05-21 05:39:41
         compiled from ".\templates\lrForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30056517b412441b716-61115339%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49b824d12f33457f0fd87f37bb562f30c439335b' => 
    array (
      0 => '.\\templates\\lrForm.tpl',
      1 => 1369114777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30056517b412441b716-61115339',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_517b4124625679_25628479',
  'variables' => 
  array (
    'action' => 0,
    'which' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_517b4124625679_25628479')) {function content_517b4124625679_25628479($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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