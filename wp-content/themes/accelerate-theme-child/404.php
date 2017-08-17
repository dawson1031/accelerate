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

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<header class="page-header error">
				<img title="404 Page Image" src="http://localhost/accelerate/wp-content/uploads/2017/08/taxi404b.png" alt="404 Not Found" />
			</header>

			<div class="page-content error">
			<h2> Whoops!  Got the wrong directions...</h2>
								...you know, for all those times a webpage has moved or gone missing! It happens alot.<br>

<p>Feel free to take a look around our <a href="../blog">blog</a> or some of our featured <a href="../case-studies">work</a> or visit my <a href="../contact-us">Contact Page</a> to get in touch right away.</p>


		<!--		<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'accelerate' ); ?></p>

				<?php get_search_form(); ?>-->

			</div><!-- .page-content -->


		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>