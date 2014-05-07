<?php
/* @var $this EtiquetaController */
/* @var $data Etiqueta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nombre), array('view', 'id'=>$data->nombre)); ?>
	<br />


</div>