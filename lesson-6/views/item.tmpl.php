<div class="catalog-item">
	<span class="good-left">
		<h1><?= $item[0]['name'] ?></h1>
		<img class="good-big-img" src="data/img/<?= $item[0]['big_img'] ?>">
	</span>

    <span class="good-right">
		<span><?= $item[0]['long_desc'] ?></span>
		<span><?= $item[0]['price'] ?> &#x20bd</span>
		<a class="buy-btn" href="index.php?c=goods&act=toCart&id=<?= $item[0]['id'] ?>" onclick="alert('Товар добавлен в корзину')">Купить</a>
	</span>
</div>
