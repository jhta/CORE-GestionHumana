<?php foreach($comentarios as $comentario): ?>
<div class="comentario" id="c<?php echo $comentario->id; ?>">

	<?php echo CHtml::link("#{$comentario->id}", $comentario->getUrl($post), array(
		'class'=>'cid',
		'title'=>'Enlace Permanente para un comentario',
	)); ?>

	<label class="author">
		<?php echo $comentario->nombre; ?> 
	</label>

	<small class="time text-muted"> * <?php echo date('F d, Y \a \l\a\s H:i:s a',strtotime($comentario->fecha)); ?>
	</small>

	<div class="content">
		<?php echo nl2br(CHtml::encode($comentario->comentario)); ?>
	</div>

</div><!-- comentario -->
<?php endforeach; ?>