<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="aboutus">
		<div class="about-hero">
			<div class="site-content-about">
				<h2>Accelerate is a strategy and marketing agency<br> located in the heart of NYC. Our goal is to build<br> businesses by making our clients visible and<br> making their customers smile. </h2>
			</div><!-- .site-content -->

		</div>
		<h4>Our Services</h4>
		<p>We take pride in our clients and the content we create for them. <br>
		Here’s a brief overview of our offered services.</p>

	</div><!-- .aboutus -->


	<div id="primary" class="site-content">
		<div class="content" role="main">
			<?php while ( have_posts() ) : the_post(); 
				$image = get_field('image');
				$size = "thumbnail";
				$services = get_field('service');
			?>
			<article id="post-<?php the_ID(); ?>" class="about-us">
				<aside class="about-us-sidebar">
					<h2><?php echo $services; ?></h2>
					<h5><?php echo the_ID(); ?></h5>
					<?php my_excerpt(long); ?>	

				</aside>
				<div class="about-us-images">

					<a href="<?php the_permalink(); ?>">
					<?php if(image) { ?>
						<?php echo wp_get_attachment_image($image, $size); ?>
					<?php } ?>
					</a>
				</div>
			</article>

			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
