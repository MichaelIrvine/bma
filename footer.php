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
		<div class="copyright">
			<?php
				$currentYear = date('Y');

				echo '<p class="footer-copyright">&copy;'; 
				echo $currentYear; 
				echo '</p>';

				echo '<p class="copyright">Boni•Maddison Architects</p>';
			?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
