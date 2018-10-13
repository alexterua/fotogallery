<?php

require_once 'functions.php';

$nameDirFromImages = '/images/';
$path = __DIR__ . $nameDirFromImages;
$imagesPath = scandir($path);

$loggingPath = __DIR__ . '/log.txt';

$images = getImagesFromDir($nameDirFromImages, $imagesPath);

$users = [
    'login' => 'admin',
    'password' => password_hash('secret', PASSWORD_DEFAULT)
];