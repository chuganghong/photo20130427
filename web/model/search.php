<?php
/**
 * 实现首页搜索框的搜索功能的model部分
 */
startSession();
require('RecommendAlbum.class.php');


if( !isset($_SESSION['yes']) ):
$keyWords = mysql_real_escape_string(trim($keyWords));

$rec = RecommendAlbum::getRecommendAlbumInstance($db);
$sql = "SELECT * FROM album WHERE albumName LIKE '%$keyWords%'";
$data = $rec->getAlbumInfo($sql);

/**
 * 若搜索结果大于200条，则只截取前200条
 */
$maxRows = 200;//设置显示的最大搜索结果数
if( ($rows = count($data))>$maxRows )
{
	$data = array_slice($data,0,$maxRows);
}
elseif( count($data)==0 )
{
	$data = 0;
}

$page_rows = 24;  //每页显示24条   //控制列表页显示的图集数量
//var_dump('rows',$rows);  //test
$sum = ceil($rows/$page_rows);   //总页数
//var_dump('sum',$sum);  //test

$yes = 1;
$_SESSION['yes'] = $yes;
$_SESSION['sum'] = $sum;
$_SESSION['data'] = $data;
$_SESSION['keyWords'] = $keyWords;
endif;

//获取显示分页符所需要的数据

$sum = $_SESSION['sum'];
$data1 = $_SESSION['data'];
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

$start = $currentPage-1;
$num = 24;   //一页显示的搜索结果数量
$offset = ($currentPage-1)*$num;
//针对搜索结果的不同情况做出不同的处理：为数组时，截取部分数据；为0时，直接使其等于0
if(is_array($data1))
{
	$data = array_splice($data1,$offset,$num);
}
else
{
	$data = $data1;

}

$keyWords = $_SESSION['keyWords'];
