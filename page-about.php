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

	<div class="about content-area">
		<main id="main-about" class="about-main">
			<section class="about-hero-container">
				
				<div class="about-hero">
					<h1 class="about-title hidden">History of BMA</h1>
					<?php 
					$image = get_field('history_image');
					if( !empty($image) ): ?>
						<img class="hidden" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>

					<div class="about-history-text hidden">
						<?php the_field('history_text'); ?>
					</div>
				</div>
				</section>	

				<section class="about-founders">
				<div class="history-image-02">
			
					<?php 

					$imagesHistory = get_field('history_image_gallery');
					$size = 'full';

					if( $imagesHistory ): ?>
						<ul class="projects-gallery slick-gallery__about">
							<?php foreach( $imagesHistory as $imageHistory ): ?>
								<li>
									<?php echo wp_get_attachment_image( $imageHistory['ID'], $size ); ?>
								</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				</div>
			</section>
			
			<section class="team">
			
			<div class="team-intro-text">
				<?php the_field('team_text'); ?>
			</div>

			<div class="team-members-container">
			<?php if( have_rows('team_members') ): ?>
				<?php while( have_rows('team_members') ): the_row(); 
					// vars
					$teamMemberImage = get_sub_field('team_member_image');
					$teamMemberInfo = get_sub_field('team_member_info');
					?>
					<ul class="team-members">

					<li class="team-member-image">
						<img src="<?php echo $teamMemberImage['url']; ?>" alt="<?php echo $teamMemberImage['alt'] ?>" />
					</li>
					<li class="team-member-info">
						<?php echo $teamMemberInfo; ?>
					</li>
				</ul>
				<?php endwhile; ?>
			<?php endif; ?>
			</div>	
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();

