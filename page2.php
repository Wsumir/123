<?php
	
	
	$username=$_POST["username"];
	$password=$_POST["password"];
	$auto=$_POST['autoLogin'];
	
	//echo "page2.php<br >";
	//echo $username;
	echo "<br >";
	//echo $password;
	echo "<br >";
	//echo $auto;
	
	if($con=mysqli_connect('localhost', 'root', ''))
        {
           // echo "连接成功<br >";
        }
        else
        {
           // echo "连接失败<br >";
        }


        if(mysqli_select_db($con,"student"))
        {
            //echo "选择成功<br >";
        }
        else
        {
           // echo "选择失败";
        }
        $con->query("SET NAMES utf8"); 
	
	
			$quer = "select * from student.teacher where (name=$username and password=$password)";
			$re = mysqli_query($con,$quer);
			$row = mysqli_fetch_array($re);
			
			//echo $row[1];
			echo "<br >";
			//echo $row[2];
			
			if($username==$row[1] && $password==$row[2] && $username!=NULL)
	        {
	            
	            if($auto==1)
	            {
	            	setcookie('name',$username,strtotime('+7 days'));
	            	//echo 'setcookie一周';
	            	
	            	$salt='111';
	            	$auth=md5($username.$password.$salt).":".$row[1];
	            	setcookie('auth',$auth,strtotime('+7 days'));
	            	
	            	
	            }
	            else
	            {
	            	setcookie('name',$username);
	            	//echo 'setcookie会话';
	            }
	            exit("<script>
		            alert('登陆成功');
		            location.href='page1.php';
		           </script>");
	                
	        }       
	        
	        else
	        {
	        	exit("<script>
		            alert('登陆失败');
		            location.href='page.php';
		          </script>");
	        }
	            
	        
	            
	
	
	
	
	
	
	
	
	
?>