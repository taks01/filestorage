<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" > 
    <title>View Users</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
    }  
    .table {  
        margin-top: 50px;  
  
    }  
  
</style>  
  
<body>  
  
<div class="table-scrol">  
    <h1 align="center">All the Users</h1>  
  
<div class="table-responsive">				
  
  
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
  
            <th>User Id</th>  
            <th>User Name</th>  
            <th>User E-mail</th>  
            <th>User Password</th>  
            <th>Delete User</th>  
        </tr>  
        </thead>  
  
         <?php  
			
		mysql_connect("localhost","root","");
		mysql_select_db("login");
	

		$result=mysql_query("select*from users");

		$row=mysql_fetch_array($result);
        {  
            $id=$row[0];  
            $username=$row[1];  
            $email=$row[2];  
            $password=$row[3];  
  
  
  
        ?> 
  
        <tr>  
													<!--here showing results in the table -->  
            <td><?php echo $id;  ?></td>  
            <td><?php echo $username;  ?></td>  
            <td><?php echo $email;  ?></td>  
            <td><?php echo $password;  ?></td>  
            <td><a href="delete.php?del=<?php echo $id ?>"><button class="btn btn-danger">Delete</button></a></td> 
        </tr>  
  
        <?php } ?>  
  
    </table>  
        </div>  
</div>  
  
  
</body>  
  
</html>  