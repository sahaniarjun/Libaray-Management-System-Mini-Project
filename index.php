
<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['userid'])){
	$servername = "localhost";
	$username = "root";
	$password = "123456";
	$dbname = "lms";
	$conn=mysqli_connect($servername, $username, $password, $dbname);
	$user_check=$_SESSION['userid'];
	$sql = "select * from lib where Userid='$user_check'";
	$query = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($query);
	if($row['Type']==0)
	{
		header("location: F_Home.php");
	}else
	{
		header("location: A_Home.php");
	}
	mysqli_close($conn); // Closing Connection
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>
        LogIn
    </title>
    <link rel="stylesheet" type="text/css" href="css/loginde.css" />
	<script>
	function validateForm() {
    var x = document.login.username.value;
    if (x == null || x == "") {
        alert("Please Enter UserID.");
		document.login.username.focus();
        return false;
    }
	var x = document.login.password.value;
    if (x == null || x == "") {
        alert("Please Enter Password.");
		document.login.password.focus();
        return false;
    }
}
</script>
</head>
	<style>
	body {
    background-image: url('css/Images/loginb.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
	background-color:black;
	background-size: 100% 100%;
	color:white;
    }
	</style>
<body>
<form name="login" method="POST" onsubmit="return validateForm()" >
  <h1>LogIn</h1>
  <!-- <div width="100%" Height="30%"></div> -->
  <div class="inset">
  <p>
    <label for="email">USERID :</label>
    <input type="text" name="username" id="username">
  </p>
  <p>
    <label for="password">PASSWORD :</label>
    <input type="password" name="password" id="password">
  </p>
  <span><?php echo "<p style='color:red;'>$error</p>";?></span>
  <p>
    <input align="center" type="submit" name="Login" id="Login">
  </p>
  </div>
  </div>
</form>



<ul  style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #333;position: fixed;bottom: 0;width: 100%;">
  <li style="margin:0 0 0 42%;" ><p style="color:White;">Copyright &copy;2016 LMS.com. All Rights Reserved.</p></li>
</ul>
</body>
</html>
