<?php

get_header(); ?>

	<div class="main-content">
		<!--<div class="white-bg">
		
		</div>-->
		<div class="white-bg">
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

	</div>

<?php get_footer();
