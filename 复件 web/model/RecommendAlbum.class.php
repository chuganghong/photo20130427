<?php
/*
 * 推荐图集类
 */
class RecommendAlbum
{
	private $db;   //数据库操作类
	
	public function __construct($db)
	{
		$this->db = $db;
	}
	
	/*
	 * 获取图集数据
	 * @param string $sql 查询图集数据的SQL语句
	 * @return array $data 存储图集数据的数组
	 */	
	function getAlbumInfo($sql)
	{		
		$result = $this->db->_query($sql);
		$data = array();
		while( $row=mysql_fetch_assoc($result) )
		{
			$data[] = $row;
		}
		return $data;
	}
	
	
	/**
	 * 获取推荐内容 。此函数可以代替下面的所有函数
	 * @param integer $topicId 栏目ID
	 * @param integer $kind 推荐类型
	 * @param integer $num 推荐数据的数量
	 * @return array $data
	 */
	function getRecData($topicId,$kind,$num)
	{
		$sql = "SELECT album.id,album.albumName,album.thumbUrl,album.topicId FROM album,recommend WHERE album.topicId=$topicId AND album.id=recommend.albumId AND recommend.kind=$kind LIMIT $num";
		$data = $this->getAlbumInfo($sql);
		return $data;
	}
	
	/**
	 * 获取推荐到首页文字的图集数据
	 * @param integer $topicId 栏目ID
	 * @param integer $num 推荐数据的数量
	 * @return array $data 存储推荐到首页文字的图集数据：$data['albumName'],$data['id']
	 */
	function getIndexRecText($topicId,$num)
	{
		//$sql = "SELECT album.albumName,album.id FROM album,recommend WHERE album.topicId=$topicId AND album.id=recommend.albumId AND recommend.kind=2";
		$kind = 2;
		$data = $this->getRecData($topicId,$kind,$num);
		return $data;
	}	
	
	/**
	 * 获取推荐到首页的小图的图集数据
	 * @param integer $topicId 栏目ID
	 * @param integer $num 推荐数据的数量
	 * @return array $data 存储推荐到首页的小图的图集数据：$data['id'],$data['albumName'],$data['thumbUrl']
	 */
	function getIndexRecTinyPic($topicId,$num)
	{
		//$sql = "SELECT album.id,alubm.albumName,album.thumbUrl FROM album,recommend WHERE album.topicId=$topicId AND album.id=recommend.albumId AND recommend.kind=3";
		$kind = 3;
		$data = $this->getRecData($topicId,$kind,$num);
		return $data; 
	}
	
	/**
	 * 获取推荐到其他页面的小图的图集数据
	 * @parm integer $topicId 栏目ID
	 * @param integer $num 推荐数据的数量
	 * @return array $data 存储推荐到其他页面的小图的图集数据
	 */
	function getOtherRecTinyPic($topicId,$num)
	{
		$kind = 4;
		$data = $this->getRecData($topicId,$kind,$num);
		return $data; 
	}
	
	/**
	 * 获取推荐到首页的中图的图集数据
	 * @param integer $topicId 栏目ID
	 * @param integer $num 推荐数据的数量
	 * @return array $data
	 */
	function getIndexRecMediumPic($topicId,$num)
	{
		//$sql = "SELECT album.id,album.albumName,album.thumbUrl FROM album,recommend WHERE album.topicId=$topicId AND album.id=recommend.id AND recommend.kind=1";
		$kind = 1;
		$data = $this->getRecData($topicId,$kind,$num);
		//var_dump($data);  //test
		return $data; 
	}
	
	/**
	 * 获取上一个图集或下一个图集的图集数据
	 * @param integer $albumId 当前图集ID
	 * @param integer $topicId 当前图集的topicId
	 * @param boolean $preNext 获取上一个还是下一个：true--上一个；false--下一个
	 * @return array $data2 上一个图集或下一个图集的数据，是一个一维数组，数组元素$data2['albumName'],$data2['id'],$data2['thumbUrl']
	 */
	function getPreNextAlbum($albumId,$topicId,$preNext)
	{
		if($preNext)
		{
			$sql = "SELECT id,albumName,thumbUrl FROM album WHERE id<$albumId AND topicId=$topicId ORDER BY id DESC LIMIT 1";			
		}
		else
		{
			$sql = "SELECT id,albumName,thumbUrl FROM album WHERE id>$albumId AND topicId=$topicId LIMIT 1";
		}
		$data = $this->getAlbumInfo($sql);
		if(empty($data))
		{
			$data2 = 0;
		}
		else
		{
			$data2 = $data[0];
		}
		return $data2;
	}
	
	/**
	 * 获取最新图集数据
	 * @param integer $start开始值，默认为0
	 * @param integer $num 图集数据数量
	 * @param integer $topicId 图集所属的栏目ID，等于0时，从所有图集数据中选取，不等于0时，从$topicId栏目选取
	 * @return array $data 最新图集数据
	 */
	function getNewAlbum($start=0,$num,$topicId)
	{
		$start1 = $start*$num;
		if($topicId==0)
		{
			$sql = "SELECT * FROM album ORDER BY id DESC LIMIT $start1,$num";
		}
		else
		{
			$sql = "SELECT * FROM album WHERE topicId=$topicId ORDER BY id DESC LIMIT $start1,$num";
		}
		$data = $this->getAlbumInfo($sql);
		return $data;
	}
	
