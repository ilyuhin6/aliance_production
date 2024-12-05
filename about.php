<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wdth,wght@0,62.5..100,100..900;1,62.5..100,100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/swiper-bundle.css">
  <link rel="stylesheet" href="./css/normalize.css">
  <link rel="stylesheet" href="./css/style.css">
  <title>О компании - Aliance Production</title>
</head>

<body>

  <div class="mobile-menu">
    <ul class="mobile-menu-nav">
      <li class="mobile-menu-nav-item">
        <a class="mobile-menu-link" href="/">О компании</a>
      </li>
      <li class="mobile-menu-nav-item">
        <a class="mobile-menu-link" href="./contract_product.php">Контрактное производство</a>
        <ul class="mobile-submenu">
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Автомобильная химия</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Бытовая химия</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Дезинфицирующие средства</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Пищевые аэрозоли</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Косметическая продукция</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Краски аэрозольные</a>
          </li>
        </ul>
      </li>
      <li class="mobile-menu-nav-item">
        <a class="mobile-menu-link" href="">Собственные торговые марки</a>
      </li>
      <li class="mobile-menu-nav-item">
        <a class="mobile-menu-link" href="">Новости</a>
      </li>
      <li class="mobile-menu-nav-item">
        <a class="mobile-menu-link" href="">Контакты</a>
      </li>
    </ul>
    <a href="tel:+74996861014" class="mobile-phone">+7 (499) 686-10-14</a>
    <div class="mobile-info">
      <!-- <svg class="address-svg">
            <use href="./img/sprite.svg#address"></use>
        </svg> -->
      <img src="./img/svg/address.svg" alt="address">
      <address class="mobile-info-address">
        г. Мосвка, Холодильный пер. 4к1с8
      </address>
    </div>
    <div class="mobile-info">
      <!-- <svg class="mail-svg">
            <use href="./img/sprite.svg#mail"></use>
        </svg> -->
      <img src="./img/svg/mail.svg" alt="mail">
      <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email">
        a.dragunov@tdaliance.ru
      </a>
    </div>
    <div class="mobile-social-link">
      <a href="#">
        <!-- <svg class="vk-svg">
                <use href="./img/sprite.svg#vk"></use>
            </svg> -->
        <img src="./img/svg/vk.svg" alt="vk">
      </a>
      <a href="#">
        <!-- <svg class="inst-svg">
                <use href="./img/sprite.svg#inst"></use>
            </svg> -->
        <img src="./img/svg/inst.svg" alt="insta">
      </a>
    </div>
  </div>
  <nav class="navbar-page navbar-light">
    <a href="#" class="mobile-menu-toggle">
      <div class="mobile-menu-line"></div>
      <div class="mobile-menu-line"></div>
      <div class="mobile-menu-line"></div>
    </a>
    <a href="./" class="header-logo">
      <svg class="logo-svg">
        <use href="./img/sprite.svg#logo"></use>
      </svg>
    </a>
    <ul class="header-nav">
      <li class="header-nav-item">
        <a class="header-nav-link" href="./about.php">О компании</a>
      </li>
      <li class="header-nav-item">
        <a class="header-nav-link" href="./contract_product.php">Контрактное производство</a>
      </li>
      <li class="header-nav-item">
        <a class="header-nav-link" href="">Собственные торговые марки</a>
      </li>
      <li class="header-nav-item">
        <a class="header-nav-link" href="">Новости</a>
      </li>
      <li class="header-nav-item">
        <a class="header-nav-link" href="">Контакты</a>
      </li>
    </ul>
    <div class="header-phone">
      <svg class="phone-svg">
        <use href="./img/sprite.svg#phone"></use>
      </svg>
      <a href="tel:+74996861014" class="header-phone-link">
        +7 (499) 686-10-14
      </a>
    </div>
    <button class="navbar-button button" data-toggle="modal">
      <svg class="button-icon">
        <use href="./img/sprite.svg#phone"></use>
      </svg>
      <span class="button-text">Получить консультацию</span>
    </button>
  </nav>



  <header class="header header-page">
    <div class="container">
      <div class="header-content-page">
        <div class="separator"></div>
        <h1 class="header-title header-title-page">
          О компании
        </h1>
        <ul class="breadcrumb-list">
          <li class="breadcrumb-item"><a href="/" class="breadcrumb-link">Главная</a></li>
          <li class="breadcrumb-item">О компании</li>
        </ul>
      </div>
    </div>
  </header>











  <?php include_once('./footer.php'); ?>