<html>
<head>
    <title>Каталог</title>
</head>
<body>
<h1>Каталог</h1>
<div class="goods">
<?php foreach ($dataGoods as $good): ?>
    <div class="good">
			<span class="good-left">
				<a href="#"><h3><?= $good['name'] ?></h3></a>
				<a href="#">
					<img class="good-small-img" src="<?= $good['small_img'] ?>">
				</a>

			</span>

        <span class="good-right">
				<span><?= $good['short_desc'] ?></span>
				<span><?= $good['price'] ?> &#x20bd</span>
				<a class="buy-btn" href="#">Купить</a>
			</span>

    </div>
<?php endforeach; ?>

</div>
<?php if($limit < $totalGoods): ?>
<a href="catalog.php?limit=<?= $limit+2 ?>" class="buy-btn more-btn">Показать ещё</a>
<?php endif; ?>
</body>
</html>