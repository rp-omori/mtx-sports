"use strict";

window.addEventListener('load', () => {
  initSwiper();
  profileToggle();
})

const initSwiper = () => {
  const kvSwiper = new Swiper('.kv__swiper', {
    slidePerView: 1,
    pagination: {
      el: ".kv__swiper-pagination",
      clickable: true
    },
    autoplay: {
      delay: 7000,
    },
    loop: true
  });
}

/*
 * ヘッダーの固定を下にする
 */
const profileToggle = () => {
  const profileToggle = document.getElementById('profile-toggle');
  const profile = document.getElementById('profile');
  let isProfileOpen = false
  profileToggle.addEventListener('click', () => {
    if (isProfileOpen) {
      isProfileOpen = false
      profile.classList.remove('profile-open')
    } else {
      isProfileOpen = true
      profile.classList.add('profile-open')
    }
  })
}

console.log($('.medical-menu__head'));
$('.medical-menu__head').on('click', function () {
  let toggleMenu = $(this).next('.symptoms__list')
  console.log($(this));
  toggleMenu.slideToggle();
})
