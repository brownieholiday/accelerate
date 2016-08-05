<?php
/**
 * The template for the about page
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

<section class="about_header">

	<div id="primary" class="site-content">
		<div id="content" role="main">
				
				<?php while ( have_posts() ) : the_post(); ?>

				<div class="about_header_text"><?php the_content(); ?></div>

				<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
</section>

		<section class="services">

			<?php while ( have_posts() ) : the_post(); 

				$size = "full";
				$our_services = get_field('our_services');
				$our_services_description = get_field('our_services_description');
				$service_1 = get_field('service_1');
				$service_description_1 = get_field('service_description_1');
				$image_1 = get_field('image_1');
				$service_2 = get_field('service_2');
				$service_description_2 = get_field('service_description_2');
				$image_2 = get_field('image_2');
				$service_3 = get_field('service_3');
				$service_description_3 = get_field('service_description_3');
				$image_3 = get_field('image_3');
				$service_4 = get_field('service_4');
				$service_description_4 = get_field('service_description_4');
				$image_4 = get_field('image_4');
				$contact_text = get_field('contact_text');
				$contact_button = get_field('contact_button');
				?>

				<div class="our_services">
					<h4><?php echo $our_services; ?></h4>
					<p><?php echo $our_services_description; ?></p>
				</div>



				<div class="individual_services">

					<div class="individual_services_image_left">
						<?php echo wp_get_attachment_image( $image_1, $size ); ?>
					</div>
					
					<div class="individual_services_text">
						<h3><?php echo $service_1; ?></h3>
						<p><?php echo $service_description_1; ?></p>
					</div>

					<div class="individual_services_text">
						<h3><?php echo $service_2; ?></h3>
						<p><?php echo $service_description_2; ?></p>
					</div>

					<div class="individual_services_image_right">
						<?php echo wp_get_attachment_image( $image_2, $size ); ?>
					</div>

					<div class="break"></div>

					<div class="individual_services_image_left">
						<?php echo wp_get_attachment_image( $image_3, $size ); ?>
					</div>

					<div class="individual_services_text">
						<h3><?php echo $service_3; ?></h3>
						<p><?php echo $service_description_3; ?></p>
					</div>

					<div class="individual_services_text">
						<h3><?php echo $service_4; ?></h3>
						<p><?php echo $service_description_4; ?></p>
					</div>

					<div class="individual_services_image_right">
						<?php echo wp_get_attachment_image( $image_4, $size ); ?>
					</div>

					<div class="break"></div>

					<div class="about_contact">
						<span class="about_contact_text"><h2><?php echo $contact_text; ?></h2></span>
						<span class="contact_us"><?php echo $contact_button; ?></span>

					</div>

				</div>



				<?php endwhile; // end of the loop. ?>

			</section>
			
		

<?php get_footer(); ?>