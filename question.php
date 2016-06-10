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
	if(!mysql_query($insert, $con)){
		die('error' . mysql_error());
	}
$ver="SELECT * FROM admin WHERE username='$_SESSION[user]'";
$row=mysql_fetch_row(mysql_query($ver, $con));
if($row[3]=="yes"){
	header("location: admin.php");
}elseif($row[3]=="no"){
	header("location: home.php");
}
?>

</body>
</html>