<?php
/**
 * 提供栏目信息
 * array $data 存储栏目信息的数组
 */
$sql = "SELECT * FROM topic";
$result = $db->_query($sql);
while( $row=mysql_fetch_assoc($result) )
{
	$data[] = $row;
}

if( !isset($data) )
{
	$data = array();
}