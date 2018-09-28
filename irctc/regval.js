window.onload=initform;
function initform()
{
	document.getElementById("form2").onsubmit=function(){return validform();}
}
function validform()
{
	
	if(document.getElementById("name").value=="")
	{
		alert("Please Enter your Name");
		return false;
	}
	else if(document.getElementById("un").value=="")
	{
		alert("Please Enter your User Name");
		return false;
	}
	else if(document.getElementById("eid").value=="")
	{
		alert("Please Enter your EmailId");
		return false;
	}
	else if(document.getElementById("mno").value=="")
	{
		alert("Please Enter your MobileNo.");
		return false;
	}
	else if(document.getElementById("pass").value=="")
	{
		alert("Please Enter your Password");
		return false;
	}
	else if(document.getElementById("cpass").value=="")
	{
		alert("Please Re-Enter your Password");
		return false;
	}
	else if(document.getElementById("mno").value.length!=10)
	{
		alert("Please Enter a Proper MobileNo.");
		return false;
	}
	else if(document.getElementById("cpass").value!=document.getElementById("pass").value)
	{
		alert("Password Didn't matched");
		return false;
	}
	else if(document.getElementById("pass").value.length<6)
	{
		alert("Password too small");
		return false;
	}
	else if(document.getElementById("pass").value.length>15)
	{
		alert("Please too lengthy");
		return false;
	}
	else if(document.forms["form2"]["eid"].value.indexOf("@")<1 || document.forms["form2"]["eid"].value.lastIndexOf(".")<document.forms["form2"]["eid"].value.indexOf("@")+2 || document.forms["form2"]["eid"].value.lastIndexOf(".")+2>=document.forms["form2"]["eid"].value.length )
	{
		alert("Not a Valid Email Address");
		return false;
	}	
	else if(Math.floor(document.getElementById("mno").value/1000000000)<=5)
	{
		alert("Not a valid Mobile Number");
		return false;
	}
	
}

