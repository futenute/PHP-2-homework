<div class="goods">
    <?php foreach ($goods as $good): ?>
    <div class="good">
			<span class="good-left">
				<a href="index.php?c=goods&act=item&id=<?=$good['id']?>"><h3><?= $good['name'] ?></h3></a>
				<a href="index.php?c=goods&act=item&id=<?=$good['id']?>">
					<img class="good-small-img" src="data/img/<?= $good['small_img'] ?>">
				</a>

			</span>

        <span class="good-right">
				<span><?= $good['short_desc'] ?></span>
				<span><?= $good['price'] ?> &#x20bd</span>
				<a class="buy-btn" href="index.php?c=goods&act=toCart&id=<?= $good['id'] ?>" onclick="alert('Товар добавлен в корзину')">Купить</a>
			</span>

    </div>
    <?php endforeach; ?>
</div>
