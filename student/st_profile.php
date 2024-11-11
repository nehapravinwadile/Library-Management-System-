<?php
  include "st_server.php";
  include "st_navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Profile</title>
	<style type="text/css">
		.wrapper{
			width: 300px;
			margin: 0 auto;
			color: white;
			
		}
	</style>
</head>
<body style="background-color:#004528;">
	<div class="container">
		<form action="" method="post">
			<button class="btn btn-default" style="float: right; width: 70px;" name="submit1">Edit</button>
	
		</form>
		<div class="wrapper">
			<?php
			
				if(isset($_POST['submit1']))
				{
					?>
					<script type="text/javascript">
						window.location="st_edit.php"
					</script>
			<?php 
		}
			$q=mysqli_query($db,"SELECT * from student where username='$_SESSION[username]';");
			?>
			<h2 style="text-align: center;">My Profile</h2>
			<?php 
			$row=mysqli_fetch_assoc($q);
			echo "<div style='text-align:center'>
			<img class='img-circle profile-img' height=110  width=120 src='images/profle.jpeg'>
			</div>";
			?>
			<br><div style="text-align:center;"> <b>WELCOME</b>
			<h4>
				<?php 
				echo $_SESSION['username'];

				?>
			</h4>
		</div>
		<?php
		echo "<b>";
		echo "<table class='table table-bordered'>";
		echo "<tr>";
			echo "<td style='color:white'>";
			echo "<b>  ID: </b>";
			echo "</td>";

			echo "<td style='color:white'>";
			echo $row['id'];
			echo "</td>";
		echo "</tr>";

		echo "<tr>";
			echo "<td style='color:white'>";
			echo "<b>  USERNAME: </b>";
			echo "</td>";
			echo "<td style='color:white'>";
			echo $row['username'];
			echo "</td>";
		echo "</tr>";

		echo "<tr>";
			echo "<td style='color:white'>";
			echo "<b>  EMAIL: </b>";
			echo "</td>";
			echo "<td style='color:white'>";
			echo $row['email'];
			echo "</td>";
		echo "</tr>";
 
		echo "<tr>";
			echo "<td style='color:white'>";
			echo "<b>  PASSWORD: </b>";
			echo "</td>";
			echo "<td style='color:white'>";
			echo $row['password'];
			echo "</td>";
		echo "</tr>";
	
		echo "</table>";
		echo "</b>";
		?>
		</div>
		
	</div>


</body>
</html>