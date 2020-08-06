<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smoke Store</title>
    <!--styles link-->
    <link rel="stylesheet" href="/css/styles.css">
    <!--normalize link-->
    <link rel="stylesheet" href="/css/normalize.css">
    <!--font awesome-->
    <script src="https://kit.fontawesome.com/a2d96a294b.js" crossorigin="anonymous"></script>
    <!--shortcut icon-->
    <link rel="shortcut icon" href="/img/icon.ico" type="image/x-icon">
</head>

<body>
    <?php if ($_COOKIE['user'] == 'yes'): ?>
    <?php require "blocks/header.php"; ?>
    <?php require "blocks/menu.php"; ?>
    <?php require "blocks/mobile.php"; ?>
    <main class="main">
        <section class="banner">
        </section>
        <section class="popular">
            <div class="container">
                <h2>Популярные</h2>
                <hr>
                <ul class="goods-list gl-popular">
                    <?php
                        for ($i = 0; $i < 4; $i++):
                    ?>
                    <a class="good_link">
                        <li class="good">
                            <div class="good-name">
                                Suorin Air Plus
                            </div>
                            <div class="good-img">
                                <img src="/img/suorin-air-plus.jpg" alt="">
                            </div>
                            <div class="good-price">
                                <span class="good_no_price"></span>
                                <span class="good__price"></span>
                            </div>
                            <div class="good-actions">
                                <button type="" class="btn-to-cart">В КОРЗИНУ</button>
                                <button type="" class="btn-to-like"><i class="fas fa-heart like"></i></button>
                                <span class="likes-count"></span>
                            </div>
                        </li>
                    </a>
                    <?php 
                        endfor;
                    ?>
                </ul>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container">
        </div>
    </footer>
    <?php else: ?>
    <div class="age-check">
        <p class="age-text text-small">Наша продукция продается только лицам старше 21 года</p>
        <p class="age-text text-red">Вам есть 21+?</p>
        <div class="age-buttons">
            <form class="" action="includes/checker.php" method="post">
                <button class="age-button">Да</button>
            </form> 
            <form class="" action="includes/redirect.php" method="post">
                <button type="submit" class="age-button">Нет</button>
            </form
        </div>
    </div>
    <?php endif; ?>
</body>
<!--jquery-->
<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
<!--script-->
<script type="text/javascript" src="js/script.js"></script>

</html>