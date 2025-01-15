<?php
$page_title = 'О компании';
$header_style = 'header-page';
include_once('./header-page.php');


$legend_title = 'мы - эксперты в области производства химии';
$legend_photo = './img/legend/legend-logo.png';
include_once('./template-parts/legend-cmpany-block.php');


include_once('./template-parts/slider-features-block.php');


$legend_product_title = 'Наше производство';
$legend_product_photo = './img/legend/legend-product.jpg';
include_once('./template-parts/legend-product-block.php');


include_once('./template-parts/section-founder-block.php');


include_once('./template-parts/legend-research-center-block.php');


include_once('./template-parts/slider-research-block.php');


include_once('./template-parts/section-clients-block.php');



include_once('./footer.php');
