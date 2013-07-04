<?php /* Smarty version Smarty-3.1.12, created on 2013-06-27 11:31:47
         compiled from "D:\wamp\www\GitHub\photo20130427\admin\templates\adminIndex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:722551aa00321151c3-83514410%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f52375d6ded98035ad24769846ad13699f9853b8' => 
    array (
      0 => 'D:\\wamp\\www\\GitHub\\photo20130427\\admin\\templates\\adminIndex.tpl',
      1 => 1372330601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '722551aa00321151c3-83514410',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51aa00321d0df1_56362722',
  'variables' => 
  array (
    'title' => 0,
    'adminIndexTop' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51aa00321d0df1_56362722')) {function content_51aa00321d0df1_56362722($_smarty_tpl) {?><!DOCTYPE hmtl>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>


<frameset rows="5%,*,5%" ><!--如何才能去掉frame的边框？style="border:0 none"不起作用-->
	<frame src="<?php echo $_smarty_tpl->tpl_vars['adminIndexTop']->value;?>
">
	<frameset cols="15%,*" >
		<frame src="adminMenu.php" >
		<frame src="topicManage.php" name="adminIndexRight" >
	</frameset>
	<frame src="footer.php" >
</frameset>

</html>

<?php }} ?>