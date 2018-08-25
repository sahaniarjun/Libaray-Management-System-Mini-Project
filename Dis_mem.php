<?php
$error="";
	if (isset($_POST['Search'])) {
	
	$sql = "SELECT * FROM `users` WHERE Username like('%$_POST[username]%')";
	
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	// output data of each row
	echo "
	<div id='sub'>
	<p align='center'>USERID</p>
	</div>
	<div id='sub'>
	<p>USERNAME</p>
	</div>
	<div id='sub'>
	<p>Click For Userid</p>
	</div>";
	while($row = mysqli_fetch_assoc($result)) {
	echo "<div id='sub'><p>".$row["Userid"]."</p></div>
	<div id='sub'><p>". $row["Username"] ."</p></div>
	<div id='sub'><p><input type='Button' value='Display ID' onclick='Display(name)' name=".$row["Userid"]."></p></div>";
	}
}else
{
	$error="No Entry Found,Please try Again";
	
}
		
		
	
	
	}
	
//	else
//	{
//	$sql = "SELECT * FROM `users` WHERE 1";
//	$result = mysqli_query($conn, $sql);
//
//	if (mysqli_num_rows($result) > 0) {
//	// output data of each row
//	echo "
//	<div id='sub'>
//	<p align='center'>USERID</p>
//	</div>
//	<div id='sub'>
//	<p>USERNAME</p>
//	</div>
//	<div id='sub'>
//	<p>Click For Userid</p>
//	</div>";
//	while($row = mysqli_fetch_assoc($result)) {
//	echo "<div id='sub'><p>".$row["Userid"]."</p></div>
//	<div id='sub'><p>". $row["Username"] ."</p></div>
//	<div id='sub'><p><input type='Button' value='Display ID' onclick='Display(name)' name=".$row["Userid"]."></p></div>";
//	}
//}
		
		
		
//	}
		mysqli_close($conn); // Closing Connection
?>