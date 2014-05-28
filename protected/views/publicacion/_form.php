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
    $('#contenido').html($('#contenidoForm').val());
    
    $('#publicacion').click(function(){
        $('#contenidoForm').val($('#contenido').html());
        var titulo= $('#titulo').val();
        var contenido= $('#contenido').html();
        var USUARIO_id= $('#USUARIO_id').val();
        var tags= $('#tags').val();
        
        var ajax_data = {
                "id":"<?php echo $model->id; ?>",
                "titulo":titulo,
                "contenido": contenido,
                "USUARIO_id":USUARIO_id,
                "tags":tags
            };
        $.ajax({  
            async:true,    
            cache:false,   
            url: <?php echo "'".CController::createUrl('publicacion/Actualizar')."'"; ?>,
            data: ajax_data,
            type: "post",
        }).done(function(){
            window.location.href = "<?php echo Yii::app()->createAbsoluteUrl('site/admin')?>";
        });
    });
    
});
</script>

<div class="pad-l-0 form col-sm-10 col-sm-offset-1 col-xs-12" >
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'publicacion-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>
   <div class="row form-group">
        <h4 class="pad-l-0 text-center col-xs-1 ">Titulo</h4>
        <div class="col-xs-9">
		
		<?php echo $form->textField($model,'titulo',
                        array('size'=>50,
                            'maxlength'=>50,
                            'id'=>'titulo',
                            'class'=>'form-control',
                            'placeholder'=>'titulo',
                            
                            )); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>
        </div>

	<div class="row form-group">
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
	
        <div class='editor' contenteditable='true' id="contenido">
        
        </div>
            </div>
	<div class="row form-group">
            <h4 class="pad-l-0 text-center col-xs-1 ">Autor</h4>
            <div class="col-xs-9">
		<?php echo $form->dropDownList($model,'USUARIO_id',CHtml::ListData(Usuario::model()->findAll(),'id','nombre'),array('empty'=>'Selecciona Autor de publicación','id'=>'USUARIO_id')); ?>
		<?php echo $form->error($model,'USUARIO_id'); ?>
	</div>
            </div>

       <div class="pad-l-0 row form-group col-xs-7">
		
		<?php echo $form->textField($model,'tags',
                        array('size'=>50,
                            'maxlength'=>100,
                            'id'=>'tags',
                            'class'=>'form-control',
                            'placeholder'=>'Agrega Etiquetas separadas por punto y coma (;)',
                            
                            )); ?>
		<?php echo $form->error($model,'tags'); ?>
	</div>
        
      <div class="row buttons form-group">
        <div class="btn btn-primary col-xs-offset-6"  id="publicacion">Editar</div>
    </div>
<?php $this->endWidget(); ?>
</div><!-- form -->
</div>