<?php
//$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];

//$username=stripcslashes($username);
$password=stripcslashes($password);
$email=stripcslashes($email);

//$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);
$email=mysql_real_escape_string($email);

mysql_connect("localhost","root","");
mysql_select_db("login");
//mysql_select_db("dbtuts");

$result=mysql_query("select*from users where email='$email' and password='$password'") or die("Unable to connect".mysql_error());

$row=mysql_fetch_array($result);
if(($row['email'] == $email) && ($row['password'] == $password))
{
	echo"login successful!!! Welcome" .$row ['username'];
}
else
{
	echo"Failed to connect!!";
}
?>