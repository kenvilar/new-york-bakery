<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package New_York_Bakery
 */

?>


<?php
the_content();

if ( get_field( 'contact_us' ) ) :
	echo '<div class="gray-bg">' . the_field( 'contact_us' ) . '</div>';
endif;

?>
<div class="gray-bg">
	<form class="" id="">
		<div class="contact-us">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<label for="name">YOUR NAME *</label>
				<div>
					<input type="text" class="form-input name" id="name"/>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<label for="email">EMAIL *</label>
				<div>
					<input type="email" class="form-input email" id="email" placeholder="email address">
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<label for="phone">PHONE *</label>
				<div>
					<input type="tel" class="form-input phone" id="phone" placeholder="phone number">
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<label for="subject">SUBJECT</label>
				<div>
					<input type="text" class="form-input subject" id="subject"/>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<label for="message">MESSAGE</label>
				<div>
					<textarea class="form-input message" id="message" rows="4"></textarea>
				</div>
			</div>
		</div>
	</form>
</div>
<?php

wp_link_pages( array(
	'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'new-york-bakery' ),
	'after'  => '</div>',
) );
?>

<?php if ( get_edit_post_link() ) : ?>
	<footer class="entry-footer" style="display: none;">
		<?php
		edit_post_link(
			sprintf(
				wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'new-york-bakery' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);
		?>
	</footer><!-- .entry-footer -->
<?php endif; ?>

<!-- #post-<?php the_ID(); ?> -->
