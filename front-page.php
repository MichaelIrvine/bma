
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
			<div class="fp-image hidden" style="background-image: url(<?php echo $fpImageCover; ?> )"></div>
			
			<div class="fp-hero-text-wrapper">
			<span class="fp-hero-text fp-hero-text_row-01 hidden">Boni•Maddison
				<span class="fp-hero-text fp-hero-text_seperator hidden"></span>
				<span class="fp-hero-text fp-hero-text_row-02 hidden">Architects</span>
			</span>
			</div>
			

			</div>	
		</section>
		<section class="fp-about-section_row-1">
			<div class="fp-intro-about_row-1">
				<?php the_field('front_page_intro_first_row'); ?>
			</div>
		
		<div class="about-section-images_row-1">
			<?php 

			$firstRowImages = get_field('about_section_images_first_row');
			$size = 'full';

			if( $firstRowImages ): ?>
				<ul class="fp-intro-gallery slick-gallery">
					<?php foreach( $firstRowImages as $firstRowImage ): ?>
						<li>
							<?php echo wp_get_attachment_image( $firstRowImage['ID'], $size ); ?>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</div>
		</section>

		<section class="fp-about-section_row-2">
		<div class="about-section-images_row-2">
			<?php 

			$secondRowImages = get_field('about_section_images_second_row');
			

			if( $secondRowImages ): ?>
				<ul class="fp-intro-gallery slick-gallery">
					<?php foreach( $secondRowImages as $secondRowImage ): ?>
						<li>
							<?php echo wp_get_attachment_image( $secondRowImage['ID'], $size ); ?>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		
			</div>

			<div class="fp-intro-about_row-2">
				<?php the_field('front_page_intro_second_row'); ?>
			</div>

		</section>
		<section class="fp-project-lists">
				
		<!-- Front Page Project Lists -->
				<?php
				$tax_terms = get_terms('project_types');

				foreach($tax_terms as $tax_term) : 
				?>
				<div class="accordion">

				<div class="accordion-toggle">
					<h3 class="project-list-title"><?php echo $tax_term->name; ?></h3>
					<i class="fas fa-caret-down fa-2x"></i>
				</div>
				<?php
				$args = array('post_type' => 'projects',
											'posts_per_page' => -1,
											'hide_empty' => true,
											'tax_query' => array( 
												 	array(
													'taxonomy' => 'project_types',
													'field'    => 'slug',
													'terms'    => $tax_term->name,
											)
										)
									);

				$projects = new WP_Query( $args ); 
				
					if ($projects->have_posts() ){
						echo '<ul class="accordion-content">';
						while($projects->have_posts() ){
							$projects->the_post();
							echo '<li>';
							echo '<a href="';
							the_permalink();
							echo '">';
							the_title();
							echo '</a>';
							echo '</li>';
						}
						wp_reset_postdata();
						echo '</ul>';
					} ?>
					</div>
				<?php
				endforeach;
			?>

			<div class="project-list-image">
				<?php 

				$projectImage = get_field('project_lists_image');

				// if( !empty($projectImage) ): ?>

					<img src="<?php echo $projectImage['url']; ?>" alt="<?php echo $projectImage['alt']; ?>" />

				<!--  -->
			</div>

		</section>
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
