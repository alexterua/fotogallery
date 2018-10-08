<?php

require_once 'functions.php';
include('data.php');

if (isset($_FILES['image'])) {
    if ($_FILES['image']['error'] == 0) {
        if ($_FILES['image']['type'] === 'image/jpeg' || $_FILES['image']['type'] === 'image/jpg' || $_FILES['image']['type'] === 'image/png') {
            move_uploaded_file($_FILES['image']['tmp_name'], $path . $_FILES['image']['name']);
        }
    }
}

header("Location: /");