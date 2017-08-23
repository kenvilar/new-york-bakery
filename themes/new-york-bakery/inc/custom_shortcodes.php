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

//Grid Columns
function new_york_bakery_grid_column_shortcode( $atts, $content = null ) {
	
	$atts = shortcode_atts(
		array(
			'class' => 'col--lg-12 col-md-12 col-sm-12 col-xs-12',
		),
		$atts,
		'grid'
	);
	
	if ( "" === $atts['class'] ) {
		$atts['class'] = 'col--lg-12 col-md-12 col-sm-12 col-xs-12';
	}
	
	$display_grid_column = '<div';
	
	if ( isset( $atts['class'] ) || "" !== $atts['class'] ) :
		$display_grid_column .= ' class="' . $atts['class'] . '">';
	else :
		$display_grid_column .= ' class="' . $atts['class'] . '">';
	endif;
	
	if ( isset( $content ) || "" !== $content ) {
		$display_grid_column .= do_shortcode( $content );
	}
	
	$display_grid_column .= '</div>';
	
	return $display_grid_column;
	
}

add_shortcode( 'grid', 'new_york_bakery_grid_column_shortcode' );

//Empty Space
function new_york_bakery_empty_space( $atts ) {
	
	$atts = shortcode_atts(
		array(
			'height' => '10',
		),
		$atts,
		'empty_space'
	);
	
	if ( "" === $atts['height'] ) {
		$atts['class'] = '10';
	}
	
	$display_empty_space = '<div';
	
	if ( isset( $atts['height'] ) || "" !== $atts['height'] ) :
		$display_empty_space .= ' style="height:' . $atts['height'] . 'px;">';
	else :
		$display_empty_space .= ' style="height:' . $atts['height'] . 'px;">';
	endif;
	
	$display_empty_space .= '</div>';
	
	return $display_empty_space;
	
}

add_shortcode( 'empty_space', 'new_york_bakery_empty_space' );

//Row for Grids
function new_york_bakery_row_shortcode( $atts, $content = null ) {
	
	$display_class_row = '<div class="row custom-row-margin-bottom">';
	
	if ( isset( $content ) || "" !== $content ) {
		$display_class_row .= do_shortcode( $content );
	}
	
	$display_class_row .= '</div>';
	
	return $display_class_row;
	
}

add_shortcode( 'row', 'new_york_bakery_row_shortcode' );