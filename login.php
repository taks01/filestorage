<!DOCTYPE html>

<html>
<head>
<title>Login And Sign-up Page</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body class="login">
							
<div id="first-Frame">
	<div id="second-Frame">
		<div id="logo"> <a>Sadda Adda</a> </div>
			<div id="header-main-right">
				<div id="header-main-right-nav">
				<form method="post" action="process.php" id="login_form" name="login_form" >
				<table border="0" style="border:none">
					<tr>
						<td ><input type="text" tabindex="1"  id="email" placeholder="Email or Phone" name="email" class="inputtext radius1" value=""></td>
						<td ><input type="password" tabindex="2" id="password" placeholder="Password" name="password" class="inputtext radius1" ></td>
						<td ><input type="submit" class="button" name="login" value="Login" /></td>
					</tr>
					<tr>
						<td><label>
						<input id="persist_box" type="checkbox" name="persistent" value="1" checked="1"/>
						<span style="color:yellow;">Keep me logged in</span></label></td>
						<td><label><a href="http://localhost/login/forgot.php" style="color:yellow; text-decoration:none">forgot your password?</a></label></td>
					</tr>
				</table>
				</form>
				</div>
			</div>
		</div>
	</div>
					<!-- header ends here -->
<div class="loginbox radius">
  <h2 style="color:#141823; text-align:center;">Welcome to Cloud World</h2>
  <div class="loginboxinner radius">
    <div class="loginheader">
      <h4 class="title">Store and Share with friends from anywhere in the World.</h4>
    </div>
    <!--loginheader-->
    <div class="loginform">
      <form id="login" method="post" action="" >
        <p>
          <input type="text" id="firstname" name="firstname" placeholder="First Name" value="" class="radius mini" />
          <input type="text" id="lastname" name="lastname" placeholder="Last Name" value="" class="radius mini" />
        </p>
  <p>
          <input type="text" id="username" name="username" placeholder="User Name" value="" class="radius" />
        </p>
        <p>
          <input type="text" id="email" name="email" placeholder="Your Email" value="" class="radius" />
        </p>
        <p>
          <input type="text" id="remail" name="remail" placeholder="Re-enter Email" class="radius" />
        </p>
        <p>
          <input type="password" id="password" name="password" placeholder="New Password" class="radius" />
        </p>
        <p>
          <button class="radius title" name="signup">Sign Up for Storage World</button>
        </p>
      </form>
    </div>
    <!--loginform-->
  </div>
  <!--loginboxinner-->
</div>
<!--loginbox-->
</body>
</html>