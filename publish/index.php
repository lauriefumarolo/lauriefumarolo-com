<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<!-- Prevents zoomed-out look on mobile devices -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192" href="/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
<link rel="manifest" href="/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#EFEDEE">
<meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#EFEDEE">

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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60675441-1', 'auto');
  ga('send', 'pageview');
</script>
</head>
<body>
<div id="wrapper">
	<header>
		<div class="strike">
			<span class="siteHeader"><a href="index.html">Laurie Fumarolo</a></span>
		</div>
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

				<a href="cityplanetarium.html"><img src="images/cityplanetarium_screenshot.png" alt="City Planetarium" /></a>
				<p>City Planetarium</p>
			</div>

            <!-- jBaquery -->
			<div class="project_tile">
				<!-- Hot pink corners that show when user hovers over tile -->
				<div class="top left"></div>
				<div class="top right"></div>
				<div class="bottom right"></div>
				<div class="bottom left"></div>

				<a href="jbaquery.html"><img src="images/jBaquery_screenshot.png" alt="jBaquery" /></a>
				<p>jBaquery</p>
			</div>
		</section>
	</div>
	<hr />
	<footer>
		<p>Copyright &copy;2015 Laurie Fumarolo. All Rights Reserved.</p>
		<p><a href="acknowledgements.html">Acknowledgements</a></p>
		<a class="social" href="http://linkedin.com/in/lauriefumarolo" target="_blank"></a>
	</footer>
</div>
</body>
</html>