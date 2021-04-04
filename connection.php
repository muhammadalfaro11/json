<?php
	$host="localhost";
	$db="apotek";
	$user="root";
	$pass="";
	$con=mysqli_connect($host,$user,$pass);
	$cdb=mysqli_select_db($con,$db) or die(mysqli_error());
?>