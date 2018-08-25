<?php
include('session.php');
include('issue.php');
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
        Issue Book
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
	</style>
	<script>
	function validateForm() {
    var x = document.issue.userid.value;
    if (x == null || x == "") {
        alert("Please Enter UserID.");
		document.issue.userid.focus();
        return false;
    }
	var x = document.issue.bookid.value;
    if (x == null || x == "") {
        alert("Please Enter Bookid.");
		document.issue.bookid.focus();
        return false;
    }
}
</script>
<link rel="stylesheet" type="text/css" href="css/menubar.css" />
<link rel="stylesheet" type="text/css" href="css/form.css" />

</head>
	
<body>

<ul>
  <li><a href="F_Home.php">Home</a></li>
  <li><a href="F_search.php">Search Book</a></li>
  <li><a class="active" href="#contact">Issue Book</a></li>
  <li><a href="F_Return.php">Return Book</a></li>
  <li><a href="F_display.php">Display Members</a></li>
  <li><a href="F_manage.php">Manage Members</a></li>
  <li><a href="F_manageb.php">Manage Books</a></li>
  <li style="float:right"><a href="logout.php">SignOut</a></li>
  <li style="float:right" id="name"><?php echo $login_session; ?></li>
</ul>
<form name="issue" method="POST" onsubmit="return validateForm()">
  <div class="inset">
  <p>
    <label >Member's ID :</label>
    <input type="text" name="userid" id="userid">
  </p>
  <p>
    <label >Book ID :</label>
    <input type="text" name="bookid" id="bookid">
  </p>
  <span><?php echo "<p style='color:red;'>$error</p>";?></span>
  <p>
    <input align="center" type="submit" name="ISSUE_BOOK" VALUE="ISSUE BOOK" id="ISSUE_BOOK">
  </p>
  </div>
  </div>
</form>




<ul  style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #333;position: fixed;bottom: 0;width: 100%;">
  <li style="margin:0 0 0 42%;" ><p style="color:White;">Copyright &copy;2016 LMS.com. All Rights Reserved.</p></li>
</ul>

</body>
</html>

