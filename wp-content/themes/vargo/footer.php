<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Vargo
 * @since Vargo 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">
		
		<div id="footer_inner">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				get_sidebar( 'footer' );
			?>

			<p id="site-generator">
				&copy;<?php echo date('Y'); ?> VARGO. All rights reserved. | <a href="/privacy-policy/" title="">Privacy policy</a>
			</p>
			<!--div id="footer_man"></div-->
		</div><!-- #footer_inner -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php if(is_front_page()) { ?>
	<script>
		jQuery(document).ready(function() {
			jQuery('#home_scroll').before('<div id="scroll_nav">').cycle({ 
				fx:    'fade', 
				pause:  1,
				pager:  '#scroll_nav'
			});
		});
	</script>
<?php } ?>
</body>
</html>