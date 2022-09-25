<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Отправление, пожалуйста подождите...</title>
	<meta http-equiv="refresh" content="3; url=/"> <!-- Редирект на главную страницу -->
</head>
<body>
	<div class="loader">
		<div class="center">
			<h1 style="text-align: center;">С Вами свяжутся в скором времени. Спасибо!</h1>
		</div>
	</div>
</body>
</html>

<?php
$name = $_POST['user_name']; // input name
$phone = $_POST['user_phone']; // input phone
$email = $_POST['user_email']; // input email

	$message = "Приняли заявку на обратный звнок".PHP_EOL."Имя: ".$name.PHP_EOL."Телефон: ".$phone.PHP_EOL."Email: ".$email;

	send(33875667,$message); // id беседы с заказчиком

	function send($id , $message) {
    $url = 'https://api.vk.com/method/messages.send';
    $params = array(
      'user_id' => $id,    // Кому отправляем
      'message' => $message,   // Что отправляем
      'access_token' => 'vk1.a.KT3gnPEJXu57wAyo-uTeIWO-Ba3oWYX_TPo2G3rxbQqb_EVqjy8nBWrlL1I8CfhrBUxK3pVakIDoBzPzr5OMbA330AdNFMRf1yxe9vAa85xnctk_PY8nQcwPXERlM-1DQIOkTt3IWTVkfW0xfc6rZqwCSUlfmT_vCpzt-HkiEFT4JwffEllTDBCqAG-O2pkj',  
      'v' => '5.21',
    );

    $result = file_get_contents($url, false, stream_context_create(array(
        'http' => array(
          'method'  => 'POST',
          'header'  => 'Content-type: application/x-www-form-urlencoded',
          'content' => http_build_query($params)
        )
    )));
	}
?>
