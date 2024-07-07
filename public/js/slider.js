document.addEventListener("DOMContentLoaded", () => {
    const slider = document.querySelector('.slider .list');
    let images = document.querySelectorAll('.slider .list img');
    const imageCount = images.length;
    const imageWidth = images[0].offsetWidth;
    const valJump = imageWidth; 
    let current = 1;

    const checkSlide = () => {}

    const autoSlideShow = () => {
        setInterval(() => {
            if (current == imageCount) {
                current = 0;
                slider.scrollLeft = 0;
            } else {
                current++;
                slider.scrollLeft += valJump;
            }
            setTimeout(checkSlide, 600);
        }, 3000);
    };

    autoSlideShow();
});