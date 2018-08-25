<?php
$error=''; // Variable To Store Error Message
$uname=$uid="";
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
$sql ="select * from users where Userid='$_POST[userid]'";
$query1 = mysqli_query($conn,$sql);
$rows = mysqli_num_rows($query1);
$query1 = mysqli_fetch_assoc($query1);
if ($rows == 1) 
{
	$sql ="DELETE FROM `users` where Userid='$_POST[userid]'";
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
	$uname=$_POST["username"];
}
else
{
if($_POST["username"]==""){
echo "<script>alert('Please Enter Username');</script>";
$uid=$_POST["userid"];
}
else
{
if($_POST["mtype"]==""){
echo "<script>alert('Please Select Member Type');</script>";
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
	if($_POST["mtype"]=="faculty"){
		$limit=6;
		$over=30;
	}
	else {
		$limit=3;
		$over=15;
	}


	$sql ="INSERT INTO `users`(`Userid`, `Username`, `Borrowed`, `B_limit`, `Overdue`) VALUES ('$_POST[userid]','$_POST[username]',0,'$limit',$over)";
    if(mysqli_query($conn,$sql))
	{
		$error="Successfully Added $_POST[userid]";
	}
	else
	{
		$error="Error Occurred,Please Try Again";
	$uname=$_POST["username"];
	$uid=$_POST["userid"];
	}


	
} else {
$error = "Userid Already Exists";
	$uname=$_POST["username"];
	$uid=$_POST["userid"];
}


mysqli_close($conn); // Closing Connection
}
}
}
}
?>