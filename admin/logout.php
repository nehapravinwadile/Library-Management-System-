<?php
include "server.php";
if(isset($_SESSION['username']))
{
	unset($_SESSION['username']);
}
header("location:index.php");
?>