<?php

require_once 'functions.php';
include('data.php');

uploadImage($_FILES['image'], $path);

header("Location: /");