<?php 
    include("database.php"); 
?>

<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Generic - Solid State by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=.5" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	</head>
	<body style="background-image: url('images/e01-bg.jpg');background-size: cover;">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="/" alt="The Discovery">The Disc<i class="demo-icon icon-eye" style="margin: 0 -1.1em 0 -.25em;"><font style="color:transparent;">o</font></i>very</a></h1>
						<nav>
							<a href="#menu">Menu</a>
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
								<h2>Pilot <font style="font-size: .5em;" color="gray">(episode I)</font></h2>
								<p>Consider this the pilot episode for <b>The Disc<i class="demo-icon icon-eye" style="margin: 0 -1.1em 0 -.25em;"><font style="color:transparent;">o</font></i>very</b></p>
							</div>
						</header>

						<!-- Content -->
							<div class="wrapper">
								<div class="inner">
									<h1 class="major">Stream the full episode</h3>

									<p><span class="image fit"><img src="images/e01-banner.jpg" alt="The Discovery - Episode 01 - Pilot"></span>

									<center><iframe style="margin-top: -37px;"width="100%" height="120" src="https://www.mixcloud.com/widget/iframe/?feed=https%3A%2F%2Fwww.mixcloud.com%2FDiscoveryXLR%2Fthe-discovery-episode-01-pilot%2F&hide_cover=1&hide_artwork=1&autoplay=0" frameborder="0"></iframe></center>

									<br />

									<h3>Description</h4>

									Morbi mattis mi consectetur tortor elementum, varius pellentesque velit convallis. Aenean tincidunt lectus auctor mauris maximus, ac scelerisque ipsum tempor. Duis vulputate ex et ex tincidunt, quis lacinia velit aliquet. Duis non efficitur nisi, id malesuada justo. Maecenas sagittis felis ac sagittis semper. Curabitur purus leo donec vel dolor at arcu tincidunt bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce ut aliquet justo. Donec id neque ipsum. Integer eget ultricies odio. Nam vel ex a orci fringilla tincidunt. Aliquam eleifend ligula non velit accumsan cursus. Etiam ut gravida sapien.</p>

									<script>
										function love($song) {
											$(event.target).toggleClass("special");
											$.ajax({
                                                data: 'songID=' + $song,
                                                url: 'givelove.php',
                                                method: 'POST',
                                                success: function(msg) {
                                                  
                                                }
                                            });
										}
									</script>
									
									<style>
    									a.icon {
        									border-bottom: none;
    									}
    								</style>

									<h3 class="major">Tracklist</h3>
										<div class="table-wrapper">
											<table>
												<thead>
													<tr>
														<th></th>
														<th>Song Title</th>
														<th>Artist</th>
														<th>Listen</th>
														<th>Love It?</th>
													</tr>
												</thead>
												<tbody>
    												<?php
        												// Get list of songs and their info for this episode
                                                        $result = mysqli_query($con, "SELECT * FROM songs WHERE episode=1 ORDER BY trackOrder;");
                                                        $initialLoves = unserialize($_COOKIE["loves"]);
                                                        while ($song = mysqli_fetch_array($result)) {
                                                            $special = false;
                                                            if (array_key_exists($song['songID'], $initialLoves)) {
                                                                $special = ($initialLoves[$song['songID']] > 0);
                                                            }
                                                            $spotify = isset($song['spotify']) ? $song['spotify'] : false;
                                                            $appleMusic = isset($song['appleMusic']) ? $song['appleMusic'] : false;
                                                            $youtube = isset($song['youtube']) ? $song['youtube'] : false;
                                                            $download = isset($song['download']) ? $song['download'] : false;
                                                            echo '
                                                                <tr>
            														<td><i class="fa fa-music" aria-hidden="true"></i></td>
            														<td><b>' . $song['name'] . '</b></td>
            														<td><a target="blank" href="' . $song['artistLink'] . '">' . $song['artist'] . '</a></td>
            														<td>';
            														    if ($spotify) 
            														        echo '<a class="icon" target="blank" href="' . $spotify . '"><i class="fa fa-spotify" aria-hidden="true"></i></a> &nbsp';
            														        else echo '<i class="fa fa-spotify" aria-hidden="true" style="color:grey;"></i> &nbsp';
                                                                        if ($appleMusic) 
            														        echo '<a class="icon" target="blank" href="' . $appleMusic . '"><i class="fa fa-apple" aria-hidden="true"></i></a> &nbsp';
            														        else echo '<i class="fa fa-apple" aria-hidden="true" style="color:grey;"></i> &nbsp';
                                                                        if ($youtube) 
            														        echo '<a class="icon" target="blank" href="' . $youtube . '"><i class="fa fa-youtube" aria-hidden="true"></i></a> &nbsp';
            														        else echo '<i class="fa fa-youtube" aria-hidden="true" style="color:grey;"></i> &nbsp';
                                                                        if ($download) 
            														        echo '<a class="icon" target="blank" href="' . $download . '"><i class="fa fa-download" aria-hidden="true"></i></a> &nbsp';
            														        else echo '<i class="fa fa-download" aria-hidden="true" style="color:grey;"></i> &nbsp';
            														  
                                                                
                                                            echo '  <td>
            															<a href="javascript:void(0);" onclick="love(' . $song['songID'] . ');" class="button small love ' . ($special ? "special" : "testing") . ' "><i class="fa fa-heart" aria-hidden="true"></i> LOVE</a>
            														</td>
            													</tr>';
                                                        }
                                                    ?>
