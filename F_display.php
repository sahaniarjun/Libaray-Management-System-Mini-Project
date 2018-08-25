<?php
include('session.php');
if(isset($login_session)){
	
	if($row['Type']==1)
	{
		header("location: A_Home.php");
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>
        Manage Students
    </title>
		<style>
	body {
    background-image: url('css/Images/main.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
	background-color:black;
	background-size: 100% 100%;
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
	input[type=text]{
 	width:60%;
	padding:6px 5px;
	background:white;
	float:left;
	margin:0 30px 0 200px;
	}
	input[type=submit] {
	width:12%;
	color:black;
	float:left;
	font-size:20px;
	margin:1px 10px;
	}
	</style>
	<script>
	function Display(Na) {
		window.prompt("Copy to clipboard: Ctrl+C, Enter", Na);
	
	}
	</script>

<link rel="stylesheet" type="text/css" href="css/menubar.css" />
</head>
<body>

<ul>
  <li><a href="A_Home.php">Home</a></li>
  <li><a href="F_search.php">Search Book</a></li>
  <li><a href="F_Issue.php">Issue Book</a></li>
  <li><a href="F_Return.php">Return Book</a></li>
  <li><a class="active" href="#">Display Members</a></li>
  <li><a href="F_Manage.php" >Manage Members</a></li>
  <li><a href="F_manageb.php">Manage Books</a></li>
  <li style="float:right"><a href="logout.php">SignOut</a></li>
  <li style="float:right" id="name"><?php echo $login_session; ?></li>
</ul>

<div id="main">
<form method="post" name="searchm" >
<div style='height: 50px;width: 1499px;float:left;text-align: center;vertical-align: middle;'>
<input type="text" name="username" id="username">
<input type="submit" value="Search" name="Search" id="Search"><br>
<?php
include('Dis_mem.php');
?>
  <span><?php echo "<p style='color:red;'>$error</p>";?></span>
</div>
</form>
</div>


<ul  style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #333;position: fixed;bottom: 0;width: 100%;">
  <li style="margin:0 0 0 42%;" ><p style="color:White;font-size: 16px;">Copyright &copy;2016 LMS.com. All Rights Reserved.</p></li>
</ul>
</body>
</html>

