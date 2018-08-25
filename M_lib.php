<?php
$error=''; // Variable To Store Error Message
$cpwd=$pwd=$uname=$uid="";
$fl=0;
if (isset($_POST['Remove'])) {
if($_POST["userid"]==""){
echo "<script>alert('Please Enter Userid');</script>";
}
else
{
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "lms";
$conn=mysqli_connect($servername, $username, $password, $dbname);
$sql ="select * from lib where Userid='$_POST[userid]' and Type=0";
$query1 = mysqli_query($conn,$sql);
$rows = mysqli_num_rows($query1);
$query1 = mysqli_fetch_assoc($query1);
if ($rows == 1) 
{
	$sql ="DELETE FROM `lib` where Userid='$_POST[userid]' and Type=0";
    if(mysqli_query($conn,$sql))
	{
		$error="Successfully Removed $_POST[userid]";
	}
	else
	{
		$error="Error Occurred,Please Try Again";
			$uid=$_POST["userid"];
	}

	
} else {
$error = "Invalid UserID";
$uid=$_POST["userid"];
}
mysqli_close($conn);// Closing Connection
}
}
if (isset($_POST['Add'])) {
if($_POST["userid"]==""){
echo "<script>alert('Please Enter Userid');</script>";
	$cpwd=$_POST["cpassword"];
	$pwd=$_POST["password"];
	$uname=$_POST["username"];
}
else
{
if($_POST["username"]==""){
echo "<script>alert('Please Enter Username');</script>";
$cpwd=$_POST["cpassword"];
$pwd=$_POST["password"];
$uid=$_POST["userid"];
}
else
{
if($_POST["password"]=="" && $_POST["cpassword"]==""){
echo "<script>alert('Please Enter Password');</script>";
$uname=$_POST["username"];
$uid=$_POST["userid"];
}
else
{
if($_POST["password"]!=$_POST["cpassword"]){
echo "<script>alert('Please Password Your Password');</script>";
$uname=$_POST["username"];
$uid=$_POST["userid"];
}
else
{
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "lms";
$conn=mysqli_connect($servername, $username, $password, $dbname);
$sql ="select * from lib where Userid='$_POST[userid]' and Type=0";
$query1 = mysqli_query($conn,$sql);
$rows = mysqli_num_rows($query1);
if ($rows == 0) 
{


	$sql ="INSERT INTO `lib` (`Userid`, `Username`, `Password`, `Type`) VALUES ('$_POST[userid]','$_POST[username]','$_POST[password]',0)";
    if(mysqli_query($conn,$sql))
	{
		$error="Successfully Added $_POST[userid]";
	}
	else
	{
		$error="Error Occurred,Please Try Again";
			$cpwd=$_POST["cpassword"];
	$pwd=$_POST["password"];
	$uname=$_POST["username"];
	$uid=$_POST["userid"];
	}


	
} else {
$error = "Userid Already Exists";
	$cpwd=$_POST["cpassword"];
	$pwd=$_POST["password"];
	$uname=$_POST["username"];
	$uid=$_POST["userid"];
}


mysqli_close($conn); // Closing Connection

}
}
}
}
}
?>