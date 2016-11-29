<?php
	session_start();
?>
<!doctype html>
<html>
<body>
<?php
	include('connect.php');
	$calendar=date("Y-m-d");
	if($_POST['type']=="post"){
		$insert="INSERT INTO post (calendar, username, title, content, type) VALUES('$calendar','$_SESSION[user]','$_POST[title]', '$_POST[content]', '$_POST[type]')";
		if(!mysqli_query($con, $insert)){
			die('Well F*** ' . mysqli_error($con));
		}
	}
	elseif($_POST['type']=="quiz"){
		$insert="INSERT INTO post (calendar, username, title, type, question, a, b, c, d, result) VALUES('$calendar','$_SESSION[user]','$_POST[title]', '$_POST[type]', '$_POST[content]', '$_POST[a]', '$_POST[b]', '$_POST[c]', '$_POST[d]', '$_POST[result]')";
		if(!mysqli_query($con, $insert)){
			die('Well F*** ' . mysqli_error($con));
		}
	}
	elseif ($_POST['type']=="poll"){
		$insert="INSERT INTO post (calendar, username, title, type, question, a, b, c, d) VALUES('$calendar','$_SESSION[user]','$_POST[title]', '$_POST[type]', '$_POST[content]', '$_POST[a]', '$_POST[b]', '$_POST[c]', '$_POST[d]')";
		if(!mysqli_query($con, $insert)){
			die('Well F*** ' . mysqli_error($con));
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