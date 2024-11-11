<?php 
include "st_server.php";
include "st_navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit profile</title>
	<style type="text/css">
		.form-control
		{
			height: 35px;
			width: 270px;
		}
		form {
			padding-left: 550px;
		}
		label {
			color: white;
		}
	</style>
</head>
<body style="background-color:#004528;">
<h2 style="text-align:center; color:white;">Edit Information</h2>
	<?php 
		$sql="SELECT * FROM student WHERE username='$_SESSION[username]' ";
		$result= mysqli_query($db,$sql)or die(mysql_error());

		while ($row=mysqli_fetch_assoc($result)) 
		{
			$id=$row['id'];
			$username=$row['username'];
			$email=$row['email'];
			$password=$row['password'];
		}
	?>
<div class="profile_info" style="text-align:center;">
	<span style="color:white;">Welcome</span>
	<h4 style="color: white;"><?php echo $_SESSION['username']; ?></h4>	
</div><br><br>

<form action="" method="post" enctype="multipart/form-data">
	<label><h5><b>ID</b></h5></label>
	<input class="form-control" type="text" name="id" value="<?php echo $id; ?>">
	<label><h5><b>Username</b></h5></label>
	<input class="form-control" type="text" name="username" value="<?php echo $username; ?>"> 
	<label><h5><b>Email</b></h5></label>
	<input class="form-control" type="text" name="email" value="<?php echo $email; ?>">
	<label><h5><b>Password</b></h5></label>
	<input class="form-control" type="text" name="password" value="<?php echo $password; ?>"><br> 
	<div style="padding-left: 100px;"><button class="btn btn-default" type="submit" name="submit">Save</button>
</form>
</div>

<?php 
	if(isset($_POST['submit']))
	{
		$id=$_POST['id'];
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password=$_POST['password'];

	$sql1="UPDATE student SET id='$id', username='$username', email='$email', password='$password' WHERE username='".$_SESSION['username']."'; ";

	if (mysqli_query($db,$sql1)) {
		?>
		<script type="text/javascript">
			alert ("saved successfully");
			window.location="st_profile.php"
		</script>

		<?php 
	}
	}
?>
</body>
</html>