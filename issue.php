<?php

$bname=$borrowed=$mname=$error=''; // Variable To Store Error Message
if (isset($_POST['ISSUE_BOOK'])) {
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
if($query1['Borrowed'] < $query1['B_limit'])
{
$mname-$query1['Username'];
$borrowed-$query1['Borrowed'];
$sql ="select * from books where book_id='$_POST[bookid]'";
$query2 = mysqli_query($conn,$sql);
$rows = mysqli_num_rows($query2);
$query2 = mysqli_fetch_assoc($query2);
if ($rows == 1) 
{
	$sql ="select * from b_list where book_id='$_POST[bookid]' and user_id='$_POST[userid]'";
	$query = mysqli_query($conn,$sql);
	$rows = mysqli_num_rows($query);
	$query = mysqli_fetch_assoc($query);

	if($rows==0)
	{
	$bname-$query2['book_title'];
	$sql ="select max(B_id) from b_list";
	$query = mysqli_query($conn,$sql);
	$query = mysqli_fetch_assoc($query);
	$id=1+$query['max(B_id)'];
	$sql ="INSERT INTO b_list (B_id,user_id,book_id,b_date) VALUES ('$id', '$_POST[userid]', '$_POST[bookid]', CURRENT_DATE());";

	if (mysqli_query($conn, $sql))
	{
	$message="BookID $_POST[bookid] Named $query2[book_title] Is Issued To $query1[Username]";
	$error =$message;
	$sql ="UPDATE users SET Borrowed=Borrowed+1 WHERE Userid='$_POST[userid]';";
	mysqli_query($conn,$sql);
	}	
	else
	$error="Error In issue of Book,Please Try After Some Time";




	}
	else
		$error="User $query1[Username] Has Already issued $query2[book_title] Before.";

} else {
$error = "Invalid BookID";
}
	}else {
$error = "Book Limit Reached";
}
	
	
} else {
$error = "Invalid UserID";
}




mysqli_close($conn); // Closing Connection
}
?>