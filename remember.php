<?php
	
	 $name = $_POST['name'];
	 $pass = $_POST['password'];
	 $password = md5($pass);
	 $remember = $_POST['remember'];
	
	 if($remember == 1)
	 {
		
		 setcookie('name',$name,time()+7*24*3600);
		 setcookie('password',$password,time()+7*24*3600);
		 setcookie('remember',$remember,time()+7*24*7*24*);
	
	 }else{
		
		 setcookie('name',$name,time()-7*24*3600);
		 setcookie('password',$password,time()-7*24*3600);
		 setcookie('remember',$remember,time()-7*24*3600);
	
	 }



?>
	
		
		
