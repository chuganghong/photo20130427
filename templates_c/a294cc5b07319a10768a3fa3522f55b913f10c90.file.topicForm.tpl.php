<?php /* Smarty version Smarty-3.1.12, created on 2013-05-21 06:28:23
         compiled from ".\templates\topicForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30955178f5a9bafc61-90555322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a294cc5b07319a10768a3fa3522f55b913f10c90' => 
    array (
      0 => '.\\templates\\topicForm.tpl',
      1 => 1369117668,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30955178f5a9bafc61-90555322',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5178f5a9c5d2e8_30129368',
  'variables' => 
  array (
    'url' => 0,
    'topicName' => 0,
    'which' => 0,
    'topicId' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5178f5a9c5d2e8_30129368')) {function content_5178f5a9c5d2e8_30129368($_smarty_tpl) {?>
<form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post">
<input type="text" name="topicName" value="<?php echo $_smarty_tpl->tpl_vars['topicName']->value;?>
" />
<input type="hidden" name="which" value="<?php echo $_smarty_tpl->tpl_vars['which']->value;?>
" />
<input type="hidden" name="topicId[]" value="<?php echo $_smarty_tpl->tpl_vars['topicId']->value;?>
" />
<br />
<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" />

<input type="reset" value="重置" />
</form><?php }} ?>