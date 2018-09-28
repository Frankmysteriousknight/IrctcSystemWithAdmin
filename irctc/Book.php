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
	<title>Book your Tickets Over Here!!</title>
</head>
<script>
	function validform(form){
		if(form.frm.value=="")
		{
			alert("Please Enter Some Source Station");
			return false;
		}
		if(form.to.value=="")
		{
			alert("Please Enter Some Destination Station");
			return false;
		}
		if(form.d1.value=="")
		{
			alert("Please Enter a Date to Travel");
			return false;
		}

	}
</script>
<body>
	<?php echo "Welcome ".$_SESSION['username'];?>
<form name="form" id="form" method="POST" action="Booking.php" action="booktrain.php" ... onsubmit="return validform(this);">
	
	From:<br><input type="text" name="frm"><br>
	To:<br><input type="text" name="to"><br>
   Date of Travelling:-<br><input type="date" name="d1"><br>
	<input type="submit" name="submit">
	
</form>
</body>
</html>