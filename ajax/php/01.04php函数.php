<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		//自定义函数 php函数名不区分大小写
		function fn($ele){
			return $ele;
		}
		$ret = fn('hello');
		echo $ret;
		echo "<br>";
		//系统函数
		$arr = array(111,222,333);
		$ret = json_encode($arr);
		print_r($arr);
		echo "<br>";
		echo $ret;
	 ?>
</body>
</html>