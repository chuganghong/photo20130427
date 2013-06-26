<?php
/**
 *提供前端首页所需要的数据
 *纠结于是否应该将此页的代码封装到类里面。反对理由：高耦合。不过，还是封装吧。
 *写了一些封装代码，我完全看不出这样的代码有什么优势，纯属浪费，决定不封装了。
 */
require('RecommendAlbum.class.php');



//topicId = 1;
class IndexPartA extends IndexPart implements TinyPic
{
	function getTinyPic()
	{
		$topicId = $this->topicId;
		$num = 12;
		$data = $this->recommendAlbum->getIndexRecTinyPic($topicId,$num);
		return $data;
	}
}

//$topicId =2;
class IndexPartB extends IndexPart implements TinyPic,Text,MediumPic
{
	function getTinyPic()
	{
		$topicId = $this->topicId;
		$num = 8;
		$data = $this->recommendAlbum->getIndexRecTinyPic($topicId,$num);
		return $data;
	}
	
	function getText()
	{
		$topicId = $this->topicId;
		$num = 8;
		$data = $this->recommendAlbum->getIndexRecText($topicId,$num);
		return $data;
	}
	
	function getMediumPic()
	{
		$topicId = $this->topicId;
		$num = 1;
		$data = $this->recommendAlbum->getIndexRecMediumPic($topicId,$num);
		$mediumPic = $data[0];
		return $mediumPic;
	}
}

/**
 * 为首页提供数据
 */
$recommend = new RecommendAlbum($db);
//所有栏目数据
$num = 8;
$TopicData = $recommend->getAllTopic($num);
//var_dump($data);



//获取最新图集数据
$num = 11;
$topicId = 0;
$new = $recommend->getNewAlbum(0,$num,$topicId);

//获取partA数据
$topicIdA = 1;
$partA = new IndexPartA($recommend,$topicIdA);
$Aname = $partA->getTopicName();
$AtinyPic = $partA->getTinyPic();




//获取partB数据
$topicIdB = 2;
$partB = new IndexPartB($recommend, $topicIdB);
$Bname = $partB->getTopicName();
$BtinyPic = $partB->getTinyPic();
$Bmedium = $partB->getMediumPic();
$Btext = $partB->getText();