	/**
	 * 获取栏目名称
	 * @param integer $topicId
	 * @return string $name 栏目名称
	 */
	function getTopicName($topicId)
	{
		$sql = "SELECT topicName FROM topic WHERE id=$topicId";
		$data = $this->getAlbumInfo($sql);
		$name = $data[0]['topicName'];
		return $name;
	}
	
	/**
	 * 获取栏目ID
	 * @param integer $albumId 图集ID
	 * @retrun integer $topicId 栏目ID
	 */
	function getTopicId($albumId)
	{
		$sql = "SELECT topicId FROM album WHERE id=$albumId";
		$data = $this->getAlbumInfo($sql);
		$topicId = $data[0]['topicId'];
		return $topicId;
	}
	
	/**
	 * 获取图集名称
	 * @param integer $albumId
	 * @return string $name 图集名称
	 */
	function getAlbumName($albumId)
	{
		$sql = "SELECT albumName FROM album WHERE id=$albumId";
		$data = $this->getAlbumInfo($sql);
		$name = $data[0]['albumName'];
		return $name;
	}
	
	/**
	 * 获取一个图集的图片数据
	 * @param integer $albumId 图集ID
	 * @return array $data 存储一个图集的所有图片数据的数组
	 */
	function getAllPicOfAlbum($albumId)
	{
		//$sql = "SELECT * FROM picture WHERE albumId=$albumId";
		//$data = $this->db->_query($sql);
		$sql = "SELECT * FROM picture WHERE albumId=$albumId";
		$data = $this->getAlbumInfo($sql);
		return $data;
	}
	
	/**
	 * 获取所有的栏目数据
	 * @param integer $num 获取栏目的数量
	 * @return array $data 存储所有栏目数据的二维数组，$data[n]['id'],$data[n]['topicName']
	 */
	function getAllTopic($num)
	{
		$sql = "SELECT * FROM topic LIMIT $num";
		$data = $this->getAlbumInfo($sql);
		return $data;
	}
	
	

	/**
	 *提供前端首页小图所需要的数据
	 *@return $data 存储所需数据的数组，是二维数组，$data['new']是最新上传的图集，$data['Jpan']是日本美女图集
	 *$data['sex']是性感美女图集，$data['girl']是清纯美女图集，$data['Korea']是韩国美女图集
	 */
	function getAlbumInfos()
	{
		//获取最新加入的图集数据
		$sql1 = "SELECT albumName FROM album ORDER BY id DESC LIMIT 11";
		$data1 = getAlbumInfo($sql1);
	
		//获取图集到首页的小图的图集
		$sql2 = "SELECT album.id,album.albumName,album.thumbUrl,album.topicId FROM album,recommend WHERE album.topicId=1 AND album.id=recommend.albumId AND recommend.kind=3 LIMIT 12";
		$data2 = getAlbumInfo($sql2);
		$sql3 = "SELECT album.id,album.albumName,album.thumbUrl,album.topicId FROM album,recommend WHERE album.topicId=2 AND album.id=recommend.albumId AND recommend.kind=3 LIMIT 8";
		$data3 = getAlbumInfo($sql3);
		$sql4 = "SELECT album.id,album.albumName,album.thumbUrl,album.topicId FROM album,recommend WHERE album.topicId=3 AND album.id=recommend.albumId AND recommend.kind=3 LIMIT 8";
		$data4 = getAlbumInfo($sql4);
		$sql5 = "SELECT album.id,album.albumName,album.thumbUrl,album.topicId FROM album,recommend WHERE album.topicId=4 AND album.id=recommend.albumId AND recommend.kind=3 LIMIT 8";
		$data5 = getAlbumInfo($sql4);
		$data['new'] = $data1;
		$data['Japan'] = $data2;
		$data['sex'] = $data3;
		$data['girl'] = $data4;
		$data['Korea'] = $data5;	
		return $data;
	}	
}

interface NewAlbums
{
	public function getNewAlbums($start);
}

interface TinyPic
{
	public function getTinyPic();
}

interface OTinyPic
{
	public function getOTinyPiC();  //获取非主页的推荐小图图集数据
}

interface MediumPic
{
	public function getMediumPic();

}

interface Text
{
	public function getText();
}

interface PreNextAlbum
{
	public function getPreAlbum($albumId);
	public function getNextAlbum($albumId);
}

abstract class IndexPart
{
	protected $topicName;
	protected $tinyPic;
	protected $topicId;	

	protected $recommendAlbum;

	function __construct($recommendAlbum,$topicId)
	{
		$this->recommendAlbum = $recommendAlbum;
		$this->topicId = $topicId;
	}

	function getTopicName()
	{
		$topicId = $this->topicId;
		$data = $this->recommendAlbum->getTopicName($topicId);
		//$topicName = $data[0]['topicName'];
		return $data;
	}
	
	function getAlbumName($albumId)
	{
		$data = $this->recommendAlbum->getAlbumName($albumId);
		//$topicName = $data[0]['topicName'];
		return $data;
	}
}