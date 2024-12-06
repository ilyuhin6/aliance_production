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


const swiper = new Swiper('.features-slider', {
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


  const swiperBlog = new Swiper('.blog-slider', {
    speed: 400,
    spaceBetween: 30,
    slidesPerView: 2,
    navigation: {
      nextEl: '.blog-button-next',
      prevEl: '.blog-button-prev',
    },
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
      },
      // when window width is >= 768px
      768: {
        slidesPerView: 2,
      },
      // when window width is >= 1024px
      1024: {
        slidesPerView: 2,
      },
    },
  });

// Modal START
const modal = document.querySelector('.modal')
const modalDialog = document.querySelector('.modal-dialog');

document.addEventListener('click', (event) => {
  if (
    event.target.dataset.toggle == 'modal' ||
    event.target.parentNode.dataset.toggle == 'modal' ||
    (!event.composedPath().includes(modalDialog) &&
    modal.classList.contains('is-open'))
  ) {
    event.preventDefault();
    modal.classList.toggle('is-open');
  }
});
document.addEventListener('keyup', (event) => {
  if (event.key == 'Escape' && modal.classList.contains('is-open')) {
    modal.classList.toggle('is-open');
  }
});




//Validation Form
const forms = document.querySelectorAll('form');  //Собираем все формы с тегом form
forms.forEach(form => {
  const validation = new JustValidate(form, {
    errorFieldCssClass: 'is-invalid',
});
validation
  .addField('[name = username]', [
    {
      rule: 'required',
      errorMessage: 'Укажите Имя',
    },
    {
      rule: 'maxLength',
      value: 10,
      errorMessage: 'Максимально 30 символов',
    },
  ])
  .addField('[name = userphone]', [
    {
      rule: 'required',
      errorMessage: 'Укажите телефон',
    },
  ])
  .onSuccess((event) => {
    const thisForm = event.target; //Наша форма
    const formData = new FormData(thisForm); //Даные из нашей формы
    const ajaxSend = (formData) => {
      fetch(thisForm.getAttribute('action'), {
        method: thisForm.getAttribute('method'),
        body: formData,
      }).then((response) => {
        if (response.ok) {
          thisForm.reset();
          alert('Заявка отправлена!');
        } else {
          alert('Ошибка! Текст ошибки: ' . response.statusText);
        }
      });      
    };
    ajaxSend(formData);
  });
});
  