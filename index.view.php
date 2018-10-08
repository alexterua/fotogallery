<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Фотогалерея</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="h1 mb-5" style="text-align: center;">Фотогалерея</h1>
        <div class="gallery row col-md-12">
            <ul class="gallery__list list-group" style="display: flex; flex-direction: row; flex-wrap: wrap; justify-content: center;">
                <?php foreach ($images as $index => $image): ?>
                <li class="gallery__item list-group-item">
                    <a href="/image.php?id=<?php echo $image['id']; ?>" class="gallery__link">
                        <img src="<?php echo $image['path']; ?>" alt="<?php echo $image['alt']; ?>" width="200" height="150">
                    </a>
                    <p><a href="/image.php?id=<?php echo $image['id']; ?>"><?php echo $image['alt']; ?></a></p>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</body>
</html>