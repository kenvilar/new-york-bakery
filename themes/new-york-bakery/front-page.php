<?php

get_header(); ?>

	<div class="main-content front-page">

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

		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-md-6 col-sm-12 col-xs-12">
					<div class="front-page-card">
						<a href=""><div class="front-page-card-bg-img"
						     style="background-image: url(http://127.0.0.1/new-york-bakery/wp-content/themes/new-york-bakery/assets/images/front-page-product-development.jpg);
									height: 237px;">
							<span class="plus-for-hover">
								<img src="<?php echo get_template_directory_uri() . '/assets/images/plus.svg'; ?>"/>
							</span>
							<span class="o-for-hover" style="display: none;">
								<img src="<?php echo get_template_directory_uri() . '/assets/images/open.png'; ?>"/>
							</span>
						</div></a>
						<h4>PRODUCT DEVELOPMENT</h4>
						<p><a href="">learn more</a></p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-md-6 col-sm-12 col-xs-12">
					<div class="front-page-card">
						<a href=""><div class="front-page-card-bg-img"
						     style="background-image: url(http://127.0.0.1/new-york-bakery/wp-content/themes/new-york-bakery/assets/images/front-page-product-development.jpg);
									height: 237px;">
							<span class="plus-for-hover">
								<img src="<?php echo get_template_directory_uri() . '/assets/images/plus.svg'; ?>"/>
							</span>
							<span class="o-for-hover" style="display: none;">
								<img src="<?php echo get_template_directory_uri() . '/assets/images/open.png'; ?>"/>
							</span>
						</div></a>
						<h4>PRODUCT DEVELOPMENT</h4>
						<p><a href="">learn more</a></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-md-6 col-sm-12 col-xs-12">
					<div class="front-page-card">
						<a href=""><div class="front-page-card-bg-img"
						     style="background-image: url(http://127.0.0.1/new-york-bakery/wp-content/themes/new-york-bakery/assets/images/front-page-product-development.jpg);
									height: 237px;">
							<span class="plus-for-hover">
								<img src="<?php echo get_template_directory_uri() . '/assets/images/plus.svg'; ?>"/>
							</span>
							<span class="o-for-hover" style="display: none;">
								<img src="<?php echo get_template_directory_uri() . '/assets/images/open.png'; ?>"/>
							</span>
						</div></a>
						<h4>PRODUCT DEVELOPMENT</h4>
						<p><a href="">learn more</a></p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-md-6 col-sm-12 col-xs-12">
					<div class="front-page-card">
						<a href=""><div class="front-page-card-bg-img"
						     style="background-image: url(http://127.0.0.1/new-york-bakery/wp-content/themes/new-york-bakery/assets/images/front-page-product-development.jpg);
									height: 237px;">
							<span class="plus-for-hover">
								<img src="<?php echo get_template_directory_uri() . '/assets/images/plus.svg'; ?>"/>
							</span>
							<span class="o-for-hover" style="display: none;">
								<img src="<?php echo get_template_directory_uri() . '/assets/images/open.png'; ?>"/>
							</span>
						</div></a>
						<h4>PRODUCT DEVELOPMENT</h4>
						<p><a href="">learn more</a></p>
					</div>
				</div>
			</div>
		</div>
		<div style="clear:both;"></div>
		<br>

	</div>

<?php get_footer();
