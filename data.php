<?php

require_once __DIR__ . '/functions.php';
require_once __DIR__. '/classes/Uploader.php';

$nameDirFromImages = '/images/';
$path = __DIR__ . $nameDirFromImages;
$imagesPath = scandir($path);

$loggingPath = __DIR__ . '/log.txt';

$images = getImagesFromDir($nameDirFromImages, $imagesPath);

$users = [
    'login' => 'admin',
    'password' => password_hash('secret', PASSWORD_DEFAULT)
];

$imageUploader = new Uploader($_FILES['image']);