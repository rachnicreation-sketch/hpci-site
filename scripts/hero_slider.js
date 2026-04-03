document.addEventListener('DOMContentLoaded', () => {
    const slides = document.querySelectorAll('.hero-slide');
    const dotsContainer = document.querySelector('.hero-dots');
    let currentSlide = 0;
    let slideInterval;

    if (!slides.length || !dotsContainer) return;

    // Create dots
    slides.forEach((_, index) => {
        const dot = document.createElement('div');
        dot.classList.add('hero-dot');
        if (index === 0) dot.classList.add('active');
        dot.addEventListener('click', () => goToSlide(index));
        dotsContainer.appendChild(dot);
    });

    const dots = document.querySelectorAll('.hero-dot');

    function goToSlide(n) {
        slides[currentSlide].classList.remove('active');
        dots[currentSlide].classList.remove('active');
        
        currentSlide = n;
        
        slides[currentSlide].classList.add('active');
        dots[currentSlide].classList.add('active');
        resetInterval();
    }

    function nextSlide() {
        let n = (currentSlide + 1) % slides.length;
        goToSlide(n);
    }

    function resetInterval() {
        clearInterval(slideInterval);
        slideInterval = setInterval(nextSlide, 7000); // 7 seconds
    }

    // Set initial state
    slides[0].classList.add('active');
    
    resetInterval();
});
