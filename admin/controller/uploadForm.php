<?php
/*
	图集图片上传表单
*/
require_once('../common/include.php');

$albumId = _filter($_GET['id']);  //图集ID
//var_dump($albumId);  //test

echo 'welcome!<br />';//test

$sql = "SELECT pictureUrl,ln FROM picture WHERE albumId=$albumId ORDER BY id DESC LIMIT 1";
$result = $db->_query($sql);
$row = mysql_fetch_assoc($result);
//var_dump($row);  //test
$pictureUrl = $row['pictureUrl'];
$ln = $row['ln'];   //标识是网络图片还是本地图片

//var_dump($ln);  //test

$smarty->assign('pictureUrl',$pictureUrl);
$smarty->assign('ln',$ln);

//var_dump($_SERVER['SERVER_NAME']);  //TEST

$smarty->assign('root',$_SERVER['SERVER_NAME']);

$host = 'http://' . $_SERVER['HTTP_HOST'];
$smarty->assign('host',$host);



$smarty->assign('albumId',$albumId);

$smarty->assign('isAllow',1);


$action = '../model/upload.php';
$smarty->assign('action',$action);


$smarty->display( TPL . 'uploadForm.tpl');



