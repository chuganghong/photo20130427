<?php /* Smarty version Smarty-3.1.12, created on 2013-05-26 06:46:33
         compiled from ".\templates\adminIndex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141395178ec4420e186-29718743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4eb26db9eac7e3bc3274dd0328ca0bf3507db188' => 
    array (
      0 => '.\\templates\\adminIndex.tpl',
      1 => 1369550670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141395178ec4420e186-29718743',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5178ec4429c165_56158325',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5178ec4429c165_56158325')) {function content_5178ec4429c165_56158325($_smarty_tpl) {?><!DOCTYPE hmtl>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>


<frameset rows="5%,*,5%" >
	<frame src="adminIndexTop.php">
	<frameset cols="15%,*" >
		<frame src="adminMenu.php" frameborder="0">
		<frame src="topicManage.php" name="adminIndexRight">
	</frameset>
	<frame src="footer.php">
</frameset>

</html>

<?php }} ?>