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
var animateHTML = function () {
  var elems,
    windowHeight
  var init = function () {
    elems = document.getElementsByClassName('hidden')
    windowHeight = window.innerHeight
    _addEventHandlers()
  }
  var _addEventHandlers = function () {
    window.addEventListener('scroll', _checkPosition)
    window.addEventListener('resize', init)
  }
  var _checkPosition = function () {
    for (var i = 0; i < elems.length; i++) {
      var posFromTop = elems[i].getBoundingClientRect().top
      if (posFromTop - windowHeight <= 0) {
        elems[i].className = elems[i].className.replace('hidden', 'fadeInRight')
      }
    }
  }
  return {
    init: init
  }
}
animateHTML().init();
$(document).ready(function(){
    $("#lineup").hover(function(){
       $('#lineuptext').removeClass('hidden1').addClass('fade-in-left');
    });
    $("#experience").hover(function(){
       $('#experiencetext').removeClass('hidden1').addClass('fadeInRight');
    });
    $("#gifts").hover(function(){
       $('#giftstext').removeClass('hidden1').addClass('fadeInRight');
    });
    $("#ticket").hover(function(){
       $('#tickettext').removeClass('hidden1').addClass('fade-in-left');
    });
});