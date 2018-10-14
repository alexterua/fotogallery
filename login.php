<?php

session_start();

require_once __DIR__ . '/data.php';
require_once __DIR__ . '/functions.php';


if (checkPassword(getUsersList($users), $_POST['login'], $_POST['password'])) {
    $_SESSION['login'] = $_POST['login'];
    header("Location: /");
} else {
    include('login.view.php');
}