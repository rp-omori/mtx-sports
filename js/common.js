"use strict";

const hamburger = document.querySelector('.header__mobile-nav');
const hamburgerBtn = document.querySelector('.header__hamburger');
// const hamburgerBg = document.querySelector('.header__hamburger-bg');
const headerLink = document.querySelectorAll('.header__item');
let isHamburgerOpen = false;
hamburgerBtn.addEventListener('click', e => {
  if (isHamburgerOpen) {
    document.body.style.overflow = 'auto';
    hamburger.classList.remove('header__mobile-nav--active');
    // hamburgerBg.classList.remove('header__hamburger-bg--active');
    isHamburgerOpen = false;
  } else {
    document.body.style.overflow = 'hidden';
    hamburger.classList.add('header__mobile-nav--active');
    // hamburgerBg.classList.add('header__hamburger-bg--active');
    isHamburgerOpen = true;
  }
})

headerLink.forEach(item => {
  item.addEventListener('click', () => {
    // document.body.style.overflow = 'auto';
    // hamburger.classList.remove('header__mobile-nav--active');
    // hamburgerBg.classList.remove('header__hamburger-bg--active');
  })
})

$('.js-header-drawer').on('click', function () {
  if (window.matchMedia('(max-width: 768px)').matches) {
    let toggleMenu = $(this).next('.header__drawer-list')
    $(this).toggleClass('is-active')
    toggleMenu.slideToggle();
  } else {
    return;
  }
})
