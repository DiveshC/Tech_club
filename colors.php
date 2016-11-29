<?php
	session_start();
?>
<!doctype html>
<html>
<body>
	<?php
		include('connect.php');
		$sql="UPDATE admin SET colors='$_POST[swatches]' WHERE username='$_SESSION[user]'";
		if(!mysqli_query($con, $sql)){
			die('error' . mysqli_error());
		}
		header("location: personalize.php");
	?>
</body>
</html>