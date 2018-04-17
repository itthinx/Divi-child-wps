<?php
add_action( 'wp_footer', 'divi_child_wps', 9999 );
function divi_child_wps() {
?>
<!-- WPS -->
<script type="text/javascript">
if ( typeof jQuery !== 'undefined' ) {
(function($){
	$( document ).ready( function() {
		$( '#et_top_search' ).click( function() {
			var $search_container = $( '.divi_child_wps_search_form_container' );

			if ( $search_container.hasClass('et_pb_is_animating') ) {
				return;
			}

			$search_container.css('display','unset');

			$( '.et_menu_container' ).removeClass( 'et_pb_menu_visible et_pb_no_animation' ).addClass('et_pb_menu_hidden');
			$search_container.removeClass( 'et_pb_search_form_hidden et_pb_no_animation' ).addClass('et_pb_search_visible et_pb_is_animating');
			setTimeout( function() {
				$( '.et_menu_container' ).addClass( 'et_pb_no_animation' );
				$search_container.addClass( 'et_pb_no_animation' ).removeClass('et_pb_is_animating');
			}, 1000);
			$search_container.find( 'input' ).focus();
		});

		function divi_child_wps_hide_search() {
			if ( $( '.divi_child_wps_search_form_container' ).hasClass('et_pb_is_animating') ) {
				return;
			}

			var $search_container = $( '.divi_child_wps_search_form_container' );
			$search_container.css('display','none');

			$( '.et_menu_container' ).removeClass( 'et_pb_menu_hidden et_pb_no_animation' ).addClass( 'et_pb_menu_visible' );
			$( '.divi_child_wps_search_form_container' ).removeClass('et_pb_search_visible et_pb_no_animation' ).addClass( 'et_pb_search_form_hidden et_pb_is_animating' );
			setTimeout( function() {
				$( '.et_menu_container' ).addClass( 'et_pb_no_animation' );
				$( '.divi_child_wps_search_form_container' ).addClass( 'et_pb_no_animation' ).removeClass('et_pb_is_animating');
			}, 1000);
		}

		divi_child_wps_hide_search();

		$( '.et_close_search_field' ).click( function() {
			divi_child_wps_hide_search();
		});
	});
})(jQuery);
}
</script>
<?php
}
