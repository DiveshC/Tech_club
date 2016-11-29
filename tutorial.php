<?php
	session_start();
	include('locker.php');
	include('connect.php');
?>
<!doctype html>
<html>
<head>
	<title>tutorial</title>

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
<div class="row">
	<div class="col-md-12">
		<div class="banner">
			<div class="card">
				<h2>C++</h2>
				<p>Lesson plan and guide to coding in c++</p>
				<ul>
					<li>Experience: none required</li>
					<li>Software: MS Visual Studio</li>
					<li>Attendance: recommended, come to meetings to deepen your understanding and ask questions</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="tutorial">
<div class="row">
	<ul>
		<div class="sec">
		<div class="col-md-12">
			<li><br/><button class="b1">Introduction</button></li>
			<div class="body">
				
				<h3>Basics:</h3>
				<p> Background info: Before it was initially standardized in 1988 it was developed by Bjarne Stroustrup in Bell Labs in 1979
					It was an extension of C, the same way Java is an extension of C++</p>
				<img src="imgs/c.png" style="height:100px"/>
			</div>
			<div class="body">
				<h3>IDE's</h3>
					<p>An IDE is an Integrated Development Environment. A common one used for C++ is Visual Studio. Visual Studio 2015 Community is a very 
					useful IDE that is completely free</p> <a href="https://www.visualstudio.com/vs/">VS link</a>
					<img src="imgs/visual_studio.png" style="height:100px"/>
				
			</div>
			<div class="body">
				<h3>Starters</h3>
				<p>The first part of a c++ file is the #include <iostream> statement
					And using namespace std;
					This is very crucial since it allows you to take advantage of c++ many identifiers that we will explore later, these identifiers help with handling basic operations
					Iostream stands for input output stream</p>
									<h3>Variables</h3>
									<p>Structure is a key part of any language:
					int x is the form of a variable, there are many different types such as char for strings, long and short for varying sizes and even float for variables like pi, we will explore this in depth later
					Int x is a declaration because you are stating the variable
					Int x=3 is an assignment </p>
									<h3>basic io</h3>
									<p>If you want to output a value then this statement is used: std::cout << “hey”;
					Cout simply stands for console-out
					I have no explanation for std, trust.</p>
									<h3>Main</h3>
									<p>The final part before we can create our first .cpp program there is main part left
					When a program is compiled the first line that is run by the compiler runs the first statement inside
					Every c++ program must contain a special main function, the syntax is as follows: (we cover functions in depth later)
					</p>
					<code>
					Int main (){</br>
						return 0;  → in all functions</br>
					}</br>
					</code>
			</div>
			<div class="body">
				<h3>Lets build it!</h3>
					<p>Launch VS or whatever else you like
					Create a Win32 project
					Then type in the following:
					</p><code>#include <iostream></br>
						Using namespace std;</br>
						Int main (){</br>
							std::cout<<”Say my name”;</br>
							return 0;</br>
						}</code>
			</div>
			<div class="body">
				<h3>Error!</h3>
				<p>You probably noticed that the console window closed before you could see anything
