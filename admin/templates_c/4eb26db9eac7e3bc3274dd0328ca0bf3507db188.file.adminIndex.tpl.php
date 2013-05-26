<?php /* Smarty version Smarty-3.1.12, created on 2013-05-26 07:39:27
         compiled from ".\templates\adminIndex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3275951a1bc2f7f2614-88532015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '3275951a1bc2f7f2614-88532015',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51a1bc2f889fe8_39090719',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a1bc2f889fe8_39090719')) {function content_51a1bc2f889fe8_39090719($_smarty_tpl) {?><!DOCTYPE hmtl>
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