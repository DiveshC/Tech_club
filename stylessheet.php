<?php
	session_start();
	include('connect.php');
	header("Content-type: text/css");
	$query="SELECT * FROM admin WHERE username='$_SESSION[user]'";
	$record=mysqli_fetch_row(mysqli_query($con, $query));
	$sql="SELECT * FROM themes WHERE TID='$record[5]'";
	$color=mysqli_fetch_row(mysqli_query($con, $sql));
	$sql2="SELECT * FROM swatches WHERE CID='$record[6]'";
	$swatch=mysqli_fetch_row(mysqli_query($con, $sql2));
	$sql3="SELECT * FROM post WHERE PID='$_POST[PID]'";
	$array=mysqli_fetch_row(mysqli_query($con, $sql3));
?>
@charset "utf-8";
body{
	background-color:<?=$color[1]?>;
}
p{
	font-family:verdana;
}
h1{
	font-family:verdana;
	color:<?=$swatch[1]?>;
	font-weight:bold;
}
h2{
	font-family:verdana;
	color:<?=$swatch[2]?>;
}
.header{
	background-color: <?=$swatch[1]?>;
}
.logo img{
	height:100px;
	width:100px;
}
.header li{
	display:inline-block;
	margin-left:10px;
}
.header h1{
	font-family: verdana;
	position:relative;
	top:10px;
	color:<?=$color[1]?>;
}
.header a{
	color:<?=$color[6]?>;
	background-color: <?=$swatch[1]?>;
	padding:10px;
	margin-left:auto;
	margin-right:auto;
	border:none;
}
.header input{
	background-color:<?=$swatch[1]?>;
	color:<?=$swatch[2]?>;
	border:1px solid <?=$color[1]?>;
	border-radius:10px;
	padding:5px;
	margin-left:5px;
	transition: background-color 1s;
}
.header input:hover{
	background-color:<?=$color[1]?>;
}
.footer{
	background-color:<?=$color[4]?>;
	color:<?=$color[5]?>;
	text-align:center;
	padding:10px;
}
.footer li{
	display: inline;
	padding:5px;
	margin: 10px;
}
.footer a{
	color:<?=$color[4]?>;
}

/*jumbotron*/

.jumbotron{
	background-image: url("imgs/technology.jpg");
	background-size:cover;	
	color:<?=$color[6]?>
	position:relative;
}
.jumbotron span{
	font-weight:bold;
}
.greeting{
	background-color: <?=$swatch[1]?>;
	color:<?=$color[6]?>;
	margin:10px;
	padding:10px;
	opacity: 0.9;
	border-radius:10px;
	width:300px;
}
.leader{
	color:<?=$color[6]?>;
	background-color: <?=$color[2]?>;
	margin:10px;
	padding:10px;
	opacity: 0.8;
	border-radius:10px;
	width:300px;
}

/*table*/

table.calendar		{ 
	opacity:0.8;
	margin:5px;
	border-collapse: separate;
	border-spacing:2px 2px;
}
.calendar-row	{
	background: <?=$color[3]?>;
	padding:10px;
}
td.calendar-day	{
	background: <?=$color[2]?>; 
	height:60px; 
	font-size:11px; 
	margin:1px;
} 

.calendar-day:hover	{ 
	background:<?=$swatch[2]?>;
}
.calendar-day-np	{ 
	background:<?=$color[1]?>; 

	min-height:80px; 
} 
* html div.calendar-day-np { 
	height:80px; 
}
.calendar-day-head { 
	background:<?=$swatch[1]?>; 
	font-weight:bold; 
	text-align:center; 
	width:120px; 
	padding:1px; 
	border-radius:5px;
	
}
.day-number{ 
	background:<?=$color[2]?>; 
	padding:2px; 
	color:<?$color[6]?>;
	font-weight:bold; 
	float:right; 
	margin:-5px -5px 0 0; 
	width:20px;
	height:20px;
	text-align:center;
	border-radius:100%; 
}
/* shared */
.calendar-day, td.calendar-day-np { 
	width:120px; 
	padding:5px; 
	border-radius:5px;
	transition:background-color 1s;
}
.event{
	background-color:<?=$swatch[1]?>;
	color:<?=$color[1]?>;
	padding:1px;
	font-size:11px;
}


/*editor*/

