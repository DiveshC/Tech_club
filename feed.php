<?php
	session_start();
?>
<!doctype html>
<html>
<body>
<?php
	include('connect.php');
	$calendar=date("Y-m-d");
	$insert="INSERT INTO post (calendar, username, title, content, type) VALUES('$calendar','$_SESSION[user]','$_POST[title]', '$_POST[content]', '$_POST[type]')";
	if(!mysql_query($insert, $con)){
		die('error' . mysql_error());
	}
$ver="SELECT * FROM admin WHERE username='$_SESSION[user]'";
$row=mysql_fetch_row(mysql_query($ver, $con));
if($row[3]=="yes"){
	header("location: admin.php");
}elseif ($row[3]=="no"){
	header("location: home.php");
}
?>

</body>
</html>