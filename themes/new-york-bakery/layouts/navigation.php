<?php
/* Navigation Menu */
?>
<header role="banner" class="header-banner">
	<nav id="navbar-primary" class="navbar" role="navigation">
		<div class="container-fluid">
			<!--For mobile side pull left to right-->
			<div class="navbar-inverse side-collapse in">
				<nav role="navigation" class="navbar-collapse">
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

					<div class="navbar-brand-centered">
						<div class="search-menu-hd">
							<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
								<input id="search" type="search" class="search-field"
								       placeholder="<?php echo esc_attr_x( 'search', 'placeholder' ) ?>"
								       value="<?php echo get_search_query() ?>" name="s"/>
								<input type="submit" class="search-submit"
								       value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>"/>
							</form>
						</div>
					</div>

					<li class="active">
						<a href="<?php echo home_url( '/' ); ?>" class="custom-logo-link" rel="home" itemprop="url">
							<?php
							$custom_logo_id = get_theme_mod( 'custom_logo' );
							$image          = wp_get_attachment_image_src( $custom_logo_id, 'full' );
							
							if ( $image ) : ?>
								<img width="1085" height="495"
								     src="<?php echo $image[0]; ?>"
								     class="custom-logo" alt="new-york-bakery-logo" itemprop="logo">
							<?php else : ?>
								<img width="1085" height="495"
								     src="<?php echo get_template_directory_uri() . '/assets/images/new-york-bakery-logo-1.png'; ?>"
								     class="custom-logo" alt="new-york-bakery-logo" itemprop="logo">
							<?php endif; ?>
						</a>
					</li>
					<ul class="nav navbar-nav navbar-right menu-hd-right menus">
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
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/close.svg"
						     alt="menu-close">
					</button>
					<li class="active">
						<a href="<?php echo home_url( '/' ); ?>" class="custom-logo-link" rel="home" itemprop="url">
							<?php
							$custom_logo_id = get_theme_mod( 'custom_logo' );
							$image          = wp_get_attachment_image_src( $custom_logo_id, 'full' );
							
							if ( $image ) : ?>
								<img width="1085" height="495"
								     src="<?php echo $image[0]; ?>"
								     class="custom-logo" alt="new-york-bakery-logo" itemprop="logo">
							<?php else : ?>
								<img width="1085" height="495"
								     src="<?php echo get_template_directory_uri() . '/assets/images/new-york-bakery-logo-1.png'; ?>"
								     class="custom-logo" alt="new-york-bakery-logo" itemprop="logo">
							<?php endif; ?>
						</a>
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
