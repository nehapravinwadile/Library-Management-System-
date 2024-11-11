
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>library management system</title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

<style type="text/css">
	.wrapper
{
    height: 660px;
    width: 1400px;
    /*background-color: red;*/
}

header
{
    height: 100px;
    width: 1400px;
    background-color: black;
}

section
{
   height: 550px;
    width:1400px;
    background-color: grey;  
}
footer
{
 height: 82px;
    width:1400px;
    background-color: black;
}

.logo {
    float: left;
    padding-left:20px;
    }
    section .sec_img{
    height: 700px;
    margin-top: 0px;

    background: no-repeat;
    background-size: 100%;
    background-image: url("admin/images/2.jpeg");
}

.box{
    height: 300px;
    width: 450px;
    background-color:#030002;
    margin: 70px auto;
    opacity: .6;
    color: white;
}

</style>
</head>

<body>
	<div class="wrapper">
		<header>
		<div class="logo">
			
			<h1 style="color:white; font-size:40px; font-weight: 800;"> &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ONLINE LIBRARY MANAGEMENT SYSTEM &nbsp </h1>

		</div>

</header>
<section>
	<div class="sec_img"><br><br><br><br>
	<div class="box"; style="padding-left:100px;">
		<p style="color:white; padding-left: 60px; font-size:30px; font-weight:700;"> LOGIN AS:</p><br><br><br>
		<button  class="btn btn-primary" name="submit"><a style="color:  black;" href="admin/admin_login.php"> ADMIN</a></button>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		<button class="btn btn-primary" name="submit1"><a style="color: black;" href="student/st_login.php"> STUDENT</a></button>
		
</section>
</div>
<?php
include "footer.php"; 
?>
</body>
</html>