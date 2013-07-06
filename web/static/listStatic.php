<?php
/**
 * 网站前端系统图片列表页list.php的HTML化
 * 由于本网站设置为只提供topicID最大为20的图片数据，故网页HTML化也首次限制
 * 2013年7月5日 17点24分
 */
require('../common/include.php');
$tpl = dirname(dirname($_SERVER['SCRIPT_FILENAME'])) . '/templates/';

require(dirname(dirname($_SERVER['SCRIPT_FILENAME'])) . '/model/RecommendAlbum.class.php');
require('header.php');  //提供topicData（显示栏目名称）等数据
require('Page.class.php');   //分页符
if(class_exists('Page'))
{
	print 'exists';
}
else
{
	print 'not exists';
}
//var_dump(get_declared_classes());  //test
var_dump(get_included_files());  //test
$list = RecommendAlbum::getRecommendAlbumInstance($db);
$maxTopicId = 8;
$num = 24;   //控制列表页显示的图集数量
for($i=1;$i<=$maxTopicId;$i++)
{
	$topicId = $i;
	$sql = "SELECT * FROM album WHERE topicId=$i";
	$data = $list->getAlbumInfo($sql);
	$sum = ceil(count($data)/$num);   //该图集列表的总页数
	for($n=1;$n<=$num;$n++)
	{
		$currentPage = $n;   //当前页数
		require('staticList.php');
	}
}




