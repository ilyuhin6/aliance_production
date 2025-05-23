<!DOCTYPE html>
<html lang="ru">

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
    <title>Aliance Production</title>
</head>


<body>
    <div class="mobile-menu">
        <ul class="mobile-menu-nav">
            <li class="mobile-menu-nav-item">
                <a href="/about.php" class="mobile-menu-link">О компании</a>
            </li>
            <li class="mobile-menu-nav-item">
                <a class="mobile-menu-link" href="./contracts.php">Контрактное производство</a>
                <ul class="mobile-submenu">
                    <li class="mobile-submenu-item">
                        <a class="mobile-submenu-link" href="./avtohim-ag.php">Автомобильная химия</a>
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
                <a class="mobile-menu-link" href="./trademarks.php">Собственные торговые марки</a>
            </li>
            <li class="mobile-menu-nav-item">
                <a class="mobile-menu-link" href="./blog.php">Новости</a>
            </li>
            <li class="mobile-menu-nav-item">
                <a class="mobile-menu-link" href="./contact.php">Контакты</a>
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
                <a class="header-nav-link" href="./contracts.php">Контрактное производство</a>
            </li>
            <li class="header-nav-item">
                <a class="header-nav-link" href="./trademarks.php">Собственные торговые марки</a>
            </li>
            <li class="header-nav-item">
                <a class="header-nav-link" href="./blog.php">Новости</a>
            </li>
            <li class="header-nav-item">
                <a class="header-nav-link" href="./contact.php">Контакты</a>
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

            <?php include_once('./template-parts/swiper-features-slider-block.php'); ?>


        </div>
    </header>
    <!-- /.header -->

    <?php include_once('./template-parts/section-steps-block.php'); ?>
    <!-- /.section steps -->

    <?php
    $block_title = 'Контрактное производство';
    include_once('./template-parts/contracts-block.php'); ?>

    <?php $block_title = 'Собственные торговые марки';
    include_once('./template-parts/trademarks-block.php'); ?>

    <?php include_once('./template-parts/section-founder-block.php'); ?>

    <?php include_once('./template-parts/section-clients-block.php'); ?>

    <section class="section blog">
        <div class="container">
            <div class="separator separator-section-steps"></div>
            <h2 class="section-title">Блог экспертов в области производства</h2>
            <!-- Slider main container -->
            <div class="swiper blog-slider">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <a href="./blog-content.php" class="swiper-slide blog-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/image-post.webp">
                            <source type="image/jpeg" srcset="./img/blog/image-post.jpg">
                            <img src="./img/blog/image-post.jpg" alt="картиника поста" class="blog-card-image">
                        </picture>
                        <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
                        <p class="blog-card-tex">
                            Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию,
                            в равной степени предоставлены...
                        </p>
                    </a>
                    <a href="./blog-content.php" class="swiper-slide blog-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/image-post2.webp">
                            <source type="image/jpeg" srcset="./img/blog/image-post2.jpg">
                            <img src="./img/blog/image-post2.jpg" alt="картинка поста" class="blog-card-image">
                        </picture>

                        <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
                        <p class="blog-card-tex">
                            Сложно сказать, почему элементы политического процесса функционально разнесены на
                            независимые элементы. Безусловно, высокотехнологичная...
                        </p>
                    </a>
                    <a href="./blog-content.php" class="swiper-slide blog-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/image-post.webp">
                            <source type="image/jpeg" srcset="./img/blog/image-post.jpg">
                            <img src="./img/blog/image-post.jpg" alt="картиника поста" class="blog-card-image">
                        </picture>
                        <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
                        <p class="blog-card-tex">
                            Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию,
                            в равной степени предоставлены...
                        </p>
                    </a>
                </div>
                <div class="blog-slider-footer">
                    <a href="./blog.php" class="button-link">Весь блог</a>
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