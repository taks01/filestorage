<?php 
require "process.php";

	$username=$_POST["username"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	
	
 
/*echo $username;
echo $email;
echo $password;*/


		$sql="INSERT INTO users(username,email,password) VALUES ('$username','$email','$password')";
	if(mysql_query($process,$sql))
		echo "done";
	else {
		echo "fail";
		echo $process->error;
	}
?>