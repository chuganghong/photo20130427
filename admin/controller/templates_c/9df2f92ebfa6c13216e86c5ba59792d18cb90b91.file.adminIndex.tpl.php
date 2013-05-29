<?php /* Smarty version Smarty-3.1.12, created on 2013-05-29 09:36:01
         compiled from "..\templates\adminIndex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:410151a5cc01c6f992-25087555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9df2f92ebfa6c13216e86c5ba59792d18cb90b91' => 
    array (
      0 => '..\\templates\\adminIndex.tpl',
      1 => 1369554843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '410151a5cc01c6f992-25087555',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'adminIndexTop' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51a5cc01d48333_77789138',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a5cc01d48333_77789138')) {function content_51a5cc01d48333_77789138($_smarty_tpl) {?><!DOCTYPE hmtl>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>


<frameset rows="5%,*,5%" >
	<frame src="<?php echo $_smarty_tpl->tpl_vars['adminIndexTop']->value;?>
">
	<frameset cols="15%,*" >
		<frame src="adminMenu.php" frameborder="0">
		<frame src="topicManage.php" name="adminIndexRight">
	</frameset>
	<frame src="footer.php">
</frameset>

</html>

<?php }} ?>