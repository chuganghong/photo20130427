<?php /* Smarty version Smarty-3.1.12, created on 2013-06-27 09:29:09
         compiled from "D:\wamp\www\GitHub\photo20130427\admin\templates\albumManage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90951aa0035a56793-43839663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0674829238b1ee40f4d68b76f263ce805e1f4239' => 
    array (
      0 => 'D:\\wamp\\www\\GitHub\\photo20130427\\admin\\templates\\albumManage.tpl',
      1 => 1372325338,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90951aa0035a56793-43839663',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51aa0035c961c2_50875987',
  'variables' => 
  array (
    'js' => 0,
    'addUrl' => 0,
    'editUrl' => 0,
    'deleteUrl' => 0,
    'th' => 0,
    'td' => 0,
    'uploadUrl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51aa0035c961c2_50875987')) {function content_51aa0035c961c2_50875987($_smarty_tpl) {?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
"></script>
<style type="text/css">
table
{
	border-collapse:collapse;
	width:80%;
	margin:0 auto;
}
td,th
{
	border:1px solid gray;
	text-align:center;
	padding-top:10px;
	padding-bottom:10px;
	
}
</style>
<p>
	<table>
		<tr>
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['addUrl']->value;?>
?which=add">新增</a></td>
			<td><a href="#" onclick="edit('<?php echo $_smarty_tpl->tpl_vars['editUrl']->value;?>
')">编辑</a></td>
			<td onclick='deleteAlPic("<?php echo $_smarty_tpl->tpl_vars['deleteUrl']->value;?>
","albumIds",1)'>删除</td>			
		</tr>
	</table>
</p>
<p>
<table>	
	<tr>
		<th><input type="checkbox" name="box" id="check" onchange="chose(this.id)"  /></th>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['th'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['th']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['th']['name'] = 'th';
$_smarty_tpl->tpl_vars['smarty']->value['section']['th']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['th']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['th']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['th']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['th']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['th']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['th']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['th']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['th']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['th']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['th']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['th']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['th']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['th']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['th']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['th']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['th']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['th']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['th']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['th']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['th']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['th']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['th']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['th']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['th']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['th']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['th']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['th']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['th']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['th']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['th']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['th']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['th']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['th']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['th']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['th']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['th']['total']);
?>
		<th><?php echo $_smarty_tpl->tpl_vars['th']->value[$_smarty_tpl->getVariable('smarty')->value['section']['th']['index']];?>
</th>
		<?php endfor; endif; ?>
	</tr>
	<?php if (count($_smarty_tpl->tpl_vars['td']->value)!=0){?>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['td'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['td']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['td']['name'] = 'td';
$_smarty_tpl->tpl_vars['smarty']->value['section']['td']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['td']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['td']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['td']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['td']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['td']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['td']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['td']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['td']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['td']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['td']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['td']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['td']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['td']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['td']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['td']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['td']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['total']);
?>
		<tr>
			<td><input type="checkbox" name="boxes[]" value="<?php echo $_smarty_tpl->tpl_vars['td']->value[$_smarty_tpl->getVariable('smarty')->value['section']['td']['index']]['topicId'];?>
=><?php echo $_smarty_tpl->tpl_vars['td']->value[$_smarty_tpl->getVariable('smarty')->value['section']['td']['index']]['albumName'];?>
=><?php echo $_smarty_tpl->tpl_vars['td']->value[$_smarty_tpl->getVariable('smarty')->value['section']['td']['index']]['thumbUrl'];?>
=><?php echo $_smarty_tpl->tpl_vars['td']->value[$_smarty_tpl->getVariable('smarty')->value['section']['td']['index']]['id'];?>
=><?php echo $_smarty_tpl->tpl_vars['td']->value[$_smarty_tpl->getVariable('smarty')->value['section']['td']['index']]['ln'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['td']->value[$_smarty_tpl->getVariable('smarty')->value['section']['td']['index']]['id'];?>
" /></td>
			
			
			<td><?php echo $_smarty_tpl->tpl_vars['td']->value[$_smarty_tpl->getVariable('smarty')->value['section']['td']['index']]['id'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['td']->value[$_smarty_tpl->getVariable('smarty')->value['section']['td']['index']]['albumName'];?>
</td>
			<td>
				<a href="<?php echo $_smarty_tpl->tpl_vars['uploadUrl']->value;?>
?id=<?php echo $_smarty_tpl->tpl_vars['td']->value[$_smarty_tpl->getVariable('smarty')->value['section']['td']['index']]['id'];?>
">上传图片</a>&nbsp;
				<a href="#" onclick="editAn('<?php echo $_smarty_tpl->tpl_vars['editUrl']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['td']->value[$_smarty_tpl->getVariable('smarty')->value['section']['td']['index']]['id'];?>
')">编辑</a>&nbsp;
				<a href="#" onclick='deleteAnAlPic("<?php echo $_smarty_tpl->tpl_vars['deleteUrl']->value;?>
","<?php echo $_smarty_tpl->tpl_vars['td']->value[$_smarty_tpl->getVariable('smarty')->value['section']['td']['index']]['id'];?>
","albumIds")'>删除</a>	
			</td>
		</tr>
		<?php endfor; endif; ?>
		
	<?php }?>
	<form method="post" id="myForm">
		<input type="hidden" name="albumIds" value=""  id="albumIds" />
	</form>
</table>
</p><?php }} ?>