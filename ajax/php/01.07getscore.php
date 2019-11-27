<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>成绩</title>
</head>
<body>
	<div>
		<?php
			$arr = array();
			$arr[1] =  array("username"=>"张三","score"=>"100");
			$arr[2] =  array("username"=>"李四","score"=>"90");
			$arr[3] =  array("username"=>"王五","score"=>"80");
			$arr[4] =  array("username"=>"小白","score"=>"70");
			$arr[5] =  array("username"=>"小黑","score"=>"60");
			
			$user = $_POST['user'];

			//$score = $arr[$user];

			if($user == 'admin'){
				foreach ($arr as $value) {
					echo  "<ul><li>姓名:$value[username]</li> <li>成绩:$value[score]</li></ul><br>";
				}
			} 
			elseif(!$arr[$user]) {
				echo "<span>查无此人</span>";//有BUG
			} else {
				$score = $arr[$user];
				echo "<ul><li>姓名:$score[username]</li> <li>成绩:$score[score]</li></ul>";
			}
		 ?>
	</div>
</body>
</html>