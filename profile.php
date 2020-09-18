<?php require 'db/db.php'; // Connecting to DataBase ?>
<?php if (isset($_SESSION['logged_user'])) { // Checking for user logged in
} else {
    header('Location: /index.php');
} ?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Профиль</title>
</head>
<body>
<a href="php/logout.php">Выйти</a><br><br>

<?= 'User ID: ' . $_SESSION['user_id'] . '<br />';
echo 'User Name: ' . $_SESSION['user_name'] . '<br />';
echo 'User Surname: ' . $_SESSION['user_surname'] . '<br />';
echo 'User Login: ' . $_SESSION['user_login'] . '<br />';
echo 'User E-mail: ' . $_SESSION['user_email'] . '<br />';
?>

</body>
</html>