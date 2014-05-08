<?php
/* @var $this TrendingController */
/* @var $data Trending */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ETIQUETA_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->ETIQUETA_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PUBLICACION_id')); ?>:</b>
	<?php echo CHtml::encode($data->PUBLICACION_id); ?>
	<br />
        <b>
        <?php echo CHtml::link(CHtml::encode('ver'), array('view', 'PUBLICACION_id'=>$data->PUBLICACION_id,'ETIQUETA_nombre'=>$data->ETIQUETA_nombre)); ?>
        </b>


</div>