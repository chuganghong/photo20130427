<?php
define('SITE',dirname(dirname(dirname($_SERVER['SCRIPT_FILENAME']))));
set_include_path(get_include_path() . PATH_SEPARATOR . SITE . '/admin/model');
set_include_path(ini_get('include_path') . PATH_SEPARATOR . SITE . '/web/model');
set_include_path(get_include_path() . PATH_SEPARATOR . SITE . '/lib');

require('db.class.php');
require('Smarty.class.php');
$host = 'localhost';
$root = 'root';
$pwd = '';
$db = 'photo';
$db = new db($host,$root,$pwd,$db);
$smarty = new Smarty;

/**
 * 开启session会话
 */
function startSession()
{
	if( !isset($_SESSION) )
	{
		session_start();
	}
}