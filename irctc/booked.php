<?php
$servername="localhost";
$username="root";
$password="";
$dbname="irctc";
mysql_connect("localhost","root","");
mysql_select_db("irctc");
$tn=$_POST['n1'];
$p=$_POST['n2'];
$fm=$_SESSION['from'];
$to=$_SESSION['to'];
$m="SELECT * FROM rajdhani WHERE Source='$fm' AND Destination='$to'";
$n=mysql_query($m);
$mo=mysql_fetch_assoc($n);
$d=$_SESSION['date'];
$un=$_SESSION['username'];
mysql_connect($servername,$username,$password);
mysql_select_db($dbname);
$var="123456798546413657945632179965423987563140055056775984231025995501596315962020599850";
$pnr=substr(str_shuffle($var),0,7);
$_SESSION['pnr']=$pnr;
$query="SELECT Rate FROM trains WHERE Tnumber='$tn'";
$query2="SELECT Capacity FROM trains WHERE Tnumber='$tn'";
$res=mysql_query($query2);
$row2=mysql_fetch_array($res);
$result=mysql_query($query);
$row=mysql_fetch_array($result);
$amt=$row['Rate'];
if($row2['Capacity']==0)
{	echo "<h2>";
	echo "Sorry No Seats Available";
	echo "</h2>";
}
else
{
$cap=$row2['Capacity']-$p;
$tamt=$amt*$p;
$pnr=$_SESSION['pnr'];
 $ins="INSERT INTO booking(Name,Pnr,Tnumber,Source,Destination,Peoples,Amount,Dot) VALUES('$un','$pnr','$fm','$to','$to','$tamt','$p','$d')";
 mysql_query($ins);
$sql1="UPDATE booking SET Tnumber='$tn' WHERE Pnr='$pnr'";
$sql="UPDATE booking SET Peoples='$p' WHERE Pnr='$pnr'";
$sql2="UPDATE booking SET Amount='$tamt' WHERE Pnr='$pnr'";
$sql3="UPDATE trains SET Capacity='$cap' WHERE Tnumber='$tn'";
mysql_query($sql);
mysql_query($sql1);
mysql_query($sql2);
mysql_query($sql3);
}
}
else
{	echo "<h2>";
	echo "Sorry, You Entered Wrong Train Number";
	echo "</h2>";
}?>
