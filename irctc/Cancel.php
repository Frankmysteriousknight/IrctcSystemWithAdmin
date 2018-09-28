<?php
session_start();

if(!isset($_SESSION['username']))
{
  header('Location:index.html');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cancelled</title>
</head>
<style type="text/css">
	.navbar{
		overflow-x:hidden;
		background-color:none;
		font-family: 'Amatic SC',cursive;
		align-content:center;
		text-align:center;
		align-content: center;
		width:100%;
	}
	.n1{
		color:white;
		width:70%;
		padding:2px;
		float:left;
		overflow-x:hidden;
		text-align: left;
		align-content:center;
		margin:2px;
		font-size: 40px;
		background-color:none;
	}
	.n2{
		width:25%;
		padding:12px;
		float:right;
		font-size:50px;
		overflow-x:hidden;
		align-content: center;
		text-align: right;
		margin:2px;
		background-color: none;
	}
	.o1{
		width:7%;
		margin:2px;
		padding-top:4px;
		text-align: left;
		float:left;
		margin-top: 2px;
		padding-left: 5px;
		background-color: none;
	}
	a{
		color:#cccccc;
		text-decoration: none;
	}
	.o2{
		width:88%;
		margin:2px;
		padding-top: 4px;
		text-align: left;
		float:left;
		font-size:50px;
		color:white;
		background-color: none;
	}
	.o1 :hover:not(.active){
		background-color: none;
	}
	.o2 :hover:not(.active){
		background-color: none;
	}
	.n2 :hover:not(.active){
		background-color: none;
	}
	ul{
		list-style-type:none;
		margin-top:0.05%;
		padding:0;
		width:100%;
		height:10%;
		font-family:'Amatic SC',cursive;
		font-size: 27px;
		background-color: #cccccc;
		overflow:hidden;
		border-radius: 12.5px;
	}
	li a{
		display:block;
		color:#000;
		padding: 8px 16px;
		text-decoration: none;
	}
	a{
		float:left;
	}
	li{
		float:left;
	}
	li a.active{
		background-color: #4d94ff;
		color:white;
	}
	li a:hover:not(.active){
		background-color: #cccccc;
		color:white;
	}
	.active{
		background-color: #80b3ff;
	}
	.button {
	float: left;
	background-color:#0033cc ;
	margin-top: 1px;
	border: none;
	color : white;
	padding : 15px 32px;
	text-align:center;
	text-decoration:none;
	display:inline-block;
	font-size:25px;
	margin:4px 2 px;
	cursor:pointer;
	font-family: 'Amatic SC', cursive;
	}
@keyframes slider {
0% {
  left: 0;
}
20% {
  left: 0;
}
25% {
  left: -100%;
}
45% {
    left: -100%;
}
50% {
    left: -200%;
}
70% {
  left: -200%;
}
75% {
  left: -300%;
}
95% {
  left: -300%;
}
100% {
  left: -400%;
}
}
#slider {
  overflow: hidden;
}
#slider div img {
  width: 20%;
  float: left;
}
#slider div {
  position: relative;
  width: 500%;
  animation: 10s slider infinite; 
}
</style>
<body background="Seamless Polygon Backgrounds Vol2\Ready to use JPGs\01.jpg">
<div class="navbar">
	<div class="n1">
		<div class="o1"><a href="home.php"><img src="64332.png" height="80 px"></a></div>
		<div class="o2"><a href="home.php">|IRCTC-E-Reservation|</a></div>	
	</div>
	<div class="n2">

		<a>|Contact Us|</a>
		<?php
include("mysql.php");

$select_query = "SELECT `imgpath` FROM  `imgtbl` WHERE `Username`='".$_SESSION['username']."';";
$sql = mysqli_query($conn,$select_query) or die(mysqli_error($conn));   
if(mysqli_num_rows($sql)>0)
{
while($row = mysqli_fetch_array($sql,MYSQL_BOTH)){
?>
<img src="<?php echo $row["imgpath"]?>" style="width: 20%;">

<?php

}}
else if(isset($_SESSION['picture']))
{
	?>
<img src="<?php echo $_SESSION["picture"]?>" style="width: 20%;">

	<?php
}
else
{
?><a href="profile.php"><img src="user.jpg" height="80px"></a>
<?php	
}

?></a>
		
	</div>
</div>		
<ul>
	<li><a class="active" href="home.php">Home</a></li>
	<li><a href="train3.php">Trains</a></li>
	<li><a href="map.php">Map</a></li>
	<li><a>About</a></li>
	<li><a href=Cancel.php>Cancel Tickets</a></li>
	<li style="float:right;"><a href="Logout.php">Logout</a></li>
	<li style="float:right;"><a href="profile.php"><?php echo "Welcome ".$_SESSION['username'];?></a></li>

</ul>
<h1 style="font-family:'Amatic SC',Cursive;font-size: 32px;margin-left:550px;">Your Tickets Have Been Cancelled</h1>
<?php
mysql_connect("localhost","root","");
mysql_select_db("irctc");
$pnr=$_POST['t1'];
$que="SELECT * FROM booking WHERE Pnr='$pnr'";
$re=mysql_query($que);
$prow=mysql_fetch_assoc($re);
if($prow>0)
	{
		
		$ct=$_POST['t2'];
$sql="SELECT Peoples FROM booking WHERE Pnr='$pnr'";
$sql1="SELECT Tnumber FROM booking WHERE Pnr='$pnr'";
$res=mysql_query($sql1);
$row2=mysql_fetch_array($res);
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$tp=$row['Peoples'];
$tn=$row2['Tnumber'];
$query="SELECT Capacity FROM trains WHERE Tnumber='$tn'";
$result2=mysql_query($query);
$row3=mysql_fetch_array($result2);
$cp=$row3['Capacity'];
if($ct>$tp)
{
	echo "You Have Not done This much booking.PLEASE Check";
}
else
{
	$rt=$tp-$ct;
	$us=$cp+$ct;
	if($rt==0)
	{	
		$que="DELETE FROM booking WHERE Pnr='$pnr'";
		$que2="UPDATE trains SET Capacity='$us' WHERE Tnumber='$tn'";
		mysql_query($que);
		mysql_query($que2);
		echo "<h1>";
		echo "Your Bookings Have been cancelled";
		echo "</h1>";
	}
	else
	{
		$que1="UPDATE booking SET Peoples='$rt' WHERE Pnr='$pnr'";
		$que3="UPDATE trains SET Capacity='$us' WHERE Tnumber='$tn'";
		mysql_query($que1);
		mysql_query($que3);
		echo "<h1>";
		echo "Your Remaing tickets are".$rt;
		echo "</h1>";
	}	
}

	}
else {
	header("Location:Book1.php");
}


?>
<div id="slider">
    <div>
      <img src="13214.jpg">
      <img src="295875.jpg">
      <img src="437778.jpg">
      <img src="661783.jpg">
      <img src="672793.jpg">
    </div>  
  </div>
</body>
</html>