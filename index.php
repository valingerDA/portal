<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Портал заявок</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <h1>ООО "ТехноСервис"</h1>
        <p class="slogan">Быстрые решения для ваших задач</p>
    </header>

    <main>
        <h1>Portal "<?= 'My Not Myself' ?>"</h1>

        <a>Today is <?= date('d.m.Y') ?>, the server runs on PHP <?= PHP_VERSION ?>.</a>
        <div class="auth-buttons">
            <a href="login.php" class="btn">Войти</a>
            <a href="register.php" class="btn btn-primary">Регистрация</a>
        </div>
    </main>
    <script src="js/main.js"></script>
</body>

</html>