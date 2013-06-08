<?php
/**
 *提供前端首页所需要的数据
 */


 
function getAlbumInfo($db,$sql)
{
	//$sql1 = "SELECT albumName FROM album ORDER BY id DESC LIMIT 10";
	$result = $db->_query($sql);
	$data = array();
	while( $row=mysql_fetch_assoc($result) )
	{
		$data[] = $row;
	}
	return $data;
}

/**
 *提供前端首页小图所需要的数据
 *@return $data 存储所需数据的数组，是二维数组，$data['new']是最新上传的图集，$data['Jpan']是日本美女图集
 *$data['sex']是性感美女图集，$data['girl']是清纯美女图集，$data['Korea']是韩国美女图集
 */
function getAlbumInfos($db)
{
	//获取最新加入的图集数据
	$sql1 = "SELECT albumName FROM album ORDER BY id DESC LIMIT 10";
	$data1 = getAlbumInfo($db,$sql1);	
	
	//获取图集到首页的小图的图集
	$sql2 = "SELECT album.id,album.albumName,album.thumbUrl,album.topicId FROM album,recommend WHERE album.topicId=1 AND album.id=recommend.albumId AND recommend.kind=3";
	$data2 = getAlbumInfo($db,$sql2);
	$sql3 = "SELECT album.id,album.albumName,album.thumbUrl,album.topicId FROM album,recommend WHERE album.topicId=2 AND album.id=recommend.albumId AND recommend.kind=3";
	$data3 = getAlbumInfo($db,$sql3);
	$sql4 = "SELECT album.id,album.albumName,album.thumbUrl,album.topicId FROM album,recommend WHERE album.topicId=3 AND album.id=recommend.albumId AND recommend.kind=3";
	$data4 = getAlbumInfo($db,$sql4);
	$sql5 = "SELECT album.id,album.albumName,album.thumbUrl,album.topicId FROM album,recommend WHERE album.topicId=4 AND album.id=recommend.albumId AND recommend.kind=3";
	$data5 = getAlbumInfo($db,$sql4);
	$data['new'] = $data1;
	$data['Japan'] = $data2;
	$data['sex'] = $data3;
	$data['girl'] = $data4;
	$data['Korea'] = $data5;
	
	return $data;
}

$data = getAlbumInfos($db);

	

