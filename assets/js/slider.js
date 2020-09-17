const slideContainer = document.querySelector('.carousel__wrapper--left');
const slide = document.querySelector('.slides');
const nextBtn = document.querySelector('#next-btn');
const prevBtn = document.querySelector('#prev-btn');
const interval = 3000;

let slides = document.querySelectorAll('.slide');
let index = 1;
let slideId;

const firstClone = slides[0].cloneNode(true);
const lastClone = slides[slides.length - 1].cloneNode(true);

firstClone.id = 'fisrt-clone';
lastClone.id = 'last-clone';

slide.append(firstClone);
slide.prepend(lastClone);

const slideWidth = slides[index].clientWidth;

slide.style.transform = `translateX(${-slideWidth * index}px)`;

// Slide Auto
const startSlide = () => {
    slideId = setInterval(() => {
        moveToNextSlide();
    }, interval);
};

const getSlides = () => slides = document.querySelectorAll('.slide');

slide.addEventListener('transitionend', () => {
    getSlides();
    if (slides[index].id === firstClone.id) {
        slide.style.transition = 'none';
        index = 1;
        slide.style.transform = `translateX(${-slideWidth * index}px)`;
    }
    if (slides[index].id === lastClone.id) {
        slide.style.transition = 'none';
        index = slide.length - 2;
        slide.style.transform = `translateX(${-slideWidth * index}px)`;
    }
});

const moveToNextSlide = () => {
    getSlides();
    if (index >= slides.length - 1) return;
    index++;
    slide.style.transform = `translateX(${-slideWidth * index}px)`;
    slide.style.transition = '.7s';
}

const moveToPreviousSlide = () => {
    if (index <= 0) return;
    index--;
    slide.style.transform = `translateX(${-slideWidth * index}px)`;
    slide.style.transition = '.7s';
}

// Stop the Slider
slideContainer.addEventListener('mouseenter', () => {
    clearInterval(slideId);
});
// Start Slide
slideContainer.addEventListener('mouseleave', startSlide);

// Button Navigation
nextBtn.addEventListener('click', moveToNextSlide);
prevBtn.addEventListener('click', moveToPreviousSlide);
startSlide();