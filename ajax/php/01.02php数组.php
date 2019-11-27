<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		//数组的声明，赋值与输出
		$arr = array(1,2,3,4,5);
		print_r($arr);
		echo "<br>";
		echo $arr[0];
		echo "<br>";
		echo $arr[1];
		echo "<br>";
		echo $arr[2];	
		$arr1 = array("username"=>"zs","age"=>"12","sex"=>"male");
		echo "<br>";
		print_r($arr1);
		echo "<br>";	
		echo $arr1["username"];
		//二维数组
		$arr3 = array();
		$arr3[0] = array(11,12,13);
		$arr3[1] = array(21,22,23);
		$arr3[2] = array(31,32,33);
		echo "<br>";	
		echo "<br>";	
		print_r($arr3);
	 ?>
</body>
</html>