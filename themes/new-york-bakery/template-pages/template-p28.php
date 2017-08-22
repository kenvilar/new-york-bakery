<?php
/*
 * Template Name: P28 Foods
 * */

get_header(); ?>

	<div class="main-content">
		<?php
		if ( have_posts() ) : while ( have_posts() ) : the_post();
			the_content();
		endwhile; endif;
		?>
	</div>

<?php get_footer();
