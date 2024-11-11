<?php 
include "st_server.php";
include "st_navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>book request</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

	<style type="text/css">
		.srch{
			padding-left: 1000px;
		}

		body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  margin-top: 50px;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #222;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>
<!-- sidenav -->
	<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <!-- <a href="profile.php">Profile</a> -->
  <a href="st_books.php">Books</a>
  <a href="st_request.php">Book Request</a>
  <!-- <a href="issue_info.php">Issue Information</a> -->
</div>

<div id="main">
  
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   <!-- sidenav close -->


<?php

if(isset($_SESSION['username']))
{
	$q=mysqli_query($db,"SELECT * FROM issue_book where username='$_SESSION[username]';");
	if(mysqli_num_rows($q)==0)
	{
		echo "there is no pending request";
	}
	else
	{
	echo"<table class='table table-bordered table-hover'>";
	echo "<tr style='background-color: #6db6b9e6;'>";
//table header
	echo "<th>"; echo "Book-Id";  		  echo "</th>";
	echo "<th>"; echo "Appprove Status";echo "</th>";
	echo "<th>"; echo "Issue Date";     echo "</th>";
	echo "<th>"; echo "Return Date";    echo "</th>";
	
	echo "</tr>";

	while($row=mysqli_fetch_assoc($q))
{
	echo "<tr>";
	echo "<td>"; echo $row['bid'];   echo "</td>";
	echo "<td>"; echo $row['approve'] ;  echo "</td>";
	echo "<td>"; echo $row['issue'];  echo "</td>";
	echo "<td>"; echo $row['return1'];  echo "</td>";
	
	echo"</tr>";
}
echo "</table>";

	}
}
else
{ 
	echo "</br> </br> </br>";
	echo "<h2> <b>";
	echo "please login first to see the request";
	echo "</h2> </b>";
}
?>

</body>
</html>