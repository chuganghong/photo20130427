<?php /* Smarty version Smarty-3.1.12, created on 2013-06-27 09:30:24
         compiled from "D:\wamp\www\GitHub\photo20130427\admin\templates\topicManage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3178051aa0032626f11-28215445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e7f217770ff65ec114a922701a92f475eb80bbc' => 
    array (
      0 => 'D:\\wamp\\www\\GitHub\\photo20130427\\admin\\templates\\topicManage.tpl',
      1 => 1372325420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3178051aa0032626f11-28215445',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51aa00329073c2_87963178',
  'variables' => 
  array (
    'js' => 0,
    'addUrl' => 0,
    'editUrl' => 0,
    'deleteUrl' => 0,
    'th' => 0,
    'trTd' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51aa00329073c2_87963178')) {function content_51aa00329073c2_87963178($_smarty_tpl) {?>
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
	<table >
		<tr>
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['addUrl']->value;?>
?which=add" class="ade" >新增</a></td>
			<td><a href="#" class="ade" onclick="edit('<?php echo $_smarty_tpl->tpl_vars['editUrl']->value;?>
')">编辑</a></td>
			<td><a href="#" class="ade" onclick="_delete('<?php echo $_smarty_tpl->tpl_vars['deleteUrl']->value;?>
')">删除</a></td>			
		</tr>
	</table>
</p>
<p>
<table>
	<tr>
		<th><input type="checkbox" id="check" onchange="chose(this.id)" value="0" /></th>
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
	
	<?php if (count($_smarty_tpl->tpl_vars['trTd']->value)!=0){?>
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['trTd'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['trTd']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['trTd']['name'] = 'trTd';
$_smarty_tpl->tpl_vars['smarty']->value['section']['trTd']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['trTd']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['trTd']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['trTd']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trTd']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['trTd']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['trTd']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trTd']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['trTd']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['trTd']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['trTd']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trTd']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['trTd']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['trTd']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['trTd']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['trTd']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['trTd']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trTd']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['trTd']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['trTd']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['trTd']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['trTd']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['trTd']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['trTd']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['trTd']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trTd']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['trTd']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trTd']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['trTd']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['trTd']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trTd']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['trTd']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['trTd']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['trTd']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['trTd']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['trTd']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['trTd']['total']);
?>
	<tr>
		
			<td><input type="checkbox" name="boxes[]" value="<?php echo $_smarty_tpl->tpl_vars['trTd']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trTd']['index']]['id'];?>
=><?php echo $_smarty_tpl->tpl_vars['trTd']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trTd']['index']]['topicName'];?>
"  id="<?php echo $_smarty_tpl->tpl_vars['trTd']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trTd']['index']]['id'];?>
" /></td>
			<td><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['trTd']['index']+1;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['trTd']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trTd']['index']]['topicName'];?>
</td>
			<td>
				<a href="#" onclick="editAn('<?php echo $_smarty_tpl->tpl_vars['editUrl']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['trTd']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trTd']['index']]['id'];?>
')">编辑</a>&nbsp;
				删除
			</td>
		
	</tr>
	<?php endfor; endif; ?>
	<?php }?>
	
</table><?php }} ?>