<?php
	session_start();
?>


<!doctype html>
<html>
<body>
<?php
	include('connect.php');
	$password=md5($_POST['password']);
	$sql="SELECT * FROM admin WHERE email='$_POST[email]' AND password='$password' AND admin='0'";
    $sql2="SELECT * FROM admin WHERE email='$_POST[email]' AND password='$password' AND admin='1'";
	$num=mysqli_num_rows(mysqli_query($con, $sql));
    $num2=mysqli_num_rows(mysqli_query($con, $sql2));
	if ($num==1){
        $query="SELECT * FROM admin WHERE email='$_POST[email]'";
        $array=mysqli_fetch_row(mysqli_query($con, $query));
        $_SESSION["user"]=$array[1];
        header ("location:home.php");    
    }else if($num2==1){
        $query="SELECT * FROM admin WHERE email='$_POST[email]'";
        $array=mysqli_fetch_row(mysqli_query($con, $query));
        $_SESSION["user"]=$array[1];
        header ("location:admin.php");  
    }
    else {
        $_SESSION['login']=1;
        $_SESSION['fail']= "invalid username or password";
        header ("location:login.php");
    }
    //close connection
    mysqli_close($con)
?>
</body>
</html>