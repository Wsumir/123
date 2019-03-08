<?php
	if(!isset($_COOKIE['name']))
	{
		exit("<script>
		    alert('请先登陆');
		    location.href='page.php';
		    </script>");
		
	}
	//校验用户登陆
	if(isset($_COOKIE['auth']))
	{

		$auth=$_COOKIE['auth'];
		$resArr=explode(':',$auth);
		$userId=end($resArr);
		
		if($con=mysqli_connect('localhost', 'root', ''))
        {
            //echo "连接成功<br >";
        }
        else
        {
            //echo "连接失败<br >";
        }


        if(mysqli_select_db($con,"student"))
        {
           // echo "选择成功<br >";
        }
        else
        {
            //echo "选择失败";
        }
        $con->query("SET NAMES utf8"); 
		
		$quer = "select * from student.teacher where (name=$userId)";
		$re = mysqli_query($con,$quer);
		$row = mysqli_fetch_array($re);
		
		$username=$row[1];
		$password=$row[2];
		$salt='111';
		
		$authStr=md5($username.$password.$salt);
		if($authStr!=$resArr[0])
		{
			echo '$authStr!=$resArr[0]';
			
		}
		
		/*	
		echo $row[1];
		echo "<br >";
		echo $row[2];
		echo "<br >";
		*/	
	
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
			登陆首页<br/><br/>
		</li>
		
	</body>
	
	<body style="text-align:center">
		
		欢迎你 <?php echo $_COOKIE['name']; ?>
		
	 	<form action="delete.php" method="post">
			
			
			<p ><input type="submit" value="退出登陆"/></p>
		</form>
		
		
	</body>
</html>

