<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Boni•Maddison_Architects
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<h2 class="project-category-title">Commercial</h2>
				<?php
				$args = array('post_type' => 'projects',
											'posts_per_page' => -1,
											'tax_query' => array( 
												 	array(
													'taxonomy' => 'project_types',
													'field'    => 'slug',
													'terms'    => 'commercial'

														)
													)
												);


				$projects = new WP_Query( $args );

					if ($projects->have_posts() ){
						echo '<ul>';

						while($projects->have_posts() ){
							$projects->the_post();
							echo '<li class="project-list-item">';
							echo '<a class="project-link" href="';
							the_permalink();
							echo '">';
							the_title();
							echo '</a>';
							echo '</li>';
						}
						wp_reset_postdata();
						echo '</ul>';
					}

			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
