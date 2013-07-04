<?php /* Smarty version Smarty-3.1.12, created on 2013-06-27 09:35:16
         compiled from "D:\wamp\www\GitHub\photo20130427\admin\templates\uploadForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1769651b01d1d61b185-06171232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8ca1adea0fb8a921bd160040734f9dc898b9071' => 
    array (
      0 => 'D:\\wamp\\www\\GitHub\\photo20130427\\admin\\templates\\uploadForm.tpl',
      1 => 1372325712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1769651b01d1d61b185-06171232',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51b01d1d838507_31564256',
  'variables' => 
  array (
    'action' => 0,
    'albumId' => 0,
    'isAllow' => 0,
    'ln' => 0,
    'host' => 0,
    'pictureUrl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b01d1d838507_31564256')) {function content_51b01d1d838507_31564256($_smarty_tpl) {?>

<script type="text/javascript">
function choseLocal(id)   //上传本地图片
{
	//alert("start choseLocal");//test
	document.getElementById("upImage").type = "file";
	document.getElementById("which").value = "1";
}

function choseNet()   //变为上传网络图片
{
	//alert("start choseNet");//test
	document.getElementById("upImage").type = "text";
	document.getElementById("which").value = "0";
	
}

function noEmpty(isAllow)   //防止提交空表单。当isAllow为0时，此函数什么也不做，满足更新和新建对图片表单的是否为空的不同要求
{
	if( isAllow == 1 )
	{
		if( document.getElementById("upImage").value == "" )
		{
			alert("图片地址不能为空！");
		}
	}	
}
</script>
<form action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="post" enctype="multipart/form-data">
<p>
	<span onclick = "choseLocal()" id="local">本地图片</span>  <span onclick = "choseNet()" id="net">网络图片</span>
</p>

<p>
	<input type="file" name="image" id="upImage"  size="60" />
</p>
<input type="hidden" name="which" value="1" id="which"  />
<input type="hidden" name="albumId" value="<?php echo $_smarty_tpl->tpl_vars['albumId']->value;?>
" />
<p>
	<input type="submit" value="上传" onmouseover="noEmpty(<?php echo $_smarty_tpl->tpl_vars['isAllow']->value;?>
)"/>
</p>
</form>
<hr>
<?php if ($_smarty_tpl->tpl_vars['ln']->value==1){?>
<img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['pictureUrl']->value;?>
" />
<?php }elseif($_smarty_tpl->tpl_vars['ln']->value==0){?>
	<?php if ($_smarty_tpl->tpl_vars['pictureUrl']->value!=null){?>
<img src="<?php echo $_smarty_tpl->tpl_vars['pictureUrl']->value;?>
" />
	<?php }?>
<?php }?>

<?php }} ?>