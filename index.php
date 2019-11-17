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

<?php
@include_once 'mail.php';
@include_once 'require.php';
?>
<div class="form__wrapper">
    <form class="form" action="./newPage.php" method="post">
        <label class="input-text" for="form">Имя</label>
        <input type="text"  min="1" max="35"  class="form__name input-text" value="<?php $_POST[name]?>" placeholder="Имя" name="name" id="name"  required>
        <label class="input-text" for="form">Телефон</label>
        <input  type="text" min="1" max="35" pattern="^((8|\+38)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$" name="phone" placeholder="Телефон" value="+38" class="form__phone input-text" required>
        <label for="form">Коментарии</label>
        <textarea name="messages" class="form__comments" id=""  cols="30" rows="10"></textarea>
        <button class="form__btn" name="sendBtn" type="submit">Отправить</button>
        <div class="g-recaptcha g-recaptcha-response'" data-sitekey="6LdpF8MUAAAAAORwDpwG-YUD8yGSVLd_sQ4FDmsA"></div>
    </form>
</div>
<script src="script.js"></script>
</body>
</html>
