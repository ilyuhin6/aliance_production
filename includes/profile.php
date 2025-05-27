<?php
session_start();

// Проверяем, авторизован ли пользователь
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
  header("Location: auth.php");
  exit();
}
?>


<!DOCTYPE html>
<html lang="ru">

<head>

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
    <title>Вход для партнеров</title>
  </head>
</head>




<section class="user-avtoriz">
  <div class="container">
    <h1 class="reviews-remark" style="text-align: center;">Добро пожаловать, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <a href="/">Вернуться на главную</a>
  </div>
</section>