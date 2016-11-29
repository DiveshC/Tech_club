<?php
	include('connect.php');
	$query="SELECT * FROM admin WHERE username='$_POST[who]'";
	$result=mysqli_num_rows(mysqli_query($con, $query));
	if($result==1){
		$password=md5($_POST['password']);
		$sql="UPDATE admin SET password='$password' WHERE username='$_POST[who]'";
		if(!mysqli_query($con, $sql)){
			die('Well F*** ' . mysqli_error($con));
		}
	}
	header("location: editor.php");
?>