<?php
$servername="localhost";
$username="root";
$password="";
$nm=$_POST['name'];
$eid=$_POST['eid'];
$mno=$_POST['mno'];
$pass=$_POST['pass'];
$un=$_POST['un'];
mysql_connect($servername,$username,$passwprd);
mysql_select_db("irctc");
$sql="SELECT * FROM users WHERE Username='$un'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==0)
{	
	$query="INSERT INTO users(Name,Username,Password,Email,Phone) VALUES('$nm','$un','$pass','$eid','$mno')";
	mysql_query($query);
	header("Location:index.html");
}
else
{	
		header("Location:index1.html");
}

?>