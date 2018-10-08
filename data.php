<?php

require_once 'functions.php';

$nameDirFromImages = '/images/';
$path = __DIR__ . $nameDirFromImages;
$imagesPath = scandir($path);

$images = getImagesFromDir($nameDirFromImages, $imagesPath);