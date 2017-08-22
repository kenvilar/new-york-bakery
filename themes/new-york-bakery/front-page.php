<?php

get_header(); ?>

	<div class="container-fluid main-content">
		<!--<div class="white-bg">
		
		</div>-->
		<?php
		if ( have_posts() ) : while ( have_posts() ) : the_post();
			the_content();
		endwhile;
		else : ?>
			<div class="container">
				<div class="row">
					<p style="text-align:center;"><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				</div>
			</div>
		<?php endif; ?>
	</div>

<?php get_footer();
