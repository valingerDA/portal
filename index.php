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
        <h1>Portal "<?= 'Главный портал' ?>"</h1>

        <a>Today is <?= date('d.m.Y') ?>, the server runs on PHP <?= PHP_VERSION ?>.</a>
        <div class="auth-buttons">
            <a href="login.php" class="btn">Войти</a>
            <a href="register.php" class="btn btn-primary">Регистрация</a>
        </div>

<section>
    <div class="services-container">
        <h2>Наши услуги</h2>
        <p class="services-description">
            Мы предлагаем качественные услуги для вашего комфорта и успеха.
        </p>
        <div class="services-list">
            <div class="service-card">
                <h3>Веб-разработка</h3>
                <p>Создание современных и удобных сайтов для бизнеса.</p>
            </div>
            <div class="service-card">
                <h3>Дизайн</h3>
                <p>Разработка привлекательного и уникального дизайна.</p>
            </div>
            <div class="service-card">
                <h3>Продвижение</h3>
                <p>Помощь в развитии и продвижении вашего проекта.</p>
            </div>
        </div>
    </div>
</section>        

    </main>
    <script src="js/main.js"></script>
</body>

</html>