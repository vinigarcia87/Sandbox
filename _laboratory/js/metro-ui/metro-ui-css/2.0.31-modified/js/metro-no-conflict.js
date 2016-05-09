/* 
 * Resolve name collision between jQuery UI and Twitter Bootstrap
 * 
 * Created on : 26/06/2014, 01:56:25
 * Author     : Vinicius Garcia
 */
(function( $ ) {
	$.widget.bridge('ui_carousel', $.ui.carousel);
	$.widget.bridge('ui_dropdown', $.ui.dropdown);
})( jQuery );