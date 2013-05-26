<?php
$path = dirname(dirname($_SERVER['SCRIPT_FILENAME'])) . '/lib/';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
//var_dump($_SERVER['SCRIPT_FILENAME']);  //test
//var_dump(get_include_path());//test

define('SMARTY_DIR',$path);
//var_dump(SMARTY_DIR);  //test
require_once('Smarty.class.php');
require_once('db.class.php');
$smarty = new Smarty;
$db = new db('localhost','root','','photo');










 
 

