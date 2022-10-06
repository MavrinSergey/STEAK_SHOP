<?php
$name = $_POST['user_name']; // input name
$email = $_POST['user_email']; // input phone
$phone = $_POST['user_phone']; // input phone
// Токен телеграм бота
$token = "5663607956:AAFrkIlG6zmlTZ8VVeiLrqQ8lD7Hn5c9uQQ";
// ID чата
$chat_id = "-805251282";
$arr = array(
  'Имя: ' => $name,
  'Телефон: ' => $phone,
  'Email: ' => $email,
);

foreach ($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}
&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: index.html');
} else {
  echo 'Error';
}
?>