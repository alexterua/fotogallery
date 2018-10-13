<?php

session_start();

require_once 'data.php';
require_once 'functions.php';


if (checkPassword(getUsersList($users), $_POST['login'], $_POST['password'])) {
    $_SESSION['login'] = $_POST['login'];
    header("Location: /");
} else {
    include('login.view.php');
}