.editor{
	padding:5px;
	margin:20px;
	color:<?=$color[6]?>;
}
.editor h1{
	font-family:verdana;
	color:<?=$swatch[1]?>;
	font-weight:bold;
}
.editor h2{
	font-family:verdana;
	color:<?=$swatch[2]?>;
}
.editor input{
	border:1px solid <?=$swatch[1]?>;
	border-radius:10px;
	background-color: <?=$color[3]?>;
	color:<?=$swatch[2]?>;
	transition:background-color 1s, color 1s;
	margin:5px;
	padding:5px;
}
.editor input:hover{
	background-color:<?=$swatch[1]?>;
	color:<?=$color[1]?>;
}
.editor input[type=submit]{
	border:none;
	background-image:url("glyphicons/png/glyphicons-207-ok.png");
	background-repeat:no-repeat;
	background-color: <?=$color[3]?>;
	width:25px;
	height:25px;
}
.editor textarea{
	border:none;
	border-radius:10px;
	margin:5px;
	padding:5px;
	background-color: <?=$color[4]?>;
	color:<?=$color[6]?>;
}
.editor form{
	color:<?=$color[5]?>;
}

.editor table, th, td{
 	padding:10px;

}
.editor th, td{
	padding:10px;
}
.editor table, thead , th{
	background-color:<?=$swatch[2]?>;
	color:<?=$color[6]?>;	
}
.editor table, thead, td{
	background-color: <?=$color[1]?>;
	color:<?=$color[6]?>;
}
.palette input[type=radio]{
	background-color:<?=$swatch[1]?>;
	border:none;
	border-radius:0px;
	height:20px;
	width:20px;
}
#id{
	padding:20px;
	margin:20px;
}
.button{
	border-radius:100%;
	background-color:<?=$swatch[1]?>;
	padding:5px;
	margin:5px;
	width:20px;
	height:20px;
}
.news{
	background-color: <?=$color[3]?>;
	padding:10px;
}
.news h1{
	text-align: center;
	font-weight:bold;
	color:<?=$swatch[1]?>;
}
.news h2{
	color:<?=$swatch[2]?>;
}
.A{
	position:relative;
	height: <?=$array[12]?>em;
	width: 20px;
	background-color:<?=$swatch[1]?>;
}
.B{
	position:relative;
	height:<?=$array[13]?>em;
	width: 20px;
	background-color:<?=$swatch[1]?>;	
}
.C{
	position:relative;
	height:<?=$array[14]?>em;
	width: 20px;
	background-color:<?=$swatch[1]?>;
}
.D{
	position:relative;
	height:<?=$array[15]?>em;
	width: 20px;
	background-color:<?=$swatch[1]?>;
}
.body{
	text-align:left;
	background-color: <?=$color[2]?>;
	color:<?=$color[5]?>;
	padding:20px;
	margin-top:10px;
	margin-bottom:10px;
	margin-left:100px;
	margin-right:100px;
	border-radius:10px;
	transition:box-shadow 0.5s;
}
.body input[type=submit]{
	background-image:url("glyphicons/png/glyphicons-207-ok.png");
	background-repeat:no-repeat;
	background-color:<?=$color[2]?>;
	width:25px;
	height:25px;
	border:none;
	border-radius:0px;
}
.body h2{
	font-weight:bold;
	color:<?=$color[5]?>;
}
.body h3{
	color:<?=$swatch[1]?>;
	font-weight:bold;
}
.body:hover{
	box-shadow: 0 4px 10px -4px black;
}
.body li{
	display:inline-block;
	padding:5px;	
}

/* Tutorial */

.tutorial ul{
	text-align:center;
}
.tutorial{
	background-color:<?=$color[3]?>;
}
.tutorial li{
	font-family: verdana;
	font-weigth:bold;
	display:inline-block;
}
.tutorial button{
	color:<?=$swatch[2]?>;
	background-color:<?=$color[3]?>;
	width:400px;
	height:100px;
	border:1px solid <?=$swatch[1]?>;
	border-radius:10px;
	padding:10px;
	margin:10px;
	transition: background-color 1s, color 0.5s, border 0.5s;
}
.tutorial button:hover{
	background-color:<?=$swatch[1]?>;
	color:<?=$color[1]?>;
}
.close{
	position:relative;
	color:<?=$color[1]?>;
}

.banner {
	background-image: url("imgs/keyboard.jpg");
	background-size:cover;
	padding:50px;
}
.card{
	opacity:0.8;
	border-radius:10px;
	background-color:<?=$swatch[1]?>;
	color:<?=$color[1]?>;
	margin-left:auto;
	margin-right:auto;
	height: 300px;
	Width:300px;
	padding:20px;
}
.card h2{
	font-weight:bold;
	font-size:50px;
}

.tutorial code{
	background-color: <?=$color[4]?>;
	color:<?=$color[1]?>
	padding:5px;
}
.tutorial img{
	border-radius:10px;
}

