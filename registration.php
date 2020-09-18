<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>

    <link rel="stylesheet" href="css/reg.css">
</head>
<body>
<div class="container">
    <form action="/php/reg.php" method="post">
        <input type="text" name="user_name" placeholder="Имя..."><br>
        <input type="text" name="user_surname" placeholder="Фамилия..."><br>
        <input type="text" name="user_login" placeholder="Логин..."><br>
        <input type="email" name="user_email" placeholder="E-mail..."><br>
        <input type="text" name="user_password" placeholder="Password"><br>
        <button type="submit">Регистрация</button>
    </form>
</div>
</body>
</html>