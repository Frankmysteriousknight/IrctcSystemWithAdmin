<?php
include("mysql.php");
session_start();
$var=$_SESSION['username'];
function GetImageExtensions($imagetype)
{
	if(empty($imagetype)) return false;
	switch($imagetype)
	{
		case 'image/bmp': return '.bmp';
		case 'image/gif': return '.gif';
		case 'image/jpg': return '.jpg';
		case 'image/png': return '.png';
		default : return false;
	}
}
if(!empty($_FILES["uploadedimage"]["name"]))
{
	$file_name=$_FILES["uploadedimage"]["name"];
	$temp_name=$_FILES["uploadedimage"]["tmp_name"];
	$imgtype=$_FILES["uploadedimage"]["type"];
	$ext=GetImageExtensions($imgtype);
	$imagename=date("d-m-Y")."-".time().$ext;
	$target_path="uploads/".$imagename;

	if(move_uploaded_file($temp_name,$target_path)){
		$query_upload="INSERT into `imgtbl` (`imgpath`,`subdate`,`Username`) VALUES('".$target_path."','".date("Y-m-d")."','".$var."')";
		mysqli_query($conn,$query_upload) or die("error in query upload------>".mysqli_error($conn));
	}
	else{
		exit("Error while uplaoding file on server");
	} 
}
header('Location:profile.php');
?>
