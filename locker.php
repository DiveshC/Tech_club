<!doctype html>
<html>

<body>
<?php

	include('connect.php');
	
	$user_check=$_SESSION["user"];

	$sql="SELECT * from admin where username ='$user_check' ";

	$row=mysqli_fetch_row(mysqli_query($con, $sql));

	$login_session=$_SESSION['user'];
	//if there is no record of a user then the session is over, go to login
	if(!isset($login_session))
	{
	header("Location: login.php");
	}
?>
</body>
</html>