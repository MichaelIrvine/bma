<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Boni•Maddison_Architects
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

	<div class="footer-row-1">
		<div class="footer-col-1">
		<h3 class="footer-menu-title">Site Map</h3>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'footer-menu',
				'menu_id'        => 'menu-footer'
			));
		?>
		</div>
		<div class="footer-col-2">
			<div class="footer-contact-container">
				<?php
				$footerContact = get_field('footer_contact', 'options');

				echo $footerContact;
				?>
			</div>
		</div>
	</div>


	<div class="footer-row-2">
		<div class="copyright">
			<?php
				$currentYear = date('Y');
				echo '<p class="footer-copyright">&copy;'; 
				echo $currentYear; 
				echo '</p>';
				echo '<p class="copyright"> | Boni•Maddison Architects</p>';
			?>
		</div>
	</div>

		<div class="mobile-cover">		
		<?php
			wp_nav_menu( array(
				'theme_location' => 'mobile-menu',
				'menu_id'        => 'menu-mobile'
			));
		?>
	</div> <!-- end of .mobile-cover --> 
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
