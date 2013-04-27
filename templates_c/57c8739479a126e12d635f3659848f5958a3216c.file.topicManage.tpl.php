<?php /* Smarty version Smarty-3.1.12, created on 2013-04-25 12:37:23
         compiled from ".\templates\topicManage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:296005178ed8a591d34-06627291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57c8739479a126e12d635f3659848f5958a3216c' => 
    array (
      0 => '.\\templates\\topicManage.tpl',
      1 => 1366893408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '296005178ed8a591d34-06627291',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5178ed8a6fcb19_85474686',
  'variables' => 
  array (
    'addUrl' => 0,
    'editUrl' => 0,
    'deleteUrl' => 0,
    'th' => 0,
    'trTd' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5178ed8a6fcb19_85474686')) {function content_5178ed8a6fcb19_85474686($_smarty_tpl) {?>
<script type="text/javascript" src="./js/common.js"></script>
<script type="text/javascript" src="./js/common.js"></script>
<p>栏目列表</p>
<p>
	<table border="1">
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
<table border="1" width="80%">
	<tr>
		<th><input type="checkbox" id="check" onchange="chose(this.id)" /></th>
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
"  /></td>
			<td><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['trTd']['index']+1;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['trTd']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trTd']['index']]['topicName'];?>
</td>
			<td>删除</td>
		
	</tr>
	<?php endfor; endif; ?>
	<?php }?>
	
</table><?php }} ?>