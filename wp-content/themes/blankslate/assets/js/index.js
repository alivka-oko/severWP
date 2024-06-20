import '../scss/style.scss';
import WOW from 'wowjs';
import 'animate.css/animate.min.css';
import 'glightbox/dist/css/glightbox.css';


new WOW.WOW().init();

import GLightbox from 'glightbox';

const lightbox = GLightbox({ loop: true })

import Swiper from 'swiper/bundle';
import 'swiper/swiper-bundle.css';

const swiper_thumbnail = new Swiper(".swiper-thumbnail", {  //added
    slidesPerView: 2,                                       //added
})


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
