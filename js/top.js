"use strict";

window.addEventListener('load', () => {
  initSwiper();
  // profileToggle();
})

const initSwiper = () => {
  const kvSwiper = new Swiper('.kv__swiper', {
    slidePerView: 1,
    effect: "fade",
    speed: 1000,
    // fadeEffect: {
    //   crossFade: true
    // },
    pagination: {
      el: ".kv__swiper-pagination",
      clickable: true
    },
    autoplay: {
      delay: 5000,
    },
    loop: true
  });
}

// const profileToggle = () => {
//   const profileToggle = document.getElementById('profile-toggle');
//   const profile = document.getElementById('profile');
//   let isProfileOpen = false
//   profileToggle.addEventListener('click', () => {
//     if (isProfileOpen) {
//       isProfileOpen = false
//       profile.classList.remove('profile-open')
//     } else {
//       isProfileOpen = true
//       profile.classList.add('profile-open')
//     }
//   })
// }

$('.medical-menu__head').on('click', function () {
  if (window.matchMedia('(max-width: 768px)').matches) {
    let toggleMenu = $(this).next('.symptoms__list')
    toggleMenu.slideToggle();
  } else {
    return;
  }
})

$('.profile__accordion-head').on('click', function () {
  let toggleMenu = $(this).next('.profile__main')
  $('.profile').toggleClass('profile-open');
  toggleMenu.slideToggle();
})


/*
 * グラフアニメーション
 */

const target = document.querySelector('.clinic-features__02');

const options = {
  root: null,
  rootMargin: "-50% 0px",
  threshold: 0
};

const c = function (entries) {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      animGraph();
    }
  });
};

const animGraph = () => {
  const tl = gsap.timeline();
  tl.to('.graph01 .graph-pic', {
    scaleY: 1,
    duration: 0.2,
    ease: Power1.easeOut
  })
  tl.to('.graph02 .graph-pic', {
    scaleY: 1,
    duration: 0.2,
    ease: Power1.easeOut
  }, "+=0.05")
  tl.to('.graph03 .graph-pic', {
    scaleY: 1,
    duration: 0.2,
    ease: Power1.easeOut
  }, "+=0.05")
  tl.to('.graph04 .graph-pic', {
    scaleY: 1,
    duration: 0.2,
    ease: Power1.easeOut
  }, "+=0.05")
  tl.to('.graph05 .graph-pic', {
    scaleY: 1,
    duration: 0.2,
    ease: Power1.easeOut
  }, "+=0.05")
  tl.to('.graph06 .graph-pic', {
    scaleY: 1,
    duration: 0.2,
    ease: Power1.easeOut
  }, "+=0.05")
  tl.to('.graph07 .graph-pic', {
    scaleY: 1,
    duration: 0.2,
    ease: Power1.easeOut
  }, "+=0.05")
  tl.to('.graph-text', {
    opacity: 1,
    duration: 0.2,
    ease: Power1.easeOut
  }, "+=0.1")
  tl.to('.graph-line', {
    opacity: 1,
    duration: 0.2,
    ease: Power1.easeOut,
  }, "<")
  tl.to('.graph-line03', {
    opacity: 1,
    duration: 0.2,
    ease: Power1.easeOut,
  }, "<")
  tl.to('.graph-arrow', {
    scale: 1,
    duration: 0.2,
    ease: Power1.easeOut,
  }, "+=0.2")
};

const observer = new IntersectionObserver(c, options);
observer.observe(target);


