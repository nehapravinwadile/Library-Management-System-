<?php
include "st_server.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse" style="margin-top: -40px;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
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
          <li><a href="st_profile.php"> PROFILE</a></li>
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

            <li><a href="st_register.php"><span class="glyphicon glyphicon-user">  SIGNUP</span></a></li>
            
        </ul>
       <?php 
     }
    ?>
     
      
    
  </div><!-- /.container-fluid -->
</nav>

 
</body>
</html>