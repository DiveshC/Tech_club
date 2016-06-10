<!doctype html>
<html>
<body>
<?php
	session_start();
	if(session_destroy())
	{
	header("Location: login.php");
	}
	mysql_close($con);
?>
</body>
</html>