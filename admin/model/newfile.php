<?php
/**
 * 提供图片信息
 *interge $length 每页显示的图片数量
 * array $td 每页显示的图片的信息，数组
 */
$sql2 = "SELECT COUNT(id) FROM picture";
$result = $db->_query($sql2);
$row = mysql_fetch_row($result);
$num = $row[0];
$length = 20;   //每页显示的数量
$sumPage = ceil($num/$length);   //总页数

if( isset($_GET['page']) )
{
	$currentPage = $_GET['page'];
}
else
{
	$currentPage = 1;
}

$start = ($currentPage-1)*$length;
$sql = "SELECT * FROM picture ORDER BY id DESC LIMIT $start,$length";
//$sql = "SELECT * FROM picture ORDER BY id DESC";
$result = $db->_query($sql);
while( $row=mysql_fetch_assoc($result) )
{
	$td[] = $row;
}
if( !isset($td) )
{
	$td = array();
}
