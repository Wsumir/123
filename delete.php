<?php
 
	//echo 'delete.php';
	setCookie('name','',time()-1);
	setCookie('auth','',time()-1);
	exit("<script>
		    alert('已退出');
		    location.href='page.php';
		    </script>");
	
?>