<?php
$page_title = 'Автомобильная химия';
$header_style = 'header-page';
include_once('./header-page-product.php');
// header

$legend_title = 'Контрактное производство автомобильной химии';
$legend_photo = './img/legend/legend-img.jpg';
$legend_text = 'Прежде всего, начало повседневной работы по формированию позиции однозначно фиксирует необходимость приоритизации разума над эмоциями. Кстати, представители современных социальных резервов неоднозначны и будут описаны максимально подробно.
<br/><br/>
Но социально-экономическое развитие напрямую зависит от поставленных обществом задач! Безусловно, постоянный количественный рост и сфера нашей активности предоставляет широкие возможности для системы обучения кадров, соответствующей насущным потребностям. В целом, конечно, выбранный нами инновационный путь обеспечивает широкому кругу (специалистов) участие в формировании своевременного выполнения сверхзадачи. А ещё элементы политического процесса представлены в исключительно положительном свете. Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта:
<br/><br/> высокотехнологичная концепция общественного уклада создаёт предпосылки для глубокомысленных рассуждений. В своём стремлении повысить качество жизни, они забывают, что дальнейшее развитие различных форм деятельности, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для поставленных обществом задач.';
include_once('./template-parts/legend-cmpany-block.php');
// legend



$slider_to_product = 'slider-to-product';
include_once('./template-parts/slider-features-block.php');
// slider - преимуществ

$legend_product_title = 'Изготовление автохимии';
$legend_product_photo = './img/legend/create-him.jpg';
$legend_photo_style = 'legend-photo-img';
include_once('./template-parts/legend-product-block.php');
// Производство компании


include_once('./template-parts/avtohim-section-block.php');
// Виды автохимии


include_once('./template-parts/legend-research-center-block.php');
// Лабораторные иследования 

include_once('./template-parts/slider-research-block.php');
// Slider - лабораторных иследований


include_once('./template-parts/section-steps-block.php');
//  section steps



include_once('./template-parts/section-clients-block.php');
// Клиенты компании

include_once('./footer.php');
