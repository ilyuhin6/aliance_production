<?php
$user_name = htmlspecialchars($_POST['username']);
$user_phone = htmlspecialchars($_POST['userphone']);

$token = '7340250234:AAFQbOaMOcEyovNU42ukC8oHQi3B3NGC1DU';
$chat_id = '-1002498990517';


$formData = array(
  "Клиент " => $user_name,
  "Телефон " => $user_phone
);

foreach ($formData as $key => $value) {
  $text .= $key . "<b>" . urlencode($value) . "</b>" . "%0A";
};

$sendTelegram =  fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");

if ($sendTelegram === FALSE) {
  // Обработка ошибки
  echo "Произошла ошибка при отправке сообщения";
} else {
  echo "Сообщение успешно отправлено!";
}
