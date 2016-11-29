<?php
	session_start();
?>
<!doctype html>
<html>
<body>
<?php
	include('connect.php');
	$calendar=date("Y-m-d");
	$insert="INSERT INTO post (calendar, username, title, type, question, a, b, c, d, result) VALUES('$calendar','$_SESSION[user]','$_POST[title]', '$_POST[type]', '$_POST[question]', '$_POST[a]', '$_POST[b]', '$_POST[c]', '$_POST[d]', '$_POST[result]')";
	if(!mysqli_query($con, $insert)){
		die('Well F*** ' . mysqli_error());
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