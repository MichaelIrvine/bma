<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Boni•Maddison_Architects
 */

get_header();
?>

	
	<main id="main_single-project" class="single-project-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );


		endwhile; // End of the loop.
		?>

	</main>
	

<?php
get_sidebar();
get_footer();
