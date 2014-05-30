<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Crear Perfil</h4>
      </div>
<?php $model->setScenario('changePassword');
      $s->performAjaxValidation($model);
?>
<?php if(Yii::app()->user->hasFlash('passChange')): ?>
    <div class="alert alert-success">
            <?php echo Yii::app()->user->getFlash('passChange'); ?>
    </div>
<?php endif;?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'change-password',
	'enableAjaxValidation'=>true,
        'enableClientValidation'=>true,
        'clientOptions'=>array('validateOnSubmit'=>true),
        'htmlOptions' => array('enctype' => 'multipart/form-data','autocomplete'=>'off'),
        
)); ?>

    <div class="modal-body col-xs-10 col-xs-offset-1">

	<?php echo $form->errorSummary($model,'Por favor corrija los siguientes campos:'); ?>

	<div class="row">
		<h4 class="text-center" >Contraseña</h4>
		<?php echo $form->passwordField($model,'old_pass',array(
                    'size'=>30,
                    'maxlength'=>150,
                    'class'=>'form-control',
                    'value'=>'',
                    'placeholder'=>'Escribe tu contraseña actual'
                    )); ?>
		<?php echo $form->error($model,'old_pass'); ?>
	</div>
        
	<div class="row">
		<h4 class="text-center" >Nueva Contraseña</h4>
		<?php echo $form->passwordField($model,'new_pass',array(
                    'size'=>30,
                    'maxlength'=>150,
                    'class'=>'form-control',
                    'value'=>'',
                    'placeholder'=>'Ingresa tu nueva contraseña'
                    )); ?>
		<?php echo $form->error($model,'new_pass'); ?>
	</div>
        
        <div class="row">
		<h4 class="text-center" >Repite contraseña</h4>
		<?php echo $form->passwordField($model,'repeat_pass',array(
                    'size'=>30,
                    'maxlength'=>150,
                    'class'=>'form-control',
                    'placeholder'=>'Vuelve a escribir tu nueva contraseña'
                    )); ?>
		<?php echo $form->error($model,'repeat_pass'); ?>
	</div>             
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <?php echo CHtml::submitButton('Cambiar',array(
         'class'=>'btn btn-primary btn-edit',
        )); ?>
    </div>
<?php $this->endWidget(); ?>
</div>
</div><!-- form -->
    </div>
  </div>
</div>
