let slideIndex = 0;
const slides = document.querySelectorAll(".slide");

function moveSlide(n) {
    slideIndex += n;
    if (slideIndex > slides.length - 1) {
        slideIndex = 0;
    } else if (slideIndex < 0) {
        slideIndex = slides.length - 1;
    }
    updateSlider();
}

function updateSlider() {
    const slider = document.querySelector(".slider");
    slider.style.transform = `translateX(-${slideIndex * 100}%)`;
}

// Autoplay the slider
setInterval(function() {
    moveSlide(1);
}, 5000); // Change slide every 5 seconds
