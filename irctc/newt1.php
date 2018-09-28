<?php
session_start();
$_SESSION['tnum']=$_POST['tnum'];
mysql_connect("localhost","root","");
mysql_select_db("irctc");
$tnum=$_POST['tnum'];
$tname=$_POST['tname'];
$day=$_POST['day'];
$cap=$_POST['cap'];
$rt=$_POST['rate'];
$sql1="SELECT * FROM trains WHERE Tnumber='$tnum'";
$result=mysql_query($sql1);
$count=mysql_num_rows($result);
if($count==0)
{
$sql="INSERT INTO trains(Train,Tnumber,Day,Capacity,Rate) VALUES('$tname','$tnum','$day','$cap','$rt')";
mysql_query($sql);
}
else
{
	echo "Train Already Available";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add The Complete Details</title>
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
.ipfrm
{
	margin-left:60px;padding: 7px;height:5%;width:50%;font-family: 'Amatic SC',cursive;font-size: 15px;
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
<script type="text/javascript">
	function valform(form)
	{	
		if(form.ss1.value=="")
		{
			alert("Please Enter the Source Station");
			return false;
		}
		if(form.ds1.value=="")
		{
			alert("Please Enter the Destination Station");
			return false;
		}
		if(form.ast1.value=="")
		{
			alert("Please Enter the Time of Arrival at Source Station");
			return false;
		}
		if(form.dst1.value=="")
		{
			alert("Please Enter the Departutre Time From Source Station");
			return false;
		}
		if(form.adt1.value=="")
		{
			alert("Please Enter the Arrival Time at the Source Station");
			return false;
		}
		if(form.ddt1.value=="")
		{
			alert("Please Enter the Departure Time at the Destination Station");
			return false;
		}
		if(form.ss2.value=="")
		{
			alert("Please Enter the Source Station");
			return false;
		}
		if(form.ds2.value=="")
		{
			alert("Please Enter the Destination Station");
			return false;
		}
		if(form.ast2.value=="")
		{
			alert("Please Enter the Time of Arrival at Source Station");
			return false;
		}
		if(form.dst2.value=="")
		{
			alert("Please Enter the Departutre Time From Source Station");
			return false;
		}
		if(form.adt2.value=="")
		{
			alert("Please Enter the Arrival Time at the Source Station");
			return false;
		}
		if(form.ddt2.value=="")
		{
			alert("Please Enter the Departure Time at the Destination Station");
			return false;
		}
		if(form.ss3.value=="")
		{
			alert("Please Enter the Source Station");
			return false;
		}
		if(form.ds3.value=="")
		{
			alert("Please Enter the Destination Station");
			return false;
		}
		if(form.ast3.value=="")
		{
			alert("Please Enter the Time of Arrival at Source Station");
			return false;
		}
		if(form.dst3.value=="")
		{
			alert("Please Enter the Departutre Time From Source Station");
			return false;
		}
		if(form.adt3.value=="")
		{
			alert("Please Enter the Arrival Time at the Source Station");
			return false;
		}
		if(form.ddt3.value=="")
		{
			alert("Please Enter the Departure Time at the Destination Station");
			return false;
		}
		if(form.ss4.value=="")
		{
			alert("Please Enter the Source Station");
			return false;
		}
		if(form.ds4.value=="")
		{
			alert("Please Enter the Destination Station");
			return false;
		}
		if(form.ast4.value=="")
		{
			alert("Please Enter the Time of Arrival at Source Station");
			return false;
		}
		if(form.dst4.value=="")
		{
			alert("Please Enter the Departutre Time From Source Station");
			return false;
		}
		if(form.adt4.value=="")
		{
			alert("Please Enter the Arrival Time at the Source Station");
			return false;
		}
		if(form.ddt4.value=="")
		{
			alert("Please Enter the Departure Time at the Destination Station");
			return false;
		}
		if(form.ss5.value=="")
		{
			alert("Please Enter the Source Station");
			return false;
		}
		if(form.ds5.value=="")
		{
			alert("Please Enter the Destination Station");
			return false;
		}
		if(form.ast5.value=="")
		{
			alert("Please Enter the Time of Arrival at Source Station");
			return false;
		}
		if(form.dst5.value=="")
		{
			alert("Please Enter the Departutre Time From Source Station");
			return false;
		}
		if(form.adt5.value=="")
		{
			alert("Please Enter the Arrival Time at the Source Station");
			return false;
		}
		if(form.ddt5.value=="")
		{
			alert("Please Enter the Departure Time at the Destination Station");
			return false;
		}
		if(form.ss6.value=="")
		{
			alert("Please Enter the Source Station");
			return false;
		}
		if(form.ds6.value=="")
		{
			alert("Please Enter the Destination Station");
			return false;
		}
		if(form.ast6.value=="")
		{
			alert("Please Enter the Time of Arrival at Source Station");
			return false;
		}
		if(form.dst6.value=="")
		{
			alert("Please Enter the Departutre Time From Source Station");
			return false;
		}
		if(form.adt6.value=="")
		{
			alert("Please Enter the Arrival Time at the Source Station");
			return false;
		}
		if(form.ddt6.value=="")
		{
			alert("Please Enter the Departure Time at the Destination Station");
			return false;
		}
		if(form.ss7.value=="")
		{
			alert("Please Enter the Source Station");
			return false;
		}
		if(form.ds7.value=="")
		{
			alert("Please Enter the Destination Station");
			return false;
		}
		if(form.ast7.value=="")
		{
			alert("Please Enter the Time of Arrival at Source Station");
			return false;
		}
		if(form.dst7.value=="")
		{
			alert("Please Enter the Departutre Time From Source Station");
			return false;
		}
		if(form.adt7.value=="")
		{
			alert("Please Enter the Arrival Time at the Source Station");
			return false;
		}
		if(form.ddt7.value=="")
		{
			alert("Please Enter the Departure Time at the Destination Station");
			return false;
		}
		if(form.ss8.value=="")
		{
			alert("Please Enter the Source Station");
			return false;
		}
		if(form.ds8.value=="")
		{
			alert("Please Enter the Destination Station");
			return false;
		}
		if(form.ast8.value=="")
		{
			alert("Please Enter the Time of Arrival at Source Station");
			return false;
		}
		if(form.dst8.value=="")
		{
			alert("Please Enter the Departutre Time From Source Station");
			return false;
		}
		if(form.adt8.value=="")
		{
			alert("Please Enter the Arrival Time at the Source Station");
			return false;
		}
		if(form.ddt8.value=="")
		{
			alert("Please Enter the Departure Time at the Destination Station");
			return false;
		}
		if(form.ss9.value=="")
		{
			alert("Please Enter the Source Station");
			return false;
		}
		if(form.ds9.value=="")
		{
			alert("Please Enter the Destination Station");
			return false;
		}
		if(form.ast9.value=="")
		{
			alert("Please Enter the Time of Arrival at Source Station");
			return false;
		}
		if(form.dst9.value=="")
		{
			alert("Please Enter the Departutre Time From Source Station");
			return false;
		}
		if(form.adt9.value=="")
		{
			alert("Please Enter the Arrival Time at the Source Station");
			return false;
		}
		if(form.ddt9.value=="")
		{
			alert("Please Enter the Departure Time at the Destination Station");
			return false;
		}
		if(form.ss10.value=="")
		{
			alert("Please Enter the Source Station");
			return false;
		}
		if(form.ds10.value=="")
		{
			alert("Please Enter the Destination Station");
			return false;
		}
		if(form.ast10.value=="")
		{
			alert("Please Enter the Time of Arrival at Source Station");
			return false;
		}
		if(form.dst10.value=="")
		{
			alert("Please Enter the Departutre Time From Source Station");
			return false;
		}
		if(form.adt10.value=="")
		{
			alert("Please Enter the Arrival Time at the Source Station");
			return false;
		}
		if(form.ddt10.value=="")
		{
			alert("Please Enter the Departure Time at the Destination Station");
			return false;
		}
	}

	
</script>
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
  <li><a  href="trinfo.php">Train Info.</a></li>
  <li><a href="usinfo.php">Users Info.</a></li>
  <li><a href="amap.php">Map</a></li>
  <li><a href=bkinfo.php>Booking Info.</a></li>
  <li><a class="active" href=udtinfo.php>Train Data Updation</a></li>
  <li><a href=deltrain.php>Delete Train</a></li>
  <li style="float:right;"><a href="Logout.php">Logout</a></li>
  <li style="float:right;"><a href="base.php"><?php echo "Welcome ".$_SESSION['username'];?></a></li>

</ul>
<div class ="sign_in">

<div class="sign_in1">
<form name="form" id="form" method="POST" action="add.php" ... onsubmit="return valform(this);">
	This is a 4 Phase Channel Where You Need To insert the Data of the Trains arrival and departure at each particular station
	Phase 1(A):-<br>
	Enter The Source Station:-<br><input type="text" name="ss1" id="ss1" style="margin-left:60px;padding: 7px;height:5%;width:20%;font-family: 'Amatic SC',cursive;font-size: 15px;"><br>
	Enter the Destination Station:-<br><input type="text" name="ds1" id="ds1" style="margin-left:60px;padding: 7px;height:5%;width:20%;font-family: 'Amatic SC',cursive;font-size: 15px;"><br>
	Enter The Arrival Time:-<br><input type="time" name="ast1" id="ast1" style="margin-left:60px;padding: 7px;height:5%;width:20%;font-family: 'Amatic SC',cursive;font-size: 15px;"><br>
	Enter the Departure Time:-<br><input type="time" name="dst1" id="dst1" style="margin-left:60px;padding: 7px;height:5%;width:20%;font-family: 'Amatic SC',cursive;font-size: 15px;"><br>
	Enter the Destination Arrival Time:-<br><input type="time" name="adt1" id="adt1" style="margin-left:60px;padding: 7px;height:5%;width:20%;font-family: 'Amatic SC',cursive;font-size: 15px;"><br>
	Enter the Destination Departure Time:-<br><input type="time" name="ddt1" id="ddt1" style="margin-left:60px;padding: 7px;height:5%;width:20%;font-family: 'Amatic SC',cursive;font-size: 15px;"><br>
	</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>

	<div class="sign_in1">
	Phase 1(B):-<br>
	Enter The Source Station:-<br><input type="text" name="ss2" id="ss2" style="margin-left:60px;padding: 7px;height:5%;width:50%;font-family: 'Amatic SC',cursive;font-size: 15px;"><br>
	Enter the Destination Station:-<br><input type="text" name="ds2" id="ds2" style="margin-left:60px;padding: 7px;height:5%;width:50%;font-family: 'Amatic SC',cursive;font-size: 15px;"><br>
	Enter The Arrival Time:-<br><input type="time" name="ast2" id="ast2" style="margin-left:60px;padding: 7px;height:5%;width:50%;font-family: 'Amatic SC',cursive;font-size: 15px;"><br>
	Enter the Departure Time:-<br><input type="time" name="dst2" id="dst2" style="margin-left:60px;padding: 7px;height:5%;width:50%;font-family: 'Amatic SC',cursive;font-size: 15px;"><br>
	Enter the Destination Arrival Time:-<br><input type="time" name="adt2" id="adt2" style="margin-left:60px;padding: 7px;height:5%;width:50%;font-family: 'Amatic SC',cursive;font-size: 15px;"><br>
	Enter the Destination Departure Time:-<br><input type="time" name="ddt2" id="ddt2" style="margin-left:60px;padding: 7px;height:5%;width:50%;font-family: 'Amatic SC',cursive;font-size: 15px;"><br>
</div>

<div class="sign_in1">

	Phase 1(C):-<br>
	Enter The Source Station:-<br><input type="text" name="ss3" id="ss3" class="ipfrm"><br>
	Enter the Destination Station:-<br><input type="text" name="ds3" id="ds3" class="ipfrm"><br>
	Enter The Arrival Time:-<br><input type="time" name="ast3" id="ast3" class="ipfrm"><br>
	Enter the Departure Time:-<br><input type="time" name="dst3" id="dst3" class="ipfrm"><br>
	Enter the Destination Arrival Time:-<br><input type="time" name="adt3" id="adt3" class="ipfrm"><br>
	Enter the Destination Departure Time:-<br><input type="time" name="ddt3" id="ddt3" class="ipfrm"><br>
</div>
<div class="sign_in1">
	Phase 1(D):-<br>
	Enter The Source Station:-<br><input type="text" name="ss4" id="ss4" class="ipfrm"><br>
	Enter the Destination Station:-<br><input type="text" name="ds4" id="ds4" class="ipfrm"><br>
	Enter The Arrival Time:-<br><input type="time" name="ast4" id="ast4" class="ipfrm"><br>
	Enter the Departure Time:-<br><input type="time" name="dst4" id="dst4" class="ipfrm"><br>
	Enter the Destination Arrival Time:-<br><input type="time" name="adt4" id="adt4" class="ipfrm"><br>
	Enter the Destination Departure Time:-<br><input type="time" name="ddt4" id="ddt4" class="ipfrm"><br>
</div>
<div class="sign_in1">
	Phase 2(A):-<br>
	Enter The Source Station:-<br><input type="text" name="ss5" id="ss5" class="ipfrm"><br>
	Enter the Destination Station:-<br><input type="text" name="ds5" id="ds5" class="ipfrm"><br>
	Enter The Arrival Time:-<br><input type="time" name="ast5" id="ast5" class="ipfrm"><br>
	Enter the Departure Time:-<br><input type="time" name="dst5" id="dst5" class="ipfrm"><br>
	Enter the Destination Arrival Time:-<br><input type="time" name="adt5" id="adt5" class="ipfrm"><br>
	Enter the Destination Departure Time:-<br><input type="time" name="ddt5" id="ddt5" class="ipfrm"><br>
	</div>
	<div class="sign_in1">
	Phase 2(B):-<br>
	Enter The Source Station:-<br><input type="text" name="ss6" id="ss6" class="ipfrm"><br>
	Enter the Destination Station:-<br><input type="text" name="ds6" id="ds6" class="ipfrm"><br>
	Enter The Arrival Time:-<br><input type="time" name="ast6" id="ast6" class="ipfrm"><br>
	Enter the Departure Time:-<br><input type="time" name="dst6" id="dst6" class="ipfrm"><br>
	Enter the Destination Arrival Time:-<br><input type="time" name="adt6" id="adt6" class="ipfrm"><br>
	Enter the Destination Departure Time:-<br><input type="time" name="ddt6" id="ddt6" class="ipfrm"><br>
	</div>
	<div class="sign_in1">
	Phase 2(C):-<br>
	Enter The Source Station:-<br><input type="text" name="ss7" id="ss7" class="ipfrm"><br>
	Enter the Destination Station:-<br><input type="text" name="ds7" id="ds7" class="ipfrm"><br>
	Enter The Arrival Time:-<br><input type="time" name="ast7" id="ast7" class="ipfrm"><br>
	Enter the Departure Time:-<br><input type="time" name="dst7" id="dst7" class="ipfrm"><br>
	Enter the Destination Arrival Time:-<br><input type="time" name="adt7" id="adt7" class="ipfrm"><br>
	Enter the Destination Departure Time:-<br><input type="time" name="ddt7" id="ddt7" class="ipfrm"><br>
	</div>
	<div class="sign_in1">
	Phase 3(A):-<br>
	Enter The Source Station:-<br><input type="text" name="ss8" id="ss8" class="ipfrm"><br>
	Enter the Destination Station:-<br><input type="text" name="ds8" id="ds8" class="ipfrm"><br>
	Enter The Arrival Time:-<br><input type="time" name="ast8" id="ast8" class="ipfrm"><br>
	Enter the Departure Time:-<br><input type="time" name="dst8" id="dst8" class="ipfrm"><br>
	Enter the Destination Arrival Time:-<br><input type="time" name="adt8" id="adt8" class="ipfrm"><br>
	Enter the Destination Departure Time:-<br><input type="time" name="ddt8" id="ddt8" class="ipfrm"><br>
	</div>
	<div class="sign_in1">
	Phase 3(B):-<br>
	Enter The Source Station:-<br><input type="text" name="ss9" id="ss9" class="ipfrm"><br>
	Enter the Destination Station:-<br><input type="text" name="ds9" id="ds9" class="ipfrm"><br>
	Enter The Arrival Time:-<br><input type="time" name="ast9" id="ast9" class="ipfrm"><br>
	Enter the Departure Time:-<br><input type="time" name="dst9" id="dst9" class="ipfrm"><br>
	Enter the Destination Arrival Time:-<br><input type="time" name="adt9" id="adt9" class="ipfrm"><br>
	Enter the Destination Departure Time:-<br><input type="time" name="ddt9" id="ddt9" class="ipfrm"><br>
	</div>
	<div class="sign_in1">
	Phase 4(A):-<br>
	Enter The Source Station:-<br><input type="text" name="ss10" id="ss10" class="ipfrm"><br>
	Enter the Destination Station:-<br><input type="text" name="ds10" id="ds10" class="ipfrm"><br>
	Enter The Arrival Time:-<br><input type="time" name="ast10" id="ast10" class="ipfrm"><br>
	Enter the Departure Time:-<br><input type="time" name="dst10" id="dst10" class="ipfrm"><br>
	Enter the Destination Arrival Time:-<br><input type="time" name="adt10" id="adt10" class="ipfrm"><br>
	Enter the Destination Departure Time:-<br><input type="time" name="ddt10" id="ddt10" class="ipfrm"><br>
	<input type="submit" name="submit" class="button" style="float:left; margin-right: 10%;">
	</form>
</div>
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
    setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>
</body>
</html>