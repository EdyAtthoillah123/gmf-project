import './bootstrap';
import 'flowbite';

document.addEventListener('DOMContentLoaded', () => {
    const carousel = document.querySelector('.carousel');
    const carouselItems = document.querySelectorAll('.carousel-item');
    const prevButton = document.getElementById('prev-btn');
    const nextButton = document.getElementById('next-btn');
    let currentIndex = 0;

    function updateCarousel() {
        const isMobile = window.innerWidth < 768;
        const itemsPerSlide = isMobile ? 1 : 3;
        const marginRight = isMobile ? 0 : 15; // Adjust margin-right based on screen size
        const itemWidth = carouselItems[0].offsetWidth + marginRight; // Adjusted for margin-right
        const offset = -currentIndex * itemWidth;
        carousel.style.transform = `translateX(${offset}px)`;
    }

    prevButton.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateCarousel();
        }
    });

    nextButton.addEventListener('click', () => {
        const isMobile = window.innerWidth < 768;
        const itemsPerSlide = isMobile ? 1 : 3;
        const maxIndex = Math.ceil(carouselItems.length / itemsPerSlide) - 1;
        if (currentIndex < maxIndex) {
            currentIndex++;
            updateCarousel();
        }
    });

    window.addEventListener('resize', updateCarousel);
    updateCarousel();
});