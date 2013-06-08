<?php /* Smarty version Smarty-3.1.12, created on 2013-06-01 14:07:51
         compiled from "D:\wamp\www\GitHub\photo20130427\admin\templates\pictureManage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1056251aa00372406a9-20187231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66df88e628cde1813b95a28c8bff191610100132' => 
    array (
      0 => 'D:\\wamp\\www\\GitHub\\photo20130427\\admin\\templates\\pictureManage.tpl',
      1 => 1369885526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1056251aa00372406a9-20187231',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'js' => 0,
    'deletePicUrl' => 0,
    'th' => 0,
    'td' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51aa0037444794_85744595',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51aa0037444794_85744595')) {function content_51aa0037444794_85744595($_smarty_tpl) {?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
"></script>
<p>图片列表</p>
<p>
	<table border="1">
		<tr>			
			<td><button onclick='deleteAlPic("<?php echo $_smarty_tpl->tpl_vars['deletePicUrl']->value;?>
","picIds",1)'>删除</button></td>			
		</tr>
	</table>
</p>
<p>
<table border="1" width="80%">
	<tr>
		<th><input type="checkbox" name="box" id="check" onchange="chose(this.id)" /></th>
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
		<td width="60%" align="center">
		
		<?php if ($_smarty_tpl->tpl_vars['td']->value[$_smarty_tpl->getVariable('smarty')->value['section']['td']['index']]['ln']==1){?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['td']->value[$_smarty_tpl->getVariable('smarty')->value['section']['td']['index']]['pictureUrl'];?>
" width="350" height="300" /></td>
		<?php }else{ ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['td']->value[$_smarty_tpl->getVariable('smarty')->value['section']['td']['index']]['pictureUrl'];?>
" width="350" height="300" /></td>
		<?php }?>
		
		<td width="25%"><a href="<?php echo $_smarty_tpl->tpl_vars['deletePicUrl']->value;?>
?picIdUrls=<?php echo $_smarty_tpl->tpl_vars['td']->value[$_smarty_tpl->getVariable('smarty')->value['section']['td']['index']]['id'];?>
|<?php echo $_smarty_tpl->tpl_vars['td']->value[$_smarty_tpl->getVariable('smarty')->value['section']['td']['index']]['pictureUrl'];?>
">删除</span></td>
	</tr>
	<?php endfor; endif; ?>
</table>
<form method="post" id="myForm">
<input type="hidden" name="picIdUrls" id = "picIds" />
</form>
	<?php }} ?>