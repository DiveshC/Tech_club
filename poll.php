<?php
	session_start();
?>
<!doctype html>
<html>
<body>
<?php
	include('connect.php');
	$sql="SELECT * FROM post WHERE PID='$_POST[PID]'";
	$record=mysqli_fetch_row(mysqli_query($con, $sql));
	if($_POST['ans']==1){
		$points= 1 + $record[12];
		$update="UPDATE post SET ar='$points' WHERE PID='$_POST[PID]'";
		if(!mysqli_query($con, $update)){
			die('Well f*** '. mysqli_error($con));
		}
	}elseif($_POST['ans']==2){
		$points= 1 + $record[13];
		$update="UPDATE post SET br='$points' WHERE PID='$_POST[PID]'";
		if(!mysqli_query($con, $update)){
			die('Well f*** '. mysqli_error($con));
		}
	}elseif($_POST['ans']==3){
		$points= 1 + $record[14];
		$update="UPDATE post SET cr='$points' WHERE PID='$_POST[PID]'";
		if(!mysqli_query($con, $update)){
			die('Well f*** '. mysqli_error($con));
		}
	}elseif($_POST['ans']==4){
		$points= 1 + $record[15];
		$update="UPDATE post SET dr='$points' WHERE PID='$_POST[PID]'";
		if(!mysqli_query($con, $update)){
			die('Well f*** '. mysqli_error($con));
		}
	}
	$_SESSION['a']=$record[12];
	$_SESSION['b']=$record[13];
	$_SESSION['c']=$record[14];
	$_SESSION['d']=$record[15];
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