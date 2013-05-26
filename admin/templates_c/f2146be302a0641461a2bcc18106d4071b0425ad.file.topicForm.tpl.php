<?php /* Smarty version Smarty-3.1.12, created on 2013-05-26 07:46:10
         compiled from "templates\topicForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141051a1bdc2b68399-82105623%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2146be302a0641461a2bcc18106d4071b0425ad' => 
    array (
      0 => 'templates\\topicForm.tpl',
      1 => 1369550670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141051a1bdc2b68399-82105623',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'topicName' => 0,
    'which' => 0,
    'topicId' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51a1bdc2c334a9_83320852',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a1bdc2c334a9_83320852')) {function content_51a1bdc2c334a9_83320852($_smarty_tpl) {?>
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