<?php
$error="";
	if (isset($_POST['Search_bid'])) {
	
	$sql = "SELECT * FROM books WHERE book_id like('%$_POST[username]%')";
	
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	echo "<div id='main'>
	<div id='sub' style='width:100px;'>
	<p align='center'>BOOK ID</p>
	</div>
	<div id='sub' style='width:500px;text-align: center;'>
	<p>TITLE</p>
	</div>
	<div id='sub' style='width:150px;text-align: center;'>
	<p>DEPARTMENT</p>
	</div>
	<div id='sub' style='width:225px;text-align: center;'>
	<p>PUBLICATION</p>
	</div>
	<div id='sub' style='width:375px;text-align: center;'>
	<p>AUTHOR</p>
	</div>
	<div id='sub' style='text-align: center; width:150px;'>
	<p>SHELL</p>
	</div>
	<div id='sub' style='text-align: center;'>
	<p>Click For Bookid</p>
	</div>";
	// output data of each row
	while($row = mysqli_fetch_assoc($result)) {
	echo "<div id='sub' style='width:100px;text-align: center;'><p>".$row["book_id"]."</p>
	</div><div id='sub' style='width:500px;'><p>". $row["book_title"] ."</p></div>
	<div id='sub' style='width:150px;'><p>". $row["Dept"] ."</p></div>
	<div id='sub' style='width:225px;'><p>". $row["Pub"] ."</p></div>
	<div id='sub' style='width:375px;'><p>". $row["Auth"] ."</p></div>
	<div id='sub' style='text-align: center;width:150px;'><p>". $row["shell"] ."</p></div>
	<div id='sub' style='text-align: center;'><p><input type='Button' value='Display ID' onclick='Display(name)' name=".$row["book_id"]."></p></div>";
	}
}else
$error="No Match Found Please try Again";
		
}else if(isset($_POST['Search_bt']))
{
	
	
	$sql = "SELECT * FROM books WHERE book_title like('%$_POST[username]%')";
	
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	echo "<div id='main'>
	<div id='sub' style='width:100px;'>
	<p align='center'>BOOK ID</p>
	</div>
	<div id='sub' style='width:500px;text-align: center;'>
	<p>TITLE</p>
	</div>
	<div id='sub' style='width:150px;text-align: center;'>
	<p>DEPARTMENT</p>
	</div>
	<div id='sub' style='width:225px;text-align: center;'>
	<p>PUBLICATION</p>
	</div>
	<div id='sub' style='width:375px;text-align: center;'>
	<p>AUTHOR</p>
	</div>
	<div id='sub' style='text-align: center; width:150px;'>
	<p>SHELL</p>
	</div>
	<div id='sub' style='text-align: center;'>
	<p>Click For Bookid</p>
	</div>";
	// output data of each row
	while($row = mysqli_fetch_assoc($result)) {
	echo "<div id='sub' style='width:100px;text-align: center;'><p>".$row["book_id"]."</p>
	</div><div id='sub' style='width:500px;'><p>". $row["book_title"] ."</p></div>
	<div id='sub' style='width:150px;'><p>". $row["Dept"] ."</p></div>
	<div id='sub' style='width:225px;'><p>". $row["Pub"] ."</p></div>
	<div id='sub' style='width:375px;'><p>". $row["Auth"] ."</p></div>
	<div id='sub' style='text-align: center;width:150px;'><p>". $row["shell"] ."</p></div>
	<div id='sub' style='text-align: center;'><p><input type='Button' value='Display ID' onclick='Display(name)' name=".$row["book_id"]."></p></div>";
	}
}else
$error="No Match Found Please try Again";
	
	
	
	
}else if(isset($_POST['Search_pub']))
{
	
	
	$sql = "SELECT * FROM books WHERE Pub like('%$_POST[username]%')";
	
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	echo "<div id='main'>
	<div id='sub' style='width:100px;'>
	<p align='center'>BOOK ID</p>
	</div>
	<div id='sub' style='width:500px;text-align: center;'>
	<p>TITLE</p>
	</div>
	<div id='sub' style='width:150px;text-align: center;'>
	<p>DEPARTMENT</p>
	</div>
	<div id='sub' style='width:225px;text-align: center;'>
	<p>PUBLICATION</p>
	</div>
	<div id='sub' style='width:375px;text-align: center;'>
	<p>AUTHOR</p>
	</div>
	<div id='sub' style='text-align: center; width:150px;'>
	<p>SHELL</p>
	</div>
	<div id='sub' style='text-align: center;'>
	<p>Click For Bookid</p>
	</div>";
	// output data of each row
	while($row = mysqli_fetch_assoc($result)) {
	echo "<div id='sub' style='width:100px;text-align: center;'><p>".$row["book_id"]."</p>
	</div><div id='sub' style='width:500px;'><p>". $row["book_title"] ."</p></div>
	<div id='sub' style='width:150px;'><p>". $row["Dept"] ."</p></div>
	<div id='sub' style='width:225px;'><p>". $row["Pub"] ."</p></div>
	<div id='sub' style='width:375px;'><p>". $row["Auth"] ."</p></div>
	<div id='sub' style='text-align: center;width:150px;'><p>". $row["shell"] ."</p></div>
	<div id='sub' style='text-align: center;'><p><input type='Button' value='Display ID' onclick='Display(name)' name=".$row["book_id"]."></p></div>";
	}
}else{
	
$error="No Match Found Please try Again";
}
	
	
	
	
}else if(isset($_POST['Search_au']))
{
	
	
	$sql = "SELECT * FROM books WHERE Auth like('%$_POST[username]%')";
	
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	echo "<div id='main'>
	<div id='sub' style='width:100px;'>
	<p align='center'>BOOK ID</p>
	</div>
	<div id='sub' style='width:500px;text-align: center;'>
	<p>TITLE</p>
	</div>
	<div id='sub' style='width:150px;text-align: center;'>
	<p>DEPARTMENT</p>
	</div>
	<div id='sub' style='width:225px;text-align: center;'>
	<p>PUBLICATION</p>
	</div>
	<div id='sub' style='width:375px;text-align: center;'>
	<p>AUTHOR</p>
	</div>
	<div id='sub' style='text-align: center; width:150px;'>
	<p>SHELL</p>
	</div>
	<div id='sub' style='text-align: center;'>
	<p>Click For Bookid</p>
	</div>";
	// output data of each row
	while($row = mysqli_fetch_assoc($result)) {
	echo "<div id='sub' style='width:100px;text-align: center;'><p>".$row["book_id"]."</p>
	</div><div id='sub' style='width:500px;'><p>". $row["book_title"] ."</p></div>
	<div id='sub' style='width:150px;'><p>". $row["Dept"] ."</p></div>
	<div id='sub' style='width:225px;'><p>". $row["Pub"] ."</p></div>
	<div id='sub' style='width:375px;'><p>". $row["Auth"] ."</p></div>
	<div id='sub' style='text-align: center;width:150px;'><p>". $row["shell"] ."</p></div>
	<div id='sub' style='text-align: center;'><p><input type='Button' value='Display ID' onclick='Display(name)' name=".$row["book_id"]."></p></div>";
	}
}else{
	
$error="No Match Found Please try Again";
}
	
	
	
	
}
//else
//{
	
	
	// $sql = "SELECT * FROM books WHERE 1";
	
	// $result = mysqli_query($conn, $sql);

	// if (mysqli_num_rows($result) > 0) {
	// echo "<div id='sub' style='width:100px;'>
	// <p align='center'>BOOK ID</p>
	// </div>
	// <div id='sub' style='width:500px;text-align: center;'>
	// <p>TITLE</p>
	// </div>
	// <div id='sub' style='width:150px;text-align: center;'>
	// <p>DEPARTMENT</p>
	// </div>
	// <div id='sub' style='width:225px;text-align: center;'>
	// <p>PUBLICATION</p>
	// </div>
	// <div id='sub' style='width:375px;text-align: center;'>
	// <p>AUTHOR</p>
	// </div>
	// <div id='sub' style='text-align: center; width:150px;'>
	// <p>SHELL</p>
	// </div>
	// <div id='sub' style='text-align: center;'>
	// <p>Click For Bookid</p>
	// </div>";
	//output data of each row
	// while($row = mysqli_fetch_assoc($result)) {
	// echo "<div id='sub' style='width:100px;text-align: center;'><p>".$row["book_id"]."</p>
	// </div><div id='sub' style='width:500px;'><p>". $row["book_title"] ."</p></div>
	// <div id='sub' style='width:150px;'><p>". $row["Dept"] ."</p></div>
	// <div id='sub' style='width:225px;'><p>". $row["Pub"] ."</p></div>
	// <div id='sub' style='width:375px;'><p>". $row["Auth"] ."</p></div>
	// <div id='sub' style='text-align: center;width:150px;'><p>". $row["shell"] ."</p></div>
	// <div id='sub' style='text-align: center;'><p><input type='Button' value='Display ID' onclick='Display(name)' name=".$row["book_id"]."></p></div>";
	// }
// }
		// mysqli_close($conn); // Closing Connection
	
	
	
	
//}
mysqli_close($conn); // Closing Connection
?>