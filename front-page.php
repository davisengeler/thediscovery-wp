<?php include("roman-numeral.php"); ?>

<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>The Discovery on XLR</title>
		<meta charset="utf-8" />
		<meta property="og:image" content="<?php bloginfo('template_directory');?>/images/share.jpg" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<style type="text/css">
			#image1 {
			    position: absolute;
			    top: 0px;
			    left: 0px;
			}

			#image2 img {
				width: 100%;
			}
		</style>
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="/" alt="The Discovery"><?php echo THE_DISCOVERY; ?></a></h1>
<!--
						<nav>
							<a href="#menu">Menu</a>
						</nav>
-->
					</header>

				<!-- Menu -->
<!--
					<nav id="menu">
						<div class="inner">
							<h2>Menu</h2>
							<ul class="links">
								<li><a href="index.html">Home</a></li>
								<li><a href="generic.html">Generic</a></li>
								<li><a href="elements.html">Elements</a></li>
								<li><a href="#">Log In</a></li>
								<li><a href="#">Sign Up</a></li>
							</ul>
							<a href="#" class="close">Close</a>
						</div>
					</nav>
-->

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<div class="logo"><span class="icon fa-music"></span></div>
                            <h2 alt="This is THE DISCOVERY"><font color="gray">This is</font> <font style="white-space: nowrap;">The Disc<i class="demo-icon icon-eye" style="margin: 0 -1.1em 0 -.25em;"><font style="color:transparent;">o</font></i>very</font></h2> 
                            <p>
	                            <font color="white"><font color="#a6a6a6">on XLR Lander University Radio.</font> It's Music for the mind.</font>
	                            <!-- <a href="#" class="button small icon fa-play-circle"><font color="grey">Listen Now</font></a> -->
                            </p>
						</div>
					</section>

				<!-- Wrapper -->
					<section id="wrapper">

						<!-- One -->
							<section id="one" class="wrapper spotlight style1">
								<div class="inner">
									<a href="#" class="image">
										<!-- <img class="under" src="images/thediscovery.gif" alt="" />
										<img class="over" src="images/thediscovery.png" alt="" /> -->
										<div id="image1"> <img src="<?php bloginfo('template_directory');?>/images/thediscovery.png"></div>
										<div id="image2"> <img src="<?php bloginfo('template_directory');?>/images/thediscovery.gif"></div>

									</a>
									<div class="content">
										<h2 class="major"><font color="grey">Enter</font> The Disc<i class="demo-icon icon-eye" style="margin: 0 -1.1em 0 -.25em;"><font style="color:transparent;">o</font></i>very</h2>
                                        <p>
                                        Welcome to <b>The Discovery</b>, a brand new show on <i><b>XLR</b> - Lander University Radio</i>. We will dig a little deeper into different musical genres and thought provoking topics, all in attempt to refuel our curiosity. Spark your curiosity and open your mind to work, think, and expand. This is <b>The Discovery</b>. </p>
										<a href="#" class="special">Learn more</a>
									</div>
								</div>
							</section>
                        
                        <!-- Two -->
							<section id="two" class="wrapper alt spotlight style2">
								<div class="inner">
									<a href="#" class="image"><img src="<?php bloginfo('template_directory');?>/images/xlr.jpg" alt="" /></a>
									<div class="content">
										<h2 class="major">XLR <font color="grey">– Lander University Radio</font></h2>
										<p>The award-winning student-run radio station of Lander Univeristy in Greenwood, SC, playing an eclectic variety of independent music both old and new. <b>XLR</b> educates students, breaks ground in musical programming, and provides cutting-edge cultural coverage through speciality shows all day, year round. Check it out!</p>
										<a href="#" class="special">Listen for free</a>
									</div>
								</div>
							</section>

						<!-- Three -->
							<section id="three" class="wrapper spotlight style3">
								<div class="inner">
									<a href="#" class="image"><img src="<?php bloginfo('template_directory');?>/images/davis-engeler.jpg" alt="Picture of Davis Engeler" /></a>
									<div class="content">
										<h2 class="major"><font color="grey">Davis</font> Engeler</h2>
										<p>Lorem ipsum dolor sit amet, etiam lorem adipiscing elit. Cras turpis ante, nullam sit amet turpis non, sollicitudin posuere urna. Mauris id tellus arcu. Nunc vehicula id nulla dignissim dapibus. Nullam ultrices, neque et faucibus viverra, ex nulla cursus.</p>
										<a href="#" class="special">Learn more</a>
									</div>
								</div>
							</section>

						<!-- Four -->
							<section id="four" class="wrapper alt style1">
								<div class="inner">
									<h2 class="major">Full Episodes</h2>
									<p>Listen to full episodes of The Discovery and get more involved with the show. Here you can view the track list for each episode, vote on your favorites, request new music or topics, and more.</p>
									<section class="features">
										<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
											<?php if ( in_category( '2' ) ) : ?>
												<article>
												<a href="<?php the_permalink(); ?>" class="image"><img src="<?php bloginfo('template_directory');?>/images/episode01.jpg" alt="" /></a>
												<a href="<?php the_permalink(); ?>"><h3 class="major"><?php echo get_the_title() . " <font style=\"font-size: .7em;\" color=\"gray\">(episode " . roman_numeral(get_post_meta($post->ID, 'episode', true)) . ")</font>"; ?></h3></a>
												<p><?php echo get_the_excerpt(); ?></p>
												<a href="<?php the_permalink(); ?>" class="special">More information</a>
												</article>
											<?php endif; ?>
										<?php endwhile; endif; ?>
									</section>
									<ul class="actions">
										<li><a href="#" class="button">Browse All</a></li>
									</ul>
								</div>
							</section>

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

			<!-- <iframe style="position: fixed;bottom: 0;width: 100%;" width="100%" height="60" src="https://www.mixcloud.com/widget/iframe/?feed=https%3A%2F%2Fwww.mixcloud.com%2FYanofskyTegmark%2Fthe-transcendent-experience-yanofsky-tegmark-nightride-fm%2F&hide_cover=1&mini=1" frameborder="0"></iframe> -->

	</body>
</html>