<?php 
include "st_server.php";
include('st_navbar.php');
 ?>
<!DOCTYPE html>
<html>
<head>
  <title> Student Login</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="st_login.php">
  	<?php include('st_errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p style="text-decoration: none;">
  		Not yet a member? <a href="st_register.php" >Sign up</a>
       <a href="st_update_pwd.php">forget password</a>
  	</p>
  </form>

  <!-- php -->

</body>
</html