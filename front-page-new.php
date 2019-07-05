
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
		
		<section class="fp-intro-container">

			<div class="fp-intro-image">

			<?php 

			$fpHero = get_field('hero_image');
			$size = 'full'; // (thumbnail, medium, large, full or custom size)

			if( $fpHero ) {
				echo wp_get_attachment_image( $fpHero, $size );
			}
			?>

			</div>
		</section>

		<section class="fp-second-row">
			<div>
				<?php the_field('front_page_about_paragraph'); ?>
			</div>
			
			<div class="project-lists">
		<!-- Front Page Project Lists -->
				<?php
				$tax_terms = get_terms('project_types');
				?>
				<div class="project-list-container">
				<?php
				foreach($tax_terms as $tax_term) : 
				?>
				<div class="accordion">

				<div class="accordion-toggle">
					<h3 class="project-list-title"><?php echo $tax_term->name; ?></h3>
					<i class="fas fa-caret-down"></i>
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
			</div>

			</div> <!-- End of Project List Container-->

		</section>
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
