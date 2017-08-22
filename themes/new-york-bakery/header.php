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
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header role="banner" class="header-banner">
	<nav id="navbar-primary" class="navbar" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
				        data-target="#navbar-primary-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!--For mobile-->
			<div class="collapse navbar-collapse menu-list-mobile" id="navbar-primary-collapse">
				<ul class="nav navbar-nav">
					<ul class="nav navbar-nav">
						<li>Product Development</li>
						<li>Distribution</li>
						<li>Private Label</li>
						<li>P28</li>
						<li>About Us</li>
						<li>Contact</li>
					</ul>
				</ul>
			</div>
			<!--Display only on HD-->
			<div class="collapse navbar-collapse menu-hd">
				<ul class="nav navbar-nav">
					<li class="active">
						<?php the_custom_logo(); ?>
					</li>
					<ul class="nav navbar-nav navbar-right menu-hd-right">
						<li>Product Development</li>
						<li>Distribution</li>
						<li>Private Label</li>
						<li>P28</li>
						<li>About Us</li>
						<li>Contact</li>
					</ul>
				</ul>
			</div>
			<!--Display only on width 1023px and below-->
			<div class="collapse navbar-collapse menu-small-screen" style="display: none;">
				<ul class="nav navbar-nav">
					<li class="active">
						<?php the_custom_logo(); ?>
					</li>
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

	<div class="banner-section"
	     style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/landing-page-banner-img.png);">
		<div class="container-fluid">
			<div class="row top-banner-one-column">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h1><strong>Quality is is our Priority #1</strong></h1>
				</div>
			</div>
			<!--<div class="row top-banner-two-columns">
				<div class="col-lg-1 col-md-2"><h3></h3></div>
				<div class="col-lg-5 col-md-4 col-sm-6 col-xs-12">
					<img src="<?php /*echo get_template_directory_uri(); */ ?>/assets/images/p28-food-that-performs.png"
					     alt="" title="" style="height:90px"/>
				</div>
				<div class="col-lg-5 col-md-4 col-sm-6 col-xs-12">
					<img src="<?php /*echo get_template_directory_uri(); */ ?>/assets/images/p28-food-that-performs.png"
					     alt="" title="" style="height:90px"/>
				</div>
				<div class="col-lg-1 col-md-2"><h3></h3></div>
			</div>-->
		</div>
	</div>
