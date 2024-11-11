<?php 
include "st_server.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>feedback</title>
	<title>library management system</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style type="text/css">
  	body{
  		background-image: url("images/feedback.png");
  		background-size: 100%;
  		background-repeat: no-repeat;
  	}

  	.wrapper
  	{
  		padding: 10px;
  		margin: -20px auto;
  		width: 900px;
  		height: 600px;
  		background-color: black;
  		opacity: .8;
  		color: white;
  	}

  	.form-control{
  		height: 70px;
  		width: 60%;

  	}
  	.form-control{
  		height: 50px;
  		width: 60%;

  	}
  	.scroll
  	{
  		width: 100%;
  		height: 350px;
  		overflow: auto scroll;
  	}
  </style>
</head>
</head>

<body>
	<nav class="navbar navbar-inverse" >
  <div class="container-fluid">
    
	 <div class="navbar-header">
      <a class="navbar-brand active"> ONLINE LIBRARY MANAGEMENT SYSTEM</a>
    </div>
      <ul class="nav navbar-nav">
        <li ><a href="st_index.php"> HOME</a></li>
        <li><a href="st_books.php">BOOKS </a></li>
       
        <li><a href="st_feedback.php"> FEEDBACK</a></li>
      </ul>
      <?php 
      if(isset($_SESSION['username']))
      { ?>
              <ul class="nav navbar-nav">
                <li><a href="st_profile.php">PROFILE</a></li>
                <!-- <li><a href="student.php">STUDENT-INFORMATION</a></li> -->
      </ul>
       
       <ul style="color:white;" class="nav navbar-nav navbar-right">
           
           
              <?php 
              echo "<div style='text-align:center' 'color:white'>
      <img class='img-circle profile-img' height=40  width=40 src='images/profle.jpeg'>";?>&nbsp &nbsp
      <?php
      echo " ".$_SESSION['username'];
             
              ?>
            
          
          <ul class="nav navbar-nav navbar-right">
          
          <li><a href="st_logout.php">&nbsp &nbsp<span class="glyphicon glyphicon-log-out" >LOGOUT</span></a></li></ul>

        
        
      </ul>
      <?php
       }
       else{?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="st_login.php"><span class="glyphicon glyphicon-log-in">  LOGIN</a></li>

            <li><a href="register.php"><span class="glyphicon glyphicon-user">  SIGNUP</span></a></li>
            
        </ul>
       <?php 
     }
    ?>
     
      
    
  </div><!-- /.container-fluid -->
</nav>
<br><br><br><br><br><br><br><br>

<div class="wrapper">
	<h4>If You have any suggestion or questions please comment below.</h4><br><br>
	<form style="" action="st_feedback.php" method="post">
		<input class="form-control1" type="text" name="username" placeholder="username"><br><br>
		<input class="form-control" type="text" name="comment" placeholder="write something..."><br><br>
		<input class="btn-default" type="submit" name="submit" value="comment" style="width: 100px; height: 35px;">
	</form>
	<br><br><br>
	
	<?php 

if(isset($_POST['submit'])) 
{
  if(isset($_SESSION['username']))
  {
	mysqli_query($db,"INSERT INTO comments(id,username,comment) VALUES ('','$_POST[username]','$_POST[comment]');");
	  ?>
	<script type="text/javascript">
          alert ("feedback sent Successfully...");
        </script>
        <?php
        } 
        else
        {
          ?>
          <script type="text/javascript">
            alert ("you need to login first!");
          </script>

          <?php 

        }
    }
  ?>
	<!-- if(isset($_POST['submit']))
	{
		
   
		$sql= "INSERT INTO comments (id,username,comment)  VALUES('','$_POST[username]','$_POST[comment]');";

		if(mysqli_query($db,$sql))
		{
			$q="SELECT *FROM `comments` ORDER BY `comments`.`id` DESC";
			$res=mysqli_query($db,$q);

			echo"<table class'table table-bordered'>";
			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
					echo "<td>"; echo $row['comment']; echo"</td>";


				echo "</tr>";
				//echo "</table>";
			}

		}
	
} -->

<!-- ?> -->
</div>
</div>	
</body>
</html>

