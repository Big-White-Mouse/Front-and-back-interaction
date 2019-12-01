<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

	//在父页面中直接生成一个子页面  数据返回到生成的子页面中  
    if($username == 'admin' && $password == '123'){
        echo "登陆成功";
    } else {
    	echo "登陆失败";
    }

    //通过js控制html页面修改元素  这里的js其实是在iframe子页面执行的  所以要通过parent找到父页面
    if($username == 'admin' && $password == '123'){ ?>
		<script>
			parent.document.getElementById('info').innerHTML = '登陆成功';
		</script>
	<?php } else { ?>
	
		<script>
			parent.document.getElementById('info').innerHTML = '登陆失败';
		</script>
	<?php } ?>