<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div>测试get</div>
	<script>
		/*
		http协议的常用请求方式
		get 	用来从服务器获取数据（参数一般用来作为查询条件）
		post	用来提交/添加数据
		put		修改数据
		delete	删除数据
		*/
	</script>
	<?php 
		$f = $_GET['flag'];//拿到URL地址中传递的参数 :  /php/01.05phpget请求.php?flag=1
		echo '<span>'.$f.'</span>'
	 ?>
</body>
</html>