<?php
	session_start();
?>
<!doctype html>
<html>
<body>
	<?php
		include('connect.php');
		$sql="UPDATE admin SET theme='$_POST[theme]' WHERE username='$_SESSION[user]'";
		if(!mysqli_query($con, $sql)){
			die('error' . mysqli_error());
		}
		header("location: personalize.php");
	?>
</body>
</html>