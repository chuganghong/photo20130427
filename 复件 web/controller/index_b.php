<?php
require('../common/include.php');
require('getAlbumInfo_b.php');
//$css = $_SERVER['HTTP_HOST'];
//echo $css;

$tpl = dirname(dirname($_SERVER['SCRIPT_FILENAME'])) . '/templates/';
$header = $tpl . 'header.tpl';
$footer = $tpl . 'footer.tpl';

$linkTopic = dirname($_SERVER['SCRIPT_NAME']) . '/list.php?topicId=';
$smarty->assign('linkTopic',$linkTopic);

//栏目数据
$TopicData = $TopicData;
$smarty->assign('TopicData',$TopicData);

$new = $new;
$linkNew = dirname($_SERVER['SCRIPT_NAME']) . '/pic.php?';
$smarty->assign('new',$new);
$smarty->assign('linkNew',$linkNew);


//partA
$AtopicName = $Aname;
$AtinyPic = $AtinyPic;
$smarty->assign('Aname',$Aname);
$smarty->assign('AtinyPic',$AtinyPic);

$linkTopicA = $linkTopic . $topicIdA;
$smarty->assign('linkTA',$linkTopicA);

$linkPicA = dirname($_SERVER['SCRIPT_NAME']) . '/pic.php?topicId=' . $topicIdA . '&albumId=';
$smarty->assign('LPA',$linkPicA);

//partB
$BtopicName = $Bname;

$BtinyPic = $BtinyPic;
$Bmedium = $Bmedium;
$Btext = $Btext;

$smarty->assign('BtopicName',$BtopicName);
$smarty->assign('BtinyPic',$BtinyPic);
$smarty->assign('Bmedium',$Bmedium);
$smarty->assign('Btext',$Btext);

$linkPicB = dirname($_SERVER['SCRIPT_NAME']) . '/pic.php?topicId=' . $topicIdB . '&albumId=';
$smarty->assign('LPB',$linkPicB);




$pre = '/GitHub/photo20130427/web/templates/style/';

$smarty->assign('css1',$pre . 'style.css');
//$smarty->assign('head',$pre . 'header.css');

$linkTopicB = $linkTopic . $topicIdB;
//var_dump(dirname($_SERVER['SCRIPT_NAME']));  //TEST
$smarty->assign('linkTB',$linkTopicB);



$smarty->assign('pre',$pre);
$smarty->assign('tpl',$tpl);
//$smarty->assign('header',$header);
//$smarty->assign('footer',$footer);
$smarty->display($tpl . 'index1.tpl');