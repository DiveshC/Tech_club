<?php
	session_start();
?>
<!doctype html>
<html>
<body>
<?php
	include('connect.php');
	$query="SELECT * FROM admin WHERE username='$_POST[name]'";
	if(!mysql_query($query, $con)){
		die('error' . mysql_error());
	}
	$array=mysql_fetch_row(mysql_query($query, $con));
	$points=$_POST['points'] + $array[4];
	$update="UPDATE admin SET admin='$_POST[admin]', points='$points' WHERE username='$_POST[name]'";
	if(!mysql_query($update, $con)){
		die('error'. mysql_error());
	}
$ver="SELECT * FROM admin WHERE username='$_SESSION[user]'";
$row=mysql_fetch_row(mysql_query($ver, $con));
	header("location: admin.php");
?>

</body>
</html>