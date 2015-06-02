<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<!-- Prevents zoomed-out look on mobile devices -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />

<!-- Favicon -->
<?php include 'favicon_links.php' ?>

<title>Laurie Fumarolo</title>

<link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Codystar" rel="stylesheet" type="text/css">
<link href="css/styles.css" rel="stylesheet" type="text/css">

<!--[if lt IE 9]>
<script src="js/html5shiv.min.js"></script>
<![endif]-->
<script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="js/scripts.js" type="text/javascript"></script>

<!-- Google Analytics -->
<?php include 'analytics.php' ?>
</head>
<body>
<div id="wrapper">
	<header>
        <?php include 'header.php' ?>
	</header>
	<div id="content">
		<!-- About me -->
		<div id="about_me">
			<p>I've been in the programming world for 7 years. The UI work I was doing sparked my interest in the presentation of web applications. This drove me to further grow my skills in web front end technologies, and I'm now ready to make this the focus of my career.</p>
			<p>Check out my personal projects below!</p>
		</div>
		<!-- Image tiles representing projects -->
		<section id="projects">
			<div class="strike strike_section">
				<span class="sectionHeader">Projects</span>
			</div>

            <!-- City Planetarium -->
            <div class="project_tile">
				<!-- Hot pink corners that show when user hovers over tile -->
				<div class="top left"></div>
				<div class="top right"></div>
				<div class="bottom right"></div>
				<div class="bottom left"></div>

				<a href="cityplanetarium.php"><img src="images/cityplanetarium_screenshot.png" alt="City Planetarium" /></a>
				<p>City Planetarium</p>
			</div>

            <!-- jBaquery -->
			<div class="project_tile">
				<!-- Hot pink corners that show when user hovers over tile -->
				<div class="top left"></div>
				<div class="top right"></div>
				<div class="bottom right"></div>
				<div class="bottom left"></div>

				<a href="jbaquery.php"><img src="images/jBaquery_screenshot.png" alt="jBaquery" /></a>
				<p>jBaquery</p>
			</div>
		</section>
	</div>
	<hr />
	<footer>
        <?php include 'footer.php' ?>
	</footer>
</div>
</body>
</html>
