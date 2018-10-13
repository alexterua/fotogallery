<?php

function dd($arr)
{
    echo '<pre>';
    var_dump($arr);
    echo '</pre>';
    die;
}

function getImagesFromDir($nameDirFromImages, $imagesPath)
{
    $images = [];
    $i = 0;

    foreach ($imagesPath as $imagePath) {

        if ($imagePath !== '.' && $imagePath !== '..') {

            $images[$i]['id'] = $i + 1;
            $images[$i]['path'] = $nameDirFromImages . $imagePath;
            $images[$i]['alt'] = pathinfo($images[$i]['path'])['filename'];
            $i++;
        }
    }

    return $images;
}

function uploadImage ($arr, $path)
{
    if (isset($arr)) {
        if ($arr['error'] == 0) {
            if ($arr['type'] === 'image/jpeg' || $arr['type'] === 'image/jpg' || $arr['type'] === 'image/png') {
                move_uploaded_file($arr['tmp_name'], $path . $arr['name']);
            }
        }
    }
}

function getUsersList($users)
{
    return $users;
}

function existsUser($login)
{
    if (isset($login)) {
        return true;
    }

    return false;
}

function checkPassword($users, $login, $password)
{
    if (($login == $users['login']) && password_verify($password, $users['password'])) {
        return true;
    }
    return false;
}

function getCurrentUser($users)
{
    $login = $users['login'];
    if (isset($login)) {
        return $login;
    }
    return null;
}