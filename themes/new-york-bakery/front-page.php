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
			<?php if ( have_rows( 'row_two_columns' ) ) : while ( have_rows( 'row_two_columns' ) ) : the_row(); ?>

				<div class="row">

					<div class="col-lg-6 col-md-6 col-md-6 col-sm-12 col-xs-12">
						<div class="front-page-card">
							<?php if ( get_sub_field( 'first_column_link' ) ) : ?>
								<a href="<?php the_sub_field( 'first_column_link' ); ?>">
									<?php if ( get_sub_field( 'first_column_background_image' ) ) : ?>
										<div class="front-page-card-bg-img"
										     style="background-image: url(<?php the_sub_field( 'first_column_background_image' ); ?>);
												     height: 237px;">
											<span class="plus-for-hover">
												<img alt="icon"
												     src="<?php echo get_template_directory_uri() . '/assets/images/plus.svg'; ?>"/>
											</span>
											<span class="o-for-hover" style="display: none;">
												<img alt="icon"
												     src="<?php echo get_template_directory_uri() . '/assets/images/open.png'; ?>"/>
											</span>
										</div>
									<?php endif; ?>
								</a>
							<?php endif; ?>
							<?php if ( get_sub_field( 'first_column_title' ) ) : ?>
								<h4><?php the_sub_field( 'first_column_title' ); ?></h4>
							<?php endif; ?>
							<?php if ( get_sub_field( 'first_column_link' ) ) : ?>
								<p class="learn-more"><a href="<?php the_sub_field( 'first_column_link' ); ?>">learn
										more</a></p>
							<?php endif; ?>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-md-6 col-sm-12 col-xs-12">
						<div class="front-page-card">
							<?php if ( get_sub_field( 'second_column_link' ) ) : ?>
								<a href="<?php the_sub_field( 'second_column_link' ); ?>">
									<?php if ( get_sub_field( 'second_column_background_image' ) ) : ?>
										<div class="front-page-card-bg-img"
										     style="background-image: url(<?php the_sub_field( 'second_column_background_image' ); ?>);
												     height: 237px;">
											<span class="plus-for-hover">
												<img alt="icon"
												     src="<?php echo get_template_directory_uri() . '/assets/images/plus.svg'; ?>"/>
											</span>
											<span class="o-for-hover" style="display: none;">
												<img alt="icon"
												     src="<?php echo get_template_directory_uri() . '/assets/images/open.png'; ?>"/>
											</span>
										</div>
									<?php endif; ?>
								</a>
							<?php endif; ?>
							<?php if ( get_sub_field( 'second_column_title' ) ) : ?>
								<h4><?php the_sub_field( 'second_column_title' ); ?></h4>
							<?php endif; ?>
							<?php if ( get_sub_field( 'second_column_link' ) ) : ?>
								<p class="learn-more"><a href="<?php the_sub_field( 'second_column_link' ); ?>">learn
										more</a></p>
							<?php endif; ?>
						</div>
					</div>

				</div>
			
			<?php endwhile; endif; ?>
		</div>

		<div style="clear:both;"></div>

		<br>

	</div>

<?php get_footer();
