
<?php
/**
 * The template for displaying the About page
 Template Name: About
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
					$icon_1 = get_field("icon_1");
					$icon_2 = get_field("icon_2");
					$icon_3 = get_field("icon_3");
					$icon_4 = get_field("icon_4");
					$feature_1 = get_field('feature_1');
					$feature_2 = get_field('feature_2');
					$feature_3 = get_field('feature_3');
					$feature_4 = get_field('feature_4');
					$feature_1_description = get_field('feature_1_description');
					$feature_2_description = get_field('feature_2_description');
					$feature_3_description = get_field('feature_3_description');
					$feature_4_description = get_field('feature_4_description'); 
					$size = "thumbnail"; ?>


				<h1><?php the_title(); ?></h1>
				<p><?php the_content(); ?></p>
				<article class="services">
					<div class="service-1">
						<div class="image-1">
							<?php if($icon_1) {
							echo wp_get_attachment_image( $icon_1, $size );
							} ?>
						</div>
						<div class="text-1">
							<h2><?php echo $feature_1; ?></h2>
							<p><?php echo $feature_1_description; ?></p>
						</div>
					</div>
					
					<div class="service-2">
						<div class="text-2">
							<h2><?php echo $feature_2; ?></h2>
							<p><?php echo $feature_2_description; ?></p>
						</div>
						<div class="image-2">
							<?php if($icon_2) {
								echo wp_get_attachment_image( $icon_2, $size );
							} ?>
						</div>						
					</div>

					<div class="service-3">
						<div class="image-3">
							<?php if($icon_3) {
							echo wp_get_attachment_image( $icon_3, $size );
							} ?>
						</div>
						<div class="text-3">
							<h2><?php echo $feature_3; ?></h2>
							<p><?php echo $feature_3_description; ?></p>
						</div>
					</div>

					<div class="service-4">
						<div class="text-4">
							<h2><?php echo $feature_4; ?></h2>
							<p><?php echo $feature_4_description; ?></p>
						</div>
						<div class="image-4">
							<?php if($icon_4) {
								echo wp_get_attachment_image( $icon_4, $size );
							} ?>
						</div>
					</div>

				</article>	

			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->
	<div class="button-footer">
		<h3>Interested in Working with Us?</h3>
		<a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
	</div>
<?php get_footer(); ?>
