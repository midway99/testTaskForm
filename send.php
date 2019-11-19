<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
</body>
</html>

<?php
$recaptcha = $_POST['g-recaptcha-response'];
if (!empty($recaptcha)) {
    $recaptcha = $_REQUEST['g-recaptcha-response'];
    $secret = '6LdpF8MUAAAAABDO3_5lEJcRMcpXsGm5TqQ-N99p';
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $recaptcha . "&remoteip=" . $_SERVER['REMOTE_ADDR'];
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_TIMEOUT, 10);
    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:8.0) Gecko/20100101 Firefox/8.0");
    $curlData = curl_exec($curl);
    curl_close($curl);
    $curlData = json_decode($curlData, true);
    if ($curlData['success']) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $comments = $_POST['comments'];
        $name = htmlspecialchars($name);
        $phone = htmlspecialchars($phone);
        $comments = htmlspecialchars($comments);
        $name = urldecode($name);
        $phone = urldecode($phone);
        $comments = urldecode($comments);
        $name = trim($name);
        $phone = trim($phone);
        $comments = trim($comments);
        $headers = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
        $headers .= 'info@gmail.com';
        if (mail("nikita.vystoropsky@gmail.com", "Заявка с сайта", "Имя:" . $comments . " . Телефон: " . $phone . " Коментарий: " . $comments, 'From' . $headers . "\r\n")) {
            echo "Сообщение успешно отправлено . </br>";
        } else {
            echo "При отправке сообщения возникли ошибки . </br>";
        }
    } else {
        echo "Подтвердите, что вы не робот и попробуйте еще раз . </br>";
    }
} else {
    echo "поставьте галочку в поле 'Я не робот' для отправки сообщения . </br>";
}

@include_once 'require.php';
?>