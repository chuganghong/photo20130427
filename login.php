<?php
/*
	处理登录请求
	2013/04/28修改：
	1.把处理登录的代码移到了admin.class.php中
*/
include('include.php');
$which = $_POST['which'];

$name = _filter($_POST['userName']);
$pwd =  _filter($_POST['password']);
//$pwd = MD5($pwd);


if( $which=='admin' )
{
	//管理员登录
	/*
	$sql = "SELECT * FROM admin WHERE nickname='$name' AND password='$pwd'";
	$result = $db->_query($sql);
	$rows = mysql_num_rows($result);
	*/
	$admin = new admin($db);
	if( $admin->login($name,$pwd) )
	{
		//登录成功
		$url = 'adminIndex.php?which=admin';
		$str = '<script>location.href="' . $url . '"</script>';		
	}
	else
	{
		$str = '<script>alert("用户名或密码错误，请重新输入");';
		$str .= 'history.go(-1);</script>';
	}
	echo $str;
	
	//login($which,$rows,$name,$url);
}
else if( $which=='user' )
{
	//普通用户登录
	$url = 'user';
	login($which,$rows,$name,$url);
}


/*
 * 被admin.class.php中的类方法取代
function login($which,$rows,$name,$url)
{
	$nameKey = $which . 'Name';
	if( $rows>0 )
	{
		if( isset($_SESSION) )
		{
			$_SESSION[$nameKey] = $name;
			var_dump($_SESSION[$nameKey]);//test
		}
		else
		{
			session_start();
			$_SESSION[$nameKey] = $name;
			var_dump($_SESSION[$nameKey]);//test
		}
		$str = '<script>location.href="' . $url . '"</script>';		
	}
	else
	{
		$str = '<script>alert("用户名或密码错误，请重新输入");';
		$str .= 'history.go(-1);</script>';
	}
	echo $str;
}
*/
		