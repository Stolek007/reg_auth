<?php

// Connecting to Database
require '../db/db.php';

// Get parameters (POST METHOD)
$login_email = filter_var(trim($_POST['login-email']), FILTER_SANITIZE_STRING);
$password = trim($_POST['user_password']);

// Creating errors array
$errors = array();

// Validation (DEFAULT)
if (mb_strlen($login_email) == 0) {
    // Pushing an error
    array_push($errors, 'Пустое поле "Логин/E-mail"');
}

if (mb_strlen($password) == 0) {
    // Pushing an error
    array_push($errors, 'Пустое поле "Пароль"');
}

if (!empty($errors)) {
    // Echo all errors
    for ($i = 0; $i < count($errors); $i++) {
        echo $errors[$i];
    }
    // Close connection
    $mysql->close();
    // Exit the code
    exit();
} else if (empty($errors)) {
    $password = md5($password); // Hashing password
    // @
    $em = '@';
    // Checking for @ in a string
    $pos = stripos($login_email, $em);
    if ($pos != 0) {
        // Get result
        $result = $mysql->query("SELECT * FROM `users` WHERE `email` = '$login_email' AND `password` = '$password'");
        // The resulting array
        $user = $result->fetch_assoc();

        if (!empty($user)) {
            // SESSION DATA (DEFAULT)
            $_SESSION['logged_user'] = $user;
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_surname'] = $user['surname'];
            $_SESSION['user_login'] = $user['login'];
            $_SESSION['user_email'] = $user['email'];
            header('Location: ../profile.php');
        } else if (empty($user)) {
            echo "Пользователь с таким E-mail не зарегестрирован";
            // Closing connection
            $mysql->close();
            // Exit the code
            exit();
        }
    } else {
        // Get result
        $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login_email' AND `password` = '$password'");
        // The resulting array
        $user = $result->fetch_assoc();

        if (!empty($user)) {
            // SESSION DATA (DEFAULT)
            $_SESSION['logged_user'] = $user;
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_surname'] = $user['surname'];
            $_SESSION['user_login'] = $user['login'];
            $_SESSION['user_email'] = $user['email'];
            header('Location: ../profile.php');
        } else if (empty($user)) {
            echo "Пользователь с таким логином не зарегестрирован";
            // Closing connection
            $mysql->close();
            // Exit the code
            exit();
        }

    }
}
// In the END -> close connection AND exit the code
$mysql->close();
exit();