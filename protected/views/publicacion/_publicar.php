<?php
/* @var $this PublicacionController */
/* @var $model Publicacion */
/* @var $form CActiveForm */
?>
<head>
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/popline/themes/popclip.css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/popline/scripts/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/popline/scripts/jquery.popline.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/popline/scripts/plugins/jquery.popline.backcolor.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/popline/scripts/plugins/jquery.popline.blockformat.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/popline/scripts/plugins/jquery.popline.blockquote.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/popline/scripts/plugins/jquery.popline.decoration.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/popline/scripts/plugins/jquery.popline.justify.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/popline/scripts/plugins/jquery.popline.link.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/popline/scripts/plugins/jquery.popline.list.js"></script>
</head>
<script>
$(document).ready(function(){
    $(".editor").popline();
    
    $('#publicacion').click(function(){
        $('#contenidoForm').val($('#contenido').html());
        var titulo= $('#titulo').val();
        var contenido= $('#contenido').html();
        var USUARIO_id= $('#USUARIO_id').val();
        var tags= $('#tags').val();
        var data= $('#publicacion-form').serialize();
        
        var ajax_data = {
                "titulo":titulo,
                "contenido": contenido,
                "USUARIO_id":USUARIO_id,
                "tags":tags,
                "data":data
            };
        $.ajax({  
            async:true,    
            cache:false,   
            url: <?php echo "'".CController::createUrl('publicacion/crear')."'"; ?>,
            data: ajax_data,
            type: "post",
        });
    });
});
</script>
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
                            'placeholder'=>'titulo',
                            'id'=>'titulo',
                            )); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>
    
        <div class="row">
		<?php echo $form->labelEx($model,'contenido'); ?>
		<?php echo $form->textArea($model,'contenido',
                        array('rows'=>50,
                            'cols'=>50,
                            'class'=>'form-control',
                            'placeholder'=>'Escribe aqui tu contenido',
                            'id'=>'contenidoForm',
                            )); ?>
		<?php echo $form->error($model,'contenido'); ?>
	</div>
    
	<div class="editor row" contenteditable="true" id="contenido">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
        </div>

	<div class="row">
		<?php echo $form->labelEx($model,'USUARIO_id'); ?>
		<?php echo $form->dropDownList($model,'USUARIO_id',CHtml::ListData(Usuario::model()->findAll(),'id','nombre'),array('empty'=>'Selecciona Autor de publicación','id'=>'USUARIO_id')); ?>
		<?php echo $form->error($model,'USUARIO_id'); ?>
	</div>

        <div class="row">
		<?php echo $form->labelEx($model,'tags'); ?>
		<?php echo $form->textField($model,'tags',
                        array('size'=>50,
                            'maxlength'=>100,
                            
                            'class'=>'form-control',
                            'placeholder'=>'Agrega Etiquetas separadas por punto y coma (;)',
                            'id'=>'tags'
                            )); ?>
		<?php echo $form->error($model,'tags'); ?>
	</div>
    
	<div class="row buttons">
            <div class="btn" id="publicacion">Pubiclar</div>
		<?php /*echo CHtml::submitButton($model->isNewRecord ? 'Publicar' : 'Editar' , array(
                    'class'=>'btn',
                    'id'=>'publicacion',
                ) ); */?>
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