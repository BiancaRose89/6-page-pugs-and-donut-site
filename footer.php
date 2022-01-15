<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package geekpack
 */

?>
				</div><!-- #content -->
			</div>
		</div>
			
<div class="footer-section full">
		<div class="wrap">	
			<footer id="colophon" class="site-footer inner">

		<div id="footer" class="widget-area">
	
			<?php dynamic_sidebar( 'footer' ); ?>

		</div>
		<!--
				<div class="site-info">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'geekpack' ) ); ?>">
						<?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( 'Proudly powered by %s', 'geekpack' ), 'WordPress' );
						?>
					</a>
					<span class="sep"> | </span>
						<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( 'Theme: %1$s by %2$s.', 'geekpack' ), 'geekpack', '<a href="https://www.geekpack.co">WP Rockstar</a>' );
						?>
				</div>--><!-- .site-info -->
			</footer><!-- #colophon -->
		</div>
	</div>

<?php wp_footer(); ?>

</body>
</html>
