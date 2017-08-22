<?php

// White Background Shortcode
function white_bg_shortcode( $atts, $content = null ) {
	
	$display_white_bg_shortcode = '<div class="white-bg">';
	
	if ( isset( $content ) && "" !== $content ) {
		$content                    = __( $content, 'new-york-bakery' );
		$display_white_bg_shortcode .= $content;
	}
	
	$display_white_bg_shortcode .= '</div>';
	
	return $display_white_bg_shortcode;
	
}

add_shortcode( 'white-bg', 'white_bg_shortcode' );

// Gray Background Shortcode
function gray_bg_shortcode( $atts, $content = null ) {
	
	$display_gray_bg_shortcode = '<div class="gray-bg">';
	
	if ( isset( $content ) && "" !== $content ) {
		$content                   = __( $content, 'new-york-bakery' );
		$display_gray_bg_shortcode .= $content;
	}
	
	$display_gray_bg_shortcode .= '</div>';
	
	return $display_gray_bg_shortcode;
	
}

add_shortcode( 'gray-bg', 'gray_bg_shortcode' );