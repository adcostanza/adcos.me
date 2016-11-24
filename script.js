$.fn.scrollTo = function( target, options, callback ){
  if(typeof options == 'function' && arguments.length == 2){ callback = options; options = target; }
  var settings = $.extend({
    scrollTarget  : target,
    offsetTop     : 50,
    duration      : 500,
    easing        : 'swing'
  }, options);
  return this.each(function(){
    var scrollPane = $(this);
    var scrollTarget = (typeof settings.scrollTarget == "number") ? settings.scrollTarget : $(settings.scrollTarget);
    var scrollY = (typeof scrollTarget == "number") ? scrollTarget : scrollTarget.offset().top + scrollPane.scrollTop() - parseInt(settings.offsetTop);
    scrollPane.animate({scrollTop : scrollY }, parseInt(settings.duration), settings.easing, function(){
      if (typeof callback == 'function') { callback.call(this); }
    });
  });
}

$(document).ready(function() {
	$('.mlink').click(function() {
		id = $(this).attr('id');
		$('body').scrollTo('.'+id);
	});
	$('#banner ul li').click(function() {
		id = $(this).attr('href');
		$('body').scrollTo('.'+id);
		
	});

	$('.ed, .home, .skills, .exp').height($(window).height());
	
	sc = 0;
	current = 0;
	nav = ['home','ed','skills','exp'];
	
	
});