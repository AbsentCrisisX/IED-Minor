<?php
include('./php/pages.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bare - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
	
	<!-- Off canvas CSS -->
	<link rel="stylesheet" type="text/css" href="css/offCanvas/menu_elastic.css" />

	<!-- Snap JS file -->
	<script src="js/snap.svg-min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<div class="statusBar">
		<div class="signal"></div>
		<div class="time"></div>
		<div class="power"></div>
	</div>
    <!-- Navigation -->
        <div class="wrap-container">
        	<div class="menu-wrap">
				<nav class="menu">
					<div class="icon-list">
						<a href="#"><i class="fa fa-fw fa-star-o"></i><span>Favorites</span></a>
						<a href="#"><i class="fa fa-fw fa-bell-o"></i><span>Alerts</span></a>
						<a href="#"><i class="fa fa-fw fa-envelope-o"></i><span>Messages</span></a>
						<a href="#"><i class="fa fa-fw fa-comment-o"></i><span>Comments</span></a>
						<a href="#"><i class="fa fa-fw fa-bar-chart-o"></i><span>Analytics</span></a>
						<a href="#"><i class="fa fa-fw fa-newspaper-o"></i><span>Reading List</span></a>
					</div>
				</nav>
				<button class="close-button" id="close-button">Close Menu</button>
				<div class="morph-shape" id="morph-shape" data-morph-open="M-1,0h101c0,0,0-1,0,395c0,404,0,405,0,405H-1V0z">
					<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 800" preserveAspectRatio="none">
						<path d="M-1,0h101c0,0-97.833,153.603-97.833,396.167C2.167,627.579,100,800,100,800H-1V0z"/>
					</svg>
				</div>
			</div>
			<button class="menu-button" id="open-button">Open Menu</button>   

    <!-- Page Content -->
		<div class="content-wrap">
			<div class="content-container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h1>A Bootstrap Starter Template</h1>
						<p class="lead">Complete with pre-defined file paths that you won't have to change!</p>
						<ul class="list-unstyled">
							<li>Bootstrap v3.3.1</li>
							<li>jQuery v1.11.1</li>
						</ul>
					</div>
				</div>
				<!-- /.row -->
			</div>
		<!-- /.container -->
		</div>
	</div>
    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	<!-- Off canvas JS -->
    <script src="js/offCanvas/classie.js"></script>
	<script src="js/offCanvas/main.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>

</body>

</html>
