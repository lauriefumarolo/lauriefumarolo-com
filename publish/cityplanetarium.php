<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<!-- Prevents zoomed-out look on mobile devices -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />

<!-- Favicon -->
<?php include 'favicon_links.php' ?>

<title>Laurie Fumarolo | City Planetarium</title>

<link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Codystar" rel="stylesheet" type="text/css">
<link href="css/styles.css" rel="stylesheet" type="text/css">

<!--[if lt IE 9]>
<script src="js/html5shiv.min.js"></script>
<![endif]-->

<!-- Google Analytics -->
<?php include 'analytics.php' ?>
</head>
<body>
<div id="wrapper">
	<header>
        <?php include 'header.php' ?>
	</header>
	<div id="content">
		<div class="project_img"><img src="images/cityplanetarium_screenshot.png" alt="City Planetarium" /></div>
		<div class="project_info">
			<h2>City Planetarium</h2>
			<p>I created this site demonstrate my knowledge of Twitter's Bootstrap framework and other modern web design trends. Here, I have included parallax scrolling and a large image banner on the homepage. The transparent menubar over this banner makes quite a statement. To maintain readability, however, I have written JavaScript to remove the effect as the user scrolls down the page.</p>
			<p>This responsive site, for a fictional planetarium, is built on HTML5, CSS, JavaScript, jQuery, and Bootstrap.</p>
			<p><a class="project_link" href="http://cityplanetarium.lauriefumarolo.com" target="_blank">View the Site</a></p>
			<p><a class="project_link" href="http://bitbucket.org/lcaires2/cityplanetarium" target="_blank">View the Code Repository on BitBucket</a></p>
		</div>
	</div>
	<hr />
	<footer>
        <?php include 'footer.php' ?>
	</footer>
</div>
</body>
</html>
