<?php /* Smarty version Smarty-3.1.12, created on 2013-06-20 08:59:08
         compiled from "D:\wamp\www\GitHub\photo20130427\web\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:496551ae665bb6f622-61463775%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '427ef36a2ac169c3c3129969cdc3d94fe9990b86' => 
    array (
      0 => 'D:\\wamp\\www\\GitHub\\photo20130427\\web\\templates\\index.tpl',
      1 => 1371718745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '496551ae665bb6f622-61463775',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51ae665be763d1_35207684',
  'variables' => 
  array (
    'css' => 0,
    'new' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ae665be763d1_35207684')) {function content_51ae665be763d1_35207684($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">
<HEAD><META http-equiv=Content-Type content="text/html; charset=utf-8">
<TITLE></TITLE>
<META content="" name=keywords>
<META content="" name=description>
<LINK href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
" type="text/css" rel="stylesheet">
</HEAD>
<BODY>

<div class="header" id="cen">
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['header']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
</div>



<!-- 头屏右 -->
<div class="tpy">
<div class="title">最新加入</div>
<div class="tpy_list">
<ul>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['new'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['new']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['new']['name'] = 'new';
$_smarty_tpl->tpl_vars['smarty']->value['section']['new']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['new']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['new']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['new']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['new']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['new']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['new']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['new']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['new']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['new']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['new']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['new']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['new']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['new']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['new']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['new']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['new']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['total']);
?>
<LI><a target="_blank" href="#" title="#"><?php echo $_smarty_tpl->tpl_vars['new']->value[$_smarty_tpl->getVariable('smarty')->value['section']['new']['index']]["albumName"];?>
</A></LI>
<?php endfor; endif; ?>
</ul>
</div>

<div class="mt7"></div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['footer']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</BODY>
</HTML>
<?php }} ?>