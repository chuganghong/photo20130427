<?php
class db
{
	protected $con;
	protected $result;
	
	function __construct($host,$root,$pwd,$db)
	{
		$this->con = mysql_connect($host,$root,$pwd) or die('Could not connect:' . mysql_error());
		mysql_select_db($db,$this->con) or die('Could not use ' . $db . ':' . mysql_error());
	}
	
	function _query($sql)
	{
		mysql_query('SET NAMES UTF8');
		$this->result = mysql_query($sql,$this->con) or die('SQL \"' . $sql . '\" error:' . mysql_error());
		return $this->result;
	}
}
		