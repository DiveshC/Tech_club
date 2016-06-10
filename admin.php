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
				<form method="post" action="exit.php">
					<input type="submit" name="logout" value="logout"/>
				</form>
				</div>
				</ul>
			</div>
		</div>
	</div>
</div>



<div class="jumbotron">
	<div class="greeting">
	<h1><span> Hey </span> 
		<?php
		echo $_SESSION['user'];
		include('connect.php');
		$query="SELECT * FROM admin WHERE username='$_SESSION[user]'";
		if(!mysql_query($query, $con)){
			die('error' . mysql_error());
		}
		$array=mysql_fetch_row(mysql_query($query, $con));
		echo $array[4];
		?>
	</h1>
</div>
<div class="leader">
	<h2><span>Leader Board</span></h2>
			<ol>
				<?php
					include("connect.php");
					$max="SELECT max(points) FROM admin";
					if(!mysql_query($max, $con)){
						die('error' . mysql_error());
					}
					$res=mysql_fetch_row(mysql_query($max, $con));
					$best=mysql_fetch_row(mysql_query("SELECT * FROM admin WHERE points='$res[0]'", $con));
					$records="SELECT * FROM admin";
					$count=mysql_num_rows(mysql_query($records, $con));
					for($z=0; $z<=$count; $z++){
						$less=$best[4]-$z;
						$next="SELECT * FROM admin WHERE points='$less'";
						if(!mysql_query($next, $con)){
							die('error' . mysql_error());
						}
						$array=mysql_fetch_row(mysql_query($next, $con));
						if($array[1]!=""){
							echo "<li>" . $array[1] . " : " . $array[4] . "</li>";
						}
					}
				?>
	</ol>
</div>
</div>
<div class="editor">
	<div class="row">
		<div class="col-md-8">
				<h2>Users</h2>
				<p>The complete database</p>
				<table> <thead></thead> <tr> <th> Username </th><th> Admin </th><th> Points </th></tr>
				<?php
					include('connect.php');
					$records="SELECT * FROM admin";
					$count=mysql_num_rows(mysql_query($records, $con));
					for($z=1; $z<=$count; $z++){
						$query="SELECT * FROM admin WHERE id='$z'";
						if(!mysql_query($query, $con)){
							die('error' . mysql_error());
						}else{
							$result=mysql_fetch_row(mysql_query($query, $con));
							echo "<tr><td>" . $result[1] . "</td><td>" . $result[3] . "</td><td>" . $result[4] . "</td></tr>";
						}
					}
				?>
			</table>
		</div>
		<div class="col-md-4">
			<h2>Edit User Info</h2>
			<form method="post" action="edit.php">
				<input type="text" name="name" value="username"/></br>
				<input type="number" name="points"/></br>
				<input type="radio" name="admin" value="yes">Exec</br>
				<input type="radio" name="admin" value="no">Member</br>
				<div class="glyphicon-edit:before"><input type="submit" name="submit"/></div>
			</form>
		</div>
	</div>
</div>

<div class="news">
<div class="row">
	<div class="col-md-8">

		<h1> Message board</h1>
			<?php

				include('connect.php');
				$rows="SELECT * FROM post";
				$num=mysql_num_rows(mysql_query($rows, $con));
				for ($i=$num; $i > 0; $i--){
					$sql="SELECT * FROM post where PID='$i'";
						if(!mysql_query($sql, $con)){
							die('error'. mysql_error());
						}
					$array=mysql_fetch_row(mysql_query($sql, $con));

					if ($array[5]=='post'){
						echo "<div class='body'><h2>" . $array[1] . " : " . $array[2] . "</h2></br><p>" . $array[4] . " : " . $array[3] . "</p></div>";			
					}else{
						echo "<div class='body'>" . "<h2>" . $array[1] . " : " . $array[2] . "</h2></br>" . "<p>" . $array[4] . " : " . $array[0] . " . " . $array[6] . "</p><div class='editor'><form method='post' action='marker.php'><input type='radio' name='ans' value='1'>". $array[7] . "</br><input type='radio' name='ans' value='2'>" . $array[8] . "</br><input type='radio' name='ans' value='3'>". $array[9] . "</br><input type='radio' name='ans' value='4'>". $array[10] . "</br>What is the #?<input type='number' name='PID' min='0'/><input type='submit' name='submit' value='enter'/></br></form></div></div>";
					}
				}

			?>		
		</div>
		<div class="col-md-4">
		<div class="editor">	
			<h2>Say something!</h2>
			<form method="post" action="feed.php">
				<input value="title" type="text" name="title"/>
				<input type="submit" name="submit" value="enter"/>
				<input type="radio" name="type" value="post">Post</br>
				<textarea name="content" rows="5" cols="50">
				</textarea></br>
			</form>
			<h2>Test them!</h2>
			<form method="post" action="question.php">
				<input value="title" type="text" name="title"/>
				<input type="submit" name="submit" value="enter"/>
				<input type="radio" name="type" value="quiz">Quiz</br>
				<textarea name="question" rows="3" cols="50">
				</textarea></br>
				<input value="option 1" type="text" name="a"/>

				<input value="option 2" type="text" name="b"/></br>

				<input value="option 3" type="text" name="c"/>

				<input value="option 4" type="text" name="d"/></br>
				Answere:<input type="number" name="result" min="1" max="4"/> 
				
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