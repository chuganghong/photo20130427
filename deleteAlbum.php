<?php
/*
	删除图集
	实现此功能不难，就是很麻烦，流程如下：
	1.获取图集ID
	    漏掉的环节：删除图集的缩略图，即重复第3步。
	2.根据此图集ID获取该图集下的所有图片的数据库信息（主要是图片地址信息）
	3.根据图片地址信息，判断图片是否为服务器图片，若是，删除；若不是，不做处理。
	4.删除图片的数据库信息。
	5.删除图集的数据库信息。
*/
var_dump($_GET);    //TEST
//var_dump($_POST);   //TEST
//{$td[td].topicId}=>{$td[td].albumName}=>{$td[td].thumbUrl}=>{$td[td].id}
include('include.php');
$albumIds = $_GET['albumIds'];
$albumIdArr = explode('~',$albumIds);

$msg = '';
foreach( $albumIdArr as $albumId )
{
	$idArr = explode('=>',$albumId);
	var_dump($idArr);  //test
	//foreach( $idArr as $id )
	//{
		$topicId = _filter($idArr[0]);
		$albumName = _filter($idArr[1]);
		$thumbUrl = _filter($idArr[2]);
		$id = _filter($idArr[3]);
		
		if( file_exists($thumbUrl) )   //检测是否是本地图片，若是
		{
			if( unlink($thumbUrl) )
			{
				$msg = '删除图集 ' . $albumName . ' 缩略图成功。<br />';
				$sql = "DELETE FROM album WHERE id=$id";
				$result = $db->_query($sql);
				$rows = mysql_affected_rows();
				if( $rows>0 )
				{
					$msg .= '删除图集 ' . $albumName . ' 数据库信息成功。<br />';
				}
				else
				{
					$msg .= '删除图集 ' . $albumName . ' 数据库信息失败。<br />';
				}
			}
			else
			{
				$sql = "DELETE FROM album WHERE id=$id";
				$result = $db->_query($sql);
				$rows = mysql_affected_rows();
				if( $rows>0 )
				{
					$msg .= '删除图集 ' . $albumName . ' 数据库信息成功。<br />';
				}
				else
				{
					$msg .= '删除图集 ' . $albumName . ' 数据库信息失败。<br />';
				}
			}
		}
		else     //是网络图片
		{
			$sql = "DELETE FROM album WHERE id=$id";
			$result = $db->_query($sql);
			$rows = mysql_affected_rows();
			if( $rows>0 )
			{
				$msg .= '删除图集 ' . $albumName . ' 数据库信息成功。<br />';
			}
			else
			{
				$msg .= '删除图集 ' . $albumName . ' 数据库信息失败。<br />';
			}
		}
		var_dump($id);  //test
		$sql = "SELECT pictureUrl,id FROM picture WHERE albumId=$id";
		$result = $db->_query($sql);
		var_dump($result);//test
		//var_dump(mysql_fetch_assoc($result));  //test
		while( $row=mysql_fetch_assoc($result) )
		{
			echo 'start while.<br />';  //test
			var_dump($row);   //test
			$pictureUrl = $row['pictureUrl'];
			$picId = $row['id'];
			if( file_exists($pictureUrl) )   //检测是本地图片还是网络图片
			{
				//若是本地图片
				if( unlink($pictureUrl) )
				{
					$msg .= '删除图片 ' . $pictureUrl . ' 成功。<br />';
					$sql = "DELETE FROM picture WHERE id=$picId";
					$result_1 = $db->_query($sql);
					$rows = mysql_affected_rows();
					if( $rows>0 )
					{
						$msg .= '删除图片 ' . $pictureUrl . ' 的数据库信息成功。<br />';
					}
					else
					{
						$msg .= '删除图片 ' . $pictureUrl . ' 的数据库信息失败。<br />';
					}
				}
				else
				{
					$msg .= '删除图片 ' . $pictureUrl . ' 失败。<br />';
				}
				
			}
			else
			{
				//若是网络图片
				$sql = "DELETE FROM picture WHERE id=$picId";
				$result_1 = $db->_query($sql);
				$rows = mysql_affected_rows();
				if( $rows>0 )
				{
					$msg .= '删除图片 ' . $pictureUrl . ' 的数据库信息成功。<br />';
				}
				else
				{
					$msg .= '删除图片 ' . $pictureUrl . ' 的数据库信息失败。<br />';
				}
			}
		}
	//}
}
echo $msg;
			
				
