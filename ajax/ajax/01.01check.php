<?php 
	$username = $_GET['username'];
	$passwd = $_GET['password'];

	if($username == 'admin' && $passwd == '123'){
		echo '1';
	} else {
		echo '2';
	}
 ?>