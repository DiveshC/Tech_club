<?php
	session_start();
?>
    <?php
        include('connect.php');
        if(strlen($_POST['password'])<6){
        	$_SESSION['register']=2;
        	$_SESSION['length']="too short, your password should be atleast 6";
        	header("location:login.php");
        }else if(strlen($_POST['password'])>=6){
        //data validation: checks to see if username is unique
        $query="SELECT * FROM admin WHERE username= '$_POST[username]'";
        $count=mysqli_num_rows(mysqli_query($con, $query));
        //checks to see if user name is unique
        if($count==0){
            //encryption 
            $_password=md5($_POST['password']);
            //data insertion
            $insertion="INSERT INTO admin (username, email, password) VALUES ('$_POST[username]', '$_POST[email]','$_password')";
            if (!mysqli_query($con, $insertion)){
                die('Well F***: ' . mysqli_error($con));
            }
            $_SESSION['register']=0;
            $_SESSION['print']= "Your account has been created!";
            header ("location:login.php");           
        }else if($count== 1){
            $_SESSION['register']=1;
            $_SESSION['print']= "This username already exists!";
            header ("location:login.php");
            die('Well F*** :' . mysqli_error($con));       
        }
    }
        mysql_close($con)
    ?>

<!doctype html>
<html>
<body>
</body>
</html>