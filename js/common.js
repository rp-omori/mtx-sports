"use strict";

const mediaQuery = window.matchMedia('(max-width: 768px)');

const root = document.documentElement;
const header = document.getElementById('header')
const hamburger = document.querySelector('.header__mobile-nav');
const hamburgerBtn = document.querySelector('.header__hamburger');
const headerLink = document.querySelectorAll('.header__item');
let isHamburgerOpen = false;

let headerHeight;

window.addEventListener('resize', () => {
  headerHeight = header.offsetHeight - 10;
  root.style.setProperty('--headerHeight', headerHeight + 'px');
})

hamburgerBtn.addEventListener('click', e => {
  if (isHamburgerOpen) {
    document.body.style.overflow = 'auto';
    hamburger.classList.remove('header__mobile-nav--active');
    isHamburgerOpen = false;
  } else {
    document.body.style.overflow = 'hidden';
    hamburger.classList.add('header__mobile-nav--active');
    isHamburgerOpen = true;
  }
})

headerLink.forEach(item => {
  item.addEventListener('click', () => {
  })
})

$('.js-header-drawer').on('click', function () {
  if (mediaQuery.matches) {
    let toggleMenu = $(this).next('.header__drawer-list')
    $(this).toggleClass('is-active')
    toggleMenu.slideToggle();
  } else {
    return;
  }
})

let scrollSetPosition = 0

window.addEventListener('scroll', (e) => {
  if (!mediaQuery.matches) {
    scrollSetPosition < window.scrollY ? header.classList.add('is-hide') : header.classList.remove('is-hide');
    scrollSetPosition = window.scrollY;
  }
})

window.addEventListener('load', () => {
  headerHeight = header.offsetHeight - 10;
  root.style.setProperty('--headerHeight', headerHeight + 'px');
  // initFooterSwiper();
  // profileToggle();
})

const initFooterSwiper = () => {
  const kvSwiper = new Swiper('.footer-swiper', {
    loop: true,
    loopedSlides: 2,
    slidesPerView: "auto",
    speed: 8000,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
    },
  });
}
