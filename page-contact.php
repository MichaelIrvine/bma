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

	<div id="primary" class="contact content-area">
		<main id="main" class="contact-main">
			<div class="contact-col-01">
				<?php 
				$image = get_field('contact_image');
				if( !empty($image) ): ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php endif; ?>
			</div>
			<div class="contact-col-02">
				<?php the_field('contact_details'); ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();

