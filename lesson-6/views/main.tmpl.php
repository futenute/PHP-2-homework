<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
    <link rel="stylesheet" type="text/css" href="views/style.css">
</head>
<body>
<div class="header-wrap">
    <img class="logo-img" src="data/img/logo.jpg">
    <ul class="menu">
        <li class="menu-list"><a href="index.php?c=goods&act=catalog" class="menu-link">Каталог</a></li>
        <li class="menu-list"><a href="#" class="menu-link">Контакты</a></li>
        <li class="menu-list"><a href="#" class="menu-link">Отзывы</a></li>
        <li class="menu-list"><a href="index.php?c=cart&act=cart" class="menu-link">Корзина</a></li>
        <?php if($_SESSION['role'] == 1): ?>
            <li class="menu-list"><a href="#" class="menu-link">Админка</a></li>
            <li class="menu-list"><a href="#" class="menu-link">Заказы</a></li>
        <?php elseif ($_SESSION['role'] === '0'): ?>
            <li class="menu-list"><a href="index.php?c=user&act=private" class="menu-link">Личный кабинет</a></li>
        <?php endif; ?>
        <?php if($_SESSION['login']): ?>
            <li class="menu-list"><a href="index.php?c=user&act=logout" class="menu-link">Выйти (<?= $_SESSION['login'] ?>)</a></li>
        <?php else: ?>
            <li class="menu-list"><a href="index.php?c=user&act=auth" class="menu-link">Войти</a></li>
        <?php endif; ?>
    </ul>
</div>
<div class="content">
    <h1><?=$title?></h1>
    <?=$content?>
</div>
<div class="footer">
    <p>Это подвал</p>
</div>
</body>
</html>