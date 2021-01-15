<div class="goods-in-cart">
    <?php foreach ($cart as $item): ?>
    <div class="good-in-cart">
        <img class="good-in-cart-small-img" src="data/img/<?= $item['small_img'] ?>">
        <h3><?= $item['name'] ?></h3>
        <span><?= $item['price'] ?> &#x20bd</span>
        <span><?= $item['count'] ?> шт.</span>
        <a class="del-btn" href="index.php?c=cart&act=delete&id=<?= $item['id_cart'] ?>" onclick="alert('Товар удален')">Удалить</a>
    </div>
    <?php endforeach; ?>
</div>

    <div class="cart-sum">
        <?php if($cart): ?>
            <p class="cart-items-count">Товаров в корзине: <?= $goodsCount ?></p>
            <p class="cart-items-count">Общая стоимость: <?= $totalPrice ?> &#x20bd</p>
        <?php else: ?>
            <p class="cart-items-count">Корзина пуста</p>
        <?php endif; ?>
    </div>

<?php if($cart): ?>
    <div class="cart-buy">
        <?php if($_SESSION['login']): ?>
            <p class="cart-items-count">
                <a class="buy-btn" href="#">Оформить заказ</a>
            </p>

        <?php else: ?>
            <p class="cart-items-count">Чтобы оформить заказ, <a class="cart-login-link" href="index.php?c=user&act=auth">войдите</a> или <a class="cart-login-link" href="index.php?c=user&act=reg">зарегистрируйтесь</a>.</p>
        <?php endif; ?>
    </div>
<?php endif; ?>

