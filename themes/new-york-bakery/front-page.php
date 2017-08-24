<?php

get_header(); ?>

	<div class="main-content">

		<div class="white-bg">
			<div class="front-page-top-content">
				<h4>
					BY INCORPORATING MODERN EFFICIENCIES INTO OUR BAKING AND BY CONTINUALLY TRAINING ALL OF OUR
					EMPLOYEES, OUR BREAD CONSISTENTLY EXCEEDS OUR CUSTOMER’S STANDARDS. AT NEW YORK BAKERY, WE
					METICULOUSLY MONITOR THE ENTIRE BAKING PROCESS TO ENSURE ALL PRODUCTS MEET EXPECTED REQUIREMENTS AND
					QUALITY CONTROL.
				</h4>
			</div>
		</div>
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
			
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
