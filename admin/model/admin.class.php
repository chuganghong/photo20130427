<?php
/**
 * 图片站管理员类
 * @author ggh
 */
class admin
{
	protected $db;
	
	/**
	 * 构造函数，将数据库操作类db引入管理员类admin
	 * @param object $db 是数组库操作类的对象
	 */
	function __construct($db)
	{
		$this->db = $db;
	}
	
	/**
	 * 检测是否开启了session
	 */
	function checkSession()   //检测是否开始了session
	{
		if( !isset($_SESSION) )
		{
			session_start();
		}
	}
	/**
	 * 管理员注册
	 * @param string $name 注册用户名
	 * @param string $pwd 注册密码
	 * @return boolean 注册成功true，注册失败false
	 */
	function register($name,$pwd)     //注册
	{
		
		$sql = "INSERT INTO admin ( account,password ) SELECT '$name','$pwd' FROM dual WHERE NOT EXISTS(SELECT * FROM admin WHERE account='$name' AND password='$pwd')";
		//$sql = "INSERT INTO admin (nickname,password) VALUES ('$name','$pwd')";
		$result = $this->db->_query($sql);
		$rows = mysql_affected_rows();
		if( $rows>0 )
		{
			echo '>0<br />';  //test
			$this->checkSession();
			$_SESSION['adminName'] = $name;
			return true;
		}
		else
		{
			return false;
		}
	}
	
	/**
	 * 管理员登录
	 * @param string $name 登录用户名
	 * @param string $pwd  登录密码
	 * @return boolean 登录成功返回true，登录失败返回false
	 */
	//function login( string $name,string $pwd)//这种写法不能正确运行
	function login( $name,$pwd)
	{
		
		$name = $name;
		$pwd = MD5($pwd);
		
		$sql = "SELECT (id) AS rows FROM admin WHERE nickname='$name' AND password='$pwd'";
		$result = $this->db->_query($sql);
		$row = mysql_fetch_assoc($result);
		$nums = $row['rows'];
		if( $nums>0 )
		{
			$this->checkSession();//调用类方法
			$_SESSION['adminName'] = $name;
			return true;
		}
		else
		{
			return false;
		}
	}
	
	/**
	 * 管理员退出登录
	 * @return void
	 */
	function logout()
	{
		$this->checkSession();//调用类方法
		unset($_SESSION['admin']);
		session_destroy();
	}
	
	/**
	 * 删除服务器上的文件，主要是图片
	 * @param string $filePath 文件在服务器上的路径，
	 * @return boolean 删除成功返回true，删除失败返回false
	 */
	function deletePicLocal($filePath)   //删除服务器上的文件
	{
		if( file_exists($filePath) )
		{
			if( unlink($filePath) )
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return true;
		}
	}
	
	/**
	 * 根据图片ID删除数据库中的图片信息
	 * @param integer $picId 图片ID
	 * @return boolean 删除成功返回true，删除失败返回false
	 */
	function deletePicDataPicId($picId)    //根据图片ID删除数据库中的图片信息
	{
		$sql = "DELETE FROM picture WHERE id=$picId";
		$result = $this->db->_query($sql);
		$rows = mysql_affected_rows();
		if( $rows>0 )
		{
			return true;   //删除成功。
		}
		else
		{
			return false;
		}
	}
	
	/**
	 * 根据图集ID来删除数据库中的图片信息
	 * @param integer $albumId 图集ID
	 * @return boolean 删除成功返回true，删除失败返回false
	 */
	function deletePicDataAlbumId($albumId)    //根据图集ID来删除数据库中的图片信息
	{
		$sql = "DELETE FROM picture WHERE albumId=$albumId";
		$result = $this->db->_query($sql);
		$rows = mysql_affected_rows();
		if( $rows>0 )
		{
			return true;   //删除成功
		}
		else
		{
			return false;
		}
	}
	
	/**
	 * 根据图集ID来选取数据库中的图片
	 * @param integer $albumId 图集ID
	 * @return multitype:multitype:array $arr 存储图片信息的数组
	 */
	function selectAlbumPic($albumId)    //根据图集ID来选取数据库中的图片
	{
		$sql = "SELECT * FROM picture WHERE albumId=$albumId";
		$result = $this->db->_query($sql);
		$arr = array();
		
		while( $row = mysql_fetch_assoc($result) )
		{
			//var_dump($row);  //test
			//$datas[] = $row;
			$arr[] = $row;
			//var_dump($arr);  //test
		}
		//return $datas;
		
		return $arr;
	}
	
