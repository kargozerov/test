
<?php if (isset($addResult)):?>
	<p><?php echo $addResult; ?></p>
	<p><?php endif; ?></p>
<!-- форма добавления картины -->
<form action="/picture/add" method="post" enctype="multipart/form-data">
	<div class="form-group">
	<p>
		<label>Название<input class="form-control" type="text" name="title"></label>
	</p>
	</div>
	<div class="form-group">
	<p>
		<label>Описание</label>
		<textarea name="description" class="form-control"></textarea>
	</p>
	</div>
	<div class="form-group">
	<p>
		<label>Год <input type="date" name="yearCreated" class="form-control"></label>
	</p>
	</div>
	<div class="form-group">
	<p>
		<label>Фото<input type="file" name="img" accept="image/*" class="form-control"></label>
	</p>
	</div>
	<div class="form-group">
	<p>
		<input type="submit" value="Добавить" class="btn btn-primary">
	</p>
	</div>	

</form>