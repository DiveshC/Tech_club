<?php
	session_start();
?>
<!doctype html>
<html>
<body>
<?php
	include('connect.php');
	$query="SELECT * FROM post WHERE PID='$_SESSION[id]'";
	if(!mysqli_query($con, $query)){
		die('error' . mysql_error());
	}
	$array=mysqli_fetch_row(mysqli_query($con, $query));
	$num= 1 + $array[12];
	$update="UPDATE post SET likes='$num' WHERE PID='$_SESSION[id]'";
	if(!mysqli_query($con, $update)){
		die('error'. mysqli_error());
	}

	header("location: admin.php");
?>

</body>
</html>