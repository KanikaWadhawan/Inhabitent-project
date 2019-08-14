<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
				</div><!-- .site-info -->

			<!-- <?php
				if ( is_active_sidebar('footer-1')) {
					echo '<div id="footer-sidebar-1" class="widget-area" role="complementary">';
				    dynamic_sidebar('footer-1');
			        echo '</div>';
				}
			?> -->


			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
