<?php
	session_start();
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Tech_Club</title>

	<link rel="shortcut icon" type="image/ico" href="imgs/faviicon.ico"/>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<meta charset="utf-8">

	<style type="text/css">
		@import url("stylessheet.css");
	</style>
	<link rel="stylesheet" href="bootstrap.css"/>


</head>
<body>
	<div class="header">
		<div class="row">
			<div class="col-md-12">
					<ul>
						<li>
						<img src="imgs/Tech_club_logo.gif"/></li>
						<li>
						<h1><span style="font-weight: bold">TECH</span>_CLUB<h1>
						</li>
					<div class="login">
						<form method="post" action="entry.php">
							<input value="username" type="text" name="username"/></br>
							<input value="password" type="password" name="password"/>
							<input type="submit" name="submit" value="login"/>
						</form>
							<?php
						        include('connect.php');
						        if (isset($_SESSION['login'])){
							          if($_SESSION['login']==1){
							          if (isset($_SESSION['fail'])){
							            echo "<p><span style='color:red'>$_SESSION[fail]</span>. If you want...<a href='valid.php'>Change</a> it using the hyperlink</p>";
							            session_destroy();
						        		}
						      		}
						   } 
					?>
					</div>
				</ul>
				</div>
			</div>
		</div>
	</div>
<div class="jumbotron">
	<div class="row">

		<div class="col-md-8">
			<div class="about">
				<h1><span style="font-weight:bold">World</span> First, <span style="font-weight:bold">Tech</span> First, <span style="font-weight:bold">Tech</span>_Club</h1>
				<p> Tech club is a small after school club run by students of TFSS. We look to open up the minds of our fellow peers to the power and potential of technology. Provide them with the means to excel in a tech centric world. App dev, web dev, and hardware are topics we actively explore. Its not important what technology controls, its important how you control technology.</p>
			</div>
		</div>

		<div class="col-md-4">
			<div class="register">
				<h2>Proud memeber of TFSS <span style="font-weight:bold">Tech</span>_Club? Then register</h2>
				<form method="post" action="register.php">
					<input value="username" type="username" name="username"/></br>
					<input value="password" type="password" name="password"/></br>
					<input type="submit" name="submit" value="register"/>
				</form>
				<?php
					include('connect.php');
			        mysql_select_db("Techclub",$con);
			        if (isset($_SESSION['register'])){
				         if($_SESSION['register']==2){
				          if (isset($_SESSION['length'])){
				            echo "<p><span style='color:orange'>$_SESSION[length]</span></p>";
				            session_destroy();
				        }
				    }else if($_SESSION['register']==0){
				          if (isset($_SESSION['print'])){
				            echo "<p><span style='color:green'>$_SESSION[print]</span></p>";
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
				<li> Romit </li>
				<li> Uday </li>
				<li> Aditya </li>
			</ul>
			<ul>
				<li> Contacts: </li>
				<li> drchudasama26@outlook.com </li>
			</ul>
			<ul>
				<li> Info </li>
				<li> Room 210 </li>
				<li> Runs on Thursdays </li>
			</ul>
		</div>
	</div>
</div>
</body>
</html>