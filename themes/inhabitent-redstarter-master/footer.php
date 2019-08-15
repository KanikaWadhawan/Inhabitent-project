<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div>
				<div class="footer-class">
			
			<div class="contact-info">
			<h3>Contact Info</h3>
			<p> <span class="email-info"><i class="fas fa-envelope"></i></span>info@inhabitent.com</p>
			<p><span class="call-info"><i class="fas fa-phone-alt"></i></span>778-456-7891</p>
			<p>
				<span class="facebook-logo"><i class="fab fa-facebook-square"></i><span>
			    <span class="twitter-logo"><i class="fab fa-twitter-square"></i><span>
			    <span class="google-logo"><i class="fab fa-google-plus-square"></i><span>
			</p>
			</div>

			<div class="business-hours">
			<h3>Business Hours</h3>
			<p> <strong>Monday-Friday:</strong> 9am to 5pm</p>
			<p><strong>Saturday:</strong> 10am to 2pm</p>
			<p><strong>Sunday:</strong> Closed</p>
			</div>

			<div class="footer-logo">
			<img src="<?php echo get_template_directory_uri() .'/images/logos/inhabitent-logo-text.svg' ?>" alt="footer-logo">
			</div>
			 
			
				<!-- <div class="site-info">
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a> -->
				</div><!-- .site-info -->

			<!-- <?php
				if ( is_active_sidebar('footer-1')) {
					echo '<div id="footer-sidebar-1" class="widget-area" role="complementary">';
				    dynamic_sidebar('footer-1');
			        echo '</div>';
				}
			?> -->


			</div>
			<p class="copyright">Copyright © 2019 Inhabitent</p>
			</div>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
