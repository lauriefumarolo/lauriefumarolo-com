<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<!-- Prevents zoomed-out look on mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />

	<!-- Favicon -->
	<?php include 'favicon_links.php' ?>

	<title>Laurie Fumarolo</title>

	<?php include 'head_includes.php' ?>
	<link href='https://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
	<link href="css/rainbow_banner.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="jumbotron rainbow_banner">
		<div class="container">
			<hr />
			<h1>Laurie Fumarolo</h1>
			<p>Web Developer</p>
			<hr />
		</div>
		<div class="circle"><i class="fa fa-angle-down fa-2x arrow-down"></i></div>
	</div>
	<div id="content">
		<div class="flex-container">
			<div class="flex-item">
				<img src="images/cityplanetarium_screenshot.png" alt="City Planetarium" />
			</div>
			<div class="flex-item">
				<h2>City Planetarium</h2>
				<p>I created this site to demonstrate my knowledge of Twitter's Bootstrap framework and other modern web design trends. Here, I have included parallax scrolling and a large image banner on the homepage. The transparent menubar over this banner makes quite a statement. To maintain readability, however, I have written JavaScript to remove the effect as the user scrolls down the page.</p>
				<p>This responsive site, for a fictional planetarium, is built on HTML5, CSS, JavaScript, jQuery, and Bootstrap.</p>
				<p><a href="http://cityplanetarium.lauriefumarolo.com" target="_blank">View the Site</a></p>
				<p><a href="http://bitbucket.org/lcaires2/cityplanetarium" target="_blank">View the Code Repository on BitBucket</a></p>
			</div>
		</div>
		<div class="flex-container">
			<div class="flex-item">
				<h2>jBaquery</h2>
				<p>I recently took courses in interactive web development at my local community college. In order to complete the certificate program I was enrolled in, I had to build a website using the skills that I learned.</p>
				<p>This responsive site, for a fictional bakery, is built on HTML5, CSS, JavaScript, and jQuery.</p>
				<p><a href="http://jbaquery.lauriefumarolo.com" target="_blank">View the Site</a></p>
				<p><a href="http://bitbucket.org/lcaires2/jbaquery" target="_blank">View the Code Repository on BitBucket</a></p>
			</div>
			<div class="flex-item">
				<img src="images/jBaquery_screenshot.png" alt="jBaquery" />
			</div>
		</div>
	</div>
	<footer>
		<?php include 'footer.php' ?>
	</footer>
</body>
</html>
