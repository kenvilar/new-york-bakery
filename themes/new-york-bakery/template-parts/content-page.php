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

if ( get_field( 'contact_us_shortcode' ) ) : ?>
	<div class="gray-bg contact-form-container"><?php the_field( 'contact_us_shortcode' ) ?></div>
<?php endif;
wp_reset_query();

get_template_part( 'template-parts/content', 'product-development' );

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
