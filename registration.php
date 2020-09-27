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
        <input type="text" name="user_name" placeholder="Имя..." class="reg_input"><br>
        <input type="text" name="user_surname" placeholder="Фамилия..." class="reg_input"><br>
        <input type="text" name="user_login" placeholder="Логин..." class="reg_input"><br>
        <input type="email" name="user_email" placeholder="E-mail..." class="reg_input"><br>
        <input type="text" name="user_password" placeholder="Password" class="reg_input"><br>
        <button type="submit" class="reg_button">Регистрация</button>
    </form>
</div>
</body>
</html>