<!--
													<tr>
														<td><i class="fa fa-music" aria-hidden="true"></i></td>
														<td><b>Clouds</b></td>
														<td><a href="#">Imagined Herbal Flows</a></td>
														<td><i class="fa fa-spotify" aria-hidden="true"></i> &nbsp <i class="fa fa-apple" aria-hidden="true"></i> &nbsp <i class="fa fa-youtube" aria-hidden="true"></i> &nbsp <i class="fa fa-download" aria-hidden="true" style="color:grey;"></i></td>
														<td>
															<a href="javascript:void(0);" onclick="love('Imagined Herbal Flows');" class="button small love special"><i class="fa fa-heart" aria-hidden="true"></i> LOVE</a>
														</td>
													</tr>
-->
												</tbody>
												<!-- <tfoot>
													<tr>
														<td colspan="4"></td>
														<td>Spotify</td>
													</tr>
												</tfoot> -->
											</table>
										</div>
									</p>

									<p>Morbi mattis mi consectetur tortor elementum, varius pellentesque velit convallis. Aenean tincidunt lectus auctor mauris maximus, ac scelerisque ipsum tempor. Duis vulputate ex et ex tincidunt, quis lacinia velit aliquet. Duis non efficitur nisi, id malesuada justo. Maecenas sagittis felis ac sagittis semper. Curabitur purus leo donec vel dolor at arcu tincidunt bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce ut aliquet justo. Donec id neque ipsum. Integer eget ultricies odio. Nam vel ex a orci fringilla tincidunt. Aliquam eleifend ligula non velit accumsan cursus. Etiam ut gravida sapien.</p>

									<p>Vestibulum ultrices risus velit, sit amet blandit massa auctor sit amet. Sed eu lectus sem. Phasellus in odio at ipsum porttitor mollis id vel diam. Praesent sit amet posuere risus, eu faucibus lectus. Vivamus ex ligula, tempus pulvinar ipsum in, auctor porta quam. Proin nec commodo, vel scelerisque nisi scelerisque. Suspendisse id quam vel tortor tincidunt suscipit. Nullam auctor orci eu dolor consectetur, interdum ullamcorper ante tincidunt. Mauris felis nec felis elementum varius.</p>

									<h3 class="major">Vitae phasellus</h3>
									<p>Cras mattis ante fermentum, malesuada neque vitae, eleifend erat. Phasellus non pulvinar erat. Fusce tincidunt, nisl eget mattis egestas, purus ipsum consequat orci, sit amet lobortis lorem lacus in tellus. Sed ac elementum arcu. Quisque placerat auctor laoreet.</p>

									<section class="features">
										<article>
											<a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
											<h3 class="major">Sed feugiat lorem</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
											<a href="#" class="special">Learn more</a>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic05.jpg" alt="" /></a>
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