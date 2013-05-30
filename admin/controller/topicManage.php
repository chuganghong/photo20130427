<?php
require_once('../common/include.php');

$addUrl = 'topicForm.php';
$editUrl = 'topicForm.php';
$deleteUrl = '../model/deleteToPic.php';
$smarty->assign('addUrl',$addUrl);
$smarty->assign('editUrl',$editUrl);
$smarty->assign('deleteUrl',$deleteUrl);

require('getTopicInfo.php');
$js = '../common/js/common.js';
$smarty->assign('js',$js);

$smarty->assign('trTd',$data);


$th = array('编号','栏目名称','操作');
$smarty->assign('th',$th);

$smarty->display( TPL . 'topicManage.tpl');