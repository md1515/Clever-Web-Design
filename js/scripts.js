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
		
// FANCYBOX

$(document).ready(function() {

	
	$("a.fancyinit").fancybox({
		'hideOnContentClick': false
	});

	/* Apply fancybox to multiple items */
	
	$("a.group").fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	true
	});
	
	$("a.group2").fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	true
	});
	
});

// FADE IN - FADE OUT

$(function() {
// OPACITY OF BUTTON SET TO 50%
$(".fadeinout").css("opacity","0.5");

// ON MOUSE OVER
$(".fadeinout").hover(function () {

// SET OPACITY TO 100%
$(this).stop().animate({
opacity: 1.0
}, "slow");
},

// ON MOUSE OUT
function () {

// SET OPACITY BACK TO 50%
$(this).stop().animate({
opacity: 0.5
}, "slow");
});
});

// LATEST TWEET

 $(function(){
      $(".tweet").tweet({
        join_text: "auto",
        username: "ChooseClever",
        avatar_size: 48,
        count: 2,
        auto_join_text_default: "We last Tweeted:",
        auto_join_text_ed: "We",
        auto_join_text_ing: "We were",
        auto_join_text_reply: "We mentioned",
        auto_join_text_url: "We linked to: ",
        loading_text: "loading tweets..."
      });
    });
    
// BEFORE-AFTER

$('#compare').beforeAfter({
		animateIntro : true,
	        introDelay : 2000,
	        introDuration : 500,
	        showFullLinks : false
		});
		
// jCOLLAPSE

$(document).ready(function(){
    		$(".collapse").jCollapse({effect: "fade"});                       
		});
		
// TOOL TIPS

$(document).ready(function(){
	$(".tip").jTip();
});

// TABS

$(document).ready(function(){
	$("ul.tabs").jTabs({content: ".tabs_content"});
});