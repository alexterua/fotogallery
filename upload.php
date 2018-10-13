<?php

session_start();

require_once 'functions.php';
include('data.php');

uploadImage($_FILES['image'], $path);
// Logging
$log = fopen($loggingPath, 'a');
$logString = 'Пользователь с логином ' . $_SESSION['login'] . ' загрузил изображение ' . $_FILES['image']['name'] . ' --- ' . date('H:i:s d.m.Y') . "\n";
fwrite($log, $logString);
fclose($log);

header("Location: /");