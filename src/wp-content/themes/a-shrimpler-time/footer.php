<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package A_Shrimpler_Time
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<span>A Shrimpler Time</span>
			<br></br>
		
			<a href="<?php echo esc_url( __( 'http://localhost/about-us/', 'AboutUs' ) ); ?>">
				<?php
				/* About Us link */
				printf( esc_html__( 'About Us' ), 'AboutUs' );
				?>
			</a>
			<a href="<?php echo esc_url( __( 'http://localhost/contact-us/', 'ContactUs' ) ); ?>">
				<?php
				/* Contact Us Link. */
				printf( esc_html__( 'Contact Us' ), 'contactUs' );
				?>
			</a>
			<a href="<?php echo esc_url( __( 'http://localhost/?page_id=3', 'Privacy Policy' ) ); ?>">
				<?php
				/* Privacy Policy link */
				printf( esc_html__( 'Proudly powered by %s', 'a-shrimpler-time' ), 'WordPress' );
				?>
			</a>
		
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
