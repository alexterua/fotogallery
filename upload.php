<?php

session_start();

require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/data.php';

$imageUploader->upload($path);

// Logging
$log = fopen($loggingPath, 'a');
$logString = 'Пользователь с логином ' . $_SESSION['login'] . ' загрузил изображение ' . $_FILES['image']['name'] . ' --- ' . date('H:i:s d.m.Y') . "\n";
fwrite($log, $logString);
fclose($log);

header("Location: /");