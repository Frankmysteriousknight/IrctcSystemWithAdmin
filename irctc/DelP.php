<?php
include("mysql.php");
session_start();
$var=$_SESSION['username'];
$query_delete="DELETE FROM `imgtbl` WHERE `Username`='".$var."'";
		mysqli_query($conn,$query_delete) or die("error in query deletion------>".mysqli_error($conn));
	
	
	
	 

header('Location:profile.php');
?>
