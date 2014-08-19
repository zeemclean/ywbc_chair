<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Matipo: Give Yourself an Elegant Minute</title>
	
	<!-- jQuery -->
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<!-- Main JavaScript -->
	<script type="text/javascript" src="js/main.js"></script>
	
	<!-- Bootstrap CSS -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"> 
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
	<div class="container">
		<div class="row view">
			<div class="col-md-4 navbox">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<img id="navLogo" class="img-responsive" src="assets/logo.png" alt="Matipo Logo">
					</div>
				</div>
				<div class="row navlinks sideNav">
					<nav class="sideNav">
						<div class="contentLink" href="#home">Home</div>
						<div class="contentLink" href="#products">Products</div>
						<div class="contentLink" href="#location">Location</div>
						<div class="contentLink" href="#about">About</div>
					</nav> 
				</div>			
			</div>
			<div class="col-md-7 col-md-offset-1 contentbox">
				<?php
					include("includes/home.php");
					include("includes/products.php");
				?>
			</div>
		</div>
	</div>
</body>
</html>