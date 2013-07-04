<?php
/**
 * 为list.php提供数据
 */
require('RecommendAlbum.class.php');
/**
 * 获取“当前位置： 主页 > 日本美女 > ”下的图集数据
 * @author ggh
 *
 */
class ListPartA extends IndexPart implements NewAlbums
{
	public function getNewAlbums($start)
	{
		$num = 24;
		$topicId = $this->topicId;
		$data = $this->recommendAlbum->getNewAlbum($start,$num,$topicId);
		return $data;
	}
}

/**
 * 获取下方栏目“推荐美女”的图集数据
 * @author ggh
 *
 */
class ListPartB extends IndexPart implements OTinyPic
{
	public function getOTinyPiC()
	{
		$topicId = $this->topicId;
		$num = 12;
		$data = $this->recommendAlbum->getOtherRecTinyPic($topicId,$num);
		return $data;
	}
}

/**
 * 获取推荐到首页小图的图集数据，在此页面中没有使用
 * @author ggh
 *
 */
class ListPartC extends IndexPart implements TinyPic
{
	public function getTinyPic()
	{
		$topicId = $this->topicId;
		$num = 12;
		$data = $this->recommendAlbum->getIndexRecTinyPic($topicId,$num);
		return $data;		
	}
}

$recommendAlbum = RecommendAlbum::getRecommendAlbumInstance($db);
$topicId = mysql_real_escape_string(trim($_GET['topicId']));

//获取显示分页符所需要的数据
$sql = "SELECT COUNT(id) FROM album WHERE topicId=$topicId";
$rows = $db->_query($sql);
$sumData = mysql_fetch_assoc($rows);

$sum = ceil($sumData['COUNT(id)']/$num);   //总页数

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

$current = mysql_real_escape_string(trim($currentPage));
$start = $current-1;


//获取栏目下的最新图集
$partA = new ListPartA($recommendAlbum, $topicId);
$AName = $partA->getTopicName();

$ANewAlbums = $partA->getNewAlbums($start);


//获取下方推荐数据
$partB = new ListPartB($recommendAlbum, $topicId);
$BRecAlbums = $partB->getOTinyPiC();


