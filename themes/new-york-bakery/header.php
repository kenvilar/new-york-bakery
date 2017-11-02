<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package New_York_Bakery
 */

/*header( "Cache-Control: must-revalidate" );

$offset = 60 * 60 * 24 * 1; //one day
$expStr = "Expires: " . gmdate( "D, d M Y H:i:s", time() + $offset ) . " GMT";
header( $expStr );*/

?>
<!doctype html>
<html <?php language_attributes(); ?> style="margin-top: 0 !important;">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="theme-color" content="#292929"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	
	<?php wp_head();
	
	if ( get_field( 'page_css' ) ) :
		require get_template_directory() . '/inc/custom-page-css.php';
	endif; ?>
</head>

<body <?php body_class(); ?>>

<?php require 'layouts/navigation.php'; ?>

<div class="newyorkbakery-pre-con"></div>

<div class="new-york-bakery-container-fluid">
	
	<?php if ( is_home() || is_front_page() ) :
		putRevSlider( 'home_video_slider', 'homepage' );
	else : ?>
		<?php if ( get_field( 'top_banner_section' ) == 'top-banner-one-column' ||
		           get_field( 'top_banner_section' ) == 'top-banner-two-columns' ) : ?>

			<div class="banner-section"
			     style="<?php
			     if ( has_post_thumbnail( $post->ID ) ) : ?>
					     background-image: url(<?php echo the_post_thumbnail_url(); ?>);
			     <?php else : ?>
					     background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/landing-page-banner-img.jpg);
			     <?php endif; ?>">

				<div class="container-fluid">
					<?php if ( get_field( 'top_banner_section' ) == 'top-banner-one-column' ) : ?>
						<div class="row top-banner-one-column">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<?php if ( get_field( 'top_banner_one_column_content' ) ) :
									the_field( 'top_banner_one_column_content' );
								else : ?>
									<?php the_title( '<h1><strong>', '</strong></h1>' ); ?>
								<?php endif; ?>
							</div>
						</div>
					<?php elseif ( get_field( 'top_banner_section' ) == 'top-banner-two-columns' ) : ?>
						<div class="row top-banner-two-columns">
							
							<?php if ( get_field( 'top_banner_two_columns_second_content' ) ) : ?>

								<div class="col-lg-1 col-md-2"><h3></h3></div>
								<div class="col-lg-5 col-md-4 col-sm-6 col-xs-12">
									<?php if ( get_field( 'top_banner_two_columns_first_content' ) ) :
										the_field( 'top_banner_two_columns_first_content' );
									else :
										the_title( '<h1 class="entry-title">', '</h1>' );
									endif; ?>
								</div>
								<div class="col-lg-5 col-md-4 col-sm-6 col-xs-12">
									<?php the_field( 'top_banner_two_columns_second_content' ); ?>
								</div>
							
							<?php else : ?>

								<div class="col-lg-1"><h3></h3></div>
								<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
									<?php if ( get_field( 'top_banner_two_columns_first_content' ) ) :
										the_field( 'top_banner_two_columns_first_content' );
									else :
										the_title( '<h1 class="entry-title">', '</h1>' );
									endif; ?>
								</div>
							
							<?php endif; ?>

							<div class="col-lg-1 col-md-2"><h3></h3></div>

						</div>
					<?php endif; ?>
				</div>

			</div>
		<?php elseif ( get_field( 'top_banner_section' ) == 'no-top-banner' ) :
			echo '';
		endif; ?>
	<?php endif; ?>

	<div class="container-fluid main-content">
	