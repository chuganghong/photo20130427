<?php
class admin
{
	protected $db;
	
	function __construct($db)
	{
		$this->db = $db;
	}
	
	
	function checkSession()   //检测是否开始了session
	{
		if( !isset($_SESSION) )
		{
			session_start();
		}
	}
	
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
	
	function login($name,$pwd)
	{
		//$name = $namePwd[0];
		//$pwd = MD5($namePwd[1]);
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
	
	function logout()
	{
		$this->checkSession();//调用类方法
		unset($_SESSION['admin']);
		session_destroy();
	}
	
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
	
	function selectAlbumPic($albumId)    //根据图集ID来选取数据库中的图片
	{
		$sql = "SELECT * FROM picture WHERE albumId=$albumId";
		$result = $this->db->_query($sql);
		$arr = array();
		
		while( $row = mysql_fetch_assoc($result) )
		{
			var_dump($row);  //test
			//$datas[] = $row;
			$arr[] = $row;
			var_dump($arr);  //test
		}
		//return $datas;
		
		return $arr;
	}
	
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
	
	function deleteThumb($albumId)    //根据缩略图地址来删除服务器上的缩略图
	{
		$sql = "SELECT thumbUrl FROM album WHERE id=$albumId";
		$result = $this->db->_query($sql);
		$row = mysql_fetch_assoc($result);
		$thumbUrl = $row['thumbUrl'];
		
		$msg = '';
		
		if( $this->deletePicLocal($thumbUrl) )   //删除服务器上的文件
		{
			$msg .= '删除缩略图 ' . $thumbUrl . ' 成功。<br />';
		}
		else
		{
			$msg .= '删除缩略图   ' . $thumbUrl . ' 失败。<br />';
		}
		return $msg;
	}
	
	function deleteAlbum($albumId)    //根据图集ID来删除图集
	{
		$datas = $this->selectAlbumPic($albumId);    //根据图集ID来选取数据库中的图片
		//var_dump($datas);   //test
		$msg = '';
		//删除图集中的图片，服务器上
		foreach( $datas as $data )
		{
			echo 'start foreach<br />';   //test
			$filePath = $data['pictureUrl'];
			if($this->deletePicLocal($filePath))   //删除服务器上的文件
			{
				$msg .= '删除服务器上的图片 ' . $filePath . ' 成功。<br />';
			}
			else
			{
				$msg .= '删除服务器上的图片 ' . $filePath . ' 失败。<br />';
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
	
	function addAlbum($albumName,$cover,$topicId)  //增加图集
	{
		$sql = "INSERT INTO album (albumName,thumbUrl,topicId) VALUES ('$albumName','$cover',$topicId)";
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
	
	function editAlbum($albumName,$cover,$topicId,$albumId)  //编辑图集
	{
		var_dump($cover);   //test
		//$this->deletePicLocal($cover);   //删除服务器上的文件，原缩略图，若返回true或false，不方便给出提示信息。
		if( $cover )
		{
			$msg = $this->deleteThumb($albumId);    //根据缩略图地址来删除服务器上的缩略图
			echo $msg . '<br />';
				
			$sql = "UPDATE album SET albumName='$albumName',thumbUrl='$cover',topicId=$topicId WHERE id=$albumId";
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