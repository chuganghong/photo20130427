<?php /* Smarty version Smarty-3.1.12, created on 2013-06-27 09:32:46
         compiled from "D:\wamp\www\GitHub\photo20130427\admin\templates\topicForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1728451b19900ab1119-73157572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53e50ae48213ade0aff11b102e9d02d77be644f7' => 
    array (
      0 => 'D:\\wamp\\www\\GitHub\\photo20130427\\admin\\templates\\topicForm.tpl',
      1 => 1372325559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1728451b19900ab1119-73157572',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51b19900c7ff72_07445266',
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
<?php if ($_valid && !is_callable('content_51b19900c7ff72_07445266')) {function content_51b19900c7ff72_07445266($_smarty_tpl) {?>
<form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post">
<p>
	<input type="text" name="topicName" value="<?php echo $_smarty_tpl->tpl_vars['topicName']->value;?>
" />
</p>
<input type="hidden" name="which" value="<?php echo $_smarty_tpl->tpl_vars['which']->value;?>
" />
<input type="hidden" name="topicId[]" value="<?php echo $_smarty_tpl->tpl_vars['topicId']->value;?>
" />
<p>
<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" />

<input type="reset" value="重置" />
</p>
</form><?php }} ?>