<?php /* Smarty version Smarty-3.1.12, created on 2013-05-26 07:54:17
         compiled from "templates\adminIndex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2826051a1bca5584b18-53270621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a47740e983eaaa650f472cde61611dc3f106c5b6' => 
    array (
      0 => 'templates\\adminIndex.tpl',
      1 => 1369554843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2826051a1bca5584b18-53270621',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51a1bca5615a39_48919728',
  'variables' => 
  array (
    'title' => 0,
    'adminIndexTop' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a1bca5615a39_48919728')) {function content_51a1bca5615a39_48919728($_smarty_tpl) {?><!DOCTYPE hmtl>
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