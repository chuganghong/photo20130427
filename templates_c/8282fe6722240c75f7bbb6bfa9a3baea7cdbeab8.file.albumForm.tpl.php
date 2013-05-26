<?php /* Smarty version Smarty-3.1.12, created on 2013-05-22 03:20:48
         compiled from ".\templates\albumForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:225325178f5b3be43a3-66732185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8282fe6722240c75f7bbb6bfa9a3baea7cdbeab8' => 
    array (
      0 => '.\\templates\\albumForm.tpl',
      1 => 1369186511,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '225325178f5b3be43a3-66732185',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5178f5b3ce9ba9_88109898',
  'variables' => 
  array (
    'action' => 0,
    'topicName' => 0,
    'topicId' => 0,
    'albumName' => 0,
    'which' => 0,
    'albumId' => 0,
    'isAllow' => 0,
    'thumbUrl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5178f5b3ce9ba9_88109898')) {function content_5178f5b3ce9ba9_88109898($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'lib/plugins\\function.html_options.php';
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

function noEmpty(isAllow)   //防止提交空表单
{	
	if( isAllow == 0 )
	{
		return;
	}
	if( document.getElementById("upImage").value == "" )
	{
		alert("图片地址不能为空！");
	}
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
<input type="hidden" name="isEmpty" value="1" id="isEmpty" />
<br />
<input type="submit" value="上传" onmouseover="noEmpty(<?php echo $_smarty_tpl->tpl_vars['isAllow']->value;?>
)"/>
</form>
<hr>

<?php if ($_smarty_tpl->tpl_vars['which']->value=="edit"){?>
<img src="<?php echo $_smarty_tpl->tpl_vars['thumbUrl']->value;?>
" />
<?php }?>
<?php }} ?>