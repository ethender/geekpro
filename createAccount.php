<?php		
		
		require 'connect.php';
				
		$username = htmlspecialchars($_POST['username']);
		$email = htmlspecialchars($_POST['email1']);
		$pass1 = htmlspecialchars(md5($_POST['password1']));
		$pass2 = htmlspecialchars(md5($_POST['password2']));
		
		
		if(checkPass($pass1,$pass2) == true && checkEmail($email) == false){
			$database = new connect();
			$query = "INSERT INTO users(name,email,password)VALUES('$username','$email','$pass1')";
			$resultQuery = mysql_query($query);
			//header("location:registration.php?success");
			echo "registered";
		}else{
			//header("Location:registration.php?fail");
			echo $username." ".$email." ".$pass1." ".$pass2;
		}
		
		/*
		 * checking passwords
		 */
		function checkPass($p1 , $p2){
			$result = false;
			if($p1 == $p2){
				$result = true;
			}
			return  $result;

		}
		
		/*
		 * checking email in the database
		 */
		function  checkEmail($email){
			$database = new connect();
			$result = false;
			
			$query = "SELECT * FROM users WHERE email='$email'";
			$resultQuery = mysql_query($query); 
			
			if(mysql_num_rows($resultQuery) == 1){
				$result = true;
			}
			return $result;
		}
		
?>
