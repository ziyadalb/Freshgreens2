var slides = document.querySelectorAll('.slide');
var currentSlide = 0;
var slideInterval = setInterval(nextSlide, 5000);

function nextSlide() {
  slides[currentSlide].classList.remove('active');
  currentSlide = (currentSlide + 1) % slides.length;
  slides[currentSlide].classList.add('active');
}

slides.forEach(function(slide) {
  slide.addEventListener('click', function() {
    var link = slide.parentElement.getAttribute('href');
    window.open(link, '_blank');
  });
});