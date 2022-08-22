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

const target = document.querySelectorAll('.js-animationTarget');
const titleTarget = document.querySelectorAll('.js-titleAnimationTarget');
const menuTarget = document.querySelectorAll('.medical-menu__item');
const imgTarget = document.querySelectorAll('.js-imgAnimation');

const options = {
  root: null,
  rootMargin: "-50% 0px",
  threshold: 0
};

const titleAnimeOptions = {
  root: null,
  rootMargin: "-10% 0px",
  threshold: 0
};

const menuAnimeOptions = {
  root: null,
  rootMargin: "-20% 0px",
  threshold: 0
};

const titleAnimationCallback = entries => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      sectionTitleAnimation(entry);
    }
  });
};

const menuAnimationCallback = entries => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      menuAnimation(entry);
    }
  });
};

const imgAnimationCallback = entries => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      imgAnimation(entry);
    }
  });
};

const c = function (entries) {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      featureTitleAnimation();
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
const titleObserver = new IntersectionObserver(titleAnimationCallback, titleAnimeOptions);
const menuObserver = new IntersectionObserver(menuAnimationCallback, menuAnimeOptions);
const imgObserver = new IntersectionObserver(imgAnimationCallback, options);

target.forEach(item => {
  observer.observe(item);
})

titleTarget.forEach(item => {
  titleObserver.observe(item);
})

menuTarget.forEach(item => {
  menuObserver.observe(item);
})

imgTarget.forEach(item => {
  imgObserver.observe(item);
})

/*
* featureタイトルテキストアニメーション
*/
const featureTitleAnimation = () => {
  const clinicFeatures01 = document.querySelector('.clinic-features__01-main')
  clinicFeatures01.classList.add('is-active')
}

/*
 * セクションタイトルアニメーション
 */
const sectionTitleAnimation = (entry) => {
  entry.target.classList.add('title-fade')
}

/*
 *　診療メニュー
 */
const menuAnimation = (entry) => {
  entry.target.classList.add('menu-fade')
}

/*
 *　feature画像
 */
const imgAnimation = (entry) => {
  entry.target.classList.add('img-fade')
}
