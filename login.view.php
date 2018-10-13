<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма входа</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1 class="h1 mb-4" style="text-align: center;">Форма входа</h1>
    <div class="row col-md-12 mb-4" style="justify-content: center;">
        <form class="form-inline" action="login.php" method="post">
            <div class="form-group mb-2">
                <label for="login" class="sr-only">Логин:</label>
                <input type="text" name="login" class="form-control" placeholder="Логин">
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label for="password" class="sr-only">Пароль:</label>
                <input type="password" class="form-control" name="password" placeholder="Пароль">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Войти</button>
        </form>
    </div>
</div>
</body>
</html>