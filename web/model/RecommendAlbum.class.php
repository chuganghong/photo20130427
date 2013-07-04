<?php
/*
 * 推荐图集类
 */
class RecommendAlbum
{
	private $db;   //数据库操作类
	static private $instance;   //本类实例
	
	private function __construct($db)
	{
		$this->db = $db;
	}
	
	/**
	 * 获取本类的实例，单例模式
	 * @param object $db  //数据类的实例
	 * @return object RecommendAlbum   //本类的实例
	 */
	static public function getRecommendAlbumInstance($db)
	{
		if( self::$instance==null )
		{
			self::$instance = new RecommendAlbum($db);
		}
		return self::$instance;
	}
	
	/**
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
	 *提供前端首页小图所需要的数据，没有使用，已经被其他方法取代，保留它是因为SQL语句可供学习
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

/**
 * 获取最新发表图集的接口
 * @author ggh
 *
 */
interface NewAlbums
{
	/**
	 * 获取最新发表图集
	 * @param integer $start SQL语句中LIMIT $start,$length中的start
	 */	
	public function getNewAlbums($start);
}

/**
 * 获取类似于首页小图推荐图集数据的接口
 * @author ggh
 *
 */
interface TinyPic
{
	/**
	 * 获取类似于首页小图推荐图集数据
	 */
	public function getTinyPic();
}

/**
 * 获取非主页的推荐小图图集数据
 */
interface OTinyPic
{
	/**
	 * 获取非主页的推荐小图图集数据
	 */
	public function getOTinyPiC(); 
}

/**
 * 获取首页中图推荐图集数据的接口
 * @author ggh
 *
 */
interface MediumPic
{
	/**
	 * 获取首页中图推荐图集数据
	 */
	public function getMediumPic();

}
/**
 * 获取首页中图推荐推荐下方的文字图集图集数据的接口
 * @author ggh
 *
 */
interface Text
{
	/**
	 * 获取首页中图推荐推荐下方的文字图集图集数据
	 */
	public function getText();
}
/**
 * 获取图片展示页面pic.php图片下方的”上一篇“和”下一篇“图集数据的接口
 * @author ggh
 *
 */
interface PreNextAlbum
{
	/**
	 * 获取图片展示页面pic.php图片下方的”上一篇“图集数据
	 * @param integer $albumId 当前图集ID
	 */
	public function getPreAlbum($albumId);
	/**
	 * 获取图片展示页面pic.php图片下方的”下一篇“图集数据
	 * @param integer $albumId 当前图集ID
	 */
	public function getNextAlbum($albumId);
}

/**
 * 获取页面版块的数据，并非只是首页版块，类名需更改
 * 
 */
abstract class IndexPart
{
	protected $topicName; //栏目名称
	protected $tinyPic;   //小图
	protected $topicId;	  //栏目ID

	protected $recommendAlbum; //获取所属数据操作的基础类

	/**
	 * 构造函数
	 * @param Object $recommendAlbum获取所属数据操作的基础类
	 * @param integer $topicId 栏目ID
	 */
	function __construct($recommendAlbum,$topicId)
	{
		$this->recommendAlbum = $recommendAlbum;
		$this->topicId = $topicId;
	}

	/**
	 * 根据栏目ID获取栏目名称
	 * @return string $data 栏目名称
	 */
	function getTopicName()
	{
		$topicId = $this->topicId;
		$data = $this->recommendAlbum->getTopicName($topicId);		
		return $data;
	}
	
	/**
	 * 根据图集ID获取图集名称
	 * @param integer $albumId 图集ID
	 * @return string $data 图集名称
	 */
	function getAlbumName($albumId)
	{
		$data = $this->recommendAlbum->getAlbumName($albumId);		
		return $data;
	}
}