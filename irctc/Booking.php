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
	<title>Book your tickets</title>
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
	table {
    border-collapse: collapse;
 	font-size: 20px;
    width: 100%;
    border: 1px solid #ddd ;
    font-family: 'Amatic SC', cursive;
  }

th, td {
    padding: 8px;
    text-align: center;
    border-bottom: 1px solid #ddd;

}

tr:hover{background-color:#f5f5f5}
		.sign_in1
{
  float:left;
width="10%";
height="10%";
margin-top: 0.8%;
padding-right: 0%;
margin-left: 0%;
font-family: 'Amatic SC', cursive;
font-size: 30px;
color: black;
text-align: left;
background-color: none;  


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
<script>
	function checkform(form){
		if(form.n1.value=="")
		{
			alert("Please Enter the Train No.");
			return false;
		}
		if(form.n2.value=="")
		{
			alert("Please Enter the No. of Seats");
			return false;
		}
		if(form.n2.value>10)
		{
			alert("Sorry, You can Only Book 10 tickets at a time");
			return false;
		}
	}
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
	<li><a class="active" href="home.php">Home</a></li>
	<li><a href="train3.php">Trains</a></li>
	<li><a href="map.php">Map</a></li>
	<li><a>About</a></li>
	<li><a href=profile.php>Cancel Tickets</a></li>
	<li style="float:right;"><a href="Logout.php">Logout</a></li>
	<li style="float:right;"><a href="profile.php"><?php echo "Welcome ".$_SESSION['username'];?></a></li>

</ul>
<h2 style="font-size: 20px;font-family:'Amatic SC',Cursive; padding-left: 500px;">Here are Some of The Trains That Run On The Particular Days</h2>
 <table>
	<tr style="border: 3px solid #cccccc; background-color: #cccccc;font-style: bold;">
		<td>Train</td>
		<td>Train No.</td>
		<td>Day</td>
		<td>Capacity</td>
		<td>Rate</td></tr>
<?php

$servername="localhost";
$username="root";
$password="";
$dbname="irctc";
$d=$_POST['d1'];
$_SESSION['date']=$d;
$day=date('l',strtotime($d));
mysql_connect($servername,$username,$password);
mysql_select_db("irctc");
$sql="SELECT * FROM trains WHERE Day='$day'";
$result=mysql_query($sql);
if(mysql_num_rows($result)>0)
{
	while($row=mysql_fetch_assoc($result))
	{ 
		?>
			<tr>
				<td><?php echo $row['Train'];?></td>
				<td><?php echo $row['Tnumber'];?></td>
				<td><?php echo $row['Day'];?></td>
				<td><?php echo $row['Capacity'];?></td>
				<td><?php echo $row['Rate'];?></td>
			</tr>
		<h2 style="font-family:'Amatic SC',Cursive;font-size: 20px;margin-left:500px;"><?php
	}

}
else {
	echo "Sorry, No Trains Available on this Day, But you can Find The Trains Below Under Your Conditions";
}
?> </h2>
 </table>
 <table>
 	<h2 style="font-size: 20px;font-family:'Amatic SC',Cursive; padding-left: 500px;">Here are Some Trains That Go Under Your Requirement</h2>
 		
<?php

$servername="localhost";
$username="root";
$password="";
$dbname="irctc";
$fm=$_POST['a1'];
$to=$_POST['a2'];
$_SESSION['from']=$fm;
$_SESSION['to']=$to;
mysql_connect($servername,$username,$password);
mysql_select_db("irctc");
$sq="SELECT Day FROM trains WHERE Day='$day'";
$sql="SELECT * FROM rajdhani WHERE Source='$fm' AND Destination='$to'";
$result=mysql_query($sql);
$res=mysql_query($sq);
$row1=mysql_fetch_array($res);
if(mysql_num_rows($result)>0)
{
  while($row=mysql_fetch_assoc($result))
    {
    ?>
    	<tr style="border: 3px solid #cccccc; background-color: #cccccc">
 			<td>Day</td>
 		<td>Train No.</td>
       <td>Source</td>
        <td>Destination</td>
        <td>Source Arrival Time</td>
        <td>Source Departure Time</td>
        <td>Destination Arrival Time</td>
        <td>Destination Departure Time</td>
      </tr>
    
      <tr>
      	<td><?php echo $row1['Day'];?></td>
      	<td><?php echo $row['Tnumber'];?></td>
         <td><?php echo $row['Source'];?></td>
        <td><?php echo $row['Destination'];?></td>
        <td><?php echo $row['Arrival'];?></td>
        <td><?php echo $row['Departure'];?></td>
        <td><?php echo $row['DestinationArrival'];?></td>
        <td><?php echo $row['DestinationDeparture'];?></td>
       </tr>
   
<h2 style="font-family:'Amatic SC',Cursive;font-size: 20px;margin-left:500px;">  <?php  
  } 
}

else 
  {	echo "<h2>";
    echo "No Trains Available";
    echo "</h2>";
  }  
?> </h2>
 </table>
<div class="sign_in1">

<form name="form" id="form" method="POST" action="booktrain.php" ... onsubmit="return checkform(this);" style="margin-top: 70px;">
	Enter the Train No.<br><input type="number" name="n1" id="n1" style="margin-left:60px;padding: 7px;width:90%;font-family: 'Amatic SC',cursive;font-size: 25px;"><br>
	Enter the Total No. of Seats<br><input type="number" name="n2" id="n2" style="margin-left:60px;padding: 7px;width:90%;font-family: 'Amatic SC',cursive;font-size: 25px;"><br>
	<input type="submit" name="b1" id="b1" value="Book Tickets" class="button" style="margin-top: 1.8%;">
</form>
</div>

 <div class="slideshow-container">
<div class="mySlides fade">
  <img src="437778.jpg" style="width:650px;height:350px;border-radius: 12.5px">
</div>

<div class="mySlides fade">
  <img src="672793.jpg" style="width:650px;height:350px;border-radius: 12.5px">
</div>

</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    slides[slideIndex-1].style.display = "block";  
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>
