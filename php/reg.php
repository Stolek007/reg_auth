<?php

require '../db/db.php'; // Connecting to Database and starting session

// Get parameters (POST METHOD)
$name = filter_var(trim($_POST['user_name']), FILTER_SANITIZE_STRING);
$surname = filter_var(trim($_POST['user_surname']), FILTER_SANITIZE_STRING);
$login = filter_var(trim($_POST['user_login']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['user_email']), FILTER_SANITIZE_EMAIL);
$password = trim($_POST['user_password']);

$errors = array(); // Creating errors array

// Validation (DEFAULT)
if (mb_strlen($name) < 2) {
    // Pushing error to array
    array_push($errors, 'Слишком короткое Имя');
}

if (mb_strlen($surname) < 2) {
    // Pushing error to array
    array_push($errors, 'Слишком короткая Фамилия');
}

if (mb_strlen($login) < 3) {
    // Pushing error to array
    array_push($errors, 'Слишком ненадежный Логин');
}

if (mb_strlen($email) == 0) {
    // Pushing error to array
    array_push($errors, 'Пустое поле "E-mail"');
}

if (!empty($errors)) {

    // Echo all errors
    for ($i = 0; $i < count($errors); $i++) {
        echo $errors[$i];
    }
    $mysql->close(); // Closing connection
    exit(); // Exit
} else if (empty($errors)) {

    // Testing if there are any users with same login/email
    $testing = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' OR `email` = '$email'");
    if (!empty($testing->fetch_assoc())) {
        echo "Пользователь с таким login/email уже существует";
        $mysql->close();
        exit();
    } else if (empty($testing->fetch_assoc())) {
        $password = password_hash($password); // Hashing password
        // Registration user
        $res = $mysql->query("INSERT INTO `users` (`name`, `surname`, `login`, `email`, `password`) VALUES ('$name', '$surname', '$login', '$email', '$password')");
        $mysql->close();
        // Redirecting to Main Page
        header('Location: ../index.php');
        exit(); // If something went wrong -> exit
    }

}

$mysql->close();
exit();