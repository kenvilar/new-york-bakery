<?php

get_header(); ?>

	<div class="container-fluid main-content">
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

		<div class="gray-bg">
			<h4>FROZEN BREAD PROGRAM</h4>
			<p>We proudly offer our products through frozen delivery with a major frozen distributor, Sysco, as well as
				other major distributors. Already have a frozen distributor you use? No worries. We can work with any
				frozen distributor of your choosing. Our products can be had conveniently through this method of
				distribution to ensure a much longer shelf life of freshness.</p>
		</div>

	</div>

<?php get_footer();
