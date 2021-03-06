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
	<title>Welocme to IRCTC</title>
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
		height:30%;
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
	margin-top: 10px;
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
	.sign_in
{
  float:left;
width="30%";
height="50%";
margin-top: 3.1%;
padding: 1%;
margin-left: 8%;
font-family: 'Amatic SC', cursive;
font-size: 20px;
color: #ffffff;
text-align: center;
background-color: #668cff;  
border: 5px solid #cccccc;
border-radius: 12.5px;
}
	.sign_in1
{
  float:left;
width="10%";
height="10%";
margin-top: 3.1%;
padding-right: 0%;
margin-left: 0%;
font-family: 'Amatic SC', cursive;
font-size: 20px;
color: black;
text-align: left;
background-color: none;  


}
.user
{
width="20%";
height="50%";
margin-top: 0%;  
margin-bottom: 0%;

}
.rgbn
{
  width="50%";
  height="50%";
  float: right;
  margin-top: 10%;
}
.myslides{display:none;}
.slideshow-container{
	width:650px;
	height:350px;
	float: right;
  margin-right: 2%;
  margin-top: 2.5%;
  border: 2px solid #cccccc;
  border-radius: 12.5px;
}
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

</style>
</head>
<script type="text/javascript" src="logval.js">
</script>
<body background="Seamless Polygon Backgrounds Vol2\Ready to use JPGs\01.jpg">
<div class="navbar">
	<div class="n1">
		<div class="o1"><a href="home.php"><img src="64332.png" height="80 px"></a></div>
		<div class="o2"><a href="home.php">|IRCTC-E-Reservation|</a></div>	
	</div>
	<div class="n2">

		<a>|Contact Us|</a>
		<a href="profile.php"><?php
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
	<li><a  href="home.php">Home</a></li>
	<li><a href="train3.php">Trains</a></li>
	<li><a class="active" href="map.php">Map</a></li>
	<li><a>About</a></li>
	<li><a href=profile.php>Cancel Tickets</a></li>
	<li style="float:right;"><a href="Logout.php">Logout</a></li>
	<li style="float:right;"><a href="profile.php"><?php echo "Welcome ".$_SESSION['username'];?></a></li>

</ul>
</div>
<h2 style="font-size: 20px;font-family:'Amatic SC',Cursive; padding-left: 520px;">Your Nearest Railway Station is</h2>
<div id="map" style="width:100%;height:450px;"></div>

<script>
function myMap() {
        var myLatLng = {lat: 26.9183 , lng: 75.7900};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Jaipur Station'
        });
      }
</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCB9CScP8A3gNLDYzMK9lIOFRQZzTNVhXA&callback=myMap"></script>

</body>
</html>