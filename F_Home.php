<?php
include('session.php');
if(isset($login_session)){
	
	if($row['Type']==1)
	{
		header("location: A_Home.php");
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
	<link rel="stylesheet" type="text/css" href="css/footer.css" />
	<style>
	body {
    background-image: url('css/Images/home.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
	background-color:black;
	background-size: 100% 100%;
    }
	</style>
</head>
<body>

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="F_search.php">Search Book</a></li>
  <li><a href="F_Issue.php">Issue Book</a></li>
  <li><a href="F_Return.php">Return Book</a></li>
  <li><a href="F_display.php">Display Members</a></li>
  <li><a href="F_manage.php">Manage Members</a></li>
  <li><a href="F_manageb.php">Manage Books</a></li>
  <li style="float:right"><a href="logout.php">SignOut</a></li>
  <li style="float:right" id="name"><?php echo $login_session; ?></li>
</ul>




<ul  style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #333;position: fixed;bottom: 0;width: 100%;">
  <li style="margin:0 0 0 42%;" ><p style="color:White;">Copyright &copy;2016 LMS.com. All Rights Reserved.</p></li>
</ul>
</body>
</html>

