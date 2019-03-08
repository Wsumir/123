<?php
	if(isset($_COOKIE['name']))
	{
		exit("<script>
		    alert('已登陆');
		    location.href='page1.php';
		    </script>");
		echo 'page'	;
	}
	
	
?>




<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>会话控制</title>
		
	</head>
	<body style="text-align:center">
	
		<li style='font-size:30px'>
			学生管理系统<br/><br/>
		</li>
		
	</body>
	
	<body style="text-align:center">
		
		<form action="page2.php" method="post">
			<p style = "line-height:30px">
				Number：<input type="text" name="username"/><br />
				Password:<input type="password" name="password"/>
			</p>
			<div class = "checkbox">
				<label>
					<input type="checkbox" name="autoLogin" value="1"/>一周内自动登陆
					
				</label>
			</div>
			
			
			
			<p ><input type="checkbox" name="remember" value="1">
			记住用户名和密码</p>
 			
 
 				
	
			<p ><input type="submit" value="登陆"/></p>
		</form>
		

	 	
		
		
	</body>
</html>

