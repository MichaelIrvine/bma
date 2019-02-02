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

				<?php
				$tax_terms = get_terms('project_types');

				foreach($tax_terms as $tax_term) : 
				?>
				<h3 class="project-list-title"><?php echo $tax_term->name; ?></h3>	
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
						echo '<ul>';
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
						// wp_reset_postdata();
						echo '</ul>';
					}
				endforeach;
			?>





		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
