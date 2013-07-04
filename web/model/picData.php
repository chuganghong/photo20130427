<?php
/**
 * 为pic.php提供数据
 */
require('RecommendAlbum.class.php');

class PartA extends IndexPart
{
	public function getPic($albumId)
	{
		$data = $this->recommendAlbum->getAllPicOfAlbum($albumId);
		return $data;
	}
}

class PartB extends IndexPart implements PreNextAlbum
{
	public function getPreAlbum($albumId)
	{
		$topicId = $this->topicId;
		$data = $this->recommendAlbum->getPreNextAlbum($albumId,$topicId,true);
		return $data;
	}
	
	public function getNextAlbum($albumId)
	{
		$topicId = $this->topicId;
		$data = $this->recommendAlbum->getPreNextAlbum($albumId,$topicId,false);
		return $data;
	}
}

class PartC extends IndexPart implements OTinyPic
{
	public function getOTinyPiC()
	{
		$topicId = $this->topicId;
		$num = 12;
		$data = $this->recommendAlbum->getOtherRecTinyPic($topicId,$num);
		return $data;
	}
}



//获取partA数据
$recommendAlbum = RecommendAlbum::getRecommendAlbumInstance($db);
$topicId = mysql_real_escape_string(trim($_GET['topicId']));
$albumId = mysql_real_escape_string(trim($_GET['albumId']));
$partA = new PartA($recommendAlbum, $topicId);
$APics = $partA->getPic($albumId);

$ATopicName = $partA->getTopicName();
$AAlbumName = $partA->getAlbumName($albumId);

//获取分页数据
$sum = count($APics);

if(!isset($_GET['page']))
{
	$currentPage = 1;
}
elseif( ($_GET['page']>0)&&($_GET['page']<=$sum) )
{
	$currentPage = $_GET['page'];
}
else
{
	$currentPage = 1;
}

//获取partB数据
$partB = new PartB($recommendAlbum, $topicId);
$BPreAlbum = $partB->getPreAlbum($albumId);
$BNextAlbum = $partB->getNextAlbum($albumId);

//获取partC数据(与albumListData.php中的代码相同，是从那里复制而来的）
$partC = new PartC($recommendAlbum, $topicId);
$CRecAlbums = $partC->getOTinyPiC();


