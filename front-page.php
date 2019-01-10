
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

		<?php
			if (function_exists('get_field')){
				if (get_field('get_field')){ 
				$fp_heroImage = get_field('front_page_image');
				$fp_heroTitle = get_field('front_page_title');
				?>
					<div class="fp-hero" style="background-image: url('<?php echo $fp_heroImage['url'];?>')">
						<div class="fp-title-container">
							<h1 class="fp-title"><?php echo $fp_heroTitle; ?></h1>
						</div>
					</div>
				<?php
				}
			}
		?>
		<section class="fp-intro-about">
			<div class="fp-intro-about_row-1">
				<?php the_field('front_page_title'); ?>
			</div>	
		</section>
		<section class="fp-project-lists">
			<?php 

				// check for rows (parent repeater)
				if( have_rows('front_page_projects') ): ?>
					<div id="fp-projects">
					<?php 

					// loop through rows (parent repeater)
					while( have_rows('front_page_projects') ): the_row(); ?>
						<div>
							<h3><?php the_sub_field('title'); ?></h3>
							<?php 

							// check for rows (sub repeater)
							if( have_rows('items') ): ?>
								<ul>
								<?php 

								// loop through rows (sub repeater)
								while( have_rows('items') ): the_row();

									// display each item as a list - with a class of completed ( if completed )
									?>
									<li <?php if( get_sub_field('completed') ){ echo 'class="completed"'; } ?>><?php the_sub_field('name'); ?></li>
								<?php endwhile; ?>
								</ul>
							<?php endif; //if( get_sub_field('items') ): ?>
						</div>	

					<?php endwhile; // while( has_sub_field('to-do_lists') ): ?>
					</div>
				<?php endif; // if( get_field('to-do_lists') ): ?>
		</section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
