<?php
	session_start();
?>


<!doctype html>
<html>
<body>
<?php
	include('connect.php');
	$password=md5($_POST['password']);
	$sql="SELECT * FROM admin WHERE username='$_POST[username]' AND password='$password' AND admin='no'";
    $sql2="SELECT * FROM admin WHERE username='$_POST[username]' AND password='$password' AND admin='yes'";
	$num=mysql_num_rows(mysql_query($sql, $con));
    $num2=mysql_num_rows(mysql_query($sql2, $con));
	if ($num==1){
        $_SESSION["user"]=$_POST['username'];
        header ("location:home.php");    
    }else if($num2==1){
        $_SESSION["user"]=$_POST['username'];
        header ("location:admin.php");  
    }
    else {
        $_SESSION['login']=1;
        $_SESSION['fail']= "invalid username or password";
        header ("location:login.php");
    }
    //close connection
    mysql_close($con)
?>
</body>
</html>