<?php
	session_start();
?>
<!doctype html>
<html>
<body>
<?php
	include('connect.php');
	$query="SELECT * FROM admin WHERE username='$_POST[who]'";
	if(!mysqli_query($con, $query)){
		die('error' . mysql_error());
	}
	$array=mysqli_fetch_row(mysqli_query($con, $query));
	$points=$_POST['points'] + $array[4];
	$update="UPDATE admin SET admin='$_POST[admin]', points='$points' WHERE username='$_POST[who]'";
	if(!mysqli_query($con, $update)){
		die('error'. mysqli_error($con));
	}

	header("location: editor.php");
?>

</body>
</html>