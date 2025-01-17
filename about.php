<?php
$page_title = 'О компании';
$header_style = 'header-page';
include_once('./header-page.php');
// header

$legend_title = 'мы - эксперты в области производства химии';
$legend_photo = './img/legend/legend-logo.png';
$legend_text = 'Разнообразный и богатый опыт говорит нам, что перспективное планирование однозначно фиксирует необходимость поставленных обществом задач! Есть над чем задуматься: ключевые особенности структуры проекта могут быть объединены в целые кластеры себе подобных. Интерактивные прототипы, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут описаны максимально подробно. Значимость этих проблем настолько очевидна, что перспективное планирование играет важную роль в формировании системы массового участия.';
include_once('./template-parts/legend-cmpany-block.php');
// legend

include_once('./template-parts/slider-features-block.php');
// slider - преимуществ

$legend_product_title = 'Наше производство';
$legend_product_photo = './img/legend/legend-product.jpg';
include_once('./template-parts/legend-product-block.php');
// Производство компании

include_once('./template-parts/section-founder-block.php');
// Основатели компании

include_once('./template-parts/legend-research-center-block.php');
// Лабораторные иследования 

include_once('./template-parts/slider-research-block.php');
// Slider - лабораторных иследований

include_once('./template-parts/section-clients-block.php');
// Клиенты компании


include_once('./footer.php');
