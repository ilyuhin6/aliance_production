<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <meta property="og:title" content="Производство химии | Название компании">
  <meta property="og:description" content="Производство химической продукции высокого качества: промышленная химия, химические реактивы, сырье и компоненты. Изготовление бытовой химии, моющих средств, удобрений и полимеров.">
  <meta property="og:image" content="https://ilyuhin-web.ru/img/header-bg.jpeg">
  <meta property="og:url" content="https://ilyuhin-web.ru/">
  <meta property="og:type" content="website">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wdth,wght@0,62.5..100,100..900;1,62.5..100,100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/swiper-bundle.css">
  <link rel="stylesheet" href="./css/normalize.css">
  <link rel="stylesheet" href="./css/style.css">
  <title>Вход для паронеров</title>
</head>

<body>

  <style>
    .title-form {
      margin: 0;
      margin-top: 40px;
      text-align: center;
    }

    .enter-form-bg {
      /* background-color: #7eb693; */
      padding-top: 2rem;
      padding-bottom: 2rem;
      display: flex;
      justify-content: center;
    }

    .auth {
      position: relative;
      width: 850px;
      height: 550px;
      background: #fff;
      margin: 20px;
      border-radius: 30px;
      box-shadow: 0 0 30px rgba(0, 0, 0, .2);
      overflow: hidden;
    }

    .auth__title {
      font-size: 36px;
      margin: -10px 0;
      color: #292d33;
    }

    .auth__text {
      font-size: 14.5px;
      margin: 15px 0;
    }

    .auth__form {
      width: 100%;
    }

    .auth__form-container {
      position: absolute;
      right: 0;
      width: 50%;
      height: 100%;
      background: #fff;
      display: flex;
      align-items: center;
      color: #333;
      text-align: center;
      padding: 40px;
      z-index: 1;
      transition: .6s ease-in-out 1.2s, visibility 0s 1s;
    }

    .auth--active .auth__form-container {
      right: 50%;
    }

    .auth__form-container--register {
      visibility: hidden;
    }

    .auth--active .auth__form-container--register {
      visibility: visible;
    }

    .auth__input-group {
      position: relative;
      margin: 30px 0;
    }

    .auth__input {
      width: 100%;
      padding: 13px 50px 13px 20px;
      background: #eee;
      border-radius: 8px;
      border: none;
      outline: none;
      font-size: 16px;
      color: #333;
      font-weight: 500;
    }

    .auth__input::placeholder {
      color: #888;
      font-weight: 400;
    }

    .auth__input-icon {
      position: absolute;
      right: 20px;
      top: 50%;
      transform: translateY(-50%);
      font-size: 20px;
    }

    .auth__forgot-link {
      margin: -15px 0 15px;
    }

    .auth__forgot-link a {
      font-size: 14.5px;
      color: #333;
    }

    .auth__btn {
      width: 100%;
      height: 48px;
      background: #5c8ee5;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, .1);
      border: none;
      cursor: pointer;
      font-size: 16px;
      color: #fff;
      font-weight: 600;
    }

    .auth__social {
      display: flex;
      justify-content: center;
    }

    .auth__social-link {
      display: inline-flex;
      padding: 10px;
      border: 2px solid #ccc;
      border-radius: 8px;
      font-size: 24px;
      color: #333;
      margin: 0 8px;
    }

    .auth__toggle-container {
      position: absolute;
      width: 100%;
      height: 100%;
    }

    .auth__toggle-container::before {
      content: '';
      position: absolute;
      left: -250%;
      width: 300%;
      height: 100%;
      background: #5c8ee5;
      border-radius: 150px;
      z-index: 2;
      transition: 1.8s ease-in-out;
    }

    .auth--active .auth__toggle-container::before {
      left: 50%;
    }

    .auth__toggle-panel {
      position: absolute;
      width: 50%;
      height: 100%;
      color: #fff;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      z-index: 2;
      transition: .6s ease-in-out;
    }

    .auth__toggle-panel--left {
      left: 0;
      transition-delay: 1.2s;
    }

    .auth--active .auth__toggle-panel--left {
      left: -50%;
      transition-delay: .6s;
    }

    .auth__toggle-panel--right {
      right: -50%;
      transition-delay: .6s;
    }

    .auth--active .auth__toggle-panel--right {
      right: 0;
      transition-delay: 1.2s;
    }

    .auth__toggle-text {
      margin-bottom: 20px;
    }

    .auth__toggle-btn {
      width: 160px;
      height: 46px;
      background: transparent;
      border: 2px solid #fff;
      box-shadow: none;
    }

    @media screen and (max-width: 650px) {
      .auth {
        height: calc(100vh - 40px);
      }

      .auth__form-container {
        bottom: 0;
        width: 100%;
        height: 70%;
      }

      .auth--active .auth__form-container {
        right: 0;
        bottom: 30%;
      }

      .auth__toggle-container::before {
        left: 0;
        top: -270%;
        width: 100%;
        height: 300%;
        border-radius: 20vw;
      }

      .auth--active .auth__toggle-container::before {
        left: 0;
        top: 70%;
      }

      .auth--active .auth__toggle-panel--left {
        left: 0;
        top: -30%;
      }

      .auth__toggle-panel {
        width: 100%;
        height: 30%;
      }

      .auth__toggle-panel--left {
        top: 0;
      }

      .auth__toggle-panel--right {
        right: 0;
        bottom: -30%;
      }

      .auth--active .auth__toggle-panel--right {
        bottom: 0;
      }
    }

    @media screen and (max-width: 400px) {
      .auth__form-container {
        padding: 20px;
      }

      .auth__toggle-title {
        font-size: 30px;
      }
    }
  </style>




  <section class="section section-enter-form" style="margin: 0;">
    <div class="container">
      <h2 class="title-form section-title">Вход для партнеров</h2>
      <div class="enter-form-bg">
        <div class="auth">
          <div class="auth__form-container auth__form-container--login">



            <form class="auth__form" action="./includes/avtoriz.php" method="post">
              <h1 class="auth__title">Авторизация</h1>
              <div class="auth__input-group">
                <input class="auth__input" name="userName" type="text" placeholder="Имя" required>
                <i class="auth__input-icon bx bxs-user"></i>
              </div>
              <div class="auth__input-group">
                <input class="auth__input" name="userPass" type="password" placeholder="Пароль" required>
                <i class="auth__input-icon bx bxs-lock-alt"></i>
              </div>
              <div class="auth__forgot-link">
                <a href="#">Забыли пароль?</a>
              </div>
              <button type="submit" class="auth__btn">Войти</button>
            </form>
          </div>

          <div class="auth__form-container auth__form-container--register">
            <form class="auth__form" action="./includes/registration.php" method="post">
              <h1 class="auth__title">Регистрация</h1>
              <div class="auth__input-group">
                <input class="auth__input" name="userName" type="text" placeholder="Имя" required>
                <i class="auth__input-icon bx bxs-user"></i>
              </div>
              <div class="auth__input-group">
                <input class="auth__input" name="userPass" type="password" placeholder="Пароль" required>
                <i class="auth__input-icon bx bxs-envelope"></i>
              </div>
              <div class="auth__input-group">
                <input class="auth__input" name="userPassVerif" type="password" placeholder="Подтвердите пароль" required>
                <i class="auth__input-icon bx bxs-lock-alt"></i>
              </div>
              <button type="submit" class="auth__btn" id="auth__btn">Зарегистрироваться</button>
            </form>
          </div>

          <div class="auth__toggle-container">
            <div class="auth__toggle-panel auth__toggle-panel--left">
              <h1 class="auth__toggle-title">Добро пожаловать!</h1>
              <p class="auth__toggle-text">Еще нет аккаунта?</p>
              <button class="auth__btn auth__toggle-btn auth__register-btn">Регистрация</button>
            </div>

            <div class="auth__toggle-panel auth__toggle-panel--right">
              <h1 class="auth__toggle-title">Добро пожаловть!</h1>
              <p class="auth__toggle-text">Уже есть аккаунт?</p>
              <button class="auth__btn auth__toggle-btn auth__login-btn">Войти</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Скрипт для формы -->
  <script>
    const authContainer = document.querySelector('.auth');
    const registerBtn = document.querySelector('.auth__register-btn');
    const loginBtn = document.querySelector('.auth__login-btn');

    registerBtn.addEventListener('click', () => {
      authContainer.classList.add('auth--active');
    })

    loginBtn.addEventListener('click', () => {
      authContainer.classList.remove('auth--active');
    })
  </script>
</body>

</html>