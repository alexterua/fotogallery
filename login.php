<?php

require_once 'data.php';
require_once 'functions.php';

session_start();

$_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
$_SESSION = $_POST;

if (isset($_SESSION['login']) && isset($_SESSION['password'])) {
    $login = $_SESSION['login'];
    $password = password_verify($_SESSION['password'], PASSWORD_DEFAULT);
    header("Location: /");
} else {
    include('login.view.php');
}