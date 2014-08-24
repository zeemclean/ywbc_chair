<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Matipo: Give Yourself an Elegant Minute</title>
	
	<!-- jQuery -->
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<!-- Bootstrap Js -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<!-- Sticky Kit -->
	<script type="text/javascript" src="js/jquery.sticky-kit.js"></script>
	<!-- Main JavaScript -->
	<script type="text/javascript" src="js/main.js"></script>
	
	<!-- Bootstrap CSS -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"> 
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
	<div class="container-fluid hidden-xs hidden-sm">
		
		<div class="desktop row view">
			<div class="col-md-3 navbox clearfix">
				<div class="fixedelement">
				<?php 
					include('includes/mainnav.php');
					include('includes/productnav.php')
				?>
				</div>	 	
			</div>
			<div class="col-md-8 col-md-offset-1 hidden-sm hidden-xs contentbox clearfix">
				<?php
					include("includes/home.php");
					include("includes/products.php");
					include("includes/location.php");
					include("includes/about.php");
				?>
			</div>
		</div>
	</div>
	<div class="container hidden-md hidden-lg view">
		<div class="mob row">
			<header>
				<div class="row">
					<div class="col-xs-4 col-xs-offset-4">
						<img id="navLogo" class="img-responsive" src="assets/logo_xs.png" alt="Matipo Logo" title="Matipo Logo">
					</div>
			</header>
			
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1 navtab">
					<div class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" type="button" id="productDropdown">
						<h1 class="mob">Products <span class="caret"></span></h1>
					</a>
					<ul class="dropdown-menu dropdown-menu-right" role="menu" area-labelledby="productDropDown">
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#mob-mademoiselle" class="contentLink">Mademoiselle</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#mob-zigzag" class="contentLink">Zigzag</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#mob-ghost" class="contentLink">Louis Ghost</a></li>
					</ul>

					</div>
				</div>
			</div>

			<div class="mob-content-section" id="mob-products">
			<?php  
				include("includes/mob-products.php");
			?>
			</div>
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1 navtab">
					
					<a  class="contentLink" href="#mob-location">
						<h1 class="mob">Location</h1>
					</a>
			
				</div>
			</div>
			<div id="mob-location">
				<?php
					include("includes/location.php");
				?>
			</div>
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1 navtab">
					
					<a class="contentLink" href="#twitter">
						<h1 class="mob">Twitter</h1>
					</a>
			
				</div>
			</div>
			<div id="twitter">
				<?php
					include("includes/twitter.php");
				?>
			</div>
		</div>
		<div class="row">
				<div class="col-xs-10 col-xs-offset-1 navtab">
					
					<a class="contentLink" href="#mob-about">
						<h1 class="mob">About</h1>
					</a>
			
				</div>
			</div>
			<div id="mob-about">
				<?php
					include("includes/twitter.php");
				?>
			</div>
		</div>

	</div>
</body>
</html>