	/**
	 * 根据图集ID删除数据库中的图集信息
	 * @param integer $albumId  图集ID
	 * @return boolean 删除成功返回true，删除失败返回false
	 */
	function deleteAlbumData($albumId)    //根据图集ID删除数据库中的图集信息
	{
		$albumId = mysql_real_escape_string($albumId);
		$sql = "DELETE FROM album WHERE id=$albumId";
		$result = $this->db->_query($sql);
		$rows = mysql_affected_rows();
		if( $rows>0 )
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	/**
	 * 根据缩略图地址来删除服务器上的缩略图
	 * @param integer $albumId 图集ID
	 * @return string $msg 删除了哪些文件，删除是失败还是成功等信息
	 */
	function deleteThumb($albumId)    //根据缩略图地址来删除服务器上的缩略图
	{
		$sql = "SELECT thumbUrl,ln FROM album WHERE id=$albumId";
		$result = $this->db->_query($sql);
		$row = mysql_fetch_assoc($result);
		$thumbUrl = $row['thumbUrl'];
		$thumbUrl = $_SERVER['DOCUMENT_ROOT'] . $thumbUrl;
		$ln = $row['ln'];
		
		
		$msg = '';
		
		if( $ln==1 )://若缩略图存储在本地
		if( $this->deletePicLocal($thumbUrl) )   //删除服务器上的文件
		{
			$msg .= '删除缩略图 ' . $thumbUrl . ' 成功。<br />';
		}
		else
		{
			$msg .= '删除缩略图   ' . $thumbUrl . ' 失败。<br />';
		}
		endif;
		return $msg;
	}
	
	/**
	 * 根据图集ID来删除图集
	 * @param integer $albumId 图集ID
	 * @return string $msg 删除了那些文件，是成功还是失败等信息
	 */
	function deleteAlbum($albumId)    //根据图集ID来删除图集
	{
		$datas = $this->selectAlbumPic($albumId);    //根据图集ID来选取数据库中的图片
		//var_dump($datas);   //test
		$msg = '';
		//删除图集中的图片，服务器上
		foreach( $datas as $data )
		{
			echo 'start foreach<br />';   //test
			$filepath = $data['pictureUrl'];
			$filepath = $_SERVER['DOCUMENT_ROOT'] . $filepath;
			if($this->deletePicLocal($filepath))   //删除服务器上的文件
			{
				$msg .= '删除服务器上的图片 ' . $filepath . ' 成功。<br />';
			}
			else
			{
				$msg .= '删除服务器上的图片 ' . $filepath . ' 失败。<br />';
			}
		}
		
		//删除图集中的图片，数据库中
		
		if($this->deletePicDataAlbumId($albumId))    //根据图集ID来删除数据库中的图片信息	
		{
			$msg .= '删除图集 ' . $albumId . ' 成功。<br />';
		}
		else
		{
			$msg .= '删除图集 ' . $albumId . ' 失败。<br />';
		}
		
		$msg .= $this->deleteThumb($albumId);    //根据缩略图地址来删除服务器上的缩略图
		
		if( $this->deleteAlbumData($albumId) )    //根据图集ID删除数据库中的图集信息
		{
			$msg .= '删除图集 ' . $albumId . ' 数据库信息成功。<br />';
		}
		else
		{
			$msg .= '删除图集 ' . $albumId . ' 数据库信息失败。<br />';
		}
		
		return $msg;
	}	
	
	/**
	 * 增加图集
	 * @param string $albumName 图集名称
	 * @param string $cover 图集封面即缩略图地址
	 * @param integer $topicId 图集所属的栏目的ID
	 * @param integer $ln 识别图集封面是存储到服务器上的图片还是引用网络图片，存储到服务器时值为1，引用网络图片时值为0
	 * @return boolean 增加图集成功返回true，失败返回false
	 */
	function addAlbum($albumName,$cover,$topicId,$ln)  //增加图集
	{
		$sql = "INSERT INTO album (albumName,thumbUrl,topicId,ln) VALUES ('$albumName','$cover',$topicId,$ln)";
		$result = $this->db->_query($sql);
		$rows = mysql_affected_rows();
		if( $rows>0 )
		{
			return true;
			//$msg = '增加图集 ' . $albumName . ' 成功。<br />';
		}
		else
		{
			return false;
			//$msg = '增加图集 ' . $albumName . ' 失败。<br />';
		}
	}
	
	/**
	 * 编辑图集
	 * @param string $albumName 图集名称
	 * @param string $cover 图集缩略图地址
	 * @param integer $topicId 图集所属的栏目的ID
	 * @param integer $albumId 图集ID
	 * @param unknown_type $ln 识别图集封面是存储到服务器上的图片还是引用网络图片，存储到服务器时值为1，引用网络图片时值为0
	 * @return boolean 编辑成功时返回true，编辑失败时返回false
	 */
	function editAlbum($albumName,$cover,$topicId,$albumId,$ln)  //编辑图集
	{
		var_dump($cover);   //test
		//$this->deletePicLocal($cover);   //删除服务器上的文件，原缩略图，若返回true或false，不方便给出提示信息。
		if( $cover )
		{
			$msg = $this->deleteThumb($albumId);    //根据缩略图地址来删除服务器上的缩略图
			echo $msg . '<br />';				
			$sql = "UPDATE album SET albumName='$albumName',thumbUrl='$cover',topicId=$topicId,ln=$ln WHERE id=$albumId";
		}
		else
		{
				$sql = "UPDATE album SET albumName='$albumName',topicId=$topicId WHERE id=$albumId";
		}
		$result = $this->db->_query($sql);
		$rows = mysql_affected_rows();
		if( $rows>0 )
		{
			return true;
			//$msg = '增加图集 ' . $albumName . ' 成功。<br />';
		}
		else
		{
			return false;
			//$msg = '增加图集 ' . $albumName . ' 失败。<br />';
		}		
	}
}