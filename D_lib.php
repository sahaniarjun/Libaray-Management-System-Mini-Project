<?php
include('session.php');
if(isset($login_session)){
	
	if($row['Type']==0)
	{
		header("location: F_Home.php");
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>
        Manage Faculty
    </title>
	<link rel="stylesheet" type="text/css" href="css/menubar.css" />
		<style>
	body {
    background-image: url('css/Images/main.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
	background-color:black;
	background-size: 100% 100%;
    }
	.active {
    background-color: Red;
	}
	#main {
		height: 900px;
		width: 1500px;
		margin: 50px auto;
		
	}
	#sub {
		height: 50px;
		width: 499px;
		float:left;
		text-align: center;
		vertical-align: middle;
		
	}
	p{
		color:white;
		font-size: 20px;
		font-family: "Times New Roman";
	}
	</style>
	<script>
	function Display(Na) {
		window.prompt("Copy to clipboard: Ctrl+C, Enter", Na);
	
	}
	</script>

</head>
<body>

<ul>
  <li><a href="A_Home.php">Home</a></li>
  <li><a class="active" href="#">Display Librarian</a></li>
  <li><a  href="R_lib.php">Manage Librarian</a></li>
  <li style="float:right"><a href="logout.php">SignOut</a></li>
  <li style="float:right" id="name"><?php echo $login_session; ?></li>
</ul>

<div id="main">
<div id="sub">
<p align="center">USERID</p>
</div>
<div id="sub">
<p>USERNAME</p>
</div>
<div id="sub">
<p>Click For Userid</p>
</div>
<?php
	$sql = "SELECT * FROM `lib` WHERE Type=0";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	// output data of each row
	while($row = mysqli_fetch_assoc($result)) {
	echo "<div id='sub'><p>".$row["Userid"]."</p></div>
	<div id='sub'><p>". $row["Username"] ."</p></div>
	<div id='sub'><p><input type='Button' value='Display ID' onclick='Display(name)' name=".$row["Userid"]."></p></div>";
	}
}
		mysqli_close($conn); // Closing Connection
?>


</div>

<ul  style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #333;position: fixed;bottom: 0;width: 100%;">
  <li style="margin:0 0 0 42%;" ><p style="color:White;font-size: 16px;">Copyright &copy;2016 LMS.com. All Rights Reserved.</p></li>
</ul>
</body>
</html>