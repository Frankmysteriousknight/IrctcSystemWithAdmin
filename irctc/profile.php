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
	<title>Your Profile</title>
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
		background-color: #4d94ff;
		color:white;
	}
	li a:hover:not(.active){
		background-color: #cccccc;
		color:white;
	}
	.img{
		height:40px;
		width: 40px;
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
margin-top: 3.8%;
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
  margin-top: 5.5%;
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
	<li><a href="home.php">Home</a></li>
	<li><a href="train3.php">Trains</a></li>
	<li><a href="map.php">Map</a></li>
	<li><a>About</a></li>
	<li><a class="active" href=profile.php>Cancel Tickets</a></li>
	<li style="float:right;"><a  href="Logout.php">Logout</a></li>
	<li style="float:right;"><a class="active" href="profile.php"><?php echo "Welcome ".$_SESSION['username'];?></a></li>

</ul>
<h2 style="font-size: 20px;font-family:'Amatic SC',Cursive;">
<?php
include("mysql.php");

$select_query = "SELECT `imgpath` FROM  `imgtbl` WHERE `Username`='".$_SESSION['username']."';";
$sql = mysqli_query($conn,$select_query) or die(mysqli_error($conn));   
if(mysqli_num_rows($sql)>0)
{ 
?>
Want to Update your Profile Picture???
Click Here
<form method="post" action="UdpP.php" enctype="multipart/form-data">
  <input type="file" name="uploadedimage" value="Upload Here">
  <input type="submit" name="submit">
</form>
Want to Delete Your Profile Pic???
Click Here
<form method="post" action="DelP.php">
<input type="submit" name="submit">
</form></h2>
<?php
}
else
{
	?>
Want to Upload your first your Profile Picture???
Click Here
<form method="post" action="GetP.php" enctype="multipart/form-data">
  <input type="file" name="uploadedimage" value="Upload Here">
  <input type="submit" name="submit">
</form></h2>
<?php }?>

<table>

	
	<?php

		mysql_connect("localhost","root","");
		mysql_select_db("irctc");
		$un=$_SESSION['username'];
		$sq="SELECT * FROM users WHERE Username='$un'";
		$res=mysql_query($sq);
if(mysql_num_rows($res)>0)
	{
		while($row=mysql_fetch_assoc($res))
		{	

		?>		
				<tr style="border: 3px solid #cccccc; background-color: #cccccc;font-style: bold;">
		<td>Name</td>
		<td>User Name</td>
		<td>Email Id</td>
		<td>Password</td>
		<td>Phone</td>
	</tr>
				<tr>
					<td><?php echo $row['Name'];?></td>
					<td><?php echo $row['Username'];?></td>
					<td><?php echo $row['Password'];?></td>
					<td><?php echo $row['Email'];?></td>
					<td><?php echo $row['Phone'];?></td>
				</tr>
				<?php 

			}
		}
		else if(isset($_SESSION['username']))
		{	?>
			<tr style="border: 3px solid #cccccc; background-color: #cccccc;font-style: bold;">
		<td>Name</td>
		<td>Email Id</td>
		<td>Gender</td>
		<td>Family name</td>
	</tr>
				<tr>
					<td><?php echo $_SESSION['username'];?></td>
					<td><?php echo $_SESSION['email'];?></td>
					<td><?php echo $_SESSION['gender'];?></td>
					<td><?php echo $_SESSION['familyName'];?></td>
					
				</tr>
				


			<?php
		}
		else
		{
			echo "<h2>";
			echo "No such record";
			echo "</h2>";
		}


	?>
</table>
<h2 style="font-size: 20px;font-family:'Amatic SC',Cursive;">Your Bookings are Shown Below:-</h2>
<table>
		<tr style="border: 3px solid #cccccc; background-color: #cccccc;font-style: bold; padding:10px;">
		<td>PNR No.</td>
		<td>Train No.</td>
		<td>Source</td>
		<td>Destination</td>
		<td>Peoples</td>
		<td>Amount</td>
		<td>Date of Travel</td>
	</tr>
	<?php
		mysql_connect("localhost","root","");
		mysql_select_db("irctc");
		$un=$_SESSION['username'];
		$sql="SELECT * FROM booking WHERE Name='$un'";
		$result=mysql_query($sql);
		if(mysql_num_rows($result)>0)
		{
			while($row=mysql_fetch_assoc($result))
			{	

				?>

				<tr>
					
					<td><?php echo $row['Pnr'];?></td>
					<td><?php echo $row['Tnumber'];?></td>
					<td><?php echo $row['Source'];?></td>
					<td><?php echo $row['Destination'];?></td>
					<td><?php echo $row['Peoples'];?></td>
					<td><?php echo $row['Amount'];?></td>
					<td><?php echo $row['Dot'];?></td>
				</tr>
				<?php 

			}
		}
		else
		{	echo "<h2>";
			echo "There is no booking up till now";
			echo "</h2>";
		}


	?>
</table>
<br>
<div class="sign_in1">
<form method="POST" action="Cancel.php">
	Enter Your PNR No.<br><input type="number" name="t1" id="t1" style="margin-left:60px;padding: 7px;width:70%;font-family: 'Amatic SC',cursive;font-size: 25px;"><br>
	Enter the No. of Tickets you want to Cancel<br><input type="number" name="t2" id="t2" style="margin-left:60px;padding: 7px;width:70%;font-family: 'Amatic SC',cursive;font-size: 25px;"><br>
	<input type="submit" name="b1" id="b1" value="Cancel The Bookings" class="button">
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