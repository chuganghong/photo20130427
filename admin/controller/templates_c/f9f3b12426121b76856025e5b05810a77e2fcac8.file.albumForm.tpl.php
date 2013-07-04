<?php /* Smarty version Smarty-3.1.12, created on 2013-07-01 18:18:46
         compiled from "D:\wamp\www\GitHub\photo20130427\admin\templates\albumForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1672151aff0fb58b562-11006259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9f3b12426121b76856025e5b05810a77e2fcac8' => 
    array (
      0 => 'D:\\wamp\\www\\GitHub\\photo20130427\\admin\\templates\\albumForm.tpl',
      1 => 1372326551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1672151aff0fb58b562-11006259',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51aff0fb826e69_31274922',
  'variables' => 
  array (
    'action' => 0,
    'topicName' => 0,
    'topicId' => 0,
    'albumName' => 0,
    'which' => 0,
    'albumId' => 0,
    'isAllow' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51aff0fb826e69_31274922')) {function content_51aff0fb826e69_31274922($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:/wamp/www/GitHub/photo20130427/lib/plugins\\function.html_options.php';
?>

<script type="text/javascript">
function choseLocal(id)   //上传本地图片
{	
	document.getElementById("upImage").type = "file";	
}

function choseNet()   //变为上传网络图片
{	
	document.getElementById("upImage").type = "text";	
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

选择：
<select name="topic">
	<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['topicName']->value,'selected'=>$_smarty_tpl->tpl_vars['topicId']->value),$_smarty_tpl);?>

</select>

<p>
标题：
<input type="text" name="albumName"  value="<?php echo $_smarty_tpl->tpl_vars['albumName']->value;?>
" />
</p>
<p>
	<ul>
		<li>操作：</li>
<!--<input type="checkbox" name="recommend[]" value="0" />推荐到首页大图-->
        <li><input type="checkbox" name="recommend[]" value="1" />推荐到首页中图</li>
        <li><input type="checkbox" name="recommend[]" value="2" />推荐到首页文字</li>
		<li><input type="checkbox" name="recommend[]" value="3" />推荐到首页小图</li>
		<li><input type="checkbox" name="recommend[]" value="4" />推荐到图片展示页的精选</li>
	</ul>
</p>
<p>图集封面：</p>
<p>
	<span onclick = "choseLocal()" id="local">本地图片</span>  <span onclick = "choseNet()" id="net">网络图片</span>
</p>
<p>
	<input type="file" name="image" id="upImage"  size="60" />
</p>

<input type="hidden" name="which" value="<?php echo $_smarty_tpl->tpl_vars['which']->value;?>
" id="which"  />
<input type="hidden" name="albumId" value="<?php echo $_smarty_tpl->tpl_vars['albumId']->value;?>
"  />
<input type="hidden" name="isEmpty" value="1" id="isEmpty" />
<p>
	<input type="submit" value="上传" onmouseover="noEmpty(<?php echo $_smarty_tpl->tpl_vars['isAllow']->value;?>
)"/>
</p>
</form><?php }} ?>