(function( $ ) {

	$( document ).ready( function() {

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
		newYorkBakerySideMenu.click( function( event ) {
			$( newYorkBakerySideMenuRes ).toggleClass( 'in' );
			$( newYorkBakerySideMenuRes2 ).toggleClass( 'out' );
		} );

		//Hide/show menu icon in mobile
		$( "#navbar-toggle-open" ).click( function() {
			$( "#navbar-toggle-open" ).hide( 500 );
			$( "#navbar-toggle-close" ).show( 500 );
		} );
		$( "#navbar-toggle-close" ).click( function() {
			$( "#navbar-toggle-close" ).hide( 500 );
			$( "#navbar-toggle-open" ).show( 500 );
		} );

	} );

})( jQuery );
