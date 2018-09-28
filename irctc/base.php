<?php
session_start();

if(!isset($_SESSION['username']))
{
  header('Location:admin.html');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
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
		background-color: #e6af4b;
		color:white;
	}
	li a:hover:not(.active){
		background-color: #cccccc;
		color:white;
	}
	.active{
		background-color: #ffff66;
	}
	.button {
	float: left;
	background-color:#4caf50 ;
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
<body background="Seamless Polygon Backgrounds Vol2\Ready to use JPGs\05.jpg">
	<div class="navbar">
	<div class="n1">
		<div class="o1"><a href="base.php"><img src="64332.png" height="80 px"></a></div>
		<div class="o2"><a href="base.php">|IRCTC-Admin-Panel|</a></div>	
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
else
{
?><a href="profile.php"><img src="user.jpg" height="80px"></a>
<?php	
}

?></a>
		
	</div>
</div>		
<ul>
	<li><a class="active" href="base.php">Home</a></li>
	<li><a href="trinfo.php">Train Info.</a></li>
	<li><a href="usinfo.php">Users Info.</a></li>
	<li><a href="amap.php">Map</a></li>
	<li><a href=bkinfo.php>Booking Info.</a></li>
	<li><a href="trinfo.php">Train Info.</a></li>
	<li><a href="trinfo.php">Flight Info.</a></li>
	<li><a href="trinfo.php">Bus Info.</a></li>
	<li><a href=udtinfo.php>Train Data Updation</a></li>
	<li style="float:right;"><a href="Logout.php">Logout</a></li>
	<li style="float:right;"><a href="base.php"><?php echo "Welcome ".$_SESSION['username'];?></a></li>

</ul>
<h2 style="font-size: 20px;font-family:'Amatic SC',Cursive; padding-left: 300px;">Welcome to the Admin Panel,Please Proceed The Further Information and Databasse at one single Panel</h2>
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