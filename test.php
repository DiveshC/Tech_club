<?php
	session_start();
?>
<!doctype html>
<html>
<body>
<?php
include("connect.php");
	$sql="SELECT * FROM admin WHERE username='$_SESSION[user]'";
	$record=mysqli_fetch_row(mysqli_query($con, $sql));
	if($_POST['answer']==1){
		$points= 2 + $record[4];
		$update="UPDATE admin SET points='$points' WHERE username='$_SESSION[user]'";
		if(!mysqli_query($con, $update)){
			die('Well f*** '. mysqli_error($con));
		}
	}elseif($_POST['answer']==0){
		$points= $record[4]-1;
		$update="UPDATE admin SET points='$points' WHERE username='$_SESSION[user]'";
		if(!mysqli_query($con, $update)){
			die('Well f*** '. mysqli_error($con));
		}
	}
header("location: tutorial.php");
?>

</body>
</html>