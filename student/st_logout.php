<?php
include "st_server.php";
if(isset($_SESSION['username']))
{
	unset($_SESSION['username']);
}
header("location:st_index.php");
?>