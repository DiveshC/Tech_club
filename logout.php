<!doctype html>
<html>
<body>
<?php
	session_start();
	if(session_destroy())
	{
	header("Location: Mainpage.html");
	}
	mysql_close($con);
?>
</body>
</html>