<?php 
	$username = $_POST['username'];
	$password = $_POST['password'];
	if($username == 'admin' && $password == '123')//应该在此查询数据库  但是在这里只做模拟
	{
		echo "登陆成功";
	} else {
		echo "用户名或者密码错误";
	}
 ?>