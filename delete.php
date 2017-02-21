<?php  

//include("database/process.php"); 
mysql_connect("localhost","root","");
mysql_select_db("login");

 
$delete_id=$_GET['del'];  
$delete_query="delete  from users WHERE id='$delete_id'";				//delete query  
$run=mysql_query($connection,$delete_query);  
if($run)  
{    
    echo "<script>window.open('view_users.php?deleted=user has been deleted','_self')</script>";  
}  
  
?>  