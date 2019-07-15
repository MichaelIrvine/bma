<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Boni•Maddison_Architects
 */

get_header();
?>

	<div id="primary-contact" class="contact content-area">
		<main id="main-contact" class="contact-main">
			<div class="contact-hero">
				<?php 
				$image = get_field('contact_image');
				if( !empty($image) ): ?>
					<img class="hidden-up" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php endif; ?>
			
			<div class="contact-text-details hidden-up">
				<?php the_field('contact_details'); ?>
			</div>

			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();

