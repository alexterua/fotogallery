<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Просмотр изображения №<?php echo $id ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="h1"><?php echo $images[$id - 1]['alt']; ?></h1>
        <div class="row col-md-12 mb-2">
            <img src="<?php echo $images[$id - 1]['path']; ?>" alt="<?php echo $images[$id - 1]['alt']; ?>" style="max-width: 100%;">
        </div>
        <a href="/" class="btn btn-primary mb-2">Назад</a>
    </div>
</body>
</html>