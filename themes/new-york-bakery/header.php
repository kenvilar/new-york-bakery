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

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	
	<?php wp_head();
	
	if ( get_field( 'page_css' ) ) :
		require get_template_directory() . '/inc/custom-page-css.php';
	endif; ?>
</head>

<body <?php body_class(); ?>>
<header role="banner" class="header-banner">
	<nav id="navbar-primary" class="navbar" role="navigation">
		<div class="container-fluid">
			<!--For mobile side pull left to right-->
			<div class="navbar-inverse side-collapse in">
				<nav role="navigation" class="navbar-collapse">
					<!--<ul class="nav navbar-nav">
						<li><a href="">Product Development</a></li>
						<li><a href="">Distribution</a></li>
						<li><a href="">Private Label</a></li>
						<li><a href="">P28</a></li>
						<li><a href="">About Us</a></li>
						<li><a href="">Contact</a></li>
					</ul>-->
					<?php
					wp_nav_menu( array(
						'menu'            => '',
						'container'       => 'span',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => '',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>',
						'item_spacing'    => 'discard',
						'depth'           => 0,
						'walker'          => '',
						'theme_location'  => 'menu-1',
					) );
					?>
				</nav>
			</div>
			<!--Display only on Desktop HD-->
			<div class="collapse navbar-collapse menu-hd">
				<ul class="nav navbar-nav">
					<li class="active">
						<?php the_custom_logo(); ?>
					</li>
					<ul class="nav navbar-nav navbar-right menu-hd-right menus">
						<li class="search-menu-hd">
							<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
								<input id="search" type="search" class="search-field"
								       placeholder="<?php echo esc_attr_x( 'search', 'placeholder' ) ?>"
								       value="<?php echo get_search_query() ?>" name="s"/>
								<input type="submit" class="search-submit"
								       value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>"/>
							</form>
						</li>
						<!--<ul class="nav navbar-nav">
							<li><a href="">Product Development</a></li>
							<li><a href="">Distribution</a></li>
							<li><a href="">Private Label</a></li>
							<li><a href="">P28</a></li>
							<li><a href="">About Us</a></li>
							<li><a href="">Contact</a></li>
						</ul>-->
						<?php
						wp_nav_menu( array(
							'menu'            => '',
							'container'       => 'span',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => '',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>',
							'item_spacing'    => 'discard',
							'depth'           => 0,
							'walker'          => '',
							'theme_location'  => 'menu-1',
						) );
						?>
					</ul>
				</ul>
			</div>
			<!--Display only on width 1023px and below-->
			<div class="collapse navbar-collapse menu-small-screen" style="display: none;">

				<ul class="nav navbar-nav">
					<button type="button" class="navbar-toggle" id="navbar-toggle-open"
					        data-toggle="collapse-side"
					        data-target=".side-collapse"
					        data-target-2=".new-york-bakery-container-fluid">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<button type="button" class="navbar-toggle" id="navbar-toggle-close"
					        data-toggle="collapse-side"
					        data-target=".side-collapse"
					        data-target-2=".new-york-bakery-container-fluid" style="display: none;">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ x-close.svg"
						     alt="menu-close">
					</button>
					<li class="active">
						<?php the_custom_logo(); ?>
					</li>
					<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
						<input id="search" type="search" class="search-field"
						       placeholder="<?php echo esc_attr_x( 'search', 'placeholder' ) ?>"
						       value="<?php echo get_search_query() ?>" name="s"/>
						<input type="submit" class="search-submit"
						       value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>"/>
					</form>
				</ul>
			</div>
		</div>
	</nav>
</header>

<?php
/*wp_nav_menu( array(
	'theme_location' => 'menu-1',
	'menu_id'        => 'primary-menu',
) );
*/ ?>

<div class="new-york-bakery-container-fluid">
	
	<?php if ( get_field( 'top_banner_section' ) == 'top-banner-one-column' ||
	           get_field( 'top_banner_section' ) == 'top-banner-two-columns' ) : ?>

		<div class="banner-section"
		     style="<?php
		     if ( has_post_thumbnail( $post->ID ) ) : ?>
				     background-image: url(<?php echo the_post_thumbnail_url(); ?>);
		     <?php else : ?>
				     background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/landing-page-banner-img.png);
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
	<?php elseif ( get_field( 'top_banner_section' ) == 'no-top-banner' ) : endif; ?>

	<div class="container-fluid main-content">
	