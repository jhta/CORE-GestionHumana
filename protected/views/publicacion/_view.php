<?php
/* @var $this PublicacionController */
/* @var $data Publicacion */
?>

<div class="view">

    <!--Element-->
<div class="row">    
    <div class="col-sm-10">
        <h3><?php echo CHtml::link(CHtml::encode($data->titulo), array('view', 'id'=>$data->id)); ?></h3>
        <h4><span class="label label-default">techvisually.com</span></h4><h4>
            <small class="text-muted"><?php echo CHtml::encode($data->fecha); ?>
                <a href="#" class="text-muted">Leer Mas</a>
                <?php echo CHtml::link("Comentarios ({$data->cuentaComentarios})",$data->url.'#comentarios',array('class'=>'text-muted')); ?>
            </small>
        </h4>
    </div>
    <div class="col-sm-2">
        <a href="#" class="pull-right"><img src="http://www.bootply.com/assets/example/bg_sailboat.jpg" class="img-circle"></a>
    </div> 
</div>
<div class="row divider">    
    <div class="col-sm-12"><hr></div>
</div>
<!--End Element--> 

	<!--<b><?php //echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>-->
	<?php //echo CHtml::link(CHtml::encode($data->titulo), array('view', 'id'=>$data->id)); ?>
	
            
	<!--<b><?php //echo CHtml::encode($data->getAttributeLabel('contenido')); ?>:</b>-->
	<?php //echo CHtml::encode($data->contenido); ?>
	
	<!--<b><?php //echo CHtml::encode($data->getAttributeLabel('USUARIO_id')); ?>:</b>-->
	<?php //echo CHtml::encode(Usuario::model()->findByPk($data->USUARIO_id)->nombre); ?>
	
	<!--<b><?php //echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>-->
	<?php //echo CHtml::encode($data->fecha); ?>
	

</div>