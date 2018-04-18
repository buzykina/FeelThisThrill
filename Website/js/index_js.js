var clock;

	$(document).ready(function() {

	// Grab the current date
	var currentDate = new Date();

	// Set some date in the past. In this case, it's always been since Jan 1
	var pastDate  = new Date("August 20, 2018 20:00:00");

	// Calculate the difference in seconds between the future and current date
	var diff = pastDate.getTime() / 1000 - currentDate.getTime() / 1000 ;

	// Instantiate a coutdown FlipClock
	clock = $('#clock').FlipClock(diff, {
		clockFace: 'DailyCounter',
		countdown: true
	});
});
jQuery(document).ready(function($){
	
	$('a.scroll-link').click(function(e){
		e.preventDefault();
		$id = $(this).attr('href');
		$('body,html').animate({
			scrollTop: $($id).offset().top -20
		}, 750);
	});
	
});
    