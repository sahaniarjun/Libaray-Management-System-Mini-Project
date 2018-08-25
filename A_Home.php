<?php
include('session.php');
if(isset($login_session)){
	
	if($row['Type']==0)
	{
		header("location: F_Home.php");
	}
}
mysqli_close($conn); // Closing Connection
?>
<!DOCTYPE html>
<html>
<head>
	<title>
        Home
    </title>
	<link rel="stylesheet" type="text/css" href="css/menubar.css" />
	<style>
	body {
    background-image: url('css/Images/admin.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
	background-color:black;
	background-size: 100% 100%;
    }
	.active {
    background-color: red;
}
	</style>
	<link rel="icon" type="image/ico" href="css/images/red.jpgs">
</head>
<body>

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="D_lib.php">Display Librarian</a></li>
  <li><a href="R_lib.php">Manage Librarian</a></li>
  <li style="float:right"><a href="logout.php">SignOut</a></li>
  <li style="float:right" id="name"><?php echo $login_session; ?></li>
</ul>
<form name="remove" method="POST" onsubmit="return validateForm()">
<table>
<tr>
<th>
</th>
<th>
</th>
</tr>
</form>




</table>


<ul  style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #333;position: fixed;bottom: 0;width: 100%;">
  <li style="margin:0 0 0 42%;" ><p style="color:White;">Copyright &copy;2016 LMS.com. All Rights Reserved.</p></li>
</ul>
</body>
</html>

