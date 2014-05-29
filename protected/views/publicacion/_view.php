<?php
/* @var $this PublicacionController */
/* @var $data Publicacion */
?>

<div class="view">

    <!--Element-->
<div class="row">    
    <div class="col-sm-10 col-xs-12">
        <h3><?php echo CHtml::encode($data->titulo); ?></h3>
        <h4 class="text-muted" style="font-size: 12px;">Palabras clave: <?php echo implode('</span>', $data->tagLinks); ?></h4>
        
        <span class="text-muted" id="content">
            <?php echo CHtml::encode($data->PlainText)."..."; ?>
        </span>
        <h4>    
            <small class="text-muted">
                <label class="label label-tag"><?php echo CHtml::link('Leer Más', array('view', 'id'=>$data->id));?></label>
                <label class="label label-tag"><?php echo CHtml::link("Comentarios ({$data->cuentaComentarios})",$data->url.'#comentarios'); ?></label>
            </small>
            
        </h4>
         <small class="text-muted">Publicado: <?php echo CHtml::encode($data->fecha); ?></small>
    </div> 
    <div class="col-sm-2 col-xs-0">
        <a href="#" class="pull-right"><img src="<?php echo $this->traerLink($data->USUARIO_id);?>" class="img-circle"></a>
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