<?php 
include "server.php";
include "navbar.php";
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Books</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style type="text/css">
		.srch{
			padding-left: 1000px;
		}

		body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
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

.h:hover
{
	color: white;
	width: 300px;
	height: 50px;
	background-color: #00544c;

}
</style>
</head>
<body>

	<!-- sidenav -->
	<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <div style="color:white; margin-left: 80px; font-size:30px; text-decoration: underline;">
  	<img class="img-circle profile-img" src="images/profle.jpeg" style="height: 100px; width:100px">
  	<?php 
  	echo "welcome  ".$_SESSION['username'];
  	?></div><br><br>
  <div class="h"> <a href="add_book.php">Add Books</a></div>
  <div class="h"><a href="#">Delete Books</a></div>
  <div class="h"><a href="request.php">Book Request</a></div>
  <!-- <div class="h"><a href="#">Issue Information</a></div> -->
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

	<!------------search bar----------------->
	<div class="srch">
	<form class="navbar-form" method="post" name="form1">
		
			<input class="form-control" type="text" name="search" placeholder="search books.." required="">
			<button style="background-color:#6db6b9e6 ;" type="submit" name="submit" class="btn btn-success">
				<span class="glyphicon glyphicon-search"></span>
			</button>
		
	</form>

	<form class="navbar-form" method="post" name="form1">
		
			<input class="form-control" type="text" name="bid" placeholder="Enter Book ID" required="">
			<button style="background-color:#6db6b9e6 ;" type="submit1" name="submit1" class="btn btn-default">Delete
			</button>
		
	</form>
</div>
<h2>List Of Books</h2>

<?php

if(isset($_POST['submit']))
{
	$q=mysqli_query($db,"SELECT * FROM books where name like '%$_POST[search]%' ");
	if(mysqli_num_rows($q)==0)
	{
		echo "sorry! No Book Found";
	}
	else{
	echo"<table class='table table-bordered table-hover'>";
	echo "<tr style='background-color: #6db6b9e6;'>";
//table header
	echo "<th>"; echo "Id";  		  echo "</th>";
	echo "<th>"; echo "Book-Name";    echo "</th>";
	echo "<th>"; echo "Author-Name";  echo "</th>";
	echo "<th>"; echo "Edition";      echo "</th>";
	echo "<th>"; echo "Status";       echo "</th>";
	echo "<th>"; echo "Quantity";     echo "</th>";
	echo "<th>"; echo "Department";   echo "</th>";
	echo "</tr>";

	while($row=mysqli_fetch_assoc($q))
{
	echo "<tr>";
	echo "<td>"; echo $row['bid'];   echo "</td>";
	echo "<td>"; echo $row['name'] ;  echo "</td>";
	echo "<td>"; echo $row['authors'];  echo "</td>";
	echo "<td>"; echo $row['edition'];  echo "</td>";
	echo "<td>"; echo $row['status'];  echo "</td>";
	echo "<td>"; echo $row['quantity'];  echo "</td>";
	echo "<td>"; echo $row['department'];  echo "</td>";

	echo"</tr>";
}
echo "</table>";

	}
}
else{

$res=mysqli_query($db,"SELECT * FROM `books`;");

echo"<table class='table table-bordered table-hover'>";
echo "<tr style='background-color: #6db6b9e6;'>";
//table header
	echo "<th>"; echo "Id";  		  echo "</th>";
	echo "<th>"; echo "Book-Name";    echo "</th>";
	echo "<th>"; echo "Author-Name";  echo "</th>";
	echo "<th>"; echo "Edition";      echo "</th>";
	echo "<th>"; echo "Status";       echo "</th>";
	echo "<th>"; echo "Quantity";     echo "</th>";
	echo "<th>"; echo "Department";   echo "</th>";
	echo "</tr>";

	while($row=mysqli_fetch_assoc($res))
{
	echo "<tr>";
	echo "<td>"; echo $row['bid'];   echo "</td>";
	echo "<td>"; echo $row['name'] ;  echo "</td>";
	echo "<td>"; echo $row['authors'];  echo "</td>";
	echo "<td>"; echo $row['edition'];  echo "</td>";
	echo "<td>"; echo $row['status'];  echo "</td>";
	echo "<td>"; echo $row['quantity'];  echo "</td>";
	echo "<td>"; echo $row['department'];  echo "</td>";

	echo"</tr>";
}
echo "</table>";

}

if (isset($_POST['submit1']))
 {
	if (isset($_SESSION['username']))
	 {
	 	mysqli_query($db,"DELETE FROM books where bid='$_POST[bid]';");
	 	?>
	 	<script type="text/javascript">
	 		alert("Delete Successful.");
	 	</script>
	 	<?php
	}
else
{
	?>
	 	<script type="text/javascript">
	 		alert("Please Login");
	 	</script>
<?php 
}
}
?>
</body>
</html>
