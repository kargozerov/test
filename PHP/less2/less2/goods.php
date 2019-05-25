<?php
$goods = [
	[
		'id' => 1,
		'title' => 'Piano',
		'price' => 2341,
	],
	[
		'id' => 2,
		'title' => 'Gitar',
		'price' => 567,
	],
	[
		'id' => 3,
		'title' => 'Drum',
		'price' => 2564,
	],

];




?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>goods1</title>
</head>
<body>
	<section>
		<?php foreach ($goods as $value): ?>
			<h3><?php echo $value['title']; ?></h3>

			<!--      <img src="/img/goods/<?php echo $good['img']; ?>">     -->
			<h3><?php echo $value['price']; ?></h3>
			<a href="good.php?id=<?php echo $good[id]; ?>">Podrobnee</a>



		<?php endforeach; ?>
	</section>
</body>
</html>