$( () => {
	
	//On Scroll Functionality
	$(window).scroll( () => {
        var logoimg = document.getElementById('logoimg');
		var windowTop = $(window).scrollTop();
		windowTop > 100 ? $('nav').addClass('navShadow') : $('nav').removeClass('navShadow');
		windowTop > 950 ? $('#media').addClass('ending') : $('#media').removeClass('ending');
		windowTop > 100 ? $('#pages').removeClass('gradient') : $('#pages').addClass('gradient');
		windowTop > 100 ? $('ul').css('top','100px') : $('ul').css('top','160px');
		windowTop > 100 ? $('#logo img').addClass('logoresize') : $('#logo img').removeClass('logoresize');
		windowTop > 100 ? logoimg.src="logo/insigne-seule.png" : logoimg.src='logo/logo-MONCLA-expert-automobile.png';
	});
	
	//Click Logo To Scroll To Top
	$('.top').on('click', () => {
		$('html,body').animate({
			scrollTop: 0
		},500);
	});
	
	//Smooth Scrolling Using Navigation Menu
	$('a[href*="#"]').on('click', function(e){
		$('html,body').animate({
			scrollTop: $($(this).attr('href')).offset().top - 100
		},500);
		e.preventDefault();
	});
	
	//Toggle Menu
	$('#menu-toggle').on('click', () => {
		$('#menu-toggle').toggleClass('closeMenu');
		$('ul').toggleClass('showMenu');
		
		$('li').on('click', () => {
			$('ul').removeClass('showMenu');
			$('#menu-toggle').removeClass('closeMenu');
		});
	});
	
});



var slideIndex = 1;
var t;

showSlides(slideIndex);

function plusSlides(n) {    
  slideIndex = slideIndex + n;
  clearTimeout(t);
  showSlides(slideIndex);
  console.log(slideIndex);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {

  var i;
  var slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");

  if (n == undefined) {
    n = ++slideIndex;
  }

  if (n > slides.length) {
    slideIndex = 1
  }

  if (n < 1) {
    slideIndex = slides.length
  }

  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  slides[slideIndex - 1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  t = setTimeout(showSlides, 5000);
}