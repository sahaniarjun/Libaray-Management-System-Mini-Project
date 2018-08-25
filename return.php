<?php

$bname=$borrowed=$mname=$error=''; // Variable To Store Error Message
if (isset($_POST['RETURN_BOOK'])) {
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
	if($rows!=0){
	$date1=date_create($query["b_date"]);
	$date2=date_add($date1,date_interval_create_from_date_string("'$query1[Overdue]' days"));
	$date1=date_create(date("Y/m/d"));
	$diff=date_diff($date2,$date1);
	$diff=$diff->format("%R%a");
	$diff=$diff+2;
	if($diff>$query1["Overdue"]){
	$late=$diff-$query1["Overdue"];
	$late*=5;
	echo "<script>alert('Please Take Fine Rs $late/- For Late Return');</script>";
	}
	$bname-$query2['book_title'];
	$sql ="DELETE FROM b_list WHERE user_id='$_POST[userid]' and book_id='$_POST[bookid]'";
	if (mysqli_query($conn, $sql))
	{
	$message="BookID $_POST[bookid] Named $query2[book_title] Is Retuned From $query1[Username]";
	$error =$message;
	$sql ="UPDATE users SET Borrowed=Borrowed-1 WHERE Userid='$_POST[userid]';";
	mysqli_query($conn,$sql);
	}	
	else
	{
	$error="Error In Return of Book,Please Try After Some Time";
	}
	}else
		$error="Book Already returned";

} else {
$error = "Invalid BookID";
}
	
} else {
$error = "Invalid UserID";
}




//mysqli_close($conn); // Closing Connection
}
?>