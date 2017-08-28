<?php
/*
 * Product Development
 * */
?>

<?php if ( have_rows( 'product_development_cards' ) ) : while ( have_rows( 'product_development_cards' ) ) : the_row(); ?>
	<div class="row custom-row-margin-bottom product-development-cards">
		
		<?php if ( get_sub_field( 'first_column_card_image' ) && get_sub_field( 'first_column_card_title' ) ) : ?>

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

				<div class="product-development-card-image"
				     style="background-image: url(<?php the_sub_field( 'first_column_card_image' ); ?>)"></div>
				
				<?php the_sub_field( 'first_column_card_title' ); ?>
				
				<?php the_sub_field( 'first_column_card_content' ); ?>

			</div>
		<?php endif; ?>
		
		<?php if ( get_sub_field( 'second_column_card_image' ) && get_sub_field( 'second_column_card_title' ) ) : ?>

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

				<div class="product-development-card-image"
				     style="background-image: url(<?php the_sub_field( 'second_column_card_image' ); ?>)"></div>
				
				<?php the_sub_field( 'second_column_card_title' ); ?>
				
				<?php the_sub_field( 'second_column_card_content' ); ?>

			</div>
		
		<?php endif; ?>

	</div>
<?php endwhile; endif;
wp_reset_query(); ?>

