<?php if (empty($_POST)): ?>
    <?php if ($_GET['login'] == 'exist'): ?>
        <p>Такой логин занят</p>
    <?php endif; ?>

    <form method="post">
        <p>Логин:</p>
        <input type="text" name="login">
        <p>Имя:</p>
        <input type="text" name="name">
        <p>Пароль:</p>
        <input type="password" name="pass">
        <p>Телефон:</p>
        <input type="text" name="phone">
        <br/><br/>
        <input type="submit" value="Зарегистрироваться" />
    </form>
<?php else: ?>
    <p>Пользователь <?= $_POST['login'] ?> успешно зарегистрирован</p>
    <br><br>
    <a href="index.php?c=user&act=auth">Войти</a>
<?php endif; ?>