/**
 * Wrapper function to safely use $
 */
function wppsWrapper( $ ) {
	var wpps = {

		/**
		 * Main entry point
		 */
		init: function () {
			wpps.prefix      = 'wpps_';
			wpps.templateURL = $( '#template-url' ).val();
			wpps.ajaxPostURL = $( '#ajax-post-url' ).val();

			wpps.registerEventHandlers();
            $('ul.events').slick({
                centerMode: true,
                centerPadding: '20px',
                variableWidth: true,
                slidesToShow: 1,
				arrows:true,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                    }
                ]
               });
		},

		/**
		 * Registers event handlers
		 */
		registerEventHandlers: function () {
			$( '#example-container' ).children( 'a' ).click( wpps.exampleHandler );
		},

		/**
		 * Example event handler
		 *
		 * @param object event
		 */
		exampleHandler: function ( event ) {
			alert( $( this ).attr( 'href' ) );

			event.preventDefault();
		}
	}; // end wpps

	$( document ).ready( wpps.init );

} // end wppsWrapper()

wppsWrapper( jQuery );
