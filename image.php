<?php

require_once __DIR__ . '/functions.php';

include('data.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    include ('image.view.php');
} else {
    echo 'ERROR $_GET[\'id\']';
}