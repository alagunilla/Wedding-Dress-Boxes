<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Goran
 */
?>

	</div><!-- #content -->

	<?php get_sidebar( 'footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<nav class="footer-navigation" role="navigation">
				<?php
					wp_nav_menu( array(
						'theme_location'  => 'footer',
						'menu_class'      => 'clear',
						'depth'           => 1,
					) );
				?>
			</nav><!-- .footer-navigation -->
		<?php endif; ?>
		<div class="site-info">
			Kebet Main Site: <a href="http://www.kebet.com.au">Kebet Corrugated Cartons</a>
			<!--<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'goran' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'goran' ), 'WordPress' ); ?></a>-->
			<span class="sep"> <br> </span>
			Kebet Micro Sites: 
			<a href="http://www.bookboxes.com.au">Book Boxes Melbourne</a> | <a href="http://www.lpboxes.com.au">LP Boxes</a> | <a href="http://www.rubbish-bins.com.au">Rubbish Bins</a> | <a href="http://www.cardboardboxesaust.com.au">Cardboard Boxes</a>
			<!--<?php printf( __( 'Theme: %1$s by %2$s.', 'goran' ), 'Goran', '<a href="http://wordpress.com/themes/" rel="designer">WordPress.com</a>' ); ?>-->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>