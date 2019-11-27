<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		//php声明变量$开头,使用时也需要$开头,$后面跟着变量名，，变量名命名规则与大部分语言一致
		$num = 123;
		//php字符串拼接用 '.'
		echo "<div>编号为".$num."</div>";
		//php中单引号和双引号不同
		echo "<div>编号为$num</div>";//双引号会把其中的变量解析成变量的值
		echo '<div>编号为$num</div>';//单引号会把其中的变量当成字符串来处理
	 ?>
	 	
</body>
</html>