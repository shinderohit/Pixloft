function openNav() {
	document.getElementById("myNav").style.width = "100%";
}
function closeNav() {
	document.getElementById("myNav").style.width = "0%";
}
function openNav1() {
	document.getElementById("myNav-1").style.width = "100%";
}
function closeNav1() {
	document.getElementById("myNav-1").style.width = "0%";
}

function mypage() {
  SmoothScroll({ stepSize: 120 });
}

//Waiting for images to be loaded 
$(window).on("load", function() {
  $('#loading').slideUp();
  $('#slides').fadeIn('slow');
  //Prevent having no "active" slide
  var $el = $('.toggle.active');
  if (!$el.length) {
    $('.toggle').first().addClass('active');
  }
});

$('#previous').click(function() {
  var $el = $('.active').prev('.toggle');
  if (!$el.length) //If no previous, s$elect last
  {
    $el = $('.toggle').last();;
  }
  $('.active').removeClass('active');
  $el.addClass('active');
});

$('#next').click(function() {
  var $el = $('.active').next('.toggle');
  if (!$el.length) //If no next, s$elect first
  {
    $el = $('.toggle').first();
  }
  $('.active').removeClass('active');
  $el.addClass('active');
});
