<?php /* Smarty version Smarty-3.1.12, created on 2013-04-26 06:22:43
         compiled from ".\templates\pictureManage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93795178ed88440be0-23001642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '505170969faf249ae9f49b692a69ba0086834106' => 
    array (
      0 => '.\\templates\\pictureManage.tpl',
      1 => 1366957361,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93795178ed88440be0-23001642',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5178ed884e7415_18626065',
  'variables' => 
  array (
    'deletePicUrl' => 0,
    'th' => 0,
    'td' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5178ed884e7415_18626065')) {function content_5178ed884e7415_18626065($_smarty_tpl) {?>
<script type="text/javascript" src="./js/common.js"></script>
<p>图片列表</p>
<p>
	<table border="1">
		<tr>			
			<td><button onclick='deletePic("<?php echo $_smarty_tpl->tpl_vars['deletePicUrl']->value;?>
")'>删除</button></td>			
		</tr>
	</table>
</p>
<p>
<table border="1" width="80%">
	<tr>
		<th><input type="checkbox" name="box" id="check" onchange="chose(this.id)"/></th>
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
		<td width="5%"><input type="checkbox" name="boxes[]" value="<?php echo $_smarty_tpl->tpl_vars['td']->value[$_smarty_tpl->getVariable('smarty')->value['section']['td']['index']]['id'];?>
|<?php echo $_smarty_tpl->tpl_vars['td']->value[$_smarty_tpl->getVariable('smarty')->value['section']['td']['index']]['pictureUrl'];?>
" /></td>
		<td width="10%"><?php echo $_smarty_tpl->tpl_vars['td']->value[$_smarty_tpl->getVariable('smarty')->value['section']['td']['index']]['id'];?>
</td>
		<td width="60%" align="center"><img src="<?php echo $_smarty_tpl->tpl_vars['td']->value[$_smarty_tpl->getVariable('smarty')->value['section']['td']['index']]['pictureUrl'];?>
" width="350" height="300" /></td>
		<td width="25%"><a href="<?php echo $_smarty_tpl->tpl_vars['deletePicUrl']->value;?>
?picIdUrls=<?php echo $_smarty_tpl->tpl_vars['td']->value[$_smarty_tpl->getVariable('smarty')->value['section']['td']['index']]['id'];?>
|<?php echo $_smarty_tpl->tpl_vars['td']->value[$_smarty_tpl->getVariable('smarty')->value['section']['td']['index']]['pictureUrl'];?>
">删除</a></td>
	</tr>
	<?php endfor; endif; ?>
</table>
	<?php }} ?>