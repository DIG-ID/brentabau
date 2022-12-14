import Swiper from 'swiper/bundle';

$(function() {

var swiper = new Swiper(".mySwiper", {
    spaceBetween: 0,
    slidesPerView: 5,
    freeMode: true,
    watchSlidesProgress: true,
});
var swiper2 = new Swiper(".mySwiper2", {
    spaceBetween: 10,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    thumbs: {
        swiper: swiper,
    },
});

var swiper_partners = new Swiper(".mySwiper_partners", {
    spaceBetween: 10,
    slidesPerView: 5,
    loop: true,
    autoplay: {
        delay: 1,
        disableOnInteraction: true
    },
    speed: 2000,
});

});