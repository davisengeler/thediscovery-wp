<?php include("thediscovery-config.php"); ?>

<section id="footer">
	<div class="inner">
		<h2 class="major">Get in touch</h2>
		<p>Cras mattis ante fermentum, malesuada neque vitae, eleifend erat. Phasellus non pulvinar erat. Fusce tincidunt, nisl eget mattis egestas, purus ipsum consequat orci, sit amet lobortis lorem lacus in tellus. Sed ac elementum arcu. Quisque placerat auctor laoreet.</p>

		<?php echo do_shortcode("[contact-form-7 id='78' title='Contact form 1']"); ?>

		<!-- <form method="post" action="contact.php">
			<div class="field">
				<label for="name">Name</label>
				<input type="text" name="name" id="name" />
			</div>
			<div class="field">
				<label for="email">Email</label>
				<input type="email" name="email" id="email" />
			</div>
			<div class="field">
				<label for="message">Message</label>
				<textarea name="message" id="message" rows="4"></textarea>
			</div>
			<ul class="actions">
				<li><input type="submit" value="Send Message" /></li>
			</ul>
		</form> -->

		<ul class="contact">
			<li></li>
			<li class="fa-home">
				<b>The Discovery</b><br />
				XLR – Lander University Radio<br />
				Greenwood, SC 29649
			</li>
			<!-- <li class="fa-phone">(000) 000-0000</li> -->
			<li class="fa-mixcloud"><a href="http://mixcloud.com/DiscoveryXLR"><b>mixcloud.com/</b>DiscoveryXLR</a></li>
			<!-- <li class="fa-twitter"><a href="#">twitter.com/untitled-tld</a></li> -->
			<li class="fa-facebook"><a href="http://facebook.com/DiscoveryXLR"><b>facebook.com/</b>DiscoveryXLR</a></li>
			<li class="fa-instagram"><a href="http://instagram.com/DiscoveryXLR"><b>instagram.com/</b>DiscoveryXLR</a></li>
		</ul>
		<ul class="copyright">
			<li>&copy; <?php echo YEAR ?> <a href="http://engeler.cc">Davis Engeler</a>. All rights reserved.</li><li>Design and Development by <a href="http://html5up.net">HTML5 UP</a> and <a href="http://engeler.cc">Davis Engeler</a></li>
		</ul>
	</div>
</section>
<?php wp_footer(); ?>