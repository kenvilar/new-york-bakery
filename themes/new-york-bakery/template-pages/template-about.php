<?php
/*
 * Template Name: About Us
 * */

get_header(); ?>

	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.timelinr-0.9.6.js?ver=<?php esc_attr_e( bloginfo( 'version' ) ); ?>"></script>

	<script>
		jQuery( function( $ ) {
			$().timelinr( { autoPlayDirection : 'forward' } );
		} );
	</script>

<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
	the_content();
endwhile; endif;
?>

	<div class="gray-bg timeline-history" style="padding: 22px 0 25px;">
		
		<?php if ( have_rows( 'timeline_slider' ) ) : ?>
			<h4 class="timeline-header">OUR HISTORY</h4>
			<div id="timeline">
				<ul id="dates">
					<?php while ( have_rows( 'timeline_slider' ) ) : the_row(); ?>
						
						<?php if ( get_sub_field( 'year' ) ) : ?>
							<li><a href="#<?php the_sub_field( 'year' ); ?>">
									<span style="opacity:0;"><?php the_sub_field( 'year' ); ?></span></a>
							</li>
						<?php endif; ?>
					<?php endwhile;
					wp_reset_postdata(); ?>
				</ul>
				<ul id="issues">
					<?php while ( have_rows( 'timeline_slider' ) ) : the_row(); ?>
						<li id="<?php the_sub_field( 'year' ); ?>">
							
							<?php if ( get_sub_field( 'year' ) ) : ?>
								<h1><?php the_sub_field( 'year' ); ?></h1>
							<?php endif; ?>
							
							<?php if ( get_sub_field( 'timeline_content' ) ) : ?>
								<p><?php the_sub_field( 'timeline_content' ); ?></p>
							<?php endif; ?>

						</li>
					<?php endwhile;
					wp_reset_postdata(); ?>
				</ul>
				<!--<div id="grad_left"></div>
				<div id="grad_right"></div>-->
				<a href="#" id="next">+</a>
				<a href="#" id="prev">-</a>
			</div>
		<?php endif;
		wp_reset_query(); ?>

	</div>

<?php
get_footer();
