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

		//jQuery Timeline
		$().timelinr( {
			startAt  : 2
		} );

	} );

})( jQuery );
