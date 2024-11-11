<?php
include 'st_server.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>library management system</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- <meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style> -->
<style type="text/css">
	nav {
    float: right;
    word-spacing: 30px;
    padding: 20px;
}

nav li {
    display: inline-block;
    line-height: 80px;

}


</style>
</head>

<body>
	<div class="wrapper">
		<header>
		<div class="logo">
			<img class="logo1" src="images/book1.jpeg">
			<h1 style="color:white">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
		</div>
<?php 
if(isset($_SESSION['username']))
{
	?>
	<nav>
		<ul>
			<li><a href="st_index.php">HOME</a></li>
			<li><a href="st_books.php">BOOKS</a></li>
			<li><a href="st_logout.php">LOGOUT</a></li>			
			<li><a href="st_feedback.php">FEEDBACK</a></li>
		</ul>
	</nav>
<?php 
}
else
{
	?>
		<nav>
				<ul>
					<li><a href="st_index.php">HOME</a></li>
					<li><a href="st_books.php">BOOKS</a></li>
					<li><a href="st_login.php">STUDENT-LOGIN</a></li>	
				
					<li><a href="st_feedback.php">FEEDBACK</a></li>
				</ul>
			</nav>

<?php 
}

?>
</header>
<section>
	<div class="sec_img"><br><br><br><br>
	<div class="box">
		<br><br><br><br>
		<h1 style="text-align: center; font-size: 35px;">Welcome To Library</h1><br>
		<h1 style="text-align: center; font-size:25px">Opens at: 09:00</h1><br>
		<h1 style="text-align: center;font-size:25px">Closes at: 15:00</h1><br>
	
</section>
<!-- <footer>
	 <center><p style="color:white">
		<br><br>
		Email:rushalisarak@gmail.com<br><br>
		Mobile no:+91 1234567890
	</p></center>




</footer> --></div>

<?php
include "st_footer.php"; 
?>
</body>
</html>