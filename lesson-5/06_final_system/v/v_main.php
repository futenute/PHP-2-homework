<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title><?=$title?></title>
<meta content="text/html; charset=Windows-1251" http-equiv="content-type">
<link rel="stylesheet" type="text/css" media="screen" href="v/style.css" />
</head>
<body>
<div id="header">
    <h1><?=$title?></h1>
</div>

<div id="menu">
    <a href="index.php">Читать текст</a> |
    <a href="index.php?c=page&act=edit">Редактировать текст</a>
    <?php if ($_SESSION['login'] && $_SESSION['pass']): ?>
    |<a href="index.php?c=user&act=private">Личный кабинет</a> |
    <a href="index.php?c=user&act=logout">Выйти (<?= $_SESSION['login'] ?>)</a>
    <?php else: ?>
    |<a href="index.php?c=user&act=auth">Войти</a> |
    <a href="index.php?c=user&act=reg">Регистрация</a>
    <?php endif; ?>
</div>

<div id="content">
    <?=$content?>
</div>

<div id="footer">
    Все права защищены. Адрес. Телефон.
</div>
</body>
</html>