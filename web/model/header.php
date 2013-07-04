<?php
/**
 * header部分的数据
 */
//require('RecommendAlbum.class.php');
$recommend = RecommendAlbum::getRecommendAlbumInstance($db);
//所有栏目数据
$num = 8;
$TopicData = $recommend->getAllTopic($num);

//栏目数据
$TopicData = $TopicData;
$smarty->assign('TopicData',$TopicData);

$header = $tpl . 'header.tpl';
$smarty->assign('header',$header);

$linkTopic = dirname($_SERVER['SCRIPT_NAME']) . '/list.php?topicId=';
$smarty->assign('linkTopic',$linkTopic);