<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package New_York_Bakery
 */

?>

</div><!-- .container-fluid main-content -->

<div class="want-to-know-more">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>WANT TO KNOW MORE?</h2>
				<a href="/contact-us" class="button button1">CONTACT US</a>
			</div>
		</div>
	</div>
</div>

<footer class="text-muted site-footer">
	<div class="container site-container">
		<div class="row site-row">
			<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 footer-container-widget">
				<?php dynamic_sidebar( 'footer-widget-1' ); ?>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 footer-container-widget">
				<?php dynamic_sidebar( 'footer-widget-2' ); ?>
			</div>
			<div class="col-lg-3 col-md-2 col-sm-12 col-xs-12 footer-container-widget">
				<?php dynamic_sidebar( 'footer-widget-3' ); ?>
			</div>
		</div>
	</div>
</footer>

</div> <!--.new-york-bakery-container-fluid-->

<script>
	if ( 'serviceWorker' in navigator ) {
		navigator.serviceWorker.register( '<?php echo get_template_directory_uri(); ?>/service-worker.js' )
			.then( function( reg ) {
				console.log( "Service worker registered." );
			} ).catch( function( err ) {

		} );
	}
</script>

<?php wp_footer(); ?>

</body>
</html>
