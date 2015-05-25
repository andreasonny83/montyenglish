$(document).ready(function() {
	$( '.toggle-nav' ).click( function() {
		toggleNav();
	});

	$( '#close_button' ).click( function() {
		toggleNav();
		return 0;
	});

	$( '#responsive_menu .menu-item' ).click( function() {
		var that = $(this);
		if( $(this).children().hasClass( 'sub-menu' )) {
			that.toggleClass( 'open' );
		}
	});

	if ( $( '.contact_message' ).length ) {
		setTimeout( function() {
			$( '.contact_message' ).fadeOut( 2000 );
		}, 2000 );
	}

});

/*========================================
=            CUSTOM FUNCTIONS            =
========================================*/

function toggleNav() {
	$( 'body,html' ).scrollTop( 0 );
	$( '#site-wrapper' ).toggleClass( 'show-nav' );
}