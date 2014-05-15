<?php foreach($comentarios as $comentario): ?>
<div class="comentario" id="c<?php echo $comentario->id; ?>">

	<?php echo CHtml::link("#{$comentario->id}", $comentario->getUrl($post), array(
		'class'=>'cid',
		'title'=>'Enlace Permanente para un comentario',
	)); ?>

	<div class="author">
		<?php echo $comentario->nombre; ?> dice:
	</div>

	<div class="time">
		<?php echo date('m d, Y \a\t H:i',$comentario->fecha_creacion); ?>
	</div>

	<div class="content">
		<?php echo nl2br(CHtml::encode($comentario->comentario)); ?>
	</div>

</div><!-- comentario -->
<?php endforeach; ?>