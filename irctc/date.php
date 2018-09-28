<?php
session_start();
$var=$_SESSION['username'];
$servername="localhost";
$username="root";
$pass="";
$dbname="irctc";
$date=date("Y-m-d");
$time=date("h:i:sa");
$conn=mysqli_connect($servername,$username,$pass,$dbname);
$sql="Insert Into `records`(`Username`,`Date`,`Time`) VALUES('')"
echo date("Y-m-d");
echo date("h:i:sa");
?>