<?php
$error=''; // Variable To Store Error Message
$shell=$auth=$pub=$bname=$bid="";
$fl=0;
if (isset($_POST['Remove'])) {
if($_POST["bookid"]==""){
echo "<script>alert('Please Enter Bookid');</script>";
}
else
{
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "lms";
$conn=mysqli_connect($servername, $username, $password, $dbname);
$sql ="select * from books where book_id='$_POST[bookid]'";
$query1 = mysqli_query($conn,$sql);
$rows = mysqli_num_rows($query1);
$query1 = mysqli_fetch_assoc($query1);
if ($rows == 1) 
{
	$sql ="DELETE FROM books where book_id='$_POST[bookid]'";
    if(mysqli_query($conn,$sql))
	{
		$error="Successfully Removed $_POST[bookid]";
	}
	else
	{
		$error="Error Occurred,Please Try Again";
			$bid=$_POST[bookid];
	}

	
} else {
$error = "Invalid BookID";
$bid=$_POST["bookid"];
}
mysqli_close($conn);// Closing Connection
}
}

if (isset($_POST['Add'])) {
if($_POST["bookid"]==""){
echo "<script>alert('Please Enter BookID');</script>";
$shell=$_POST["shell"];
$auth=$_POST["auth"];
$pub=$_POST["pub"];
$bname=$_POST["title"];
}
else
{
if($_POST["title"]==""){
echo "<script>alert('Please Enter Book Title');</script>";
$shell=$_POST["shell"];
$auth=$_POST["auth"];
$pub=$_POST["pub"];
$bid=$_POST["bookid"];
}
else
{
if($_POST["mtype"]==""){
echo "<script>alert('Please Select Department');</script>";
$shell=$_POST["shell"];
$auth=$_POST["auth"];
$pub=$_POST["pub"];
$bname=$_POST["title"];
$bid=$_POST["bookid"];
}
else
{
if($_POST["pub"]==""){
echo "<script>alert('Please Enter Publication');</script>";
$shell=$_POST["shell"];
$auth=$_POST["auth"];
$bname=$_POST["title"];
$bid=$_POST["bookid"];
}
else
{
if($_POST["auth"]==""){
echo "<script>alert('Please Enter Authors Name');</script>";
$shell=$_POST["shell"];
$pub=$_POST["pub"];
$bname=$_POST["title"];
$bid=$_POST["bookid"];
}
else
{
if($_POST["shell"]==""){
echo "<script>alert('Please Enter Shell No');</script>";
$auth=$_POST["auth"];
$pub=$_POST["pub"];
$bname=$_POST["title"];
$bid=$_POST["bookid"];
}
else
{
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "lms";
$conn=mysqli_connect($servername, $username, $password, $dbname);

$sql ="select * from books where book_id='$_POST[bookid]'";
$query1 = mysqli_query($conn,$sql);
$rows = mysqli_num_rows($query1);
if ($rows == 0) 
{

	$sql = "INSERT INTO `books`(`book_id`, `book_title`, `Dept`, `Pub`, `shell`, `Auth`) VALUES ('$_POST[bookid]','$_POST[title]','$_POST[mtype]','$_POST[pub]','$_POST[shell]','$_POST[auth]')";
    if(mysqli_query($conn,$sql))
	{
		$error="Successfully Added $_POST[title]";
	}
	else
	{
		$error="Error Occurred,Please Try Again";
		$shell=$_POST["shell"];
		$auth=$_POST["auth"];
		$pub=$_POST["pub"];
		$bname=$_POST["title"];
		$bid=$_POST["bookid"];
	}


	
} else {
		$error = "Bookid Already Exists";
		$shell=$_POST["shell"];
		$auth=$_POST["auth"];
		$pub=$_POST["pub"];
		$bname=$_POST["title"];
		$bid=$_POST["bookid"];
}


mysqli_close($conn); // Closing Connection
}
}
}
}
}
}
}
?>