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
// let currentModal;   // текущие модальное окно
// let modalDialog;    // белое модальное окно
// let alertModal = document.querySelector('#alert-modal'); // Окно с предупреждением

// const modalButtons = document.querySelectorAll('[data-toggle=modal]');  // переключатели модальных окон
// modalButtons.forEach((button) => {
//   button.addEventListener('click', (event) => { /* клик по переключателю */
//     event.preventDefault();
//     currentModal = document.querySelector(button.dataset.target); // Определяем текущие модальное окно
//     currentModal.classList.toggle('is-open');  // открываем текущие окно
//     modalDialog = currentModal.querySelector('.modal-dialog');  // назначаем диалоговое окно
//     currentModal.addEventListener('click', event => {   // отследиваем клик по окну и пустым областям
//       if (!event.composedPath().includes(modalDialog)) {  // если клик в пустую область (не диалог)
//         currentModal.classList.remove('is-open');  // Закрываем окно
//       }
//     })
//   });
// });
// document.addEventListener('keyup', (event) => {
//     if (event.key == 'Escape' && currentModal.classList.contains('is-open')) {
//       currentModal.classList.toggle('is-open');
//     }
//   });

let currentModal; // текущее модальное окно 
  let modalDialog;  // белое диалоговое окно
  let alertModal = document.querySelector("#alert-modal"); // окно с предупреждением

  const modalButtons = document.querySelectorAll("[data-toggle=modal]"); // переключатели мадальных окон
  modalButtons.forEach(button => {
    /* клик по переключателю */
    button.addEventListener("click", (event) => { 
      event.preventDefault();
      /* опредиляем текущее открытое окно */
      currentModal = document.querySelector(button.dataset.target);
      /* открываем текущее окно */
      currentModal.classList.toggle("is-open");
      /* назначаем диалоговое окно */
      modalDialog = currentModal.querySelector(".modal-dialog");
      /* отслеживаем клик по окну и пустым областям */
      currentModal.addEventListener("click", event => {
        /* если клик в пустую область (не деалог) */
        if (!event.composedPath().includes(modalDialog)) {
          /* закрываем окно */
          currentModal.classList.remove("is-open");
        }
      });
    });
  });
  /* ловим событие нажатия на кнопки */
    document.addEventListener("keyup", (event) => {
      /* проверяем, что это Escape и текущее окно открыто */
    if (event.key == "Escape" && currentModal.classList.contains("is-open")) {
      /* закрываем текущее окно */
      currentModal.classList.toggle("is-open");
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
          currentModal.classList.remove('is-open');
          alertModal.classList.add('is-open');
          currentModal = alertModal;
          modalDialog = currentModal.querySelector('.modal-dialog');  // назначаем диалоговое окно
    currentModal.addEventListener('click', event => {   // отследиваем клик по окну и пустым областям
      if (!event.composedPath().includes(modalDialog)) {  // если клик в пустую область (не диалог)
        currentModal.classList.remove('is-open');  // Закрываем окно
      }
    })
        } else {
          alert('Ошибка! Текст ошибки: ' . response.statusText);
        }
      });      
    };
    ajaxSend(formData);
  });
});
  

//  Маска номера телефона
/* Создаем префикс +7, даже если вводят 8 или 9 */
const prefixNumber = (str) => {
  /* если вводят семерку, добавляем ей скобку */
  if (str === "7") {
    return "7 (";
  }
  /* если вводят восьмерку, ставим вместо нее +7 ( */
  if (str === "8") {
    return "+7 (";
  }
  /* если пишут девятку, заменяем на +7 (9  */
  if (str === "9") {
    return "7 (9";
  }
  /* в других случаях просто 7 (  */
  return "7 (";
}; /* профикс в любом раскладе будет +7 () */

/* Ловим события ввода в любом поле */
document.addEventListener("input", (e) => {
  /* Проверяем, что это поле имеет класс phone-mask */
  if (e.target.classList.contains("phone-mask")) {
    /* поле с телефоном помещаем в переменную input */
    const input = e.target;
    /* вставляем плюс в начале номера */
    const value = input.value.replace(/\D+/g, "");
    /* длинна номера 11 символов */
    const numberLength = 11;

    /* Создаем переменную, куда будем записывать номер */
    let result;
    /* Если пользователь ввел 8... */
    if (input.value.includes("+8") || input.value[0] === "8") {
      /* Стираем восьмерку */
      result = "";
    } else {
      /* Оставляем плюсик в поле */
      result = "+";
    }

    /* Запускаем цикл, где переберем каждую цифру от 0 до 11 */
    for (let i = 0; i < value.length && i < numberLength; i++) {
      switch (i) {
        case 0:
          /* в самом начале ставим префикс +7 ( */
          result += prefixNumber(value[i]);
          continue;
        case 4:
          /* добавляем после "+7 (" круглую скобку ")" */
          result += ") ";
          break;
        case 7:
          /* дефис после 7 символа */
          result += "-";
          break;
        case 9:
          /* еще дефис  */
          result += "-";
          break;
        default:
          break;
      }
      /* на каждом шаге цикла добавляем новую цифру к номеру */
      result += value[i];
    }
    /* итог: номер в формате +7 (999) 123-45-67 */
    input.value = result;
  }
});