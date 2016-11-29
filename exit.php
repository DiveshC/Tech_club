<!doctype html>
<html>
<body>
<?php
	session_start();
	if(session_destroy())
	{
	header("Location: login.php");
	}
	mysqli_close($con);
?>
</body>
</html>