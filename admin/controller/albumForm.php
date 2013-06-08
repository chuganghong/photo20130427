<?php
/*
	图集管理FORM
*/
require_once('../common/include.php');
if( !isset($_GET['which']) )
{
	die();
}
$which = $_GET['which'];

$admin = new admin($db);

$sql = "SELECT * FROM topic";
$result = $db->_query($sql);
while( $row = mysql_fetch_assoc($result) )
{
	$topicName[$row['id']] = $row['topicName'];
}

$smarty->assign('topicName',$topicName);


if( $which=='add' )
{
	//新增图集
	$action = '../model/addAlbum.php';
	$value = '保存';
	$src = '';
	
	$smarty->assign('action',$action);
	$smarty->assign('value',$value);
	$smarty->assign('which',$which);
	$smarty->assign('src',$src);
	
	$smarty->assign('thumbId','');
	$smarty->assign('topicId','');
	$smarty->assign('albumName','');
	
	//$smarty->assign('ln','');
	$smarty->assign('thumbUrl','');
	
	
	$smarty->assign('albumId','');
	
	$smarty->assign('isAllow',1);
	
	$smarty->display( TPL . 'albumForm.tpl');
	
}
else if( $which=='edit' )
{
	//编辑图集
	
	$id = $_GET['id'];
	$values = explode('=>',$id);
	$topicId = $values[0];
	$albumName = $values[1];
	$thumbUrl = $values[2];   //暂不使用
	$albumId = $values[3];
	$ln = $values[4];   //是网络图片还是本地图片，1为本地，0为网络
	
	$host = 'http://' . $_SERVER['HTTP_HOST'];    //与从数据库中取出的缩略图地址一起使用
	
	if( $ln )
		$thumbUrl = $host . '/' . $thumbUrl;
	
	
		
	$action = '../model/editAlbum.php';
	$value = '更新';
		
	//$smarty->assign('action',$action);
	$smarty->assign('value',$value);
	$smarty->assign('which',$which);
	
	
	$smarty->assign('thumbUrl',$thumbUrl);
	$smarty->assign('topicId',$topicId);
	$smarty->assign('albumName',$albumName);
	
	$smarty->assign('albumId',$albumId);	
	
	$smarty->assign('isAllow',0);//这有什么作用？
	
	//$smarty->assign('rec',$data);//推荐到首页等所需要的数据
	
	/*推荐到首页等所需要的数据，因smarty中的循环不能方便地实现输出，故用这种方法*/
	
	$albumId = _filterStr($albumId);
	$data = $admin->getRec($albumId);  //获取推荐到首页等的记录
	
	$rec = '';
	$tips = array('推荐到首页中图','推荐到首页文字','推荐到首页小图','推荐到图片展示页的精选');
	for($i=1;$i<=4;$i++)
	{
		if(in_array($i,$data) )
		{
			$rec .= '<input type="checkbox" name="rec[]" value="' . $i . '" checked="true" />' . $tips[$i-1];
		}
		else
		{
			$rec .= '<input type="checkbox" name="rec[]" value="' . $i . '" />' . $tips[$i-1];
		}		
	}
	
	$jsonRec = json_encode($data);   //将旧的recommend记录转为json形式
	//$RecStr = serialize($data);
	//$RecStr = addslashes($RecStr);
	//var_dump($RecStr);  //test
	
	//var_dump($jsonRec);  //test
	//$action .= '?oldRec=' . $jsonRec;
	//$action .= '?oldRec=' . $RecStr;
	//var_dump($action);  //test
	$smarty->assign('action',$action);
	
	
	$rec .= '<input type="input" name="oldRec" value=' . $jsonRec . ' /><br />';
	
	$smarty->assign('recommend',$rec);
	/*推荐到首页等所需要的数据，因smarty中的循环不能方便地实现输出，故用这种方法*/
	
	$smarty->display( TPL . 'albumForm2.tpl');
}

