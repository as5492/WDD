<?php
	$name=$_POST['uname'];
	$pwd=$_POST['pass'];
	if($name=="siva"&&$pwd=="123")
	{
		echo "Login success";
		echo "User Name:$name";
		echo "Password:$pwd";
	}
	else
	{
		echo "Login Failed";
	}
	
?>
