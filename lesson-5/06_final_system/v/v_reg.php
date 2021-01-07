<?php if (empty($_POST)): ?>
    <?php if ($_GET['email'] == 'exist'): ?>
    <p>Такой логин занят</p>
    <?php endif; ?>

    <form method="post">
        <p>Логин:</p>
        <input type="text" name="login">
        <p>Имя:</p>
        <input type="text" name="name">
        <p>Пароль:</p>
        <input type="password" name="pass">
    <br/><br/>
    <input type="submit" value="Зарегистрироваться" />
    </form>
<?php else: ?>
    <p>Пользователь <?= $_POST['login'] ?> успешно зарегистрирован</p>
<?php endif; ?>
