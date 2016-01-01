<?php
	
		session_start();
		
		require 'connect.php';
		
		
		$email = htmlspecialchars($_POST['email']);
		$password = htmlspecialchars(md5($_POST['password']));
		
		
		$database = new connect();
		
		$query = "SELECT * FROM users WHERE email ='$email' AND password = '$password'";
		$resultQuery = mysql_query($query);
		
		if(mysql_num_rows($resultQuery) ==  1){
			$row  = mysql_fetch_array($resultQuery);
			$_SESSION['id'] = $row;
			header("Location:dashboard.php");
		}else{
			header("Location:registration.php?fail");
		}
		
?>