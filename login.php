<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tech_Club</title>

	<link rel="shortcut icon" type="image/ico" href="imgs/faviicon.ico"/>

	<meta charset="utf-8">
	<style type="text/css">
		@import url("stylessheet.css");
	</style>
	<link rel="stylesheet" href="bootstrap.css" type="text/css"/>

</head>
<body>

<div class="jumbotron">
	<div class="row">

				<div class="col-md-12">
					<div class="register">
						<h1>Login</h1>
						<form method="post" action="entry.php">
									Email:</br><input type="email" name="email" /></br>
									Password:</br><input type="password" name="password" /></br>
									<input type="submit" name="submit" value=" "/>
								</form>
									<?php
								        include('connect.php');
								        if (isset($_SESSION['login'])){
									          if($_SESSION['login']==1){
									          if (isset($_SESSION['fail'])){
									            echo "<p><span style='color:red'>$_SESSION[fail]</span>.</p>";
									            session_destroy();
								        		}
								      		}
								   } 
							?>
						<h2>Or Register</h2>
						<form method="post" action="register.php">
							Username:</br><input type="username" name="username"/></br>
							Email:</br><input type="email" name="email" /></br>
							Password:</br><input type="password" name="password"/></br>
							<input type="submit" name="submit" value=""/>
						</form>
						<?php
							include('connect.php');
					        if (isset($_SESSION['register'])){
						         if($_SESSION['register']==2){
						          if (isset($_SESSION['length'])){
						            echo "<p><span style='color:orange'>$_SESSION[length]</span></p>";
						            session_destroy();
						        }
						    }else if($_SESSION['register']==0){
						          if (isset($_SESSION['print'])){
						            echo "<p><span style='color:white'>$_SESSION[print]</span> You will have to wait before logging in ;)</p>";
						            session_destroy();
						        }
					      	}else if($_SESSION['register']==1){
					        echo "<p><span style='color:red'>$_SESSION[print]</span></p>";
					        session_destroy();        
					      }
					      } 
					      ?>
					</div>
		</div>
	</div>
</div>
<div class="footer">
	<div class="row">
		<div class="col-md-12">
			<ul>
				<li> Tech club </li>
				<li> Creators: </li>
				<li> Divesh </li>
				<li> Divyam </li>
				<li> Romit </li>
				<li> Uday </li>
				<li> Aditya </li>
			</ul>
			<ul>
				<li> Contacts: </li>
				<li> drchudasama26@outlook.com </li>
				<li> Follow us on social media <a href="https://www.facebook.com/groups/1195808037102807/"><img src="glyphicons-social/png/glyphicons-social-31-facebook.png"/></a></li>
			</ul>
			<ul>
				<li> Info </li>
				<li><a href="privacy_policy.html">Privacy Policy</a></li>
				<li> Room 210 </li>
				<li> Runs on Thursdays </li>
			</ul>
		</div>
	</div>
</div>
</body>
</html>