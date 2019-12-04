<?php
    //echo 'let data = {"username":"zhangsan","password":"123456"}';
	//echo 'fun(123)';
	
	$arr = array("username"=>"zhangsan","password"=>"123456");
	echo 'fun('.json_encode($arr).')';
 ?>