<?php
$servername="localhost";
$username="root";
$password="";
$un=$_POST['n1'];
$pss=$_POST['pass'];
$dt=date("Y-m-d");
date_default_timezone_set("India");
$tm=date("h:i:s");
mysql_connect($servername,$username,$password);
mysql_select_db("irctc");
$sql="Select * from users WHERE Username='$un' AND Password='$pss'";
$sql2="INSERT INTO record(`Username`,`Date`,`Time`) VALUES('".$un."','".$dt."','".$tm."')";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count!=0)
{
	session_start();
	$_SESSION['username']=$un;
	$result2=mysql_query($sql2);
	header("Location:home.php");
}
else
{	
	header("Location:index3.html");
}
?>