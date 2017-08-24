<?php

get_header(); ?>

	<div class="main-content front-page">
		
		<?php if ( get_field( 'front_page_top_content' ) ) : ?>
			<div class="white-bg">
				<div class="front-page-top-content">
					<?php the_field( 'front_page_top_content' ); ?>
				</div>
			</div>
		<?php endif; ?>
		
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
			<?php if ( have_rows( 'row_two_columns' ) ) : ?>

				<div class="row">
					
					<?php if ( have_rows( 'first_column' ) ) : ?>

						<div class="col-lg-6 col-md-6 col-md-6 col-sm-12 col-xs-12">
							<div class="front-page-card">
								<?php if ( get_sub_field( 'first_column_link' ) ) : ?>
									<a href="<?php get_sub_field( 'first_column_link' ); ?>">
										<?php if ( get_sub_field( 'first_column_background_image' ) ) : ?>
											<div class="front-page-card-bg-img"
											     style="background-image: url(<?php get_sub_field( 'first_column_background_image' ); ?>);
													     height: 237px;">
												<span class="plus-for-hover">
													<img src="<?php echo get_template_directory_uri() . '/assets/images/plus.svg'; ?>"/>
												</span>
												<span class="o-for-hover" style="display: none;">
													<img src="<?php echo get_template_directory_uri() . '/assets/images/open.png'; ?>"/>
												</span>
											</div>
										<?php endif; ?>
									</a>
								<?php endif; ?>
								<?php if ( get_sub_field( 'first_column_title' ) ) : ?>
									<h4><?php get_sub_field( 'first_column_title' ); ?></h4>
								<?php endif; ?>
								<?php if ( get_sub_field( 'first_column_link' ) ) : ?>
									<p><a href="<?php get_sub_field( 'first_column_link' ); ?>">learn more</a></p>
								<?php endif; ?>
							</div>
						</div>
					
					<?php endif; ?>
					
					<?php if ( have_rows( 'second_column' ) ) : ?>

						<div class="col-lg-6 col-md-6 col-md-6 col-sm-12 col-xs-12">
							<div class="front-page-card">
								<?php if ( get_sub_field( 'second_column_link' ) ) : ?>
									<a href="<?php get_sub_field( 'second_column_link' ); ?>">
										<?php if ( get_sub_field( 'second_column_background_image' ) ) : ?>
											<div class="front-page-card-bg-img"
											     style="background-image: url(<?php get_sub_field( 'second_column_background_image' ); ?>);
													     height: 237px;">
												<span class="plus-for-hover">
													<img src="<?php echo get_template_directory_uri() . '/assets/images/plus.svg'; ?>"/>
												</span>
												<span class="o-for-hover" style="display: none;">
													<img src="<?php echo get_template_directory_uri() . '/assets/images/open.png'; ?>"/>
												</span>
											</div>
										<?php endif; ?>
									</a>
								<?php endif; ?>
								<?php if ( get_sub_field( 'second_column_title' ) ) : ?>
									<h4><?php get_sub_field( 'second_column_title' ); ?></h4>
								<?php endif; ?>
								<?php if ( get_sub_field( 'second_column_link' ) ) : ?>
									<p><a href="<?php get_sub_field( 'second_column_link' ); ?>">learn more</a></p>
								<?php endif; ?>
							</div>
						</div>
					
					<?php endif; ?>

				</div>
			
			<?php endif; ?>
			<!--<div class="row">
				<div class="col-lg-6 col-md-6 col-md-6 col-sm-12 col-xs-12">
					<div class="front-page-card">
						<a href="">
							<div class="front-page-card-bg-img"
							     style="background-image: url(http://127.0.0.1/new-york-bakery/wp-content/themes/new-york-bakery/assets/images/front-page-product-development.jpg);
									height: 237px;">
							<span class="plus-for-hover">
								<img src="<?php /*echo get_template_directory_uri() . '/assets/images/plus.svg'; */ ?>"/>
							</span>
								<span class="o-for-hover" style="display: none;">
								<img src="<?php /*echo get_template_directory_uri() . '/assets/images/open.png'; */ ?>"/>
							</span>
							</div>
						</a>
						<h4>PRODUCT DEVELOPMENT</h4>
						<p><a href="">learn more</a></p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-md-6 col-sm-12 col-xs-12">
					<div class="front-page-card">
						<a href="">
							<div class="front-page-card-bg-img"
							     style="background-image: url(http://127.0.0.1/new-york-bakery/wp-content/themes/new-york-bakery/assets/images/front-page-product-development.jpg);
									height: 237px;">
							<span class="plus-for-hover">
								<img src="<?php /*echo get_template_directory_uri() . '/assets/images/plus.svg'; */ ?>"/>
							</span>
								<span class="o-for-hover" style="display: none;">
								<img src="<?php /*echo get_template_directory_uri() . '/assets/images/open.png'; */ ?>"/>
							</span>
							</div>
						</a>
						<h4>PRODUCT DEVELOPMENT</h4>
						<p><a href="">learn more</a></p>
					</div>
				</div>
			</div>-->
			<!--<div class="row">
				<div class="col-lg-6 col-md-6 col-md-6 col-sm-12 col-xs-12">
					<div class="front-page-card">
						<a href="">
							<div class="front-page-card-bg-img"
							     style="background-image: url(http://127.0.0.1/new-york-bakery/wp-content/themes/new-york-bakery/assets/images/front-page-product-development.jpg);
									height: 237px;">
							<span class="plus-for-hover">
								<img src="<?php /*echo get_template_directory_uri() . '/assets/images/plus.svg'; */ ?>"/>
							</span>
								<span class="o-for-hover" style="display: none;">
								<img src="<?php /*echo get_template_directory_uri() . '/assets/images/open.png'; */ ?>"/>
							</span>
							</div>
						</a>
						<h4>PRODUCT DEVELOPMENT</h4>
						<p><a href="">learn more</a></p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-md-6 col-sm-12 col-xs-12">
					<div class="front-page-card">
						<a href="">
							<div class="front-page-card-bg-img"
							     style="background-image: url(http://127.0.0.1/new-york-bakery/wp-content/themes/new-york-bakery/assets/images/front-page-product-development.jpg);
									height: 237px;">
							<span class="plus-for-hover">
								<img src="<?php /*echo get_template_directory_uri() . '/assets/images/plus.svg'; */ ?>"/>
							</span>
								<span class="o-for-hover" style="display: none;">
								<img src="<?php /*echo get_template_directory_uri() . '/assets/images/open.png'; */ ?>"/>
							</span>
							</div>
						</a>
						<h4>PRODUCT DEVELOPMENT</h4>
						<p><a href="">learn more</a></p>
					</div>
				</div>
			</div>-->
		</div>
		<div style="clear:both;"></div>
		<br>

	</div>

<?php get_footer();
