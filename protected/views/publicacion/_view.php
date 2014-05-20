<?php
/* @var $this PublicacionController */
/* @var $data Publicacion */
?>

<div class="view">

    <!--Element-->
<div class="row">    
    <div class="col-sm-10">
        <h3><?php echo CHtml::encode($data->titulo); ?></h3>
        <h4><?php echo implode('</span>', $data->tagLinks); ?></h4>
        
        <span class="text-muted" ><?php echo substr(CHtml::encode($data->contenido) ,0,150)."..."; ?></span>
        <h4>    
            <small class="text-muted">
                <label class="label label-tag"><?php echo CHtml::link('Leer Más', array('view', 'id'=>$data->id));?></label>
                <label class="label label-tag"><?php echo CHtml::link("Comentarios ({$data->cuentaComentarios})",$data->url.'#comentarios'); ?></label>
            </small>
            
        </h4>
         <small class="text-muted">Publicado: <?php echo CHtml::encode($data->fecha); ?></small>
    </div> 
    <div class="col-sm-2">
        <a href="#" class="pull-right"><img src="<?php echo $data->USUARIO_id->nombre_foto.$data->USUARIO_id->formato_foto; ?>" class="img-circle"></a>
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