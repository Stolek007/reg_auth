<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Вход</title>

    <link rel="stylesheet" href="css/auth.css">
</head>
<body>
<div class="wrapper">
    <form action="php/auth.php" method="post">
        <input type="text" name="login-email" id="login-email" placeholder="Логин"><br>
        <input type="password" name="user_password" id="password" placeholder="Пароль..."
               onfocus="this.select(); this.setAttribute('type','password');"
               onclick="this.select(); this.setAttribute('type','text');">
        <button type="submit">Войти</button>
    </form>
</div>

<!-- Script for change type from 'password' to 'text' or from 'text' to 'password' -->
<script type="text/javascript">
    function password_set_attribute() {
        if (document.getElementsByName("login_text_password")[0].value.replace(/\s+/g, ' ') == "" || document.getElementsByName[0].value == null) {
            document.getElementsByName("login_text_password")[0].setAttribute('type', 'text')
            document.getElementsByName("login_text_password")[0].value = 'Password';
        } else {
            document.getElementsByName("login_text_password")[0].setAttribute('type', 'password')
        }
    }
</script>
</body>
</html>