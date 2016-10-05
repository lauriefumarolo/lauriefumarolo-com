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
	<link href="css/rainbow_banner.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="jumbotron main_jumbotron rainbow_banner">
		<div class="container">
			<hr />
			<h1>Laurie Fumarolo</h1>
			<p>Web Developer</p>
			<hr />
		</div>
		<div class="circle"><i class="fa fa-angle-down fa-2x arrow-down"></i></div>
	</div>
	<div id="content" class="container">
		<div class="row">
			<div class="col-sm-5 col-md-4 vcenter img_row">
				<img src="images/rca_screenshot.png" alt="RCA Modular" />
			</div>
			<div class="col-sm-7 col-md-8 vcenter text_row">
				<h2>Robotic Construction Automation, LLC</h2>
				<p>I implemented this site for RCA, LLC, a company that will be offering a new concept for constructing multi-story, multi-dwelling facilities. I was hired as a web developer to build this new site based on the client's design.</p>
				<p>On the homepage, I utilized the Bootstrap grid to fulfill the client's requirement for a left-right, snaking flow chart on larger screens, but adapt to a purely vertical layout on mobile devices.</p>
				<p>This responsive site is built on HTML, CSS, JavaScript, jQuery, and Bootstrap.</p>
				<p><a href="http://www.rca-modular.com" target="_blank">View the Site</a></p>
			</div>
		</div>
		<div class="row grey_row">
			<div class="col-sm-5 col-sm-push-7 col-md-4 col-md-push-8 vcenter img_row">
				<img src="images/cityplanetarium_screenshot.png" alt="City Planetarium" />
			</div>
			<div class="col-sm-7 col-sm-pull-5 col-md-8 col-md-pull-4 vcenter text_row">
				<h2>City Planetarium</h2>
				<p>I created this site to demonstrate my knowledge of Twitter's Bootstrap framework and other modern web design trends. Here, I have included parallax scrolling and a large image banner on the homepage. The transparent menubar over this banner makes quite a statement. To maintain readability, however, I have written JavaScript to remove the effect as the user scrolls down the page.</p>
				<p>This responsive site, for a fictional planetarium, is built on HTML, CSS, JavaScript, jQuery, and Bootstrap.</p>
				<p><a href="http://cityplanetarium.lauriefumarolo.com" target="_blank">View the Site</a></p>
				<p><a href="http://bitbucket.org/lcaires2/cityplanetarium" target="_blank">View the Code Repository on BitBucket</a></p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-5 col-md-4 vcenter img_row">
				<img src="images/jBaquery_screenshot.png" alt="jBaquery" />
			</div>
			<div class="col-sm-7 col-md-8 vcenter text_row">
				<h2>jBaquery</h2>
				<p>I built this site to fulfill the final requirement of an interactive web development certificate program at my community college. I utilized jQuery plugins for the home page carousel and image galleries, as well as to validate the contact form.</p>
				<p>This responsive site, for a fictional bakery, is built on HTML, CSS, JavaScript, and jQuery.</p>
				<p><a href="http://jbaquery.lauriefumarolo.com" target="_blank">View the Site</a></p>
				<p><a href="http://bitbucket.org/lcaires2/jbaquery" target="_blank">View the Code Repository on BitBucket</a></p>
			</div>
		</div>
	</div>
	<?php include 'footer.php' ?>
</body>
</html>
