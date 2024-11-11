
<?php 
include "server.php";
include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Books</title>
	<style type="text/css">
		.srch{
			padding-left: 1000px;
		}
		body{
			background-image: url("images/add.png");
			background-repeat: no-repeat;
  	/*font-family: "Lato", sans-serif;*/
  	/*transition: background-color .5s;*/
		}
		th{
			color: white;
		}
		td{
			color: white;

		}
		h4{
			color: white;
		}
	</style>
</head>
<body>

	<!------------search bar----------------->
	<div class="srch">
	<form class="navbar-form" method="post" name="form1">
		
			<input class="form-control" type="text" name="search" placeholder="student username.." required="">
			<button style="background-color:#6db6b9e6 ;" type="submit" name="submit" class="btn btn-default">
				<span class="glyphicon glyphicon-search"></span>
			</button>
		
	</form>
</div>
<h2 style="color:white; text-align:center;">All Comments</h2>

<?php

if(isset($_POST['submit']))
{
	$q=mysqli_query($db,"SELECT id,username,comment FROM `comments`
 where username like '%$_POST[search]%' ");
	if(mysqli_num_rows($q)==0)
	{
		echo "<h4>";
		echo "sorry! No Comments yet from this username";
		echo "<h4>";
	}
	else{
	echo"<table class='table table-bordered '>";
	echo "<tr style='background-color: #6db6b9e6;'>";
//table header
	echo "<th>"; echo "id";  		  echo "</th>";
	echo "<th>"; echo "username";    echo "</th>";
	echo "<th>"; echo "comment";  echo "</th>";
	
	echo "</tr>";

	while($row=mysqli_fetch_assoc($q))
{
	echo "<tr>";
	echo "<td>"; echo $row['id'];   echo "</td>";
	echo "<td>"; echo $row['username'] ;  echo "</td>";
	echo "<td>"; echo $row['comment'];  echo "</td>";
	

	echo"</tr>";
}
echo "</table>";

	}
}
else{

$res=mysqli_query($db,"SELECT id,username,comment FROM `comments`;");

echo"<table class='table table-bordered '>";
echo "<tr style='background-color: #6db6b9e6;'>";
//table header
	echo "<th>"; echo "id";  		  echo "</th>";
	echo "<th>"; echo "username";    echo "</th>";
	echo "<th>"; echo "comment";  echo "</th>";
	
	echo "</tr>";

	while($row=mysqli_fetch_assoc($res))
{
	echo "<tr>";
	echo "<td>"; echo $row['id'];   echo "</td>";
	echo "<td>"; echo $row['username'] ;  echo "</td>";
	echo "<td>"; echo $row['comment'];  echo "</td>";
	
	echo"</tr>";
}
echo "</table>";

}

?>
</body>
</html>