<!doctype html>
<html>

<body>
<?php
	//url:https://uwublogs.wordpress.com/tag/how-to-create-register-and-login-form-using-php/
	//modified by: Divesh C.
	//date: 2015 /12/04
	//purpose: prevents someone from logging out and then returning back without logging back in
	include('connect.php');
	
	$user_check=$_SESSION["user"];

	$sql="SELECT * from admin where username ='$user_check' ";

	$row=mysql_fetch_row(mysql_query($sql, $con));

	$login_session=$_SESSION['user'];
	//if there is no record of a user then the session is over, go to login
	if(!isset($login_session))
	{
	header("Location: login.php");
	}
?>
</body>
</html>