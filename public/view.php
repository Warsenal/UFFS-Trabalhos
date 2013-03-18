<?php
	
	function pHeader(){
		echo('
			<!DOCTYPE HTML>
			<html>
				<head>
					<link rel="stylesheet" type="text/css" href="css/style.css">
					<meta name="description" content="Medieval Browser Game">
					<meta name="keywords" content="Browser Game, Medieval Browser Game, Medieval, Game, Online Game, Adventure Time, Medieval Adventure">
					<meta name="author" content="Warsenal Games">
					<meta charset="UTF-8">
					<title>Medieval Adventure</title>
				</head>
				
				<body>
		');
	}
	
	function pHeaderScript(){
		echo('
			<!DOCTYPE HTML>
			<html>
				<head>
					<link rel="stylesheet" type="text/css" href="css/style.css">
					<meta name="description" content="Medieval Browser Game">
					<meta name="keywords" content="Browser Game, Medieval Browser Game, Medieval, Game, Online Game">
					<meta name="author" content="Warsenal Games">
					<meta charset="UTF-8">
					<script type="text/javascript" src="jquery-1.9.1.min.js"> </script>
					<title>Medieval Adventure</title>
				</head>
				
				<body>
		');
	}
	
	function pJavascript(){
		echo'
			<script type="text/javascript" src="Javascript.js"> </script>
		';
	}
	
	function pFooter(){
		echo('
				</body>
			</html>
		');
	}
	
?>