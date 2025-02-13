<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package new_theme
 */

get_header();
?>

<main id="primary" class="site-main flex flex-col md:flex-row items-center justify-between px-6 md:px-16 py-12 bg-gray-100">
	<!-- Contenido de la izquierda -->
	<section class="flex place-content-around">

		<div class="max-w-lg mt-4 main-content">
			<h2 class="custom-heading">
				Marketing advice based on credibility, not hype
			</h2>

			<ul class="text-gray-700 custom-list  ml-0">
				<li class="flex items-center">
					Get in-depth marketing teardowns and playbooks
				</li>
				<li class="flex items-center">
					Credible insights based on what's working in the field
				</li>
				<li class="flex items-center">
					Delivered once a month
				</li>
			</ul>

			<!-- Formulario de suscripción -->
			<div class="mt-6 bg-white p-4 rounded-lg shadow-md border divInputEmail">
				<div class="flex flex-row place-content-between divEmail2">
					<input type="email" placeholder="Your email"
						class="flex-1 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 emailinput">
					<button class=" custombutton text-white  px-5 py-3 bg-blue-600 font-semibold rounded-md hover:bg-blue-700 transition">
						Subscribe Now
					</button>
				</div>
			</div>
			<p class="mt-4 text-sm text-gray-500 mt-2">
				Pure Value - we'll never spam you
			</p>
		</div>

		<div class="imgDiv">
			<img src="<?php echo get_template_directory_uri(); ?>/src/images/fondo.png" alt="Marketing Expert" class=" customimg  rounded-lg  content-end">
		</div>
	</section>
	<section class="companies">
		<h2>Trusted marketing advisory to top B2B companies</h2>



		<div class="relative w-full overflow-hidden">
			<div class="marquee">
				<div class="marquee-content">
					<img src="<?php echo get_template_directory_uri(); ?>/src/images/kustomer.png" alt="" class="marketing-img">
					<img src="<?php echo get_template_directory_uri(); ?>/src/images/gong.png" alt="" class="marketing-img">
					<img src="<?php echo get_template_directory_uri(); ?>/src/images/usergems.png" alt="" class="marketing-img">
					<img src="<?php echo get_template_directory_uri(); ?>/src/images/workvivo.png" alt="" class="marketing-img">
					<img src="<?php echo get_template_directory_uri(); ?>/src/images/cognism.png" alt="" class="marketing-img">
					<img src="<?php echo get_template_directory_uri(); ?>/src/images/docebo.png" alt="" class="marketing-img">
					<img src="<?php echo get_template_directory_uri(); ?>/src/images/datagrail.png" alt="" class="marketing-img">
					<img src="<?php echo get_template_directory_uri(); ?>/src/images/nextiva.png" alt="" class="marketing-img">
					<img src="<?php echo get_template_directory_uri(); ?>/src/images/dckap.png" alt="" class="marketing-img">
					<img src="<?php echo get_template_directory_uri(); ?>/src/images/testrail.png" alt="" class="marketing-img">
				</div>
			</div>
		</div>





	</section>

	<h1 class="Learn">Let's learn what's actually working in B2B marketing</h1>
	<h2 class="Real-world">Real-world insights from proven players who have done the work</h2>

	<section class="posts flex place-content-around flex-wrap">
		<?php
		if (have_posts()) :
			while (have_posts()) : the_post();


				$post_title = get_the_title();


				if ($post_title === "Social Media") {
					continue;
				}
		?>

				<article class="post  flex p-2">
					<?php if (has_post_thumbnail()) : ?>
						<div class="post-thumbnail">
							<?php the_post_thumbnail('large'); ?>
						</div>
					<?php endif; ?>
					<div class="card">
						<h1 class="post-title"><?php echo $post_title; ?></h1>
						<?php setlocale(LC_TIME, 'en_US.UTF-8'); ?>
						<p><strong>Published on:</strong> <?php echo strftime('%B %d, %Y', get_the_time('U')); ?> by <?php the_author(); ?></p>



						<div class="post-content">
							<?php the_content(); ?>
						</div>

					</div>
				</article>

		<?php endwhile;
		endif;
		?>
	</section>


</main>

<?php
get_sidebar();
get_footer();
