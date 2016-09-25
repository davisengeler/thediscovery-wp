<?php 
    include("thediscovery-config.php"); 
    include("roman-numeral.php");
?>

<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_title(); endwhile; endif; ?> – The Discovery on XLR</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=.5" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	</head>
	<body style="background-image: url('<?php bloginfo('template_directory');?>/images/e01-bg.jpg');background-size: cover;">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="/" alt="The Discovery"><?php echo THE_DISCOVERY; ?></a></h1>
						<nav>
							<!-- <a href="#menu">Menu</a> -->
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<div class="inner">
							<h2>Menu</h2>
							<ul class="links">
								<li><a href="/">Home</a></li>
								<li><a href="generic.html">Generic</a></li>
								<li><a href="elements.html">Elements</a></li>
								<li><a href="#">Log In</a></li>
								<li><a href="#">Sign Up</a></li>
							</ul>
							<a href="#" class="close">Close</a>
						</div>
					</nav>

				<!-- Wrapper -->
					<section id="wrapper">
						<header>
							<div class="inner">
								<h2><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_title(); endwhile; endif; ?><font style="font-size: .5em;" color="gray">(episode <?php echo roman_numeral(get_post_meta($post->ID, 'episode', true)); ?>)</font></h2>
								<p><?php echo get_post_meta($post->ID, 'tagline', true); ?></p>
							</div>
						</header>

						<!-- Content -->
							<div class="wrapper">
								<div class="inner">

									<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>

									<h3 class="major">More of <?php echo THE_DISCOVERY; ?></h3>
									<p>Check out more content that The Discovery has to offer.</p>

									<section class="features">
										<article>
											<a href="#" class="image"><img src="<?php bloginfo('template_directory');?>/images/pic04.jpg" alt="" /></a>
											<h3 class="major">Sed feugiat lorem</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
											<a href="#" class="special">Learn more</a>
										</article>
										<article>
											<a href="#" class="image"><img src="<?php bloginfo('template_directory');?>/images/pic05.jpg" alt="" /></a>
											<h3 class="major">Nisl placerat</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
											<a href="#" class="special">Learn more</a>
										</article>
									</section>

								</div>
							</div>

					</section>

				<!-- Footer -->
					<?php get_footer(); ?>

			</div>

		<!-- Scripts -->
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>