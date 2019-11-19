<?
$name = $_POST['name'];
$phone = $_POST['phone'];
$comments = $_POST['comments'];

if (isset($name)) {
    if (preg_match("/^[a-zA-Zа-яА-Я'][a-zA-Zа-яА-Я-' ]+[a-zA-Zа-яА-Я']?$/u", $name)) {
        echo ('имя  верно') . '<br/>';
    } else {
        echo ('имя не  верно') . '<br/>';
    }
}

if (isset($phone)) {
    if (preg_match("!^\+7 \(\d{3}\) \d{3}(-\d{2}){2}$!", $phone)) {
        echo ('телефон верен ') . '<br/>';
    } else {
        echo ('телефон не верен') . '<br/>';
    }
}
?>