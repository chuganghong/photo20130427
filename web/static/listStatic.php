<?php
/**
 * 网站前端系统图片列表页list.php的HTML化
 * 由于本网站设置为只提供topicID最大为20的图片数据，故网页HTML化也受次限制
 * 此代码经测试，可以正常使用。写此代码时，对Page.class.php的调用导致的错误，我花了大量的时间才找出来。
 * 原因是粗心，没有仔细看，没有认真思考，测试时只是多次运行原代码，没有思考测试方法。
 * 此问题提醒我：类的命名不能相同，若类实在太多，就要考虑使用命名空间。但是我没有掌握命名空间的用法。
 * 2013年7月5日 17点24分
 */
set_time_limit(0);
require('../common/include.php');
$tpl = dirname(dirname($_SERVER['SCRIPT_FILENAME'])) . '/templates/';

//require(dirname(dirname($_SERVER['SCRIPT_FILENAME'])) . '/model/RecommendAlbum.class.php');
require('RecommendAlbum.class.php');
require('header.php');  //提供topicData（显示栏目名称）等数据

require('PageW.class.php');   //分页符



/**
 * 获取下方栏目“推荐美女”的图集数据
 * ListPartA\ListPartB两个类都是冗余代码，它们是从albumListData.php中copy而来的
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



/*
 * 检测类是否定义
var_dump(get_included_files());




if(class_exists('PagePic'))
{
	print 'exists';
}
else
{
	print 'not exists';
}
*/

//var_dump(get_declared_classes());  //test
//var_dump(get_included_files());  //test
$recommendAlbum = RecommendAlbum::getRecommendAlbumInstance($db);
$maxTopicId = 8;
$num = 24;   //控制列表页显示的图集数量
for($i=1;$i<=$maxTopicId;$i++)
{
	$topicId = $i;	
	$partA = new ListPartA($recommendAlbum, $topicId);
	$AName = $partA->getTopicName();	
	
	//获取下方推荐数据
	$partB = new ListPartB($recommendAlbum, $topicId);
	$BRecAlbums = $partB->getOTinyPiC();
	
	$sql = "SELECT * FROM album WHERE topicId=$i";
	$data = $recommendAlbum->getAlbumInfo($sql);
	$sum = ceil(count($data)/$num);   //该图集列表的总页数
	for($n=1;$n<=$sum;$n++)
	{
		$currentPage = $n;   //当前页数
		$start = $currentPage-1;
		$ANewAlbums = $partA->getNewAlbums($start);		
		require('staticList.php');
	}
}




