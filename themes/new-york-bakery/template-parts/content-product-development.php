<?php
/*
 * Product Development
 * */
?>

<?php if ( have_rows( 'product_development_cards' ) ) : while ( have_rows( 'product_development_cards' ) ) : the_row(); ?>
	<!--Desktop-->
	<div class="row custom-row-margin-bottom product-development-cards">
		
		<?php if ( get_sub_field( 'first_column_card_image' ) && get_sub_field( 'first_column_card_title' ) ) : ?>

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

				<div class="product-development-card-image"
				     style="background-image: url(<?php the_sub_field( 'first_column_card_image' ); ?>)">
					<?php if ( get_sub_field( 'first_column_icon' ) ) : ?>
						<span class="product-development-icon step size-24">
							<i class="icon <?php the_sub_field( 'first_column_icon' ); ?>"></i>
						</span>
					<?php endif; ?>
				</div>
				
				<?php the_sub_field( 'first_column_card_title' ); ?>
				
				<?php the_sub_field( 'first_column_card_content' ); ?>

			</div>
		<?php endif; ?>
		
		<?php if ( get_sub_field( 'second_column_card_image' ) && get_sub_field( 'second_column_card_title' ) ) : ?>

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

				<div class="product-development-card-image"
				     style="background-image: url(<?php the_sub_field( 'second_column_card_image' ); ?>)">
					<?php if ( get_sub_field( 'second_column_icon' ) ) : ?>
						<span class="product-development-icon step size-24">
							<i class="icon <?php the_sub_field( 'second_column_icon' ); ?>"></i>
						</span>
					<?php endif; ?>
				</div>
				
				<?php the_sub_field( 'second_column_card_title' ); ?>
				
				<?php the_sub_field( 'second_column_card_content' ); ?>

			</div>
		
		<?php endif; ?>

	</div>

	<!--Mobile-->
	<div class="row custom-row-margin-bottom product-development-cards mobile">
		
		<?php if ( get_sub_field( 'first_column_card_image' ) && get_sub_field( 'first_column_card_title' ) ) : ?>

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 product-development-single-card">
				<?php if ( get_sub_field( 'first_column_icon' ) ) : ?>
					<span class="product-development-icon step size-48">
						<i class="icon <?php the_sub_field( 'first_column_icon' ); ?>"></i>
					</span>
				<?php endif; ?>

				<span class="first-column-card-title"><?php the_sub_field( 'first_column_card_title' ); ?></span>

				<div class="product-development-toggle-show-content">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-down.png" alt="icon">
				</div>

				<div class="product-development-toggle-content" style="display: none;">
					<div class="product-development-card-image"
					     style="background-image: url(<?php the_sub_field( 'first_column_card_image' ); ?>)">
					</div>

					<span class="content"><?php the_sub_field( 'first_column_card_content' ); ?></span>

					<div class="product-development-toggle-hide-content">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-up.png" alt="icon">
					</div>
				</div>

			</div>
		<?php endif; ?>
		
		<?php if ( get_sub_field( 'second_column_card_image' ) && get_sub_field( 'second_column_card_title' ) ) : ?>

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 product-development-single-card">
				<?php if ( get_sub_field( 'second_column_icon' ) ) : ?>
					<span class="product-development-icon step size-48">
							<i class="icon <?php the_sub_field( 'second_column_icon' ); ?>"></i>
						</span>
				<?php endif; ?>

				<span class="first-column-card-title"><?php the_sub_field( 'second_column_card_title' ); ?></span>

				<div class="product-development-toggle-show-content">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-down.png" alt="icon">
				</div>

				<div class="product-development-toggle-content" style="display: none;">
					<div class="product-development-card-image"
					     style="background-image: url(<?php the_sub_field( 'second_column_card_image' ); ?>)">
					</div>

					<span class="content"><?php the_sub_field( 'second_column_card_content' ); ?></span>

					<div class="product-development-toggle-hide-content">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-up.png" alt="icon">
					</div>
				</div>

			</div>
		
		<?php endif; ?>

	</div>
<?php endwhile; endif;
wp_reset_query(); ?>

