<?php if (empty($_POST)): ?>
    <?php if ($_GET['auth'] == 'false'): ?>
        <p>Неверный логин или пароль</p>
    <?php endif; ?>
    <form method="post">
        <p>Логин:</p>
        <input type="text" name="login">
        <p>Пароль:</p>
        <input type="password" name="pass">
        <br><br>
        <input type="submit" value="Войти">
    </form>
    <br>
    <a href="index.php?act=reg&c=User">Регистрация</a>
<?php else: ?>
    <p>Добро пожаловать, <?= $_POST['login'] ?>!</p>
<?php endif;?>