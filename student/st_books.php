<?php 
include "st_server.php";
include "st_navbar.php";
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

	<!------------search bar----------------->
	<div class="srch">
	<form class="navbar-form" method="post" name="form1">
		
			<input class="form-control" type="text" name="search" placeholder="search books.." required="">
			<button style="background-color:#6db6b9e6 ;" type="submit" name="submit" class="btn btn-default">
				<span class="glyphicon glyphicon-search"></span>
			</button>
		
	</form>
</div>

<!--  request book-->
<div class="srch">
	<form class="navbar-form" method="post" name="form2">
		
			<input class="form-control" type="text" name="bid" placeholder="enter book id" required="">
			<button style="background-color:#6db6b9e6 ;" type="submit" name="submit1" class="btn btn-default">Request</button>
		
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


if(isset($_POST['submit1']))
{
	if(isset($_SESSION['username']))
	{
		mysqli_query($db,"INSERT INTO issue_book Values('$_SESSION[username]', '$_POST[bid]', '', '', '');");
		?>
			<script type="text/javascript">
				window.location="st_request.php"
			</script>
		<?php
	}
	else
	{
		?>
			<script type="text/javascript">
				alert("You must login to Request a book");
			</script>
		<?php
	}
}

?>
</div>
</body>
</html>


