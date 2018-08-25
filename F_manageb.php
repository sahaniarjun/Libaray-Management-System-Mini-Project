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
		margin-top:1%;
	  margin-left: auto;
	  margin-right: auto;
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
include('M_book.php');
?>
<ul>
  <li><a href="A_Home.php">Home</a></li>
  <li><a href="F_search.php">Search Book</a></li>
  <li><a href="F_Issue.php">Issue Book</a></li>
  <li><a href="F_Return.php">Return Book</a></li>
  <li><a href="F_display.php">Display Members</a></li>
  <li><a href="F_manage.php">Manage Members</a></li>
  <li><a class="active" href="#">Manage Books</a></li>

  <li style="float:right"><a href="logout.php">SignOut</a></li>
  <li style="float:right" id="name"><?php echo $login_session; ?></li>
</ul>






<form method="post" id="manage">
  <div class="inset">
  <p>
    <label >BookId :</label>
    <input type="text" name="bookid" id="bookid" value="<?php echo $bid; ?>">
	<input align="center" type="submit" name="Remove" VALUE="Remove Book" id="Remove">
  </p>
  <p>
    <label >Book Title :</label>
    <input type="text" name="title" id="title" value="<?php echo $bname; ?>">
  </p>
    </p>
    <p>
    <label >Choose Department :</label>
    <select id="mtype" name="mtype">
	<option value=""></option>
	<option value="Computer Eng">Computer Engineering</option>
	<option value="Civil Eng">Civil Engineering</option>
	<option value="Electronic Eng">Electronic Engineering</option>
	<option value="Mechanical Eng">Mechanical Engineering</option>
	<option value="EXTC Eng">EXTC Engineering</option>
	</select>
  </p>
    <p>
    <label >Publication :</label>
    <input type="text" name="pub" id="pub" value="<?php echo $pub; ?>">
  </p>
    <p>
    <label >Author's Name :</label>
    <input type="text" name="auth" id="auth" value="<?php echo $auth; ?>">
  </p>
    <p>
    <label >Shell No. :</label>
    <input type="text" name="shell" id="shell" value="<?php echo $shell; ?>">
  </p>
    </p>
  <span><?php echo "<p style='color:red;'>$error</p>";?></span>
  <p>
    <input align="center" type="submit" name="Add" VALUE=" Add Book " id="Add">
  </p>
  </div>
</form>








<ul  style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #333;position: fixed;bottom: 0;width: 100%;">
  <li style="margin:0 0 0 42%;" ><p style="color:White;">Copyright &copy;2016 LMS.com. All Rights Reserved.</p></li>
</ul>
</body>
</html>
