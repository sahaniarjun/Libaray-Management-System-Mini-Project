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
        Manage Members
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
	form {
		background:#111;
	}
	#mtype{
		 	width:100%;
			padding:8px 5px;
			background:linear-gradient(#1f2124, #27292c);
			border:1px solid #222;
			box-shadow:
			0 1px 0 rgba(255,255,255,0.1);
			border-radius:0.3em;
			margin-bottom:20px;
			color:White;

		}
		select option {
    margin:40px;
    background: #27292c;
    color:White;
    text-shadow:0 1px 0 rgba(255,255,255,0.1);
}
	</style>
</head>
<body>
<?php
include('M_mem.php');
?>
<ul>
  <li><a href="A_Home.php">Home</a></li>
  <li><a href="F_search.php">Search Book</a></li>
  <li><a href="F_Issue.php">Issue Book</a></li>
  <li><a href="F_Return.php">Return Book</a></li>
  <li><a href="F_display.php">Display Members</a></li>
  <li><a class="active" href="#">Manage Members</a></li>
  <li><a href="F_manageb.php">Manage Books</a></li>

  <li style="float:right"><a href="logout.php">SignOut</a></li>
  <li style="float:right" id="name"><?php echo $login_session; ?></li>
</ul>






<form method="post" id="manage">
  <div class="inset">
  <p>
    <label >UserId :</label>
    <input type="text" name="userid" id="userid" value="<?php echo $uid; ?>">
	<input align="center" type="submit" name="Remove" VALUE="Remove Member" id="Remove">
  </p>
  <p>
    <label >Username :</label>
    <input type="text" name="username" id="username" value="<?php echo $uname; ?>">
  </p>
    </p>
    <p>
    <label >Choose Member Type :</label>
    <select id="mtype" name="mtype">
	<option value=""></option>
	<option value="student">Student</option>
	<option value="faculty">Faculty</option>
	</select>
  </p>
    </p>
  <span><?php echo "<p style='color:red;'>$error</p>";?></span>
  <p>
    <input align="center" type="submit" name="Add" VALUE=" Add Member " id="Add">
  </p>
  </div>
</form>








<ul  style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #333;position: fixed;bottom: 0;width: 100%;">
  <li style="margin:0 0 0 42%;" ><p style="color:White;">Copyright &copy;2016 LMS.com. All Rights Reserved.</p></li>
</ul>
</body>
</html>
