<?php
/* @var $this PublicacionController */
/* @var $model Publicacion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'publicacion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',
                        array('size'=>50,
                            'maxlength'=>50,
                            
                            'class'=>'form-control',
                            'placeholder'=>'nombre',
                            
                            )); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'contenido'); ?>
		<?php echo $form->textArea($model,'contenido',
                        array('rows'=>50,
                            'cols'=>50,
                            'class'=>'form-control',
                            'placeholder'=>'Escribe aqui tu comentario'
                            )); ?>
		<?php echo $form->error($model,'contenido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USUARIO_id'); ?>
		<?php echo $form->dropDownList($model,'USUARIO_id',CHtml::ListData(Usuario::model()->findAll(),'id','nombre'),array('empty'=>'Selecciona Autor de publicación')); ?>
		<?php echo $form->error($model,'USUARIO_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Comentar' : 'Enviar' , array(
                    'class'=>'btn',
                ) ); ?>
	</div>

<?php $this->endWidget(); ?>
<?php
  $this->widget('CMultiFileUpload', array(
     'model'=>$model,
     'attribute'=>'files',
     'accept'=>'jpg|gif|png|svg|jpeg',
     'options'=>array(
        // 'onFileSelect'=>'function(e, v, m){ alert("onFileSelect - "+v) }',
        // 'afterFileSelect'=>'function(e, v, m){ alert("afterFileSelect - "+v) }',
        // 'onFileAppend'=>'function(e, v, m){ alert("onFileAppend - "+v) }',
        // 'afterFileAppend'=>'function(e, v, m){ alert("afterFileAppend - "+v) }',
        // 'onFileRemove'=>'function(e, v, m){ alert("onFileRemove - "+v) }',
        // 'afterFileRemove'=>'function(e, v, m){ alert("afterFileRemove - "+v) }',
     ),
     'denied'=>'File is not allowed',
     'max'=>5, // max 10 files
 
 
  ));
?>
</div><!-- form -->