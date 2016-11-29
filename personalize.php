<?php
	session_start();
	include('locker.php');
	?>
<!doctype html>
<html>
<head>

	<title>Personalize</title>

	<link rel="shortcut icon" type="image/ico" href="imgs/faviicon.ico"/>

	<meta charset="utf-8">

	<style media="screen">
		@import url("stylessheet.php");
	</style>
	<link rel="stylesheet" href="bootstrap.css" type="text/css"/>
</head>
<body>
<div class="header">
	<div class="row">
		<div class="col-md-12">
				<ul>
					<li>
					<?php
					include('connect.php');
					$sql="SELECT * FROM admin WHERE username='$_SESSION[user]'";
					$theme=mysqli_fetch_row(mysqli_query($con, $sql));
					switch ($theme[6]){
						case 0:
							echo "<div class='logo'><img src='imgs/logo.png'/></div>";
							break;
						case 1:
							echo "<div class='logo'><img src='imgs/logo.png'/></div>";
							break;
						case 2:
							echo "<div class='logo'><img src='imgs/logo_purple.png'/></div>";
							break;
						case 3:
							echo "<div class='logo'><img src='imgs/logo_yellow.png'/></div>";
							break;
						case 4:
							echo "<div class='logo'><img src='imgs/logo_green.png'/></div>";
							break;
						case 5:
							echo "<div class='logo'><img src='imgs/logo_red.png'/></div>";
							break;
						case 6:
							echo "<div class='logo'><img src='imgs/logo_brown.png'/></div>";
							break;
						case 7:
							echo "<div class='logo'><img src='imgs/logo_orange.png'/></div>";
							break;
						case 8:
							echo "<div class='logo'><img src='imgs/logo_teal.png'/></div>";
							break;
					}
					?></li>
					<li>
					<h1><span style="font-weight: bold">TECH</span>_CLUB</h1>
					</li>
					<?php
						include('connect.php');
						$sql="SELECT * FROM admin WHERE username='$_SESSION[user]'";
						$row=mysqli_fetch_row(mysqli_query($con, $sql));
						if($row[3]=="1"){
							echo "<li><a href='admin.php'><img src='glyphicons/png/glyphicons-131-inbox.png'/></a></li>
							<li><a href='editor.php'><img src='glyphicons/png/glyphicons-151-edit.png'/></a></li>";
						}
						else{
							echo "<li><a href='home.php'><img src='glyphicons/png/glyphicons-131-inbox.png'/></a></li>";
						}
					?>
					<li><a href="personalize.php"><img src="glyphicons/png/glyphicons-137-cogwheel.png"/></a></li>
					<li><a href="tutorial.php"><img src="glyphicons/png/glyphicons-72-book.png"/></a></li>
					<li>
						<form method="post" action="exit.php">
							<input type="submit" name="logout" value="logout">
						</form>
					</li>
				</ul>
		</div>
	</div>
</div>
<div class="news">
<div class="editor">
	<div class="row">
		<div class="col-md-4">
			<h1>Choose the style of your choice!</h1>
			<h2>Make the website more cozy :)</h2>
			<form method="post" action="change.php">
				<input name="theme" type="radio" value="0">Light
				<input name="theme" type="radio" value="1">Dark</br>
				<input type="submit" value="" name="submit">
			</form>
			<div class="palette">
				<h2>Choose your own colour scheme!</h2>
				<form method="post" action="colors.php">
					<span style="background-color:#2f88db"><input name="swatches" type="radio" value="0"></span>
					<span style="background-color:#003399"><input name="swatches" type="radio" value="1"></span>
					<span style="background-color:#9933ff"><input name="swatches" type="radio" value="2"></span></br>
					<span style="background-color:#ffcc00"><input name="swatches" type="radio" value="3"></span>
					<span style="background-color:#ff6600"><input name="swatches" type="radio" value="7"></span>
					<span style="background-color:#ff0000"><input name="swatches" type="radio" value="5"></span></br>
					<span style="background-color:#663300"><input name="swatches" type="radio" value="6"></span>
					<span style="background-color:#00ffcc"><input name="swatches" type="radio" value="8"></span>
					<span style="background-color:#006600"><input name="swatches" type="radio" value="4"></span></br>
					<input type="submit" value="" name="submit">
				</form>
			</div>
		</div>
		<div class="col-md-8">
			<img style="width:500px" src="imgs/light.jpg"/>
			<img style="width:500px" src="imgs/dark.jpg"/>
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
				<li> Room 210 </li>
				<li> Runs on Thursdays </li>
			</ul>
		</div>
	</div>
</div>
</body>
</html>
