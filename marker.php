<?php
	session_start();
?>
<!doctype html>
<html>
<body>
<?php
	include('connect.php');
	$query="SELECT * FROM admin WHERE username='$_SESSION[user]'";
	if(!mysql_query($query, $con)){
		die('error' . mysql_error());
	}
	$array=mysql_fetch_row(mysql_query($query, $con));
	$sql="SELECT * FROM post WHERE PID='$_POST[PID]'";
	$record=mysql_fetch_row(mysql_query($sql, $con));
	if($_POST['ans']==$record[11]){
	$points= 1 + $array[4];
	$update="UPDATE admin SET points='$points' WHERE username='$_SESSION[user]'";
	if(!mysql_query($update, $con)){
		die('error'. mysql_error());
	}
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