<?php

require_once 'functions.php';
require_once 'data.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    include ('image.view.php');
} else {
    echo 'ERROR $_GET[\'id\']';
}