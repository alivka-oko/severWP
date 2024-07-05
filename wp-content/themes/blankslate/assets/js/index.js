import '../scss/style.scss';
import WOW from 'wowjs';
import 'animate.css/animate.min.css';
import 'glightbox/dist/css/glightbox.css';
import '../js/modal.js';

new WOW.WOW().init();

import GLightbox from 'glightbox';

const lightbox = GLightbox({ loop: true })

const rem = parseFloat(getComputedStyle(document.documentElement).fontSize);

import Swiper from 'swiper/bundle';
import 'swiper/swiper-bundle.css';

const swiper_thumbnail = new Swiper(".swiper-thumbnail", {
    slidesPerView: 3,
    loop: false,
    spaceBetween: rem * 2.4
})
const slides = document.querySelectorAll('.swiper-thumbnail .swiper-slide');

slides.forEach((slide, index) => {
    slide.addEventListener('click', () => {
        const activeIndex = swiper_thumbnail.activeIndex;
        const slidesPerView = swiper_thumbnail.params.slidesPerView;

        // Проверяем, если это последний видимый слайд
        if (index === activeIndex + slidesPerView - 1) {
            swiper_thumbnail.slideNext();
        }

        // Проверяем, если это первый видимый слайд
        if (index === activeIndex) {
            swiper_thumbnail.slidePrev();
        }
    });
});

const swiper = new Swiper('.swiper-product', {
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    thumbs: {                       //added
        swiper: swiper_thumbnail,   //added
    },
});

document.addEventListener('DOMContentLoaded', function () {
    const burgerMenu = document.getElementById('burger-menu');
    const menuBlock = document.getElementById('menu-block');

    burgerMenu.addEventListener('click', function () {
        menuBlock.classList.toggle('active');
        burgerMenu.classList.toggle('active');
    });
});