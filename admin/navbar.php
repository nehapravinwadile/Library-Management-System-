<?php
include "server.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
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
     body {
      margin-top: -45px;
     }
     li a{
            color: white;
           text-decoration: none;
          }
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
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    <a class="navbar-brand active" style="color:white;"> ONLINE LIBRARY MANAGEMENT SYSTEM</a>
    </div>
      <ul class="nav navbar-nav">
        <li ><a href="ad_index.php"> HOME</a></li>
        <li><a href="books.php">BOOKS </a></li>
       
        <li><a href="feedback.php"> FEEDBACK</a></li>
      </ul>
      <?php 
      if(isset($_SESSION['username']))
      { ?>
              <ul class="nav navbar-nav">
                <li><a href="profile.php">PROFILE</a></li>
                <li><a href="student.php">STUDENT-INFORMATION</a></li>
      </ul>
        <ul style="color:white;" class="nav navbar-nav navbar-right">
          
             <?php 

              echo "<div style='text-align:center' 'color:white'>
      <img class='img-circle profile-img' height=40  width=40 src='images/profle.jpeg'>";?>&nbsp &nbsp
      <?php
      echo " ".$_SESSION['username'];
             
              ?>
          <ul class="nav navbar-nav navbar-right">
          
          <li><a href="logout.php">&nbsp &nbsp<span class="glyphicon glyphicon-log-out" >LOGOUT</span></a></li></ul>
 </ul>
      <?php
       }
       else{?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="admin_login.php"><span class="glyphicon glyphicon-log-in">  LOGIN</a></li>

            <li><a href="register.php"><span class="glyphicon glyphicon-user">  SIGNUP</span></a></li>
            
        </ul>
       <?php 
     }
    ?>
     
      
    
  </div><!-- /.container-fluid -->
</nav>

 
</body>
</html>