The problem is the breakpoint in the program is as soon as the string is printed
To stop this you could use system (pause) but that only works for windows, in general its better to use cin.get() → which basically waits for you to click something to proceed
Alternatively you could change the console habits and physically alter the options for the breakpoint 
				</p>
			</div>
			<div class="body">
				<h3> Lets see how much you really know!</h3>
				<p>Answer the following, if you get it right you recieve 2 points, if not u loose 1</p></br>
				<p>1. Which statements are true, i) int x is an assignment ii) int x=3 is a declaration iii) floats are for whole numbers
				<form method="post" action="test.php">
					<input type="radio" name="answer" value="0">i only</br>
					<input type="radio" name="answer" value="0">i and ii</br>
					<input type="radio" name="answer" value="0">i and iii</br>
					<input type="radio" name="answer" value="1">none</br>
					<input type="submit" name="submit" value=""/>
				</form>
				<p>2. Find the error in the following code snipet:</br>
					<code>#include <iostream></br>
						Using namespace std;</br>
						Int main (){</br>
							cout<<”Hello workd!”</br>
							return 0;</br>
						}</code>
				<form method="post" action="test.php">
					<input type="radio" name="answer" value="0">They did not include the semi colon after hello world</br>
					<input type="radio" name="answer" value="1">they forgot a semicolon and std:: on line 4</br>
					<input type="radio" name="answer" value="0">line 2 is unnecessary</br>
					<input type="radio" name="answer" value="0">Line 1 requires a semi colon</br>
					<input type="submit" name="submit" value=""/>
				</form>
			</div>
			<div class="body">
				<h3>Comments</h3>
				<p>In c++ you add a comment by using a </p> <code>//now you can have a comment here
				/*this is a multiline comment….
				Not really
				But still trust me*/
			</code></br>

			<li><p class="close">close</p></li>	
			</div>

			</div>

		</div>
				
		<div class="sec1">
			<div class="col-md-12">
				<li><br/><button class="b2">Fundamentals</button></li>
				<div class="body">
				<h3>Functions</h3>
				<p>
					These are extremely crucial if you want your program to function correctly(pun intended);</br>
					The syntax resembles that of what you find in java;</br>
					Int RSC(parameters){ . . . return 0; }</br>
					If your function does not return anything, replace int with void and you will no longer have to use the return statement;</br>
					Void softdev(parameters){ …. }</br>
				</p>
				<h3>Return</h3>
				<p>Return is referred to as a status code because it lets the operating system know whether or not the program has executed properly; trust;</p>
				<h3>Parameters</h3>
				<p>Parameters for the functions are put within the parenthesis;</br>
					Int add(int x, inty){ … }</br>
					You can then pass a value in for x and y when the function is called;</br>
					add(3, 2); → should return the result 5;</br>
				</p>
				<h3>Local Scope</h3>
				<p>This is important for how the operating system will execute your program;</br>
					Local scope is essentially how much access the program may have to the variables of a function;</br>
					This helps prevent any naming collisions, for example if you have one int x then you have another initialized int x in main, the first one goes out of scope beyond its own function;</br>
				</p>
				<h3>Operators</h3>
				<p>Operands provide data and operators complete the actions, there are unary, binary, ternary operands which basically refers to the number of operands;</br>
					+ (addition), - (subtraction), * (multiplication), / (division), = (assignment), == (equality);</br>
				</p>
				<h3>Whitspacing</h3>
				<p>This generally refers to formatting of characters, thing is C++ doesn’t really care for whitespacing;</br>
					Though there are a few places where it does;</br>
					Spaces in a quote matter, i.e., << “hello world”; vs << “hello       world”;</br>
					New lines are not allowed in a quote;</br>
					Tabs should be set to 4 space, 3 is good too, IDE’s have a default setting for this;</br>
				</div>
				<div class="body">
					<h3>Building a calculator Program!</h3>
					<video height="500" width="1100" controls>
					  <source src="imgs/c++.mp4" type="video/mp4">
					</video></br>
				<li><p class="close">close</p></li>
			</div>
			
			</div>
		</div>
		
		<div class="sec2">
			<div class="col-md-12">
			<li><br/><button class="b3">File Management</button></li>
			<div class="body">
				<h3>Multiple Files</h3>
				<p>Before we delve into the specifics of multiple files and header files its important to understand function prototypes and forward declerations.</p>
				<code>
					#include<iostream>
				</code></br>
				<code>
					using namespace std;
				</code></br>
				<code>
					int main(){
						cout << add(2, 3);
				</code></br>
				<code>
						return 0;
					}
				</code></br>
				<code>
					int add(int x, int y){
						return x+y;	
					}
				</code></br>
				<p> What do you think the compiler will do in this instance?</p>
				<form method="post" action="test.php">
					<input type="radio" name="answer" value="0">It will look for add() and then complete the action in main</br>
					<input type="radio" name="answer" value="1">It will output an error, saying add() is not initiated</br>
					<input type="submit" name="submit" value=""/>
				</form>

				<p>The compiler will not know what to do, since the function has not been initialized, for this you can use a forward decleration.Though the compiler will still not know what to do with the inputed values.</p>
				<code>
					#include<iostream>
				</code></br>
				<code>
					using namespace std;
				</code></br>
				<code>
					int add(int x, int y); // this is a forward decleration
				</code></br>
				<code>
					int main(){
						cout << add(2, 3);
						return 0;
					}
				</code></br>
				<code>
					int add(int x, int y){
						return x+y;	
					}
				</code></br>
			</div>
			<div class="body">
				<h3>Multiple files</h3>
				<p>Sometimes your application may become clustered with functions, all you want is the main function to keep things simple. Well you can solve this problem easily with multiple files. All you do is add a cpp file to your folder, then add you function in there. Later you can have a forward decleration in the main file to intialize the function into memory. Now the compiler will know where to look.

			</div>
			
			</div>
		</div>
		
		<div class="sec3">
			<div class="col-md-12">
			<li><br/><button class="b4">Lesson 4</button></li>
			<div class="body">
				<li><p class="close">close</p></li>
			</div>
			
			</div>
		</div>
		
		<div class="sec4">
			<div class="col-md-12">
			<li><br/><button class="b5">Lesson 5</button></li>
			<div class="body">
				<li><p class="close">close</p></li>	
			</div>
			
			</div>
		</div>
	
		<div class="sec5">
			<div class="col-md-12">
			<li><br/><button>Lesson 6</button></li>
				<div class="body">
					<li><p class="close">close</p></li>
				</div>
			</div>
		</div>
		
		<div class="sec6">
			<div class="col-md-12">
			<li><br/><button>Lesson 7</button></li>
			<div class="body">
			<li><p class="close">close</p></li>
			</div>
		</div>
		</div>
		
		<div class="sec7">
			<div class="col-md-12">
			<li><br/><button>Lesson 8</button></li>
			<div class="body">
			<li><p class="close">close</p></li>
			</div>
		</div>
		</div>
		
		<div class="sec8">
			<div class="col-md-12">
			<li><br/><button>Lesson 9</button></li>
			<div class="body">
			<li><p class="close">close</p></li>
			</div>
		</div>
		</div>
	</ul>
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