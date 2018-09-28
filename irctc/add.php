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
	<title>Added</title>
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
    height:6%;
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
    .sign_in1
{
  float:left;
width="10%";
height="10%";
margin-top: 0.1%;
padding-right: 0%;
margin-left: 2%;
font-family: 'Amatic SC', cursive;
font-size: 20px;
color: black;
padding: 10px;
text-align: left;
background-color: none;  


}
.sign_in
{
	float :left;
	margin-left:10px;

}
  .button {
  float: left;
  background-color:#4caf50;
  margin-left: 29%;
  margin-top: 1%;
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
  <li><a  href="base.php">Home</a></li>
  <li><a href="trinfo.php">Train Info.</a></li>
  <li><a href="usinfo.php">Users Info.</a></li>
  <li><a href="amap.php">Map</a></li>
  <li><a href=bkinfo.php>Booking Info.</a></li>
  <li><a class="active" href=udtinfo.php>Train Data Updation</a></li>
  <li><a href=deltrain.php>Delete Train</a></li>
  <li style="float:right;"><a href="Logout.php">Logout</a></li>
  <li style="float:right;"><a href="base.php"><?php echo "Welcome ".$_SESSION['username'];?></a></li>

</ul>


<?php
session_start();
$tnum=$_SESSION['tnum'];
$ss1=$_POST['ss1'];
$ds1=$_POST['ds1'];
$ast1=$_POST['ast1'];	
$dst1=$_POST['dst1'];
$adt1=$_POST['adt1'];
$ddt1=$_POST['ddt1'];
mysql_connect("localhost","root","");
mysql_select_db("irctc");
$sql="INSERT INTO rajdhani(Tnumber,Source,Destination,Arrival,Departure,DestinationArrival,DestinationDeparture) VALUES('$tnum','$ss1','$ds1','$ast1','$dst1','$adt1','$ddt1')";
mysql_query($sql);
$ss2=$_POST['ss2'];
$ds2=$_POST['ds2'];
$ast2=$_POST['ast2'];
$dst2=$_POST['dst2'];
$adt2=$_POST['adt2'];
$ddt2=$_POST['ddt2'];
$sql1="INSERT INTO rajdhani(Tnumber,Source,Destination,Arrival,Departure,DestinationArrival,DestinationDeparture) VALUES('$tnum','$ss2','$ds2','$ast2','$dst2','$adt2','$ddt2')";
mysql_query($sql1);
$ss3=$_POST['ss3'];
$ds3=$_POST['ds3'];
$ast3=$_POST['ast3'];
$dst3=$_POST['dst3'];
$adt3=$_POST['adt3'];
$ddt3=$_POST['ddt3'];
$sql2="INSERT INTO rajdhani(Tnumber,Source,Destination,Arrival,Departure,DestinationArrival,DestinationDeparture) VALUES('$tnum','$ss3','$ds3','$ast3','$dst3','$adt3','$ddt3')";
mysql_query($sql2);
$ss4=$_POST['ss4'];
$ds4=$_POST['ds4'];
$ast4=$_POST['ast4'];
$dst4=$_POST['dst4'];
$adt4=$_POST['adt4'];
$ddt4=$_POST['ddt4'];
$sql3="INSERT INTO rajdhani(Tnumber,Source,Destination,Arrival,Departure,DestinationArrival,DestinationDeparture) VALUES('$tnum','$ss4','$ds4','$ast4','$dst4','$adt4','$ddt4')";
mysql_query($sql3);
$ss5=$_POST['ss5'];
$ds5=$_POST['ds5'];
$ast5=$_POST['ast5'];
$dst5=$_POST['dst5'];
$adt5=$_POST['adt5'];
$ddt5=$_POST['ddt5'];
$sql4="INSERT INTO rajdhani(Tnumber,Source,Destination,Arrival,Departure,DestinationArrival,DestinationDeparture) VALUES('$tnum','$ss5','$ds5','$ast5','$dst5','$adt5','$ddt5')";
mysql_query($sql4);
$ss6=$_POST['ss6'];
$ds6=$_POST['ds6'];
$ast6=$_POST['ast6'];
$dst6=$_POST['dst6'];
$adt6=$_POST['adt6'];
$ddt6=$_POST['ddt6'];
$sql5="INSERT INTO rajdhani(Tnumber,Source,Destination,Arrival,Departure,DestinationArrival,DestinationDeparture) VALUES('$tnum','$ss6','$ds6','$ast6','$dst6','$adt6','$ddt6')";
mysql_query($sql5);
$ss7=$_POST['ss7'];
$ds7=$_POST['ds7'];
$ast7=$_POST['ast7'];
$dst7=$_POST['dst7'];
$adt7=$_POST['adt7'];
$ddt7=$_POST['ddt7'];
$sql6="INSERT INTO rajdhani(Tnumber,Source,Destination,Arrival,Departure,DestinationArrival,DestinationDeparture) VALUES('$tnum','$ss7','$ds7','$ast7','$dst7','$adt7','$ddt7')";
mysql_query($sql6);
$ss8=$_POST['ss8'];
$ds8=$_POST['ds8'];
$ast8=$_POST['ast8'];
$dst8=$_POST['dst8'];
$adt8=$_POST['adt8'];
$ddt8=$_POST['ddt8'];
$sql7="INSERT INTO rajdhani(Tnumber,Source,Destination,Arrival,Departure,DestinationArrival,DestinationDeparture) VALUES('$tnum','$ss8','$ds8','$ast8','$dst8','$adt8','$ddt8')";
mysql_query($sql7);
$ss9=$_POST['ss9'];
$ds9=$_POST['ds9'];
$ast9=$_POST['ast9'];
$dst9=$_POST['dst9'];
$adt9=$_POST['adt9'];
$ddt9=$_POST['ddt9'];
$sql8="INSERT INTO rajdhani(Tnumber,Source,Destination,Arrival,Departure,DestinationArrival,DestinationDeparture) VALUES('$tnum','$ss9','$ds9','$ast9','$dst9','$adt9','$ddt9')";
mysql_query($sql8);
$ss10=$_POST['ss10'];
$ds10=$_POST['ds10'];
$ast10=$_POST['ast10'];
$dst10=$_POST['dst10'];
$adt10=$_POST['adt10'];
$ddt10=$_POST['ddt10'];
$sql9="INSERT INTO rajdhani(Tnumber,Source,Destination,Arrival,Departure,DestinationArrival,DestinationDeparture) VALUES('$tnum','$ss10','$ds10','$ast10','$dst10','$adt10','$ddt10')";
mysql_query($sql9);
echo "<h1>";
echo "Data Entered For The New Train";
echo "</h1>";
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