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
	<link rel="stylesheet" type="text/css" href="css/form.css" />
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
	form {
		background:#111; 
		width:700px;
		margin:10% auto;
	</style>
</head>
<body>
<?php
include('M_lib.php');
?>
<ul>
  <li><a href="A_Home.php">Home</a></li>
  <li><a href="D_lib.php">Display Librarian</a></li>
  <li><a class="active" href="#">Manage Librarian</a></li>
  <li style="float:right"><a href="logout.php">SignOut</a></li>
  <li style="float:right" id="name"><?php echo $login_session; ?></li>
</ul>



<form method="post" id="manage">
  <div class="inset">
  <p>
    <label >UserId :</label>
    <input type="text" name="userid" id="userid" value="<?php echo $uid; ?>">
	<input align="center" type="submit" name="Remove" VALUE="Remove Librarian" id="Remove">
  </p>
  <p>
    <label >Username :</label>
    <input type="text" name="username" id="username" value="<?php echo $uname; ?>">
  </p>
    <p>
    <label >Password :</label>
    <input type="password" name="password" id="password" value="<?php echo $pwd; ?>">
  </p>
  <p>
    <label >Confirm Password :</label>
    <input type="password" name="cpassword" id="cpassword" value="<?php echo $cpwd; ?>">
  </p>
  <span><?php echo "<p style='color:red;'>$error</p>";?></span>
  <p>
    <input align="center" type="submit" name="Add" VALUE=" Add Librarian " id="Add">
  </p>
  </div>
</form>




<ul  style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #333;position: fixed;bottom: 0;width: 100%;">
  <li style="margin:0 0 0 42%;" ><p style="color:White;">Copyright &copy;2016 LMS.com. All Rights Reserved.</p></li>
</ul>
</body>
</html>