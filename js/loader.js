$(document).ready(function(){
	 $('html, body').css('overflow', 'hidden');
	 $('.preloader').delay(3000).fadeOut('slow', function(){
           $('html, body').removeAttr('style');
    });
});
$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
});
var navbar = document.querySelector("nav");
var sticky = navbar.offsetTop;

window.onscroll = function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}