(function( $ ) {

	$( document ).ready( function() {

		//Smooth scrolling
		var htmlBody = $( 'html, body' );
		htmlBody.animate( { scrollTop : $( 'body' ).offset().top }, 500 );
		htmlBody.smoothScroll( {
			stepAmount : 80,
			speed      : 50
		} );

		//Animate loader off screen / Logo Display when website load
		$( window ).on( 'load', function() {
			$( ".newyorkbakery-pre-con" ).fadeOut( 'fast' );
		} );

		/* Hover effects in front page cards */
		$( '.learn-more' ).hover( function() {
			$( this ).parents( '.front-page-card' ).last().addClass( 'add-hover-front-page' );
		}, function() {
			$( this ).parents( '.front-page-card' ).last().removeClass( 'add-hover-front-page' );
		} );

		/* scroll and fixed the menu */
		$( window ).bind( 'scroll', function() {
			var navbarmenu = $( '.navbar' );
			var navHeight = $( window ).height() - $( window ).height();
			if ( $( window ).scrollTop() > navHeight ) {
				navbarmenu.addClass( 'fixed' );
			} else {
				navbarmenu.removeClass( 'fixed' );
			}
		} );

		/* Menu Toggle on Mobile */
		var newYorkBakerySideMenu = $( '[data-toggle=collapse-side]' );
		var newYorkBakerySideMenuRes = newYorkBakerySideMenu.attr( 'data-target' );
		var newYorkBakerySideMenuRes2 = newYorkBakerySideMenu.attr( 'data-target-2' );
		newYorkBakerySideMenu.click( function() {
			$( newYorkBakerySideMenuRes ).toggleClass( 'in' );
			$( newYorkBakerySideMenuRes2 ).toggleClass( 'out' );
		} );

		//Hide/show menu icon in mobile
		$( "#navbar-toggle-open" ).click( function() {
			$( "#navbar-toggle-open" ).hide( 1 );
			$( "#navbar-toggle-close" ).show( 1 );
		} );
		$( "#navbar-toggle-close" ).click( function() {
			$( "#navbar-toggle-close" ).hide( 1 );
			$( "#navbar-toggle-open" ).show( 1 );
		} );

		//Mobile Toggle effects on product development page
		var product_development_toggle_show_content = $( ".product-development-toggle-show-content" );
		var product_development_toggle_hide_content = $( ".product-development-toggle-hide-content" );

		product_development_toggle_show_content.click( function() {
			product_development_toggle_show_content.css( 'visibility', 'hidden' );
			$( this ).parent().find( '.product-development-toggle-content' ).slideToggle( 'slow' );
		} );
		product_development_toggle_hide_content.click( function() {
			product_development_toggle_show_content.css( 'visibility', 'visible' );
			$( this ).parent().parent().find( '.product-development-toggle-content' ).slideToggle( 'slow' );
		} );

		//Adjust next and prev timeline icons when width resize
		window.onload = window.onresize = function() {
			var nextAndPrevWidth = window.innerWidth;
			var next = $( '#next' );
			var prev = $( '#prev' );
			//var viewportWidthRatio = window.innerWidth * 0.8; //In case when viewport is used

			//Max Width
			if ( nextAndPrevWidth < 1023 || nextAndPrevWidth === 1023 ) {
				next.css( 'right', ( ( nextAndPrevWidth - ( nextAndPrevWidth / 2 ) ) - 70 ) + 'px' );
				next.css( 'bottom', '300px' );
				prev.css( 'left', ( ( nextAndPrevWidth - ( nextAndPrevWidth / 2 ) ) - 70 ) + 'px' );
				prev.css( 'bottom', '300px' );
			}
			if ( nextAndPrevWidth < 992 || nextAndPrevWidth === 992 ) {
				next.css( 'bottom', '500px' );
				prev.css( 'bottom', '500px' );
			}
			if ( nextAndPrevWidth < 769 ) {
				next.css( 'bottom', '480px' );
				prev.css( 'bottom', '480px' );
			}
			if ( nextAndPrevWidth < 271 ) {
				next.css( 'bottom', '525px' );
				prev.css( 'bottom', '525px' );
			}

			//Min Width
			if ( nextAndPrevWidth > 1024 || nextAndPrevWidth === 1024 ) {
				next.css( 'right', ((nextAndPrevWidth / 2) / 2) / 2 - 50 + 'px' );
				prev.css( 'left', ((nextAndPrevWidth / 2) / 2) / 2 - 50 + 'px' );
			}
			if ( nextAndPrevWidth > 1679 ) {
				next.css( 'right', ((nextAndPrevWidth / 2) / 2) - 50 + 'px' );
				prev.css( 'left', ((nextAndPrevWidth / 2) / 2) - 50 + 'px' );
			}
			if ( nextAndPrevWidth > 2559 ) {
				next.css( 'right', ((nextAndPrevWidth / 2) - 500) + 'px' );
				prev.css( 'left', ((nextAndPrevWidth / 2) - 500) + 'px' );
			}
		};

	} );

})( jQuery );
