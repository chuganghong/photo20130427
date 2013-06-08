<?php
function _filterStr($input)  //过滤非数组数据
{
	$data = trim($input);
	$data = mysql_real_escape_string($input);
	return $data;
}

function _filter($input)   //过滤数据
{
	if( is_array($input) )
	{
		foreach( $input as $key=>$value )
		{
			$data[$key] = _filterStr($value);
		}
	}
	else
	{
		$data = _filterStr($input);
	}
	return $data;
}

