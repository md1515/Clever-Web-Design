/*
 * Put all your JavaScript scripts here. Plugins go elsewhere.
 */
 
// Slider Init

$(function(){
			$('#slides').slides({
				preload: true,
				generateNextPrev: true,
				play: 5500,
				generatePagination: false,
				next: 'next',
				prev: 'prev'
			});
		});