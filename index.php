<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма регистрации</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-4">
        <?php
            if($_COOKIE['user'] == ''):
        ?>
        <div class="row">
            <div class="col">
                <h2>Форма регистрации</h2>
                <form action="check.php" method="post">
                <input type="text" class="form-control" name="login" id="login" placeholder="Login"><br>
                <input type="text" class="form-control" name="name" id="name" placeholder="Name"><br>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Password"><br>
                <button class="btn btn-success" type="submit">Зарегистрироваться</button>
                </form>
            </div>
            <div class="col">
                <h2>Форма авторизации</h2>
                <form action="auth.php" method="post">
                <input type="text" class="form-control" name="login" id="login" placeholder="Login"><br>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Password"><br>
                <button class="btn btn-success" type="submit">Авторизоваться</button>
                </form>
            </div>
            <?php else: ?>
                <p>Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="exit.php">сюда</a></p>
            <?php endif;?>
        </div>
    </div>    
</body>
</html>