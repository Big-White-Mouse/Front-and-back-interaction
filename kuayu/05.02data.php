<?php
    //echo 'let data = {"username":"zhangsan","password":"123456"}';
	//echo 'fun(123)';

	$fuc = $_GET['callback'];
	$arr = array("username"=>"zhangsan","password"=>"123456");
	echo $fuc.'('.json_encode($arr).')';
	
 ?>