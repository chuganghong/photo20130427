<?php /* Smarty version Smarty-3.1.12, created on 2013-06-25 14:36:38
         compiled from "D:\wamp\www\GitHub\photo20130427\web\templates\index1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16251c7dec0e61de4-49803605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18482c9d22d3a009970ed7891839e1f2eaa6c3d5' => 
    array (
      0 => 'D:\\wamp\\www\\GitHub\\photo20130427\\web\\templates\\index1.tpl',
      1 => 1372170995,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16251c7dec0e61de4-49803605',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51c7dec1031413_26843607',
  'variables' => 
  array (
    'header' => 0,
    'new' => 0,
    'linkNew' => 0,
    'linkTA' => 0,
    'Aname' => 0,
    'AtinyPic' => 0,
    'LPA' => 0,
    'linkTB' => 0,
    'BtopicName' => 0,
    'LPB' => 0,
    'Bmedium' => 0,
    'Btext' => 0,
    'BtinyPic' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c7dec1031413_26843607')) {function content_51c7dec1031413_26843607($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['header']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--header end-->
<div class="space"></div>
<div id="main">
	<div id="content1">
    	<div id="content1_left">
        	<a href="#"><img src="http://tu.ny369.com/tu/1589/hd.jpg" title="strtotime()" style="width:600px;height:380px" /></a>
        </div>
        <div id="content1_right">
        	<div id="newmeinv">最新发布</div>
            <div id="news">
            	<div id="news_list">
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
                    		<li><a href="<?php echo $_smarty_tpl->tpl_vars['linkNew']->value;?>
topicId=<?php echo $_smarty_tpl->tpl_vars['new']->value[$_smarty_tpl->getVariable('smarty')->value['section']['new']['index']]["topicId"];?>
&albumId=<?php echo $_smarty_tpl->tpl_vars['new']->value[$_smarty_tpl->getVariable('smarty')->value['section']['new']['index']]["id"];?>
" target="_blank"><span class="new_list_title"><?php echo $_smarty_tpl->tpl_vars['new']->value[$_smarty_tpl->getVariable('smarty')->value['section']['new']['index']]['albumName'];?>
</span></a><span class="date">06-20</span></li>
                    	<?php endfor; endif; ?>
                    	<!--
                    	<li><a href="#">白色迷人衬衣私房靓丽写照</a><span class="date">06-20</span></li>
                        <li><a href="#">白色迷人衬衣私房靓丽写照</a><span class="date">06-20</span></li>
                        <li><a href="#">白色迷人衬衣私房靓丽写照</a><span class="date">06-20</span></li>
                        <li><a href="#">白色迷人衬衣私房靓丽写照</a><span class="date">06-20</span></li>
                        <li><a href="#">白色迷人衬衣私房靓丽写照</a><span class="date">06-20</span></li>
                        <li><a href="#">白色迷人衬衣私房靓丽写照</a><span class="date">06-20</span></li>
                        <li><a href="#">白色迷人衬衣私房靓丽写照</a><span class="date">06-20</span></li>
                        <li><a href="#">白色迷人衬衣私房靓丽写照</a><span class="date">06-20</span></li>
                        <li><a href="#">白色迷人衬衣私房靓丽写照</a><span class="date">06-20</span></li>
                        <li><a href="#">白色迷人衬衣私房靓丽写照</a><span class="date">06-20</span></li>
                        <li><a href="#">白色迷人衬衣私房靓丽写照</a><span class="date">06-20</span></li>
                        -->
                    </ul>
                </div>
                <div id="search">
                	<form action="#" method="post">
                    	<input class="search_area" type="text" value="美女写真 清纯美女 自拍 ..." />
                        <input class="search_button" value="" type="submit"  />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="space"></div>
<div class="content2">
	<div id="siwa">
    	<ul>
        	<li class="topic"><a href="<?php echo $_smarty_tpl->tpl_vars['linkTA']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['Aname']->value;?>
</a></li>
            <li class="more"><a href="<?php echo $_smarty_tpl->tpl_vars['linkTA']->value;?>
" target="_blank">>> 更多</a></li>
        </ul>
    </div>
    <div class="pic_list">
    	<ul>
        	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['name'] = 'tinyPic';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['AtinyPic']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['total']);
?>
        		
        		<li class="pic">
            		<ul>
        				<li class="picimg"><a href="<?php echo $_smarty_tpl->tpl_vars['LPA']->value;?>
<?php echo $_smarty_tpl->tpl_vars['AtinyPic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tinyPic']['index']]["id"];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['AtinyPic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tinyPic']['index']]["thumbUrl"];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['AtinyPic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tinyPic']['index']]["albumName"];?>
" title="<?php echo $_smarty_tpl->tpl_vars['AtinyPic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tinyPic']['index']]["albumName"];?>
"  style="width:140px;height:180px;" /></a></li>
                    	<li class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['LPA']->value;?>
<?php echo $_smarty_tpl->tpl_vars['AtinyPic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tinyPic']['index']]["id"];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['AtinyPic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tinyPic']['index']]["albumName"];?>
</a></li>
                	</ul>
            	</li>
            <?php endfor; endif; ?>            
         </ul>
    </div>
</div>
<div class="space"></div>
<div class="content3">
	<div id="xiezhen">
    	<ul>
        	<li class="topic"><a href="<?php echo $_smarty_tpl->tpl_vars['linkTB']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['BtopicName']->value;?>
</a></li>
            <li class="more"><a href="<?php echo $_smarty_tpl->tpl_vars['linkTB']->value;?>
" target="_blank">>> 更多</a></li>
        </ul>
    </div>
    <div class="pics">
    	<ul>
        	<li class="pic_left">
            	<ul>
                	<li class="bigPic">
                    	<ul>
                        	<li class="bigPic_img"><a href="<?php echo $_smarty_tpl->tpl_vars['LPB']->value;?>
<?php echo $_smarty_tpl->tpl_vars['Bmedium']->value["id"];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['Bmedium']->value["thumbUrl"];?>
" style="width:286px;height:314px;" /></a></li>
                            <li class="bigPic_title"><a href="<?php echo $_smarty_tpl->tpl_vars['LPB']->value;?>
<?php echo $_smarty_tpl->tpl_vars['Bmedium']->value["id"];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['Bmedium']->value["albumName"];?>
</a></li>
                        </ul>
                    </li>
                    <li class="listTitle">
                    	<ul>
                    		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['text'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['text']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['text']['name'] = 'text';
$_smarty_tpl->tpl_vars['smarty']->value['section']['text']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['Btext']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['text']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['text']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['text']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['text']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['text']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['text']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['text']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['text']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['text']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['text']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['text']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['text']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['text']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['text']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['text']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['text']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['text']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['text']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['text']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['text']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['text']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['text']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['text']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['text']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['text']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['text']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['text']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['text']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['text']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['text']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['text']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['text']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['text']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['text']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['text']['total']);
?>
                    			<li>·<a href="<?php echo $_smarty_tpl->tpl_vars['LPB']->value;?>
<?php echo $_smarty_tpl->tpl_vars['Btext']->value[$_smarty_tpl->getVariable('smarty')->value['section']['text']['index']]["id"];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['Btext']->value[$_smarty_tpl->getVariable('smarty')->value['section']['text']['index']]["albumName"];?>
</a></li>
                        	<?php endfor; endif; ?>                            
                        </ul>
                    </li>
                 </ul>
            </li>
            <li class="pic_right">
            	<ul>
                	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['name'] = 'tinyPic';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['BtinyPic']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['tinyPic']['total']);
?>
                		<li class="pic">
                    		<ul>
                        		<li class="picimg"><a href="<?php echo $_smarty_tpl->tpl_vars['LPB']->value;?>
<?php echo $_smarty_tpl->tpl_vars['BtinyPic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tinyPic']['index']]["id"];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['BtinyPic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tinyPic']['index']]['thumbUrl'];?>
" style="width:140px; height:180px;" /></a></li>
                            	<li class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['LPB']->value;?>
<?php echo $_smarty_tpl->tpl_vars['BtinyPic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tinyPic']['index']]["id"];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['BtinyPic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tinyPic']['index']]['albumName'];?>
</a></li>
                        	</ul>
                    	</li>
                    <?php endfor; endif; ?>                  
               </ul>                 
            </li>
        </ul>
    </div>
</div>
<div class="space"></div>
<div id="footer1">
<div id="footer">
	<ul>
    	<li>
        	<a href="#">美女</a>
            <a href="#">美女图片</a>
            <a href="#">日本美女</a>
        </li>
        <li>
        	本站除标明"本站原创"外所有照片版权归创作人所有，如有冒犯，请直接联系本站，我们将立即予以纠正并致歉 2011-2012 女友美图网. All Rights Reserved ！网站统计 站长统计
        </li>
    </ul>
</div>
</div>
</body>
</html><?php }} ?>