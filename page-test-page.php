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
		<?php
			the_field('test_page_test');
		?>
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();

