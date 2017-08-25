<?php
/*
 * Template Name: About Us
 * */

get_header(); ?>

	<div class="container-fluid main-content">
		<?php
		if ( have_posts() ) : while ( have_posts() ) : the_post();
			the_content();
		endwhile; endif;
		?>
	</div>

	<?php /*if ( get_field( 'about_us_history' ) ) : */?><!--
		<div class="gray-bg">
			<?php /*the_field( 'about_us_history' ); */?>
		</div>
	--><?php /*endif; */?>

<?php get_footer();
