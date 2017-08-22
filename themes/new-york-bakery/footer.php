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

<footer class="text-muted site-footer">
	<div class="container site-container">
		<div class="row site-row">
			<div class="col-lg-3 col-md-4 col-xs-12 footer-container-widget">
				<?php dynamic_sidebar( 'footer-widget-1' ); ?>
			</div>
			<div class="col-lg-3 col-md-3 col-xs-12 footer-container-widget">
				<?php dynamic_sidebar( 'footer-widget-2' ); ?>
			</div>
			<div class="col-lg-3 col-md-2 col-xs-12 footer-container-widget">
				<?php dynamic_sidebar( 'footer-widget-3' ); ?>
			</div>
		</div>
	</div>
</footer>

</div> <!--.new-york-bakery-container-fluid-->

<?php wp_footer(); ?>

</body>
</html>
