<?php
/**
 * The template for displaying the 404 page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>

		<div class="error-image"></div>

		<div class="error-text-headline">

			<h2>Whoops!</h2>

		</div>

		<div class="error-text">
			<p>It looks like you've made a wrong turn.</p>
			<p>Perhaps we could interest you in <a href="http://sdshowalter.wpengine.com/blog/">our blog</a> or <a href="http://sdshowalter.wpengine.com/case-studies/">our latest work</a>?</p>
		</div>


		</div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>