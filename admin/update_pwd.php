<?php
include ('server.php');
include('navbar.php');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Change Password </title>
	<style type="text/css">
		
		body{
			
			height: 650px;
			background-image:url(images/login.jpeg);
			background-repeat: no-repeat;
			background-size: 100%;
		}

		.wrapper{
			width: 400px;
			height: 400px;
			margin: 100 auto;
			background-color: black;
			opacity: .6;
			color: white;
			padding: 27px 15px;

		}
		.form-control{
			width: 300px;
		}
	</style>
</head>
<body>
	<div class="wrapper">
		<div style="text-align:center;">
		<h1 style="text-align:center; font-size: 35px; font-family: Lucida  Console;">Change The Password</h1>
	
	</div>
	<div style="padding-left: 35px;">
	<form action=" " method="post">
		<input type="text" name="username" class="form-control" placeholder="username" required=""><br>

		<input type="text" name="email" class="form-control" placeholder="email" required=""><br>

		<input type="text" name="password" class="form-control" placeholder="New Password" required=""><br>
		<button class="btn btn-default" type="submit" name="submit"> update</button>
</form>
</div>
</div>
<?php 
if(isset($_POST['submit']))
{
	if(mysqli_query($db,"UPDATE admin SET password='$_POST[password]' where username='$_POST[username]' AND email='$_POST[email]' ;"))
	{
		?>
		<script type="text/javascript">
			alert("The Password updated successfully");
		</script>

		<?php 
	}
}
?>

</body>
</html>