<?php
/**
 * 数据库操作类
 * @author ggh
 *
 */
class db
{
	protected $con;  //数据库连接
	protected $result; //数据库查询结果
	
	/**
	 * 构造函数，建立到指定数据库服务器的连接，并选择指定的数据库
	 * @param string $host  数据库服务器
	 * @param string $root  登录数据库服务器的用户名
	 * @param string $pwd   登录数据库服务器的密码
	 * @param string $db    要操作的数据库
	 */
	function __construct($host,$root,$pwd,$db)
	{
		$this->con = mysql_connect($host,$root,$pwd) or die('Could not connect:' . mysql_error());
		mysql_select_db($db,$this->con) or die('Could not use ' . $db . ':' . mysql_error());
	}
	
	/**
	 * 执行数据库查询操作，并返回查询结果
	 * @param string $sql SQL语句
	 * @return $this->result 查询结果
	 */
	function _query($sql)
	{
		mysql_query('SET NAMES UTF8');
		$this->result = mysql_query($sql,$this->con) or die('SQL \"' . $sql . '\" error:' . mysql_error());
		return $this->result;
	}
}
		