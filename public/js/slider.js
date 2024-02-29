const sliderButtons = document.querySelector('.sliderButtons');
const slider = document.querySelector('.slider');
const countImages = Array.from(document.querySelectorAll('.slider img')); // Convertir a array
const totalImages = countImages.length;

let slideIndex = 0;
let timeTransition = 5000;
let intervalId = startInterval();

function nextImage() {
    slideIndex = (slideIndex + 1) % totalImages;
    let time = slideIndex * -100;
    slider.style.transform = `translateX(${time}%)`;
}

function previewImage() {
    slideIndex = (slideIndex - 1 + totalImages) % totalImages;
    let time = slideIndex * -100;
    slider.style.transform = `translateX(${time}%)`;
}

function startInterval() {
    return setInterval(nextImage, timeTransition);
}

function handleClick(e) {
    e.preventDefault();
    const target = e.target.closest('svg');
    if (!target) return;
    
    if (target.classList.contains('slideRight')) {
        clearInterval(intervalId);
        nextImage();
        intervalId = startInterval();
    }
    
    if (target.classList.contains('slideLeft')) {
        clearInterval(intervalId);
        previewImage();
        intervalId = startInterval();
    }
}

function handleMouseEnter() {
    clearInterval(intervalId);
}

function handleMouseLeave() {
    intervalId = startInterval();
}

sliderButtons.addEventListener('click', handleClick);
// slider.addEventListener('mouseenter', handleMouseEnter);
// slider.addEventListener('mouseleave', handleMouseLeave);
