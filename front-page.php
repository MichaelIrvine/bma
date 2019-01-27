
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

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		
		<section class="fp-image-wrapper">
			<div class="fp-hero-cover">
			<?php
				 $fpImageCover = get_field('front_page_image')
			?>
			<div class="fp-image hidden-half" style="background-image: url(<?php echo $fpImageCover; ?> )"></div>
			
			<div class="fp-hero-text-wrapper">
			<span class="fp-hero-text fp-hero-text_row-01 hidden">Boni•Maddison
				<span class="fp-hero-text fp-hero-text_seperator hidden"></span>
				<span class="fp-hero-text fp-hero-text_row-02 hidden">Architects</span>
			</span>
			</div>
			

			</div>	
		</section>
		<section class="fp-intro-about">
			<div class="fp-intro-about_row-1">
				<?php the_field('front_page_intro'); ?>
			</div>
		</section>
		<section class="about-section-images">
			<?php 

			$images = get_field('about_section_images');
			$size = 'full';

			if( $images ): ?>
				<ul>
					<?php foreach( $images as $image ): ?>
						<li>
							<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>

		
		</section>
		<section class="fp-project-lists">
		<!-- Front Page Project Lists -->
			<?php 
				if( have_rows('front_page_projects') ): ?>
					<div class="fp-projects">
					<?php 
					while( have_rows('front_page_projects') ): the_row(); ?>
						<div class="accordion">
						<!-- Project List Header -->
							<div class="accordion-toggle">
								<h3 class="project-list-title "><?php the_sub_field('front_page_project_title'); ?></h3>
							<i class="fas fa-caret-down fa-2x"></i>
							</div>
							<?php 
							if( have_rows('front_page_project_list') ): ?>
								<ul class="accordion-content">
								<?php 
								while( have_rows('front_page_project_list') ): the_row();
									?>
									<a href="<?php echo get_sub_field('fp_project_link'); ?>">
									<li class="project-list-item"><?php echo get_sub_field('fp_project'); ?></li>
									</a>
								<?php endwhile; ?>
								</ul>
							<?php endif;?>
						</div>	

					<?php endwhile;?>
					</div>
				<?php endif;?>
		</section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
