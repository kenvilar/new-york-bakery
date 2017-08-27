(function( $ ) {

	$( document ).ready( function() {

		/* scroll and fixed the menu */
		var navbarmenu = $( '.navbar' );
		$( window ).scroll( function() {
			if ( $( this ).scrollTop() > 49 ) {
				navbarmenu.addClass( "fixed" );
			} else {
				navbarmenu.removeClass( "fixed" );
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

	} );

})( jQuery );
