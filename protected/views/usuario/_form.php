<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Crear Perfil</h4>
      </div>
<?php if(Yii::app()->user->hasFlash('usercreate')): ?>
    <div class="alert alert-success">
            <?php echo Yii::app()->user->getFlash('usercreate'); ?>
    </div>
<?php endif;?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	'enableAjaxValidation'=>false,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
        'autocomplete'=>'off',
)); ?>

    <div class="modal-body col-xs-10 col-xs-offset-1">

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<h4 class="text-center" >Nombre</h4>
		<?php echo $form->textField($model,'nombre',array(
                    'size'=>50,
                    'maxlength'=>50,
                    'placeholder'=>'Escribe Nombre completo'
                    )); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

        <div class="row">
		<h4 class="text-center" >Nombre de usuaio</h4>
		<?php echo $form->textField($model,'username',array(
                    'size'=>60,
                    'maxlength'=>60,
                    'placeholder'=>'Escribe Nombre de usuario'
                    )); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>
        
	<div class="row">
		<h4 class="text-center" >Contraseña</h4>
		<?php echo $form->passwordField($model,'contrasena',array(
                    'size'=>30,
                    'maxlength'=>150,
                    'placeholder'=>'ingresa una contraseña'
                    )); ?>
		<?php echo $form->error($model,'contrasena'); ?>
	</div>

	<div class="row">
		<h4 class="text-center" >Correo</h4>
		<?php echo $form->textField($model,'correo',array(
                    'size'=>60,
                    'maxlength'=>60,
                    'placeholder'=>'Escribe el correo a donde te escribirán'
                    )); ?>
		<?php echo $form->error($model,'correo'); ?>
	</div>

	<div class="row">
            <h4 class="text-center" >Descripción</h4>
            <?php echo $form->textArea($model,'descripcion',array(
                    'rows'=>6,
                    'cols'=>50,
                    'class'=>'form-control',
                    'placeholder'=>'Escribe una breve descripción tuya'
                )); ?>
            <?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
            <h4 class="text-center" >Titulo</h4>
            <?php echo $form->textField($model,'titulo',array(
                'size'=>60,
                'maxlength'=>60,
                'placeholder'=>'Escribe la profesión en que te desempeñas'
                )); ?>
            <?php echo $form->error($model,'titulo'); ?>
	</div>
        
        <div class="row">
            <h4 class="text-center" >Foto</h4>
            <?php echo $form->fileField($model,'foto'); ?>
            <?php echo $form->error($model,'foto'); ?>
        </div>
             
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <?php echo CHtml::submitButton('Crear',array(
         'class'=>'btn btn-primary btn-edit',
        )); ?>
    </div>
<?php $this->endWidget(); ?>
</div>
</div><!-- form -->
    </div>
  </div>
</div>
