$(document).ready(function() {
	// helper function to hide pink corners around an input project tile
	function hideCorners(projectTile) {
		projectTile.find('.top').hide();
		projectTile.find('.bottom').hide();
	}

	// helper function to show pink corners around an input project tile
	function showCorners(projectTile) {
		projectTile.find('.top').show();
		projectTile.find('.bottom').show();
	}

	// initially, hide the pink corners around each project tile
	$('.project_tile').each(function() {
		hideCorners($(this));
	});

	// when user hovers over a project tile, show pink corners
	// using touchstart and mouseenter for iOS devices
	// otherwise, when user touches tile, the pink corners will show
	// but user won't be taken to the project page
	$('.project_tile').on('touchstart mouseenter', function() {
		showCorners($(this));
	});

	// when user moves away from a project tile, hide pink corners
	$('.project_tile').on('touchmove mouseleave click', function() {
		hideCorners($(this));
	});
});
