<?php
	session_start();
	include('locker.php');
?>
<!doctype html>
<html>
<head>
	<title>Admin</title>

	<link rel="shortcut icon" type="image/ico" href="imgs/faviicon.ico"/>

	<script type="text/javascript" src="techclubjquery.js"></script>

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
					<li><a href="admin.php"><img src="glyphicons/png/glyphicons-131-inbox.png"/></a></li>
					<li><a href="editor.php"><img src="glyphicons/png/glyphicons-151-edit.png"/></a></li>
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
				<h2>Users</h2>
				<p>The complete database</p>
				<table> <thead></thead> <tr> <th> Username </th><th> Admin </th><th> Points </th></tr>
				<?php
					include('connect.php');
					$records="SELECT * FROM admin";
					$count=mysqli_num_rows(mysqli_query($con, $records));
					for($z=1; $z<=$count; $z++){
						$query="SELECT * FROM admin WHERE id='$z'";
						if(!mysqli_query($con, $query)){
							die('error' . mysqli_error());
						}else{
							$result=mysqli_fetch_row(mysqli_query($con, $query));
							echo "<tr><td>" . $result[1] . "</td><td>" . $result[3] . "</td><td>" . $result[4] . "</td></tr>";
						}
					}
				?>
			</table>
		</div>
		<div class="col-md-4">
			<h2>Edit User Info</h2>
			<form method="post" action="edit.php">
				Who?:</br><input type="text" name="who"/></br>
				Points:</br><input type="number" name="points"/></br>
				<input type="radio" name="admin" value="1">Exec</br>
				<input type="radio" name="admin" value="0">Member</br>
				<input type="submit" name="submit" value=""/>
			</form>
			<h2>Change passwords</h2>
			<p>Sneaky bastard. JK</p>
			<form method="post" action="reset.php">
				Who?:</br><input type="text" name="who"/></br>
				Password:</br><input type="password" name="password"/></br>
				<input type="submit" name="submit" value=""/>
			</form>
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