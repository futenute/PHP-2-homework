<?php print_r($good) ?>
<!DOCTYPE html>
<html>
<head>
	<title>Админка</title>
</head>
<body>
	<?php if($_SESSION['role'] == 1): ?>
		<div class="goodsAdmin">
			<?php foreach($goods as $good): ?>
				<form action="index.php?c=admin&act=change" method="post" class="form-admin-change" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?= $good['id']?>">
					<input type="text" name="name" value="<?= $good['name']?>">
					<input type="text" name="price" value="<?= $good['price']?>">
					<span class="admin-change-img">
						<div>
							<p>Маленькое изображение</p>
							<img class="good-small-img" src="data/img/<?= $good['small_img'] ?>">
							<input type="file" name="small_img" accept="image/*" value="<?= $good['small_img'] ?>">
						</div>
						<div>
							<p>Большое изображение</p>
							<img class="good-big-img" src="data/img/<?= $good['big_img'] ?>">
							<input type="file" name="big_img" accept="image/*" value="<?= $good['big_img'] ?>">
						</div>
					</span>
					<p>Краткое описание:</p>
					<textarea name="short_desc" cols="50" rows="2"><?= $good['short_desc']?></textarea>
					<p>Полное описание:</p>
					<textarea name="long_desc" cols="50" rows="8"><?= $good['long_desc']?></textarea>
					<input type="submit" name="submit" value="Сохранить">
					<a href="index.php?c=admin&act=delete&id=<?= $good['id'] ?>"><button type="button">Удалить товар</button></a>
				</form>
			<?php endforeach; ?>
		</div>
		<h2>Добавить новый товар</h2>
		<form action="index.php?c=admin&act=change" method="post" class="form-admin-create" enctype="multipart/form-data">
			<p>Название товара:</p>
			<input type="text" name="name">
			<p>Цена товара:</p>
			<input type="text" name="price">
			<p>Маленькое изображение:</p>
			<input type="file" name="small_img" accept="image/*">
			<p>Большое изображение:</p>
			<input type="file" name="big_img" accept="image/*">
			<p>Краткое описание:</p>
			<textarea name="short_desc" cols="80" rows="2"></textarea>
			<p>Полное описание:</p>
			<textarea name="long_desc" cols="80" rows="8"></textarea>
			<input type="submit" name="submit" value="Добавить">
		</form>
	<?php endif; ?>
</body>
</html>