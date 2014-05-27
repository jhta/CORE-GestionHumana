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
    $('#tags').val("<?php echo implode(';',$model->TagList)?>");
    $('#conetnido').html('<?php echo $conetindo ?>');
    
    
});
</script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'publicacion-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',
                        array('size'=>50,
                            'maxlength'=>50,
                            'id'=>'titulo',
                            'class'=>'form-control',
                            'placeholder'=>'titulo',
                            
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
                            'style'=>'display: none;'
                            )); ?>
		<?php echo $form->error($model,'contenido'); ?>
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
                            'id'=>'tags',
                            'class'=>'form-control',
                            'placeholder'=>'Agrega Etiquetas separadas por punto y coma (;)',
                            
                            )); ?>
		<?php echo $form->error($model,'tags'); ?>
	</div>
    
	<div class="row buttons">
		<?php echo CHtml::submitButton('Editar', array(
                    'class'=>'btn',
                    'id'=>'publicacion',
                ) ); ?>
	</div>
    <div class='editor' contenteditable='true' id="contenido">
        
    </div>
<?php $this->endWidget(); ?>
</div><!-- form -->