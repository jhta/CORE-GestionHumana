<?php
/* @var $this TrendingController */
/* @var $model Trending */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'PUBLICACION_id'); ?>
		<?php echo $form->textField($model,'PUBLICACION_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ETIQUETA_nombre'); ?>
		<?php echo $form->textField($model,'ETIQUETA_nombre',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->