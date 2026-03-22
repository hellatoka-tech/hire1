document.addEventListener("DOMContentLoaded", function () {
    const toggler = document.querySelector('.navbar-toggler');
    const menu = document.querySelector('#navbarNav');

    toggler.addEventListener('click', function () {
        menu.classList.toggle('show');
    });
});


let currentIndex = 0;

function slideTestimonials() {
  const slides = document.querySelector('.testimonial-slide');
  const testimonials = document.querySelectorAll('.testimonial');
  const slideWidth = testimonials[0].offsetWidth + 30;
  currentIndex++;

  if (currentIndex >= testimonials.length) {
    currentIndex = 0;
  }

  slides.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
}

setInterval(slideTestimonials, 3000);