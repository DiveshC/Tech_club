<?php
	session_start();
	include('locker.php');
	include('connect.php');
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
					<li><a style="a:active { color: #2f80db;}" href="admin.php"><img src="glyphicons/png/glyphicons-131-inbox.png"/></a></li>
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


<div class="jumbotron">
	<div class="row">
		<div class="col-md-4">
			<div class="greeting">
			<h1><span> Hey </span> 
				<?php
				echo $_SESSION['user'];
				include('connect.php'); 
		 		$query="SELECT * FROM admin WHERE username='$_SESSION[user]'"; 
		 		if(!mysqli_query($con, $query)){ 
		 			die('error' . mysqli_error()); 
				} 
				$array=mysqli_fetch_row(mysqli_query($con, $query)); 
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
						if(!mysqli_query($con, $max)){
							die('error' . mysqli_error());
						}
						$res=mysqli_fetch_row(mysqli_query($con, $max));
						$best=mysqli_fetch_row(mysqli_query($con, "SELECT * FROM admin WHERE points='$res[0]'"));
						$records="SELECT * FROM admin";
						$count=mysqli_num_rows(mysqli_query($con, $records));
						for($z=0; $z<=3; $z++){
							$less=$best[4]-$z;
							$next="SELECT * FROM admin WHERE points='$less'";
							if(!mysqli_query($con, $next)){
								die('error' . mysqli_error());
							}
							$array=mysqli_fetch_row(mysqli_query($con, $next));
							if($array[1]!=""){
								echo "<li>" . $array[1] . " : " . $array[4] . "</li>";
							}
						}
					?>
				</ol>
			</div>
		</div>
		<div class="col-md-8">
			<?php
			include("connect.php");
				/* draws a calendar */
				function draw_calendar($month,$year){
					include("connect.php");
					/* draw table */
					$calendar = '<table cellpadding="0" cellspacing="0" class="calendar">';

					/* table headings */
					$headings = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
					$calendar.= '<tr class="calendar-row"><td class="calendar-day-head">'.implode('</td><td class="calendar-day-head">',$headings).'</td></tr>';

					/* days and weeks vars now ... */
					$running_day = date('w',mktime(0,0,0,$month,1,$year));
					$days_in_month = date('t',mktime(0,0,0,$month,1,$year));
					$days_in_this_week = 1;
					$day_counter = 0;
					$dates_array = array();

					/* row for week one */
					$calendar.= '<tr class="calendar-row">';

					/* print "blank" days until the first of the current week */
					for($x = 0; $x < $running_day; $x++){
						$calendar.= '<td class="calendar-day-np"> </td>';
						$days_in_this_week++;
					}

					/* keep going with days.... */
					for($list_day = 1; $list_day <= $days_in_month; $list_day++){
						$calendar.= '<td class="calendar-day">';
							/* add in the day number */
							$calendar.= '<div class="day-number">'.$list_day.'</div>';								
							/** QUERY THE DATABASE FOR AN ENTRY FOR THIS DAY !!  IF MATCHES FOUND, PRINT THEM !! **/
							$date=date("Y-m-$list_day");
							$query=mysqli_query($con, "SELECT * FROM calendar WHERE date='$date'");
							$array=mysqli_fetch_row($query);
							if(isset($array[1])){
							$calendar.= '<div class=event>'.$array[1].'</div>';
						}
							
						$calendar.= '</td>';
						if($running_day == 6):
							$calendar.= '</tr>';
							if(($day_counter+1) != $days_in_month):
								$calendar.= '<tr class="calendar-row">';
							endif;
							$running_day = -1;
							$days_in_this_week = 0;
						endif;
						$days_in_this_week++; $running_day++; $day_counter++;
					}

					/* finish the rest of the days in the week */
					if($days_in_this_week < 8):
						for($x = 1; $x <= (8 - $days_in_this_week); $x++){
							$calendar.= '<td class="calendar-day-np"> </td>';
						}
					endif;

					/* final row */
					$calendar.= '</tr>';

					/* end the table */
					$calendar.= '</table>';
					
					/* all done, return result */
					return $calendar;
				}
				echo "<h2 style='color:white; font-weight:bold'>".date("M_Y")."</h2>";
				echo draw_calendar(date("m"),date("y"));
			?>
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
				$num=mysqli_num_rows(mysqli_query($con, $rows));
				for ($j=0; $j <= 4; $j++){
					$i=$num-$j;
					$sql="SELECT * FROM post where PID='$i'";
						if(!mysqli_query($con, $sql)){
							die('error'. mysql_error());
						}
					$array=mysqli_fetch_row(mysqli_query($con, $sql));

					if ($array[5]=='post'){
						echo "<div class='body'><h2>" . $array[1] . " : " . $array[2] . "</h2></br><p>" . $array[4] . " : " . $array[3] . "</p></div>";			
					}elseif ($array[5]=="quiz"){
						echo "<div class='body'>" . "<h2>" . $array[1] . " : " . $array[2] . "</h2></br>" . "<p>" . $array[4] . " : " . " #" . $array[0] . " . " . $array[6] . "</p><div class='editor'><form method='post' action='marker.php'><input type='radio' name='ans' value='1'>". $array[7] . "</br><input type='radio' name='ans' value='2'>" . $array[8] . "</br><input type='radio' name='ans' value='3'>". $array[9] . "</br><input type='radio' name='ans' value='4'>". $array[10] . "</br>What is the #?<input type='number' name='PID' min='0'/><input type='submit' name='submit' value=' '/></br></form></div></div>";
					}
				}

			?>			
		</div>
		<div class="col-md-4">
		<div class="editor">	
			<h2>Say something!</h2>
			<form method="post" action="feed.php" id="message">
				Title<input type="text" name="title"/>
				<input type="radio" name="type" value="post" id="post">Post
				<input type="radio" name="type" value="quiz" id="quiz">Quiz</br>
				<textarea name="content" rows="3" cols="50">
				</textarea></br>
				<div class="quiz">
				<input value="option 1" type="text" name="a"/>

				<input value="option 2" type="text" name="b"/></br>

				<input value="option 3" type="text" name="c"/>

				<input value="option 4" type="text" name="d"/></br>
				Answere:<input type="number" name="result" min="1" max="4"/></div> 
				<input type="submit" name="submit" value=" "/>
				
			</form>	
			<h2>Event</h2>
			<p>Add an event to the calendar</p>
			<form method="post" action="event.php">
				<input type="date" name="date">
				<textarea name="event" rows="3" cols="50">
				</textarea></br>
				<input type="submit" name="submit" value=" ">
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