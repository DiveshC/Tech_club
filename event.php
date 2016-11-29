<?php
	include('connect.php');
	$sql="INSERT INTO calendar (date, event) VALUES ('$_POST[date]', '$_POST[event]')";
	if(!mysqli_query($con, $sql)){
		die('Well f*** ' . mysqli_error($con));
	}
	header("location: admin.php");
?>