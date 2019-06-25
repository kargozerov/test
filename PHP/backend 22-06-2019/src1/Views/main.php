<h2>Главная страница</h2>
<!-- $pictures -->
<div class="grid">
	<?php foreach ($pictures as $picture):?>
	<div>
		<h2><?php echo $picture->getTitle(); ?></h2> <!-- получили заголовок статьи -->
			<a href="/picture/show/<?php echo $picture->getId(); ?>">
				<img src="img/<?php echo $picture->getPaths()[0]; ?>"> <!-- первая картинка из массива -->
			</a>
	</div>
	<?php endforeach;  ?>
</div>