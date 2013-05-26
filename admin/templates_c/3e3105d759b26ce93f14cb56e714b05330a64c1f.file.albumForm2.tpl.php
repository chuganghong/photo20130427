<?php /* Smarty version Smarty-3.1.12, created on 2013-05-26 08:17:05
         compiled from "templates\albumForm2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1938651a1c501c1ca85-34236212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e3105d759b26ce93f14cb56e714b05330a64c1f' => 
    array (
      0 => 'templates\\albumForm2.tpl',
      1 => 1369550670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1938651a1c501c1ca85-34236212',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'topicName' => 0,
    'topicId' => 0,
    'albumName' => 0,
    'which' => 0,
    'albumId' => 0,
    'thumbUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51a1c501d807c1_19449154',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a1c501d807c1_19449154')) {function content_51a1c501d807c1_19449154($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:/wamp/www/GitHub/photo20130427/lib/plugins\\function.html_options.php';
?>

<script type="text/javascript">
function choseLocal(id)   //上传本地图片
{
	//alert("start choseLocal");//test
	document.getElementById("upImage").type = "file";
	//document.getElementById("which").value = "1";
}

function choseNet()   //变为上传网络图片
{
	//alert("start choseNet");//test
	document.getElementById("upImage").type = "text";
	//document.getElementById("which").value = "0";
	
}

function isChange()   //识别是否更新了图集的缩略图，1为更新了，0为未更新
{
	//alert('start');//test
	value1 = document.getElementById("upImage").value;
	//alert(value1);  //test
	value2 = document.getElementById("changeId").value;
	if( !value1 )
	{
		value2 = 0;
		document.getElementById("changeId").value = value2;
	}
	else
	{
		value2 = 1;
		document.getElementById("changeId").value = value2;
	}
	//alert(value2);   //test
	document.getElementById("tip").innerHTML = value2;//test
}	
</script>

<form action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="post" enctype="multipart/form-data">
选择栏目：
<select name="topic">
	<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['topicName']->value,'selected'=>$_smarty_tpl->tpl_vars['topicId']->value),$_smarty_tpl);?>

</select>
<br />
标题：
<input type="text" name="albumName"  value="<?php echo $_smarty_tpl->tpl_vars['albumName']->value;?>
" />
<br />

图集封面：<br />
<span onclick = "choseLocal()" id="local">本地图片</span>  <span onclick = "choseNet()" id="net">网络图片</span>
<br />

<input type="file" name="image" id="upImage"  size="60" />

<input type="hidden" name="which" value="<?php echo $_smarty_tpl->tpl_vars['which']->value;?>
" id="which"  />
<input type="hidden" name="albumId" value="<?php echo $_smarty_tpl->tpl_vars['albumId']->value;?>
"  />
<input type="hidden" name="change" id="changeId" />
<br />
<input type="submit" value="更新" onmouseover="isChange()"/>
</form>
<hr>
<p id="tip"></p>

<?php if ($_smarty_tpl->tpl_vars['which']->value=="edit"){?>
<img src="<?php echo $_smarty_tpl->tpl_vars['thumbUrl']->value;?>
" />
<?php }?>
<?php }} ?>