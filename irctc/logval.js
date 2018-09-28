window.onload=initform;
function initform()
{
	document.getElementById("logform").onsubmit=function(){return validform();}
}
function validform()
{
	var nm=document.getElementById("n1").value;
	var pass=document.getElementById("pass").value;
	if(nm=="")
	{
		alert("Please Enter your Username");
	 	return false;
	}
	else if(pass=="")
	{
		alert("Plesae Enter your Password");
		return false;
	}

}