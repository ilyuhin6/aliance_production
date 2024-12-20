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
    <title>Aliance Production</title>
</head>


<body>
    <div class="mobile-menu">
        <ul class="mobile-menu-nav">
            <li class="mobile-menu-nav-item">
                <a href="/about.php" class="mobile-menu-link">О компании</a>
            </li>
            <li class="mobile-menu-nav-item">
                <a class="mobile-menu-link" href="">Контрактное производство</a>
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
    <nav class="navbar">
        <a href="#" class="mobile-menu-toggle">
            <div class="mobile-menu-line"></div>
            <div class="mobile-menu-line"></div>
            <div class="mobile-menu-line"></div>
        </a>
        <a href="./" class="header-logo">
            <svg class="logo-svg">
                <use href="./img/sprite.svg#logo-light"></use>
            </svg>
        </a>
        <ul class="header-nav">
            <li class="header-nav-item">
                <a href="./about.php" class="header-nav-link">О компании</a>
            </li>
            <li class="header-nav-item">
                <a class="header-nav-link" href="">Контрактное производство</a>
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
        <button class="navbar-button button" data-toggle="modal" data-target="#feedback-modal">
            <svg class="button-icon">
                <use href="./img/sprite.svg#phone"></use>
            </svg>
            <span class="button-text">Получить консультацию</span>
        </button>
    </nav>
    <!-- /.nav-bar -->
    <header class="header header-image">

        <div class="container">
            <div class="header-content">
                <div class="separator"></div>
                <h1 class="header-title">
                    Комплексное обеспечение товарами и расходными материалами бизнеса
                </h1>
                <p class="header-text">
                    Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого
                    факта: высококачественный прототип будущего проекта напрямую зависит от анализа существующих
                    паттернов поведения.
                </p>
                <button class="button btn-header" data-toggle="modal" data-target="#feedback-modal">Подробнее о компании</button>
            </div>
            <!-- /.header-content -->

            <!-- Основной блок слайдера -->
            <div class="swiper features-slider">
                <!-- Обертка слайдера -->
                <ul class="swiper-wrapper header-features">
                    <!-- Слайды -->
                    <li class="swiper-slide header-faetures-item"><svg class="time-svg" width="36" height="36">
                            <use href="./img/sprite.svg#time"></use>
                        </svg>
                        <p class="header-features-text">
                            Непрерывная работа c 2017 года
                        </p>
                    </li>
                    <li class="swiper-slide header-faetures-item"><svg class="sertificate-svg" width="29" height="29">
                            <use href="./img/sprite.svg#sertificate"></use>
                        </svg>
                        <p class="header-features-text">
                            Вся продукция сертифицирована
                        </p>
                    </li>
                    <li class="swiper-slide header-faetures-item"><svg class="control-svg" width="36" height="36">
                            <use href="./img/sprite.svg#control"></use>
                        </svg>
                        <p class="header-features-text">
                            Контроль качества на всех этапах
                        </p>
                    </li>
                    <li class="swiper-slide header-faetures-item"><svg class="deliveri-svg" width="36" height="36">
                            <use href="./img/sprite.svg#deliveri"></use>
                        </svg>
                        <p class="header-features-text">
                            Возможны поставки по всей России
                        </p>
                    </li>
                    <li class="swiper-slide header-faetures-item">
                        <svg class="speed-svg" width="36" height="36">
                            <use href="./img/sprite.svg#speed"></use>
                        </svg>
                        <p class="header-features-text">
                            Оперативное производство
                        </p>
                    </li>
                </ul>


                <!-- Кнопки навигации -->
                <div class="slider-buttons">
                    <div class="slider-button-prev">
                        <!-- <svg class="prev-svg" width="36" height="36">
                            <use href="./img/sprite.svg#prev"></use>
                        </svg> -->
                        <img src="./img/svg/prev.svg" alt="prev">
                    </div>
                    <div class="slider-button-next">
                        <!-- <svg class="next-svg" width="36" height="36">
                            <use href="./img/sprite.svg#next"></use>
                        </svg> -->
                        <img src="./img/svg/next.svg" alt="next">
                    </div>
                </div>
            </div>
            <!-- END Slider header-features swiper -->


        </div>
    </header>
    <!-- /.header -->

    <section class="section section-light">
        <div class="container">
            <div class="separator separator-section-steps"></div>
            <h2 class="section-title">схема работы</h2>

            <!-- Основной блок слайдера stepe -->
            <div class="swiper swiper-steps">
                <!-- Обертка слайдера -->
                <ul class="swiper-wrapper steps">
                    <!-- Слайды -->
                    <li class="swiper-slide steps-item">
                        <span class="steps-num">01</span>
                        <h3 class="steps-title">Знакомство</h3>
                        <p class="steps-text">Безусловно, сплочённость команды профессионалов позволяет оценить значение
                            форм воздействия.</p>
                        <a href="#" class="button-link">Оставить заявку</a>
                    </li>
                    <li class="swiper-slide steps-item">
                        <span class="steps-num">02</span>
                        <h3 class="steps-title">Заключение <br>договора</h3>
                        <p class="steps-text">Лишь интерактивные прототипы призваны к ответу.</p>
                    </li>
                    <li class="swiper-slide steps-item">
                        <span class="steps-num">03</span>
                        <h3 class="steps-title">Производство</h3>
                        <p class="steps-text">А также стремящиеся вытеснить традиционное производство, нанотехнологии
                            функционально разнесены на независимые <br>элементы.</p>
                    </li>
                    <li class="swiper-slide steps-item">
                        <span class="steps-num">04</span>
                        <h3 class="steps-title">Доставка</h3>
                        <p class="steps-text">ЛВ частности, экономическая повестка сегодняшнего дня говорит о
                            возможностях
                            приоритизации <br>разума над эмоциями.</p>
                    </li>
                </ul>
                <!-- Кнопки навигации -->
                <div class="slider-buttons-steps primary-buttons-wrapper">
                    <div class="slider-steps-button-prev primary-button-prev">
                        <!-- <svg class="prev-svg" width="36" height="36">
            <use href="./img/sprite.svg#prev"></use>
        </svg> -->
                        <img src="./img/svg/prev.svg" alt="prev">
                    </div>
                    <div class="slider-steps-button-next primary-button-next">
                        <!-- <svg class="next-svg" width="36" height="36">
            <use href="./img/sprite.svg#next"></use>
        </svg> -->
                        <img src="./img/svg/next.svg" alt="next">
                    </div>
                </div>
            </div>
            <!-- END Slider steps swiper -->

        </div>
        <!-- /.container -->
    </section>
    <!-- /.section -->

    <section class="section prodiction">
        <div class="container">
            <div class="separator separator-section-steps"></div>
            <h2 class="section-title">Контрактное производство</h2>
            <div class="cards">
                <a href="#" class="card">
                    <div class="card-content">
                        <h3 class="card-title">Автомобильная химия</h3>
                        <p class="card-text">Безусловно, сплочённость команды профессионалов позволяет оценить значение
                            форм
                            воздействия.</p>
                    </div>
                    <img src="./img/production/avto-him.png" alt="автохимия" class="card-image">
                </a>
                <a href="#" class="card">
                    <div class="card-contenet">
                        <div class="card-content">
                            <h3 class="card-title">Бытовая химия</h3>
                            <p class="card-text">А также стремящиеся вытеснить традиционное производство, нанотехнологии
                                функционально разнесены на независимые элементы.</p>
                        </div>
                    </div>
                    <img src="./img/production/bit-him.png" alt="Бытовая химия" class="card-image">
                </a>
                <a href="#" class="card">
                    <div class="card-content">
                        <h3 class="card-title">Дезинфицирующие средства</h3>
                        <p class="card-text">Лишь интерактивные прототипы призваны к ответу.</p>
                    </div>
                    <img src="./img/production/dezinfect.png" alt="Дезинфицирующие средства" class="card-image">
                </a>
                <a href="#" class="card">
                    <div class="card-content">
                        <h3 class="card-title">Пищевые аэрозоли</h3>
                        <p class="card-text">Безусловно, сплочённость команды профессионалов позволяет оценить значение
                            форм
                            воздействия.</p>
                    </div>
                    <img src="./img/production/dezinfect.png" alt="Пищевые аэрозоли" class="card-image">
                </a>
                <a href="#" class="card">
                    <div class="card-content">
                        <h3 class="card-title">Косметическая продукция</h3>
                        <p class="card-text">Лишь интерактивные прототипы призваны к ответу.</p>
                    </div>
                    <img src="./img/production/avto-him.png" alt="Косметическая продукция" class="card-image">
                </a>
                <a href="#" class="card">
                    <div class="card-content">
                        <h3 class="card-title">Краски аэрозольные</h3>
                        <p class="card-text">А также стремящиеся вытеснить традиционное производство, нанотехнологии
                            функционально разнесены на независимые элементы.</p>
                    </div>
                    <img src="./img/production/bit-him.png" alt="Краски аэрозольные" class="card-image">
                </a>
            </div>
        </div>
    </section>

    <section class="section trademark">
        <div class="container">
            <div class="separator separator-section-steps"></div>
            <h2 class="section-title">собственные торговые марки</h2>
            <div class="trademark-cards">
                <div class="trademark-card">
                    <img src="./img/svg/ag-tech.svg" alt="AGTECH" class="trademark-card-logo" width="140" height="121">
                    <!-- <svg class="trademark-card-logo">
                        <use href="./img/sprite.svg#AGTECH"></use>
                    </svg> -->
                    <h3 class="trademark-card-title">Автохимия AG-Tech</h3>
                    <p class="trademark-card-text">Для современного мира разбавленное изрядной долей эмпатии,
                        рациональное мышление создаёт предпосылки для поставленных обществом задач.</p>
                </div>
                <div class="trademark-card">
                    <img src="./img/svg/logo-blue.svg" alt="AP" class="trademark-card-logo" width="103" height="140">
                    <!-- <svg class="trademark-card-logo">
                        <use href="./img/sprite.svg#AP"></use>
                    </svg> -->
                    <h3 class="trademark-card-title">Автохимия AP</h3>
                    <p class="trademark-card-text">Для современного мира разбавленное изрядной долей эмпатии,
                        рациональное мышление создаёт предпосылки для поставленных обществом задач.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section founder">
        <img src="./img/founder.jpg" alt="Основатель" class="founder-photo">
        <div class="container">
            <div class="founder-content-wrapper">
                <div class="founder-content">
                    <div class="separator separator-section-steps"></div>
                    <h2 class="section-title">Отношение к делу и к клиентам</h2>
                    <p class="founder-text">
                        Кстати, интерактивные прототипы описаны максимально подробно. Повседневная практика показывает,
                        что
                        укрепление и развитие внутренней структуры говорит о возможностях соответствующих условий
                        активизации. Внезапно, независимые государства, которые представляют собой яркий пример
                        континентально-европейского типа политической культуры, будут подвергнуты целой серии
                        независимых
                        исследований. С учётом сложившейся международной обстановки, синтетическое тестирование выявляет
                        срочную потребность системы массового участия.
                        А ещё действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
                        ситуацию, в
                        равной степени предоставлены сами себе. Не следует, однако, забывать, что выбранный нами
                        инновационный путь в значительной степени обусловливает важность дальнейших направлений
                        развития.
                    </p>
                    <a href="#" class="button-link">Подробнее о компании</a>
                </div>
            </div>
            <!-- /.founder-content-wrapper -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.section founder -->

    <section class="section clients">
        <div class="container">
            <div class="separator separator-section-steps"></div>
            <div class="clients-wrapper">
                <div class="clients-content">
                    <h2 class="section-title">
                        Производим аэрозольную продукцию для разных сфер
                    </h2>
                    <ul class="clients-list">
                        <li class="clients-list-item">
                            <img src="./img/product svg/him.svg" alt="Химические производства" width="30" height="30" class="clients-list-icon">
                            Химические производства
                        </li>
                        <li class="clients-list-item">
                            <img src="./img/product svg/car.svg" alt="Автомойки" width="30" height="30" class="clients-list-icon">
                            Автомойки
                        </li>
                        <li class="clients-list-item">
                            <img src="./img/product svg/eat.svg" alt="Пищевая продукция" width="30" height="30" class="clients-list-icon">
                            Пищевая продукция
                        </li>
                        <li class="clients-list-item">
                            <img src="./img/product svg/brush.svg" alt="Лаки и краски" width="30" height="30" class="clients-list-icon">
                            Лаки и краски
                        </li>
                        <li class="clients-list-item">
                            <img src="./img/product svg/cosmetic.svg" alt="Косметические средства" width="30" height="30" class="clients-list-icon">
                            Косметические средства
                        </li>
                        <li class="clients-list-item">
                            <img src="./img/product svg/car-cosm.svg" alt="Автомобильная косметика" width="30" height="30" class="clients-list-icon">
                            Автомобильная косметика
                        </li>
                        <li class="clients-list-item">
                            <img src="./img/product svg/shirt.svg" alt="Косметика по уходу за одеждой" width="30" height="30" class="clients-list-icon">
                            Косметика по уходу за одеждой
                        </li>
                        <li class="clients-list-item">
                            <img src="./img/product svg/boots.svg" alt="Косметика по уходу за обувью" width="30" height="30" class="clients-list-icon">
                            Косметика по уходу за обувью
                        </li>
                        <li class="clients-list-item">
                            <img src="./img/product svg/bricks.svg" alt="Строительные материалы" width="30" height="30" class="clients-list-icon">
                            Строительные материалы
                        </li>
                        <li class="clients-list-item">
                            <img src="./img/product svg/more.svg" alt="И многих других" width="30" height="30" class="clients-list-icon">
                            И многих других
                        </li>
                    </ul>
                </div>
                <div class="clients-logo-list">
                    <a href="#" class="clients-logo-item">
                        <img src="./img/client.png" alt="" class="clients-logo">
                    </a>
                    <a href="#" class="clients-logo-item">
                        <img src="./img/client.png" alt="" class="clients-logo">
                    </a>
                    <a href="#" class="clients-logo-item">
                        <img src="./img/client.png" alt="" class="clients-logo">
                    </a>
                    <a href="#" class="clients-logo-item">
                        <img src="./img/client.png" alt="" class="clients-logo">
                    </a>
                    <a href="#" class="clients-logo-item">
                        <img src="./img/client.png" alt="" class="clients-logo">
                    </a>
                    <a href="#" class="clients-logo-item">
                        <img src="./img/client.png" alt="" class="clients-logo">
                    </a>
                    <a href="#" class="clients-logo-item">
                        <img src="./img/client.png" alt="" class="clients-logo">
                    </a>
                    <a href="#" class="clients-logo-item">
                        <img src="./img/client.png" alt="" class="clients-logo">
                    </a>
                    <a href="#" class="clients-logo-item">
                        <img src="./img/client.png" alt="" class="clients-logo">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- /.section clients -->

    <section class="section blog">
        <div class="container">
            <div class="separator separator-section-steps"></div>
            <h2 class="section-title">Блог экспертов в области производства</h2>
            <!-- Slider main container -->
            <div class="swiper blog-slider">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <a href="#" class="swiper-slide blog-card">
                        <img src="./img/blog/image-post.jpg" alt="" class="blog-card-image">
                        <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
                        <p class="blog-card-tex">
                            Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию,
                            в равной степени предоставлены...
                        </p>
                    </a>
                    <a href="#" class="swiper-slide blog-card">
                        <img src="./img/blog/image-post2.jpg" alt="" class="blog-card-image">
                        <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
                        <p class="blog-card-tex">
                            Сложно сказать, почему элементы политического процесса функционально разнесены на
                            независимые элементы. Безусловно, высокотехнологичная...
                        </p>
                    </a>
                    <a href="#" class="swiper-slide blog-card">
                        <img src="./img/blog/image-post.jpg" alt="" class="blog-card-image">
                        <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
                        <p class="blog-card-tex">
                            Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию,
                            в равной степени предоставлены...
                        </p>
                    </a>
                </div>
                <div class="blog-slider-footer">
                    <a href="#" class="button-link">Весь блог</a>
                    <div class="blog-buttons primary-buttons-wrapper">
                        <div class="blog-button-prev primary-button-prev">
                            <!-- <svg class="prev-svg" width="36" height="36">
            <use href="./img/sprite.svg#prev"></use>
        </svg> -->
                            <img src="./img/svg/prev.svg" alt="prev">
                        </div>
                        <div class="blog-button-next primary-button-next">
                            <!-- <svg class="next-svg" width="36" height="36">
            <use href="./img/sprite.svg#next"></use>
        </svg> -->
                            <img src="./img/svg/next.svg" alt="next">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </section>
    <!-- /.section blog -->
    <?php include_once('./footer.php'); ?>