<?php
/**
 * The template for displaying all single posts
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package New_York_Bakery
 */

get_header(); ?>

	<div class="new-york-bakery-container-fluid">
		<div class="container-fluid main-content">
			<div class="white-bg">
				
				<?php
				while ( have_posts() ) : the_post();
					
					get_template_part( 'template-parts/content', get_post_type() );
					
					the_post_navigation();
					
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				
				endwhile; // End of the loop.
				?>

			</div>
		</div>
	</div>

<?php
get_sidebar();
get_footer();
