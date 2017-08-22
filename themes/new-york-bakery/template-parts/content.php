<?php
/**
 * Template part for displaying posts
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package New_York_Bakery
 */

?>

<div id="post-<?php the_ID(); ?>">
	<div class="container-fluid">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="page-title">', '</h1>' );
		else :
			the_title( '<h2 class="page-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		
		if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php new_york_bakery_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php
		endif; ?>
	</div><!-- .entry-header -->

	<div class="container-fluid">
		<?php
		the_content( sprintf(
			wp_kses(
			/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'new-york-bakery' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );
		
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'new-york-bakery' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php new_york_bakery_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</div><!-- #post-<?php the_ID(); ?> -->
