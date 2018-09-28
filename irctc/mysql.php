<?php
$servername='localhost';
$dbname='irctc';
$user='root';
$password='';
$conn=mysqli_connect($servername,$user,$password,$dbname);
if($conn)
{
	$db_selected=mysqli_select_db($conn,$dbname);
	if(!$db_selected){
		die('Can\'t use foo:'. mysqli_error());
	}
	
}
else
	{
		die('Not Connected:' . mysqli_error($conn));
	}

?>