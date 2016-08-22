jQuery(document).ready(function() {
	if ( jQuery('.top-bar-menu').length ) {
	var nav = responsiveNav(".top-bar-menu", { 
  animate: true, // Boolean: Use CSS3 transitions, true or false
  transition: 284, // Integer: Speed of the transition, in milliseconds
  label: "", // String: Label for the navigation toggle
  insert: "before", // String: Insert the toggle before or after the navigation
  openPos: "relative", // String: Position of the opened nav, relative or static
});
}
jQuery ('.menu-toggle').click(function(e){
	jQuery('#primary').toggleClass('nav-toggled');
})
if (window.innerWidth > 672) {
	console.log (jQuery('.simcal-fullcal').attr('data-default-view'));
	jQuery('.simcal-fullcal').attr('data-default-view', 'month');
	//jQuery('.simcal-fullcal').fullCalendar( 'changeView', 'month' );
}
})