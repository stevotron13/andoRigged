<!DOCTYPE html>
<html lan="en">
	<head>
		<meta charset="utf-8">
		<title> CSS Test Home</title>
		<link rel=stylesheet href="main.css" type="text/css">
		
	</head>
	
	<body class="bodyform">
		
		<?php
			//echo "Hello World";
			$txt="PHP Test"." "."Holy a test!";
			$x=12;
			
			//echo $txt;
			//echo strlen($txt);	//prints length of string param
			//echo strpos($txt, "Holy"); //prints character location of second param
			
			//selection statement
			if($x == 12)
				echo "Correct!";
			elseif($x == 9)
				echo "Whaaaa...";
			else
				echo "Incorrect!";
				
			//switch statement
			switch($x)
			{
			case 1:
				echo "Number 1";
				break;
			case 2:
				echo "Number 2";
				break;
			default:
				echo "No number between 1 and 2.";
			}
			
			//Numeric array
			$people1 = array("Steve","Jesse","Carl","Ben"); //auto
			$people2[0] = "Steve"; //manually
			$people2[1] = "Jesse";
			$people2[2] = "Carl";
			$people2[3] = "Ben";
			
			echo $people2[0] . " and " . $people2[1] . " are cool.";
			
			//Associative array
			$people3 = array("Steve"=>19,"Jesse"=>20); //auto
			$people4['Steve'] = 19; //manually
			$people4['Jesse'] = 20;
			
			echo $people1[0] . " is " . $people4['Steve'] . " years old.";
			
			//For loop
			for($n = 1; $n <= 10; $n++)
			{
				echo $n;
			}
			
			//Functions
			function multiply($a,$b)
			{
				$prod = $a * $b;
				return $prod;
			}
			
			echo multiply(23,2);
			
			//Form Handling *IMPORTANT*
			//see the <form> tag below and teh file action.php for example
			
		?>
		
		<header>
			<img src="Home Title.png" alt="CSS Test Home" title="CSS Test Home" class="titleform"></img>
			<p class="c">This is a header form test</p>
		</header>
		
		<article>
			<p style="text-transform:uppercase; ">This is a test formatting for the main article of the page.</p>
		</article>		
		
		
		<nav class="navform">
			<ul>
				<li><a href="home.php"; style="color: red;">Home
				<ul>
					<li><a href="csstest.php">CSS Page 1</a></li>
					<li><a href="csstest2.php">CSS Page 2</a></li>
				</ul>
				</li>
			</ul>
		</nav>
		
		<img src="steve.jpg" alt="Steve" title="Steven Osborne" class="steveform"></img>
		
		<audio src="Science is Fun.mp3"; controls="controls"; style="position:absolute; left:35%; top:78%;">
		  <source src="Science is Fun.mp3" type="audio/mp3" />
		</audio>
		
		<form action="action.php" method="post">
			 <fieldset class="form">
			 <legend class="legendform">Login Information</legend>
			 First Name: <input type="text" name="fname" autocomplete="on" autofocus="autofocus"><br />
			 Last Name: <input type="text" name="lname" autocomplete="on"/><br />
			 Email: <input type="text" name="email" autocomplete="on"/><br />
			 <input type="submit" value="Submit" formtarget="_self" class="submitform" /><br />
			 
			 <select>
			 <option value="Server 1">Server 1</option>
			 <option value="Server 2">Server 2</option>
			 <option value="Server 3">Server 3</option>
			 </select>
			 </fieldset>
		</form>
		
		<footer>
		</footer>
		
	</body>
	
</html>