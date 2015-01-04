<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Minnow
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'minnow' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'minnow' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'minnow' ), 'Minnow', '<a href="http://wordpress.com/themes/" rel="designer">Automattic</a>' ); ?>
			<span class="sep"> | </span>
			<?php printf( __( 'Customize: %1$s by %2$s.', 'swimmy' ), 'featherplain.com', '<a href="http://featherplain.com">Megumi Hano</a>.' ); ?>
			<p class="copyright">&copy; <?php echo date('Y '); ?><a href="<?php echo esc_url( __( 'http://featherplain.com/', 'swimmy' ) ); ?>">featherplain.com</a></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
