<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['Login'])) {
$user=$_POST['username'];
$pwd=$_POST['password'];
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "lms";
$conn=mysqli_connect($servername, $username, $password, $dbname);
$sql ="select * from lib where Password='$pwd' AND Userid='$user'";
$query = mysqli_query($conn,$sql);
$rows = mysqli_num_rows($query);
$query = mysqli_fetch_assoc($query);
if ($rows == 1) {
	$_SESSION['userid']=$user; // Initializing Session
	if($query["Type"]==0)
	{
		header("location: F_Home.php"); // Redirecting To Other Page
	}
	else
	{
		header("location: A_Home.php"); // Redirecting To Other Page
	}

} else {
$error = "Invalid Username/Password";
}
mysqli_close($conn); // Closing Connection
}
?>