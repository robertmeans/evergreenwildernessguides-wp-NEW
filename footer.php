<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package ewg
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php get_sidebar('footer'); ?>

<!-- /*
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'evergreenwildernessguides' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'evergreenwildernessguides' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'evergreenwildernessguides' ), 'evergreenwildernessguides', '<a href="http://www.evergreenwebdesign.com" rel="designer">Robert Means</a>' ); ?>
		</div> */ --><!-- .site-info -->
		
		<div class="site-info copyright">
			&copy;2015 Evergreen Wilderness Guides | <a href="http://www.evergreenwebdesign.com" target="_blank">Evergreen Web Design</a>
		</div>


	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
