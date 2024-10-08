const navbar = document.querySelector('.navbar');
const logo = document.querySelector('.logo-svg use');
const mMenuToggle = document.querySelector('.mobile-menu-toggle');
const menu = document.querySelector('.mobile-menu');


const lightModeOn = (event) => {
  navbar.classList.add('navbar-light');
  logo.href.baseVal = './img/sprite.svg#logo';
};

const lightModeOff = (event) => {
  navbar.classList.remove('navbar-light');
  logo.href.baseVal = './img/sprite.svg#logo-light';
};


const openMenu = (event) => {      // функция открывания меню
  menu.classList.add('is-open');  // вешает класс is-open
  mMenuToggle.classList.add('close-menu');  // добавляем класс с крестиком
  document.body.style.overflow='hidden'; // запрещаем прокрутку
  lightModeOn();
};

const closeMenu = (event) => {      // функция закрывания меню
  mMenuToggle.classList.remove('close-menu');
  menu.classList.remove('is-open');  // убирает класс is-open
  document.body.style.overflow=''; // возращаем прокрутку
  lightModeOff();
};


window.addEventListener('scroll', () => {
  this.scrollY > 1 ?  lightModeOn() : lightModeOff();
});

mMenuToggle.addEventListener('click', (event) => {
  event.preventDefault();
  menu.classList.contains('is-open') ? closeMenu() : openMenu();
});


const swiper = new Swiper('.swiper', {
speed: 400,
autoHeight: true,
slidesPerView: 1,
navigation: {
  nextEl: '.slider-button-next',
  prevEl: '.slider-button-prev',
},
slidesPerView: 1,
spaceBetween: 10,
// Responsive breakpoints
breakpoints: {
  // when window width is >= 320px
  576: {
    slidesPerView: 2,
  },
  // when window width is >= 768px
  768: {
    slidesPerView: 3,
  },
  // when window width is >= 1024px
  1024: {
    slidesPerView: 4,
  },
  // when window width is >= 1200px
  1200: {
    slidesPerView: 5,
  },
},
});

const swiperSteps = new Swiper('.swiper-steps', {
  speed: 400,
  autoHeight: true,
  slidesPerView: 1,
  navigation: {
    nextEl: '.slider-steps-button-next',
    prevEl: '.slider-steps-button-prev',
  },
  slidesPerView: 1,
  spaceBetween: 10,
  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 2,
    },
    // when window width is >= 768px
    768: {
      slidesPerView: 3,
    },
    // when window width is >= 1024px
    1024: {
      slidesPerView: 4,
    },
  },
  });