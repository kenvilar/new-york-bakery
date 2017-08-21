(function( $ ) {

	$( document ).ready( function() {
		$( window ).bind( 'scroll', function() {
			if ( $( window ).scrollTop() > 50 ) {
				$( '.navbar' ).addClass( 'fixed' );
			} else {
				$( '.navbar' ).removeClass( 'fixed' );
			}
		} );
	} );

})( jQuery );
