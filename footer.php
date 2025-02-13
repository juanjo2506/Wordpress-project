<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package new_theme
 */

?>

<footer id="colophon" class="site-footer">
	<section class="section">
		<div class="main-hero">

			<div class="Logo-social">
				<a href="<?php echo esc_url(home_url('/')); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/src/images/sinfondo.png" alt="Logo" class="h-5">
				</a>

				<div class="social_media">

					<?php
					$facebook = get_field('facebook');
					$instagram = get_field('instagram');
					$x = get_field('X');
					?>


					<?php if ($facebook): ?>
						<a href="<?php echo esc_url($facebook); ?>" target="_blank" class="text-blue-600 hover:text-blue-800">Facebook</a>
					<?php endif; ?>

					<?php if ($instagram): ?>
						<a href="<?php echo esc_url($instagram); ?>" target="_blank" class="text-pink-600 hover:text-pink-800">Instagram</a>
					<?php endif; ?>

					<?php if ($x): ?>
						<a href="<?php echo esc_url($x); ?>" target="_blank" class="text-gray-600 hover:text-gray-800">X (Twitter)</a>
					<?php endif; ?>
				</div>

			</div>

			<div class="information">
				<h2>information</h2>
				<ul>
					<li>About</li>
					<li>Consulting</li>
					<li>Blog</li>
					<li>Media</li>
					<li>Testimonials</li>
				</ul>

			</div>

			<div class="email">
				<h2>Email</h2>
				<h3>juanjose250699@gmail.com</h3>

			</div>

		</div>


		<div class="main-hero2">
			<h2>Subscribe to My Newsletter</h2>

			<div class="mt-6 bg-white p-4 rounded-lg  divInputEmail divInputEmail2">
				<div class="flex flex-row place-content-between divEmail2">
					<input type="email" placeholder="Your email"
						class="flex-1 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 emailinput emailinput2">
					<button class=" custombutton text-white  px-5 py-3 bg-blue-600 font-semibold rounded-md hover:bg-blue-700 transition">
						Subscribe Now
					</button>
				</div>
			</div>
			<p class="copyright">Copyright 2025 Juan Jose Tellez Tobon. All rights reserved</p>
			<img src="" alt="">

			<img src="<?php echo get_template_directory_uri(); ?>/src/images/lastlogo.png" alt="Logo" class="h-5">
		</div>
	</section>


	<section class="section2">
		<h2>Join nearly 50k Followers</h2>

		<div class="juanjo">
			<img src="<?php echo get_template_directory_uri(); ?>/src/images/FOTO.png" alt="Logo" class="h-5 juanjoImg">
			<h2>Juan Jose Tellez Tobon</h2>
			<p>Web Developer</p>

			<p class="city">Armenia,Quindio, Colombia</p>
			<p>48,000+ followers 500+ connections</p>


			<div class="logos">
				<img src="<?php echo get_template_directory_uri(); ?>/src/images/X.png" alt="Logo" class="h-5 small-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/src/images/in.png" alt="Logo" class="h-5 small-logo">
			</div>
		</div>



	</section>

</footer>
</div>

<?php wp_footer(); ?>

</body>

</html>