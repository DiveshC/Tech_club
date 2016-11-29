<?php
	session_start();
?>
<!doctype html>
<html>
<body>
<?php
	include('connect.php');
	$query="SELECT * FROM admin WHERE username='$_SESSION[user]'";
	if(!mysqli_query($con, $query)){
		die('Well F*** ' . mysql_error());
	}
	$array=mysqli_fetch_row(mysqli_query($con, $query));
	$sql="SELECT * FROM post WHERE PID='$_POST[PID]'";
	$record=mysqli_fetch_row(mysqli_query($con, $sql));
	if($_POST['ans']==$record[11]){
	$points= 1 + $array[4];
	$update="UPDATE admin SET points='$points' WHERE username='$_SESSION[user]'";
	if(!mysqli_query($con, $update)){
		die('Well f*** '. mysqli_error($con));
	}
}
$ver="SELECT * FROM admin WHERE username='$_SESSION[user]'";
$row=mysqli_fetch_row(mysqli_query($con, $ver));
if($row[3]=="1"){
	header("location: admin.php");
}elseif($row[3]=="0"){
	header("location: home.php");
}
?>

</body>
</html>