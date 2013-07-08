<?php
/**
 * 网站前端系统图片展示页pic.php的HTML文件生成代码
 * 由于本网站设置为只提供topicID最大为20的图片数据，故网页HTML化也受次限制
 * 2013年7月6日 14点21分
 */
set_time_limit(0);

$start_t = microtime(true);//cost time

require('../common/include.php');
$tpl = dirname(dirname($_SERVER['SCRIPT_FILENAME'])) . '/templates/';

require('RecommendAlbum.class.php');
require('header.php');  //提供topicData（显示栏目名称）等数据

require('PageW.class.php');   //分页符

$home = dirname(dirname($_SERVER['SCRIPT_NAME'])) . '/controller/index_b.php';
$home = 'http://' . $_SERVER['REMOTE_ADDR'] . $home;

$tpl = dirname(dirname($_SERVER['SCRIPT_FILENAME'])) . '/templates/';
$pre = dirname(dirname($_SERVER['SCRIPT_NAME'])) . '/templates/style/';

$recommendAlbum = RecommendAlbum::getRecommendAlbumInstance($db);

/*
 * 从picData.php复制而来
 */
class PartA extends IndexPart
{
	/**
	 * 获取一个图集的所有图片数据
	 * @param integer $albumId 图集ID
	 * @return array $data 存图集ID为$albumID的图的所有图片数据的数组，二维数组
	 */
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


/*
 * 从picData.php复制而来
*/

$maxTopicId = 1;

$pres = dirname(dirname(dirname($_SERVER['SCRIPT_FILENAME']))) . '/meinv/';
$upres = dirname(dirname(dirname($_SERVER['SCRIPT_NAME']))) . '/meinv/';

for($i=1;$i<=$maxTopicId;$i++)
{
	$topicId = $i;
	$sql = "SELECT id FROM album WHERE topicId=$topicId";
	$data = $recommendAlbum->getAlbumInfo($sql);
	
	//获取partC数据(与albumListData.php中的代码相同，是从那里复制而来的）
	$partC = new PartC($recommendAlbum, $topicId);
	$CRecAlbums = $partC->getOTinyPiC();
	
	$partA = new PartA($recommendAlbum, $topicId);
	$partB = new PartB($recommendAlbum,$topicId);
	
	
	
	
	
	
	foreach($data as $v)
	{
		$albumId = $v['id'];
		//获取partA数据		
		$APics = $partA->getPic($albumId);

		$ATopicName = $partA->getTopicName();
		$AAlbumName = $partA->getAlbumName($albumId);
		
		//获取分页数据
		$sum = count($APics);
		$sum2 = $sum+1;
		
		//获取partB数据		
		$BPreAlbum = $partB->getPreAlbum($albumId);
		$BNextAlbum = $partB->getNextAlbum($albumId);
		
		for($n=($sum-1);$n<=$sum;$n++)
		{
			$currentPage = $n;
			
			//当前页码数
			$prep = $currentPage;
			
			require('staticPic.php');
		}
	}
	
}

$end_t = microtime(true);
$cost = $end_t - $start_t;
echo htmlspecialchars($replacement4);  //test
echo '<br />';
echo htmlspecialchars($search4);  //test
echo '<hr>';
echo htmlspecialchars($info);
echo '<hr>';
echo htmlspecialchars($info2);
echo '<hr>';
echo htmlspecialchars($info3);
echo '<hr>';
echo htmlspecialchars($info4);
echo '<hr>';
echo htmlspecialchars($info5);
echo '<hr>';
echo htmlspecialchars($info6);
echo '<hr>';
echo htmlspecialchars($info7);
echo 'Cost time:' . $cost . '<br />';