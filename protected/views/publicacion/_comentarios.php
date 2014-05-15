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
                <?php date_default_timezone_set('America/Bogota'); ?>
		<?php echo date('F d, Y \a\t H:i a',$comentario->fecha_creacion); ?>
	</div>

	<div class="content">
		<?php echo nl2br(CHtml::encode($comentario->comentario)); ?>
	</div>

</div><!-- comentario -->
<?php endforeach; ?>