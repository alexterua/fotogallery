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
    <section class="header row col-md-12 mb-2 pb-4 pt-4" style="background-color: #e3f5ff;">
        <div class="container" style="display: flex;">
            <div class="dropdown" style="margin-right: 4px;">
                <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Аккаунт
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <?php if (isset($_SESSION['login'])): ?>
                    <a class="dropdown-item" href="/logout.php">Выход</a>
                    <?php else: ?>
                    <a class="dropdown-item" href="/login.php">Войти</a>
                    <a class="dropdown-item" href="#">Регистрация</a>
                    <?php endif; ?>
                </div>
            </div>
            <?php if (isset($_SESSION['login'])): ?>
            <div class="login-info" style="align-self: center;">
                Вы вошли как <span style="font-weight: bold;"><?php echo $_SESSION['login']; ?></span>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <div class="container">
        <h1 class="h1 mb-5" style="text-align: center;">Фотогалерея</h1>
        <div class="gallery row col-md-12 mb-4">
            <ul class="gallery__list list-group" style="display: flex; flex-direction: row; flex-wrap: wrap; margin-right: auto;">
                <?php foreach ($images as $index => $image): ?>
                <li class="gallery__item list-group-item" style="width: 25%;">
                    <a href="/image.php?id=<?php echo $image['id']; ?>" class="gallery__link">
                        <img src="<?php echo $image['path']; ?>" alt="<?php echo $image['alt']; ?>" width="100%" height="200">
                    </a>
                    <p><a href="/image.php?id=<?php echo $image['id']; ?>"><?php echo $image['alt']; ?></a></p>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php if (isset($_SESSION['login'])): ?>
        <div class="add-image row col-md-12 mb-4" style="margin: 0 auto; text-align: center; justify-content: center;">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="image" style="width: 100%;"><h2 class="h2">Добавление изображения</h2></label>
                    <input type="file" name="image">
                </div>
                <button type="submit" class="btn btn-primary">Загрузить</button>
            </form>
        </div>
        <?php endif; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>