$(document).ready(function() {
	// initially, hide the pink corners around each image tile
	$('.top').hide();
	$('.bottom').hide();

	// when user hovers over an image tile,
	// show pink corners
	$('.tile_menu_item').hover(
		function() {
			$('.top').show();
			$('.bottom').show();
		},
		function() {
			$('.top').hide();
			$('.bottom').hide();
		}
	);
});
