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

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<h4 class="text-center" >Nombre Completo</h4>
		<?php echo $form->textField($model,'nombre',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

        <div class="row">
		<h4 class="text-center" >Nombre de usuaio</h4>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>
        
	<div class="row">
		<h4 class="text-center" >Contraseña</h4>
		<?php echo $form->textField($model,'contrasena',array('size'=>30,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'contrasena'); ?>
	</div>

	<div class="row">
		<h4 class="text-center" >Correo</h4>
		<?php echo $form->textField($model,'correo',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'correo'); ?>
	</div>

	<div class="row">
            <h4 class="text-center" > Descripcion</h4>
            <?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>120)); ?>
            <?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
            <h4 class="text-center" >Titulo</h4>
            <?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>60)); ?>
            <?php echo $form->error($model,'titulo'); ?>
	</div>
        
        <div class="row">
            <h4 class="text-center" >Foto</h4>
            <?php echo $form->fileField($model,'foto'); ?>
            <?php echo $form->error($model,'foto'); ?>
        </div>
              <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

	<div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <?php echo CHtml::submitButton('Crear',array(
             'class'=>'btn btn-primary btn-edit',
            )); ?>
	</div>
        </div>
<?php $this->endWidget(); ?>

</div><!-- form -->
    </div>
  </div>
</div>
