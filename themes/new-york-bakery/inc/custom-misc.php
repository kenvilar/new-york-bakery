<?php

/* disable the wpautop */
remove_filter( 'the_content', 'wpautop' );

/* Change WordPress Logo on Signup Page */
function my_login_logo_one() {
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$image          = wp_get_attachment_image_src( $custom_logo_id, 'full' );
	?>
	<style type="text/css">
		body.login div#login h1 a {
			background-image: url(<?php echo $image[0]; ?>);
			padding-bottom: 100px;
			width: 100% !important;
			height: auto;
			background-size: contain;
			background-position: center center;
		}
	</style>
	<?php
}

add_action( 'login_enqueue_scripts', 'my_login_logo_one' );

// Check if New York Bakery is running in localhost
function newyorkbakery_is_localhost() {
	$server_name = strtolower( $_SERVER['SERVER_NAME'] );
	
	return in_array( $server_name, array( 'localhost', '127.0.0.1', 'newyorkbakery.dev' ) );
}
