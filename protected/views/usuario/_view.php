<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
?>

<div class="view">
        
        <b><?php echo CHtml::link('Ver', array('view', 'id'=>$data->id)); ?></b>
        <br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('correo')); ?>:</b>
	<?php echo CHtml::encode($data->correo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />
        
        <?php if($data->nombre_foto != ''){ ?>
        <img src="<?php echo Yii::app()->request->baseUrl.$data->nombre_foto.$data->formato_foto ?>">
        <?php } ?>


</div>