<?php
/* @var $this ComentarioController */
/* @var $model Comentario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comentario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	
	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->textField($model,'nombre',
                        array('size'=>30,
                            'maxlength'=>30,
                             'class'=>'form-control input-comentario',
                            'placeholder'=>'nombre',
                            'required'=>'required',
                            )); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->textArea($model,'comentario',
                        array('rows'=>6,
                            'cols'=>50,
                             'class'=>'form-control input-comentario',
                            'placeholder'=>'Escribe aqui tu comentario',
                            'required'=>'required',
                            )); ?>
		<?php echo $form->error($model,'comentario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Comentar' : 'Guardar', array(
                    'class'=>'btn btn-primary',
                    'style'=>'margin-top:15px;'
                )); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->