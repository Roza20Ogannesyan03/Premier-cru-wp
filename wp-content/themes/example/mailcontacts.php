<?php

//define('SITE_KEY', '1234');
//define('SECRET_KEY', '1234');

require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

if ($_POST) {
    // function getCaptcha($SecretKey) {
    // 	$Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".SECRET_KEY."&response={$SecretKey}");
    // 	$Return = json_decode($Response);
    // 	return $Return;
    // }

    // $Return = getCaptcha($_POST['g-recaptcha-response-form-callback']);
    // var_dump($Return);

    // if($Return->success == true && $Return->score >= 0.4){
    $errors = array();
    if (empty($_POST['name-contacts'])) {
        $errors['name-contacts'] = 'Введите Ваше имя';
    }

    if (empty($_POST['number-contacts'])) {
        $errors['number-contacts'] = 'Введите Ваш номер телефона';
    }


    if (empty($_POST['message'])) {
        $errors['message'] = 'Введите Ваше сообщение';
    }



    $error_output = '';

    if (!empty($errors)) {
        $error_output  .= '<ul class="errors-list">';

        foreach ($errors as $key => $value) {
            $error_output .= '<li data-error="' . $key . '"></li>';
        }


        $error_output .= '<li class="errors-list__item">Заполните обязательные поля!</li>';
        $error_output .= '</ul>';


        http_response_code(422);
    }
    echo $error_output;
    die();
    /*$message = "ФИО - ".$_POST['callback-name']."\nТелефон - ".$_POST['callback-mobile']."\nСтаница откуда отправили форму - ".$_POST['callback-from'];*/

    $name = $_POST['name-contacts'];
    $phone = $_POST['number-contacts'];
    $message_cont = $_POST['message'];


    $message = "
		<p>Имя - $name</p>
		<p>Телефон - $phone</p>
        <p>Сообщение - $message_cont</p>
		";

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->isSMTP();
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    $mail->SMTPDebug = 0;
    $mail->Host = 'ssl://smtp.gmail.com';
    $mail->Port = 465;
    $mail->Username = 'rozaogannesyan109@gmail.com';
    $mail->Password = 'vauwqichjdwptkzn';
    $mail->setFrom('rozaogannesyan109@gmail.com', 'Premier cru');
    $mail->addAddress('rozaogannesyan109@gmail.com');
    // $mail->addAddress('tp@abeta.ru');
    $mail->Subject = 'Обратный звонок с сайта ';
    $mail->isHTML(true);
    $mail->Body = $message;

    if ($mail->send()) {
        $ok = true;
    }

    if ($ok) {
        http_response_code(200);
        echo '<div class="success"><p>Ваше сообщение успешно отправлено!</p></div>';
    } else {
        http_response_code(422);
        echo '<ul class="errors-list"><li class="errors-list__item">Что-то пошло не так!</li></ul>';
    }
} else {
    // var_dump($Return);
    echo '<ul class="errors-list"><li class="errors-list__item">Попробуйте позже!</li></ul>';
}
