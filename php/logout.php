<?php

// Connecting to DataBase
require '../db/db.php';

// Unset session
unset($_SESSION['logged_user']);

// Redirecting to Main Page
header('Location: ../index.php');