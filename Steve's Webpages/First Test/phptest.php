<!DOCTYPE html>
<html lan="en">
	<head>
		<meta charset="utf-8">
		<title>Steve's Webpage</title>
		
		<style>
			.outer{
				width: 600px;
				color: black;
				background-color: orange;
				border: 2px solid darkblue;
				padding: 5px;
				display: table;
				font-family: sans-serif;
			}
				
			.c{
				text-align: center;
			}
			
			.nav{
				width: 200px;
				depth: 400px;
				color: red;
				float: left;
				background-color: yellow;
				border: 2px solid black;
				padding: 5px;
				text-align: left;
				display: table;
			}
			
			.article{
				border: 2px solid black;
				color: black;
				float: right;
				background-color: yellow;
				width: 360px;
				display: table;
			}
		</style>
	</head>

	<?php
			echo "Hello World";
	?>
	
	<div class="outer">
		<h1 class="c">Steve's Webpage</h1>
		<p class="c">This is a test for Steven Osborne's programming in HTML5</p>
		
		<div class ="nav">
		<ul>
			<li><a href="Steve's Webpage The Sequel.html">Part 2 of Steve's Webpage</a></li>
			<li><a href="Steve's Webpage Revenge of the Webpage.html">Part 3 of Steve's Webpage</a></li>
		</ul>
		</div>	
		
		<div class="article">
			<h2 class="c">The Content</h2>
			<p>Here is the first page of Steve's Webpage.</p>
			<p>Not terribly exciting at the moment...</p>
			<p>Click on Part 2 to see why Steve is so awesome!</p>
		</div>
	</div>
</html>