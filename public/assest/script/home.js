$(document).ready(function(){
    var slideIndex = 0;
    var slides = $('.slide');
    var totalSlides = slides.length;
  
    function showSlide(index) {
      slides.hide();
      slides.eq(index).show();
    }
  
    function nextSlide() {
      slideIndex = (slideIndex + 1) % totalSlides;
      showSlide(slideIndex);
    }
  
    function prevSlide() {
      slideIndex = (slideIndex - 1 + totalSlides) % totalSlides;
      showSlide(slideIndex);
    }
  
    $('.next').click(nextSlide);
    $('.prev').click(prevSlide);
  
    showSlide(slideIndex);
  });
  