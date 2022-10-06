<?php
$name = $_POST['user_name']; // input name
$phone = $_POST['user_email']; // input phone
$email = $_POST['user_phone']; // input phone
// Токен телеграм бота
$token = '5759772520:AAEVHcs8e7Jd4lA-pjZ8GoZRcZR382rCnWs';
// ID чата
$chat_id = '-674378157';
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email: ' => $email,
);

foreach ($_POST as $key => $val) {
  $txt .= '<b>'.$key.'</b> '.$value.'%0A';
};

$sendToTelegram = fopen('http://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}
&parse_mode=htnl&text={$txt}','r');

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo 'Error';
}
?>