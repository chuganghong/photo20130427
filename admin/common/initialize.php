<?php
$root = dirname(dirname(dirname($_SERVER['SCRIPT_FILENAME'])));
$root2 = $_SERVER['SERVER_NAME'];
//var_dump($root);  //test

define('DH',$root2 . '/GitHub/photo20130427/');
define('DR',$root . '/');   //网站根目录
define('SMARTY_DIR',$root . '/lib/');   //smarty目录
define('MODEL',$root . '/admin/model/');   //admin下的model目录
define('TPL',$root . '/admin/templates/');  //admin下的templates目录
define('CONTROLLER',$root . 'admin/controller/');   //admin下的controller目录
define('COMMON',$root . 'admin/common/');    //admin下的common目录
//var_dump($path);  //test
$include_path = DR . PATH_SEPARATOR . SMARTY_DIR . PATH_SEPARATOR . MODEL . PATH_SEPARATOR . TPL . PATH_SEPARATOR . CONTROLLER . PATH_SEPARATOR . COMMON;
//var_dump($include_path);  //test

set_include_path(get_include_path() . PATH_SEPARATOR . $include_path);
//var_dump($_SERVER['SCRIPT_FILENAME']);  //test
//var_dump(get_include_path());//test
//var_dump(get_include_path());//test


//var_dump(SMARTY_DIR);  //test
require_once('Smarty.class.php');
require_once('db.class.php');
$smarty = new Smarty;
$db = new db('localhost','root','','photo');
