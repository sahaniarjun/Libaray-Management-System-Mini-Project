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
		width: 1750px;
		margin: 50px auto;
		
	}
	#sub {
		height: 50px;
		width: 250px;
		float:left;
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
	margin:50px 30px 0 0px;
	}
	input[type=submit] {
	width:12%;
	color:black;
	float:left;
	font-size:20px;
	margin:50px 55px;
	}
	#Search_bid{
		
		margin:50px 50px 50px 300px;
	}
	</style>
	<script>
	function Display(Na) {
		window.prompt("Copy to clipboard: Ctrl+C, Enter", Na);
	
	}
	</script>
<link rel="stylesheet" type="text/css" href="css/menubar.css" />
<link rel="stylesheet" type="text/css" href="css/menubar.css" />
</head>
<body>

<ul>
  <li><a href="A_Home.php">Home</a></li>
  <li><a class="active" href="#">Search Book</a></li>
  <li><a href="F_Issue.php">Issue Book</a></li>
  <li><a href="F_Return.php">Return Book</a></li>
  <li><a href="F_display.php">Display Members</a></li>
  <li><a href="F_manage.php">Manage Members</a></li>
  <li><a href="F_manageb.php">Manage Books</a></li>
  <li style="float:right"><a href="logout.php">SignOut</a></li>
  <li style="float:right" id="name"><?php echo $login_session; ?></li>
</ul>

<div id='main'>
<form method="post" name="searchm" >
<div style='width: 100%;text-align: center;vertical-align: middle;'>
<input type="text" name="username" id="username"><br>
<input type="submit" value="Search by Bookid" name="Search_bid" id="Search_bid">
<input type="submit" value="Search by Book Name" name="Search_bt" id="Search_bt">
<input type="submit" value="Search by Publication" name="Search_pub" id="Search_pub">
<input type="submit" value="Search by Author" name="Search_au" id="Search_au" style="margin:50px 200px 50px 50px;"><br>
<?php
include('S_book.php');
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