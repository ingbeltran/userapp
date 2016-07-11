<?php $this->title = 'Libros'; ?>


<?php if (count($model)): ?>
	<?php foreach ($model as $item): ?>
		<div class="well">
			<h3><?=$item->titulo ?></h3>
			<p>
				<?=$item->resumen ?>
			</p>
		</div>
	<?php endforeach ?>
<?php endif ?>