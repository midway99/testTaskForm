<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer>
    </script>
</head>
<body>
<div class="form__wrapper">
    <form class="form" action="send.php" method="POST">
        <label class="input-text" for="form">Имя</label>
        <input type="text" min="1" max="35" class="form__name input-text" value="<?php $_POST['name'] ?>"
               placeholder="Имя" name="name" id="name" required>
        <label class="input-text" for="form">Телефон</label>
        <input type="text" min="1" max="35" id="phone" name="phone" placeholder="Телефон"
               class="form__phone input-text" value="+7(999)<?php $_POST['phone'] ?>" required>
        <label for="form">Коментарии</label>
        <textarea class="form__comments" name="comments" cols="30" rows="10"></textarea>
        <button onclick="validate()" name="submit" class="form__btn" type="submit">Отправить</button>
        <div class="g-recaptcha g-recaptcha-response'" data-sitekey="6LdpF8MUAAAAAORwDpwG-YUD8yGSVLd_sQ4FDmsA"></div>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>
