require('./bootstrap')

import Alpine from 'alpinejs';
import {createApp} from 'vue';
import images from './components/Images.vue';

window.Alpine = Alpine;
const app = createApp({})

app.component('images', images);
app.mount("#app")

const burger = document.querySelector('.header__burger');
const menu = document.querySelector('.header__menu_mobile');


burger.addEventListener('click', () => {
    menu.classList.toggle('header__menu_inactive');
    burger.classList.toggle('header__burger--active');
})


let position = 0;
const btnLeft = document.querySelector('.slider__button_left');
const btnRight = document.querySelector('.slider__button_right');
const sliderBlock = document.querySelector('.slider-block');
const sliderImage = document.querySelectorAll('.slider-block__photo');


const next = () => {
    btnRight.addEventListener('click', () => {
        position++;
        btnNone();
        scrollingPhoto();
    });
};

const back = () => {
    btnLeft.addEventListener('click', () => {
        position--;
        scrollingPhoto();
        btnNone();
    });
};

const scrollingPhoto = () => {
    const itemWidth = sliderBlock.clientWidth;
    sliderImage.forEach((elem) => {
        elem.style.transform = `translateX(${itemWidth * position}px)`;
    });
};

const btnNone = () => {
    const sliderImageCount = sliderImage.length;
    if (position === 0) {
        btnRight.style.opacity = 0.2;
        btnRight.disabled = true;
    } else {
        btnRight.style.opacity = 1;
        btnRight.disabled = false;
    }

    if (position === -sliderImageCount + 1) {
        btnLeft.style.opacity = 0.2;
        btnLeft.disabled = true;
    } else {
        btnLeft.style.opacity = 1;
        btnLeft.disabled = false;
    }
};

if (document.querySelector('.slider')) {
    next();
    back();
    btnNone();
}


Alpine.start();












