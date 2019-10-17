// Toggle menu
$(function() {
    $(".menuButtonWrap").click(function(e){
        $(".main-menu").toggleClass("open");
        	e.stopPropagation();
    });
});
$(function() {
    $("#closeMenu").click(function(e){
        $(".main-menu").toggleClass("open");
        	e.stopPropagation();
    });
});
// Hamburger menu animation
$(function() {
    $(".menuButtonWrap").click(function(e){
        $(".hamburger").toggleClass("is-active");
    });
});
$(function() {
    $("#closeMenu").click(function(e){
        $(".hamburger").toggleClass("is-active");
    });
});
// Toggle search
$(function() {
    $("#searchWrap").click(function(e){
        $("#searchFormWrap").toggleClass("searchOpen");
        	e.stopPropagation();
    });
});
// Hide main navigation on scroll
$(document).ready(function () {

  'use strict';

   var c, currentScrollTop = 0,
       navbar = $('.site-header');

   $(window).scroll(function () {
      var a = $(window).scrollTop();
      var b = navbar.height();

      currentScrollTop = a;

      if (c < currentScrollTop && a > b + b) {
        navbar.addClass("scrollUp");
      } else if (c > currentScrollTop && !(a <= b)) {
        navbar.removeClass("scrollUp");
      }
      c = currentScrollTop;
  });

});

// detect IE and display an error message prompting users to upgrade to a modern browser
/*
if (navigator.appName == 'Microsoft Internet Explorer' || !!(navigator.userAgent.match(/Trident/) || navigator.userAgent.match(/rv:11/))) {
  document.write('<p style="text-align: center; position: relative; z-index: 99999; background-color: #f4a81d; color: #000000;">You are using a browser no longer supported by Microsoft. For the best and most secure viewing experience, please use a modern browser like <a href="https://www.google.com/chrome/" target="_blank" rel="noreferrer" style="color: #000000;">Chrome</a> or <a href="https://www.mozilla.org/en-US/firefox/new/" target="_blank" rel="noreferrer" style="color: #000000;">Firefox</a>.</p>');
}
*/
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
