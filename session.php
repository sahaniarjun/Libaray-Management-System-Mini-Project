<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "lms";
$conn=mysqli_connect($servername, $username, $password, $dbname);
$user_check=$_SESSION['userid'];
$sql = "select * from lib where Userid='$user_check'";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($query);
$login_session =$row['Username'];
if(!isset($login_session)){
mysqli_close($conn); // Closing Connection
include('logout.php');
header("location: index.php");
}
?>